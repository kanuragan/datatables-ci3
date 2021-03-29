<?php defined('BASEPATH') OR exit('No direct script access allowed');

class WelcomeSystem extends CI_Model {
    function get_datatables(){
		$site_url = site_url();
        $this->datatables->select("
                    nik,
					nama,
					departement,
					tanggal,
				    keterangan,
					status,
					CONCAT(
						'<a data-uri=','''','#','''',' data-source=','''',MD5(id),'''',' class=','''','btn btn-sm btn-warning edit','''','><span',' class=','''','fa fa-check','''','></span></a> ',
						'<a data-uri=','''','#','''',' data-source=','''',MD5(id),'''',' class=','''','btn btn-sm btn-danger delete','''','><span',' class=','''','fa fa-times','''','></span></a> '
					) AS action,

		");
		$this->datatables->from("cuti_izin");
        if(isset($_POST['status']) AND !empty($_POST['status'])){
            $this->datatables->like('status',$_POST['status']);
        }
        if(isset($_POST['departement']) AND !empty($_POST['departement'])){
            $this->datatables->like('departement',$_POST['departement']);
        }
        if(isset($_POST['nik']) AND !empty($_POST['nik'])){
            $this->datatables->like('nik',$_POST['nik']);
        }
		return $this->datatables->generate();
	}
}