<?php

declare(strict_types=1);

namespace TeamBlue\TensicAI\SDK\Model;

use EventEngine\Data\SpecialKeySupport;
use EventEngine\JsonSchema\JsonSchemaAwareRecord;
use TeamBlue\JsonImmutableObjects\JsonSchemaAwareRecordLogic;
use TeamBlue\OpenApi\Codegen\Endpoint\SpecialKeySupportLogic;
use TeamBlue\TensicAI\SDK\Default\GuardSummaryResponseDefault;

final class GuardSummaryResponse implements SpecialKeySupport, JsonSchemaAwareRecord
{
    use GuardSummaryResponseDefault;
    use JsonSchemaAwareRecordLogic;
    use SpecialKeySupportLogic;

// phpcs:disable SlevomatCodingStandard.Classes.UnusedPrivateElements.UnusedProperty
// phpcs:disable Squiz.NamingConventions.ValidVariableName.MemberNotCamelCaps
    private int $totalChecks;
    private int $totalBlocks;
    private float $blockRate;
    private int $inputBlocks;
    private int $outputBlocks;
    private int $warnCount;

    public function totalChecks(): int
    {
        return $this->totalChecks;
    }

    public function totalBlocks(): int
    {
        return $this->totalBlocks;
    }

    public function blockRate(): float
    {
        return $this->blockRate;
    }

    public function inputBlocks(): int
    {
        return $this->inputBlocks;
    }

    public function outputBlocks(): int
    {
        return $this->outputBlocks;
    }

    public function warnCount(): int
    {
        return $this->warnCount;
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
            'total_checks' => 'totalChecks',
            'total_blocks' => 'totalBlocks',
            'block_rate' => 'blockRate',
            'input_blocks' => 'inputBlocks',
            'output_blocks' => 'outputBlocks',
            'warn_count' => 'warnCount',
        ];
    }

// phpcs:enable
}
