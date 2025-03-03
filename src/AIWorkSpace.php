<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AIWorkSpace\V20210204;

use AlibabaCloud\Dara\Models\RuntimeOptions;
use AlibabaCloud\Dara\Url;
use AlibabaCloud\SDK\AIWorkSpace\V20210204\Models\AcceptDataworksEventRequest;
use AlibabaCloud\SDK\AIWorkSpace\V20210204\Models\AcceptDataworksEventResponse;
use AlibabaCloud\SDK\AIWorkSpace\V20210204\Models\AddImageLabelsRequest;
use AlibabaCloud\SDK\AIWorkSpace\V20210204\Models\AddImageLabelsResponse;
use AlibabaCloud\SDK\AIWorkSpace\V20210204\Models\AddImageRequest;
use AlibabaCloud\SDK\AIWorkSpace\V20210204\Models\AddImageResponse;
use AlibabaCloud\SDK\AIWorkSpace\V20210204\Models\AddMemberRoleResponse;
use AlibabaCloud\SDK\AIWorkSpace\V20210204\Models\ChangeResourceGroupRequest;
use AlibabaCloud\SDK\AIWorkSpace\V20210204\Models\ChangeResourceGroupResponse;
use AlibabaCloud\SDK\AIWorkSpace\V20210204\Models\CreateCodeSourceRequest;
use AlibabaCloud\SDK\AIWorkSpace\V20210204\Models\CreateCodeSourceResponse;
use AlibabaCloud\SDK\AIWorkSpace\V20210204\Models\CreateDatasetFileMetasRequest;
use AlibabaCloud\SDK\AIWorkSpace\V20210204\Models\CreateDatasetFileMetasResponse;
use AlibabaCloud\SDK\AIWorkSpace\V20210204\Models\CreateDatasetJobConfigRequest;
use AlibabaCloud\SDK\AIWorkSpace\V20210204\Models\CreateDatasetJobConfigResponse;
use AlibabaCloud\SDK\AIWorkSpace\V20210204\Models\CreateDatasetJobRequest;
use AlibabaCloud\SDK\AIWorkSpace\V20210204\Models\CreateDatasetJobResponse;
use AlibabaCloud\SDK\AIWorkSpace\V20210204\Models\CreateDatasetLabelsRequest;
use AlibabaCloud\SDK\AIWorkSpace\V20210204\Models\CreateDatasetLabelsResponse;
use AlibabaCloud\SDK\AIWorkSpace\V20210204\Models\CreateDatasetRequest;
use AlibabaCloud\SDK\AIWorkSpace\V20210204\Models\CreateDatasetResponse;
use AlibabaCloud\SDK\AIWorkSpace\V20210204\Models\CreateDatasetVersionLabelsRequest;
use AlibabaCloud\SDK\AIWorkSpace\V20210204\Models\CreateDatasetVersionLabelsResponse;
use AlibabaCloud\SDK\AIWorkSpace\V20210204\Models\CreateDatasetVersionRequest;
use AlibabaCloud\SDK\AIWorkSpace\V20210204\Models\CreateDatasetVersionResponse;
use AlibabaCloud\SDK\AIWorkSpace\V20210204\Models\CreateExperimentRequest;
use AlibabaCloud\SDK\AIWorkSpace\V20210204\Models\CreateExperimentResponse;
use AlibabaCloud\SDK\AIWorkSpace\V20210204\Models\CreateMemberRequest;
use AlibabaCloud\SDK\AIWorkSpace\V20210204\Models\CreateMemberResponse;
use AlibabaCloud\SDK\AIWorkSpace\V20210204\Models\CreateModelLabelsRequest;
use AlibabaCloud\SDK\AIWorkSpace\V20210204\Models\CreateModelLabelsResponse;
use AlibabaCloud\SDK\AIWorkSpace\V20210204\Models\CreateModelRequest;
use AlibabaCloud\SDK\AIWorkSpace\V20210204\Models\CreateModelResponse;
use AlibabaCloud\SDK\AIWorkSpace\V20210204\Models\CreateModelVersionLabelsRequest;
use AlibabaCloud\SDK\AIWorkSpace\V20210204\Models\CreateModelVersionLabelsResponse;
use AlibabaCloud\SDK\AIWorkSpace\V20210204\Models\CreateModelVersionRequest;
use AlibabaCloud\SDK\AIWorkSpace\V20210204\Models\CreateModelVersionResponse;
use AlibabaCloud\SDK\AIWorkSpace\V20210204\Models\CreateProductOrdersRequest;
use AlibabaCloud\SDK\AIWorkSpace\V20210204\Models\CreateProductOrdersResponse;
use AlibabaCloud\SDK\AIWorkSpace\V20210204\Models\CreateRunRequest;
use AlibabaCloud\SDK\AIWorkSpace\V20210204\Models\CreateRunResponse;
use AlibabaCloud\SDK\AIWorkSpace\V20210204\Models\CreateWorkspaceRequest;
use AlibabaCloud\SDK\AIWorkSpace\V20210204\Models\CreateWorkspaceResourceRequest;
use AlibabaCloud\SDK\AIWorkSpace\V20210204\Models\CreateWorkspaceResourceResponse;
use AlibabaCloud\SDK\AIWorkSpace\V20210204\Models\CreateWorkspaceResponse;
use AlibabaCloud\SDK\AIWorkSpace\V20210204\Models\DeleteCodeSourceResponse;
use AlibabaCloud\SDK\AIWorkSpace\V20210204\Models\DeleteDatasetFileMetasRequest;
use AlibabaCloud\SDK\AIWorkSpace\V20210204\Models\DeleteDatasetFileMetasResponse;
use AlibabaCloud\SDK\AIWorkSpace\V20210204\Models\DeleteDatasetJobConfigRequest;
use AlibabaCloud\SDK\AIWorkSpace\V20210204\Models\DeleteDatasetJobConfigResponse;
use AlibabaCloud\SDK\AIWorkSpace\V20210204\Models\DeleteDatasetJobResponse;
use AlibabaCloud\SDK\AIWorkSpace\V20210204\Models\DeleteDatasetLabelsRequest;
use AlibabaCloud\SDK\AIWorkSpace\V20210204\Models\DeleteDatasetLabelsResponse;
use AlibabaCloud\SDK\AIWorkSpace\V20210204\Models\DeleteDatasetResponse;
use AlibabaCloud\SDK\AIWorkSpace\V20210204\Models\DeleteDatasetVersionLabelsRequest;
use AlibabaCloud\SDK\AIWorkSpace\V20210204\Models\DeleteDatasetVersionLabelsResponse;
use AlibabaCloud\SDK\AIWorkSpace\V20210204\Models\DeleteDatasetVersionResponse;
use AlibabaCloud\SDK\AIWorkSpace\V20210204\Models\DeleteExperimentLabelResponse;
use AlibabaCloud\SDK\AIWorkSpace\V20210204\Models\DeleteExperimentResponse;
use AlibabaCloud\SDK\AIWorkSpace\V20210204\Models\DeleteMembersRequest;
use AlibabaCloud\SDK\AIWorkSpace\V20210204\Models\DeleteMembersResponse;
use AlibabaCloud\SDK\AIWorkSpace\V20210204\Models\DeleteModelLabelsRequest;
use AlibabaCloud\SDK\AIWorkSpace\V20210204\Models\DeleteModelLabelsResponse;
use AlibabaCloud\SDK\AIWorkSpace\V20210204\Models\DeleteModelResponse;
use AlibabaCloud\SDK\AIWorkSpace\V20210204\Models\DeleteModelVersionLabelsRequest;
use AlibabaCloud\SDK\AIWorkSpace\V20210204\Models\DeleteModelVersionLabelsResponse;
use AlibabaCloud\SDK\AIWorkSpace\V20210204\Models\DeleteModelVersionResponse;
use AlibabaCloud\SDK\AIWorkSpace\V20210204\Models\DeleteRunLabelResponse;
use AlibabaCloud\SDK\AIWorkSpace\V20210204\Models\DeleteRunResponse;
use AlibabaCloud\SDK\AIWorkSpace\V20210204\Models\DeleteWorkspaceResourceRequest;
use AlibabaCloud\SDK\AIWorkSpace\V20210204\Models\DeleteWorkspaceResourceResponse;
use AlibabaCloud\SDK\AIWorkSpace\V20210204\Models\DeleteWorkspaceResponse;
use AlibabaCloud\SDK\AIWorkSpace\V20210204\Models\GetCodeSourceResponse;
use AlibabaCloud\SDK\AIWorkSpace\V20210204\Models\GetDatasetFileMetaRequest;
use AlibabaCloud\SDK\AIWorkSpace\V20210204\Models\GetDatasetFileMetaResponse;
use AlibabaCloud\SDK\AIWorkSpace\V20210204\Models\GetDatasetJobConfigRequest;
use AlibabaCloud\SDK\AIWorkSpace\V20210204\Models\GetDatasetJobConfigResponse;
use AlibabaCloud\SDK\AIWorkSpace\V20210204\Models\GetDatasetJobRequest;
use AlibabaCloud\SDK\AIWorkSpace\V20210204\Models\GetDatasetJobResponse;
use AlibabaCloud\SDK\AIWorkSpace\V20210204\Models\GetDatasetResponse;
use AlibabaCloud\SDK\AIWorkSpace\V20210204\Models\GetDatasetVersionResponse;
use AlibabaCloud\SDK\AIWorkSpace\V20210204\Models\GetDefaultWorkspaceRequest;
use AlibabaCloud\SDK\AIWorkSpace\V20210204\Models\GetDefaultWorkspaceResponse;
use AlibabaCloud\SDK\AIWorkSpace\V20210204\Models\GetExperimentRequest;
use AlibabaCloud\SDK\AIWorkSpace\V20210204\Models\GetExperimentResponse;
use AlibabaCloud\SDK\AIWorkSpace\V20210204\Models\GetImageRequest;
use AlibabaCloud\SDK\AIWorkSpace\V20210204\Models\GetImageResponse;
use AlibabaCloud\SDK\AIWorkSpace\V20210204\Models\GetMemberRequest;
use AlibabaCloud\SDK\AIWorkSpace\V20210204\Models\GetMemberResponse;
use AlibabaCloud\SDK\AIWorkSpace\V20210204\Models\GetModelResponse;
use AlibabaCloud\SDK\AIWorkSpace\V20210204\Models\GetModelVersionResponse;
use AlibabaCloud\SDK\AIWorkSpace\V20210204\Models\GetPermissionRequest;
use AlibabaCloud\SDK\AIWorkSpace\V20210204\Models\GetPermissionResponse;
use AlibabaCloud\SDK\AIWorkSpace\V20210204\Models\GetPermissionShrinkRequest;
use AlibabaCloud\SDK\AIWorkSpace\V20210204\Models\GetRunRequest;
use AlibabaCloud\SDK\AIWorkSpace\V20210204\Models\GetRunResponse;
use AlibabaCloud\SDK\AIWorkSpace\V20210204\Models\GetWorkspaceRequest;
use AlibabaCloud\SDK\AIWorkSpace\V20210204\Models\GetWorkspaceResponse;
use AlibabaCloud\SDK\AIWorkSpace\V20210204\Models\ListCodeSourcesRequest;
use AlibabaCloud\SDK\AIWorkSpace\V20210204\Models\ListCodeSourcesResponse;
use AlibabaCloud\SDK\AIWorkSpace\V20210204\Models\ListDatasetFileMetasRequest;
use AlibabaCloud\SDK\AIWorkSpace\V20210204\Models\ListDatasetFileMetasResponse;
use AlibabaCloud\SDK\AIWorkSpace\V20210204\Models\ListDatasetJobConfigsRequest;
use AlibabaCloud\SDK\AIWorkSpace\V20210204\Models\ListDatasetJobConfigsResponse;
use AlibabaCloud\SDK\AIWorkSpace\V20210204\Models\ListDatasetJobsRequest;
use AlibabaCloud\SDK\AIWorkSpace\V20210204\Models\ListDatasetJobsResponse;
use AlibabaCloud\SDK\AIWorkSpace\V20210204\Models\ListDatasetsRequest;
use AlibabaCloud\SDK\AIWorkSpace\V20210204\Models\ListDatasetsResponse;
use AlibabaCloud\SDK\AIWorkSpace\V20210204\Models\ListDatasetVersionsRequest;
use AlibabaCloud\SDK\AIWorkSpace\V20210204\Models\ListDatasetVersionsResponse;
use AlibabaCloud\SDK\AIWorkSpace\V20210204\Models\ListExperimentRequest;
use AlibabaCloud\SDK\AIWorkSpace\V20210204\Models\ListExperimentResponse;
use AlibabaCloud\SDK\AIWorkSpace\V20210204\Models\ListExperimentShrinkRequest;
use AlibabaCloud\SDK\AIWorkSpace\V20210204\Models\ListImageLabelsRequest;
use AlibabaCloud\SDK\AIWorkSpace\V20210204\Models\ListImageLabelsResponse;
use AlibabaCloud\SDK\AIWorkSpace\V20210204\Models\ListImagesRequest;
use AlibabaCloud\SDK\AIWorkSpace\V20210204\Models\ListImagesResponse;
use AlibabaCloud\SDK\AIWorkSpace\V20210204\Models\ListMembersRequest;
use AlibabaCloud\SDK\AIWorkSpace\V20210204\Models\ListMembersResponse;
use AlibabaCloud\SDK\AIWorkSpace\V20210204\Models\ListModelsRequest;
use AlibabaCloud\SDK\AIWorkSpace\V20210204\Models\ListModelsResponse;
use AlibabaCloud\SDK\AIWorkSpace\V20210204\Models\ListModelVersionsRequest;
use AlibabaCloud\SDK\AIWorkSpace\V20210204\Models\ListModelVersionsResponse;
use AlibabaCloud\SDK\AIWorkSpace\V20210204\Models\ListPermissionsResponse;
use AlibabaCloud\SDK\AIWorkSpace\V20210204\Models\ListProductsRequest;
use AlibabaCloud\SDK\AIWorkSpace\V20210204\Models\ListProductsResponse;
use AlibabaCloud\SDK\AIWorkSpace\V20210204\Models\ListQuotasRequest;
use AlibabaCloud\SDK\AIWorkSpace\V20210204\Models\ListQuotasResponse;
use AlibabaCloud\SDK\AIWorkSpace\V20210204\Models\ListResourcesRequest;
use AlibabaCloud\SDK\AIWorkSpace\V20210204\Models\ListResourcesResponse;
use AlibabaCloud\SDK\AIWorkSpace\V20210204\Models\ListRunMetricsRequest;
use AlibabaCloud\SDK\AIWorkSpace\V20210204\Models\ListRunMetricsResponse;
use AlibabaCloud\SDK\AIWorkSpace\V20210204\Models\ListRunsRequest;
use AlibabaCloud\SDK\AIWorkSpace\V20210204\Models\ListRunsResponse;
use AlibabaCloud\SDK\AIWorkSpace\V20210204\Models\ListWorkspacesRequest;
use AlibabaCloud\SDK\AIWorkSpace\V20210204\Models\ListWorkspacesResponse;
use AlibabaCloud\SDK\AIWorkSpace\V20210204\Models\ListWorkspaceUsersRequest;
use AlibabaCloud\SDK\AIWorkSpace\V20210204\Models\ListWorkspaceUsersResponse;
use AlibabaCloud\SDK\AIWorkSpace\V20210204\Models\LogRunMetricsRequest;
use AlibabaCloud\SDK\AIWorkSpace\V20210204\Models\LogRunMetricsResponse;
use AlibabaCloud\SDK\AIWorkSpace\V20210204\Models\PublishCodeSourceResponse;
use AlibabaCloud\SDK\AIWorkSpace\V20210204\Models\PublishDatasetResponse;
use AlibabaCloud\SDK\AIWorkSpace\V20210204\Models\PublishImageResponse;
use AlibabaCloud\SDK\AIWorkSpace\V20210204\Models\RemoveImageLabelsResponse;
use AlibabaCloud\SDK\AIWorkSpace\V20210204\Models\RemoveImageResponse;
use AlibabaCloud\SDK\AIWorkSpace\V20210204\Models\RemoveMemberRoleResponse;
use AlibabaCloud\SDK\AIWorkSpace\V20210204\Models\SetExperimentLabelsRequest;
use AlibabaCloud\SDK\AIWorkSpace\V20210204\Models\SetExperimentLabelsResponse;
use AlibabaCloud\SDK\AIWorkSpace\V20210204\Models\StopDatasetJobRequest;
use AlibabaCloud\SDK\AIWorkSpace\V20210204\Models\StopDatasetJobResponse;
use AlibabaCloud\SDK\AIWorkSpace\V20210204\Models\UpdateCodeSourceRequest;
use AlibabaCloud\SDK\AIWorkSpace\V20210204\Models\UpdateCodeSourceResponse;
use AlibabaCloud\SDK\AIWorkSpace\V20210204\Models\UpdateDatasetFileMetasRequest;
use AlibabaCloud\SDK\AIWorkSpace\V20210204\Models\UpdateDatasetFileMetasResponse;
use AlibabaCloud\SDK\AIWorkSpace\V20210204\Models\UpdateDatasetJobConfigRequest;
use AlibabaCloud\SDK\AIWorkSpace\V20210204\Models\UpdateDatasetJobConfigResponse;
use AlibabaCloud\SDK\AIWorkSpace\V20210204\Models\UpdateDatasetJobRequest;
use AlibabaCloud\SDK\AIWorkSpace\V20210204\Models\UpdateDatasetJobResponse;
use AlibabaCloud\SDK\AIWorkSpace\V20210204\Models\UpdateDatasetRequest;
use AlibabaCloud\SDK\AIWorkSpace\V20210204\Models\UpdateDatasetResponse;
use AlibabaCloud\SDK\AIWorkSpace\V20210204\Models\UpdateDatasetVersionRequest;
use AlibabaCloud\SDK\AIWorkSpace\V20210204\Models\UpdateDatasetVersionResponse;
use AlibabaCloud\SDK\AIWorkSpace\V20210204\Models\UpdateDefaultWorkspaceRequest;
use AlibabaCloud\SDK\AIWorkSpace\V20210204\Models\UpdateDefaultWorkspaceResponse;
use AlibabaCloud\SDK\AIWorkSpace\V20210204\Models\UpdateExperimentRequest;
use AlibabaCloud\SDK\AIWorkSpace\V20210204\Models\UpdateExperimentResponse;
use AlibabaCloud\SDK\AIWorkSpace\V20210204\Models\UpdateModelRequest;
use AlibabaCloud\SDK\AIWorkSpace\V20210204\Models\UpdateModelResponse;
use AlibabaCloud\SDK\AIWorkSpace\V20210204\Models\UpdateModelVersionRequest;
use AlibabaCloud\SDK\AIWorkSpace\V20210204\Models\UpdateModelVersionResponse;
use AlibabaCloud\SDK\AIWorkSpace\V20210204\Models\UpdateRunRequest;
use AlibabaCloud\SDK\AIWorkSpace\V20210204\Models\UpdateRunResponse;
use AlibabaCloud\SDK\AIWorkSpace\V20210204\Models\UpdateWorkspaceRequest;
use AlibabaCloud\SDK\AIWorkSpace\V20210204\Models\UpdateWorkspaceResourceRequest;
use AlibabaCloud\SDK\AIWorkSpace\V20210204\Models\UpdateWorkspaceResourceResponse;
use AlibabaCloud\SDK\AIWorkSpace\V20210204\Models\UpdateWorkspaceResponse;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;
use Darabonba\OpenApi\Utils;

class AIWorkSpace extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = '';
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint('aiworkspace', $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
    }

    /**
     * @param string   $productId
     * @param string   $regionId
     * @param string   $endpointRule
     * @param string   $network
     * @param string   $suffix
     * @param string[] $endpointMap
     * @param string   $endpoint
     *
     * @return string
     */
    public function getEndpoint($productId, $regionId, $endpointRule, $network, $suffix, $endpointMap, $endpoint)
    {
        if (null !== $endpoint) {
            return $endpoint;
        }

        if (null !== $endpointMap && null !== @$endpointMap[$regionId]) {
            return @$endpointMap[$regionId];
        }

        return Utils::getEndpointRules($productId, $regionId, $endpointRule, $network, $suffix);
    }

    /**
     * 接受并处理Dataworks发送的事件.
     *
     * @param request - AcceptDataworksEventRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns AcceptDataworksEventResponse
     *
     * @param AcceptDataworksEventRequest $request
     * @param string[]                    $headers
     * @param RuntimeOptions              $runtime
     *
     * @return AcceptDataworksEventResponse
     */
    public function acceptDataworksEventWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->data) {
            @$body['Data'] = $request->data;
        }

        if (null !== $request->messageId) {
            @$body['MessageId'] = $request->messageId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'AcceptDataworksEvent',
            'version'     => '2021-02-04',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v1/workspaces/action/acceptdataworksevent',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return AcceptDataworksEventResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return AcceptDataworksEventResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 接受并处理Dataworks发送的事件.
     *
     * @param request - AcceptDataworksEventRequest
     * @returns AcceptDataworksEventResponse
     *
     * @param AcceptDataworksEventRequest $request
     *
     * @return AcceptDataworksEventResponse
     */
    public function acceptDataworksEvent($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->acceptDataworksEventWithOptions($request, $headers, $runtime);
    }

    /**
     * 增加 Image.
     *
     * @param request - AddImageRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns AddImageResponse
     *
     * @param AddImageRequest $request
     * @param string[]        $headers
     * @param RuntimeOptions  $runtime
     *
     * @return AddImageResponse
     */
    public function addImageWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->accessibility) {
            @$body['Accessibility'] = $request->accessibility;
        }

        if (null !== $request->description) {
            @$body['Description'] = $request->description;
        }

        if (null !== $request->imageId) {
            @$body['ImageId'] = $request->imageId;
        }

        if (null !== $request->imageUri) {
            @$body['ImageUri'] = $request->imageUri;
        }

        if (null !== $request->labels) {
            @$body['Labels'] = $request->labels;
        }

        if (null !== $request->name) {
            @$body['Name'] = $request->name;
        }

        if (null !== $request->size) {
            @$body['Size'] = $request->size;
        }

        if (null !== $request->workspaceId) {
            @$body['WorkspaceId'] = $request->workspaceId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'AddImage',
            'version'     => '2021-02-04',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v1/images',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return AddImageResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return AddImageResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 增加 Image.
     *
     * @param request - AddImageRequest
     * @returns AddImageResponse
     *
     * @param AddImageRequest $request
     *
     * @return AddImageResponse
     */
    public function addImage($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->addImageWithOptions($request, $headers, $runtime);
    }

    /**
     * 增加 Image 的标签.
     *
     * @param request - AddImageLabelsRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns AddImageLabelsResponse
     *
     * @param string                $ImageId
     * @param AddImageLabelsRequest $request
     * @param string[]              $headers
     * @param RuntimeOptions        $runtime
     *
     * @return AddImageLabelsResponse
     */
    public function addImageLabelsWithOptions($ImageId, $request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->labels) {
            @$body['Labels'] = $request->labels;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'AddImageLabels',
            'version'     => '2021-02-04',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v1/images/' . Url::percentEncode($ImageId) . '/labels',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return AddImageLabelsResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return AddImageLabelsResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 增加 Image 的标签.
     *
     * @param request - AddImageLabelsRequest
     * @returns AddImageLabelsResponse
     *
     * @param string                $ImageId
     * @param AddImageLabelsRequest $request
     *
     * @return AddImageLabelsResponse
     */
    public function addImageLabels($ImageId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->addImageLabelsWithOptions($ImageId, $request, $headers, $runtime);
    }

    /**
     * 增加成员角色.
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns AddMemberRoleResponse
     *
     * @param string         $WorkspaceId
     * @param string         $MemberId
     * @param string         $RoleName
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return AddMemberRoleResponse
     */
    public function addMemberRoleWithOptions($WorkspaceId, $MemberId, $RoleName, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'AddMemberRole',
            'version'     => '2021-02-04',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v1/workspaces/' . Url::percentEncode($WorkspaceId) . '/members/' . Url::percentEncode($MemberId) . '/roles/' . Url::percentEncode($RoleName) . '',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return AddMemberRoleResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return AddMemberRoleResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 增加成员角色.
     *
     * @returns AddMemberRoleResponse
     *
     * @param string $WorkspaceId
     * @param string $MemberId
     * @param string $RoleName
     *
     * @return AddMemberRoleResponse
     */
    public function addMemberRole($WorkspaceId, $MemberId, $RoleName)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->addMemberRoleWithOptions($WorkspaceId, $MemberId, $RoleName, $headers, $runtime);
    }

    /**
     * 更改资源组.
     *
     * @param request - ChangeResourceGroupRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns ChangeResourceGroupResponse
     *
     * @param ChangeResourceGroupRequest $request
     * @param string[]                   $headers
     * @param RuntimeOptions             $runtime
     *
     * @return ChangeResourceGroupResponse
     */
    public function changeResourceGroupWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->newResourceGroupId) {
            @$body['NewResourceGroupId'] = $request->newResourceGroupId;
        }

        if (null !== $request->resourceId) {
            @$body['ResourceId'] = $request->resourceId;
        }

        if (null !== $request->resourceType) {
            @$body['ResourceType'] = $request->resourceType;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'ChangeResourceGroup',
            'version'     => '2021-02-04',
            'protocol'    => 'HTTPS',
            'pathname'    => '/resourcegroups/action/changeresourcegroup',
            'method'      => 'PUT',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return ChangeResourceGroupResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ChangeResourceGroupResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 更改资源组.
     *
     * @param request - ChangeResourceGroupRequest
     * @returns ChangeResourceGroupResponse
     *
     * @param ChangeResourceGroupRequest $request
     *
     * @return ChangeResourceGroupResponse
     */
    public function changeResourceGroup($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->changeResourceGroupWithOptions($request, $headers, $runtime);
    }

    /**
     * 创建一个代码源配置.
     *
     * @param request - CreateCodeSourceRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns CreateCodeSourceResponse
     *
     * @param CreateCodeSourceRequest $request
     * @param string[]                $headers
     * @param RuntimeOptions          $runtime
     *
     * @return CreateCodeSourceResponse
     */
    public function createCodeSourceWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->accessibility) {
            @$body['Accessibility'] = $request->accessibility;
        }

        if (null !== $request->codeBranch) {
            @$body['CodeBranch'] = $request->codeBranch;
        }

        if (null !== $request->codeCommit) {
            @$body['CodeCommit'] = $request->codeCommit;
        }

        if (null !== $request->codeRepo) {
            @$body['CodeRepo'] = $request->codeRepo;
        }

        if (null !== $request->codeRepoAccessToken) {
            @$body['CodeRepoAccessToken'] = $request->codeRepoAccessToken;
        }

        if (null !== $request->codeRepoUserName) {
            @$body['CodeRepoUserName'] = $request->codeRepoUserName;
        }

        if (null !== $request->description) {
            @$body['Description'] = $request->description;
        }

        if (null !== $request->displayName) {
            @$body['DisplayName'] = $request->displayName;
        }

        if (null !== $request->mountPath) {
            @$body['MountPath'] = $request->mountPath;
        }

        if (null !== $request->workspaceId) {
            @$body['WorkspaceId'] = $request->workspaceId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CreateCodeSource',
            'version'     => '2021-02-04',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v1/codesources',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return CreateCodeSourceResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return CreateCodeSourceResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 创建一个代码源配置.
     *
     * @param request - CreateCodeSourceRequest
     * @returns CreateCodeSourceResponse
     *
     * @param CreateCodeSourceRequest $request
     *
     * @return CreateCodeSourceResponse
     */
    public function createCodeSource($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createCodeSourceWithOptions($request, $headers, $runtime);
    }

    /**
     * 创建数据集.
     *
     * @param request - CreateDatasetRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns CreateDatasetResponse
     *
     * @param CreateDatasetRequest $request
     * @param string[]             $headers
     * @param RuntimeOptions       $runtime
     *
     * @return CreateDatasetResponse
     */
    public function createDatasetWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->accessibility) {
            @$body['Accessibility'] = $request->accessibility;
        }

        if (null !== $request->dataCount) {
            @$body['DataCount'] = $request->dataCount;
        }

        if (null !== $request->dataSize) {
            @$body['DataSize'] = $request->dataSize;
        }

        if (null !== $request->dataSourceType) {
            @$body['DataSourceType'] = $request->dataSourceType;
        }

        if (null !== $request->dataType) {
            @$body['DataType'] = $request->dataType;
        }

        if (null !== $request->description) {
            @$body['Description'] = $request->description;
        }

        if (null !== $request->importInfo) {
            @$body['ImportInfo'] = $request->importInfo;
        }

        if (null !== $request->labels) {
            @$body['Labels'] = $request->labels;
        }

        if (null !== $request->mountAccessReadWriteRoleIdList) {
            @$body['MountAccessReadWriteRoleIdList'] = $request->mountAccessReadWriteRoleIdList;
        }

        if (null !== $request->name) {
            @$body['Name'] = $request->name;
        }

        if (null !== $request->options) {
            @$body['Options'] = $request->options;
        }

        if (null !== $request->property) {
            @$body['Property'] = $request->property;
        }

        if (null !== $request->provider) {
            @$body['Provider'] = $request->provider;
        }

        if (null !== $request->providerType) {
            @$body['ProviderType'] = $request->providerType;
        }

        if (null !== $request->sourceDatasetId) {
            @$body['SourceDatasetId'] = $request->sourceDatasetId;
        }

        if (null !== $request->sourceDatasetVersion) {
            @$body['SourceDatasetVersion'] = $request->sourceDatasetVersion;
        }

        if (null !== $request->sourceId) {
            @$body['SourceId'] = $request->sourceId;
        }

        if (null !== $request->sourceType) {
            @$body['SourceType'] = $request->sourceType;
        }

        if (null !== $request->uri) {
            @$body['Uri'] = $request->uri;
        }

        if (null !== $request->userId) {
            @$body['UserId'] = $request->userId;
        }

        if (null !== $request->versionDescription) {
            @$body['VersionDescription'] = $request->versionDescription;
        }

        if (null !== $request->versionLabels) {
            @$body['VersionLabels'] = $request->versionLabels;
        }

        if (null !== $request->workspaceId) {
            @$body['WorkspaceId'] = $request->workspaceId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CreateDataset',
            'version'     => '2021-02-04',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v1/datasets',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return CreateDatasetResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return CreateDatasetResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 创建数据集.
     *
     * @param request - CreateDatasetRequest
     * @returns CreateDatasetResponse
     *
     * @param CreateDatasetRequest $request
     *
     * @return CreateDatasetResponse
     */
    public function createDataset($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createDatasetWithOptions($request, $headers, $runtime);
    }

    /**
     * 批量创建数据集下的文件元数据记录.
     *
     * @param request - CreateDatasetFileMetasRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns CreateDatasetFileMetasResponse
     *
     * @param string                        $DatasetId
     * @param CreateDatasetFileMetasRequest $request
     * @param string[]                      $headers
     * @param RuntimeOptions                $runtime
     *
     * @return CreateDatasetFileMetasResponse
     */
    public function createDatasetFileMetasWithOptions($DatasetId, $request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->datasetFileMetas) {
            @$body['DatasetFileMetas'] = $request->datasetFileMetas;
        }

        if (null !== $request->datasetVersion) {
            @$body['DatasetVersion'] = $request->datasetVersion;
        }

        if (null !== $request->workspaceId) {
            @$body['WorkspaceId'] = $request->workspaceId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CreateDatasetFileMetas',
            'version'     => '2021-02-04',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v1/datasets/' . Url::percentEncode($DatasetId) . '/datasetfilemetas',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return CreateDatasetFileMetasResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return CreateDatasetFileMetasResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 批量创建数据集下的文件元数据记录.
     *
     * @param request - CreateDatasetFileMetasRequest
     * @returns CreateDatasetFileMetasResponse
     *
     * @param string                        $DatasetId
     * @param CreateDatasetFileMetasRequest $request
     *
     * @return CreateDatasetFileMetasResponse
     */
    public function createDatasetFileMetas($DatasetId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createDatasetFileMetasWithOptions($DatasetId, $request, $headers, $runtime);
    }

    /**
     * 创建数据集任务
     *
     * @param request - CreateDatasetJobRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns CreateDatasetJobResponse
     *
     * @param string                  $DatasetId
     * @param CreateDatasetJobRequest $request
     * @param string[]                $headers
     * @param RuntimeOptions          $runtime
     *
     * @return CreateDatasetJobResponse
     */
    public function createDatasetJobWithOptions($DatasetId, $request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->datasetVersion) {
            @$body['DatasetVersion'] = $request->datasetVersion;
        }

        if (null !== $request->description) {
            @$body['Description'] = $request->description;
        }

        if (null !== $request->jobAction) {
            @$body['JobAction'] = $request->jobAction;
        }

        if (null !== $request->jobMode) {
            @$body['JobMode'] = $request->jobMode;
        }

        if (null !== $request->jobSpec) {
            @$body['JobSpec'] = $request->jobSpec;
        }

        if (null !== $request->workspaceId) {
            @$body['WorkspaceId'] = $request->workspaceId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CreateDatasetJob',
            'version'     => '2021-02-04',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v1/datasets/' . Url::percentEncode($DatasetId) . '/datasetjobs',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return CreateDatasetJobResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return CreateDatasetJobResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 创建数据集任务
     *
     * @param request - CreateDatasetJobRequest
     * @returns CreateDatasetJobResponse
     *
     * @param string                  $DatasetId
     * @param CreateDatasetJobRequest $request
     *
     * @return CreateDatasetJobResponse
     */
    public function createDatasetJob($DatasetId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createDatasetJobWithOptions($DatasetId, $request, $headers, $runtime);
    }

    /**
     * 创建数据集任务配置.
     *
     * @param request - CreateDatasetJobConfigRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns CreateDatasetJobConfigResponse
     *
     * @param string                        $DatasetId
     * @param CreateDatasetJobConfigRequest $request
     * @param string[]                      $headers
     * @param RuntimeOptions                $runtime
     *
     * @return CreateDatasetJobConfigResponse
     */
    public function createDatasetJobConfigWithOptions($DatasetId, $request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->config) {
            @$body['Config'] = $request->config;
        }

        if (null !== $request->configType) {
            @$body['ConfigType'] = $request->configType;
        }

        if (null !== $request->workspaceId) {
            @$body['WorkspaceId'] = $request->workspaceId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CreateDatasetJobConfig',
            'version'     => '2021-02-04',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v1/datasets/' . Url::percentEncode($DatasetId) . '/datasetjobconfigs',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return CreateDatasetJobConfigResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return CreateDatasetJobConfigResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 创建数据集任务配置.
     *
     * @param request - CreateDatasetJobConfigRequest
     * @returns CreateDatasetJobConfigResponse
     *
     * @param string                        $DatasetId
     * @param CreateDatasetJobConfigRequest $request
     *
     * @return CreateDatasetJobConfigResponse
     */
    public function createDatasetJobConfig($DatasetId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createDatasetJobConfigWithOptions($DatasetId, $request, $headers, $runtime);
    }

    /**
     * 创建或更新 Dataset 的标签.
     *
     * @param request - CreateDatasetLabelsRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns CreateDatasetLabelsResponse
     *
     * @param string                     $DatasetId
     * @param CreateDatasetLabelsRequest $request
     * @param string[]                   $headers
     * @param RuntimeOptions             $runtime
     *
     * @return CreateDatasetLabelsResponse
     */
    public function createDatasetLabelsWithOptions($DatasetId, $request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->labels) {
            @$body['Labels'] = $request->labels;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CreateDatasetLabels',
            'version'     => '2021-02-04',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v1/datasets/' . Url::percentEncode($DatasetId) . '/labels',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return CreateDatasetLabelsResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return CreateDatasetLabelsResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 创建或更新 Dataset 的标签.
     *
     * @param request - CreateDatasetLabelsRequest
     * @returns CreateDatasetLabelsResponse
     *
     * @param string                     $DatasetId
     * @param CreateDatasetLabelsRequest $request
     *
     * @return CreateDatasetLabelsResponse
     */
    public function createDatasetLabels($DatasetId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createDatasetLabelsWithOptions($DatasetId, $request, $headers, $runtime);
    }

    /**
     * 创建数据集版本.
     *
     * @param request - CreateDatasetVersionRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns CreateDatasetVersionResponse
     *
     * @param string                      $DatasetId
     * @param CreateDatasetVersionRequest $request
     * @param string[]                    $headers
     * @param RuntimeOptions              $runtime
     *
     * @return CreateDatasetVersionResponse
     */
    public function createDatasetVersionWithOptions($DatasetId, $request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->dataCount) {
            @$body['DataCount'] = $request->dataCount;
        }

        if (null !== $request->dataSize) {
            @$body['DataSize'] = $request->dataSize;
        }

        if (null !== $request->dataSourceType) {
            @$body['DataSourceType'] = $request->dataSourceType;
        }

        if (null !== $request->description) {
            @$body['Description'] = $request->description;
        }

        if (null !== $request->importInfo) {
            @$body['ImportInfo'] = $request->importInfo;
        }

        if (null !== $request->labels) {
            @$body['Labels'] = $request->labels;
        }

        if (null !== $request->options) {
            @$body['Options'] = $request->options;
        }

        if (null !== $request->property) {
            @$body['Property'] = $request->property;
        }

        if (null !== $request->sourceId) {
            @$body['SourceId'] = $request->sourceId;
        }

        if (null !== $request->sourceType) {
            @$body['SourceType'] = $request->sourceType;
        }

        if (null !== $request->uri) {
            @$body['Uri'] = $request->uri;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CreateDatasetVersion',
            'version'     => '2021-02-04',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v1/datasets/' . Url::percentEncode($DatasetId) . '/versions',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return CreateDatasetVersionResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return CreateDatasetVersionResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 创建数据集版本.
     *
     * @param request - CreateDatasetVersionRequest
     * @returns CreateDatasetVersionResponse
     *
     * @param string                      $DatasetId
     * @param CreateDatasetVersionRequest $request
     *
     * @return CreateDatasetVersionResponse
     */
    public function createDatasetVersion($DatasetId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createDatasetVersionWithOptions($DatasetId, $request, $headers, $runtime);
    }

    /**
     * 创建数据集版本的标签.
     *
     * @param request - CreateDatasetVersionLabelsRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns CreateDatasetVersionLabelsResponse
     *
     * @param string                            $DatasetId
     * @param string                            $VersionName
     * @param CreateDatasetVersionLabelsRequest $request
     * @param string[]                          $headers
     * @param RuntimeOptions                    $runtime
     *
     * @return CreateDatasetVersionLabelsResponse
     */
    public function createDatasetVersionLabelsWithOptions($DatasetId, $VersionName, $request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->labels) {
            @$body['Labels'] = $request->labels;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CreateDatasetVersionLabels',
            'version'     => '2021-02-04',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v1/datasets/' . Url::percentEncode($DatasetId) . '/versions/' . Url::percentEncode($VersionName) . '/labels',
            'method'      => 'PUT',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return CreateDatasetVersionLabelsResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return CreateDatasetVersionLabelsResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 创建数据集版本的标签.
     *
     * @param request - CreateDatasetVersionLabelsRequest
     * @returns CreateDatasetVersionLabelsResponse
     *
     * @param string                            $DatasetId
     * @param string                            $VersionName
     * @param CreateDatasetVersionLabelsRequest $request
     *
     * @return CreateDatasetVersionLabelsResponse
     */
    public function createDatasetVersionLabels($DatasetId, $VersionName, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createDatasetVersionLabelsWithOptions($DatasetId, $VersionName, $request, $headers, $runtime);
    }

    /**
     * 创建实验.
     *
     * @param request - CreateExperimentRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns CreateExperimentResponse
     *
     * @param CreateExperimentRequest $request
     * @param string[]                $headers
     * @param RuntimeOptions          $runtime
     *
     * @return CreateExperimentResponse
     */
    public function createExperimentWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->accessibility) {
            @$body['Accessibility'] = $request->accessibility;
        }

        if (null !== $request->artifactUri) {
            @$body['ArtifactUri'] = $request->artifactUri;
        }

        if (null !== $request->labels) {
            @$body['Labels'] = $request->labels;
        }

        if (null !== $request->name) {
            @$body['Name'] = $request->name;
        }

        if (null !== $request->workspaceId) {
            @$body['WorkspaceId'] = $request->workspaceId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CreateExperiment',
            'version'     => '2021-02-04',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v1/experiments',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return CreateExperimentResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return CreateExperimentResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 创建实验.
     *
     * @param request - CreateExperimentRequest
     * @returns CreateExperimentResponse
     *
     * @param CreateExperimentRequest $request
     *
     * @return CreateExperimentResponse
     */
    public function createExperiment($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createExperimentWithOptions($request, $headers, $runtime);
    }

    /**
     * 创建成员.
     *
     * @param request - CreateMemberRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns CreateMemberResponse
     *
     * @param string              $WorkspaceId
     * @param CreateMemberRequest $request
     * @param string[]            $headers
     * @param RuntimeOptions      $runtime
     *
     * @return CreateMemberResponse
     */
    public function createMemberWithOptions($WorkspaceId, $request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->members) {
            @$body['Members'] = $request->members;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CreateMember',
            'version'     => '2021-02-04',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v1/workspaces/' . Url::percentEncode($WorkspaceId) . '/members',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return CreateMemberResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return CreateMemberResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 创建成员.
     *
     * @param request - CreateMemberRequest
     * @returns CreateMemberResponse
     *
     * @param string              $WorkspaceId
     * @param CreateMemberRequest $request
     *
     * @return CreateMemberResponse
     */
    public function createMember($WorkspaceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createMemberWithOptions($WorkspaceId, $request, $headers, $runtime);
    }

    /**
     * 创建模型.
     *
     * @param request - CreateModelRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns CreateModelResponse
     *
     * @param CreateModelRequest $request
     * @param string[]           $headers
     * @param RuntimeOptions     $runtime
     *
     * @return CreateModelResponse
     */
    public function createModelWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->accessibility) {
            @$body['Accessibility'] = $request->accessibility;
        }

        if (null !== $request->domain) {
            @$body['Domain'] = $request->domain;
        }

        if (null !== $request->extraInfo) {
            @$body['ExtraInfo'] = $request->extraInfo;
        }

        if (null !== $request->labels) {
            @$body['Labels'] = $request->labels;
        }

        if (null !== $request->modelDescription) {
            @$body['ModelDescription'] = $request->modelDescription;
        }

        if (null !== $request->modelDoc) {
            @$body['ModelDoc'] = $request->modelDoc;
        }

        if (null !== $request->modelName) {
            @$body['ModelName'] = $request->modelName;
        }

        if (null !== $request->modelType) {
            @$body['ModelType'] = $request->modelType;
        }

        if (null !== $request->orderNumber) {
            @$body['OrderNumber'] = $request->orderNumber;
        }

        if (null !== $request->origin) {
            @$body['Origin'] = $request->origin;
        }

        if (null !== $request->task) {
            @$body['Task'] = $request->task;
        }

        if (null !== $request->workspaceId) {
            @$body['WorkspaceId'] = $request->workspaceId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CreateModel',
            'version'     => '2021-02-04',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v1/models',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return CreateModelResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return CreateModelResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 创建模型.
     *
     * @param request - CreateModelRequest
     * @returns CreateModelResponse
     *
     * @param CreateModelRequest $request
     *
     * @return CreateModelResponse
     */
    public function createModel($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createModelWithOptions($request, $headers, $runtime);
    }

    /**
     * 创建或更新模型的标签.
     *
     * @param request - CreateModelLabelsRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns CreateModelLabelsResponse
     *
     * @param string                   $ModelId
     * @param CreateModelLabelsRequest $request
     * @param string[]                 $headers
     * @param RuntimeOptions           $runtime
     *
     * @return CreateModelLabelsResponse
     */
    public function createModelLabelsWithOptions($ModelId, $request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->labels) {
            @$body['Labels'] = $request->labels;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CreateModelLabels',
            'version'     => '2021-02-04',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v1/models/' . Url::percentEncode($ModelId) . '/labels',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return CreateModelLabelsResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return CreateModelLabelsResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 创建或更新模型的标签.
     *
     * @param request - CreateModelLabelsRequest
     * @returns CreateModelLabelsResponse
     *
     * @param string                   $ModelId
     * @param CreateModelLabelsRequest $request
     *
     * @return CreateModelLabelsResponse
     */
    public function createModelLabels($ModelId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createModelLabelsWithOptions($ModelId, $request, $headers, $runtime);
    }

    /**
     * 创建模型版本.
     *
     * @param request - CreateModelVersionRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns CreateModelVersionResponse
     *
     * @param string                    $ModelId
     * @param CreateModelVersionRequest $request
     * @param string[]                  $headers
     * @param RuntimeOptions            $runtime
     *
     * @return CreateModelVersionResponse
     */
    public function createModelVersionWithOptions($ModelId, $request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->approvalStatus) {
            @$body['ApprovalStatus'] = $request->approvalStatus;
        }

        if (null !== $request->compressionSpec) {
            @$body['CompressionSpec'] = $request->compressionSpec;
        }

        if (null !== $request->evaluationSpec) {
            @$body['EvaluationSpec'] = $request->evaluationSpec;
        }

        if (null !== $request->extraInfo) {
            @$body['ExtraInfo'] = $request->extraInfo;
        }

        if (null !== $request->formatType) {
            @$body['FormatType'] = $request->formatType;
        }

        if (null !== $request->frameworkType) {
            @$body['FrameworkType'] = $request->frameworkType;
        }

        if (null !== $request->inferenceSpec) {
            @$body['InferenceSpec'] = $request->inferenceSpec;
        }

        if (null !== $request->labels) {
            @$body['Labels'] = $request->labels;
        }

        if (null !== $request->metrics) {
            @$body['Metrics'] = $request->metrics;
        }

        if (null !== $request->options) {
            @$body['Options'] = $request->options;
        }

        if (null !== $request->sourceId) {
            @$body['SourceId'] = $request->sourceId;
        }

        if (null !== $request->sourceType) {
            @$body['SourceType'] = $request->sourceType;
        }

        if (null !== $request->trainingSpec) {
            @$body['TrainingSpec'] = $request->trainingSpec;
        }

        if (null !== $request->uri) {
            @$body['Uri'] = $request->uri;
        }

        if (null !== $request->versionDescription) {
            @$body['VersionDescription'] = $request->versionDescription;
        }

        if (null !== $request->versionName) {
            @$body['VersionName'] = $request->versionName;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CreateModelVersion',
            'version'     => '2021-02-04',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v1/models/' . Url::percentEncode($ModelId) . '/versions',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return CreateModelVersionResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return CreateModelVersionResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 创建模型版本.
     *
     * @param request - CreateModelVersionRequest
     * @returns CreateModelVersionResponse
     *
     * @param string                    $ModelId
     * @param CreateModelVersionRequest $request
     *
     * @return CreateModelVersionResponse
     */
    public function createModelVersion($ModelId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createModelVersionWithOptions($ModelId, $request, $headers, $runtime);
    }

    /**
     * 创建或更新模型版本的标签.
     *
     * @param request - CreateModelVersionLabelsRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns CreateModelVersionLabelsResponse
     *
     * @param string                          $ModelId
     * @param string                          $VersionName
     * @param CreateModelVersionLabelsRequest $request
     * @param string[]                        $headers
     * @param RuntimeOptions                  $runtime
     *
     * @return CreateModelVersionLabelsResponse
     */
    public function createModelVersionLabelsWithOptions($ModelId, $VersionName, $request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->labels) {
            @$body['Labels'] = $request->labels;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CreateModelVersionLabels',
            'version'     => '2021-02-04',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v1/models/' . Url::percentEncode($ModelId) . '/versions/' . Url::percentEncode($VersionName) . '/labels',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return CreateModelVersionLabelsResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return CreateModelVersionLabelsResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 创建或更新模型版本的标签.
     *
     * @param request - CreateModelVersionLabelsRequest
     * @returns CreateModelVersionLabelsResponse
     *
     * @param string                          $ModelId
     * @param string                          $VersionName
     * @param CreateModelVersionLabelsRequest $request
     *
     * @return CreateModelVersionLabelsResponse
     */
    public function createModelVersionLabels($ModelId, $VersionName, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createModelVersionLabelsWithOptions($ModelId, $VersionName, $request, $headers, $runtime);
    }

    /**
     * 创建产品订单.
     *
     * @param request - CreateProductOrdersRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns CreateProductOrdersResponse
     *
     * @param CreateProductOrdersRequest $request
     * @param string[]                   $headers
     * @param RuntimeOptions             $runtime
     *
     * @return CreateProductOrdersResponse
     */
    public function createProductOrdersWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->autoPay) {
            @$body['AutoPay'] = $request->autoPay;
        }

        if (null !== $request->products) {
            @$body['Products'] = $request->products;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CreateProductOrders',
            'version'     => '2021-02-04',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v1/productorders',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return CreateProductOrdersResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return CreateProductOrdersResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 创建产品订单.
     *
     * @param request - CreateProductOrdersRequest
     * @returns CreateProductOrdersResponse
     *
     * @param CreateProductOrdersRequest $request
     *
     * @return CreateProductOrdersResponse
     */
    public function createProductOrders($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createProductOrdersWithOptions($request, $headers, $runtime);
    }

    /**
     * 创建一次运行.
     *
     * @param request - CreateRunRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns CreateRunResponse
     *
     * @param CreateRunRequest $request
     * @param string[]         $headers
     * @param RuntimeOptions   $runtime
     *
     * @return CreateRunResponse
     */
    public function createRunWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->experimentId) {
            @$body['ExperimentId'] = $request->experimentId;
        }

        if (null !== $request->labels) {
            @$body['Labels'] = $request->labels;
        }

        if (null !== $request->name) {
            @$body['Name'] = $request->name;
        }

        if (null !== $request->params) {
            @$body['Params'] = $request->params;
        }

        if (null !== $request->sourceId) {
            @$body['SourceId'] = $request->sourceId;
        }

        if (null !== $request->sourceType) {
            @$body['SourceType'] = $request->sourceType;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CreateRun',
            'version'     => '2021-02-04',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v1/runs',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return CreateRunResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return CreateRunResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 创建一次运行.
     *
     * @param request - CreateRunRequest
     * @returns CreateRunResponse
     *
     * @param CreateRunRequest $request
     *
     * @return CreateRunResponse
     */
    public function createRun($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createRunWithOptions($request, $headers, $runtime);
    }

    /**
     * 创建工作空间.
     *
     * @param request - CreateWorkspaceRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns CreateWorkspaceResponse
     *
     * @param CreateWorkspaceRequest $request
     * @param string[]               $headers
     * @param RuntimeOptions         $runtime
     *
     * @return CreateWorkspaceResponse
     */
    public function createWorkspaceWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->description) {
            @$body['Description'] = $request->description;
        }

        if (null !== $request->displayName) {
            @$body['DisplayName'] = $request->displayName;
        }

        if (null !== $request->envTypes) {
            @$body['EnvTypes'] = $request->envTypes;
        }

        if (null !== $request->resourceGroupId) {
            @$body['ResourceGroupId'] = $request->resourceGroupId;
        }

        if (null !== $request->workspaceName) {
            @$body['WorkspaceName'] = $request->workspaceName;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CreateWorkspace',
            'version'     => '2021-02-04',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v1/workspaces',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return CreateWorkspaceResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return CreateWorkspaceResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 创建工作空间.
     *
     * @param request - CreateWorkspaceRequest
     * @returns CreateWorkspaceResponse
     *
     * @param CreateWorkspaceRequest $request
     *
     * @return CreateWorkspaceResponse
     */
    public function createWorkspace($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createWorkspaceWithOptions($request, $headers, $runtime);
    }

    /**
     * 创建资源.
     *
     * @param request - CreateWorkspaceResourceRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns CreateWorkspaceResourceResponse
     *
     * @param string                         $WorkspaceId
     * @param CreateWorkspaceResourceRequest $request
     * @param string[]                       $headers
     * @param RuntimeOptions                 $runtime
     *
     * @return CreateWorkspaceResourceResponse
     */
    public function createWorkspaceResourceWithOptions($WorkspaceId, $request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->option) {
            @$body['Option'] = $request->option;
        }

        if (null !== $request->resources) {
            @$body['Resources'] = $request->resources;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CreateWorkspaceResource',
            'version'     => '2021-02-04',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v1/workspaces/' . Url::percentEncode($WorkspaceId) . '/resources',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return CreateWorkspaceResourceResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return CreateWorkspaceResourceResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 创建资源.
     *
     * @param request - CreateWorkspaceResourceRequest
     * @returns CreateWorkspaceResourceResponse
     *
     * @param string                         $WorkspaceId
     * @param CreateWorkspaceResourceRequest $request
     *
     * @return CreateWorkspaceResourceResponse
     */
    public function createWorkspaceResource($WorkspaceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createWorkspaceResourceWithOptions($WorkspaceId, $request, $headers, $runtime);
    }

    /**
     * 删除一个代码源配置.
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns DeleteCodeSourceResponse
     *
     * @param string         $CodeSourceId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return DeleteCodeSourceResponse
     */
    public function deleteCodeSourceWithOptions($CodeSourceId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'DeleteCodeSource',
            'version'     => '2021-02-04',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v1/codesources/' . Url::percentEncode($CodeSourceId) . '',
            'method'      => 'DELETE',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return DeleteCodeSourceResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DeleteCodeSourceResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 删除一个代码源配置.
     *
     * @returns DeleteCodeSourceResponse
     *
     * @param string $CodeSourceId
     *
     * @return DeleteCodeSourceResponse
     */
    public function deleteCodeSource($CodeSourceId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteCodeSourceWithOptions($CodeSourceId, $headers, $runtime);
    }

    /**
     * 删除数据集.
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns DeleteDatasetResponse
     *
     * @param string         $DatasetId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return DeleteDatasetResponse
     */
    public function deleteDatasetWithOptions($DatasetId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'DeleteDataset',
            'version'     => '2021-02-04',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v1/datasets/' . Url::percentEncode($DatasetId) . '',
            'method'      => 'DELETE',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return DeleteDatasetResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DeleteDatasetResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 删除数据集.
     *
     * @returns DeleteDatasetResponse
     *
     * @param string $DatasetId
     *
     * @return DeleteDatasetResponse
     */
    public function deleteDataset($DatasetId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteDatasetWithOptions($DatasetId, $headers, $runtime);
    }

    /**
     * 批量删除数据集下的文件元数据记录.
     *
     * @param request - DeleteDatasetFileMetasRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns DeleteDatasetFileMetasResponse
     *
     * @param string                        $DatasetId
     * @param DeleteDatasetFileMetasRequest $request
     * @param string[]                      $headers
     * @param RuntimeOptions                $runtime
     *
     * @return DeleteDatasetFileMetasResponse
     */
    public function deleteDatasetFileMetasWithOptions($DatasetId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->datasetFileMetaIds) {
            @$query['DatasetFileMetaIds'] = $request->datasetFileMetaIds;
        }

        if (null !== $request->datasetVersion) {
            @$query['DatasetVersion'] = $request->datasetVersion;
        }

        if (null !== $request->workspaceId) {
            @$query['WorkspaceId'] = $request->workspaceId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteDatasetFileMetas',
            'version'     => '2021-02-04',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v1/datasets/' . Url::percentEncode($DatasetId) . '/datasetfilemetas',
            'method'      => 'DELETE',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return DeleteDatasetFileMetasResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DeleteDatasetFileMetasResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 批量删除数据集下的文件元数据记录.
     *
     * @param request - DeleteDatasetFileMetasRequest
     * @returns DeleteDatasetFileMetasResponse
     *
     * @param string                        $DatasetId
     * @param DeleteDatasetFileMetasRequest $request
     *
     * @return DeleteDatasetFileMetasResponse
     */
    public function deleteDatasetFileMetas($DatasetId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteDatasetFileMetasWithOptions($DatasetId, $request, $headers, $runtime);
    }

    /**
     * 删除数据集任务
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns DeleteDatasetJobResponse
     *
     * @param string         $DatasetId
     * @param string         $DatasetJobId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return DeleteDatasetJobResponse
     */
    public function deleteDatasetJobWithOptions($DatasetId, $DatasetJobId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'DeleteDatasetJob',
            'version'     => '2021-02-04',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v1/datasets/' . Url::percentEncode($DatasetId) . '/datasetjobs/' . Url::percentEncode($DatasetJobId) . '',
            'method'      => 'DELETE',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return DeleteDatasetJobResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DeleteDatasetJobResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 删除数据集任务
     *
     * @returns DeleteDatasetJobResponse
     *
     * @param string $DatasetId
     * @param string $DatasetJobId
     *
     * @return DeleteDatasetJobResponse
     */
    public function deleteDatasetJob($DatasetId, $DatasetJobId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteDatasetJobWithOptions($DatasetId, $DatasetJobId, $headers, $runtime);
    }

    /**
     * 删除数据集任务配置.
     *
     * @param request - DeleteDatasetJobConfigRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns DeleteDatasetJobConfigResponse
     *
     * @param string                        $DatasetId
     * @param string                        $DatasetJobConfigId
     * @param DeleteDatasetJobConfigRequest $request
     * @param string[]                      $headers
     * @param RuntimeOptions                $runtime
     *
     * @return DeleteDatasetJobConfigResponse
     */
    public function deleteDatasetJobConfigWithOptions($DatasetId, $DatasetJobConfigId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->workspaceId) {
            @$query['WorkspaceId'] = $request->workspaceId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteDatasetJobConfig',
            'version'     => '2021-02-04',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v1/datasets/' . Url::percentEncode($DatasetId) . '/datasetjobconfigs/' . Url::percentEncode($DatasetJobConfigId) . '',
            'method'      => 'DELETE',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return DeleteDatasetJobConfigResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DeleteDatasetJobConfigResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 删除数据集任务配置.
     *
     * @param request - DeleteDatasetJobConfigRequest
     * @returns DeleteDatasetJobConfigResponse
     *
     * @param string                        $DatasetId
     * @param string                        $DatasetJobConfigId
     * @param DeleteDatasetJobConfigRequest $request
     *
     * @return DeleteDatasetJobConfigResponse
     */
    public function deleteDatasetJobConfig($DatasetId, $DatasetJobConfigId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteDatasetJobConfigWithOptions($DatasetId, $DatasetJobConfigId, $request, $headers, $runtime);
    }

    /**
     * 删除 Dataset 的标签.
     *
     * @param request - DeleteDatasetLabelsRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns DeleteDatasetLabelsResponse
     *
     * @param string                     $DatasetId
     * @param DeleteDatasetLabelsRequest $request
     * @param string[]                   $headers
     * @param RuntimeOptions             $runtime
     *
     * @return DeleteDatasetLabelsResponse
     */
    public function deleteDatasetLabelsWithOptions($DatasetId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->labelKeys) {
            @$query['LabelKeys'] = $request->labelKeys;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteDatasetLabels',
            'version'     => '2021-02-04',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v1/datasets/' . Url::percentEncode($DatasetId) . '/labels',
            'method'      => 'DELETE',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return DeleteDatasetLabelsResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DeleteDatasetLabelsResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 删除 Dataset 的标签.
     *
     * @param request - DeleteDatasetLabelsRequest
     * @returns DeleteDatasetLabelsResponse
     *
     * @param string                     $DatasetId
     * @param DeleteDatasetLabelsRequest $request
     *
     * @return DeleteDatasetLabelsResponse
     */
    public function deleteDatasetLabels($DatasetId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteDatasetLabelsWithOptions($DatasetId, $request, $headers, $runtime);
    }

    /**
     * 删除指定版本的数据集信息，如果删除的版本是该数据集的仅存版本，版本删除后会联动删除dataset 表中的数据集信息.
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns DeleteDatasetVersionResponse
     *
     * @param string         $DatasetId
     * @param string         $VersionName
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return DeleteDatasetVersionResponse
     */
    public function deleteDatasetVersionWithOptions($DatasetId, $VersionName, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'DeleteDatasetVersion',
            'version'     => '2021-02-04',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v1/datasets/' . Url::percentEncode($DatasetId) . '/versions/' . Url::percentEncode($VersionName) . '',
            'method'      => 'DELETE',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return DeleteDatasetVersionResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DeleteDatasetVersionResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 删除指定版本的数据集信息，如果删除的版本是该数据集的仅存版本，版本删除后会联动删除dataset 表中的数据集信息.
     *
     * @returns DeleteDatasetVersionResponse
     *
     * @param string $DatasetId
     * @param string $VersionName
     *
     * @return DeleteDatasetVersionResponse
     */
    public function deleteDatasetVersion($DatasetId, $VersionName)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteDatasetVersionWithOptions($DatasetId, $VersionName, $headers, $runtime);
    }

    /**
     * 删除数据集版本的标签。
     *
     * @param request - DeleteDatasetVersionLabelsRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns DeleteDatasetVersionLabelsResponse
     *
     * @param string                            $DatasetId
     * @param string                            $VersionName
     * @param DeleteDatasetVersionLabelsRequest $request
     * @param string[]                          $headers
     * @param RuntimeOptions                    $runtime
     *
     * @return DeleteDatasetVersionLabelsResponse
     */
    public function deleteDatasetVersionLabelsWithOptions($DatasetId, $VersionName, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->keys) {
            @$query['Keys'] = $request->keys;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteDatasetVersionLabels',
            'version'     => '2021-02-04',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v1/datasets/' . Url::percentEncode($DatasetId) . '/versions/' . Url::percentEncode($VersionName) . '/labels',
            'method'      => 'DELETE',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return DeleteDatasetVersionLabelsResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DeleteDatasetVersionLabelsResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 删除数据集版本的标签。
     *
     * @param request - DeleteDatasetVersionLabelsRequest
     * @returns DeleteDatasetVersionLabelsResponse
     *
     * @param string                            $DatasetId
     * @param string                            $VersionName
     * @param DeleteDatasetVersionLabelsRequest $request
     *
     * @return DeleteDatasetVersionLabelsResponse
     */
    public function deleteDatasetVersionLabels($DatasetId, $VersionName, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteDatasetVersionLabelsWithOptions($DatasetId, $VersionName, $request, $headers, $runtime);
    }

    /**
     * 删除实验.
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns DeleteExperimentResponse
     *
     * @param string         $ExperimentId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return DeleteExperimentResponse
     */
    public function deleteExperimentWithOptions($ExperimentId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'DeleteExperiment',
            'version'     => '2021-02-04',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v1/experiments/' . Url::percentEncode($ExperimentId) . '',
            'method'      => 'DELETE',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return DeleteExperimentResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DeleteExperimentResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 删除实验.
     *
     * @returns DeleteExperimentResponse
     *
     * @param string $ExperimentId
     *
     * @return DeleteExperimentResponse
     */
    public function deleteExperiment($ExperimentId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteExperimentWithOptions($ExperimentId, $headers, $runtime);
    }

    /**
     * 删除实验标签.
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns DeleteExperimentLabelResponse
     *
     * @param string         $ExperimentId
     * @param string         $Key
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return DeleteExperimentLabelResponse
     */
    public function deleteExperimentLabelWithOptions($ExperimentId, $Key, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'DeleteExperimentLabel',
            'version'     => '2021-02-04',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v1/experiments/' . Url::percentEncode($ExperimentId) . '/labels/' . Url::percentEncode($Key) . '',
            'method'      => 'DELETE',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return DeleteExperimentLabelResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DeleteExperimentLabelResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 删除实验标签.
     *
     * @returns DeleteExperimentLabelResponse
     *
     * @param string $ExperimentId
     * @param string $Key
     *
     * @return DeleteExperimentLabelResponse
     */
    public function deleteExperimentLabel($ExperimentId, $Key)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteExperimentLabelWithOptions($ExperimentId, $Key, $headers, $runtime);
    }

    /**
     * 删除工作空间成员.
     *
     * @param request - DeleteMembersRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns DeleteMembersResponse
     *
     * @param string               $WorkspaceId
     * @param DeleteMembersRequest $request
     * @param string[]             $headers
     * @param RuntimeOptions       $runtime
     *
     * @return DeleteMembersResponse
     */
    public function deleteMembersWithOptions($WorkspaceId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->memberIds) {
            @$query['MemberIds'] = $request->memberIds;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteMembers',
            'version'     => '2021-02-04',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v1/workspaces/' . Url::percentEncode($WorkspaceId) . '/members',
            'method'      => 'DELETE',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return DeleteMembersResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DeleteMembersResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 删除工作空间成员.
     *
     * @param request - DeleteMembersRequest
     * @returns DeleteMembersResponse
     *
     * @param string               $WorkspaceId
     * @param DeleteMembersRequest $request
     *
     * @return DeleteMembersResponse
     */
    public function deleteMembers($WorkspaceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteMembersWithOptions($WorkspaceId, $request, $headers, $runtime);
    }

    /**
     * 删除模型.
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns DeleteModelResponse
     *
     * @param string         $ModelId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return DeleteModelResponse
     */
    public function deleteModelWithOptions($ModelId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'DeleteModel',
            'version'     => '2021-02-04',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v1/models/' . Url::percentEncode($ModelId) . '',
            'method'      => 'DELETE',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return DeleteModelResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DeleteModelResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 删除模型.
     *
     * @returns DeleteModelResponse
     *
     * @param string $ModelId
     *
     * @return DeleteModelResponse
     */
    public function deleteModel($ModelId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteModelWithOptions($ModelId, $headers, $runtime);
    }

    /**
     * 删除模型的标签.
     *
     * @param request - DeleteModelLabelsRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns DeleteModelLabelsResponse
     *
     * @param string                   $ModelId
     * @param DeleteModelLabelsRequest $request
     * @param string[]                 $headers
     * @param RuntimeOptions           $runtime
     *
     * @return DeleteModelLabelsResponse
     */
    public function deleteModelLabelsWithOptions($ModelId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->labelKeys) {
            @$query['LabelKeys'] = $request->labelKeys;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteModelLabels',
            'version'     => '2021-02-04',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v1/models/' . Url::percentEncode($ModelId) . '/labels',
            'method'      => 'DELETE',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return DeleteModelLabelsResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DeleteModelLabelsResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 删除模型的标签.
     *
     * @param request - DeleteModelLabelsRequest
     * @returns DeleteModelLabelsResponse
     *
     * @param string                   $ModelId
     * @param DeleteModelLabelsRequest $request
     *
     * @return DeleteModelLabelsResponse
     */
    public function deleteModelLabels($ModelId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteModelLabelsWithOptions($ModelId, $request, $headers, $runtime);
    }

    /**
     * 删除模型版本.
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns DeleteModelVersionResponse
     *
     * @param string         $ModelId
     * @param string         $VersionName
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return DeleteModelVersionResponse
     */
    public function deleteModelVersionWithOptions($ModelId, $VersionName, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'DeleteModelVersion',
            'version'     => '2021-02-04',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v1/models/' . Url::percentEncode($ModelId) . '/versions/' . Url::percentEncode($VersionName) . '',
            'method'      => 'DELETE',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return DeleteModelVersionResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DeleteModelVersionResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 删除模型版本.
     *
     * @returns DeleteModelVersionResponse
     *
     * @param string $ModelId
     * @param string $VersionName
     *
     * @return DeleteModelVersionResponse
     */
    public function deleteModelVersion($ModelId, $VersionName)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteModelVersionWithOptions($ModelId, $VersionName, $headers, $runtime);
    }

    /**
     * 删除模型版本的标签.
     *
     * @param request - DeleteModelVersionLabelsRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns DeleteModelVersionLabelsResponse
     *
     * @param string                          $ModelId
     * @param string                          $VersionName
     * @param DeleteModelVersionLabelsRequest $request
     * @param string[]                        $headers
     * @param RuntimeOptions                  $runtime
     *
     * @return DeleteModelVersionLabelsResponse
     */
    public function deleteModelVersionLabelsWithOptions($ModelId, $VersionName, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->labelKeys) {
            @$query['LabelKeys'] = $request->labelKeys;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteModelVersionLabels',
            'version'     => '2021-02-04',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v1/models/' . Url::percentEncode($ModelId) . '/versions/' . Url::percentEncode($VersionName) . '/labels',
            'method'      => 'DELETE',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return DeleteModelVersionLabelsResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DeleteModelVersionLabelsResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 删除模型版本的标签.
     *
     * @param request - DeleteModelVersionLabelsRequest
     * @returns DeleteModelVersionLabelsResponse
     *
     * @param string                          $ModelId
     * @param string                          $VersionName
     * @param DeleteModelVersionLabelsRequest $request
     *
     * @return DeleteModelVersionLabelsResponse
     */
    public function deleteModelVersionLabels($ModelId, $VersionName, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteModelVersionLabelsWithOptions($ModelId, $VersionName, $request, $headers, $runtime);
    }

    /**
     * 删除Run.
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns DeleteRunResponse
     *
     * @param string         $RunId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return DeleteRunResponse
     */
    public function deleteRunWithOptions($RunId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'DeleteRun',
            'version'     => '2021-02-04',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v1/runs/' . Url::percentEncode($RunId) . '',
            'method'      => 'DELETE',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return DeleteRunResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DeleteRunResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 删除Run.
     *
     * @returns DeleteRunResponse
     *
     * @param string $RunId
     *
     * @return DeleteRunResponse
     */
    public function deleteRun($RunId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteRunWithOptions($RunId, $headers, $runtime);
    }

    /**
     * 删除Run标签.
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns DeleteRunLabelResponse
     *
     * @param string         $RunId
     * @param string         $Key
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return DeleteRunLabelResponse
     */
    public function deleteRunLabelWithOptions($RunId, $Key, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'DeleteRunLabel',
            'version'     => '2021-02-04',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v1/runs/' . Url::percentEncode($RunId) . '/labels/' . Url::percentEncode($Key) . '',
            'method'      => 'DELETE',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return DeleteRunLabelResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DeleteRunLabelResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 删除Run标签.
     *
     * @returns DeleteRunLabelResponse
     *
     * @param string $RunId
     * @param string $Key
     *
     * @return DeleteRunLabelResponse
     */
    public function deleteRunLabel($RunId, $Key)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteRunLabelWithOptions($RunId, $Key, $headers, $runtime);
    }

    /**
     * 删除工作空间.
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns DeleteWorkspaceResponse
     *
     * @param string         $WorkspaceId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return DeleteWorkspaceResponse
     */
    public function deleteWorkspaceWithOptions($WorkspaceId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'DeleteWorkspace',
            'version'     => '2021-02-04',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v1/workspaces/' . Url::percentEncode($WorkspaceId) . '',
            'method'      => 'DELETE',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return DeleteWorkspaceResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DeleteWorkspaceResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 删除工作空间.
     *
     * @returns DeleteWorkspaceResponse
     *
     * @param string $WorkspaceId
     *
     * @return DeleteWorkspaceResponse
     */
    public function deleteWorkspace($WorkspaceId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteWorkspaceWithOptions($WorkspaceId, $headers, $runtime);
    }

    /**
     * 删除工作空间资源.
     *
     * @param request - DeleteWorkspaceResourceRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns DeleteWorkspaceResourceResponse
     *
     * @param string                         $WorkspaceId
     * @param DeleteWorkspaceResourceRequest $request
     * @param string[]                       $headers
     * @param RuntimeOptions                 $runtime
     *
     * @return DeleteWorkspaceResourceResponse
     */
    public function deleteWorkspaceResourceWithOptions($WorkspaceId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->groupName) {
            @$query['GroupName'] = $request->groupName;
        }

        if (null !== $request->labels) {
            @$query['Labels'] = $request->labels;
        }

        if (null !== $request->option) {
            @$query['Option'] = $request->option;
        }

        if (null !== $request->productType) {
            @$query['ProductType'] = $request->productType;
        }

        if (null !== $request->resourceIds) {
            @$query['ResourceIds'] = $request->resourceIds;
        }

        if (null !== $request->resourceType) {
            @$query['ResourceType'] = $request->resourceType;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteWorkspaceResource',
            'version'     => '2021-02-04',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v1/workspaces/' . Url::percentEncode($WorkspaceId) . '/resources',
            'method'      => 'DELETE',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return DeleteWorkspaceResourceResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DeleteWorkspaceResourceResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 删除工作空间资源.
     *
     * @param request - DeleteWorkspaceResourceRequest
     * @returns DeleteWorkspaceResourceResponse
     *
     * @param string                         $WorkspaceId
     * @param DeleteWorkspaceResourceRequest $request
     *
     * @return DeleteWorkspaceResourceResponse
     */
    public function deleteWorkspaceResource($WorkspaceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteWorkspaceResourceWithOptions($WorkspaceId, $request, $headers, $runtime);
    }

    /**
     * 获取一个代码源配置.
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns GetCodeSourceResponse
     *
     * @param string         $CodeSourceId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return GetCodeSourceResponse
     */
    public function getCodeSourceWithOptions($CodeSourceId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'GetCodeSource',
            'version'     => '2021-02-04',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v1/codesources/' . Url::percentEncode($CodeSourceId) . '',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return GetCodeSourceResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return GetCodeSourceResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 获取一个代码源配置.
     *
     * @returns GetCodeSourceResponse
     *
     * @param string $CodeSourceId
     *
     * @return GetCodeSourceResponse
     */
    public function getCodeSource($CodeSourceId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getCodeSourceWithOptions($CodeSourceId, $headers, $runtime);
    }

    /**
     * 获取数据集.
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns GetDatasetResponse
     *
     * @param string         $DatasetId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return GetDatasetResponse
     */
    public function getDatasetWithOptions($DatasetId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'GetDataset',
            'version'     => '2021-02-04',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v1/datasets/' . Url::percentEncode($DatasetId) . '',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return GetDatasetResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return GetDatasetResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 获取数据集.
     *
     * @returns GetDatasetResponse
     *
     * @param string $DatasetId
     *
     * @return GetDatasetResponse
     */
    public function getDataset($DatasetId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getDatasetWithOptions($DatasetId, $headers, $runtime);
    }

    /**
     * 获取数据集下的指定文件元数据记录.
     *
     * @param request - GetDatasetFileMetaRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns GetDatasetFileMetaResponse
     *
     * @param string                    $DatasetId
     * @param string                    $DatasetFileMetaId
     * @param GetDatasetFileMetaRequest $request
     * @param string[]                  $headers
     * @param RuntimeOptions            $runtime
     *
     * @return GetDatasetFileMetaResponse
     */
    public function getDatasetFileMetaWithOptions($DatasetId, $DatasetFileMetaId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->datasetVersion) {
            @$query['DatasetVersion'] = $request->datasetVersion;
        }

        if (null !== $request->workspaceId) {
            @$query['WorkspaceId'] = $request->workspaceId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetDatasetFileMeta',
            'version'     => '2021-02-04',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v1/datasets/' . Url::percentEncode($DatasetId) . '/datasetfilemetas/' . Url::percentEncode($DatasetFileMetaId) . '',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return GetDatasetFileMetaResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return GetDatasetFileMetaResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 获取数据集下的指定文件元数据记录.
     *
     * @param request - GetDatasetFileMetaRequest
     * @returns GetDatasetFileMetaResponse
     *
     * @param string                    $DatasetId
     * @param string                    $DatasetFileMetaId
     * @param GetDatasetFileMetaRequest $request
     *
     * @return GetDatasetFileMetaResponse
     */
    public function getDatasetFileMeta($DatasetId, $DatasetFileMetaId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getDatasetFileMetaWithOptions($DatasetId, $DatasetFileMetaId, $request, $headers, $runtime);
    }

    /**
     * 获取数据集任务
     *
     * @param request - GetDatasetJobRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns GetDatasetJobResponse
     *
     * @param string               $DatasetId
     * @param string               $DatasetJobId
     * @param GetDatasetJobRequest $request
     * @param string[]             $headers
     * @param RuntimeOptions       $runtime
     *
     * @return GetDatasetJobResponse
     */
    public function getDatasetJobWithOptions($DatasetId, $DatasetJobId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->datasetVersion) {
            @$query['DatasetVersion'] = $request->datasetVersion;
        }

        if (null !== $request->workspaceId) {
            @$query['WorkspaceId'] = $request->workspaceId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetDatasetJob',
            'version'     => '2021-02-04',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v1/datasets/' . Url::percentEncode($DatasetId) . '/datasetjobs/' . Url::percentEncode($DatasetJobId) . '',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return GetDatasetJobResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return GetDatasetJobResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 获取数据集任务
     *
     * @param request - GetDatasetJobRequest
     * @returns GetDatasetJobResponse
     *
     * @param string               $DatasetId
     * @param string               $DatasetJobId
     * @param GetDatasetJobRequest $request
     *
     * @return GetDatasetJobResponse
     */
    public function getDatasetJob($DatasetId, $DatasetJobId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getDatasetJobWithOptions($DatasetId, $DatasetJobId, $request, $headers, $runtime);
    }

    /**
     * 获取数据集任务配置.
     *
     * @param request - GetDatasetJobConfigRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns GetDatasetJobConfigResponse
     *
     * @param string                     $DatasetId
     * @param string                     $DatasetJobConfigId
     * @param GetDatasetJobConfigRequest $request
     * @param string[]                   $headers
     * @param RuntimeOptions             $runtime
     *
     * @return GetDatasetJobConfigResponse
     */
    public function getDatasetJobConfigWithOptions($DatasetId, $DatasetJobConfigId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->workspaceId) {
            @$query['WorkspaceId'] = $request->workspaceId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetDatasetJobConfig',
            'version'     => '2021-02-04',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v1/datasets/' . Url::percentEncode($DatasetId) . '/datasetjobconfigs/' . Url::percentEncode($DatasetJobConfigId) . '',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return GetDatasetJobConfigResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return GetDatasetJobConfigResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 获取数据集任务配置.
     *
     * @param request - GetDatasetJobConfigRequest
     * @returns GetDatasetJobConfigResponse
     *
     * @param string                     $DatasetId
     * @param string                     $DatasetJobConfigId
     * @param GetDatasetJobConfigRequest $request
     *
     * @return GetDatasetJobConfigResponse
     */
    public function getDatasetJobConfig($DatasetId, $DatasetJobConfigId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getDatasetJobConfigWithOptions($DatasetId, $DatasetJobConfigId, $request, $headers, $runtime);
    }

    /**
     * 获取指定版本的数据集信息.
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns GetDatasetVersionResponse
     *
     * @param string         $DatasetId
     * @param string         $VersionName
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return GetDatasetVersionResponse
     */
    public function getDatasetVersionWithOptions($DatasetId, $VersionName, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'GetDatasetVersion',
            'version'     => '2021-02-04',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v1/datasets/' . Url::percentEncode($DatasetId) . '/versions/' . Url::percentEncode($VersionName) . '',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return GetDatasetVersionResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return GetDatasetVersionResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 获取指定版本的数据集信息.
     *
     * @returns GetDatasetVersionResponse
     *
     * @param string $DatasetId
     * @param string $VersionName
     *
     * @return GetDatasetVersionResponse
     */
    public function getDatasetVersion($DatasetId, $VersionName)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getDatasetVersionWithOptions($DatasetId, $VersionName, $headers, $runtime);
    }

    /**
     * 获取默认工作空间.
     *
     * @param request - GetDefaultWorkspaceRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns GetDefaultWorkspaceResponse
     *
     * @param GetDefaultWorkspaceRequest $request
     * @param string[]                   $headers
     * @param RuntimeOptions             $runtime
     *
     * @return GetDefaultWorkspaceResponse
     */
    public function getDefaultWorkspaceWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->verbose) {
            @$query['Verbose'] = $request->verbose;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetDefaultWorkspace',
            'version'     => '2021-02-04',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v1/defaultWorkspaces',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return GetDefaultWorkspaceResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return GetDefaultWorkspaceResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 获取默认工作空间.
     *
     * @param request - GetDefaultWorkspaceRequest
     * @returns GetDefaultWorkspaceResponse
     *
     * @param GetDefaultWorkspaceRequest $request
     *
     * @return GetDefaultWorkspaceResponse
     */
    public function getDefaultWorkspace($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getDefaultWorkspaceWithOptions($request, $headers, $runtime);
    }

    /**
     * 获取实验.
     *
     * @param request - GetExperimentRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns GetExperimentResponse
     *
     * @param string               $ExperimentId
     * @param GetExperimentRequest $request
     * @param string[]             $headers
     * @param RuntimeOptions       $runtime
     *
     * @return GetExperimentResponse
     */
    public function getExperimentWithOptions($ExperimentId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->verbose) {
            @$query['Verbose'] = $request->verbose;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetExperiment',
            'version'     => '2021-02-04',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v1/experiments/' . Url::percentEncode($ExperimentId) . '',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return GetExperimentResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return GetExperimentResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 获取实验.
     *
     * @param request - GetExperimentRequest
     * @returns GetExperimentResponse
     *
     * @param string               $ExperimentId
     * @param GetExperimentRequest $request
     *
     * @return GetExperimentResponse
     */
    public function getExperiment($ExperimentId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getExperimentWithOptions($ExperimentId, $request, $headers, $runtime);
    }

    /**
     * 获取镜像.
     *
     * @param request - GetImageRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns GetImageResponse
     *
     * @param string          $ImageId
     * @param GetImageRequest $request
     * @param string[]        $headers
     * @param RuntimeOptions  $runtime
     *
     * @return GetImageResponse
     */
    public function getImageWithOptions($ImageId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->verbose) {
            @$query['Verbose'] = $request->verbose;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetImage',
            'version'     => '2021-02-04',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v1/images/' . Url::percentEncode($ImageId) . '',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return GetImageResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return GetImageResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 获取镜像.
     *
     * @param request - GetImageRequest
     * @returns GetImageResponse
     *
     * @param string          $ImageId
     * @param GetImageRequest $request
     *
     * @return GetImageResponse
     */
    public function getImage($ImageId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getImageWithOptions($ImageId, $request, $headers, $runtime);
    }

    /**
     * 获取成员.
     *
     * @param request - GetMemberRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns GetMemberResponse
     *
     * @param string           $WorkspaceId
     * @param GetMemberRequest $request
     * @param string[]         $headers
     * @param RuntimeOptions   $runtime
     *
     * @return GetMemberResponse
     */
    public function getMemberWithOptions($WorkspaceId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->memberId) {
            @$query['MemberId'] = $request->memberId;
        }

        if (null !== $request->userId) {
            @$query['UserId'] = $request->userId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetMember',
            'version'     => '2021-02-04',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v1/workspaces/' . Url::percentEncode($WorkspaceId) . '/member',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return GetMemberResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return GetMemberResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 获取成员.
     *
     * @param request - GetMemberRequest
     * @returns GetMemberResponse
     *
     * @param string           $WorkspaceId
     * @param GetMemberRequest $request
     *
     * @return GetMemberResponse
     */
    public function getMember($WorkspaceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getMemberWithOptions($WorkspaceId, $request, $headers, $runtime);
    }

    /**
     * 获取模型.
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns GetModelResponse
     *
     * @param string         $ModelId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return GetModelResponse
     */
    public function getModelWithOptions($ModelId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'GetModel',
            'version'     => '2021-02-04',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v1/models/' . Url::percentEncode($ModelId) . '',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return GetModelResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return GetModelResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 获取模型.
     *
     * @returns GetModelResponse
     *
     * @param string $ModelId
     *
     * @return GetModelResponse
     */
    public function getModel($ModelId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getModelWithOptions($ModelId, $headers, $runtime);
    }

    /**
     * 获取模型版本.
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns GetModelVersionResponse
     *
     * @param string         $ModelId
     * @param string         $VersionName
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return GetModelVersionResponse
     */
    public function getModelVersionWithOptions($ModelId, $VersionName, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'GetModelVersion',
            'version'     => '2021-02-04',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v1/models/' . Url::percentEncode($ModelId) . '/versions/' . Url::percentEncode($VersionName) . '',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return GetModelVersionResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return GetModelVersionResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 获取模型版本.
     *
     * @returns GetModelVersionResponse
     *
     * @param string $ModelId
     * @param string $VersionName
     *
     * @return GetModelVersionResponse
     */
    public function getModelVersion($ModelId, $VersionName)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getModelVersionWithOptions($ModelId, $VersionName, $headers, $runtime);
    }

    /**
     * 获取权限，若无权限则返回错误.
     *
     * @param tmpReq - GetPermissionRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns GetPermissionResponse
     *
     * @param string               $WorkspaceId
     * @param string               $PermissionCode
     * @param GetPermissionRequest $tmpReq
     * @param string[]             $headers
     * @param RuntimeOptions       $runtime
     *
     * @return GetPermissionResponse
     */
    public function getPermissionWithOptions($WorkspaceId, $PermissionCode, $tmpReq, $headers, $runtime)
    {
        $tmpReq->validate();
        $request = new GetPermissionShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->labels) {
            $request->labelsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->labels, 'Labels', 'json');
        }

        $query = [];
        if (null !== $request->accessibility) {
            @$query['Accessibility'] = $request->accessibility;
        }

        if (null !== $request->creator) {
            @$query['Creator'] = $request->creator;
        }

        if (null !== $request->labelsShrink) {
            @$query['Labels'] = $request->labelsShrink;
        }

        if (null !== $request->option) {
            @$query['Option'] = $request->option;
        }

        if (null !== $request->resource) {
            @$query['Resource'] = $request->resource;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetPermission',
            'version'     => '2021-02-04',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v1/workspaces/' . Url::percentEncode($WorkspaceId) . '/permissions/' . Url::percentEncode($PermissionCode) . '',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return GetPermissionResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return GetPermissionResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 获取权限，若无权限则返回错误.
     *
     * @param request - GetPermissionRequest
     * @returns GetPermissionResponse
     *
     * @param string               $WorkspaceId
     * @param string               $PermissionCode
     * @param GetPermissionRequest $request
     *
     * @return GetPermissionResponse
     */
    public function getPermission($WorkspaceId, $PermissionCode, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getPermissionWithOptions($WorkspaceId, $PermissionCode, $request, $headers, $runtime);
    }

    /**
     * 获取Run详情.
     *
     * @param request - GetRunRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns GetRunResponse
     *
     * @param string         $RunId
     * @param GetRunRequest  $request
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return GetRunResponse
     */
    public function getRunWithOptions($RunId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->verbose) {
            @$query['Verbose'] = $request->verbose;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetRun',
            'version'     => '2021-02-04',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v1/runs/' . Url::percentEncode($RunId) . '',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return GetRunResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return GetRunResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 获取Run详情.
     *
     * @param request - GetRunRequest
     * @returns GetRunResponse
     *
     * @param string        $RunId
     * @param GetRunRequest $request
     *
     * @return GetRunResponse
     */
    public function getRun($RunId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getRunWithOptions($RunId, $request, $headers, $runtime);
    }

    /**
     * 获取工作空间.
     *
     * @param request - GetWorkspaceRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns GetWorkspaceResponse
     *
     * @param string              $WorkspaceId
     * @param GetWorkspaceRequest $request
     * @param string[]            $headers
     * @param RuntimeOptions      $runtime
     *
     * @return GetWorkspaceResponse
     */
    public function getWorkspaceWithOptions($WorkspaceId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->verbose) {
            @$query['Verbose'] = $request->verbose;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetWorkspace',
            'version'     => '2021-02-04',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v1/workspaces/' . Url::percentEncode($WorkspaceId) . '',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return GetWorkspaceResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return GetWorkspaceResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 获取工作空间.
     *
     * @param request - GetWorkspaceRequest
     * @returns GetWorkspaceResponse
     *
     * @param string              $WorkspaceId
     * @param GetWorkspaceRequest $request
     *
     * @return GetWorkspaceResponse
     */
    public function getWorkspace($WorkspaceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getWorkspaceWithOptions($WorkspaceId, $request, $headers, $runtime);
    }

    /**
     * 获取代码源配置列表.
     *
     * @param request - ListCodeSourcesRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns ListCodeSourcesResponse
     *
     * @param ListCodeSourcesRequest $request
     * @param string[]               $headers
     * @param RuntimeOptions         $runtime
     *
     * @return ListCodeSourcesResponse
     */
    public function listCodeSourcesWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->displayName) {
            @$query['DisplayName'] = $request->displayName;
        }

        if (null !== $request->order) {
            @$query['Order'] = $request->order;
        }

        if (null !== $request->pageNumber) {
            @$query['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->sortBy) {
            @$query['SortBy'] = $request->sortBy;
        }

        if (null !== $request->workspaceId) {
            @$query['WorkspaceId'] = $request->workspaceId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListCodeSources',
            'version'     => '2021-02-04',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v1/codesources',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return ListCodeSourcesResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ListCodeSourcesResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 获取代码源配置列表.
     *
     * @param request - ListCodeSourcesRequest
     * @returns ListCodeSourcesResponse
     *
     * @param ListCodeSourcesRequest $request
     *
     * @return ListCodeSourcesResponse
     */
    public function listCodeSources($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listCodeSourcesWithOptions($request, $headers, $runtime);
    }

    /**
     * 查询数据集文件列表.
     *
     * @param request - ListDatasetFileMetasRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns ListDatasetFileMetasResponse
     *
     * @param string                      $DatasetId
     * @param ListDatasetFileMetasRequest $request
     * @param string[]                    $headers
     * @param RuntimeOptions              $runtime
     *
     * @return ListDatasetFileMetasResponse
     */
    public function listDatasetFileMetasWithOptions($DatasetId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->datasetVersion) {
            @$query['DatasetVersion'] = $request->datasetVersion;
        }

        if (null !== $request->endFileUpdateTime) {
            @$query['EndFileUpdateTime'] = $request->endFileUpdateTime;
        }

        if (null !== $request->nextToken) {
            @$query['NextToken'] = $request->nextToken;
        }

        if (null !== $request->order) {
            @$query['Order'] = $request->order;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->queryText) {
            @$query['QueryText'] = $request->queryText;
        }

        if (null !== $request->queryType) {
            @$query['QueryType'] = $request->queryType;
        }

        if (null !== $request->scoreThreshold) {
            @$query['ScoreThreshold'] = $request->scoreThreshold;
        }

        if (null !== $request->sortBy) {
            @$query['SortBy'] = $request->sortBy;
        }

        if (null !== $request->startFileUpdateTime) {
            @$query['StartFileUpdateTime'] = $request->startFileUpdateTime;
        }

        if (null !== $request->topK) {
            @$query['TopK'] = $request->topK;
        }

        if (null !== $request->workspaceId) {
            @$query['WorkspaceId'] = $request->workspaceId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListDatasetFileMetas',
            'version'     => '2021-02-04',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v1/datasets/' . Url::percentEncode($DatasetId) . '/datasetfilemetas',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return ListDatasetFileMetasResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ListDatasetFileMetasResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 查询数据集文件列表.
     *
     * @param request - ListDatasetFileMetasRequest
     * @returns ListDatasetFileMetasResponse
     *
     * @param string                      $DatasetId
     * @param ListDatasetFileMetasRequest $request
     *
     * @return ListDatasetFileMetasResponse
     */
    public function listDatasetFileMetas($DatasetId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listDatasetFileMetasWithOptions($DatasetId, $request, $headers, $runtime);
    }

    /**
     * 批量查询数据集任务配置.
     *
     * @param request - ListDatasetJobConfigsRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns ListDatasetJobConfigsResponse
     *
     * @param string                       $DatasetId
     * @param ListDatasetJobConfigsRequest $request
     * @param string[]                     $headers
     * @param RuntimeOptions               $runtime
     *
     * @return ListDatasetJobConfigsResponse
     */
    public function listDatasetJobConfigsWithOptions($DatasetId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->configType) {
            @$query['ConfigType'] = $request->configType;
        }

        if (null !== $request->pageNumber) {
            @$query['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->workspaceId) {
            @$query['WorkspaceId'] = $request->workspaceId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListDatasetJobConfigs',
            'version'     => '2021-02-04',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v1/datasets/' . Url::percentEncode($DatasetId) . '/datasetjobconfigs/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return ListDatasetJobConfigsResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ListDatasetJobConfigsResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 批量查询数据集任务配置.
     *
     * @param request - ListDatasetJobConfigsRequest
     * @returns ListDatasetJobConfigsResponse
     *
     * @param string                       $DatasetId
     * @param ListDatasetJobConfigsRequest $request
     *
     * @return ListDatasetJobConfigsResponse
     */
    public function listDatasetJobConfigs($DatasetId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listDatasetJobConfigsWithOptions($DatasetId, $request, $headers, $runtime);
    }

    /**
     * 获取数据集任务
     *
     * @param request - ListDatasetJobsRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns ListDatasetJobsResponse
     *
     * @param string                 $DatasetId
     * @param ListDatasetJobsRequest $request
     * @param string[]               $headers
     * @param RuntimeOptions         $runtime
     *
     * @return ListDatasetJobsResponse
     */
    public function listDatasetJobsWithOptions($DatasetId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->datasetVersion) {
            @$query['DatasetVersion'] = $request->datasetVersion;
        }

        if (null !== $request->jobAction) {
            @$query['JobAction'] = $request->jobAction;
        }

        if (null !== $request->pageNumber) {
            @$query['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->workspaceId) {
            @$query['WorkspaceId'] = $request->workspaceId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListDatasetJobs',
            'version'     => '2021-02-04',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v1/datasets/' . Url::percentEncode($DatasetId) . '/datasetjobs',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return ListDatasetJobsResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ListDatasetJobsResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 获取数据集任务
     *
     * @param request - ListDatasetJobsRequest
     * @returns ListDatasetJobsResponse
     *
     * @param string                 $DatasetId
     * @param ListDatasetJobsRequest $request
     *
     * @return ListDatasetJobsResponse
     */
    public function listDatasetJobs($DatasetId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listDatasetJobsWithOptions($DatasetId, $request, $headers, $runtime);
    }

    /**
     * 获取数据集版本列表.
     *
     * @param request - ListDatasetVersionsRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns ListDatasetVersionsResponse
     *
     * @param string                     $DatasetId
     * @param ListDatasetVersionsRequest $request
     * @param string[]                   $headers
     * @param RuntimeOptions             $runtime
     *
     * @return ListDatasetVersionsResponse
     */
    public function listDatasetVersionsWithOptions($DatasetId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->labelKeys) {
            @$query['LabelKeys'] = $request->labelKeys;
        }

        if (null !== $request->labelValues) {
            @$query['LabelValues'] = $request->labelValues;
        }

        if (null !== $request->order) {
            @$query['Order'] = $request->order;
        }

        if (null !== $request->pageNumber) {
            @$query['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->properties) {
            @$query['Properties'] = $request->properties;
        }

        if (null !== $request->sortBy) {
            @$query['SortBy'] = $request->sortBy;
        }

        if (null !== $request->sourceId) {
            @$query['SourceId'] = $request->sourceId;
        }

        if (null !== $request->sourceTypes) {
            @$query['SourceTypes'] = $request->sourceTypes;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListDatasetVersions',
            'version'     => '2021-02-04',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v1/datasets/' . Url::percentEncode($DatasetId) . '/versions',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return ListDatasetVersionsResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ListDatasetVersionsResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 获取数据集版本列表.
     *
     * @param request - ListDatasetVersionsRequest
     * @returns ListDatasetVersionsResponse
     *
     * @param string                     $DatasetId
     * @param ListDatasetVersionsRequest $request
     *
     * @return ListDatasetVersionsResponse
     */
    public function listDatasetVersions($DatasetId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listDatasetVersionsWithOptions($DatasetId, $request, $headers, $runtime);
    }

    /**
     * 获取数据集列表.
     *
     * @param request - ListDatasetsRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns ListDatasetsResponse
     *
     * @param ListDatasetsRequest $request
     * @param string[]            $headers
     * @param RuntimeOptions      $runtime
     *
     * @return ListDatasetsResponse
     */
    public function listDatasetsWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->dataSourceTypes) {
            @$query['DataSourceTypes'] = $request->dataSourceTypes;
        }

        if (null !== $request->dataTypes) {
            @$query['DataTypes'] = $request->dataTypes;
        }

        if (null !== $request->label) {
            @$query['Label'] = $request->label;
        }

        if (null !== $request->name) {
            @$query['Name'] = $request->name;
        }

        if (null !== $request->order) {
            @$query['Order'] = $request->order;
        }

        if (null !== $request->pageNumber) {
            @$query['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->properties) {
            @$query['Properties'] = $request->properties;
        }

        if (null !== $request->provider) {
            @$query['Provider'] = $request->provider;
        }

        if (null !== $request->sortBy) {
            @$query['SortBy'] = $request->sortBy;
        }

        if (null !== $request->sourceDatasetId) {
            @$query['SourceDatasetId'] = $request->sourceDatasetId;
        }

        if (null !== $request->sourceId) {
            @$query['SourceId'] = $request->sourceId;
        }

        if (null !== $request->sourceTypes) {
            @$query['SourceTypes'] = $request->sourceTypes;
        }

        if (null !== $request->workspaceId) {
            @$query['WorkspaceId'] = $request->workspaceId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListDatasets',
            'version'     => '2021-02-04',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v1/datasets',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return ListDatasetsResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ListDatasetsResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 获取数据集列表.
     *
     * @param request - ListDatasetsRequest
     * @returns ListDatasetsResponse
     *
     * @param ListDatasetsRequest $request
     *
     * @return ListDatasetsResponse
     */
    public function listDatasets($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listDatasetsWithOptions($request, $headers, $runtime);
    }

    /**
     * 获取实验列表.
     *
     * @param tmpReq - ListExperimentRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns ListExperimentResponse
     *
     * @param ListExperimentRequest $tmpReq
     * @param string[]              $headers
     * @param RuntimeOptions        $runtime
     *
     * @return ListExperimentResponse
     */
    public function listExperimentWithOptions($tmpReq, $headers, $runtime)
    {
        $tmpReq->validate();
        $request = new ListExperimentShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->options) {
            $request->optionsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->options, 'Options', 'json');
        }

        $query = [];
        if (null !== $request->labels) {
            @$query['Labels'] = $request->labels;
        }

        if (null !== $request->maxResults) {
            @$query['MaxResults'] = $request->maxResults;
        }

        if (null !== $request->name) {
            @$query['Name'] = $request->name;
        }

        if (null !== $request->optionsShrink) {
            @$query['Options'] = $request->optionsShrink;
        }

        if (null !== $request->order) {
            @$query['Order'] = $request->order;
        }

        if (null !== $request->orderBy) {
            @$query['OrderBy'] = $request->orderBy;
        }

        if (null !== $request->pageNumber) {
            @$query['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->pageToken) {
            @$query['PageToken'] = $request->pageToken;
        }

        if (null !== $request->sortBy) {
            @$query['SortBy'] = $request->sortBy;
        }

        if (null !== $request->verbose) {
            @$query['Verbose'] = $request->verbose;
        }

        if (null !== $request->workspaceId) {
            @$query['WorkspaceId'] = $request->workspaceId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListExperiment',
            'version'     => '2021-02-04',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v1/experiments',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return ListExperimentResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ListExperimentResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 获取实验列表.
     *
     * @param request - ListExperimentRequest
     * @returns ListExperimentResponse
     *
     * @param ListExperimentRequest $request
     *
     * @return ListExperimentResponse
     */
    public function listExperiment($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listExperimentWithOptions($request, $headers, $runtime);
    }

    /**
     * 列举标签.
     *
     * @param request - ListImageLabelsRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns ListImageLabelsResponse
     *
     * @param ListImageLabelsRequest $request
     * @param string[]               $headers
     * @param RuntimeOptions         $runtime
     *
     * @return ListImageLabelsResponse
     */
    public function listImageLabelsWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->imageId) {
            @$query['ImageId'] = $request->imageId;
        }

        if (null !== $request->labelFilter) {
            @$query['LabelFilter'] = $request->labelFilter;
        }

        if (null !== $request->labelKeys) {
            @$query['LabelKeys'] = $request->labelKeys;
        }

        if (null !== $request->region) {
            @$query['Region'] = $request->region;
        }

        if (null !== $request->workspaceId) {
            @$query['WorkspaceId'] = $request->workspaceId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListImageLabels',
            'version'     => '2021-02-04',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v1/image/labels',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return ListImageLabelsResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ListImageLabelsResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 列举标签.
     *
     * @param request - ListImageLabelsRequest
     * @returns ListImageLabelsResponse
     *
     * @param ListImageLabelsRequest $request
     *
     * @return ListImageLabelsResponse
     */
    public function listImageLabels($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listImageLabelsWithOptions($request, $headers, $runtime);
    }

    /**
     * 列举已注册镜像.
     *
     * @param request - ListImagesRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns ListImagesResponse
     *
     * @param ListImagesRequest $request
     * @param string[]          $headers
     * @param RuntimeOptions    $runtime
     *
     * @return ListImagesResponse
     */
    public function listImagesWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->accessibility) {
            @$query['Accessibility'] = $request->accessibility;
        }

        if (null !== $request->imageUri) {
            @$query['ImageUri'] = $request->imageUri;
        }

        if (null !== $request->labels) {
            @$query['Labels'] = $request->labels;
        }

        if (null !== $request->name) {
            @$query['Name'] = $request->name;
        }

        if (null !== $request->order) {
            @$query['Order'] = $request->order;
        }

        if (null !== $request->pageNumber) {
            @$query['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->query) {
            @$query['Query'] = $request->query;
        }

        if (null !== $request->sortBy) {
            @$query['SortBy'] = $request->sortBy;
        }

        if (null !== $request->verbose) {
            @$query['Verbose'] = $request->verbose;
        }

        if (null !== $request->workspaceId) {
            @$query['WorkspaceId'] = $request->workspaceId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListImages',
            'version'     => '2021-02-04',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v1/images',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return ListImagesResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ListImagesResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 列举已注册镜像.
     *
     * @param request - ListImagesRequest
     * @returns ListImagesResponse
     *
     * @param ListImagesRequest $request
     *
     * @return ListImagesResponse
     */
    public function listImages($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listImagesWithOptions($request, $headers, $runtime);
    }

    /**
     * 列举工作空间成员.
     *
     * @param request - ListMembersRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns ListMembersResponse
     *
     * @param string             $WorkspaceId
     * @param ListMembersRequest $request
     * @param string[]           $headers
     * @param RuntimeOptions     $runtime
     *
     * @return ListMembersResponse
     */
    public function listMembersWithOptions($WorkspaceId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->memberName) {
            @$query['MemberName'] = $request->memberName;
        }

        if (null !== $request->pageNumber) {
            @$query['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->roles) {
            @$query['Roles'] = $request->roles;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListMembers',
            'version'     => '2021-02-04',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v1/workspaces/' . Url::percentEncode($WorkspaceId) . '/members',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return ListMembersResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ListMembersResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 列举工作空间成员.
     *
     * @param request - ListMembersRequest
     * @returns ListMembersResponse
     *
     * @param string             $WorkspaceId
     * @param ListMembersRequest $request
     *
     * @return ListMembersResponse
     */
    public function listMembers($WorkspaceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listMembersWithOptions($WorkspaceId, $request, $headers, $runtime);
    }

    /**
     * 获取模型版本列表.
     *
     * @param request - ListModelVersionsRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns ListModelVersionsResponse
     *
     * @param string                   $ModelId
     * @param ListModelVersionsRequest $request
     * @param string[]                 $headers
     * @param RuntimeOptions           $runtime
     *
     * @return ListModelVersionsResponse
     */
    public function listModelVersionsWithOptions($ModelId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->approvalStatus) {
            @$query['ApprovalStatus'] = $request->approvalStatus;
        }

        if (null !== $request->formatType) {
            @$query['FormatType'] = $request->formatType;
        }

        if (null !== $request->frameworkType) {
            @$query['FrameworkType'] = $request->frameworkType;
        }

        if (null !== $request->label) {
            @$query['Label'] = $request->label;
        }

        if (null !== $request->order) {
            @$query['Order'] = $request->order;
        }

        if (null !== $request->pageNumber) {
            @$query['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->sortBy) {
            @$query['SortBy'] = $request->sortBy;
        }

        if (null !== $request->sourceId) {
            @$query['SourceId'] = $request->sourceId;
        }

        if (null !== $request->sourceType) {
            @$query['SourceType'] = $request->sourceType;
        }

        if (null !== $request->versionName) {
            @$query['VersionName'] = $request->versionName;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListModelVersions',
            'version'     => '2021-02-04',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v1/models/' . Url::percentEncode($ModelId) . '/versions',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return ListModelVersionsResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ListModelVersionsResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 获取模型版本列表.
     *
     * @param request - ListModelVersionsRequest
     * @returns ListModelVersionsResponse
     *
     * @param string                   $ModelId
     * @param ListModelVersionsRequest $request
     *
     * @return ListModelVersionsResponse
     */
    public function listModelVersions($ModelId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listModelVersionsWithOptions($ModelId, $request, $headers, $runtime);
    }

    /**
     * 获取模型列表.
     *
     * @param request - ListModelsRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns ListModelsResponse
     *
     * @param ListModelsRequest $request
     * @param string[]          $headers
     * @param RuntimeOptions    $runtime
     *
     * @return ListModelsResponse
     */
    public function listModelsWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->collections) {
            @$query['Collections'] = $request->collections;
        }

        if (null !== $request->domain) {
            @$query['Domain'] = $request->domain;
        }

        if (null !== $request->label) {
            @$query['Label'] = $request->label;
        }

        if (null !== $request->modelName) {
            @$query['ModelName'] = $request->modelName;
        }

        if (null !== $request->modelType) {
            @$query['ModelType'] = $request->modelType;
        }

        if (null !== $request->order) {
            @$query['Order'] = $request->order;
        }

        if (null !== $request->origin) {
            @$query['Origin'] = $request->origin;
        }

        if (null !== $request->pageNumber) {
            @$query['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->provider) {
            @$query['Provider'] = $request->provider;
        }

        if (null !== $request->query) {
            @$query['Query'] = $request->query;
        }

        if (null !== $request->sortBy) {
            @$query['SortBy'] = $request->sortBy;
        }

        if (null !== $request->task) {
            @$query['Task'] = $request->task;
        }

        if (null !== $request->workspaceId) {
            @$query['WorkspaceId'] = $request->workspaceId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListModels',
            'version'     => '2021-02-04',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v1/models',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return ListModelsResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ListModelsResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 获取模型列表.
     *
     * @param request - ListModelsRequest
     * @returns ListModelsResponse
     *
     * @param ListModelsRequest $request
     *
     * @return ListModelsResponse
     */
    public function listModels($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listModelsWithOptions($request, $headers, $runtime);
    }

    /**
     * 列举权限.
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns ListPermissionsResponse
     *
     * @param string         $WorkspaceId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return ListPermissionsResponse
     */
    public function listPermissionsWithOptions($WorkspaceId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'ListPermissions',
            'version'     => '2021-02-04',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v1/workspaces/' . Url::percentEncode($WorkspaceId) . '/permissions',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return ListPermissionsResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ListPermissionsResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 列举权限.
     *
     * @returns ListPermissionsResponse
     *
     * @param string $WorkspaceId
     *
     * @return ListPermissionsResponse
     */
    public function listPermissions($WorkspaceId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listPermissionsWithOptions($WorkspaceId, $headers, $runtime);
    }

    /**
     * 列举产品
     *
     * @param request - ListProductsRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns ListProductsResponse
     *
     * @param ListProductsRequest $request
     * @param string[]            $headers
     * @param RuntimeOptions      $runtime
     *
     * @return ListProductsResponse
     */
    public function listProductsWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->productCodes) {
            @$query['ProductCodes'] = $request->productCodes;
        }

        if (null !== $request->serviceCodes) {
            @$query['ServiceCodes'] = $request->serviceCodes;
        }

        if (null !== $request->verbose) {
            @$query['Verbose'] = $request->verbose;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListProducts',
            'version'     => '2021-02-04',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v1/products',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return ListProductsResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ListProductsResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 列举产品
     *
     * @param request - ListProductsRequest
     * @returns ListProductsResponse
     *
     * @param ListProductsRequest $request
     *
     * @return ListProductsResponse
     */
    public function listProducts($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listProductsWithOptions($request, $headers, $runtime);
    }

    /**
     * 获取已有配额列表.
     *
     * @param request - ListQuotasRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns ListQuotasResponse
     *
     * @param ListQuotasRequest $request
     * @param string[]          $headers
     * @param RuntimeOptions    $runtime
     *
     * @return ListQuotasResponse
     */
    public function listQuotasWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->name) {
            @$query['Name'] = $request->name;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListQuotas',
            'version'     => '2021-02-04',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v1/quotas',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return ListQuotasResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ListQuotasResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 获取已有配额列表.
     *
     * @param request - ListQuotasRequest
     * @returns ListQuotasResponse
     *
     * @param ListQuotasRequest $request
     *
     * @return ListQuotasResponse
     */
    public function listQuotas($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listQuotasWithOptions($request, $headers, $runtime);
    }

    /**
     * 列举工作空间资源.
     *
     * @param request - ListResourcesRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns ListResourcesResponse
     *
     * @param ListResourcesRequest $request
     * @param string[]             $headers
     * @param RuntimeOptions       $runtime
     *
     * @return ListResourcesResponse
     */
    public function listResourcesWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->groupName) {
            @$query['GroupName'] = $request->groupName;
        }

        if (null !== $request->labels) {
            @$query['Labels'] = $request->labels;
        }

        if (null !== $request->option) {
            @$query['Option'] = $request->option;
        }

        if (null !== $request->pageNumber) {
            @$query['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->productTypes) {
            @$query['ProductTypes'] = $request->productTypes;
        }

        if (null !== $request->quotaIds) {
            @$query['QuotaIds'] = $request->quotaIds;
        }

        if (null !== $request->resourceName) {
            @$query['ResourceName'] = $request->resourceName;
        }

        if (null !== $request->resourceTypes) {
            @$query['ResourceTypes'] = $request->resourceTypes;
        }

        if (null !== $request->verbose) {
            @$query['Verbose'] = $request->verbose;
        }

        if (null !== $request->verboseFields) {
            @$query['VerboseFields'] = $request->verboseFields;
        }

        if (null !== $request->workspaceId) {
            @$query['WorkspaceId'] = $request->workspaceId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListResources',
            'version'     => '2021-02-04',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v1/resources',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return ListResourcesResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ListResourcesResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 列举工作空间资源.
     *
     * @param request - ListResourcesRequest
     * @returns ListResourcesResponse
     *
     * @param ListResourcesRequest $request
     *
     * @return ListResourcesResponse
     */
    public function listResources($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listResourcesWithOptions($request, $headers, $runtime);
    }

    /**
     * 获取Run的指标记录列表.
     *
     * @param request - ListRunMetricsRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns ListRunMetricsResponse
     *
     * @param string                $RunId
     * @param ListRunMetricsRequest $request
     * @param string[]              $headers
     * @param RuntimeOptions        $runtime
     *
     * @return ListRunMetricsResponse
     */
    public function listRunMetricsWithOptions($RunId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->key) {
            @$query['Key'] = $request->key;
        }

        if (null !== $request->maxResults) {
            @$query['MaxResults'] = $request->maxResults;
        }

        if (null !== $request->pageToken) {
            @$query['PageToken'] = $request->pageToken;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListRunMetrics',
            'version'     => '2021-02-04',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v1/runs/' . Url::percentEncode($RunId) . '/metrics',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return ListRunMetricsResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ListRunMetricsResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 获取Run的指标记录列表.
     *
     * @param request - ListRunMetricsRequest
     * @returns ListRunMetricsResponse
     *
     * @param string                $RunId
     * @param ListRunMetricsRequest $request
     *
     * @return ListRunMetricsResponse
     */
    public function listRunMetrics($RunId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listRunMetricsWithOptions($RunId, $request, $headers, $runtime);
    }

    /**
     * 获取Run列表.
     *
     * @param request - ListRunsRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns ListRunsResponse
     *
     * @param ListRunsRequest $request
     * @param string[]        $headers
     * @param RuntimeOptions  $runtime
     *
     * @return ListRunsResponse
     */
    public function listRunsWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->experimentId) {
            @$query['ExperimentId'] = $request->experimentId;
        }

        if (null !== $request->gmtCreateTime) {
            @$query['GmtCreateTime'] = $request->gmtCreateTime;
        }

        if (null !== $request->labels) {
            @$query['Labels'] = $request->labels;
        }

        if (null !== $request->maxResults) {
            @$query['MaxResults'] = $request->maxResults;
        }

        if (null !== $request->name) {
            @$query['Name'] = $request->name;
        }

        if (null !== $request->order) {
            @$query['Order'] = $request->order;
        }

        if (null !== $request->orderBy) {
            @$query['OrderBy'] = $request->orderBy;
        }

        if (null !== $request->pageNumber) {
            @$query['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->pageToken) {
            @$query['PageToken'] = $request->pageToken;
        }

        if (null !== $request->sortBy) {
            @$query['SortBy'] = $request->sortBy;
        }

        if (null !== $request->sourceId) {
            @$query['SourceId'] = $request->sourceId;
        }

        if (null !== $request->sourceType) {
            @$query['SourceType'] = $request->sourceType;
        }

        if (null !== $request->verbose) {
            @$query['Verbose'] = $request->verbose;
        }

        if (null !== $request->workspaceId) {
            @$query['WorkspaceId'] = $request->workspaceId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListRuns',
            'version'     => '2021-02-04',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v1/runs',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return ListRunsResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ListRunsResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 获取Run列表.
     *
     * @param request - ListRunsRequest
     * @returns ListRunsResponse
     *
     * @param ListRunsRequest $request
     *
     * @return ListRunsResponse
     */
    public function listRuns($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listRunsWithOptions($request, $headers, $runtime);
    }

    /**
     * 列出工作空间的可变为成员的用户.
     *
     * @param request - ListWorkspaceUsersRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns ListWorkspaceUsersResponse
     *
     * @param string                    $WorkspaceId
     * @param ListWorkspaceUsersRequest $request
     * @param string[]                  $headers
     * @param RuntimeOptions            $runtime
     *
     * @return ListWorkspaceUsersResponse
     */
    public function listWorkspaceUsersWithOptions($WorkspaceId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->userName) {
            @$query['UserName'] = $request->userName;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListWorkspaceUsers',
            'version'     => '2021-02-04',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v1/workspaces/' . Url::percentEncode($WorkspaceId) . '/users',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return ListWorkspaceUsersResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ListWorkspaceUsersResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 列出工作空间的可变为成员的用户.
     *
     * @param request - ListWorkspaceUsersRequest
     * @returns ListWorkspaceUsersResponse
     *
     * @param string                    $WorkspaceId
     * @param ListWorkspaceUsersRequest $request
     *
     * @return ListWorkspaceUsersResponse
     */
    public function listWorkspaceUsers($WorkspaceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listWorkspaceUsersWithOptions($WorkspaceId, $request, $headers, $runtime);
    }

    /**
     * 获得工作空间列表.
     *
     * @param request - ListWorkspacesRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns ListWorkspacesResponse
     *
     * @param ListWorkspacesRequest $request
     * @param string[]              $headers
     * @param RuntimeOptions        $runtime
     *
     * @return ListWorkspacesResponse
     */
    public function listWorkspacesWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->fields) {
            @$query['Fields'] = $request->fields;
        }

        if (null !== $request->moduleList) {
            @$query['ModuleList'] = $request->moduleList;
        }

        if (null !== $request->option) {
            @$query['Option'] = $request->option;
        }

        if (null !== $request->order) {
            @$query['Order'] = $request->order;
        }

        if (null !== $request->pageNumber) {
            @$query['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->resourceGroupId) {
            @$query['ResourceGroupId'] = $request->resourceGroupId;
        }

        if (null !== $request->sortBy) {
            @$query['SortBy'] = $request->sortBy;
        }

        if (null !== $request->status) {
            @$query['Status'] = $request->status;
        }

        if (null !== $request->verbose) {
            @$query['Verbose'] = $request->verbose;
        }

        if (null !== $request->workspaceIds) {
            @$query['WorkspaceIds'] = $request->workspaceIds;
        }

        if (null !== $request->workspaceName) {
            @$query['WorkspaceName'] = $request->workspaceName;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListWorkspaces',
            'version'     => '2021-02-04',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v1/workspaces',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return ListWorkspacesResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ListWorkspacesResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 获得工作空间列表.
     *
     * @param request - ListWorkspacesRequest
     * @returns ListWorkspacesResponse
     *
     * @param ListWorkspacesRequest $request
     *
     * @return ListWorkspacesResponse
     */
    public function listWorkspaces($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listWorkspacesWithOptions($request, $headers, $runtime);
    }

    /**
     * 批量记录Run的指标.
     *
     * @param request - LogRunMetricsRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns LogRunMetricsResponse
     *
     * @param string               $RunId
     * @param LogRunMetricsRequest $request
     * @param string[]             $headers
     * @param RuntimeOptions       $runtime
     *
     * @return LogRunMetricsResponse
     */
    public function logRunMetricsWithOptions($RunId, $request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->metrics) {
            @$body['Metrics'] = $request->metrics;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'LogRunMetrics',
            'version'     => '2021-02-04',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v1/runs/' . Url::percentEncode($RunId) . '/metrics/action/log',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return LogRunMetricsResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return LogRunMetricsResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 批量记录Run的指标.
     *
     * @param request - LogRunMetricsRequest
     * @returns LogRunMetricsResponse
     *
     * @param string               $RunId
     * @param LogRunMetricsRequest $request
     *
     * @return LogRunMetricsResponse
     */
    public function logRunMetrics($RunId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->logRunMetricsWithOptions($RunId, $request, $headers, $runtime);
    }

    /**
     * 发布一个代码源配置为本工作空间下所有人可见
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns PublishCodeSourceResponse
     *
     * @param string         $CodeSourceId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return PublishCodeSourceResponse
     */
    public function publishCodeSourceWithOptions($CodeSourceId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'PublishCodeSource',
            'version'     => '2021-02-04',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v1/codesources/' . Url::percentEncode($CodeSourceId) . '/publish',
            'method'      => 'PUT',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return PublishCodeSourceResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return PublishCodeSourceResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 发布一个代码源配置为本工作空间下所有人可见
     *
     * @returns PublishCodeSourceResponse
     *
     * @param string $CodeSourceId
     *
     * @return PublishCodeSourceResponse
     */
    public function publishCodeSource($CodeSourceId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->publishCodeSourceWithOptions($CodeSourceId, $headers, $runtime);
    }

    /**
     * 更新数据集.
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns PublishDatasetResponse
     *
     * @param string         $DatasetId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return PublishDatasetResponse
     */
    public function publishDatasetWithOptions($DatasetId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'PublishDataset',
            'version'     => '2021-02-04',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v1/datasets/' . Url::percentEncode($DatasetId) . '/publish',
            'method'      => 'PUT',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return PublishDatasetResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return PublishDatasetResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 更新数据集.
     *
     * @returns PublishDatasetResponse
     *
     * @param string $DatasetId
     *
     * @return PublishDatasetResponse
     */
    public function publishDataset($DatasetId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->publishDatasetWithOptions($DatasetId, $headers, $runtime);
    }

    /**
     * 发布 Image.
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns PublishImageResponse
     *
     * @param string         $ImageId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return PublishImageResponse
     */
    public function publishImageWithOptions($ImageId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'PublishImage',
            'version'     => '2021-02-04',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v1/images/' . Url::percentEncode($ImageId) . '/publish',
            'method'      => 'PUT',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return PublishImageResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return PublishImageResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 发布 Image.
     *
     * @returns PublishImageResponse
     *
     * @param string $ImageId
     *
     * @return PublishImageResponse
     */
    public function publishImage($ImageId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->publishImageWithOptions($ImageId, $headers, $runtime);
    }

    /**
     * 删除 Image.
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns RemoveImageResponse
     *
     * @param string         $ImageId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return RemoveImageResponse
     */
    public function removeImageWithOptions($ImageId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'RemoveImage',
            'version'     => '2021-02-04',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v1/images/' . Url::percentEncode($ImageId) . '',
            'method'      => 'DELETE',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return RemoveImageResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return RemoveImageResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 删除 Image.
     *
     * @returns RemoveImageResponse
     *
     * @param string $ImageId
     *
     * @return RemoveImageResponse
     */
    public function removeImage($ImageId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->removeImageWithOptions($ImageId, $headers, $runtime);
    }

    /**
     * 删除 Image 的标签.
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns RemoveImageLabelsResponse
     *
     * @param string         $ImageId
     * @param string         $LabelKey
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return RemoveImageLabelsResponse
     */
    public function removeImageLabelsWithOptions($ImageId, $LabelKey, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'RemoveImageLabels',
            'version'     => '2021-02-04',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v1/images/' . Url::percentEncode($ImageId) . '/labels/' . Url::percentEncode($LabelKey) . '',
            'method'      => 'DELETE',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return RemoveImageLabelsResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return RemoveImageLabelsResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 删除 Image 的标签.
     *
     * @returns RemoveImageLabelsResponse
     *
     * @param string $ImageId
     * @param string $LabelKey
     *
     * @return RemoveImageLabelsResponse
     */
    public function removeImageLabels($ImageId, $LabelKey)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->removeImageLabelsWithOptions($ImageId, $LabelKey, $headers, $runtime);
    }

    /**
     * 删除成员角色.
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns RemoveMemberRoleResponse
     *
     * @param string         $WorkspaceId
     * @param string         $MemberId
     * @param string         $RoleName
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return RemoveMemberRoleResponse
     */
    public function removeMemberRoleWithOptions($WorkspaceId, $MemberId, $RoleName, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'RemoveMemberRole',
            'version'     => '2021-02-04',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v1/workspaces/' . Url::percentEncode($WorkspaceId) . '/members/' . Url::percentEncode($MemberId) . '/roles/' . Url::percentEncode($RoleName) . '',
            'method'      => 'DELETE',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return RemoveMemberRoleResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return RemoveMemberRoleResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 删除成员角色.
     *
     * @returns RemoveMemberRoleResponse
     *
     * @param string $WorkspaceId
     * @param string $MemberId
     * @param string $RoleName
     *
     * @return RemoveMemberRoleResponse
     */
    public function removeMemberRole($WorkspaceId, $MemberId, $RoleName)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->removeMemberRoleWithOptions($WorkspaceId, $MemberId, $RoleName, $headers, $runtime);
    }

    /**
     * 更新实验标签.
     *
     * @param request - SetExperimentLabelsRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns SetExperimentLabelsResponse
     *
     * @param string                     $ExperimentId
     * @param SetExperimentLabelsRequest $request
     * @param string[]                   $headers
     * @param RuntimeOptions             $runtime
     *
     * @return SetExperimentLabelsResponse
     */
    public function setExperimentLabelsWithOptions($ExperimentId, $request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->labels) {
            @$body['Labels'] = $request->labels;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'SetExperimentLabels',
            'version'     => '2021-02-04',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v1/experiments/' . Url::percentEncode($ExperimentId) . '/labels',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return SetExperimentLabelsResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return SetExperimentLabelsResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 更新实验标签.
     *
     * @param request - SetExperimentLabelsRequest
     * @returns SetExperimentLabelsResponse
     *
     * @param string                     $ExperimentId
     * @param SetExperimentLabelsRequest $request
     *
     * @return SetExperimentLabelsResponse
     */
    public function setExperimentLabels($ExperimentId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->setExperimentLabelsWithOptions($ExperimentId, $request, $headers, $runtime);
    }

    /**
     * 停止数据集任务
     *
     * @param request - StopDatasetJobRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns StopDatasetJobResponse
     *
     * @param string                $DatasetId
     * @param string                $DatasetJobId
     * @param StopDatasetJobRequest $request
     * @param string[]              $headers
     * @param RuntimeOptions        $runtime
     *
     * @return StopDatasetJobResponse
     */
    public function stopDatasetJobWithOptions($DatasetId, $DatasetJobId, $request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->datasetVersion) {
            @$body['DatasetVersion'] = $request->datasetVersion;
        }

        if (null !== $request->workspaceId) {
            @$body['WorkspaceId'] = $request->workspaceId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'StopDatasetJob',
            'version'     => '2021-02-04',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v1/datasets/' . Url::percentEncode($DatasetId) . '/datasetjobs/' . Url::percentEncode($DatasetJobId) . '/action/stop',
            'method'      => 'PUT',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return StopDatasetJobResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return StopDatasetJobResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 停止数据集任务
     *
     * @param request - StopDatasetJobRequest
     * @returns StopDatasetJobResponse
     *
     * @param string                $DatasetId
     * @param string                $DatasetJobId
     * @param StopDatasetJobRequest $request
     *
     * @return StopDatasetJobResponse
     */
    public function stopDatasetJob($DatasetId, $DatasetJobId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->stopDatasetJobWithOptions($DatasetId, $DatasetJobId, $request, $headers, $runtime);
    }

    /**
     * 更新代码配置.
     *
     * @param request - UpdateCodeSourceRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns UpdateCodeSourceResponse
     *
     * @param string                  $CodeSourceId
     * @param UpdateCodeSourceRequest $request
     * @param string[]                $headers
     * @param RuntimeOptions          $runtime
     *
     * @return UpdateCodeSourceResponse
     */
    public function updateCodeSourceWithOptions($CodeSourceId, $request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->codeBranch) {
            @$body['CodeBranch'] = $request->codeBranch;
        }

        if (null !== $request->codeCommit) {
            @$body['CodeCommit'] = $request->codeCommit;
        }

        if (null !== $request->codeRepo) {
            @$body['CodeRepo'] = $request->codeRepo;
        }

        if (null !== $request->codeRepoAccessToken) {
            @$body['CodeRepoAccessToken'] = $request->codeRepoAccessToken;
        }

        if (null !== $request->codeRepoUserName) {
            @$body['CodeRepoUserName'] = $request->codeRepoUserName;
        }

        if (null !== $request->description) {
            @$body['Description'] = $request->description;
        }

        if (null !== $request->displayName) {
            @$body['DisplayName'] = $request->displayName;
        }

        if (null !== $request->mountPath) {
            @$body['MountPath'] = $request->mountPath;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'UpdateCodeSource',
            'version'     => '2021-02-04',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v1/codesources/' . Url::percentEncode($CodeSourceId) . '',
            'method'      => 'PUT',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return UpdateCodeSourceResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return UpdateCodeSourceResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 更新代码配置.
     *
     * @param request - UpdateCodeSourceRequest
     * @returns UpdateCodeSourceResponse
     *
     * @param string                  $CodeSourceId
     * @param UpdateCodeSourceRequest $request
     *
     * @return UpdateCodeSourceResponse
     */
    public function updateCodeSource($CodeSourceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateCodeSourceWithOptions($CodeSourceId, $request, $headers, $runtime);
    }

    /**
     * 更新数据集.
     *
     * @param request - UpdateDatasetRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns UpdateDatasetResponse
     *
     * @param string               $DatasetId
     * @param UpdateDatasetRequest $request
     * @param string[]             $headers
     * @param RuntimeOptions       $runtime
     *
     * @return UpdateDatasetResponse
     */
    public function updateDatasetWithOptions($DatasetId, $request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->description) {
            @$body['Description'] = $request->description;
        }

        if (null !== $request->mountAccessReadWriteRoleIdList) {
            @$body['MountAccessReadWriteRoleIdList'] = $request->mountAccessReadWriteRoleIdList;
        }

        if (null !== $request->name) {
            @$body['Name'] = $request->name;
        }

        if (null !== $request->options) {
            @$body['Options'] = $request->options;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'UpdateDataset',
            'version'     => '2021-02-04',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v1/datasets/' . Url::percentEncode($DatasetId) . '',
            'method'      => 'PUT',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return UpdateDatasetResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return UpdateDatasetResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 更新数据集.
     *
     * @param request - UpdateDatasetRequest
     * @returns UpdateDatasetResponse
     *
     * @param string               $DatasetId
     * @param UpdateDatasetRequest $request
     *
     * @return UpdateDatasetResponse
     */
    public function updateDataset($DatasetId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateDatasetWithOptions($DatasetId, $request, $headers, $runtime);
    }

    /**
     * 批量更新数据集下的文件元数据记录.
     *
     * @param request - UpdateDatasetFileMetasRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns UpdateDatasetFileMetasResponse
     *
     * @param string                        $DatasetId
     * @param UpdateDatasetFileMetasRequest $request
     * @param string[]                      $headers
     * @param RuntimeOptions                $runtime
     *
     * @return UpdateDatasetFileMetasResponse
     */
    public function updateDatasetFileMetasWithOptions($DatasetId, $request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->datasetFileMetas) {
            @$body['DatasetFileMetas'] = $request->datasetFileMetas;
        }

        if (null !== $request->datasetVersion) {
            @$body['DatasetVersion'] = $request->datasetVersion;
        }

        if (null !== $request->tagJobId) {
            @$body['TagJobId'] = $request->tagJobId;
        }

        if (null !== $request->workspaceId) {
            @$body['WorkspaceId'] = $request->workspaceId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'UpdateDatasetFileMetas',
            'version'     => '2021-02-04',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v1/datasets/' . Url::percentEncode($DatasetId) . '/datasetfilemetas',
            'method'      => 'PUT',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return UpdateDatasetFileMetasResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return UpdateDatasetFileMetasResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 批量更新数据集下的文件元数据记录.
     *
     * @param request - UpdateDatasetFileMetasRequest
     * @returns UpdateDatasetFileMetasResponse
     *
     * @param string                        $DatasetId
     * @param UpdateDatasetFileMetasRequest $request
     *
     * @return UpdateDatasetFileMetasResponse
     */
    public function updateDatasetFileMetas($DatasetId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateDatasetFileMetasWithOptions($DatasetId, $request, $headers, $runtime);
    }

    /**
     * 更新数据集任务
     *
     * @param request - UpdateDatasetJobRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns UpdateDatasetJobResponse
     *
     * @param string                  $DatasetId
     * @param string                  $DatasetJobId
     * @param UpdateDatasetJobRequest $request
     * @param string[]                $headers
     * @param RuntimeOptions          $runtime
     *
     * @return UpdateDatasetJobResponse
     */
    public function updateDatasetJobWithOptions($DatasetId, $DatasetJobId, $request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->datasetVersion) {
            @$body['DatasetVersion'] = $request->datasetVersion;
        }

        if (null !== $request->description) {
            @$body['Description'] = $request->description;
        }

        if (null !== $request->workspaceId) {
            @$body['WorkspaceId'] = $request->workspaceId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'UpdateDatasetJob',
            'version'     => '2021-02-04',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v1/datasets/' . Url::percentEncode($DatasetId) . '/datasetjobs/' . Url::percentEncode($DatasetJobId) . '',
            'method'      => 'PUT',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return UpdateDatasetJobResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return UpdateDatasetJobResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 更新数据集任务
     *
     * @param request - UpdateDatasetJobRequest
     * @returns UpdateDatasetJobResponse
     *
     * @param string                  $DatasetId
     * @param string                  $DatasetJobId
     * @param UpdateDatasetJobRequest $request
     *
     * @return UpdateDatasetJobResponse
     */
    public function updateDatasetJob($DatasetId, $DatasetJobId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateDatasetJobWithOptions($DatasetId, $DatasetJobId, $request, $headers, $runtime);
    }

    /**
     * 更新数据集任务配置.
     *
     * @param request - UpdateDatasetJobConfigRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns UpdateDatasetJobConfigResponse
     *
     * @param string                        $DatasetId
     * @param string                        $DatasetJobConfigId
     * @param UpdateDatasetJobConfigRequest $request
     * @param string[]                      $headers
     * @param RuntimeOptions                $runtime
     *
     * @return UpdateDatasetJobConfigResponse
     */
    public function updateDatasetJobConfigWithOptions($DatasetId, $DatasetJobConfigId, $request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->config) {
            @$body['Config'] = $request->config;
        }

        if (null !== $request->configType) {
            @$body['ConfigType'] = $request->configType;
        }

        if (null !== $request->workspaceId) {
            @$body['WorkspaceId'] = $request->workspaceId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'UpdateDatasetJobConfig',
            'version'     => '2021-02-04',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v1/datasets/' . Url::percentEncode($DatasetId) . '/datasetjobconfigs/' . Url::percentEncode($DatasetJobConfigId) . '',
            'method'      => 'PUT',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return UpdateDatasetJobConfigResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return UpdateDatasetJobConfigResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 更新数据集任务配置.
     *
     * @param request - UpdateDatasetJobConfigRequest
     * @returns UpdateDatasetJobConfigResponse
     *
     * @param string                        $DatasetId
     * @param string                        $DatasetJobConfigId
     * @param UpdateDatasetJobConfigRequest $request
     *
     * @return UpdateDatasetJobConfigResponse
     */
    public function updateDatasetJobConfig($DatasetId, $DatasetJobConfigId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateDatasetJobConfigWithOptions($DatasetId, $DatasetJobConfigId, $request, $headers, $runtime);
    }

    /**
     * 更新指定版本的数据集信息.
     *
     * @param request - UpdateDatasetVersionRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns UpdateDatasetVersionResponse
     *
     * @param string                      $DatasetId
     * @param string                      $VersionName
     * @param UpdateDatasetVersionRequest $request
     * @param string[]                    $headers
     * @param RuntimeOptions              $runtime
     *
     * @return UpdateDatasetVersionResponse
     */
    public function updateDatasetVersionWithOptions($DatasetId, $VersionName, $request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->dataCount) {
            @$body['DataCount'] = $request->dataCount;
        }

        if (null !== $request->dataSize) {
            @$body['DataSize'] = $request->dataSize;
        }

        if (null !== $request->description) {
            @$body['Description'] = $request->description;
        }

        if (null !== $request->options) {
            @$body['Options'] = $request->options;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'UpdateDatasetVersion',
            'version'     => '2021-02-04',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v1/datasets/' . Url::percentEncode($DatasetId) . '/versions/' . Url::percentEncode($VersionName) . '',
            'method'      => 'PUT',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return UpdateDatasetVersionResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return UpdateDatasetVersionResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 更新指定版本的数据集信息.
     *
     * @param request - UpdateDatasetVersionRequest
     * @returns UpdateDatasetVersionResponse
     *
     * @param string                      $DatasetId
     * @param string                      $VersionName
     * @param UpdateDatasetVersionRequest $request
     *
     * @return UpdateDatasetVersionResponse
     */
    public function updateDatasetVersion($DatasetId, $VersionName, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateDatasetVersionWithOptions($DatasetId, $VersionName, $request, $headers, $runtime);
    }

    /**
     * 更新默认工作空间.
     *
     * @param request - UpdateDefaultWorkspaceRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns UpdateDefaultWorkspaceResponse
     *
     * @param UpdateDefaultWorkspaceRequest $request
     * @param string[]                      $headers
     * @param RuntimeOptions                $runtime
     *
     * @return UpdateDefaultWorkspaceResponse
     */
    public function updateDefaultWorkspaceWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->workspaceId) {
            @$body['WorkspaceId'] = $request->workspaceId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'UpdateDefaultWorkspace',
            'version'     => '2021-02-04',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v1/defaultWorkspaces',
            'method'      => 'PUT',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return UpdateDefaultWorkspaceResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return UpdateDefaultWorkspaceResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 更新默认工作空间.
     *
     * @param request - UpdateDefaultWorkspaceRequest
     * @returns UpdateDefaultWorkspaceResponse
     *
     * @param UpdateDefaultWorkspaceRequest $request
     *
     * @return UpdateDefaultWorkspaceResponse
     */
    public function updateDefaultWorkspace($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateDefaultWorkspaceWithOptions($request, $headers, $runtime);
    }

    /**
     * 更新实验.
     *
     * @param request - UpdateExperimentRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns UpdateExperimentResponse
     *
     * @param string                  $ExperimentId
     * @param UpdateExperimentRequest $request
     * @param string[]                $headers
     * @param RuntimeOptions          $runtime
     *
     * @return UpdateExperimentResponse
     */
    public function updateExperimentWithOptions($ExperimentId, $request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->accessibility) {
            @$body['Accessibility'] = $request->accessibility;
        }

        if (null !== $request->name) {
            @$body['Name'] = $request->name;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'UpdateExperiment',
            'version'     => '2021-02-04',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v1/experiments/' . Url::percentEncode($ExperimentId) . '',
            'method'      => 'PUT',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return UpdateExperimentResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return UpdateExperimentResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 更新实验.
     *
     * @param request - UpdateExperimentRequest
     * @returns UpdateExperimentResponse
     *
     * @param string                  $ExperimentId
     * @param UpdateExperimentRequest $request
     *
     * @return UpdateExperimentResponse
     */
    public function updateExperiment($ExperimentId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateExperimentWithOptions($ExperimentId, $request, $headers, $runtime);
    }

    /**
     * 更新模型.
     *
     * @param request - UpdateModelRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns UpdateModelResponse
     *
     * @param string             $ModelId
     * @param UpdateModelRequest $request
     * @param string[]           $headers
     * @param RuntimeOptions     $runtime
     *
     * @return UpdateModelResponse
     */
    public function updateModelWithOptions($ModelId, $request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->accessibility) {
            @$body['Accessibility'] = $request->accessibility;
        }

        if (null !== $request->domain) {
            @$body['Domain'] = $request->domain;
        }

        if (null !== $request->extraInfo) {
            @$body['ExtraInfo'] = $request->extraInfo;
        }

        if (null !== $request->modelDescription) {
            @$body['ModelDescription'] = $request->modelDescription;
        }

        if (null !== $request->modelDoc) {
            @$body['ModelDoc'] = $request->modelDoc;
        }

        if (null !== $request->modelName) {
            @$body['ModelName'] = $request->modelName;
        }

        if (null !== $request->modelType) {
            @$body['ModelType'] = $request->modelType;
        }

        if (null !== $request->orderNumber) {
            @$body['OrderNumber'] = $request->orderNumber;
        }

        if (null !== $request->origin) {
            @$body['Origin'] = $request->origin;
        }

        if (null !== $request->task) {
            @$body['Task'] = $request->task;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'UpdateModel',
            'version'     => '2021-02-04',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v1/models/' . Url::percentEncode($ModelId) . '',
            'method'      => 'PUT',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return UpdateModelResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return UpdateModelResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 更新模型.
     *
     * @param request - UpdateModelRequest
     * @returns UpdateModelResponse
     *
     * @param string             $ModelId
     * @param UpdateModelRequest $request
     *
     * @return UpdateModelResponse
     */
    public function updateModel($ModelId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateModelWithOptions($ModelId, $request, $headers, $runtime);
    }

    /**
     * 更新模型版本.
     *
     * @param request - UpdateModelVersionRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns UpdateModelVersionResponse
     *
     * @param string                    $ModelId
     * @param string                    $VersionName
     * @param UpdateModelVersionRequest $request
     * @param string[]                  $headers
     * @param RuntimeOptions            $runtime
     *
     * @return UpdateModelVersionResponse
     */
    public function updateModelVersionWithOptions($ModelId, $VersionName, $request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->approvalStatus) {
            @$body['ApprovalStatus'] = $request->approvalStatus;
        }

        if (null !== $request->compressionSpec) {
            @$body['CompressionSpec'] = $request->compressionSpec;
        }

        if (null !== $request->evaluationSpec) {
            @$body['EvaluationSpec'] = $request->evaluationSpec;
        }

        if (null !== $request->extraInfo) {
            @$body['ExtraInfo'] = $request->extraInfo;
        }

        if (null !== $request->inferenceSpec) {
            @$body['InferenceSpec'] = $request->inferenceSpec;
        }

        if (null !== $request->metrics) {
            @$body['Metrics'] = $request->metrics;
        }

        if (null !== $request->options) {
            @$body['Options'] = $request->options;
        }

        if (null !== $request->sourceId) {
            @$body['SourceId'] = $request->sourceId;
        }

        if (null !== $request->sourceType) {
            @$body['SourceType'] = $request->sourceType;
        }

        if (null !== $request->trainingSpec) {
            @$body['TrainingSpec'] = $request->trainingSpec;
        }

        if (null !== $request->versionDescription) {
            @$body['VersionDescription'] = $request->versionDescription;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'UpdateModelVersion',
            'version'     => '2021-02-04',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v1/models/' . Url::percentEncode($ModelId) . '/versions/' . Url::percentEncode($VersionName) . '',
            'method'      => 'PUT',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return UpdateModelVersionResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return UpdateModelVersionResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 更新模型版本.
     *
     * @param request - UpdateModelVersionRequest
     * @returns UpdateModelVersionResponse
     *
     * @param string                    $ModelId
     * @param string                    $VersionName
     * @param UpdateModelVersionRequest $request
     *
     * @return UpdateModelVersionResponse
     */
    public function updateModelVersion($ModelId, $VersionName, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateModelVersionWithOptions($ModelId, $VersionName, $request, $headers, $runtime);
    }

    /**
     * 更新Run.
     *
     * @param request - UpdateRunRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns UpdateRunResponse
     *
     * @param string           $RunId
     * @param UpdateRunRequest $request
     * @param string[]         $headers
     * @param RuntimeOptions   $runtime
     *
     * @return UpdateRunResponse
     */
    public function updateRunWithOptions($RunId, $request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->labels) {
            @$body['Labels'] = $request->labels;
        }

        if (null !== $request->name) {
            @$body['Name'] = $request->name;
        }

        if (null !== $request->params) {
            @$body['Params'] = $request->params;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'UpdateRun',
            'version'     => '2021-02-04',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v1/runs/' . Url::percentEncode($RunId) . '',
            'method'      => 'PUT',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return UpdateRunResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return UpdateRunResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 更新Run.
     *
     * @param request - UpdateRunRequest
     * @returns UpdateRunResponse
     *
     * @param string           $RunId
     * @param UpdateRunRequest $request
     *
     * @return UpdateRunResponse
     */
    public function updateRun($RunId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateRunWithOptions($RunId, $request, $headers, $runtime);
    }

    /**
     * 更新工作空间.
     *
     * @param request - UpdateWorkspaceRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns UpdateWorkspaceResponse
     *
     * @param string                 $WorkspaceId
     * @param UpdateWorkspaceRequest $request
     * @param string[]               $headers
     * @param RuntimeOptions         $runtime
     *
     * @return UpdateWorkspaceResponse
     */
    public function updateWorkspaceWithOptions($WorkspaceId, $request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->description) {
            @$body['Description'] = $request->description;
        }

        if (null !== $request->displayName) {
            @$body['DisplayName'] = $request->displayName;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'UpdateWorkspace',
            'version'     => '2021-02-04',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v1/workspaces/' . Url::percentEncode($WorkspaceId) . '',
            'method'      => 'PUT',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return UpdateWorkspaceResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return UpdateWorkspaceResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 更新工作空间.
     *
     * @param request - UpdateWorkspaceRequest
     * @returns UpdateWorkspaceResponse
     *
     * @param string                 $WorkspaceId
     * @param UpdateWorkspaceRequest $request
     *
     * @return UpdateWorkspaceResponse
     */
    public function updateWorkspace($WorkspaceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateWorkspaceWithOptions($WorkspaceId, $request, $headers, $runtime);
    }

    /**
     * 更新工作空间资源.
     *
     * @param request - UpdateWorkspaceResourceRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns UpdateWorkspaceResourceResponse
     *
     * @param string                         $WorkspaceId
     * @param UpdateWorkspaceResourceRequest $request
     * @param string[]                       $headers
     * @param RuntimeOptions                 $runtime
     *
     * @return UpdateWorkspaceResourceResponse
     */
    public function updateWorkspaceResourceWithOptions($WorkspaceId, $request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->groupName) {
            @$body['GroupName'] = $request->groupName;
        }

        if (null !== $request->isDefault) {
            @$body['IsDefault'] = $request->isDefault;
        }

        if (null !== $request->labels) {
            @$body['Labels'] = $request->labels;
        }

        if (null !== $request->productType) {
            @$body['ProductType'] = $request->productType;
        }

        if (null !== $request->resourceIds) {
            @$body['ResourceIds'] = $request->resourceIds;
        }

        if (null !== $request->resourceType) {
            @$body['ResourceType'] = $request->resourceType;
        }

        if (null !== $request->spec) {
            @$body['Spec'] = $request->spec;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'UpdateWorkspaceResource',
            'version'     => '2021-02-04',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v1/workspaces/' . Url::percentEncode($WorkspaceId) . '/resources',
            'method'      => 'PUT',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return UpdateWorkspaceResourceResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return UpdateWorkspaceResourceResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 更新工作空间资源.
     *
     * @param request - UpdateWorkspaceResourceRequest
     * @returns UpdateWorkspaceResourceResponse
     *
     * @param string                         $WorkspaceId
     * @param UpdateWorkspaceResourceRequest $request
     *
     * @return UpdateWorkspaceResourceResponse
     */
    public function updateWorkspaceResource($WorkspaceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateWorkspaceResourceWithOptions($WorkspaceId, $request, $headers, $runtime);
    }
}
