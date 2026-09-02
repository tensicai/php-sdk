<?php

declare(strict_types=1);

namespace TensicAI\SDK\Model;

use EventEngine\Data\SpecialKeySupport;
use EventEngine\JsonSchema\JsonSchemaAwareRecord;
use TeamBlue\JsonImmutableObjects\JsonSchemaAwareRecordLogic;
use TeamBlue\OpenApi\Codegen\Endpoint\SpecialKeySupportLogic;
use TensicAI\SDK\Default\SpeechToTextModelDefault;

final class SpeechToTextModel implements SpecialKeySupport, JsonSchemaAwareRecord
{
    use SpeechToTextModelDefault;
    use JsonSchemaAwareRecordLogic;
    use SpecialKeySupportLogic;

// phpcs:disable SlevomatCodingStandard.Classes.UnusedPrivateElements.UnusedProperty
// phpcs:disable Squiz.NamingConventions.ValidVariableName.MemberNotCamelCaps
    private int|null $id = null;
    private string $name;
    private string $className;
    /** @var array<mixed>|null */
    private array|null $options = null;
    private string|null $privacy = 'public';
    private string|null $description = null;
    private bool|null $enabled = true;
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

    /** @return array<mixed>|null */
    public function options(): array|null
    {
        return $this->options;
    }

    public function privacy(): string|null
    {
        return $this->privacy;
    }

    public function description(): string|null
    {
        return $this->description;
    }

    public function enabled(): bool|null
    {
        return $this->enabled;
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
        return [];
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
            'enabled' => 'enabled',
            'teams' => 'teams',
        ];
    }

// phpcs:enable
}
