<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class cetakmobility extends CI_Controller {

    function __construct(){
        parent::__construct();
        $this->load->library('pdf');
    }

	function index()
	{
        $pdf = new FPDF('P', 'mm','Letter');

        $pdf->AddPage();

        $pdf->SetFont('Arial','B',16);
        $pdf->Cell(0,7,'Daftar Yang Mengikuti Program Mobility',0,1,'C');
        $pdf->Cell(10,7,'',0,1);

        $pdf->SetFont('Arial','B',10);

        $pdf->Cell(8,6,'No',1,0,'C');
        $pdf->Cell(60,6,'Nama',1,0,'C');
        $pdf->Cell(60,6,'Email',1,0,'C');
        $pdf->Cell(60,6,'Status',1,1,'C');

        $pdf->SetFont('Arial','',10);
        $mobility = $this->db->query("SELECT * FROM tb_mobility ORDER BY status ASC")->result();
        $no=1;
        foreach ($mobility as $data){
            $pdf->Cell(8,6,$no,1,0,'C');
            $pdf->Cell(60,6,$data->nama,1,0,'C');
            $pdf->Cell(60,6,$data->email,1,0,'C');
            $pdf->Cell(60,6,$data->status,1,1,'C');
            $no++;
        }
        $pdf->Output();
	}
}