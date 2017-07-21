<?php
         foreach ($data_survei as $row) {
            $angka = substr($row['id_outlet'], -9);
            $L = substr($row['id_outlet'], 0, 1);
            $angka++;
            $tes = $angka;
            $hasil = $L . $tes;
            echo $hasil;
        }
        ?>