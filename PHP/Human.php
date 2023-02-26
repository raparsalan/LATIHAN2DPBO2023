<?php
class Human
{
    private $nik = "";
    private $nama = "";
    private $jk = "";
    function __construct($n, $na, $j)
    {
        $this->nik = $n;
        $this->nama = $na;
        $this->jk = $j;
    }
    function setNik($a)
    {
        $this->nik = $a;
    }
    function setNama($a)
    {
        $this->nama = $a;
    }
    function setJk($a)
    {
        $this->jk = $a;
    }

    function getNik()
    {
        return $this->nik;
    }
    function getNama()
    {
        return $this->nama;
    }
    function getJk()
    {
        return $this->jk;
    }
    function __destruct(){
        
    }
}
?>
