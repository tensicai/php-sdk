# tensic.ai

tensic.ai is an AIaaS (AI as a Service) platform. Create AI projects and consume them via REST API.  Supports multiple project types: **RAG**, **Agent**, **Router**, and **Inference**.  ## Authentication  All endpoints require authentication via one of: - **Bearer API Key** — `Authorization: Bearer <key>` (programmatic access) - **Session Cookie** — set by the console on login (browser clients)

## Contents

- [Getting started](#getting-started-)
- [Usage](#usage)
- [Development](#development)
- [Issues](#faq-)

***
## Getting started

You can install the client in your project by using composer.

And install the package:


```bash
composer require team-blue/php-tensic-ai-sdk
```
## Usage

### Clients methods

All path parameters are scalar values or shared value objects. A value object can be initialized via the `fromValue` static method.
The query parameters and body parameters are bundled in a query and body immutable record.
An immutable record can be initialized via the `fromArray` static method.
All the used immutable records can be imported from this library.

Method      | Description | Documentation
------------|-------------|--------------
**`deleteClassifiersClassifierId`**| Delete Classifier<br/> <br/> **Parameters :** <br />  - `int $classifierId` (required) <br />
**`deleteCronLogs`**| Purge Cron Logs
**`deleteEmbeddingsEmbeddingId`**| Api Delete Embedding<br/> <br/> **Parameters :** <br />  - `int $embeddingId` (required) <br />
**`deleteImageGeneratorsGeneratorId`**| Delete Image Generator<br/> <br/> **Parameters :** <br />  - `int $generatorId` (required) <br />
**`deleteLlmsLlmId`**| Api Delete Llm<br/> <br/> **Parameters :** <br />  - `int $llmId` (required) <br />
**`deleteProjectsProjectID`**| Route Delete Project<br/> <br/> **Parameters :** <br />  - `int $projectID` (required) <br />
**`deleteProjectsProjectIDCommentsCommentID`**| Delete Project Comment<br/> <br/> **Parameters :** <br />  - `int $projectID` (required) <br />   - `int $commentID` (required) <br />
**`deleteProjectsProjectIDCustomToolsToolName`**| Delete Project Custom Tool<br/> <br/> **Parameters :** <br />  - `int $projectID` (required) <br />   - `string $toolName` (required) <br />
**`deleteProjectsProjectIDEmbeddingsSource`**| Delete Embedding<br/> <br/> **Parameters :** <br />  - `int $projectID` (required) <br />   - `string $source` (required) <br />
**`deleteProjectsProjectIDEvalsDatasetsDatasetID`**| Delete Dataset<br/> <br/> **Parameters :** <br />  - `int $projectID` (required) <br />   - `int $datasetID` (required) <br />
**`deleteProjectsProjectIDEvalsDatasetsDatasetIDCasesCaseID`**| Delete Test Case<br/> <br/> **Parameters :** <br />  - `int $projectID` (required) <br />   - `int $datasetID` (required) <br />   - `int $caseID` (required) <br />
**`deleteProjectsProjectIDEvalsRunsRunID`**| Delete Run<br/> <br/> **Parameters :** <br />  - `int $projectID` (required) <br />   - `int $runID` (required) <br />
**`deleteProjectsProjectIDIngestBulkJobID`**| Delete Bulk Ingest Job<br/> <br/> **Parameters :** <br />  - `int $projectID` (required) <br />   - `int $jobID` (required) <br />
**`deleteProjectsProjectIDLogs`**| Flush Project Logs<br/> <br/> **Parameters :** <br />  - `int $projectID` (required) <br />
**`deleteProjectsProjectIDRoutinesRoutineID`**| Delete Routine<br/> <br/> **Parameters :** <br />  - `int $projectID` (required) <br />   - `int $routineID` (required) <br />
**`deleteProjectsProjectIDSecretsSecretID`**| Delete Project Secret<br/> <br/> **Parameters :** <br />  - `int $projectID` (required) <br />   - `int $secretID` (required) <br />
**`deleteProjectsProjectIDWidgetsWidgetID`**| Delete Widget<br/> <br/> **Parameters :** <br />  - `int $projectID` (required) <br />   - `int $widgetID` (required) <br />
**`deleteProjectsProjectIDWidgetsWidgetIDContextSecret`**| Remove Widget Context Secret<br/> <br/> **Parameters :** <br />  - `int $projectID` (required) <br />   - `int $widgetID` (required) <br />
**`deleteSpeechToTextModelId`**| Delete Speech To Text<br/> <br/> **Parameters :** <br />  - `int $modelId` (required) <br />
**`deleteTeamsTeamId`**| Delete Team<br/> <br/> **Parameters :** <br />  - `int $teamId` (required) <br />
**`deleteTeamsTeamIdAdminsUsername`**| Remove Admin From Team<br/> <br/> **Parameters :** <br />  - `int $teamId` (required) <br />   - `string $username` (required) <br />
**`deleteTeamsTeamIdAudioGeneratorsGeneratorName`**| Remove Audio Generator From Team<br/> <br/> **Parameters :** <br />  - `int $teamId` (required) <br />   - `string $generatorName` (required) <br />
**`deleteTeamsTeamIdEmbeddingsEmbeddingId`**| Remove Embedding From Team<br/> <br/> **Parameters :** <br />  - `int $teamId` (required) <br />   - `int $embeddingId` (required) <br />
**`deleteTeamsTeamIdImageGeneratorsGeneratorName`**| Remove Image Generator From Team<br/> <br/> **Parameters :** <br />  - `int $teamId` (required) <br />   - `string $generatorName` (required) <br />
**`deleteTeamsTeamIdLlmsLlmId`**| Remove Llm From Team<br/> <br/> **Parameters :** <br />  - `int $teamId` (required) <br />   - `int $llmId` (required) <br />
**`deleteTeamsTeamIdProjectsProjectId`**| Remove Project From Team<br/> <br/> **Parameters :** <br />  - `int $teamId` (required) <br />   - `int $projectId` (required) <br />
**`deleteTeamsTeamIdUsersUsername`**| Remove User From Team<br/> <br/> **Parameters :** <br />  - `int $teamId` (required) <br />   - `string $username` (required) <br />
**`deleteTemplatesTemplateID`**| Delete Template<br/> <br/> **Parameters :** <br />  - `int $templateID` (required) <br />
**`deleteUsersUsername`**| Route Delete User<br/> <br/> **Parameters :** <br />  - `string $username` (required) <br />
**`deleteUsersUsernameApikeysKeyId`**| Route Delete User Apikey<br/> <br/> **Parameters :** <br />  - `string $username` (required) <br />   - `int $keyId` (required) <br />
**`get`**| Get
**`getAdminFullPath`**| Serve Spa<br/> <br/> **Parameters :** <br />  - `string $fullPath` (required) <br />
**`getAdminRoutines`**| List All Routines
**`getAudio`**| Route List Generators
**`getAudit`**| Get Audit Log<br/> <br/> **Parameters :** <br />  - `GetAuditQuery $query`<br />
**`getAuthWhoami`**| Get Whoami
**`getClassifiers`**| List Classifiers
**`getClassifiersClassifierId`**| Get Classifier<br/> <br/> **Parameters :** <br />  - `int $classifierId` (required) <br />
**`getCronLogs`**| Get Cron Logs<br/> <br/> **Parameters :** <br />  - `GetCronLogsQuery $query`<br />
**`getDirectModels`**| List Accessible Models
**`getEmbeddings`**| Api Get Embeddings<br/> <br/> **Parameters :** <br />  - `GetEmbeddingsQuery $query`<br />
**`getEmbeddingsEmbeddingId`**| Api Get Embedding<br/> <br/> **Parameters :** <br />  - `int $embeddingId` (required) <br />
**`getExamples`**| List Examples
**`getHealthLive`**| Health Ready
**`getHealthReady`**| Health Ready
**`getImage`**| Route List Generators
**`getImageGenerators`**| List Image Generators
**`getImageGeneratorsGeneratorId`**| Get Image Generator<br/> <br/> **Parameters :** <br />  - `int $generatorId` (required) <br />
**`getInfo`**| Get Info
**`getInvitations`**| Get My Invitations
**`getInvitationsCount`**| Get Invitation Count
**`getLlms`**| Api Get Llms<br/> <br/> **Parameters :** <br />  - `GetLlmsQuery $query`<br />
**`getLlmsLlmId`**| Api Get Llm<br/> <br/> **Parameters :** <br />  - `int $llmId` (required) <br />
**`getNews`**| Get News
**`getOauthProviderCallback`**| Oauth Callback<br/> <br/> **Parameters :** <br />  - `string $provider` (required) <br />
**`getOauthProviderLogin`**| Oauth Login<br/> <br/> **Parameters :** <br />  - `string $provider` (required) <br />
**`getPermissionsMatrix`**| Get Permission Matrix
**`getProjects`**| Route Get Projects<br/> <br/> **Parameters :** <br />  - `GetProjectsQuery $query`<br />
**`getProjectsHealth`**| Get Projects Health
**`getProjectsProjectID`**| Route Get Project<br/> <br/> **Parameters :** <br />  - `int $projectID` (required) <br />
**`getProjectsProjectIDAnalyticsChunking`**| Get Chunking Analytics<br/> <br/> **Parameters :** <br />  - `int $projectID` (required) <br />   - `GetProjectsProjectIDAnalyticsChunkingQuery $query`<br />
**`getProjectsProjectIDAnalyticsConversationChatIDContext`**| Get Conversation Context<br/> <br/> **Parameters :** <br />  - `int $projectID` (required) <br />   - `string $chatID` (required) <br />   - `GetProjectsProjectIDAnalyticsConversationChatIDContextQuery $query`<br />
**`getProjectsProjectIDAnalyticsConversations`**| Get Conversation Analytics<br/> <br/> **Parameters :** <br />  - `int $projectID` (required) <br />   - `GetProjectsProjectIDAnalyticsConversationsQuery $query`<br />
**`getProjectsProjectIDAnalyticsHealth`**| Get Project Health<br/> <br/> **Parameters :** <br />  - `int $projectID` (required) <br />   - `GetProjectsProjectIDAnalyticsHealthQuery $query`<br />
**`getProjectsProjectIDAnalyticsSources`**| Get Source Analytics<br/> <br/> **Parameters :** <br />  - `int $projectID` (required) <br />   - `GetProjectsProjectIDAnalyticsSourcesQuery $query`<br />
**`getProjectsProjectIDAnalyticsTools`**| Get Tool Analytics<br/> <br/> **Parameters :** <br />  - `int $projectID` (required) <br />   - `GetProjectsProjectIDAnalyticsToolsQuery $query`<br />
**`getProjectsProjectIDAssetsToken`**| Get Project Asset<br/> <br/> **Parameters :** <br />  - `int $projectID` (required) <br />   - `string $token` (required) <br />   - `GetProjectsProjectIDAssetsTokenQuery $query`<br />
**`getProjectsProjectIDComments`**| List Project Comments<br/> <br/> **Parameters :** <br />  - `int $projectID` (required) <br />   - `GetProjectsProjectIDCommentsQuery $query`<br />
**`getProjectsProjectIDConversations`**| List Project Conversations<br/> <br/> **Parameters :** <br />  - `int $projectID` (required) <br />   - `GetProjectsProjectIDConversationsQuery $query`<br />
**`getProjectsProjectIDCustomTools`**| List Project Custom Tools<br/> <br/> **Parameters :** <br />  - `int $projectID` (required) <br />
**`getProjectsProjectIDEmbeddings`**| Get Embeddings<br/> <br/> **Parameters :** <br />  - `int $projectID` (required) <br />
**`getProjectsProjectIDEmbeddingsIdEmbeddingId`**| Get Embedding By Id<br/> <br/> **Parameters :** <br />  - `int $projectID` (required) <br />   - `string $embeddingId` (required) <br />
**`getProjectsProjectIDEmbeddingsSourceSource`**| Get Embedding<br/> <br/> **Parameters :** <br />  - `int $projectID` (required) <br />   - `string $source` (required) <br />
**`getProjectsProjectIDEvalsDatasets`**| List Datasets<br/> <br/> **Parameters :** <br />  - `int $projectID` (required) <br />   - `GetProjectsProjectIDEvalsDatasetsQuery $query`<br />
**`getProjectsProjectIDEvalsDatasetsDatasetID`**| Get Dataset<br/> <br/> **Parameters :** <br />  - `int $projectID` (required) <br />   - `int $datasetID` (required) <br />
**`getProjectsProjectIDEvalsRuns`**| List Runs<br/> <br/> **Parameters :** <br />  - `int $projectID` (required) <br />   - `GetProjectsProjectIDEvalsRunsQuery $query`<br />
**`getProjectsProjectIDEvalsRunsRunID`**| Get Run<br/> <br/> **Parameters :** <br />  - `int $projectID` (required) <br />   - `int $runID` (required) <br />
**`getProjectsProjectIDGuardsDaily`**| Get Guard Daily<br/> <br/> **Parameters :** <br />  - `int $projectID` (required) <br />   - `GetProjectsProjectIDGuardsDailyQuery $query`<br />
**`getProjectsProjectIDGuardsEvents`**| Get Guard Events<br/> <br/> **Parameters :** <br />  - `int $projectID` (required) <br />   - `GetProjectsProjectIDGuardsEventsQuery $query`<br />
**`getProjectsProjectIDGuardsSummary`**| Get Guard Summary<br/> <br/> **Parameters :** <br />  - `int $projectID` (required) <br />
**`getProjectsProjectIDIngestBulk`**| List Bulk Ingest Jobs<br/> <br/> **Parameters :** <br />  - `int $projectID` (required) <br />   - `GetProjectsProjectIDIngestBulkQuery $query`<br />
**`getProjectsProjectIDLogs`**| Get Token Consumption<br/> <br/> **Parameters :** <br />  - `int $projectID` (required) <br />   - `GetProjectsProjectIDLogsQuery $query`<br />
**`getProjectsProjectIDLogsConversationChatId`**| Get Conversation Replay<br/> <br/> **Parameters :** <br />  - `int $projectID` (required) <br />   - `string $chatId` (required) <br />
**`getProjectsProjectIDMemoryBank`**| List Memory Bank<br/> <br/> **Parameters :** <br />  - `int $projectID` (required) <br />
**`getProjectsProjectIDMemoryBankPreview`**| Preview Memory Bank<br/> <br/> **Parameters :** <br />  - `int $projectID` (required) <br />
**`getProjectsProjectIDPrompts`**| List Prompt Versions<br/> <br/> **Parameters :** <br />  - `int $projectID` (required) <br />
**`getProjectsProjectIDPromptsVersionID`**| Get Prompt Version<br/> <br/> **Parameters :** <br />  - `int $projectID` (required) <br />   - `int $versionID` (required) <br />
**`getProjectsProjectIDReembed`**| Get Reembed Status<br/> <br/> **Parameters :** <br />  - `int $projectID` (required) <br />
**`getProjectsProjectIDRoutines`**| List Routines<br/> <br/> **Parameters :** <br />  - `int $projectID` (required) <br />
**`getProjectsProjectIDRoutinesRoutineIDHistory`**| Get Routine History<br/> <br/> **Parameters :** <br />  - `int $projectID` (required) <br />   - `int $routineID` (required) <br />   - `GetProjectsProjectIDRoutinesRoutineIDHistoryQuery $query`<br />
**`getProjectsProjectIDSecrets`**| List Project Secrets<br/> <br/> **Parameters :** <br />  - `int $projectID` (required) <br />
**`getProjectsProjectIDSyncStatus`**| Get Sync Status<br/> <br/> **Parameters :** <br />  - `int $projectID` (required) <br />
**`getProjectsProjectIDTokensDaily`**| Get Monthly Token Consumption<br/> <br/> **Parameters :** <br />  - `int $projectID` (required) <br />   - `GetProjectsProjectIDTokensDailyQuery $query`<br />
**`getProjectsProjectIDTools`**| Get Project Tools<br/> <br/> **Parameters :** <br />  - `int $projectID` (required) <br />
**`getProjectsProjectIDV1Models`**| Project List Models<br/> <br/> **Parameters :** <br />  - `int $projectID` (required) <br />
**`getProjectsProjectIDV1ModelsModelId`**| Project Retrieve Model<br/> <br/> **Parameters :** <br />  - `int $projectID` (required) <br />   - `string $modelId` (required) <br />
**`getProjectsProjectIDWidgets`**| List Widgets<br/> <br/> **Parameters :** <br />  - `int $projectID` (required) <br />
**`getProjectsProjectIDWidgetsWidgetID`**| Get Widget<br/> <br/> **Parameters :** <br />  - `int $projectID` (required) <br />   - `int $widgetID` (required) <br />
**`getSettings`**| Get Settings
**`getSettingsInfrastructure`**| Get Infrastructure Status
**`getSetup`**| Get Setup
**`getSpeechToText`**| List Speech To Text
**`getSpeechToTextModelId`**| Get Speech To Text<br/> <br/> **Parameters :** <br />  - `int $modelId` (required) <br />
**`getStatisticsDailyTokens`**| Get Daily Tokens<br/> <br/> **Parameters :** <br />  - `GetStatisticsDailyTokensQuery $query`<br />
**`getStatisticsSummary`**| Get Statistics Summary
**`getStatisticsTopLlms`**| Get Top Llms<br/> <br/> **Parameters :** <br />  - `GetStatisticsTopLlmsQuery $query`<br />
**`getStatisticsTopProjects`**| Get Top Projects By Tokens<br/> <br/> **Parameters :** <br />  - `GetStatisticsTopProjectsQuery $query`<br />
**`getStatisticsUsers`**| Get Top Users<br/> <br/> **Parameters :** <br />  - `GetStatisticsUsersQuery $query`<br />
**`getStatisticsUsersUserID`**| Get User Activity<br/> <br/> **Parameters :** <br />  - `int $userID` (required) <br />   - `GetStatisticsUsersUserIDQuery $query`<br />
**`getTeams`**| Get Teams<br/> <br/> **Parameters :** <br />  - `GetTeamsQuery $query`<br />
**`getTeamsTeamId`**| Get Team<br/> <br/> **Parameters :** <br />  - `int $teamId` (required) <br />
**`getTeamsTeamIdAnalytics`**| Get Team Analytics<br/> <br/> **Parameters :** <br />  - `int $teamId` (required) <br />   - `GetTeamsTeamIdAnalyticsQuery $query`<br />
**`getTeamsTeamIdBranding`**| Get Team Branding<br/> <br/> **Parameters :** <br />  - `int $teamId` (required) <br />
**`getTeamsTeamIdMembersBudgets`**| Get Team Member Budgets<br/> <br/> **Parameters :** <br />  - `int $teamId` (required) <br />
**`getTeamsTeamIdTransactions`**| Get Team Transactions<br/> <br/> **Parameters :** <br />  - `int $teamId` (required) <br />   - `GetTeamsTeamIdTransactionsQuery $query`<br />
**`getTemplates`**| List Templates<br/> <br/> **Parameters :** <br />  - `GetTemplatesQuery $query`<br />
**`getTemplatesTemplateID`**| Get Template<br/> <br/> **Parameters :** <br />  - `int $templateID` (required) <br />
**`getToolsAgents`**| Get Tools
**`getToolsClassifiers`**| List Classifiers
**`getToolsOpenaiCompatModelsLlmId`**| List Openai Compatible Models<br/> <br/> **Parameters :** <br />  - `int $llmId` (required) <br />
**`getUsers`**| Route Get Users<br/> <br/> **Parameters :** <br />  - `GetUsersQuery $query`<br />
**`getUsersUsername`**| Route Get User Details<br/> <br/> **Parameters :** <br />  - `string $username` (required) <br />
**`getUsersUsernameApikeys`**| Route List User Apikeys<br/> <br/> **Parameters :** <br />  - `string $username` (required) <br />
**`getUsersUsernameTeamBudgets`**| Route Get User Team Budgets<br/> <br/> **Parameters :** <br />  - `string $username` (required) <br />
**`getUsersUsernameTotpStatus`**| Totp Status<br/> <br/> **Parameters :** <br />  - `string $username` (required) <br />
**`getV1Models`**| List Models
**`getV1ModelsModelId`**| Retrieve Model<br/> <br/> **Parameters :** <br />  - `string $modelId` (required) <br />
**`getVersion`**| Get Version
**`getWebhooksWhatsapp`**| Verify Webhook<br/> <br/> **Parameters :** <br />  - `GetWebhooksWhatsappQuery $query`<br />
**`getWidgetChatJs`**| Serve Widget Js
**`getWidgetConfig`**| Widget Config
**`patchAdminRoutinesRoutineID`**| Admin Toggle Routine<br/> <br/> **Parameters :** <br />  - `int $routineID` (required) <br />   - `AdminRoutineToggleRequest $body` (required) <br />
**`patchClassifiersClassifierId`**| Update Classifier<br/> <br/> **Parameters :** <br />  - `int $classifierId` (required) <br />   - `ClassifierRegistryUpdate $body` (required) <br />
**`patchEmbeddingsEmbeddingId`**| Api Edit Embedding<br/> <br/> **Parameters :** <br />  - `int $embeddingId` (required) <br />   - `EmbeddingUpdate $body` (required) <br />
**`patchImageGeneratorsGeneratorId`**| Update Image Generator<br/> <br/> **Parameters :** <br />  - `int $generatorId` (required) <br />   - `ImageGeneratorModelUpdate $body` (required) <br />
**`patchLlmsLlmId`**| Api Edit Llm<br/> <br/> **Parameters :** <br />  - `int $llmId` (required) <br />   - `LLMUpdate $body` (required) <br />
**`patchProjectsProjectID`**| Route Edit Project<br/> <br/> **Parameters :** <br />  - `int $projectID` (required) <br />   - `ProjectModelUpdate $body` (required) <br />
**`patchProjectsProjectIDCommentsCommentID`**| Update Project Comment<br/> <br/> **Parameters :** <br />  - `int $projectID` (required) <br />   - `int $commentID` (required) <br />   - `ProjectCommentUpdate $body` (required) <br />
**`patchProjectsProjectIDCustomToolsToolName`**| Update Project Custom Tool<br/> <br/> **Parameters :** <br />  - `int $projectID` (required) <br />   - `string $toolName` (required) <br />   - `ProjectToolUpdate $body` (required) <br />
**`patchProjectsProjectIDEvalsDatasetsDatasetID`**| Update Dataset<br/> <br/> **Parameters :** <br />  - `int $projectID` (required) <br />   - `int $datasetID` (required) <br />   - `EvalDatasetUpdate $body` (required) <br />
**`patchProjectsProjectIDEvalsDatasetsDatasetIDCasesCaseID`**| Update Test Case<br/> <br/> **Parameters :** <br />  - `int $projectID` (required) <br />   - `int $datasetID` (required) <br />   - `int $caseID` (required) <br />   - `EvalTestCaseUpdate $body` (required) <br />
**`patchProjectsProjectIDRoutinesRoutineID`**| Update Routine<br/> <br/> **Parameters :** <br />  - `int $projectID` (required) <br />   - `int $routineID` (required) <br />   - `RoutineUpdate $body` (required) <br />
**`patchProjectsProjectIDSecretsSecretID`**| Update Project Secret<br/> <br/> **Parameters :** <br />  - `int $projectID` (required) <br />   - `int $secretID` (required) <br />   - `ProjectSecretUpdate $body` (required) <br />
**`patchProjectsProjectIDWidgetsWidgetID`**| Update Widget<br/> <br/> **Parameters :** <br />  - `int $projectID` (required) <br />   - `int $widgetID` (required) <br />   - `WidgetUpdate $body` (required) <br />
**`patchSettings`**| Patch Settings<br/> <br/> **Parameters :** <br />  - `SettingsUpdate $body` (required) <br />
**`patchSpeechToTextModelId`**| Update Speech To Text<br/> <br/> **Parameters :** <br />  - `int $modelId` (required) <br />   - `SpeechToTextModelUpdate $body` (required) <br />
**`patchTeamsTeamId`**| Update Team<br/> <br/> **Parameters :** <br />  - `int $teamId` (required) <br />   - `TeamModelUpdate $body` (required) <br />
**`patchTeamsTeamIdMembersUsernameBudget`**| Set Team Member Budget<br/> <br/> **Parameters :** <br />  - `int $teamId` (required) <br />   - `string $username` (required) <br />   - `TeamMemberBudgetUpdate $body` (required) <br />
**`patchTemplatesTemplateID`**| Update Template<br/> <br/> **Parameters :** <br />  - `int $templateID` (required) <br />   - `ProjectTemplateUpdate $body` (required) <br />
**`patchUsersUsername`**| Route Update User<br/> <br/> **Parameters :** <br />  - `string $username` (required) <br />   - `UserUpdate $body` (required) <br />
**`patchUsersUsernameApikeysKeyId`**| Route Update User Apikey<br/> <br/> **Parameters :** <br />  - `string $username` (required) <br />   - `int $keyId` (required) <br />   - `ApiKeyUpdate $body` (required) <br />
**`postAudioGeneratorTranscript`**| Route Generate Transcript<br/> <br/> **Parameters :** <br />  - `string $generator` (required) <br />
**`postAuthExitImpersonation`**| Exit Impersonation
**`postAuthImpersonateUsername`**| Impersonate User<br/> <br/> **Parameters :** <br />  - `string $username` (required) <br />
**`postAuthLogin`**| Login
**`postAuthLogout`**| Logout
**`postAuthSupportLogin`**| Support Login
**`postAuthVerifyTotp`**| Verify Totp<br/> <br/> **Parameters :** <br />  - `TOTPVerifyRequest $body` (required) <br />
**`postClassifiers`**| Create Classifier<br/> <br/> **Parameters :** <br />  - `ClassifierRegistryCreate $body` (required) <br />
**`postClassifiersClassifierIdTest`**| Test Classifier<br/> <br/> **Parameters :** <br />  - `int $classifierId` (required) <br />
**`postCronLogsRun`**| Run Crons
**`postEmbeddings`**| Api Create Embeddings<br/> <br/> **Parameters :** <br />  - `EmbeddingModel $body` (required) <br />
**`postExamplesExampleIDInstall`**| Install Example<br/> <br/> **Parameters :** <br />  - `string $exampleID` (required) <br />   - `ExampleInstallRequest $body` (required) <br />
**`postImageGeneratorGenerate`**| Route Generate Image<br/> <br/> **Parameters :** <br />  - `string $generator` (required) <br />   - `ImageModel $body` (required) <br />
**`postImageGenerators`**| Create Image Generator<br/> <br/> **Parameters :** <br />  - `ImageGeneratorModelCreate $body` (required) <br />
**`postInvitationsInvitationIdAccept`**| Accept Invitation<br/> <br/> **Parameters :** <br />  - `int $invitationId` (required) <br />
**`postInvitationsInvitationIdDecline`**| Decline Invitation<br/> <br/> **Parameters :** <br />  - `int $invitationId` (required) <br />
**`postInvitationsProjectsInvitationIdAccept`**| Accept Project Invitation<br/> <br/> **Parameters :** <br />  - `int $invitationId` (required) <br />
**`postInvitationsProjectsInvitationIdDecline`**| Decline Project Invitation<br/> <br/> **Parameters :** <br />  - `int $invitationId` (required) <br />
**`postLdap`**| Ldap Auth<br/> <br/> **Parameters :** <br />  - `UserLogin $body` (required) <br />
**`postLlms`**| Api Create Llm<br/> <br/> **Parameters :** <br />  - `LLMModel $body` (required) <br />
**`postLlmsTest`**| Api Test Llm<br/> <br/> **Parameters :** <br />  - `LLMTestRequest $body`<br />
**`postProjects`**| Route Create Project<br/> <br/> **Parameters :** <br />  - `ProjectModelCreate $body` (required) <br />
**`postProjectsProjectIDAttachments`**| Upload Chat Attachment<br/> <br/> **Parameters :** <br />  - `int $projectID` (required) <br />
**`postProjectsProjectIDChat`**| Chat Query<br/> <br/> **Parameters :** <br />  - `int $projectID` (required) <br />   - `ChatModel $body` (required) <br />
**`postProjectsProjectIDChatStop`**| Chat Stop<br/> <br/> **Parameters :** <br />  - `int $projectID` (required) <br />   - `ChatStopRequest $body` (required) <br />
**`postProjectsProjectIDClone`**| Clone Project<br/> <br/> **Parameters :** <br />  - `int $projectID` (required) <br />   - `ProjectCloneRequest $body` (required) <br />
**`postProjectsProjectIDComments`**| Create Project Comment<br/> <br/> **Parameters :** <br />  - `int $projectID` (required) <br />   - `ProjectCommentCreate $body` (required) <br />
**`postProjectsProjectIDEmbeddingsIngestText`**| Ingest Text<br/> <br/> **Parameters :** <br />  - `int $projectID` (required) <br />   - `TextIngestModel $body` (required) <br />
**`postProjectsProjectIDEmbeddingsIngestUpload`**| Ingest File<br/> <br/> **Parameters :** <br />  - `int $projectID` (required) <br />
**`postProjectsProjectIDEmbeddingsIngestUrl`**| Ingest Url<br/> <br/> **Parameters :** <br />  - `int $projectID` (required) <br />   - `URLIngestModel $body` (required) <br />
**`postProjectsProjectIDEmbeddingsReset`**| Reset Embeddings<br/> <br/> **Parameters :** <br />  - `int $projectID` (required) <br />
**`postProjectsProjectIDEmbeddingsSearch`**| Find Embedding<br/> <br/> **Parameters :** <br />  - `int $projectID` (required) <br />   - `FindModel $body` (required) <br />
**`postProjectsProjectIDEvalsDatasets`**| Create Dataset<br/> <br/> **Parameters :** <br />  - `int $projectID` (required) <br />   - `EvalDatasetCreate $body` (required) <br />
**`postProjectsProjectIDEvalsDatasetsDatasetIDCases`**| Add Test Case<br/> <br/> **Parameters :** <br />  - `int $projectID` (required) <br />   - `int $datasetID` (required) <br />   - `EvalTestCaseCreate $body` (required) <br />
**`postProjectsProjectIDEvalsRuns`**| Start Eval Run<br/> <br/> **Parameters :** <br />  - `int $projectID` (required) <br />   - `EvalRunCreate $body` (required) <br />
**`postProjectsProjectIDIngestBulk`**| Enqueue Bulk Ingest<br/> <br/> **Parameters :** <br />  - `int $projectID` (required) <br />   - `PostProjectsProjectIDIngestBulkQuery $query`<br />
**`postProjectsProjectIDInvitations`**| Send Project Invitation<br/> <br/> **Parameters :** <br />  - `int $projectID` (required) <br />   - `UsernameRequest $body` (required) <br />
**`postProjectsProjectIDMemoryBankClear`**| Clear Memory Bank<br/> <br/> **Parameters :** <br />  - `int $projectID` (required) <br />
**`postProjectsProjectIDMemorySearch`**| Memory Search Query<br/> <br/> **Parameters :** <br />  - `int $projectID` (required) <br />   - `MemorySearchRequest $body` (required) <br />
**`postProjectsProjectIDPromptsVersionIDActivate`**| Activate Prompt Version<br/> <br/> **Parameters :** <br />  - `int $projectID` (required) <br />   - `int $versionID` (required) <br />
**`postProjectsProjectIDPublishTemplate`**| Publish Template<br/> <br/> **Parameters :** <br />  - `int $projectID` (required) <br />   - `ProjectTemplatePublish $body` (required) <br />
**`postProjectsProjectIDQuestion`**| Question Query Endpoint<br/> <br/> **Parameters :** <br />  - `int $projectID` (required) <br />   - `ChatModel $body` (required) <br />
**`postProjectsProjectIDReembed`**| Enqueue Reembed Job<br/> <br/> **Parameters :** <br />  - `int $projectID` (required) <br />
**`postProjectsProjectIDRouterGenerate`**| Router Generate Workspace<br/> <br/> **Parameters :** <br />  - `int $projectID` (required) <br />   - `RouterGenerateRequest $body` (required) <br />
**`postProjectsProjectIDRouterNodeGenerate`**| Router Generate Node Blocks<br/> <br/> **Parameters :** <br />  - `int $projectID` (required) <br />   - `RouterNodeGenerateRequest $body` (required) <br />
**`postProjectsProjectIDRoutines`**| Create Routine<br/> <br/> **Parameters :** <br />  - `int $projectID` (required) <br />   - `RoutineCreate $body` (required) <br />
**`postProjectsProjectIDRoutinesRoutineIDFire`**| Fire Routine<br/> <br/> **Parameters :** <br />  - `int $projectID` (required) <br />   - `int $routineID` (required) <br />
**`postProjectsProjectIDSecrets`**| Create Project Secret<br/> <br/> **Parameters :** <br />  - `int $projectID` (required) <br />   - `ProjectSecretCreate $body` (required) <br />
**`postProjectsProjectIDSlackTest`**| Test Slack Connection<br/> <br/> **Parameters :** <br />  - `int $projectID` (required) <br />
**`postProjectsProjectIDSyncTrigger`**| Trigger Sync<br/> <br/> **Parameters :** <br />  - `int $projectID` (required) <br />
**`postProjectsProjectIDSystemPromptGenerate`**| Generate System Prompt Endpoint<br/> <br/> **Parameters :** <br />  - `int $projectID` (required) <br />   - `SystemPromptGenerateRequest $body` (required) <br />
**`postProjectsProjectIDV1ChatCompletions`**| Project Chat Completions<br/> <br/> **Parameters :** <br />  - `int $projectID` (required) <br />   - `OpenAIChatCompletionRequest $body` (required) <br />
**`postProjectsProjectIDWebhooksRotateSecret`**| Rotate Webhook Secret<br/> <br/> **Parameters :** <br />  - `int $projectID` (required) <br />
**`postProjectsProjectIDWebhooksTest`**| Test Webhook<br/> <br/> **Parameters :** <br />  - `int $projectID` (required) <br />
**`postProjectsProjectIDWhatsappTest`**| Test Whatsapp Connection<br/> <br/> **Parameters :** <br />  - `int $projectID` (required) <br />
**`postProjectsProjectIDWidgets`**| Create Widget<br/> <br/> **Parameters :** <br />  - `int $projectID` (required) <br />   - `WidgetCreate $body` (required) <br />
**`postProjectsProjectIDWidgetsWidgetIDContextSecret`**| Generate Widget Context Secret<br/> <br/> **Parameters :** <br />  - `int $projectID` (required) <br />   - `int $widgetID` (required) <br />
**`postProjectsProjectIDWidgetsWidgetIDRegenerateKey`**| Regenerate Widget Key<br/> <br/> **Parameters :** <br />  - `int $projectID` (required) <br />   - `int $widgetID` (required) <br />
**`postSearch`**| Smart Search<br/> <br/> **Parameters :** <br />  - `SearchRequest $body` (required) <br />
**`postSettingsDockerTest`**| Test Docker Connection<br/> <br/> **Parameters :** <br />  - `DockerTestRequest $body`<br />
**`postSettingsDoclingTest`**| Test Docling Connection<br/> <br/> **Parameters :** <br />  - `DoclingTestRequest $body`<br />
**`postSettingsE2bTest`**| Test E2B Connection<br/> <br/> **Parameters :** <br />  - `E2BTestRequest $body`<br />
**`postSettingsHealth`**| Run Health Check
**`postSettingsKubernetesTest`**| Test Kubernetes Connection<br/> <br/> **Parameters :** <br />  - `KubernetesTestRequest $body`<br />
**`postSettingsOtelTest`**| Test Otel Connection<br/> <br/> **Parameters :** <br />  - `OtelTestRequest $body`<br />
**`postSettingsRedisTest`**| Test Redis Connection<br/> <br/> **Parameters :** <br />  - `mixed $body`<br />
**`postSettingsS3Test`**| Test S3 Storage Connection<br/> <br/> **Parameters :** <br />  - `mixed $body`<br />
**`postSettingsVectordbBackendTest`**| Test Vectordb Connection<br/> <br/> **Parameters :** <br />  - `string $backend` (required) <br />   - `mixed $body`<br />
**`postSpeechToText`**| Create Speech To Text<br/> <br/> **Parameters :** <br />  - `SpeechToTextModelCreate $body` (required) <br />
**`postTeams`**| Create Team<br/> <br/> **Parameters :** <br />  - `TeamModelCreate $body` (required) <br />
**`postTeamsTeamIdInvitations`**| Send Team Invitation<br/> <br/> **Parameters :** <br />  - `int $teamId` (required) <br />   - `UsernameRequest $body` (required) <br />
**`postTemplatesTemplateIDInstantiate`**| Instantiate Template<br/> <br/> **Parameters :** <br />  - `int $templateID` (required) <br />   - `ProjectTemplateInstantiate $body` (required) <br />
**`postToolsClassifier`**| Classifier<br/> <br/> **Parameters :** <br />  - `ClassifierModel $body` (required) <br />
**`postToolsMcpProbe`**| Probe Mcp Server<br/> <br/> **Parameters :** <br />  - `MCPProbeRequest $body` (required) <br />
**`postToolsOllamaCloudEmbeddings`**| Get Ollama Cloud Embedding Models<br/> <br/> **Parameters :** <br />  - `OllamaCloudInstanceModel $body` (required) <br />
**`postToolsOllamaCloudModels`**| Get Ollama Cloud Models<br/> <br/> **Parameters :** <br />  - `OllamaCloudInstanceModel $body` (required) <br />
**`postToolsOllamaModels`**| Get Ollama Models<br/> <br/> **Parameters :** <br />  - `OllamaInstanceModel $body` (required) <br />
**`postToolsOllamaPull`**| Pull Ollama Model<br/> <br/> **Parameters :** <br />  - `OllamaModelPullRequest $body` (required) <br />
**`postToolsOpenaiCompatDiscover`**| Discover Openai Compatible Models<br/> <br/> **Parameters :** <br />  - `OpenAICompatDiscoverRequest $body` (required) <br />
**`postUsers`**| Route Create User<br/> <br/> **Parameters :** <br />  - `UserCreate $body` (required) <br />
**`postUsersUsernameApikeys`**| Route Create User Apikey<br/> <br/> **Parameters :** <br />  - `string $username` (required) <br />   - `ApiKeyCreate $body` (required) <br />
**`postUsersUsernameTotpDisable`**| Totp Disable<br/> <br/> **Parameters :** <br />  - `string $username` (required) <br />   - `TOTPDisableRequest $body` (required) <br />
**`postUsersUsernameTotpEnable`**| Totp Enable<br/> <br/> **Parameters :** <br />  - `string $username` (required) <br />   - `TOTPEnableRequest $body` (required) <br />
**`postUsersUsernameTotpSetup`**| Totp Setup<br/> <br/> **Parameters :** <br />  - `string $username` (required) <br />   - `TOTPSetupRequest $body` (required) <br />
**`postV1AudioTranscriptions`**| Openai Compatible Transcription<br/> <br/> **Parameters :** <br /><br />
**`postV1AudioTranslations`**| Openai Compatible Translation<br/> <br/> **Parameters :** <br /><br />
**`postV1ChatCompletions`**| Chat Completions<br/> <br/> **Parameters :** <br />  - `OpenAIChatCompletionRequest $body` (required) <br />
**`postV1Completions`**| Completions<br/> <br/> **Parameters :** <br />  - `OpenAICompletionRequest $body` (required) <br />
**`postV1Embeddings`**| Embeddings<br/> <br/> **Parameters :** <br />  - `OpenAIEmbeddingRequest $body` (required) <br />
**`postV1ImagesGenerations`**| Openai Compatible Generate<br/> <br/> **Parameters :** <br />  - `OpenAIImageGenerateRequest $body` (required) <br />
**`postV1Moderations`**| Moderations<br/> <br/> **Parameters :** <br />  - `OpenAIModerationRequest $body` (required) <br />
**`postWebhooksWhatsapp`**| Receive Webhook
**`postWidgetChat`**| Widget Chat<br/> <br/> **Parameters :** <br />  - `WidgetChatRequest $body` (required) <br />
**`putProjectsProjectIDCustomToolsToolNameEnabled`**| Set Project Custom Tool Enabled<br/> <br/> **Parameters :** <br />  - `int $projectID` (required) <br />   - `string $toolName` (required) <br />   - `BodyPutProjectsProjectIDCustomToolsToolNameEnabled $body` (required) <br />
**`putTeamsTeamIdAdminsUsername`**| Add Admin To Team<br/> <br/> **Parameters :** <br />  - `int $teamId` (required) <br />   - `string $username` (required) <br />
**`putTeamsTeamIdAudioGeneratorsGeneratorName`**| Add Audio Generator To Team<br/> <br/> **Parameters :** <br />  - `int $teamId` (required) <br />   - `string $generatorName` (required) <br />
**`putTeamsTeamIdEmbeddingsEmbeddingId`**| Add Embedding To Team<br/> <br/> **Parameters :** <br />  - `int $teamId` (required) <br />   - `int $embeddingId` (required) <br />
**`putTeamsTeamIdImageGeneratorsGeneratorName`**| Add Image Generator To Team<br/> <br/> **Parameters :** <br />  - `int $teamId` (required) <br />   - `string $generatorName` (required) <br />
**`putTeamsTeamIdLlmsLlmId`**| Add Llm To Team<br/> <br/> **Parameters :** <br />  - `int $teamId` (required) <br />   - `int $llmId` (required) <br />
**`putTeamsTeamIdProjectsProjectId`**| Add Project To Team<br/> <br/> **Parameters :** <br />  - `int $teamId` (required) <br />   - `int $projectId` (required) <br />
**`putTeamsTeamIdUsersUsername`**| Add User To Team<br/> <br/> **Parameters :** <br />  - `int $teamId` (required) <br />   - `string $username` (required) <br />

## Development

Code for the endpoints is generated automatically using a custom version of [OpenAPI Generator](https://github.com/openapitools/openapi-generator).

To regenerate endpoints, use the docker laucher packaged in `vendor/bin`:

```bash
./vendor/bin/openapi-codegen-php-client.sh
```

The custom generator will be built and launched using the following Open API spec file : `resources/api/api-spec.json`.

You can then commit and PR the modified api-spec file and your endpoints code files.

The client class and readme may be changed in some cases. Do not forget to include them in your commit!

### Client per tag

The client is split into one class per OpenAPI tag (e.g. a `Widgets` tag produces
`WidgetsClient`/`WidgetsClientInterface`/`ApiWidgetsClientMock`), plus a generated
`AbstractClientBuilder` with one accessor method per tag. Your project's own
`ClientBuilder` (extending `AbstractClientBuilder`) needs one
`createXxxClient()`/`createXxxMock()` pair per tag — see `AbstractClientBuilder.php`
for the exact hook names to implement after regenerating.
