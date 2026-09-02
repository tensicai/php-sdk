<?php

declare(strict_types=1);

namespace TeamBlue\TensicAI\SDK\Model;

use EventEngine\Data\SpecialKeySupport;
use EventEngine\JsonSchema\JsonSchemaAwareRecord;
use TeamBlue\JsonImmutableObjects\JsonSchemaAwareRecordLogic;
use TeamBlue\OpenApi\Codegen\Endpoint\SpecialKeySupportLogic;
use TeamBlue\TensicAI\SDK\Default\OpenAIEmbeddingDataDefault;

final class OpenAIEmbeddingData implements SpecialKeySupport, JsonSchemaAwareRecord
{
    use OpenAIEmbeddingDataDefault;
    use JsonSchemaAwareRecordLogic;
    use SpecialKeySupportLogic;

// phpcs:disable SlevomatCodingStandard.Classes.UnusedPrivateElements.UnusedProperty
// phpcs:disable Squiz.NamingConventions.ValidVariableName.MemberNotCamelCaps
    private string|null $object = 'embedding';
    private Embedding $embedding;
    private int $index;

    public function object(): string|null
    {
        return $this->object;
    }

    public function embedding(): Embedding
    {
        return $this->embedding;
    }

    public function index(): int
    {
        return $this->index;
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
            'object' => 'object',
            'embedding' => 'embedding',
            'index' => 'index',
        ];
    }

// phpcs:enable
}
