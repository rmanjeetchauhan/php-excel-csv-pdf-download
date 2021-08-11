<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Excel_export extends CI_Controller {


	public function __construct(){

		parent::__construct();
		$this->load->model('excel_export_model');
  	}

	
	function index()
	{
		$data["employee_data"] = $this->excel_export_model->fetch_data();
		$this->load->view("employee-data.php", $data);
	}

	function generate_excel()
	{

		
		$this->load->library("excel");
		$object = new PHPExcel();

		$object->setActiveSheetIndex(0);
		$table_columns = array("Name", "Username", "Email", "Phone", "Address", "City");
		$column = 0;

		foreach($table_columns as $field)
		{
			$object->getActiveSheet()->setCellValueByColumnAndRow($column, 1, $field);
			$column++;
		}

		$employee_data = $this->excel_export_model->fetch_data();
		$excel_row = 2;

		foreach($employee_data as $row)
		{
			$object->getActiveSheet()->setCellValueByColumnAndRow(0, $excel_row, $row->name);
			$object->getActiveSheet()->setCellValueByColumnAndRow(1, $excel_row, $row->username);
			$object->getActiveSheet()->setCellValueByColumnAndRow(2, $excel_row, $row->email);
			$object->getActiveSheet()->setCellValueByColumnAndRow(3, $excel_row, $row->phone);
			$object->getActiveSheet()->setCellValueByColumnAndRow(4, $excel_row, $row->address);
			$object->getActiveSheet()->setCellValueByColumnAndRow(5, $excel_row, $row->city);
			$excel_row++;
		}

		$object_writer = PHPExcel_IOFactory::createWriter($object, 'Excel5');
		header('Content-Type: application/vnd.ms-excel');
		header('Content-Disposition: attachment;filename="Employee Data.xls"');
		$object_writer->save('php://output');
	}



	// ----------- for PDF ===============

	public function generate_pdf(){
	   
	    $employee_data = $this->excel_export_model->fetch_data();	
	    $this->load->library('m_pdf');    
	    $mpdf = $this->m_pdf->load(); 
	  	    
	     $employee_info = '
	      <tr> 
	        <th>Name</th>
	        <th>Username</th>
	        <th>Email</th>
	        <th>Phone</th>
	        <th>Address</th>
	        <th>City</th>
	      </tr>';

	      foreach ($employee_data as $employee) {

	        $employee_info .= '<tr> 
	          <td>'.$employee->name.'</td>
	          <td>'.$employee->username.'</td>
	          <td>'.$employee->email.' </td>
	          <td>'.$employee->phone.' </td>
	          <td>'.$employee->address.' </td>
	          <td>'.$employee->city.' </td>
	        </tr>';
	      }


	    $mystr ='
		    <style>
			    .text-right{
			      text-align:right;
			    }

			    table tr th, table tr td {
			      border-bottom: 1px solid #ccc !important;
			      padding: 8px 5px;
			      font-size:12px;
			    }

			    table tr.no-border th, table tr.no-border td {
			      border-bottom : none;
			      font-size:13px;
			      padding: 4px 10px;
			    }
			    .text-left{
			      text-align:left;
			    }

			     table{
			      width:100%;
			      padding-top:50px;
			    }
			    
		    </style> ';

		    $mystr .= '<table >' . $employee_info .'</table>';

		    $mpdf->Bookmark('Start of the document');
		    $mpdf->SetHTMLHeader('<div class="invoiceHeader"> <img style="height:50px; width: 80;" src="'.base_url('assets/images/Koala.jpg').'"/></div>  <div style="font-size: 10px; margin: 8px 0; border-bottom1px solid #ccc;">You have successfully installed XAMPP on this system! Now you can start using Apache, MariaDB, PHP and other components.</div>');
	    
	    
	    $mpdf->WriteHTML($mystr);
	    $filename = time().'_Employee data.pdf';
	    // for view 
	    // $mpdf->Output($filename,"I");

	    // for download
	    $mpdf->Output($filename,"D");
	}

	// download csv


	public function generate_csv(){
		
		$employee_data = $this->excel_export_model->fetch_data();

		$data = "Name,username,Email,Phone,Address,City";
		foreach($employee_data as $employee) {
		  $data .= $employee->name.", ".$employee->username.",".$employee->email.",".$employee->phone.",".$employee->address.",".$employee->city."\n";
		}

		header('Content-Type: application/csv');
		header('Content-Disposition: attachment; filename="filename.csv"');
		echo $data; exit();
	}


	
	
}

















































	