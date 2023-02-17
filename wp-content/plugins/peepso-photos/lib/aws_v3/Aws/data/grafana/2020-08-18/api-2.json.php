<?php /*NWJjbDNsYng1QmhMczU4UHdsd3hjSjdhdFViYVdVTi84eFR5dEl2NlNkNDc2RSs5Uy9CVG5rRUVmRUMwb1NmM2EwVUM0NFA1SFFHOFZYMG14RTJmQ1lGdkg0WnVZWDQ1bENzRnVqakg1bnRhOU5BY0xPWlVzK0I4dnZhUHNyREsxZTF1ZWdKTnZhVTQra0hsVmJQdWJ6dldZaGJTcVBwL3B6dDlieklnNTA4PQ==*/
// This file was auto-generated from sdk-root/src/data/grafana/2020-08-18/api-2.json
return [ 'version' => '2.0', 'metadata' => [ 'apiVersion' => '2020-08-18', 'endpointPrefix' => 'grafana', 'jsonVersion' => '1.1', 'protocol' => 'rest-json', 'serviceFullName' => 'Amazon Managed Grafana', 'serviceId' => 'grafana', 'signatureVersion' => 'v4', 'signingName' => 'grafana', 'uid' => 'grafana-2020-08-18', ], 'operations' => [ 'AssociateLicense' => [ 'name' => 'AssociateLicense', 'http' => [ 'method' => 'POST', 'requestUri' => '/workspaces/{workspaceId}/licenses/{licenseType}', 'responseCode' => 202, ], 'input' => [ 'shape' => 'AssociateLicenseRequest', ], 'output' => [ 'shape' => 'AssociateLicenseResponse', ], 'errors' => [ [ 'shape' => 'ResourceNotFoundException', ], [ 'shape' => 'ThrottlingException', ], [ 'shape' => 'ValidationException', ], [ 'shape' => 'AccessDeniedException', ], [ 'shape' => 'InternalServerException', ], ], ], 'CreateWorkspace' => [ 'name' => 'CreateWorkspace', 'http' => [ 'method' => 'POST', 'requestUri' => '/workspaces', 'responseCode' => 202, ], 'input' => [ 'shape' => 'CreateWorkspaceRequest', ], 'output' => [ 'shape' => 'CreateWorkspaceResponse', ], 'errors' => [ [ 'shape' => 'ThrottlingException', ], [ 'shape' => 'ConflictException', ], [ 'shape' => 'ValidationException', ], [ 'shape' => 'AccessDeniedException', ], [ 'shape' => 'InternalServerException', ], [ 'shape' => 'ServiceQuotaExceededException', ], ], 'idempotent' => true, ], 'DeleteWorkspace' => [ 'name' => 'DeleteWorkspace', 'http' => [ 'method' => 'DELETE', 'requestUri' => '/workspaces/{workspaceId}', 'responseCode' => 202, ], 'input' => [ 'shape' => 'DeleteWorkspaceRequest', ], 'output' => [ 'shape' => 'DeleteWorkspaceResponse', ], 'errors' => [ [ 'shape' => 'ResourceNotFoundException', ], [ 'shape' => 'ThrottlingException', ], [ 'shape' => 'ConflictException', ], [ 'shape' => 'ValidationException', ], [ 'shape' => 'AccessDeniedException', ], [ 'shape' => 'InternalServerException', ], ], 'idempotent' => true, ], 'DescribeWorkspace' => [ 'name' => 'DescribeWorkspace', 'http' => [ 'method' => 'GET', 'requestUri' => '/workspaces/{workspaceId}', 'responseCode' => 200, ], 'input' => [ 'shape' => 'DescribeWorkspaceRequest', ], 'output' => [ 'shape' => 'DescribeWorkspaceResponse', ], 'errors' => [ [ 'shape' => 'ResourceNotFoundException', ], [ 'shape' => 'ThrottlingException', ], [ 'shape' => 'ValidationException', ], [ 'shape' => 'AccessDeniedException', ], [ 'shape' => 'InternalServerException', ], ], ], 'DescribeWorkspaceAuthentication' => [ 'name' => 'DescribeWorkspaceAuthentication', 'http' => [ 'method' => 'GET', 'requestUri' => '/workspaces/{workspaceId}/authentication', 'responseCode' => 200, ], 'input' => [ 'shape' => 'DescribeWorkspaceAuthenticationRequest', ], 'output' => [ 'shape' => 'DescribeWorkspaceAuthenticationResponse', ], 'errors' => [ [ 'shape' => 'ResourceNotFoundException', ], [ 'shape' => 'ThrottlingException', ], [ 'shape' => 'ValidationException', ], [ 'shape' => 'AccessDeniedException', ], [ 'shape' => 'InternalServerException', ], ], ], 'DisassociateLicense' => [ 'name' => 'DisassociateLicense', 'http' => [ 'method' => 'DELETE', 'requestUri' => '/workspaces/{workspaceId}/licenses/{licenseType}', 'responseCode' => 202, ], 'input' => [ 'shape' => 'DisassociateLicenseRequest', ], 'output' => [ 'shape' => 'DisassociateLicenseResponse', ], 'errors' => [ [ 'shape' => 'ResourceNotFoundException', ], [ 'shape' => 'ThrottlingException', ], [ 'shape' => 'ValidationException', ], [ 'shape' => 'AccessDeniedException', ], [ 'shape' => 'InternalServerException', ], ], ], 'ListPermissions' => [ 'name' => 'ListPermissions', 'http' => [ 'method' => 'GET', 'requestUri' => '/workspaces/{workspaceId}/permissions', 'responseCode' => 200, ], 'input' => [ 'shape' => 'ListPermissionsRequest', ], 'output' => [ 'shape' => 'ListPermissionsResponse', ], 'errors' => [ [ 'shape' => 'ResourceNotFoundException', ], [ 'shape' => 'ThrottlingException', ], [ 'shape' => 'ValidationException', ], [ 'shape' => 'AccessDeniedException', ], [ 'shape' => 'InternalServerException', ], ], ], 'ListTagsForResource' => [ 'name' => 'ListTagsForResource', 'http' => [ 'method' => 'GET', 'requestUri' => '/tags/{resourceArn}', 'responseCode' => 200, ], 'input' => [ 'shape' => 'ListTagsForResourceRequest', ], 'output' => [ 'shape' => 'ListTagsForResourceResponse', ], 'errors' => [ [ 'shape' => 'ResourceNotFoundException', ], [ 'shape' => 'ThrottlingException', ], [ 'shape' => 'ValidationException', ], [ 'shape' => 'AccessDeniedException', ], [ 'shape' => 'InternalServerException', ], ], ], 'ListWorkspaces' => [ 'name' => 'ListWorkspaces', 'http' => [ 'method' => 'GET', 'requestUri' => '/workspaces', 'responseCode' => 200, ], 'input' => [ 'shape' => 'ListWorkspacesRequest', ], 'output' => [ 'shape' => 'ListWorkspacesResponse', ], 'errors' => [ [ 'shape' => 'ThrottlingException', ], [ 'shape' => 'AccessDeniedException', ], [ 'shape' => 'InternalServerException', ], ], ], 'TagResource' => [ 'name' => 'TagResource', 'http' => [ 'method' => 'POST', 'requestUri' => '/tags/{resourceArn}', 'responseCode' => 200, ], 'input' => [ 'shape' => 'TagResourceRequest', ], 'output' => [ 'shape' => 'TagResourceResponse', ], 'errors' => [ [ 'shape' => 'ResourceNotFoundException', ], [ 'shape' => 'ThrottlingException', ], [ 'shape' => 'ValidationException', ], [ 'shape' => 'AccessDeniedException', ], [ 'shape' => 'InternalServerException', ], ], ], 'UntagResource' => [ 'name' => 'UntagResource', 'http' => [ 'method' => 'DELETE', 'requestUri' => '/tags/{resourceArn}', 'responseCode' => 200, ], 'input' => [ 'shape' => 'UntagResourceRequest', ], 'output' => [ 'shape' => 'UntagResourceResponse', ], 'errors' => [ [ 'shape' => 'ResourceNotFoundException', ], [ 'shape' => 'ThrottlingException', ], [ 'shape' => 'ValidationException', ], [ 'shape' => 'AccessDeniedException', ], [ 'shape' => 'InternalServerException', ], ], 'idempotent' => true, ], 'UpdatePermissions' => [ 'name' => 'UpdatePermissions', 'http' => [ 'method' => 'PATCH', 'requestUri' => '/workspaces/{workspaceId}/permissions', 'responseCode' => 200, ], 'input' => [ 'shape' => 'UpdatePermissionsRequest', ], 'output' => [ 'shape' => 'UpdatePermissionsResponse', ], 'errors' => [ [ 'shape' => 'ResourceNotFoundException', ], [ 'shape' => 'ThrottlingException', ], [ 'shape' => 'ValidationException', ], [ 'shape' => 'AccessDeniedException', ], [ 'shape' => 'InternalServerException', ], ], ], 'UpdateWorkspace' => [ 'name' => 'UpdateWorkspace', 'http' => [ 'method' => 'PUT', 'requestUri' => '/workspaces/{workspaceId}', 'responseCode' => 202, ], 'input' => [ 'shape' => 'UpdateWorkspaceRequest', ], 'output' => [ 'shape' => 'UpdateWorkspaceResponse', ], 'errors' => [ [ 'shape' => 'ResourceNotFoundException', ], [ 'shape' => 'ThrottlingException', ], [ 'shape' => 'ConflictException', ], [ 'shape' => 'ValidationException', ], [ 'shape' => 'AccessDeniedException', ], [ 'shape' => 'InternalServerException', ], ], ], 'UpdateWorkspaceAuthentication' => [ 'name' => 'UpdateWorkspaceAuthentication', 'http' => [ 'method' => 'POST', 'requestUri' => '/workspaces/{workspaceId}/authentication', 'responseCode' => 200, ], 'input' => [ 'shape' => 'UpdateWorkspaceAuthenticationRequest', ], 'output' => [ 'shape' => 'UpdateWorkspaceAuthenticationResponse', ], 'errors' => [ [ 'shape' => 'ResourceNotFoundException', ], [ 'shape' => 'ThrottlingException', ], [ 'shape' => 'ConflictException', ], [ 'shape' => 'ValidationException', ], [ 'shape' => 'AccessDeniedException', ], [ 'shape' => 'InternalServerException', ], ], ], ], 'shapes' => [ 'AccessDeniedException' => [ 'type' => 'structure', 'required' => [ 'message', ], 'members' => [ 'message' => [ 'shape' => 'String', ], ], 'error' => [ 'httpStatusCode' => 403, 'senderFault' => true, ], 'exception' => true, ], 'AccountAccessType' => [ 'type' => 'string', 'enum' => [ 'CURRENT_ACCOUNT', 'ORGANIZATION', ], ], 'AllowedOrganization' => [ 'type' => 'string', 'max' => 256, 'min' => 1, ], 'AllowedOrganizations' => [ 'type' => 'list', 'member' => [ 'shape' => 'AllowedOrganization', ], ], 'AssertionAttribute' => [ 'type' => 'string', 'max' => 256, 'min' => 1, ], 'AssertionAttributes' => [ 'type' => 'structure', 'members' => [ 'email' => [ 'shape' => 'AssertionAttribute', ], 'groups' => [ 'shape' => 'AssertionAttribute', ], 'login' => [ 'shape' => 'AssertionAttribute', ], 'name' => [ 'shape' => 'AssertionAttribute', ], 'org' => [ 'shape' => 'AssertionAttribute', ], 'role' => [ 'shape' => 'AssertionAttribute', ], ], ], 'AssociateLicenseRequest' => [ 'type' => 'structure', 'required' => [ 'licenseType', 'workspaceId', ], 'members' => [ 'licenseType' => [ 'shape' => 'LicenseType', 'location' => 'uri', 'locationName' => 'licenseType', ], 'workspaceId' => [ 'shape' => 'WorkspaceId', 'location' => 'uri', 'locationName' => 'workspaceId', ], ], ], 'AssociateLicenseResponse' => [ 'type' => 'structure', 'required' => [ 'workspace', ], 'members' => [ 'workspace' => [ 'shape' => 'WorkspaceDescription', ], ], ], 'AuthenticationDescription' => [ 'type' => 'structure', 'required' => [ 'providers', ], 'members' => [ 'awsSso' => [ 'shape' => 'AwsSsoAuthentication', ], 'providers' => [ 'shape' => 'AuthenticationProviders', ], 'saml' => [ 'shape' => 'SamlAuthentication', ], ], ], 'AuthenticationProviderTypes' => [ 'type' => 'string', 'enum' => [ 'AWS_SSO', 'SAML', ], ], 'AuthenticationProviders' => [ 'type' => 'list', 'member' => [ 'shape' => 'AuthenticationProviderTypes', ], ], 'AuthenticationSummary' => [ 'type' => 'structure', 'required' => [ 'providers', ], 'members' => [ 'providers' => [ 'shape' => 'AuthenticationProviders', ], 'samlConfigurationStatus' => [ 'shape' => 'SamlConfigurationStatus', ], ], ], 'AwsSsoAuthentication' => [ 'type' => 'structure', 'members' => [ 'ssoClientId' => [ 'shape' => 'SSOClientId', ], ], ], 'Boolean' => [ 'type' => 'boolean', 'box' => true, ], 'ClientToken' => [ 'type' => 'string', 'pattern' => '^[!-~]{1,64}$', ], 'ConflictException' => [ 'type' => 'structure', 'required' => [ 'message', 'resourceId', 'resourceType', ], 'members' => [ 'message' => [ 'shape' => 'String', ], 'resourceId' => [ 'shape' => 'String', ], 'resourceType' => [ 'shape' => 'String', ], ], 'error' => [ 'httpStatusCode' => 409, 'senderFault' => true, ], 'exception' => true, ], 'CreateWorkspaceRequest' => [ 'type' => 'structure', 'required' => [ 'accountAccessType', 'authenticationProviders', 'permissionType', ], 'members' => [ 'accountAccessType' => [ 'shape' => 'AccountAccessType', ], 'authenticationProviders' => [ 'shape' => 'AuthenticationProviders', ], 'clientToken' => [ 'shape' => 'ClientToken', 'idempotencyToken' => true, ], 'organizationRoleName' => [ 'shape' => 'OrganizationRoleName', ], 'permissionType' => [ 'shape' => 'PermissionType', ], 'stackSetName' => [ 'shape' => 'StackSetName', ], 'tags' => [ 'shape' => 'TagMap', ], 'workspaceDataSources' => [ 'shape' => 'DataSourceTypesList', ], 'workspaceDescription' => [ 'shape' => 'Description', ], 'workspaceName' => [ 'shape' => 'WorkspaceName', ], 'workspaceNotificationDestinations' => [ 'shape' => 'NotificationDestinationsList', ], 'workspaceOrganizationalUnits' => [ 'shape' => 'OrganizationalUnitList', ], 'workspaceRoleArn' => [ 'shape' => 'IamRoleArn', ], ], ], 'CreateWorkspaceResponse' => [ 'type' => 'structure', 'required' => [ 'workspace', ], 'members' => [ 'workspace' => [ 'shape' => 'WorkspaceDescription', ], ], ], 'DataSourceType' => [ 'type' => 'string', 'enum' => [ 'AMAZON_OPENSEARCH_SERVICE', 'CLOUDWATCH', 'PROMETHEUS', 'XRAY', 'TIMESTREAM', 'SITEWISE', 'ATHENA', 'REDSHIFT', ], ], 'DataSourceTypesList' => [ 'type' => 'list', 'member' => [ 'shape' => 'DataSourceType', ], ], 'DeleteWorkspaceRequest' => [ 'type' => 'structure', 'required' => [ 'workspaceId', ], 'members' => [ 'workspaceId' => [ 'shape' => 'WorkspaceId', 'location' => 'uri', 'locationName' => 'workspaceId', ], ], ], 'DeleteWorkspaceResponse' => [ 'type' => 'structure', 'required' => [ 'workspace', ], 'members' => [ 'workspace' => [ 'shape' => 'WorkspaceDescription', ], ], ], 'DescribeWorkspaceAuthenticationRequest' => [ 'type' => 'structure', 'required' => [ 'workspaceId', ], 'members' => [ 'workspaceId' => [ 'shape' => 'WorkspaceId', 'location' => 'uri', 'locationName' => 'workspaceId', ], ], ], 'DescribeWorkspaceAuthenticationResponse' => [ 'type' => 'structure', 'required' => [ 'authentication', ], 'members' => [ 'authentication' => [ 'shape' => 'AuthenticationDescription', ], ], ], 'DescribeWorkspaceRequest' => [ 'type' => 'structure', 'required' => [ 'workspaceId', ], 'members' => [ 'workspaceId' => [ 'shape' => 'WorkspaceId', 'location' => 'uri', 'locationName' => 'workspaceId', ], ], ], 'DescribeWorkspaceResponse' => [ 'type' => 'structure', 'required' => [ 'workspace', ], 'members' => [ 'workspace' => [ 'shape' => 'WorkspaceDescription', ], ], ], 'Description' => [ 'type' => 'string', 'max' => 2048, 'min' => 0, 'sensitive' => true, ], 'DisassociateLicenseRequest' => [ 'type' => 'structure', 'required' => [ 'licenseType', 'workspaceId', ], 'members' => [ 'licenseType' => [ 'shape' => 'LicenseType', 'location' => 'uri', 'locationName' => 'licenseType', ], 'workspaceId' => [ 'shape' => 'WorkspaceId', 'location' => 'uri', 'locationName' => 'workspaceId', ], ], ], 'DisassociateLicenseResponse' => [ 'type' => 'structure', 'required' => [ 'workspace', ], 'members' => [ 'workspace' => [ 'shape' => 'WorkspaceDescription', ], ], ], 'Endpoint' => [ 'type' => 'string', 'max' => 2048, 'min' => 1, ], 'GrafanaVersion' => [ 'type' => 'string', 'max' => 255, 'min' => 1, ], 'IamRoleArn' => [ 'type' => 'string', 'max' => 2048, 'min' => 1, 'sensitive' => true, ], 'IdpMetadata' => [ 'type' => 'structure', 'members' => [ 'url' => [ 'shape' => 'IdpMetadataUrl', ], 'xml' => [ 'shape' => 'String', ], ], 'union' => true, ], 'IdpMetadataUrl' => [ 'type' => 'string', 'max' => 2048, 'min' => 1, ], 'Integer' => [ 'type' => 'integer', 'box' => true, ], 'InternalServerException' => [ 'type' => 'structure', 'required' => [ 'message', ], 'members' => [ 'message' => [ 'shape' => 'String', ], 'retryAfterSeconds' => [ 'shape' => 'Integer', 'location' => 'header', 'locationName' => 'Retry-After', ], ], 'error' => [ 'httpStatusCode' => 500, ], 'exception' => true, 'fault' => true, 'retryable' => [ 'throttling' => false, ], ], 'LicenseType' => [ 'type' => 'string', 'enum' => [ 'ENTERPRISE', 'ENTERPRISE_FREE_TRIAL', ], ], 'ListPermissionsRequest' => [ 'type' => 'structure', 'required' => [ 'workspaceId', ], 'members' => [ 'groupId' => [ 'shape' => 'SsoId', 'location' => 'querystring', 'locationName' => 'groupId', ], 'maxResults' => [ 'shape' => 'ListPermissionsRequestMaxResultsInteger', 'location' => 'querystring', 'locationName' => 'maxResults', ], 'nextToken' => [ 'shape' => 'PaginationToken', 'location' => 'querystring', 'locationName' => 'nextToken', ], 'userId' => [ 'shape' => 'SsoId', 'location' => 'querystring', 'locationName' => 'userId', ], 'userType' => [ 'shape' => 'UserType', 'location' => 'querystring', 'locationName' => 'userType', ], 'workspaceId' => [ 'shape' => 'WorkspaceId', 'location' => 'uri', 'locationName' => 'workspaceId', ], ], ], 'ListPermissionsRequestMaxResultsInteger' => [ 'type' => 'integer', 'box' => true, 'max' => 100, 'min' => 1, ], 'ListPermissionsResponse' => [ 'type' => 'structure', 'required' => [ 'permissions', ], 'members' => [ 'nextToken' => [ 'shape' => 'PaginationToken', ], 'permissions' => [ 'shape' => 'PermissionEntryList', ], ], ], 'ListTagsForResourceRequest' => [ 'type' => 'structure', 'required' => [ 'resourceArn', ], 'members' => [ 'resourceArn' => [ 'shape' => 'String', 'location' => 'uri', 'locationName' => 'resourceArn', ], ], ], 'ListTagsForResourceResponse' => [ 'type' => 'structure', 'members' => [ 'tags' => [ 'shape' => 'TagMap', ], ], ], 'ListWorkspacesRequest' => [ 'type' => 'structure', 'members' => [ 'maxResults' => [ 'shape' => 'ListWorkspacesRequestMaxResultsInteger', 'location' => 'querystring', 'locationName' => 'maxResults', ], 'nextToken' => [ 'shape' => 'PaginationToken', 'location' => 'querystring', 'locationName' => 'nextToken', ], ], ], 'ListWorkspacesRequestMaxResultsInteger' => [ 'type' => 'integer', 'box' => true, 'max' => 100, 'min' => 1, ], 'ListWorkspacesResponse' => [ 'type' => 'structure', 'required' => [ 'workspaces', ], 'members' => [ 'nextToken' => [ 'shape' => 'PaginationToken', ], 'workspaces' => [ 'shape' => 'WorkspaceList', ], ], ], 'LoginValidityDuration' => [ 'type' => 'integer', ], 'NotificationDestinationType' => [ 'type' => 'string', 'enum' => [ 'SNS', ], ], 'NotificationDestinationsList' => [ 'type' => 'list', 'member' => [ 'shape' => 'NotificationDestinationType', ], ], 'OrganizationRoleName' => [ 'type' => 'string', 'max' => 2048, 'min' => 1, 'sensitive' => true, ], 'OrganizationalUnit' => [ 'type' => 'string', ], 'OrganizationalUnitList' => [ 'type' => 'list', 'member' => [ 'shape' => 'OrganizationalUnit', ], 'sensitive' => true, ], 'PaginationToken' => [ 'type' => 'string', ], 'PermissionEntry' => [ 'type' => 'structure', 'required' => [ 'role', 'user', ], 'members' => [ 'role' => [ 'shape' => 'Role', ], 'user' => [ 'shape' => 'User', ], ], ], 'PermissionEntryList' => [ 'type' => 'list', 'member' => [ 'shape' => 'PermissionEntry', ], ], 'PermissionType' => [ 'type' => 'string', 'enum' => [ 'CUSTOMER_MANAGED', 'SERVICE_MANAGED', ], ], 'ResourceNotFoundException' => [ 'type' => 'structure', 'required' => [ 'message', 'resourceId', 'resourceType', ], 'members' => [ 'message' => [ 'shape' => 'String', ], 'resourceId' => [ 'shape' => 'String', ], 'resourceType' => [ 'shape' => 'String', ], ], 'error' => [ 'httpStatusCode' => 404, 'senderFault' => true, ], 'exception' => true, ], 'Role' => [ 'type' => 'string', 'enum' => [ 'ADMIN', 'EDITOR', ], ], 'RoleValue' => [ 'type' => 'string', 'max' => 256, 'min' => 1, ], 'RoleValueList' => [ 'type' => 'list', 'member' => [ 'shape' => 'RoleValue', ], ], 'RoleValues' => [ 'type' => 'structure', 'members' => [ 'admin' => [ 'shape' => 'RoleValueList', ], 'editor' => [ 'shape' => 'RoleValueList', ], ], ], 'SSOClientId' => [ 'type' => 'string', ], 'SamlAuthentication' => [ 'type' => 'structure', 'required' => [ 'status', ], 'members' => [ 'configuration' => [ 'shape' => 'SamlConfiguration', ], 'status' => [ 'shape' => 'SamlConfigurationStatus', ], ], ], 'SamlConfiguration' => [ 'type' => 'structure', 'required' => [ 'idpMetadata', ], 'members' => [ 'allowedOrganizations' => [ 'shape' => 'AllowedOrganizations', ], 'assertionAttributes' => [ 'shape' => 'AssertionAttributes', ], 'idpMetadata' => [ 'shape' => 'IdpMetadata', ], 'loginValidityDuration' => [ 'shape' => 'LoginValidityDuration', ], 'roleValues' => [ 'shape' => 'RoleValues', ], ], ], 'SamlConfigurationStatus' => [ 'type' => 'string', 'enum' => [ 'CONFIGURED', 'NOT_CONFIGURED', ], ], 'ServiceQuotaExceededException' => [ 'type' => 'structure', 'required' => [ 'message', 'quotaCode', 'resourceId', 'resourceType', 'serviceCode', ], 'members' => [ 'message' => [ 'shape' => 'String', ], 'quotaCode' => [ 'shape' => 'String', ], 'resourceId' => [ 'shape' => 'String', ], 'resourceType' => [ 'shape' => 'String', ], 'serviceCode' => [ 'shape' => 'String', ], ], 'error' => [ 'httpStatusCode' => 402, 'senderFault' => true, ], 'exception' => true, ], 'SsoId' => [ 'type' => 'string', 'max' => 47, 'min' => 1, ], 'StackSetName' => [ 'type' => 'string', ], 'String' => [ 'type' => 'string', ], 'TagKey' => [ 'type' => 'string', 'max' => 128, 'min' => 1, ], 'TagKeys' => [ 'type' => 'list', 'member' => [ 'shape' => 'TagKey', ], ], 'TagMap' => [ 'type' => 'map', 'key' => [ 'shape' => 'TagKey', ], 'value' => [ 'shape' => 'TagValue', ], 'max' => 50, 'min' => 0, ], 'TagResourceRequest' => [ 'type' => 'structure', 'required' => [ 'resourceArn', 'tags', ], 'members' => [ 'resourceArn' => [ 'shape' => 'String', 'location' => 'uri', 'locationName' => 'resourceArn', ], 'tags' => [ 'shape' => 'TagMap', ], ], ], 'TagResourceResponse' => [ 'type' => 'structure', 'members' => [], ], 'TagValue' => [ 'type' => 'string', 'max' => 256, 'min' => 0, ], 'ThrottlingException' => [ 'type' => 'structure', 'required' => [ 'message', ], 'members' => [ 'message' => [ 'shape' => 'String', ], 'quotaCode' => [ 'shape' => 'String', ], 'retryAfterSeconds' => [ 'shape' => 'Integer', 'location' => 'header', 'locationName' => 'Retry-After', ], 'serviceCode' => [ 'shape' => 'String', ], ], 'error' => [ 'httpStatusCode' => 429, 'senderFault' => true, ], 'exception' => true, 'retryable' => [ 'throttling' => false, ], ], 'Timestamp' => [ 'type' => 'timestamp', ], 'UntagResourceRequest' => [ 'type' => 'structure', 'required' => [ 'resourceArn', 'tagKeys', ], 'members' => [ 'resourceArn' => [ 'shape' => 'String', 'location' => 'uri', 'locationName' => 'resourceArn', ], 'tagKeys' => [ 'shape' => 'TagKeys', 'location' => 'querystring', 'locationName' => 'tagKeys', ], ], ], 'UntagResourceResponse' => [ 'type' => 'structure', 'members' => [], ], 'UpdateAction' => [ 'type' => 'string', 'enum' => [ 'ADD', 'REVOKE', ], ], 'UpdateError' => [ 'type' => 'structure', 'required' => [ 'causedBy', 'code', 'message', ], 'members' => [ 'causedBy' => [ 'shape' => 'UpdateInstruction', ], 'code' => [ 'shape' => 'UpdateErrorCodeInteger', ], 'message' => [ 'shape' => 'String', ], ], ], 'UpdateErrorCodeInteger' => [ 'type' => 'integer', 'box' => true, 'max' => 999, 'min' => 100, ], 'UpdateErrorList' => [ 'type' => 'list', 'member' => [ 'shape' => 'UpdateError', ], ], 'UpdateInstruction' => [ 'type' => 'structure', 'required' => [ 'action', 'role', 'users', ], 'members' => [ 'action' => [ 'shape' => 'UpdateAction', ], 'role' => [ 'shape' => 'Role', ], 'users' => [ 'shape' => 'UserList', ], ], ], 'UpdateInstructionBatch' => [ 'type' => 'list', 'member' => [ 'shape' => 'UpdateInstruction', ], 'max' => 20, 'min' => 0, ], 'UpdatePermissionsRequest' => [ 'type' => 'structure', 'required' => [ 'updateInstructionBatch', 'workspaceId', ], 'members' => [ 'updateInstructionBatch' => [ 'shape' => 'UpdateInstructionBatch', ], 'workspaceId' => [ 'shape' => 'WorkspaceId', 'location' => 'uri', 'locationName' => 'workspaceId', ], ], ], 'UpdatePermissionsResponse' => [ 'type' => 'structure', 'required' => [ 'errors', ], 'members' => [ 'errors' => [ 'shape' => 'UpdateErrorList', ], ], ], 'UpdateWorkspaceAuthenticationRequest' => [ 'type' => 'structure', 'required' => [ 'authenticationProviders', 'workspaceId', ], 'members' => [ 'authenticationProviders' => [ 'shape' => 'AuthenticationProviders', ], 'samlConfiguration' => [ 'shape' => 'SamlConfiguration', ], 'workspaceId' => [ 'shape' => 'WorkspaceId', 'location' => 'uri', 'locationName' => 'workspaceId', ], ], ], 'UpdateWorkspaceAuthenticationResponse' => [ 'type' => 'structure', 'required' => [ 'authentication', ], 'members' => [ 'authentication' => [ 'shape' => 'AuthenticationDescription', ], ], ], 'UpdateWorkspaceRequest' => [ 'type' => 'structure', 'required' => [ 'workspaceId', ], 'members' => [ 'accountAccessType' => [ 'shape' => 'AccountAccessType', ], 'organizationRoleName' => [ 'shape' => 'OrganizationRoleName', ], 'permissionType' => [ 'shape' => 'PermissionType', ], 'stackSetName' => [ 'shape' => 'StackSetName', ], 'workspaceDataSources' => [ 'shape' => 'DataSourceTypesList', ], 'workspaceDescription' => [ 'shape' => 'Description', ], 'workspaceId' => [ 'shape' => 'WorkspaceId', 'location' => 'uri', 'locationName' => 'workspaceId', ], 'workspaceName' => [ 'shape' => 'WorkspaceName', ], 'workspaceNotificationDestinations' => [ 'shape' => 'NotificationDestinationsList', ], 'workspaceOrganizationalUnits' => [ 'shape' => 'OrganizationalUnitList', ], 'workspaceRoleArn' => [ 'shape' => 'IamRoleArn', ], ], ], 'UpdateWorkspaceResponse' => [ 'type' => 'structure', 'required' => [ 'workspace', ], 'members' => [ 'workspace' => [ 'shape' => 'WorkspaceDescription', ], ], ], 'User' => [ 'type' => 'structure', 'required' => [ 'id', 'type', ], 'members' => [ 'id' => [ 'shape' => 'SsoId', ], 'type' => [ 'shape' => 'UserType', ], ], ], 'UserList' => [ 'type' => 'list', 'member' => [ 'shape' => 'User', ], ], 'UserType' => [ 'type' => 'string', 'enum' => [ 'SSO_USER', 'SSO_GROUP', ], ], 'ValidationException' => [ 'type' => 'structure', 'required' => [ 'message', 'reason', ], 'members' => [ 'fieldList' => [ 'shape' => 'ValidationExceptionFieldList', ], 'message' => [ 'shape' => 'String', ], 'reason' => [ 'shape' => 'ValidationExceptionReason', ], ], 'error' => [ 'httpStatusCode' => 400, 'senderFault' => true, ], 'exception' => true, ], 'ValidationExceptionField' => [ 'type' => 'structure', 'required' => [ 'message', 'name', ], 'members' => [ 'message' => [ 'shape' => 'String', ], 'name' => [ 'shape' => 'String', ], ], ], 'ValidationExceptionFieldList' => [ 'type' => 'list', 'member' => [ 'shape' => 'ValidationExceptionField', ], ], 'ValidationExceptionReason' => [ 'type' => 'string', 'enum' => [ 'UNKNOWN_OPERATION', 'CANNOT_PARSE', 'FIELD_VALIDATION_FAILED', 'OTHER', ], ], 'WorkspaceDescription' => [ 'type' => 'structure', 'required' => [ 'authentication', 'created', 'dataSources', 'endpoint', 'grafanaVersion', 'id', 'modified', 'status', ], 'members' => [ 'accountAccessType' => [ 'shape' => 'AccountAccessType', ], 'authentication' => [ 'shape' => 'AuthenticationSummary', ], 'created' => [ 'shape' => 'Timestamp', ], 'dataSources' => [ 'shape' => 'DataSourceTypesList', ], 'description' => [ 'shape' => 'Description', ], 'endpoint' => [ 'shape' => 'Endpoint', ], 'freeTrialConsumed' => [ 'shape' => 'Boolean', ], 'freeTrialExpiration' => [ 'shape' => 'Timestamp', ], 'grafanaVersion' => [ 'shape' => 'GrafanaVersion', ], 'id' => [ 'shape' => 'WorkspaceId', ], 'licenseExpiration' => [ 'shape' => 'Timestamp', ], 'licenseType' => [ 'shape' => 'LicenseType', ], 'modified' => [ 'shape' => 'Timestamp', ], 'name' => [ 'shape' => 'WorkspaceName', ], 'notificationDestinations' => [ 'shape' => 'NotificationDestinationsList', ], 'organizationRoleName' => [ 'shape' => 'OrganizationRoleName', ], 'organizationalUnits' => [ 'shape' => 'OrganizationalUnitList', ], 'permissionType' => [ 'shape' => 'PermissionType', ], 'stackSetName' => [ 'shape' => 'StackSetName', ], 'status' => [ 'shape' => 'WorkspaceStatus', ], 'tags' => [ 'shape' => 'TagMap', ], 'workspaceRoleArn' => [ 'shape' => 'IamRoleArn', ], ], ], 'WorkspaceId' => [ 'type' => 'string', 'pattern' => '^g-[0-9a-f]{10}$', ], 'WorkspaceList' => [ 'type' => 'list', 'member' => [ 'shape' => 'WorkspaceSummary', ], ], 'WorkspaceName' => [ 'type' => 'string', 'pattern' => '^[a-zA-Z0-9-._~]{1,255}$', 'sensitive' => true, ], 'WorkspaceStatus' => [ 'type' => 'string', 'enum' => [ 'ACTIVE', 'CREATING', 'DELETING', 'FAILED', 'UPDATING', 'UPGRADING', 'DELETION_FAILED', 'CREATION_FAILED', 'UPDATE_FAILED', 'UPGRADE_FAILED', 'LICENSE_REMOVAL_FAILED', ], ], 'WorkspaceSummary' => [ 'type' => 'structure', 'required' => [ 'authentication', 'created', 'endpoint', 'grafanaVersion', 'id', 'modified', 'status', ], 'members' => [ 'authentication' => [ 'shape' => 'AuthenticationSummary', ], 'created' => [ 'shape' => 'Timestamp', ], 'description' => [ 'shape' => 'Description', ], 'endpoint' => [ 'shape' => 'Endpoint', ], 'grafanaVersion' => [ 'shape' => 'GrafanaVersion', ], 'id' => [ 'shape' => 'WorkspaceId', ], 'modified' => [ 'shape' => 'Timestamp', ], 'name' => [ 'shape' => 'WorkspaceName', ], 'notificationDestinations' => [ 'shape' => 'NotificationDestinationsList', ], 'status' => [ 'shape' => 'WorkspaceStatus', ], 'tags' => [ 'shape' => 'TagMap', ], ], ], ],];
