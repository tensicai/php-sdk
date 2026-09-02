<?php

declare(strict_types=1);

namespace TeamBlue\TensicAI\SDK\Model;

use EventEngine\Data\SpecialKeySupport;
use EventEngine\JsonSchema\JsonSchemaAwareRecord;
use TeamBlue\JsonImmutableObjects\JsonSchemaAwareRecordLogic;
use TeamBlue\OpenApi\Codegen\Endpoint\SpecialKeySupportLogic;
use TeamBlue\TensicAI\SDK\Default\ProjectModelUpdateDefault;

final class ProjectModelUpdate implements SpecialKeySupport, JsonSchemaAwareRecord
{
    use ProjectModelUpdateDefault;
    use JsonSchemaAwareRecordLogic;
    use SpecialKeySupportLogic;

// phpcs:disable SlevomatCodingStandard.Classes.UnusedPrivateElements.UnusedProperty
// phpcs:disable Squiz.NamingConventions.ValidVariableName.MemberNotCamelCaps
    private string|null $name = null;
    private string|null $embeddings = null;
    private string|null $llm = null;
    private string|null $system = null;
    private string|null $censorship = null;
    private float|null $score = null;
    private int|null $k = null;
    private string|null $connection = null;
    private string|null $tables = null;
    private bool|null $llmRerank = null;
    private string|null $guard = null;
    private string|null $humanName = null;
    private string|null $humanDescription = null;
    private string|null $tools = null;
    /** @var array<string>|null */
    private array|null $users = null;
    private bool|null $public = null;
    private string|null $defaultPrompt = null;
    private ProjectOptions|null $options = null;
    private int|null $teamId = null;

    public function name(): string|null
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

    public function system(): string|null
    {
        return $this->system;
    }

    public function censorship(): string|null
    {
        return $this->censorship;
    }

    public function score(): float|null
    {
        return $this->score;
    }

    public function k(): int|null
    {
        return $this->k;
    }

    public function connection(): string|null
    {
        return $this->connection;
    }

    public function tables(): string|null
    {
        return $this->tables;
    }

    public function llmRerank(): bool|null
    {
        return $this->llmRerank;
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

    public function tools(): string|null
    {
        return $this->tools;
    }

    /** @return array<string>|null */
    public function users(): array|null
    {
        return $this->users;
    }

    public function public(): bool|null
    {
        return $this->public;
    }

    public function defaultPrompt(): string|null
    {
        return $this->defaultPrompt;
    }

    public function options(): ProjectOptions|null
    {
        return $this->options;
    }

    public function teamId(): int|null
    {
        return $this->teamId;
    }

    /** @return array<string, string> */
    private static function arrayPropItemTypeMap(): array
    {
        return ['users' => 'string'];
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
            'embeddings' => 'embeddings',
            'llm' => 'llm',
            'system' => 'system',
            'censorship' => 'censorship',
            'score' => 'score',
            'k' => 'k',
            'connection' => 'connection',
            'tables' => 'tables',
            'llm_rerank' => 'llmRerank',
            'guard' => 'guard',
            'human_name' => 'humanName',
            'human_description' => 'humanDescription',
            'tools' => 'tools',
            'users' => 'users',
            'public' => 'public',
            'default_prompt' => 'defaultPrompt',
            'options' => 'options',
            'team_id' => 'teamId',
        ];
    }

// phpcs:enable
}
