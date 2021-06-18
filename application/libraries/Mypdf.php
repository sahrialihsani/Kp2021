<?php

defined('BASEPATH') or exit('No direct script access allowed');

require_once('application/libraries/dompdf/autoload.inc.php');
ini_set('memory_limit','500M');
use Dompdf\Dompdf;

class Mypdf
{
	protected $ci;

	public function __construct()
	{
		$this->ci = &get_instance();
	}

	public function generate($view, $data = array(), $filename = 'Laporan', $paper = 'A4', $orientation = 'Potrait')
	{
	    set_time_limit(100);
		$dompdf = new Dompdf();
		$html = $this->ci->load->view($view, $data, TRUE);
		$dompdf->loadHtml($html);
		$dompdf->setPaper($paper, $orientation);
		// Render the HTML as PDF
		$dompdf->render();
		$dompdf->stream($filename . ".pdf", array("Attachment" => FALSE));
	}
}

/* End of file Mypdf.php */
/* Location: ./application/libraries/Mypdf.php */
