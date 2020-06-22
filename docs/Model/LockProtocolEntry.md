# LockProtocolEntry

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**event_category** | **string** | Category of event | [optional] 
**event** | [**\Swagger\Client\Model\LockProtocolEvent**](LockProtocolEvent.md) | Type of protocol entry event | [optional] 
**details** | [**\Swagger\Client\Model\LockProtocolDetails**](LockProtocolDetails.md) | Details of the protocol entry event | [optional] 
**lock_utc_delta** | **int** | Time difference of locking component regarding UTC | [optional] 
**medium** | [**\Swagger\Client\Model\SimpleMedium**](SimpleMedium.md) | Medium which was used as source for this event | [optional] 
**operator_name** | **string** | Name of person who was responsible for this event | [optional] 
**source_lock** | **bool** | Locking component has verified event or not | [optional] 
**source_medium** | **bool** | Medium has verified event or not | [optional] 
**timestamp** | **string** | Timestamp of the event (ISO 8601-format compliant date with time in UTC, milliseconds precision) | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


