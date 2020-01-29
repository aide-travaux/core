<?php

namespace AideTravaux\Core\Utils;

class Step
{
    /**
     * Titre de l'étape de calcul
     * @property string
     */
    private $title;

    /**
     * Description de l'étape de calcul
     * @property string
     */
    private $description;

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

    public function __construct(string $title, string $description, callable $callback)
    {
        $this->title = $title;
        $this->description = $description;
        $this->callback = $callback;
    }

    public function getTitle(): string
    {
        return $this->title;
    }

    public function getDescription(): string
    {
        return $this->description;
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
