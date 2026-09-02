<?php

declare(strict_types=1);

namespace TeamBlue\TensicAI\SDK\Model;

use EventEngine\Data\SpecialKeySupport;
use EventEngine\JsonSchema\JsonSchemaAwareRecord;
use TeamBlue\JsonImmutableObjects\JsonSchemaAwareRecordLogic;
use TeamBlue\OpenApi\Codegen\Endpoint\SpecialKeySupportLogic;
use TeamBlue\TensicAI\SDK\Default\ProjectHealthResponseDefault;

final class ProjectHealthResponse implements SpecialKeySupport, JsonSchemaAwareRecord
{
    use ProjectHealthResponseDefault;
    use JsonSchemaAwareRecordLogic;
    use SpecialKeySupportLogic;

// phpcs:disable SlevomatCodingStandard.Classes.UnusedPrivateElements.UnusedProperty
// phpcs:disable Squiz.NamingConventions.ValidVariableName.MemberNotCamelCaps
    private int $windowDays;
    private ProjectHealthTotals $totals;
    /** @var array<ProjectHealthPoint>|null */
    private array|null $series = null;
    private int|null $latencySampleSize = 0;
    private bool|null $latencyTruncated = false;

    public function windowDays(): int
    {
        return $this->windowDays;
    }

    public function totals(): ProjectHealthTotals
    {
        return $this->totals;
    }

    /** @return array<ProjectHealthPoint>|null */
    public function series(): array|null
    {
        return $this->series;
    }

    public function latencySampleSize(): int|null
    {
        return $this->latencySampleSize;
    }

    public function latencyTruncated(): bool|null
    {
        return $this->latencyTruncated;
    }

    /** @return array<string, string> */
    private static function arrayPropItemTypeMap(): array
    {
        return [
            'series' => ProjectHealthPoint::class,
        ];
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
            'window_days' => 'windowDays',
            'totals' => 'totals',
            'series' => 'series',
            'latency_sample_size' => 'latencySampleSize',
            'latency_truncated' => 'latencyTruncated',
        ];
    }

// phpcs:enable
}
