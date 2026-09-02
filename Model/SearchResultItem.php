<?php

declare(strict_types=1);

namespace TeamBlue\TensicAI\SDK\Model;

use EventEngine\Data\SpecialKeySupport;
use EventEngine\JsonSchema\JsonSchemaAwareRecord;
use TeamBlue\JsonImmutableObjects\JsonSchemaAwareRecordLogic;
use TeamBlue\OpenApi\Codegen\Endpoint\SpecialKeySupportLogic;
use TeamBlue\TensicAI\SDK\Default\SearchResultItemDefault;

final class SearchResultItem implements SpecialKeySupport, JsonSchemaAwareRecord
{
    use SearchResultItemDefault;
    use JsonSchemaAwareRecordLogic;
    use SpecialKeySupportLogic;

// phpcs:disable SlevomatCodingStandard.Classes.UnusedPrivateElements.UnusedProperty
// phpcs:disable Squiz.NamingConventions.ValidVariableName.MemberNotCamelCaps
    private string $entity;
    private int|null $id = null;
    private string $name;
    private string|null $subtitle = '';
    private string|null $path = '';

    public function entity(): string
    {
        return $this->entity;
    }

    public function id(): int|null
    {
        return $this->id;
    }

    public function name(): string
    {
        return $this->name;
    }

    public function subtitle(): string|null
    {
        return $this->subtitle;
    }

    public function path(): string|null
    {
        return $this->path;
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
            'entity' => 'entity',
            'id' => 'id',
            'name' => 'name',
            'subtitle' => 'subtitle',
            'path' => 'path',
        ];
    }

// phpcs:enable
}
