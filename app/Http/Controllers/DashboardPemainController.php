<?php

namespace App\Http\Controllers;

use App\Models\Pemain;
use App\Models\Posisi;
use Illuminate\Http\Request;
use illuminate\Support\Str;

class DashboardPemainController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.pemain.index', [
            'pemain'=> Pemain::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.pemain.create', [
            'posisis'=> Posisi::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nama_pemain' => 'required|max:255',
            'asal_pemain' => 'required',
            'no_punggung' => 'required',
            'posisi_id' => 'required',
            'ket_pemain' => 'required',
        ]);

        $validatedData['excerpt'] = Str::limit(strip_tags($request->ket_pemain), 100);

        Pemain::create($validatedData);

        return redirect('/dashboard/pemain')->with('sukses', 'Pemain Baru Berhasil Ditambahkan !');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Pemain $pemain)
    {
        return view('dashboard.pemain.show', [
            'pemain'=> $pemain
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Pemain $pemain)
    {
        return view('dashboard.pemain.edit', [
            'pemain'=> $pemain,
            'posisis'=> Posisi::all()
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Pemain $pemain)
    {
        $rules = [
            'nama_pemain' => 'required|max:255',
            'asal_pemain' => 'required',
            'posisi_id' => 'required',
            'ket_pemain' => 'required',
        ];

        if($request->no_punggung != $pemain->no_punggung){
            $rules['no_punggung']='required:pemains';
        }
        $validatedData = $request->validate($rules);

        $validatedData['asal_pemain'] = Str::limit(strip_tags($request->ket_pemain), 100);

        Pemain::where('id', $pemain->id)
            ->update($validatedData);
        
            return redirect('dashboard/pemain')->with('sukses', 'Pemain Baru Berhasil Di Update !');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pemain $pemain)
    {
        Pemain::destroy($pemain->id);

        return redirect('/dashboard/pemain')->with('sukses', 'Data Pemain Berhasil Dihapus!!');
    }
}
