<?php

declare(strict_types=1);

namespace TensicAI\SDK\Factory;

use TeamBlue\JsonImmutableObjects\FactoryFromArray;
use TensicAI\SDK\Model\UserTeamBudgetsResponse;

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
