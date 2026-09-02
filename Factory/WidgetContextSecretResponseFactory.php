<?php

declare(strict_types=1);

namespace TeamBlue\TensicAI\SDK\Factory;

use TeamBlue\JsonImmutableObjects\FactoryFromArray;
use TeamBlue\TensicAI\SDK\Model\WidgetContextSecretResponse;

/**
 * @method static WidgetContextSecretResponse fromArray(mixed[] $array)
 * @method static WidgetContextSecretResponse fromRecordData(mixed[] $array)
 */
class WidgetContextSecretResponseFactory
{
    use FactoryFromArray;

    protected static function modelClass(): string
    {
        return WidgetContextSecretResponse::class;
    }
}
