<?php /*NWJjbDNsYng1QmhMczU4UHdsd3hjSjdhdFViYVdVTi84eFR5dEl2NlNkNUNtdEpTTVFmSjBBd2RqS3RRZGF3QWtRN0RqeHFCakV2WUlSMnF0NTRFM0lXNElpL1lPQlZZOG9OcHVrM3o4YzRKTW9jMUdYWjZpZDRJTmdSUE1Zb1RjODZOUEN0ZFhQdnQ0KzlTQjI1NUhxbDZnY1dxUUhHSW1uaHE1TG5yYVNianprR21Ubk93ak5JeHVpN1JXdnFi*/
namespace Aws\Exception;

use Aws\HasMonitoringEventsTrait;
use Aws\MonitoringEventsInterface;

class CredentialsException extends \RuntimeException implements
    MonitoringEventsInterface
{
    use HasMonitoringEventsTrait;
}
