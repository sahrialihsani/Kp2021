<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class cetakpendapatan extends CI_Controller {

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
        $pdf->Cell(0,7,'Pendapatan Kerjasama (PKS)',0,1,'C');
        $pdf->Cell(10,7,'',0,1);

        $pdf->SetFont('Arial','B',10);

        $pdf->Cell(8,6,'No',1,0,'C');
        $pdf->Cell(120,6,'Nama Kerjasama',1,0,'C');
        $pdf->Cell(60,6,'Pendapatan',1,1,'C');

        $pdf->SetFont('Arial','',10);
        $pendapatan = $this->db->query("SELECT tb_kerjasama.*, tb_pendapatan.* FROM tb_pendapatan inner join tb_kerjasama on tb_pendapatan.id_kerjasama=tb_kerjasama.id WHERE (DATEDIFF(tb_kerjasama.tgl_akhir,CURRENT_DATE())>=0) AND tb_kerjasama.mou_or_pks='PKS' AND tb_kerjasama.status='Aktif' ORDER BY tb_pendapatan.pendapatan DESC")->result();
        $no=1;
         
	$hasil=$this->db->query("SELECT tb_kerjasama.*, tb_pendapatan.id, tb_pendapatan.pendapatan,tb_pendapatan.id_kerjasama,SUM(tb_pendapatan.pendapatan) AS total FROM tb_pendapatan inner join tb_kerjasama on tb_pendapatan.id_kerjasama=tb_kerjasama.id WHERE (DATEDIFF(tb_kerjasama.tgl_akhir,CURRENT_DATE())>=0) AND tb_kerjasama.mou_or_pks='PKS' AND tb_kerjasama.status='Aktif' ORDER BY tb_pendapatan.pendapatan DESC")->result();
  foreach ($hasil as $tot) { 
               $total= 'Rp '.number_format($tot->total);
         } 
        foreach ($pendapatan as $data){
            $pdf->Cell(8,6,$no,1,0,'C');
            $pdf->Cell(120,6,word_limiter($data->nama_kerjasama,5),1,0,'C');
            $pdf->Cell(60,6,'Rp '.number_format($data->pendapatan),1,1,'C');
            $no++;
        }
        $pdf->Cell(128,6,'Total Pendapatan',1,0,'C');
        $pdf->Cell(60,6,$total,1,1,'C');

        $pdf->Output();
	}
}