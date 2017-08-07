<?php
class Musician implements iMusician
{
    protected $name;
    protected $gener;
    protected $instrument=array();

    public function  __construct($name, $gener)
    {
        $this->name = $name;
        $this->gener = $gener;
    }

    public function addInstrument(iInstrument $obj)
    {
        $this->instrument[$obj->getName()]=$obj->getCategory();
    }

    public function getInstrument()
    {
        return $this->instrument;
    }
    public function assingToBand(iBand $nameBand){}
    public function getMusicianType()
    {
        return $this->name . ' - '.$this->gener;
    }

}