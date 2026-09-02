<?php

declare(strict_types=1);

namespace TeamBlue\TensicAI\SDK\Factory;

use TeamBlue\JsonImmutableObjects\FactoryFromArray;
use TeamBlue\TensicAI\SDK\Model\GetProjectsProjectIDConversationsQuery;

/**
 * @method static GetProjectsProjectIDConversationsQuery fromArray(mixed[] $array)
 * @method static GetProjectsProjectIDConversationsQuery fromRecordData(mixed[] $array)
 */
class GetProjectsProjectIDConversationsQueryFactory
{
    use FactoryFromArray;

    protected static function modelClass(): string
    {
        return GetProjectsProjectIDConversationsQuery::class;
    }
}
