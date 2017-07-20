<?php
header("Content-type: application/vnd-ms-excel");

header("Content-Disposition: attachment; filename=$title.xls");

header("Pragma: no-cache");

header("Expires: 0");
?>

<table border="1" width="100%">

    <thead>

        <tr>

            <th>Judului</th>

            <th>Penulis</th>

            <th>ISBN</th>

        </tr>

    </thead>

    <tbody>

<?php $i = 1;
foreach ($buku as $buku) { ?>

            <tr>

                <td><?php echo $buku->judul; ?></td>
                <td><?php echo $buku->penulis; ?></td>
                <td><?php echo $buku->isbn; ?></td>

            </tr>

            <?php $i++;
        } ?>

    </tbody>

</table>