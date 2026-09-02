<?php

declare(strict_types=1);

namespace TeamBlue\TensicAI\SDK\Model;

use EventEngine\Data\SpecialKeySupport;
use EventEngine\JsonSchema\JsonSchemaAwareRecord;
use TeamBlue\JsonImmutableObjects\JsonSchemaAwareRecordLogic;
use TeamBlue\OpenApi\Codegen\Endpoint\SpecialKeySupportLogic;
use TeamBlue\TensicAI\SDK\Default\ChunkScoreByBucketDefault;

final class ChunkScoreByBucket implements SpecialKeySupport, JsonSchemaAwareRecord
{
    use ChunkScoreByBucketDefault;
    use JsonSchemaAwareRecordLogic;
    use SpecialKeySupportLogic;

// phpcs:disable SlevomatCodingStandard.Classes.UnusedPrivateElements.UnusedProperty
// phpcs:disable Squiz.NamingConventions.ValidVariableName.MemberNotCamelCaps
    private string $bucket;
    private float|null $avgScore = null;
    private int $count;

    public function bucket(): string
    {
        return $this->bucket;
    }

    public function avgScore(): float|null
    {
        return $this->avgScore;
    }

    public function count(): int
    {
        return $this->count;
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
            'bucket' => 'bucket',
            'avg_score' => 'avgScore',
            'count' => 'count',
        ];
    }

// phpcs:enable
}
