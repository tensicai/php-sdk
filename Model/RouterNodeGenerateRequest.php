<?php

declare(strict_types=1);

namespace TensicAI\SDK\Model;

use EventEngine\Data\SpecialKeySupport;
use EventEngine\JsonSchema\JsonSchemaAwareRecord;
use TeamBlue\JsonImmutableObjects\JsonSchemaAwareRecordLogic;
use TeamBlue\OpenApi\Codegen\Endpoint\SpecialKeySupportLogic;
use TensicAI\SDK\Default\RouterNodeGenerateRequestDefault;

final class RouterNodeGenerateRequest implements SpecialKeySupport, JsonSchemaAwareRecord
{
    use RouterNodeGenerateRequestDefault;
    use JsonSchemaAwareRecordLogic;
    use SpecialKeySupportLogic;

// phpcs:disable SlevomatCodingStandard.Classes.UnusedPrivateElements.UnusedProperty
// phpcs:disable Squiz.NamingConventions.ValidVariableName.MemberNotCamelCaps
    private string $description;
    private string $nodeType;
    /** @var array<string>|null */
    private array|null $variablesInScope = null;
    private string|null $variableName = null;

    public function description(): string
    {
        return $this->description;
    }

    public function nodeType(): string
    {
        return $this->nodeType;
    }

    /** @return array<string>|null */
    public function variablesInScope(): array|null
    {
        return $this->variablesInScope;
    }

    public function variableName(): string|null
    {
        return $this->variableName;
    }

    /** @return array<string, string> */
    private static function arrayPropItemTypeMap(): array
    {
        return ['variablesInScope' => 'string'];
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
            'description' => 'description',
            'node_type' => 'nodeType',
            'variables_in_scope' => 'variablesInScope',
            'variable_name' => 'variableName',
        ];
    }

// phpcs:enable
}
