<?php

declare(strict_types=1);

namespace TensicAI\SDK\Factory;

use TeamBlue\JsonImmutableObjects\FactoryFromArray;
use TensicAI\SDK\Model\E2BTestRequest;

/**
 * @method static E2BTestRequest fromArray(mixed[] $array)
 * @method static E2BTestRequest fromRecordData(mixed[] $array)
 */
class E2BTestRequestFactory
{
    use FactoryFromArray;

    protected static function modelClass(): string
    {
        return E2BTestRequest::class;
    }
}
