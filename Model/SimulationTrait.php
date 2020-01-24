<?php

namespace AideTravaux\Model;

/**
 * @see SimulationInterface
 */
trait SimulationTrait
{
    public function resolveSteps(): void
    {
        $profile = $this->getProfile();
        $project = $this->getProject();

        foreach ($this->steps as $step) {
            if ($step->getCallback()) {
                $step->setValue(
                    $step->getCallback()($profile, $project)
                );
            }
        }
    }

    public function resolveConditions(): void
    {
        $profile = $this->getProfile();
        $project = $this->getProject();
    
        foreach ($this->conditions as $condition) {
            if ($condition->getCallback()) {
                $condition->setValue( 
                    $condition->getCallback()($profile, $project)
                );
            }
        }
    }

    public function isEligible(): bool
    {
        foreach ($this->conditions as $condition) {
            if ($condition->getValue() === false)  {
                return false;
            }
        }
        return true;
    }

}