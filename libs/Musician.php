<?php
class Musician implements iMusician
{
    protected $name;
    protected $gener;
    protected $instrument = array();
    protected $nameBand = array();

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
    public function assingToBand(iBand $nameBand)
    {
        $this->nameBand[$nameBand->getName()] = $nameBand->getGenre();
    }


    public function getMusicianType()
    {
        $musician = array(
            $this->name,
            $this->gener,
            $this->instrument,
            $this->nameBand
        );
        return $musician;
    }

}