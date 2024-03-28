<?php
class Lingkaran{
    /**
     * Acces Modifier
     * 1. public
     * 2. private
     * 3. protected
     */
    
    // atribut / properti
    private $jari;
    const PHI = 3.14;

    // method
    public function __construct($r)
    {
       $this->jari = $r;
    }

    public function getLuas(){
        return 0.5 * self::PHI * $this->jari * $this->jari;
    }

    public function getKeliling()
    {
       return 2 * self::PHI * $this->jari;
    }






}