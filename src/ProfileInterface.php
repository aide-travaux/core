<?php

namespace AideTravaux;

interface ProfileInterface
{
    /**
     * Retourne le statut des occupants du logement
     * @return string
     */
    public function getHousingOccupationStatus(): string;

    /**
     * Retourne le type d'occupation du logement
     * @return string
     */
    public function getHousingOccupationSType(): string;

    /**
     * Retourne l'âge du bâtiment
     * @return int
     */
    public function getBuildingExistence(): int;

    /**
     * Retourne la catégorie de ressource du ménage selon l'ANAH
     * @return string
     */
    public function getAnahCategory(): string;
}
