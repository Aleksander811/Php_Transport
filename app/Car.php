<?php

namespace TRANSPORT;

class Car extends Base{
    private $modelis;
    private $spalva;

    public function __construct($id, $marke, $kaina, $svoris, $modelis, $spalva)
    {
      parent::__construct($id, $marke, $kaina, $svoris);
        $this->modelis = $modelis;
        $this->spalva = $spalva;
    }
    
}