<?php
include ('libs/config.php');
include ('libs/function.php');

//Instrument object
$guitar = new Instrument('guitar', 'string');
$drums = new Instrument('drums', 'percussion');
$plates = new Instrument('plates', 'percussion');
$piano = new Instrument('piano', 'keyboard');
$basGuitar = new Instrument('bas-guitar', 'string');
$electroacousticGuitar = new Instrument('electroacoustic guitar', 'string');

//Musician
$musician1 = new Musician('Brian May', 'Rock musician');
echo $musician1->getMusicianType();
$musician1->addInstrument($guitar);





include ('template/tmp.php')
?>