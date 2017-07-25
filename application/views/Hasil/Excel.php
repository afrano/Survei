<?php
header("Content-type: application/vnd-ms-excel");
header("Content-Disposition: attachment; filename=$title.xls");
header("Pragma: no-cache");
header("Expires: 0");
?>
<table>
    <thead><tr></tr><tr></tr>
        <tr>
            <th></th>
            <th>Kuisioner Ke</th>
            <th>Tahun</th>
            <th>Cabang</th>
            <th>Nama Outlet</th>
            <th>Channel</th>
            <th>Q1</th>
            <th>Q2</th>
            <th>Q3</th>
            <th>Q4</th>
            <th>Q5</th>
            <th>Q6</th>
            <th>Q7</th>
            <th>Q8</th>
            <th>Q9</th>
            <th>Q10</th>
            <th>Q11</th>
            <th>Q12</th>
            <th>Q13</th>
            <th>Q14</th>
            <th>Q15</th>
            <th>Q16</th>
            <th>Q17</th>
            <th>Q18</th>
            <th>Q19</th>
            <th>Q20</th>
            <th></th>
            <th></th>
            <th>Kuisioner Ke</th>
            <th>Tahun</th>
            <th>Cabang</th>
            <th>Nama Outlet</th>
            <th>Channel</th>
            <th>Q1</th>
            <th>Q2</th>
            <th>Q3</th>
            <th>Q4</th>
            <th>Q5</th>
            <th>Q6</th>
            <th>Q7</th>
            <th>Q8</th>
            <th>Q9</th>
            <th>Q10</th>
            <th>Q11</th>
            <th>Q12</th>
            <th>Q13</th>
            <th>Q14</th>
            <th>Q15</th>
            <th>Q16</th>
            <th>Q17</th>
            <th>Q18</th>
            <th>Q19</th>
            <th>Q20</th>
        </tr>
    </thead>
    <tbody>
        <?php
        foreach ($data_survei as $row) {
            ?>
            <tr>
                <td></td>    
                <td><?php echo $row['semester']; ?></td>
                <td><?php echo $row['tahun']; ?></td>
                <td><?php echo $row['id_cabang']; ?></td>
                <td><?php echo $row['nama_outlet']; ?></td>
                <td><?php echo $row['channel']; ?></td>
                <td><?php echo $row['Q01']; ?></td>
                <td><?php echo $row['Q02']; ?></td>
                <td><?php echo $row['Q03']; ?></td>
                <td><?php echo $row['Q04']; ?></td>
                <td><?php echo $row['Q05']; ?></td>
                <td><?php echo $row['Q06']; ?></td>
                <td><?php echo $row['Q07']; ?></td>
                <td><?php echo $row['Q08']; ?></td>
                <td><?php echo $row['Q09']; ?></td>
                <td><?php echo $row['Q10']; ?></td>
                <td><?php echo $row['Q11']; ?></td>
                <td><?php echo $row['Q12']; ?></td>
                <td><?php echo $row['Q13']; ?></td>
                <td><?php echo $row['Q14']; ?></td>
                <td><?php echo $row['Q15']; ?></td>
                <td><?php echo $row['Q16']; ?></td>
                <td><?php echo $row['Q17']; ?></td>
                <td><?php echo $row['Q18']; ?></td>
                <td><?php echo $row['Q19']; ?></td>
                <td><?php echo $row['Q20']; ?></td>
                <td></td>  
                <td></td>    
                <td><?php echo $row['semester']; ?></td>
                <td><?php echo $row['tahun']; ?></td>
                <td><?php echo $row['id_cabang']; ?></td>
                <td><?php echo $row['nama_outlet']; ?></td>
                <td><?php echo $row['channel']; ?></td>
                <td><?php echo $row['K01']; ?></td>
                <td><?php echo $row['K02']; ?></td>
                <td><?php echo $row['K03']; ?></td>
                <td><?php echo $row['K04']; ?></td>
                <td><?php echo $row['K05']; ?></td>
                <td><?php echo $row['K06']; ?></td>
                <td><?php echo $row['K07']; ?></td>
                <td><?php echo $row['K08']; ?></td>
                <td><?php echo $row['K09']; ?></td>
                <td><?php echo $row['K10']; ?></td>
                <td><?php echo $row['K11']; ?></td>
                <td><?php echo $row['K12']; ?></td>
                <td><?php echo $row['K13']; ?></td>
                <td><?php echo $row['K14']; ?></td>
                <td><?php echo $row['K15']; ?></td>
                <td><?php echo $row['K16']; ?></td>
                <td><?php echo $row['K17']; ?></td>
                <td><?php echo $row['K18']; ?></td>
                <td><?php echo $row['K19']; ?></td>
                <td><?php echo $row['K20']; ?></td>
            </tr>
        <?php } ?>
    </tbody>
</table>                                               
