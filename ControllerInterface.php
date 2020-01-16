<?php

namespace AideTravaux;

interface ControllerInterface
{
    public function isProfileEligible(ProfileInterface $profile): bool;
    public function isProjectEligible(ProjectInterface $project): bool;
    public function getProfileConditions(ProfileInterface $profile): array;
    public function getProjectConditions(ProjectInterface $project): array;
    public function getAmount(ProfileInterface $profile, ProjectInterface $project);
}
