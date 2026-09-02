<?php

declare(strict_types=1);

namespace TeamBlue\TensicAI\SDK\Model;

use EventEngine\Data\SpecialKeySupport;
use EventEngine\JsonSchema\JsonSchemaAwareRecord;
use TeamBlue\JsonImmutableObjects\JsonSchemaAwareRecordLogic;
use TeamBlue\OpenApi\Codegen\Endpoint\SpecialKeySupportLogic;
use TeamBlue\TensicAI\SDK\Default\ProjectTemplateResponseDefault;
use TeamBlue\ValueObjects\Implementation\String\DateTimeValue;

final class ProjectTemplateResponse implements SpecialKeySupport, JsonSchemaAwareRecord
{
    use ProjectTemplateResponseDefault;
    use JsonSchemaAwareRecordLogic;
    use SpecialKeySupportLogic;

// phpcs:disable SlevomatCodingStandard.Classes.UnusedPrivateElements.UnusedProperty
// phpcs:disable Squiz.NamingConventions.ValidVariableName.MemberNotCamelCaps
    private int $id;
    private string $name;
    private string|null $description = null;
    private string $projectType;
    private string|null $suggestedLlm = null;
    private string|null $suggestedEmbeddings = null;
    private string $visibility;
    private string|null $creatorUsername = null;
    private int|null $teamId = null;
    private string|null $teamName = null;
    private DateTimeValue $createdAt;
    private int|null $useCount = 0;

    public function id(): int
    {
        return $this->id;
    }

    public function name(): string
    {
        return $this->name;
    }

    public function description(): string|null
    {
        return $this->description;
    }

    public function projectType(): string
    {
        return $this->projectType;
    }

    public function suggestedLlm(): string|null
    {
        return $this->suggestedLlm;
    }

    public function suggestedEmbeddings(): string|null
    {
        return $this->suggestedEmbeddings;
    }

    public function visibility(): string
    {
        return $this->visibility;
    }

    public function creatorUsername(): string|null
    {
        return $this->creatorUsername;
    }

    public function teamId(): int|null
    {
        return $this->teamId;
    }

    public function teamName(): string|null
    {
        return $this->teamName;
    }

    public function createdAt(): DateTimeValue
    {
        return $this->createdAt;
    }

    public function useCount(): int|null
    {
        return $this->useCount;
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
            'id' => 'id',
            'name' => 'name',
            'description' => 'description',
            'project_type' => 'projectType',
            'suggested_llm' => 'suggestedLlm',
            'suggested_embeddings' => 'suggestedEmbeddings',
            'visibility' => 'visibility',
            'creator_username' => 'creatorUsername',
            'team_id' => 'teamId',
            'team_name' => 'teamName',
            'created_at' => 'createdAt',
            'use_count' => 'useCount',
        ];
    }

// phpcs:enable
}
