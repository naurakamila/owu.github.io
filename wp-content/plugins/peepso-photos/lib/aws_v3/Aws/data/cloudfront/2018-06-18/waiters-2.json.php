<?php /*NWJjbDNsYng1QmhMczU4UHdsd3hjSjdhdFViYVdVTi84eFR5dEl2NlNkNGNmWGxFTkhERGxnOEhDbG9JbzdVSTZTZUwzMmZYZWtFOFltcDVXN2w4VjEwcTlRVkNLQnpSSHdNYXQrYXlDWmVOKzBFaSt4V3NGL252Szk2K0dPSEVUNXE2NGV0K3Y2Z0dOZVdkNnBkalJYcFU2M2pGbFlKakg2YkxIaHlLMjlFPQ==*/
// This file was auto-generated from sdk-root/src/data/cloudfront/2018-06-18/waiters-2.json
return [ 'version' => 2, 'waiters' => [ 'DistributionDeployed' => [ 'delay' => 60, 'operation' => 'GetDistribution', 'maxAttempts' => 25, 'description' => 'Wait until a distribution is deployed.', 'acceptors' => [ [ 'expected' => 'Deployed', 'matcher' => 'path', 'state' => 'success', 'argument' => 'Distribution.Status', ], ], ], 'InvalidationCompleted' => [ 'delay' => 20, 'operation' => 'GetInvalidation', 'maxAttempts' => 30, 'description' => 'Wait until an invalidation has completed.', 'acceptors' => [ [ 'expected' => 'Completed', 'matcher' => 'path', 'state' => 'success', 'argument' => 'Invalidation.Status', ], ], ], 'StreamingDistributionDeployed' => [ 'delay' => 60, 'operation' => 'GetStreamingDistribution', 'maxAttempts' => 25, 'description' => 'Wait until a streaming distribution is deployed.', 'acceptors' => [ [ 'expected' => 'Deployed', 'matcher' => 'path', 'state' => 'success', 'argument' => 'StreamingDistribution.Status', ], ], ], ],];
