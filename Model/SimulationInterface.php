<?php

namespace AideTravaux\Core\Model;

interface SimulationInterface
{
    /**
     * Retourne l'éligibilité de la simulation à l'aide financière
     * @return bool
     */
    public function isEligible(): bool;

    /**
     * Résoud les conditions de l'aide financière
     * Méthode appelée lors de la construction de l'objet
     * @return void
     */
    public function resolveConditions(): void;

    /**
     * Résoud les étapes de calcul
     * Méthode appelée lors de la construction de l'objet
     * @return void
     */
    public function resolveSteps(): void;

    /**
     * Retourne le montant de l'aide financière
     * @return null|float
     */
    public function getAmount(): ?float;
}
