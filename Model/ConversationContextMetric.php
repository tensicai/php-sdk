<?php

declare(strict_types=1);

namespace TeamBlue\TensicAI\SDK\Model;

use EventEngine\Data\SpecialKeySupport;
use EventEngine\JsonSchema\JsonSchemaAwareRecord;
use TeamBlue\JsonImmutableObjects\JsonSchemaAwareRecordLogic;
use TeamBlue\OpenApi\Codegen\Endpoint\SpecialKeySupportLogic;
use TeamBlue\TensicAI\SDK\Default\ConversationContextMetricDefault;

final class ConversationContextMetric implements SpecialKeySupport, JsonSchemaAwareRecord
{
    use ConversationContextMetricDefault;
    use JsonSchemaAwareRecordLogic;
    use SpecialKeySupportLogic;

// phpcs:disable SlevomatCodingStandard.Classes.UnusedPrivateElements.UnusedProperty
// phpcs:disable Squiz.NamingConventions.ValidVariableName.MemberNotCamelCaps
    private float|null $p50 = null;
    private float|null $p95 = null;
    private float|null $thisValue = null;
    private float|null $percentileRank = null;

    public function p50(): float|null
    {
        return $this->p50;
    }

    public function p95(): float|null
    {
        return $this->p95;
    }

    public function thisValue(): float|null
    {
        return $this->thisValue;
    }

    public function percentileRank(): float|null
    {
        return $this->percentileRank;
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
            'p50' => 'p50',
            'p95' => 'p95',
            'this_value' => 'thisValue',
            'percentile_rank' => 'percentileRank',
        ];
    }

// phpcs:enable
}
