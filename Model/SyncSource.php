<?php

declare(strict_types=1);

namespace TeamBlue\TensicAI\SDK\Model;

use EventEngine\Data\SpecialKeySupport;
use EventEngine\JsonSchema\JsonSchemaAwareRecord;
use TeamBlue\JsonImmutableObjects\JsonSchemaAwareRecordLogic;
use TeamBlue\OpenApi\Codegen\Endpoint\SpecialKeySupportLogic;
use TeamBlue\TensicAI\SDK\Default\SyncSourceDefault;

final class SyncSource implements SpecialKeySupport, JsonSchemaAwareRecord
{
    use SyncSourceDefault;
    use JsonSchemaAwareRecordLogic;
    use SpecialKeySupportLogic;

// phpcs:disable SlevomatCodingStandard.Classes.UnusedPrivateElements.UnusedProperty
// phpcs:disable Squiz.NamingConventions.ValidVariableName.MemberNotCamelCaps
    private string $type;
    private string $name;
    private string|null $url = null;
    private string|null $s3Bucket = null;
    private string|null $s3Prefix = null;
    private string|null $s3Region = null;
    private string|null $s3AccessKey = null;
    private string|null $s3SecretKey = null;
    private string|null $confluenceBaseUrl = null;
    private string|null $confluenceSpaceKey = null;
    private string|null $confluenceEmail = null;
    private string|null $confluenceApiToken = null;
    private string|null $sharepointTenantId = null;
    private string|null $sharepointClientId = null;
    private string|null $sharepointClientSecret = null;
    private string|null $sharepointSiteName = null;
    private string|null $sharepointFolder = null;
    private string|null $gdriveFolderId = null;
    private string|null $gdriveServiceAccountJson = null;
    private string|null $splitter = 'sentence';
    private int|null $chunks = 512;
    private int|null $syncInterval = 60;
    private string|null $lastSync = null;

    public function type(): string
    {
        return $this->type;
    }

    public function name(): string
    {
        return $this->name;
    }

    public function url(): string|null
    {
        return $this->url;
    }

    public function s3Bucket(): string|null
    {
        return $this->s3Bucket;
    }

    public function s3Prefix(): string|null
    {
        return $this->s3Prefix;
    }

    public function s3Region(): string|null
    {
        return $this->s3Region;
    }

    public function s3AccessKey(): string|null
    {
        return $this->s3AccessKey;
    }

    public function s3SecretKey(): string|null
    {
        return $this->s3SecretKey;
    }

    public function confluenceBaseUrl(): string|null
    {
        return $this->confluenceBaseUrl;
    }

    public function confluenceSpaceKey(): string|null
    {
        return $this->confluenceSpaceKey;
    }

    public function confluenceEmail(): string|null
    {
        return $this->confluenceEmail;
    }

    public function confluenceApiToken(): string|null
    {
        return $this->confluenceApiToken;
    }

    public function sharepointTenantId(): string|null
    {
        return $this->sharepointTenantId;
    }

    public function sharepointClientId(): string|null
    {
        return $this->sharepointClientId;
    }

    public function sharepointClientSecret(): string|null
    {
        return $this->sharepointClientSecret;
    }

    public function sharepointSiteName(): string|null
    {
        return $this->sharepointSiteName;
    }

    public function sharepointFolder(): string|null
    {
        return $this->sharepointFolder;
    }

    public function gdriveFolderId(): string|null
    {
        return $this->gdriveFolderId;
    }

    public function gdriveServiceAccountJson(): string|null
    {
        return $this->gdriveServiceAccountJson;
    }

    public function splitter(): string|null
    {
        return $this->splitter;
    }

    public function chunks(): int|null
    {
        return $this->chunks;
    }

    public function syncInterval(): int|null
    {
        return $this->syncInterval;
    }

    public function lastSync(): string|null
    {
        return $this->lastSync;
    }

    /** @return array<string, string> */
    private static function arrayPropItemTypeMap(): array
    {
        return [];
    }

    /** @return array<string, int> */
    private static function maxValues(): array
    {
        return [
            'chunks' => 8192,
            'syncInterval' => 10080,
        ];
    }

    /** @return array<string,string> */
    public function keyMapping(): array
    {
        return [
            'type' => 'type',
            'name' => 'name',
            'url' => 'url',
            's3_bucket' => 's3Bucket',
            's3_prefix' => 's3Prefix',
            's3_region' => 's3Region',
            's3_access_key' => 's3AccessKey',
            's3_secret_key' => 's3SecretKey',
            'confluence_base_url' => 'confluenceBaseUrl',
            'confluence_space_key' => 'confluenceSpaceKey',
            'confluence_email' => 'confluenceEmail',
            'confluence_api_token' => 'confluenceApiToken',
            'sharepoint_tenant_id' => 'sharepointTenantId',
            'sharepoint_client_id' => 'sharepointClientId',
            'sharepoint_client_secret' => 'sharepointClientSecret',
            'sharepoint_site_name' => 'sharepointSiteName',
            'sharepoint_folder' => 'sharepointFolder',
            'gdrive_folder_id' => 'gdriveFolderId',
            'gdrive_service_account_json' => 'gdriveServiceAccountJson',
            'splitter' => 'splitter',
            'chunks' => 'chunks',
            'sync_interval' => 'syncInterval',
            'last_sync' => 'lastSync',
        ];
    }

// phpcs:enable
}
