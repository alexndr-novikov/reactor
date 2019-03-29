<?php declare(strict_types=1);
/**
 * Spiral Framework.
 *
 * @license   MIT
 * @author    Anton Titov (Wolfy-J)
 */

namespace Spiral\Reactor;

/**
 * To be rendered with some indent.
 */
interface DeclarationInterface
{
    const INDENT = "    ";

    /**
     * Must render it's own content into string using given indent level.
     *
     * @param int $indentLevel
     *
     * @return string
     */
    public function render(int $indentLevel = 0): string;
}