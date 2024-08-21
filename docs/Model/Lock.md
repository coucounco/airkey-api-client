# Lock

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** | Unique identifier | 
**version** | **int** | Current version number of the lock | 
**lock_type** | **string** | Type of lock | [optional] 
**ownership** | **string** | Describes if the lock is your own or it belongs to someone else who has shared it with you. | [optional] 
**lock_technology** | **string** | Type of lock technology | [optional] 
**lock_identifier** | **string** | Identifier of the lock | [optional] 
**locking_system_id** | **int** | Technical identifier of the lock | [optional] 
**lock_door** | [**\Coucounco\Airkey\Swagger\Client\Model\LockDoor**](LockDoor.md) | Door information associated with the lock | 
**lock_firmware** | [**\Coucounco\Airkey\Swagger\Client\Model\LockFirmware**](LockFirmware.md) | Current firmware of the lock | [optional] 
**comment** | **string** | Comment | [optional] 
**removal_requested** | **bool** | Indicates if a lock is to be removed. Needs lock synchronization to actually remove the lock. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


