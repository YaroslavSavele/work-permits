<?php

require 'vendor/autoload.php';
//$date = date('d.m.Y');
//$phpWord = new \PhpOffice\PhpWord\PhpWord();

//$phpWord->setDefaultFontName('Times New Roman');
//$phpWord->setDefaultFontSize(14);

//$properties = $phpWord->getDocInfo();

//$properties->setCreator('My name');
//$properties->setCompany('My factory');
//$properties->setTitle('My title');
//$properties->setDescription('My description');
//$properties->setCategory('My category');
//$properties->setLastModifiedBy('My name');
//$properties->setCreated(mktime(0, 0, 0, 3, 12, 2014));
//$properties->setModified(mktime(0, 0, 0, 3, 14, 2014));
//$properties->setSubject('My subject');
//$properties->setKeywords('my, key, word');


//$sectionStyle = array(
//    'orientation' => 'landscape',
//    'marginTop' => \PhpOffice\PhpWord\Shared\Converter::pixelToTwip(10),
//    'marginLeft' => 600,
//    'marginRight' => 600,
//    'calsNum' => 1,
//    'pageNumberingStart' => 1,
//    'borderBottomSize' => 100,
//    'borderBottomColor' => 'C0C0C0'

//);
//$section = $phpWord->addSection($sectionStyle);

//$text = 'PHPWord is a library written in pure PHP that provides a set of classes to write to and read from different document file formats.';
//$section->addText(htmlspecialchars($text), 
//            array('name' => 'Arial', 'size' => 36, 'color' => '075776', 'bold' => TRUE, 'italic' => TRUE), 
//            array('align' => 'right', 'spaceBefore' => 10)
//        );
//$text = explode("\n", file_get_contents('text.txt'));
//for ($i = 0; $i < count($text); $i++) {
//    $section->addText($text[$i]);
//    $section->addTextBreak();
//}

//$section->addImage('img.png',
//                    array(
//                        'width'         => 200,
//                        'height'        => 200,
//                        'marginTop'     => -1,
//                        'marginLeft'    => -1,
//                        'wrappingStyle' => 'behind'
//                    )
//);
//$fontStyle = array();
//$listStyle = array('listType' => PhpOffice\PhpWord\Style\ListItem::TYPE_NUMBER);

//$section->addListItem('item 1', 0, $fontStyle, $listStyle);
//$section->addListItem('item 2', 0, $fontStyle, $listStyle);
//$section->addListItem('item 3', 0, $fontStyle, $listStyle);
//$section->addListItem('item 4', 0, $fontStyle, $listStyle);
//$section->addListItem('item 5', 0, $fontStyle, $listStyle);

//$fontStyle = array('name' => 'Arial', 'size' => 48, 'color' => '075776', 'italic' => TRUE);
//$phpWord->addTitleStyle(6, $fontStyle);
//$section->addTitle('Title', 6);

//$objWriter = \PhpOffice\PhpWord\IOFactory::createWriter($phpWord, 'Word2007');
////$objWriter->save("D:\NetworkFolder\Рабочая документация\Наряды\Автоматические\Наряд на опасные работы $date.docx");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Наряды</title>
    <link rel="stylesheet" href="style.css">
</head>
    <body>
        <div class="container">
        <h1 class="title">Создание нарядов-допусков</h1>
        <div class="cards">
            <div class="card danger">
                <h2 class="card__title">Укажите дату открытия наряда-допуска на работы повышенной опасности</h2>
                <form class="card__form" method="post" action="danger.php">
                    <input class="card__input" name="date" type="date" required>
                    <button class="card__btn btn" type="submit"><span>Создать</span><img src="img/наряд2.png" alt="" width="90"></button>
                </form>
            </div>
            <div class="card fire">
                <h2 class="card__title">Укажите дату открытия наряда-допуска на огневые работы</h2>
                <form class="card__form" method="post" action="fire.php">
                    <input class="card__input" name="date" type="date" required>
                    <button class="card__btn btn" type="submit"><span>Создать</span><img src="img/order-fire.png" alt="" width="200"></button>
                </form>
            </div>
        </div>
        </div>
    </body>
</html>