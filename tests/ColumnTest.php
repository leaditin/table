<?php declare(strict_types=1);

use Leaditin\Table\Column;
use PHPUnit\Framework\TestCase;

/**
 * @covers \Leaditin\Table\Column
 */
final class ColumnTest extends TestCase
{
    public function testLabelCanBeSetAndRetrieved(): void
    {
        $column = new Column();
        $column->setLabel('Name');
        $this->assertSame('Name', $column->getLabel());
    }

    public function testTooltipCanBeSetAndRetrieved(): void
    {
        $column = new Column();
        $column->setTooltip('This is a tooltip');
        $this->assertSame('This is a tooltip', $column->getTooltip());
    }

    public function testFlexCanBeSetAndRetrieved(): void
    {
        $column = new Column();
        $column->setFlex(2);
        $this->assertSame(2, $column->getFlex());
    }

    public function testTextAlignCanBeSetAndRetrieved(): void
    {
        $column = new Column();
        $column->setTextAlign(Column::ALIGN_CENTER);
        $this->assertSame(Column::ALIGN_CENTER, $column->getTextAlign());
    }

    public function testVisibilityCanBeSetAndRetrieved(): void
    {
        $column = new Column();
        $column->setIsVisible(false);
        $this->assertFalse($column->isVisible());
    }

    public function testFormatCanBeSetAndRetrieved(): void
    {
        $column = new Column();
        $column->setFormat(Column::FORMAT_NUMBER_2DP);
        $this->assertSame(Column::FORMAT_NUMBER_2DP, $column->getFormat());
    }

    public function testDataTypeCanBeSetAndRetrieved(): void
    {
        $column = new Column();
        $column->setDataType(Column::DATA_TYPE_INT);
        $this->assertSame(Column::DATA_TYPE_INT, $column->getDataType());
    }

    public function testPrimaryKeyCanBeSetAndRetrieved(): void
    {
        $column = new Column();
        $column->setIsPrimaryKey(true);
        $this->assertTrue($column->isPrimaryKey());
    }

    public function testLabelDefaultsToNull(): void
    {
        $column = new Column();
        $this->assertNull($column->getLabel());
    }

    public function testTooltipDefaultsToNull(): void
    {
        $column = new Column();
        $this->assertNull($column->getTooltip());
    }

    public function testFlexDefaultsToOne(): void
    {
        $column = new Column();
        $this->assertSame(1, $column->getFlex());
    }

    public function testTextAlignDefaultsToLeft(): void
    {
        $column = new Column();
        $this->assertSame(Column::ALIGN_LEFT, $column->getTextAlign());
    }

    public function testVisibilityDefaultsToTrue(): void
    {
        $column = new Column();
        $this->assertTrue($column->isVisible());
    }

    public function testFormatDefaultsToNull(): void
    {
        $column = new Column();
        $this->assertNull($column->getFormat());
    }

    public function testDataTypeDefaultsToString(): void
    {
        $column = new Column();
        $this->assertSame(Column::DATA_TYPE_STRING, $column->getDataType());
    }

    public function testPrimaryKeyDefaultsToFalse(): void
    {
        $column = new Column();
        $this->assertFalse($column->isPrimaryKey());
    }
}
