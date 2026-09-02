<?php

declare(strict_types=1);

namespace TeamBlue\TensicAI\SDK\Model;

use EventEngine\Data\SpecialKeySupport;
use EventEngine\JsonSchema\JsonSchemaAwareRecord;
use TeamBlue\JsonImmutableObjects\JsonSchemaAwareRecordLogic;
use TeamBlue\OpenApi\Codegen\Endpoint\SpecialKeySupportLogic;
use TeamBlue\TensicAI\SDK\Default\ProjectTemplateUpdateDefault;

final class ProjectTemplateUpdate implements SpecialKeySupport, JsonSchemaAwareRecord
{
    use ProjectTemplateUpdateDefault;
    use JsonSchemaAwareRecordLogic;
    use SpecialKeySupportLogic;

// phpcs:disable SlevomatCodingStandard.Classes.UnusedPrivateElements.UnusedProperty
// phpcs:disable Squiz.NamingConventions.ValidVariableName.MemberNotCamelCaps
    private string|null $name = null;
    private string|null $description = null;
    private string|null $visibility = null;

    public function name(): string|null
    {
        return $this->name;
    }

    public function description(): string|null
    {
        return $this->description;
    }

    public function visibility(): string|null
    {
        return $this->visibility;
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
            'name' => 'name',
            'description' => 'description',
            'visibility' => 'visibility',
        ];
    }

// phpcs:enable
}
