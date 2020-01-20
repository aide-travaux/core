<?php

namespace AideTravaux;

class Condition
{
    /**
     * Description de la condition
     * @property string
     */
    private $label;

    /**
     * Fonction de vérification de la condition
     * @property callable
     */
    private $callback;

    public function __construct(string $label, ?callable $callback = null)
    {
        $this->label = $label;
        $this->callback = $callback;
    }

    public function getLabel(): string
    {
        return $this->label;
    }

    public function getCallback(): ?callable
    {
        return $this->callback;
    }
}
