<?php

declare(strict_types=1);

namespace TensicAI\SDK\Factory;

use TeamBlue\JsonImmutableObjects\FactoryFromArray;
use TensicAI\SDK\Model\KubernetesTestRequest;

/**
 * @method static KubernetesTestRequest fromArray(mixed[] $array)
 * @method static KubernetesTestRequest fromRecordData(mixed[] $array)
 */
class KubernetesTestRequestFactory
{
    use FactoryFromArray;

    protected static function modelClass(): string
    {
        return KubernetesTestRequest::class;
    }
}
