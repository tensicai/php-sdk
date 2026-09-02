<?php

declare(strict_types=1);

namespace TeamBlue\TensicAI\SDK\Model;

use EventEngine\Data\SpecialKeySupport;
use EventEngine\JsonSchema\JsonSchemaAwareRecord;
use TeamBlue\JsonImmutableObjects\JsonSchemaAwareRecordLogic;
use TeamBlue\OpenApi\Codegen\Endpoint\SpecialKeySupportLogic;
use TeamBlue\TensicAI\SDK\Default\TextIngestModelDefault;

final class TextIngestModel implements SpecialKeySupport, JsonSchemaAwareRecord
{
    use TextIngestModelDefault;
    use JsonSchemaAwareRecordLogic;
    use SpecialKeySupportLogic;

// phpcs:disable SlevomatCodingStandard.Classes.UnusedPrivateElements.UnusedProperty
// phpcs:disable Squiz.NamingConventions.ValidVariableName.MemberNotCamelCaps
    private string $text;
    private string $source;
    private string|null $splitter = 'sentence';
    private int|null $chunks = 512;
    /** @var array<string>|null */
    private array|null $keywords = null;

    public function text(): string
    {
        return $this->text;
    }

    public function source(): string
    {
        return $this->source;
    }

    public function splitter(): string|null
    {
        return $this->splitter;
    }

    public function chunks(): int|null
    {
        return $this->chunks;
    }

    /** @return array<string>|null */
    public function keywords(): array|null
    {
        return $this->keywords;
    }

    /** @return array<string, string> */
    private static function arrayPropItemTypeMap(): array
    {
        return ['keywords' => 'string'];
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
            'text' => 'text',
            'source' => 'source',
            'splitter' => 'splitter',
            'chunks' => 'chunks',
            'keywords' => 'keywords',
        ];
    }

// phpcs:enable
}
