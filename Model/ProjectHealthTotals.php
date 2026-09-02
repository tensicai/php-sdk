<?php

declare(strict_types=1);

namespace TeamBlue\TensicAI\SDK\Model;

use EventEngine\Data\SpecialKeySupport;
use EventEngine\JsonSchema\JsonSchemaAwareRecord;
use TeamBlue\JsonImmutableObjects\JsonSchemaAwareRecordLogic;
use TeamBlue\OpenApi\Codegen\Endpoint\SpecialKeySupportLogic;
use TeamBlue\TensicAI\SDK\Default\ProjectHealthTotalsDefault;

final class ProjectHealthTotals implements SpecialKeySupport, JsonSchemaAwareRecord
{
    use ProjectHealthTotalsDefault;
    use JsonSchemaAwareRecordLogic;
    use SpecialKeySupportLogic;

// phpcs:disable SlevomatCodingStandard.Classes.UnusedPrivateElements.UnusedProperty
// phpcs:disable Squiz.NamingConventions.ValidVariableName.MemberNotCamelCaps
    private int|null $runs = 0;
    private int|null $errors = 0;
    private float|null $errorRate = 0.0;
    private int|null $guardBlocks = 0;
    private float|null $guardBlockRate = 0.0;
    private int|null $p50LatencyMs = null;
    private int|null $p95LatencyMs = null;
    private float|null $cost = 0.0;
    private int|null $tokens = 0;

    public function runs(): int|null
    {
        return $this->runs;
    }

    public function errors(): int|null
    {
        return $this->errors;
    }

    public function errorRate(): float|null
    {
        return $this->errorRate;
    }

    public function guardBlocks(): int|null
    {
        return $this->guardBlocks;
    }

    public function guardBlockRate(): float|null
    {
        return $this->guardBlockRate;
    }

    public function p50LatencyMs(): int|null
    {
        return $this->p50LatencyMs;
    }

    public function p95LatencyMs(): int|null
    {
        return $this->p95LatencyMs;
    }

    public function cost(): float|null
    {
        return $this->cost;
    }

    public function tokens(): int|null
    {
        return $this->tokens;
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
            'runs' => 'runs',
            'errors' => 'errors',
            'error_rate' => 'errorRate',
            'guard_blocks' => 'guardBlocks',
            'guard_block_rate' => 'guardBlockRate',
            'p50_latency_ms' => 'p50LatencyMs',
            'p95_latency_ms' => 'p95LatencyMs',
            'cost' => 'cost',
            'tokens' => 'tokens',
        ];
    }

// phpcs:enable
}
