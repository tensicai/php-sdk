<?php

declare(strict_types=1);

namespace TeamBlue\TensicAI\SDK\Model;

use EventEngine\Data\SpecialKeySupport;
use EventEngine\JsonSchema\JsonSchemaAwareRecord;
use TeamBlue\JsonImmutableObjects\JsonSchemaAwareRecordLogic;
use TeamBlue\OpenApi\Codegen\Endpoint\SpecialKeySupportLogic;
use TeamBlue\TensicAI\SDK\Default\ProjectResponseDefault;

final class ProjectResponse implements SpecialKeySupport, JsonSchemaAwareRecord
{
    use ProjectResponseDefault;
    use JsonSchemaAwareRecordLogic;
    use SpecialKeySupportLogic;

// phpcs:disable SlevomatCodingStandard.Classes.UnusedPrivateElements.UnusedProperty
// phpcs:disable Squiz.NamingConventions.ValidVariableName.MemberNotCamelCaps
    private int $id;
    private string $name;
    private string|null $embeddings = null;
    private string|null $llm = null;
    private string $type;
    private string|null $system = null;
    private string|null $censorship = null;
    private string|null $vectorstore = null;
    private string|null $vectorCollection = null;
    private string|null $guard = null;
    private string|null $humanName = null;
    private string|null $humanDescription = null;
    private bool|null $public = false;
    private int|null $creator = null;
    private string|null $creatorUsername = null;
    private string|null $defaultPrompt = null;
    private Options7|null $options = null;
    /** @var array<ProjectUser>|null */
    private array|null $users = [];
    private TeamResponse|null $team = null;

    public function id(): int
    {
        return $this->id;
    }

    public function name(): string
    {
        return $this->name;
    }

    public function embeddings(): string|null
    {
        return $this->embeddings;
    }

    public function llm(): string|null
    {
        return $this->llm;
    }

    public function type(): string
    {
        return $this->type;
    }

    public function system(): string|null
    {
        return $this->system;
    }

    public function censorship(): string|null
    {
        return $this->censorship;
    }

    public function vectorstore(): string|null
    {
        return $this->vectorstore;
    }

    public function vectorCollection(): string|null
    {
        return $this->vectorCollection;
    }

    public function guard(): string|null
    {
        return $this->guard;
    }

    public function humanName(): string|null
    {
        return $this->humanName;
    }

    public function humanDescription(): string|null
    {
        return $this->humanDescription;
    }

    public function public(): bool|null
    {
        return $this->public;
    }

    public function creator(): int|null
    {
        return $this->creator;
    }

    public function creatorUsername(): string|null
    {
        return $this->creatorUsername;
    }

    public function defaultPrompt(): string|null
    {
        return $this->defaultPrompt;
    }

    public function options(): Options7|null
    {
        return $this->options;
    }

    /** @return array<ProjectUser>|null */
    public function users(): array|null
    {
        return $this->users;
    }

    public function team(): TeamResponse|null
    {
        return $this->team;
    }

    /** @return array<string, string> */
    private static function arrayPropItemTypeMap(): array
    {
        return [
            'users' => ProjectUser::class,
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
            'embeddings' => 'embeddings',
            'llm' => 'llm',
            'type' => 'type',
            'system' => 'system',
            'censorship' => 'censorship',
            'vectorstore' => 'vectorstore',
            'vector_collection' => 'vectorCollection',
            'guard' => 'guard',
            'human_name' => 'humanName',
            'human_description' => 'humanDescription',
            'public' => 'public',
            'creator' => 'creator',
            'creator_username' => 'creatorUsername',
            'default_prompt' => 'defaultPrompt',
            'options' => 'options',
            'users' => 'users',
            'team' => 'team',
        ];
    }

// phpcs:enable
}
