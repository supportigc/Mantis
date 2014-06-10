<?php


// #######################################################################################
// rajout du define du statut du champs etat:'livre/en attente de recette IGC-ABR 17-10-08
// + on supprime le define du statut 'confirmed' que l'on utilise pas  IGC-ABR 19-11-08 
// + on rajoute le define du statut 'transmis dev' pour le passage en dev IGC-ABR 22-12-08
// + on rajoute le define du statut 'repondu' pour les reponses Fx Pb, Requalif DE, etc  IGC-MCF 14-09-09
// #######################################################################################

         # status
  #      define( 'NEW_',                         10 );   # NEW seems to be a reserved keyword
  #      define( 'FEEDBACK',                     20 );
        define( 'PRIS',                         25 );
  #      define( 'ACKNOWLEDGED',         30 );
  #      define( 'ASSIGNED',                     50 );
        define( 'TRANSMIT',                     70 );
  #      define( 'RESOLVED',                     80 );
        define( 'REPONDU',                      83 );
        define( 'INTEST',                       85 );
   #     define( 'CLOSED',                       90 );

// #########################################################################################################
// rajout du define pour la resolution : on rajoute la resolution 'demande information -ABR 09-01-09
// rajout du define pour la resolution : on rajoute la resolution 'attente retour client -MCF 17-12-09
// #########################################################################################################

        # resolution
    #    define( 'OPEN',                                 10 );
    #    define( 'FIXED',                                20 );
    #    define( 'REOPENED',                             30 );
        define( 'ATTENTE_CLIENT',                       35 );
    #    define( 'UNABLE_TO_DUPLICATE',  40 );
    #    define( 'NOT_FIXABLE',                  50 );
    #    define( 'DUPLICATE',                    60 );
    #    define( 'NOT_A_BUG',                    70 );
        define( 'INFO',                    75 );
    #    define( 'SUSPENDED',                    80 );
    #    define( 'WONT_FIX',                             90 );

// #########################################################################################################
// rajout du define pour la severit� : on ne retient que mineur,majeur et critique  IGC-ABR 17-10-08
// #########################################################################################################

        # severity
    #    define( 'MINOR',        50 );
    #    define( 'MAJOR',        60 );
    #    define( 'CRASH',        70 );
?>
