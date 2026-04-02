<?php
$pdf = $_GET['pdf'];
$file = 'uploads/' . $pdf;

if (! file_exists($file)) {
    abort(404);
}

header('Content-Type: application/pdf');
header('Content-Disposition: inline; filename="' . $file . '"');
header('Content-Transfer-Encoding: binary');
header('Accept-Ranges: bytes');

readfile($file);
exit;
