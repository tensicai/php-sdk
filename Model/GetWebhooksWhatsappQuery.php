<?php

declare(strict_types=1);

namespace TeamBlue\TensicAI\SDK\Model;

use EventEngine\Data\SpecialKeySupport;
use EventEngine\JsonSchema\JsonSchemaAwareRecord;
use TeamBlue\JsonImmutableObjects\JsonSchemaAwareRecordLogic;
use TeamBlue\OpenApi\Codegen\Endpoint\SpecialKeySupportLogic;
use TeamBlue\TensicAI\SDK\Default\GetWebhooksWhatsappQueryDefault;

final class GetWebhooksWhatsappQuery implements SpecialKeySupport, JsonSchemaAwareRecord
{
    use GetWebhooksWhatsappQueryDefault;
    use JsonSchemaAwareRecordLogic;
    use SpecialKeySupportLogic;

// phpcs:disable SlevomatCodingStandard.Classes.UnusedPrivateElements.UnusedProperty
// phpcs:disable Squiz.NamingConventions.ValidVariableName.MemberNotCamelCaps
    private string|null $hubMode = null;
    private string|null $hubVerifyToken = null;
    private string|null $hubChallenge = null;

    public function hubMode(): string|null
    {
        return $this->hubMode;
    }

    public function hubVerifyToken(): string|null
    {
        return $this->hubVerifyToken;
    }

    public function hubChallenge(): string|null
    {
        return $this->hubChallenge;
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
            'hub.mode' => 'hubMode',
            'hub.verify_token' => 'hubVerifyToken',
            'hub.challenge' => 'hubChallenge',
        ];
    }

// phpcs:enable
}
