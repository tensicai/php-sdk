<?php

declare(strict_types=1);

namespace TensicAI\SDK\Client;

use TeamBlue\OpenApi\Codegen\Attribute\Endpoint as EndpointAttribute;
use TeamBlue\OpenApi\Codegen\Client\Client as AbstractClient;
use TensicAI\SDK\Endpoint\DeleteUsersUsername;
use TensicAI\SDK\Endpoint\DeleteUsersUsernameApikeysKeyId;
use TensicAI\SDK\Endpoint\GetPermissionsMatrix;
use TensicAI\SDK\Endpoint\GetUsers;
use TensicAI\SDK\Endpoint\GetUsersUsername;
use TensicAI\SDK\Endpoint\GetUsersUsernameApikeys;
use TensicAI\SDK\Endpoint\GetUsersUsernameTeamBudgets;
use TensicAI\SDK\Endpoint\GetUsersUsernameTotpStatus;
use TensicAI\SDK\Endpoint\PatchUsersUsername;
use TensicAI\SDK\Endpoint\PatchUsersUsernameApikeysKeyId;
use TensicAI\SDK\Endpoint\PostLdap;
use TensicAI\SDK\Endpoint\PostUsers;
use TensicAI\SDK\Endpoint\PostUsersUsernameApikeys;
use TensicAI\SDK\Endpoint\PostUsersUsernameTotpDisable;
use TensicAI\SDK\Endpoint\PostUsersUsernameTotpEnable;
use TensicAI\SDK\Endpoint\PostUsersUsernameTotpSetup;
use TensicAI\SDK\Model\ApiKeyCreate;
use TensicAI\SDK\Model\ApiKeyCreatedResponse;
use TensicAI\SDK\Model\ApiKeyResponse;
use TensicAI\SDK\Model\ApiKeyUpdate;
use TensicAI\SDK\Model\GetUsersQuery;
use TensicAI\SDK\Model\TOTPDisableRequest;
use TensicAI\SDK\Model\TOTPEnableRequest;
use TensicAI\SDK\Model\TOTPSetupRequest;
use TensicAI\SDK\Model\TOTPSetupResponse;
use TensicAI\SDK\Model\User;
use TensicAI\SDK\Model\UserCreate;
use TensicAI\SDK\Model\UserLogin;
use TensicAI\SDK\Model\UsersResponse;
use TensicAI\SDK\Model\UserTeamBudgetsResponse;
use TensicAI\SDK\Model\UserUpdate;

use function array_map;

/**
 * @SuppressWarnings("PHPMD.ExcessiveClassLength")
 * @SuppressWarnings("PHPMD.ExcessivePublicCount")
 * @SuppressWarnings("PHPMD.ExcessiveClassComplexity")
 */
class UsersClient extends AbstractClient implements UsersClientInterface
{
    /**
     * Route Delete User
     *
     * Delete a user (admin only).
     */
    #[EndpointAttribute(DeleteUsersUsername::class)]
    public function deleteUsersUsername(
        string $username,
    ): mixed {
        return $this->performRequest(
            DeleteUsersUsername::fromRecordData(
                ['username' => $username],
            ),
        );
    }

    /**
     * Route Delete User Apikey
     *
     * Delete an API key.
     */
    #[EndpointAttribute(DeleteUsersUsernameApikeysKeyId::class)]
    public function deleteUsersUsernameApikeysKeyId(
        string $username,
        int $keyId,
    ): mixed {
        return $this->performRequest(
            DeleteUsersUsernameApikeysKeyId::fromRecordData(
                [
                    'username' => $username,
                    'key_id' => $keyId,
                ],
            ),
        );
    }

    /**
     * Get Permission Matrix
     *
     * Return the users x projects permission matrix.
     */
    #[EndpointAttribute(GetPermissionsMatrix::class)]
    public function getPermissionsMatrix(): mixed
    {
        /** @var mixed $response */
        $response = $this->performRequest(
            GetPermissionsMatrix::fromRecordData(
                [],
            ),
        );

        return $response;
    }

    /**
     * Route Get Users
     *
     * List users. Admins see all (bounded + &#x60;total&#x60;); others see team members only.  The &#x60;users&#x60; key is preserved (selectors keep working); &#x60;limit&#x60; defaults high so realistic installs still get everyone in one call, but the list can never be unbounded.
     */
    #[EndpointAttribute(GetUsers::class)]
    public function getUsers(
        GetUsersQuery|null $query = null,
    ): UsersResponse {
        /** @var array<string, mixed> $response */
        $response = $this->performRequest(
            GetUsers::fromRecordData(
                ['query' => $query],
            ),
        );

        return UsersResponse::fromArray($response);
    }

    /**
     * Route Get User Details
     *
     * Get user details by username.
     */
    #[EndpointAttribute(GetUsersUsername::class)]
    public function getUsersUsername(
        string $username,
    ): User {
        /** @var array<string, mixed> $response */
        $response = $this->performRequest(
            GetUsersUsername::fromRecordData(
                ['username' => $username],
            ),
        );

        return User::fromArray($response);
    }

    /**
     * Route List User Apikeys
     *
     * List all API keys for a user.
     *
     * @return array<ApiKeyResponse>
     */
    #[EndpointAttribute(GetUsersUsernameApikeys::class)]
    public function getUsersUsernameApikeys(
        string $username,
    ): array {
        /** @var array<string, array<string, mixed>> $response */
        $response = $this->performRequest(
            GetUsersUsernameApikeys::fromRecordData(
                ['username' => $username],
            ),
        );

        return array_map(
            ApiKeyResponse::fromArray(...),
            $response,
        );
    }

    /**
     * Route Get User Team Budgets
     *
     * The user&#39;s own monthly budget (cap + month-to-date spend) for each team they&#39;re in. Self-service: the profile owner or a platform admin. Only the user&#39;s OWN per-team data is returned — never whole-team spend.
     */
    #[EndpointAttribute(GetUsersUsernameTeamBudgets::class)]
    public function getUsersUsernameTeamBudgets(
        string $username,
    ): UserTeamBudgetsResponse {
        /** @var array<string, mixed> $response */
        $response = $this->performRequest(
            GetUsersUsernameTeamBudgets::fromRecordData(
                ['username' => $username],
            ),
        );

        return UserTeamBudgetsResponse::fromArray($response);
    }

    /**
     * Route Get User Team Budgets
     *
     * The user&#39;s own monthly budget (cap + month-to-date spend) for each team they&#39;re in. Self-service: the profile owner or a platform admin. Only the user&#39;s OWN per-team data is returned — never whole-team spend.
     */
    #[EndpointAttribute(GetUsersUsernameTeamBudgets::class)]
    public function getUsersUsernameTeamBudgets(
        string $username,
    ): UserTeamBudgetsResponse {
        /** @var array<string, mixed> $response */
        $response = $this->performRequest(
            GetUsersUsernameTeamBudgets::fromRecordData(
                ['username' => $username],
            ),
        );

        return UserTeamBudgetsResponse::fromArray($response);
    }

    /**
     * Totp Status
     *
     * Check if 2FA is enabled for a user.
     */
    #[EndpointAttribute(GetUsersUsernameTotpStatus::class)]
    public function getUsersUsernameTotpStatus(
        string $username,
    ): mixed {
        /** @var mixed $response */
        $response = $this->performRequest(
            GetUsersUsernameTotpStatus::fromRecordData(
                ['username' => $username],
            ),
        );

        return $response;
    }

    /**
     * Route Update User
     *
     * Update user properties.
     */
    #[EndpointAttribute(PatchUsersUsername::class)]
    public function patchUsersUsername(
        string $username,
        UserUpdate $body,
    ): User {
        /** @var array<string, mixed> $response */
        $response = $this->performRequest(
            PatchUsersUsername::fromRecordData(
                [
                    'username' => $username,
                    'body' => $body,
                ],
            ),
        );

        return User::fromArray($response);
    }

    /**
     * Route Update User Apikey
     *
     * Update API key description or monthly token quota.
     */
    #[EndpointAttribute(PatchUsersUsernameApikeysKeyId::class)]
    public function patchUsersUsernameApikeysKeyId(
        string $username,
        int $keyId,
        ApiKeyUpdate $body,
    ): ApiKeyResponse {
        /** @var array<string, mixed> $response */
        $response = $this->performRequest(
            PatchUsersUsernameApikeysKeyId::fromRecordData(
                [
                    'username' => $username,
                    'key_id' => $keyId,
                    'body' => $body,
                ],
            ),
        );

        return ApiKeyResponse::fromArray($response);
    }

    /**
     * Ldap Auth
     *
     * Authenticate via LDAPS and create session.
     */
    #[EndpointAttribute(PostLdap::class)]
    public function postLdap(
        UserLogin $body,
    ): mixed {
        /** @var mixed $response */
        $response = $this->performRequest(
            PostLdap::fromRecordData(
                ['body' => $body],
            ),
        );

        return $response;
    }

    /**
     * Route Create User
     *
     * Create a new user (admin only).  Optional &#x60;team_ids&#x60; / &#x60;project_ids&#x60; grant memberships in the same operation (rejected at validation time for admins, who already have full access). Every id is resolved before the user row is written, and the membership rows share the insert&#39;s commit — a failure can never leave a created-but-unassigned account.
     */
    #[EndpointAttribute(PostUsers::class)]
    public function postUsers(
        UserCreate $body,
    ): User {
        /** @var array<string, mixed> $response */
        $response = $this->performRequest(
            PostUsers::fromRecordData(
                ['body' => $body],
            ),
        );

        return User::fromArray($response);
    }

    /**
     * Route Create User Apikey
     *
     * Create a new API key for a user.
     */
    #[EndpointAttribute(PostUsersUsernameApikeys::class)]
    public function postUsersUsernameApikeys(
        string $username,
        ApiKeyCreate $body,
    ): ApiKeyCreatedResponse {
        /** @var array<string, mixed> $response */
        $response = $this->performRequest(
            PostUsersUsernameApikeys::fromRecordData(
                [
                    'username' => $username,
                    'body' => $body,
                ],
            ),
        );

        return ApiKeyCreatedResponse::fromArray($response);
    }

    /**
     * Totp Disable
     *
     * Disable 2FA. Requires password confirmation. Blocked if admin enforces 2FA.
     */
    #[EndpointAttribute(PostUsersUsernameTotpDisable::class)]
    public function postUsersUsernameTotpDisable(
        string $username,
        TOTPDisableRequest $body,
    ): mixed {
        /** @var mixed $response */
        $response = $this->performRequest(
            PostUsersUsernameTotpDisable::fromRecordData(
                [
                    'username' => $username,
                    'body' => $body,
                ],
            ),
        );

        return $response;
    }

    /**
     * Totp Enable
     *
     * Activate 2FA by confirming a valid TOTP code and password.  Also the promotion point for a staged enrolment: the code is verified against &#x60;totp_pending_secret&#x60; when one exists, and secret + recovery codes are promoted together in the commit that sets &#x60;totp_enabled&#x60;. Falls back to the live secret when nothing is staged, so re-confirming an already-enabled account still works.
     */
    #[EndpointAttribute(PostUsersUsernameTotpEnable::class)]
    public function postUsersUsernameTotpEnable(
        string $username,
        TOTPEnableRequest $body,
    ): mixed {
        /** @var mixed $response */
        $response = $this->performRequest(
            PostUsersUsernameTotpEnable::fromRecordData(
                [
                    'username' => $username,
                    'body' => $body,
                ],
            ),
        );

        return $response;
    }

    /**
     * Totp Setup
     *
     * Stage a new TOTP secret and recovery codes; does not enable 2FA.  Step-up: always requires password; if 2FA is already enabled, also requires a current TOTP/recovery code (else session-only attacker could overwrite the secret and pivot to persistent ATO).  The new secret and codes are written to the PENDING columns and only become live when /totp/enable confirms a code against them. Abandoning the flow therefore leaves the current authenticator and recovery codes working — writing them straight to the live columns used to leave a rotating account enabled against a secret nobody had scanned yet.
     */
    #[EndpointAttribute(PostUsersUsernameTotpSetup::class)]
    public function postUsersUsernameTotpSetup(
        string $username,
        TOTPSetupRequest $body,
    ): TOTPSetupResponse {
        /** @var array<string, mixed> $response */
        $response = $this->performRequest(
            PostUsersUsernameTotpSetup::fromRecordData(
                [
                    'username' => $username,
                    'body' => $body,
                ],
            ),
        );

        return TOTPSetupResponse::fromArray($response);
    }
}
