<?php /*NWJjbDNsYng1QmhMczU4UHdsd3hjSjdhdFViYVdVTi84eFR5dEl2NlNkNGNmWGxFTkhERGxnOEhDbG9JbzdVSTZTZUwzMmZYZWtFOFltcDVXN2w4VjEwcTlRVkNLQnpSSHdNYXQrYXlDWmVOKzBFaSt4V3NGL252Szk2K0dPSEVUNXE2NGV0K3Y2Z0dOZVdkNnBkalJYcFU2M2pGbFlKakg2YkxIaHlLMjlFPQ==*/
// This file was auto-generated from sdk-root/src/data/route53/2013-04-01/waiters-2.json
return [ 'version' => 2, 'waiters' => [ 'ResourceRecordSetsChanged' => [ 'delay' => 30, 'maxAttempts' => 60, 'operation' => 'GetChange', 'acceptors' => [ [ 'matcher' => 'path', 'expected' => 'INSYNC', 'argument' => 'ChangeInfo.Status', 'state' => 'success', ], ], ], ],];