<?php

declare(strict_types=1);

namespace TeamBlue\TensicAI\SDK\Model;

use EventEngine\Data\SpecialKeySupport;
use EventEngine\JsonSchema\JsonSchemaAwareRecord;
use TeamBlue\JsonImmutableObjects\JsonSchemaAwareRecordLogic;
use TeamBlue\OpenApi\Codegen\Endpoint\SpecialKeySupportLogic;
use TeamBlue\TensicAI\SDK\Default\OllamaModelInfoDefault;

final class OllamaModelInfo implements SpecialKeySupport, JsonSchemaAwareRecord
{
    use OllamaModelInfoDefault;
    use JsonSchemaAwareRecordLogic;
    use SpecialKeySupportLogic;

// phpcs:disable SlevomatCodingStandard.Classes.UnusedPrivateElements.UnusedProperty
// phpcs:disable Squiz.NamingConventions.ValidVariableName.MemberNotCamelCaps
    private string $name;
    private string|null $modifiedAt = null;
    private int|null $size = null;
    private string|null $digest = null;
    /** @var array<mixed>|null */
    private array|null $details = null;
    /** @var array<string>|null */
    private array|null $capabilities = null;
    private int|null $embeddingLength = null;

    public function name(): string
    {
        return $this->name;
    }

    public function modifiedAt(): string|null
    {
        return $this->modifiedAt;
    }

    public function size(): int|null
    {
        return $this->size;
    }

    public function digest(): string|null
    {
        return $this->digest;
    }

    /** @return array<mixed>|null */
    public function details(): array|null
    {
        return $this->details;
    }

    /** @return array<string>|null */
    public function capabilities(): array|null
    {
        return $this->capabilities;
    }

    public function embeddingLength(): int|null
    {
        return $this->embeddingLength;
    }

    /** @return array<string, string> */
    private static function arrayPropItemTypeMap(): array
    {
        return [
            'details' => 'mixed',
            'capabilities' => 'string',
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
            'name' => 'name',
            'modified_at' => 'modifiedAt',
            'size' => 'size',
            'digest' => 'digest',
            'details' => 'details',
            'capabilities' => 'capabilities',
            'embedding_length' => 'embeddingLength',
        ];
    }

// phpcs:enable
}
