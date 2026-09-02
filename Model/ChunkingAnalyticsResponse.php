<?php

declare(strict_types=1);

namespace TensicAI\SDK\Model;

use EventEngine\Data\SpecialKeySupport;
use EventEngine\JsonSchema\JsonSchemaAwareRecord;
use TeamBlue\JsonImmutableObjects\JsonSchemaAwareRecordLogic;
use TeamBlue\OpenApi\Codegen\Endpoint\SpecialKeySupportLogic;
use TensicAI\SDK\Default\ChunkingAnalyticsResponseDefault;

final class ChunkingAnalyticsResponse implements SpecialKeySupport, JsonSchemaAwareRecord
{
    use ChunkingAnalyticsResponseDefault;
    use JsonSchemaAwareRecordLogic;
    use SpecialKeySupportLogic;

// phpcs:disable SlevomatCodingStandard.Classes.UnusedPrivateElements.UnusedProperty
// phpcs:disable Squiz.NamingConventions.ValidVariableName.MemberNotCamelCaps
    private int $totalChunks;
    private bool $truncated;
    private int $avgChunkTokens;
    private int $medianChunkTokens;
    private ChunkSizeDistribution $sizeDistribution;
    private ChunkRetrievalAnalysis $retrievalAnalysis;
    /** @var array<ChunkingRecommendation> */
    private array $recommendations;
    private int $days;

    public function totalChunks(): int
    {
        return $this->totalChunks;
    }

    public function truncated(): bool
    {
        return $this->truncated;
    }

    public function avgChunkTokens(): int
    {
        return $this->avgChunkTokens;
    }

    public function medianChunkTokens(): int
    {
        return $this->medianChunkTokens;
    }

    public function sizeDistribution(): ChunkSizeDistribution
    {
        return $this->sizeDistribution;
    }

    public function retrievalAnalysis(): ChunkRetrievalAnalysis
    {
        return $this->retrievalAnalysis;
    }

    /** @return array<ChunkingRecommendation> */
    public function recommendations(): array
    {
        return $this->recommendations;
    }

    public function days(): int
    {
        return $this->days;
    }

    /** @return array<string, string> */
    private static function arrayPropItemTypeMap(): array
    {
        return [
            'recommendations' => ChunkingRecommendation::class,
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
            'total_chunks' => 'totalChunks',
            'truncated' => 'truncated',
            'avg_chunk_tokens' => 'avgChunkTokens',
            'median_chunk_tokens' => 'medianChunkTokens',
            'size_distribution' => 'sizeDistribution',
            'retrieval_analysis' => 'retrievalAnalysis',
            'recommendations' => 'recommendations',
            'days' => 'days',
        ];
    }

// phpcs:enable
}
