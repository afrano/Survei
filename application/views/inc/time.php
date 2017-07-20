<?php

$tanggal = mktime(date('m'), date("d"), date('Y'));
date_default_timezone_set("Asia/Jakarta");
$jam = date("H:i:s");
$a = date("H");
if (($a >= 6) && ($a <= 11)) {
    echo " <b>Selamat Pagi </b>";
} else if (($a >= 11) && ($a <= 15)) {
    echo "Selamat  Siang ";
} elseif (($a > 15) && ($a <= 18)) {
    echo "Selamat Sore ";
} else {
    echo "<b> Selamat Malam </b>";
}
?>