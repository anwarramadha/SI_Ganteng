<?php

namespace App\Http\Controllers;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Support\Facades\DB;
use Log;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\Auth;


class EmployeeList extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function __construct (){

    }

    public function getEmployeesData() {

        if(Auth::check()) {

            if (Auth::user()->role == 'msdm') {
                $employees = DB::table('Pegawai')
                            -> select('Pegawai.id', 'name', 'gaji_pegawai',
                            'jenis_kelamin', 'jabatan', 'tanggal_masuk', 'email', 'tanggal_lahir')->get();

                $android_employees = array();

                $ios_employees = array();

                $web_employees = array();


                foreach ($employees as $employee) {
                    switch ($employee->jabatan) {
                        case 'Android Developer':
                            array_push($android_employees, $employee);
                            break;
                        case 'IOS Developer' :
                            array_push($ios_employees, $employee);
                            break;
                        case 'Web Developer' :
                            array_push($web_employees, $employee);
                            break;
                    }
                }

                $employees_score = DB::table('Pegawai')
                                            -> join('Partisipasi', 'Pegawai.id', '=', 'Partisipasi.id_pegawai')
                                            -> select('Pegawai.id', 'nilai_pelatihan')->get();

                $employees_project_count = DB::table('Pengerjaan')
                                            ->select('id_pegawai', DB::raw('count(id_pegawai) as project_count'))
                                            ->groupBy('id_pegawai')
                                            ->get();



                return view('employelist', ['android_dev' => $android_employees,
                                            'IOS_dev' => $ios_employees,
                                            'web_dev' => $web_employees,
                                            'employees_score' => $employees_score,
                                            'employees_project_count' => $employees_project_count]);
            }
            else return redirect('profil');
        }

        else return redirect('login');
    }


    public function getEmployeeData() {
    	$id_pegawai = Request::segment(2);
    	$employeeBioData = DB::table('Pegawai')
    							-> select('id', 'name', 'gaji_pegawai', 'jenis_kelamin', 'jabatan', 'tanggal_masuk', 'email', 'tanggal_lahir')
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

    	return response() -> json ([
    		'employeeBioData' => $employeeBioData,
    		'listPelatihan' => $listPelatihan,
    		'listProyek' => $listProyek
    	]);
    }

    public function updateEmployeeScore() {
    	$id_pegawai = $request->id_pegawai;
    	$id_pelatihan = $request->id_pelatihan;
    	$score = $request->score;

    	DB::table('partisipasi')
    		->whereColumn(['id_pegawai', '=',$id_pegawai],
    						['id_pelatihan','=', $id_pelatihan])
    		->update('nilai_pelatihan', $score);
    }



		public function addtrainingpage(){
			return view('training');
		}

		public function addtraining(Request $request){

			Log::info($request->nama_trainer);
			$nama_trainer = $request->nama_trainer;
			$waktu_pelaksanaan = $request->training_date;
			$deskripsi_pelatihan = $request ->deskripsi;
			$jabatan = $request->pegawai;
			$id_pelatihan = DB::table('pelatihan')->insertGetId(
				['nama_trainer' => $nama_trainer,'waktu_pelaksanaan' => $waktu_pelaksanaan,'deskripsi_pelatihan' => $deskripsi_pelatihan]
			);

			if($jabatan == 'web' or $jabatan == 'all'){
				$allPegawaiWebId = DB::table('pegawai')
														->select('id')
														->where('jabatan','Web Developer')
														->get();
				foreach ($allPegawaiWebId as $pegawaiWebId) {
					$id_pegawai = $pegawaiWebId->id;
					$ret = DB::table('partisipasi') -> insert(
							['id_pegawai' => $id_pegawai , 'id_pelatihan' => $id_pelatihan ,'keterangan' => $deskripsi_pelatihan, 'nilai_pelatihan' => -1]
						);
				}
			}

			if($jabatan == 'mobile' or $jabatan == 'all'){
				$allPegawaiWebId = DB::table('pegawai')
														->select('id')
														->where('jabatan','Android Developer')
														->get();
				foreach ($allPegawaiWebId as $pegawaiWebId) {
					$id_pegawai = $pegawaiWebId->id;
					$ret = DB::table('partisipasi') -> insert(
							['id_pegawai' => $id_pegawai , 'id_pelatihan' => $id_pelatihan ,'keterangan' => $deskripsi_pelatihan, 'nilai_pelatihan' => -1]
						);
				}
			}

			if($jabatan == 'ios' or $jabatan == 'all'){
				$allPegawaiWebId = DB::table('pegawai')
														->select('id')
														->where('jabatan','IOS Developer')
														->get();
				foreach ($allPegawaiWebId as $pegawaiWebId) {
					$id_pegawai = $pegawaiWebId->id;
					$ret = DB::table('partisipasi') -> insert(
							['id_pegawai' => $id_pegawai , 'id_pelatihan' => $id_pelatihan ,'keterangan' => $deskripsi_pelatihan, 'nilai_pelatihan' => -1]
						);
				}
			}

			return redirect('schedule');
		}

	public function showSchedule(){
        if (Auth::check()) {
            return view('schedule', ['pelatihan' =>
                        DB::table('Pelatihan')->get()]);
        }
	}

}
