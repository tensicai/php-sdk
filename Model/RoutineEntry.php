<?php

declare(strict_types=1);

namespace TensicAI\SDK\Model;

use EventEngine\Data\SpecialKeySupport;
use EventEngine\JsonSchema\JsonSchemaAwareRecord;
use TeamBlue\JsonImmutableObjects\JsonSchemaAwareRecordLogic;
use TeamBlue\OpenApi\Codegen\Endpoint\SpecialKeySupportLogic;
use TensicAI\SDK\Default\RoutineEntryDefault;

final class RoutineEntry implements SpecialKeySupport, JsonSchemaAwareRecord
{
    use RoutineEntryDefault;
    use JsonSchemaAwareRecordLogic;
    use SpecialKeySupportLogic;

// phpcs:disable SlevomatCodingStandard.Classes.UnusedPrivateElements.UnusedProperty
// phpcs:disable Squiz.NamingConventions.ValidVariableName.MemberNotCamelCaps
    private int $id;
    private string $name;
    private string $message;
    private int $scheduleMinutes;
    private bool $enabled;
    private int|null $projectId = null;
    private string|null $lastRun = null;
    private string|null $lastResult = null;
    private string|null $createdAt = null;
    private string|null $updatedAt = null;

    public function id(): int
    {
        return $this->id;
    }

    public function name(): string
    {
        return $this->name;
    }

    public function message(): string
    {
        return $this->message;
    }

    public function scheduleMinutes(): int
    {
        return $this->scheduleMinutes;
    }

    public function enabled(): bool
    {
        return $this->enabled;
    }

    public function projectId(): int|null
    {
        return $this->projectId;
    }

    public function lastRun(): string|null
    {
        return $this->lastRun;
    }

    public function lastResult(): string|null
    {
        return $this->lastResult;
    }

    public function createdAt(): string|null
    {
        return $this->createdAt;
    }

    public function updatedAt(): string|null
    {
        return $this->updatedAt;
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
            'name' => 'name',
            'message' => 'message',
            'schedule_minutes' => 'scheduleMinutes',
            'enabled' => 'enabled',
            'project_id' => 'projectId',
            'last_run' => 'lastRun',
            'last_result' => 'lastResult',
            'created_at' => 'createdAt',
            'updated_at' => 'updatedAt',
        ];
    }

// phpcs:enable
}
