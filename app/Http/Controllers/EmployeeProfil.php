<?php
namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\Input;

class EmployeeProfil extends BaseController
{
    // //
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    public function getDataEmployee($id){
      // $id_pegawai = Request::segment(2);
      // $employeeBioData = DB::table('Pegawai')
      //             -> select('id', 'name', 'gaji_pegawai', 'jenis_kelamin', 'jabatan', 'tanggal_masuk', 'email', 'tanggal_lahir')
      //             ->where('id', $id_pegawai)
      //             ->get();
      $id_pegawai = $id;
     $employeeBioData = DB::table('Pegawai')
                 -> select('id', 'username_pegawai','name', 'gaji_pegawai', 'jenis_kelamin', 'jabatan', 'tanggal_masuk', 'email', 'tanggal_lahir')
                 ->where('id', $id_pegawai)
                 ->get();

     $listPelatihan = DB::table('Pelatihan')
                 -> join('Partisipasi', 'Partisipasi.id_pelatihan', '=', 'Pelatihan.id_pelatihan')
                 -> select('Pelatihan.id_pelatihan', 'nilai_pelatihan', 'nama_trainer', 'waktu_pelaksanaan', 'deskripsi_pelatihan')
                 -> where('Partisipasi.id_pegawai', $id_pegawai)
                 -> get();

     $listProyek = DB::table('Pengerjaan')
               -> join('Proyek', 'Pengerjaan.id_proyek', '=', 'Proyek.id_proyek')
               -> select('Proyek.id_proyek', 'peran', 'waktu_pengerjaan', 'deskripsi_proyek', 'skala_proyek')
               -> where('Pengerjaan.id_pegawai', $id_pegawai)
               -> get();

    //  return response() -> json ([
    //    'employeeBioData' => $employeeBioData,
    //    'listPelatihan' => $listPelatihan,
    //    'listProyek' => $listProyek
    //  ]);
        return view('profil',['employeeBioData' => $employeeBioData, 'listPelatihan' =>  $listPelatihan , 'listProyek' => $listProyek]);
    }

    public function schedule(){
      return view('profilschedule', ['pelatihan' =>
                                  DB::table('Pelatihan')->get()]);
    }
}
