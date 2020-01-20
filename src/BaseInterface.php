<?php

namespace AideTravaux;

interface BaseInterface
{
    public static function getName(): string;
    public static function getDescription(): string;
    public static function getDelay(): string;
    public static function getDistributor(): string;
    public static function getReferences(): array;

    public function setProfileConditions(): void;
    public function getProfileConditions(?ProfileInterface $profile = null): array;
    public function isProfileEligible(ProfileInterface $profile): bool;

    public function setProjectConditions(): void;
    public function getProjectConditions(?ProjectInterface $project = null): array;
    public function isProjectEligible(ProjectInterface $project): bool;
    
    public function getAmount(ProfileInterface $profile, ProjectInterface $project);
}
