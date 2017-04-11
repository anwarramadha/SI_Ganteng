<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EmployeeProfil extends Controller
{
    // //
    public function getDataEmployee(){
      // $id_pegawai = Request::segment(2);
      // $employeeBioData = DB::table('Pegawai')
      //             -> select('id', 'name', 'gaji_pegawai', 'jenis_kelamin', 'jabatan', 'tanggal_masuk', 'email', 'tanggal_lahir')
      //             ->where('id', $id_pegawai)
      //             ->get();

        return view('profil');
    }
}
