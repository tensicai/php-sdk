<?php

declare(strict_types=1);

namespace TeamBlue\TensicAI\SDK\Model;

use EventEngine\Data\SpecialKeySupport;
use EventEngine\JsonSchema\JsonSchemaAwareRecord;
use TeamBlue\JsonImmutableObjects\JsonSchemaAwareRecordLogic;
use TeamBlue\OpenApi\Codegen\Endpoint\SpecialKeySupportLogic;
use TeamBlue\TensicAI\SDK\Default\UsersInnerDefault;

final class UsersInner implements SpecialKeySupport, JsonSchemaAwareRecord
{
    use UsersInnerDefault;
    use JsonSchemaAwareRecordLogic;
    use SpecialKeySupportLogic;

// phpcs:disable SlevomatCodingStandard.Classes.UnusedPrivateElements.UnusedProperty
// phpcs:disable Squiz.NamingConventions.ValidVariableName.MemberNotCamelCaps
    private int $id;
    private string $username;
    private bool|null $isAdmin = false;
    private bool|null $isPrivate = false;
    private bool|null $isRestricted = false;
    private bool|null $isSuspended = false;
    /** @var array<UserProject>|null */
    private array|null $projects = [];
    /** @var array<ApiKeyResponse>|null */
    private array|null $apiKeys = [];
    private string|null $level = null;
    private Options9|null $options = null;
    /** @var array<TeamModel>|null */
    private array|null $teams = [];
    /** @var array<TeamModel>|null */
    private array|null $adminTeams = [];

    public function id(): int
    {
        return $this->id;
    }

    public function username(): string
    {
        return $this->username;
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

    /** @return array<UserProject>|null */
    public function projects(): array|null
    {
        return $this->projects;
    }

    /** @return array<ApiKeyResponse>|null */
    public function apiKeys(): array|null
    {
        return $this->apiKeys;
    }

    public function level(): string|null
    {
        return $this->level;
    }

    public function options(): Options9|null
    {
        return $this->options;
    }

    /** @return array<TeamModel>|null */
    public function teams(): array|null
    {
        return $this->teams;
    }

    /** @return array<TeamModel>|null */
    public function adminTeams(): array|null
    {
        return $this->adminTeams;
    }

    /** @return array<string, string> */
    private static function arrayPropItemTypeMap(): array
    {
        return [
            'projects' => UserProject::class,
            'apiKeys' => ApiKeyResponse::class,
            'teams' => TeamModel::class,
            'adminTeams' => TeamModel::class,
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
            'id' => 'id',
            'username' => 'username',
            'is_admin' => 'isAdmin',
            'is_private' => 'isPrivate',
            'is_restricted' => 'isRestricted',
            'is_suspended' => 'isSuspended',
            'projects' => 'projects',
            'api_keys' => 'apiKeys',
            'level' => 'level',
            'options' => 'options',
            'teams' => 'teams',
            'admin_teams' => 'adminTeams',
        ];
    }

// phpcs:enable
}
