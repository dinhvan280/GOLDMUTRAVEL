<?php

namespace App\Http\Controllers\Admin;

use App\Models\Contact;
use App\Models\DiemDo;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Mockery\Exception;

class StopPointController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $listDiemDo = DiemDo::get();

        return view('backend.stop_point.index', compact('listDiemDo'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.stop_point.create');
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
            \DB::beginTransaction();
            $data = [
                'ten_dd' => $request->ten_dd,
            ];
            DiemDo::create($data);
            \DB::commit();

            return redirect()->route('stop_point.index');
        } catch (Exception $e) {
            \Log::error($e->getMessage());

            return redirect()->back();
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
        $diemDo = DiemDo::where('id', $id)->first();

        return view('backend.stop_point.edit', compact('diemDo'));
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
        try {
        \DB::beginTransaction();
        $diemdo = DiemDo::find($id);
        if(!isset($diemdo)){
            throw new Exception("Not found!");
        }

        $diemdo->ten_dd = $request->ten_dd;
        $diemdo->save();

        \DB::commit();
        return redirect()->route('stop_point.index');
    } catch (Exception $e) {
        \Log::error($e->getMessage());
        \DB::rollback();
        return redirect()->back();
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
        $diemdo = DiemDo::find($id);

        if (empty($diemdo)) {
            return redirect()->back();
        }
        $diemdo->delete();
        return redirect()->back();
    }

    /**
     * @param $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function changeStatus($id)
    {
        $result = Contact::where('id', $id)->first();
        if ($result->status == 1) {
            $contact = Contact::find($id);
            $contact->status = 0;
        } else {
            $contact = Contact::find($id);
            $contact->status = 1;
        }
        $contact->save();

        return redirect()->back();
    }
}
