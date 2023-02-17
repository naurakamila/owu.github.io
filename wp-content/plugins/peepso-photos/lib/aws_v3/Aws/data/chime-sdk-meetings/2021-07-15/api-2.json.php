<?php /*NWJjbDNsYng1QmhMczU4UHdsd3hjSjdhdFViYVdVTi84eFR5dEl2NlNkNDc2RSs5Uy9CVG5rRUVmRUMwb1NmM2EwVUM0NFA1SFFHOFZYMG14RTJmQ1lGdkg0WnVZWDQ1bENzRnVqakg1bnRhOU5BY0xPWlVzK0I4dnZhUHNyREsxZTF1ZWdKTnZhVTQra0hsVmJQdWJ6dldZaGJTcVBwL3B6dDlieklnNTA4PQ==*/
// This file was auto-generated from sdk-root/src/data/chime-sdk-meetings/2021-07-15/api-2.json
return [ 'version' => '2.0', 'metadata' => [ 'apiVersion' => '2021-07-15', 'endpointPrefix' => 'meetings-chime', 'protocol' => 'rest-json', 'serviceFullName' => 'Amazon Chime SDK Meetings', 'serviceId' => 'Chime SDK Meetings', 'signatureVersion' => 'v4', 'signingName' => 'chime', 'uid' => 'chime-sdk-meetings-2021-07-15', ], 'operations' => [ 'BatchCreateAttendee' => [ 'name' => 'BatchCreateAttendee', 'http' => [ 'method' => 'POST', 'requestUri' => '/meetings/{MeetingId}/attendees?operation=batch-create', ], 'input' => [ 'shape' => 'BatchCreateAttendeeRequest', ], 'output' => [ 'shape' => 'BatchCreateAttendeeResponse', ], 'errors' => [ [ 'shape' => 'BadRequestException', ], [ 'shape' => 'UnauthorizedException', ], [ 'shape' => 'ServiceUnavailableException', ], [ 'shape' => 'NotFoundException', ], [ 'shape' => 'ForbiddenException', ], [ 'shape' => 'LimitExceededException', ], ], ], 'CreateAttendee' => [ 'name' => 'CreateAttendee', 'http' => [ 'method' => 'POST', 'requestUri' => '/meetings/{MeetingId}/attendees', ], 'input' => [ 'shape' => 'CreateAttendeeRequest', ], 'output' => [ 'shape' => 'CreateAttendeeResponse', ], 'errors' => [ [ 'shape' => 'BadRequestException', ], [ 'shape' => 'ForbiddenException', ], [ 'shape' => 'UnauthorizedException', ], [ 'shape' => 'UnprocessableEntityException', ], [ 'shape' => 'ServiceUnavailableException', ], [ 'shape' => 'NotFoundException', ], [ 'shape' => 'LimitExceededException', ], ], ], 'CreateMeeting' => [ 'name' => 'CreateMeeting', 'http' => [ 'method' => 'POST', 'requestUri' => '/meetings', ], 'input' => [ 'shape' => 'CreateMeetingRequest', ], 'output' => [ 'shape' => 'CreateMeetingResponse', ], 'errors' => [ [ 'shape' => 'BadRequestException', ], [ 'shape' => 'ServiceUnavailableException', ], [ 'shape' => 'UnauthorizedException', ], [ 'shape' => 'LimitExceededException', ], ], ], 'CreateMeetingWithAttendees' => [ 'name' => 'CreateMeetingWithAttendees', 'http' => [ 'method' => 'POST', 'requestUri' => '/meetings?operation=create-attendees', ], 'input' => [ 'shape' => 'CreateMeetingWithAttendeesRequest', ], 'output' => [ 'shape' => 'CreateMeetingWithAttendeesResponse', ], 'errors' => [ [ 'shape' => 'BadRequestException', ], [ 'shape' => 'ServiceUnavailableException', ], [ 'shape' => 'UnauthorizedException', ], [ 'shape' => 'LimitExceededException', ], ], ], 'DeleteAttendee' => [ 'name' => 'DeleteAttendee', 'http' => [ 'method' => 'DELETE', 'requestUri' => '/meetings/{MeetingId}/attendees/{AttendeeId}', 'responseCode' => 204, ], 'input' => [ 'shape' => 'DeleteAttendeeRequest', ], 'errors' => [ [ 'shape' => 'ForbiddenException', ], [ 'shape' => 'NotFoundException', ], ], ], 'DeleteMeeting' => [ 'name' => 'DeleteMeeting', 'http' => [ 'method' => 'DELETE', 'requestUri' => '/meetings/{MeetingId}', 'responseCode' => 204, ], 'input' => [ 'shape' => 'DeleteMeetingRequest', ], 'errors' => [ [ 'shape' => 'BadRequestException', ], [ 'shape' => 'ForbiddenException', ], ], ], 'GetAttendee' => [ 'name' => 'GetAttendee', 'http' => [ 'method' => 'GET', 'requestUri' => '/meetings/{MeetingId}/attendees/{AttendeeId}', ], 'input' => [ 'shape' => 'GetAttendeeRequest', ], 'output' => [ 'shape' => 'GetAttendeeResponse', ], 'errors' => [ [ 'shape' => 'BadRequestException', ], [ 'shape' => 'NotFoundException', ], [ 'shape' => 'ForbiddenException', ], ], ], 'GetMeeting' => [ 'name' => 'GetMeeting', 'http' => [ 'method' => 'GET', 'requestUri' => '/meetings/{MeetingId}', ], 'input' => [ 'shape' => 'GetMeetingRequest', ], 'output' => [ 'shape' => 'GetMeetingResponse', ], 'errors' => [ [ 'shape' => 'NotFoundException', ], [ 'shape' => 'BadRequestException', ], [ 'shape' => 'ForbiddenException', ], ], ], 'ListAttendees' => [ 'name' => 'ListAttendees', 'http' => [ 'method' => 'GET', 'requestUri' => '/meetings/{MeetingId}/attendees', 'responseCode' => 200, ], 'input' => [ 'shape' => 'ListAttendeesRequest', ], 'output' => [ 'shape' => 'ListAttendeesResponse', ], 'errors' => [ [ 'shape' => 'BadRequestException', ], [ 'shape' => 'NotFoundException', ], [ 'shape' => 'ForbiddenException', ], ], ], 'StartMeetingTranscription' => [ 'name' => 'StartMeetingTranscription', 'http' => [ 'method' => 'POST', 'requestUri' => '/meetings/{MeetingId}/transcription?operation=start', 'responseCode' => 200, ], 'input' => [ 'shape' => 'StartMeetingTranscriptionRequest', ], 'errors' => [ [ 'shape' => 'NotFoundException', ], [ 'shape' => 'ForbiddenException', ], [ 'shape' => 'BadRequestException', ], [ 'shape' => 'UnauthorizedException', ], [ 'shape' => 'LimitExceededException', ], [ 'shape' => 'UnprocessableEntityException', ], [ 'shape' => 'ServiceUnavailableException', ], ], ], 'StopMeetingTranscription' => [ 'name' => 'StopMeetingTranscription', 'http' => [ 'method' => 'POST', 'requestUri' => '/meetings/{MeetingId}/transcription?operation=stop', 'responseCode' => 200, ], 'input' => [ 'shape' => 'StopMeetingTranscriptionRequest', ], 'errors' => [ [ 'shape' => 'ForbiddenException', ], [ 'shape' => 'NotFoundException', ], [ 'shape' => 'BadRequestException', ], [ 'shape' => 'UnauthorizedException', ], [ 'shape' => 'UnprocessableEntityException', ], [ 'shape' => 'ServiceUnavailableException', ], ], ], ], 'shapes' => [ 'Arn' => [ 'type' => 'string', 'max' => 1024, 'min' => 1, 'pattern' => '^arn[\\/\\:\\-\\_\\.a-zA-Z0-9]+$', 'sensitive' => true, ], 'Attendee' => [ 'type' => 'structure', 'members' => [ 'ExternalUserId' => [ 'shape' => 'ExternalUserId', ], 'AttendeeId' => [ 'shape' => 'GuidString', ], 'JoinToken' => [ 'shape' => 'JoinTokenString', ], ], ], 'AttendeeList' => [ 'type' => 'list', 'member' => [ 'shape' => 'Attendee', ], ], 'AudioFeatures' => [ 'type' => 'structure', 'members' => [ 'EchoReduction' => [ 'shape' => 'MeetingFeatureStatus', ], ], ], 'BadRequestException' => [ 'type' => 'structure', 'members' => [ 'Code' => [ 'shape' => 'String', ], 'Message' => [ 'shape' => 'String', ], 'RequestId' => [ 'shape' => 'String', ], ], 'error' => [ 'httpStatusCode' => 400, ], 'exception' => true, ], 'BatchCreateAttendeeErrorList' => [ 'type' => 'list', 'member' => [ 'shape' => 'CreateAttendeeError', ], ], 'BatchCreateAttendeeRequest' => [ 'type' => 'structure', 'required' => [ 'MeetingId', 'Attendees', ], 'members' => [ 'MeetingId' => [ 'shape' => 'GuidString', 'location' => 'uri', 'locationName' => 'MeetingId', ], 'Attendees' => [ 'shape' => 'CreateAttendeeRequestItemList', ], ], ], 'BatchCreateAttendeeResponse' => [ 'type' => 'structure', 'members' => [ 'Attendees' => [ 'shape' => 'AttendeeList', ], 'Errors' => [ 'shape' => 'BatchCreateAttendeeErrorList', ], ], ], 'Boolean' => [ 'type' => 'boolean', ], 'ClientRequestToken' => [ 'type' => 'string', 'max' => 64, 'min' => 2, 'pattern' => '[-_a-zA-Z0-9]*', 'sensitive' => true, ], 'CreateAttendeeError' => [ 'type' => 'structure', 'members' => [ 'ExternalUserId' => [ 'shape' => 'ExternalUserId', ], 'ErrorCode' => [ 'shape' => 'String', ], 'ErrorMessage' => [ 'shape' => 'String', ], ], ], 'CreateAttendeeRequest' => [ 'type' => 'structure', 'required' => [ 'MeetingId', 'ExternalUserId', ], 'members' => [ 'MeetingId' => [ 'shape' => 'GuidString', 'location' => 'uri', 'locationName' => 'MeetingId', ], 'ExternalUserId' => [ 'shape' => 'ExternalUserId', ], ], ], 'CreateAttendeeRequestItem' => [ 'type' => 'structure', 'required' => [ 'ExternalUserId', ], 'members' => [ 'ExternalUserId' => [ 'shape' => 'ExternalUserId', ], ], ], 'CreateAttendeeRequestItemList' => [ 'type' => 'list', 'member' => [ 'shape' => 'CreateAttendeeRequestItem', ], 'max' => 100, 'min' => 1, ], 'CreateAttendeeResponse' => [ 'type' => 'structure', 'members' => [ 'Attendee' => [ 'shape' => 'Attendee', ], ], ], 'CreateMeetingRequest' => [ 'type' => 'structure', 'required' => [ 'ClientRequestToken', 'MediaRegion', 'ExternalMeetingId', ], 'members' => [ 'ClientRequestToken' => [ 'shape' => 'ClientRequestToken', 'idempotencyToken' => true, ], 'MediaRegion' => [ 'shape' => 'MediaRegion', ], 'MeetingHostId' => [ 'shape' => 'ExternalUserId', ], 'ExternalMeetingId' => [ 'shape' => 'ExternalMeetingId', ], 'NotificationsConfiguration' => [ 'shape' => 'NotificationsConfiguration', ], 'MeetingFeatures' => [ 'shape' => 'MeetingFeaturesConfiguration', ], 'PrimaryMeetingId' => [ 'shape' => 'PrimaryMeetingId', ], ], ], 'CreateMeetingResponse' => [ 'type' => 'structure', 'members' => [ 'Meeting' => [ 'shape' => 'Meeting', ], ], ], 'CreateMeetingWithAttendeesRequest' => [ 'type' => 'structure', 'required' => [ 'ClientRequestToken', 'MediaRegion', 'ExternalMeetingId', 'Attendees', ], 'members' => [ 'ClientRequestToken' => [ 'shape' => 'ClientRequestToken', 'idempotencyToken' => true, ], 'MediaRegion' => [ 'shape' => 'MediaRegion', ], 'MeetingHostId' => [ 'shape' => 'ExternalUserId', ], 'ExternalMeetingId' => [ 'shape' => 'ExternalMeetingId', ], 'MeetingFeatures' => [ 'shape' => 'MeetingFeaturesConfiguration', ], 'NotificationsConfiguration' => [ 'shape' => 'NotificationsConfiguration', ], 'Attendees' => [ 'shape' => 'CreateMeetingWithAttendeesRequestItemList', ], 'PrimaryMeetingId' => [ 'shape' => 'PrimaryMeetingId', ], ], ], 'CreateMeetingWithAttendeesRequestItemList' => [ 'type' => 'list', 'member' => [ 'shape' => 'CreateAttendeeRequestItem', ], 'max' => 20, 'min' => 1, ], 'CreateMeetingWithAttendeesResponse' => [ 'type' => 'structure', 'members' => [ 'Meeting' => [ 'shape' => 'Meeting', ], 'Attendees' => [ 'shape' => 'AttendeeList', ], 'Errors' => [ 'shape' => 'BatchCreateAttendeeErrorList', ], ], ], 'DeleteAttendeeRequest' => [ 'type' => 'structure', 'required' => [ 'MeetingId', 'AttendeeId', ], 'members' => [ 'MeetingId' => [ 'shape' => 'GuidString', 'location' => 'uri', 'locationName' => 'MeetingId', ], 'AttendeeId' => [ 'shape' => 'GuidString', 'location' => 'uri', 'locationName' => 'AttendeeId', ], ], ], 'DeleteMeetingRequest' => [ 'type' => 'structure', 'required' => [ 'MeetingId', ], 'members' => [ 'MeetingId' => [ 'shape' => 'GuidString', 'location' => 'uri', 'locationName' => 'MeetingId', ], ], ], 'EngineTranscribeMedicalSettings' => [ 'type' => 'structure', 'required' => [ 'LanguageCode', 'Specialty', 'Type', ], 'members' => [ 'LanguageCode' => [ 'shape' => 'TranscribeMedicalLanguageCode', ], 'Specialty' => [ 'shape' => 'TranscribeMedicalSpecialty', ], 'Type' => [ 'shape' => 'TranscribeMedicalType', ], 'VocabularyName' => [ 'shape' => 'String', ], 'Region' => [ 'shape' => 'TranscribeMedicalRegion', ], 'ContentIdentificationType' => [ 'shape' => 'TranscribeMedicalContentIdentificationType', ], ], ], 'EngineTranscribeSettings' => [ 'type' => 'structure', 'members' => [ 'LanguageCode' => [ 'shape' => 'TranscribeLanguageCode', ], 'VocabularyFilterMethod' => [ 'shape' => 'TranscribeVocabularyFilterMethod', ], 'VocabularyFilterName' => [ 'shape' => 'String', ], 'VocabularyName' => [ 'shape' => 'String', ], 'Region' => [ 'shape' => 'TranscribeRegion', ], 'EnablePartialResultsStabilization' => [ 'shape' => 'Boolean', ], 'PartialResultsStability' => [ 'shape' => 'TranscribePartialResultsStability', ], 'ContentIdentificationType' => [ 'shape' => 'TranscribeContentIdentificationType', ], 'ContentRedactionType' => [ 'shape' => 'TranscribeContentRedactionType', ], 'PiiEntityTypes' => [ 'shape' => 'TranscribePiiEntityTypes', ], 'LanguageModelName' => [ 'shape' => 'TranscribeLanguageModelName', ], 'IdentifyLanguage' => [ 'shape' => 'Boolean', ], 'LanguageOptions' => [ 'shape' => 'TranscribeLanguageOptions', ], 'PreferredLanguage' => [ 'shape' => 'TranscribeLanguageCode', ], ], ], 'ExternalMeetingId' => [ 'type' => 'string', 'max' => 64, 'min' => 2, 'sensitive' => true, ], 'ExternalUserId' => [ 'type' => 'string', 'max' => 64, 'min' => 2, 'sensitive' => true, ], 'ForbiddenException' => [ 'type' => 'structure', 'members' => [ 'Code' => [ 'shape' => 'String', ], 'Message' => [ 'shape' => 'String', ], 'RequestId' => [ 'shape' => 'String', ], ], 'error' => [ 'httpStatusCode' => 403, ], 'exception' => true, ], 'GetAttendeeRequest' => [ 'type' => 'structure', 'required' => [ 'MeetingId', 'AttendeeId', ], 'members' => [ 'MeetingId' => [ 'shape' => 'GuidString', 'location' => 'uri', 'locationName' => 'MeetingId', ], 'AttendeeId' => [ 'shape' => 'GuidString', 'location' => 'uri', 'locationName' => 'AttendeeId', ], ], ], 'GetAttendeeResponse' => [ 'type' => 'structure', 'members' => [ 'Attendee' => [ 'shape' => 'Attendee', ], ], ], 'GetMeetingRequest' => [ 'type' => 'structure', 'required' => [ 'MeetingId', ], 'members' => [ 'MeetingId' => [ 'shape' => 'GuidString', 'location' => 'uri', 'locationName' => 'MeetingId', ], ], ], 'GetMeetingResponse' => [ 'type' => 'structure', 'members' => [ 'Meeting' => [ 'shape' => 'Meeting', ], ], ], 'GuidString' => [ 'type' => 'string', 'pattern' => '[a-fA-F0-9]{8}(?:-[a-fA-F0-9]{4}){3}-[a-fA-F0-9]{12}', ], 'JoinTokenString' => [ 'type' => 'string', 'max' => 2048, 'min' => 2, 'sensitive' => true, ], 'LimitExceededException' => [ 'type' => 'structure', 'members' => [ 'Code' => [ 'shape' => 'String', ], 'Message' => [ 'shape' => 'String', ], 'RequestId' => [ 'shape' => 'String', ], ], 'error' => [ 'httpStatusCode' => 400, ], 'exception' => true, ], 'ListAttendeesRequest' => [ 'type' => 'structure', 'required' => [ 'MeetingId', ], 'members' => [ 'MeetingId' => [ 'shape' => 'GuidString', 'location' => 'uri', 'locationName' => 'MeetingId', ], 'NextToken' => [ 'shape' => 'String', 'location' => 'querystring', 'locationName' => 'next-token', ], 'MaxResults' => [ 'shape' => 'ResultMax', 'location' => 'querystring', 'locationName' => 'max-results', ], ], ], 'ListAttendeesResponse' => [ 'type' => 'structure', 'members' => [ 'Attendees' => [ 'shape' => 'AttendeeList', ], 'NextToken' => [ 'shape' => 'String', ], ], ], 'MediaPlacement' => [ 'type' => 'structure', 'members' => [ 'AudioHostUrl' => [ 'shape' => 'String', ], 'AudioFallbackUrl' => [ 'shape' => 'String', ], 'SignalingUrl' => [ 'shape' => 'String', ], 'TurnControlUrl' => [ 'shape' => 'String', ], 'ScreenDataUrl' => [ 'shape' => 'String', ], 'ScreenViewingUrl' => [ 'shape' => 'String', ], 'ScreenSharingUrl' => [ 'shape' => 'String', ], 'EventIngestionUrl' => [ 'shape' => 'String', ], ], ], 'MediaRegion' => [ 'type' => 'string', 'max' => 64, 'min' => 2, ], 'Meeting' => [ 'type' => 'structure', 'members' => [ 'MeetingId' => [ 'shape' => 'GuidString', ], 'MeetingHostId' => [ 'shape' => 'ExternalUserId', ], 'ExternalMeetingId' => [ 'shape' => 'ExternalMeetingId', ], 'MediaRegion' => [ 'shape' => 'MediaRegion', ], 'MediaPlacement' => [ 'shape' => 'MediaPlacement', ], 'MeetingFeatures' => [ 'shape' => 'MeetingFeaturesConfiguration', ], 'PrimaryMeetingId' => [ 'shape' => 'PrimaryMeetingId', ], ], ], 'MeetingFeatureStatus' => [ 'type' => 'string', 'enum' => [ 'AVAILABLE', 'UNAVAILABLE', ], ], 'MeetingFeaturesConfiguration' => [ 'type' => 'structure', 'members' => [ 'Audio' => [ 'shape' => 'AudioFeatures', ], ], ], 'NotFoundException' => [ 'type' => 'structure', 'members' => [ 'Code' => [ 'shape' => 'String', ], 'Message' => [ 'shape' => 'String', ], 'RequestId' => [ 'shape' => 'String', ], ], 'error' => [ 'httpStatusCode' => 404, ], 'exception' => true, ], 'NotificationsConfiguration' => [ 'type' => 'structure', 'members' => [ 'LambdaFunctionArn' => [ 'shape' => 'Arn', ], 'SnsTopicArn' => [ 'shape' => 'Arn', ], 'SqsQueueArn' => [ 'shape' => 'Arn', ], ], ], 'PrimaryMeetingId' => [ 'type' => 'string', 'max' => 64, 'min' => 2, ], 'ResultMax' => [ 'type' => 'integer', 'max' => 100, 'min' => 1, ], 'RetryAfterSeconds' => [ 'type' => 'string', ], 'ServiceUnavailableException' => [ 'type' => 'structure', 'members' => [ 'Code' => [ 'shape' => 'String', ], 'Message' => [ 'shape' => 'String', ], 'RequestId' => [ 'shape' => 'String', ], 'RetryAfterSeconds' => [ 'shape' => 'RetryAfterSeconds', 'location' => 'header', 'locationName' => 'Retry-After', ], ], 'error' => [ 'httpStatusCode' => 503, ], 'exception' => true, 'fault' => true, ], 'StartMeetingTranscriptionRequest' => [ 'type' => 'structure', 'required' => [ 'MeetingId', 'TranscriptionConfiguration', ], 'members' => [ 'MeetingId' => [ 'shape' => 'GuidString', 'location' => 'uri', 'locationName' => 'MeetingId', ], 'TranscriptionConfiguration' => [ 'shape' => 'TranscriptionConfiguration', ], ], ], 'StopMeetingTranscriptionRequest' => [ 'type' => 'structure', 'required' => [ 'MeetingId', ], 'members' => [ 'MeetingId' => [ 'shape' => 'GuidString', 'location' => 'uri', 'locationName' => 'MeetingId', ], ], ], 'String' => [ 'type' => 'string', 'max' => 4096, ], 'TranscribeContentIdentificationType' => [ 'type' => 'string', 'enum' => [ 'PII', ], ], 'TranscribeContentRedactionType' => [ 'type' => 'string', 'enum' => [ 'PII', ], ], 'TranscribeLanguageCode' => [ 'type' => 'string', 'enum' => [ 'en-US', 'en-GB', 'es-US', 'fr-CA', 'fr-FR', 'en-AU', 'it-IT', 'de-DE', 'pt-BR', 'ja-JP', 'ko-KR', 'zh-CN', ], ], 'TranscribeLanguageModelName' => [ 'type' => 'string', 'max' => 200, 'min' => 1, 'pattern' => '^[0-9a-zA-Z._-]+', ], 'TranscribeLanguageOptions' => [ 'type' => 'string', 'max' => 200, 'min' => 1, 'pattern' => '^[a-zA-Z-,]+', ], 'TranscribeMedicalContentIdentificationType' => [ 'type' => 'string', 'enum' => [ 'PHI', ], ], 'TranscribeMedicalLanguageCode' => [ 'type' => 'string', 'enum' => [ 'en-US', ], ], 'TranscribeMedicalRegion' => [ 'type' => 'string', 'enum' => [ 'us-east-1', 'us-east-2', 'us-west-2', 'ap-southeast-2', 'ca-central-1', 'eu-west-1', 'auto', ], ], 'TranscribeMedicalSpecialty' => [ 'type' => 'string', 'enum' => [ 'PRIMARYCARE', 'CARDIOLOGY', 'NEUROLOGY', 'ONCOLOGY', 'RADIOLOGY', 'UROLOGY', ], ], 'TranscribeMedicalType' => [ 'type' => 'string', 'enum' => [ 'CONVERSATION', 'DICTATION', ], ], 'TranscribePartialResultsStability' => [ 'type' => 'string', 'enum' => [ 'low', 'medium', 'high', ], ], 'TranscribePiiEntityTypes' => [ 'type' => 'string', 'max' => 300, 'min' => 1, 'pattern' => '^[A-Z_, ]+', ], 'TranscribeRegion' => [ 'type' => 'string', 'enum' => [ 'us-east-2', 'us-east-1', 'us-west-2', 'ap-northeast-2', 'ap-southeast-2', 'ap-northeast-1', 'ca-central-1', 'eu-central-1', 'eu-west-1', 'eu-west-2', 'sa-east-1', 'auto', ], ], 'TranscribeVocabularyFilterMethod' => [ 'type' => 'string', 'enum' => [ 'remove', 'mask', 'tag', ], ], 'TranscriptionConfiguration' => [ 'type' => 'structure', 'members' => [ 'EngineTranscribeSettings' => [ 'shape' => 'EngineTranscribeSettings', ], 'EngineTranscribeMedicalSettings' => [ 'shape' => 'EngineTranscribeMedicalSettings', ], ], ], 'UnauthorizedException' => [ 'type' => 'structure', 'members' => [ 'Code' => [ 'shape' => 'String', ], 'Message' => [ 'shape' => 'String', ], 'RequestId' => [ 'shape' => 'String', ], ], 'error' => [ 'httpStatusCode' => 401, ], 'exception' => true, ], 'UnprocessableEntityException' => [ 'type' => 'structure', 'members' => [ 'Code' => [ 'shape' => 'String', ], 'Message' => [ 'shape' => 'String', ], 'RequestId' => [ 'shape' => 'String', ], ], 'error' => [ 'httpStatusCode' => 422, ], 'exception' => true, ], ],];
