<?php

declare(strict_types=1);

namespace TeamBlue\TensicAI\SDK\Model;

use EventEngine\Data\SpecialKeySupport;
use EventEngine\JsonSchema\JsonSchemaAwareRecord;
use TeamBlue\JsonImmutableObjects\JsonSchemaAwareRecordLogic;
use TeamBlue\OpenApi\Codegen\Endpoint\SpecialKeySupportLogic;
use TeamBlue\TensicAI\SDK\Default\ExampleEntryDefault;

final class ExampleEntry implements SpecialKeySupport, JsonSchemaAwareRecord
{
    use ExampleEntryDefault;
    use JsonSchemaAwareRecordLogic;
    use SpecialKeySupportLogic;

// phpcs:disable SlevomatCodingStandard.Classes.UnusedPrivateElements.UnusedProperty
// phpcs:disable Squiz.NamingConventions.ValidVariableName.MemberNotCamelCaps
    private string $id;
    private string $name;
    private string $description;
    private string $entryRole;
    /** @var array<string> */
    private array $requires;
    /** @var array<ExampleRequirement> */
    private array $requirements;
    private bool $ready;
    /** @var array<ExampleProjectEntry> */
    private array $projects;

    public function id(): string
    {
        return $this->id;
    }

    public function name(): string
    {
        return $this->name;
    }

    public function description(): string
    {
        return $this->description;
    }

    public function entryRole(): string
    {
        return $this->entryRole;
    }

    /** @return array<string> */
    public function requires(): array
    {
        return $this->requires;
    }

    /** @return array<ExampleRequirement> */
    public function requirements(): array
    {
        return $this->requirements;
    }

    public function ready(): bool
    {
        return $this->ready;
    }

    /** @return array<ExampleProjectEntry> */
    public function projects(): array
    {
        return $this->projects;
    }

    /** @return array<string, string> */
    private static function arrayPropItemTypeMap(): array
    {
        return [
            'requires' => 'string',
            'requirements' => ExampleRequirement::class,
            'projects' => ExampleProjectEntry::class,
        ];
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
            'description' => 'description',
            'entry_role' => 'entryRole',
            'requires' => 'requires',
            'requirements' => 'requirements',
            'ready' => 'ready',
            'projects' => 'projects',
        ];
    }

// phpcs:enable
}
