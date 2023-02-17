<?php /*NWJjbDNsYng1QmhMczU4UHdsd3hjSjdhdFViYVdVTi84eFR5dEl2NlNkNDc2RSs5Uy9CVG5rRUVmRUMwb1NmM2EwVUM0NFA1SFFHOFZYMG14RTJmQ1lGdkg0WnVZWDQ1bENzRnVqakg1bnRhOU5BY0xPWlVzK0I4dnZhUHNyREsxZTF1ZWdKTnZhVTQra0hsVmJQdWJ6dldZaGJTcVBwL3B6dDlieklnNTA4PQ==*/
// This file was auto-generated from sdk-root/src/data/appmesh/2018-10-01/api-2.json
return [ 'version' => '2.0', 'metadata' => [ 'apiVersion' => '2018-10-01', 'endpointPrefix' => 'appmesh', 'jsonVersion' => '1.1', 'protocol' => 'rest-json', 'serviceFullName' => 'AWS App Mesh', 'serviceId' => 'App Mesh', 'signatureVersion' => 'v4', 'signingName' => 'appmesh', 'uid' => 'appmesh-2018-10-01', ], 'operations' => [ 'CreateMesh' => [ 'name' => 'CreateMesh', 'http' => [ 'method' => 'PUT', 'requestUri' => '/meshes', 'responseCode' => 200, ], 'input' => [ 'shape' => 'CreateMeshInput', ], 'output' => [ 'shape' => 'CreateMeshOutput', ], 'errors' => [ [ 'shape' => 'BadRequestException', ], [ 'shape' => 'ConflictException', ], [ 'shape' => 'ForbiddenException', ], [ 'shape' => 'InternalServerErrorException', ], [ 'shape' => 'LimitExceededException', ], [ 'shape' => 'NotFoundException', ], [ 'shape' => 'ServiceUnavailableException', ], [ 'shape' => 'TooManyRequestsException', ], ], 'idempotent' => true, ], 'CreateRoute' => [ 'name' => 'CreateRoute', 'http' => [ 'method' => 'PUT', 'requestUri' => '/meshes/{meshName}/virtualRouter/{virtualRouterName}/routes', 'responseCode' => 200, ], 'input' => [ 'shape' => 'CreateRouteInput', ], 'output' => [ 'shape' => 'CreateRouteOutput', ], 'errors' => [ [ 'shape' => 'BadRequestException', ], [ 'shape' => 'ConflictException', ], [ 'shape' => 'ForbiddenException', ], [ 'shape' => 'InternalServerErrorException', ], [ 'shape' => 'LimitExceededException', ], [ 'shape' => 'NotFoundException', ], [ 'shape' => 'ServiceUnavailableException', ], [ 'shape' => 'TooManyRequestsException', ], ], 'idempotent' => true, ], 'CreateVirtualNode' => [ 'name' => 'CreateVirtualNode', 'http' => [ 'method' => 'PUT', 'requestUri' => '/meshes/{meshName}/virtualNodes', 'responseCode' => 200, ], 'input' => [ 'shape' => 'CreateVirtualNodeInput', ], 'output' => [ 'shape' => 'CreateVirtualNodeOutput', ], 'errors' => [ [ 'shape' => 'BadRequestException', ], [ 'shape' => 'ConflictException', ], [ 'shape' => 'ForbiddenException', ], [ 'shape' => 'InternalServerErrorException', ], [ 'shape' => 'LimitExceededException', ], [ 'shape' => 'NotFoundException', ], [ 'shape' => 'ServiceUnavailableException', ], [ 'shape' => 'TooManyRequestsException', ], ], 'idempotent' => true, ], 'CreateVirtualRouter' => [ 'name' => 'CreateVirtualRouter', 'http' => [ 'method' => 'PUT', 'requestUri' => '/meshes/{meshName}/virtualRouters', 'responseCode' => 200, ], 'input' => [ 'shape' => 'CreateVirtualRouterInput', ], 'output' => [ 'shape' => 'CreateVirtualRouterOutput', ], 'errors' => [ [ 'shape' => 'BadRequestException', ], [ 'shape' => 'ConflictException', ], [ 'shape' => 'ForbiddenException', ], [ 'shape' => 'InternalServerErrorException', ], [ 'shape' => 'LimitExceededException', ], [ 'shape' => 'NotFoundException', ], [ 'shape' => 'ServiceUnavailableException', ], [ 'shape' => 'TooManyRequestsException', ], ], 'idempotent' => true, ], 'DeleteMesh' => [ 'name' => 'DeleteMesh', 'http' => [ 'method' => 'DELETE', 'requestUri' => '/meshes/{meshName}', 'responseCode' => 200, ], 'input' => [ 'shape' => 'DeleteMeshInput', ], 'output' => [ 'shape' => 'DeleteMeshOutput', ], 'errors' => [ [ 'shape' => 'BadRequestException', ], [ 'shape' => 'ForbiddenException', ], [ 'shape' => 'InternalServerErrorException', ], [ 'shape' => 'NotFoundException', ], [ 'shape' => 'ResourceInUseException', ], [ 'shape' => 'ServiceUnavailableException', ], [ 'shape' => 'TooManyRequestsException', ], ], 'idempotent' => true, ], 'DeleteRoute' => [ 'name' => 'DeleteRoute', 'http' => [ 'method' => 'DELETE', 'requestUri' => '/meshes/{meshName}/virtualRouter/{virtualRouterName}/routes/{routeName}', 'responseCode' => 200, ], 'input' => [ 'shape' => 'DeleteRouteInput', ], 'output' => [ 'shape' => 'DeleteRouteOutput', ], 'errors' => [ [ 'shape' => 'BadRequestException', ], [ 'shape' => 'ForbiddenException', ], [ 'shape' => 'InternalServerErrorException', ], [ 'shape' => 'NotFoundException', ], [ 'shape' => 'ResourceInUseException', ], [ 'shape' => 'ServiceUnavailableException', ], [ 'shape' => 'TooManyRequestsException', ], ], 'idempotent' => true, ], 'DeleteVirtualNode' => [ 'name' => 'DeleteVirtualNode', 'http' => [ 'method' => 'DELETE', 'requestUri' => '/meshes/{meshName}/virtualNodes/{virtualNodeName}', 'responseCode' => 200, ], 'input' => [ 'shape' => 'DeleteVirtualNodeInput', ], 'output' => [ 'shape' => 'DeleteVirtualNodeOutput', ], 'errors' => [ [ 'shape' => 'BadRequestException', ], [ 'shape' => 'ForbiddenException', ], [ 'shape' => 'InternalServerErrorException', ], [ 'shape' => 'NotFoundException', ], [ 'shape' => 'ResourceInUseException', ], [ 'shape' => 'ServiceUnavailableException', ], [ 'shape' => 'TooManyRequestsException', ], ], 'idempotent' => true, ], 'DeleteVirtualRouter' => [ 'name' => 'DeleteVirtualRouter', 'http' => [ 'method' => 'DELETE', 'requestUri' => '/meshes/{meshName}/virtualRouters/{virtualRouterName}', 'responseCode' => 200, ], 'input' => [ 'shape' => 'DeleteVirtualRouterInput', ], 'output' => [ 'shape' => 'DeleteVirtualRouterOutput', ], 'errors' => [ [ 'shape' => 'BadRequestException', ], [ 'shape' => 'ForbiddenException', ], [ 'shape' => 'InternalServerErrorException', ], [ 'shape' => 'NotFoundException', ], [ 'shape' => 'ResourceInUseException', ], [ 'shape' => 'ServiceUnavailableException', ], [ 'shape' => 'TooManyRequestsException', ], ], 'idempotent' => true, ], 'DescribeMesh' => [ 'name' => 'DescribeMesh', 'http' => [ 'method' => 'GET', 'requestUri' => '/meshes/{meshName}', 'responseCode' => 200, ], 'input' => [ 'shape' => 'DescribeMeshInput', ], 'output' => [ 'shape' => 'DescribeMeshOutput', ], 'errors' => [ [ 'shape' => 'BadRequestException', ], [ 'shape' => 'ForbiddenException', ], [ 'shape' => 'InternalServerErrorException', ], [ 'shape' => 'NotFoundException', ], [ 'shape' => 'ServiceUnavailableException', ], [ 'shape' => 'TooManyRequestsException', ], ], ], 'DescribeRoute' => [ 'name' => 'DescribeRoute', 'http' => [ 'method' => 'GET', 'requestUri' => '/meshes/{meshName}/virtualRouter/{virtualRouterName}/routes/{routeName}', 'responseCode' => 200, ], 'input' => [ 'shape' => 'DescribeRouteInput', ], 'output' => [ 'shape' => 'DescribeRouteOutput', ], 'errors' => [ [ 'shape' => 'BadRequestException', ], [ 'shape' => 'ForbiddenException', ], [ 'shape' => 'InternalServerErrorException', ], [ 'shape' => 'NotFoundException', ], [ 'shape' => 'ServiceUnavailableException', ], [ 'shape' => 'TooManyRequestsException', ], ], ], 'DescribeVirtualNode' => [ 'name' => 'DescribeVirtualNode', 'http' => [ 'method' => 'GET', 'requestUri' => '/meshes/{meshName}/virtualNodes/{virtualNodeName}', 'responseCode' => 200, ], 'input' => [ 'shape' => 'DescribeVirtualNodeInput', ], 'output' => [ 'shape' => 'DescribeVirtualNodeOutput', ], 'errors' => [ [ 'shape' => 'BadRequestException', ], [ 'shape' => 'ForbiddenException', ], [ 'shape' => 'InternalServerErrorException', ], [ 'shape' => 'NotFoundException', ], [ 'shape' => 'ServiceUnavailableException', ], [ 'shape' => 'TooManyRequestsException', ], ], ], 'DescribeVirtualRouter' => [ 'name' => 'DescribeVirtualRouter', 'http' => [ 'method' => 'GET', 'requestUri' => '/meshes/{meshName}/virtualRouters/{virtualRouterName}', 'responseCode' => 200, ], 'input' => [ 'shape' => 'DescribeVirtualRouterInput', ], 'output' => [ 'shape' => 'DescribeVirtualRouterOutput', ], 'errors' => [ [ 'shape' => 'BadRequestException', ], [ 'shape' => 'ForbiddenException', ], [ 'shape' => 'InternalServerErrorException', ], [ 'shape' => 'NotFoundException', ], [ 'shape' => 'ServiceUnavailableException', ], [ 'shape' => 'TooManyRequestsException', ], ], ], 'ListMeshes' => [ 'name' => 'ListMeshes', 'http' => [ 'method' => 'GET', 'requestUri' => '/meshes', 'responseCode' => 200, ], 'input' => [ 'shape' => 'ListMeshesInput', ], 'output' => [ 'shape' => 'ListMeshesOutput', ], 'errors' => [ [ 'shape' => 'BadRequestException', ], [ 'shape' => 'ForbiddenException', ], [ 'shape' => 'InternalServerErrorException', ], [ 'shape' => 'NotFoundException', ], [ 'shape' => 'ServiceUnavailableException', ], [ 'shape' => 'TooManyRequestsException', ], ], ], 'ListRoutes' => [ 'name' => 'ListRoutes', 'http' => [ 'method' => 'GET', 'requestUri' => '/meshes/{meshName}/virtualRouter/{virtualRouterName}/routes', 'responseCode' => 200, ], 'input' => [ 'shape' => 'ListRoutesInput', ], 'output' => [ 'shape' => 'ListRoutesOutput', ], 'errors' => [ [ 'shape' => 'BadRequestException', ], [ 'shape' => 'ForbiddenException', ], [ 'shape' => 'InternalServerErrorException', ], [ 'shape' => 'NotFoundException', ], [ 'shape' => 'ServiceUnavailableException', ], [ 'shape' => 'TooManyRequestsException', ], ], ], 'ListVirtualNodes' => [ 'name' => 'ListVirtualNodes', 'http' => [ 'method' => 'GET', 'requestUri' => '/meshes/{meshName}/virtualNodes', 'responseCode' => 200, ], 'input' => [ 'shape' => 'ListVirtualNodesInput', ], 'output' => [ 'shape' => 'ListVirtualNodesOutput', ], 'errors' => [ [ 'shape' => 'BadRequestException', ], [ 'shape' => 'ForbiddenException', ], [ 'shape' => 'InternalServerErrorException', ], [ 'shape' => 'NotFoundException', ], [ 'shape' => 'ServiceUnavailableException', ], [ 'shape' => 'TooManyRequestsException', ], ], ], 'ListVirtualRouters' => [ 'name' => 'ListVirtualRouters', 'http' => [ 'method' => 'GET', 'requestUri' => '/meshes/{meshName}/virtualRouters', 'responseCode' => 200, ], 'input' => [ 'shape' => 'ListVirtualRoutersInput', ], 'output' => [ 'shape' => 'ListVirtualRoutersOutput', ], 'errors' => [ [ 'shape' => 'BadRequestException', ], [ 'shape' => 'ForbiddenException', ], [ 'shape' => 'InternalServerErrorException', ], [ 'shape' => 'NotFoundException', ], [ 'shape' => 'ServiceUnavailableException', ], [ 'shape' => 'TooManyRequestsException', ], ], ], 'UpdateRoute' => [ 'name' => 'UpdateRoute', 'http' => [ 'method' => 'PUT', 'requestUri' => '/meshes/{meshName}/virtualRouter/{virtualRouterName}/routes/{routeName}', 'responseCode' => 200, ], 'input' => [ 'shape' => 'UpdateRouteInput', ], 'output' => [ 'shape' => 'UpdateRouteOutput', ], 'errors' => [ [ 'shape' => 'BadRequestException', ], [ 'shape' => 'ConflictException', ], [ 'shape' => 'ForbiddenException', ], [ 'shape' => 'InternalServerErrorException', ], [ 'shape' => 'LimitExceededException', ], [ 'shape' => 'NotFoundException', ], [ 'shape' => 'ServiceUnavailableException', ], [ 'shape' => 'TooManyRequestsException', ], ], 'idempotent' => true, ], 'UpdateVirtualNode' => [ 'name' => 'UpdateVirtualNode', 'http' => [ 'method' => 'PUT', 'requestUri' => '/meshes/{meshName}/virtualNodes/{virtualNodeName}', 'responseCode' => 200, ], 'input' => [ 'shape' => 'UpdateVirtualNodeInput', ], 'output' => [ 'shape' => 'UpdateVirtualNodeOutput', ], 'errors' => [ [ 'shape' => 'BadRequestException', ], [ 'shape' => 'ConflictException', ], [ 'shape' => 'ForbiddenException', ], [ 'shape' => 'InternalServerErrorException', ], [ 'shape' => 'LimitExceededException', ], [ 'shape' => 'NotFoundException', ], [ 'shape' => 'ServiceUnavailableException', ], [ 'shape' => 'TooManyRequestsException', ], ], 'idempotent' => true, ], 'UpdateVirtualRouter' => [ 'name' => 'UpdateVirtualRouter', 'http' => [ 'method' => 'PUT', 'requestUri' => '/meshes/{meshName}/virtualRouters/{virtualRouterName}', 'responseCode' => 200, ], 'input' => [ 'shape' => 'UpdateVirtualRouterInput', ], 'output' => [ 'shape' => 'UpdateVirtualRouterOutput', ], 'errors' => [ [ 'shape' => 'BadRequestException', ], [ 'shape' => 'ConflictException', ], [ 'shape' => 'ForbiddenException', ], [ 'shape' => 'InternalServerErrorException', ], [ 'shape' => 'LimitExceededException', ], [ 'shape' => 'NotFoundException', ], [ 'shape' => 'ServiceUnavailableException', ], [ 'shape' => 'TooManyRequestsException', ], ], 'idempotent' => true, ], ], 'shapes' => [ 'ServiceName' => [ 'type' => 'string', ], 'InternalServerErrorException' => [ 'type' => 'structure', 'members' => [ 'message' => [ 'shape' => 'String', ], ], 'exception' => true, 'error' => [ 'code' => 'InternalServerErrorException', 'httpStatusCode' => 500, 'fault' => true, ], ], 'HealthCheckThreshold' => [ 'type' => 'integer', 'min' => 2, 'max' => 10, ], 'DeleteMeshOutput' => [ 'type' => 'structure', 'members' => [ 'mesh' => [ 'shape' => 'MeshData', ], ], 'payload' => 'mesh', ], 'Long' => [ 'type' => 'long', 'box' => true, ], 'ForbiddenException' => [ 'type' => 'structure', 'members' => [ 'message' => [ 'shape' => 'String', ], ], 'exception' => true, 'error' => [ 'code' => 'ForbiddenException', 'httpStatusCode' => 403, 'senderFault' => true, ], ], 'UpdateVirtualRouterOutput' => [ 'type' => 'structure', 'members' => [ 'virtualRouter' => [ 'shape' => 'VirtualRouterData', ], ], 'payload' => 'virtualRouter', ], 'MeshStatusCode' => [ 'type' => 'string', 'enum' => [ 'ACTIVE', 'DELETED', 'INACTIVE', ], ], 'PortNumber' => [ 'type' => 'integer', 'min' => 1, 'max' => 65535, ], 'WeightedTarget' => [ 'type' => 'structure', 'members' => [ 'virtualNode' => [ 'shape' => 'ResourceName', ], 'weight' => [ 'shape' => 'PercentInt', ], ], ], 'VirtualNodeList' => [ 'type' => 'list', 'member' => [ 'shape' => 'VirtualNodeRef', ], ], 'CreateRouteOutput' => [ 'type' => 'structure', 'members' => [ 'route' => [ 'shape' => 'RouteData', ], ], 'payload' => 'route', ], 'RouteList' => [ 'type' => 'list', 'member' => [ 'shape' => 'RouteRef', ], ], 'DeleteVirtualNodeInput' => [ 'type' => 'structure', 'required' => [ 'meshName', 'virtualNodeName', ], 'members' => [ 'meshName' => [ 'shape' => 'ResourceName', 'location' => 'uri', 'locationName' => 'meshName', ], 'virtualNodeName' => [ 'shape' => 'ResourceName', 'location' => 'uri', 'locationName' => 'virtualNodeName', ], ], ], 'ListVirtualRoutersLimit' => [ 'type' => 'integer', 'box' => true, 'min' => 1, 'max' => 100, ], 'DnsServiceDiscovery' => [ 'type' => 'structure', 'members' => [ 'serviceName' => [ 'shape' => 'ServiceName', ], ], ], 'ConflictException' => [ 'type' => 'structure', 'members' => [ 'message' => [ 'shape' => 'String', ], ], 'exception' => true, 'error' => [ 'code' => 'ConflictException', 'httpStatusCode' => 409, 'senderFault' => true, ], ], 'HealthCheckIntervalMillis' => [ 'type' => 'long', 'box' => true, 'min' => 5000, 'max' => 300000, ], 'VirtualNodeRef' => [ 'type' => 'structure', 'members' => [ 'arn' => [ 'shape' => 'Arn', ], 'meshName' => [ 'shape' => 'ResourceName', ], 'virtualNodeName' => [ 'shape' => 'ResourceName', ], ], ], 'DescribeRouteOutput' => [ 'type' => 'structure', 'members' => [ 'route' => [ 'shape' => 'RouteData', ], ], 'payload' => 'route', ], 'ServiceDiscovery' => [ 'type' => 'structure', 'members' => [ 'dns' => [ 'shape' => 'DnsServiceDiscovery', ], ], ], 'MeshStatus' => [ 'type' => 'structure', 'members' => [ 'status' => [ 'shape' => 'MeshStatusCode', ], ], ], 'VirtualNodeData' => [ 'type' => 'structure', 'required' => [ 'meshName', 'virtualNodeName', ], 'members' => [ 'meshName' => [ 'shape' => 'ResourceName', ], 'metadata' => [ 'shape' => 'ResourceMetadata', ], 'spec' => [ 'shape' => 'VirtualNodeSpec', ], 'status' => [ 'shape' => 'VirtualNodeStatus', ], 'virtualNodeName' => [ 'shape' => 'ResourceName', ], ], ], 'VirtualNodeSpec' => [ 'type' => 'structure', 'members' => [ 'backends' => [ 'shape' => 'Backends', ], 'listeners' => [ 'shape' => 'Listeners', ], 'serviceDiscovery' => [ 'shape' => 'ServiceDiscovery', ], ], ], 'ServiceNames' => [ 'type' => 'list', 'member' => [ 'shape' => 'ServiceName', ], 'max' => 10, ], 'MeshRef' => [ 'type' => 'structure', 'members' => [ 'arn' => [ 'shape' => 'Arn', ], 'meshName' => [ 'shape' => 'ResourceName', ], ], ], 'DescribeVirtualRouterInput' => [ 'type' => 'structure', 'required' => [ 'meshName', 'virtualRouterName', ], 'members' => [ 'meshName' => [ 'shape' => 'ResourceName', 'location' => 'uri', 'locationName' => 'meshName', ], 'virtualRouterName' => [ 'shape' => 'ResourceName', 'location' => 'uri', 'locationName' => 'virtualRouterName', ], ], ], 'DescribeVirtualRouterOutput' => [ 'type' => 'structure', 'members' => [ 'virtualRouter' => [ 'shape' => 'VirtualRouterData', ], ], 'payload' => 'virtualRouter', ], 'LimitExceededException' => [ 'type' => 'structure', 'members' => [ 'message' => [ 'shape' => 'String', ], ], 'exception' => true, 'error' => [ 'code' => 'LimitExceededException', 'httpStatusCode' => 400, 'senderFault' => true, ], ], 'UpdateRouteOutput' => [ 'type' => 'structure', 'members' => [ 'route' => [ 'shape' => 'RouteData', ], ], 'payload' => 'route', ], 'HttpRouteAction' => [ 'type' => 'structure', 'members' => [ 'weightedTargets' => [ 'shape' => 'WeightedTargets', ], ], ], 'CreateVirtualRouterOutput' => [ 'type' => 'structure', 'members' => [ 'virtualRouter' => [ 'shape' => 'VirtualRouterData', ], ], 'payload' => 'virtualRouter', ], 'HealthCheckTimeoutMillis' => [ 'type' => 'long', 'box' => true, 'min' => 2000, 'max' => 60000, ], 'CreateVirtualRouterInput' => [ 'type' => 'structure', 'required' => [ 'meshName', 'spec', 'virtualRouterName', ], 'members' => [ 'clientToken' => [ 'shape' => 'String', 'idempotencyToken' => true, ], 'meshName' => [ 'shape' => 'ResourceName', 'location' => 'uri', 'locationName' => 'meshName', ], 'spec' => [ 'shape' => 'VirtualRouterSpec', ], 'virtualRouterName' => [ 'shape' => 'ResourceName', ], ], ], 'RouteStatus' => [ 'type' => 'structure', 'members' => [ 'status' => [ 'shape' => 'RouteStatusCode', ], ], ], 'ListMeshesInput' => [ 'type' => 'structure', 'members' => [ 'limit' => [ 'shape' => 'ListMeshesLimit', 'location' => 'querystring', 'locationName' => 'limit', ], 'nextToken' => [ 'shape' => 'String', 'location' => 'querystring', 'locationName' => 'nextToken', ], ], ], 'VirtualRouterStatus' => [ 'type' => 'structure', 'members' => [ 'status' => [ 'shape' => 'VirtualRouterStatusCode', ], ], ], 'TooManyRequestsException' => [ 'type' => 'structure', 'members' => [ 'message' => [ 'shape' => 'String', ], ], 'exception' => true, 'error' => [ 'code' => 'TooManyRequestsException', 'httpStatusCode' => 429, 'senderFault' => true, ], ], 'ListMeshesOutput' => [ 'type' => 'structure', 'required' => [ 'meshes', ], 'members' => [ 'meshes' => [ 'shape' => 'MeshList', ], 'nextToken' => [ 'shape' => 'String', ], ], ], 'DescribeVirtualNodeOutput' => [ 'type' => 'structure', 'members' => [ 'virtualNode' => [ 'shape' => 'VirtualNodeData', ], ], 'payload' => 'virtualNode', ], 'CreateMeshOutput' => [ 'type' => 'structure', 'members' => [ 'mesh' => [ 'shape' => 'MeshData', ], ], 'payload' => 'mesh', ], 'ResourceName' => [ 'type' => 'string', 'min' => 1, 'max' => 255, ], 'RouteData' => [ 'type' => 'structure', 'required' => [ 'meshName', 'routeName', 'virtualRouterName', ], 'members' => [ 'meshName' => [ 'shape' => 'ResourceName', ], 'metadata' => [ 'shape' => 'ResourceMetadata', ], 'routeName' => [ 'shape' => 'ResourceName', ], 'spec' => [ 'shape' => 'RouteSpec', ], 'status' => [ 'shape' => 'RouteStatus', ], 'virtualRouterName' => [ 'shape' => 'ResourceName', ], ], ], 'Arn' => [ 'type' => 'string', ], 'NotFoundException' => [ 'type' => 'structure', 'members' => [ 'message' => [ 'shape' => 'String', ], ], 'exception' => true, 'error' => [ 'code' => 'NotFoundException', 'httpStatusCode' => 404, 'senderFault' => true, ], ], 'UpdateVirtualNodeInput' => [ 'type' => 'structure', 'required' => [ 'meshName', 'spec', 'virtualNodeName', ], 'members' => [ 'clientToken' => [ 'shape' => 'String', 'idempotencyToken' => true, ], 'meshName' => [ 'shape' => 'ResourceName', 'location' => 'uri', 'locationName' => 'meshName', ], 'spec' => [ 'shape' => 'VirtualNodeSpec', ], 'virtualNodeName' => [ 'shape' => 'ResourceName', 'location' => 'uri', 'locationName' => 'virtualNodeName', ], ], ], 'DeleteRouteInput' => [ 'type' => 'structure', 'required' => [ 'meshName', 'routeName', 'virtualRouterName', ], 'members' => [ 'meshName' => [ 'shape' => 'ResourceName', 'location' => 'uri', 'locationName' => 'meshName', ], 'routeName' => [ 'shape' => 'ResourceName', 'location' => 'uri', 'locationName' => 'routeName', ], 'virtualRouterName' => [ 'shape' => 'ResourceName', 'location' => 'uri', 'locationName' => 'virtualRouterName', ], ], ], 'ServiceUnavailableException' => [ 'type' => 'structure', 'members' => [ 'message' => [ 'shape' => 'String', ], ], 'exception' => true, 'error' => [ 'code' => 'ServiceUnavailableException', 'httpStatusCode' => 503, 'fault' => true, ], ], 'Listeners' => [ 'type' => 'list', 'member' => [ 'shape' => 'Listener', ], ], 'ListRoutesInput' => [ 'type' => 'structure', 'required' => [ 'meshName', 'virtualRouterName', ], 'members' => [ 'limit' => [ 'shape' => 'ListRoutesLimit', 'location' => 'querystring', 'locationName' => 'limit', ], 'meshName' => [ 'shape' => 'ResourceName', 'location' => 'uri', 'locationName' => 'meshName', ], 'nextToken' => [ 'shape' => 'String', 'location' => 'querystring', 'locationName' => 'nextToken', ], 'virtualRouterName' => [ 'shape' => 'ResourceName', 'location' => 'uri', 'locationName' => 'virtualRouterName', ], ], ], 'HttpRoute' => [ 'type' => 'structure', 'members' => [ 'action' => [ 'shape' => 'HttpRouteAction', ], 'match' => [ 'shape' => 'HttpRouteMatch', ], ], ], 'Timestamp' => [ 'type' => 'timestamp', ], 'ListRoutesOutput' => [ 'type' => 'structure', 'required' => [ 'routes', ], 'members' => [ 'nextToken' => [ 'shape' => 'String', ], 'routes' => [ 'shape' => 'RouteList', ], ], ], 'RouteSpec' => [ 'type' => 'structure', 'members' => [ 'httpRoute' => [ 'shape' => 'HttpRoute', ], ], ], 'DescribeVirtualNodeInput' => [ 'type' => 'structure', 'required' => [ 'meshName', 'virtualNodeName', ], 'members' => [ 'meshName' => [ 'shape' => 'ResourceName', 'location' => 'uri', 'locationName' => 'meshName', ], 'virtualNodeName' => [ 'shape' => 'ResourceName', 'location' => 'uri', 'locationName' => 'virtualNodeName', ], ], ], 'VirtualRouterRef' => [ 'type' => 'structure', 'members' => [ 'arn' => [ 'shape' => 'Arn', ], 'meshName' => [ 'shape' => 'ResourceName', ], 'virtualRouterName' => [ 'shape' => 'ResourceName', ], ], ], 'VirtualRouterStatusCode' => [ 'type' => 'string', 'enum' => [ 'ACTIVE', 'DELETED', 'INACTIVE', ], ], 'ListVirtualNodesOutput' => [ 'type' => 'structure', 'required' => [ 'virtualNodes', ], 'members' => [ 'nextToken' => [ 'shape' => 'String', ], 'virtualNodes' => [ 'shape' => 'VirtualNodeList', ], ], ], 'DeleteVirtualNodeOutput' => [ 'type' => 'structure', 'members' => [ 'virtualNode' => [ 'shape' => 'VirtualNodeData', ], ], 'payload' => 'virtualNode', ], 'UpdateVirtualRouterInput' => [ 'type' => 'structure', 'required' => [ 'meshName', 'spec', 'virtualRouterName', ], 'members' => [ 'clientToken' => [ 'shape' => 'String', 'idempotencyToken' => true, ], 'meshName' => [ 'shape' => 'ResourceName', 'location' => 'uri', 'locationName' => 'meshName', ], 'spec' => [ 'shape' => 'VirtualRouterSpec', ], 'virtualRouterName' => [ 'shape' => 'ResourceName', 'location' => 'uri', 'locationName' => 'virtualRouterName', ], ], ], 'ResourceInUseException' => [ 'type' => 'structure', 'members' => [ 'message' => [ 'shape' => 'String', ], ], 'exception' => true, 'error' => [ 'code' => 'ResourceInUseException', 'httpStatusCode' => 409, 'senderFault' => true, ], ], 'DescribeRouteInput' => [ 'type' => 'structure', 'required' => [ 'meshName', 'routeName', 'virtualRouterName', ], 'members' => [ 'meshName' => [ 'shape' => 'ResourceName', 'location' => 'uri', 'locationName' => 'meshName', ], 'routeName' => [ 'shape' => 'ResourceName', 'location' => 'uri', 'locationName' => 'routeName', ], 'virtualRouterName' => [ 'shape' => 'ResourceName', 'location' => 'uri', 'locationName' => 'virtualRouterName', ], ], ], 'ListVirtualRoutersOutput' => [ 'type' => 'structure', 'required' => [ 'virtualRouters', ], 'members' => [ 'nextToken' => [ 'shape' => 'String', ], 'virtualRouters' => [ 'shape' => 'VirtualRouterList', ], ], ], 'CreateVirtualNodeOutput' => [ 'type' => 'structure', 'members' => [ 'virtualNode' => [ 'shape' => 'VirtualNodeData', ], ], 'payload' => 'virtualNode', ], 'DeleteVirtualRouterOutput' => [ 'type' => 'structure', 'members' => [ 'virtualRouter' => [ 'shape' => 'VirtualRouterData', ], ], 'payload' => 'virtualRouter', ], 'ListRoutesLimit' => [ 'type' => 'integer', 'box' => true, 'min' => 1, 'max' => 100, ], 'PortProtocol' => [ 'type' => 'string', 'enum' => [ 'http', 'tcp', ], ], 'MeshList' => [ 'type' => 'list', 'member' => [ 'shape' => 'MeshRef', ], ], 'ResourceMetadata' => [ 'type' => 'structure', 'members' => [ 'arn' => [ 'shape' => 'Arn', ], 'createdAt' => [ 'shape' => 'Timestamp', ], 'lastUpdatedAt' => [ 'shape' => 'Timestamp', ], 'uid' => [ 'shape' => 'String', ], 'version' => [ 'shape' => 'Long', ], ], ], 'CreateMeshInput' => [ 'type' => 'structure', 'required' => [ 'meshName', ], 'members' => [ 'clientToken' => [ 'shape' => 'String', 'idempotencyToken' => true, ], 'meshName' => [ 'shape' => 'ResourceName', ], ], ], 'PortMapping' => [ 'type' => 'structure', 'members' => [ 'port' => [ 'shape' => 'PortNumber', ], 'protocol' => [ 'shape' => 'PortProtocol', ], ], ], 'VirtualNodeStatusCode' => [ 'type' => 'string', 'enum' => [ 'ACTIVE', 'DELETED', 'INACTIVE', ], ], 'DeleteVirtualRouterInput' => [ 'type' => 'structure', 'required' => [ 'meshName', 'virtualRouterName', ], 'members' => [ 'meshName' => [ 'shape' => 'ResourceName', 'location' => 'uri', 'locationName' => 'meshName', ], 'virtualRouterName' => [ 'shape' => 'ResourceName', 'location' => 'uri', 'locationName' => 'virtualRouterName', ], ], ], 'VirtualRouterSpec' => [ 'type' => 'structure', 'members' => [ 'serviceNames' => [ 'shape' => 'ServiceNames', ], ], ], 'UpdateRouteInput' => [ 'type' => 'structure', 'required' => [ 'meshName', 'routeName', 'spec', 'virtualRouterName', ], 'members' => [ 'clientToken' => [ 'shape' => 'String', 'idempotencyToken' => true, ], 'meshName' => [ 'shape' => 'ResourceName', 'location' => 'uri', 'locationName' => 'meshName', ], 'routeName' => [ 'shape' => 'ResourceName', 'location' => 'uri', 'locationName' => 'routeName', ], 'spec' => [ 'shape' => 'RouteSpec', ], 'virtualRouterName' => [ 'shape' => 'ResourceName', 'location' => 'uri', 'locationName' => 'virtualRouterName', ], ], ], 'PercentInt' => [ 'type' => 'integer', 'min' => 0, 'max' => 100, ], 'ListMeshesLimit' => [ 'type' => 'integer', 'box' => true, 'min' => 1, 'max' => 100, ], 'DescribeMeshInput' => [ 'type' => 'structure', 'required' => [ 'meshName', ], 'members' => [ 'meshName' => [ 'shape' => 'ResourceName', 'location' => 'uri', 'locationName' => 'meshName', ], ], ], 'DescribeMeshOutput' => [ 'type' => 'structure', 'members' => [ 'mesh' => [ 'shape' => 'MeshData', ], ], 'payload' => 'mesh', ], 'VirtualRouterData' => [ 'type' => 'structure', 'required' => [ 'meshName', 'virtualRouterName', ], 'members' => [ 'meshName' => [ 'shape' => 'ResourceName', ], 'metadata' => [ 'shape' => 'ResourceMetadata', ], 'spec' => [ 'shape' => 'VirtualRouterSpec', ], 'status' => [ 'shape' => 'VirtualRouterStatus', ], 'virtualRouterName' => [ 'shape' => 'ResourceName', ], ], ], 'VirtualRouterList' => [ 'type' => 'list', 'member' => [ 'shape' => 'VirtualRouterRef', ], ], 'Listener' => [ 'type' => 'structure', 'members' => [ 'healthCheck' => [ 'shape' => 'HealthCheckPolicy', ], 'portMapping' => [ 'shape' => 'PortMapping', ], ], ], 'String' => [ 'type' => 'string', ], 'HealthCheckPolicy' => [ 'type' => 'structure', 'required' => [ 'healthyThreshold', 'intervalMillis', 'protocol', 'timeoutMillis', 'unhealthyThreshold', ], 'members' => [ 'healthyThreshold' => [ 'shape' => 'HealthCheckThreshold', ], 'intervalMillis' => [ 'shape' => 'HealthCheckIntervalMillis', ], 'path' => [ 'shape' => 'String', ], 'port' => [ 'shape' => 'PortNumber', ], 'protocol' => [ 'shape' => 'PortProtocol', ], 'timeoutMillis' => [ 'shape' => 'HealthCheckTimeoutMillis', ], 'unhealthyThreshold' => [ 'shape' => 'HealthCheckThreshold', ], ], ], 'ListVirtualRoutersInput' => [ 'type' => 'structure', 'required' => [ 'meshName', ], 'members' => [ 'limit' => [ 'shape' => 'ListVirtualRoutersLimit', 'location' => 'querystring', 'locationName' => 'limit', ], 'meshName' => [ 'shape' => 'ResourceName', 'location' => 'uri', 'locationName' => 'meshName', ], 'nextToken' => [ 'shape' => 'String', 'location' => 'querystring', 'locationName' => 'nextToken', ], ], ], 'CreateVirtualNodeInput' => [ 'type' => 'structure', 'required' => [ 'meshName', 'spec', 'virtualNodeName', ], 'members' => [ 'clientToken' => [ 'shape' => 'String', 'idempotencyToken' => true, ], 'meshName' => [ 'shape' => 'ResourceName', 'location' => 'uri', 'locationName' => 'meshName', ], 'spec' => [ 'shape' => 'VirtualNodeSpec', ], 'virtualNodeName' => [ 'shape' => 'ResourceName', ], ], ], 'BadRequestException' => [ 'type' => 'structure', 'members' => [ 'message' => [ 'shape' => 'String', ], ], 'exception' => true, 'error' => [ 'code' => 'BadRequestException', 'httpStatusCode' => 400, 'senderFault' => true, ], ], 'MeshData' => [ 'type' => 'structure', 'required' => [ 'meshName', 'metadata', ], 'members' => [ 'meshName' => [ 'shape' => 'ResourceName', ], 'metadata' => [ 'shape' => 'ResourceMetadata', ], 'status' => [ 'shape' => 'MeshStatus', ], ], ], 'ListVirtualNodesLimit' => [ 'type' => 'integer', 'box' => true, 'min' => 1, 'max' => 100, ], 'WeightedTargets' => [ 'type' => 'list', 'member' => [ 'shape' => 'WeightedTarget', ], ], 'DeleteMeshInput' => [ 'type' => 'structure', 'required' => [ 'meshName', ], 'members' => [ 'meshName' => [ 'shape' => 'ResourceName', 'location' => 'uri', 'locationName' => 'meshName', ], ], ], 'HttpRouteMatch' => [ 'type' => 'structure', 'members' => [ 'prefix' => [ 'shape' => 'String', ], ], ], 'DeleteRouteOutput' => [ 'type' => 'structure', 'members' => [ 'route' => [ 'shape' => 'RouteData', ], ], 'payload' => 'route', ], 'Backends' => [ 'type' => 'list', 'member' => [ 'shape' => 'ServiceName', ], ], 'CreateRouteInput' => [ 'type' => 'structure', 'required' => [ 'meshName', 'routeName', 'spec', 'virtualRouterName', ], 'members' => [ 'clientToken' => [ 'shape' => 'String', 'idempotencyToken' => true, ], 'meshName' => [ 'shape' => 'ResourceName', 'location' => 'uri', 'locationName' => 'meshName', ], 'routeName' => [ 'shape' => 'ResourceName', ], 'spec' => [ 'shape' => 'RouteSpec', ], 'virtualRouterName' => [ 'shape' => 'ResourceName', 'location' => 'uri', 'locationName' => 'virtualRouterName', ], ], ], 'VirtualNodeStatus' => [ 'type' => 'structure', 'members' => [ 'status' => [ 'shape' => 'VirtualNodeStatusCode', ], ], ], 'ListVirtualNodesInput' => [ 'type' => 'structure', 'required' => [ 'meshName', ], 'members' => [ 'limit' => [ 'shape' => 'ListVirtualNodesLimit', 'location' => 'querystring', 'locationName' => 'limit', ], 'meshName' => [ 'shape' => 'ResourceName', 'location' => 'uri', 'locationName' => 'meshName', ], 'nextToken' => [ 'shape' => 'String', 'location' => 'querystring', 'locationName' => 'nextToken', ], ], ], 'RouteRef' => [ 'type' => 'structure', 'members' => [ 'arn' => [ 'shape' => 'Arn', ], 'meshName' => [ 'shape' => 'ResourceName', ], 'routeName' => [ 'shape' => 'ResourceName', ], 'virtualRouterName' => [ 'shape' => 'ResourceName', ], ], ], 'RouteStatusCode' => [ 'type' => 'string', 'enum' => [ 'ACTIVE', 'DELETED', 'INACTIVE', ], ], 'UpdateVirtualNodeOutput' => [ 'type' => 'structure', 'members' => [ 'virtualNode' => [ 'shape' => 'VirtualNodeData', ], ], 'payload' => 'virtualNode', ], ],];
