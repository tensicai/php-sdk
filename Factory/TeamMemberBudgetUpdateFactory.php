<?php

declare(strict_types=1);

namespace TeamBlue\TensicAI\SDK\Factory;

use TeamBlue\JsonImmutableObjects\FactoryFromArray;
use TeamBlue\TensicAI\SDK\Model\TeamMemberBudgetUpdate;

/**
 * @method static TeamMemberBudgetUpdate fromArray(mixed[] $array)
 * @method static TeamMemberBudgetUpdate fromRecordData(mixed[] $array)
 */
class TeamMemberBudgetUpdateFactory
{
    use FactoryFromArray;

    protected static function modelClass(): string
    {
        return TeamMemberBudgetUpdate::class;
    }
}
