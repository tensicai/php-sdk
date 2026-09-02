<?php

declare(strict_types=1);

namespace TeamBlue\TensicAI\SDK\Model;

use EventEngine\Data\SpecialKeySupport;
use EventEngine\JsonSchema\JsonSchemaAwareRecord;
use TeamBlue\JsonImmutableObjects\JsonSchemaAwareRecordLogic;
use TeamBlue\OpenApi\Codegen\Endpoint\SpecialKeySupportLogic;
use TeamBlue\TensicAI\SDK\Default\TeamOptionsDefault;

final class TeamOptions implements SpecialKeySupport, JsonSchemaAwareRecord
{
    use TeamOptionsDefault;
    use JsonSchemaAwareRecordLogic;
    use SpecialKeySupportLogic;

// phpcs:disable SlevomatCodingStandard.Classes.UnusedPrivateElements.UnusedProperty
// phpcs:disable Squiz.NamingConventions.ValidVariableName.MemberNotCamelCaps
    private string|null $smtpHost = null;
    private int|null $smtpPort = null;
    private string|null $smtpUser = null;
    private string|null $smtpPassword = null;
    private string|null $smtpFrom = null;
    private string|null $emailDefaultTo = null;

    public function smtpHost(): string|null
    {
        return $this->smtpHost;
    }

    public function smtpPort(): int|null
    {
        return $this->smtpPort;
    }

    public function smtpUser(): string|null
    {
        return $this->smtpUser;
    }

    public function smtpPassword(): string|null
    {
        return $this->smtpPassword;
    }

    public function smtpFrom(): string|null
    {
        return $this->smtpFrom;
    }

    public function emailDefaultTo(): string|null
    {
        return $this->emailDefaultTo;
    }

    /** @return array<string, string> */
    private static function arrayPropItemTypeMap(): array
    {
        return [];
    }

    /** @return array<string, int> */
    private static function maxValues(): array
    {
        return ['smtpPort' => 65535];
    }

    /** @return array<string,string> */
    public function keyMapping(): array
    {
        return [
            'smtp_host' => 'smtpHost',
            'smtp_port' => 'smtpPort',
            'smtp_user' => 'smtpUser',
            'smtp_password' => 'smtpPassword',
            'smtp_from' => 'smtpFrom',
            'email_default_to' => 'emailDefaultTo',
        ];
    }

// phpcs:enable
}
