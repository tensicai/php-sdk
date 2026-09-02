<?php

declare(strict_types=1);

namespace TensicAI\SDK\Model;

use EventEngine\Data\SpecialKeySupport;
use EventEngine\JsonSchema\JsonSchemaAwareRecord;
use TeamBlue\JsonImmutableObjects\JsonSchemaAwareRecordLogic;
use TeamBlue\OpenApi\Codegen\Endpoint\SpecialKeySupportLogic;
use TensicAI\SDK\Default\ProjectCustomToolEntryDefault;

final class ProjectCustomToolEntry implements SpecialKeySupport, JsonSchemaAwareRecord
{
    use ProjectCustomToolEntryDefault;
    use JsonSchemaAwareRecordLogic;
    use SpecialKeySupportLogic;

// phpcs:disable SlevomatCodingStandard.Classes.UnusedPrivateElements.UnusedProperty
// phpcs:disable Squiz.NamingConventions.ValidVariableName.MemberNotCamelCaps
    private int $id;
    private string $name;
    private string $description;
    private string|null $parameters = '';
    private string $code;
    private bool $enabled;
    /** @var array<string>|null */
    private array|null $secrets = null;
    private string|null $createdAt = null;
    private string|null $updatedAt = null;

    public function id(): int
    {
        return $this->id;
    }

    public function name(): string
    {
        return $this->name;
    }

    public function description(): string
    {
        return $this->description;
    }

    public function parameters(): string|null
    {
        return $this->parameters;
    }

    public function code(): string
    {
        return $this->code;
    }

    public function enabled(): bool
    {
        return $this->enabled;
    }

    /** @return array<string>|null */
    public function secrets(): array|null
    {
        return $this->secrets;
    }

    public function createdAt(): string|null
    {
        return $this->createdAt;
    }

    public function updatedAt(): string|null
    {
        return $this->updatedAt;
    }

    /** @return array<string, string> */
    private static function arrayPropItemTypeMap(): array
    {
        return ['secrets' => 'string'];
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
            'parameters' => 'parameters',
            'code' => 'code',
            'enabled' => 'enabled',
            'secrets' => 'secrets',
            'created_at' => 'createdAt',
            'updated_at' => 'updatedAt',
        ];
    }

// phpcs:enable
}
