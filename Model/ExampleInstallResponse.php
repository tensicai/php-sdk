<?php

declare(strict_types=1);

namespace TensicAI\SDK\Model;

use EventEngine\Data\SpecialKeySupport;
use EventEngine\JsonSchema\JsonSchemaAwareRecord;
use TeamBlue\JsonImmutableObjects\JsonSchemaAwareRecordLogic;
use TeamBlue\OpenApi\Codegen\Endpoint\SpecialKeySupportLogic;
use TensicAI\SDK\Default\ExampleInstallResponseDefault;

final class ExampleInstallResponse implements SpecialKeySupport, JsonSchemaAwareRecord
{
    use ExampleInstallResponseDefault;
    use JsonSchemaAwareRecordLogic;
    use SpecialKeySupportLogic;

// phpcs:disable SlevomatCodingStandard.Classes.UnusedPrivateElements.UnusedProperty
// phpcs:disable Squiz.NamingConventions.ValidVariableName.MemberNotCamelCaps
    private string $exampleId;
    private int $entryProjectId;
    private string $entryProjectName;
    /** @var array<InstalledExampleProject> */
    private array $projects;
    /** @var array<string>|null */
    private array|null $missingRequirements = null;
    /** @var array<string>|null */
    private array|null $warnings = null;

    public function exampleId(): string
    {
        return $this->exampleId;
    }

    public function entryProjectId(): int
    {
        return $this->entryProjectId;
    }

    public function entryProjectName(): string
    {
        return $this->entryProjectName;
    }

    /** @return array<InstalledExampleProject> */
    public function projects(): array
    {
        return $this->projects;
    }

    /** @return array<string>|null */
    public function missingRequirements(): array|null
    {
        return $this->missingRequirements;
    }

    /** @return array<string>|null */
    public function warnings(): array|null
    {
        return $this->warnings;
    }

    /** @return array<string, string> */
    private static function arrayPropItemTypeMap(): array
    {
        return [
            'projects' => InstalledExampleProject::class,
            'missingRequirements' => 'string',
            'warnings' => 'string',
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
            'example_id' => 'exampleId',
            'entry_project_id' => 'entryProjectId',
            'entry_project_name' => 'entryProjectName',
            'projects' => 'projects',
            'missing_requirements' => 'missingRequirements',
            'warnings' => 'warnings',
        ];
    }

// phpcs:enable
}
