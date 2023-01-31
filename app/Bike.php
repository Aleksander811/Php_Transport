<?php

namespace TRANSPORT;

class Bike extends Base{
    private $begiai;
    private $kategorija;

    public function __construct($id, $marke, $kaina, $svoris, $begiai, $kategorija)
    {
      parent::__construct($id, $marke, $kaina, $svoris);
        $this->begiai = $begiai;
        $this->kategorija = $kategorija;
    }
    
}