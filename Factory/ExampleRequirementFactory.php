<?php

declare(strict_types=1);

namespace TensicAI\SDK\Factory;

use TeamBlue\JsonImmutableObjects\FactoryFromArray;
use TensicAI\SDK\Model\ExampleRequirement;

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
