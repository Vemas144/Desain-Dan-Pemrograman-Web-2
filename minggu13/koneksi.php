<?php
$host = "LAPTOP-MASBROV"; //nama

$connInfo = array("Database" => "prakwebdb", "UID" => "", "PWD" => "");
$koneksi = sqlsrv_connect($host, $connInfo);

if ($koneksi) {
echo "Koneksi berhasil.<br />";
} else {
echo "Koneksi Gagal";
die(print_r(sqlsrv_errors(), true));
}
