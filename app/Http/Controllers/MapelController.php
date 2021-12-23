<?php

namespace App\Http\Controllers;

use App\Models\Mapel;
use Illuminate\Http\Request;

class MapelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $mapels = Mapel::latest()->paginate(5);

        return view('mapels.index', compact('mapels'))
        ->with('i' , (request()->input('page', 1)-1)*5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('mapels.create');
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
            'nama_mapel' => 'required',
            'kelas_mapel' => 'required',
            'guru_mapel' => 'required',
        ]);

        Mapel::create($request->all());

        return redirect()->route('mapels.index')
        ->with('success', 'Berhasil menyimpan!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Mapel  $mapel
     * @return \Illuminate\Http\Response
     */
    public function show(Mapel $mapel)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Mapel  $mapel
     * @return \Illuminate\Http\Response
     */
    public function edit(Mapel $mapel)
    {
        //
        return view('mapels.edit', compact('mapel'));
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Mapel  $mapel
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Mapel $mapel)
    {
        //
        $request->validate([
            'nama_mapel' => 'required',
            'kelas_mapel' => 'required',
            'guru_mapel' => 'required',
        ]);

        $mapel->update($request->all());
        return redirect()->route('mapels.index')
        ->with('success', 'Berhasil update!');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Mapel  $mapel
     * @return \Illuminate\Http\Response
     */
    public function destroy(Mapel $mapel)
    {
        //
        $mapel->delete();

        return redirect()->route('mapels.index')
        ->with('success', 'Berhasil hapus!');


    }
}
