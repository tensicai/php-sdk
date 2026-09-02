<?php

declare(strict_types=1);

namespace TeamBlue\TensicAI\SDK\Model;

use EventEngine\Data\SpecialKeySupport;
use EventEngine\JsonSchema\JsonSchemaAwareRecord;
use TeamBlue\JsonImmutableObjects\JsonSchemaAwareRecordLogic;
use TeamBlue\OpenApi\Codegen\Endpoint\SpecialKeySupportLogic;
use TeamBlue\TensicAI\SDK\Default\StatisticsDailyTokenEntryDefault;

final class StatisticsDailyTokenEntry implements SpecialKeySupport, JsonSchemaAwareRecord
{
    use StatisticsDailyTokenEntryDefault;
    use JsonSchemaAwareRecordLogic;
    use SpecialKeySupportLogic;

// phpcs:disable SlevomatCodingStandard.Classes.UnusedPrivateElements.UnusedProperty
// phpcs:disable Squiz.NamingConventions.ValidVariableName.MemberNotCamelCaps
    private string $date;
    private int|null $inputTokens = 0;
    private int|null $outputTokens = 0;
    private float|null $inputCost = 0;
    private float|null $outputCost = 0;
    private int|null $avgLatencyMs = 0;

    public function date(): string
    {
        return $this->date;
    }

    public function inputTokens(): int|null
    {
        return $this->inputTokens;
    }

    public function outputTokens(): int|null
    {
        return $this->outputTokens;
    }

    public function inputCost(): float|null
    {
        return $this->inputCost;
    }

    public function outputCost(): float|null
    {
        return $this->outputCost;
    }

    public function avgLatencyMs(): int|null
    {
        return $this->avgLatencyMs;
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
            'date' => 'date',
            'input_tokens' => 'inputTokens',
            'output_tokens' => 'outputTokens',
            'input_cost' => 'inputCost',
            'output_cost' => 'outputCost',
            'avg_latency_ms' => 'avgLatencyMs',
        ];
    }

// phpcs:enable
}
