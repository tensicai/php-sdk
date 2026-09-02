<?php

declare(strict_types=1);

namespace TensicAI\SDK\Model;

use EventEngine\Data\SpecialKeySupport;
use EventEngine\JsonSchema\JsonSchemaAwareRecord;
use TeamBlue\JsonImmutableObjects\JsonSchemaAwareRecordLogic;
use TeamBlue\OpenApi\Codegen\Endpoint\SpecialKeySupportLogic;
use TensicAI\SDK\Default\ConversationContextResponseDefault;

final class ConversationContextResponse implements SpecialKeySupport, JsonSchemaAwareRecord
{
    use ConversationContextResponseDefault;
    use JsonSchemaAwareRecordLogic;
    use SpecialKeySupportLogic;

// phpcs:disable SlevomatCodingStandard.Classes.UnusedPrivateElements.UnusedProperty
// phpcs:disable Squiz.NamingConventions.ValidVariableName.MemberNotCamelCaps
    private int $windowDays;
    private int $sampleSize;
    private ConversationContextMetric $latencyMs;
    private ConversationContextMetric $cost;
    private ConversationContextMetric $tokens;
    private ConversationContextMetric $toolCalls;

    public function windowDays(): int
    {
        return $this->windowDays;
    }

    public function sampleSize(): int
    {
        return $this->sampleSize;
    }

    public function latencyMs(): ConversationContextMetric
    {
        return $this->latencyMs;
    }

    public function cost(): ConversationContextMetric
    {
        return $this->cost;
    }

    public function tokens(): ConversationContextMetric
    {
        return $this->tokens;
    }

    public function toolCalls(): ConversationContextMetric
    {
        return $this->toolCalls;
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
            'window_days' => 'windowDays',
            'sample_size' => 'sampleSize',
            'latency_ms' => 'latencyMs',
            'cost' => 'cost',
            'tokens' => 'tokens',
            'tool_calls' => 'toolCalls',
        ];
    }

// phpcs:enable
}
