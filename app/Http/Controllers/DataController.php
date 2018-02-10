<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\datas;
class DataController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = datas::all();
        return view('data.index',compact('data'));

    }
       

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('data.create');
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
            'nama' => 'required|unique:data|max:255',
            'kelas' => 'required|max:23',
            'jurusan' => 'required|max:23'
        ]);

        $data = new datas;
        $data->nama = $request->nama;
        $data->kelas = $request->kelas;
        $data->jurusan = $request->jurusan;
        $data->save();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = datas::findOrFail($id);
        return view('data.show',compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = datas::findOrFail($id);
        return view('data.edit',compact('data'));
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
            'nama' => 'required|unique:data|max:255',
            'kelas' => 'required|max:23',
            'jurusan' => 'required|max:23'
        ]);

        // update data berdasarkan id
        $data = datas::findOrFail($id);
        $data->nama = $request->nama;
        $data->kelas = $request->kelas;
        $data->jurusan = $request->jurusan;
        $data->save();
        return redirect()->route('data.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = datas::findOrFail($id);
        $data->delete();
        return redirect()->route('data.index');  
    }
}
