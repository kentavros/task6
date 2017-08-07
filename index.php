<?php
include ('libs/function.php');

//Instrument object
$guitar = new Instrument('Guitar', 'string');
$drums = new Instrument('Drums', 'percussion');
$plates = new Instrument('Plates', 'percussion');
$piano = new Instrument('Piano', 'keyboard');
$basGuitar = new Instrument('Bas-guitar', 'string');
$electroacousticGuitar = new Instrument('Electroacoustic guitar', 'string');

//BAND
$band1 = new Band('QUEEN', 'Rock band');
$band2 = new Band('SMILE', 'Rock band');

//Musician
$musician1 = new Musician('Brian May', 'Guitar player');
$musician1->addInstrument($guitar);
$musician1->addInstrument($electroacousticGuitar);
$musician1->assingToBand($band1);
$musician1->assingToBand($band2);

$musician2 = new Musician('Roger Taylor', 'Drummer');
$musician2->addInstrument($drums);
$musician2->addInstrument($plates);
$musician2->assingToBand($band1);
$musician2->assingToBand($band2);

$musician3 = new Musician('Freddie Mercury', 'Pianist and vocalist');
$musician3->addInstrument($piano);
$musician3->assingToBand($band1);

$musician4 = new Musician('John Deacon', 'Bas-guitar player');
$musician4->addInstrument($basGuitar);
$musician4->addInstrument($electroacousticGuitar);
$musician4->assingToBand($band1);

$musician5 = new Musician('Timothy Staffell', 'Guitar player and vocalist');
$musician5->addInstrument($guitar);
$musician5->addInstrument($electroacousticGuitar);
$musician5->assingToBand($band2);

//BAND
$band1->addMusician($musician1);
$band1->addMusician($musician2);
$band1->addMusician($musician3);
$band1->addMusician($musician4);

$band2->addMusician($musician1);
$band2->addMusician($musician2);
$band2->addMusician($musician5);

//for template Band1
$queenName = $band1->getName();
$queenGenre = $band1->getGenre();
$membersBand1 = $band1->getMusician();
$arrMusBand1 = array(
    1 => $musician1->getMusicianType(),
    2 => $musician2->getMusicianType(),
    3 => $musician3->getMusicianType(),
    4 => $musician4->getMusicianType(),
);

//for template Band2
$smileName = $band2->getName();
$smileGenre = $band2->getGenre();
$membersBand2 = $band2->getMusician();
$arrMusBand2 = array(
    1 => $musician1->getMusicianType(),
    2 => $musician2->getMusicianType(),
    3 => $musician5->getMusicianType(),
);
//include template
include ('template/tmp.php')
?>