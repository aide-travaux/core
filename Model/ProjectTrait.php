<?php

namespace AideTravaux\Model;

/**
 * @see ProjectInterface
 */
trait ProjectTrait
{
    public function getBuildingArea(): string
    {
        return 'Partie privative';
    }

    public function getExpenseShare(): float
    {
        return (float) 1;
    }

    public function getHousingNumber(): int
    {
        return 1;
    }

    public function getInsulationArea(): float
    {
        return (float) 1;
    }

    public function getEquipmentNumber(): int
    {
        return 1;
    }

    public function getCostExcludingTax(): float
    {
        return (float) 0;
    }

    public function getCostIncludingVAT(): float
    {
        return (float) 0;
    }

    public function getAnahWorkCode(): string
    {
        return '';
    }

    public function getCeeWorkCode(): string
    {
        return '';
    }

    public function getCoupDePouceWorkCode(): string
    {
        return '';
    }

    public function getCiteWorkCode(): string
    {
        return '';
    }

    public function getMaPrimeRenovWorkCode(): string
    {
        return '';
    }
}
