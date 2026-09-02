<?php

declare(strict_types=1);

namespace TeamBlue\TensicAI\SDK\Model;

use EventEngine\Data\SpecialKeySupport;
use EventEngine\JsonSchema\JsonSchemaAwareRecord;
use TeamBlue\JsonImmutableObjects\JsonSchemaAwareRecordLogic;
use TeamBlue\OpenApi\Codegen\Endpoint\SpecialKeySupportLogic;
use TeamBlue\TensicAI\SDK\Default\ChatResponseDefault;

final class ChatResponse implements SpecialKeySupport, JsonSchemaAwareRecord
{
    use ChatResponseDefault;
    use JsonSchemaAwareRecordLogic;
    use SpecialKeySupportLogic;

// phpcs:disable SlevomatCodingStandard.Classes.UnusedPrivateElements.UnusedProperty
// phpcs:disable Squiz.NamingConventions.ValidVariableName.MemberNotCamelCaps
    private string $question;
    private string $answer;
    private string $type;
    private string|null $project = null;
    private TokensModel|null $tokens = null;
    private bool|null $guard = null;
    /** @var array<SourceModel>|null */
    private array|null $sources = null;
    private string|null $image = null;
    private string $id;
    /** @var array<mixed>|null */
    private array|null $artifacts = null;

    public function question(): string
    {
        return $this->question;
    }

    public function answer(): string
    {
        return $this->answer;
    }

    public function type(): string
    {
        return $this->type;
    }

    public function project(): string|null
    {
        return $this->project;
    }

    public function tokens(): TokensModel|null
    {
        return $this->tokens;
    }

    public function guard(): bool|null
    {
        return $this->guard;
    }

    /** @return array<SourceModel>|null */
    public function sources(): array|null
    {
        return $this->sources;
    }

    public function image(): string|null
    {
        return $this->image;
    }

    public function id(): string
    {
        return $this->id;
    }

    /** @return array<mixed>|null */
    public function artifacts(): array|null
    {
        return $this->artifacts;
    }

    /** @return array<string, string> */
    private static function arrayPropItemTypeMap(): array
    {
        return [
            'sources' => SourceModel::class,
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
            'question' => 'question',
            'answer' => 'answer',
            'type' => 'type',
            'project' => 'project',
            'tokens' => 'tokens',
            'guard' => 'guard',
            'sources' => 'sources',
            'image' => 'image',
            'id' => 'id',
            'artifacts' => 'artifacts',
        ];
    }

// phpcs:enable
}
