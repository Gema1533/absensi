<?php

namespace App\Http\Controllers;

use App\Models\Kehadiran;
use App\Models\Rayon;
use App\Models\Rombel;
use App\Models\Absen;
use Illuminate\Http\Request;

class KehadiranController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //

        $absens = Absen::latest()->paginate(5);

        return view('kehadiran.index', compact('absens'))
        ->with('i', (request()->input('page', 1)-1)*5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $rombels = Rombel::all();
        $rayons = Rayon::all();
        
        return view('kehadiran.create', compact('rombels', $rombels, 'rayons', $rayons));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'nis' => 'required',
            'nama' => 'required',
            'rombel' => 'required',
            'rayon' => 'required',
            'pembimbing' => 'required',
            'ket' => 'required',
        ]);

        Absen::create($request->all());

        return redirect()->route('kehadiran.index')
                        ->with('success','Berhasil Menyimpan !');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Absen  $absen
     * @return \Illuminate\Http\Response
     */
    public function show(Absen $kehadiran)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Absen  $absen
     * @return \Illuminate\Http\Response
     */
    public function edit(Absen $kehadiran)
    {
        //

        return view('kehadiran.edit', compact('absen'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Absen  $absen
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Absen $kehadiran)
    {
        //

        $request->validate([
            'nis' => 'required',
            'nama' => 'required',
            'rombel' => 'required',
            'rayon' => 'required',
            'pembimbing' => 'required',
            'ket' => 'required',
        ]);

        $kehadiran->update($request->all());

        return redirect()->route('kehadiran.index')
                        ->with('success','Berhasil Update !');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Absen  $absen
     * @return \Illuminate\Http\Response
     */
    public function destroy(Absen $kehadiran)
    {
        //
        $kehadiran->delete();

         return redirect()->route('kehadiran.index')
                        ->with('success','Berhasil Hapus !');
    }
}
