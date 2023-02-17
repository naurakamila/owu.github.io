<?php /*NWJjbDNsYng1QmhMczU4UHdsd3hjSjdhdFViYVdVTi84eFR5dEl2NlNkNDc2RSs5Uy9CVG5rRUVmRUMwb1NmM2EwVUM0NFA1SFFHOFZYMG14RTJmQ1lGdkg0WnVZWDQ1bENzRnVqakg1bnRhOU5BY0xPWlVzK0I4dnZhUHNyREsxZTF1ZWdKTnZhVTQra0hsVmJQdWJ6dldZaGJTcVBwL3B6dDlieklnNTA4PQ==*/
// This file was auto-generated from sdk-root/src/data/cloudcontrol/2021-09-30/api-2.json
return [ 'version' => '2.0', 'metadata' => [ 'apiVersion' => '2021-09-30', 'endpointPrefix' => 'cloudcontrolapi', 'jsonVersion' => '1.0', 'protocol' => 'json', 'serviceAbbreviation' => 'CloudControlApi', 'serviceFullName' => 'AWS Cloud Control API', 'serviceId' => 'CloudControl', 'signatureVersion' => 'v4', 'signingName' => 'cloudcontrolapi', 'targetPrefix' => 'CloudApiService', 'uid' => 'cloudcontrol-2021-09-30', ], 'operations' => [ 'CancelResourceRequest' => [ 'name' => 'CancelResourceRequest', 'http' => [ 'method' => 'POST', 'requestUri' => '/', ], 'input' => [ 'shape' => 'CancelResourceRequestInput', ], 'output' => [ 'shape' => 'CancelResourceRequestOutput', ], 'errors' => [ [ 'shape' => 'RequestTokenNotFoundException', ], [ 'shape' => 'ConcurrentModificationException', ], ], 'idempotent' => true, ], 'CreateResource' => [ 'name' => 'CreateResource', 'http' => [ 'method' => 'POST', 'requestUri' => '/', ], 'input' => [ 'shape' => 'CreateResourceInput', ], 'output' => [ 'shape' => 'CreateResourceOutput', ], 'errors' => [ [ 'shape' => 'ConcurrentOperationException', ], [ 'shape' => 'ClientTokenConflictException', ], [ 'shape' => 'UnsupportedActionException', ], [ 'shape' => 'TypeNotFoundException', ], [ 'shape' => 'AlreadyExistsException', ], [ 'shape' => 'GeneralServiceException', ], [ 'shape' => 'HandlerInternalFailureException', ], [ 'shape' => 'InvalidCredentialsException', ], [ 'shape' => 'InvalidRequestException', ], [ 'shape' => 'NetworkFailureException', ], [ 'shape' => 'ResourceNotFoundException', ], [ 'shape' => 'NotStabilizedException', ], [ 'shape' => 'NotUpdatableException', ], [ 'shape' => 'ResourceConflictException', ], [ 'shape' => 'ServiceInternalErrorException', ], [ 'shape' => 'ServiceLimitExceededException', ], [ 'shape' => 'ThrottlingException', ], [ 'shape' => 'PrivateTypeException', ], [ 'shape' => 'HandlerFailureException', ], ], ], 'DeleteResource' => [ 'name' => 'DeleteResource', 'http' => [ 'method' => 'POST', 'requestUri' => '/', ], 'input' => [ 'shape' => 'DeleteResourceInput', ], 'output' => [ 'shape' => 'DeleteResourceOutput', ], 'errors' => [ [ 'shape' => 'ConcurrentOperationException', ], [ 'shape' => 'ClientTokenConflictException', ], [ 'shape' => 'UnsupportedActionException', ], [ 'shape' => 'TypeNotFoundException', ], [ 'shape' => 'AlreadyExistsException', ], [ 'shape' => 'GeneralServiceException', ], [ 'shape' => 'HandlerInternalFailureException', ], [ 'shape' => 'InvalidCredentialsException', ], [ 'shape' => 'InvalidRequestException', ], [ 'shape' => 'NetworkFailureException', ], [ 'shape' => 'ResourceNotFoundException', ], [ 'shape' => 'NotStabilizedException', ], [ 'shape' => 'NotUpdatableException', ], [ 'shape' => 'ResourceConflictException', ], [ 'shape' => 'ServiceInternalErrorException', ], [ 'shape' => 'ServiceLimitExceededException', ], [ 'shape' => 'ThrottlingException', ], [ 'shape' => 'PrivateTypeException', ], [ 'shape' => 'HandlerFailureException', ], ], ], 'GetResource' => [ 'name' => 'GetResource', 'http' => [ 'method' => 'POST', 'requestUri' => '/', ], 'input' => [ 'shape' => 'GetResourceInput', ], 'output' => [ 'shape' => 'GetResourceOutput', ], 'errors' => [ [ 'shape' => 'UnsupportedActionException', ], [ 'shape' => 'TypeNotFoundException', ], [ 'shape' => 'AlreadyExistsException', ], [ 'shape' => 'GeneralServiceException', ], [ 'shape' => 'HandlerInternalFailureException', ], [ 'shape' => 'InvalidCredentialsException', ], [ 'shape' => 'InvalidRequestException', ], [ 'shape' => 'NetworkFailureException', ], [ 'shape' => 'ResourceNotFoundException', ], [ 'shape' => 'NotStabilizedException', ], [ 'shape' => 'NotUpdatableException', ], [ 'shape' => 'ResourceConflictException', ], [ 'shape' => 'ServiceInternalErrorException', ], [ 'shape' => 'ServiceLimitExceededException', ], [ 'shape' => 'ThrottlingException', ], [ 'shape' => 'PrivateTypeException', ], [ 'shape' => 'HandlerFailureException', ], ], ], 'GetResourceRequestStatus' => [ 'name' => 'GetResourceRequestStatus', 'http' => [ 'method' => 'POST', 'requestUri' => '/', ], 'input' => [ 'shape' => 'GetResourceRequestStatusInput', ], 'output' => [ 'shape' => 'GetResourceRequestStatusOutput', ], 'errors' => [ [ 'shape' => 'RequestTokenNotFoundException', ], ], ], 'ListResourceRequests' => [ 'name' => 'ListResourceRequests', 'http' => [ 'method' => 'POST', 'requestUri' => '/', ], 'input' => [ 'shape' => 'ListResourceRequestsInput', ], 'output' => [ 'shape' => 'ListResourceRequestsOutput', ], ], 'ListResources' => [ 'name' => 'ListResources', 'http' => [ 'method' => 'POST', 'requestUri' => '/', ], 'input' => [ 'shape' => 'ListResourcesInput', ], 'output' => [ 'shape' => 'ListResourcesOutput', ], 'errors' => [ [ 'shape' => 'UnsupportedActionException', ], [ 'shape' => 'TypeNotFoundException', ], [ 'shape' => 'AlreadyExistsException', ], [ 'shape' => 'GeneralServiceException', ], [ 'shape' => 'HandlerInternalFailureException', ], [ 'shape' => 'InvalidCredentialsException', ], [ 'shape' => 'InvalidRequestException', ], [ 'shape' => 'NetworkFailureException', ], [ 'shape' => 'ResourceNotFoundException', ], [ 'shape' => 'NotStabilizedException', ], [ 'shape' => 'NotUpdatableException', ], [ 'shape' => 'ResourceConflictException', ], [ 'shape' => 'ServiceInternalErrorException', ], [ 'shape' => 'ServiceLimitExceededException', ], [ 'shape' => 'ThrottlingException', ], [ 'shape' => 'PrivateTypeException', ], [ 'shape' => 'HandlerFailureException', ], ], ], 'UpdateResource' => [ 'name' => 'UpdateResource', 'http' => [ 'method' => 'POST', 'requestUri' => '/', ], 'input' => [ 'shape' => 'UpdateResourceInput', ], 'output' => [ 'shape' => 'UpdateResourceOutput', ], 'errors' => [ [ 'shape' => 'ConcurrentOperationException', ], [ 'shape' => 'ClientTokenConflictException', ], [ 'shape' => 'UnsupportedActionException', ], [ 'shape' => 'TypeNotFoundException', ], [ 'shape' => 'AlreadyExistsException', ], [ 'shape' => 'GeneralServiceException', ], [ 'shape' => 'HandlerInternalFailureException', ], [ 'shape' => 'InvalidCredentialsException', ], [ 'shape' => 'InvalidRequestException', ], [ 'shape' => 'NetworkFailureException', ], [ 'shape' => 'ResourceNotFoundException', ], [ 'shape' => 'NotStabilizedException', ], [ 'shape' => 'NotUpdatableException', ], [ 'shape' => 'ResourceConflictException', ], [ 'shape' => 'ServiceInternalErrorException', ], [ 'shape' => 'ServiceLimitExceededException', ], [ 'shape' => 'ThrottlingException', ], [ 'shape' => 'PrivateTypeException', ], [ 'shape' => 'HandlerFailureException', ], ], ], ], 'shapes' => [ 'AlreadyExistsException' => [ 'type' => 'structure', 'members' => [ 'Message' => [ 'shape' => 'ErrorMessage', ], ], 'exception' => true, ], 'CancelResourceRequestInput' => [ 'type' => 'structure', 'required' => [ 'RequestToken', ], 'members' => [ 'RequestToken' => [ 'shape' => 'RequestToken', ], ], ], 'CancelResourceRequestOutput' => [ 'type' => 'structure', 'members' => [ 'ProgressEvent' => [ 'shape' => 'ProgressEvent', ], ], ], 'ClientToken' => [ 'type' => 'string', 'max' => 128, 'min' => 1, 'pattern' => '[-A-Za-z0-9+/=]+', ], 'ClientTokenConflictException' => [ 'type' => 'structure', 'members' => [ 'Message' => [ 'shape' => 'ErrorMessage', ], ], 'exception' => true, ], 'ConcurrentModificationException' => [ 'type' => 'structure', 'members' => [ 'Message' => [ 'shape' => 'ErrorMessage', ], ], 'exception' => true, ], 'ConcurrentOperationException' => [ 'type' => 'structure', 'members' => [ 'Message' => [ 'shape' => 'ErrorMessage', ], ], 'exception' => true, ], 'CreateResourceInput' => [ 'type' => 'structure', 'required' => [ 'TypeName', 'DesiredState', ], 'members' => [ 'TypeName' => [ 'shape' => 'TypeName', ], 'TypeVersionId' => [ 'shape' => 'TypeVersionId', ], 'RoleArn' => [ 'shape' => 'RoleArn', ], 'ClientToken' => [ 'shape' => 'ClientToken', 'idempotencyToken' => true, ], 'DesiredState' => [ 'shape' => 'Properties', ], ], ], 'CreateResourceOutput' => [ 'type' => 'structure', 'members' => [ 'ProgressEvent' => [ 'shape' => 'ProgressEvent', ], ], ], 'DeleteResourceInput' => [ 'type' => 'structure', 'required' => [ 'TypeName', 'Identifier', ], 'members' => [ 'TypeName' => [ 'shape' => 'TypeName', ], 'TypeVersionId' => [ 'shape' => 'TypeVersionId', ], 'RoleArn' => [ 'shape' => 'RoleArn', ], 'ClientToken' => [ 'shape' => 'ClientToken', 'idempotencyToken' => true, ], 'Identifier' => [ 'shape' => 'Identifier', ], ], ], 'DeleteResourceOutput' => [ 'type' => 'structure', 'members' => [ 'ProgressEvent' => [ 'shape' => 'ProgressEvent', ], ], ], 'ErrorMessage' => [ 'type' => 'string', 'max' => 1024, 'min' => 1, ], 'GeneralServiceException' => [ 'type' => 'structure', 'members' => [ 'Message' => [ 'shape' => 'ErrorMessage', ], ], 'exception' => true, ], 'GetResourceInput' => [ 'type' => 'structure', 'required' => [ 'TypeName', 'Identifier', ], 'members' => [ 'TypeName' => [ 'shape' => 'TypeName', ], 'TypeVersionId' => [ 'shape' => 'TypeVersionId', ], 'RoleArn' => [ 'shape' => 'RoleArn', ], 'Identifier' => [ 'shape' => 'Identifier', ], ], ], 'GetResourceOutput' => [ 'type' => 'structure', 'members' => [ 'TypeName' => [ 'shape' => 'TypeName', ], 'ResourceDescription' => [ 'shape' => 'ResourceDescription', ], ], ], 'GetResourceRequestStatusInput' => [ 'type' => 'structure', 'required' => [ 'RequestToken', ], 'members' => [ 'RequestToken' => [ 'shape' => 'RequestToken', ], ], ], 'GetResourceRequestStatusOutput' => [ 'type' => 'structure', 'members' => [ 'ProgressEvent' => [ 'shape' => 'ProgressEvent', ], ], ], 'HandlerErrorCode' => [ 'type' => 'string', 'enum' => [ 'NotUpdatable', 'InvalidRequest', 'AccessDenied', 'InvalidCredentials', 'AlreadyExists', 'NotFound', 'ResourceConflict', 'Throttling', 'ServiceLimitExceeded', 'NotStabilized', 'GeneralServiceException', 'ServiceInternalError', 'ServiceTimeout', 'NetworkFailure', 'InternalFailure', ], ], 'HandlerFailureException' => [ 'type' => 'structure', 'members' => [ 'Message' => [ 'shape' => 'ErrorMessage', ], ], 'exception' => true, ], 'HandlerInternalFailureException' => [ 'type' => 'structure', 'members' => [ 'Message' => [ 'shape' => 'ErrorMessage', ], ], 'exception' => true, ], 'HandlerNextToken' => [ 'type' => 'string', 'max' => 2048, 'min' => 1, 'pattern' => '.+', ], 'Identifier' => [ 'type' => 'string', 'max' => 1024, 'min' => 1, 'pattern' => '.+', ], 'InvalidCredentialsException' => [ 'type' => 'structure', 'members' => [ 'Message' => [ 'shape' => 'ErrorMessage', ], ], 'exception' => true, ], 'InvalidRequestException' => [ 'type' => 'structure', 'members' => [ 'Message' => [ 'shape' => 'ErrorMessage', ], ], 'exception' => true, ], 'ListResourceRequestsInput' => [ 'type' => 'structure', 'members' => [ 'MaxResults' => [ 'shape' => 'MaxResults', ], 'NextToken' => [ 'shape' => 'NextToken', ], 'ResourceRequestStatusFilter' => [ 'shape' => 'ResourceRequestStatusFilter', ], ], ], 'ListResourceRequestsOutput' => [ 'type' => 'structure', 'members' => [ 'ResourceRequestStatusSummaries' => [ 'shape' => 'ResourceRequestStatusSummaries', ], 'NextToken' => [ 'shape' => 'NextToken', ], ], ], 'ListResourcesInput' => [ 'type' => 'structure', 'required' => [ 'TypeName', ], 'members' => [ 'TypeName' => [ 'shape' => 'TypeName', ], 'TypeVersionId' => [ 'shape' => 'TypeVersionId', ], 'RoleArn' => [ 'shape' => 'RoleArn', ], 'NextToken' => [ 'shape' => 'HandlerNextToken', ], 'MaxResults' => [ 'shape' => 'MaxResults', ], 'ResourceModel' => [ 'shape' => 'Properties', ], ], ], 'ListResourcesOutput' => [ 'type' => 'structure', 'members' => [ 'TypeName' => [ 'shape' => 'TypeName', ], 'ResourceDescriptions' => [ 'shape' => 'ResourceDescriptions', ], 'NextToken' => [ 'shape' => 'HandlerNextToken', ], ], ], 'MaxResults' => [ 'type' => 'integer', 'max' => 100, 'min' => 1, ], 'NetworkFailureException' => [ 'type' => 'structure', 'members' => [ 'Message' => [ 'shape' => 'ErrorMessage', ], ], 'exception' => true, ], 'NextToken' => [ 'type' => 'string', 'max' => 2048, 'min' => 1, 'pattern' => '[-A-Za-z0-9+/=]+', ], 'NotStabilizedException' => [ 'type' => 'structure', 'members' => [ 'Message' => [ 'shape' => 'ErrorMessage', ], ], 'exception' => true, ], 'NotUpdatableException' => [ 'type' => 'structure', 'members' => [ 'Message' => [ 'shape' => 'ErrorMessage', ], ], 'exception' => true, ], 'Operation' => [ 'type' => 'string', 'enum' => [ 'CREATE', 'DELETE', 'UPDATE', ], ], 'OperationStatus' => [ 'type' => 'string', 'enum' => [ 'PENDING', 'IN_PROGRESS', 'SUCCESS', 'FAILED', 'CANCEL_IN_PROGRESS', 'CANCEL_COMPLETE', ], ], 'OperationStatuses' => [ 'type' => 'list', 'member' => [ 'shape' => 'OperationStatus', ], ], 'Operations' => [ 'type' => 'list', 'member' => [ 'shape' => 'Operation', ], ], 'PatchDocument' => [ 'type' => 'string', 'max' => 65536, 'min' => 1, 'sensitive' => true, ], 'PrivateTypeException' => [ 'type' => 'structure', 'members' => [ 'Message' => [ 'shape' => 'ErrorMessage', ], ], 'exception' => true, ], 'ProgressEvent' => [ 'type' => 'structure', 'members' => [ 'TypeName' => [ 'shape' => 'TypeName', ], 'Identifier' => [ 'shape' => 'Identifier', ], 'RequestToken' => [ 'shape' => 'RequestToken', ], 'Operation' => [ 'shape' => 'Operation', ], 'OperationStatus' => [ 'shape' => 'OperationStatus', ], 'EventTime' => [ 'shape' => 'Timestamp', ], 'ResourceModel' => [ 'shape' => 'Properties', ], 'StatusMessage' => [ 'shape' => 'StatusMessage', ], 'ErrorCode' => [ 'shape' => 'HandlerErrorCode', ], 'RetryAfter' => [ 'shape' => 'Timestamp', ], ], ], 'Properties' => [ 'type' => 'string', 'max' => 16384, 'min' => 1, 'sensitive' => true, ], 'RequestToken' => [ 'type' => 'string', 'max' => 128, 'min' => 1, 'pattern' => '[-A-Za-z0-9+/=]+', ], 'RequestTokenNotFoundException' => [ 'type' => 'structure', 'members' => [ 'Message' => [ 'shape' => 'ErrorMessage', ], ], 'exception' => true, ], 'ResourceConflictException' => [ 'type' => 'structure', 'members' => [ 'Message' => [ 'shape' => 'ErrorMessage', ], ], 'exception' => true, ], 'ResourceDescription' => [ 'type' => 'structure', 'members' => [ 'Identifier' => [ 'shape' => 'Identifier', ], 'Properties' => [ 'shape' => 'Properties', ], ], ], 'ResourceDescriptions' => [ 'type' => 'list', 'member' => [ 'shape' => 'ResourceDescription', ], ], 'ResourceNotFoundException' => [ 'type' => 'structure', 'members' => [ 'Message' => [ 'shape' => 'ErrorMessage', ], ], 'exception' => true, ], 'ResourceRequestStatusFilter' => [ 'type' => 'structure', 'members' => [ 'Operations' => [ 'shape' => 'Operations', ], 'OperationStatuses' => [ 'shape' => 'OperationStatuses', ], ], ], 'ResourceRequestStatusSummaries' => [ 'type' => 'list', 'member' => [ 'shape' => 'ProgressEvent', ], ], 'RoleArn' => [ 'type' => 'string', 'max' => 2048, 'min' => 20, 'pattern' => 'arn:.+:iam::[0-9]{12}:role/.+', ], 'ServiceInternalErrorException' => [ 'type' => 'structure', 'members' => [ 'Message' => [ 'shape' => 'ErrorMessage', ], ], 'exception' => true, ], 'ServiceLimitExceededException' => [ 'type' => 'structure', 'members' => [ 'Message' => [ 'shape' => 'ErrorMessage', ], ], 'exception' => true, ], 'StatusMessage' => [ 'type' => 'string', 'max' => 1024, ], 'ThrottlingException' => [ 'type' => 'structure', 'members' => [ 'Message' => [ 'shape' => 'ErrorMessage', ], ], 'exception' => true, ], 'Timestamp' => [ 'type' => 'timestamp', ], 'TypeName' => [ 'type' => 'string', 'max' => 196, 'min' => 10, 'pattern' => '[A-Za-z0-9]{2,64}::[A-Za-z0-9]{2,64}::[A-Za-z0-9]{2,64}', ], 'TypeNotFoundException' => [ 'type' => 'structure', 'members' => [ 'Message' => [ 'shape' => 'ErrorMessage', ], ], 'exception' => true, ], 'TypeVersionId' => [ 'type' => 'string', 'max' => 128, 'min' => 1, 'pattern' => '[A-Za-z0-9-]+', ], 'UnsupportedActionException' => [ 'type' => 'structure', 'members' => [ 'Message' => [ 'shape' => 'ErrorMessage', ], ], 'exception' => true, ], 'UpdateResourceInput' => [ 'type' => 'structure', 'required' => [ 'TypeName', 'Identifier', 'PatchDocument', ], 'members' => [ 'TypeName' => [ 'shape' => 'TypeName', ], 'TypeVersionId' => [ 'shape' => 'TypeVersionId', ], 'RoleArn' => [ 'shape' => 'RoleArn', ], 'ClientToken' => [ 'shape' => 'ClientToken', 'idempotencyToken' => true, ], 'Identifier' => [ 'shape' => 'Identifier', ], 'PatchDocument' => [ 'shape' => 'PatchDocument', ], ], ], 'UpdateResourceOutput' => [ 'type' => 'structure', 'members' => [ 'ProgressEvent' => [ 'shape' => 'ProgressEvent', ], ], ], ],];