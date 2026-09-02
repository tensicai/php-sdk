<?php

declare(strict_types=1);

namespace TensicAI\SDK\Model;

use EventEngine\Data\SpecialKeySupport;
use EventEngine\JsonSchema\JsonSchemaAwareRecord;
use TeamBlue\JsonImmutableObjects\JsonSchemaAwareRecordLogic;
use TeamBlue\OpenApi\Codegen\Endpoint\SpecialKeySupportLogic;
use TensicAI\SDK\Default\SearchResponseDefault;

final class SearchResponse implements SpecialKeySupport, JsonSchemaAwareRecord
{
    use SearchResponseDefault;
    use JsonSchemaAwareRecordLogic;
    use SpecialKeySupportLogic;

// phpcs:disable SlevomatCodingStandard.Classes.UnusedPrivateElements.UnusedProperty
// phpcs:disable Squiz.NamingConventions.ValidVariableName.MemberNotCamelCaps
    /** @var array<mixed>|null */
    private array|null $query = null;
    /** @var array<SearchResultItem>|null */
    private array|null $results = [];
    /** @var array<string>|null */
    private array|null $warnings = [];
    private string|null $note = null;

    /** @return array<mixed>|null */
    public function query(): array|null
    {
        return $this->query;
    }

    /** @return array<SearchResultItem>|null */
    public function results(): array|null
    {
        return $this->results;
    }

    /** @return array<string>|null */
    public function warnings(): array|null
    {
        return $this->warnings;
    }

    public function note(): string|null
    {
        return $this->note;
    }

    /** @return array<string, string> */
    private static function arrayPropItemTypeMap(): array
    {
        return [
            'query' => 'mixed',
            'results' => SearchResultItem::class,
            'warnings' => 'string',
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
            'query' => 'query',
            'results' => 'results',
            'warnings' => 'warnings',
            'note' => 'note',
        ];
    }

// phpcs:enable
}
