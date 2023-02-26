
<?php
    include "Mahasiswa.php";
    
    $Bintang = new mahasiswa("3202366654", "Bintang", "L", "UPI", "bintangfajar77@upi.edu", "2108852", "Ilkom", "FPMIPA");
    $listMhs = [];
    array_push($listMhs, $Bintang);
    $rayhan = new mahasiswa("", "", "", "", "", "", "", "");
    $rayhan->setNik("3202351254");
    $rayhan->setNama("Rayhan");
    $rayhan->setJk("L");
    $rayhan->setAsalUniv("UPN Veteran");
    $rayhan->setEmailEdu("rayhanimoetzz89@upn->edu");
    $rayhan->setNim("2103366");
    $rayhan->setProdi("Sastra Inggris");
    $rayhan->setFakultas("FPBS");
    array_push($listMhs, $rayhan);
    echo "<h3>Data Mahasiswa</h3><br>";
    for ($i=0; $i < count($listMhs); $i++) { 
        echo $i+1;
        echo '. NIK : '.$listMhs[$i]->getNiK().'<br>';
        echo '  NIM : '.$listMhs[$i]->getNim().'<br>'; 
        echo '  Nama : '.$listMhs[$i]->getNama().'<br>';
        echo '  Jenis Kelamin : '.$listMhs[$i]->getJk().'<br>';
        echo '  Asal Univ : '.$listMhs[$i]->getAsalUniv().'<br>';
        echo '  Email : '.$listMhs[$i]->getEmailEdu().'<br>';
        echo '  Program Studi : '.$listMhs[$i]->getProdi().'<br>';
        echo '  Fakultas :'.$listMhs[$i]->getFakultas().'<br>';
    }
    ?>
</html>
