<?php

namespace AideTravaux\Model;

interface ProjectInterface
{
    /**
     * Retourne le type de partie (commune ou privative)
     * @return string
     */
    public function getBuildingArea(): string;

    /**
     * Retourne la quote-part des travaux supportée par le demandeur
     * @return float
     */
    public function getExpenseShare(): float;

    /**
     * Retourne le nombre de logements concerné par les travaux
     * @return int
     */
    public function getHousingNumber(): int;

    /**
     * Retourne la surface à isoler
     * @return float
     */
    public function getInsulationArea(): float;

    /**
     * Retourne le nombre d'équipements à installer
     * @return int
     */
    public function getEquipmentNumber(): int;

    /**
     * Retourne le montant HT des travaux déduit des aides financières
     * @return float
     */
    public function getCostExcludingTax(): float;

    /**
     * Retourne le montant TTC des travaux déduit des aides financières
     * @return float
     */
    public function getCostIncludingVAT(): float;

    /**
     * Retourne le code travaux Anah
     * @return string
     */
    public function getAnahWorkCode(): string;

    /**
     * Retourne le code travaux Certificat d'économies d'énergie
     * @return string
     */
    public function getCeeWorkCode(): string;

    /**
     * Retourne le code travaux Coup de pouce économies d'énergie
     * @return string
     */
    public function getCoupDePouceWorkCode(): string;

    /**
     * Retourne le code travaux Crédit d'impôt transition énergétique
     * @return string
     */
    public function getCiteWorkCode(): string;

    /**
     * Retourne le code travaux Ma Prime Rénov'
     * @return string
     */
    public function getMaPrimeRenovWorkCode(): string;
}
