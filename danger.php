<?php
require_once("constants.php");
require 'vendor/autoload.php';


$phpWord = new \PhpOffice\PhpWord\PhpWord();

$phpWord->setDefaultFontName('Times New Roman');
$phpWord->setDefaultFontSize(14);

$properties = $phpWord->getDocInfo();

$setArray = ARRAY_STOCK_DEPARTAMENT;

$date = date('d.m.Y');
$company = $setArray['company'];
$boss = PIROGOV;
$allowing = $setArray['allowing'];
$ppr = $setArray['ppr'];
$place = $setArray['place'];
$brigada = $setArray['brigada'];
$count  = count($brigada);

if ($company === EL_6) {
    $superBoss = KOSHEEV;
} else {
    $superBoss = IVANOV;
}
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

$section->addText(htmlspecialchars("Приложение А"),
                    array('bold' => TRUE),
                    array('align' => 'right', 'spaceAfter' => 5,)
                );
$section->addText('(обязательное)',
                    array('size'=> 10,),
                    array('align' => 'right', 'spaceBefore' => 5,)
                );
$section->addText(htmlspecialchars($company));


$section->addText(htmlspecialchars("Наряд – допуск №_______ "),
                    array('bold' => TRUE),
                    array('align' => 'center', 'spaceAfter' => 10,)
                );                              
$section->addText(htmlspecialchars("на выполнение работ повышенной опасности"),
                    array(),
                    array('align' => 'center', 'spaceAfter' => 500)
                );                              
$section->addText("1. Производитель работ $boss",
                    array('underline' => 'single'),
                    array('align' => 'left', 'spaceAfter' => 5)
                );                              
$section->addText("(предприятие, цех, должность, фамилия, имя, отчество)",
                    array('size'=> 10,),
                    array('align' => 'center', )
                );
$section->addText("2. Допускается к выполнению работ: $ppr",
                    array(),
                    array('align' => 'left', 'spaceAfter' => 5)
                );                                              
$lineStyle = array('weight' => 1.5, 'width' => 530, 'height' => 0, 'color' => 'ffffff', 'spaceAfter' => 5);
$section->addLine($lineStyle);

$section->addText("3. Допускающий (допускающие) к работе",
                    array('bold' => TRUE),
                    array('spaceAfter' => 10)
                );
$section->addText($allowing,
                    array(),
                    array('align' => 'left', 'spaceAfter' => 5)
                );
$section->addLine($lineStyle);

$section->addText("4. Мероприятия для обеспечения безопасности работ:",
                    array('bold' => TRUE),
                    array('spaceAfter' => 20)
                );
$section->addText("4.1. Остановить ________не требуется___________________",
                    array('underline' => 'single'),
                    array('align' => 'left', 'spaceAfter' => 5)
                );
$section->addText("(место остановки, положение)",
                    array('size'=> 10,),
                    array('align' => 'center', 'spaceAfter' => 10)
                );
$section->addText("4.2. Отключить ________не требуется_____________________",
                    array('underline' => 'single'),
                    array('align' => 'left', 'spaceAfter' => 5)
                );
$section->addText("(рубильник, задвижку, магистраль, изъять бирку)",
                    array('size'=> 10,),
                    array('align' => 'center', 'spaceAfter' => 10)
                );
$section->addText("4.3. Установить ________не требуется_____________________",
                    array('underline' => 'single'),
                    array('align' => 'left', 'spaceAfter' => 5)
                );
$section->addText("(закоротки, тупики, заглушки, сигнальные лампы)",
                    array('size'=> 10,),
                    array('align' => 'center', 'spaceAfter' => 10)
                );
$section->addText("4.4 Взять пробу для анализа воздушной среды ___не требуется_________",
                    array('underline' => 'single'),
                    array('align' => 'left', 'spaceAfter' => 5)
                );
$section->addText("(указать места и результат анализа, группу загазованности)",
                    array('size'=> 10,),
                    array('align' => 'center', 'spaceAfter' => 10)
                );
$section->addText("4.5 Оградить зону производства работ вывесить плакаты",
                    array('underline' => 'single'),
                    array('align' => 'left', 'spaceAfter' => 5)
                );
$section->addText("(зону работ, вывесить плакаты)",
                    array('size'=> 10,),
                    array('align' => 'center', 'spaceAfter' => 10)
                );
$section->addText("4.6 Предусмотреть меры безопасности при работе на высоте и в колодцах",
                    array(),
                    array('align' => 'left', 'spaceAfter' => 5)
                );
$section->addText("использовать страховочную систему PS-2",
                    array('underline' => 'single'),
                    array('align' => 'left', 'spaceAfter' => 5)
                );
$section->addText("(леса, предохранительные пояса, веревки)",
                    array('size'=> 10,),
                    array('align' => 'center', 'spaceAfter' => 10)
                );
$section->addText("4.7 Предупредить обслуживающий персонал ",
                    array('underline' => 'single'),
                    array('align' => 'left', 'spaceAfter' => 5)
                );
$section->addText("(машинистов соседних кранов и кранов смежных пролетов с подписью в вахтенном журнале)",
                    array('size'=> 10,),
                    array('align' => 'center', 'spaceAfter' => 10)
                );                
$section->addText("4.8 Предусмотреть меры безопасности у железнодорожных путей___не требуется_____ ",
                    array('underline' => 'single'),
                    array('align' => 'left', 'spaceAfter' => 5)
                );
$section->addText("(установка знаков, плакатов, ограждений, тупиков)",
                    array('size'=> 10,),
                    array('align' => 'center', 'spaceAfter' => 10)
                );                
$section->addText("4.9 Указать маршруты к месту работы по пешеходным дорожкам",
                    array('underline' => 'single'),
                    array('align' => 'left', 'spaceAfter' => 5)
                );
$section->addText("(при необходимости приложить схему)",
                    array('size'=> 10,),
                    array('align' => 'center', 'spaceAfter' => 10)
                );                
                
$section->addText("4.10 Мероприятия по охране труда: использовать средства индивидуальной защиты, каски, страховочную систему PS-2, специализированную одежду, ботинки, средства защиты органов зрения, органов дыхания.",
                    array('underline' => 'single'),
                    array('align' => 'left', 'spaceAfter' => 5)
                );

$section->addPageBreak();

$section->addText("5. Наряд-допуск выдал ",
                    array('bold' => TRUE),
                    array('spaceAfter' => 20)
                );
$section->addText("$superBoss ____________$date",
                    array('underline' => 'single'),
                    array('align' => 'left', 'spaceAfter' => 5)
                );              
$section->addText("(должность, фамилия, подпись, дата)",
                    array('size'=> 10,),
                    array('align' => 'center', 'spaceAfter' => 20)
                );                
$section->addText("Вводный инструктаж по охране труда провел",
                    //array(),
                    //array('spaceAfter' => 20)
                );                
$section->addTextBreak();
$section->addLine($lineStyle);                
$section->addText("6. Мероприятия выполнил (выполнили): ",
                    array('bold' => TRUE),
                    array('spaceAfter' => 20)
                );
$section->addTextBreak();

$tableStyle = array(
    //'borderColor' => '006699',
    'borderSize'  => 6,
    'cellMargin'  => 50
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

$section->addText("7. Согласовано: старший мастер (мастер) участка",
                    array('bold' => TRUE),
                    array('spaceAfter' => 20)
                );
$section->addText("$allowing $date _______________",
                    array('underline' => 'single'),
                    array('align' => 'left', 'spaceAfter' => 5)
                );              
$section->addText("(должность, фамилия, подпись, дата)",
                    array('size'=> 10,),
                    array('align' => 'center', 'spaceAfter' => 20)
                );
$section->addText("8. Мероприятия выполнены, условия промышленной безопасности обеспечены, производителя работ с условием работы ознакомил и проинструктировал, допуск разрешаю",
                    array('bold' => TRUE),
                    array('spaceAfter' => 20)
                );
$section->addText("Вводный инструктаж по охране труда провел");                
$section->addText("$allowing $date _______________",
                    array('underline' => 'single'),
                    array('align' => 'left', 'spaceAfter' => 5)
                );              
$section->addText("(должность, фамилия, подпись, дата)",
                    array('size'=> 10,),
                    array('align' => 'center', 'spaceAfter' => 20)
                );

$section->addText("9. С условиями работы ознакомлен и проинструктирован, подготовку проверил, рабочее место принял",
                    array('bold' => TRUE),
                    array('spaceAfter' => 20)
                );                
$section->addText("$boss $date _______________",
                    array('underline' => 'single'),
                    array('align' => 'left', 'spaceAfter' => 5)
                );
$section->addText("(должность, фамилия, подпись, дата)",
                    array('size'=> 10,),
                    array('align' => 'center', 'spaceAfter' => 20)
                );

$section->addText("Бригаду (бригады) в количестве ___$count ___человек проинструктировал, к работе приступил $date _________________________________________",
                    array('bold' => TRUE),
                    array('spaceAfter' => 20)
                );
$section->addText("(дата, время)",
                    array('size'=> 10,),
                    array('align' => 'center', 'spaceAfter' => 20)
                );
$section->addText("Производитель работ $boss __________",
                    array('underline' => 'single'),
                    array('align' => 'left', 'spaceAfter' => 5)
                );
$section->addText("(должность, фамилия, подпись)",
                    array('size'=> 10,),
                    array('align' => 'center', 'spaceAfter' => 20)
                );                

$section->addPageBreak();

$section->addText(htmlspecialchars("Проведение инструктажа на рабочем месте"),
                    array('bold' => TRUE),
                    array('align' => 'center', 'spaceAfter' => 20,)
                );                        

$table = $section->addTable('myTable');
$table->addRow();
$cell = $table->addCell(40, $cellVCentered)->addText('№ п/п', null, $cellHCentered);
$cell = $table->addCell(6000, $cellVCentered)->addText('Дата, время, краткое содержание', null, $cellHCentered);
$cell = $table->addCell(3000, $cellVCentered)->addText('Ф.И.О.', null, $cellHCentered);
$cell = $table->addCell(2000, $cellVCentered)->addText('Профессия', null, $cellHCentered);
$cell = $table->addCell(1500, $cellVCentered)->addText('Подпись', null, $cellHCentered);
$cell = $table->addCell(1500, $cellVCentered)->addText('Подпись производителя работ', null, $cellHCentered);

$count = 0;
foreach ($brigada as $employee) {
    ++$count;
    $profession = 'монтажник';
    if ($count === 1) {
        $profession = 'эл. сварщик';
    }
    $table->addRow();
$cell = $table->addCell(40)->addText($count, null, $cellHCentered);
$cell = $table->addCell(6000)->addText("$date                        целевой инструктаж");
$cell = $table->addCell(3000)->addText($employee);
$cell = $table->addCell(2000)->addText($profession, null, $cellHCentered);
$cell = $table->addCell(1500);
$cell = $table->addCell(1500);
}                
$section->addTextBreak();                

$section->addText(htmlspecialchars("11. Продление наряда – допуска"),
                    array('bold' => TRUE),
                    array('align' => 'left', 'spaceAfter' => 20,)
                );         


$table = $section->addTable('myTable');
$table->addRow();
$cell = $table->addCell(1000, $cellRowSpan)->addText('дата и время', null, $cellHCentered);
$cell = $table->addCell(null, $cellColSpan2)->addText('Условия не изменились, смену сдал производитель работ', null, $cellHCentered);
$cell = $table->addCell(1000, $cellRowSpan)->addText('Численность состава заступающей смены', null, $cellHCentered);
$cell = $table->addCell(null, $cellColSpan2)->addText('С условиями работ ознакомлен, принял производитель работ', null, $cellHCentered);
$cell = $table->addCell(null, $cellColSpan2)->addText('Допуск разрешаю. допускающий к работе в смене', null, $cellHCentered);
$table->addRow();
$cell = $table->addCell(null, $cellRowContinue);
$cell = $table->addCell(1000, $cellVCentered)->addText('фамилия', null, $cellHCentered);
$cell = $table->addCell(1000, $cellVCentered)->addText('подпись', null, $cellHCentered);
$cell = $table->addCell(null, $cellRowContinue);
$cell = $table->addCell(1000, $cellVCentered)->addText('фамилия', null, $cellHCentered);
$cell = $table->addCell(1000, $cellVCentered)->addText('подпись', null, $cellHCentered);
$cell = $table->addCell(1000, $cellVCentered)->addText('фамилия', null, $cellHCentered);
$cell = $table->addCell(1000, $cellVCentered)->addText('подпись', null, $cellHCentered);
$i = 1;
while ($i <= 15) {
$table->addRow();
$cell = $table->addCell(1000, $cellVCentered)->addText('', null, $noSpace);
$cell = $table->addCell(1000, $cellVCentered)->addText('', null, $noSpace);
$cell = $table->addCell(1000, $cellVCentered)->addText('', null, $noSpace);
$cell = $table->addCell(1000, $cellVCentered)->addText('', null, $noSpace);
$cell = $table->addCell(1000, $cellVCentered)->addText('', null, $noSpace);
$cell = $table->addCell(1000, $cellVCentered)->addText('', null, $noSpace);
$cell = $table->addCell(1000, $cellVCentered)->addText('', null, $noSpace);
$cell = $table->addCell(1000, $cellVCentered)->addText('', null, $noSpace);
$i++;
};
$section->addTextBreak();
$section->addText(("12. Работа $ppr окончена, "),
                    array('bold' => TRUE),
                    array('spaceAfter' => 10,)
                );
$section->addText("рабочее место убрано, персонал с места производства работ выведен");
$section->addText("__________________________________________________________________",
                    array(),
                    array('spaceAfter' => 5)
);
$section->addText("(дата, время)",
                    array('size'=> 10,),
                    array('align' => 'center',)
                );
$section->addText("Наряд – допуск сдал: $boss __________",
                    array('underline' => 'single'),
                    array('align' => 'left', 'spaceAfter' => 5)
                );
$section->addText("(должность, фамилия, подпись производителя работ)",
                    array('size'=> 10,),
                    array('align' => 'center', 'spaceAfter' => 20)
                );
$section->addText("Наряд – допуск принял: $allowing _______",
                    array('underline' => 'single'),
                    array('align' => 'left', 'spaceAfter' => 5)
                );
$section->addText("(должность, фамилия, подпись допускающего к работе)",
                    array('size'=> 10,),
                    array('align' => 'center', 'spaceAfter' => 20)
                );
$section->addPageBreak();

$section->addText(htmlspecialchars("Корешок к наряду – допуску №____"),
                    array('bold' => TRUE),
                    array('align' => 'center', 'spaceAfter' => 10,)
                );                              
$section->addText(htmlspecialchars("на выполнение работ повышенной опасности"),
                    array(),
                    array('align' => 'center', 'spaceAfter' => 500)
                );                              
$section->addText("1. Производитель работ $boss",
                    array('underline' => 'single'),
                    array('align' => 'left', 'spaceAfter' => 5)
                );                              
$section->addText("(предприятие, цех, должность, фамилия, имя, отчество)",
                    array('size'=> 10,),
                    array('align' => 'center', )
                );
$section->addText("2. Допускается к выполнению работ: $ppr",
                    array(),
                    array('align' => 'left', 'spaceAfter' => 5)
                );                                              
$lineStyle = array('weight' => 1.5, 'width' => 530, 'height' => 0, 'color' => 'ffffff', 'spaceAfter' => 5);
$section->addLine($lineStyle);

$section->addText("3. Допускающий (допускающие) к работе",
                    array('bold' => TRUE),
                    array('spaceAfter' => 10)
                );
$section->addText($allowing,
                    array(),
                    array('align' => 'left', 'spaceAfter' => 5)
                );
$section->addLine($lineStyle);

$section->addText("4. Мероприятия для обеспечения безопасности работ:",
                    array('bold' => TRUE),
                    array('spaceAfter' => 20)
                );
$section->addText("4.1. Остановить ________не требуется___________________",
                    array('underline' => 'single'),
                    array('align' => 'left', 'spaceAfter' => 5)
                );
$section->addText("(место остановки, положение)",
                    array('size'=> 10,),
                    array('align' => 'center', 'spaceAfter' => 10)
                );
$section->addText("4.2. Отключить ________не требуется_____________________",
                    array('underline' => 'single'),
                    array('align' => 'left', 'spaceAfter' => 5)
                );
$section->addText("(рубильник, задвижку, магистраль, изъять бирку)",
                    array('size'=> 10,),
                    array('align' => 'center', 'spaceAfter' => 10)
                );
$section->addText("4.3. Установить ________не требуется_____________________",
                    array('underline' => 'single'),
                    array('align' => 'left', 'spaceAfter' => 5)
                );
$section->addText("(закоротки, тупики, заглушки, сигнальные лампы)",
                    array('size'=> 10,),
                    array('align' => 'center', 'spaceAfter' => 10)
                );
$section->addText("4.4 Взять пробу для анализа воздушной среды ___не требуется_________",
                    array('underline' => 'single'),
                    array('align' => 'left', 'spaceAfter' => 5)
                );
$section->addText("(указать места и результат анализа, группу загазованности)",
                    array('size'=> 10,),
                    array('align' => 'center', 'spaceAfter' => 10)
                );
$section->addText("4.5 Оградить зону производства работ вывесить плакаты",
                    array('underline' => 'single'),
                    array('align' => 'left', 'spaceAfter' => 5)
                );
$section->addText("(зону работ, вывесить плакаты)",
                    array('size'=> 10,),
                    array('align' => 'center', 'spaceAfter' => 10)
                );
$section->addText("4.6 Предусмотреть меры безопасности при работе на высоте и в колодцах",
                    array(),
                    array('align' => 'left', 'spaceAfter' => 5)
                );
$section->addText("использовать страховочную систему PS-2",
                    array('underline' => 'single'),
                    array('align' => 'left', 'spaceAfter' => 5)
                );
$section->addText("(леса, предохранительные пояса, веревки)",
                    array('size'=> 10,),
                    array('align' => 'center', 'spaceAfter' => 10)
                );
$section->addText("4.7 Предупредить обслуживающий персонал ",
                    array('underline' => 'single'),
                    array('align' => 'left', 'spaceAfter' => 5)
                );
$section->addText("(машинистов соседних кранов и кранов смежных пролетов с подписью в вахтенном журнале)",
                    array('size'=> 10,),
                    array('align' => 'center', 'spaceAfter' => 10)
                );                
$section->addText("4.8 Предусмотреть меры безопасности у железнодорожных путей___не требуется_____ ",
                    array('underline' => 'single'),
                    array('align' => 'left', 'spaceAfter' => 5)
                );
$section->addText("(установка знаков, плакатов, ограждений, тупиков)",
                    array('size'=> 10,),
                    array('align' => 'center', 'spaceAfter' => 10)
                );                
$section->addText("4.9 Указать маршруты к месту работы по пешеходным дорожкам",
                    array('underline' => 'single'),
                    array('align' => 'left', 'spaceAfter' => 5)
                );
$section->addText("(при необходимости приложить схему)",
                    array('size'=> 10,),
                    array('align' => 'center', 'spaceAfter' => 10)
                );                
                
$section->addText("4.10 Мероприятия по охране труда: использовать средства индивидуальной защиты, каски, страховочную систему PS-2, специализированную одежду, ботинки, средства защиты органов зрения, органов дыхания.",
                    array('underline' => 'single'),
                    array('align' => 'left', 'spaceAfter' => 5)
                );

$section->addPageBreak();
$section->addText("5. Наряд-допуск выдал ",
                    array('bold' => TRUE),
                    array('spaceAfter' => 20)
                );
$section->addText("$superBoss _____________$date",
                    array('underline' => 'single'),
                    array('align' => 'left', 'spaceAfter' => 5)
                );              
$section->addText("(должность, фамилия, подпись, дата)",
                    array('size'=> 10,),
                    array('align' => 'center', 'spaceAfter' => 20)
                );                
$section->addText("Вводный инструктаж по охране труда провел",
                    //array(),
                    //array('spaceAfter' => 20)
                );                
$section->addTextBreak();
$section->addLine($lineStyle);                
$section->addText("6. Мероприятия выполнил (выполнили): ",
                    array('bold' => TRUE),
                    array('spaceAfter' => 20)
                );
$section->addTextBreak();
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

$section->addText("7. Согласовано: старший мастер (мастер) участка",
                    array('bold' => TRUE),
                    array('spaceAfter' => 20)
                );
$section->addText("$allowing $date _______________",
                    array('underline' => 'single'),
                    array('align' => 'left', 'spaceAfter' => 5)
                );              
$section->addText("(должность, фамилия, подпись, дата)",
                    array('size'=> 10,),
                    array('align' => 'center', 'spaceAfter' => 20)
                );
$section->addText("8. Мероприятия выполнены, условия промышленной безопасности обеспечены, производителя работ с условием работы ознакомил и проинструктировал, допуск разрешаю",
                    array('bold' => TRUE),
                    array('spaceAfter' => 20)
                );
$section->addText("Вводный инструктаж по охране труда провел");                
$section->addText("$allowing $date _______________",
                    array('underline' => 'single'),
                    array('align' => 'left', 'spaceAfter' => 5)
                );              
$section->addText("(должность, фамилия, подпись, дата)",
                    array('size'=> 10,),
                    array('align' => 'center',)
                );

$section->addText("9. С условиями работы ознакомлен и проинструктирован, подготовку проверил, рабочее место принял",
                    array('bold' => TRUE),
                    array('spaceAfter' => 20)
                );                
$section->addText("$boss $date _______________",
                    array('underline' => 'single'),
                    array('align' => 'left', 'spaceAfter' => 5)
                );
$section->addText("(должность, фамилия, подпись, дата)",
                    array('size'=> 10,),
                    array('align' => 'center',)
                );

$section->addText("10 Работа окончена, наряд – допуск от производителя работ принял",
                    array('bold' => TRUE),
                    array( 'spaceAfter' => 20)
                );

$section->addText("___________________________________________________________________________",
                    array(),
                    array('align' => 'left', 'spaceAfter' => 5)
                );
$section->addText("(дата, время)",
                    array('size'=> 10,),
                    array('align' => 'center', 'spaceAfter' => 20)
                );                
$section->addText("$allowing ______________________",
                    array('underline' => 'single'),
                    array('align' => 'left', 'spaceAfter' => 5)
                );
$section->addText("(должность, фамилия, подпись допускающего к работе по наряду – допуску)",
                    array('size'=> 10,),
                    array('align' => 'center',)
                );

$objWriter = \PhpOffice\PhpWord\IOFactory::createWriter($phpWord, 'Word2007');
$objWriter->save('danger.docx');

?>
<ul class="menu">
<li class="menu__item">
<a href="index.php" class="menu__link">На главную</a>
</li>
<li class="menu__item">
<a href="fire.php" class="menu__link">Наряд на огневые работы</a>
</li>
</ul>

<h1 class="title">Создание наряда на работы повышенной опасности</h1>