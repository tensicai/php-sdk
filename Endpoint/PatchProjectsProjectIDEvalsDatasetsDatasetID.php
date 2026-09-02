<?php

declare(strict_types=1);

namespace TensicAI\SDK\Endpoint;

use EventEngine\Data\SpecialKeySupport;
use TeamBlue\OpenApi\Codegen\Endpoint\Endpoint;
use TeamBlue\OpenApi\Codegen\Endpoint\EndpointLogic;
use TeamBlue\OpenApi\Codegen\Endpoint\SpecialKeySupportLogic;
use TensicAI\SDK\Model\EvalDatasetUpdate;

class PatchProjectsProjectIDEvalsDatasetsDatasetID implements Endpoint, SpecialKeySupport
{
    use EndpointLogic;
    use SpecialKeySupportLogic;

    private string $method = 'PATCH';
    private string $uri = '/projects/{projectID}/evals/datasets/{datasetID}';
    private int $projectID;
    private int $datasetID;
    private EvalDatasetUpdate $body;

    public function projectID(): int
    {
        return $this->projectID;
    }

    public function datasetID(): int
    {
        return $this->datasetID;
    }

    /** @return array<string,mixed> */
    public function toRequestParameters(): array
    {
        return [
            'projectID' => $this->projectID,
            'datasetID' => $this->datasetID,
            'body' => $this->body,
        ];
    }

    /** @return array<string,string> */
    public function keyMapping(): array
    {
        return [
            'projectID' => 'projectID',
            'datasetID' => 'datasetID',
        ];
    }
}
