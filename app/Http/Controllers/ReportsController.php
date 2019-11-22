<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PhpOffice\PhpWord\TemplateProcessor;

class ReportsController extends Controller
{
    public function word()
    {
    	$templateProcessor = new TemplateProcessor('./templates/Certificate of Recognition.docx');
    	$templateProcessor->setValue('first_name', 'Thor');
    	$templateProcessor->setValue('last_name', 'Igop');
    	$templateProcessor->saveAs('Vance.docx');
    	return response()->download('TVance.docx');

    }

    public function excel()
    {
    	$spreadsheet = \PhpOffice\PhpSpreadsheet\IOFactory::load('./templates/form138.xlsx');
		$worksheet = $spreadsheet->getActiveSheet();
		$worksheet->getCell('A7')->setValue('Name: Juan');
		$worksheet->getCell('A8')->setValue('11-B');
		$writer = \PhpOffice\PhpSpreadsheet\IOFactory::createWriter($spreadsheet, 'Xls');
		$writer->save('form138.xls');
		return response()->download('Form138.xls');
    }
}
