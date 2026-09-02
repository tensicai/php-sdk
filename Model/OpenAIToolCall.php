<?php

declare(strict_types=1);

namespace TensicAI\SDK\Model;

use EventEngine\Data\SpecialKeySupport;
use EventEngine\JsonSchema\JsonSchemaAwareRecord;
use TeamBlue\JsonImmutableObjects\JsonSchemaAwareRecordLogic;
use TeamBlue\OpenApi\Codegen\Endpoint\SpecialKeySupportLogic;
use TensicAI\SDK\Default\OpenAIToolCallDefault;

final class OpenAIToolCall implements SpecialKeySupport, JsonSchemaAwareRecord
{
    use OpenAIToolCallDefault;
    use JsonSchemaAwareRecordLogic;
    use SpecialKeySupportLogic;

// phpcs:disable SlevomatCodingStandard.Classes.UnusedPrivateElements.UnusedProperty
// phpcs:disable Squiz.NamingConventions.ValidVariableName.MemberNotCamelCaps
    private string $id;
    private string|null $type = 'function';
    /** @var array<mixed> */
    private array $function;

    public function id(): string
    {
        return $this->id;
    }

    public function type(): string|null
    {
        return $this->type;
    }

    /** @return array<mixed> */
    public function function(): array
    {
        return $this->function;
    }

    /** @return array<string, string> */
    private static function arrayPropItemTypeMap(): array
    {
        return ['function' => 'mixed'];
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
            'id' => 'id',
            'type' => 'type',
            'function' => 'function',
        ];
    }

// phpcs:enable
}
