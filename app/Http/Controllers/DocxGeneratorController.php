<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DocxGeneratorController extends Controller
{
    public function generate_offer(Request $request)
    {
        
        $data=$request->all()['data'];
       
        $info=json_decode($data['info'],true);
         $offers=json_decode($data['offers']);
        $bonus=json_decode($data['bonus']);
        $pw = new \PhpOffice\PhpWord\PhpWord();
        $styleTable = array('borderColor'=>'006699',
              'borderSize'=>6,
              'cellMargin'=>50);
$styleFirstRow = array('bgColor'=>'66BBFF');
$pw->addTableStyle('myTable', $styleTable, $styleFirstRow);

$pw->setDefaultFontName('Tahoma');
$pw->setDefaultFontSize(10);

        $section = $pw->addSection();
        $header = array('size' => 16, 'bold' => true);
       
        $section->addTitle(
            $info['item']
        );
        $section->addTitle("Description");
        $section->addText(
            $info['desc']
        );
        $section->addTitle( "Benefit");
        $section->addText(
           
            $info['benefit']
        );
        $section->addTextBreak(1);
        $section->addText('What Will you get', $header);
        $table = $section->addTable();
        $table->addRow();
        $table->addCell(1750)->addText("offer");
        $table->addCell(1750)->addText("price");
        for ($r = 0; $r < count($offers); $r++) {
            $table->addRow();
            $table->addCell(1750)->addText(array_keys((array) $offers[$r])[0]);
            $table->addCell(1750)->addText(array_values((array) $offers[$r])[0]);
            
        }
        $section->addText("");

        $table2= $section->addTable();
        $table2->addRow();
        $table2->addCell(1750)->addText("bonuses");
        $table2->addCell(1750)->addText("price");
        for ($r = 0; $r < count($offers); $r++) {
            $table2->addRow();
            
            $table2->addCell(1750)->addText(array_keys((array) $offers[$r])[0]);
            $table2->addCell(1750)->addText(array_values((array) $offers[$r])[0]);
            
        }



        $nameTosave=time().".docx";
        $objWriter = \PhpOffice\PhpWord\IOFactory::createWriter($pw, 'Word2007');
        $objWriter->save($nameTosave);
        
        return response()->json(["data"=>$nameTosave]);
        //download path
        // $download_path = storage_path('app/'.$id.'.zip');
//         $filename=$id.'zip';
//    $headers = ['Content-Type: application/zip','Content-Disposition: attachment; filename={$filename}'];
// return response($download_path, 200,$headers);
        // return response()->download([$info,$offers,$bonus]);
    }
}
