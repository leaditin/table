<?php declare(strict_types=1);

namespace Leaditin\Table\Renderer;

use Leaditin\Table\Table;

/**
 * @package Leaditin\Table
 * @author Igor Vuckovic <igor@vuckovic.biz>
 */
interface RendererInterface
{
    public function render(Table $table);

    public function saveToFile(Table $table, $filePath);
}
