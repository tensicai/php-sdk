<?php

declare(strict_types=1);

namespace TeamBlue\TensicAI\SDK\Factory;

use TeamBlue\JsonImmutableObjects\FactoryFromArray;
use TeamBlue\TensicAI\SDK\Model\UserTeamBudgetsResponse;

/**
 * @method static UserTeamBudgetsResponse fromArray(mixed[] $array)
 * @method static UserTeamBudgetsResponse fromRecordData(mixed[] $array)
 */
class UserTeamBudgetsResponseFactory
{
    use FactoryFromArray;

    protected static function modelClass(): string
    {
        return UserTeamBudgetsResponse::class;
    }
}
