# AuthorizationCreate

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**medium_id** | **int** | Medium to which this authorization should be defined | 
**area_id** | **int** | Area for which the given medium should be authorized. Required when no lock id is set. | [optional] 
**lock_id** | **int** | Lock for which the given medium should be authorized. Required when no area id is set. | [optional] 
**authorization_info_list** | [**\Swagger\Client\Model\AuthorizationInfo[]**](AuthorizationInfo.md) | List of authorization details | 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


