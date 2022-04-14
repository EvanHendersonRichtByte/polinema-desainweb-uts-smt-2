<link rel="stylesheet" type="text/css" href="style.css">
<h1>Daftar Sumbangan</h1><br>
<?php
    $n = $_POST['n'];
    $t = 0;
    echo
    "<table class='t2'>
        <tr>
            <td class='td2'>No.</td>
            <td class='td2'>Nama</td>
            <td class='td2'>No.Pasien</td>
            <td class='td2'>No.Telp</td>
            <td class='td2'>Tinggi Badan</td>
            <td class='td2'>Berat Badan</td>
        </tr>
    ";
    
    for ($i=0; $i <= $n - 1; $i++) 
    {
        // $t += $_POST['dataS'.$i];
        echo
        "<tr>
            <td class='td2'>".($i+1)."</td>
            <td class='td2'>".$_POST['dataN'.$i]."</td>
            <td class='td2'>".$_POST['dataID'.$i]."</td>
            <td class='td2'>".$_POST['dataHP'.$i]."</td>
            <td class='td2'>".$_POST['dataT'.$i]."</td>
            <td class='td2'>".$_POST['dataB'.$i]."</td>
        </tr>";
    }
    // echo 
    // "<tr>
    //     <td class='td2' colspan='4'>TOTAL SUMBANGAN </td>
    //     <td class='td2'>Rp.</td>
    //     <td class='td2'>".$t."</td>
    // </tr>";
    echo "</table>";
?> 