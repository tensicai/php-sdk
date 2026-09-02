<?php

declare(strict_types=1);

namespace TeamBlue\TensicAI\SDK\Model;

use EventEngine\Data\SpecialKeySupport;
use EventEngine\JsonSchema\JsonSchemaAwareRecord;
use TeamBlue\JsonImmutableObjects\JsonSchemaAwareRecordLogic;
use TeamBlue\OpenApi\Codegen\Endpoint\SpecialKeySupportLogic;
use TeamBlue\TensicAI\SDK\Default\OtelTestResponseDefault;

final class OtelTestResponse implements SpecialKeySupport, JsonSchemaAwareRecord
{
    use OtelTestResponseDefault;
    use JsonSchemaAwareRecordLogic;
    use SpecialKeySupportLogic;

// phpcs:disable SlevomatCodingStandard.Classes.UnusedPrivateElements.UnusedProperty
// phpcs:disable Squiz.NamingConventions.ValidVariableName.MemberNotCamelCaps
    private string $status;
    private int $latencyMs;
    private string $endpoint;

    public function status(): string
    {
        return $this->status;
    }

    public function latencyMs(): int
    {
        return $this->latencyMs;
    }

    public function endpoint(): string
    {
        return $this->endpoint;
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
            'status' => 'status',
            'latency_ms' => 'latencyMs',
            'endpoint' => 'endpoint',
        ];
    }

// phpcs:enable
}
