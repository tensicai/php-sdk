<?php

declare(strict_types=1);

namespace TensicAI\SDK\Model;

use EventEngine\Data\SpecialKeySupport;
use EventEngine\JsonSchema\JsonSchemaAwareRecord;
use TeamBlue\JsonImmutableObjects\JsonSchemaAwareRecordLogic;
use TeamBlue\OpenApi\Codegen\Endpoint\SpecialKeySupportLogic;
use TensicAI\SDK\Default\UserTeamBudgetDefault;

final class UserTeamBudget implements SpecialKeySupport, JsonSchemaAwareRecord
{
    use UserTeamBudgetDefault;
    use JsonSchemaAwareRecordLogic;
    use SpecialKeySupportLogic;

// phpcs:disable SlevomatCodingStandard.Classes.UnusedPrivateElements.UnusedProperty
// phpcs:disable Squiz.NamingConventions.ValidVariableName.MemberNotCamelCaps
    private int $teamId;
    private string $teamName;
    private bool|null $isAdmin = false;
    private float|null $budget = null;
    private float|null $spending = 0.0;
    private float|null $remaining = null;

    public function teamId(): int
    {
        return $this->teamId;
    }

    public function teamName(): string
    {
        return $this->teamName;
    }

    public function isAdmin(): bool|null
    {
        return $this->isAdmin;
    }

    public function budget(): float|null
    {
        return $this->budget;
    }

    public function spending(): float|null
    {
        return $this->spending;
    }

    public function remaining(): float|null
    {
        return $this->remaining;
    }

    /** @return array<string, string> */
    private static function arrayPropItemTypeMap(): array
    {
        return [];
    }

    /** @return array<string, int> */
    private static function maxValues(): array
    {
        return [];
    }

    /** @return array<string,string> */
    public function keyMapping(): array
    {
        return [
            'team_id' => 'teamId',
            'team_name' => 'teamName',
            'is_admin' => 'isAdmin',
            'budget' => 'budget',
            'spending' => 'spending',
            'remaining' => 'remaining',
        ];
    }

// phpcs:enable
}
