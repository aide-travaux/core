<?php

namespace AideTravaux\Core;

interface CoreInterface
{
    /**
     * Retourne la catégorie de ressource du ménage selon l'ANAH
     * @return string
     */
    public function getCategorieAnah(): string;

    /**
     * Retourne la catégorie de ressources selon le dispositif certificats d'économies d'énergie
     * @return string
     */
    public function getCategorieCee(): string;

    /**
     * Retourne le code administratif de la région
     * @return string
     */
    public function getCodeRegion(): string;

    /**
     * Retourne le code administratif du département
     * @return string
     */
    public function getCodeDepartement(): string;

    /**
     * Retourne la zone climatique du projet
     * @return string
     */
    public function getZoneClimatique(): string;

    /**
     * Retourne le nombre de personnes composant le ménages
     * @return int
     */
    public function getCompositionMenage(): int;

    /**
     * Retourne le nombre de personne à charge
     * @return float
     */
    public function getNombrePersonnesACharge(): float;

    /**
     * Retourne les ressources du ménage
     */
    public function getRessourcesMenage(): float;

    /**
     * Retourne la situation familiale du demandeur
     * @return string
     */
    public function getSituationFamiliale(): string;

    /**
     * Retourne le quotient familial du ménage
     * @return float
     */
    public function getQuotientFamilial(): float;

    /**
     * Retourne le statut des occupants du logement
     * @return string
     */
    public function getStatutOccupantLogement(): string;

    /**
     * Retourne le type d'occupation du logement
     * @return string
     */
    public function getTypeOccupationLogement(): string;

    /**
     * Retourne le type de partie (commune ou privative)
     * @return string
     */
    public function getTypePartie(): string;

    /**
     * Retourne le type de logement
     * @return string
     */
    public function getTypeLogement(): string;

    /**
     * Retourne le nombre d'appartements
     * @return int
     */
    public function getNombreLogements(): int;

    /**
     * Retourne l'âge du logement
     * @return int
     */
    public function getAgeLogement(): int;

    /**
     * Retourne l'ancienneté du logement
     * @return string
     */
    public function getAncienneteLogement(): string;

    /**
     * Retourne l'énergie de chauffage du logement
     * @return string
     */
    public function getEnergieChauffage(): string;

    /**
     * Retourne le type de chauffage du logement
     * @return string
     */
    public function getTypeChauffage(): string;

    /**
     * Retourne la surface des capteurs solaires intallés
     * @return float
     */
    public function getSurfaceCapteurs(): float;

    /**
     * Retourne la surface chauffée par l'appareil installé
     * @return float
     */
    public function getSurfaceChauffee(): float;

    /**
     * Retourne la surface habitable du logement
     * @return float
     */
    public function getSurfaceHabitable(): float;

    /**
     * Retourne la surface de l'isolant posé
     * @return float
     */
    public function getSurfaceIsolant(): float;

    /**
     * Retourne la surface de paroie protégée
     * @return float
     */
    public function getSurfaceProtegee(): float;

    /**
     * Retourne la surface de toiture protégée
     * @return float
     */
    public function getSurfaceToitureProtegee(): float;

    /**
     * Retourne l'efficacité énergétique saisonnière de l'apparel installé
     * @return int
     */
    public function getEfficaciteSaisonniere(): int;

    /**
     * Retoune le coefficient de performance énergétique saisonnier de l'appareil installé
     * @return float
     */
    public function getScop(): float;

    /**
     * Retourne le nombre de chaudières installées
     * @return int
     */
    public function getNombreChaudieres(): int;

    /**
     * Retourne le nombre de radiateurs installés
     * @return int
     */
    public function getNombreRadiateurs(): int;

    /**
     * Retourne le nombre de robinets thermostatiques installés
     * @return int
     */
    public function getNombreRobinetsThermostatiques(): int;

    /**
     * Retourne le nombre de fenêtres et portes-fenêtres installées
     * @return int
     */
    public function getNombreFenetres(): int;

    /**
     * Retourne le nombre de fermetures installées
     * @return int
     */
    public function getNombreFermetures(): int;

    /**
     * Retourne le type de VMC double flux installée
     * @return string
     */
    public function getTypeVmcDoubleFlux(): string;

    /**
     * Retourne le type d'échangeur installé
     * @return string
     */
    public function getTypeEchangeurVentilation(): string;

    /**
     * Retourne le type de VMC simple flux installée
     * @return string
     */
    public function getTypeVmcSimpleFlux(): string;

    /**
     * Retourne le type de caisson de ventilation installé
     * @return string
     */
    public function getTypeCaissonVentilation(): string;

    /**
     * Retourne le type de ventilation hybride installée
     * @return string
     */
    public function getTypeVentilationHybride(): string;

    /**
     * Retourne le type d'extracteur de ventilation installé
     * @return string
     */
    public function getTypeExtracteurVentilation(): string;

    /**
     * Retourne la longueur du réseau de chauffage ou de production d'ECS isolée
     * @return float
     */
    public function getLongueurReseauIsolee(): float;

    /**
     * Retourne le montant TTC des travaux
     * @return float
     */
    public function getCoutTTC(): float;

    /**
     * Retourne le montant des aides financières 
     * @return float
     */
    public function getMontantAides(): float;

    /**
     * Retourne la quote-part des travaux supportée par le demandeur
     * @return float
     */
    public function getQuotePart(): float;

    /**
     * Retourne le code travaux certificats d'économies d'énergie
     * @return string
     */
    public function getCeeCodeTravaux(): string;

    /**
     * Retourne le code travaux Ma Prime Rénov
     * @return string
     */
    public function getCiteCodeTravaux(): string;

    /**
     * Retourne le code travaux Coup de pouce économies d'énergie
     * @return string
     */
    public function getCoupDePouceCodeTravaux(): string;

    /**
     * Retourne le code travaux Ma Prime Rénov
     * @return string
     */
    public function getEcoPTZCodeTravaux(): string;

    /**
     * Retourne le type de projet
     * @return string
     */
    public function getEptzTypeProjet(): string;

    /**
     * Retourne le code travaux Ma Prime Rénov
     * @return string
     */
    public function getMaPrimeRenovCodeTravaux(): string;
}
