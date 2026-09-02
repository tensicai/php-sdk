<?php

declare(strict_types=1);

namespace TeamBlue\TensicAI\SDK\Model;

use EventEngine\Data\SpecialKeySupport;
use EventEngine\JsonSchema\JsonSchemaAwareRecord;
use TeamBlue\JsonImmutableObjects\JsonSchemaAwareRecordLogic;
use TeamBlue\OpenApi\Codegen\Endpoint\SpecialKeySupportLogic;
use TeamBlue\TensicAI\SDK\Default\ImageModelDefault;

final class ImageModel implements SpecialKeySupport, JsonSchemaAwareRecord
{
    use ImageModelDefault;
    use JsonSchemaAwareRecordLogic;
    use SpecialKeySupportLogic;

// phpcs:disable SlevomatCodingStandard.Classes.UnusedPrivateElements.UnusedProperty
// phpcs:disable Squiz.NamingConventions.ValidVariableName.MemberNotCamelCaps
    private string $prompt;
    private string|null $image = null;
    private string|null $size = null;
    private string|null $quality = null;
    private string|null $style = null;

    public function prompt(): string
    {
        return $this->prompt;
    }

    public function image(): string|null
    {
        return $this->image;
    }

    public function size(): string|null
    {
        return $this->size;
    }

    public function quality(): string|null
    {
        return $this->quality;
    }

    public function style(): string|null
    {
        return $this->style;
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
            'prompt' => 'prompt',
            'image' => 'image',
            'size' => 'size',
            'quality' => 'quality',
            'style' => 'style',
        ];
    }

// phpcs:enable
}
