<?php
    include "Sivitas.php";
class Mahasiswa extends Sivitas
{
    private $nim = "";
    private $prodi = "";
    private $fakultas = "";
    function __construct($n, $na, $j, $u, $e, $ni, $p, $f)
    {
        $this->setNik($n);
        $this->setNama($na);
        $this->setJk($j);
        $this->setAsalUniv($u);
        $this->setEmailEdu($e);
        $this->nim = $ni;
        $this->prodi = $p;
        $this->fakultas = $f;
    }
    function setNim($a)
    {
        $this->nim = $a;
    }
    function setProdi($a)
    {
        $this->prodi = $a;
    }
    function setFakultas($a)
    {
        $this->fakultas = $a;
    }

    function getNim()
    {
        return $this->nim;
    }
    function getProdi()
    {
        return $this->prodi;
    }
    function getFakultas()
    {
        return $this->fakultas;
    }
    function __destruct(){
        
    }
}
?>
