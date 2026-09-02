<?php

declare(strict_types=1);

namespace TensicAI\SDK\Model;

use EventEngine\Data\SpecialKeySupport;
use EventEngine\JsonSchema\JsonSchemaAwareRecord;
use TeamBlue\JsonImmutableObjects\JsonSchemaAwareRecordLogic;
use TeamBlue\OpenApi\Codegen\Endpoint\SpecialKeySupportLogic;
use TensicAI\SDK\Default\NewsItemDefault;

final class NewsItem implements SpecialKeySupport, JsonSchemaAwareRecord
{
    use NewsItemDefault;
    use JsonSchemaAwareRecordLogic;
    use SpecialKeySupportLogic;

// phpcs:disable SlevomatCodingStandard.Classes.UnusedPrivateElements.UnusedProperty
// phpcs:disable Squiz.NamingConventions.ValidVariableName.MemberNotCamelCaps
    private string|null $tag = 'UPDATE';
    private string|null $date = '';
    private string|null $title = '';
    private string|null $body = '';

    public function tag(): string|null
    {
        return $this->tag;
    }

    public function date(): string|null
    {
        return $this->date;
    }

    public function title(): string|null
    {
        return $this->title;
    }

    public function body(): string|null
    {
        return $this->body;
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
            'tag' => 'tag',
            'date' => 'date',
            'title' => 'title',
            'body' => 'body',
        ];
    }

// phpcs:enable
}
