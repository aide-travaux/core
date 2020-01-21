<?php

namespace AideTravaux;

trait ProfileTrait
{
    public function getHousingType(): string
    {
        return 'Maison individuelle';
    }

    public function getMaritalStatus(): string
    {
        return 'Célibataire';
    }

    public function getHomeDependents(): int
    {
        return 0;
    }

    public function getHousingOccupationStatus(): string
    {
        return 'Propriétaire occupant';
    }

    public function getHousingOccupationSType(): string
    {
        return 'Résidence principale';
    }

    public function getBuildingExistence(): int
    {
        return 20;
    }

    public function getAnahCategory(): string
    {
        return 'Modeste';
    }
}
