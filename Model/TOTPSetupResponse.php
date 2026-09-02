<?php

declare(strict_types=1);

namespace TensicAI\SDK\Model;

use EventEngine\Data\SpecialKeySupport;
use EventEngine\JsonSchema\JsonSchemaAwareRecord;
use TeamBlue\JsonImmutableObjects\JsonSchemaAwareRecordLogic;
use TeamBlue\OpenApi\Codegen\Endpoint\SpecialKeySupportLogic;
use TensicAI\SDK\Default\TOTPSetupResponseDefault;

final class TOTPSetupResponse implements SpecialKeySupport, JsonSchemaAwareRecord
{
    use TOTPSetupResponseDefault;
    use JsonSchemaAwareRecordLogic;
    use SpecialKeySupportLogic;

// phpcs:disable SlevomatCodingStandard.Classes.UnusedPrivateElements.UnusedProperty
// phpcs:disable Squiz.NamingConventions.ValidVariableName.MemberNotCamelCaps
    private string $secret;
    private string $provisioningUri;
    /** @var array<string> */
    private array $recoveryCodes;

    public function secret(): string
    {
        return $this->secret;
    }

    public function provisioningUri(): string
    {
        return $this->provisioningUri;
    }

    /** @return array<string> */
    public function recoveryCodes(): array
    {
        return $this->recoveryCodes;
    }

    /** @return array<string, string> */
    private static function arrayPropItemTypeMap(): array
    {
        return ['recoveryCodes' => 'string'];
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
            'secret' => 'secret',
            'provisioning_uri' => 'provisioningUri',
            'recovery_codes' => 'recoveryCodes',
        ];
    }

// phpcs:enable
}
