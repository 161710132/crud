<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\datas2;
class Data2Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data2 = datas2::all();
        return view('data2.index',compact('data2'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('data2.create');
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
            'nama_barang' => 'required|unique:data2|max:255',
            'jumlah' => 'required|max:23',
            'harga' => 'required|max:23'
        ]);

        $data2 = new datas2;
        $data2->nama_barang = $request->nama_barang;
        $data2->jumlah = $request->jumlah;
        $data2->harga = $request->harga;
        $data2->save();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data2 = datas2::findOrFail($id);
        return view('data2.show',compact('data2'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data2 = datas2::findOrFail($id);
        return view('data2.edit',compact('data2'));
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
            'nama_barang' => 'required|unique:data2|max:255',
            'jumlah' => 'required|max:23',
            'harga' => 'required|max:23'
        ]);

        // update data berdasarkan id
        $data2 = datas2::findOrFail($id);
        $data2->nama_barang = $request->nama_barang;
        $data2->jumlah = $request->jumlah;
        $data2->harga = $request->harga;
        $data2->save();
        return redirect()->route('data2.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data2 = datas2::findOrFail($id);
        $data2->delete();
        return redirect()->route('data2.index'); 
    }
}
