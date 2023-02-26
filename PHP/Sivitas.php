<?php
include "Human.php";
class Sivitas extends Human
{
    private $asalUniv = "";
    private $emailEdu = "";
    function __construct($n, $na, $j, $u, $e)
    {
        $this->setNik($n);
        $this->setNama($na);
        $this->setJk($j);
        $this->asalUniv = $u;
        $this->emailEdu = $e;
    }
    function setAsalUniv($a)
    {
        $this->asalUniv = $a;
    }
    function setEmailEdu($a)
    {
        $this->emailEdu = $a;
    }

    function getAsalUniv()
    {
        return $this->asalUniv;
    }
    function getEmailEdu()
    {
        return $this->emailEdu;
    }
    function __destruct(){
        
    }
}
?>
