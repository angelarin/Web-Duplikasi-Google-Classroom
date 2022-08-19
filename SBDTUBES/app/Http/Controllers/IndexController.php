<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Enrollment;
use App\Models\Kelas;
use App\Models\Post;

class IndexController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($role, $idkelas)
    {
        
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Kelas $kelas)
    {
        $enrollments = Enrollment::all();
        return view('website.create', compact('enrollments','kelas'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Enrollment $enrol)
    {
        Kelas::create([
            'nama_kelas' => $request->nama_kelas,
            'kode_kelas' => $request->kode_kelas,
        ]);
        $temp = kelas::select('id')
            ->where('kode_kelas','=',$request->kode_kelas)
            ->first();
            
        Enrollment::create([
                'id_user' => Auth()->id(),
                'id_kelas' => $temp->id,
                'status' => 'guru',
        ]);
        return redirect('/')->with('message', 'Kelas Berhasil Dibuat');
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
    public function tampil()
    {
        $enrollments = Enrollment::all();
        $kelas = Kelas::all();
        return view('website.index', compact('enrollments', 'kelas'));
    }
    public function gabungkelas(Enrollment $enrollments)
    {
        $enrollments = Enrollment::all();
        return view('website.join', compact('enrollments'));
    }
    public function kelasmasuk(Request $request, Kelas $kelas)
    {
        $test = kelas::where('kode_kelas', '=', $request->kode_kelas)
            ->first();

        if ($request->kode_kelas == null) {
            return redirect('/gabungkelas')->withErrors(['msg' => 'Masukkan kode kelas']);
        } elseif (strlen($request->kode_kelas) != 6) {
            return redirect('/gabungkelas')->withErrors(['msg' => 'Kode berjumlah 6 digit']);
        } elseif (null == $test) {
            return redirect('/gabungkelas')->withErrors(['msg' => 'Kode tidak ditemukan']);
        } else {
            $temp = kelas::select('id')
                ->where('kode_kelas', '=', $request->kode_kelas)
                ->first();
            $test1 = Enrollment::where([
                ['id_kelas', '=', $temp->id],
                ['id_user', '=', auth()->id()]
                ])->first();
            if($test1 == null){
            Enrollment::create([
                'id_user' => Auth()->id(),
                'id_kelas' => $temp->id,
                'status' => 'siswa',
            ]);
            return redirect('/')->with('message', 'Kelas Berhasil Masuk');
            }else{return redirect('/gabungkelas')->withErrors(['msg' => 'Anda telah terdaftar di kelas ini']);}
         }
    }
}
