<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Smalot\PdfParser\Parser;


class UploadFileController extends Controller
{
  
   public function get_texts(Request $request)
   {  
      // Get the uploaded PDF file
   		$file = $request->file('fileToUpload');

      // Get text from the uploaded PDF file
      $pdftext = new Parser();
      $pdf = $pdftext->parseFile($file);
      $text = $pdf->getText();

      // Get the strings between two words from the uploaded PDF file using the get_form _text function.
      $test1 = $this::get_form_text(" ".$text, "BeforeString", "AfterString");
      // Example : $order_id = $this::get_form_text(" ".$text, "Ord er ID :", "To ta l V eh ic le s");
      

      // Display results

      echo '<b>Test 1:</b>'.$test1;
      echo '<br>';
      //Example : echo '<b>Order ID: </b>'.$order_id;
      // echo '<br>';
    }

    //Get text in between the start string and end string from the PDF
   public function get_form_text($string, $start, $end)
   {
     
      $ini = strpos($string, $start );
      if ($ini == 0) return $start .' Not existing.';
      $ini += strlen($start);
      $len = strpos($string, $end, $ini) - $ini;
      return substr($string, $ini, $len);
   }    
}
