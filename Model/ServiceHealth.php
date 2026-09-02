<?php

declare(strict_types=1);

namespace TeamBlue\TensicAI\SDK\Model;

use EventEngine\Data\SpecialKeySupport;
use EventEngine\JsonSchema\JsonSchemaAwareRecord;
use TeamBlue\JsonImmutableObjects\JsonSchemaAwareRecordLogic;
use TeamBlue\OpenApi\Codegen\Endpoint\SpecialKeySupportLogic;
use TeamBlue\TensicAI\SDK\Default\ServiceHealthDefault;

final class ServiceHealth implements SpecialKeySupport, JsonSchemaAwareRecord
{
    use ServiceHealthDefault;
    use JsonSchemaAwareRecordLogic;
    use SpecialKeySupportLogic;

// phpcs:disable SlevomatCodingStandard.Classes.UnusedPrivateElements.UnusedProperty
// phpcs:disable Squiz.NamingConventions.ValidVariableName.MemberNotCamelCaps
    private string $service;
    private string $label;
    private string $status;
    private string|null $detail = '';
    private int|null $durationMs = 0;

    public function service(): string
    {
        return $this->service;
    }

    public function label(): string
    {
        return $this->label;
    }

    public function status(): string
    {
        return $this->status;
    }

    public function detail(): string|null
    {
        return $this->detail;
    }

    public function durationMs(): int|null
    {
        return $this->durationMs;
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
            'service' => 'service',
            'label' => 'label',
            'status' => 'status',
            'detail' => 'detail',
            'duration_ms' => 'durationMs',
        ];
    }

// phpcs:enable
}
