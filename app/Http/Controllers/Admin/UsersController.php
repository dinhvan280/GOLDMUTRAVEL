<?php

namespace App\Http\Controllers\Admin;

use App\Exports\CustomersExport;
use App\Models\TaiKhoan;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Foundation\Auth\AuthenticatesUser;
use Illuminate\Support\Facades\Auth;
use Maatwebsite\Excel\Facades\Excel;

class UsersController extends Controller
{

    public function __construct()
    {
        header('Content-Type: application/json');
    }

    public function index()
    {
        $listUser= User::where('type', 'quantri')->orwhere('type', 'nhanvien')->get();
        return view('backend.users.index', compact('listUser'));
    }

    public function profile(Request $request)
    {
        return view('backend.profile');
    }

    public function updateProfile(Request $request)
    {
        $rules = [
            'name' => 'required|max:255',
            'username' => 'required|max:255',
            'password' => 'required|min:8',
        ];
        $validator = \Validator::make($request->all(), $rules);

        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }
        $data = [
            'name' => $request->name,
            'password' => bcrypt($request->password),
            'email' => $request->email,
            'phone' => $request->phone,
        ];

        $result = User::where('id', Auth::user()->id)->update($data);
        if ($result) {
            return redirect()->route('User.getProfile');
        }
    }

    public function changeStatusUser($id)
    {
        $tmp = User::where('id', $id)->first();

        if ($tmp->status) {
            $result = User::where('id', $id)->update(['status' => 0]);
        } else {
            $result = User::where('id', $id)->update(['status' => 1]);
        }

        if ($result) {
            return redirect()->route('User.index');
        }
    }

    public function changePassword(Request $request)
    {
        $user = User::find(Auth::user()->id);
        $user->password = password_hash($request->password, PASSWORD_DEFAULT);
        $result = $user->save();

        if ($result) {
            return redirect()->back();
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.users.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        try {
            $data = [
                'name' => $request->name,
                'email' => $request->email,
                'type' => $request->type,
                'password' => bcrypt($request->password),
                'address' => $request->address,
                'phone' => $request->phone,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ];
            var_dump($data);
            User::create($data);
            if($request->type == 'khachhang')
            {
                return redirect()->route('users.listCustomer');
            }
            return redirect()->route('users.listAdmin');
        } catch (\Exception $e) {
            \Log::error($e->getMessage());
            \DB::rollback();
        }

    }


    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user = User::where('id', $id)->first();

        return view('backend.users.edit', compact('user'));
    }

    public function showAdmin()
    {
        $listUser = User::where('type', 'quantri')->orwhere('type', 'nhanvien')->get();
        return view('backend.users.index', compact('listUser'));
    }

    public function showCustomer()
    {
        $listUser = TaiKhoan::all();
        return view('backend.users.customers', compact('listUser'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = User::where('id', $id)->first();

        return view('backend.users.edit', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $rules = [
            'name' => 'required|max:255',
            'password' => 'required|min:8',
        ];
        $validator = \Validator::make($request->all(), $rules);

        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }
        $data = [
            'name' => $request->name,
            'password' => bcrypt($request->password),
            'email' => $request->email,
            'phone' => $request->phone,
            'address' => $request->address,
            'updated_at' => Carbon::now()
        ];
        $result = User::where('id', $id)->update($data);
        if ($result) {
            return redirect()->route('users.index');
        } else {
            return redirect()->route('users.show', $id);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = User::where('id', $id)->delete();

        return redirect()->route('users.index');
    }

    public function export()
    {
        $file = Excel::download(new CustomersExport(), 'customers_report.xlsx');
        return $file;
    }

}
