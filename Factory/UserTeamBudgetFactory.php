<?php

declare(strict_types=1);

namespace TeamBlue\TensicAI\SDK\Factory;

use TeamBlue\JsonImmutableObjects\FactoryFromArray;
use TeamBlue\TensicAI\SDK\Model\UserTeamBudget;

/**
 * @method static UserTeamBudget fromArray(mixed[] $array)
 * @method static UserTeamBudget fromRecordData(mixed[] $array)
 */
class UserTeamBudgetFactory
{
    use FactoryFromArray;

    protected static function modelClass(): string
    {
        return UserTeamBudget::class;
    }
}
