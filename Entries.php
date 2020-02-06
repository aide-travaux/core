<?php

namespace AideTravaux\Core;

abstract class Entries
{
    /**
     * @property array
     */
    const CODES_REGION = [
        '01', '02', '03', '04', '06', '11', '24', '27', '28',
        '32', '44', '52', '53', '75', '76', '84', '93', '94'
    ];

    /**
     * @property array
     */
    const CATEGORIES_ANAH = [
        'cateogrie_anah_1' => 'Modeste',
        'cateogrie_anah_2' => 'Très modeste'
    ];

    /**
     * @property array
     */
    const CATEGORIES_CEE = [
        'categorie_cee_1' => 'Classique',
        'categorie_cee_2' => 'Précarité énergétique',
        'categorie_cee_3' => 'Grande précarité énergétique'
    ];

    /**
     * @property array
     */
    const SITUATIONS_CONJUGALES = [
        'situation_conjugale_1' => 'Célibataire, divorcé ou veuf',
        'situation_conjugale_2' => 'Marié ou pacsé'
    ];

    /**
     * @property array
     */
    const TYPE_PARTIES = [
        'type_partie_1' => 'Partie privative',
        'type_partie_2' => 'Partie commune'
    ];

    /**
     * @property array
     */
    const TYPES_LOGEMENT = [
        'type_logement_1' => 'Maison individuelle',
        'type_logement_2' => 'Appartement',
        'type_logement_3' => 'Bâtiment collectif'
    ];

    /**
     * @property array
     */
    const STATUTS_OCCUPANT_LOGEMENT = [
        'statut_occupant_logement_1' => 'Propriétaire occupant',
        'statut_occupant_logement_2' => 'Propriétaire bailleur',
        'statut_occupant_logement_3' => 'Locataire',
        'statut_occupant_logement_4' => 'Occupant à titre gratuit'
    ];

    /**
     * @property array
     */
    const TYPES_OCCUPATION_LOGEMENT = [
        'type_occupation_logement_1' => 'Résidence principale',
        'type_occupation_logement_2' => 'Résidence secondaire'
    ];

}
