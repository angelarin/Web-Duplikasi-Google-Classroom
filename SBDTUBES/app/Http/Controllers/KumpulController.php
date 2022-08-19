<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use App\Models\User;
use App\Models\Isipost;
use App\Models\Enrollment;
use App\Models\Kelas;
use App\Models\Jawaban;
use App\Models\Comment;


class KumpulController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        $isiposts  = Isipost::findOrFail($id);
        $roll = Enrollment::all();
        $kelass = Kelas::all();
        $isisi = Isipost::all();
        $komenn = Comment::all();
        return view("siswa.kumpultugas",compact('isiposts','id', 'roll', 'kelass', 'isisi', 'komenn'));
    }
    public function index2($id)
    {
        $isiposts  = Isipost::findOrFail($id);
        $roll = Enrollment::all();
        $kelass = Kelas::all();
        $isisi = Isipost::all();
        $komenn = Comment::all();
        return view("guru.kumpultugas",compact('isiposts','id', 'roll', 'kelass', 'isisi', 'komenn'));
    }
    public function storekomen(Request $request)
    {
        $komens = new Comment;
        $komens->id_user = $request->get('id_user');
        $komens->id_isipost = $request->get('id_isipost');
        $komens->isi_komen = $request->get('commentumum');
        $komens->status_komen = $request->get('status_komen');
        $komens->save();
        return redirect()->back();
    }
    public function storeisian(Request $request)
    {
        $jawabs = new Jawaban;
        $jawabs->id_user = $request->get('id_user');
        $jawabs->id_isipost = $request->get('id_isipost');
        $jawabs->isi_jb = $request->get('jawaban');
        $jawabs->nilai = $request->get('nilai');
        $jawabs->status = $request->get('status');
        $jawabs->save();
        return redirect()->back();
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
        //
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
}
