<?php declare(strict_types=1);

use Leaditin\Table\Table;
use Leaditin\Table\Definition;
use Leaditin\Table\Row;
use PHPUnit\Framework\TestCase;

/**
 * @covers \Leaditin\Table\Table
 */
final class TableTest extends TestCase
{
    public function testGetTitle(): void
    {
        $definition = $this->createMock(Definition::class);
        $table = new Table($definition);
        $this->assertNull($table->getTitle());
    }

    public function testSetTitle(): void
    {
        $definition = $this->createMock(Definition::class);
        $table = new Table($definition);
        $table->setTitle('Test Title');
        $this->assertSame('Test Title', $table->getTitle());
    }

    public function testAddRow(): void
    {
        $definition = $this->createMock(Definition::class);
        $table = new Table($definition);
        $row = new Row();
        $table->addRow($row);
        $this->assertCount(1, $table->getRows());
    }

    public function testRemoveRow(): void
    {
        $definition = $this->createMock(Definition::class);
        $table = new Table($definition);
        $row = new Row();
        $table->addRow($row);
        $table->removeRow($row);
        $this->assertCount(0, $table->getRows());
    }

    public function testGetRows(): void
    {
        $definition = $this->createMock(Definition::class);
        $table = new Table($definition);
        $this->assertIsArray($table->getRows());
    }

    public function testGetColumns(): void
    {
        $definition = $this->createMock(Definition::class);
        $definition->method('getColumns')->willReturn([]);
        $table = new Table($definition);
        $this->assertIsArray($table->getColumns());
    }

    public function testGetVisibleColumns(): void
    {
        $definition = $this->createMock(Definition::class);
        $definition->method('getColumns')->willReturn([]);
        $table = new Table($definition);
        $this->assertIsArray($table->getVisibleColumns());
    }

    public function testGetDefinition(): void
    {
        $definition = $this->createMock(Definition::class);
        $table = new Table($definition);
        $this->assertSame($definition, $table->getDefinition());
    }

    public function testGetTotalRows(): void
    {
        $definition = $this->createMock(Definition::class);
        $table = new Table($definition);
        $this->assertSame(0, $table->getTotalRows());
    }
}
