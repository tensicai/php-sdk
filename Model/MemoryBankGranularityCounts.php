<?php

declare(strict_types=1);

namespace TeamBlue\TensicAI\SDK\Model;

use EventEngine\Data\SpecialKeySupport;
use EventEngine\JsonSchema\JsonSchemaAwareRecord;
use TeamBlue\JsonImmutableObjects\JsonSchemaAwareRecordLogic;
use TeamBlue\OpenApi\Codegen\Endpoint\SpecialKeySupportLogic;
use TeamBlue\TensicAI\SDK\Default\MemoryBankGranularityCountsDefault;

final class MemoryBankGranularityCounts implements SpecialKeySupport, JsonSchemaAwareRecord
{
    use MemoryBankGranularityCountsDefault;
    use JsonSchemaAwareRecordLogic;
    use SpecialKeySupportLogic;

// phpcs:disable SlevomatCodingStandard.Classes.UnusedPrivateElements.UnusedProperty
// phpcs:disable Squiz.NamingConventions.ValidVariableName.MemberNotCamelCaps
    private int|null $conversation = 0;
    private int|null $day = 0;
    private int|null $week = 0;
    private int|null $month = 0;

    public function conversation(): int|null
    {
        return $this->conversation;
    }

    public function day(): int|null
    {
        return $this->day;
    }

    public function week(): int|null
    {
        return $this->week;
    }

    public function month(): int|null
    {
        return $this->month;
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
            'conversation' => 'conversation',
            'day' => 'day',
            'week' => 'week',
            'month' => 'month',
        ];
    }

// phpcs:enable
}
