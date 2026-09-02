<?php

declare(strict_types=1);

namespace TensicAI\SDK\Model;

use EventEngine\Data\SpecialKeySupport;
use EventEngine\JsonSchema\JsonSchemaAwareRecord;
use TeamBlue\JsonImmutableObjects\JsonSchemaAwareRecordLogic;
use TeamBlue\OpenApi\Codegen\Endpoint\SpecialKeySupportLogic;
use TensicAI\SDK\Default\UserUpdateDefault;

final class UserUpdate implements SpecialKeySupport, JsonSchemaAwareRecord
{
    use UserUpdateDefault;
    use JsonSchemaAwareRecordLogic;
    use SpecialKeySupportLogic;

// phpcs:disable SlevomatCodingStandard.Classes.UnusedPrivateElements.UnusedProperty
// phpcs:disable Squiz.NamingConventions.ValidVariableName.MemberNotCamelCaps
    private string|null $password = null;
    private string|null $totpCode = null;
    private bool|null $isAdmin = null;
    private bool|null $isPrivate = null;
    private bool|null $isRestricted = null;
    private bool|null $isSuspended = null;
    /** @var array<string>|null */
    private array|null $projects = null;
    private UserOptions|null $options = null;

    public function password(): string|null
    {
        return $this->password;
    }

    public function totpCode(): string|null
    {
        return $this->totpCode;
    }

    public function isAdmin(): bool|null
    {
        return $this->isAdmin;
    }

    public function isPrivate(): bool|null
    {
        return $this->isPrivate;
    }

    public function isRestricted(): bool|null
    {
        return $this->isRestricted;
    }

    public function isSuspended(): bool|null
    {
        return $this->isSuspended;
    }

    /** @return array<string>|null */
    public function projects(): array|null
    {
        return $this->projects;
    }

    public function options(): UserOptions|null
    {
        return $this->options;
    }

    /** @return array<string, string> */
    private static function arrayPropItemTypeMap(): array
    {
        return ['projects' => 'string'];
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
            'password' => 'password',
            'totp_code' => 'totpCode',
            'is_admin' => 'isAdmin',
            'is_private' => 'isPrivate',
            'is_restricted' => 'isRestricted',
            'is_suspended' => 'isSuspended',
            'projects' => 'projects',
            'options' => 'options',
        ];
    }

// phpcs:enable
}
