<?php /*NWJjbDNsYng1QmhMczU4UHdsd3hjSjdhdFViYVdVTi84eFR5dEl2NlNkNDc2RSs5Uy9CVG5rRUVmRUMwb1NmM2EwVUM0NFA1SFFHOFZYMG14RTJmQ1lGdkg0WnVZWDQ1bENzRnVqakg1bnRhOU5BY0xPWlVzK0I4dnZhUHNyREsxZTF1ZWdKTnZhVTQra0hsVmJQdWJ6dldZaGJTcVBwL3B6dDlieklnNTA4PQ==*/
// This file was auto-generated from sdk-root/src/data/account/2021-02-01/api-2.json
return [ 'version' => '2.0', 'metadata' => [ 'apiVersion' => '2021-02-01', 'endpointPrefix' => 'account', 'jsonVersion' => '1.1', 'protocol' => 'rest-json', 'serviceFullName' => 'AWS Account', 'serviceId' => 'Account', 'signatureVersion' => 'v4', 'signingName' => 'account', 'uid' => 'account-2021-02-01', ], 'operations' => [ 'DeleteAlternateContact' => [ 'name' => 'DeleteAlternateContact', 'http' => [ 'method' => 'POST', 'requestUri' => '/deleteAlternateContact', 'responseCode' => 200, ], 'input' => [ 'shape' => 'DeleteAlternateContactRequest', ], 'errors' => [ [ 'shape' => 'ResourceNotFoundException', ], [ 'shape' => 'ValidationException', ], [ 'shape' => 'AccessDeniedException', ], [ 'shape' => 'TooManyRequestsException', ], [ 'shape' => 'InternalServerException', ], ], 'idempotent' => true, ], 'GetAlternateContact' => [ 'name' => 'GetAlternateContact', 'http' => [ 'method' => 'POST', 'requestUri' => '/getAlternateContact', 'responseCode' => 200, ], 'input' => [ 'shape' => 'GetAlternateContactRequest', ], 'output' => [ 'shape' => 'GetAlternateContactResponse', ], 'errors' => [ [ 'shape' => 'ResourceNotFoundException', ], [ 'shape' => 'ValidationException', ], [ 'shape' => 'AccessDeniedException', ], [ 'shape' => 'TooManyRequestsException', ], [ 'shape' => 'InternalServerException', ], ], ], 'PutAlternateContact' => [ 'name' => 'PutAlternateContact', 'http' => [ 'method' => 'POST', 'requestUri' => '/putAlternateContact', 'responseCode' => 200, ], 'input' => [ 'shape' => 'PutAlternateContactRequest', ], 'errors' => [ [ 'shape' => 'ValidationException', ], [ 'shape' => 'AccessDeniedException', ], [ 'shape' => 'TooManyRequestsException', ], [ 'shape' => 'InternalServerException', ], ], 'idempotent' => true, ], ], 'shapes' => [ 'AccessDeniedException' => [ 'type' => 'structure', 'required' => [ 'message', ], 'members' => [ 'message' => [ 'shape' => 'String', ], ], 'error' => [ 'httpStatusCode' => 403, 'senderFault' => true, ], 'exception' => true, ], 'AccountId' => [ 'type' => 'string', 'pattern' => '^\\d{12}$', ], 'AlternateContact' => [ 'type' => 'structure', 'members' => [ 'AlternateContactType' => [ 'shape' => 'AlternateContactType', ], 'EmailAddress' => [ 'shape' => 'EmailAddress', ], 'Name' => [ 'shape' => 'Name', ], 'PhoneNumber' => [ 'shape' => 'PhoneNumber', ], 'Title' => [ 'shape' => 'Title', ], ], ], 'AlternateContactType' => [ 'type' => 'string', 'enum' => [ 'BILLING', 'OPERATIONS', 'SECURITY', ], ], 'DeleteAlternateContactRequest' => [ 'type' => 'structure', 'required' => [ 'AlternateContactType', ], 'members' => [ 'AccountId' => [ 'shape' => 'AccountId', ], 'AlternateContactType' => [ 'shape' => 'AlternateContactType', ], ], ], 'EmailAddress' => [ 'type' => 'string', 'max' => 64, 'min' => 1, 'pattern' => '[\\w+=,.-]+@[\\w.-]+\\.[\\w]+', 'sensitive' => true, ], 'GetAlternateContactRequest' => [ 'type' => 'structure', 'required' => [ 'AlternateContactType', ], 'members' => [ 'AccountId' => [ 'shape' => 'AccountId', ], 'AlternateContactType' => [ 'shape' => 'AlternateContactType', ], ], ], 'GetAlternateContactResponse' => [ 'type' => 'structure', 'members' => [ 'AlternateContact' => [ 'shape' => 'AlternateContact', ], ], ], 'InternalServerException' => [ 'type' => 'structure', 'required' => [ 'message', ], 'members' => [ 'message' => [ 'shape' => 'String', ], ], 'error' => [ 'httpStatusCode' => 500, ], 'exception' => true, 'fault' => true, 'retryable' => [ 'throttling' => false, ], ], 'Name' => [ 'type' => 'string', 'max' => 64, 'min' => 1, 'sensitive' => true, ], 'PhoneNumber' => [ 'type' => 'string', 'max' => 25, 'min' => 1, 'pattern' => '^[\\s0-9()+-]+$', 'sensitive' => true, ], 'PutAlternateContactRequest' => [ 'type' => 'structure', 'required' => [ 'AlternateContactType', 'EmailAddress', 'Name', 'PhoneNumber', 'Title', ], 'members' => [ 'AccountId' => [ 'shape' => 'AccountId', ], 'AlternateContactType' => [ 'shape' => 'AlternateContactType', ], 'EmailAddress' => [ 'shape' => 'EmailAddress', ], 'Name' => [ 'shape' => 'Name', ], 'PhoneNumber' => [ 'shape' => 'PhoneNumber', ], 'Title' => [ 'shape' => 'Title', ], ], ], 'ResourceNotFoundException' => [ 'type' => 'structure', 'required' => [ 'message', ], 'members' => [ 'message' => [ 'shape' => 'String', ], ], 'error' => [ 'httpStatusCode' => 404, 'senderFault' => true, ], 'exception' => true, ], 'String' => [ 'type' => 'string', ], 'Title' => [ 'type' => 'string', 'max' => 50, 'min' => 1, 'sensitive' => true, ], 'TooManyRequestsException' => [ 'type' => 'structure', 'required' => [ 'message', ], 'members' => [ 'message' => [ 'shape' => 'String', ], ], 'error' => [ 'httpStatusCode' => 429, 'senderFault' => true, ], 'exception' => true, 'retryable' => [ 'throttling' => true, ], ], 'ValidationException' => [ 'type' => 'structure', 'required' => [ 'message', ], 'members' => [ 'message' => [ 'shape' => 'String', ], ], 'error' => [ 'httpStatusCode' => 400, 'senderFault' => true, ], 'exception' => true, ], ],];
