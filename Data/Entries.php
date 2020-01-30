<?php

namespace AideTravaux\Core\Data;

abstract class Entries
{
    /**
     * Types de logement
     * @property array
     */
    const HOUSING_TYPES = [
        'housing_type_1' => 'Maison individuelle',
        'housing_type_2' => 'Appartement',
        'housing_type_3' => 'Immeuble collectif'
    ];

    /**
     * Situations conjugales
     * @property array
     */
    const MARITAL_STATUS = [
        'marital_status_1' => 'Célibataire, divorcé ou veuf',
        'marital_status_2' => 'Marié ou pacsé'
    ];

    /**
     * Statuts des occupants du logement
     * @property array
     */
    const HOUSING_OCCUPATION_STATUS = [
        'housing_occupation_status_1' => 'Propriétaire occupant',
        'housing_occupation_status_2' => 'Propriétaire bailleur',
        'housing_occupation_status_3' => 'Locataire',
        'housing_occupation_status_4' => 'Occupant à titre gratuit'
    ];

    /**
     * Occupations du logement
     * @property array
     */
    const HOUSING_OCCUPATION_TYPES = [
        'housing_occupation_type_1' => 'Résidence principale',
        'housing_occupation_type_2' => 'Résidence secondaire'
    ];

    /**
     * Catégories ANAH
     * @property array
     */
    const ANAH_CATEGORIES = [
        'anah_category_1' => 'Modeste',
        'anah_category_2' => 'Très modeste'
    ];

    /**
     * Localisation des travaux et prestations
     * @property array
     */
    const BUILDING_AREAS = [
        'building_area_1' => 'Partie privative',
        'building_area_2' => 'Partie commune'
    ];

    /**
     * Types de projet dans le cadre de l'éco-prêt à taux zéro
     * @property array
     */
    const EPTZ_PROJECT_TYPES = [
        'project_type_1' => 'Action seule',
        'project_type_2' => 'Bouquet de 2 travaux',
        'project_type_3' => 'Bouquet de 3 travaux ou plus',
        'project_type_4' => 'Performance énergétique globale',
        'project_type_5' => 'Assainissement non collectif'
    ];
}
