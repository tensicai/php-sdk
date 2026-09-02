<?php

declare(strict_types=1);

namespace TensicAI\SDK\Model;

use EventEngine\Data\SpecialKeySupport;
use EventEngine\JsonSchema\JsonSchemaAwareRecord;
use TeamBlue\JsonImmutableObjects\JsonSchemaAwareRecordLogic;
use TeamBlue\OpenApi\Codegen\Endpoint\SpecialKeySupportLogic;
use TensicAI\SDK\Default\OpenAIEmbeddingUsageDefault;

final class OpenAIEmbeddingUsage implements SpecialKeySupport, JsonSchemaAwareRecord
{
    use OpenAIEmbeddingUsageDefault;
    use JsonSchemaAwareRecordLogic;
    use SpecialKeySupportLogic;

// phpcs:disable SlevomatCodingStandard.Classes.UnusedPrivateElements.UnusedProperty
// phpcs:disable Squiz.NamingConventions.ValidVariableName.MemberNotCamelCaps
    private int $promptTokens;
    private int $totalTokens;

    public function promptTokens(): int
    {
        return $this->promptTokens;
    }

    public function totalTokens(): int
    {
        return $this->totalTokens;
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
            'prompt_tokens' => 'promptTokens',
            'total_tokens' => 'totalTokens',
        ];
    }

// phpcs:enable
}
