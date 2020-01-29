<?php

namespace AideTravaux\Core\Model;

/**
 * @see AidInterface
 */
trait AidTrait
{
   public static function getName(): string
   {
       return self::NAME;
   }

   public static function getDescription(): string
   {
       return self::DESCRIPTION;
   }

   public static function getDelay(): string
   {
       return self::DELAY;
   }

   public static function getDistributor(): string
   {
       return self::DISTRIBUTOR;
   }

   public static function getReferences(): array
   {
       return self::REFERENCES;
   }

}
