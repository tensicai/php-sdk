<?php

declare(strict_types=1);

namespace TeamBlue\TensicAI\SDK\Model;

use EventEngine\Data\SpecialKeySupport;
use EventEngine\JsonSchema\JsonSchemaAwareRecord;
use TeamBlue\JsonImmutableObjects\JsonSchemaAwareRecordLogic;
use TeamBlue\OpenApi\Codegen\Endpoint\SpecialKeySupportLogic;
use TeamBlue\TensicAI\SDK\Default\UserCreateDefault;

final class UserCreate implements SpecialKeySupport, JsonSchemaAwareRecord
{
    use UserCreateDefault;
    use JsonSchemaAwareRecordLogic;
    use SpecialKeySupportLogic;

// phpcs:disable SlevomatCodingStandard.Classes.UnusedPrivateElements.UnusedProperty
// phpcs:disable Squiz.NamingConventions.ValidVariableName.MemberNotCamelCaps
    private string $username;
    private string $password;
    private bool|null $isAdmin = false;
    private bool|null $isPrivate = false;
    private bool|null $isRestricted = false;
    private bool|null $isSuspended = false;
    /** @var array<int>|null */
    private array|null $teamIds = null;
    /** @var array<int>|null */
    private array|null $projectIds = null;

    public function username(): string
    {
        return $this->username;
    }

    public function password(): string
    {
        return $this->password;
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

    /** @return array<int>|null */
    public function teamIds(): array|null
    {
        return $this->teamIds;
    }

    /** @return array<int>|null */
    public function projectIds(): array|null
    {
        return $this->projectIds;
    }

    /** @return array<string, string> */
    private static function arrayPropItemTypeMap(): array
    {
        return [
            'teamIds' => 'int',
            'projectIds' => 'int',
        ];
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
            'username' => 'username',
            'password' => 'password',
            'is_admin' => 'isAdmin',
            'is_private' => 'isPrivate',
            'is_restricted' => 'isRestricted',
            'is_suspended' => 'isSuspended',
            'team_ids' => 'teamIds',
            'project_ids' => 'projectIds',
        ];
    }

// phpcs:enable
}
