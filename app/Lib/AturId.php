<?php
namespace App\Lib;
use DB;
class AturId {
	
	
 public static function Atur($id,$table,$karakter,$angka_awal,$angka_akhir){
		$get_jum = DB::table($table)
				->select($id)
				->where($id,'LIKE',$karakter.'%')
				->max($id);
		$substr = (int) substr($get_jum, $angka_awal,$angka_akhir);
		$kode = $substr + 1;
		$newkode = $karakter.sprintf("%0".$angka_akhir."s", $kode);
		return $newkode;	
	}	
}

