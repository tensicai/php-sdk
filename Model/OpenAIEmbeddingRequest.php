<?php

declare(strict_types=1);

namespace TeamBlue\TensicAI\SDK\Model;

use EventEngine\Data\SpecialKeySupport;
use EventEngine\JsonSchema\JsonSchemaAwareRecord;
use TeamBlue\JsonImmutableObjects\JsonSchemaAwareRecordLogic;
use TeamBlue\OpenApi\Codegen\Endpoint\SpecialKeySupportLogic;
use TeamBlue\TensicAI\SDK\Default\OpenAIEmbeddingRequestDefault;

final class OpenAIEmbeddingRequest implements SpecialKeySupport, JsonSchemaAwareRecord
{
    use OpenAIEmbeddingRequestDefault;
    use JsonSchemaAwareRecordLogic;
    use SpecialKeySupportLogic;

// phpcs:disable SlevomatCodingStandard.Classes.UnusedPrivateElements.UnusedProperty
// phpcs:disable Squiz.NamingConventions.ValidVariableName.MemberNotCamelCaps
    private string $model;
    private Input $input;
    private string|null $encodingFormat = null;
    private int|null $dimensions = null;
    private string|null $user = null;

    public function model(): string
    {
        return $this->model;
    }

    public function input(): Input
    {
        return $this->input;
    }

    public function encodingFormat(): string|null
    {
        return $this->encodingFormat;
    }

    public function dimensions(): int|null
    {
        return $this->dimensions;
    }

    public function user(): string|null
    {
        return $this->user;
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
            'model' => 'model',
            'input' => 'input',
            'encoding_format' => 'encodingFormat',
            'dimensions' => 'dimensions',
            'user' => 'user',
        ];
    }

// phpcs:enable
}
