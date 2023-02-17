<?php /*NWJjbDNsYng1QmhMczU4UHdsd3hjSjdhdFViYVdVTi84eFR5dEl2NlNkN0dOaEtPck02dUtkZ21KWjAzeDJpbXRkc3lGdFhhQUZwM1hwV2lLNTRFMEdtZmRqSnRxZ3NvT0hHZWV6T3dFYTBJMVRnRC9TQWRYbWtUTXFEVnBWRmkxNlRLcFZsSVZUUU5PcjlGUXRpbEJqSEZRSm5JSG9LSzhOWXdGWWEyQWJZRTN3RFNPWlJ5djFTODdHU1Frb1pi*/
namespace Aws\ChimeSDKMessaging;

use Aws\AwsClient;

/**
 * This client is used to interact with the **Amazon Chime SDK Messaging** service.
 * @method \Aws\Result associateChannelFlow(array $args = [])
 * @method \GuzzleHttp\Promise\Promise associateChannelFlowAsync(array $args = [])
 * @method \Aws\Result batchCreateChannelMembership(array $args = [])
 * @method \GuzzleHttp\Promise\Promise batchCreateChannelMembershipAsync(array $args = [])
 * @method \Aws\Result channelFlowCallback(array $args = [])
 * @method \GuzzleHttp\Promise\Promise channelFlowCallbackAsync(array $args = [])
 * @method \Aws\Result createChannel(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createChannelAsync(array $args = [])
 * @method \Aws\Result createChannelBan(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createChannelBanAsync(array $args = [])
 * @method \Aws\Result createChannelFlow(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createChannelFlowAsync(array $args = [])
 * @method \Aws\Result createChannelMembership(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createChannelMembershipAsync(array $args = [])
 * @method \Aws\Result createChannelModerator(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createChannelModeratorAsync(array $args = [])
 * @method \Aws\Result deleteChannel(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteChannelAsync(array $args = [])
 * @method \Aws\Result deleteChannelBan(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteChannelBanAsync(array $args = [])
 * @method \Aws\Result deleteChannelFlow(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteChannelFlowAsync(array $args = [])
 * @method \Aws\Result deleteChannelMembership(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteChannelMembershipAsync(array $args = [])
 * @method \Aws\Result deleteChannelMessage(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteChannelMessageAsync(array $args = [])
 * @method \Aws\Result deleteChannelModerator(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteChannelModeratorAsync(array $args = [])
 * @method \Aws\Result describeChannel(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeChannelAsync(array $args = [])
 * @method \Aws\Result describeChannelBan(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeChannelBanAsync(array $args = [])
 * @method \Aws\Result describeChannelFlow(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeChannelFlowAsync(array $args = [])
 * @method \Aws\Result describeChannelMembership(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeChannelMembershipAsync(array $args = [])
 * @method \Aws\Result describeChannelMembershipForAppInstanceUser(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeChannelMembershipForAppInstanceUserAsync(array $args = [])
 * @method \Aws\Result describeChannelModeratedByAppInstanceUser(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeChannelModeratedByAppInstanceUserAsync(array $args = [])
 * @method \Aws\Result describeChannelModerator(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeChannelModeratorAsync(array $args = [])
 * @method \Aws\Result disassociateChannelFlow(array $args = [])
 * @method \GuzzleHttp\Promise\Promise disassociateChannelFlowAsync(array $args = [])
 * @method \Aws\Result getChannelMembershipPreferences(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getChannelMembershipPreferencesAsync(array $args = [])
 * @method \Aws\Result getChannelMessage(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getChannelMessageAsync(array $args = [])
 * @method \Aws\Result getChannelMessageStatus(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getChannelMessageStatusAsync(array $args = [])
 * @method \Aws\Result getMessagingSessionEndpoint(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getMessagingSessionEndpointAsync(array $args = [])
 * @method \Aws\Result listChannelBans(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listChannelBansAsync(array $args = [])
 * @method \Aws\Result listChannelFlows(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listChannelFlowsAsync(array $args = [])
 * @method \Aws\Result listChannelMemberships(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listChannelMembershipsAsync(array $args = [])
 * @method \Aws\Result listChannelMembershipsForAppInstanceUser(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listChannelMembershipsForAppInstanceUserAsync(array $args = [])
 * @method \Aws\Result listChannelMessages(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listChannelMessagesAsync(array $args = [])
 * @method \Aws\Result listChannelModerators(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listChannelModeratorsAsync(array $args = [])
 * @method \Aws\Result listChannels(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listChannelsAsync(array $args = [])
 * @method \Aws\Result listChannelsAssociatedWithChannelFlow(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listChannelsAssociatedWithChannelFlowAsync(array $args = [])
 * @method \Aws\Result listChannelsModeratedByAppInstanceUser(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listChannelsModeratedByAppInstanceUserAsync(array $args = [])
 * @method \Aws\Result listTagsForResource(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listTagsForResourceAsync(array $args = [])
 * @method \Aws\Result putChannelMembershipPreferences(array $args = [])
 * @method \GuzzleHttp\Promise\Promise putChannelMembershipPreferencesAsync(array $args = [])
 * @method \Aws\Result redactChannelMessage(array $args = [])
 * @method \GuzzleHttp\Promise\Promise redactChannelMessageAsync(array $args = [])
 * @method \Aws\Result sendChannelMessage(array $args = [])
 * @method \GuzzleHttp\Promise\Promise sendChannelMessageAsync(array $args = [])
 * @method \Aws\Result tagResource(array $args = [])
 * @method \GuzzleHttp\Promise\Promise tagResourceAsync(array $args = [])
 * @method \Aws\Result untagResource(array $args = [])
 * @method \GuzzleHttp\Promise\Promise untagResourceAsync(array $args = [])
 * @method \Aws\Result updateChannel(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateChannelAsync(array $args = [])
 * @method \Aws\Result updateChannelFlow(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateChannelFlowAsync(array $args = [])
 * @method \Aws\Result updateChannelMessage(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateChannelMessageAsync(array $args = [])
 * @method \Aws\Result updateChannelReadMarker(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateChannelReadMarkerAsync(array $args = [])
 */
class ChimeSDKMessagingClient extends AwsClient {}
