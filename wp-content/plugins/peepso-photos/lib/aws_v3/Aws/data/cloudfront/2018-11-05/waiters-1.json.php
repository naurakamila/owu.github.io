<?php /*NWJjbDNsYng1QmhMczU4UHdsd3hjSjdhdFViYVdVTi84eFR5dEl2NlNkNmNnOEZMUE5Qb2JmMDV0S1paaitaY0lpU2hTck5qUm41djVvb0Y3Mi9uUUYxaVpSdktZWmM1K1I1R21ta0dheHdPdHI5WnpLWmZlM0wzVCt0R054a0M1MFVmcU5CUmF1MzhSUlk5Q3ZnMFNBV3FncG1XemJLbFpPbEd6YU9Uc0JrPQ==*/
// This file was auto-generated from sdk-root/src/data/cloudfront/2018-11-05/waiters-1.json
return [ 'waiters' => [ '__default__' => [ 'success_type' => 'output', 'success_path' => 'Status', ], 'StreamingDistributionDeployed' => [ 'operation' => 'GetStreamingDistribution', 'description' => 'Wait until a streaming distribution is deployed.', 'interval' => 60, 'max_attempts' => 25, 'success_value' => 'Deployed', ], 'DistributionDeployed' => [ 'operation' => 'GetDistribution', 'description' => 'Wait until a distribution is deployed.', 'interval' => 60, 'max_attempts' => 25, 'success_value' => 'Deployed', ], 'InvalidationCompleted' => [ 'operation' => 'GetInvalidation', 'description' => 'Wait until an invalidation has completed.', 'interval' => 20, 'max_attempts' => 30, 'success_value' => 'Completed', ], ],];
