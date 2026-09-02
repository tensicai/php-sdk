<?php

declare(strict_types=1);

namespace TensicAI\SDK\Factory;

use TeamBlue\JsonImmutableObjects\FactoryFromArray;
use TensicAI\SDK\Model\PostLlmsTestBody;

/**
 * @method static PostLlmsTestBody fromArray(mixed[] $array)
 * @method static PostLlmsTestBody fromRecordData(mixed[] $array)
 */
class PostLlmsTestBodyFactory
{
    use FactoryFromArray;

    protected static function modelClass(): string
    {
        return PostLlmsTestBody::class;
    }
}
