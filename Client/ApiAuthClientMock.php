<?php

declare(strict_types=1);

namespace TensicAI\SDK\Client;

use TeamBlue\ClientMock\Mock;
use TeamBlue\ClientMock\MockLogic;
use TensicAI\SDK\Model\TOTPVerifyRequest;

use function func_get_args;

final class ApiAuthClientMock implements Mock
{
    use MockLogic;

    /** @return class-string<AuthClientInterface> */
    public function mockInterface(): string
    {
        return AuthClientInterface::class;
    }

    /** @see AuthClient::getAuthWhoami() */
    public function getAuthWhoami(): self
    {
        ($this->persister)('getAuthWhoami', ...func_get_args());

        return $this;
    }

    /** @see AuthClient::getOauthProviderCallback() */
    public function getOauthProviderCallback(
        string $provider,
    ): self {
        ($this->persister)('getOauthProviderCallback', ...func_get_args());

        return $this;
    }

    /** @see AuthClient::getOauthProviderLogin() */
    public function getOauthProviderLogin(
        string $provider,
    ): self {
        ($this->persister)('getOauthProviderLogin', ...func_get_args());

        return $this;
    }

    /** @see AuthClient::postAuthExitImpersonation() */
    public function postAuthExitImpersonation(): self
    {
        ($this->persister)('postAuthExitImpersonation', ...func_get_args());

        return $this;
    }

    /** @see AuthClient::postAuthImpersonateUsername() */
    public function postAuthImpersonateUsername(
        string $username,
    ): self {
        ($this->persister)('postAuthImpersonateUsername', ...func_get_args());

        return $this;
    }

    /** @see AuthClient::postAuthLogin() */
    public function postAuthLogin(): self
    {
        ($this->persister)('postAuthLogin', ...func_get_args());

        return $this;
    }

    /** @see AuthClient::postAuthLogout() */
    public function postAuthLogout(): self
    {
        ($this->persister)('postAuthLogout', ...func_get_args());

        return $this;
    }

    /** @see AuthClient::postAuthSupportLogin() */
    public function postAuthSupportLogin(): self
    {
        ($this->persister)('postAuthSupportLogin', ...func_get_args());

        return $this;
    }

    /** @see AuthClient::postAuthVerifyTotp() */
    public function postAuthVerifyTotp(
        TOTPVerifyRequest $body,
    ): self {
        ($this->persister)('postAuthVerifyTotp', ...func_get_args());

        return $this;
    }
}
