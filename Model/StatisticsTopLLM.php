<?php

declare(strict_types=1);

namespace TensicAI\SDK\Model;

use EventEngine\Data\SpecialKeySupport;
use EventEngine\JsonSchema\JsonSchemaAwareRecord;
use TeamBlue\JsonImmutableObjects\JsonSchemaAwareRecordLogic;
use TeamBlue\OpenApi\Codegen\Endpoint\SpecialKeySupportLogic;
use TensicAI\SDK\Default\StatisticsTopLLMDefault;

final class StatisticsTopLLM implements SpecialKeySupport, JsonSchemaAwareRecord
{
    use StatisticsTopLLMDefault;
    use JsonSchemaAwareRecordLogic;
    use SpecialKeySupportLogic;

// phpcs:disable SlevomatCodingStandard.Classes.UnusedPrivateElements.UnusedProperty
// phpcs:disable Squiz.NamingConventions.ValidVariableName.MemberNotCamelCaps
    private int|null $id = null;
    private string|null $name = null;
    private int|null $totalTokens = 0;
    private float|null $totalCost = 0;
    private int|null $requestCount = 0;

    public function id(): int|null
    {
        return $this->id;
    }

    public function name(): string|null
    {
        return $this->name;
    }

    public function totalTokens(): int|null
    {
        return $this->totalTokens;
    }

    public function totalCost(): float|null
    {
        return $this->totalCost;
    }

    public function requestCount(): int|null
    {
        return $this->requestCount;
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
            'total_tokens' => 'totalTokens',
            'total_cost' => 'totalCost',
            'request_count' => 'requestCount',
        ];
    }

// phpcs:enable
}
