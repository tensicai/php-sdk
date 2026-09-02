<?php

declare(strict_types=1);

namespace TensicAI\SDK\Client;

use TeamBlue\OpenApi\Codegen\Attribute\Endpoint as EndpointAttribute;
use TeamBlue\OpenApi\Codegen\Client\Client as AbstractClient;
use TensicAI\SDK\Endpoint\DeleteCronLogs;
use TensicAI\SDK\Endpoint\GetAdminRoutines;
use TensicAI\SDK\Endpoint\GetAudit;
use TensicAI\SDK\Endpoint\GetCronLogs;
use TensicAI\SDK\Endpoint\GetSettings;
use TensicAI\SDK\Endpoint\GetSettingsInfrastructure;
use TensicAI\SDK\Endpoint\PatchAdminRoutinesRoutineID;
use TensicAI\SDK\Endpoint\PatchSettings;
use TensicAI\SDK\Endpoint\PostCronLogsRun;
use TensicAI\SDK\Endpoint\PostSettingsDockerTest;
use TensicAI\SDK\Endpoint\PostSettingsDoclingTest;
use TensicAI\SDK\Endpoint\PostSettingsE2bTest;
use TensicAI\SDK\Endpoint\PostSettingsHealth;
use TensicAI\SDK\Endpoint\PostSettingsKubernetesTest;
use TensicAI\SDK\Endpoint\PostSettingsOtelTest;
use TensicAI\SDK\Endpoint\PostSettingsRedisTest;
use TensicAI\SDK\Endpoint\PostSettingsS3Test;
use TensicAI\SDK\Endpoint\PostSettingsVectordbBackendTest;
use TensicAI\SDK\Model\AdminRoutineToggleRequest;
use TensicAI\SDK\Model\DockerTestRequest;
use TensicAI\SDK\Model\DoclingTestRequest;
use TensicAI\SDK\Model\E2BTestRequest;
use TensicAI\SDK\Model\GetAuditQuery;
use TensicAI\SDK\Model\GetCronLogsQuery;
use TensicAI\SDK\Model\HealthCheckResponse;
use TensicAI\SDK\Model\InfrastructureStatusResponse;
use TensicAI\SDK\Model\KubernetesTestRequest;
use TensicAI\SDK\Model\OtelTestRequest;
use TensicAI\SDK\Model\OtelTestResponse;
use TensicAI\SDK\Model\SettingsResponse;
use TensicAI\SDK\Model\SettingsUpdate;

/**
 * @SuppressWarnings("PHPMD.ExcessiveClassLength")
 * @SuppressWarnings("PHPMD.ExcessivePublicCount")
 * @SuppressWarnings("PHPMD.ExcessiveClassComplexity")
 */
class SettingsClient extends AbstractClient implements SettingsClientInterface
{
    /**
     * Purge Cron Logs
     *
     * Delete all cron log entries (admin only).
     */
    #[EndpointAttribute(DeleteCronLogs::class)]
    public function deleteCronLogs(): mixed
    {
        return $this->performRequest(
            DeleteCronLogs::fromRecordData(
                [],
            ),
        );
    }

    /**
     * Purge Cron Logs
     *
     * Delete all cron log entries (admin only).
     */
    #[EndpointAttribute(DeleteCronLogs::class)]
    public function deleteCronLogs(): mixed
    {
        return $this->performRequest(
            DeleteCronLogs::fromRecordData(
                [],
            ),
        );
    }

    /**
     * List All Routines
     *
     * Cross-project routine inventory for the admin Routines page.
     */
    #[EndpointAttribute(GetAdminRoutines::class)]
    public function getAdminRoutines(): mixed
    {
        /** @var mixed $response */
        $response = $this->performRequest(
            GetAdminRoutines::fromRecordData(
                [],
            ),
        );

        return $response;
    }

    /**
     * Get Audit Log
     *
     * Get paginated audit log entries (admin only).
     */
    #[EndpointAttribute(GetAudit::class)]
    public function getAudit(
        GetAuditQuery|null $query = null,
    ): mixed {
        /** @var mixed $response */
        $response = $this->performRequest(
            GetAudit::fromRecordData(
                ['query' => $query],
            ),
        );

        return $response;
    }

    /**
     * Get Audit Log
     *
     * Get paginated audit log entries (admin only).
     */
    #[EndpointAttribute(GetAudit::class)]
    public function getAudit(
        GetAuditQuery|null $query = null,
    ): mixed {
        /** @var mixed $response */
        $response = $this->performRequest(
            GetAudit::fromRecordData(
                ['query' => $query],
            ),
        );

        return $response;
    }

    /**
     * Get Cron Logs
     *
     * Get paginated cron log entries (admin only).
     */
    #[EndpointAttribute(GetCronLogs::class)]
    public function getCronLogs(
        GetCronLogsQuery|null $query = null,
    ): mixed {
        /** @var mixed $response */
        $response = $this->performRequest(
            GetCronLogs::fromRecordData(
                ['query' => $query],
            ),
        );

        return $response;
    }

    /**
     * Get Cron Logs
     *
     * Get paginated cron log entries (admin only).
     */
    #[EndpointAttribute(GetCronLogs::class)]
    public function getCronLogs(
        GetCronLogsQuery|null $query = null,
    ): mixed {
        /** @var mixed $response */
        $response = $this->performRequest(
            GetCronLogs::fromRecordData(
                ['query' => $query],
            ),
        );

        return $response;
    }

    /**
     * Get Settings
     *
     * Get current platform settings (admin only).
     */
    #[EndpointAttribute(GetSettings::class)]
    public function getSettings(): SettingsResponse
    {
        /** @var array<string, mixed> $response */
        $response = $this->performRequest(
            GetSettings::fromRecordData(
                [],
            ),
        );

        return SettingsResponse::fromArray($response);
    }

    /**
     * Get Infrastructure Status
     *
     * Report effective enablement for deployment-managed infrastructure.  Only boolean feature state and the controlling environment-variable name are exposed. Connection details and credentials remain server-side.
     */
    #[EndpointAttribute(GetSettingsInfrastructure::class)]
    public function getSettingsInfrastructure(): InfrastructureStatusResponse
    {
        /** @var array<string, mixed> $response */
        $response = $this->performRequest(
            GetSettingsInfrastructure::fromRecordData(
                [],
            ),
        );

        return InfrastructureStatusResponse::fromArray($response);
    }

    /**
     * Admin Toggle Routine
     *
     * Admin-only routine toggle, bypasses project membership.
     */
    #[EndpointAttribute(PatchAdminRoutinesRoutineID::class)]
    public function patchAdminRoutinesRoutineID(
        int $routineID,
        AdminRoutineToggleRequest $body,
    ): mixed {
        /** @var mixed $response */
        $response = $this->performRequest(
            PatchAdminRoutinesRoutineID::fromRecordData(
                [
                    'routineID' => $routineID,
                    'body' => $body,
                ],
            ),
        );

        return $response;
    }

    /**
     * Patch Settings
     *
     * Update platform settings (admin only).
     */
    #[EndpointAttribute(PatchSettings::class)]
    public function patchSettings(
        SettingsUpdate $body,
    ): SettingsResponse {
        /** @var array<string, mixed> $response */
        $response = $this->performRequest(
            PatchSettings::fromRecordData(
                ['body' => $body],
            ),
        );

        return SettingsResponse::fromArray($response);
    }

    /**
     * Run Crons
     *
     * Trigger all cron jobs now (admin only). Runs as a subprocess.
     */
    #[EndpointAttribute(PostCronLogsRun::class)]
    public function postCronLogsRun(): mixed
    {
        /** @var mixed $response */
        $response = $this->performRequest(
            PostCronLogsRun::fromRecordData(
                [],
            ),
        );

        return $response;
    }

    /**
     * Run Crons
     *
     * Trigger all cron jobs now (admin only). Runs as a subprocess.
     */
    #[EndpointAttribute(PostCronLogsRun::class)]
    public function postCronLogsRun(): mixed
    {
        /** @var mixed $response */
        $response = $this->performRequest(
            PostCronLogsRun::fromRecordData(
                [],
            ),
        );

        return $response;
    }

    /**
     * Test Docker Connection
     *
     * Test the Docker connection, including an optional custom header, before saving. Missing or masked values fall back to the saved settings.
     */
    #[EndpointAttribute(PostSettingsDockerTest::class)]
    public function postSettingsDockerTest(
        DockerTestRequest|null $body = null,
    ): mixed {
        /** @var mixed $response */
        $response = $this->performRequest(
            PostSettingsDockerTest::fromRecordData(
                ['body' => $body],
            ),
        );

        return $response;
    }

    /**
     * Test Docker Connection
     *
     * Test the Docker connection, including an optional custom header, before saving. Missing or masked values fall back to the saved settings.
     */
    #[EndpointAttribute(PostSettingsDockerTest::class)]
    public function postSettingsDockerTest(
        DockerTestRequest|null $body = null,
    ): mixed {
        /** @var mixed $response */
        $response = $this->performRequest(
            PostSettingsDockerTest::fromRecordData(
                ['body' => $body],
            ),
        );

        return $response;
    }

    /**
     * Test Docling Connection
     *
     * Test the Granite-Docling endpoint by listing models on the OpenAI-compatible server (&#x60;GET {base}/v1/models&#x60;) — confirms reachability + auth, and whether the configured model is served. Accepts an optional &#x60;&#x60;{docling_vlm_url, docling_vlm_model, docling_vlm_api_key}&#x60;&#x60; body so the admin can validate *before saving*; a blank/masked key falls back to the saved (decrypted) value.
     */
    #[EndpointAttribute(PostSettingsDoclingTest::class)]
    public function postSettingsDoclingTest(
        DoclingTestRequest|null $body = null,
    ): mixed {
        /** @var mixed $response */
        $response = $this->performRequest(
            PostSettingsDoclingTest::fromRecordData(
                ['body' => $body],
            ),
        );

        return $response;
    }

    /**
     * Test Docling Connection
     *
     * Test the Granite-Docling endpoint by listing models on the OpenAI-compatible server (&#x60;GET {base}/v1/models&#x60;) — confirms reachability + auth, and whether the configured model is served. Accepts an optional &#x60;&#x60;{docling_vlm_url, docling_vlm_model, docling_vlm_api_key}&#x60;&#x60; body so the admin can validate *before saving*; a blank/masked key falls back to the saved (decrypted) value.
     */
    #[EndpointAttribute(PostSettingsDoclingTest::class)]
    public function postSettingsDoclingTest(
        DoclingTestRequest|null $body = null,
    ): mixed {
        /** @var mixed $response */
        $response = $this->performRequest(
            PostSettingsDoclingTest::fromRecordData(
                ['body' => $body],
            ),
        );

        return $response;
    }

    /**
     * Test E2B Connection
     *
     * Test E2B by creating + killing a probe sandbox. Accepts an optional &#x60;&#x60;{e2b_api_key, e2b_template, e2b_domain}&#x60;&#x60; body so the admin can validate *before saving*; a blank/masked key falls back to the saved value.
     */
    #[EndpointAttribute(PostSettingsE2bTest::class)]
    public function postSettingsE2bTest(
        E2BTestRequest|null $body = null,
    ): mixed {
        /** @var mixed $response */
        $response = $this->performRequest(
            PostSettingsE2bTest::fromRecordData(
                ['body' => $body],
            ),
        );

        return $response;
    }

    /**
     * Test E2B Connection
     *
     * Test E2B by creating + killing a probe sandbox. Accepts an optional &#x60;&#x60;{e2b_api_key, e2b_template, e2b_domain}&#x60;&#x60; body so the admin can validate *before saving*; a blank/masked key falls back to the saved value.
     */
    #[EndpointAttribute(PostSettingsE2bTest::class)]
    public function postSettingsE2bTest(
        E2BTestRequest|null $body = null,
    ): mixed {
        /** @var mixed $response */
        $response = $this->performRequest(
            PostSettingsE2bTest::fromRecordData(
                ['body' => $body],
            ),
        );

        return $response;
    }

    /**
     * Run Health Check
     *
     * Check every backing service at once (admin only).  The per-service &#x60;/settings/_*_/test&#x60; endpoints below still exist and still answer for one service each — they take candidate values from an unsaved form, which is a different job. This one takes nothing and tests the EFFECTIVE configuration the factory is actually running with, which is the question you have when something is wrong rather than when you are setting something up.  Always 200, even when a service is down: the failures are the payload. A 502 here would collapse \&quot;storage is unreachable\&quot; and \&quot;the health endpoint is broken\&quot; into the same response, which is the one distinction an operator needs at that moment.
     */
    #[EndpointAttribute(PostSettingsHealth::class)]
    public function postSettingsHealth(): HealthCheckResponse
    {
        /** @var array<string, mixed> $response */
        $response = $this->performRequest(
            PostSettingsHealth::fromRecordData(
                [],
            ),
        );

        return HealthCheckResponse::fromArray($response);
    }

    /**
     * Run Health Check
     *
     * Check every backing service at once (admin only).  The per-service &#x60;/settings/_*_/test&#x60; endpoints below still exist and still answer for one service each — they take candidate values from an unsaved form, which is a different job. This one takes nothing and tests the EFFECTIVE configuration the factory is actually running with, which is the question you have when something is wrong rather than when you are setting something up.  Always 200, even when a service is down: the failures are the payload. A 502 here would collapse \&quot;storage is unreachable\&quot; and \&quot;the health endpoint is broken\&quot; into the same response, which is the one distinction an operator needs at that moment.
     */
    #[EndpointAttribute(PostSettingsHealth::class)]
    public function postSettingsHealth(): HealthCheckResponse
    {
        /** @var array<string, mixed> $response */
        $response = $this->performRequest(
            PostSettingsHealth::fromRecordData(
                [],
            ),
        );

        return HealthCheckResponse::fromArray($response);
    }

    /**
     * Test Kubernetes Connection
     *
     * Test the Kubernetes connection by querying the API server version + listing pods in the namespace (an RBAC check). Accepts an optional &#x60;&#x60;{k8s_cluster_url, k8s_api_key, k8s_namespace}&#x60;&#x60; body so the admin can validate *before saving*; a blank/masked token falls back to the saved value.
     */
    #[EndpointAttribute(PostSettingsKubernetesTest::class)]
    public function postSettingsKubernetesTest(
        KubernetesTestRequest|null $body = null,
    ): mixed {
        /** @var mixed $response */
        $response = $this->performRequest(
            PostSettingsKubernetesTest::fromRecordData(
                ['body' => $body],
            ),
        );

        return $response;
    }

    /**
     * Test Kubernetes Connection
     *
     * Test the Kubernetes connection by querying the API server version + listing pods in the namespace (an RBAC check). Accepts an optional &#x60;&#x60;{k8s_cluster_url, k8s_api_key, k8s_namespace}&#x60;&#x60; body so the admin can validate *before saving*; a blank/masked token falls back to the saved value.
     */
    #[EndpointAttribute(PostSettingsKubernetesTest::class)]
    public function postSettingsKubernetesTest(
        KubernetesTestRequest|null $body = null,
    ): mixed {
        /** @var mixed $response */
        $response = $this->performRequest(
            PostSettingsKubernetesTest::fromRecordData(
                ['body' => $body],
            ),
        );

        return $response;
    }

    /**
     * Test Otel Connection
     *
     * Send ONE &#x60;tensic.settings.connectivity_test&#x60; span to the collector and check the exporter&#39;s own result — a synchronous &#x60;export()&#x60;, because &#x60;force_flush&#x60; reports success even when the batch queue silently dropped. Accepts an optional &#x60;&#x60;{observability_otlp_endpoint, observability_otlp_protocol, observability_otlp_headers, observability_vendor, observability_langsmith_api_key, observability_langsmith_project, observability_langsmith_workspace}&#x60;&#x60; body so the admin can validate *before saving*; blank/masked secrets (generic headers, the LangSmith api key) fall back to the saved (decrypted) value. Candidate values win over saved ones — for vendor/project/workspace by KEY PRESENCE, because an explicitly-sent \&quot;\&quot; is a real candidate (\&quot;test as generic\&quot;, \&quot;no project header\&quot;), not an unfilled field. Header/credential values are never echoed in any response.
     */
    #[EndpointAttribute(PostSettingsOtelTest::class)]
    public function postSettingsOtelTest(
        OtelTestRequest|null $body = null,
    ): OtelTestResponse {
        /** @var array<string, mixed> $response */
        $response = $this->performRequest(
            PostSettingsOtelTest::fromRecordData(
                ['body' => $body],
            ),
        );

        return OtelTestResponse::fromArray($response);
    }

    /**
     * Test Otel Connection
     *
     * Send ONE &#x60;tensic.settings.connectivity_test&#x60; span to the collector and check the exporter&#39;s own result — a synchronous &#x60;export()&#x60;, because &#x60;force_flush&#x60; reports success even when the batch queue silently dropped. Accepts an optional &#x60;&#x60;{observability_otlp_endpoint, observability_otlp_protocol, observability_otlp_headers, observability_vendor, observability_langsmith_api_key, observability_langsmith_project, observability_langsmith_workspace}&#x60;&#x60; body so the admin can validate *before saving*; blank/masked secrets (generic headers, the LangSmith api key) fall back to the saved (decrypted) value. Candidate values win over saved ones — for vendor/project/workspace by KEY PRESENCE, because an explicitly-sent \&quot;\&quot; is a real candidate (\&quot;test as generic\&quot;, \&quot;no project header\&quot;), not an unfilled field. Header/credential values are never echoed in any response.
     */
    #[EndpointAttribute(PostSettingsOtelTest::class)]
    public function postSettingsOtelTest(
        OtelTestRequest|null $body = null,
    ): OtelTestResponse {
        /** @var array<string, mixed> $response */
        $response = $this->performRequest(
            PostSettingsOtelTest::fromRecordData(
                ['body' => $body],
            ),
        );

        return OtelTestResponse::fromArray($response);
    }

    /**
     * Test Redis Connection
     *
     * Test the Redis connection (admin only).  Tests the EFFECTIVE configuration — the &#x60;TENSIC_REDIS_*&#x60; env vars the factory is actually running with. It used to accept candidate values in the body so an admin could validate a server before saving; Redis is env-managed now, so there is no unsaved form state to validate and the body is ignored. The button remains because diagnosing a bad TENSIC_REDIS_HOST from the UI is the point.  Connects with the &#x60;&#x60;redis&#x60;&#x60; client directly and PINGs — bypassing the llama_index RedisChatStore wrapper (and its connection-error-masking bug), so failures surface as a clean message instead of a NameError.
     *
     * @param array<mixed>|null $body
     */
    #[EndpointAttribute(PostSettingsRedisTest::class)]
    public function postSettingsRedisTest(
        array|null $body = null,
    ): mixed {
        /** @var mixed $response */
        $response = $this->performRequest(
            PostSettingsRedisTest::fromRecordData(
                ['body' => $body],
            ),
        );

        return $response;
    }

    /**
     * Test Redis Connection
     *
     * Test the Redis connection (admin only).  Tests the EFFECTIVE configuration — the &#x60;TENSIC_REDIS_*&#x60; env vars the factory is actually running with. It used to accept candidate values in the body so an admin could validate a server before saving; Redis is env-managed now, so there is no unsaved form state to validate and the body is ignored. The button remains because diagnosing a bad TENSIC_REDIS_HOST from the UI is the point.  Connects with the &#x60;&#x60;redis&#x60;&#x60; client directly and PINGs — bypassing the llama_index RedisChatStore wrapper (and its connection-error-masking bug), so failures surface as a clean message instead of a NameError.
     *
     * @param array<mixed>|null $body
     */
    #[EndpointAttribute(PostSettingsRedisTest::class)]
    public function postSettingsRedisTest(
        array|null $body = null,
    ): mixed {
        /** @var mixed $response */
        $response = $this->performRequest(
            PostSettingsRedisTest::fromRecordData(
                ['body' => $body],
            ),
        );

        return $response;
    }

    /**
     * Test S3 Storage Connection
     *
     * Test object storage by round-tripping a tiny object (put → get → delete).  Not a HeadBucket: staging needs PutObject *and* DeleteObject, and a principal missing DeleteObject would pass a read-only check and then silently leak every staged object. Tests the EFFECTIVE configuration (the TENSIC_STORAGE_S3_* env vars in force); object storage is env-managed, so the body is ignored. It used to accept an optional &#x60;&#x60;{storage_s3_*}&#x60;&#x60; body so the admin could validate *before saving*; there is no unsaved state to validate any more.
     *
     * @param array<mixed>|null $body
     */
    #[EndpointAttribute(PostSettingsS3Test::class)]
    public function postSettingsS3Test(
        array|null $body = null,
    ): mixed {
        /** @var mixed $response */
        $response = $this->performRequest(
            PostSettingsS3Test::fromRecordData(
                ['body' => $body],
            ),
        );

        return $response;
    }

    /**
     * Test S3 Storage Connection
     *
     * Test object storage by round-tripping a tiny object (put → get → delete).  Not a HeadBucket: staging needs PutObject *and* DeleteObject, and a principal missing DeleteObject would pass a read-only check and then silently leak every staged object. Tests the EFFECTIVE configuration (the TENSIC_STORAGE_S3_* env vars in force); object storage is env-managed, so the body is ignored. It used to accept an optional &#x60;&#x60;{storage_s3_*}&#x60;&#x60; body so the admin could validate *before saving*; there is no unsaved state to validate any more.
     *
     * @param array<mixed>|null $body
     */
    #[EndpointAttribute(PostSettingsS3Test::class)]
    public function postSettingsS3Test(
        array|null $body = null,
    ): mixed {
        /** @var mixed $response */
        $response = $this->performRequest(
            PostSettingsS3Test::fromRecordData(
                ['body' => $body],
            ),
        );

        return $response;
    }

    /**
     * Test Vectordb Connection
     *
     * Test a vector DB connection (admin only).  &#x60;&#x60;backend&#x60;&#x60; is one of chromadb / pgvector. Tests the EFFECTIVE configuration — the TENSIC_CHROMADB_* / TENSIC_PGVECTOR_* env vars the factory is actually running with. Like /settings/redis/test it used to accept candidate values so an admin could validate a store before saving; the vector stores are env-managed now, so there is no unsaved state to validate and the body is ignored. Never writes settings.
     *
     * @param array<mixed>|null $body
     */
    #[EndpointAttribute(PostSettingsVectordbBackendTest::class)]
    public function postSettingsVectordbBackendTest(
        string $backend,
        array|null $body = null,
    ): mixed {
        /** @var mixed $response */
        $response = $this->performRequest(
            PostSettingsVectordbBackendTest::fromRecordData(
                [
                    'backend' => $backend,
                    'body' => $body,
                ],
            ),
        );

        return $response;
    }

    /**
     * Test Vectordb Connection
     *
     * Test a vector DB connection (admin only).  &#x60;&#x60;backend&#x60;&#x60; is one of chromadb / pgvector. Tests the EFFECTIVE configuration — the TENSIC_CHROMADB_* / TENSIC_PGVECTOR_* env vars the factory is actually running with. Like /settings/redis/test it used to accept candidate values so an admin could validate a store before saving; the vector stores are env-managed now, so there is no unsaved state to validate and the body is ignored. Never writes settings.
     *
     * @param array<mixed>|null $body
     */
    #[EndpointAttribute(PostSettingsVectordbBackendTest::class)]
    public function postSettingsVectordbBackendTest(
        string $backend,
        array|null $body = null,
    ): mixed {
        /** @var mixed $response */
        $response = $this->performRequest(
            PostSettingsVectordbBackendTest::fromRecordData(
                [
                    'backend' => $backend,
                    'body' => $body,
                ],
            ),
        );

        return $response;
    }
}
