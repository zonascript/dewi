<?php if ( ! defined('BASEPATH')) exit ('No direct script access allowed');

class pemesanan extends CI_Controller {

public function __construct()
{
	
	parent::__construct();
	$this->load->model('admin/mpemesanan');
	}
	 public function logout ()
    {
      $this->session->sess_destroy();
      redirect ('index/menulogin');
    }
	public function listing()
	{
		$data['pemesanan']=$this->mpemesanan->ambilPesanan();
		$this->load->view('admin/listPemesanan',$data);
	}
	
	// public function tambah()
	// {
	// 	$this->load->view('tukangojek_view/formtukangojek');
	// }
	
	// public function simpan()
	// {
	// 	$config['upload_path'] = './uploads/';
	// 	$config['allowed_types'] = 'gif|jpg|png';
	// 	$config['max_size']	= '2000';
	// 	$config['max_width']  = '1024';
	// 	$config['max_height']  = '768';

	// 	$this->load->library('upload', $config);

	// 	if ($this->upload->do_upload())
	// 	{
	// 	$photo=$_FILES['userfile']['name'];
	// 	}else {
	// 	$photo="";
	// 	}
	// 	$idojek=$this->input->post('idojek');
	// 	$this->mtukangojek->simpanOjek($idojek,$photo);
	// 	redirect('tukangojek/listing');
	// }
		
	public function edit($id)
	{
		
		$data['pemesanan']=$this->mpemesanan->edit_pesanan($id);
		$this->load->view('admin/formpesanan', $data);
	}
	public function simpans()
	{
		
		
		$id=$this->input->post('id');
		$status=$this->input->post('status');
		$this->mpemesanan->simpanedit($id,$status);
		redirect('admin/pemesanan/listing');
	}

	
	// public function proses_edit()
	// {
	// 	$this->load->model('mtukangojek','',TRUE);
	// 	$this->mtukangojek->edit_ojek();
	// 	redirect('tukangojek/index','refresh');
	// }
	
	public function delete($id)
	{
		$this->mpemesanan->deletePemesanan($id);
		redirect('admin/pemesanan/listing');
	}
	
	public function approve($id)
	{
		$this->mpemesanan->approvePemesanan($id);
		$data = $this->mpemesanan->edit_pesanan($id);
		$this->mpemesanan->notif($data->id_user,'Pemesanan anda telah di approve');
		redirect('admin/pemesanan/listing');
	}
	
	public function report()
	{
		$data1=$this->mpemesanan->ambilPesananReport();
		$query = $this->db->get("pemesanan");
		$row = $query->row();
		
		if(!$data1)
				return false;
		// Starting the PHPExcel library
			$this->load->library('PHPExcel');
			$this->load->library('PHPExcel/IOFactory');
			$objPHPExcel = new PHPExcel();
			$objPHPExcel->getProperties()->setTitle("Laporan Pemesanan")->setDescription("none");
			$objPHPExcel->setActiveSheetIndex(0);
            $objPHPExcel->getDefaultStyle()
    		->getNumberFormat()
			->setFormatCode(PHPExcel_Style_NumberFormat::FORMAT_TEXT);
			// Field names in the first row
			$fields = $data1->list_fields();
			//$col = 5;
			//Header Title
			$sheet = $objPHPExcel->getActiveSheet();
			$sheet->setCellValueByColumnAndRow(0, 4, "Laporan Pemesanan");
			//$sheet->setCellValueByColumnAndRow(0, 6, "No");
			$sheet->setCellValueByColumnAndRow(0, 6, "Nama");
			$sheet->setCellValueByColumnAndRow(1, 6, "Tanggal Dipakai");
			$sheet->setCellValueByColumnAndRow(2, 6, "Gedung");
			$sheet->setCellValueByColumnAndRow(3, 6, "Undangan");
			$sheet->setCellValueByColumnAndRow(4, 6, "Salon");
			$sheet->setCellValueByColumnAndRow(5, 6, "Katering");
			$sheet->setCellValueByColumnAndRow(6, 6, "Dekor");
			$sheet->setCellValueByColumnAndRow(7, 6, "Tanggal Bayar Awal");
			$sheet->setCellValueByColumnAndRow(8, 6, "Jumlah Bayar Awal");
			$sheet->setCellValueByColumnAndRow(9, 6, "jumlah Bayar Akhir");
			$sheet->setCellValueByColumnAndRow(10, 6, "Total");
			$sheet->setCellValueByColumnAndRow(11, 6, "Status");
			
			$sheet->setCellValueByColumnAndRow(12, 6, "Jam Dipakai");
			/*$sheet->setCellValue('B', 'jumlah Bayar Akhir');
			$sheet->setCellValue('C7', 'Total');
			$sheet->setCellValue('D7', 'Status');
			$sheet->setCellValue('E7', 'Nomor');
			$sheet->setCellValue('F7', 'Tanggal');
			$sheet->mergeCells('A1:M1');
			$sheet->mergeCells('A2:M2');
			$sheet->mergeCells('A3:M3');
			$sheet->mergeCells('A4:M4');
			$sheet->mergeCells('A5:M5');
			$sheet->mergeCells('A6:A7');
			$sheet->mergeCells('B6:D6');
			$sheet->mergeCells('E6:F6');
			$sheet->mergeCells('G6:G7');
			$sheet->mergeCells('H6:H7');
			$sheet->mergeCells('I6:I7');
			$sheet->mergeCells('J6:J7');
			$sheet->mergeCells('K6:K7');
			$sheet->mergeCells('L6:L7');
			$sheet->mergeCells('M6:M7');
			$sheet->getColumnDimension('D')->setWidth(12);
			$sheet->getColumnDimension('F')->setWidth(12);
			$sheet->getColumnDimension('H')->setWidth(12);
			$sheet->getColumnDimension('I')->setWidth(12);
			$sheet->getColumnDimension('M')->setWidth(12);*/
			
			$style = array(
				'alignment' => array(
					'vertical' => PHPExcel_Style_Alignment::VERTICAL_CENTER,
					'horizontal' => PHPExcel_Style_Alignment::HORIZONTAL_CENTER,
				)
			);

			$sheet->getDefaultStyle()->applyFromArray($style);
			// Isi
			$row = 8;
			foreach($data1->result() as $data)
			{
				$col = 0;
				foreach ($fields as $field)
				{
					$sheet->getCellByColumnAndRow($col, $row)->setValueExplicit($data->$field, PHPExcel_Cell_DataType::TYPE_STRING);
					//$objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow($col, $row, $data->$field);
					$col++;
				}
				$row++;
			}
			$objPHPExcel->setActiveSheetIndex(0);
			$objWriter = IOFactory::createWriter($objPHPExcel, 'Excel5');
			// Sending headers to force the user to download the file
			
			header('Content-Type: application/vnd.ms-excel');
			header('Content-Disposition: attachment;filename="Laporan Pengeluaran Barang Per Dokumen '.date('d-M-y').'.xls"');
			header('Cache-Control: max-age=0');
			$objWriter->save('php://output');
	}
}