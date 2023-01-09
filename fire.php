<?php
require_once("constants.php");
require 'vendor/autoload.php';


$phpWord = new \PhpOffice\PhpWord\PhpWord();

$phpWord->setDefaultFontName('Times New Roman');
$phpWord->setDefaultFontSize(12);

$properties = $phpWord->getDocInfo();

$setArray = ARRAY_STOCK_DEPARTAMENT;

$date = date('d.m.Y');
$company = $setArray['company'];
$boss = PIROGOV;
$allowing = $setArray['allowing'];
$ppr = $setArray['ppr'];
$place = $setArray['place'];
$brigada = $setArray['brigada'];

if ($company === EL_6) {
    $superBoss = KOSHEEV;
} else {
    $superBoss = IVANOV;
}


$sectionStyle = array(
    'orientation' => 'portrait',
    'marginTop' => \PhpOffice\PhpWord\Shared\Converter::pixelToTwip(60),
    'marginLeft' => 600,
    'marginRight' => 600,
    'marginBottom' => 500,
    'calsNum' => 1,
    'pageNumberingStart' => 1,
    

);
$section = $phpWord->createSection($sectionStyle);

$section->addText(htmlspecialchars($company));
$section->addText(htmlspecialchars("УТВЕРЖДАЮ                ."),
                    array(),
                    array('align' => 'right', 'indentation' => 1000)
                );
$section->addText($superBoss,
                    array('underline' => 'single'),
                    array('align' => 'right', 'spaceAfter' => 10,)
                );
$section->addText('(руководитель или лицо ответственное за',
                    array(),
                    array('align' => 'right', 'spaceBefore' => 10, 'spaceAfter' => 10,)
                );
$section->addText('пожарную безопасность, должность, ф.и.о.)',
                    array(),
                    array('align' => 'right', 'spaceBefore' => 10, 'spaceAfter' => 500,)
                );
$section->addText('__________________________________',
                    array(),
                    array('align' => 'right', 'spaceAfter' => 10,)
                );
$section->addText('(подпись)                            .',
                    array(),
                    array('align' => 'right', 'spaceBefore' => 10)
                );                              
$section->addText($date,
                    array(),
                    array('align' => 'right',)
                );
$section->addText(htmlspecialchars("НАРЯД-ДОПУСК"),
                    array(),
                    array('align' => 'center', 'spaceAfter' => 10,)
                );                              
$section->addText(htmlspecialchars("на выполнение огневых работ "),
                    array(),
                    array('align' => 'center', 'spaceAfter' => 500)
                );                              
$section->addText("1. Выдан (кому): $boss $date г.______________",
                    array('underline' => 'single'),
                    array('align' => 'left', 'spaceAfter' => 5)
                );                              
$section->addText("(должность руководителя работ, ответственного за проведение работ, ф.и.о., дата)",
                    array(),
                    array('align' => 'center', )
                );
$section->addText("2. На выполнение работ: $ppr",
                    array(),
                    array('align' => 'left', 'spaceAfter' => 5)
                );                                              
$lineStyle = array('weight' => 1.5, 'width' => 530, 'height' => 0, 'color' => 'ffffff', 'spaceAfter' => 5);
$section->addLine($lineStyle);
//$section->addText("(указывается характер и содержание работы)",
//                    array(),
//                    array('align' => 'center', )
//                );
$section->addText("3. Место проведения работ: $place",
                    array(),
                    array('align' => 'left', 'spaceAfter' => 5)
                );
$section->addLine($lineStyle);

$section->addText("4. Состав исполнителей работ");

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

//$firstRowStyle = array('bgColor' => '66BBFF');
$phpWord->addTableStyle('myTable', $tableStyle);
$table = $section->addTable('myTable');
//$table = $section->addTable([$tableStyle]);
$table->addRow();
$cell = $table->addCell(40, $cellRowSpan)->addText('№ п/п', null, $cellHCentered);
$cell = $table->addCell(2000, $cellRowSpan)->addText('Ф.И.О.', null, $cellHCentered);
$cell = $table->addCell(2000, $cellRowSpan)->addText('Профессия', null, $cellHCentered);
$cell = $table->addCell(2000, $cellColSpan2)->addText('Инструктаж о мерах пожарной безопасности получил', null, $cellHCentered);
$cell = $table->addCell(2000, $cellRowSpan)->addText('Инструктаж о мерах пожарной безопасности провел (подпись руководителя работ)', null, $cellHCentered);
$table->addRow();
$cell = $table->addCell(null, $cellRowContinue);
$cell = $table->addCell(null, $cellRowContinue);
$cell = $table->addCell(null, $cellRowContinue);
$cell = $table->addCell(2000, $cellVCentered)->addText('подпись', null, $cellHCentered);
$cell = $table->addCell(2000, $cellVCentered)->addText('дата', null, $cellHCentered);
$cell = $table->addCell(null, $cellRowContinue);
$count = 0;
foreach ($brigada as $employee) {
    ++$count;
    $profession = 'монтажник';
    if ($count === 1) {
        $profession = 'эл. сварщик';
    }
    $table->addRow();
$cell = $table->addCell(40)->addText($count, null, $cellHCentered);
$cell = $table->addCell(2000)->addText($employee);
$cell = $table->addCell(2000)->addText($profession, null, $cellHCentered);
$cell = $table->addCell(2000);
$cell = $table->addCell(2000)->addText($date, null, $cellHCentered);
$cell = $table->addCell(2000);
}

$section->addText('5. Планируемое время проведения работ:', null, array('spaceBefore' => 500));
$section->addText("Начало _____время $date дата");
$section->addText("Окончание _____время ___________дата");
$section->addTextBreak();

$section->addText('6. Меры по обеспечению пожарной безопасности места (мест) проведения
работ: оградить зону производства работ, расчистить площадку от сгораемых материалов в радиусе 5 метров, огнетушитель – 2 шт., контроль места производства работ по окончанию выполнения работ в течении 3-х часов.');
$section->addTextBreak();
$section->addText("7. Наряд-допуск выдан: $allowing $date _________",
                    array('underline' => 'single'),
                    array('spaceAfter' => 5)
                );
$section->addText('(должность и ф.и.о. лица, выдавшего наряд-допуск, подпись, дата)',
                    array(),
                    array('align' => 'center', 'spaceBefore' => 5,)
                );
$section->addTextBreak();
$lineStyleThin = array('weight' => 1, 'width' => 530, 'height' => 0, 'color' => 'ffffff', 'spaceAfter' => 5);                
$section->addLine($lineStyleThin);

$section->addText("Наряд-допуск получен: $boss $date _________",
                    array('underline' => 'single'),
                    array('spaceAfter' => 5)
                );
$section->addText('(подпись руководителя работ, дата)',
                    array(),
                    array('align' => 'center', 'spaceBefore' => 5,)
                );
$section->addText("Согласовано: СПАСР Эл 6 Челябинск ",
                    array('underline' => 'single'),
                    array()
                );
//$section->addTextBreak();
//$section->addLine($lineStyleThin);
//$section->addLine($lineStyleThin);
$section->addText('_________________________________________________________________________________________',
                    array(),
                    array('align' => 'center',)
                );
$section->addText('_________________________________________________________________________________________',
                    array(),
                    array('align' => 'center', 'spaceAfter' => 1,)
                );

$section->addText('(название службы, должность и ф.и.о. ответственного лица, подпись, дата)',
                    array(),
                    array('align' => 'center', 'spaceBefore' => 1,)
                );

$section->addText('8. Место проведения работ подготовлено:');

$section->addText("Руководитель работ : $boss $date _________",
                    array('underline' => 'single'),
                    array('spaceAfter' => 5)
                );
$section->addText('(подпись руководителя работ, дата)',
                    array(),
                    array('align' => 'center', 'spaceBefore' => 5,)
                );

$section->addText('Возможность производства работ согласована (в соответствии с пунктом 7)');
$section->addText("$allowing $date ________________",
                    array('underline' => 'single'),
                    array('spaceAfter' => 5)
                );
$section->addText('(подпись ответственного лица службы объекта, на котором проводится работа, дата, время)',
                    array(),
                    array('align' => 'center', 'spaceBefore' => 5,)
                );
$section->addTextBreak();                
$section->addText('9. Ежедневный допуск к работе и время ее окончания');

$table = $section->addTable('myTable');
$table->addRow();
$cell = $table->addCell(null, $cellColSpan3)->addText('Рабочее место подготовлено, исполнители допущены к работе', null, $cellHCentered);
$cell = $table->addCell(null, $cellColSpan2)->addText('Работа закончена, исполнители удалены с рабочего места', null, $cellHCentered);
$table->addRow();
$cell = $table->addCell(1000, $cellVCentered)->addText('дата, время', null, $cellHCentered);
$cell = $table->addCell(2000, $cellVCentered)->addText('подпись руководителя работ', null, $cellHCentered);
$cell = $table->addCell(4000, $cellVCentered)->addText('подпись ответственного лица службы объекта, на котором проводится работа (в соответствии с пунктом 7)', null, $cellHCentered);
$cell = $table->addCell(2000, $cellVCentered)->addText('дата, время', null, $cellHCentered);
$cell = $table->addCell(3000, $cellVCentered)->addText('подпись руководителя работ', null, $cellHCentered);
$i = 1;
while ($i <= 10) {
$table->addRow();
$cell = $table->addCell(1000, $cellVCentered);
$cell = $table->addCell(2000, $cellVCentered);
$cell = $table->addCell(4000, $cellVCentered);
$cell = $table->addCell(2000, $cellVCentered);
$cell = $table->addCell(3000, $cellVCentered);
$i++;
};

$section->addTextBreak();
$section->addText('10. Продление наряда-допуска согласовано (в соответствии с пунктом 7)
_________________________________________________________________________________________
                (название службы, должность ответственного, ф.и.о., подпись, дата)
_________________________________________________________________________________________
');
$section->addTextBreak();
$section->addText('11. Изменение состава бригады исполнителей');

$table = $section->addTable('myTable');
$table->addRow();
$cell = $table->addCell(null, $cellColSpan3)->addText('Введен в состав бригады', null, $cellHCentered);
$cell = $table->addCell(null, $cellColSpan3)->addText('Выведен из состава бригады', null, $cellHCentered);
$cell = $table->addCell(2000, $cellRowSpan)->addText('Руководитель работ (подпись)', null, $cellHCentered);
$table->addRow();
$cell = $table->addCell(2000, $cellVCentered)->addText('Ф.И.О.', null, $cellHCentered);
$cell = $table->addCell(1000, $cellVCentered)->addText('дата, время', null, $cellHCentered);
$cell = $table->addCell(2000, $cellVCentered)->addText('с условиями работы ознакомлен, проинструктирован (подпись)', null, $cellHCentered);
$cell = $table->addCell(2000, $cellVCentered)->addText('Ф.И.О.', null, $cellHCentered);
$cell = $table->addCell(1000, $cellVCentered)->addText('дата, время', null, $cellHCentered);
$cell = $table->addCell(2000, $cellVCentered)->addText('подпись', null, $cellHCentered);
$cell = $table->addCell(null, $cellRowContinue);
$table->addRow();
$cell = $table->addCell(2000, $cellVCentered);
$cell = $table->addCell(1000, $cellVCentered);
$cell = $table->addCell(2000, $cellVCentered);
$cell = $table->addCell(2000, $cellVCentered);
$cell = $table->addCell(1000, $cellVCentered);
$cell = $table->addCell(2000, $cellVCentered);
$cell = $table->addCell(2000, $cellVCentered);
$table->addRow();
$cell = $table->addCell(2000, $cellVCentered);
$cell = $table->addCell(1000, $cellVCentered);
$cell = $table->addCell(2000, $cellVCentered);
$cell = $table->addCell(2000, $cellVCentered);
$cell = $table->addCell(1000, $cellVCentered);
$cell = $table->addCell(2000, $cellVCentered);
$cell = $table->addCell(2000, $cellVCentered);
$table->addRow();
$cell = $table->addCell(2000, $cellVCentered);
$cell = $table->addCell(1000, $cellVCentered);
$cell = $table->addCell(2000, $cellVCentered);
$cell = $table->addCell(2000, $cellVCentered);
$cell = $table->addCell(1000, $cellVCentered);
$cell = $table->addCell(2000, $cellVCentered);
$cell = $table->addCell(2000, $cellVCentered);

$section->addTextBreak();

$section->addText('12.  Работа выполнена в полном объеме, рабочие места приведены в
порядок, инструмент и материалы убраны, люди выведены, наряд-допуск закрыт
_____________________________________________________________________________________
                (руководитель работ, подпись, дата, время)
_____________________________________________________________________________________
      	(Старший мастер (сменный мастер) по месту проведения работ, ф.и.о., подпись, дата, время)
');

$objWriter = \PhpOffice\PhpWord\IOFactory::createWriter($phpWord, 'Word2007');
$objWriter->save('fire.docx');

?>
<ul class="menu">
<li class="menu__item">
<a href="index.php" class="menu__link">На главную</a>
</li>
<li class="menu__item">
<a href="danger.php" class="menu__link">Наряд на работы повышенной опасности</a>
</li>
</ul>

<h1 class="title">Создание наряда на огневые работы</h1>
