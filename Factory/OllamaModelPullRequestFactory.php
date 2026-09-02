<?php

declare(strict_types=1);

namespace TeamBlue\TensicAI\SDK\Factory;

use TeamBlue\JsonImmutableObjects\FactoryFromArray;
use TeamBlue\TensicAI\SDK\Model\OllamaModelPullRequest;

/**
 * @method static OllamaModelPullRequest fromArray(mixed[] $array)
 * @method static OllamaModelPullRequest fromRecordData(mixed[] $array)
 */
class OllamaModelPullRequestFactory
{
    use FactoryFromArray;

    protected static function modelClass(): string
    {
        return OllamaModelPullRequest::class;
    }
}
