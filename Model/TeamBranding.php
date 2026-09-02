<?php

declare(strict_types=1);

namespace TensicAI\SDK\Model;

use EventEngine\Data\SpecialKeySupport;
use EventEngine\JsonSchema\JsonSchemaAwareRecord;
use TeamBlue\JsonImmutableObjects\JsonSchemaAwareRecordLogic;
use TeamBlue\OpenApi\Codegen\Endpoint\SpecialKeySupportLogic;
use TensicAI\SDK\Default\TeamBrandingDefault;

final class TeamBranding implements SpecialKeySupport, JsonSchemaAwareRecord
{
    use TeamBrandingDefault;
    use JsonSchemaAwareRecordLogic;
    use SpecialKeySupportLogic;

// phpcs:disable SlevomatCodingStandard.Classes.UnusedPrivateElements.UnusedProperty
// phpcs:disable Squiz.NamingConventions.ValidVariableName.MemberNotCamelCaps
    private string|null $primaryColor = null;
    private string|null $secondaryColor = null;
    private string|null $logoUrl = null;
    private string|null $welcomeMessage = null;
    private string|null $appName = null;

    public function primaryColor(): string|null
    {
        return $this->primaryColor;
    }

    public function secondaryColor(): string|null
    {
        return $this->secondaryColor;
    }

    public function logoUrl(): string|null
    {
        return $this->logoUrl;
    }

    public function welcomeMessage(): string|null
    {
        return $this->welcomeMessage;
    }

    public function appName(): string|null
    {
        return $this->appName;
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
            'primary_color' => 'primaryColor',
            'secondary_color' => 'secondaryColor',
            'logo_url' => 'logoUrl',
            'welcome_message' => 'welcomeMessage',
            'app_name' => 'appName',
        ];
    }

// phpcs:enable
}
