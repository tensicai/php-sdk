<?php

declare(strict_types=1);

namespace TeamBlue\TensicAI\SDK\Model;

use EventEngine\Data\SpecialKeySupport;
use EventEngine\JsonSchema\JsonSchemaAwareRecord;
use TeamBlue\JsonImmutableObjects\JsonSchemaAwareRecordLogic;
use TeamBlue\OpenApi\Codegen\Endpoint\SpecialKeySupportLogic;
use TeamBlue\TensicAI\SDK\Default\ToolUsageStatDefault;

final class ToolUsageStat implements SpecialKeySupport, JsonSchemaAwareRecord
{
    use ToolUsageStatDefault;
    use JsonSchemaAwareRecordLogic;
    use SpecialKeySupportLogic;

// phpcs:disable SlevomatCodingStandard.Classes.UnusedPrivateElements.UnusedProperty
// phpcs:disable Squiz.NamingConventions.ValidVariableName.MemberNotCamelCaps
    private string $name;
    private int $calls;
    private int $errors;
    private float $errorRate;
    private int|null $avgLatencyMs = null;
    private int|null $p95LatencyMs = null;

    public function name(): string
    {
        return $this->name;
    }

    public function calls(): int
    {
        return $this->calls;
    }

    public function errors(): int
    {
        return $this->errors;
    }

    public function errorRate(): float
    {
        return $this->errorRate;
    }

    public function avgLatencyMs(): int|null
    {
        return $this->avgLatencyMs;
    }

    public function p95LatencyMs(): int|null
    {
        return $this->p95LatencyMs;
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
            'name' => 'name',
            'calls' => 'calls',
            'errors' => 'errors',
            'error_rate' => 'errorRate',
            'avg_latency_ms' => 'avgLatencyMs',
            'p95_latency_ms' => 'p95LatencyMs',
        ];
    }

// phpcs:enable
}
