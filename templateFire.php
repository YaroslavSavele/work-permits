<?php

require 'vendor/autoload.php';

$date = date('d.m.Y');

$_doc = new \PhpOffice\PhpWord\TemplateProcessor('TemplateFire.docx');

$_doc->setValue('d_date', $date);
$_doc->saveAs();
$phpWord = new \PhpOffice\PhpWord\PhpWord($_doc);
//var_dump($phpWord); die;
$objWriter = \PhpOffice\PhpWord\IOFactory::createWriter($phpWord, 'Word2007');
$objWriter->save('templFire.docx');