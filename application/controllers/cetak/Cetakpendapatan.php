<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class cetakpendapatan extends CI_Controller {

    function __construct(){
        parent::__construct();
        $this->load->library('pdf');
    }

	function index()
	{
        $pdf = new FPDF('P', 'mm','Letter');

        $pdf->AddPage();

        $pdf->SetFont('Arial','B',16);
        $pdf->Cell(0,7,'Pendapatan Kerjasama (PKS)',0,1,'C');
        $pdf->Cell(10,7,'',0,1);

        $pdf->SetFont('Arial','B',10);

        $pdf->Cell(8,6,'No',1,0,'C');
        $pdf->Cell(120,6,'Nama Kerjasama',1,0,'C');
        $pdf->Cell(60,6,'Pendapatan',1,1,'C');

        $pdf->SetFont('Arial','',10);
        $pendapatan = $this->db->query("SELECT tb_kerjasama.*, tb_pendapatan.* FROM tb_pendapatan inner join tb_kerjasama on tb_pendapatan.id_kerjasama=tb_kerjasama.id WHERE (DATEDIFF(tb_kerjasama.tgl_akhir,CURRENT_DATE())>=0) AND tb_kerjasama.mou_or_pks='PKS' ORDER BY tb_pendapatan.pendapatan DESC")->result();
        $no=1;
         
	$hasil=$this->db->query("SELECT tb_kerjasama.*, tb_pendapatan.id, tb_pendapatan.pendapatan,tb_pendapatan.id_kerjasama,SUM(tb_pendapatan.pendapatan) AS total FROM tb_pendapatan inner join tb_kerjasama on tb_pendapatan.id_kerjasama=tb_kerjasama.id WHERE tb_kerjasama.mou_or_pks='PKS' ORDER BY tb_pendapatan.pendapatan DESC")->result();
  foreach ($hasil as $tot) { 
               $total= 'Rp '.number_format($tot->total);
         } 
        foreach ($pendapatan as $data){
            $pdf->Cell(8,6,$no,1,0,'C');
            $pdf->Cell(120,6,word_limiter($data->nama_kerjasama,5),1,0,'C');
            $pdf->Cell(60,6,'Rp '.number_format($data->pendapatan),1,1,'C');
            $no++;
        }
        $pdf->Cell(128,6,'Total',1,0,'C');
        $pdf->Cell(60,6,$total,1,1,'C');

        $pdf->Output();
	}
}