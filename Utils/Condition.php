<?php

namespace AideTravaux\Core\Utils;

class Condition
{
    /**
     * Description de la condition
     * @property string
     */
    private $label;

    /**
     * Fonction de vérification de la condition
     * @property null|callable
     */
    private $callback = null;

    /**
     * Satisfaction de la condition
     * @property null|bool
     */
    private $value = null;

    public function __construct(string $label, ?callable $callback = null)
    {
        $this->label = $label;

        if ($callback) {
            $this->callback = $callback;
        }
    }

    public function getLabel(): string
    {
        return $this->label;
    }

    public function getCallback(): ?callable
    {
        return $this->callback;
    }

    public function getValue(): ?bool
    {
        return $this->value;
    }

    public function setValue(bool $value): void
    {
        $this->value = $value;
    }

    public function toArray(): array
    {
        return [
            'label' => $this->label,
            'value' => $this->value
        ];
    }
}
