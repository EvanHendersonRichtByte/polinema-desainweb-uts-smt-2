<link rel="stylesheet" type="text/css" href="style.css">
<h1>Input Data Pasien</h1> 
<?php
    session_start();
    if(!isset($_SESSION[0])) {
        $_SESSION['tes'] = array();
        for ($i=0; $i < 10; $i++) { 
            $asd = $_POST['test'.$i];
            array_push($_SESSION['tes'],$asd);
        }
    }

    // $n = $_POST['n']; 
    $n = 2;
    $a = 0;
    $_SESSION['x'] = 0;

    // https://stackoverflow.com/questions/2306159/array-as-session-variable
    if($_POST['tambahData'] != 0){
        $a++;
        for ($i=0; $i < $n + $a; $i++) { 
            $_SESSION['sNama'.$i] = $_POST['dataN'.$i];
            $_SESSION['sID'.$i] = $_POST['dataID'.$i];
            $_SESSION['sHP'.$i] = $_POST['dataHP'.$i];
            $_SESSION['sT'.$i] = $_POST['dataT'.$i];
            $_SESSION['sB'.$i] = $_POST['dataB'.$i];
        }
        echo "
        <form method='post' action='f3.php'>
        <br><br><b>Pasien ke-".($n+$a)."</b>
        <table class='t1'>
            <tr>
                <td>Nama</td>
                <td>:</td>
                <td><input type='text' name='dataN".($i+$a)."' /></td>
            </tr>
            <tr>
                <td>No.Pasien</td>
                <td>:</td>
                <td><input type='text' name='dataID".($i+$a)."' /></td>
            </tr>
            <tr>
                <td>No.Telp</td>
                <td>:</td>
                <td><input type='text' name='dataHP".($i+$a)."' /></td>
            </tr>
            <tr>
                <td>Tinggi Badan</td>
                <td>:</td>
                <td><input type='text' name='dataT".($i+$a)."' /></td>
            </tr>
            <tr>
                <td>Berat Badan</td>
                <td>:</td>
                <td><input type='text' name='dataB".($i+$a)."' /></td>
            </tr>
        </table>
        ";
    }
    else{
        echo "<form method='post' action='f3.php'>"; 
        
        for ($i = 0; $i <= $n-1; $i++) 
        { 
            echo "<br><br><b>Pasien ke-".($i+1)."</b>";
            echo "<table class='t1'>"; 
            echo 
            "<tr>
                <td>Nama</td>
                <td>:</td>
                <td><input type='text' name='dataN".$i."' /></td>
            </tr>";
            echo 
            "<tr>
                <td>No.Pasien</td>
                <td>:</td>
                <td><input type='text' name='dataID".$i."' /></td>
            </tr>";
            echo 
            "<tr>
                <td>No.Telp</td>
                <td>:</td>
                <td><input type='text' name='dataHP".$i."' /></td>
            </tr>";
            echo 
            "<tr>
                <td>Tinggi Badan</td>
                <td>:</td>
                <td><input type='text' name='dataT".$i."' /></td>
            </tr>";
            echo 
            "<tr>
                <td>Berat Badan</td>
                <td>:</td>
                <td><input type='text' name='dataB".$i."' /></td>
            </tr>";
            echo "</table>";
        } 
        echo "<input type='submit' name='submit' value='Submit' />"; 
        echo "<input type='hidden' name='n' value='".$n."' />";
        
        echo "</form>";
    } 
?> 