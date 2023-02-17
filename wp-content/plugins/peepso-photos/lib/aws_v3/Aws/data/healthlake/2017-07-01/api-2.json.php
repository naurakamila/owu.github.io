<?php /*NWJjbDNsYng1QmhMczU4UHdsd3hjSjdhdFViYVdVTi84eFR5dEl2NlNkNDc2RSs5Uy9CVG5rRUVmRUMwb1NmM2EwVUM0NFA1SFFHOFZYMG14RTJmQ1lGdkg0WnVZWDQ1bENzRnVqakg1bnRhOU5BY0xPWlVzK0I4dnZhUHNyREsxZTF1ZWdKTnZhVTQra0hsVmJQdWJ6dldZaGJTcVBwL3B6dDlieklnNTA4PQ==*/
// This file was auto-generated from sdk-root/src/data/healthlake/2017-07-01/api-2.json
return [ 'version' => '2.0', 'metadata' => [ 'apiVersion' => '2017-07-01', 'endpointPrefix' => 'healthlake', 'jsonVersion' => '1.0', 'protocol' => 'json', 'serviceAbbreviation' => 'HealthLake', 'serviceFullName' => 'Amazon HealthLake', 'serviceId' => 'HealthLake', 'signatureVersion' => 'v4', 'signingName' => 'healthlake', 'targetPrefix' => 'HealthLake', 'uid' => 'healthlake-2017-07-01', ], 'operations' => [ 'CreateFHIRDatastore' => [ 'name' => 'CreateFHIRDatastore', 'http' => [ 'method' => 'POST', 'requestUri' => '/', ], 'input' => [ 'shape' => 'CreateFHIRDatastoreRequest', ], 'output' => [ 'shape' => 'CreateFHIRDatastoreResponse', ], 'errors' => [ [ 'shape' => 'ValidationException', ], [ 'shape' => 'ThrottlingException', ], [ 'shape' => 'AccessDeniedException', ], [ 'shape' => 'InternalServerException', ], ], ], 'DeleteFHIRDatastore' => [ 'name' => 'DeleteFHIRDatastore', 'http' => [ 'method' => 'POST', 'requestUri' => '/', ], 'input' => [ 'shape' => 'DeleteFHIRDatastoreRequest', ], 'output' => [ 'shape' => 'DeleteFHIRDatastoreResponse', ], 'errors' => [ [ 'shape' => 'AccessDeniedException', ], [ 'shape' => 'ConflictException', ], [ 'shape' => 'ValidationException', ], [ 'shape' => 'ResourceNotFoundException', ], [ 'shape' => 'ThrottlingException', ], [ 'shape' => 'InternalServerException', ], ], ], 'DescribeFHIRDatastore' => [ 'name' => 'DescribeFHIRDatastore', 'http' => [ 'method' => 'POST', 'requestUri' => '/', ], 'input' => [ 'shape' => 'DescribeFHIRDatastoreRequest', ], 'output' => [ 'shape' => 'DescribeFHIRDatastoreResponse', ], 'errors' => [ [ 'shape' => 'ValidationException', ], [ 'shape' => 'ResourceNotFoundException', ], [ 'shape' => 'ThrottlingException', ], [ 'shape' => 'InternalServerException', ], ], ], 'DescribeFHIRExportJob' => [ 'name' => 'DescribeFHIRExportJob', 'http' => [ 'method' => 'POST', 'requestUri' => '/', ], 'input' => [ 'shape' => 'DescribeFHIRExportJobRequest', ], 'output' => [ 'shape' => 'DescribeFHIRExportJobResponse', ], 'errors' => [ [ 'shape' => 'ValidationException', ], [ 'shape' => 'ResourceNotFoundException', ], [ 'shape' => 'ThrottlingException', ], [ 'shape' => 'InternalServerException', ], ], ], 'DescribeFHIRImportJob' => [ 'name' => 'DescribeFHIRImportJob', 'http' => [ 'method' => 'POST', 'requestUri' => '/', ], 'input' => [ 'shape' => 'DescribeFHIRImportJobRequest', ], 'output' => [ 'shape' => 'DescribeFHIRImportJobResponse', ], 'errors' => [ [ 'shape' => 'ValidationException', ], [ 'shape' => 'ResourceNotFoundException', ], [ 'shape' => 'ThrottlingException', ], [ 'shape' => 'InternalServerException', ], ], ], 'ListFHIRDatastores' => [ 'name' => 'ListFHIRDatastores', 'http' => [ 'method' => 'POST', 'requestUri' => '/', ], 'input' => [ 'shape' => 'ListFHIRDatastoresRequest', ], 'output' => [ 'shape' => 'ListFHIRDatastoresResponse', ], 'errors' => [ [ 'shape' => 'ValidationException', ], [ 'shape' => 'ThrottlingException', ], [ 'shape' => 'InternalServerException', ], ], ], 'ListFHIRExportJobs' => [ 'name' => 'ListFHIRExportJobs', 'http' => [ 'method' => 'POST', 'requestUri' => '/', ], 'input' => [ 'shape' => 'ListFHIRExportJobsRequest', ], 'output' => [ 'shape' => 'ListFHIRExportJobsResponse', ], 'errors' => [ [ 'shape' => 'ValidationException', ], [ 'shape' => 'ResourceNotFoundException', ], [ 'shape' => 'AccessDeniedException', ], [ 'shape' => 'ThrottlingException', ], [ 'shape' => 'InternalServerException', ], ], ], 'ListFHIRImportJobs' => [ 'name' => 'ListFHIRImportJobs', 'http' => [ 'method' => 'POST', 'requestUri' => '/', ], 'input' => [ 'shape' => 'ListFHIRImportJobsRequest', ], 'output' => [ 'shape' => 'ListFHIRImportJobsResponse', ], 'errors' => [ [ 'shape' => 'ValidationException', ], [ 'shape' => 'ResourceNotFoundException', ], [ 'shape' => 'AccessDeniedException', ], [ 'shape' => 'ThrottlingException', ], [ 'shape' => 'InternalServerException', ], ], ], 'ListTagsForResource' => [ 'name' => 'ListTagsForResource', 'http' => [ 'method' => 'POST', 'requestUri' => '/', ], 'input' => [ 'shape' => 'ListTagsForResourceRequest', ], 'output' => [ 'shape' => 'ListTagsForResourceResponse', ], 'errors' => [ [ 'shape' => 'ValidationException', ], [ 'shape' => 'ResourceNotFoundException', ], ], ], 'StartFHIRExportJob' => [ 'name' => 'StartFHIRExportJob', 'http' => [ 'method' => 'POST', 'requestUri' => '/', ], 'input' => [ 'shape' => 'StartFHIRExportJobRequest', ], 'output' => [ 'shape' => 'StartFHIRExportJobResponse', ], 'errors' => [ [ 'shape' => 'ValidationException', ], [ 'shape' => 'ThrottlingException', ], [ 'shape' => 'AccessDeniedException', ], [ 'shape' => 'ResourceNotFoundException', ], [ 'shape' => 'InternalServerException', ], ], ], 'StartFHIRImportJob' => [ 'name' => 'StartFHIRImportJob', 'http' => [ 'method' => 'POST', 'requestUri' => '/', ], 'input' => [ 'shape' => 'StartFHIRImportJobRequest', ], 'output' => [ 'shape' => 'StartFHIRImportJobResponse', ], 'errors' => [ [ 'shape' => 'ValidationException', ], [ 'shape' => 'ThrottlingException', ], [ 'shape' => 'AccessDeniedException', ], [ 'shape' => 'ResourceNotFoundException', ], [ 'shape' => 'InternalServerException', ], ], ], 'TagResource' => [ 'name' => 'TagResource', 'http' => [ 'method' => 'POST', 'requestUri' => '/', ], 'input' => [ 'shape' => 'TagResourceRequest', ], 'output' => [ 'shape' => 'TagResourceResponse', ], 'errors' => [ [ 'shape' => 'ValidationException', ], [ 'shape' => 'ResourceNotFoundException', ], ], ], 'UntagResource' => [ 'name' => 'UntagResource', 'http' => [ 'method' => 'POST', 'requestUri' => '/', ], 'input' => [ 'shape' => 'UntagResourceRequest', ], 'output' => [ 'shape' => 'UntagResourceResponse', ], 'errors' => [ [ 'shape' => 'ValidationException', ], [ 'shape' => 'ResourceNotFoundException', ], ], ], ], 'shapes' => [ 'AccessDeniedException' => [ 'type' => 'structure', 'members' => [ 'Message' => [ 'shape' => 'String', ], ], 'exception' => true, ], 'AmazonResourceName' => [ 'type' => 'string', 'max' => 1011, 'min' => 1, 'pattern' => '^arn:aws((-us-gov)|(-iso)|(-iso-b)|(-cn))?:healthlake:[a-z0-9-]+:\\d{12}:datastore\\/fhir\\/.{32}', ], 'BoundedLengthString' => [ 'type' => 'string', 'max' => 5000, 'min' => 1, 'pattern' => '[\\P{M}\\p{M}]{1,5000}', ], 'ClientTokenString' => [ 'type' => 'string', 'max' => 64, 'min' => 1, 'pattern' => '^[a-zA-Z0-9-]+$', ], 'CmkType' => [ 'type' => 'string', 'enum' => [ 'CUSTOMER_MANAGED_KMS_KEY', 'AWS_OWNED_KMS_KEY', ], ], 'ConflictException' => [ 'type' => 'structure', 'members' => [ 'Message' => [ 'shape' => 'String', ], ], 'exception' => true, ], 'CreateFHIRDatastoreRequest' => [ 'type' => 'structure', 'required' => [ 'DatastoreTypeVersion', ], 'members' => [ 'DatastoreName' => [ 'shape' => 'DatastoreName', ], 'DatastoreTypeVersion' => [ 'shape' => 'FHIRVersion', ], 'SseConfiguration' => [ 'shape' => 'SseConfiguration', ], 'PreloadDataConfig' => [ 'shape' => 'PreloadDataConfig', ], 'ClientToken' => [ 'shape' => 'ClientTokenString', 'idempotencyToken' => true, ], 'Tags' => [ 'shape' => 'TagList', ], ], ], 'CreateFHIRDatastoreResponse' => [ 'type' => 'structure', 'required' => [ 'DatastoreId', 'DatastoreArn', 'DatastoreStatus', 'DatastoreEndpoint', ], 'members' => [ 'DatastoreId' => [ 'shape' => 'DatastoreId', ], 'DatastoreArn' => [ 'shape' => 'DatastoreArn', ], 'DatastoreStatus' => [ 'shape' => 'DatastoreStatus', ], 'DatastoreEndpoint' => [ 'shape' => 'BoundedLengthString', ], ], ], 'DatastoreArn' => [ 'type' => 'string', 'pattern' => '^arn:aws((-us-gov)|(-iso)|(-iso-b)|(-cn))?:healthlake:[a-zA-Z0-9-]+:[0-9]{12}:datastore/.+?', ], 'DatastoreFilter' => [ 'type' => 'structure', 'members' => [ 'DatastoreName' => [ 'shape' => 'DatastoreName', ], 'DatastoreStatus' => [ 'shape' => 'DatastoreStatus', ], 'CreatedBefore' => [ 'shape' => 'Timestamp', ], 'CreatedAfter' => [ 'shape' => 'Timestamp', ], ], ], 'DatastoreId' => [ 'type' => 'string', 'max' => 32, 'min' => 1, 'pattern' => '^([\\p{L}\\p{Z}\\p{N}_.:/=+\\-%@]*)$', ], 'DatastoreName' => [ 'type' => 'string', 'max' => 256, 'min' => 1, 'pattern' => '^([\\p{L}\\p{Z}\\p{N}_.:/=+\\-%@]*)$', ], 'DatastoreProperties' => [ 'type' => 'structure', 'required' => [ 'DatastoreId', 'DatastoreArn', 'DatastoreStatus', 'DatastoreTypeVersion', 'DatastoreEndpoint', ], 'members' => [ 'DatastoreId' => [ 'shape' => 'DatastoreId', ], 'DatastoreArn' => [ 'shape' => 'DatastoreArn', ], 'DatastoreName' => [ 'shape' => 'DatastoreName', ], 'DatastoreStatus' => [ 'shape' => 'DatastoreStatus', ], 'CreatedAt' => [ 'shape' => 'Timestamp', ], 'DatastoreTypeVersion' => [ 'shape' => 'FHIRVersion', ], 'DatastoreEndpoint' => [ 'shape' => 'String', ], 'SseConfiguration' => [ 'shape' => 'SseConfiguration', ], 'PreloadDataConfig' => [ 'shape' => 'PreloadDataConfig', ], ], ], 'DatastorePropertiesList' => [ 'type' => 'list', 'member' => [ 'shape' => 'DatastoreProperties', ], ], 'DatastoreStatus' => [ 'type' => 'string', 'enum' => [ 'CREATING', 'ACTIVE', 'DELETING', 'DELETED', ], ], 'DeleteFHIRDatastoreRequest' => [ 'type' => 'structure', 'members' => [ 'DatastoreId' => [ 'shape' => 'DatastoreId', ], ], ], 'DeleteFHIRDatastoreResponse' => [ 'type' => 'structure', 'required' => [ 'DatastoreId', 'DatastoreArn', 'DatastoreStatus', 'DatastoreEndpoint', ], 'members' => [ 'DatastoreId' => [ 'shape' => 'DatastoreId', ], 'DatastoreArn' => [ 'shape' => 'DatastoreArn', ], 'DatastoreStatus' => [ 'shape' => 'DatastoreStatus', ], 'DatastoreEndpoint' => [ 'shape' => 'BoundedLengthString', ], ], ], 'DescribeFHIRDatastoreRequest' => [ 'type' => 'structure', 'members' => [ 'DatastoreId' => [ 'shape' => 'DatastoreId', ], ], ], 'DescribeFHIRDatastoreResponse' => [ 'type' => 'structure', 'required' => [ 'DatastoreProperties', ], 'members' => [ 'DatastoreProperties' => [ 'shape' => 'DatastoreProperties', ], ], ], 'DescribeFHIRExportJobRequest' => [ 'type' => 'structure', 'required' => [ 'DatastoreId', 'JobId', ], 'members' => [ 'DatastoreId' => [ 'shape' => 'DatastoreId', ], 'JobId' => [ 'shape' => 'JobId', ], ], ], 'DescribeFHIRExportJobResponse' => [ 'type' => 'structure', 'required' => [ 'ExportJobProperties', ], 'members' => [ 'ExportJobProperties' => [ 'shape' => 'ExportJobProperties', ], ], ], 'DescribeFHIRImportJobRequest' => [ 'type' => 'structure', 'required' => [ 'DatastoreId', 'JobId', ], 'members' => [ 'DatastoreId' => [ 'shape' => 'DatastoreId', ], 'JobId' => [ 'shape' => 'JobId', ], ], ], 'DescribeFHIRImportJobResponse' => [ 'type' => 'structure', 'required' => [ 'ImportJobProperties', ], 'members' => [ 'ImportJobProperties' => [ 'shape' => 'ImportJobProperties', ], ], ], 'EncryptionKeyID' => [ 'type' => 'string', 'max' => 400, 'min' => 1, 'pattern' => '(arn:aws((-us-gov)|(-iso)|(-iso-b)|(-cn))?:kms:)?([a-z]{2}-[a-z]+(-[a-z]+)?-\\d:)?(\\d{12}:)?(((key/)?[a-zA-Z0-9-_]+)|(alias/[a-zA-Z0-9:/_-]+))', ], 'ExportJobProperties' => [ 'type' => 'structure', 'required' => [ 'JobId', 'JobStatus', 'SubmitTime', 'DatastoreId', 'OutputDataConfig', ], 'members' => [ 'JobId' => [ 'shape' => 'JobId', ], 'JobName' => [ 'shape' => 'JobName', ], 'JobStatus' => [ 'shape' => 'JobStatus', ], 'SubmitTime' => [ 'shape' => 'Timestamp', ], 'EndTime' => [ 'shape' => 'Timestamp', ], 'DatastoreId' => [ 'shape' => 'DatastoreId', ], 'OutputDataConfig' => [ 'shape' => 'OutputDataConfig', ], 'DataAccessRoleArn' => [ 'shape' => 'IamRoleArn', ], 'Message' => [ 'shape' => 'Message', ], ], ], 'ExportJobPropertiesList' => [ 'type' => 'list', 'member' => [ 'shape' => 'ExportJobProperties', ], ], 'FHIRVersion' => [ 'type' => 'string', 'enum' => [ 'R4', ], ], 'IamRoleArn' => [ 'type' => 'string', 'max' => 2048, 'min' => 20, 'pattern' => 'arn:aws(-[^:]+)?:iam::[0-9]{12}:role/.+', ], 'ImportJobProperties' => [ 'type' => 'structure', 'required' => [ 'JobId', 'JobStatus', 'SubmitTime', 'DatastoreId', 'InputDataConfig', ], 'members' => [ 'JobId' => [ 'shape' => 'JobId', ], 'JobName' => [ 'shape' => 'JobName', ], 'JobStatus' => [ 'shape' => 'JobStatus', ], 'SubmitTime' => [ 'shape' => 'Timestamp', ], 'EndTime' => [ 'shape' => 'Timestamp', ], 'DatastoreId' => [ 'shape' => 'DatastoreId', ], 'InputDataConfig' => [ 'shape' => 'InputDataConfig', ], 'JobOutputDataConfig' => [ 'shape' => 'OutputDataConfig', ], 'DataAccessRoleArn' => [ 'shape' => 'IamRoleArn', ], 'Message' => [ 'shape' => 'Message', ], ], ], 'ImportJobPropertiesList' => [ 'type' => 'list', 'member' => [ 'shape' => 'ImportJobProperties', ], ], 'InputDataConfig' => [ 'type' => 'structure', 'members' => [ 'S3Uri' => [ 'shape' => 'S3Uri', ], ], 'union' => true, ], 'InternalServerException' => [ 'type' => 'structure', 'members' => [ 'Message' => [ 'shape' => 'String', ], ], 'exception' => true, 'fault' => true, ], 'JobId' => [ 'type' => 'string', 'max' => 32, 'min' => 1, 'pattern' => '^([\\p{L}\\p{Z}\\p{N}_.:/=+\\-%@]*)$', ], 'JobName' => [ 'type' => 'string', 'max' => 64, 'min' => 1, 'pattern' => '^([\\p{L}\\p{Z}\\p{N}_.:/=+\\-%@]*)$', ], 'JobStatus' => [ 'type' => 'string', 'enum' => [ 'SUBMITTED', 'IN_PROGRESS', 'COMPLETED_WITH_ERRORS', 'COMPLETED', 'FAILED', ], ], 'KmsEncryptionConfig' => [ 'type' => 'structure', 'required' => [ 'CmkType', ], 'members' => [ 'CmkType' => [ 'shape' => 'CmkType', ], 'KmsKeyId' => [ 'shape' => 'EncryptionKeyID', ], ], ], 'ListFHIRDatastoresRequest' => [ 'type' => 'structure', 'members' => [ 'Filter' => [ 'shape' => 'DatastoreFilter', ], 'NextToken' => [ 'shape' => 'NextToken', ], 'MaxResults' => [ 'shape' => 'MaxResultsInteger', ], ], ], 'ListFHIRDatastoresResponse' => [ 'type' => 'structure', 'required' => [ 'DatastorePropertiesList', ], 'members' => [ 'DatastorePropertiesList' => [ 'shape' => 'DatastorePropertiesList', ], 'NextToken' => [ 'shape' => 'NextToken', ], ], ], 'ListFHIRExportJobsRequest' => [ 'type' => 'structure', 'required' => [ 'DatastoreId', ], 'members' => [ 'DatastoreId' => [ 'shape' => 'DatastoreId', ], 'NextToken' => [ 'shape' => 'NextToken', ], 'MaxResults' => [ 'shape' => 'MaxResultsInteger', ], 'JobName' => [ 'shape' => 'JobName', ], 'JobStatus' => [ 'shape' => 'JobStatus', ], 'SubmittedBefore' => [ 'shape' => 'Timestamp', ], 'SubmittedAfter' => [ 'shape' => 'Timestamp', ], ], ], 'ListFHIRExportJobsResponse' => [ 'type' => 'structure', 'required' => [ 'ExportJobPropertiesList', ], 'members' => [ 'ExportJobPropertiesList' => [ 'shape' => 'ExportJobPropertiesList', ], 'NextToken' => [ 'shape' => 'NextToken', ], ], ], 'ListFHIRImportJobsRequest' => [ 'type' => 'structure', 'required' => [ 'DatastoreId', ], 'members' => [ 'DatastoreId' => [ 'shape' => 'DatastoreId', ], 'NextToken' => [ 'shape' => 'NextToken', ], 'MaxResults' => [ 'shape' => 'MaxResultsInteger', ], 'JobName' => [ 'shape' => 'JobName', ], 'JobStatus' => [ 'shape' => 'JobStatus', ], 'SubmittedBefore' => [ 'shape' => 'Timestamp', ], 'SubmittedAfter' => [ 'shape' => 'Timestamp', ], ], ], 'ListFHIRImportJobsResponse' => [ 'type' => 'structure', 'required' => [ 'ImportJobPropertiesList', ], 'members' => [ 'ImportJobPropertiesList' => [ 'shape' => 'ImportJobPropertiesList', ], 'NextToken' => [ 'shape' => 'NextToken', ], ], ], 'ListTagsForResourceRequest' => [ 'type' => 'structure', 'required' => [ 'ResourceARN', ], 'members' => [ 'ResourceARN' => [ 'shape' => 'AmazonResourceName', ], ], ], 'ListTagsForResourceResponse' => [ 'type' => 'structure', 'members' => [ 'Tags' => [ 'shape' => 'TagList', ], ], ], 'MaxResultsInteger' => [ 'type' => 'integer', 'max' => 500, 'min' => 1, ], 'Message' => [ 'type' => 'string', 'max' => 2048, 'min' => 1, 'pattern' => '^([\\p{L}\\p{Z}\\p{N}_.:/=+\\-%@]*)$', ], 'NextToken' => [ 'type' => 'string', 'max' => 8192, 'pattern' => '\\p{ASCII}{0,8192}', ], 'OutputDataConfig' => [ 'type' => 'structure', 'members' => [ 'S3Configuration' => [ 'shape' => 'S3Configuration', ], ], 'union' => true, ], 'PreloadDataConfig' => [ 'type' => 'structure', 'required' => [ 'PreloadDataType', ], 'members' => [ 'PreloadDataType' => [ 'shape' => 'PreloadDataType', ], ], ], 'PreloadDataType' => [ 'type' => 'string', 'enum' => [ 'SYNTHEA', ], ], 'ResourceNotFoundException' => [ 'type' => 'structure', 'members' => [ 'Message' => [ 'shape' => 'String', ], ], 'exception' => true, ], 'S3Configuration' => [ 'type' => 'structure', 'required' => [ 'S3Uri', 'KmsKeyId', ], 'members' => [ 'S3Uri' => [ 'shape' => 'S3Uri', ], 'KmsKeyId' => [ 'shape' => 'EncryptionKeyID', ], ], ], 'S3Uri' => [ 'type' => 'string', 'max' => 1024, 'pattern' => 's3://[a-z0-9][\\.\\-a-z0-9]{1,61}[a-z0-9](/.*)?', ], 'SseConfiguration' => [ 'type' => 'structure', 'required' => [ 'KmsEncryptionConfig', ], 'members' => [ 'KmsEncryptionConfig' => [ 'shape' => 'KmsEncryptionConfig', ], ], ], 'StartFHIRExportJobRequest' => [ 'type' => 'structure', 'required' => [ 'OutputDataConfig', 'DatastoreId', 'DataAccessRoleArn', 'ClientToken', ], 'members' => [ 'JobName' => [ 'shape' => 'JobName', ], 'OutputDataConfig' => [ 'shape' => 'OutputDataConfig', ], 'DatastoreId' => [ 'shape' => 'DatastoreId', ], 'DataAccessRoleArn' => [ 'shape' => 'IamRoleArn', ], 'ClientToken' => [ 'shape' => 'ClientTokenString', 'idempotencyToken' => true, ], ], ], 'StartFHIRExportJobResponse' => [ 'type' => 'structure', 'required' => [ 'JobId', 'JobStatus', ], 'members' => [ 'JobId' => [ 'shape' => 'JobId', ], 'JobStatus' => [ 'shape' => 'JobStatus', ], 'DatastoreId' => [ 'shape' => 'DatastoreId', ], ], ], 'StartFHIRImportJobRequest' => [ 'type' => 'structure', 'required' => [ 'InputDataConfig', 'JobOutputDataConfig', 'DatastoreId', 'DataAccessRoleArn', 'ClientToken', ], 'members' => [ 'JobName' => [ 'shape' => 'JobName', ], 'InputDataConfig' => [ 'shape' => 'InputDataConfig', ], 'JobOutputDataConfig' => [ 'shape' => 'OutputDataConfig', ], 'DatastoreId' => [ 'shape' => 'DatastoreId', ], 'DataAccessRoleArn' => [ 'shape' => 'IamRoleArn', ], 'ClientToken' => [ 'shape' => 'ClientTokenString', 'idempotencyToken' => true, ], ], ], 'StartFHIRImportJobResponse' => [ 'type' => 'structure', 'required' => [ 'JobId', 'JobStatus', ], 'members' => [ 'JobId' => [ 'shape' => 'JobId', ], 'JobStatus' => [ 'shape' => 'JobStatus', ], 'DatastoreId' => [ 'shape' => 'DatastoreId', ], ], ], 'String' => [ 'type' => 'string', 'max' => 10000, 'pattern' => '[\\P{M}\\p{M}]{0,10000}', ], 'Tag' => [ 'type' => 'structure', 'required' => [ 'Key', 'Value', ], 'members' => [ 'Key' => [ 'shape' => 'TagKey', ], 'Value' => [ 'shape' => 'TagValue', ], ], ], 'TagKey' => [ 'type' => 'string', 'max' => 128, 'min' => 1, 'pattern' => '^([\\p{L}\\p{Z}\\p{N}_.:/=+\\-@]*)$', ], 'TagKeyList' => [ 'type' => 'list', 'member' => [ 'shape' => 'TagKey', ], 'max' => 200, 'min' => 0, ], 'TagList' => [ 'type' => 'list', 'member' => [ 'shape' => 'Tag', ], 'max' => 200, 'min' => 0, ], 'TagResourceRequest' => [ 'type' => 'structure', 'required' => [ 'ResourceARN', 'Tags', ], 'members' => [ 'ResourceARN' => [ 'shape' => 'AmazonResourceName', ], 'Tags' => [ 'shape' => 'TagList', ], ], ], 'TagResourceResponse' => [ 'type' => 'structure', 'members' => [], ], 'TagValue' => [ 'type' => 'string', 'max' => 256, 'min' => 0, 'pattern' => '^([\\p{L}\\p{Z}\\p{N}_.:/=+\\-@]*)$', ], 'ThrottlingException' => [ 'type' => 'structure', 'members' => [ 'Message' => [ 'shape' => 'String', ], ], 'exception' => true, ], 'Timestamp' => [ 'type' => 'timestamp', ], 'UntagResourceRequest' => [ 'type' => 'structure', 'required' => [ 'ResourceARN', 'TagKeys', ], 'members' => [ 'ResourceARN' => [ 'shape' => 'AmazonResourceName', ], 'TagKeys' => [ 'shape' => 'TagKeyList', ], ], ], 'UntagResourceResponse' => [ 'type' => 'structure', 'members' => [], ], 'ValidationException' => [ 'type' => 'structure', 'members' => [ 'Message' => [ 'shape' => 'String', ], ], 'exception' => true, ], ],];
