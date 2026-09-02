<?php

declare(strict_types=1);

namespace TensicAI\SDK\Model;

use EventEngine\Data\SpecialKeySupport;
use EventEngine\JsonSchema\JsonSchemaAwareRecord;
use TeamBlue\JsonImmutableObjects\JsonSchemaAwareRecordLogic;
use TeamBlue\OpenApi\Codegen\Endpoint\SpecialKeySupportLogic;
use TensicAI\SDK\Default\OpenAIChatMessageDefault;

final class OpenAIChatMessage implements SpecialKeySupport, JsonSchemaAwareRecord
{
    use OpenAIChatMessageDefault;
    use JsonSchemaAwareRecordLogic;
    use SpecialKeySupportLogic;

// phpcs:disable SlevomatCodingStandard.Classes.UnusedPrivateElements.UnusedProperty
// phpcs:disable Squiz.NamingConventions.ValidVariableName.MemberNotCamelCaps
    private string $role;
    private Content|null $content = null;
    /** @var array<OpenAIToolCall>|null */
    private array|null $toolCalls = null;
    private string|null $toolCallId = null;
    private string|null $name = null;
    private string|null $refusal = null;

    public function role(): string
    {
        return $this->role;
    }

    public function content(): Content|null
    {
        return $this->content;
    }

    /** @return array<OpenAIToolCall>|null */
    public function toolCalls(): array|null
    {
        return $this->toolCalls;
    }

    public function toolCallId(): string|null
    {
        return $this->toolCallId;
    }

    public function name(): string|null
    {
        return $this->name;
    }

    public function refusal(): string|null
    {
        return $this->refusal;
    }

    /** @return array<string, string> */
    private static function arrayPropItemTypeMap(): array
    {
        return [
            'toolCalls' => OpenAIToolCall::class,
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
            'role' => 'role',
            'content' => 'content',
            'tool_calls' => 'toolCalls',
            'tool_call_id' => 'toolCallId',
            'name' => 'name',
            'refusal' => 'refusal',
        ];
    }

// phpcs:enable
}
