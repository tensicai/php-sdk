<?php

declare(strict_types=1);

namespace TeamBlue\TensicAI\SDK\Factory;

use TeamBlue\JsonImmutableObjects\FactoryFromArray;
use TeamBlue\TensicAI\SDK\Model\PostLlmsTestBody;

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
