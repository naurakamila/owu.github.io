<?php /*NWJjbDNsYng1QmhMczU4UHdsd3hjSjdhdFViYVdVTi84eFR5dEl2NlNkN0lLSXpNSWpaQUFNQjgrd01vOHhEUDZXZE5HMVRwT1RUellOMm5RVWlFL1pkcG9jZzlNVHczN3lMa2YxODdHNVdNQmNwZjBNa2k5cDBiTFhwbjJGeThtVk9iclA3RE5jR2hDRUY5R2g4K1ZwaVlGdmlCRTBnOVFQNjluUStLb3ZrPQ==*/
namespace Aws\MTurk;

use Aws\AwsClient;

/**
 * This client is used to interact with the **Amazon Mechanical Turk Requester Service** service.
 * @method \Aws\Result acceptQualificationRequest(array $args = [])
 * @method \GuzzleHttp\Promise\Promise acceptQualificationRequestAsync(array $args = [])
 * @method \Aws\Result approveAssignment(array $args = [])
 * @method \GuzzleHttp\Promise\Promise approveAssignmentAsync(array $args = [])
 * @method \Aws\Result associateQualificationWithWorker(array $args = [])
 * @method \GuzzleHttp\Promise\Promise associateQualificationWithWorkerAsync(array $args = [])
 * @method \Aws\Result createAdditionalAssignmentsForHIT(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createAdditionalAssignmentsForHITAsync(array $args = [])
 * @method \Aws\Result createHIT(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createHITAsync(array $args = [])
 * @method \Aws\Result createHITType(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createHITTypeAsync(array $args = [])
 * @method \Aws\Result createHITWithHITType(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createHITWithHITTypeAsync(array $args = [])
 * @method \Aws\Result createQualificationType(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createQualificationTypeAsync(array $args = [])
 * @method \Aws\Result createWorkerBlock(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createWorkerBlockAsync(array $args = [])
 * @method \Aws\Result deleteHIT(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteHITAsync(array $args = [])
 * @method \Aws\Result deleteQualificationType(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteQualificationTypeAsync(array $args = [])
 * @method \Aws\Result deleteWorkerBlock(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteWorkerBlockAsync(array $args = [])
 * @method \Aws\Result disassociateQualificationFromWorker(array $args = [])
 * @method \GuzzleHttp\Promise\Promise disassociateQualificationFromWorkerAsync(array $args = [])
 * @method \Aws\Result getAccountBalance(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getAccountBalanceAsync(array $args = [])
 * @method \Aws\Result getAssignment(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getAssignmentAsync(array $args = [])
 * @method \Aws\Result getFileUploadURL(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getFileUploadURLAsync(array $args = [])
 * @method \Aws\Result getHIT(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getHITAsync(array $args = [])
 * @method \Aws\Result getQualificationScore(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getQualificationScoreAsync(array $args = [])
 * @method \Aws\Result getQualificationType(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getQualificationTypeAsync(array $args = [])
 * @method \Aws\Result listAssignmentsForHIT(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listAssignmentsForHITAsync(array $args = [])
 * @method \Aws\Result listBonusPayments(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listBonusPaymentsAsync(array $args = [])
 * @method \Aws\Result listHITs(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listHITsAsync(array $args = [])
 * @method \Aws\Result listHITsForQualificationType(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listHITsForQualificationTypeAsync(array $args = [])
 * @method \Aws\Result listQualificationRequests(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listQualificationRequestsAsync(array $args = [])
 * @method \Aws\Result listQualificationTypes(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listQualificationTypesAsync(array $args = [])
 * @method \Aws\Result listReviewPolicyResultsForHIT(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listReviewPolicyResultsForHITAsync(array $args = [])
 * @method \Aws\Result listReviewableHITs(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listReviewableHITsAsync(array $args = [])
 * @method \Aws\Result listWorkerBlocks(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listWorkerBlocksAsync(array $args = [])
 * @method \Aws\Result listWorkersWithQualificationType(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listWorkersWithQualificationTypeAsync(array $args = [])
 * @method \Aws\Result notifyWorkers(array $args = [])
 * @method \GuzzleHttp\Promise\Promise notifyWorkersAsync(array $args = [])
 * @method \Aws\Result rejectAssignment(array $args = [])
 * @method \GuzzleHttp\Promise\Promise rejectAssignmentAsync(array $args = [])
 * @method \Aws\Result rejectQualificationRequest(array $args = [])
 * @method \GuzzleHttp\Promise\Promise rejectQualificationRequestAsync(array $args = [])
 * @method \Aws\Result sendBonus(array $args = [])
 * @method \GuzzleHttp\Promise\Promise sendBonusAsync(array $args = [])
 * @method \Aws\Result sendTestEventNotification(array $args = [])
 * @method \GuzzleHttp\Promise\Promise sendTestEventNotificationAsync(array $args = [])
 * @method \Aws\Result updateExpirationForHIT(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateExpirationForHITAsync(array $args = [])
 * @method \Aws\Result updateHITReviewStatus(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateHITReviewStatusAsync(array $args = [])
 * @method \Aws\Result updateHITTypeOfHIT(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateHITTypeOfHITAsync(array $args = [])
 * @method \Aws\Result updateNotificationSettings(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateNotificationSettingsAsync(array $args = [])
 * @method \Aws\Result updateQualificationType(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateQualificationTypeAsync(array $args = [])
 */
class MTurkClient extends AwsClient {}
