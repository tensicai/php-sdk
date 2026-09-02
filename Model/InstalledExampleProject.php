<?php

declare(strict_types=1);

namespace TensicAI\SDK\Model;

use EventEngine\Data\SpecialKeySupport;
use EventEngine\JsonSchema\JsonSchemaAwareRecord;
use TeamBlue\JsonImmutableObjects\JsonSchemaAwareRecordLogic;
use TeamBlue\OpenApi\Codegen\Endpoint\SpecialKeySupportLogic;
use TensicAI\SDK\Default\InstalledExampleProjectDefault;

final class InstalledExampleProject implements SpecialKeySupport, JsonSchemaAwareRecord
{
    use InstalledExampleProjectDefault;
    use JsonSchemaAwareRecordLogic;
    use SpecialKeySupportLogic;

// phpcs:disable SlevomatCodingStandard.Classes.UnusedPrivateElements.UnusedProperty
// phpcs:disable Squiz.NamingConventions.ValidVariableName.MemberNotCamelCaps
    private int $id;
    private string $name;
    private string $role;
    private string $type;
    private string $humanName;
    private bool $isEntry;

    public function id(): int
    {
        return $this->id;
    }

    public function name(): string
    {
        return $this->name;
    }

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
            'id' => 'id',
            'name' => 'name',
            'role' => 'role',
            'type' => 'type',
            'human_name' => 'humanName',
            'is_entry' => 'isEntry',
        ];
    }

// phpcs:enable
}
