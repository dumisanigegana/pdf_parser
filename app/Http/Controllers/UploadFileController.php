<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\File;
use Smalot\PdfParser\Parser;


class UploadFileController extends Controller
{

  public function index(){
      return view('home');
   }

   public function showUploadFile(Request $request)
   { 
   		$file = $request->file('fileToUpload');

      $pdftext = new Parser();
      $pdf = $pdftext->parseFile($file);
      $text = $pdf->getText();

      $order_id = $this::get_form_text(" ".$text, "Ord er ID :", "To ta l V eh ic le s");

      
      echo '<b>Order ID: </b>'.$order_id;
    }

   public function get_form_text($string, $start, $end)
   {
     
     $ini = strpos($string,$start);
     if ($ini == 0) return "Failled ";
     $ini += strlen($start);     
     $len = strpos($string,$end,$ini) - $ini;
     return substr($string,$ini,$len);
   }    
}
