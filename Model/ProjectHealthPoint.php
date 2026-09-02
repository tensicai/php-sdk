<?php

declare(strict_types=1);

namespace TensicAI\SDK\Model;

use EventEngine\Data\SpecialKeySupport;
use EventEngine\JsonSchema\JsonSchemaAwareRecord;
use TeamBlue\JsonImmutableObjects\JsonSchemaAwareRecordLogic;
use TeamBlue\OpenApi\Codegen\Endpoint\SpecialKeySupportLogic;
use TensicAI\SDK\Default\ProjectHealthPointDefault;

final class ProjectHealthPoint implements SpecialKeySupport, JsonSchemaAwareRecord
{
    use ProjectHealthPointDefault;
    use JsonSchemaAwareRecordLogic;
    use SpecialKeySupportLogic;

// phpcs:disable SlevomatCodingStandard.Classes.UnusedPrivateElements.UnusedProperty
// phpcs:disable Squiz.NamingConventions.ValidVariableName.MemberNotCamelCaps
    private string $date;
    private int|null $runs = 0;
    private int|null $errors = 0;
    private int|null $p50LatencyMs = null;
    private float|null $cost = 0.0;
    private int|null $tokens = 0;

    public function date(): string
    {
        return $this->date;
    }

    public function runs(): int|null
    {
        return $this->runs;
    }

    public function errors(): int|null
    {
        return $this->errors;
    }

    public function p50LatencyMs(): int|null
    {
        return $this->p50LatencyMs;
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
            'date' => 'date',
            'runs' => 'runs',
            'errors' => 'errors',
            'p50_latency_ms' => 'p50LatencyMs',
            'cost' => 'cost',
            'tokens' => 'tokens',
        ];
    }

// phpcs:enable
}
