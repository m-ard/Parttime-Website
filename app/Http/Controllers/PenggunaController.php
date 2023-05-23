<?php

namespace App\Http\Controllers;
use App\Models\Pengguna;
use Illuminate\Http\Request;

class PenggunaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = Pengguna::orderBy('id','desc')->paginate(5);
        return view('users.index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('users.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'id_pengguna' => 'required',
            'nama' => 'required',
            'ttl' => 'required',
            'jenis_kelamin' => 'required',
            'tinggi' => 'required',
            'bb' => 'required',
            'agama' => 'required',
            'kebangsaan' => 'required',
            'status' => 'required',
            'alamat' => 'required',
            'no_hp' => 'required',
            'email' => 'required',
            'password' => 'required',
        ]);
        Pengguna::create($request->post());

        return redirect()->route('users.index')->with('success','Pengguna has been created successfully.');
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Pengguna  $pengguna
     * @return \Illuminate\Http\Response
     */
    public function show(Pengguna $pengguna)
    {
        return view('users.show',compact('pengguna'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Pengguna  $pengguna
     * @return \Illuminate\Http\Response
     */
    public function edit(Pengguna $pengguna)
    {
        return view('users.edit',compact('pengguna'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Pengguna  $pengguna
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Pengguna $pengguna)
    {
        $request->validate([
            'id_pengguna' => 'required',
            'nama' => 'required',
            'ttl' => 'required',
            'jenis_kelamin' => 'required',
            'tinggi' => 'required',
            'bb' => 'required',
            'agama' => 'required',
            'kebangsaan' => 'required',
            'status' => 'required',
            'alamat' => 'required',
            'no_hp' => 'required',
            'email' => 'required',
            'password' => 'required',
        ]);
        
        $pengguna->fill($request->post())->save();

        return redirect()->route('users.index')->with('success','Pengguna Has Been updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Pengguna  $pengguna
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pengguna $pengguna)
    {
        $pengguna->delete();
        return redirect()->route('users.index')->with('success','Pengguna has been deleted successfully');
    }
}
