<?php declare(strict_types=1);

use Leaditin\Table\Row;
use Leaditin\Table\Cell;
use PHPUnit\Framework\TestCase;

/**
 * @covers \Leaditin\Table\Row
 */
final class RowTest extends TestCase
{
    public function testAddCell(): void
    {
        $row = new Row();
        $cell = $row->addCell('name', 'value');
        $this->assertInstanceOf(Cell::class, $cell);
        $this->assertTrue($row->hasCell('name'));
    }

    public function testHasCell(): void
    {
        $row = new Row();
        $row->addCell('name', 'value');
        $this->assertTrue($row->hasCell('name'));
        $this->assertFalse($row->hasCell('nonexistent'));
    }

    public function testGetCell(): void
    {
        $row = new Row();
        $row->addCell('name', 'value');
        $this->assertInstanceOf(Cell::class, $row->getCell('name'));
    }

    public function testGetCellThrowsExceptionForNonexistentCell(): void
    {
        $this->expectException(\InvalidArgumentException::class);
        $row = new Row();
        $row->getCell('nonexistent');
    }

    public function testGetCells(): void
    {
        $row = new Row();
        $row->addCell('name', 'value');
        $this->assertCount(1, $row->getCells());
    }
}
