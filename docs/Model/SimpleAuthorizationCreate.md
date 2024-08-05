# SimpleAuthorizationCreate

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**authorization_info** | [**\Coucounco\Airkey\Swagger\Client\Model\SimpleAuthorizationInfo**](SimpleAuthorizationInfo.md) | Details of a simple authorization | 
**medium_id** | **int** | Medium to which this authorization should be defined | 
**lock_id** | **int** | Lock for which the medium should be authorized. Required when no area id is set. | [optional] 
**area_id** | **int** | Area for which the medium should be authorized. Required when no lock id is set. | [optional] 
**remove_all_existing_authorizations_for_pair** | **bool** | Removes all authorizations for the given medium – lock or medium – area pair before creating the given simple authorization (avoids conflict potential which may result in failure). | [optional] 
**push_message** | **string** | Notification text that will be shown on the phone for new/changed authorizations. Default text will be used if not set. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


