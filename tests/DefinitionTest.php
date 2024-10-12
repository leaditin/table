<?php declare(strict_types=1);

use Leaditin\Table\Definition;
use Leaditin\Table\Column;
use PHPUnit\Framework\TestCase;

/**
 * @covers \Leaditin\Table\Definition
 */
final class DefinitionTest extends TestCase
{
    public function testAddColumn(): void
    {
        $definition = new Definition();
        $column = $definition->addColumn('name');
        $this->assertInstanceOf(Column::class, $column);
        $this->assertTrue($definition->hasColumn('name'));
    }

    public function testAddColumnAfter(): void
    {
        $definition = new Definition();
        $definition->addColumn('first');
        $column = $definition->addColumnAfter('second', 'first');
        $this->assertInstanceOf(Column::class, $column);
        $this->assertTrue($definition->hasColumn('second'));
    }

    public function testAddColumnBefore(): void
    {
        $definition = new Definition();
        $definition->addColumn('second');
        $column = $definition->addColumnBefore('first', 'second');
        $this->assertInstanceOf(Column::class, $column);
        $this->assertTrue($definition->hasColumn('first'));
    }

    public function testHasColumn(): void
    {
        $definition = new Definition();
        $definition->addColumn('name');
        $this->assertTrue($definition->hasColumn('name'));
        $this->assertFalse($definition->hasColumn('nonexistent'));
    }

    public function testGetPrimaryKeyColumn(): void
    {
        $definition = new Definition();
        $column = $definition->addColumn('id');
        $column->setIsPrimaryKey(true);
        $this->assertSame($column, $definition->getPrimaryKeyColumn());
    }

    public function testGetPrimaryKeyColumnReturnsNullWhenNoPrimaryKey(): void
    {
        $definition = new Definition();
        $definition->addColumn('id');
        $this->assertNull($definition->getPrimaryKeyColumn());
    }

    public function testGetColumn(): void
    {
        $definition = new Definition();
        $definition->addColumn('name');
        $this->assertInstanceOf(Column::class, $definition->getColumn('name'));
    }

    public function testGetColumnThrowsExceptionForNonexistentColumn(): void
    {
        $this->expectException(\InvalidArgumentException::class);
        $definition = new Definition();
        $definition->getColumn('nonexistent');
    }

    public function testGetColumns(): void
    {
        $definition = new Definition();
        $definition->addColumn('name');
        $this->assertCount(1, $definition->getColumns());
    }
}
