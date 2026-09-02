<?php

declare(strict_types=1);

namespace TeamBlue\TensicAI\SDK\Model;

use EventEngine\Data\SpecialKeySupport;
use EventEngine\JsonSchema\JsonSchemaAwareRecord;
use TeamBlue\JsonImmutableObjects\JsonSchemaAwareRecordLogic;
use TeamBlue\OpenApi\Codegen\Endpoint\SpecialKeySupportLogic;
use TeamBlue\TensicAI\SDK\Default\OpenAIEmbeddingResponseDefault;

final class OpenAIEmbeddingResponse implements SpecialKeySupport, JsonSchemaAwareRecord
{
    use OpenAIEmbeddingResponseDefault;
    use JsonSchemaAwareRecordLogic;
    use SpecialKeySupportLogic;

// phpcs:disable SlevomatCodingStandard.Classes.UnusedPrivateElements.UnusedProperty
// phpcs:disable Squiz.NamingConventions.ValidVariableName.MemberNotCamelCaps
    private string|null $object = 'list';
    /** @var array<OpenAIEmbeddingData> */
    private array $data;
    private string $model;
    private OpenAIEmbeddingUsage $usage;

    public function object(): string|null
    {
        return $this->object;
    }

    /** @return array<OpenAIEmbeddingData> */
    public function data(): array
    {
        return $this->data;
    }

    public function model(): string
    {
        return $this->model;
    }

    public function usage(): OpenAIEmbeddingUsage
    {
        return $this->usage;
    }

    /** @return array<string, string> */
    private static function arrayPropItemTypeMap(): array
    {
        return [
            'data' => OpenAIEmbeddingData::class,
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
            'object' => 'object',
            'data' => 'data',
            'model' => 'model',
            'usage' => 'usage',
        ];
    }

// phpcs:enable
}
