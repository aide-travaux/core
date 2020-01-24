<?php

namespace AideTravaux\Model;

use AideTravaux\Utils\Condition;
use AideTravaux\Utils\Step;

/**
 * @see AidInterface
 */
abstract class AidAbstract
{
    const NAME = '';
    const DESCRIPTION = '';
    const DELAY = '';
    const DISTRIBUTOR = '';
    const REFERENCES = [];

    /**
     * @property array|Condition
     */
    protected $conditions = [];

    /**
     * @property array|Step
     */
    protected $steps = [];

    /**
     * Initialise les conditions d'accès à l'aide financière
     * Initialise les étapes de calcul de l'aide financière
     */
    public function __construct()
    {
        $this->buildConditions();
        $this->buildSteps();
    }

    public function addCondition(Condition $condition): void
    {
        $this->conditions[] = $condition;
    }

    public function getConditions(): array
    {
        return \array_map(function($condition) {
            return $condition->toArray();
        }, $this->conditions);
    }

    public function addStep(Step $step): void
    {
        $this->steps[] = $step;
    }

    public function getSteps(): array
    {
        return \array_map(function($step) {
            return $step->toArray();
        }, $this->steps);
    }

}
