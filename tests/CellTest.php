<?php declare(strict_types=1);

use Leaditin\Table\Cell;
use PHPUnit\Framework\TestCase;

/**
 * @covers \Leaditin\Table\Cell
 */
final class CellTest extends TestCase
{
    public function testBgrColorCanBeSetAndRetrieved(): void
    {
        $cell = new Cell();
        $cell->setBgrColor('red');
        $this->assertSame('red', $cell->getBgrColor());
    }

    public function testColorCanBeSetAndRetrieved(): void
    {
        $cell = new Cell();
        $cell->setColor('blue');
        $this->assertSame('blue', $cell->getColor());
    }

    public function testSettingColorAlsoSetsBgrColor(): void
    {
        $cell = new Cell();
        $cell->setColor('green');
        $this->assertSame('green', $cell->getBgrColor());
    }

    public function testTooltipCanBeSetAndRetrieved(): void
    {
        $cell = new Cell();
        $cell->setTooltip('Sample tooltip');
        $this->assertSame('Sample tooltip', $cell->getTooltip());
    }

    public function testValueCanBeSetAndRetrieved(): void
    {
        $cell = new Cell();
        $cell->setValue(123);
        $this->assertSame(123, $cell->getValue());
    }

    public function testBgrColorDefaultsToNull(): void
    {
        $cell = new Cell();
        $this->assertNull($cell->getBgrColor());
    }

    public function testColorDefaultsToNull(): void
    {
        $cell = new Cell();
        $this->assertNull($cell->getColor());
    }

    public function testTooltipDefaultsToNull(): void
    {
        $cell = new Cell();
        $this->assertNull($cell->getTooltip());
    }

    public function testValueCanBeSetToNull(): void
    {
        $cell = new Cell();
        $cell->setValue(null);
        $this->assertNull($cell->getValue());
    }
}
