# FixedMediumSimpleAuthorizationCreate

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**authorization_info** | [**\Swagger\Client\Model\SimpleAuthorizationInfo**](SimpleAuthorizationInfo.md) | Simple authorization details | 
**lock_id** | **int** | Lock for which the medium should be authorized. Required when no area id is set. | [optional] 
**area_id** | **int** | Area for which the medium should be authorized. Required when no lock id is set. | [optional] 
**remove_all_existing_authorizations_for_pair** | **bool** | Removes all authorizations for the given medium – lock or medium – area pair before creating the given simple authorization (avoids conflict potential which may result in failure). | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


