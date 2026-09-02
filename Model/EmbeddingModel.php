<?php

declare(strict_types=1);

namespace TeamBlue\TensicAI\SDK\Model;

use EventEngine\Data\SpecialKeySupport;
use EventEngine\JsonSchema\JsonSchemaAwareRecord;
use TeamBlue\JsonImmutableObjects\JsonSchemaAwareRecordLogic;
use TeamBlue\OpenApi\Codegen\Endpoint\SpecialKeySupportLogic;
use TeamBlue\TensicAI\SDK\Default\EmbeddingModelDefault;

final class EmbeddingModel implements SpecialKeySupport, JsonSchemaAwareRecord
{
    use EmbeddingModelDefault;
    use JsonSchemaAwareRecordLogic;
    use SpecialKeySupportLogic;

// phpcs:disable SlevomatCodingStandard.Classes.UnusedPrivateElements.UnusedProperty
// phpcs:disable Squiz.NamingConventions.ValidVariableName.MemberNotCamelCaps
    private int|null $id = null;
    private string $name;
    private string $className;
    private string $options;
    private string $privacy;
    private string|null $description = null;
    private int|null $dimension = 1536;
    private float|null $inputCost = 0.0;
    private bool|null $isManagerManaged = false;
    private string|null $managerModelId = null;
    private string|null $managerModelRevision = null;
    private bool|null $canEdit = false;
    /** @var array<TeamModel>|null */
    private array|null $teams = [];

    public function id(): int|null
    {
        return $this->id;
    }

    public function name(): string
    {
        return $this->name;
    }

    public function className(): string
    {
        return $this->className;
    }

    public function options(): string
    {
        return $this->options;
    }

    public function privacy(): string
    {
        return $this->privacy;
    }

    public function description(): string|null
    {
        return $this->description;
    }

    public function dimension(): int|null
    {
        return $this->dimension;
    }

    public function inputCost(): float|null
    {
        return $this->inputCost;
    }

    public function isManagerManaged(): bool|null
    {
        return $this->isManagerManaged;
    }

    public function managerModelId(): string|null
    {
        return $this->managerModelId;
    }

    public function managerModelRevision(): string|null
    {
        return $this->managerModelRevision;
    }

    public function canEdit(): bool|null
    {
        return $this->canEdit;
    }

    /** @return array<TeamModel>|null */
    public function teams(): array|null
    {
        return $this->teams;
    }

    /** @return array<string, string> */
    private static function arrayPropItemTypeMap(): array
    {
        return [
            'teams' => TeamModel::class,
        ];
    }

    /** @return array<string, int> */
    private static function maxValues(): array
    {
        return ['dimension' => 65536];
    }

    /** @return array<string,string> */
    public function keyMapping(): array
    {
        return [
            'id' => 'id',
            'name' => 'name',
            'class_name' => 'className',
            'options' => 'options',
            'privacy' => 'privacy',
            'description' => 'description',
            'dimension' => 'dimension',
            'input_cost' => 'inputCost',
            'is_manager_managed' => 'isManagerManaged',
            'manager_model_id' => 'managerModelId',
            'manager_model_revision' => 'managerModelRevision',
            'can_edit' => 'canEdit',
            'teams' => 'teams',
        ];
    }

// phpcs:enable
}
