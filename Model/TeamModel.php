<?php

declare(strict_types=1);

namespace TensicAI\SDK\Model;

use EventEngine\Data\SpecialKeySupport;
use EventEngine\JsonSchema\JsonSchemaAwareRecord;
use TeamBlue\JsonImmutableObjects\JsonSchemaAwareRecordLogic;
use TeamBlue\OpenApi\Codegen\Endpoint\SpecialKeySupportLogic;
use TeamBlue\ValueObjects\Implementation\String\DateTimeValue;
use TensicAI\SDK\Default\TeamModelDefault;

final class TeamModel implements SpecialKeySupport, JsonSchemaAwareRecord
{
    use TeamModelDefault;
    use JsonSchemaAwareRecordLogic;
    use SpecialKeySupportLogic;

// phpcs:disable SlevomatCodingStandard.Classes.UnusedPrivateElements.UnusedProperty
// phpcs:disable Squiz.NamingConventions.ValidVariableName.MemberNotCamelCaps
    private int $id;
    private string $name;
    private string|null $description = null;
    private DateTimeValue|null $createdAt = null;
    private float|null $budget = -1.0;
    private float|null $spending = null;
    private float|null $remaining = null;
    /** @var array<TeamUser>|null */
    private array|null $users = [];
    /** @var array<TeamUser>|null */
    private array|null $admins = [];
    /** @var array<TeamProject>|null */
    private array|null $projects = [];
    /** @var array<TeamLLM>|null */
    private array|null $llms = [];
    /** @var array<TeamEmbedding>|null */
    private array|null $embeddings = [];
    /** @var array<string>|null */
    private array|null $imageGenerators = [];
    /** @var array<string>|null */
    private array|null $audioGenerators = [];
    private TeamBranding|null $branding = null;
    private TeamOptions|null $options = null;

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

    public function createdAt(): DateTimeValue|null
    {
        return $this->createdAt;
    }

    public function budget(): float|null
    {
        return $this->budget;
    }

    public function spending(): float|null
    {
        return $this->spending;
    }

    public function remaining(): float|null
    {
        return $this->remaining;
    }

    /** @return array<TeamUser>|null */
    public function users(): array|null
    {
        return $this->users;
    }

    /** @return array<TeamUser>|null */
    public function admins(): array|null
    {
        return $this->admins;
    }

    /** @return array<TeamProject>|null */
    public function projects(): array|null
    {
        return $this->projects;
    }

    /** @return array<TeamLLM>|null */
    public function llms(): array|null
    {
        return $this->llms;
    }

    /** @return array<TeamEmbedding>|null */
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

    public function branding(): TeamBranding|null
    {
        return $this->branding;
    }

    public function options(): TeamOptions|null
    {
        return $this->options;
    }

    /** @return array<string, string> */
    private static function arrayPropItemTypeMap(): array
    {
        return [
            'users' => TeamUser::class,
            'admins' => TeamUser::class,
            'projects' => TeamProject::class,
            'llms' => TeamLLM::class,
            'embeddings' => TeamEmbedding::class,
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
            'id' => 'id',
            'name' => 'name',
            'description' => 'description',
            'created_at' => 'createdAt',
            'budget' => 'budget',
            'spending' => 'spending',
            'remaining' => 'remaining',
            'users' => 'users',
            'admins' => 'admins',
            'projects' => 'projects',
            'llms' => 'llms',
            'embeddings' => 'embeddings',
            'image_generators' => 'imageGenerators',
            'audio_generators' => 'audioGenerators',
            'branding' => 'branding',
            'options' => 'options',
        ];
    }

// phpcs:enable
}
