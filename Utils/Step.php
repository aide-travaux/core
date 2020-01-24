<?php

namespace AideTravaux\Utils;

class Step
{
    /**
     * Description de l'étape de calcul
     * @property string
     */
    private $label;

    /**
     * Formule de calcul
     * @property callable
     */
    private $callback;

    /**
     * Valeur de l'étape de calcul
     * @property mixed
     */
    private $value;

    public function __construct(string $label, callable $callback)
    {
        $this->label = $label;
        $this->callback = $callback;
    }

    public function getLabel(): string
    {
        return $this->label;
    }

    public function getCallback(): callable
    {
        return $this->callback;
    }

    public function getValue()
    {
        return $this->value;
    }

    public function setValue($value): void
    {
        $this->value = $value;
    }
}
