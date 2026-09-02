<?php

declare(strict_types=1);

namespace TensicAI\SDK\Factory;

use TeamBlue\JsonImmutableObjects\FactoryFromArray;
use TensicAI\SDK\Model\QuestionResponse;

/**
 * @method static QuestionResponse fromArray(mixed[] $array)
 * @method static QuestionResponse fromRecordData(mixed[] $array)
 */
class QuestionResponseFactory
{
    use FactoryFromArray;

    protected static function modelClass(): string
    {
        return QuestionResponse::class;
    }
}
