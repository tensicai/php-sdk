<?php

declare(strict_types=1);

namespace TeamBlue\TensicAI\SDK\Client;

use TeamBlue\TensicAI\SDK\Model\AdminRoutineToggleRequest;
use TeamBlue\TensicAI\SDK\Model\DockerTestRequest;
use TeamBlue\TensicAI\SDK\Model\DoclingTestRequest;
use TeamBlue\TensicAI\SDK\Model\E2BTestRequest;
use TeamBlue\TensicAI\SDK\Model\GetAuditQuery;
use TeamBlue\TensicAI\SDK\Model\GetCronLogsQuery;
use TeamBlue\TensicAI\SDK\Model\HealthCheckResponse;
use TeamBlue\TensicAI\SDK\Model\InfrastructureStatusResponse;
use TeamBlue\TensicAI\SDK\Model\KubernetesTestRequest;
use TeamBlue\TensicAI\SDK\Model\OtelTestRequest;
use TeamBlue\TensicAI\SDK\Model\OtelTestResponse;
use TeamBlue\TensicAI\SDK\Model\SettingsResponse;
use TeamBlue\TensicAI\SDK\Model\SettingsUpdate;

/**
 * @SuppressWarnings("PHPMD.ExcessiveClassLength")
 * @SuppressWarnings("PHPMD.ExcessivePublicCount")
 * @SuppressWarnings("PHPMD.ExcessiveClassComplexity")
 * phpcs:disable SlevomatCodingStandard.Classes.SuperfluousInterfaceNaming.SuperfluousSuffix
 */
interface SettingsClientInterface
{
    public const string TAG = 'Settings';

    /**
     * Purge Cron Logs
     *
     * Delete all cron log entries (admin only).
     */
    public function deleteCronLogs(): mixed;

    /**
     * Purge Cron Logs
     *
     * Delete all cron log entries (admin only).
     */
    public function deleteCronLogs(): mixed;

    /**
     * List All Routines
     *
     * Cross-project routine inventory for the admin Routines page.
     */
    public function getAdminRoutines(): mixed;

    /**
     * Get Audit Log
     *
     * Get paginated audit log entries (admin only).
     */
    public function getAudit(
        GetAuditQuery|null $query = null,
    ): mixed;

    /**
     * Get Audit Log
     *
     * Get paginated audit log entries (admin only).
     */
    public function getAudit(
        GetAuditQuery|null $query = null,
    ): mixed;

    /**
     * Get Cron Logs
     *
     * Get paginated cron log entries (admin only).
     */
    public function getCronLogs(
        GetCronLogsQuery|null $query = null,
    ): mixed;

    /**
     * Get Cron Logs
     *
     * Get paginated cron log entries (admin only).
     */
    public function getCronLogs(
        GetCronLogsQuery|null $query = null,
    ): mixed;

    /**
     * Get Settings
     *
     * Get current platform settings (admin only).
     */
    public function getSettings(): SettingsResponse;

    /**
     * Get Infrastructure Status
     *
     * Report effective enablement for deployment-managed infrastructure.  Only boolean feature state and the controlling environment-variable name are exposed. Connection details and credentials remain server-side.
     */
    public function getSettingsInfrastructure(): InfrastructureStatusResponse;

    /**
     * Admin Toggle Routine
     *
     * Admin-only routine toggle, bypasses project membership.
     */
    public function patchAdminRoutinesRoutineID(
        int $routineID,
        AdminRoutineToggleRequest $body,
    ): mixed;

    /**
     * Patch Settings
     *
     * Update platform settings (admin only).
     */
    public function patchSettings(
        SettingsUpdate $body,
    ): SettingsResponse;

    /**
     * Run Crons
     *
     * Trigger all cron jobs now (admin only). Runs as a subprocess.
     */
    public function postCronLogsRun(): mixed;

    /**
     * Run Crons
     *
     * Trigger all cron jobs now (admin only). Runs as a subprocess.
     */
    public function postCronLogsRun(): mixed;

    /**
     * Test Docker Connection
     *
     * Test the Docker connection, including an optional custom header, before saving. Missing or masked values fall back to the saved settings.
     */
    public function postSettingsDockerTest(
        DockerTestRequest|null $body = null,
    ): mixed;

    /**
     * Test Docker Connection
     *
     * Test the Docker connection, including an optional custom header, before saving. Missing or masked values fall back to the saved settings.
     */
    public function postSettingsDockerTest(
        DockerTestRequest|null $body = null,
    ): mixed;

    /**
     * Test Docling Connection
     *
     * Test the Granite-Docling endpoint by listing models on the OpenAI-compatible server (&#x60;GET {base}/v1/models&#x60;) — confirms reachability + auth, and whether the configured model is served. Accepts an optional &#x60;&#x60;{docling_vlm_url, docling_vlm_model, docling_vlm_api_key}&#x60;&#x60; body so the admin can validate *before saving*; a blank/masked key falls back to the saved (decrypted) value.
     */
    public function postSettingsDoclingTest(
        DoclingTestRequest|null $body = null,
    ): mixed;

    /**
     * Test Docling Connection
     *
     * Test the Granite-Docling endpoint by listing models on the OpenAI-compatible server (&#x60;GET {base}/v1/models&#x60;) — confirms reachability + auth, and whether the configured model is served. Accepts an optional &#x60;&#x60;{docling_vlm_url, docling_vlm_model, docling_vlm_api_key}&#x60;&#x60; body so the admin can validate *before saving*; a blank/masked key falls back to the saved (decrypted) value.
     */
    public function postSettingsDoclingTest(
        DoclingTestRequest|null $body = null,
    ): mixed;

    /**
     * Test E2B Connection
     *
     * Test E2B by creating + killing a probe sandbox. Accepts an optional &#x60;&#x60;{e2b_api_key, e2b_template, e2b_domain}&#x60;&#x60; body so the admin can validate *before saving*; a blank/masked key falls back to the saved value.
     */
    public function postSettingsE2bTest(
        E2BTestRequest|null $body = null,
    ): mixed;

    /**
     * Test E2B Connection
     *
     * Test E2B by creating + killing a probe sandbox. Accepts an optional &#x60;&#x60;{e2b_api_key, e2b_template, e2b_domain}&#x60;&#x60; body so the admin can validate *before saving*; a blank/masked key falls back to the saved value.
     */
    public function postSettingsE2bTest(
        E2BTestRequest|null $body = null,
    ): mixed;

    /**
     * Run Health Check
     *
     * Check every backing service at once (admin only).  The per-service &#x60;/settings/_*_/test&#x60; endpoints below still exist and still answer for one service each — they take candidate values from an unsaved form, which is a different job. This one takes nothing and tests the EFFECTIVE configuration the factory is actually running with, which is the question you have when something is wrong rather than when you are setting something up.  Always 200, even when a service is down: the failures are the payload. A 502 here would collapse \&quot;storage is unreachable\&quot; and \&quot;the health endpoint is broken\&quot; into the same response, which is the one distinction an operator needs at that moment.
     */
    public function postSettingsHealth(): HealthCheckResponse;

    /**
     * Run Health Check
     *
     * Check every backing service at once (admin only).  The per-service &#x60;/settings/_*_/test&#x60; endpoints below still exist and still answer for one service each — they take candidate values from an unsaved form, which is a different job. This one takes nothing and tests the EFFECTIVE configuration the factory is actually running with, which is the question you have when something is wrong rather than when you are setting something up.  Always 200, even when a service is down: the failures are the payload. A 502 here would collapse \&quot;storage is unreachable\&quot; and \&quot;the health endpoint is broken\&quot; into the same response, which is the one distinction an operator needs at that moment.
     */
    public function postSettingsHealth(): HealthCheckResponse;

    /**
     * Test Kubernetes Connection
     *
     * Test the Kubernetes connection by querying the API server version + listing pods in the namespace (an RBAC check). Accepts an optional &#x60;&#x60;{k8s_cluster_url, k8s_api_key, k8s_namespace}&#x60;&#x60; body so the admin can validate *before saving*; a blank/masked token falls back to the saved value.
     */
    public function postSettingsKubernetesTest(
        KubernetesTestRequest|null $body = null,
    ): mixed;

    /**
     * Test Kubernetes Connection
     *
     * Test the Kubernetes connection by querying the API server version + listing pods in the namespace (an RBAC check). Accepts an optional &#x60;&#x60;{k8s_cluster_url, k8s_api_key, k8s_namespace}&#x60;&#x60; body so the admin can validate *before saving*; a blank/masked token falls back to the saved value.
     */
    public function postSettingsKubernetesTest(
        KubernetesTestRequest|null $body = null,
    ): mixed;

    /**
     * Test Otel Connection
     *
     * Send ONE &#x60;tensic.settings.connectivity_test&#x60; span to the collector and check the exporter&#39;s own result — a synchronous &#x60;export()&#x60;, because &#x60;force_flush&#x60; reports success even when the batch queue silently dropped. Accepts an optional &#x60;&#x60;{observability_otlp_endpoint, observability_otlp_protocol, observability_otlp_headers, observability_vendor, observability_langsmith_api_key, observability_langsmith_project, observability_langsmith_workspace}&#x60;&#x60; body so the admin can validate *before saving*; blank/masked secrets (generic headers, the LangSmith api key) fall back to the saved (decrypted) value. Candidate values win over saved ones — for vendor/project/workspace by KEY PRESENCE, because an explicitly-sent \&quot;\&quot; is a real candidate (\&quot;test as generic\&quot;, \&quot;no project header\&quot;), not an unfilled field. Header/credential values are never echoed in any response.
     */
    public function postSettingsOtelTest(
        OtelTestRequest|null $body = null,
    ): OtelTestResponse;

    /**
     * Test Otel Connection
     *
     * Send ONE &#x60;tensic.settings.connectivity_test&#x60; span to the collector and check the exporter&#39;s own result — a synchronous &#x60;export()&#x60;, because &#x60;force_flush&#x60; reports success even when the batch queue silently dropped. Accepts an optional &#x60;&#x60;{observability_otlp_endpoint, observability_otlp_protocol, observability_otlp_headers, observability_vendor, observability_langsmith_api_key, observability_langsmith_project, observability_langsmith_workspace}&#x60;&#x60; body so the admin can validate *before saving*; blank/masked secrets (generic headers, the LangSmith api key) fall back to the saved (decrypted) value. Candidate values win over saved ones — for vendor/project/workspace by KEY PRESENCE, because an explicitly-sent \&quot;\&quot; is a real candidate (\&quot;test as generic\&quot;, \&quot;no project header\&quot;), not an unfilled field. Header/credential values are never echoed in any response.
     */
    public function postSettingsOtelTest(
        OtelTestRequest|null $body = null,
    ): OtelTestResponse;

    /**
     * Test Redis Connection
     *
     * Test the Redis connection (admin only).  Tests the EFFECTIVE configuration — the &#x60;TENSIC_REDIS_*&#x60; env vars the factory is actually running with. It used to accept candidate values in the body so an admin could validate a server before saving; Redis is env-managed now, so there is no unsaved form state to validate and the body is ignored. The button remains because diagnosing a bad TENSIC_REDIS_HOST from the UI is the point.  Connects with the &#x60;&#x60;redis&#x60;&#x60; client directly and PINGs — bypassing the llama_index RedisChatStore wrapper (and its connection-error-masking bug), so failures surface as a clean message instead of a NameError.
     *
     * @param array<mixed>|null $body
     */
    public function postSettingsRedisTest(
        array|null $body = null,
    ): mixed;

    /**
     * Test Redis Connection
     *
     * Test the Redis connection (admin only).  Tests the EFFECTIVE configuration — the &#x60;TENSIC_REDIS_*&#x60; env vars the factory is actually running with. It used to accept candidate values in the body so an admin could validate a server before saving; Redis is env-managed now, so there is no unsaved form state to validate and the body is ignored. The button remains because diagnosing a bad TENSIC_REDIS_HOST from the UI is the point.  Connects with the &#x60;&#x60;redis&#x60;&#x60; client directly and PINGs — bypassing the llama_index RedisChatStore wrapper (and its connection-error-masking bug), so failures surface as a clean message instead of a NameError.
     *
     * @param array<mixed>|null $body
     */
    public function postSettingsRedisTest(
        array|null $body = null,
    ): mixed;

    /**
     * Test S3 Storage Connection
     *
     * Test object storage by round-tripping a tiny object (put → get → delete).  Not a HeadBucket: staging needs PutObject *and* DeleteObject, and a principal missing DeleteObject would pass a read-only check and then silently leak every staged object. Tests the EFFECTIVE configuration (the TENSIC_STORAGE_S3_* env vars in force); object storage is env-managed, so the body is ignored. It used to accept an optional &#x60;&#x60;{storage_s3_*}&#x60;&#x60; body so the admin could validate *before saving*; there is no unsaved state to validate any more.
     *
     * @param array<mixed>|null $body
     */
    public function postSettingsS3Test(
        array|null $body = null,
    ): mixed;

    /**
     * Test S3 Storage Connection
     *
     * Test object storage by round-tripping a tiny object (put → get → delete).  Not a HeadBucket: staging needs PutObject *and* DeleteObject, and a principal missing DeleteObject would pass a read-only check and then silently leak every staged object. Tests the EFFECTIVE configuration (the TENSIC_STORAGE_S3_* env vars in force); object storage is env-managed, so the body is ignored. It used to accept an optional &#x60;&#x60;{storage_s3_*}&#x60;&#x60; body so the admin could validate *before saving*; there is no unsaved state to validate any more.
     *
     * @param array<mixed>|null $body
     */
    public function postSettingsS3Test(
        array|null $body = null,
    ): mixed;

    /**
     * Test Vectordb Connection
     *
     * Test a vector DB connection (admin only).  &#x60;&#x60;backend&#x60;&#x60; is one of chromadb / pgvector. Tests the EFFECTIVE configuration — the TENSIC_CHROMADB_* / TENSIC_PGVECTOR_* env vars the factory is actually running with. Like /settings/redis/test it used to accept candidate values so an admin could validate a store before saving; the vector stores are env-managed now, so there is no unsaved state to validate and the body is ignored. Never writes settings.
     *
     * @param array<mixed>|null $body
     */
    public function postSettingsVectordbBackendTest(
        string $backend,
        array|null $body = null,
    ): mixed;

    /**
     * Test Vectordb Connection
     *
     * Test a vector DB connection (admin only).  &#x60;&#x60;backend&#x60;&#x60; is one of chromadb / pgvector. Tests the EFFECTIVE configuration — the TENSIC_CHROMADB_* / TENSIC_PGVECTOR_* env vars the factory is actually running with. Like /settings/redis/test it used to accept candidate values so an admin could validate a store before saving; the vector stores are env-managed now, so there is no unsaved state to validate and the body is ignored. Never writes settings.
     *
     * @param array<mixed>|null $body
     */
    public function postSettingsVectordbBackendTest(
        string $backend,
        array|null $body = null,
    ): mixed;
}
