<?php
require_once("constants.php");
require_once("functions.php");
require 'vendor/autoload.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Наряд на опасные работы</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    


<?php 
    
if ($_POST["date"] > 0) 
    {
        $date = date('d.m.Y', strtotime($_POST["date"]));
        $date_end = date('d.m.Y', strtotime($_POST["date"] . ' + 14 days'));
?>      
    <div class="container-danger">
        <div class="mid">
            <h1 class="title">Наряд на работы повышенной опасности успешно создан на дату <?= $date; ?></h1> 
            <p class="disclaimer">
                Распечатать наряд можно по адресу: <br>
                D:\NetworkFolder\Рабочая документация\Наряды\Автоматические\Наряд на работы повышенной опасности <?= $date; ?>.docx
            </p>
        <?php
            } else {
            ?>    
                <p class="fail">Введите дату на которую будет оформлятся наряд на работы повышенной опасности</p>
                    
            <?php } ?>
        

            <br>
            <a class="return" href="index.php" class="menu__link">Вернуться к созданию нарядов</a>
        </div>    
    </div>    
</body>
</html>

<?php
$phpWord = new \PhpOffice\PhpWord\PhpWord();

$phpWord->setDefaultFontName('Gotham Pro');
$phpWord->setDefaultFontSize(12);

$properties = $phpWord->getDocInfo();

//===============================================================!!!!!!
$setArray = ARRAY_REINFORCEMENT_METAL_STRUCTURES;
//===============================================================!!!!!!

//$date = date('d.m.Y', strtotime("+1 days"));
//$date = date('d.m.Y');

$company = $setArray['company'];
$superBoss = $setArray['superboss'];
$boss = $setArray['danger_boss'];;
$allowing = $setArray['allowing'];
$ppr = $setArray['ppr'];
$place = $setArray['place'];
$brigada = $setArray['brigada'];
$count  = count($brigada);

const BOTTOM_INDENT = 500;

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


$sectionStyle = array(
    'orientation' => 'portrait',
    'marginTop' => 500,
    'marginLeft' => 600,
    'marginRight' => 600,
    'marginBottom' => 500,
    'calsNum' => 1,
    'pageNumberingStart' => 1,
    

);
$section = $phpWord->createSection($sectionStyle);

$section->addText(htmlspecialchars($company));

$section->addText(htmlspecialchars("Наряд – допуск №____________ от ____________________ "),
                    array('bold' => TRUE),
                    array('align' => 'center', 'spaceAfter' => 10,)
                );                              
$section->addText(htmlspecialchars("на выполнение работ повышенной опасности"),
                    array('bold' => TRUE),
                    array('align' => 'center', 'spaceAfter' => 500)
                );                              
$section->addText("1. Производитель работ",
                    array('bold' => TRUE),
                    array('align' => 'left', 'spaceAfter' => 5)
                );                              
$section->addText("$boss _____________________________________",
                    array('underline' => 'single'),
                    array('align' => 'left', 'spaceAfter' => 5)
                );                              
$section->addText("(предприятие, цех, должность, фамилия, имя, отчество)",
                    array('size'=> 10,),
                    array('align' => 'center', )
                );
$section->addText("2. Допускается к выполнению",
                    array('bold' => TRUE),
                    array('align' => 'left', 'spaceAfter' => 5)
                );
$section->addText("$ppr",
                    array('underline' => 'single'),
                    array('align' => 'left', 'spaceAfter' => 300)
                );                                                                                                            
$lineStyle = array('weight' => 1, 'width' => 530, 'height' => 0, 'color' => 'ffffff', 'spaceAfter' => 5);
$section->addLine($lineStyle);

$section->addText("3. Допускающий (допускающие) к работе",
                    array('bold' => TRUE),
                    array('spaceAfter' => 10)
                );
$section->addText("$allowing _________________________________",
                    array('underline' => 'single'),
                    array('align' => 'left', 'spaceAfter' => 5)
                );

$section->addText("должность, ФИО",
                    array('size'=> 10,),
                    array('align' => 'center', )
                );

$section->addText("4. Мероприятия для обеспечения безопасности работ:",
                    array('bold' => TRUE),
                    array('spaceAfter' => 400)
                );
$textrun = $section->createTextRun(array('align' => 'left', 'spaceAfter' => 5));
$textrun->addText('4.1. Остановить', array('bold'=>true)); 
$textrun->addText('  _______________не требуется_______________________________________',
                    array('underline' => 'single', 'italic'=> true, 'spaceAfter' => 5)
                );
$section->addText("место остановки, положение",
                    array('size'=> 10,),
                    array('align' => 'center', 'spaceAfter' => BOTTOM_INDENT)
                );

$textrun = $section->createTextRun(array('align' => 'left', 'spaceAfter' => 5));
$textrun->addText('4.2. Отключить', array('bold'=>true)); 
$textrun->addText('  _______________не требуется______________________________________',
                    array('underline' => 'single', 'italic'=> true, 'spaceAfter' => 5)
                );                
$section->addText("рубильник, задвижку, магистраль, изъять бирку",
                    array('size'=> 10,),
                    array('align' => 'center', 'spaceAfter' => BOTTOM_INDENT)
                );
$textrun = $section->createTextRun(array('align' => 'left', 'spaceAfter' => 5));
$textrun->addText('4.3. Установить', array('bold'=>true)); 
$textrun->addText('  _______________не требуется______________________________________',
                    array('underline' => 'single', 'italic'=> true, 'spaceAfter' => 5)
                );                
$section->addText("закоротки, тупики, заглушки, сигнальные лампы",
                    array('size'=> 10,),
                    array('align' => 'center', 'spaceAfter' => BOTTOM_INDENT)
                );

$textrun = $section->createTextRun(array('align' => 'left', 'spaceAfter' => 5));
$textrun->addText('4.4 Взять пробу для анализа воздушной среды', array('bold'=>true)); 
$textrun->addText('  _______________не требуется___________________',
                    array('underline' => 'single', 'italic'=> true, 'spaceAfter' => 5)
                );
$section->addText("указать места и результат анализа, группу загазованности",
                    array('size'=> 10,),
                    array('align' => 'center', 'spaceAfter' => BOTTOM_INDENT)
                );

$textrun = $section->createTextRun(array('align' => 'left', 'spaceAfter' => 5));
$textrun->addText('4.5 Оградить', array('bold'=>true)); 
$textrun->addText('  _______зону производства работ вывесить плакаты_____________________',
                    array('underline' => 'single', 'italic'=> true, 'spaceAfter' => 5)
                );                
$section->addText("зону работ, вывесить плакаты",
                    array('size'=> 10,),
                    array('align' => 'center', 'spaceAfter' => BOTTOM_INDENT)
                );

$textrun = $section->createTextRun(array('spaceAfter' => 5));
$textrun->addText('4.6 Предусмотреть меры безопасности при работе на высоте и в колодцах', array('bold'=>true));
$textrun->addText('  _______________', array('underline' => 'single'));
$textrun->addText('  _______________________использовать страховочную систему PS-2_______________________',
                    array('underline' => 'single', 'italic'=> true)
                );                
$section->addText("леса, предохранительные пояса, веревки",
                    array('size'=> 10,),
                    array('align' => 'center', 'spaceAfter' => BOTTOM_INDENT)
                );

$textrun = $section->createTextRun(array('spaceAfter' => 5));
$textrun->addText('4.7 Предупредить обслуживающий персонал', array('bold'=>true));
$textrun->addText('  ___________________________________________________', array('underline' => 'single'));                
$section->addText("машинистов соседних кранов и кранов смежных пролетов с подписью в вахтенном журнале",
                    array('size'=> 10,),
                    array('align' => 'center', 'spaceAfter' => BOTTOM_INDENT)
                );

$textrun = $section->createTextRun(array('spaceAfter' => 5));
$textrun->addText('4.8 Предусмотреть меры безопасности у железнодорожных путей', array('bold'=>true));
$textrun->addText('  ____не требуется______',
                    array('underline' => 'single', 'italic'=> true)
                );                
$section->addText("установка знаков, плакатов, ограждений, тупиков",
                    array('size'=> 10,),
                    array('align' => 'center', 'spaceAfter' => BOTTOM_INDENT)
                );
                
$textrun = $section->createTextRun(array('spaceAfter' => 5));
$textrun->addText('4.9 Указать маршруты к месту работы по пешеходным дорожкам', array('bold'=>true));
$textrun->addText('  _____________________', array('underline' => 'single'));                
$section->addText("при необходимости приложить схему",
                    array('size'=> 10,),
                    array('align' => 'center', 'spaceAfter' => BOTTOM_INDENT)
                );

$textrun = $section->createTextRun(array('spaceAfter' => BOTTOM_INDENT));
$textrun->addText('4.10. Организационные и технические меры безопасности при подготовке объекта к проведению работ:', array('bold'=>true));
$textrun->addText('  ______использовать средства индивидуальной защиты, каски, страховочную систему PS-2, специализированную одежду, ботинки, средства защиты органов зрения, органов дыхания__________________________________________________________________', array('underline' => 'single', 'italic'=> true));
$textrun->addText('  _____________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________', array('underline' => 'single'));                

$textrun = $section->createTextRun(array('spaceAfter' => BOTTOM_INDENT));
$textrun->addText('4.11. Начать работы в: ', array('bold'=>true));
$textrun->addText('  __10____  ', array('underline' => 'single', 'italic'=> true));
$textrun->addText(' час. ', array('bold'=>true));
$textrun->addText('  __00____  ', array('underline' => 'single', 'italic'=> true));
$textrun->addText(' мин. ', array('bold'=>true));                
$textrun->addText("  ____$date ______", array('underline' => 'single', 'italic'=> true)); 

//$date_end = $date->modify('+14 days');

$textrun = $section->createTextRun(array('spaceAfter' => BOTTOM_INDENT));
$textrun->addText('4.12. Закончить работы в: ', array('bold'=>true));
$textrun->addText('  __17____  ', array('underline' => 'single', 'italic'=> true));
$textrun->addText(' час. ', array('bold'=>true));
$textrun->addText('  __00____  ', array('underline' => 'single', 'italic'=> true));
$textrun->addText(' мин. ', array('bold'=>true));                
$textrun->addText("  ____$date_end ______", array('underline' => 'single', 'italic'=> true));
//$section->addPageBreak();

$section->addText("5. Наряд-допуск выдал ",
                    array('bold' => TRUE),
                    array('spaceAfter' => 20)
                );
$section->addText("$superBoss __________________$date",
                    array('underline' => 'single'),
                    array('align' => 'left', 'spaceAfter' => 5)
                );              
$section->addText("должность, фамилия, подпись, дата",
                    array('size'=> 10,),
                    array('align' => 'center', 'spaceAfter' => BOTTOM_INDENT)
                );                

$section->addText("6. Мероприятия выполнил (и): ",
                    array('bold' => TRUE),
                    array('spaceAfter' => 20)
                );
$section->addTextBreak();

$tableStyle = array(
    //'borderColor' => '006699',
    'borderSize'  => 6,
    'cellMargin'  => 40
);
$cellRowSpan = array('vMerge' => 'restart', 'valign' => 'center');
$cellRowContinue = array('vMerge' => 'continue');
$cellColSpan2 = array('gridSpan' => 2, 'valign' => 'center');
$cellColSpan3 = array('gridSpan' => 3, 'valign' => 'center');
       
$cellHCentered = array('align' => 'center');
$cellVCentered = array('valign' => 'center');
$noSpace = array('spaceAfter' => 0);

//$firstRowStyle = array('bgColor' => '66BBFF');
$phpWord->addTableStyle('myTable', $tableStyle);
$table = $section->addTable('myTable');

$table->addRow();
$cell = $table->addCell(4000, $cellVCentered)->addText('Номер мероприятия', null, $cellHCentered);
$cell = $table->addCell(8000, $cellVCentered)->addText('Должность и фамилия ответственного лица', null, $cellHCentered);
$cell = $table->addCell(4000, $cellVCentered)->addText('Подпись ответственного лица', null, $cellHCentered);
$table->addRow();
$cell = $table->addCell(4000, $cellVCentered)->addText('4.5; 4.6; 4.9; 4.10', null, $cellHCentered);
$cell = $table->addCell(8000, $cellVCentered)->addText($boss, null, $cellHCentered);
$cell = $table->addCell(4000, $cellVCentered);
$table->addRow();
$cell = $table->addCell(4000, $cellVCentered)->addText('4.7', null, $cellHCentered);
$cell = $table->addCell(8000, $cellVCentered)->addText($allowing, null, $cellHCentered);
$cell = $table->addCell(4000, $cellVCentered);

$i = 1;
while ($i <= 3) {
$table->addRow();
$cell = $table->addCell(4000, $cellVCentered);
$cell = $table->addCell(8000, $cellVCentered);
$cell = $table->addCell(4000, $cellVCentered);

$i++;
};

$section->addTextBreak();

$section->addText("7. Согласовано: ",
                    array('bold' => TRUE),
                    array('spaceAfter' => 20)
                );
$section->addText("$allowing $date _______________",
                    array('underline' => 'single'),
                    array('align' => 'left', 'spaceAfter' => 5)
                );              
$section->addText("(должность, фамилия, подпись, дата)",
                    array('size'=> 10,),
                    array('align' => 'center', 'spaceAfter' => BOTTOM_INDENT)
                );
$section->addText("8. Мероприятия выполнены, условия промышленной безопасности обеспечены, производителя работ с условием работы ознакомил и проинструктировал, допуск разрешаю - допускающий к работе",
                    array('bold' => TRUE),
                    array('spaceAfter' => 20)
                );

$section->addText("$allowing $date _______________",
                    array('underline' => 'single'),
                    array('align' => 'left', 'spaceAfter' => 5)
                );              
$section->addText("должность, фамилия, подпись, дата",
                    array('size'=> 10,),
                    array('align' => 'center', 'spaceAfter' => BOTTOM_INDENT)
                );

$section->addText("9. С условиями работы ознакомлен и проинструктирован, подготовку проверил, рабочее место принял - производитель работ",
                    array('bold' => TRUE),
                    array('spaceAfter' => 20)
                );                
$section->addText("$boss $date _______________",
                    array('underline' => 'single'),
                    array('align' => 'left', 'spaceAfter' => 5)
                );
$section->addText("должность, фамилия, подпись, дата",
                    array('size'=> 10,),
                    array('align' => 'center', 'spaceAfter' => BOTTOM_INDENT)
                );

//$section->addText("Бригаду (бригады) в количестве ___$count ___человек проинструктировал, к работе приступил $date _________________________________________",
//                    array('bold' => TRUE),
//                    array('spaceAfter' => 20)
//                );
//$section->addText("(дата, время)",
//                    array('size'=> 10,),
//                    array('align' => 'center', 'spaceAfter' => 20)
//                );
//$section->addPageBreak();

$textrun = $section->createTextRun(array('spaceAfter' => BOTTOM_INDENT));
$textrun->addText('10. Инструктаж по охране труда в объеме инструкций', array('bold'=>true));
$textrun->addText('  ____ИОТ 01-2022, ИОТ 04-2022, ИОТ 05-2022, ИОТ 06-2022, ИОТ 036-21_______________________________________________________',
                    array('underline' => 'single', 'italic'=> true)
                );                      


$table = $section->addTable('myTable');
$table->addRow();
$cell = $table->addCell(2000, $cellVCentered)->addText('Дата, время', null, $cellHCentered);
$cell = $table->addCell(6000, $cellVCentered)->addText('Ф.И.О.', null, $cellHCentered);
$cell = $table->addCell(3000, $cellVCentered)->addText('Профессия', null, $cellHCentered);
$cell = $table->addCell(3000, $cellVCentered)->addText('Подпись инструктируемого', null, $cellHCentered);
$cell = $table->addCell(3000, $cellVCentered)->addText('Подпись производителя работ', null, $cellHCentered);

$count = 0;
foreach ($brigada as $employee) {
    ++$count;
    $profession = 'монтажник';
    if ($count <= 2) {
        $profession = 'электросварщик';
    }
    $table->addRow();
$cell = $table->addCell(2000)->addText($date);
$cell = $table->addCell(6000)->addText($employee);
$cell = $table->addCell(3000)->addText($profession, null, $cellHCentered);
$cell = $table->addCell(3000);
$cell = $table->addCell(3000);
}                
$section->addTextBreak();                

$section->addText(htmlspecialchars("11. Продолжение и окончание выполняемого объема работ:"),
                    array('bold' => TRUE),
                    array('align' => 'left', 'spaceAfter' => BOTTOM_INDENT,)
                );         

const WIDTH_CELL = 4000;
$table = $section->addTable('myTable');
$table->addRow();
$cell = $table->addCell(WIDTH_CELL, $cellRowSpan)->addText('Допуск разрешаю, допускающий к работе в смене', null, $cellHCentered);
$cell = $table->addCell(WIDTH_CELL, $cellRowSpan)->addText('Смену принял – производитель работ', null, $cellHCentered);
$cell = $table->addCell(WIDTH_CELL, $cellRowSpan)->addText('Смену сдал - производитель работ', null, $cellHCentered);
$cell = $table->addCell(WIDTH_CELL, $cellRowSpan)->addText('Допуск разрешаю. допускающий к работе в смене', null, $cellHCentered);
$table->addRow();
$cell = $table->addCell(WIDTH_CELL, $cellVCentered)->addText('Должность, фамилия, подпись допускающего к работе, время', null, $cellHCentered);
$cell = $table->addCell(WIDTH_CELL, $cellVCentered)->addText('Должность, фамилия, подпись производителя работ, время', null, $cellHCentered);
$cell = $table->addCell(WIDTH_CELL, $cellVCentered)->addText('Должность, фамилия, подпись производителя работ, время', null, $cellHCentered);
$cell = $table->addCell(WIDTH_CELL, $cellVCentered)->addText('Должность, фамилия, подпись допускающего к работе', null, $cellHCentered);

$i = 1;
while ($i <= 30) {
$table->addRow();
$cell = $table->addCell(WIDTH_CELL, $cellVCentered)->addText('', null, $noSpace);
$cell = $table->addCell(WIDTH_CELL, $cellVCentered)->addText('', null, $noSpace);
$cell = $table->addCell(WIDTH_CELL, $cellVCentered)->addText('', null, $noSpace);
$cell = $table->addCell(WIDTH_CELL, $cellVCentered)->addText('', null, $noSpace);

$i++;
};
$section->addTextBreak();
$section->addText(("Работа окончена__________________________________________________________, рабочее место убрано, "),
                    array('bold' => TRUE),
                    array('spaceAfter' => 5,)
                );
$section->addText("дата, время",
                    array('size'=> 10,),
                    array('align' => 'center',)
                );                
$section->addText(("рабочее место убрано, персонал с места производства работ выведен"), 
                    array('bold' => TRUE),
                    array('spaceAfter' => BOTTOM_INDENT,)
                );



$section->addText("Наряд – допуск сдал: $boss ________________",
                    array('underline' => 'single'),
                    array('align' => 'left', 'spaceAfter' => 5)
                );
$section->addText("должность, фамилия, подпись производителя работ",
                    array('size'=> 10,),
                    array('align' => 'center', 'spaceAfter' => BOTTOM_INDENT)
                );

//$section->addTextBreak();

$section->addText("Наряд – допуск принял: $allowing _____________",
                    array('underline' => 'single'),
                    array('align' => 'left', 'spaceAfter' => 5)
                );
$section->addText("должность, фамилия, подпись допускающего к работе",
                    array('size'=> 10,),
                    array('align' => 'center', 'spaceAfter' => 20)
                );
//$section->addPageBreak();
$objWriter = \PhpOffice\PhpWord\IOFactory::createWriter($phpWord, 'Word2007');
$objWriter->save("D:\NetworkFolder\Рабочая документация\Наряды\Автоматические\Наряд на работы повышенной опасности $place $date.docx");
?>