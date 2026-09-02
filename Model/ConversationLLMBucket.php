<?php

declare(strict_types=1);

namespace TensicAI\SDK\Model;

use EventEngine\Data\SpecialKeySupport;
use EventEngine\JsonSchema\JsonSchemaAwareRecord;
use TeamBlue\JsonImmutableObjects\JsonSchemaAwareRecordLogic;
use TeamBlue\OpenApi\Codegen\Endpoint\SpecialKeySupportLogic;
use TensicAI\SDK\Default\ConversationLLMBucketDefault;

final class ConversationLLMBucket implements SpecialKeySupport, JsonSchemaAwareRecord
{
    use ConversationLLMBucketDefault;
    use JsonSchemaAwareRecordLogic;
    use SpecialKeySupportLogic;

// phpcs:disable SlevomatCodingStandard.Classes.UnusedPrivateElements.UnusedProperty
// phpcs:disable Squiz.NamingConventions.ValidVariableName.MemberNotCamelCaps
    private string|null $llm = null;
    private int $messages;
    private int $tokens;
    private float $cost;

    public function llm(): string|null
    {
        return $this->llm;
    }

    public function messages(): int
    {
        return $this->messages;
    }

    public function tokens(): int
    {
        return $this->tokens;
    }

    public function cost(): float
    {
        return $this->cost;
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
            'llm' => 'llm',
            'messages' => 'messages',
            'tokens' => 'tokens',
            'cost' => 'cost',
        ];
    }

// phpcs:enable
}
