<?php
/*
 * d - o dia em número
 * D - o dia em letras
 * m - o mes em número
 * M - o mes em letras
 * y - o ano em dois digitos
 * Y - o ano em quatro digitos
 */
date_default_timezone_set('America/Sao_Paulo');
echo date('d/m/Y H:i:s');

echo "<hr>";

$date = date('Y-m-d'); // DATE
echo $date . "<hr>";
$dateTime = Date('Y-m-d H:i:s'); // datetime
echo $dateTime . "<hr>";

echo time(); // desde 1970 em segundos
$data_pagamento = mktime(13, 30, 00, 03, 29, 2021);// horas, min, segundos, mês, dia e ano.
echo date('d/m - H:i', $data_pagamento);

echo "<hr>";

$data = "28-05-2019 13:38:00";
$data = strtotime($data);

echo date('d/m/Y H:i:s', $data);