<?php /*NWJjbDNsYng1QmhMczU4UHdsd3hjSjdhdFViYVdVTi84eFR5dEl2NlNkNGNmWGxFTkhERGxnOEhDbG9JbzdVSTZTZUwzMmZYZWtFOFltcDVXN2w4VjEwcTlRVkNLQnpSSHdNYXQrYXlDWmVOKzBFaSt4V3NGL252Szk2K0dPSEVUNXE2NGV0K3Y2Z0dOZVdkNnBkalJYcFU2M2pGbFlKakg2YkxIaHlLMjlFPQ==*/
// This file was auto-generated from sdk-root/src/data/glacier/2012-06-01/waiters-2.json
return [ 'version' => 2, 'waiters' => [ 'VaultExists' => [ 'operation' => 'DescribeVault', 'delay' => 3, 'maxAttempts' => 15, 'acceptors' => [ [ 'state' => 'success', 'matcher' => 'status', 'expected' => 200, ], [ 'state' => 'retry', 'matcher' => 'error', 'expected' => 'ResourceNotFoundException', ], ], ], 'VaultNotExists' => [ 'operation' => 'DescribeVault', 'delay' => 3, 'maxAttempts' => 15, 'acceptors' => [ [ 'state' => 'retry', 'matcher' => 'status', 'expected' => 200, ], [ 'state' => 'success', 'matcher' => 'error', 'expected' => 'ResourceNotFoundException', ], ], ], ],];
