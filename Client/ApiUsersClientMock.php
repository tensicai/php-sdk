<?php

declare(strict_types=1);

namespace TensicAI\SDK\Client;

use TeamBlue\ClientMock\Mock;
use TeamBlue\ClientMock\MockLogic;
use TensicAI\SDK\Model\ApiKeyCreate;
use TensicAI\SDK\Model\ApiKeyUpdate;
use TensicAI\SDK\Model\GetUsersQuery;
use TensicAI\SDK\Model\TOTPDisableRequest;
use TensicAI\SDK\Model\TOTPEnableRequest;
use TensicAI\SDK\Model\TOTPSetupRequest;
use TensicAI\SDK\Model\UserCreate;
use TensicAI\SDK\Model\UserLogin;
use TensicAI\SDK\Model\UserUpdate;

use function func_get_args;

final class ApiUsersClientMock implements Mock
{
    use MockLogic;

    /** @return class-string<UsersClientInterface> */
    public function mockInterface(): string
    {
        return UsersClientInterface::class;
    }

    /** @see UsersClient::deleteUsersUsername() */
    public function deleteUsersUsername(
        string $username,
    ): self {
        ($this->persister)('deleteUsersUsername', ...func_get_args());

        return $this;
    }

    /** @see UsersClient::deleteUsersUsernameApikeysKeyId() */
    public function deleteUsersUsernameApikeysKeyId(
        string $username,
        int $keyId,
    ): self {
        ($this->persister)('deleteUsersUsernameApikeysKeyId', ...func_get_args());

        return $this;
    }

    /** @see UsersClient::getPermissionsMatrix() */
    public function getPermissionsMatrix(): self
    {
        ($this->persister)('getPermissionsMatrix', ...func_get_args());

        return $this;
    }

    /** @see UsersClient::getUsers() */
    public function getUsers(
        GetUsersQuery|null $query = null,
    ): self {
        ($this->persister)('getUsers', ...func_get_args());

        return $this;
    }

    /** @see UsersClient::getUsersUsername() */
    public function getUsersUsername(
        string $username,
    ): self {
        ($this->persister)('getUsersUsername', ...func_get_args());

        return $this;
    }

    /** @see UsersClient::getUsersUsernameApikeys() */
    public function getUsersUsernameApikeys(
        string $username,
    ): self {
        ($this->persister)('getUsersUsernameApikeys', ...func_get_args());

        return $this;
    }

    /** @see UsersClient::getUsersUsernameTeamBudgets() */
    public function getUsersUsernameTeamBudgets(
        string $username,
    ): self {
        ($this->persister)('getUsersUsernameTeamBudgets', ...func_get_args());

        return $this;
    }

    /** @see UsersClient::getUsersUsernameTeamBudgets() */
    public function getUsersUsernameTeamBudgets(
        string $username,
    ): self {
        ($this->persister)('getUsersUsernameTeamBudgets', ...func_get_args());

        return $this;
    }

    /** @see UsersClient::getUsersUsernameTotpStatus() */
    public function getUsersUsernameTotpStatus(
        string $username,
    ): self {
        ($this->persister)('getUsersUsernameTotpStatus', ...func_get_args());

        return $this;
    }

    /** @see UsersClient::patchUsersUsername() */
    public function patchUsersUsername(
        string $username,
        UserUpdate $body,
    ): self {
        ($this->persister)('patchUsersUsername', ...func_get_args());

        return $this;
    }

    /** @see UsersClient::patchUsersUsernameApikeysKeyId() */
    public function patchUsersUsernameApikeysKeyId(
        string $username,
        int $keyId,
        ApiKeyUpdate $body,
    ): self {
        ($this->persister)('patchUsersUsernameApikeysKeyId', ...func_get_args());

        return $this;
    }

    /** @see UsersClient::postLdap() */
    public function postLdap(
        UserLogin $body,
    ): self {
        ($this->persister)('postLdap', ...func_get_args());

        return $this;
    }

    /** @see UsersClient::postUsers() */
    public function postUsers(
        UserCreate $body,
    ): self {
        ($this->persister)('postUsers', ...func_get_args());

        return $this;
    }

    /** @see UsersClient::postUsersUsernameApikeys() */
    public function postUsersUsernameApikeys(
        string $username,
        ApiKeyCreate $body,
    ): self {
        ($this->persister)('postUsersUsernameApikeys', ...func_get_args());

        return $this;
    }

    /** @see UsersClient::postUsersUsernameTotpDisable() */
    public function postUsersUsernameTotpDisable(
        string $username,
        TOTPDisableRequest $body,
    ): self {
        ($this->persister)('postUsersUsernameTotpDisable', ...func_get_args());

        return $this;
    }

    /** @see UsersClient::postUsersUsernameTotpEnable() */
    public function postUsersUsernameTotpEnable(
        string $username,
        TOTPEnableRequest $body,
    ): self {
        ($this->persister)('postUsersUsernameTotpEnable', ...func_get_args());

        return $this;
    }

    /** @see UsersClient::postUsersUsernameTotpSetup() */
    public function postUsersUsernameTotpSetup(
        string $username,
        TOTPSetupRequest $body,
    ): self {
        ($this->persister)('postUsersUsernameTotpSetup', ...func_get_args());

        return $this;
    }
}
