<?php

declare(strict_types=1);

namespace TensicAI\SDK\Model;

use EventEngine\Data\SpecialKeySupport;
use EventEngine\JsonSchema\JsonSchemaAwareRecord;
use TeamBlue\JsonImmutableObjects\JsonSchemaAwareRecordLogic;
use TeamBlue\OpenApi\Codegen\Endpoint\SpecialKeySupportLogic;
use TensicAI\SDK\Default\ProjectModelCreateDefault;

final class ProjectModelCreate implements SpecialKeySupport, JsonSchemaAwareRecord
{
    use ProjectModelCreateDefault;
    use JsonSchemaAwareRecordLogic;
    use SpecialKeySupportLogic;

// phpcs:disable SlevomatCodingStandard.Classes.UnusedPrivateElements.UnusedProperty
// phpcs:disable Squiz.NamingConventions.ValidVariableName.MemberNotCamelCaps
    private string $name;
    private string|null $embeddings = null;
    private string|null $llm = null;
    private string $type;
    private string|null $humanName = null;
    private string|null $humanDescription = null;
    private string|null $vectorstore = null;
    private int $teamId;

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

    public function humanName(): string|null
    {
        return $this->humanName;
    }

    public function humanDescription(): string|null
    {
        return $this->humanDescription;
    }

    public function vectorstore(): string|null
    {
        return $this->vectorstore;
    }

    public function teamId(): int
    {
        return $this->teamId;
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
            'name' => 'name',
            'embeddings' => 'embeddings',
            'llm' => 'llm',
            'type' => 'type',
            'human_name' => 'humanName',
            'human_description' => 'humanDescription',
            'vectorstore' => 'vectorstore',
            'team_id' => 'teamId',
        ];
    }

// phpcs:enable
}
