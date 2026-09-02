<?php

declare(strict_types=1);

namespace TeamBlue\TensicAI\SDK\Factory;

use TeamBlue\JsonImmutableObjects\FactoryFromArray;
use TeamBlue\TensicAI\SDK\Model\TeamMemberBudget;

/**
 * @method static TeamMemberBudget fromArray(mixed[] $array)
 * @method static TeamMemberBudget fromRecordData(mixed[] $array)
 */
class TeamMemberBudgetFactory
{
    use FactoryFromArray;

    protected static function modelClass(): string
    {
        return TeamMemberBudget::class;
    }
}
