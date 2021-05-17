<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class cetakmobility extends CI_Controller {

    function __construct(){
        parent::__construct();
        $this->load->library('pdf');
    }

	function index()
	{
        $pdf = new FPDF('P', 'mm','A4');

        $pdf->AddPage();

        $pdf->SetFont('Arial','B',14);
        $pdf->Image('assets/dua/img/unib.png',8,10,19);
        $pdf->Cell(190,5,'UPT KERJASAMA DAN LAYANAN INTERNASIONAL',0,1,'C');
        $pdf->SetFont('Arial','B',12);
        $pdf->Cell(190,5,'UNIVERSITAS BENGKULU',0,1,'C');
        $pdf->SetFont('Arial','I',10);
        $pdf->Cell(190,5,'Jl. W.R Supratman Kandang Limun Bengkulu 38371 Sumatera, INDONESIA',0,1,'C');
        $pdf->Cell(190,5,'Telepon: (0736) 21170, 21884, Ext (190), e-mail: international@unib.ac.id',0,1,'C');
        $pdf->Cell(190,1,'','B',1,'L');
        $pdf->Cell(190,1,'','B',0,'L');
        $pdf->Cell(10,7,'',0,1);


        $pdf->SetFont('Arial','',14);
        $pdf->Cell(190,5,'Daftar Peserta Program Mobility',0,1,'C');

        $pdf->Ln(5);
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