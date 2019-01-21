<?php
/**
 * Elite Dangerous Star Map
 * @link https://www.edsm.net/
 */

namespace   Alias\Codex;
use         EDSM\Alias;

class Description extends Alias
{
    static protected $defaultName       = null;

    /**
     * List of descriptions used in game
     */
    static protected $name  = [
        //11010                       => 'O Type Star',
        //    11011                       => 'O Type',
        //    11012                       => 'O Type Giant',
        //    11013                       => 'O Type Supergiant',
        //11020                       => 'B Type Star',
        //    11021                       => 'B Type',
        //    11022                       => 'B Type Giant',
        //    11023                       => 'B Type Supergiant',
        11030   => 'A type stars are hot white or bluish-white main sequence stars. They usually range in mass from 1.4 to 2.1 solar masses and have a surface temperature reaching 10,000 K.',
            11031   => 'A star in luminosity class I, II, III or IV, according to the Yerkes spectral classification.',
        //    11032                       => 'A Type Giant',
        //    11033                       => 'A Type Supergiant',
        //11040                       => 'F Type Star',
        //    11041                       => 'F Type',
         //   11042                       => 'F Type Giant',
        //    11043                       => 'F Type Supergiant',
        //11050                       => 'G Type Star',
        //    11051                       => 'G Type',
        //    11052                       => 'G Type Giant',
        //    11053                       => 'G Type Supergiant',
        //11060                       => 'K Type Star',
        //    11061                       => 'K Type',
        //    11062                       => 'K Type Giant',
        //    11063                       => 'K Type Supergiant',
        //11070                       => 'M Type Star',
        //    11071                       => 'M Type',
        //    11072                       => 'M Type Giant',
        //    11073                       => 'M Type Supergiant',
        //11080                       => 'L Type Star',
        //    11081                       => 'L Type',
        //11090                       => 'T Type Star',
        //    11091                       => 'T Type',
        //11100                       => 'T Tauri Type Star',
        //    11101                       => 'T Tauri Type',
        //11110                       => 'AEBE Type Star',
        //    11111                       => 'AEBE Type',
        //11120                       => 'Y Type Star',
        //    11121                       => 'Y Type',
        //11130                       => 'C Type Star',
        //    11131                       => 'C Type',
        //    11132                       => 'C Type Giant',
        //    11133                       => 'C Type Supergiant',
        //    11134                       => 'C Type Hypergiant',
        //11140                       => 'CN Type Star',
        //    11142                       => 'CN Type Giant',
        //11150                       => 'CJ Type Star',
        //    11152                       => 'CJ Type Giant',
        //11160                       => 'MS Type Star',
        //    11162                       => 'MS Type Giant',
        //11170                       => 'S Type Star',
        //    11171                       => 'S Type',
        //    11172                       => 'S Type Giant',
        //11180                       => 'Wolf-Rayet Star',
        //    11181                       => 'W Type',
        //    11183                       => 'WC Type',
        //    11184                       => 'WN Type',
        //    11185                       => 'WNC Type',
        //    11186                       => 'WO Type',
        //11190                       => 'White Dwarf Star',
         //   11191                       => 'D Type Star',
        //    11192                       => 'DA Type Star',
        //    11194                       => 'DAB Type Star',
        //    11196                       => 'DAV Type Star',
        //    11197                       => 'DAZ Type Star',
        //    11198                       => 'DB Type Star',
        //    11199                       => 'DBV Type Star',
        //    11200                       => 'DBZ Type Star',
        //    11204                       => 'DO Type Star',
        //    11205                       => 'DOV Type Star',
        //    11206                       => 'DQ Type Star',
        //11221                       => 'Neutron Star',
        //11231                       => 'Black Hole',



        //12010                       => 'Water Giant planet',
        //    12011                       => 'Standard Gas Giant',
        //12030                       => 'Gas giant planet with water-based life',
        //    12031                       => 'Standard Gas Giant',
        //    12032                       => 'Green gas giant',
        //12050                       => 'Gas giant planet with ammonia-based life',
        //    12051                       => 'Standard Gas Giant',
        //12070                       => 'Class I gas giant planet',
         //   12071                       => 'Standard Gas Giant',
        //12090                       => 'Class II gas giant planet',
        //    12091                       => 'Standard Gas Giant',
        //12110                       => 'Class III gas giant planet',
        //    12111                       => 'Standard Gas Giant',
        //12130                       => 'Class IV gas giant planet',
        //    12131                       => 'Standard Gas Giant',
        //12150                       => 'Class V gas giant planet',
        //    12151                       => 'Standard Gas Giant',
        //12170                       => 'Helium Gas Giant planet',
        //    12171                       => 'Standard Gas Giant',
        //12190                       => 'Helium-Rich Gas Giant planet',
        //    12191                       => 'Standard Gas Giant',



        13011                       => 'A terrestrial planet with an active water-based chemistry and indigenous carbon-water-based life. This planet\'s nitrogen-oxygen atmosphere is breathable for humans.',
        //13020                       => 'Ammonia planet',
        //    13021                       => 'Non Terraformable',
        //13030                       => 'Water planet',
        //    13031                       => 'Non Terraformable',
        //    13032                       => 'Terraformable',
        //13040                       => 'Metal-Rich planet with no atmosphere',
        //    13041                       => 'Non Terraformable',
        //13050                       => 'High Metal Content planet with no atmosphere',
        //    13051                       => 'Non Terraformable',
        //    13052                       => 'Terraformable',
        //13060                       => 'Rocky planet with no atmosphere',
        //    13061                       => 'Non Terraformable',
        //    13062                       => 'Terraformable',
        //13070                       => 'Rocky Ice planet with no atmosphere',
        //    13071                       => 'Non Terraformable',
        //13080                       => 'Ice planet with no atmosphere',
        //    13081                       => 'Non Terraformable',
        //13090                       => 'Metal-Rich planet with atmosphere',
        //    13091                       => 'Non Terraformable',
        //    13092                       => 'Terraformable',
        //13100                       => 'High Metal Content planet with atmosphere',
         //   13101                       => 'Non Terraformable',
         //   13102                       => 'Terraformable',
        //13110                       => 'Rocky planet with atmosphere',
         //   13111                       => 'Non Terraformable',
        //    13112                       => 'Terraformable',
       // 13120                       => 'Rocky Ice planet with atmosphere',
    //        13121                       => 'Non Terraformable',
       // 13130                       => 'Ice planet with atmosphere',
     //       13131                       => 'Non Terraformable',



        21010   => 'Fumaroles are gaps in a planet\'s crust through which gases and steam are emitted. The ejected material often accumulates around the opening',
            21011                       => 'A surface opening that emits high-pressure gas and minerals, found on terrestrial planets with sulphur dioxide magma.',
            21012                       => 'A surface opening that emits high-pressure gas and minerals, found on terrestrial planets with water geysers.',
            21013                       => 'A surface opening that emits high-pressure gas and minerals, found on terrestrial planets with silicate vapour geysers.',
       // 21030                       => 'Ice Fumarole',
            21031                       => 'A surface opening that emits high-pressure gas and minerals, found on terrestrial planets with sulphur dioxide magma.',
            21032                       => 'A surface opening that emits high-pressure gas and minerals, found on terrestrial planets with water geysers.',
       //     21033                       => 'Carbon Dioxide Ice Fumarole',
        //    21034                       => 'Ammonia Ice Fumarole',
        //    21035                       => 'Methane Ice Fumarole',
       //     21036                       => 'Nitrogen Ice Fumarole',
        //    21037                       => 'Silicate Vapour Ice Fumarole',
   //     21050                       => 'Geyser',
     //       21051                       => 'Water Geyser',
     //   21070                       => 'Ice Geyser',
    //        21071                       => 'Water Ice Geyser',
      //      21072                       => 'Carbon Dioxide Ice Geyser',
     //       21073                       => 'Ammonia Ice Geyser',
       ////     21074                       => 'Methane Ice Geyser',
      //      21075                       => 'Nitrogen Ice Geyser',
       // 21090                       => 'Lava Spout',
        //    21091                       => 'Silicate Magma Lava Spout',
         //   21092                       => 'Iron Magma Lava Spout',
     //   21110                       => 'Gas Vent',
    //        21111                       => 'Sulphur Dioxide Gas Vent',
     //       21112                       => 'Water Gas Vent',
     //       21113                       => 'Carbon Dioxide Gas Vent',
    //        21114                       => 'Silicate Vapour Gas Vent',
        21130                       => 'A dense accumulation of gas fixed in place at a Lagrange point, where the combined gravitational forces of multiple bodies create a stable region.',
            21131                       => 'A swirling blue cloud of gas fixed in place at a Lagrange point.',
            21132                       => 'A swirling green cloud of gas fixed in place at a Lagrange point.',
            21133                       => 'A swirling orange cloud of gas fixed in place at a Lagrange point.',
            21134                       => 'A swirling pink cloud of gas fixed in place at a Lagrange point.',
            21135                       => 'A swirling red cloud of gas fixed in place at a Lagrange point',
            21136                       => 'A swirling yellow cloud of gas fixed in place at a Lagrange point.',
            21137                       => 'A light accumulation of gas fixed in place at a Lagrange point.',
            21139                       => 'A swirling green cloud of gas fixed in place at a Lagrange point that produces irregular electrical discharges.',
            21141                       => 'A swirling pink cloud of gas fixed in place at a Lagrange point that produces irregular electrical discharges.',
            21142                       => 'A swirling red cloud of gas fixed in place at a Lagrange point that produces irregular electrical discharges.',
            21143                       => 'A swirling yellow cloud of gas fixed in place at a Lagrange point that produces irregular electrical discharges.',
     //   21150                       => 'P-Type Anomalies',
            21151                       => 'A high-energy phenomenon comprised of a dark core with a bright halo and ring of clouds. ',
            21154                       => 'A high-energy phenomenon comprised of a bright hazy core with a ring of thick glowing bands.',
     //   21170                       => 'Q-Type Anomalies',
            21172                       => 'A high-energy phenomenon comprised of a bright hazy core pulsing fast-moving rings of clouds.',
            21174                       => 'A high-energy phenomenon comprised of a pulsing irregular core with a halo of clouds.',
            21178                       => 'A high-energy phenomenon comprised of a bright core radiating intense light with a ring of clouds.',
            21179                       => 'A high-energy phenomenon comprised of a bright core radiating hazy light with a ring of clouds.',
     //   21190                       => 'L-Type Anomalies',
            21191                       => 'A high-energy phenomenon comprised of a bright pulsing sphere surrounded by particles with a billowing cloud trail.',
            21194                       => 'A high-energy phenomenon comprised of a bright slow-moving core with a cloud trail.',
            21195                       => 'A high-energy phenomenon comprised of a group of bright clusters bursting into smaller particles.',
            21196                       => 'A high-energy phenomenon comprised of a bright hazy core surrounded by swirling cloud rings.',
     //   21210                       => 'K-Type Anomalies',
            21211                       => 'A high-energy phenomenon comprised of wispy blue cloud patterns.',
            21212                       => 'A high-energy phenomenon comprised of slow-moving clumps of drifting particles.',
            21213                       => 'A high-energy phenomenon comprised of billowing multicoloured cloud patterns.',
            21214                       => 'A high-energy phenomenon comprised of wispy blue cloud patterns around a denser core.',
            21215                       => 'A high-energy phenomenon comprised of a slow-moving bright core trailing multicoloured rings.',
            21216                       => 'A high-energy phenomenon comprised of a billowing multicoloured cloud surrounded by scattered streaks.',
            21217                       => 'A high-energy phenomenon comprised of a bright blue-white core emitting scattered particles.',



        22011                       => 'These mineral structures are created by large colonies of ancient microorganisms.',
        22031                       => 'These mineral structures are created by large colonies of ancient microorganisms.',
     //   22050                       => 'Thargoid Barnacles',
            22051                       => 'These biological structures extract resources from a planet and convert them into meta-alloys, a key component in the creation of Thargoid ships and technologies.',
            22052                       => 'These biological structures extract resources from a planet and convert them into meta-alloys, a key component in the creation of Thargoid ships and technologies.',
            22053                       => 'These biological structures are typically found near Thargoid barnacles. Smaller ones contain rare elements, while larger ones contain meta-alloys.',
      //  22070                       => 'Brain Trees',
            22071                       => 'These resilient organic structures absorb minerals via their subsurface roots and energy via their outer skin.',
            22072                       => 'These resilient organic structures absorb minerals via their subsurface roots and energy via their outer skin.',
            22073                       => 'These resilient organic structures absorb minerals via their subsurface roots and energy via their outer skin.',
            22074                       => 'These resilient organic structures absorb minerals via their subsurface roots and energy via their outer skin.',
            22075                       => 'These resilient organic structures absorb minerals via their subsurface roots and energy via their outer skin.',
            22076                       => 'These resilient organic structures absorb minerals via their subsurface roots and energy via their outer skin.',
            22077                       => 'These resilient organic structures absorb minerals via their subsurface roots and energy via their outer skin.',
            22078                       => 'These resilient organic structures absorb minerals via their subsurface roots and energy via their outer skin.',
        22091                       => 'These organic structures survive by absorbing elements from nova and supernova, with the dense outer layer protecting them from the severest radiation.',
      //  22110                       => 'Anemones',
            22111                       => 'These organic structures can tolerate a wide range of temperatures, and are able to absorb energy from nearby stars.',
            22112                       => 'These organic structures can tolerate a wide range of temperatures, and are able to absorb energy from nearby stars.',
            22113                       => 'These organic structures can tolerate a wide range of temperatures, and are able to absorb energy from nearby stars.',
            22114                       => 'These organic structures can tolerate a wide range of temperatures, and are able to absorb energy from nearby stars.',
            22115                       => 'These organic structures can tolerate a wide range of temperatures, and are able to absorb energy from nearby stars.',
            22116                       => 'These organic structures can tolerate a wide range of temperatures, and are able to absorb energy from nearby stars.',
            22117                       => 'These organic structures can tolerate a wide range of temperatures, and are able to absorb energy from nearby stars.',
            22118                       => 'These organic structures can tolerate a wide range of temperatures, and are able to absorb energy from nearby stars.',
      //  22130                       => 'Sinuous Tubers',
            22131                       => 'These organic structures are merely the above-ground portion of a much larger subterranean organism.',
      //  22150                       => 'Metallic Crystals',
            22151                       => 'These crystalline structures are created by huge numbers of primordial microorganisms.',
            22152                       => 'These crystalline structures are created by huge numbers of primordial microorganisms.',
            22153                       => 'These crystalline structures are created by huge numbers of primordial microorganisms.',
            22154                       => 'These crystalline structures are created by huge numbers of primordial microorganisms.',
     //   22170                       => 'Collared Pods',
            22171                       => 'These organisms absorb energy through their distinctive collar.',
            22172                       => 'These organisms absorb energy through their distinctive collar.',
            22173                       => 'These organisms absorb energy through their distinctive collar.',
            22174                       => 'These organisms absorb energy through their distinctive collar.',
     //   22190                       => 'Gourd Mollusc',
            22191                       => 'A gourd-shaped organism that feeds off starlight converted into chemical energy.',
            22192                       => 'A gourd-shaped organism that feeds off starlight converted into chemical energy.',
            22193                       => 'A gourd-shaped organism that feeds off starlight converted into chemical energy.',
            22194                       => 'A gourd-shaped organism that feeds off starlight converted into chemical energy.',
            22195                       => 'A gourd-shaped organism that feeds off starlight converted into chemical energy.',
            22196                       => 'A gourd-shaped organism that feeds off starlight converted into chemical energy.',
            22197                       => 'A gourd-shaped organism that feeds off starlight converted into chemical energy.',
      //  22210                       => 'Ice crystals',
            22211                       => 'These crystalline structures are created by microorganisms believed to be some of the oldest life forms in the galaxy.',
            22212                       => 'These crystalline structures are created by microorganisms believed to be some of the oldest life forms in the galaxy.',
            22213                       => 'These crystalline structures are created by microorganisms believed to be some of the oldest life forms in the galaxy.',
            22214                       => 'These crystalline structures are created by microorganisms believed to be some of the oldest life forms in the galaxy.',
            22215                       => 'These crystalline structures are created by microorganisms believed to be some of the oldest life forms in the galaxy.',
            22216                       => 'These crystalline structures are created by microorganisms believed to be some of the oldest life forms in the galaxy.',
            22217                       => 'These crystalline structures are created by microorganisms believed to be some of the oldest life forms in the galaxy.',
    //    22230                       => 'Silicate crystals',
            22231                       => 'These dense crystalline structures are created by large colonies of ancient microorganisms.',
            22232                       => 'These dense crystalline structures are created by large colonies of ancient microorganisms.',
            22233                       => 'These dense crystalline structures are created by large colonies of ancient microorganisms.',
            22234                       => 'These dense crystalline structures are created by large colonies of ancient microorganisms.',
            22235                       => 'These dense crystalline structures are created by large colonies of ancient microorganisms.',
        22251                       => 'These crystalline structures are created by large colonies of microorganisms.',
      //  22270                       => 'Peduncle pods',
            22271                       => 'These robust seed pods contain both seeds and spores.',
            22272                       => 'These robust seed pods contain both seeds and spores.',
            22273                       => 'These robust seed pods contain both seeds and spores.',
            22274                       => 'These robust seed pods contain both seeds and spores.',
            22275                       => 'These robust seed pods contain both seeds and spores.',
    //    22290                       => 'Peduncle trees',
            22291                       => 'These organic structures are able to survive and propagate in the vacuum of space.',
            22292                       => 'These organic structures are able to survive and propagate in the vacuum of space.',
            22293                       => 'These organic structures are able to survive and propagate in the vacuum of space.',
            22294                       => 'These organic structures are able to survive and propagate in the vacuum of space.',
            22295                       => 'These organic structures are able to survive and propagate in the vacuum of space.',
        22311                       => 'These organic structures take their name from a type of container dating from Earth\'s Neolithic period.',
      //  22330                       => 'Bell Molluscs',
            22331                       => 'A bell-shaped organism with distinctive linear patterns on its underside, which feeds off starlight converted into chemical energy.',
            22332                       => 'A bell-shaped organism with distinctive linear patterns on its underside, which feeds off starlight converted into chemical energy.',
            22333                       => 'A bell-shaped organism with distinctive linear patterns on its underside, which feeds off starlight converted into chemical energy.',
      //  22350                       => 'Umbrella Molluscs',
            22351                       => 'This organism is protected by a umbrella-shaped husk, allowing it to survive for millennia in the vacuum of space.',
            22352                       => 'This organism is protected by a umbrella-shaped husk, allowing it to survive for millennia in the vacuum of space.',
            22353                       => 'This organism is protected by a umbrella-shaped husk, allowing it to survive for millennia in the vacuum of space.',
      //  22370                       => 'Capsule Molluscs',
            22371                       => 'This organism is protected by a capsule-shaped husk, allowing it to survive for millennia in the vacuum of space.',
      //  22390                       => 'Reel Molluscs',
            22391                       => 'This organism is protected by a reel-shaped husk, allowing it to survive for millennia in the vacuum of space.',
            22392                       => 'This organism is protected by a reel-shaped husk, allowing it to survive for millennia in the vacuum of space.',
      //  22410                       => 'Octahedral Pods',
            22411                       => 'These seed pods are distinguished by their leathery exterior and colourful bioluminescence.',
     //   22430                       => 'Void Hearts',
            22431                       => 'These organic structures, sometimes called barbed knots, are noted for periodically emitting tremendous bursts of heat and light.',
     //   22450                       => 'Parasol Molluscs',
            22451                       => 'This organism is protected by a parasol-shaped husk, allowing it to survive for millennia in the vacuum of space.',
            22452                       => 'This organism is protected by a parasol-shaped husk, allowing it to survive for millennia in the vacuum of space.',
            22453                       => 'This organism is protected by a parasol-shaped husk, allowing it to survive for millennia in the vacuum of space.',
      //  22470                       => 'Bulb Molluscs',
            22472                       => 'This organism is protected by a bulb-shaped husk, allowing it to survive for millennia in the vacuum of space.',
            22473                       => 'This organism is protected by a bulb-shaped husk, allowing it to survive for millennia in the vacuum of space.',
        22490                       => 'These seed pods are colloquially known as space oysters due to the pearlescent object seomtimes found at the center of the pod.',
            22491                       => 'These organisms are characterised by their long, slender limbs, which often terminate in a large seed pod.',
            22492                       => 'These organisms are characterised by their long, slender limbs, which often terminate in a large seed pod.',
        22510                       => 'These seed pods are so called because of their ressemblance to the roots of certain terrestrial plants.',
            22511                       => 'The parent organism of these seed pods has not been identified, and it is possible that they are entirely self-contained.',
            22512                       => 'The parent organism of these seed pods has not been identified, and it is possible that they are entirely self-contained.',
            22513                       => 'The parent organism of these seed pods has not been identified, and it is possible that they are entirely self-contained.',
            22514                       => 'The parent organism of these seed pods has not been identified, and it is possible that they are entirely self-contained.',
            22515                       => 'The parent organism of these seed pods has not been identified, and it is possible that they are entirely self-contained.',



        31010                       => 'Powerful Thargoid ships that combine both mechanical and organic elements',
            31011                       => 'These ships are able to navigate hyperspace in ways that are not fully understood, and are at least partly organic.',
            31012                       => 'These ships are able to navigate hyperspace in ways that are not fully understood, and are at least partly organic.',
            31013                       => 'These ships are able to navigate hyperspace in ways that are not fully understood, and are at least partly organic.',
            31014                       => 'These ships are able to navigate hyperspace in ways that are not fully understood, and are at least partly organic.',
            31015                       => 'The wreckage of a Thargoid Interceptor, a Thargoid attack ship.',
        31021                       => 'Biomechanical constructs created by the Thargoids.',
        //31030                       => 'Thargoid Scouts',
            31031                       => 'These attack craft are typically encountered in small groups.',
            31032                       => 'This ship can increase the damage output of nearby Thargoid Scouts.',
            31033                       => 'This ship can increase the speed and manoeuvrability of nearby Thargoid Scouts.',
            31034                       => 'This ship can remotely repair damage to nearby Thargoid Scouts.',
            31035                       => 'The wreckage of a Thargoid Scout, a small Thargoid attack ship.',
        31041                       => 'A piece of Thargoid technology.',
        31051                       => 'These cyst-like growths are a symptom of Thargoid interference with a planet\'s ecology.',
        31061                       => 'These devices are able to generate holographic star maps.',



        32011                       => 'A data-storage device created several million years ago by the Guardians, an extinct nonhuman civilisation.',
        32021                       => 'A data-storage device created several million years ago by the Guardians, an extinct nonhuman civilisation.',
        32031                       => 'A structure created several million years ago by the Guardians, an extinct nonhuman civilisation.',
        32041                       => 'A structure created several million years ago by the Guardians, an extinct nonhuman civilisation.',
        32051                       => 'These constructs were created by the Guardians to defend sites of importance. They are still fully functional despite being several million years old.',
        32061                       => 'A vast, space-based structure created several million years ago by the Guardians, an extinct nonhuman civilisation.',
    ];
}