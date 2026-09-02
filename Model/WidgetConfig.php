<?php

declare(strict_types=1);

namespace TensicAI\SDK\Model;

use EventEngine\Data\SpecialKeySupport;
use EventEngine\JsonSchema\JsonSchemaAwareRecord;
use TeamBlue\JsonImmutableObjects\JsonSchemaAwareRecordLogic;
use TeamBlue\OpenApi\Codegen\Endpoint\SpecialKeySupportLogic;
use TensicAI\SDK\Default\WidgetConfigDefault;

final class WidgetConfig implements SpecialKeySupport, JsonSchemaAwareRecord
{
    use WidgetConfigDefault;
    use JsonSchemaAwareRecordLogic;
    use SpecialKeySupportLogic;

// phpcs:disable SlevomatCodingStandard.Classes.UnusedPrivateElements.UnusedProperty
// phpcs:disable Squiz.NamingConventions.ValidVariableName.MemberNotCamelCaps
    private string|null $title = 'AI Assistant';
    private string|null $subtitle = 'Ask me anything';
    private string|null $primaryColor = '#6366f1';
    private string|null $textColor = '#ffffff';
    private string|null $position = 'right';
    private string|null $welcomeMessage = '';
    private string|null $avatarUrl = '';
    private bool|null $stream = false;
    private bool|null $contextPrefix = true;

    public function title(): string|null
    {
        return $this->title;
    }

    public function subtitle(): string|null
    {
        return $this->subtitle;
    }

    public function primaryColor(): string|null
    {
        return $this->primaryColor;
    }

    public function textColor(): string|null
    {
        return $this->textColor;
    }

    public function position(): string|null
    {
        return $this->position;
    }

    public function welcomeMessage(): string|null
    {
        return $this->welcomeMessage;
    }

    public function avatarUrl(): string|null
    {
        return $this->avatarUrl;
    }

    public function stream(): bool|null
    {
        return $this->stream;
    }

    public function contextPrefix(): bool|null
    {
        return $this->contextPrefix;
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
            'title' => 'title',
            'subtitle' => 'subtitle',
            'primaryColor' => 'primaryColor',
            'textColor' => 'textColor',
            'position' => 'position',
            'welcomeMessage' => 'welcomeMessage',
            'avatarUrl' => 'avatarUrl',
            'stream' => 'stream',
            'context_prefix' => 'contextPrefix',
        ];
    }

// phpcs:enable
}
