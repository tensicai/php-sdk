<?php

declare(strict_types=1);

namespace TensicAI\SDK\Model;

use EventEngine\Data\SpecialKeySupport;
use EventEngine\JsonSchema\JsonSchemaAwareRecord;
use TeamBlue\JsonImmutableObjects\JsonSchemaAwareRecordLogic;
use TeamBlue\OpenApi\Codegen\Endpoint\SpecialKeySupportLogic;
use TensicAI\SDK\Default\OpenAIImageGenerateRequestDefault;

final class OpenAIImageGenerateRequest implements SpecialKeySupport, JsonSchemaAwareRecord
{
    use OpenAIImageGenerateRequestDefault;
    use JsonSchemaAwareRecordLogic;
    use SpecialKeySupportLogic;

// phpcs:disable SlevomatCodingStandard.Classes.UnusedPrivateElements.UnusedProperty
// phpcs:disable Squiz.NamingConventions.ValidVariableName.MemberNotCamelCaps
    private string $model;
    private string $prompt;
    private int|null $n = null;
    private string|null $quality = null;
    private string|null $responseFormat = null;
    private string|null $size = null;
    private string|null $style = null;
    private string|null $user = null;

    public function model(): string
    {
        return $this->model;
    }

    public function prompt(): string
    {
        return $this->prompt;
    }

    public function n(): int|null
    {
        return $this->n;
    }

    public function quality(): string|null
    {
        return $this->quality;
    }

    public function responseFormat(): string|null
    {
        return $this->responseFormat;
    }

    public function size(): string|null
    {
        return $this->size;
    }

    public function style(): string|null
    {
        return $this->style;
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
        return ['n' => 10];
    }

    /** @return array<string,string> */
    public function keyMapping(): array
    {
        return [
            'model' => 'model',
            'prompt' => 'prompt',
            'n' => 'n',
            'quality' => 'quality',
            'response_format' => 'responseFormat',
            'size' => 'size',
            'style' => 'style',
            'user' => 'user',
        ];
    }

// phpcs:enable
}
