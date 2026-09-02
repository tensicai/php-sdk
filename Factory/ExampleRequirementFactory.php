<?php

declare(strict_types=1);

namespace TeamBlue\TensicAI\SDK\Factory;

use TeamBlue\JsonImmutableObjects\FactoryFromArray;
use TeamBlue\TensicAI\SDK\Model\ExampleRequirement;

/**
 * @method static ExampleRequirement fromArray(mixed[] $array)
 * @method static ExampleRequirement fromRecordData(mixed[] $array)
 */
class ExampleRequirementFactory
{
    use FactoryFromArray;

    protected static function modelClass(): string
    {
        return ExampleRequirement::class;
    }
}
