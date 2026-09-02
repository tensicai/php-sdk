<?php

declare(strict_types=1);

namespace TensicAI\SDK\Model;

use EventEngine\Data\SpecialKeySupport;
use EventEngine\JsonSchema\JsonSchemaAwareRecord;
use TeamBlue\JsonImmutableObjects\JsonSchemaAwareRecordLogic;
use TeamBlue\OpenApi\Codegen\Endpoint\SpecialKeySupportLogic;
use TensicAI\SDK\Default\EmbeddingUpdateDefault;

final class EmbeddingUpdate implements SpecialKeySupport, JsonSchemaAwareRecord
{
    use EmbeddingUpdateDefault;
    use JsonSchemaAwareRecordLogic;
    use SpecialKeySupportLogic;

// phpcs:disable SlevomatCodingStandard.Classes.UnusedPrivateElements.UnusedProperty
// phpcs:disable Squiz.NamingConventions.ValidVariableName.MemberNotCamelCaps
    private string|null $className = null;
    private Options2|null $options = null;
    private string|null $privacy = null;
    private string|null $description = null;
    private int|null $dimension = null;
    private float|null $inputCost = null;

    public function className(): string|null
    {
        return $this->className;
    }

    public function options(): Options2|null
    {
        return $this->options;
    }

    public function privacy(): string|null
    {
        return $this->privacy;
    }

    public function description(): string|null
    {
        return $this->description;
    }

    public function dimension(): int|null
    {
        return $this->dimension;
    }

    public function inputCost(): float|null
    {
        return $this->inputCost;
    }

    /** @return array<string, string> */
    private static function arrayPropItemTypeMap(): array
    {
        return [];
    }

    /** @return array<string, int> */
    private static function maxValues(): array
    {
        return ['dimension' => 65536];
    }

    /** @return array<string,string> */
    public function keyMapping(): array
    {
        return [
            'class_name' => 'className',
            'options' => 'options',
            'privacy' => 'privacy',
            'description' => 'description',
            'dimension' => 'dimension',
            'input_cost' => 'inputCost',
        ];
    }

// phpcs:enable
}
