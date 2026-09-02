<?php

declare(strict_types=1);

namespace TensicAI\SDK\Factory;

use TeamBlue\JsonImmutableObjects\FactoryFromArray;
use TensicAI\SDK\Model\TokensModel;

/**
 * @method static TokensModel fromArray(mixed[] $array)
 * @method static TokensModel fromRecordData(mixed[] $array)
 */
class TokensModelFactory
{
    use FactoryFromArray;

    protected static function modelClass(): string
    {
        return TokensModel::class;
    }
}
