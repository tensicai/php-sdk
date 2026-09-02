<?php

declare(strict_types=1);

namespace TensicAI\SDK\Model;

use EventEngine\Data\SpecialKeySupport;
use EventEngine\JsonSchema\JsonSchemaAwareRecord;
use TeamBlue\JsonImmutableObjects\JsonSchemaAwareRecordLogic;
use TeamBlue\OpenApi\Codegen\Endpoint\SpecialKeySupportLogic;
use TensicAI\SDK\Default\LLMUpdateDefault;

final class LLMUpdate implements SpecialKeySupport, JsonSchemaAwareRecord
{
    use LLMUpdateDefault;
    use JsonSchemaAwareRecordLogic;
    use SpecialKeySupportLogic;

// phpcs:disable SlevomatCodingStandard.Classes.UnusedPrivateElements.UnusedProperty
// phpcs:disable Squiz.NamingConventions.ValidVariableName.MemberNotCamelCaps
    private string|null $className = null;
    private Options6|null $options = null;
    private string|null $privacy = null;
    private string|null $description = null;
    private float|null $inputCost = null;
    private float|null $outputCost = null;
    private int|null $contextWindow = null;
    private float|null $temperature = null;

    public function className(): string|null
    {
        return $this->className;
    }

    public function options(): Options6|null
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

    public function inputCost(): float|null
    {
        return $this->inputCost;
    }

    public function outputCost(): float|null
    {
        return $this->outputCost;
    }

    public function contextWindow(): int|null
    {
        return $this->contextWindow;
    }

    public function temperature(): float|null
    {
        return $this->temperature;
    }

    /** @return array<string, string> */
    private static function arrayPropItemTypeMap(): array
    {
        return [];
    }

    /** @return array<string, int> */
    private static function maxValues(): array
    {
        return [
            'contextWindow' => 10000000,
            'temperature' => 2.0,
        ];
    }

    /** @return array<string,string> */
    public function keyMapping(): array
    {
        return [
            'class_name' => 'className',
            'options' => 'options',
            'privacy' => 'privacy',
            'description' => 'description',
            'input_cost' => 'inputCost',
            'output_cost' => 'outputCost',
            'context_window' => 'contextWindow',
            'temperature' => 'temperature',
        ];
    }

// phpcs:enable
}
