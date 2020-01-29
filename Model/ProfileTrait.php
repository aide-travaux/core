<?php

namespace AideTravaux\Core\Model;

/**
 * @see ProfileInterface
 */
trait ProfileTrait
{
    public function getCodeRegion(): string
    {
        return '';
    }

    public function getMaritalStatus(): string
    {
        return '';
    }

    public function getFamilyQuotient(): float
    {
        return (float) 1;
    }

    public function getHousehold(): int
    {
        return 1;
    }

    public function getHouseholdIncome(): float
    {
        return (float) 0;
    }

    public function getHousingType(): string
    {
        return '';
    }

    public function getHousingOccupationStatus(): string
    {
        return '';
    }

    public function getHousingOccupationType(): string
    {
        return '';
    }

    public function getBuildingExistence(): int
    {
        return 0;
    }

    public function getBuildingArea(): float
    {
        return (float) 0;
    }

    public function getAnahCategory(): string
    {
        return '';
    }
}
