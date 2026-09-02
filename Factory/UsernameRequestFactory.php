<?php

declare(strict_types=1);

namespace TeamBlue\TensicAI\SDK\Factory;

use TeamBlue\JsonImmutableObjects\FactoryFromArray;
use TeamBlue\TensicAI\SDK\Model\UsernameRequest;

/**
 * @method static UsernameRequest fromArray(mixed[] $array)
 * @method static UsernameRequest fromRecordData(mixed[] $array)
 */
class UsernameRequestFactory
{
    use FactoryFromArray;

    protected static function modelClass(): string
    {
        return UsernameRequest::class;
    }
}
