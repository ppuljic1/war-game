<?php  

// Require head 
require $_SERVER["DOCUMENT_ROOT"] . '/head.php';

// File containing fight logick
include $_SERVER["DOCUMENT_ROOT"] . '/story/fight.php';

// Create terain, wrather and armies
include $_SERVER["DOCUMENT_ROOT"] .'/story/createStoryElements.php';

// Output army one values
echo 'Army one:<br>Attack: '.$armyOne->getAttack().'&nbsp&nbsp&nbsp|&nbsp&nbsp&nbspHP: '.$armyOne->getHP().'&nbsp&nbsp&nbsp|&nbsp&nbsp&nbspStrategy index: '.$armyOne->getFeatures()->getStrategyIndex().'&nbsp&nbsp&nbsp|&nbsp&nbsp&nbspFidai: '.$armyOne->getFeatures()->getFidaiNum().'<br><br>';

// Output army two values
echo 'Army one:<br>Attack: '.$armyTwo->getAttack().'&nbsp&nbsp&nbsp|&nbsp&nbsp&nbspHP: '.$armyTwo->getHP().'&nbsp&nbsp&nbsp|&nbsp&nbsp&nbspStrategy index: '.$armyTwo->getFeatures()->getStrategyIndex().'&nbsp&nbsp&nbsp|&nbsp&nbsp&nbspFidai: '.$armyTwo->getFeatures()->getFidaiNum().'<br><br>';

// Start the fight
fight($armyOne, $armyTwo);

// Include footer
include $_SERVER["DOCUMENT_ROOT"] . '/footer.php';


?>