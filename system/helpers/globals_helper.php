<?php
	if ( ! defined('BASEPATH')) exit('No direct script access allowed');
	/* KEBALIKANNYA STRTOK hehehehe... */
	function strtik($str,$sparator){
		$a = strrev($str);
		$b = strtok($a, $sparator);
		$hasil = strrev($b);
		return $hasil;
	}
	function priv($priv, $name){
		$tambah_checked = '';
		$edit_checked = '';
		$hapus_checked = '';
		$lihat_checked = '';
		if($priv == 15){
			$tambah_checked = "checked";
			$edit_checked = "checked";
			$hapus_checked = "checked";
			$lihat_checked = "checked";
		}elseif($priv == 14){
			$tambah_checked = "checked";
			$edit_checked = "checked";
			$hapus_checked = "checked";
		}elseif($priv == 13){
			$tambah_checked = "checked";
			$edit_checked = "checked";
			$lihat_checked = "checked";
		}elseif($priv == 12){
			$tambah_checked = "checked";
			$edit_checked = "checked";
		}elseif($priv == 11){
			$tambah_checked = "checked";			
			$hapus_checked = "checked";			
			$lihat_checked = "checked";			
		}elseif($priv == 10){
			$tambah_checked = "checked";
			$hapus_checked = "checked";
		}elseif($priv == 9){
			$tambah_checked = "checked";
			$lihat_checked = "checked";
		}elseif($priv == 8){
			$tambah_checked = "checked";
		}elseif($priv == 7){
			$edit_checked = "checked";
			$hapus_checked = "checked";
			$lihat_checked = "checked";
		}elseif($priv == 6){
			$edit_checked = "checked";
			$hapus_checked = "checked";
		}elseif($priv == 5){
			$edit_checked = "checked";
			$lihat_checked = "checked";
		}elseif($priv == 4){
			$edit_checked = "checked";
		}elseif($priv == 3){
			$hapus_checked = "checked";
			$lihat_checked = "checked";
		}elseif($priv == 2){
			$hapus_checked = "checked";
		}elseif($priv == 1){
			$lihat_checked = "checked";
		}
		$obj = '<input type="checkbox" name="'.$name.'_tambah" value="8" '.$tambah_checked.'> Tambah<br />';
		$obj .= '<input type="checkbox" name="'.$name.'_edit" value="4" '.$edit_checked.'> Edit<br />';
		$obj .= '<input type="checkbox" name="'.$name.'_hapus" value="2" '.$hapus_checked.'> Hapus<br />';
		$obj .= '<input type="checkbox" name="'.$name.'_lihat" value="1" '.$lihat_checked.'> Lihat<br />';
		return $obj;
	}
	function hari(){
		$hari2=date("w");
		Switch ($hari2){
			case 0 : $hari="Ahad";
			Break;
			case 1 : $hari="Senin";
			Break;
			case 2 : $hari="Selasa";
			Break;
			case 3 : $hari="Rabu";
			Break;
			case 4 : $hari="Kamis";
			Break;
			case 5 : $hari="Jumat";
			Break;
			case 6 : $hari="Sabtu";
			Break;
		}
		return $hari;
	}
	function tab_menu(){
		/*$armenumhs = array(
			"sesi_menu_krs" => "active",
			"sesi_menu_homepage" => "",
			"sesi_menu_krs" => "",
			"sesi_menu_krs" => ""
		);*/
		//$this->CI =& get_instance();
		//return $this->CI->session->set_userdata('logged_user', $username);
		//return $this->CI->session->set_userdata($armenumhs);
	}
	// Untuk membuat terbilang -> dari angka kehuruf
	function terbilang($x){
	  $abil = array("", "satu", "dua", "tiga", "empat", "lima", "enam", "tujuh", "delapan", "sembilan", "sepuluh", "sebelas");
	  if ($x == false)
	    return false;
	  elseif ($x < 12)
		return " " . $abil[$x];
	  elseif ($x < 20)
		return Terbilang($x - 10) . "belas";
	  elseif ($x < 100)
		return Terbilang($x / 10) . " puluh" . Terbilang($x % 10);
	  elseif ($x < 200)
		return " seratus" . Terbilang($x - 100);
	  elseif ($x < 1000)
		return Terbilang($x / 100) . " ratus" . Terbilang($x % 100);
	  elseif ($x < 2000)
		return " seribu" . Terbilang($x - 1000);
	  elseif ($x < 1000000)
		return Terbilang($x / 1000) . " ribu" . Terbilang($x % 1000);
	  elseif ($x < 1000000000)
		return Terbilang($x / 1000000) . " juta" . Terbilang($x % 1000000);
	}
	
	// Untuk membuat format rupiah
	function rupiah($value){
        $formated = 'Rp '.ereg_replace(',', '.', number_format($value));
        return $formated; 
    }
	
	function next_date($tgl_awal){
		$thn_jadi = substr($tgl_awal,6)+1;
		$tgl_bulan= substr($tgl_awal,0,6);
		return $tgl_bulan.$thn_jadi;	
	}
	function string_bulan($bln){
		switch($bln){
			case "01" :
				$bulan = "Januari";
				break;
			case "02" :
				$bulan = "Febuari";
				break;
			case "03" :
				$bulan = "Maret";
				break;
			case "04" :
				$bulan = "April";
				break;
			case "05" :
				$bulan = "Mei";
				break;
			case "06" :
				$bulan = "Juni";
				break;
			case "07" :
				$bulan = "Juli";
				break;
			case "08" :
				$bulan = "Agustus";
				break;
			case "09" :
				$bulan = "September";
				break;
			case "10" :
				$bulan = "Oktober";
				break;
			case "11" :
				$bulan = "November";
				break;
			default :
				$bulan = "Desember";
		}
		return $bulan;
	}
	function tgl_ingg($tgl_awal){
		$tahun	= substr($tgl_awal,6,4);
		$bulan 	= substr($tgl_awal,3,2);
		$hari	= substr($tgl_awal,0,2);
		$tgl = $tahun."-".$bulan."-".$hari;
		return $tgl;
	}

	function tgl_indo($tgl_awal,$text=0){
		$tahun	= substr($tgl_awal,0,4);
        if($text){
            $bln 	= substr($tgl_awal,5,2);
            switch($bln){
                case "01" :
                    $bulan = "Januari";
                    break;
                case "02" :
                    $bulan = "Febuari";
                    break;
                case "03" :
                    $bulan = "Maret";
                    break;
                case "04" :
                    $bulan = "April";
                    break;
                case "05" :
                    $bulan = "Mei";
                    break;
                case "06" :
                    $bulan = "Juni";
                    break;
                case "07" :
                    $bulan = "Juli";
                    break;
                case "08" :
                    $bulan = "Agustus";
                    break;
                case "09" :
                    $bulan = "September";
                    break;
                case "10" :
                    $bulan = "Oktober";
                    break;
                case "11" :
                    $bulan = "November";
                    break;
				default :
					$bulan = "Desember";
            }
            $hari	= substr($tgl_awal,8,2);
            $tgl    = $hari." ".$bulan." ".$tahun;
            return $tgl;
        }else{
    		$bulan 	= substr($tgl_awal,5,2);
            $hari	= substr($tgl_awal,8,2);
            $tgl = $hari."-".$bulan."-".$tahun;
            return $tgl;
        }
	}
	function inisial($kalimat){
		$inis[0] = '';
		$inis[1] = '';
		$inis[2] = '';
		$inis[3] = '';
		$inis[4] = '';
		$kal  = explode(" ",$kalimat);
		$n = count($kal);
		if($n > 4) $n = 4;
		for($i=0; $i<$n; $i++){
			$inis[$i] = substr($kal[$i],0,1);
		}
		return $inis[0].$inis[1].$inis[2].$inis[3].$inis[4];
	}
	
	function menuju($tujuan,$lama=0){
		echo "<meta http-equiv='refresh' content ='$lama; url=$tujuan'>";
	}
	function img_hapus($hapus=''){
        $gb = "<img id='link' src='".base_url()."images/design/hapus.gif' title='Hapus Data Terpilih' onClick = 'return tanya()' valign=middle>$hapus";
		return $gb;
	}
	function img_detail($detail=''){
		$gb = "<img id='link' src='".base_url()."images/design/detail.gif' title='Tampilkan Data Detail'>$detail";
		return $gb;
	}
	function img_edit($edit=''){
		$gb = "<img id='link' src='".base_url()."images/design/edit.gif' title='Ubah Data Terpilih'>$edit";
		return $gb;
	}
	function img_tambah($tambah=''){
		$gb = "<img id='link' src='".base_url()."images/design/tambah.gif' title='Tambah Data' valign=middle>$tambah";
		return $gb;
	}
	function img_tampil($tampil=''){
		$gb = "<img id='link' src='".base_url()."images/design/tampil.gif' title='Tampilkan Data' valign=middle>$tampil";
		return $gb;
	}
	function img_simpan($simpan=''){
		$gb = "<img id='link' src='".base_url()."images/design/save.gif' title='Simpan Data' valign=middle>$simpan";
		return $gb;
	}
	function img_batal($batal=''){
		$gb = "<img id='link' src='".base_url()."images/design/cancel.gif' title='Batalkan Input Data' valign=middle>$batal";
		return $gb;
	}
	function img_refresh($refresh=''){
		$gb = "<img id='link' src='".base_url()."images/design/refresh.gif' title='Refresh Halaman' valign=middle>$refresh";
		return $gb;
	}
	function img_preview($preview=''){
		$gb = "<img id='link' src='".base_url()."images/design/preview.gif' title='Preview Halaman' valign=middle>$preview";
		return $gb;
	}
	function img_addBook($addBook=''){
		$gb = "<img id='link' src='".base_url()."images/design/addBook.gif' title='Tambahkan ke Daftar Buku' valign=middle>$addBook";
		return $gb;
	}
	function img_remBook($remBook=''){
		$gb = "<img id='link' src='".base_url()."images/design/remBook.gif' title='Hapus dari Daftar Buku' valign=middle>$remBook";
		return $gb;
	}
	function img_print($print=''){
		$gb = "<img id='link' src='".base_url()."images/design/print.gif' title='Cetak Halaman' valign=middle>$print";
		return $gb;
	}
	function img_search($search=''){
		$gb = "<img id='link' src='".base_url()."images/design/search.gif' title='Pencarian Data' valign=middle>$search";
		return $gb;
	}
	function img_check($check=''){
		$gb = "<img id='link' src='".base_url()."images/design/check.gif' title='Pilih Data' align='center' valign=middle>$check";
		return $gb;
	}
	function img_return($return=''){
		$gb = "<img id='link' src='".base_url()."images/design/return.gif' title='Kembalikan Buku' align='center' valign=middle>$return";
		return $gb;
	}
	function img_empty($empty=''){
		$gb = "<img id='link' src='".base_url()."images/design/empty.gif' title='Buku Sedang Dipinjam' align='center' valign=middle>$empty";
		return $gb;
	}
	function img_info($info=''){
		$gb = "<img id='link' src='".base_url()."images/design/info.gif' title='Anda terkena denda,\nkarena terlambat mengembalikan buku.' align='center' valign=middle>$info";
		return $gb;
	}
	function img_denda($denda=''){
		$gb = "<img id='link' src='".base_url()."images/design/denda.gif' title='Input Denda' align='center' valign=middle>$denda";
		return $gb;
	}
	function open_img($path,$name_gb,$id_css,$align='left'){
		$gb = "<img id='$id_css' src='".base_url()."images/".$path."/".$name_gb."' align='$align' class='full'>";
		return $gb;
	}
	
	function hari_esok($hr,$tanggal){
		$sekarang	= strtotime($tanggal);
		$nanti		= $sekarang + (24*$hr) * 60 * 60;
		$besok		= date("Y-m-d", $nanti);
		return $besok;
	}
	
	function selisih_hari(){
		
		return $hasil;
	}
	
	function tab($aktif){
		//for (int $i=0 ;$i<8;$i++;)
		//{		
		//}
		$biodata="1";
		$mahasiswa="2";
		return $biodata.$mahasiswa;
	}
	// UNTUK MENU UTAMA
	function img_buku($buku=''){
		$gb = "<img id='link' src='".base_url()."images/design/buku.gif' title='Data Buku' align='left' valign=middle>$buku";
		return $gb;
	}
	function img_keluar($keluar=''){
		$gb = "<img id='link' src='".base_url()."images/design/keluar.gif' title='Logout' align='left' valign=middle>$keluar";
		return $gb;
	}
	function img_log($log=''){
		$gb = "<img id='link' src='".base_url()."images/design/log.gif' title='Log' align='left' valign=middle>$log";
		return $gb;
	}
	function img_dendo($denda=''){
		$gb = "<img id='link' src='".base_url()."images/design/dendo.gif' title='Denda' align='left' valign=middle>$dendo";
		return $gb;
	}
	function img_backup($backup=''){
		$gb = "<img id='link' src='".base_url()."images/design/backup.gif' title='Backup Data' align='left' valign=middle>$backup";
		return $gb;
	}
	function img_help($help=''){
		$gb = "<img id='link' src='".base_url()."images/design/help.gif' title='Bantuan' align='left' valign=middle>$help";
		return $gb;
	}
	function img_anggota($anggota=''){
		$gb = "<img id='link' src='".base_url()."images/design/anggota.gif' title='Daftar Anggota' align='left' valign='top'>$anggota";
		return $gb;
	}
	// SELESAI MENU UTAMA
?>