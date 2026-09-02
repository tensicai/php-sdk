<?php

declare(strict_types=1);

namespace TeamBlue\TensicAI\SDK\Model;

use EventEngine\Data\SpecialKeySupport;
use EventEngine\JsonSchema\JsonSchemaAwareRecord;
use TeamBlue\JsonImmutableObjects\JsonSchemaAwareRecordLogic;
use TeamBlue\OpenApi\Codegen\Endpoint\SpecialKeySupportLogic;
use TeamBlue\TensicAI\SDK\Default\SettingsUpdateDefault;

final class SettingsUpdate implements SpecialKeySupport, JsonSchemaAwareRecord
{
    use SettingsUpdateDefault;
    use JsonSchemaAwareRecordLogic;
    use SpecialKeySupportLogic;

// phpcs:disable SlevomatCodingStandard.Classes.UnusedPrivateElements.UnusedProperty
// phpcs:disable Squiz.NamingConventions.ValidVariableName.MemberNotCamelCaps
    private string|null $appName = null;
    private string|null $appTheme = null;
    private string|null $logoUrl = null;
    private bool|null $hideBranding = null;
    private int|null $maxAudioUploadSize = null;
    private string|null $currency = null;
    private string|null $doclingVlmUrl = null;
    private string|null $doclingVlmModel = null;
    private string|null $doclingVlmApiKey = null;
    private bool|null $authDisableLocal = null;
    private bool|null $ssoAutoCreateUser = null;
    private string|null $ssoAllowedDomains = null;
    private bool|null $ssoAutoRestricted = null;
    private string|null $ssoAutoTeamId = null;
    private string|null $ssoGoogleClientId = null;
    private string|null $ssoGoogleClientSecret = null;
    private string|null $ssoGoogleRedirectUri = null;
    private string|null $ssoGoogleScope = null;
    private string|null $ssoMicrosoftClientId = null;
    private string|null $ssoMicrosoftClientSecret = null;
    private string|null $ssoMicrosoftTenantId = null;
    private string|null $ssoMicrosoftRedirectUri = null;
    private string|null $ssoMicrosoftScope = null;
    private string|null $ssoGithubClientId = null;
    private string|null $ssoGithubClientSecret = null;
    private string|null $ssoGithubRedirectUri = null;
    private string|null $ssoGithubScope = null;
    private string|null $ssoOidcClientId = null;
    private string|null $ssoOidcClientSecret = null;
    private string|null $ssoOidcProviderUrl = null;
    private string|null $ssoOidcRedirectUri = null;
    private string|null $ssoOidcScopes = null;
    private string|null $ssoOidcProviderName = null;
    private string|null $ssoOidcEmailClaim = null;
    private string|null $systemLlm = null;
    private string|null $systemVectorstore = null;
    private string|null $dockerUrl = null;
    private string|null $dockerImage = null;
    private int|null $dockerTimeout = null;
    private string|null $dockerMemLimit = null;
    private float|null $dockerCpus = null;
    private string|null $dockerNetwork = null;
    private bool|null $dockerReadOnly = null;
    private string|null $dockerHeaderName = null;
    private string|null $dockerHeaderValue = null;
    private string|null $sandboxRuntime = null;
    private string|null $e2bApiKey = null;
    private string|null $e2bTemplate = null;
    private string|null $e2bDomain = null;
    private int|null $e2bTimeout = null;
    private string|null $k8sClusterUrl = null;
    private string|null $k8sApiKey = null;
    private string|null $k8sNamespace = null;
    private string|null $k8sImage = null;
    private int|null $k8sTimeout = null;
    private string|null $k8sResourceLimits = null;
    private string|null $k8sCaCert = null;
    private bool|null $k8sVerifySsl = null;
    private string|null $k8sRuntimeClass = null;
    private int|null $dataRetentionDays = null;
    private bool|null $enforce2fa = null;
    private int|null $passwordMaxAgeDays = null;
    private bool|null $ldapEnabled = null;
    private string|null $ldapServerHost = null;
    private string|null $ldapServerPort = null;
    private string|null $ldapAttributeForMail = null;
    private string|null $ldapAttributeForUsername = null;
    private string|null $ldapSearchBase = null;
    private string|null $ldapSearchFilters = null;
    private string|null $ldapAppDn = null;
    private string|null $ldapAppPassword = null;
    private string|null $ldapCaCertFile = null;
    private string|null $ldapCiphers = null;
    private string|null $smtpHost = null;
    private string|null $smtpPort = null;
    private string|null $smtpUser = null;
    private string|null $smtpPassword = null;
    private string|null $smtpFrom = null;
    private string|null $emailDefaultTo = null;
    private string|null $observabilityOtlpEndpoint = null;
    private string|null $observabilityOtlpProtocol = null;
    private string|null $observabilityOtlpHeaders = null;
    private string|null $observabilityServiceName = null;
    private bool|null $observabilityCaptureContent = null;
    private string|null $observabilityVendor = null;
    private string|null $observabilityLangsmithApiKey = null;
    private string|null $observabilityLangsmithProject = null;
    private string|null $observabilityLangsmithWorkspace = null;
    private string|null $managerUrl = null;
    private bool|null $maintenanceMode = null;
    private bool|null $mcpServerEnabled = null;

    public function appName(): string|null
    {
        return $this->appName;
    }

    public function appTheme(): string|null
    {
        return $this->appTheme;
    }

    public function logoUrl(): string|null
    {
        return $this->logoUrl;
    }

    public function hideBranding(): bool|null
    {
        return $this->hideBranding;
    }

    public function maxAudioUploadSize(): int|null
    {
        return $this->maxAudioUploadSize;
    }

    public function currency(): string|null
    {
        return $this->currency;
    }

    public function doclingVlmUrl(): string|null
    {
        return $this->doclingVlmUrl;
    }

    public function doclingVlmModel(): string|null
    {
        return $this->doclingVlmModel;
    }

    public function doclingVlmApiKey(): string|null
    {
        return $this->doclingVlmApiKey;
    }

    public function authDisableLocal(): bool|null
    {
        return $this->authDisableLocal;
    }

    public function ssoAutoCreateUser(): bool|null
    {
        return $this->ssoAutoCreateUser;
    }

    public function ssoAllowedDomains(): string|null
    {
        return $this->ssoAllowedDomains;
    }

    public function ssoAutoRestricted(): bool|null
    {
        return $this->ssoAutoRestricted;
    }

    public function ssoAutoTeamId(): string|null
    {
        return $this->ssoAutoTeamId;
    }

    public function ssoGoogleClientId(): string|null
    {
        return $this->ssoGoogleClientId;
    }

    public function ssoGoogleClientSecret(): string|null
    {
        return $this->ssoGoogleClientSecret;
    }

    public function ssoGoogleRedirectUri(): string|null
    {
        return $this->ssoGoogleRedirectUri;
    }

    public function ssoGoogleScope(): string|null
    {
        return $this->ssoGoogleScope;
    }

    public function ssoMicrosoftClientId(): string|null
    {
        return $this->ssoMicrosoftClientId;
    }

    public function ssoMicrosoftClientSecret(): string|null
    {
        return $this->ssoMicrosoftClientSecret;
    }

    public function ssoMicrosoftTenantId(): string|null
    {
        return $this->ssoMicrosoftTenantId;
    }

    public function ssoMicrosoftRedirectUri(): string|null
    {
        return $this->ssoMicrosoftRedirectUri;
    }

    public function ssoMicrosoftScope(): string|null
    {
        return $this->ssoMicrosoftScope;
    }

    public function ssoGithubClientId(): string|null
    {
        return $this->ssoGithubClientId;
    }

    public function ssoGithubClientSecret(): string|null
    {
        return $this->ssoGithubClientSecret;
    }

    public function ssoGithubRedirectUri(): string|null
    {
        return $this->ssoGithubRedirectUri;
    }

    public function ssoGithubScope(): string|null
    {
        return $this->ssoGithubScope;
    }

    public function ssoOidcClientId(): string|null
    {
        return $this->ssoOidcClientId;
    }

    public function ssoOidcClientSecret(): string|null
    {
        return $this->ssoOidcClientSecret;
    }

    public function ssoOidcProviderUrl(): string|null
    {
        return $this->ssoOidcProviderUrl;
    }

    public function ssoOidcRedirectUri(): string|null
    {
        return $this->ssoOidcRedirectUri;
    }

    public function ssoOidcScopes(): string|null
    {
        return $this->ssoOidcScopes;
    }

    public function ssoOidcProviderName(): string|null
    {
        return $this->ssoOidcProviderName;
    }

    public function ssoOidcEmailClaim(): string|null
    {
        return $this->ssoOidcEmailClaim;
    }

    public function systemLlm(): string|null
    {
        return $this->systemLlm;
    }

    public function systemVectorstore(): string|null
    {
        return $this->systemVectorstore;
    }

    public function dockerUrl(): string|null
    {
        return $this->dockerUrl;
    }

    public function dockerImage(): string|null
    {
        return $this->dockerImage;
    }

    public function dockerTimeout(): int|null
    {
        return $this->dockerTimeout;
    }

    public function dockerMemLimit(): string|null
    {
        return $this->dockerMemLimit;
    }

    public function dockerCpus(): float|null
    {
        return $this->dockerCpus;
    }

    public function dockerNetwork(): string|null
    {
        return $this->dockerNetwork;
    }

    public function dockerReadOnly(): bool|null
    {
        return $this->dockerReadOnly;
    }

    public function dockerHeaderName(): string|null
    {
        return $this->dockerHeaderName;
    }

    public function dockerHeaderValue(): string|null
    {
        return $this->dockerHeaderValue;
    }

    public function sandboxRuntime(): string|null
    {
        return $this->sandboxRuntime;
    }

    public function e2bApiKey(): string|null
    {
        return $this->e2bApiKey;
    }

    public function e2bTemplate(): string|null
    {
        return $this->e2bTemplate;
    }

    public function e2bDomain(): string|null
    {
        return $this->e2bDomain;
    }

    public function e2bTimeout(): int|null
    {
        return $this->e2bTimeout;
    }

    public function k8sClusterUrl(): string|null
    {
        return $this->k8sClusterUrl;
    }

    public function k8sApiKey(): string|null
    {
        return $this->k8sApiKey;
    }

    public function k8sNamespace(): string|null
    {
        return $this->k8sNamespace;
    }

    public function k8sImage(): string|null
    {
        return $this->k8sImage;
    }

    public function k8sTimeout(): int|null
    {
        return $this->k8sTimeout;
    }

    public function k8sResourceLimits(): string|null
    {
        return $this->k8sResourceLimits;
    }

    public function k8sCaCert(): string|null
    {
        return $this->k8sCaCert;
    }

    public function k8sVerifySsl(): bool|null
    {
        return $this->k8sVerifySsl;
    }

    public function k8sRuntimeClass(): string|null
    {
        return $this->k8sRuntimeClass;
    }

    public function dataRetentionDays(): int|null
    {
        return $this->dataRetentionDays;
    }

    public function enforce2fa(): bool|null
    {
        return $this->enforce2fa;
    }

    public function passwordMaxAgeDays(): int|null
    {
        return $this->passwordMaxAgeDays;
    }

    public function ldapEnabled(): bool|null
    {
        return $this->ldapEnabled;
    }

    public function ldapServerHost(): string|null
    {
        return $this->ldapServerHost;
    }

    public function ldapServerPort(): string|null
    {
        return $this->ldapServerPort;
    }

    public function ldapAttributeForMail(): string|null
    {
        return $this->ldapAttributeForMail;
    }

    public function ldapAttributeForUsername(): string|null
    {
        return $this->ldapAttributeForUsername;
    }

    public function ldapSearchBase(): string|null
    {
        return $this->ldapSearchBase;
    }

    public function ldapSearchFilters(): string|null
    {
        return $this->ldapSearchFilters;
    }

    public function ldapAppDn(): string|null
    {
        return $this->ldapAppDn;
    }

    public function ldapAppPassword(): string|null
    {
        return $this->ldapAppPassword;
    }

    public function ldapCaCertFile(): string|null
    {
        return $this->ldapCaCertFile;
    }

    public function ldapCiphers(): string|null
    {
        return $this->ldapCiphers;
    }

    public function smtpHost(): string|null
    {
        return $this->smtpHost;
    }

    public function smtpPort(): string|null
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

    public function observabilityOtlpEndpoint(): string|null
    {
        return $this->observabilityOtlpEndpoint;
    }

    public function observabilityOtlpProtocol(): string|null
    {
        return $this->observabilityOtlpProtocol;
    }

    public function observabilityOtlpHeaders(): string|null
    {
        return $this->observabilityOtlpHeaders;
    }

    public function observabilityServiceName(): string|null
    {
        return $this->observabilityServiceName;
    }

    public function observabilityCaptureContent(): bool|null
    {
        return $this->observabilityCaptureContent;
    }

    public function observabilityVendor(): string|null
    {
        return $this->observabilityVendor;
    }

    public function observabilityLangsmithApiKey(): string|null
    {
        return $this->observabilityLangsmithApiKey;
    }

    public function observabilityLangsmithProject(): string|null
    {
        return $this->observabilityLangsmithProject;
    }

    public function observabilityLangsmithWorkspace(): string|null
    {
        return $this->observabilityLangsmithWorkspace;
    }

    public function managerUrl(): string|null
    {
        return $this->managerUrl;
    }

    public function maintenanceMode(): bool|null
    {
        return $this->maintenanceMode;
    }

    public function mcpServerEnabled(): bool|null
    {
        return $this->mcpServerEnabled;
    }

    /** @return array<string, string> */
    private static function arrayPropItemTypeMap(): array
    {
        return [];
    }

    /** @return array<string, int> */
    private static function maxValues(): array
    {
        return ['dockerCpus' => 1024.0];
    }

    /** @return array<string,string> */
    public function keyMapping(): array
    {
        return [
            'app_name' => 'appName',
            'app_theme' => 'appTheme',
            'logo_url' => 'logoUrl',
            'hide_branding' => 'hideBranding',
            'max_audio_upload_size' => 'maxAudioUploadSize',
            'currency' => 'currency',
            'docling_vlm_url' => 'doclingVlmUrl',
            'docling_vlm_model' => 'doclingVlmModel',
            'docling_vlm_api_key' => 'doclingVlmApiKey',
            'auth_disable_local' => 'authDisableLocal',
            'sso_auto_create_user' => 'ssoAutoCreateUser',
            'sso_allowed_domains' => 'ssoAllowedDomains',
            'sso_auto_restricted' => 'ssoAutoRestricted',
            'sso_auto_team_id' => 'ssoAutoTeamId',
            'sso_google_client_id' => 'ssoGoogleClientId',
            'sso_google_client_secret' => 'ssoGoogleClientSecret',
            'sso_google_redirect_uri' => 'ssoGoogleRedirectUri',
            'sso_google_scope' => 'ssoGoogleScope',
            'sso_microsoft_client_id' => 'ssoMicrosoftClientId',
            'sso_microsoft_client_secret' => 'ssoMicrosoftClientSecret',
            'sso_microsoft_tenant_id' => 'ssoMicrosoftTenantId',
            'sso_microsoft_redirect_uri' => 'ssoMicrosoftRedirectUri',
            'sso_microsoft_scope' => 'ssoMicrosoftScope',
            'sso_github_client_id' => 'ssoGithubClientId',
            'sso_github_client_secret' => 'ssoGithubClientSecret',
            'sso_github_redirect_uri' => 'ssoGithubRedirectUri',
            'sso_github_scope' => 'ssoGithubScope',
            'sso_oidc_client_id' => 'ssoOidcClientId',
            'sso_oidc_client_secret' => 'ssoOidcClientSecret',
            'sso_oidc_provider_url' => 'ssoOidcProviderUrl',
            'sso_oidc_redirect_uri' => 'ssoOidcRedirectUri',
            'sso_oidc_scopes' => 'ssoOidcScopes',
            'sso_oidc_provider_name' => 'ssoOidcProviderName',
            'sso_oidc_email_claim' => 'ssoOidcEmailClaim',
            'system_llm' => 'systemLlm',
            'system_vectorstore' => 'systemVectorstore',
            'docker_url' => 'dockerUrl',
            'docker_image' => 'dockerImage',
            'docker_timeout' => 'dockerTimeout',
            'docker_mem_limit' => 'dockerMemLimit',
            'docker_cpus' => 'dockerCpus',
            'docker_network' => 'dockerNetwork',
            'docker_read_only' => 'dockerReadOnly',
            'docker_header_name' => 'dockerHeaderName',
            'docker_header_value' => 'dockerHeaderValue',
            'sandbox_runtime' => 'sandboxRuntime',
            'e2b_api_key' => 'e2bApiKey',
            'e2b_template' => 'e2bTemplate',
            'e2b_domain' => 'e2bDomain',
            'e2b_timeout' => 'e2bTimeout',
            'k8s_cluster_url' => 'k8sClusterUrl',
            'k8s_api_key' => 'k8sApiKey',
            'k8s_namespace' => 'k8sNamespace',
            'k8s_image' => 'k8sImage',
            'k8s_timeout' => 'k8sTimeout',
            'k8s_resource_limits' => 'k8sResourceLimits',
            'k8s_ca_cert' => 'k8sCaCert',
            'k8s_verify_ssl' => 'k8sVerifySsl',
            'k8s_runtime_class' => 'k8sRuntimeClass',
            'data_retention_days' => 'dataRetentionDays',
            'enforce_2fa' => 'enforce2fa',
            'password_max_age_days' => 'passwordMaxAgeDays',
            'ldap_enabled' => 'ldapEnabled',
            'ldap_server_host' => 'ldapServerHost',
            'ldap_server_port' => 'ldapServerPort',
            'ldap_attribute_for_mail' => 'ldapAttributeForMail',
            'ldap_attribute_for_username' => 'ldapAttributeForUsername',
            'ldap_search_base' => 'ldapSearchBase',
            'ldap_search_filters' => 'ldapSearchFilters',
            'ldap_app_dn' => 'ldapAppDn',
            'ldap_app_password' => 'ldapAppPassword',
            'ldap_ca_cert_file' => 'ldapCaCertFile',
            'ldap_ciphers' => 'ldapCiphers',
            'smtp_host' => 'smtpHost',
            'smtp_port' => 'smtpPort',
            'smtp_user' => 'smtpUser',
            'smtp_password' => 'smtpPassword',
            'smtp_from' => 'smtpFrom',
            'email_default_to' => 'emailDefaultTo',
            'observability_otlp_endpoint' => 'observabilityOtlpEndpoint',
            'observability_otlp_protocol' => 'observabilityOtlpProtocol',
            'observability_otlp_headers' => 'observabilityOtlpHeaders',
            'observability_service_name' => 'observabilityServiceName',
            'observability_capture_content' => 'observabilityCaptureContent',
            'observability_vendor' => 'observabilityVendor',
            'observability_langsmith_api_key' => 'observabilityLangsmithApiKey',
            'observability_langsmith_project' => 'observabilityLangsmithProject',
            'observability_langsmith_workspace' => 'observabilityLangsmithWorkspace',
            'manager_url' => 'managerUrl',
            'maintenance_mode' => 'maintenanceMode',
            'mcp_server_enabled' => 'mcpServerEnabled',
        ];
    }

// phpcs:enable
}
