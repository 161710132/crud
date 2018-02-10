<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\datas1;
class Data1Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $data1 = datas1::all();
        return view('data1.index',compact('data1'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('data1.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'jenisSepatu' => 'required|unique:data1|max:255',
            'ukuran' => 'required|max:23',
            'harga' => 'required|max:23'
        ]);

        $data1 = new datas1;
        $data1->jenisSepatu = $request->jenisSepatu;
        $data1->ukuran = $request->ukuran;
        $data1->harga = $request->harga;
        $data1->save();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data1 = datas1::findOrFail($id);
        return view('data1.show',compact('data1'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data1 = datas1::findOrFail($id);
        return view('data1.edit',compact('data1'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
         $this->validate($request,[
            'jenisSepatu' => 'required|unique:data1|max:255',
            'ukuran' => 'required|max:23',
            'harga' => 'required|max:23'
        ]);

        // update data berdasarkan id
        $data1 = datas1::findOrFail($id);
        $data1->jenisSepatu = $request->jenisSepatu;
        $data1->ukuran = $request->ukuran;
        $data1->harga = $request->harga;
        $data1->save();
        return redirect()->route('data1.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data1 = datas1::findOrFail($id);
        $data1->delete();
        return redirect()->route('data1.index'); 
    }
}
