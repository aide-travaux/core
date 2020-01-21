<?php

namespace AideTravaux;

abstract class BaseAbstract
{
    /**
     * Nom de l'aide financières
     */
    const NAME = '';

    /**
     * Déscription de l'aide financière
     */
    const DESCRIPTION = '';

    /**
     * Délai de versement de l'aide financières
     */
    const DELAY = '';

    /**
     * Distributeur de l'aide financières
     */
    const DISTRIBUTOR = '';

    /**
     * Références légales de l'aide financières
     */
    const REFERENCES = [];

    /**
     * @property array|Condition
     */
    protected static $profileConditions = [];

    /**
     * @property array|Condition
     */
    protected static $projectConditions = [];

    /**
     * Initialize les conditions d'accès à l'aide financières
     */
    public function __construct()
    {
        $this->setProfileConditions();
        $this->setProjectConditions();
    }

    /**
     * Retourne l'éligibilité à l'aide financières
     * @param ProfileInterface
     * @param ProjectInterface
     * @return bool
     */
    public function isElisible(ProfileInterface $profile, ProjectInterface $project): bool
    {
        return $this->isProfileEligible($profile) && $this->isProjectEligible($project);
    }

    /**
     * Retourne les conditions d'accès à l'aide financières relatives à la situation du demandeur
     * @param ProfileInterface|null
     * @return array
     */
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

    /**
     * Retourne l'éligibilité de la situation du demandeur à l'aide financières
     * @param ProfileInterface
     * @return bool
     */
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

    /**
     * Retourne les conditions d'accès à l'aide financières relatives aux travaux
     * @param ProjectInterface|null
     * @return array
     */
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

    /**
     * Retourne l'éligibilité des travaux à l'aide financières
     * @param ProfileInterface
     * @return bool
     */
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

    /**
     * Retourne le montant de l'aide financière
     * @param ProfileInterface
     * @param ProjectInterface
     * @return float
     */
    public function getAmount(ProfileInterface $profile, ProjectInterface $project): float
    {
        throw new \Exception('This method has to be extended !');
    }

}
