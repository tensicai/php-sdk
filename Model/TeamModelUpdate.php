<?php

declare(strict_types=1);

namespace TensicAI\SDK\Model;

use EventEngine\Data\SpecialKeySupport;
use EventEngine\JsonSchema\JsonSchemaAwareRecord;
use TeamBlue\JsonImmutableObjects\JsonSchemaAwareRecordLogic;
use TeamBlue\OpenApi\Codegen\Endpoint\SpecialKeySupportLogic;
use TensicAI\SDK\Default\TeamModelUpdateDefault;

final class TeamModelUpdate implements SpecialKeySupport, JsonSchemaAwareRecord
{
    use TeamModelUpdateDefault;
    use JsonSchemaAwareRecordLogic;
    use SpecialKeySupportLogic;

// phpcs:disable SlevomatCodingStandard.Classes.UnusedPrivateElements.UnusedProperty
// phpcs:disable Squiz.NamingConventions.ValidVariableName.MemberNotCamelCaps
    private string|null $name = null;
    private string|null $description = null;
    private float|null $budget = null;
    /** @var array<string>|null */
    private array|null $users = null;
    /** @var array<string>|null */
    private array|null $admins = null;
    /** @var array<string>|null */
    private array|null $projects = null;
    /** @var array<string>|null */
    private array|null $llms = null;
    /** @var array<string>|null */
    private array|null $embeddings = null;
    private TeamBranding|null $branding = null;
    private TeamOptions|null $options = null;
    /** @var array<string>|null */
    private array|null $imageGenerators = null;
    /** @var array<string>|null */
    private array|null $audioGenerators = null;

    public function name(): string|null
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

    public function branding(): TeamBranding|null
    {
        return $this->branding;
    }

    public function options(): TeamOptions|null
    {
        return $this->options;
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
            'branding' => 'branding',
            'options' => 'options',
            'image_generators' => 'imageGenerators',
            'audio_generators' => 'audioGenerators',
        ];
    }

// phpcs:enable
}
