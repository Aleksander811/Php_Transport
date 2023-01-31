<?php

namespace TRANSPORT;

class Base
{
    protected $id;
    protected $marke;
    protected $kaina;
    protected $svoris;


    // Constructor

    public function __construct($id, $marke, $kaina, $svoris)
    
    {
        $this->id = $id;
        $this->marke = $marke;
        $this->kaina = $kaina;
        $this->svoris = $svoris;
    }

    public function addSvoris($svoris){
        $this->svoris = $svoris;
    }

}
