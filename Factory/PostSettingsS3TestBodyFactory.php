<?php

declare(strict_types=1);

namespace TensicAI\SDK\Factory;

use TeamBlue\JsonImmutableObjects\FactoryFromArray;
use TensicAI\SDK\Model\PostSettingsS3TestBody;

/**
 * @method static PostSettingsS3TestBody fromArray(mixed[] $array)
 * @method static PostSettingsS3TestBody fromRecordData(mixed[] $array)
 */
class PostSettingsS3TestBodyFactory
{
    use FactoryFromArray;

    protected static function modelClass(): string
    {
        return PostSettingsS3TestBody::class;
    }
}
