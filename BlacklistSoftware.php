<?php
/**
 * Elite: Dangerous Star Map
 *
 * @link        https://www.edsm.net
 * @copyright   Copyright (c) 2015-2018 EDSM.
 */

return array(
    // Global are software banned from every interaction
    'GLOBAL'    => array(
    
    ),
    
    // EDDN only banned software
    'EDDN'      => array(
        350,        // ED-IBE (API) 0.5.7
        347,        // ED-IBE (API) 0.5.8
        351,        // ED-IBE (API) 0.5.9
        354,        // ED-IBE (API) 0.6.0
        364,        // ED-IBE (API) 0.6.1
        373,        // ED-IBE (API) 0.6.3
        
        970,        // EDDI 3.0.1-rc2
        972,        // EDDI 3.0.1-rc3
        983,        // EDDI 3.0.1-rc4
    ),
    
    // Journal Event (Scan) only ban
    'Scan'      => array(
    
    ),
);