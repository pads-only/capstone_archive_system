<?php
$file = 'uploads/Assignment2-Exchange Rate Determination.pdf';

header('Content-Type: application/pdf');
header('Content-Disposition: inline; filename="' . $file . '"');
header('Content-Transfer-Encoding: binary');
header('Accept-Ranges: bytes');

readfile($file);
exit;
