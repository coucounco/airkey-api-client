# SimpleLock

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** | Unique identifier | 
**lock_type** | **string** | Type of lock | [optional] 
**lock_identifier** | **string** | Identifier of the lock | [optional] 
**name** | **string** | Name of the lock | [optional] 
**additional_information** | **string** | Additional information about the lock | [optional] 
**alternative_name** | **string** | Alternative name of the lock (can be set for locks with ownership EXTERNAL as alternative to the name given by its owner, may be null). Never returned (not serialized) for locks with ownership OWNER. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


