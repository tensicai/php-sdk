<?php

declare(strict_types=1);

namespace TensicAI\SDK\Client;

use TeamBlue\OpenApi\Codegen\Attribute\Endpoint as EndpointAttribute;
use TeamBlue\OpenApi\Codegen\Client\Client as AbstractClient;
use TensicAI\SDK\Endpoint\GetAuthWhoami;
use TensicAI\SDK\Endpoint\GetOauthProviderCallback;
use TensicAI\SDK\Endpoint\GetOauthProviderLogin;
use TensicAI\SDK\Endpoint\PostAuthExitImpersonation;
use TensicAI\SDK\Endpoint\PostAuthImpersonateUsername;
use TensicAI\SDK\Endpoint\PostAuthLogin;
use TensicAI\SDK\Endpoint\PostAuthLogout;
use TensicAI\SDK\Endpoint\PostAuthSupportLogin;
use TensicAI\SDK\Endpoint\PostAuthVerifyTotp;
use TensicAI\SDK\Model\TOTPVerifyRequest;

/**
 * @SuppressWarnings("PHPMD.ExcessiveClassLength")
 * @SuppressWarnings("PHPMD.ExcessivePublicCount")
 * @SuppressWarnings("PHPMD.ExcessiveClassComplexity")
 */
class AuthClient extends AbstractClient implements AuthClientInterface
{
    /**
     * Get Whoami
     *
     * Get the currently authenticated user&#39;s profile.
     */
    #[EndpointAttribute(GetAuthWhoami::class)]
    public function getAuthWhoami(): mixed
    {
        /** @var mixed $response */
        $response = $this->performRequest(
            GetAuthWhoami::fromRecordData(
                [],
            ),
        );

        return $response;
    }

    /**
     * Oauth Callback
     */
    #[EndpointAttribute(GetOauthProviderCallback::class)]
    public function getOauthProviderCallback(
        string $provider,
    ): mixed {
        /** @var mixed $response */
        $response = $this->performRequest(
            GetOauthProviderCallback::fromRecordData(
                ['provider' => $provider],
            ),
        );

        return $response;
    }

    /**
     * Oauth Login
     */
    #[EndpointAttribute(GetOauthProviderLogin::class)]
    public function getOauthProviderLogin(
        string $provider,
    ): mixed {
        /** @var mixed $response */
        $response = $this->performRequest(
            GetOauthProviderLogin::fromRecordData(
                ['provider' => $provider],
            ),
        );

        return $response;
    }

    /**
     * Exit Impersonation
     *
     * Exit impersonation and restore the admin session.
     */
    #[EndpointAttribute(PostAuthExitImpersonation::class)]
    public function postAuthExitImpersonation(): mixed
    {
        /** @var mixed $response */
        $response = $this->performRequest(
            PostAuthExitImpersonation::fromRecordData(
                [],
            ),
        );

        return $response;
    }

    /**
     * Impersonate User
     *
     * Impersonate another user (admin only). Saves admin session for restoration.
     */
    #[EndpointAttribute(PostAuthImpersonateUsername::class)]
    public function postAuthImpersonateUsername(
        string $username,
    ): mixed {
        /** @var mixed $response */
        $response = $this->performRequest(
            PostAuthImpersonateUsername::fromRecordData(
                ['username' => $username],
            ),
        );

        return $response;
    }

    /**
     * Login
     *
     * Authenticate and receive a session cookie. If 2FA is enabled, returns a temporary token instead.
     */
    #[EndpointAttribute(PostAuthLogin::class)]
    public function postAuthLogin(): mixed
    {
        /** @var mixed $response */
        $response = $this->performRequest(
            PostAuthLogin::fromRecordData(
                [],
            ),
        );

        return $response;
    }

    /**
     * Logout
     *
     * Clear session cookies and log out.  Both &#x60;tensic_token&#x60; AND &#x60;tensic_token_admin&#x60; deleted; otherwise an admin who impersonates then logs out leaves a dangling admin-scoped JWT that &#x60;POST /auth/exit-impersonation&#x60; could swap back into the session slot.
     */
    #[EndpointAttribute(PostAuthLogout::class)]
    public function postAuthLogout(): mixed
    {
        /** @var mixed $response */
        $response = $this->performRequest(
            PostAuthLogout::fromRecordData(
                [],
            ),
        );

        return $response;
    }

    /**
     * Support Login
     *
     * Exchange a manager-signed grant for an admin session on this instance.  Unauthenticated on purpose: the grant IS the credential. It is asymmetrically signed by the manager, names this instance in &#x60;aud&#x60;, expires in ~90 seconds and works once — see &#x60;tensic/support_login.py&#x60; for why each of those is load-bearing.  Accepts the grant as a form field because the manager delivers it with an auto-submitting POST form. A GET with the token in the query string would leak it into browser history, &#x60;Referer&#x60; headers and every proxy log on the path.
     */
    #[EndpointAttribute(PostAuthSupportLogin::class)]
    public function postAuthSupportLogin(): mixed
    {
        /** @var mixed $response */
        $response = $this->performRequest(
            PostAuthSupportLogin::fromRecordData(
                [],
            ),
        );

        return $response;
    }

    /**
     * Verify Totp
     *
     * Complete 2FA login by verifying a TOTP code or recovery code.
     */
    #[EndpointAttribute(PostAuthVerifyTotp::class)]
    public function postAuthVerifyTotp(
        TOTPVerifyRequest $body,
    ): mixed {
        /** @var mixed $response */
        $response = $this->performRequest(
            PostAuthVerifyTotp::fromRecordData(
                ['body' => $body],
            ),
        );

        return $response;
    }
}
