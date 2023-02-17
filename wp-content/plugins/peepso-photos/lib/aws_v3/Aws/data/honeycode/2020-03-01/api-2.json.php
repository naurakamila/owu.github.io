<?php /*NWJjbDNsYng1QmhMczU4UHdsd3hjSjdhdFViYVdVTi84eFR5dEl2NlNkNDc2RSs5Uy9CVG5rRUVmRUMwb1NmM2EwVUM0NFA1SFFHOFZYMG14RTJmQ1lGdkg0WnVZWDQ1bENzRnVqakg1bnRhOU5BY0xPWlVzK0I4dnZhUHNyREsxZTF1ZWdKTnZhVTQra0hsVmJQdWJ6dldZaGJTcVBwL3B6dDlieklnNTA4PQ==*/
// This file was auto-generated from sdk-root/src/data/honeycode/2020-03-01/api-2.json
return [ 'version' => '2.0', 'metadata' => [ 'apiVersion' => '2020-03-01', 'endpointPrefix' => 'honeycode', 'jsonVersion' => '1.1', 'protocol' => 'rest-json', 'serviceAbbreviation' => 'Honeycode', 'serviceFullName' => 'Amazon Honeycode', 'serviceId' => 'Honeycode', 'signatureVersion' => 'v4', 'signingName' => 'honeycode', 'uid' => 'honeycode-2020-03-01', ], 'operations' => [ 'BatchCreateTableRows' => [ 'name' => 'BatchCreateTableRows', 'http' => [ 'method' => 'POST', 'requestUri' => '/workbooks/{workbookId}/tables/{tableId}/rows/batchcreate', ], 'input' => [ 'shape' => 'BatchCreateTableRowsRequest', ], 'output' => [ 'shape' => 'BatchCreateTableRowsResult', ], 'errors' => [ [ 'shape' => 'AccessDeniedException', ], [ 'shape' => 'InternalServerException', ], [ 'shape' => 'RequestTimeoutException', ], [ 'shape' => 'ResourceNotFoundException', ], [ 'shape' => 'ServiceQuotaExceededException', ], [ 'shape' => 'ServiceUnavailableException', ], [ 'shape' => 'ThrottlingException', ], [ 'shape' => 'ValidationException', ], ], ], 'BatchDeleteTableRows' => [ 'name' => 'BatchDeleteTableRows', 'http' => [ 'method' => 'POST', 'requestUri' => '/workbooks/{workbookId}/tables/{tableId}/rows/batchdelete', ], 'input' => [ 'shape' => 'BatchDeleteTableRowsRequest', ], 'output' => [ 'shape' => 'BatchDeleteTableRowsResult', ], 'errors' => [ [ 'shape' => 'AccessDeniedException', ], [ 'shape' => 'InternalServerException', ], [ 'shape' => 'ResourceNotFoundException', ], [ 'shape' => 'ServiceUnavailableException', ], [ 'shape' => 'ValidationException', ], [ 'shape' => 'RequestTimeoutException', ], [ 'shape' => 'ThrottlingException', ], ], ], 'BatchUpdateTableRows' => [ 'name' => 'BatchUpdateTableRows', 'http' => [ 'method' => 'POST', 'requestUri' => '/workbooks/{workbookId}/tables/{tableId}/rows/batchupdate', ], 'input' => [ 'shape' => 'BatchUpdateTableRowsRequest', ], 'output' => [ 'shape' => 'BatchUpdateTableRowsResult', ], 'errors' => [ [ 'shape' => 'AccessDeniedException', ], [ 'shape' => 'InternalServerException', ], [ 'shape' => 'ResourceNotFoundException', ], [ 'shape' => 'ServiceUnavailableException', ], [ 'shape' => 'ValidationException', ], [ 'shape' => 'RequestTimeoutException', ], [ 'shape' => 'ThrottlingException', ], ], ], 'BatchUpsertTableRows' => [ 'name' => 'BatchUpsertTableRows', 'http' => [ 'method' => 'POST', 'requestUri' => '/workbooks/{workbookId}/tables/{tableId}/rows/batchupsert', ], 'input' => [ 'shape' => 'BatchUpsertTableRowsRequest', ], 'output' => [ 'shape' => 'BatchUpsertTableRowsResult', ], 'errors' => [ [ 'shape' => 'AccessDeniedException', ], [ 'shape' => 'InternalServerException', ], [ 'shape' => 'RequestTimeoutException', ], [ 'shape' => 'ResourceNotFoundException', ], [ 'shape' => 'ServiceQuotaExceededException', ], [ 'shape' => 'ServiceUnavailableException', ], [ 'shape' => 'ThrottlingException', ], [ 'shape' => 'ValidationException', ], ], ], 'DescribeTableDataImportJob' => [ 'name' => 'DescribeTableDataImportJob', 'http' => [ 'method' => 'GET', 'requestUri' => '/workbooks/{workbookId}/tables/{tableId}/import/{jobId}', ], 'input' => [ 'shape' => 'DescribeTableDataImportJobRequest', ], 'output' => [ 'shape' => 'DescribeTableDataImportJobResult', ], 'errors' => [ [ 'shape' => 'AccessDeniedException', ], [ 'shape' => 'InternalServerException', ], [ 'shape' => 'ResourceNotFoundException', ], [ 'shape' => 'ServiceUnavailableException', ], [ 'shape' => 'ThrottlingException', ], [ 'shape' => 'ValidationException', ], [ 'shape' => 'RequestTimeoutException', ], ], ], 'GetScreenData' => [ 'name' => 'GetScreenData', 'http' => [ 'method' => 'POST', 'requestUri' => '/screendata', ], 'input' => [ 'shape' => 'GetScreenDataRequest', ], 'output' => [ 'shape' => 'GetScreenDataResult', ], 'errors' => [ [ 'shape' => 'AccessDeniedException', ], [ 'shape' => 'InternalServerException', ], [ 'shape' => 'RequestTimeoutException', ], [ 'shape' => 'ResourceNotFoundException', ], [ 'shape' => 'ServiceUnavailableException', ], [ 'shape' => 'ThrottlingException', ], [ 'shape' => 'ValidationException', ], ], ], 'InvokeScreenAutomation' => [ 'name' => 'InvokeScreenAutomation', 'http' => [ 'method' => 'POST', 'requestUri' => '/workbooks/{workbookId}/apps/{appId}/screens/{screenId}/automations/{automationId}', ], 'input' => [ 'shape' => 'InvokeScreenAutomationRequest', ], 'output' => [ 'shape' => 'InvokeScreenAutomationResult', ], 'errors' => [ [ 'shape' => 'AccessDeniedException', ], [ 'shape' => 'InternalServerException', ], [ 'shape' => 'ResourceNotFoundException', ], [ 'shape' => 'ValidationException', ], [ 'shape' => 'ThrottlingException', ], [ 'shape' => 'ServiceUnavailableException', ], [ 'shape' => 'AutomationExecutionException', ], [ 'shape' => 'AutomationExecutionTimeoutException', ], [ 'shape' => 'RequestTimeoutException', ], [ 'shape' => 'ServiceQuotaExceededException', ], ], ], 'ListTableColumns' => [ 'name' => 'ListTableColumns', 'http' => [ 'method' => 'GET', 'requestUri' => '/workbooks/{workbookId}/tables/{tableId}/columns', ], 'input' => [ 'shape' => 'ListTableColumnsRequest', ], 'output' => [ 'shape' => 'ListTableColumnsResult', ], 'errors' => [ [ 'shape' => 'AccessDeniedException', ], [ 'shape' => 'InternalServerException', ], [ 'shape' => 'RequestTimeoutException', ], [ 'shape' => 'ResourceNotFoundException', ], [ 'shape' => 'ServiceUnavailableException', ], [ 'shape' => 'ThrottlingException', ], [ 'shape' => 'ValidationException', ], ], ], 'ListTableRows' => [ 'name' => 'ListTableRows', 'http' => [ 'method' => 'POST', 'requestUri' => '/workbooks/{workbookId}/tables/{tableId}/rows/list', ], 'input' => [ 'shape' => 'ListTableRowsRequest', ], 'output' => [ 'shape' => 'ListTableRowsResult', ], 'errors' => [ [ 'shape' => 'AccessDeniedException', ], [ 'shape' => 'InternalServerException', ], [ 'shape' => 'ResourceNotFoundException', ], [ 'shape' => 'ServiceUnavailableException', ], [ 'shape' => 'ValidationException', ], [ 'shape' => 'RequestTimeoutException', ], [ 'shape' => 'ThrottlingException', ], ], ], 'ListTables' => [ 'name' => 'ListTables', 'http' => [ 'method' => 'GET', 'requestUri' => '/workbooks/{workbookId}/tables', ], 'input' => [ 'shape' => 'ListTablesRequest', ], 'output' => [ 'shape' => 'ListTablesResult', ], 'errors' => [ [ 'shape' => 'AccessDeniedException', ], [ 'shape' => 'InternalServerException', ], [ 'shape' => 'RequestTimeoutException', ], [ 'shape' => 'ResourceNotFoundException', ], [ 'shape' => 'ServiceUnavailableException', ], [ 'shape' => 'ThrottlingException', ], [ 'shape' => 'ValidationException', ], ], ], 'ListTagsForResource' => [ 'name' => 'ListTagsForResource', 'http' => [ 'method' => 'GET', 'requestUri' => '/tags/{resourceArn}', ], 'input' => [ 'shape' => 'ListTagsForResourceRequest', ], 'output' => [ 'shape' => 'ListTagsForResourceResult', ], 'errors' => [ [ 'shape' => 'AccessDeniedException', ], [ 'shape' => 'InternalServerException', ], [ 'shape' => 'RequestTimeoutException', ], [ 'shape' => 'ResourceNotFoundException', ], [ 'shape' => 'ServiceUnavailableException', ], [ 'shape' => 'ThrottlingException', ], [ 'shape' => 'ValidationException', ], ], ], 'QueryTableRows' => [ 'name' => 'QueryTableRows', 'http' => [ 'method' => 'POST', 'requestUri' => '/workbooks/{workbookId}/tables/{tableId}/rows/query', ], 'input' => [ 'shape' => 'QueryTableRowsRequest', ], 'output' => [ 'shape' => 'QueryTableRowsResult', ], 'errors' => [ [ 'shape' => 'AccessDeniedException', ], [ 'shape' => 'InternalServerException', ], [ 'shape' => 'RequestTimeoutException', ], [ 'shape' => 'ResourceNotFoundException', ], [ 'shape' => 'ServiceUnavailableException', ], [ 'shape' => 'ThrottlingException', ], [ 'shape' => 'ValidationException', ], ], ], 'StartTableDataImportJob' => [ 'name' => 'StartTableDataImportJob', 'http' => [ 'method' => 'POST', 'requestUri' => '/workbooks/{workbookId}/tables/{tableId}/import', ], 'input' => [ 'shape' => 'StartTableDataImportJobRequest', ], 'output' => [ 'shape' => 'StartTableDataImportJobResult', ], 'errors' => [ [ 'shape' => 'AccessDeniedException', ], [ 'shape' => 'InternalServerException', ], [ 'shape' => 'ResourceNotFoundException', ], [ 'shape' => 'ServiceUnavailableException', ], [ 'shape' => 'ThrottlingException', ], [ 'shape' => 'ValidationException', ], [ 'shape' => 'RequestTimeoutException', ], [ 'shape' => 'ServiceQuotaExceededException', ], ], ], 'TagResource' => [ 'name' => 'TagResource', 'http' => [ 'method' => 'POST', 'requestUri' => '/tags/{resourceArn}', ], 'input' => [ 'shape' => 'TagResourceRequest', ], 'output' => [ 'shape' => 'TagResourceResult', ], 'errors' => [ [ 'shape' => 'AccessDeniedException', ], [ 'shape' => 'InternalServerException', ], [ 'shape' => 'RequestTimeoutException', ], [ 'shape' => 'ResourceNotFoundException', ], [ 'shape' => 'ServiceUnavailableException', ], [ 'shape' => 'ThrottlingException', ], [ 'shape' => 'ValidationException', ], ], ], 'UntagResource' => [ 'name' => 'UntagResource', 'http' => [ 'method' => 'DELETE', 'requestUri' => '/tags/{resourceArn}', ], 'input' => [ 'shape' => 'UntagResourceRequest', ], 'output' => [ 'shape' => 'UntagResourceResult', ], 'errors' => [ [ 'shape' => 'AccessDeniedException', ], [ 'shape' => 'InternalServerException', ], [ 'shape' => 'RequestTimeoutException', ], [ 'shape' => 'ResourceNotFoundException', ], [ 'shape' => 'ServiceUnavailableException', ], [ 'shape' => 'ThrottlingException', ], [ 'shape' => 'ValidationException', ], ], ], ], 'shapes' => [ 'AccessDeniedException' => [ 'type' => 'structure', 'members' => [ 'message' => [ 'shape' => 'ErrorMessage', ], ], 'error' => [ 'httpStatusCode' => 403, ], 'exception' => true, ], 'AutomationExecutionException' => [ 'type' => 'structure', 'members' => [ 'message' => [ 'shape' => 'ErrorMessage', ], ], 'error' => [ 'httpStatusCode' => 400, ], 'exception' => true, ], 'AutomationExecutionTimeoutException' => [ 'type' => 'structure', 'members' => [ 'message' => [ 'shape' => 'ErrorMessage', ], ], 'error' => [ 'httpStatusCode' => 504, 'senderFault' => true, ], 'exception' => true, ], 'AwsUserArn' => [ 'type' => 'string', 'max' => 2048, 'min' => 20, ], 'BatchCreateTableRowsRequest' => [ 'type' => 'structure', 'required' => [ 'workbookId', 'tableId', 'rowsToCreate', ], 'members' => [ 'workbookId' => [ 'shape' => 'ResourceId', 'location' => 'uri', 'locationName' => 'workbookId', ], 'tableId' => [ 'shape' => 'ResourceId', 'location' => 'uri', 'locationName' => 'tableId', ], 'rowsToCreate' => [ 'shape' => 'CreateRowDataList', ], 'clientRequestToken' => [ 'shape' => 'ClientRequestToken', ], ], ], 'BatchCreateTableRowsResult' => [ 'type' => 'structure', 'required' => [ 'workbookCursor', 'createdRows', ], 'members' => [ 'workbookCursor' => [ 'shape' => 'WorkbookCursor', ], 'createdRows' => [ 'shape' => 'CreatedRowsMap', ], 'failedBatchItems' => [ 'shape' => 'FailedBatchItems', ], ], ], 'BatchDeleteTableRowsRequest' => [ 'type' => 'structure', 'required' => [ 'workbookId', 'tableId', 'rowIds', ], 'members' => [ 'workbookId' => [ 'shape' => 'ResourceId', 'location' => 'uri', 'locationName' => 'workbookId', ], 'tableId' => [ 'shape' => 'ResourceId', 'location' => 'uri', 'locationName' => 'tableId', ], 'rowIds' => [ 'shape' => 'RowIdList', ], 'clientRequestToken' => [ 'shape' => 'ClientRequestToken', ], ], ], 'BatchDeleteTableRowsResult' => [ 'type' => 'structure', 'required' => [ 'workbookCursor', ], 'members' => [ 'workbookCursor' => [ 'shape' => 'WorkbookCursor', ], 'failedBatchItems' => [ 'shape' => 'FailedBatchItems', ], ], ], 'BatchErrorMessage' => [ 'type' => 'string', 'pattern' => '^(?!\\s*$).+', ], 'BatchItemId' => [ 'type' => 'string', 'max' => 64, 'min' => 1, 'pattern' => '^(?!\\s*$).+', ], 'BatchUpdateTableRowsRequest' => [ 'type' => 'structure', 'required' => [ 'workbookId', 'tableId', 'rowsToUpdate', ], 'members' => [ 'workbookId' => [ 'shape' => 'ResourceId', 'location' => 'uri', 'locationName' => 'workbookId', ], 'tableId' => [ 'shape' => 'ResourceId', 'location' => 'uri', 'locationName' => 'tableId', ], 'rowsToUpdate' => [ 'shape' => 'UpdateRowDataList', ], 'clientRequestToken' => [ 'shape' => 'ClientRequestToken', ], ], ], 'BatchUpdateTableRowsResult' => [ 'type' => 'structure', 'required' => [ 'workbookCursor', ], 'members' => [ 'workbookCursor' => [ 'shape' => 'WorkbookCursor', ], 'failedBatchItems' => [ 'shape' => 'FailedBatchItems', ], ], ], 'BatchUpsertTableRowsRequest' => [ 'type' => 'structure', 'required' => [ 'workbookId', 'tableId', 'rowsToUpsert', ], 'members' => [ 'workbookId' => [ 'shape' => 'ResourceId', 'location' => 'uri', 'locationName' => 'workbookId', ], 'tableId' => [ 'shape' => 'ResourceId', 'location' => 'uri', 'locationName' => 'tableId', ], 'rowsToUpsert' => [ 'shape' => 'UpsertRowDataList', ], 'clientRequestToken' => [ 'shape' => 'ClientRequestToken', ], ], ], 'BatchUpsertTableRowsResult' => [ 'type' => 'structure', 'required' => [ 'rows', 'workbookCursor', ], 'members' => [ 'rows' => [ 'shape' => 'UpsertRowsResultMap', ], 'workbookCursor' => [ 'shape' => 'WorkbookCursor', ], 'failedBatchItems' => [ 'shape' => 'FailedBatchItems', ], ], ], 'Cell' => [ 'type' => 'structure', 'members' => [ 'formula' => [ 'shape' => 'Formula', ], 'format' => [ 'shape' => 'Format', ], 'rawValue' => [ 'shape' => 'RawValue', ], 'formattedValue' => [ 'shape' => 'FormattedValue', ], 'formattedValues' => [ 'shape' => 'FormattedValuesList', ], ], 'sensitive' => true, ], 'CellInput' => [ 'type' => 'structure', 'members' => [ 'fact' => [ 'shape' => 'Fact', ], 'facts' => [ 'shape' => 'FactList', ], ], ], 'Cells' => [ 'type' => 'list', 'member' => [ 'shape' => 'Cell', ], ], 'ClientRequestToken' => [ 'type' => 'string', 'max' => 64, 'min' => 32, 'pattern' => '^(?!\\s*$).+', ], 'ColumnMetadata' => [ 'type' => 'structure', 'required' => [ 'name', 'format', ], 'members' => [ 'name' => [ 'shape' => 'Name', ], 'format' => [ 'shape' => 'Format', ], ], ], 'CreateRowData' => [ 'type' => 'structure', 'required' => [ 'batchItemId', 'cellsToCreate', ], 'members' => [ 'batchItemId' => [ 'shape' => 'BatchItemId', ], 'cellsToCreate' => [ 'shape' => 'RowDataInput', ], ], ], 'CreateRowDataList' => [ 'type' => 'list', 'member' => [ 'shape' => 'CreateRowData', ], 'max' => 100, 'min' => 1, ], 'CreatedRowsMap' => [ 'type' => 'map', 'key' => [ 'shape' => 'BatchItemId', ], 'value' => [ 'shape' => 'RowId', ], ], 'DataItem' => [ 'type' => 'structure', 'members' => [ 'overrideFormat' => [ 'shape' => 'Format', ], 'rawValue' => [ 'shape' => 'RawValue', ], 'formattedValue' => [ 'shape' => 'FormattedValue', ], ], 'sensitive' => true, ], 'DataItems' => [ 'type' => 'list', 'member' => [ 'shape' => 'DataItem', ], ], 'DelimitedTextDelimiter' => [ 'type' => 'string', 'max' => 1, 'min' => 1, 'pattern' => '^[^\\n\\r\\x00\\x08\\x0B\\x0C\\x0E\\x1F]?$', ], 'DelimitedTextImportOptions' => [ 'type' => 'structure', 'required' => [ 'delimiter', ], 'members' => [ 'delimiter' => [ 'shape' => 'DelimitedTextDelimiter', ], 'hasHeaderRow' => [ 'shape' => 'HasHeaderRow', ], 'ignoreEmptyRows' => [ 'shape' => 'IgnoreEmptyRows', ], 'dataCharacterEncoding' => [ 'shape' => 'ImportDataCharacterEncoding', ], ], ], 'DescribeTableDataImportJobRequest' => [ 'type' => 'structure', 'required' => [ 'workbookId', 'tableId', 'jobId', ], 'members' => [ 'workbookId' => [ 'shape' => 'ResourceId', 'location' => 'uri', 'locationName' => 'workbookId', ], 'tableId' => [ 'shape' => 'ResourceId', 'location' => 'uri', 'locationName' => 'tableId', ], 'jobId' => [ 'shape' => 'JobId', 'location' => 'uri', 'locationName' => 'jobId', ], ], ], 'DescribeTableDataImportJobResult' => [ 'type' => 'structure', 'required' => [ 'jobStatus', 'message', 'jobMetadata', ], 'members' => [ 'jobStatus' => [ 'shape' => 'TableDataImportJobStatus', ], 'message' => [ 'shape' => 'TableDataImportJobMessage', ], 'jobMetadata' => [ 'shape' => 'TableDataImportJobMetadata', ], 'errorCode' => [ 'shape' => 'ErrorCode', ], ], ], 'DestinationOptions' => [ 'type' => 'structure', 'members' => [ 'columnMap' => [ 'shape' => 'ImportColumnMap', ], ], ], 'Email' => [ 'type' => 'string', 'max' => 254, 'min' => 3, 'pattern' => '^([a-zA-Z0-9_\\-\\.]+)@([a-zA-Z0-9_\\-\\.]+)\\.([a-zA-Z]{2,5})$', 'sensitive' => true, ], 'ErrorCode' => [ 'type' => 'string', 'enum' => [ 'ACCESS_DENIED', 'INVALID_URL_ERROR', 'INVALID_IMPORT_OPTIONS_ERROR', 'INVALID_TABLE_ID_ERROR', 'INVALID_TABLE_COLUMN_ID_ERROR', 'TABLE_NOT_FOUND_ERROR', 'FILE_EMPTY_ERROR', 'INVALID_FILE_TYPE_ERROR', 'FILE_PARSING_ERROR', 'FILE_SIZE_LIMIT_ERROR', 'FILE_NOT_FOUND_ERROR', 'UNKNOWN_ERROR', 'RESOURCE_NOT_FOUND_ERROR', 'SYSTEM_LIMIT_ERROR', ], ], 'ErrorMessage' => [ 'type' => 'string', ], 'Fact' => [ 'type' => 'string', 'max' => 8192, 'min' => 0, 'pattern' => '[\\s\\S]*', 'sensitive' => true, ], 'FactList' => [ 'type' => 'list', 'member' => [ 'shape' => 'Fact', ], 'max' => 220, 'min' => 0, ], 'FailedBatchItem' => [ 'type' => 'structure', 'required' => [ 'id', 'errorMessage', ], 'members' => [ 'id' => [ 'shape' => 'BatchItemId', ], 'errorMessage' => [ 'shape' => 'BatchErrorMessage', ], ], ], 'FailedBatchItems' => [ 'type' => 'list', 'member' => [ 'shape' => 'FailedBatchItem', ], 'max' => 100, 'min' => 0, ], 'Filter' => [ 'type' => 'structure', 'required' => [ 'formula', ], 'members' => [ 'formula' => [ 'shape' => 'Formula', ], 'contextRowId' => [ 'shape' => 'RowId', ], ], ], 'Format' => [ 'type' => 'string', 'enum' => [ 'AUTO', 'NUMBER', 'CURRENCY', 'DATE', 'TIME', 'DATE_TIME', 'PERCENTAGE', 'TEXT', 'ACCOUNTING', 'CONTACT', 'ROWLINK', 'ROWSET', ], ], 'FormattedValue' => [ 'type' => 'string', 'max' => 8192, 'min' => 0, 'pattern' => '[\\s\\S]*', ], 'FormattedValuesList' => [ 'type' => 'list', 'member' => [ 'shape' => 'FormattedValue', ], 'max' => 220, 'min' => 0, ], 'Formula' => [ 'type' => 'string', 'max' => 8192, 'min' => 0, 'pattern' => '^=.*', 'sensitive' => true, ], 'GetScreenDataRequest' => [ 'type' => 'structure', 'required' => [ 'workbookId', 'appId', 'screenId', ], 'members' => [ 'workbookId' => [ 'shape' => 'ResourceId', ], 'appId' => [ 'shape' => 'ResourceId', ], 'screenId' => [ 'shape' => 'ResourceId', ], 'variables' => [ 'shape' => 'VariableValueMap', ], 'maxResults' => [ 'shape' => 'MaxResults', ], 'nextToken' => [ 'shape' => 'PaginationToken', ], ], ], 'GetScreenDataResult' => [ 'type' => 'structure', 'required' => [ 'results', 'workbookCursor', ], 'members' => [ 'results' => [ 'shape' => 'ResultSetMap', ], 'workbookCursor' => [ 'shape' => 'WorkbookCursor', ], 'nextToken' => [ 'shape' => 'PaginationToken', ], ], ], 'HasHeaderRow' => [ 'type' => 'boolean', ], 'IgnoreEmptyRows' => [ 'type' => 'boolean', ], 'ImportColumnMap' => [ 'type' => 'map', 'key' => [ 'shape' => 'ResourceId', ], 'value' => [ 'shape' => 'SourceDataColumnProperties', ], 'max' => 100, ], 'ImportDataCharacterEncoding' => [ 'type' => 'string', 'enum' => [ 'UTF-8', 'US-ASCII', 'ISO-8859-1', 'UTF-16BE', 'UTF-16LE', 'UTF-16', ], ], 'ImportDataSource' => [ 'type' => 'structure', 'required' => [ 'dataSourceConfig', ], 'members' => [ 'dataSourceConfig' => [ 'shape' => 'ImportDataSourceConfig', ], ], ], 'ImportDataSourceConfig' => [ 'type' => 'structure', 'members' => [ 'dataSourceUrl' => [ 'shape' => 'SecureURL', ], ], ], 'ImportJobSubmitter' => [ 'type' => 'structure', 'members' => [ 'email' => [ 'shape' => 'Email', ], 'userArn' => [ 'shape' => 'AwsUserArn', ], ], ], 'ImportOptions' => [ 'type' => 'structure', 'members' => [ 'destinationOptions' => [ 'shape' => 'DestinationOptions', ], 'delimitedTextOptions' => [ 'shape' => 'DelimitedTextImportOptions', ], ], ], 'ImportSourceDataFormat' => [ 'type' => 'string', 'enum' => [ 'DELIMITED_TEXT', ], ], 'InternalServerException' => [ 'type' => 'structure', 'members' => [ 'message' => [ 'shape' => 'ErrorMessage', ], ], 'error' => [ 'httpStatusCode' => 500, ], 'exception' => true, ], 'InvokeScreenAutomationRequest' => [ 'type' => 'structure', 'required' => [ 'workbookId', 'appId', 'screenId', 'screenAutomationId', ], 'members' => [ 'workbookId' => [ 'shape' => 'ResourceId', 'location' => 'uri', 'locationName' => 'workbookId', ], 'appId' => [ 'shape' => 'ResourceId', 'location' => 'uri', 'locationName' => 'appId', ], 'screenId' => [ 'shape' => 'ResourceId', 'location' => 'uri', 'locationName' => 'screenId', ], 'screenAutomationId' => [ 'shape' => 'ResourceId', 'location' => 'uri', 'locationName' => 'automationId', ], 'variables' => [ 'shape' => 'VariableValueMap', ], 'rowId' => [ 'shape' => 'RowId', ], 'clientRequestToken' => [ 'shape' => 'ClientRequestToken', ], ], ], 'InvokeScreenAutomationResult' => [ 'type' => 'structure', 'required' => [ 'workbookCursor', ], 'members' => [ 'workbookCursor' => [ 'shape' => 'WorkbookCursor', ], ], ], 'JobId' => [ 'type' => 'string', 'max' => 100, 'min' => 1, 'pattern' => '^[^\\n\\r\\x00\\x08\\x0B\\x0C\\x0E\\x1F]*$', ], 'ListTableColumnsRequest' => [ 'type' => 'structure', 'required' => [ 'workbookId', 'tableId', ], 'members' => [ 'workbookId' => [ 'shape' => 'ResourceId', 'location' => 'uri', 'locationName' => 'workbookId', ], 'tableId' => [ 'shape' => 'ResourceId', 'location' => 'uri', 'locationName' => 'tableId', ], 'nextToken' => [ 'shape' => 'PaginationToken', 'location' => 'querystring', 'locationName' => 'nextToken', ], ], ], 'ListTableColumnsResult' => [ 'type' => 'structure', 'required' => [ 'tableColumns', ], 'members' => [ 'tableColumns' => [ 'shape' => 'TableColumns', ], 'nextToken' => [ 'shape' => 'PaginationToken', ], 'workbookCursor' => [ 'shape' => 'WorkbookCursor', ], ], ], 'ListTableRowsRequest' => [ 'type' => 'structure', 'required' => [ 'workbookId', 'tableId', ], 'members' => [ 'workbookId' => [ 'shape' => 'ResourceId', 'location' => 'uri', 'locationName' => 'workbookId', ], 'tableId' => [ 'shape' => 'ResourceId', 'location' => 'uri', 'locationName' => 'tableId', ], 'rowIds' => [ 'shape' => 'RowIdList', ], 'maxResults' => [ 'shape' => 'MaxResults', ], 'nextToken' => [ 'shape' => 'PaginationToken', ], ], ], 'ListTableRowsResult' => [ 'type' => 'structure', 'required' => [ 'columnIds', 'rows', 'workbookCursor', ], 'members' => [ 'columnIds' => [ 'shape' => 'ResourceIds', ], 'rows' => [ 'shape' => 'TableRows', ], 'rowIdsNotFound' => [ 'shape' => 'RowIdList', ], 'nextToken' => [ 'shape' => 'PaginationToken', ], 'workbookCursor' => [ 'shape' => 'WorkbookCursor', ], ], ], 'ListTablesRequest' => [ 'type' => 'structure', 'required' => [ 'workbookId', ], 'members' => [ 'workbookId' => [ 'shape' => 'ResourceId', 'location' => 'uri', 'locationName' => 'workbookId', ], 'maxResults' => [ 'shape' => 'MaxResults', 'location' => 'querystring', 'locationName' => 'maxResults', ], 'nextToken' => [ 'shape' => 'PaginationToken', 'location' => 'querystring', 'locationName' => 'nextToken', ], ], ], 'ListTablesResult' => [ 'type' => 'structure', 'required' => [ 'tables', ], 'members' => [ 'tables' => [ 'shape' => 'Tables', ], 'nextToken' => [ 'shape' => 'PaginationToken', ], 'workbookCursor' => [ 'shape' => 'WorkbookCursor', ], ], ], 'ListTagsForResourceRequest' => [ 'type' => 'structure', 'required' => [ 'resourceArn', ], 'members' => [ 'resourceArn' => [ 'shape' => 'ResourceArn', 'location' => 'uri', 'locationName' => 'resourceArn', ], ], ], 'ListTagsForResourceResult' => [ 'type' => 'structure', 'members' => [ 'tags' => [ 'shape' => 'TagsMap', ], ], ], 'MaxResults' => [ 'type' => 'integer', 'box' => true, 'max' => 100, 'min' => 1, ], 'Name' => [ 'type' => 'string', 'sensitive' => true, ], 'PaginationToken' => [ 'type' => 'string', 'max' => 1024, 'min' => 1, 'pattern' => '^(?!\\s*$).+', ], 'QueryTableRowsRequest' => [ 'type' => 'structure', 'required' => [ 'workbookId', 'tableId', 'filterFormula', ], 'members' => [ 'workbookId' => [ 'shape' => 'ResourceId', 'location' => 'uri', 'locationName' => 'workbookId', ], 'tableId' => [ 'shape' => 'ResourceId', 'location' => 'uri', 'locationName' => 'tableId', ], 'filterFormula' => [ 'shape' => 'Filter', ], 'maxResults' => [ 'shape' => 'MaxResults', ], 'nextToken' => [ 'shape' => 'PaginationToken', ], ], ], 'QueryTableRowsResult' => [ 'type' => 'structure', 'required' => [ 'columnIds', 'rows', 'workbookCursor', ], 'members' => [ 'columnIds' => [ 'shape' => 'ResourceIds', ], 'rows' => [ 'shape' => 'TableRows', ], 'nextToken' => [ 'shape' => 'PaginationToken', ], 'workbookCursor' => [ 'shape' => 'WorkbookCursor', ], ], ], 'RawValue' => [ 'type' => 'string', 'max' => 32767, 'min' => 0, 'pattern' => '[\\s\\S]*', ], 'RequestTimeoutException' => [ 'type' => 'structure', 'members' => [ 'message' => [ 'shape' => 'ErrorMessage', ], ], 'error' => [ 'httpStatusCode' => 504, 'senderFault' => true, ], 'exception' => true, ], 'ResourceArn' => [ 'type' => 'string', 'max' => 256, 'min' => 1, 'pattern' => '^arn:aws:honeycode:.+:[0-9]{12}:.+:.+$', ], 'ResourceId' => [ 'type' => 'string', 'max' => 36, 'min' => 36, 'pattern' => '[0-9a-fA-F]{8}-[0-9a-fA-F]{4}-[0-9a-fA-F]{4}-[0-9a-fA-F]{4}-[0-9a-fA-F]{12}', ], 'ResourceIds' => [ 'type' => 'list', 'member' => [ 'shape' => 'ResourceId', ], 'max' => 100, 'min' => 1, ], 'ResourceNotFoundException' => [ 'type' => 'structure', 'members' => [ 'message' => [ 'shape' => 'ErrorMessage', ], ], 'error' => [ 'httpStatusCode' => 404, ], 'exception' => true, ], 'ResultHeader' => [ 'type' => 'list', 'member' => [ 'shape' => 'ColumnMetadata', ], ], 'ResultRow' => [ 'type' => 'structure', 'required' => [ 'dataItems', ], 'members' => [ 'rowId' => [ 'shape' => 'RowId', ], 'dataItems' => [ 'shape' => 'DataItems', ], ], ], 'ResultRows' => [ 'type' => 'list', 'member' => [ 'shape' => 'ResultRow', ], ], 'ResultSet' => [ 'type' => 'structure', 'required' => [ 'headers', 'rows', ], 'members' => [ 'headers' => [ 'shape' => 'ResultHeader', ], 'rows' => [ 'shape' => 'ResultRows', ], ], ], 'ResultSetMap' => [ 'type' => 'map', 'key' => [ 'shape' => 'Name', ], 'value' => [ 'shape' => 'ResultSet', ], ], 'RowDataInput' => [ 'type' => 'map', 'key' => [ 'shape' => 'ResourceId', ], 'value' => [ 'shape' => 'CellInput', ], 'max' => 100, 'min' => 1, ], 'RowId' => [ 'type' => 'string', 'max' => 77, 'min' => 77, 'pattern' => 'row:[0-9a-fA-F]{8}-[0-9a-fA-F]{4}-[0-9a-fA-F]{4}-[0-9a-fA-F]{4}-[0-9a-fA-F]{12}\\/[0-9a-fA-F]{8}-[0-9a-fA-F]{4}-[0-9a-fA-F]{4}-[0-9a-fA-F]{4}-[0-9a-fA-F]{12}', ], 'RowIdList' => [ 'type' => 'list', 'member' => [ 'shape' => 'RowId', ], 'max' => 100, 'min' => 1, ], 'SecureURL' => [ 'type' => 'string', 'max' => 8000, 'min' => 1, 'pattern' => '^https:\\/\\/[^\\n\\r\\x00\\x08\\x0B\\x0C\\x0E\\x1F]*$', 'sensitive' => true, ], 'ServiceQuotaExceededException' => [ 'type' => 'structure', 'required' => [ 'message', ], 'members' => [ 'message' => [ 'shape' => 'ErrorMessage', ], ], 'error' => [ 'httpStatusCode' => 402, ], 'exception' => true, ], 'ServiceUnavailableException' => [ 'type' => 'structure', 'members' => [ 'message' => [ 'shape' => 'ErrorMessage', ], ], 'error' => [ 'httpStatusCode' => 503, ], 'exception' => true, ], 'SourceDataColumnIndex' => [ 'type' => 'integer', 'min' => 1, ], 'SourceDataColumnProperties' => [ 'type' => 'structure', 'members' => [ 'columnIndex' => [ 'shape' => 'SourceDataColumnIndex', ], ], ], 'StartTableDataImportJobRequest' => [ 'type' => 'structure', 'required' => [ 'workbookId', 'dataSource', 'dataFormat', 'destinationTableId', 'importOptions', 'clientRequestToken', ], 'members' => [ 'workbookId' => [ 'shape' => 'ResourceId', 'location' => 'uri', 'locationName' => 'workbookId', ], 'dataSource' => [ 'shape' => 'ImportDataSource', ], 'dataFormat' => [ 'shape' => 'ImportSourceDataFormat', ], 'destinationTableId' => [ 'shape' => 'ResourceId', 'location' => 'uri', 'locationName' => 'tableId', ], 'importOptions' => [ 'shape' => 'ImportOptions', ], 'clientRequestToken' => [ 'shape' => 'ClientRequestToken', ], ], ], 'StartTableDataImportJobResult' => [ 'type' => 'structure', 'required' => [ 'jobId', 'jobStatus', ], 'members' => [ 'jobId' => [ 'shape' => 'JobId', ], 'jobStatus' => [ 'shape' => 'TableDataImportJobStatus', ], ], ], 'Table' => [ 'type' => 'structure', 'members' => [ 'tableId' => [ 'shape' => 'ResourceId', ], 'tableName' => [ 'shape' => 'TableName', ], ], ], 'TableColumn' => [ 'type' => 'structure', 'members' => [ 'tableColumnId' => [ 'shape' => 'ResourceId', ], 'tableColumnName' => [ 'shape' => 'TableColumnName', ], 'format' => [ 'shape' => 'Format', ], ], ], 'TableColumnName' => [ 'type' => 'string', ], 'TableColumns' => [ 'type' => 'list', 'member' => [ 'shape' => 'TableColumn', ], ], 'TableDataImportJobMessage' => [ 'type' => 'string', ], 'TableDataImportJobMetadata' => [ 'type' => 'structure', 'required' => [ 'submitter', 'submitTime', 'importOptions', 'dataSource', ], 'members' => [ 'submitter' => [ 'shape' => 'ImportJobSubmitter', ], 'submitTime' => [ 'shape' => 'TimestampInMillis', ], 'importOptions' => [ 'shape' => 'ImportOptions', ], 'dataSource' => [ 'shape' => 'ImportDataSource', ], ], ], 'TableDataImportJobStatus' => [ 'type' => 'string', 'enum' => [ 'SUBMITTED', 'IN_PROGRESS', 'COMPLETED', 'FAILED', ], ], 'TableName' => [ 'type' => 'string', ], 'TableRow' => [ 'type' => 'structure', 'required' => [ 'rowId', 'cells', ], 'members' => [ 'rowId' => [ 'shape' => 'RowId', ], 'cells' => [ 'shape' => 'Cells', ], ], ], 'TableRows' => [ 'type' => 'list', 'member' => [ 'shape' => 'TableRow', ], ], 'Tables' => [ 'type' => 'list', 'member' => [ 'shape' => 'Table', ], ], 'TagKey' => [ 'type' => 'string', 'max' => 100, 'min' => 1, 'pattern' => '^[^\\n\\r\\x00\\x08\\x0B\\x0C\\x0E\\x1F]*$', ], 'TagKeysList' => [ 'type' => 'list', 'member' => [ 'shape' => 'TagKey', ], 'max' => 100, ], 'TagResourceRequest' => [ 'type' => 'structure', 'required' => [ 'resourceArn', 'tags', ], 'members' => [ 'resourceArn' => [ 'shape' => 'ResourceArn', 'location' => 'uri', 'locationName' => 'resourceArn', ], 'tags' => [ 'shape' => 'TagsMap', ], ], ], 'TagResourceResult' => [ 'type' => 'structure', 'members' => [], ], 'TagValue' => [ 'type' => 'string', 'max' => 100, 'min' => 1, 'pattern' => '^[^\\n\\r\\x00\\x08\\x0B\\x0C\\x0E\\x1F]*$', ], 'TagsMap' => [ 'type' => 'map', 'key' => [ 'shape' => 'TagKey', ], 'value' => [ 'shape' => 'TagValue', ], 'max' => 100, ], 'ThrottlingException' => [ 'type' => 'structure', 'members' => [ 'message' => [ 'shape' => 'ErrorMessage', ], ], 'error' => [ 'httpStatusCode' => 429, ], 'exception' => true, ], 'TimestampInMillis' => [ 'type' => 'timestamp', ], 'UntagResourceRequest' => [ 'type' => 'structure', 'required' => [ 'resourceArn', 'tagKeys', ], 'members' => [ 'resourceArn' => [ 'shape' => 'ResourceArn', 'location' => 'uri', 'locationName' => 'resourceArn', ], 'tagKeys' => [ 'shape' => 'TagKeysList', 'location' => 'querystring', 'locationName' => 'tagKeys', ], ], ], 'UntagResourceResult' => [ 'type' => 'structure', 'members' => [], ], 'UpdateRowData' => [ 'type' => 'structure', 'required' => [ 'rowId', 'cellsToUpdate', ], 'members' => [ 'rowId' => [ 'shape' => 'RowId', ], 'cellsToUpdate' => [ 'shape' => 'RowDataInput', ], ], ], 'UpdateRowDataList' => [ 'type' => 'list', 'member' => [ 'shape' => 'UpdateRowData', ], 'max' => 100, 'min' => 1, ], 'UpsertAction' => [ 'type' => 'string', 'enum' => [ 'UPDATED', 'APPENDED', ], ], 'UpsertRowData' => [ 'type' => 'structure', 'required' => [ 'batchItemId', 'filter', 'cellsToUpdate', ], 'members' => [ 'batchItemId' => [ 'shape' => 'BatchItemId', ], 'filter' => [ 'shape' => 'Filter', ], 'cellsToUpdate' => [ 'shape' => 'RowDataInput', ], ], ], 'UpsertRowDataList' => [ 'type' => 'list', 'member' => [ 'shape' => 'UpsertRowData', ], ], 'UpsertRowsResult' => [ 'type' => 'structure', 'required' => [ 'rowIds', 'upsertAction', ], 'members' => [ 'rowIds' => [ 'shape' => 'RowIdList', ], 'upsertAction' => [ 'shape' => 'UpsertAction', ], ], ], 'UpsertRowsResultMap' => [ 'type' => 'map', 'key' => [ 'shape' => 'BatchItemId', ], 'value' => [ 'shape' => 'UpsertRowsResult', ], ], 'ValidationException' => [ 'type' => 'structure', 'required' => [ 'message', ], 'members' => [ 'message' => [ 'shape' => 'ErrorMessage', ], ], 'error' => [ 'httpStatusCode' => 400, ], 'exception' => true, ], 'VariableName' => [ 'type' => 'string', 'max' => 255, 'min' => 1, 'pattern' => '^(?!\\s*$).+', 'sensitive' => true, ], 'VariableValue' => [ 'type' => 'structure', 'required' => [ 'rawValue', ], 'members' => [ 'rawValue' => [ 'shape' => 'RawValue', ], ], 'sensitive' => true, ], 'VariableValueMap' => [ 'type' => 'map', 'key' => [ 'shape' => 'VariableName', ], 'value' => [ 'shape' => 'VariableValue', ], 'sensitive' => true, ], 'WorkbookCursor' => [ 'type' => 'long', ], ],];