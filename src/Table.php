<?php declare(strict_types=1);

namespace Leaditin\Table;

/**
 * @package Leaditin\Table
 * @author Igor Vuckovic <igor@vuckovic.biz>
 */
class Table
{
    /** @var Row[] */
    protected array $rows = [];

    /** @var Column[] */
    protected array $visibleColumns = [];

    protected null|string $title = null;

    public function __construct(private readonly Definition $definition)
    {
        foreach ($this->definition->getColumns() as $columnName => $column) {
            if ($column->isVisible()) {
                $this->visibleColumns[$columnName] = $column;
            }
        }
    }

    public function getTitle(): null|string
    {
        return $this->title;
    }

    public function setTitle(string $title): static
    {
        $this->title = $title;

        return $this;
    }

    public function addRow(Row $row = null): Row
    {
        if ($row === null) {
            $row = new Row();
        }

        $this->rows[] = $row;

        return $row;
    }

    public function removeRow(Row $removeRow): void
    {
        foreach ($this->rows as $index => $row) {
            if ($row == $removeRow) {
                unset($this->rows[$index]);
            }
        }
    }

    public function getRows(): array
    {
        return $this->rows;
    }

    public function getColumns(): array
    {
        return $this->definition->getColumns();
    }

    public function getVisibleColumns(): array
    {
        return $this->visibleColumns;
    }

    public function getDefinition(): Definition
    {
        return $this->definition;
    }

    public function getTotalRows(): int
    {
        return count($this->rows);
    }
}
