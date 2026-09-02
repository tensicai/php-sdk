<?php

declare(strict_types=1);

namespace TeamBlue\TensicAI\SDK\Model;

use EventEngine\Data\SpecialKeySupport;
use EventEngine\JsonSchema\JsonSchemaAwareRecord;
use TeamBlue\JsonImmutableObjects\JsonSchemaAwareRecordLogic;
use TeamBlue\OpenApi\Codegen\Endpoint\SpecialKeySupportLogic;
use TeamBlue\TensicAI\SDK\Default\UserActivitySummaryDefault;

final class UserActivitySummary implements SpecialKeySupport, JsonSchemaAwareRecord
{
    use UserActivitySummaryDefault;
    use JsonSchemaAwareRecordLogic;
    use SpecialKeySupportLogic;

// phpcs:disable SlevomatCodingStandard.Classes.UnusedPrivateElements.UnusedProperty
// phpcs:disable Squiz.NamingConventions.ValidVariableName.MemberNotCamelCaps
    private int|null $totalRequests = 0;
    private int|null $totalTokens = 0;
    private float|null $totalCost = 0;
    private int|null $avgLatencyMs = 0;
    private int|null $totalConversations = 0;

    public function totalRequests(): int|null
    {
        return $this->totalRequests;
    }

    public function totalTokens(): int|null
    {
        return $this->totalTokens;
    }

    public function totalCost(): float|null
    {
        return $this->totalCost;
    }

    public function avgLatencyMs(): int|null
    {
        return $this->avgLatencyMs;
    }

    public function totalConversations(): int|null
    {
        return $this->totalConversations;
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
            'total_requests' => 'totalRequests',
            'total_tokens' => 'totalTokens',
            'total_cost' => 'totalCost',
            'avg_latency_ms' => 'avgLatencyMs',
            'total_conversations' => 'totalConversations',
        ];
    }

// phpcs:enable
}
