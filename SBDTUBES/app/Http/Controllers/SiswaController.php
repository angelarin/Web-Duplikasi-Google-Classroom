<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Isipost;
use App\Models\Enrollment;
use App\Models\Kelas;

class SiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        $enrollments  = Enrollment::findOrFail($id);
        $roll = Enrollment::all();
        $kelass = Kelas::all();
        $isiposts = Isipost::all();
        return view("siswa.depan_siswa",compact('enrollments','id', 'roll', 'kelass', 'isiposts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $beritas = new Isipost;
        $beritas->id_author = $request->get('id_author');
        $beritas->id_kelas = $request->get('id_kelas');
        $beritas->isi = $request->get('description');
        $beritas->jenis = 'berita';
        $beritas->save();
        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
    public function tampilanggota($id)
    {
        $enrollments  = Enrollment::findOrFail($id);
        $roll = Enrollment::all();
        $users = User::all();
        return view("siswa.anggota_siswa",compact('enrollments','id', 'roll'));
    }
    public function tampilantugas($id)
    {
        $enrollments  = Enrollment::findOrFail($id);
        $roll = Enrollment::all();
        $kelass = Kelas::all();
        $isiposts = Isipost::all();
        return view("website.classworksiswa",compact('enrollments','id', 'roll', 'kelass', 'isiposts'));
    }
}
