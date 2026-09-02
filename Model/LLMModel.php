<?php

declare(strict_types=1);

namespace TeamBlue\TensicAI\SDK\Model;

use EventEngine\Data\SpecialKeySupport;
use EventEngine\JsonSchema\JsonSchemaAwareRecord;
use TeamBlue\JsonImmutableObjects\JsonSchemaAwareRecordLogic;
use TeamBlue\OpenApi\Codegen\Endpoint\SpecialKeySupportLogic;
use TeamBlue\TensicAI\SDK\Default\LLMModelDefault;

final class LLMModel implements SpecialKeySupport, JsonSchemaAwareRecord
{
    use LLMModelDefault;
    use JsonSchemaAwareRecordLogic;
    use SpecialKeySupportLogic;

// phpcs:disable SlevomatCodingStandard.Classes.UnusedPrivateElements.UnusedProperty
// phpcs:disable Squiz.NamingConventions.ValidVariableName.MemberNotCamelCaps
    private int|null $id = null;
    private string $name;
    private string $className;
    /** @var array<mixed> */
    private array $options;
    private string $privacy;
    private string|null $description = null;
    private float|null $inputCost = 0.0;
    private float|null $outputCost = 0.0;
    private int|null $contextWindow = null;
    private float|null $temperature = null;
    private int|null $creatorId = null;
    private bool|null $isManagerManaged = false;
    private string|null $managerModelId = null;
    private string|null $managerModelRevision = null;
    private bool|null $canEdit = false;
    private bool|null $canEditTemperature = false;
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

    /** @return array<mixed> */
    public function options(): array
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

    public function inputCost(): float|null
    {
        return $this->inputCost;
    }

    public function outputCost(): float|null
    {
        return $this->outputCost;
    }

    public function contextWindow(): int|null
    {
        return $this->contextWindow;
    }

    public function temperature(): float|null
    {
        return $this->temperature;
    }

    public function creatorId(): int|null
    {
        return $this->creatorId;
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

    public function canEditTemperature(): bool|null
    {
        return $this->canEditTemperature;
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
            'options' => 'mixed',
            'teams' => TeamModel::class,
        ];
    }

    /** @return array<string, int> */
    private static function maxValues(): array
    {
        return [
            'contextWindow' => 10000000,
            'temperature' => 2.0,
        ];
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
            'input_cost' => 'inputCost',
            'output_cost' => 'outputCost',
            'context_window' => 'contextWindow',
            'temperature' => 'temperature',
            'creator_id' => 'creatorId',
            'is_manager_managed' => 'isManagerManaged',
            'manager_model_id' => 'managerModelId',
            'manager_model_revision' => 'managerModelRevision',
            'can_edit' => 'canEdit',
            'can_edit_temperature' => 'canEditTemperature',
            'teams' => 'teams',
        ];
    }

// phpcs:enable
}
