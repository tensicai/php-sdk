<?php

declare(strict_types=1);

namespace TeamBlue\TensicAI\SDK\Model;

use EventEngine\Data\SpecialKeySupport;
use EventEngine\JsonSchema\JsonSchemaAwareRecord;
use TeamBlue\JsonImmutableObjects\JsonSchemaAwareRecordLogic;
use TeamBlue\OpenApi\Codegen\Endpoint\SpecialKeySupportLogic;
use TeamBlue\TensicAI\SDK\Default\TeamModelCreateDefault;

final class TeamModelCreate implements SpecialKeySupport, JsonSchemaAwareRecord
{
    use TeamModelCreateDefault;
    use JsonSchemaAwareRecordLogic;
    use SpecialKeySupportLogic;

// phpcs:disable SlevomatCodingStandard.Classes.UnusedPrivateElements.UnusedProperty
// phpcs:disable Squiz.NamingConventions.ValidVariableName.MemberNotCamelCaps
    private string $name;
    private string|null $description = null;
    private float|null $budget = -1.0;
    /** @var array<string>|null */
    private array|null $users = [];
    /** @var array<string>|null */
    private array|null $admins = [];
    /** @var array<string>|null */
    private array|null $projects = [];
    /** @var array<string>|null */
    private array|null $llms = [];
    /** @var array<string>|null */
    private array|null $embeddings = [];
    /** @var array<string>|null */
    private array|null $imageGenerators = [];
    /** @var array<string>|null */
    private array|null $audioGenerators = [];
    private int|null $creatorId = null;

    public function name(): string
    {
        return $this->name;
    }

    public function description(): string|null
    {
        return $this->description;
    }

    public function budget(): float|null
    {
        return $this->budget;
    }

    /** @return array<string>|null */
    public function users(): array|null
    {
        return $this->users;
    }

    /** @return array<string>|null */
    public function admins(): array|null
    {
        return $this->admins;
    }

    /** @return array<string>|null */
    public function projects(): array|null
    {
        return $this->projects;
    }

    /** @return array<string>|null */
    public function llms(): array|null
    {
        return $this->llms;
    }

    /** @return array<string>|null */
    public function embeddings(): array|null
    {
        return $this->embeddings;
    }

    /** @return array<string>|null */
    public function imageGenerators(): array|null
    {
        return $this->imageGenerators;
    }

    /** @return array<string>|null */
    public function audioGenerators(): array|null
    {
        return $this->audioGenerators;
    }

    public function creatorId(): int|null
    {
        return $this->creatorId;
    }

    /** @return array<string, string> */
    private static function arrayPropItemTypeMap(): array
    {
        return [
            'users' => 'string',
            'admins' => 'string',
            'projects' => 'string',
            'llms' => 'string',
            'embeddings' => 'string',
            'imageGenerators' => 'string',
            'audioGenerators' => 'string',
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
            'description' => 'description',
            'budget' => 'budget',
            'users' => 'users',
            'admins' => 'admins',
            'projects' => 'projects',
            'llms' => 'llms',
            'embeddings' => 'embeddings',
            'image_generators' => 'imageGenerators',
            'audio_generators' => 'audioGenerators',
            'creator_id' => 'creatorId',
        ];
    }

// phpcs:enable
}
