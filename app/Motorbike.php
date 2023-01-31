<?php

namespace TRANSPORT;

class Motorbike extends Base{
    private $ratai;
    private $variklis;

    public function __construct($id, $marke, $kaina, $svoris, $ratai, $variklis)
    {
      parent::__construct($id, $marke, $kaina, $svoris);
        $this->ratai = $ratai;
        $this->variklis = $variklis;  
    }
    
}