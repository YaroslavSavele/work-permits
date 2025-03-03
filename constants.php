<?php

const EL_6 = 'Эл 6 Челябинск';
const DKB = 'ООО «Донкарб Графит»';
const STALMONTAZH = 'ООО «Стальмонтаж»';

// Выдающий наряд-допуск, superboss
const IVANOV = "Главный энергетик Иванов С. И.  ";
const BELYAEV = "Технический директор Беляев А. П.  ";
const KLAVLIN = "Начальник ОПУиОР Клявлин Н. Н.  ";
const KOSHEEV = "И. о. технического директора Кощеев Н. Н.  ";  
const KIFENKO = "Главный механик Кифенко С. М.";
const DAVLETSHIN = 'Главный механик Давлетшин Р. И.';
const MOROSOV = 'И. о. главного механика Морозов М. А.';
const MELNIKOV = 'Технический директор Мельников С. Ю.';

// Производитель работ, boss
const PIROGOV = 'главный инженер ООО «Стальмонтаж» Пирогов А.Н.';
const STARKOV = 'директор ООО «Стальмонтаж» Старков А. В.';
const SAVELEV = 'инженер ООО «Стальмонтаж» Савельев Я. В.';
const PETRENKO = 'мастер ООО «Стальмонтаж» Петренко И. А.';
const PAVLICHENCOV = 'мастер ООО «Стальмонтаж» Павличенков А. Ю.';
const KURICIN = 'мастер по ремонту оборудования Курицин В. Ф.';

// Дата
$now = date('d.m.Y');
$tommorow = date('d.m.Y', strtotime("+1 days"));
$freeDate = date('d.m.Y', strtotime("09.03.2023"));
//$date = $tommorow;



//Допускающий allowing
const MARATKANOV = 'Начальник цеха И. А. Маратканов';
const MATVEEV = 'начальник цеха №2 Матвеев В.Н.';
const SINEOKIY = 'Начальник смесильно-прессового участка Синеокий А. Н.';
const KUTUEV = 'Старший мастер участка графитации Кутуев С.А.';
const TRETYAKOV = 'Cтарший мастер участка силицирования Третьяков А. А.';
const MANGIOSOV = "И. О. начальника цеха №1 Манжосов А. В.";
const BERDUGIN = 'Начальник управления электрообеспечения Бердюгин К. В.';
const MOZUKA = 'Начальник участка Мозюка А. С.';
const OKUNEV = 'старший мастер отделения графитации Окунев И. А.';
const GISATULLIN = 'Начальник участка ТВПС Гизатуллин И. И.';
const BALYCHEV = 'И. О. начальника смесильно-прессового участка Балычев А. Г.';
const KADYROV = 'Начальник участка производства графитовых порошков Кадыров Е. С.';
const ZHELEZNYAK = 'Начальник отделения сырья и прокалки Железняк М. М.';
const SHUVALOV = 'Начальник участка Шувалов С. А.';
const MASTER = 'Сменный мастер';

//ППР ppr
const KRANES = 'по устранению замечаний мостовых кранов в пролете обжиговой печи №7 в отделении обжига блока №5 Эл 6 Челябинск, ППР № 07-07, по договору № 74-07-2022 от 24.07.2022';
const FILTERS = 'по восстановлению системы газоудаления и электрофильтрам С-7,2 №7с-7ас в обжиговом отделении, в пролете обжиговой печи № 7 блока №5 Эл 6 Челябинск, ППР № 26-07';
const R_34 = 'по модернизации системы аварийной вентиляции, устройство навеса на ж/д эстакаде слива жидкого хлора участка Р-34 ООО «Донкарб Графит», ППР № 14-07, договор №298 ЧДКГ-07-2022 от 14.07.2022г.';
const STOCK_DEPARTAMENT = 'по ремонту конструкций каркаса и стенового ограждения в шихтовом отделении блока №4 ООО «Донкарб Графит», ППР № 21-12, договор № 16ЧДКГ-01-2023 от 09.01.2023г.';
const COOLING_DRUM = 'по ремонту холодильного барабана в прокалочном отделении блока №5 Эл 6 Челябинск, ППР № 17-03, гарантийное письмо № 89-07 от 24.03.2023г.';
const SCRAP_METAL = 'по демонтажу металлоконструкций на участке силицирования блока №6 ООО «Донкарб Графит», ППР № 27-02, договор № 83ЧДКГ-03-2023 от 15.03.2023г';
const PIPES = 'по стройству заградительных огней дымовых труб отделений обжига, прокалки и котельной Эл 6 Челябинск, ППР № 14-03, договор №35-03-2023 от 22.03.2023г.';
const FILTERS_NEW = 'по капитальному ремонту электрофильтров УВП-16 № 32, 33, 44, 45, ППР № 15-05, договор: № 96-06-2023 от 07.06.2023г. «Капитальный ремонт электрофильтров УПВ №№ 32,33,44,45 Смесильно-прессового отделения, Блока №5 Эл 6 Челябинск»';
const HGO = 'на проведение ремонта ступеней (скруббера) нейтрализации и очистки уловленных газов от печей графитации секций №№ 1 и 2 (отделения ХГО). Ремонт каплеуловителей. ППР №11-07. Договор №Дог-ДКГ-2023/239 от 23.08.2023г';
const BIRDHOUSES = 'ремонт надстроев (узла возврата шихты) здания трансформаторного коридора в осях 26-29, 47-50, ППР № 20-09, договор: № Дог-ЧЛБ-2023/211 от 11.10.2023г.';
const STRENGTHENING_FILTERS = 'Ремонт опорных конструкций электрофильтров. (УВП-12: №8, УВП-8: №№16, 17, 18, 19), ППР № 21-09, договор: №Дог-ДКГ-2023/301 от 02.10.2023г';
const VENTILATION = 'Капитальный ремонт приточной вентиляции ПСУ 1, 2, 3, 5 и подстанции фильтров 6 этаж СПО, ППР № 28-11, договор: №Дог-ЧЛБ-2023/247 от 02.11.2023г.';
const RENOVATION_CALCINATION_BUILDING = 'Ремонт здания отделения прокалки блока №5';
const REPAIR_OF_COVERING_STRUCTURES = 'Ремонт конструкций покрытия здания отделения 1, 2 секций графитации блока №4 ППР №25-01, договор: №Дог-ДКГ-2024/130 от 04.03.2024';
const KRANE_BEAMS = 'Капитальный ремонт подкрановых балок по ряду Г и части конструкций кровли здания склада сырья блока №5 ППР №01-07, договор: №Дог-ЧЛБ-2024/59 от 27 июня 2024 г.';
const REPAIR_ROOF_BOILER_HOUSE = 'Капитальный ремонт кровли здания котельной №1 ППР №09-07/2024, договор: №Дог-ЧЛБ-2024/58 от «27» июня 2024 г.';
const REPAIR_ROOF_MECHANICAL_PROCESSING_SECTION ='Текущий ремонт кровли участка мех. обработки блока №5 в осях Д-К ООО "Донкарб Графит", ППР № 02-08/2024, договор №Дог-ЧЛБ-2024/370 от «30» июля 2024 г.';
const REPAIR_WALL_BOILER_HOUSE = 'Капитальный ремонт стенового ограждения с восточной стороны здания котельной №1 ППР №09-07/2024, договор: №Дог-ЧЛБ-2024/85 от «11» октября 2024 г.';
const REINFORCEMENT_METAL_STRUCTURES = 'Усиление металлоконструкций здания прокалочного отделения в осях 16-18, А1-В1 блока №5 ППР №25-11/2024, договор: №Дог-ЧБЛ-2024/559 от «29» ноября 2024 г.';
const REPLACEMENT_WALL_PANELS = 'Замена аварийных стеновых панелей в осях 9а-10а/А-Б здания СПО блока № 5 ППР №28-10/2024, договор: №ДогДКГ-2024/510 от 01.11.2024';

//Место place
const BAKE_7 = 'пролет обжиговой печи №7 в отделении обжига блока №5 Эл 6 Челябинск';
const FILTER_BAKE_7 = 'электрофильтры С-7,2 №7с-7ас блока №5 Эл 6 Челябинск';
const PLACE_R_34 = 'участок Р-34 ООО «Донкарб Графит»';
const PLACE_STOCK_DEPARTAMENT = 'шихтовоe отделениe блока №4 ООО «Донкарб Графит';
const CALCINING = 'прокалочное отделение блока №5';
const SILICONIZATION_SITE = 'участок силицирования блока №6 ООО «Донкарб Графит»';
const PIPES_PLASE = 'дымовые трубы отделений обжига, прокалки и котельной';
const FILTERS_PLASE = 'Смесильно-прессовое отделение блок №5 Эл 6 Челябинск, электрофильтры УВП-16 №№ 32, 33, 44, 45';
const HGO_PLACE = 'Здание хлорной газоочистки (ХГО) первой и второй секций графитации блока №4.';
const BIRDHOUSES_PLACE = 'кровля трансформаторного коридора блока №5 Эл 6 Челябинск';
const STRENGTHENING_PLACE = 'Отделение обжига блока №3';
const SPO = 'Смесильно-прессовый участок блока №5';
const CALCINATION_PLACE = 'Прокалочное отделение блока №5';
const DEPARTAMENT_GRAPHITIZATION_BLOK_4 = 'отделение 1, 2 секции графитации блока №4';
const RAW_MATERIAL_WAREHOUSE = 'склад сырья';
const BOILER_HOUSE = 'Здание котельной №1';
const MECHANICAL_PROCESSING_SECTION = 'Кровля участка мех. обработки блока №5 в осях 53-74';


//Бригада brigada
const CRANE_REPAIRMEN = ['Бобин Н. П', 'Бояркин С. А.', 'Завьялов А. В',];
const BOBIN_TEAM = ['Бобин Н. П', 'Безродных Ю. С.', 'Безродных И. С.', 'Вербицкий А. А.',];
const PETRENKO_TEAM = [ 'Шкитов И. О.', 'Петренко А. И.', 'Кожевин А. Л.', 'Захаров А. С.', 'Кузнецов А. Е.'];
const PIPES_TEAM = ['Петренко А. И.', 'Уткин А. В.', ' Шарыгин С. А.'];
const MOGILNICOV_TEAM = ['Могильников А. В.', 'Шмыков М. Ю.', 'Гуркин Н. Н.'];
const STRENGTHENING_TEAM = ['Петренко И. А.', 'Иванов А.В.','Кожевин А.Л.',];
const VENTILATION_TEAM = ['Кузнецов А. Е.', 'Ширямин А. К.', 'Иванов А. В.', 'Иванов Е. В.',];
const CALCINATION_TEAM = ['Петренко И. А.', 'Петренко А. И.','Кузнецов А. Е.',];
const ROOFERS = ['Ермолаев В. Г', 'Игнатьев В. П.', 'Макеев Р. О.', 'Савицкий И. А.',];
const NOVOSIB_TEAM = ['Посторонко Е. В.', 'Дергалев М. В.', 'Маркович А. В.', 'Медведев А. Н.',];
const EXTENDED_TEAM = [ 'Шкитов И. О.', 'Петренко А. И.','Хусаинов Р. М.', 'Кожевин А.Л.', 'Захаров А. С.', 'Ковалев Д. В.', 'Атаманенко Д. В.', ' ', ' ', ' ', ' ', ' ', ' ',];

//Установочные массивы
const ARRAY_REINFORCEMENT_METAL_STRUCTURES_NOVOSIB = [
    'company' => STALMONTAZH,
    'superboss' => STARKOV,
    'danger_boss' => KURICIN,
    'fire_boss' => KURICIN,
    'allowing' => STARKOV,
    'ppr' => REINFORCEMENT_METAL_STRUCTURES,
    'place' => CALCINING,
    'brigada' => NOVOSIB_TEAM,
];
const ARRAY_REPLACEMENT_WALL_PANELS = [
    'company' => DKB,
    'superboss' => MELNIKOV,
    'danger_boss' => PETRENKO,
    'fire_boss' => STARKOV,
    'allowing' => SINEOKIY,
    'ppr' => REPLACEMENT_WALL_PANELS,
    'place' => SPO,
    'brigada' => PETRENKO_TEAM,
];
const ARRAY_REINFORCEMENT_METAL_STRUCTURES = [
    'company' => STALMONTAZH,
    'superboss' => STARKOV,
    'danger_boss' => PETRENKO,
    'fire_boss' => PETRENKO,
    'allowing' => STARKOV,
    'ppr' => REINFORCEMENT_METAL_STRUCTURES,
    'place' => CALCINING,
    'brigada' => PETRENKO_TEAM,
];
const ARRAY_WALL = [
    'company' => DKB,
    'superboss' => IVANOV,
    'danger_boss' => PETRENKO,
    'fire_boss' => STARKOV,
    'allowing' => MASTER,
    'ppr' => REPAIR_WALL_BOILER_HOUSE,
    'place' => BOILER_HOUSE,
    'brigada' => PETRENKO_TEAM,
];
const ROOF_MECHANICAL_PROCESSING_SECTION = [
    'company' => DKB,
    'superboss' => MELNIKOV,
    'boss' => PAVLICHENCOV,
    'allowing' => KADYROV,
    'ppr' => REPAIR_ROOF_MECHANICAL_PROCESSING_SECTION,
    'place' => MECHANICAL_PROCESSING_SECTION,
    'brigada' => ROOFERS,
];
const ARRAY_BOILER_HOUSE = [
    'company' => DKB,
    'superboss' => MELNIKOV,
    'boss' => STARKOV,
    'allowing' => GISATULLIN,
    'ppr' => REPAIR_ROOF_BOILER_HOUSE,
    'place' => BOILER_HOUSE,
    'brigada' => PETRENKO_TEAM,
];
const ARRAY_KRANE_BEAMS = [
    'company' => DKB,
    'superboss' => MELNIKOV,
    'boss' => PETRENKO,
    'allowing' => ZHELEZNYAK,
    'ppr' => KRANE_BEAMS,
    'place' => RAW_MATERIAL_WAREHOUSE,
    'brigada' => PETRENKO_TEAM,
];
const ARRAY_REPAIR_OF_COVERING_STRUCTURES = [
    'company' => DKB,
    'superboss' => MELNIKOV,
    'boss' => SAVELEV,
    'allowing' => OKUNEV,
    'ppr' => REPAIR_OF_COVERING_STRUCTURES,
    'place' => DEPARTAMENT_GRAPHITIZATION_BLOK_4,
    'brigada' => PETRENKO_TEAM,
];
const ARRAY_RENOVATION_CALCINATION_BUILDING = [
    'company' => DKB,
    'superboss' => BELYAEV,
    'boss' => PIROGOV,
    'allowing' => SINEOKIY,
    'ppr' => RENOVATION_CALCINATION_BUILDING,
    'place' => CALCINATION_PLACE,
    'brigada' => PETRENKO_TEAM,
];
const ARRAY_VENTILATION = [
    'company' => EL_6,
    'superboss' => BELYAEV,
    'boss' => PIROGOV,
    'allowing' => SINEOKIY,
    'ppr' => VENTILATION,
    'place' => SPO,
    'brigada' => VENTILATION_TEAM,
];
const ARRAY_STRENGTHENING_FILTERS = [
    'company' => DKB,
    'superboss' => BELYAEV,
    'boss' => PIROGOV,
    'allowing' => DAVLETSHIN,
    'ppr' => STRENGTHENING_FILTERS,
    'place' => STRENGTHENING_PLACE,
    'brigada' => PETRENKO_TEAM,
];
const ARRAY_BIRDHOUSES = [
    'company' => DKB,
    'superboss' => BELYAEV,
    'boss' => PIROGOV,
    'allowing' => MOZUKA,
    'ppr' => BIRDHOUSES,
    'place' => BIRDHOUSES_PLACE,
    'brigada' => PETRENKO_TEAM,
];
const ARRAY_HGO = [
    'company' => DKB,
    'superboss' => IVANOV,
    'boss' => PIROGOV,
    'allowing' => MATVEEV,
    'ppr' => HGO,
    'place' => HGO_PLACE,
    'brigada' => PETRENKO_TEAM,
];
const ARRAY_R_34 = [
    'company' => DKB,
    'allowing' => MATVEEV,
    'ppr' => R_34,
    'place' => PLACE_R_34,
    'brigada' => PETRENKO_TEAM,
];
const ARRAY_STOCK_DEPARTAMENT = [
    'company' => DKB,
    'superboss' => IVANOV,
    'allowing' => KUTUEV,
    'ppr' => STOCK_DEPARTAMENT,
    'place' => PLACE_STOCK_DEPARTAMENT,
    'brigada' => PETRENKO_TEAM,
];
const ARRAY_SCRAP_METAL = [
    'company' => DKB,
    'superboss' => KIFENKO,
    'allowing' => MANGIOSOV,
    'ppr' => SCRAP_METAL,
    'place' => SILICONIZATION_SITE,
    'brigada' => PETRENKO_TEAM,
];
const ARRAY_KRANES = [
    'company' => EL_6,
    'allowing' => SINEOKIY,
    'ppr' => KRANES,
    'place' => BAKE_7,
    'brigada' => CRANE_REPAIRMEN,
];

const ARRAY_COOLING_DRUM = [
    'company' => EL_6,
    'superboss' => BELYAEV,
    'allowing' => SINEOKIY,
    'ppr' => COOLING_DRUM,
    'place' => CALCINING,
    'brigada' => PETRENKO_TEAM,
];

const ARRAY_PIPES = [
    'company' => EL_6,
    'superboss' => BELYAEV,
    'boss' => STARKOV,
    'allowing' => BERDUGIN,
    'ppr' => PIPES,
    'place' => PIPES_PLASE,
    'brigada' => PIPES_TEAM,
];

const ARRAY_FILTERS = [
    'company' => EL_6,
    'superboss' => BELYAEV,
    'boss' => PIROGOV,
    'allowing' => DAVLETSHIN,
    'ppr' => FILTERS_NEW,
    'place' => FILTERS_PLASE,
    'brigada' => PETRENKO_TEAM,
];

?>



