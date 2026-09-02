<?php

declare(strict_types=1);

namespace TensicAI\SDK\Model;

use EventEngine\Data\SpecialKeySupport;
use EventEngine\JsonSchema\JsonSchemaAwareRecord;
use TeamBlue\JsonImmutableObjects\JsonSchemaAwareRecordLogic;
use TeamBlue\OpenApi\Codegen\Endpoint\SpecialKeySupportLogic;
use TensicAI\SDK\Default\TeamMemberBudgetDefault;

final class TeamMemberBudget implements SpecialKeySupport, JsonSchemaAwareRecord
{
    use TeamMemberBudgetDefault;
    use JsonSchemaAwareRecordLogic;
    use SpecialKeySupportLogic;

// phpcs:disable SlevomatCodingStandard.Classes.UnusedPrivateElements.UnusedProperty
// phpcs:disable Squiz.NamingConventions.ValidVariableName.MemberNotCamelCaps
    private int $userId;
    private string $username;
    private float|null $budget = null;
    private float|null $spending = 0.0;
    private float|null $remaining = null;

    public function userId(): int
    {
        return $this->userId;
    }

    public function username(): string
    {
        return $this->username;
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
            'user_id' => 'userId',
            'username' => 'username',
            'budget' => 'budget',
            'spending' => 'spending',
            'remaining' => 'remaining',
        ];
    }

// phpcs:enable
}
