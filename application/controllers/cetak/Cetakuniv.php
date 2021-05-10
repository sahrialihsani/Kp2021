<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class cetakuniv extends CI_Controller {

    function __construct(){
        parent::__construct();
        $this->load->library('pdf');
    }

	function index()
	{
        $pdf = new FPDF('P', 'mm','Letter');

        $pdf->AddPage();

        $pdf->SetFont('Arial','B',16);
        $pdf->Cell(0,7,'Kerjasama dengan Universitas',0,1,'C');
        $pdf->Cell(10,7,'',0,1);

        $pdf->SetFont('Arial','B',10);

        $pdf->Cell(8,6,'No',1,0,'C');
        $pdf->Cell(35,6,'Institusi',1,0,'C');
        $pdf->Cell(60,6,'Nama Kerjasama',1,0,'C');
        $pdf->Cell(20,6,'Status',1,0,'C');
        $pdf->Cell(35,6,'Tanggal Dimulai',1,0,'C');
        $pdf->Cell(35,6,'Tanggal Berakhir',1,1,'C');

        $pdf->SetFont('Arial','',10);
        $universitas = $this->db->query("SELECT tb_kerjasama.id, tb_kerjasama.nama_kerjasama,tb_mitra.institusi, tb_kerjasama.status, tb_kerjasama.file,tb_kerjasama.tgl_mulai,tb_kerjasama.tgl_akhir FROM tb_kerjasama  join tb_mitra on tb_kerjasama.id_mitra=tb_mitra.id  WHERE tb_kerjasama.jenis='Universitas' ORDER BY tb_kerjasama.nama_kerjasama ASC")->result();
        $no=1;
        foreach ($universitas as $data){
            $pdf->Cell(8,6,$no,1,0,'C');
            $pdf->Cell(35,6,$data->institusi,1,0,'C');
            $pdf->Cell(60,6,$data->nama_kerjasama,1,0,'C');
            $pdf->Cell(20,6,$data->status,1,0,'C');
            $pdf->Cell(35,6,date('d F Y', strtotime($data->tgl_mulai)),1,0,'C');
            $pdf->Cell(35,6,date('d F Y', strtotime($data->tgl_akhir)),1,1,'C');
            $no++;
        }
        $pdf->Output();
	}
}