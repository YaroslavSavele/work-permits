<?php

const EL_6 = 'Эл 6 Челябинск';
const DKB = 'ООО «Донкарб Графит»';

const IVANOV = "Технический директор Иванов С. И.  ";
const KOSHEEV = "И. о. технического директора Кощеев Н. Н.  ";

const PIROGOV = 'главный инженер ООО «Стальмонтаж» Пирогов А.Н.';

//Допускающий
const MARATKANOV = 'Начальник производственного цеха И. А. Маратканов';
const MATVEEV = 'Старший мастер участка Р-34 и ХГО Матвеев В. Н.';
const SINEOKIY = 'Начальник участка Синеокий А.С.';
const KOFLER = 'Старший мастер участка графитации Кофлер Е.И.';

//ППР
const KRANES = 'по устранению замечаний мостовых кранов в пролете обжиговой печи №7 в отделении обжига блока №5 Эл 6 Челябинск, ППР № 07-07, по договору № 74-07-2022 от 24.07.2022';
const FILTERS = 'по восстановлению системы газоудаления и электрофильтрам С-7,2 №7с-7ас в обжиговом отделении, в пролете обжиговой печи № 7 блока №5 Эл 6 Челябинск, ППР № 26-07';
const R_34 = 'по модернизации системы аварийной вентиляции, устройство навеса на ж/д эстакаде слива жидкого хлора участка Р-34 ООО «Донкарб Графит», ППР № 14-07, договор №298 ЧДКГ-07-2022 от 14.07.2022г.';
const STOCK_DEPARTAMENT = 'по ремонту конструкций каркаса и стенового ограждения в шихтовом отделении блока №4 ООО «Донкарб Графит», ППР № 21-12, гарантийное письмо № 1114-35 от 30.12.2022';
//Место
const BAKE_7 = 'пролет обжиговой печи №7 в отделении обжига блока №5 Эл 6 Челябинск';
const FILTER_BAKE_7 = 'электрофильтры С-7,2 №7с-7ас блока №5 Эл 6 Челябинск';
const PLACE_R_34 = 'участок Р-34 ООО «Донкарб Графит»';
const PLACE_STOCK_DEPARTAMENT = 'шихтовоe отделениe блока №4 ООО «Донкарб Графит';

//Бригада
const CRANE_REPAIRMEN = ['Бобин Н. П', 'Бояркин С. А.', 'Завьялов А. В',];
const BOBIN_TEAM = ['Бобин Н. П', 'Безродных Ю. С.', 'Безродных И. С.', 'Вербицкий А. А.',];
const PETRENKO_TEAM = ['Бобин Н. П', 'Петренко И. А.', 'Петренко А. И.', 'Кузнецов А. Е.', 'Кожевин А.Н.'];

const ARRAY_R_34 = [
    'company' => DKB,
    'allowing' => MATVEEV,
    'ppr' => R_34,
    'place' => PLACE_R_34,
    'brigada' => PETRENKO_TEAM,
];
const ARRAY_STOCK_DEPARTAMENT = [
    'company' => DKB,
    'allowing' => KOFLER,
    'ppr' => STOCK_DEPARTAMENT,
    'place' => PLACE_STOCK_DEPARTAMENT,
    'brigada' => PETRENKO_TEAM,
];
const ARRAY_KRANES = [
    'company' => EL_6,
    'allowing' => SINEOKIY,
    'ppr' => KRANES,
    'place' => BAKE_7,
    'brigada' => CRANE_REPAIRMEN,
];