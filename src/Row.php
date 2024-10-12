<?php declare(strict_types=1);

namespace Leaditin\Table;

/**
 * @package Leaditin\Table
 * @author Igor Vuckovic <igor@vuckovic.biz>
 */
class Row
{
    /** @var Cell[] */
    protected array $cells = [];

    public function addCell(string $columnName, mixed $value): Cell
    {
        $cell = new Cell();
        $cell->setValue($value);
        $this->cells[$columnName] = $cell;

        return $cell;
    }

    public function hasCell($columnName): bool
    {
        return array_key_exists($columnName, $this->cells);
    }

    public function getCell(string $columnName): Cell
    {
        if (!$this->hasCell($columnName)) {
            throw new \InvalidArgumentException(sprintf(
                'Cell name %s not specified',
                $columnName
            ));
        }

        return $this->cells[$columnName];
    }

    public function getCells(): array
    {
        return $this->cells;
    }
}
