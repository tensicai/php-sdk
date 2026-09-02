<?php

declare(strict_types=1);

namespace TeamBlue\TensicAI\SDK\Client;

use TeamBlue\TensicAI\SDK\Model\ApiKeyCreate;
use TeamBlue\TensicAI\SDK\Model\ApiKeyCreatedResponse;
use TeamBlue\TensicAI\SDK\Model\ApiKeyResponse;
use TeamBlue\TensicAI\SDK\Model\ApiKeyUpdate;
use TeamBlue\TensicAI\SDK\Model\GetUsersQuery;
use TeamBlue\TensicAI\SDK\Model\TOTPDisableRequest;
use TeamBlue\TensicAI\SDK\Model\TOTPEnableRequest;
use TeamBlue\TensicAI\SDK\Model\TOTPSetupRequest;
use TeamBlue\TensicAI\SDK\Model\TOTPSetupResponse;
use TeamBlue\TensicAI\SDK\Model\User;
use TeamBlue\TensicAI\SDK\Model\UserCreate;
use TeamBlue\TensicAI\SDK\Model\UserLogin;
use TeamBlue\TensicAI\SDK\Model\UsersResponse;
use TeamBlue\TensicAI\SDK\Model\UserTeamBudgetsResponse;
use TeamBlue\TensicAI\SDK\Model\UserUpdate;

/**
 * @SuppressWarnings("PHPMD.ExcessiveClassLength")
 * @SuppressWarnings("PHPMD.ExcessivePublicCount")
 * @SuppressWarnings("PHPMD.ExcessiveClassComplexity")
 * phpcs:disable SlevomatCodingStandard.Classes.SuperfluousInterfaceNaming.SuperfluousSuffix
 */
interface UsersClientInterface
{
    public const string TAG = 'Users';

    /**
     * Route Delete User
     *
     * Delete a user (admin only).
     */
    public function deleteUsersUsername(
        string $username,
    ): mixed;

    /**
     * Route Delete User Apikey
     *
     * Delete an API key.
     */
    public function deleteUsersUsernameApikeysKeyId(
        string $username,
        int $keyId,
    ): mixed;

    /**
     * Get Permission Matrix
     *
     * Return the users x projects permission matrix.
     */
    public function getPermissionsMatrix(): mixed;

    /**
     * Route Get Users
     *
     * List users. Admins see all (bounded + &#x60;total&#x60;); others see team members only.  The &#x60;users&#x60; key is preserved (selectors keep working); &#x60;limit&#x60; defaults high so realistic installs still get everyone in one call, but the list can never be unbounded.
     */
    public function getUsers(
        GetUsersQuery|null $query = null,
    ): UsersResponse;

    /**
     * Route Get User Details
     *
     * Get user details by username.
     */
    public function getUsersUsername(
        string $username,
    ): User;

    /**
     * Route List User Apikeys
     *
     * List all API keys for a user.
     *
     * @return array<ApiKeyResponse>
     */
    public function getUsersUsernameApikeys(
        string $username,
    ): array;

    /**
     * Route Get User Team Budgets
     *
     * The user&#39;s own monthly budget (cap + month-to-date spend) for each team they&#39;re in. Self-service: the profile owner or a platform admin. Only the user&#39;s OWN per-team data is returned — never whole-team spend.
     */
    public function getUsersUsernameTeamBudgets(
        string $username,
    ): UserTeamBudgetsResponse;

    /**
     * Route Get User Team Budgets
     *
     * The user&#39;s own monthly budget (cap + month-to-date spend) for each team they&#39;re in. Self-service: the profile owner or a platform admin. Only the user&#39;s OWN per-team data is returned — never whole-team spend.
     */
    public function getUsersUsernameTeamBudgets(
        string $username,
    ): UserTeamBudgetsResponse;

    /**
     * Totp Status
     *
     * Check if 2FA is enabled for a user.
     */
    public function getUsersUsernameTotpStatus(
        string $username,
    ): mixed;

    /**
     * Route Update User
     *
     * Update user properties.
     */
    public function patchUsersUsername(
        string $username,
        UserUpdate $body,
    ): User;

    /**
     * Route Update User Apikey
     *
     * Update API key description or monthly token quota.
     */
    public function patchUsersUsernameApikeysKeyId(
        string $username,
        int $keyId,
        ApiKeyUpdate $body,
    ): ApiKeyResponse;

    /**
     * Ldap Auth
     *
     * Authenticate via LDAPS and create session.
     */
    public function postLdap(
        UserLogin $body,
    ): mixed;

    /**
     * Route Create User
     *
     * Create a new user (admin only).  Optional &#x60;team_ids&#x60; / &#x60;project_ids&#x60; grant memberships in the same operation (rejected at validation time for admins, who already have full access). Every id is resolved before the user row is written, and the membership rows share the insert&#39;s commit — a failure can never leave a created-but-unassigned account.
     */
    public function postUsers(
        UserCreate $body,
    ): User;

    /**
     * Route Create User Apikey
     *
     * Create a new API key for a user.
     */
    public function postUsersUsernameApikeys(
        string $username,
        ApiKeyCreate $body,
    ): ApiKeyCreatedResponse;

    /**
     * Totp Disable
     *
     * Disable 2FA. Requires password confirmation. Blocked if admin enforces 2FA.
     */
    public function postUsersUsernameTotpDisable(
        string $username,
        TOTPDisableRequest $body,
    ): mixed;

    /**
     * Totp Enable
     *
     * Activate 2FA by confirming a valid TOTP code and password.  Also the promotion point for a staged enrolment: the code is verified against &#x60;totp_pending_secret&#x60; when one exists, and secret + recovery codes are promoted together in the commit that sets &#x60;totp_enabled&#x60;. Falls back to the live secret when nothing is staged, so re-confirming an already-enabled account still works.
     */
    public function postUsersUsernameTotpEnable(
        string $username,
        TOTPEnableRequest $body,
    ): mixed;

    /**
     * Totp Setup
     *
     * Stage a new TOTP secret and recovery codes; does not enable 2FA.  Step-up: always requires password; if 2FA is already enabled, also requires a current TOTP/recovery code (else session-only attacker could overwrite the secret and pivot to persistent ATO).  The new secret and codes are written to the PENDING columns and only become live when /totp/enable confirms a code against them. Abandoning the flow therefore leaves the current authenticator and recovery codes working — writing them straight to the live columns used to leave a rotating account enabled against a secret nobody had scanned yet.
     */
    public function postUsersUsernameTotpSetup(
        string $username,
        TOTPSetupRequest $body,
    ): TOTPSetupResponse;
}
