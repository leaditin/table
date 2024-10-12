<?php declare(strict_types=1);

namespace Leaditin\Table;

/**
 * @package Leaditin\Table
 * @author Igor Vuckovic <igor@vuckovic.biz>
 */
class Column
{
    public const ALIGN_LEFT = 'left';
    public const ALIGN_CENTER = 'center';
    public const ALIGN_RIGHT = 'right';

    public const DATA_TYPE_INT = 'int';
    public const DATA_TYPE_BOOL = 'bool';
    public const DATA_TYPE_FLOAT = 'float';
    public const DATA_TYPE_STRING = 'string';
    public const DATA_TYPE_DATE = 'date';
    public const DATA_TYPE_TIME = 'time';
    public const DATA_TYPE_MONEY = 'money';

    public const FORMAT_NUMBER_0DP = '0';
    public const FORMAT_NUMBER_1DP = '0.0';
    public const FORMAT_NUMBER_2DP = '0.00';
    public const FORMAT_NUMBER_3DP = '0.000';

    protected null|string $label = null;
    protected null|string $tooltip = null;
    protected int $flex = 1;
    protected string $textAlign = self::ALIGN_LEFT;
    protected null|string $format = null;
    protected bool $isVisible = true;
    protected bool $isPrimaryKey = false;
    protected string $dataType = self::DATA_TYPE_STRING;

    public function getLabel(): null|string
    {
        return $this->label;
    }

    public function setLabel(string $label): static
    {
        $this->label = $label;

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

    public function getFlex(): int
    {
        return $this->flex;
    }

    public function setFlex(int $flex): static
    {
        $this->flex = $flex;

        return $this;
    }

    public function getTextAlign(): string
    {
        return $this->textAlign;
    }

    public function setTextAlign(string $textAlign): static
    {
        $this->textAlign = $textAlign;

        return $this;
    }

    public function isVisible(): bool
    {
        return $this->isVisible;
    }

    public function setIsVisible(bool $isVisible): static
    {
        $this->isVisible = $isVisible;

        return $this;
    }

    public function getFormat(): null|string
    {
        return $this->format;
    }

    public function setFormat(string $format): static
    {
        $this->format = $format;

        return $this;
    }

    public function getDataType(): string
    {
        return $this->dataType;
    }

    public function setDataType(string $dataType): static
    {
        $this->dataType = $dataType;

        return $this;
    }

    public function isPrimaryKey(): bool
    {
        return $this->isPrimaryKey;
    }

    public function setIsPrimaryKey(bool $isPrimaryKey): static
    {
        $this->isPrimaryKey = $isPrimaryKey;

        return $this;
    }
}
