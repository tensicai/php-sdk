<?php

declare(strict_types=1);

namespace TeamBlue\TensicAI\SDK\Factory;

use TeamBlue\JsonImmutableObjects\FactoryFromArray;
use TeamBlue\TensicAI\SDK\Model\PageLLMModel;

/**
 * @method static PageLLMModel fromArray(mixed[] $array)
 * @method static PageLLMModel fromRecordData(mixed[] $array)
 */
class PageLLMModelFactory
{
    use FactoryFromArray;

    protected static function modelClass(): string
    {
        return PageLLMModel::class;
    }
}
