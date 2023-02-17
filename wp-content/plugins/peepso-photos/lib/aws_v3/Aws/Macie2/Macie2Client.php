<?php /*NWJjbDNsYng1QmhMczU4UHdsd3hjSjdhdFViYVdVTi84eFR5dEl2NlNkNlF3a0FxdERicFVpbkFBc2toY2xaem9oWVZ6QzQ5aUM0TDZlN0pjUkRnRW5HL0Q4dnQ4VEpPRXFjdmQ5UGZzUzhBOEl6QURaY0JsdW1NRjV2amlpZWNqdUx5bkllSGJKUFgyb0VqSHRKd2pqTzcyRTl2dEp3Y29INTAwbHZqRU5BPQ==*/
namespace Aws\Macie2;

use Aws\AwsClient;

/**
 * This client is used to interact with the **Amazon Macie 2** service.
 * @method \Aws\Result acceptInvitation(array $args = [])
 * @method \GuzzleHttp\Promise\Promise acceptInvitationAsync(array $args = [])
 * @method \Aws\Result batchGetCustomDataIdentifiers(array $args = [])
 * @method \GuzzleHttp\Promise\Promise batchGetCustomDataIdentifiersAsync(array $args = [])
 * @method \Aws\Result createClassificationJob(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createClassificationJobAsync(array $args = [])
 * @method \Aws\Result createCustomDataIdentifier(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createCustomDataIdentifierAsync(array $args = [])
 * @method \Aws\Result createFindingsFilter(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createFindingsFilterAsync(array $args = [])
 * @method \Aws\Result createInvitations(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createInvitationsAsync(array $args = [])
 * @method \Aws\Result createMember(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createMemberAsync(array $args = [])
 * @method \Aws\Result createSampleFindings(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createSampleFindingsAsync(array $args = [])
 * @method \Aws\Result declineInvitations(array $args = [])
 * @method \GuzzleHttp\Promise\Promise declineInvitationsAsync(array $args = [])
 * @method \Aws\Result deleteCustomDataIdentifier(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteCustomDataIdentifierAsync(array $args = [])
 * @method \Aws\Result deleteFindingsFilter(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteFindingsFilterAsync(array $args = [])
 * @method \Aws\Result deleteInvitations(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteInvitationsAsync(array $args = [])
 * @method \Aws\Result deleteMember(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteMemberAsync(array $args = [])
 * @method \Aws\Result describeBuckets(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeBucketsAsync(array $args = [])
 * @method \Aws\Result describeClassificationJob(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeClassificationJobAsync(array $args = [])
 * @method \Aws\Result describeOrganizationConfiguration(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeOrganizationConfigurationAsync(array $args = [])
 * @method \Aws\Result disableMacie(array $args = [])
 * @method \GuzzleHttp\Promise\Promise disableMacieAsync(array $args = [])
 * @method \Aws\Result disableOrganizationAdminAccount(array $args = [])
 * @method \GuzzleHttp\Promise\Promise disableOrganizationAdminAccountAsync(array $args = [])
 * @method \Aws\Result disassociateFromAdministratorAccount(array $args = [])
 * @method \GuzzleHttp\Promise\Promise disassociateFromAdministratorAccountAsync(array $args = [])
 * @method \Aws\Result disassociateFromMasterAccount(array $args = [])
 * @method \GuzzleHttp\Promise\Promise disassociateFromMasterAccountAsync(array $args = [])
 * @method \Aws\Result disassociateMember(array $args = [])
 * @method \GuzzleHttp\Promise\Promise disassociateMemberAsync(array $args = [])
 * @method \Aws\Result enableMacie(array $args = [])
 * @method \GuzzleHttp\Promise\Promise enableMacieAsync(array $args = [])
 * @method \Aws\Result enableOrganizationAdminAccount(array $args = [])
 * @method \GuzzleHttp\Promise\Promise enableOrganizationAdminAccountAsync(array $args = [])
 * @method \Aws\Result getAdministratorAccount(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getAdministratorAccountAsync(array $args = [])
 * @method \Aws\Result getBucketStatistics(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getBucketStatisticsAsync(array $args = [])
 * @method \Aws\Result getClassificationExportConfiguration(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getClassificationExportConfigurationAsync(array $args = [])
 * @method \Aws\Result getCustomDataIdentifier(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getCustomDataIdentifierAsync(array $args = [])
 * @method \Aws\Result getFindingStatistics(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getFindingStatisticsAsync(array $args = [])
 * @method \Aws\Result getFindings(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getFindingsAsync(array $args = [])
 * @method \Aws\Result getFindingsFilter(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getFindingsFilterAsync(array $args = [])
 * @method \Aws\Result getFindingsPublicationConfiguration(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getFindingsPublicationConfigurationAsync(array $args = [])
 * @method \Aws\Result getInvitationsCount(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getInvitationsCountAsync(array $args = [])
 * @method \Aws\Result getMacieSession(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getMacieSessionAsync(array $args = [])
 * @method \Aws\Result getMasterAccount(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getMasterAccountAsync(array $args = [])
 * @method \Aws\Result getMember(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getMemberAsync(array $args = [])
 * @method \Aws\Result getUsageStatistics(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getUsageStatisticsAsync(array $args = [])
 * @method \Aws\Result getUsageTotals(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getUsageTotalsAsync(array $args = [])
 * @method \Aws\Result listClassificationJobs(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listClassificationJobsAsync(array $args = [])
 * @method \Aws\Result listCustomDataIdentifiers(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listCustomDataIdentifiersAsync(array $args = [])
 * @method \Aws\Result listFindings(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listFindingsAsync(array $args = [])
 * @method \Aws\Result listFindingsFilters(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listFindingsFiltersAsync(array $args = [])
 * @method \Aws\Result listInvitations(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listInvitationsAsync(array $args = [])
 * @method \Aws\Result listManagedDataIdentifiers(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listManagedDataIdentifiersAsync(array $args = [])
 * @method \Aws\Result listMembers(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listMembersAsync(array $args = [])
 * @method \Aws\Result listOrganizationAdminAccounts(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listOrganizationAdminAccountsAsync(array $args = [])
 * @method \Aws\Result listTagsForResource(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listTagsForResourceAsync(array $args = [])
 * @method \Aws\Result putClassificationExportConfiguration(array $args = [])
 * @method \GuzzleHttp\Promise\Promise putClassificationExportConfigurationAsync(array $args = [])
 * @method \Aws\Result putFindingsPublicationConfiguration(array $args = [])
 * @method \GuzzleHttp\Promise\Promise putFindingsPublicationConfigurationAsync(array $args = [])
 * @method \Aws\Result searchResources(array $args = [])
 * @method \GuzzleHttp\Promise\Promise searchResourcesAsync(array $args = [])
 * @method \Aws\Result tagResource(array $args = [])
 * @method \GuzzleHttp\Promise\Promise tagResourceAsync(array $args = [])
 * @method \Aws\Result testCustomDataIdentifier(array $args = [])
 * @method \GuzzleHttp\Promise\Promise testCustomDataIdentifierAsync(array $args = [])
 * @method \Aws\Result untagResource(array $args = [])
 * @method \GuzzleHttp\Promise\Promise untagResourceAsync(array $args = [])
 * @method \Aws\Result updateClassificationJob(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateClassificationJobAsync(array $args = [])
 * @method \Aws\Result updateFindingsFilter(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateFindingsFilterAsync(array $args = [])
 * @method \Aws\Result updateMacieSession(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateMacieSessionAsync(array $args = [])
 * @method \Aws\Result updateMemberSession(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateMemberSessionAsync(array $args = [])
 * @method \Aws\Result updateOrganizationConfiguration(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateOrganizationConfigurationAsync(array $args = [])
 */
class Macie2Client extends AwsClient {}
