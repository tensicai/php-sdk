<?php

declare(strict_types=1);

namespace TeamBlue\TensicAI\SDK\Factory;

use TeamBlue\JsonImmutableObjects\FactoryFromArray;
use TeamBlue\TensicAI\SDK\Model\TokensModel;

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
