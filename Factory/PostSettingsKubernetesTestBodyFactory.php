<?php

declare(strict_types=1);

namespace TeamBlue\TensicAI\SDK\Factory;

use TeamBlue\JsonImmutableObjects\FactoryFromArray;
use TeamBlue\TensicAI\SDK\Model\PostSettingsKubernetesTestBody;

/**
 * @method static PostSettingsKubernetesTestBody fromArray(mixed[] $array)
 * @method static PostSettingsKubernetesTestBody fromRecordData(mixed[] $array)
 */
class PostSettingsKubernetesTestBodyFactory
{
    use FactoryFromArray;

    protected static function modelClass(): string
    {
        return PostSettingsKubernetesTestBody::class;
    }
}
