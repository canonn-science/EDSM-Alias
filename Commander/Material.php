<?php
/**
 * Elite: Dangerous Star Map
 *
 * @link        https://www.edsm.net/
 * @copyright   Copyright (c) 2015-2017 EDSM.
 */
 
namespace   Alias\Commander;
use         EDSM\Alias;

class Material extends Alias
{
    use \EDSM\Alias\Commander\Data;
    
    static protected $max       = 1000;
    
    /**
     * List of names used in game
     */
    static protected $name      = [
         1  => 'Antimony',
         2  => 'Arsenic',
         3  => 'Basic Conductors',
         4  => 'Biotech Conductors',
         5  => 'Cadmium',
         6  => 'Carbon',
         7  => 'Chemical Distillery',
         8  => 'Chemical Manipulators',
         9  => 'Chemical Processors',
        10  => 'Chemical Storage Units',
        11  => 'Chromium',
        12  => 'Compact Composites',
        13  => 'Compound Shielding',
        14  => 'Conductive Ceramics',
        15  => 'Conductive Components',
        16  => 'Conductive Polymers',
        17  => 'Configurable Components',
        18  => 'Core Dynamics Composites',
        19  => 'Crystal Shards',
        20  => 'Electrochemical Arrays',
        21  => 'Exquisite Focus Crystals',
        22  => 'Filament Composites',
        23  => 'Flawed Focus Crystals',
        24  => 'Focus Crystals',
        25  => 'Galvanising Alloys',
        26  => 'Germanium',
        27  => 'Grid Resistors',
        28  => 'Heat Conduction Wiring',
        29  => 'Heat Dispersion Plate',
        30  => 'Heat Exchangers',
        31  => 'Heat Resistant Ceramics',
        32  => 'Heat Vanes',
        33  => 'High Density Composites',
        34  => 'Hybrid Capacitors',
        35  => 'Imperial Shielding',
        36  => 'Improvised Components',
        37  => 'Iron',
        38  => 'Manganese',
        39  => 'Mechanical Components',
        40  => 'Mechanical Equipment',
        41  => 'Mechanical Scrap',
        42  => 'Mercury',
        43  => 'Military Grade Alloys',
        44  => 'Military Supercapacitors',
        45  => 'Molybdenum',
        46  => 'Nickel',
        47  => 'Niobium',
        48  => 'Pharmaceutical Isolators',
        49  => 'Phase Alloys',
        50  => 'Phosphorus',
        51  => 'Polonium',
        52  => 'Polymer Capacitors',
        53  => 'Precipitated Alloys',
        54  => 'Proprietary Composites',
        55  => 'Proto Heat Radiators',
        56  => 'Proto Light Alloys',
        57  => 'Proto Radiolic Alloys',
        58  => 'Refined Focus Crystals',
        59  => 'Ruthenium',
        60  => 'Salvaged Alloys',
        61  => 'Selenium',
        62  => 'Shield Emitters',
        63  => 'Shielding Sensors',
        64  => 'Sulphur',
        65  => 'Technetium',
        66  => 'Tellurium',
        67  => 'Tempered Alloys',
        68  => 'Thermic Alloys',
        69  => 'Tin',
        70  => 'Tungsten',
        71  => 'Sensor Fragment',
        72  => 'Vanadium',
        73  => 'Worn Shield Emitters',
        74  => 'Yttrium',
        75  => 'Zinc',
        76  => 'Zirconium',
        77  => 'Thargoid Carapace',
        78  => 'Thargoid Energy Cell',
        79  => 'Thargoid Technology Components',
        80  => 'Thargoid Organic Circuitry',
        81  => 'Propulsion Elements',
        82  => 'Wreckage Components',
        83  => 'Bio-Mechanical Conduits',
        84  => 'Weapon Parts',
        85  => 'Rhenium',
        86  => 'Lead',
        87  => 'Boron',
    ];
    
    /**
     * List of aliases received from Frontier
     * 
     * Every aliases are sanitized before matching
     *     => trim
     *     => strtolower
     */
    static protected $alias     = [
        'antimony'                      => 1,
        'arsenic'                       => 2,
        'basicconductors'               => 3,
        'biotechconductors'             => 4,
        'cadmium'                       => 5,
        'carbon'                        => 6,
        'chemicaldistillery'            => 7,
        'chemicalmanipulators'          => 8,
        'chemicalprocessors'            => 9,
        'chemicalstorageunits'          => 10,
        'chromium'                      => 11,
        'compactcomposites'             => 12,
        'compoundshielding'             => 13,
        'conductiveceramics'            => 14,
        'conductivecomponents'          => 15,
        'conductivepolymers'            => 16,
        'configurablecomponents'        => 17,
        'fedcorecomposites'             => 18,
        'crystalshards'                 => 19,
        'electrochemicalarrays'         => 20,
        'exquisitefocuscrystals'        => 21,
        'filamentcomposites'            => 22,
        'uncutfocuscrystals'            => 23,
        'focuscrystals'                 => 24,
        'galvanisingalloys'             => 25,
        'germanium'                     => 26,
        'gridresistors'                 => 27,
        'heatconductionwiring'          => 28,
        'heatdispersionplate'           => 29,
        'heatexchangers'                => 30,
        'heatresistantceramics'         => 31,
        'heatvanes'                     => 32,
        'highdensitycomposites'         => 33,
        'hybridcapacitors'              => 34,
        'imperialshielding'             => 35,
        'improvisedcomponents'          => 36,
        'iron'                          => 37,
        'manganese'                     => 38,
        'mechanicalcomponents'          => 39,
        'mechanicalequipment'           => 40,
        'mechanicalscrap'               => 41,
        'mercury'                       => 42,
        'militarygradealloys'           => 43,
        'militarysupercapacitors'       => 44,
        'molybdenum'                    => 45,
        'nickel'                        => 46,
        'niobium'                       => 47,
        'pharmaceuticalisolators'       => 48,
        'phasealloys'                   => 49,
        'phosphorus'                    => 50,
        'polonium'                      => 51,
        'polymercapacitors'             => 52,
        'precipitatedalloys'            => 53,
        'fedproprietarycomposites'      => 54,
        'protoheatradiators'            => 55,
        'protolightalloys'              => 56,
        'protoradiolicalloys'           => 57,
        'refinedfocuscrystals'          => 58,
        'ruthenium'                     => 59,
        'salvagedalloys'                => 60,
        'selenium'                      => 61,
        'shieldemitters'                => 62,
        'shieldingsensors'              => 63,
        'sulphur'                       => 64,
        'technetium'                    => 65,
        'tellurium'                     => 66,
        'temperedalloys'                => 67,
        'thermicalloys'                 => 68,
        'tin'                           => 69,
        'tungsten'                      => 70,
        'unknownenergysource'           => 71,
        'vanadium'                      => 72,
        'wornshieldemitters'            => 73,
        'yttrium'                       => 74,
        'zinc'                          => 75,
        'zirconium'                     => 76,
        'unknowncarapace'               => 77,
        'unknownenergycell'             => 78,
        'unknowntechnologycomponents'   => 79,
        'unknownorganiccircuitry'       => 80,
        'tg_propulsionelement'          => 81,
        'tg_wreckagecomponents'         => 82,
        'tg_biomechanicalconduits'      => 83,
        'tg_weaponparts'                => 84,
    ];
    
    /**
     * List of grades used in game
     * 
     * 1    => Very common
     * 2    => Common
     * 3    => Standard
     * 4    => Rare
     * 5    => Very rare
     */
    static protected $grade     = [
         1  => 'Very rare',
         2  => 'Standard',
         3  => 'Very common',
         4  => 'Very rare',
         5  => 'Rare',
         6  => 'Very common',
         7  => 'Standard',
         8  => 'Rare',
         9  => 'Common',
        10  => 'Very common',
        11  => 'Common',
        12  => 'Very common',
        13  => 'Rare',
        14  => 'Standard',
        15  => 'Common',
        16  => 'Rare',
        17  => 'Rare',
        18  => 'Very rare',
        19  => 'Very common',
        20  => 'Standard',
        21  => 'Very rare',
        22  => 'Common',
        23  => 'Common',
        24  => 'Standard',
        25  => 'Common',
        26  => 'Common',
        27  => 'Very common',
        28  => 'Very common',
        29  => 'Common',
        30  => 'Standard',
        31  => 'Common',
        32  => 'Rare',
        33  => 'Standard',
        34  => 'Common',
        35  => 'Very rare',
        36  => 'Very rare',
        37  => 'Very common',
        38  => 'Common',
        39  => 'Standard',
        40  => 'Common',
        41  => 'Very common',
        42  => 'Rare',
        43  => 'Very rare',
        44  => 'Very rare',
        45  => 'Rare',
        46  => 'Very common',
        47  => 'Standard',
        48  => 'Very rare',
        49  => 'Standard',
        50  => 'Very common',
        51  => 'Very rare',
        52  => 'Rare',
        53  => 'Standard',
        54  => 'Rare',
        55  => 'Very rare',
        56  => 'Rare',
        57  => 'Very rare',
        58  => 'Rare',
        59  => 'Very rare',
        60  => 'Very common',
        61  => 'Standard',
        62  => 'Common',
        63  => 'Standard',
        64  => 'Very common',
        65  => 'Very rare',
        66  => 'Very rare',
        67  => 'Rare',
        68  => 'Very common',
        69  => 'Rare',
        70  => 'Standard',
        71  => 'Very rare',
        72  => 'Common',
        73  => 'Very common',
        74  => 'Rare',
        75  => 'Common',
        76  => 'Standard',
        77  => 'Very rare',
        78  => 'Standard',
        79  => 'Rare',
        80  => 'Very rare',
        81  => 'Very rare',
        82  => 'Standard',
        83  => 'Standard',
        84  => 'Rare',
        85  => 'Very common',
        86  => 'Very common',
        87  => 'Standard',
    ];
    
    /**
     * List of manufactured materials
     */
    static protected $isManufactured    = [
        3, 4, 7, 8, 9, 10,
        12, 13, 14, 15, 16, 17, 18, 19,
        20, 21, 22, 23, 24, 25, 27, 28, 29,
        30, 31, 32, 33, 34, 35, 36, 39,
        40, 41, 43, 44, 48, 49,
        52, 53, 54, 55, 56, 57, 58, 
        60, 62, 63, 67, 68,
        71, 73, 77, 78, 79,
        80,
    ];
}