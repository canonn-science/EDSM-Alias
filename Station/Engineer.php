<?php
/**
 * Elite Dangerous Star Map
 * @link https://www.edsm.net/
 */

namespace   Alias\Station;
use         EDSM\Alias;

class Engineer extends Alias
{
    use \EDSM\Alias\Station\Engineer;

    /**
     * List of names used in game
     */
    static protected $name      = [
         1                              => 'Hera Tani',
         2                              => 'Liz Ryder',
         3                              => 'Broo Tarquin',
         4                              => 'Tod \'The Blaster\' McQuinn',
         5                              => 'Selene Jean',
         6                              => 'Felicity Farseer',
         7                              => 'Marco Qwent',
         8                              => 'Professor Palin',
         9                              => 'Didi Vatermann',
        10                              => 'The Dweller',
        11                              => 'Colonel Bris Dekker',
        12                              => 'Elvira Martuuk',
        13                              => 'Lori Jameson',
        14                              => 'Juri Ishmaak',
        15                              => 'Zacariah Nemo',
        16                              => 'The Sarge',
        17                              => 'Lei Cheung',
        18                              => 'Ram Tah',
        19                              => 'Bill Turner',
        20                              => 'Tiana Fortune',
        21                              => 'Petra Olmanova',
        22                              => 'Marsha Hicks',
        23                              => 'Mel Brandon',
        24                              => 'Etienne Dorn',
        25                              => 'Trin Falcour',
    ];

    /**
     * List of aliases received from Frontier
     *
     * Every aliases are sanitized before matching
     *     => trim
     *     => strtolower
     */
    static protected $alias     = [
        'hera tani'                     => 1,
        300090                          => 1,

        'liz ryder'                     => 2,
        300080                          => 2,

        'broo tarquin'                  => 3,
        300030                          => 3,

        'tod \'the blaster\' mcquinn'   => 4,
        300260                          => 4,

        'selene jean'                   => 5,
        300210                          => 5,

        'felicity farseer'              => 6,
        300100                          => 6,

        'marco qwent'                   => 7,
        300200                          => 7,

        'professor palin'               => 8,
        300220                          => 8,

        'didi vatermann'                => 9,
        300000                          => 9,

        'the dweller'                   => 10,
        300180                          => 10,

        'colonel bris dekker'           => 11,
        300140                          => 11,

        'elvira martuuk'                => 12,
        300160                          => 12,

        'lori jameson'                  => 13,
        300230                          => 13,

        'juri ishmaak'                  => 14,
        300250                          => 14,

        'zacariah nemo'                 => 15,
        300050                          => 15,

        'the sarge'                     => 16,
        300040                          => 16,

        'lei cheung'                    => 17,
        300120                          => 17,

        'ram tah'                       => 18,
        300110                          => 18,

        'bill turner'                   => 19,
        300010                          => 19,

        'tiana fortune'                 => 20,
        300270                          => 20,

        'petra olmanova'                => 21,
        300130                          => 21,

        'marsha hicks'                  => 22,
        300150                          => 22,

        'mel brandon'                   => 23,
        300280                          => 23,

        'etienne dorn'                  => 24,
        300290                          => 24,

        'trin falcour'                  => 25,
        300070                          => 25,
    ];
}