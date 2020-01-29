<?php

namespace AideTravaux\Core\Model;

interface ProfileInterface
{
    /**
     * Retourne le code région du logement
     * @return string
     */
    public function getCodeRegion(): string;

    /**
     * Retourne le statut conjugal du demandeur
     * @return string
     */
    public function getMaritalStatus(): string;

    /**
     * Retourne le quotient familial du demandeur
     * @return float
     */
    public function getFamilyQuotient(): float;

    /**
     * Retourne le nombre de personnes composant le ménage du demandeur
     * @return int
     */
    public function getHousehold(): int;

    /**
     * Retourne le revenu du foyer du demandeur
     * @return float
     */
    public function getHouseholdIncome(): float;

    /**
     * Retourne le type de logement
     * @return string
     */
    public function getHousingType(): string;

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
     * Retourne l'âge du bâtiment
     * @return int
     */
    public function getBuildingExistence(): int;

    /**
     * Retourne la surface habitable du bâtiment
     * @return float
     */
    public function getBuildingArea(): float;

    /**
     * Retourne la catégorie de ressource du ménage selon l'ANAH
     * @return string
     */
    public function getAnahCategory(): string;
}
