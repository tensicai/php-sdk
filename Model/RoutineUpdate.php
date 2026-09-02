<?php

declare(strict_types=1);

namespace TeamBlue\TensicAI\SDK\Model;

use EventEngine\Data\SpecialKeySupport;
use EventEngine\JsonSchema\JsonSchemaAwareRecord;
use TeamBlue\JsonImmutableObjects\JsonSchemaAwareRecordLogic;
use TeamBlue\OpenApi\Codegen\Endpoint\SpecialKeySupportLogic;
use TeamBlue\TensicAI\SDK\Default\RoutineUpdateDefault;

final class RoutineUpdate implements SpecialKeySupport, JsonSchemaAwareRecord
{
    use RoutineUpdateDefault;
    use JsonSchemaAwareRecordLogic;
    use SpecialKeySupportLogic;

// phpcs:disable SlevomatCodingStandard.Classes.UnusedPrivateElements.UnusedProperty
// phpcs:disable Squiz.NamingConventions.ValidVariableName.MemberNotCamelCaps
    private string|null $name = null;
    private string|null $message = null;
    private int|null $scheduleMinutes = null;
    private bool|null $enabled = null;

    public function name(): string|null
    {
        return $this->name;
    }

    public function message(): string|null
    {
        return $this->message;
    }

    public function scheduleMinutes(): int|null
    {
        return $this->scheduleMinutes;
    }

    public function enabled(): bool|null
    {
        return $this->enabled;
    }

    /** @return array<string, string> */
    private static function arrayPropItemTypeMap(): array
    {
        return [];
    }

    /** @return array<string, int> */
    private static function maxValues(): array
    {
        return ['scheduleMinutes' => 10080];
    }

    /** @return array<string,string> */
    public function keyMapping(): array
    {
        return [
            'name' => 'name',
            'message' => 'message',
            'schedule_minutes' => 'scheduleMinutes',
            'enabled' => 'enabled',
        ];
    }

// phpcs:enable
}
