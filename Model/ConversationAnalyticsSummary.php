<?php

declare(strict_types=1);

namespace TeamBlue\TensicAI\SDK\Model;

use EventEngine\Data\SpecialKeySupport;
use EventEngine\JsonSchema\JsonSchemaAwareRecord;
use TeamBlue\JsonImmutableObjects\JsonSchemaAwareRecordLogic;
use TeamBlue\OpenApi\Codegen\Endpoint\SpecialKeySupportLogic;
use TeamBlue\TensicAI\SDK\Default\ConversationAnalyticsSummaryDefault;

final class ConversationAnalyticsSummary implements SpecialKeySupport, JsonSchemaAwareRecord
{
    use ConversationAnalyticsSummaryDefault;
    use JsonSchemaAwareRecordLogic;
    use SpecialKeySupportLogic;

// phpcs:disable SlevomatCodingStandard.Classes.UnusedPrivateElements.UnusedProperty
// phpcs:disable Squiz.NamingConventions.ValidVariableName.MemberNotCamelCaps
    private int $totalConversations;
    private int $totalMessages;
    private float $avgMessagesPerConversation;
    private int $avgLatencyMs;
    private int $totalTokens;
    private float $totalCost;

    public function totalConversations(): int
    {
        return $this->totalConversations;
    }

    public function totalMessages(): int
    {
        return $this->totalMessages;
    }

    public function avgMessagesPerConversation(): float
    {
        return $this->avgMessagesPerConversation;
    }

    public function avgLatencyMs(): int
    {
        return $this->avgLatencyMs;
    }

    public function totalTokens(): int
    {
        return $this->totalTokens;
    }

    public function totalCost(): float
    {
        return $this->totalCost;
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
            'total_conversations' => 'totalConversations',
            'total_messages' => 'totalMessages',
            'avg_messages_per_conversation' => 'avgMessagesPerConversation',
            'avg_latency_ms' => 'avgLatencyMs',
            'total_tokens' => 'totalTokens',
            'total_cost' => 'totalCost',
        ];
    }

// phpcs:enable
}
