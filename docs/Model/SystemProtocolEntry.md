# SystemProtocolEntry

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** | Unique identifier | 
**event** | [**\Coucounco\Airkey\Swagger\Client\Model\SystemProtocolEvent**](SystemProtocolEvent.md) | Type of system protocol entry event | [optional] 
**details** | [**\Coucounco\Airkey\Swagger\Client\Model\SystemProtocolDetails**](SystemProtocolDetails.md) | Details of the system protocol entry event | [optional] 
**timestamp** | **string** | Timestamp of the event (ISO 8601-format compliant date with time in UTC, milliseconds precision) | [optional] 
**lock_identifier** | **string** | Identifier of the locking component which was involved in the event, otherwise empty if no locking component was involved | [optional] 
**lock_id** | **int** | Unique id of the locking component which was involved in the event if it still exists in the access control system, otherwise empty | [optional] 
**medium_identifier** | **string** | Identifier of the medium which was involved in the event, otherwise empty if no medium was involved, | [optional] 
**medium_id** | **int** | Unique id of the medium which was involved in the event if it still exists in the access control system, otherwise empty | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


