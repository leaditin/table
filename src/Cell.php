<?php declare(strict_types=1);

namespace Leaditin\Table;

/**
 * @package Leaditin\Table
 * @author Igor Vuckovic <igor@vuckovic.biz>
 */
class Cell
{
    protected null|string $bgrColor = null;
    protected null|string $color = null;
    protected null|string $tooltip = null;
    protected mixed $value;

    public function getBgrColor(): null|string
    {
        return $this->bgrColor;
    }

    public function setBgrColor(string $bgrColor): static
    {
        $this->bgrColor = $bgrColor;

        return $this;
    }

    public function getColor(): null|string
    {
        return $this->color;
    }

    public function setColor(string $color): static
    {
        $this->color = $color;
        $this->bgrColor = $color;

        return $this;
    }

    public function getTooltip(): null|string
    {
        return $this->tooltip;
    }

    public function setTooltip(string $tooltip): static
    {
        $this->tooltip = $tooltip;

        return $this;
    }

    public function getValue(): mixed
    {
        return $this->value;
    }

    public function setValue(mixed $value): static
    {
        $this->value = $value;

        return $this;
    }
}
