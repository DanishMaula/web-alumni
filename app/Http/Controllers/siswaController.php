<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\siswas;
use App\Models\jenis_kelamin;


class siswaController extends Controller
{
    public function index()
    {
        return view('siswa',  [
            'siswa' => siswas::paginate(10),
            'genders' => jenis_kelamin::all(),
        ]);
    }



    public function store(Request $request)
    {

        $this->validate($request,
        [
        'id_gender'=> 'required|integer',
        'name' => 'required|max:255',
        'tgl_lahir' => 'required|date',
        'nik' => 'required|max:12',
        'jurusan' => 'required|max:3',
        'kelas' => 'required|max:3',
        'angkatan' => 'required|max:3',
        'alamat' => 'required|string|max:255'
        ]
    );
        $siswas = new siswas;
        $siswas->id_gender = $request->id_gender;
        $siswas->name = $request->name;
        $siswas->tgl_lahir = $request->tgl_lahir;
        $siswas->jurusan = $request->jurusan;
        $siswas->nik = $request->nik;
        $siswas->kelas = $request->kelas;
        $siswas->angkatan = $request->angkatan;
        $siswas->alamat = $request->alamat;
        $siswas->save();

        if($siswas){
            return redirect('/siswa')->with([
                'berhasil' => 'Data berhasil disimpan'
            ]);
        }else{
            return redirect('/siswa')->with([
                'error' => 'Data gagal disimpan'
            ]);
        }


    }

     

    public function destroy($id){
        $siswas = siswas::find($id);
        $siswas->delete();

        if($siswas){
            return redirect('/siswa')->with([
                'berhasil' => 'Data berhasil di delete'
            ]);
        }else{
            return redirect('/siswa')->with([
                'error' => 'Data gagal di delete'
            ]);
        }
    }

    public function update(Request $request, $id)
    {
       // find id
       $siswas = siswas::find($id);
       $siswas->id_gender = $request->id_gender;
       $siswas->name = $request->name;
       $siswas->tgl_lahir = $request->tgl_lahir;
       $siswas->jurusan = $request->jurusan;
       $siswas->nik = $request->nik;
       $siswas->kelas = $request->kelas;
       $siswas->angkatan = $request->angkatan;
       $siswas->alamat = $request->alamat;

       $siswas->save();

       if($siswas){
           return redirect('/siswa')->with([
               'berhasil' => 'Data berhasil di update'
           ]);
       }else{
           return redirect('/siswa')->with([
               'error' => 'Data gagal di update'
           ]);
       }
    }
}
