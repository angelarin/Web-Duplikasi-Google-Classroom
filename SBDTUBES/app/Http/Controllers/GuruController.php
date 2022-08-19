<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\account;
use App\Models\User;
use App\Models\Isipost;
use App\Models\Enrollment;
use App\Models\Jawaban;
use App\Models\Kelas;
use Illuminate\Support\Facades\Redirect;

class GuruController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id,Kelas $kelas)
    {
        $enrollments  = Enrollment::findOrFail($id);
        $roll = Enrollment::all();
        $kelass = Kelas::all();
        $isiposts = Isipost::all();
        return view("guru.depan_guru",compact('enrollments','id', 'roll', 'kelass', 'isiposts', 'kelas'));
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
    public function store1(Request $request)
    {
        
        $beritas = new Isipost;
        $beritas->id_author = $request->get('id_author');
        $beritas->id_kelas = $request->get('id_kelas');
        $beritas->judul = $request->get('judul');
        $beritas->isi = $request->get('description');
        $beritas->jenis = $request->get('jenis');
        $beritas->save();
        $isiposts = Isipost::select('id')->latest('created_at')->get();
        $jawabans = Jawaban::where('id_isipost', $isiposts);
        foreach ($jawabans as $jawaban){
            $jawaban = new Jawaban;
            $jawaban->id_user = Kelas::select('id')->where('id_kelas', $isiposts->kelass['id'])->where('status', 'siswa');
            $jawaban->status = 'belum';
        };
        return redirect()->back();

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

    public function tampilanggota($id,Kelas $kelas)
    {
        $enrollments  = Enrollment::findOrFail($id);
        $roll = Enrollment::all();
        $kelas = Kelas::all();
        return view("guru.anggota_guru",compact('enrollments','id', 'roll', 'kelas'));
    }
    public function tampilantugas($id)
    {
        $enrollments  = Enrollment::findOrFail($id);
        $roll = Enrollment::all();
        $kelass = Kelas::all();
        $isiposts = Isipost::all();
        return view("website.classwork",compact('enrollments','id', 'roll', 'kelass', 'isiposts'));
    }
    
    public function resetkode($id,Kelas $kelas)
    {
        $enrollments  = Enrollment::findorfail($id);
        $roll = Enrollment::all();
        

        return view("guru.guru_reset", compact('enrollments','roll', 'kelas', 'id'));
    }
    public function kodereset(Request $request)
    {
        Kelas::where(['id', $request->id])->update(['kode_kelas' => $request->kode_kelas]);
        return Redirect()->back()->withErrors(['message' => 'Kode Berhasil di reset']);
    }
    public function buattugas($id)
    {
        $enrollments = Enrollment::findOrFail($id);
        $roll = Enrollment::all();
        return view("website.buattugas", compact('id', 'enrollments', 'roll'));
    }
}
