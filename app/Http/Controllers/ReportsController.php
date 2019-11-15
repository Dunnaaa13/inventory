<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PhpOffice\PhpWord\TemplateProcessor;

class ReportsController extends Controller
{
	    public function word()
	    {
	   		//import the library
	   		$templateProcessor = new TemplateProcessor('./templates/Certificate of Recognition.docx');
	   		//get the 
	   		$templateProcessor->setValue('first_name', 'Juan');
	   		$templateProcessor->setValue('last_name', 'Cruz');
	   		//save file
	   		$templateProcessor->saveAs('Juan Dela Cruz Certificate.docx');
	   		//return file
	   		return response()->download('Juan Dela Cruz Certificate.docx');
	    }
	        public function excel()
	        {
	       		//import library
	       		$spreadsheet = \PhpOffice\PhpSpreadsheet\IOFactory::load('./templates/form138.xlsx');

				$worksheet = $spreadsheet->getActiveSheet();

				$worksheet->getCell('A1')->setValue('Name: Juan Dela Cruz');
				$worksheet->getCell('A2')->setValue('11-8');

				$writer = \PhpOffice\PhpSpreadsheet\IOFactory::createWriter($spreadsheet, 'Xls');
				$writer->save('Form138.xls');
	        }
}
