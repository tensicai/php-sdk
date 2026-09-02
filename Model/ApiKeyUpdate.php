<?php

declare(strict_types=1);

namespace TensicAI\SDK\Model;

use EventEngine\Data\SpecialKeySupport;
use EventEngine\JsonSchema\JsonSchemaAwareRecord;
use TeamBlue\JsonImmutableObjects\JsonSchemaAwareRecordLogic;
use TeamBlue\OpenApi\Codegen\Endpoint\SpecialKeySupportLogic;
use TensicAI\SDK\Default\ApiKeyUpdateDefault;

final class ApiKeyUpdate implements SpecialKeySupport, JsonSchemaAwareRecord
{
    use ApiKeyUpdateDefault;
    use JsonSchemaAwareRecordLogic;
    use SpecialKeySupportLogic;

// phpcs:disable SlevomatCodingStandard.Classes.UnusedPrivateElements.UnusedProperty
// phpcs:disable Squiz.NamingConventions.ValidVariableName.MemberNotCamelCaps
    private string|null $description = null;
    private int|null $tokenQuotaMonthly = null;
    private float|null $costBudgetMonthly = null;
    private bool|null $resetUsage = false;

    public function description(): string|null
    {
        return $this->description;
    }

    public function tokenQuotaMonthly(): int|null
    {
        return $this->tokenQuotaMonthly;
    }

    public function costBudgetMonthly(): float|null
    {
        return $this->costBudgetMonthly;
    }

    public function resetUsage(): bool|null
    {
        return $this->resetUsage;
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
            'description' => 'description',
            'token_quota_monthly' => 'tokenQuotaMonthly',
            'cost_budget_monthly' => 'costBudgetMonthly',
            'reset_usage' => 'resetUsage',
        ];
    }

// phpcs:enable
}
