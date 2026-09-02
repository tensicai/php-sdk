<?php

declare(strict_types=1);

namespace TensicAI\SDK\Model;

use EventEngine\Data\SpecialKeySupport;
use EventEngine\JsonSchema\JsonSchemaAwareRecord;
use TeamBlue\JsonImmutableObjects\JsonSchemaAwareRecordLogic;
use TeamBlue\OpenApi\Codegen\Endpoint\SpecialKeySupportLogic;
use TensicAI\SDK\Default\ProjectSecretModelDefault;

final class ProjectSecretModel implements SpecialKeySupport, JsonSchemaAwareRecord
{
    use ProjectSecretModelDefault;
    use JsonSchemaAwareRecordLogic;
    use SpecialKeySupportLogic;

// phpcs:disable SlevomatCodingStandard.Classes.UnusedPrivateElements.UnusedProperty
// phpcs:disable Squiz.NamingConventions.ValidVariableName.MemberNotCamelCaps
    private int|null $id = null;
    private int $projectId;
    private string $name;
    private string $value;
    private string|null $description = null;

    public function id(): int|null
    {
        return $this->id;
    }

    public function projectId(): int
    {
        return $this->projectId;
    }

    public function name(): string
    {
        return $this->name;
    }

    public function value(): string
    {
        return $this->value;
    }

    public function description(): string|null
    {
        return $this->description;
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
            'project_id' => 'projectId',
            'name' => 'name',
            'value' => 'value',
            'description' => 'description',
        ];
    }

// phpcs:enable
}
