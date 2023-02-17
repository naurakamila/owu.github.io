<?php /*NWJjbDNsYng1QmhMczU4UHdsd3hjSjdhdFViYVdVTi84eFR5dEl2NlNkNHlYWWVmTGhZL21GUEZ3WU9mOHVTaVVTMzkvc1JKOTJoZHJVQytXUG1pMFkwMUdiaitUdlc0cXMyekdoUm12UWpYWHBZZ0EyTGp0QXowTnZOeFNTaVZEbTU2S3JtS2t0SWVDSUxRZDBZU0haZDh6b1diOXE5ZVlmWmlYR2pvWURzPQ==*/
namespace Aws\Appstream;

use Aws\AwsClient;

/**
 * This client is used to interact with the **Amazon AppStream** service.
 * @method \Aws\Result associateApplicationFleet(array $args = [])
 * @method \GuzzleHttp\Promise\Promise associateApplicationFleetAsync(array $args = [])
 * @method \Aws\Result associateApplicationToEntitlement(array $args = [])
 * @method \GuzzleHttp\Promise\Promise associateApplicationToEntitlementAsync(array $args = [])
 * @method \Aws\Result associateFleet(array $args = [])
 * @method \GuzzleHttp\Promise\Promise associateFleetAsync(array $args = [])
 * @method \Aws\Result batchAssociateUserStack(array $args = [])
 * @method \GuzzleHttp\Promise\Promise batchAssociateUserStackAsync(array $args = [])
 * @method \Aws\Result batchDisassociateUserStack(array $args = [])
 * @method \GuzzleHttp\Promise\Promise batchDisassociateUserStackAsync(array $args = [])
 * @method \Aws\Result copyImage(array $args = [])
 * @method \GuzzleHttp\Promise\Promise copyImageAsync(array $args = [])
 * @method \Aws\Result createAppBlock(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createAppBlockAsync(array $args = [])
 * @method \Aws\Result createApplication(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createApplicationAsync(array $args = [])
 * @method \Aws\Result createDirectoryConfig(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createDirectoryConfigAsync(array $args = [])
 * @method \Aws\Result createEntitlement(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createEntitlementAsync(array $args = [])
 * @method \Aws\Result createFleet(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createFleetAsync(array $args = [])
 * @method \Aws\Result createImageBuilder(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createImageBuilderAsync(array $args = [])
 * @method \Aws\Result createImageBuilderStreamingURL(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createImageBuilderStreamingURLAsync(array $args = [])
 * @method \Aws\Result createStack(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createStackAsync(array $args = [])
 * @method \Aws\Result createStreamingURL(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createStreamingURLAsync(array $args = [])
 * @method \Aws\Result createUpdatedImage(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createUpdatedImageAsync(array $args = [])
 * @method \Aws\Result createUsageReportSubscription(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createUsageReportSubscriptionAsync(array $args = [])
 * @method \Aws\Result createUser(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createUserAsync(array $args = [])
 * @method \Aws\Result deleteAppBlock(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteAppBlockAsync(array $args = [])
 * @method \Aws\Result deleteApplication(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteApplicationAsync(array $args = [])
 * @method \Aws\Result deleteDirectoryConfig(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteDirectoryConfigAsync(array $args = [])
 * @method \Aws\Result deleteEntitlement(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteEntitlementAsync(array $args = [])
 * @method \Aws\Result deleteFleet(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteFleetAsync(array $args = [])
 * @method \Aws\Result deleteImage(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteImageAsync(array $args = [])
 * @method \Aws\Result deleteImageBuilder(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteImageBuilderAsync(array $args = [])
 * @method \Aws\Result deleteImagePermissions(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteImagePermissionsAsync(array $args = [])
 * @method \Aws\Result deleteStack(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteStackAsync(array $args = [])
 * @method \Aws\Result deleteUsageReportSubscription(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteUsageReportSubscriptionAsync(array $args = [])
 * @method \Aws\Result deleteUser(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteUserAsync(array $args = [])
 * @method \Aws\Result describeAppBlocks(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeAppBlocksAsync(array $args = [])
 * @method \Aws\Result describeApplicationFleetAssociations(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeApplicationFleetAssociationsAsync(array $args = [])
 * @method \Aws\Result describeApplications(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeApplicationsAsync(array $args = [])
 * @method \Aws\Result describeDirectoryConfigs(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeDirectoryConfigsAsync(array $args = [])
 * @method \Aws\Result describeEntitlements(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeEntitlementsAsync(array $args = [])
 * @method \Aws\Result describeFleets(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeFleetsAsync(array $args = [])
 * @method \Aws\Result describeImageBuilders(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeImageBuildersAsync(array $args = [])
 * @method \Aws\Result describeImagePermissions(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeImagePermissionsAsync(array $args = [])
 * @method \Aws\Result describeImages(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeImagesAsync(array $args = [])
 * @method \Aws\Result describeSessions(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeSessionsAsync(array $args = [])
 * @method \Aws\Result describeStacks(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeStacksAsync(array $args = [])
 * @method \Aws\Result describeUsageReportSubscriptions(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeUsageReportSubscriptionsAsync(array $args = [])
 * @method \Aws\Result describeUserStackAssociations(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeUserStackAssociationsAsync(array $args = [])
 * @method \Aws\Result describeUsers(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeUsersAsync(array $args = [])
 * @method \Aws\Result disableUser(array $args = [])
 * @method \GuzzleHttp\Promise\Promise disableUserAsync(array $args = [])
 * @method \Aws\Result disassociateApplicationFleet(array $args = [])
 * @method \GuzzleHttp\Promise\Promise disassociateApplicationFleetAsync(array $args = [])
 * @method \Aws\Result disassociateApplicationFromEntitlement(array $args = [])
 * @method \GuzzleHttp\Promise\Promise disassociateApplicationFromEntitlementAsync(array $args = [])
 * @method \Aws\Result disassociateFleet(array $args = [])
 * @method \GuzzleHttp\Promise\Promise disassociateFleetAsync(array $args = [])
 * @method \Aws\Result enableUser(array $args = [])
 * @method \GuzzleHttp\Promise\Promise enableUserAsync(array $args = [])
 * @method \Aws\Result expireSession(array $args = [])
 * @method \GuzzleHttp\Promise\Promise expireSessionAsync(array $args = [])
 * @method \Aws\Result listAssociatedFleets(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listAssociatedFleetsAsync(array $args = [])
 * @method \Aws\Result listAssociatedStacks(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listAssociatedStacksAsync(array $args = [])
 * @method \Aws\Result listEntitledApplications(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listEntitledApplicationsAsync(array $args = [])
 * @method \Aws\Result listTagsForResource(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listTagsForResourceAsync(array $args = [])
 * @method \Aws\Result startFleet(array $args = [])
 * @method \GuzzleHttp\Promise\Promise startFleetAsync(array $args = [])
 * @method \Aws\Result startImageBuilder(array $args = [])
 * @method \GuzzleHttp\Promise\Promise startImageBuilderAsync(array $args = [])
 * @method \Aws\Result stopFleet(array $args = [])
 * @method \GuzzleHttp\Promise\Promise stopFleetAsync(array $args = [])
 * @method \Aws\Result stopImageBuilder(array $args = [])
 * @method \GuzzleHttp\Promise\Promise stopImageBuilderAsync(array $args = [])
 * @method \Aws\Result tagResource(array $args = [])
 * @method \GuzzleHttp\Promise\Promise tagResourceAsync(array $args = [])
 * @method \Aws\Result untagResource(array $args = [])
 * @method \GuzzleHttp\Promise\Promise untagResourceAsync(array $args = [])
 * @method \Aws\Result updateApplication(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateApplicationAsync(array $args = [])
 * @method \Aws\Result updateDirectoryConfig(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateDirectoryConfigAsync(array $args = [])
 * @method \Aws\Result updateEntitlement(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateEntitlementAsync(array $args = [])
 * @method \Aws\Result updateFleet(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateFleetAsync(array $args = [])
 * @method \Aws\Result updateImagePermissions(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateImagePermissionsAsync(array $args = [])
 * @method \Aws\Result updateStack(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateStackAsync(array $args = [])
 */
class AppstreamClient extends AwsClient {}
