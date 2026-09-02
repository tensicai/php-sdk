<?php

declare(strict_types=1);

namespace TeamBlue\TensicAI\SDK\Model;

use EventEngine\Data\SpecialKeySupport;
use EventEngine\JsonSchema\JsonSchemaAwareRecord;
use TeamBlue\JsonImmutableObjects\JsonSchemaAwareRecordLogic;
use TeamBlue\OpenApi\Codegen\Endpoint\SpecialKeySupportLogic;
use TeamBlue\TensicAI\SDK\Default\URLIngestModelDefault;

final class URLIngestModel implements SpecialKeySupport, JsonSchemaAwareRecord
{
    use URLIngestModelDefault;
    use JsonSchemaAwareRecordLogic;
    use SpecialKeySupportLogic;

// phpcs:disable SlevomatCodingStandard.Classes.UnusedPrivateElements.UnusedProperty
// phpcs:disable Squiz.NamingConventions.ValidVariableName.MemberNotCamelCaps
    private string $url;
    private string|null $splitter = 'sentence';
    private int|null $chunks = 512;

    public function url(): string
    {
        return $this->url;
    }

    public function splitter(): string|null
    {
        return $this->splitter;
    }

    public function chunks(): int|null
    {
        return $this->chunks;
    }

    /** @return array<string, string> */
    private static function arrayPropItemTypeMap(): array
    {
        return [];
    }

    /** @return array<string, int> */
    private static function maxValues(): array
    {
        return ['chunks' => 8192];
    }

    /** @return array<string,string> */
    public function keyMapping(): array
    {
        return [
            'url' => 'url',
            'splitter' => 'splitter',
            'chunks' => 'chunks',
        ];
    }

// phpcs:enable
}
