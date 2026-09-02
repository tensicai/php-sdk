<?php

declare(strict_types=1);

namespace TensicAI\SDK\Model;

use EventEngine\Data\SpecialKeySupport;
use EventEngine\JsonSchema\JsonSchemaAwareRecord;
use TeamBlue\JsonImmutableObjects\JsonSchemaAwareRecordLogic;
use TeamBlue\OpenApi\Codegen\Endpoint\SpecialKeySupportLogic;
use TensicAI\SDK\Default\ChunkRetrievalAnalysisDefault;

final class ChunkRetrievalAnalysis implements SpecialKeySupport, JsonSchemaAwareRecord
{
    use ChunkRetrievalAnalysisDefault;
    use JsonSchemaAwareRecordLogic;
    use SpecialKeySupportLogic;

// phpcs:disable SlevomatCodingStandard.Classes.UnusedPrivateElements.UnusedProperty
// phpcs:disable Squiz.NamingConventions.ValidVariableName.MemberNotCamelCaps
    private int $totalRetrievals;
    private int $uniqueChunksRetrieved;
    private float $retrievalRate;
    private int $neverRetrievedChunks;
    private int|null $avgRetrievedTokens = null;
    private float|null $avgScore = null;
    private ChunkSizeDistribution $sizeDistribution;
    /** @var array<ChunkScoreByBucket> */
    private array $scoreBySize;

    public function totalRetrievals(): int
    {
        return $this->totalRetrievals;
    }

    public function uniqueChunksRetrieved(): int
    {
        return $this->uniqueChunksRetrieved;
    }

    public function retrievalRate(): float
    {
        return $this->retrievalRate;
    }

    public function neverRetrievedChunks(): int
    {
        return $this->neverRetrievedChunks;
    }

    public function avgRetrievedTokens(): int|null
    {
        return $this->avgRetrievedTokens;
    }

    public function avgScore(): float|null
    {
        return $this->avgScore;
    }

    public function sizeDistribution(): ChunkSizeDistribution
    {
        return $this->sizeDistribution;
    }

    /** @return array<ChunkScoreByBucket> */
    public function scoreBySize(): array
    {
        return $this->scoreBySize;
    }

    /** @return array<string, string> */
    private static function arrayPropItemTypeMap(): array
    {
        return [
            'scoreBySize' => ChunkScoreByBucket::class,
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
            'total_retrievals' => 'totalRetrievals',
            'unique_chunks_retrieved' => 'uniqueChunksRetrieved',
            'retrieval_rate' => 'retrievalRate',
            'never_retrieved_chunks' => 'neverRetrievedChunks',
            'avg_retrieved_tokens' => 'avgRetrievedTokens',
            'avg_score' => 'avgScore',
            'size_distribution' => 'sizeDistribution',
            'score_by_size' => 'scoreBySize',
        ];
    }

// phpcs:enable
}
