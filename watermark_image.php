<?php
// Load Fpdi library 
use setasign\Fpdi\Fpdi;
use setasign\Fpdi\PdfReader;
require_once('vendor/autoload.php');
require('fpdf/fpdf.php');
require_once('vendor/setasign/fpdi/src/autoload.php');


if (isset($_POST['submit'])) {
    //echo "<pre>";print_r($_POST);
    //echo "<pre>";print_r($_FILES);die();

    $countfiles = count($_FILES['upload_file']['name']);
 
    // Looping all files
    for($i=0;$i<$countfiles;$i++){
    $filename = $_FILES['upload_file']['name'][$i];
    
    // Upload file
    if(move_uploaded_file($_FILES['upload_file']['tmp_name'][$i],'documents/'.$filename)){
        $Files_pdf = $_FILES["upload_file"]["name"];

        //echo "<pre>";print_r($Files_pdf);die();
    }
        
    }


    // $target_dir = "documents/";
    // $target_file = $target_dir . basename($_FILES["upload_file"]["name"]);
    // $uploadOk = 1;
    // $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
    // // Check if image file is a actual image or fake image
    // if (isset($_POST["submit"])) {
    //     $check = getimagesize($_FILES["upload_file"]["tmp_name"]);
    //     if (move_uploaded_file($_FILES["upload_file"]["tmp_name"], $target_file)) {
    //         $File_pdf = htmlspecialchars(basename($_FILES["upload_file"]["name"]));
    //     } else {
    //         echo "File is not an pdf.";
    //         $uploadOk = 0;
    //         die();
    //     }
    // }
    //$first_button = $_POST['first_button'];

        
        $pdf = new Fpdi();
         $count = count($Files_pdf);
        for($i = 0 ; $i < $count ; $i ++ ){
        foreach($Files_pdf as $File_pdf):
            $file = 'documents/' . $Files_pdf[$i]; 
             //error_reporting(0);
            //echo "<pre>";print_r($file);die();  
        if (file_exists("./" . $file)) {
            $pagecount = $pdf->setSourceFile($file);
        } else {
            die('Source PDF not found!');
        }
            
                
                //Watermark Section Post Start 

                if(!empty($_FILES["wimage"]["name"])) {
                    $target_dir = "images/";
                    $target_file = $target_dir . basename($_FILES["wimage"]["name"]);
                    $uploadOk = 1;
                    $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
                    // Check if image file is a actual image or fake image
                    if (isset($_POST["submit"])) {
                        $check = getimagesize($_FILES["wimage"]["tmp_name"]);
                        if (move_uploaded_file($_FILES["wimage"]["tmp_name"], $target_file)) {
                            $watermark_img = htmlspecialchars(basename($_FILES["wimage"]["name"]));
                            $text_images_watermark = 'images/'.$watermark_img;
                        } else {
                            echo "File is not an image.";
                            $uploadOk = 0;
                            die();
                        }
                    }
                }else{
                    $text_images_watermark = 'images/36wcfnq2j7s41.png';
                }
                $padding_top_botom = $_POST['padding_top_botom']??'0';
                $pages = $_POST['pages']??'0';
                $padding_left_right = $_POST['padding_left_right']??'0';
                $opacity_watermark = $_POST['opacity_watermark']??'0';
                //Header Section Post Start 
                if(!empty($_FILES["upload_logo"]["name"])) {
                    $target_dir = "images/";
                    $target_file = $target_dir . basename($_FILES["upload_logo"]["name"]);
                    $uploadOk = 1;
                    $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
                    // Check if image file is a actual image or fake image
                    if (isset($_POST["submit"])) {
                        $check = getimagesize($_FILES["upload_logo"]["tmp_name"]);
                        if (move_uploaded_file($_FILES["upload_logo"]["tmp_name"], $target_file)) {
                            $File_iss = htmlspecialchars(basename($_FILES["upload_logo"]["name"]));
                            $text_image_header = 'images/'.$File_iss;
                        } else {
                            
                        }
                    }
                }else{
                            //echo 'working'; die();
                            $text_image_header = 'images/codexworld-logo.png';
                }
                $position_header = $_POST['position_header']??'center';
                $front_color_header = $_POST['front_color_header']??'#000000';
                $url_header = $_POST['url_header']??'0';
                $font_header = $_POST['font_header']??'Arial';
                $text_header = $_POST['text_header']??'not';
                $font_size_header = $_POST['font_size_header']??'12';
                //color change to rgb
                $hexdec = $front_color_header;
                list($r, $g, $b) = sscanf($hexdec, "#%02x%02x%02x");
                //$rgb_front_color="$r,$g,$b"; 
                if ($position_header == 'left') {
                    $final_position = 10;
                    $final_text_position = 30;
                } elseif ($position_header == 'center') {
                    $final_position = 100;
                    $final_text_position = 210;
                } elseif ($position_header == 'right') {
                    $final_position = 160;
                    $final_text_position = 350;
                } else {
                    $final_position = 10;
                    $final_text_position = 210;
                }
                // Header Logo souce image 
                //$text_image_header = 'images/' . $File_is;
                //Footer Section Post Start
                $position_footer = $_POST['position_footer']??'center';
                $front_color_footer = $_POST['front_color_footer']??'#000000';
                $outline_color_footer = $_POST['outline_color_footer']??'#ffffff';
                $url_footer = $_POST['url_footer']??'not';
                $font_footer = $_POST['font_footer']??'Arial';
                $text_footer = $_POST['text_footer']??'not';
                $font_size_footer = $_POST['font_size_footer']??'12';
                $hexdec = $front_color_footer;
                list($r, $g, $b) = sscanf($hexdec, "#%02x%02x%02x");
                $hexdec = $outline_color_footer;
                list($r1, $g1, $b1) = sscanf($hexdec, "#%02x%02x%02x");
                if ($position_footer == 'left') {
                    $final_position_footer = 30;
                } elseif ($position_footer == 'center') {
                    $final_position_footer = 200;
                } elseif ($position_footer == 'right') {
                    $final_position_footer = 350;
                } else {
                    $final_position_footer = 200;
                }
                // Image file and watermark config 
                
                // Add All pages To Pdf 
                for ($i = 1; $i <= $pagecount; $i++) {    
                        if ($pages == "first") {
                                //Header Start
                                $tpl = $pdf->importPage($i);
                                $size = $pdf->getTemplateSize($tpl);
                                $pdf->addPage();
                                $pdf->SetFont($font_header, 'B', $font_size_header);
                                $pdf->useTemplate($tpl, 1, 1, $size['width'], $size['height'], TRUE);
                                $pdf->Image($text_image_header, $final_position, 6, 30,0,'',$url_header);
                                $pdf->SetFont($font_header, 'b', $font_size_header);
                                $pdf->SetTextColor($r, $g, $b);
                                $pdf->Cell($final_text_position, 10, $text_header, 10, 0, 'C');
                                $pdf->Ln(20);
                                //Watermark Start
                                $xxx_final = ($size['width'] . $padding_left_right);
                                $yyy_final = ($size['height'] . $padding_top_botom);
                                $pdf->Image($text_images_watermark, $padding_left_right, $padding_top_botom, $opacity_watermark, 0, 'png'); 
                                //Footer Start
                                $pdf->SetFont($font_footer, 'B', $font_size_footer);
                                $pdf->SetY(249);
                                $pdf->SetTextColor($r, $g, $b);
                                $pdf->SetFillColor($r1, $g1, $b1);
                                $pdf->SetFont($font_footer, 'B', $font_size_footer);
                                $pdf->Cell($final_position_footer, 10, $text_footer, 0, 0, 'C',true,$url_footer); 
                                break;
                        } else if ($pages == "last") {
                            //Header Start
                            $tpl = $pdf->importPage($pagecount);
                            $size = $pdf->getTemplateSize($tpl);
                            $pdf->addPage();
                            $pdf->SetFont($font_header, 'B', $font_size_header);
                            $pdf->useTemplate($tpl, 1, 1, $size['width'], $size['height'], TRUE);
                            $pdf->Image($text_image_header, $final_position, 6, 30,0,'',$url_header);
                            $pdf->SetFont($font_header, 'b', $font_size_header);
                            $pdf->SetTextColor($r, $g, $b);
                            $pdf->Cell($final_text_position, 10, $text_header, 10, 0, 'C');
                            $pdf->Ln(20);
                            //Watermark Start
                            $xxx_final = ($size['width'] . $padding_left_right);
                            $yyy_final = ($size['height'] . $padding_top_botom);
                            $pdf->Image($text_images_watermark, $padding_left_right, $padding_top_botom, $opacity_watermark, 0, 'png'); 
                            //Footer Start
                            $pdf->SetFont($font_footer, 'B', $font_size_footer);
                            $pdf->SetY(249);
                            $pdf->SetTextColor($r, $g, $b);
                            $pdf->SetFillColor($r1, $g1, $b1);
                            $pdf->SetFont($font_footer, 'B', $font_size_footer);
                            $pdf->Cell($final_position_footer, 10, $text_footer, 0, 0, 'C',true,$url_footer); 
                            break;
                        } else if ($pages == "even") {
                            if ($i % 2) {
                                //Header Start
                                $tpl = $pdf->importPage($pagecount);
                                $size = $pdf->getTemplateSize($tpl);
                                $pdf->addPage();
                                $pdf->SetFont($font_header, 'B', $font_size_header);
                                $pdf->useTemplate($tpl, 1, 1, $size['width'], $size['height'], TRUE);
                                // Page header
                                $pdf->Image($text_image_header, $final_position, 6, 30,0,'',$url_header);
                                $pdf->SetFont($font_header, 'b', $font_size_header);
                                $pdf->SetTextColor($r, $g, $b);
                                $pdf->Cell($final_text_position, 10, $text_header, 10, 0, 'C');
                                $pdf->Ln(20);  
                                // Watermark Start
                                $xxx_final = ($size['width'] . $padding_left_right);
                                $yyy_final = ($size['height'] . $padding_top_botom);
                                $pdf->Image($text_images_watermark, $padding_left_right, $padding_top_botom, $opacity_watermark, 0, 'png'); 
                                //Footer Start
                                $pdf->SetFont($font_footer, 'B', $font_size_footer);
                                $pdf->SetY(249);
                                $pdf->SetTextColor($r, $g, $b);
                                $pdf->SetFillColor($r1, $g1, $b1);
                                $pdf->SetFont($font_footer, 'B', $font_size_footer);
                                $pdf->Cell($final_position_footer, 10, $text_footer, 0, 0, 'C',true,$url_footer); 
                            }
                        } else if ($pages == "odd") {
                            //echo "working"; die();
                            if ($i % 2 != 0) {
                                //Header Start
                                $tpl = $pdf->importPage($i);
                                $size = $pdf->getTemplateSize($tpl);
                                $pdf->addPage();
                                $pdf->SetFont($font_header, 'B', $font_size_header);
                                $pdf->useTemplate($tpl, 1, 1, $size['width'], $size['height'], TRUE);
                                // Page header
                                $pdf->Image($text_image_header, $final_position, 6, 30,0,'',$url_header);
                                $pdf->SetFont($font_header, 'b', $font_size_header);
                                $pdf->SetTextColor($r, $g, $b);
                                $pdf->Cell($final_text_position, 10, $text_header, 10, 0, 'C');
                                $pdf->Ln(20);   
                                //Watermark Start
                                $xxx_final = ($size['width'] . $padding_left_right);
                                $yyy_final = ($size['height'] . $padding_top_botom);
                                $pdf->Image($text_images_watermark, $padding_left_right, $padding_top_botom, $opacity_watermark, 0, 'png'); 
                                //Footer Start 
                                $pdf->SetFont($font_footer, 'B', $font_size_footer);
                                $pdf->SetY(249);
                                $pdf->SetTextColor($r, $g, $b);
                                $pdf->SetFillColor($r1, $g1, $b1);
                                $pdf->SetFont($font_footer, 'B', $font_size_footer);
                                $pdf->Cell($final_position_footer, 10, $text_footer, 0, 0, 'C',true,$url_footer); 
                            }
                        } else{
                            //Header Start
                            $tpl = $pdf->importPage($i);
                            $size = $pdf->getTemplateSize($tpl);
                            $pdf->addPage();
                            $pdf->SetFont($font_header, 'B', $font_size_header);
                            $pdf->useTemplate($tpl, 1, 1, $size['width'], $size['height'], TRUE);
                            $pdf->Image($text_image_header, $final_position, 6, 30,0,'',$url_header);
                            $pdf->SetFont($font_header, 'b', $font_size_header);
                            $pdf->SetTextColor($r, $g, $b);
                            $pdf->Cell($final_text_position, 10, $text_header, 10, 0, 'C');
                            $pdf->Ln(20);
                            //Watermark Start
                            $xxx_final = ($size['width'] . $padding_left_right);
                            $yyy_final = ($size['height'] . $padding_top_botom);
                            $pdf->Image($text_images_watermark, $padding_left_right, $padding_top_botom, $opacity_watermark, 0, 'png'); 
                            //Footer Start
                            $pdf->SetFont($font_footer, 'B', $font_size_footer);
                            $pdf->SetY(249);
                            $pdf->SetTextColor($r, $g, $b);
                            $pdf->SetFillColor($r1, $g1, $b1);
                            $pdf->SetFont($font_footer, 'B', $font_size_footer);
                            $pdf->Cell($final_position_footer, 10, $text_footer, 0, 0, 'C',true,$url_footer); 

                        }
                }
                //$pdf->Output();
                $pdf->Output('D','new_file.pdf');
                //$pdf->Output('new_file.php','S');
               // $filename="C:Desktop";
                //$pdf->Output('new_file.php','S');
                //$pdf->Output('F','documents/test.pdf');
            endforeach;
        }

        
        
}
