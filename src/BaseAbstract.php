<?php

namespace AideTravaux;

abstract class BaseAbstract
{
    const NAME = '';
    const DESCRIPTION = '';
    const DELAY = '';
    const DISTRIBUTOR = '';
    const REFERENCES = [];

    /**
     * @property array|Condition
     */
    protected static $profileConditions = [];

    /**
     * @property array|Condition
     */
    protected static $projectConditions = [];

    public function __construct()
    {
        $this->setProfileConditions();
        $this->setProjectConditions();
    }

    public function getProfileConditions(?ProfileInterface $profile = null): array
    {
        if ($profile) {
            return \array_map(function($condition) use ($profile) {
              return [
                  'label' => $condition->getLabel(),
                  'state' => $condition->getCallback()($profile)
                ];
            }, self::$profileConditions);
          }
          return \array_map(function($condition) {
            return $condition->getLabel();
          }, self::$profileConditions);
    }

    public function isProfileEligible(ProfileInterface $profile): bool
    {
        foreach (self::$profileConditions as $condition) {
            if (!$condition instanceof Condition) {
                continue;
            }
            if ($condition->getCallback() && $condition->getCallback()($profile) === false)  {
                return false;
            }
        }
        return true;
    }

    public function getProjectConditions(?ProjectInterface $project = null): array
    {
        if ($project) {
            return \array_map(function($condition) use ($project) {
              return [
                  'label' => $condition->getLabel(),
                  'state' => $condition->getCallback()($project)
                ];
            }, self::$projectConditions);
          }
          return \array_map(function($condition) {
            return $condition->getLabel();
          }, self::$projectConditions);
    }

    public function isProjectEligible(ProjectInterface $project): bool
    {
        foreach (self::$projectConditions as $condition) {
            if (!$condition instanceof Condition) {
                continue;
            }
            if ($condition->getCallback() && $condition->getCallback()($profile) === false)  {
                return false;
            }
        }
        return true;
    }

    public function getAmount(ProfileInterface $profile, ProjectInterface $project)
    {
        throw new \Exception('This method has to be extended !');
    }
}
