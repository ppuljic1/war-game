<?php
/*
 * 
 * In this file you can settup values for environment and garment classes
 *
 */

/*
 * SET VALUES FOR WEATHER
 */
define('WEATHER_TYPES', array('mist', 'rain', 'sun'));
define('WEATHER_DEFECT', 1000);
// Mist
define('MIST_DEFECTS', array(
    
    // Weapons
    'sniper rifle'          =>  20,
    'smoke bombs'           =>  3 ,
    'mace'                  =>  5 ,
    'ax'                    =>  4 ,

    // Garment
    'no shoes'              =>  1 ,
    'gogels'                =>  1 ,
    'binoculars'            =>  15,

));
define('MIST_BENEFITS', array(
    
    // Weapons
    'knife'                 =>  2 , 
    'shotgun'               =>  15,

    // Garment
    'knee padds'            =>  5 ,
    'army boots'            =>  10,

));

// Rain
define('RAIN_DEFECTS', array(
    
    // Weapons
    'sniper rifle'          =>  20,

    // Garment
    'regular pants'         =>  5 ,
    'regular shoes'         =>  3 ,
    'no shoes'              =>  0 ,
    'backpack'              =>  20,
    'gogels'                =>  10,

));
define('RAIN_BENEFITS', array(
    
    // Weapons
    'granades'              =>  30,
    'stun grenade'          =>  2 ,
    'mace'                  =>  5 ,

    // Garment
    'helmet'                =>  10,
    'army boots'            =>  10,
    'camo shirt'            =>  5 ,
    'camo pants'            =>  10,

));

// Sun
define('SUN_DEFECTS', array(
    
    // Weapons
    'sniper rifle'          =>  20,
    'flamethrower'          =>  15,
    'bazooka'               =>  30,
    'mace'                  =>  5 ,
    'ax'                    =>  4 ,

    // Garment
    'army boots'            =>  10,
    'bulletproof vest'      =>  20,
    'no pants'              =>  0 ,
    'riot shield'           =>  30,
    'no shirt'              =>  0 ,


));
define('SUN_BENEFITS', array(
    
    // Weapons
    'submachinegun'         =>  10,
    'granades'              =>  30,
    'handgun'               =>  5 ,

    // Garment
    'helmet'                =>  10,
    'gogels'                =>  10,
    'camo shirt'            =>  5 ,

));


/*
 * SET VALUES FOR TERRAIN
 */
define('TERRAIN_TYPES', array('forest', 'mountain', 'plain'));
define('TERRAIN_DEFECT', 1000);
 // Forest
define('FOREST_DEFECTS', array(
    
    // Weapons
    'sniper rifle'          =>  50,
    'granades'              =>  50,
    'bazooka'               =>  50,

    // Garment
    'no shoes'              =>  20,
    'binoculars'            =>  20,

));
define('FOREST_BENEFITS', array(
    
    // Weapons
    'shotgun'               =>  10,
    'stun grenade'          =>  20,
    'machete'               =>  20,
    'flamethrower'          =>  10,

    // Garment
    'camo pants'            =>  30,
    'army boots'            =>  30,
    'helmet'                =>  20,
    'knee padds'            =>  10,
    'camo shirt'            =>  30,

));

// Mountain
define('MOUNTAIN_DEFECTS', array(
    
    // Weapons
    'shotgun'               =>  20,
    'flamethrower'          =>  50,
    'bazooka'               =>  50,
    'mace'                  =>  40,
    'ax'                    =>  30,

    // Garment
    'no pants'              =>  20,
    'riot shield'           =>  30,
    'bulletproof vest'      =>  10,
    'no shirt'              =>  20

));
define('MOUNTAIN_BENEFITS', array(
    
    // Weapons
    'sniper rifle'          =>  20,
    'submachinegun'         =>  50,
    'handgun'               =>  50,

    // Garment
    'army boots'            =>  30,
    'gloves'                =>  20,
    'backpack'              =>  50,

));

// Plain
define('PLAIN_DEFECTS', array(
    
    // Weapons
    'smoke bombs'           =>  3 ,
    'handgun'               =>  5 ,
    'knife'                 =>  2 , 
    
    // Garment

));
define('PLAIN_BENEFITS', array(
    
    // Weapons
    'battle rifle'          =>  10,
    'sniper rifle'          =>  20,
    'bazooka'               =>  50,
    'mace'                  =>  5 ,
    'ax'                    =>  4 ,

    // Garment
    'regular shoes'         =>  3 ,
    'bulletproof vest'      =>  20,
    'riot shield'           =>  30,
    'binoculars'            =>  15,

));


/*
 * SET VALUES FOR GARMENTS
 */
define('LOWER_GARMENTS', array(
    
    'camo pants'            =>  20,
    'regular pants'         =>  10,
    'no pants'              =>  0 ,
    'army boots'            =>  20,
    'regular shoes'         =>  10,
    'no shoes'              =>  0 ,

));
define('SHIELD', array(
    
    'bulletproof vest'      =>  20,
    'riot shield'           =>  30,
    'helmet'                =>  20,
    'knee padds'            =>  10,
    'gas mask'              =>  15,

));
define('UPPER_GARMENTS', array(
    
    'camo shirt'            =>  20,
    'gloves'                =>  10,
    'gogels'                =>  10,
    'backpack'              =>  30,
    'binoculars'            =>  15,
    'no shirt'              =>  0 ,


));

/*
 * SET VALUES FOR WEAPONS
 */
define('PRIMARY_WEAPONS', array(
    
    'battle rifle'          =>  5 ,
    'sniper rifle'          =>  10,
    'flamethrower'          =>  10,
    'shotgun'               =>  6 ,
    'submachinegun'         =>  3 ,

));
define('SECONDARY_WEAPONS', array(
    
    'granades'              =>  15,
    'bazooka'               =>  50,
    'handgun'               =>  2 ,
    'smoke bombs'           =>  1 ,
    'stun grenade'          =>  1 ,

));
define('TERTIARY_WEAPONS', array(

    'knife'                 =>  1 , 
    'bat'                   =>  1 ,
    'machete'               =>  2 , 
    'mace'                  =>  4 ,
    'ax'                    =>  5 ,

));


/*
 * SET VALUES FOR SOLIDERS
 */
define('SOLIDER_TYPES', array('rambo','professional solider', 'amateur solider', 'general', 'doctor', 'delivery boy', 'fidai'));
// RAMBO
define(     'RAMBO_ATTACK'                          ,   60 );
define(     'RAMBO_HP'                              ,   80 );
define(     'RAMBO_STRATEGY_INDEX'                  ,   1  );
define(     'RAMBO_IS_FIDAI'                        ,   0  );
define(     'RAMBO_MAX_NUM'                         ,   5  );
define(     'RAMBO_MIN_NUM'                         ,   0  );
// PROFESIONAL SOLIDER
define(     'PROFESSIONAL_SOLIDER_ATTACK'           ,   20 );
define(     'PROFESSIONAL_SOLIDER_HP'               ,   60 );
define(     'PROFESSIONAL_SOLIDER_STRATEGY_INDEX'   ,   0  );
define(     'PROFESSIONAL_SOLIDER_IS_FIDAI'         ,   0  );
define(     'PROFESSIONAL_SOLIDER_MAX_NUM'          ,   5  );
// AMATEUR SOLIDER
define(     'AMATEUR_SOLIDER_ATTACK'                ,   5 );
define(     'AMATEUR_SOLIDER_HP'                    ,   40 );
define(     'AMATEUR_SOLIDER_STRATEGY_INDEX'        ,   0  ); 
define(     'AMATEUR_SOLIDER_IS_FIDAI'              ,   0  );
define(     'AMATEUR_SOLIDER_MAX_NUM'               ,   50 );
// GENERAL
define(     'GENERAL_ATTACK'                        ,   0  );
define(     'GENERAL_HP'                            ,   0  );
define(     'GENERAL_STRATEGY_INDEX'                ,   3  );
define(     'GENERAL_IS_FIDAI'                      ,   0  );
define(     'GENERAL_MAX_NUM'                       ,   4  );
define(     'GENERAL_MIN_NUM'                       ,   4  );
// DOCTOR
define(     'DOCTOR_ATTACK'                         ,   0  );
define(     'DOCTOR_HP'                             ,   180);
define(     'DOCTOR_STRATEGY_INDEX'                 ,   0  );
define(     'DOCTOR_IS_FIDAI'                       ,   0  );
define(     'DOCTOR_MAX_NUM'                        ,   10 );
define(     'DOCTOR_MIN_NUM'                        ,   3 );
// DELIVERY BOY
define(     'DELIVERY_BOY_ATTACK'                   ,   0  );
define(     'DELIVERY_BOY_HP'                       ,   40 );
define(     'DELIVERY_BOY_STRATEGY_INDEX'           ,   1  );
define(     'DELIVERY_BOY_IS_FIDAI'                 ,   0  );
define(     'DELIVERY_BOY_MAX_NUM'                  ,   5  );
define(     'DELIVERY_BOY_MIN_NUM'                  ,   0  );
// FIDAI
define(     'FIDAI_ATTACK'                          ,   0  );
define(     'FIDAI_HP'                              ,   0  );
define(     'FIDAI_STRATEGY_INDEX'                  ,   1  );
define(     'FIDAI_IS_FIDAI'                        ,   1  );
define(     'FIDAI_MAX_NUM'                         ,   5  );
define(     'FIDAI_MIN_NUM'                         ,   0  );


/*
 * SET MIN VALUES FOR ARMY ATTACK AND HP
 */
define('MIN_HP', 50000);
define('MIN_ATTACK', 300);