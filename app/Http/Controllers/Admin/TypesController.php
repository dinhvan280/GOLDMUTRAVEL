<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\LoaiXeRequest;
use App\Models\LoaiXe;
use App\Models\Tuyen;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\DB;
use Mockery\Exception;

class TypesController extends Controller
{
    public function index()
    {
        $listLoai = LoaiXe::orderBy('id', 'ASC')->get();
        return view('backend.types.index', compact('listLoai'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $listLoaiXe = LoaiXe::get();
        return view('backend.types.create', compact('listLoaiXe'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(LoaiXeRequest $request)
    {
        try {
            \DB::beginTransaction();
            $data = [
                'ten_lx' => $request->ten_lx,
                'so_ghe' => $request->so_ghe,
                'gia_ve' => $request->gia_ve
            ];
            LoaiXe::create($data);

            \DB::commit();
            return redirect()->route('types.index');
        } catch (Exception $e) {
            \Log::error($e->getMessage());
            \DB::rollback();

            return redirect()->route('dashboard');
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
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $loaiXe = LoaiXe::find($id);
        return view('backend.types.edit', compact('loaiXe'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(LoaiXeRequest $request, $id)
    {
        $data = [
            'ten_lx' => $request->ten_lx,
            'so_ghe' => $request->so_ghe,
            'gia_ve' => $request->gia_ve
        ];

        $validator = \Validator::make($data, [
            'ten_lx' => 'required|max:255',
        ]);

        if ($validator->fails()) {
            return redirect()
                ->back()
                ->withErrors($validator)
                ->withInput();
        } else {
            $loaiXe = LoaiXe::where('id', $id)->first();
            $loaiXe->ten_lx = $data['ten_lx'];
            $loaiXe->so_ghe = $data['so_ghe'];
            $loaiXe->gia_ve = $data['gia_ve'];
            $loaiXe->save();

            return redirect()->route('types.index');
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
        LoaiXe::find($id)->delete();

        return redirect()->route('types.index');
    }


}
