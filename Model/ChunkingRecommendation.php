<?php

declare(strict_types=1);

namespace TensicAI\SDK\Model;

use EventEngine\Data\SpecialKeySupport;
use EventEngine\JsonSchema\JsonSchemaAwareRecord;
use TeamBlue\JsonImmutableObjects\JsonSchemaAwareRecordLogic;
use TeamBlue\OpenApi\Codegen\Endpoint\SpecialKeySupportLogic;
use TensicAI\SDK\Default\ChunkingRecommendationDefault;

final class ChunkingRecommendation implements SpecialKeySupport, JsonSchemaAwareRecord
{
    use ChunkingRecommendationDefault;
    use JsonSchemaAwareRecordLogic;
    use SpecialKeySupportLogic;

// phpcs:disable SlevomatCodingStandard.Classes.UnusedPrivateElements.UnusedProperty
// phpcs:disable Squiz.NamingConventions.ValidVariableName.MemberNotCamelCaps
    private string $type;
    private string $severity;
    private string $message;
    private int|null $suggestedChunkSize = null;

    public function type(): string
    {
        return $this->type;
    }

    public function severity(): string
    {
        return $this->severity;
    }

    public function message(): string
    {
        return $this->message;
    }

    public function suggestedChunkSize(): int|null
    {
        return $this->suggestedChunkSize;
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
            'type' => 'type',
            'severity' => 'severity',
            'message' => 'message',
            'suggested_chunk_size' => 'suggestedChunkSize',
        ];
    }

// phpcs:enable
}
