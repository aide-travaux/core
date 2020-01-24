<?php

namespace AideTravaux\Model;

use AideTravaux\Utils\Condition;
use AideTravaux\Utils\Step;

interface AidInterface
{
    /**
     * Retourne le nom de l'aide financière
     * @return string
     */
    public static function getName(): string;

    /**
     * Retourne la description de l'aide financière
     * @return string
     */
    public static function getDescription(): string;

    /**
     * Retourne les modalité de paiement de l'aide financière
     * @return string
     */
    public static function getDelay(): string;

    /**
     * Retourne le distributeur de l'aide financière
     * @return string
     */
    public static function getDistributor(): string;

    /**
     * Retourne les références législatives de l'aide financières
     * @return array
     */
    public static function getReferences(): array;

    /**
     * Initialise les conditions d'accès à l'aide financière
     * @return void
     */
    public function buildConditions(): void;

    /**
     * Constructeur de condition
     */
    public function addCondition(Condition $condition): void;

    /**
     * Retourne les conditions d'accès à l'aide financière
     * @return array
     */
    public function getConditions(): array;

    /**
     * Initialise les étapes de calcul de l'aide financière
     * @return void
     */
    public function buildSteps(): void;

    /**
     * Constructeur d'étape
     */
    public function addStep(Step $step): void;

    /**
     * Retourne les étapes de calcul de l'aide financières
     * @return array
     */
    public function getSteps(): array;

    public function getAmount(ProfileInterface $profile, ProjectInterface $project): float;
}
