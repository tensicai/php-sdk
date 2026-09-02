<?php

declare(strict_types=1);

namespace TensicAI\SDK\Model;

use EventEngine\Data\SpecialKeySupport;
use EventEngine\JsonSchema\JsonSchemaAwareRecord;
use TeamBlue\JsonImmutableObjects\JsonSchemaAwareRecordLogic;
use TeamBlue\OpenApi\Codegen\Endpoint\SpecialKeySupportLogic;
use TensicAI\SDK\Default\MemoryBankPreviewResponseDefault;

final class MemoryBankPreviewResponse implements SpecialKeySupport, JsonSchemaAwareRecord
{
    use MemoryBankPreviewResponseDefault;
    use JsonSchemaAwareRecordLogic;
    use SpecialKeySupportLogic;

// phpcs:disable SlevomatCodingStandard.Classes.UnusedPrivateElements.UnusedProperty
// phpcs:disable Squiz.NamingConventions.ValidVariableName.MemberNotCamelCaps
    private string $block;
    private int $tokens;
    private int $maxTokens;

    public function block(): string
    {
        return $this->block;
    }

    public function tokens(): int
    {
        return $this->tokens;
    }

    public function maxTokens(): int
    {
        return $this->maxTokens;
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
            'block' => 'block',
            'tokens' => 'tokens',
            'max_tokens' => 'maxTokens',
        ];
    }

// phpcs:enable
}
