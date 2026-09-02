<?php

declare(strict_types=1);

namespace TensicAI\SDK\Model;

use EventEngine\Data\SpecialKeySupport;
use EventEngine\JsonSchema\JsonSchemaAwareRecord;
use TeamBlue\JsonImmutableObjects\JsonSchemaAwareRecordLogic;
use TeamBlue\OpenApi\Codegen\Endpoint\SpecialKeySupportLogic;
use TensicAI\SDK\Default\ExampleProjectEntryDefault;

final class ExampleProjectEntry implements SpecialKeySupport, JsonSchemaAwareRecord
{
    use ExampleProjectEntryDefault;
    use JsonSchemaAwareRecordLogic;
    use SpecialKeySupportLogic;

// phpcs:disable SlevomatCodingStandard.Classes.UnusedPrivateElements.UnusedProperty
// phpcs:disable Squiz.NamingConventions.ValidVariableName.MemberNotCamelCaps
    private string $role;
    private string $type;
    private string $humanName;
    private string $humanDescription;
    private bool $isEntry;

    public function role(): string
    {
        return $this->role;
    }

    public function type(): string
    {
        return $this->type;
    }

    public function humanName(): string
    {
        return $this->humanName;
    }

    public function humanDescription(): string
    {
        return $this->humanDescription;
    }

    public function isEntry(): bool
    {
        return $this->isEntry;
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
            'role' => 'role',
            'type' => 'type',
            'human_name' => 'humanName',
            'human_description' => 'humanDescription',
            'is_entry' => 'isEntry',
        ];
    }

// phpcs:enable
}
