<?php

namespace App\Http\Controllers;
use App\Http\Middleware\Authenticate;
use App\Mail\ResetPassword;
use App\Mail\SendMail;
use App\Models\TaiKhoan;
use App\Models\VeChuyen;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use App\Http\Requests\CustomerRequest;
use mysql_xdevapi\Exception;
use Illuminate\Support\Str;

class CustomerController extends Controller
{
    protected $redirectTo = '/user/dat-ve-thanh-cong';

    public function __construct()
    {
        $this->middleware('guest:customer')->except('logout');
    }

    public function guard()
    {
        return Auth::guard('customer');
    }

    public function getLogin()
    {
        return view('frontend.login.login');//return ra trang login để đăng nhập
    }

    public function postLogin(CustomerRequest $request){


            // Nếu dữ liệu hợp lệ sẽ kiểm tra trong csdl
            $email = $request->input('email');
            $password = ($request->input('password'));
            $check = TaiKhoan::where('email', $email)->where('password', $password)->first();
            if($check) {
                // Kiểm tra đúng email và mật khẩu sẽ chuyển trang
                $user = TaiKhoan::where('email', $email)->first();
                Session::put('user', $user);
                $dt = Carbon::now('Asia/Ho_Chi_Minh');
                $listChuyen = DB::table('chuyen')
                    ->join('chuyen_ngay', 'chuyen.id', '=', 'chuyen_ngay.ma_chuyen')
                    ->join('loai_xe', 'chuyen.ma_lx', '=', 'loai_xe.id')
                    ->join('tuyen', 'chuyen.ma_tuyen', '=', 'tuyen.id')
                    ->where('chuyen_ngay.ngay', $dt->toDateString())
                    ->get();
                return redirect()->back();
            } else {
                return back()->with('message', 'Thông tin đăng nhập không chính xác');
            }

    }

    public function postRegister(CustomerRequest $request)
    {
        // Kiểm tra dữ liệu vào
        $allRequest  = $request->all();

        $data = [
            'name' => $request->name,
            'email' => $request->email,
            'address' => $request->address,
            'password' => $request->password,
            'phone' => $request->phone,
            'type' => 'khachhang'
        ];
        $check = TaiKhoan::where('email', $request->email)->first();

        if($check == null)
        {
            try {
                // Dữ liệu vào hợp lệ sẽ thực hiện tạo người dùng dưới csdl
                if( TaiKhoan::create($data)) {
                    // Insert thành công sẽ hiển thị thông báo
                    Session::flash('success', 'Đăng ký thành viên thành công!');
                    return redirect()->route('home');
                } else {
                    // Insert thất bại sẽ hiển thị thông báo lỗi
                    Session::flash('error', 'Đăng ký thành viên thất bại!');
                    return redirect()->route('postRegister.customer');
                }
            } catch (Exception $e){
                return $e;
            }
        } else{
            Session::flash('error', 'Đăng ký thành viên thất bại!');
            return back()->with('message', 'Email đã tồn tại');
        }
    }

    public function changePassword(Request $request)
    {
        // Kiểm tra dữ liệu vào
        $email = $request->email;

        $user = TaiKhoan::where('email', $email)->where('password', $request->password_old)->first();
        if($user)
        {
            try {
                $user->password = $request->password_new;
                $user->save();
                Session::put('user', $user);
                $dt = Carbon::now('Asia/Ho_Chi_Minh');
                $listChuyen = DB::table('chuyen')
                    ->join('chuyen_ngay', 'chuyen.id', '=', 'chuyen_ngay.ma_chuyen')
                    ->join('loai_xe', 'chuyen.ma_lx', '=', 'loai_xe.id')
                    ->join('tuyen', 'chuyen.ma_tuyen', '=', 'tuyen.id')
                    ->where('chuyen_ngay.ngay', $dt->toDateString())
                    ->get();
                return view('frontend.home.index', compact('user', 'listChuyen'));

            } catch (\Exception $e)
            {
                return back()->with('message', 'Đổi mật khẩu không thành công');
            }
        }
    }

    public function getRegister(){
        return view('frontend.login.register');
    }

    public function forgotPassword(){
        return view('frontend.login.forgot');
    }

    public function setNewPassword(Request $request){
        $email = $request->email;
        $password = Str::random(15);
        $user = TaiKhoan::where('email', $email)->first();
        $user->password = $password;
        $user->save();
        Mail::to($email)->send(new ResetPassword($user));
        return view('frontend.login.new_password', compact('user'));
    }

    public function getLogout() {
        Session::forget('user');
        return redirect()->route('home');
    }

    public function updateProfile(Request $request)
    {
        $id = $request->user_id;
        $data = [
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone
        ];

        TaiKhoan::find($id)->update($data);
        $user = TaiKhoan::find($id);
        Session::put('user', $user);
        return view('frontend.customers.profile');
    }

    public function updatePassword(Request $request)
    {
        $user = TaiKhoan::find($request->id);
        if($user->password == $request->password && $request->password1 == $request->password2)
        {
            $user->password = $request->password1;
            $user->save();
            return redirect()->back();
        } else {
            return view('frontend.customers.change_password');
        }
    }


}
