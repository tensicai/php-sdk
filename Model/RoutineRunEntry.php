<?php

declare(strict_types=1);

namespace TeamBlue\TensicAI\SDK\Model;

use EventEngine\Data\SpecialKeySupport;
use EventEngine\JsonSchema\JsonSchemaAwareRecord;
use TeamBlue\JsonImmutableObjects\JsonSchemaAwareRecordLogic;
use TeamBlue\OpenApi\Codegen\Endpoint\SpecialKeySupportLogic;
use TeamBlue\TensicAI\SDK\Default\RoutineRunEntryDefault;

final class RoutineRunEntry implements SpecialKeySupport, JsonSchemaAwareRecord
{
    use RoutineRunEntryDefault;
    use JsonSchemaAwareRecordLogic;
    use SpecialKeySupportLogic;

// phpcs:disable SlevomatCodingStandard.Classes.UnusedPrivateElements.UnusedProperty
// phpcs:disable Squiz.NamingConventions.ValidVariableName.MemberNotCamelCaps
    private int $id;
    private string|null $status = null;
    private string|null $result = null;
    private int|null $durationMs = null;
    private bool $manual;
    private string|null $createdAt = null;

    public function id(): int
    {
        return $this->id;
    }

    public function status(): string|null
    {
        return $this->status;
    }

    public function result(): string|null
    {
        return $this->result;
    }

    public function durationMs(): int|null
    {
        return $this->durationMs;
    }

    public function manual(): bool
    {
        return $this->manual;
    }

    public function createdAt(): string|null
    {
        return $this->createdAt;
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
            'id' => 'id',
            'status' => 'status',
            'result' => 'result',
            'duration_ms' => 'durationMs',
            'manual' => 'manual',
            'created_at' => 'createdAt',
        ];
    }

// phpcs:enable
}
