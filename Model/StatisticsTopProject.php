<?php

declare(strict_types=1);

namespace TeamBlue\TensicAI\SDK\Model;

use EventEngine\Data\SpecialKeySupport;
use EventEngine\JsonSchema\JsonSchemaAwareRecord;
use TeamBlue\JsonImmutableObjects\JsonSchemaAwareRecordLogic;
use TeamBlue\OpenApi\Codegen\Endpoint\SpecialKeySupportLogic;
use TeamBlue\TensicAI\SDK\Default\StatisticsTopProjectDefault;

final class StatisticsTopProject implements SpecialKeySupport, JsonSchemaAwareRecord
{
    use StatisticsTopProjectDefault;
    use JsonSchemaAwareRecordLogic;
    use SpecialKeySupportLogic;

// phpcs:disable SlevomatCodingStandard.Classes.UnusedPrivateElements.UnusedProperty
// phpcs:disable Squiz.NamingConventions.ValidVariableName.MemberNotCamelCaps
    private int $id;
    private string $name;
    private string $type;
    private string|null $llm = null;
    private int|null $totalTokens = 0;
    private int|null $inputTokens = 0;
    private int|null $outputTokens = 0;
    private float|null $totalCost = 0;

    public function id(): int
    {
        return $this->id;
    }

    public function name(): string
    {
        return $this->name;
    }

    public function type(): string
    {
        return $this->type;
    }

    public function llm(): string|null
    {
        return $this->llm;
    }

    public function totalTokens(): int|null
    {
        return $this->totalTokens;
    }

    public function inputTokens(): int|null
    {
        return $this->inputTokens;
    }

    public function outputTokens(): int|null
    {
        return $this->outputTokens;
    }

    public function totalCost(): float|null
    {
        return $this->totalCost;
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
            'type' => 'type',
            'llm' => 'llm',
            'total_tokens' => 'totalTokens',
            'input_tokens' => 'inputTokens',
            'output_tokens' => 'outputTokens',
            'total_cost' => 'totalCost',
        ];
    }

// phpcs:enable
}
