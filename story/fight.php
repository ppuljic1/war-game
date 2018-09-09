<?php 

function fight($armyOne, $armyTwo) {

    // When true, fidai has killed the general and the fight is over
    $fidaiFlag = false;
    // Number of turns played
    $turnNmb = 0;

    // Determens which army attacks firs
    // If even number -> army 2 attacks else army 1
    if( isEven(rand(1,100)) ) {

        $firstName              =   'Army two';
        $firstHP                =   $armyTwo->getHP();
        $firstAttack            =   $armyTwo->getAttack();
        $firstStrategyIndex     =   $armyTwo->getFeatures()->getStrategyIndex();
        $firstFidaiNum          =   $armyTwo->getFeatures()->getFidaiNum();
        $firstFidaiFlag         =   false;

        $secondName             =   'Army one';
        $secondHP               =   $armyOne->getHP();
        $secondAttack           =   $armyOne->getAttack();
        $secondStrategyIndex    =   $armyOne->getFeatures()->getStrategyIndex();
        $secondFidaiNum         =   $armyOne->getFeatures()->getFidaiNum();
        $secondFidaiFlag        =   false;


    } else {

        $firstName              =   'Army one';
        $firstHP                =   $armyOne->getHP();
        $firstAttack            =   $armyOne->getAttack();
        $firstStrategyIndex     =   $armyOne->getFeatures()->getStrategyIndex();
        $firstFidaiNum          =   $armyOne->getFeatures()->getFidaiNum();
        $firstFidaiFlag         =   false;

        $secondName             =   'Army two';
        $secondHP               =   $armyTwo->getHP();
        $secondAttack           =   $armyTwo->getAttack();
        $secondStrategyIndex    =   $armyTwo->getFeatures()->getStrategyIndex();
        $secondFidaiNum         =   $armyTwo->getFeatures()->getFidaiNum();
        $secondFidaiFlag        =   false;

    }


    // Fight logic
    do {

        if( isEven($turnNmb) ) {

            if( ($turnNmb % $firstStrategyIndex) != 0 ) {

                if( $firstFidaiNum > 0 ) {

                    for( $i = 0; $i < $firstFidaiNum; $i++ ) {

                        if( fidaiGamble() ) {
                            $firstFidaiFlag = true;
                        }
                    
                    }

                }
                
                $secondHP -= $firstAttack;

            } else {

                $turnNmb++;
                continue;

            }

        } else {

            if( ($turnNmb % $secondStrategyIndex) != 0 ) {

                if( $secondFidaiNum > 0 ) {

                    for( $i = 0; $i < $secondFidaiNum; $i++ ) {

                        if( fidaiGamble() ) {
                            $secondFidaiFlag = true;
                        }

                    }

                }
                
                $firstHP -= $secondAttack;

            } else {

                $turnNmb++;
                continue;

            }

        }

        $turnNmb++;

    } while( !$firstFidaiFlag && !$secondFidaiFlag && $firstHP > 0 && $secondHP > 0 );
    
    // Output results
    echo "Fight results: <br>";
    if( $firstFidaiFlag ) {

        echo "$firstName is victorious! Their faithful fidai assassinated enemy general and so they fled in fear and terror!";

    } else if( $secondFidaiFlag ) {

        echo "$secondName is victorious! Their faithful fidai assassinated enemy general and so they fled in fear and terror!";

    } else if( $firstHP <= 0 ) {

        echo "$secondName is victorious!";

    } else if( $secondHP <= 0 ) {

        echo "$firstName is victorious!";

    }
    echo "<br><br>Number of attacks: $turnNmb";

}

function isEven($number) {

    if( $number%2 == 0 ) {

        return true;

    } else {

        return false;

    }

}


// 
function fidaiGamble() {

    $randomNumber = rand(1,300);
    
    if( $randomNumber == 67  ) {

        return true;

    } else {

        return false;

    }

}