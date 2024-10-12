<?php declare(strict_types=1);

namespace Leaditin\Table;

/**
 * @package Leaditin\Table
 * @author Igor Vuckovic <igor@vuckovic.biz>
 */
class Definition
{
    /** @var Column[] */
    protected array $columns = [];

    public function addColumn(string $columnName): Column
    {
        $column = new Column();
        $this->columns[$columnName] = $column;

        return $column;
    }

    public function addColumnAfter(string $columnName, string $insertAfterColumnName): Column
    {
        $column = new Column();
        $position = array_search($insertAfterColumnName, array_keys($this->columns), true) + 1;

        $this->columns = array_merge(
            array_slice($this->columns, 0, $position),
            [$columnName => $column],
            array_slice($this->columns, $position)
        );

        return $column;
    }

    public function addColumnBefore(string $columnName, string $insertBeforeColumnName): Column
    {
        $column = new Column();
        $position = array_search($insertBeforeColumnName, array_keys($this->columns), true);

        $this->columns = array_merge(
            array_slice($this->columns, 0, $position),
            [$columnName => $column],
            array_slice($this->columns, $position)
        );

        return $column;
    }

    public function hasColumn(string $columnName): bool
    {
        return array_key_exists($columnName, $this->columns);
    }

    public function getPrimaryKeyColumn(): null|Column
    {
        foreach ($this->getColumns() as $column) {
            if ($column->isPrimaryKey()) {
                return $column;
            }
        }

        return null;
    }

    public function getColumn(string $columnName): Column
    {
        if (!$this->hasColumn($columnName)) {
            throw new \InvalidArgumentException(sprintf(
                'Column name %s not specified in table definition %s',
                $columnName, static::class
            ));
        }

        return $this->columns[$columnName];
    }

    public function getColumns(): array
    {
        return $this->columns;
    }
}
