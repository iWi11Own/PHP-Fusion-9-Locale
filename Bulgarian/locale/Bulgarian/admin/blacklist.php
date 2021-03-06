<?php
// Delete blacklisted user
$locale['400'] = "Изтриване на потребителя от чения списък";
$locale['401'] = "Потребителят е изтрит от черния списък";
$locale['402'] = "Връзщане към администрацията на черния списък";
$locale['403'] = "Връщане към администрацията";
$locale['404'] = "Моля въведете черния IP или черната електронна поща";
$locale['405'] = "Черната електонна поща е невалидна.";
$locale['406'] = "Черен списък";
// Add/Edit Blacklist Titles
$locale['420'] = "Потребител в чения списък";
$locale['421'] = "Редакция на потребителя от черния списък";
// Add/Edit blacklist form
$locale['440'] = "Въвежданетп на IP адрес ще забрани посещаването на потребител със същия IP адрес да влиза в сайта Ви.
Може да въведете целияl IP адрес, например <em>123.45.67.89.</em> или частичен IP адрес, например <em>123.45.67</em> или <em>123.45</em>.
Забележка: IPv6 адреси са конвертирани в тяхната цяла дължина в сайта, 
например <em>ABCD:1234:5:6:7:8:9:FF</em> ще бъде показан като <em>ABCD:1234:0005:0006:0007:0008:0009:00FF</em>.
Смесени IP адреси (тези, които съдържат едновременно IPv6 и IPv4) ще бъдат проверявани за частични съвпадения.
<br /><br />
Въвеждането на електронна поща ще предотврати потребителите да се регистрират с този адрес.
Може да напишете целия адрес на електронната поща, като <em>foo@bar.com</em>, или домейна, като <em>bar.com</em>.<br /><br />

% - съвпада с всекя поредица.<br /><br />

%.%.%.%@domain.tld банва всеки адрес, който съдържа поне 3 точки.<br />
%+%@domain.tld банва всеки адрес, който съдържа поне един знак плюс.<br />
%@domain.tld банва всеки адрес от domain.tld<br />
%.domain.tld банва всеки поддомейн от domain.tld<br />
%payday% банва всеки адрес, който съдържа думата \"payday\", която е много често срещана в сайтовете.<br />
domain.tld е псевдоним на %@domain.tld, за да го направите съвместим с правилата въведени във версия 7.<br />";

$locale['441'] = "IP адреси в черния списък: <strong>или</strong>";
$locale['442'] = "Електронни пощи в черния списък:";
$locale['443'] = "Причина";
$locale['444'] = "Потребители в черния списък";
// Current blacklisted users
$locale['460'] = "Потребители в черния списък";
$locale['461'] = "Информация за черния списък";
$locale['462'] = "Опции";
$locale['463'] = "Редакция";
$locale['464'] = "Изтриване";
$locale['465'] = "Черния списък е празен в момента.";
$locale['466'] = "N/A";
$locale['467'] = "Администратор";
$locale['468'] = "Дата";