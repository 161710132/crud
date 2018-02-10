<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\datas3;
class Data3Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data3 = datas3::all();
        return view('data3.index',compact('data3'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('data3.create');
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
            'nama_mainan' => 'required|unique:data3|max:255',
            'kode' => 'required|max:23',
            'harga' => 'required|max:23'
        ]);

        $data3 = new datas3;
        $data3->nama_mainan = $request->nama_mainan;
        $data3->kode = $request->kode;
        $data3->harga = $request->harga;
        $data3->save();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data3 = datas3::findOrFail($id);
        return view('data3.show',compact('data3'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data3 = datas3::findOrFail($id);
        return view('data3.edit',compact('data3'));
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
            'nama_mainan' => 'required|unique:data3|max:255',
            'kode' => 'required|max:23',
            'harga' => 'required|max:23'
        ]);

        // update data berdasarkan id
        $data3 = datas3::findOrFail($id);
        $data3->nama_mainan = $request->nama_mainan;
        $data3->kode = $request->kode;
        $data3->harga = $request->harga;
        $data3->save();
        return redirect()->route('data3.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data3 = datas3::findOrFail($id);
        $data3->delete();
        return redirect()->route('data3.index'); 
    }
}
