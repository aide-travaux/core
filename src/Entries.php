<?php

namespace AideTravaux;

abstract class Entries
{
    /**
     * Types de logement
     */
    const HOUSING_TYPES = [
        'maison_individuelle' => 'Maison individuelle',
        'appartement' => 'Appartement',
        'immeuble_collectif' => 'Immeuble collectif'
    ];

    /**
     * Situations conjugales
     */
    const MARITAL_STATUS = [
        'celibataire' => 'Célibataire',
        'marie' => 'Marié(e)',
        'pacse' => 'Pacsé(e)',
        'union_libre' => 'Union libre'
    ];

    /**
     * Statuts des occupants du logement
     */
    const HOUSING_OCCUPATION_STATUS = [
        'proprietaire_occupant' => 'Propriétaire occupant',
        'proprietaire_bailleur' => 'Propriétaire bailleur',
        'locataire' => 'Locataire',
        'loge_gratuitement' => 'Occupant à titre gratuit'
    ];

    /**
     * Occupations du logement
     */
    const HOUSING_OCCUPATION_TYPES = [
        'residence_principale' => 'Résidence principale',
        'residence_secondaire' => 'Résidence secondaire'
    ];

    /**
     * Catégories ANAH
     */
    const ANAH_CATEGORIES = [
        'modeste' => 'Modeste',
        'tres_modeste' => 'Très modeste'
    ];

    /**
     * Localisation des travaux et prestations
     */
    const BUILDING_AREAS = [
        'partie_privative' => 'Partie privative',
        'partie_commune' => 'Partie commune'
    ];
}
