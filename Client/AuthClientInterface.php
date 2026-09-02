<?php

declare(strict_types=1);

namespace TeamBlue\TensicAI\SDK\Client;

use TeamBlue\TensicAI\SDK\Model\TOTPVerifyRequest;

/**
 * @SuppressWarnings("PHPMD.ExcessiveClassLength")
 * @SuppressWarnings("PHPMD.ExcessivePublicCount")
 * @SuppressWarnings("PHPMD.ExcessiveClassComplexity")
 * phpcs:disable SlevomatCodingStandard.Classes.SuperfluousInterfaceNaming.SuperfluousSuffix
 */
interface AuthClientInterface
{
    public const string TAG = 'Auth';

    /**
     * Get Whoami
     *
     * Get the currently authenticated user&#39;s profile.
     */
    public function getAuthWhoami(): mixed;

    /**
     * Oauth Callback
     */
    public function getOauthProviderCallback(
        string $provider,
    ): mixed;

    /**
     * Oauth Login
     */
    public function getOauthProviderLogin(
        string $provider,
    ): mixed;

    /**
     * Exit Impersonation
     *
     * Exit impersonation and restore the admin session.
     */
    public function postAuthExitImpersonation(): mixed;

    /**
     * Impersonate User
     *
     * Impersonate another user (admin only). Saves admin session for restoration.
     */
    public function postAuthImpersonateUsername(
        string $username,
    ): mixed;

    /**
     * Login
     *
     * Authenticate and receive a session cookie. If 2FA is enabled, returns a temporary token instead.
     */
    public function postAuthLogin(): mixed;

    /**
     * Logout
     *
     * Clear session cookies and log out.  Both &#x60;tensic_token&#x60; AND &#x60;tensic_token_admin&#x60; deleted; otherwise an admin who impersonates then logs out leaves a dangling admin-scoped JWT that &#x60;POST /auth/exit-impersonation&#x60; could swap back into the session slot.
     */
    public function postAuthLogout(): mixed;

    /**
     * Support Login
     *
     * Exchange a manager-signed grant for an admin session on this instance.  Unauthenticated on purpose: the grant IS the credential. It is asymmetrically signed by the manager, names this instance in &#x60;aud&#x60;, expires in ~90 seconds and works once — see &#x60;tensic/support_login.py&#x60; for why each of those is load-bearing.  Accepts the grant as a form field because the manager delivers it with an auto-submitting POST form. A GET with the token in the query string would leak it into browser history, &#x60;Referer&#x60; headers and every proxy log on the path.
     */
    public function postAuthSupportLogin(): mixed;

    /**
     * Verify Totp
     *
     * Complete 2FA login by verifying a TOTP code or recovery code.
     */
    public function postAuthVerifyTotp(
        TOTPVerifyRequest $body,
    ): mixed;
}
