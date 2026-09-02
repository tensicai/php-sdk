<?php

declare(strict_types=1);

namespace TensicAI\SDK\Factory;

use TeamBlue\JsonImmutableObjects\FactoryFromArray;
use TensicAI\SDK\Model\Tool;

/**
 * @method static Tool fromArray(mixed[] $array)
 * @method static Tool fromRecordData(mixed[] $array)
 */
class ToolFactory
{
    use FactoryFromArray;

    protected static function modelClass(): string
    {
        return Tool::class;
    }
}
