<?php

namespace AideTravaux\Model;

interface ProfileInterface
{
    /**
     * Retourne le code région du logement
     * @return string
     */
    public function getCodeRegion(): string;

    /**
     * Retourne le statut des occupants du logement
     * @return string
     */
    public function getHousingOccupationStatus(): string;

    /**
     * Retourne le type d'occupation du logement
     * @return string
     */
    public function getHousingOccupationType(): string;

    /**
     * Retourne le quotient familial du demandeur
     * @return float
     */
    public function getFamilyQuotient(): float;

    /**
     * Retourne le revenu du foyer du demandeur
     * @return float
     */
    public function getHouseholdIncome(): float;

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
