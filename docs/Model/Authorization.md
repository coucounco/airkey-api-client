# Authorization

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** | Unique identifier | 
**version** | **int** | Current version number of the authorization | 
**medium** | [**\Swagger\Client\Model\SimpleMedium**](SimpleMedium.md) | Medium to which this authorization is defined | 
**lock** | [**\Swagger\Client\Model\SimpleLock**](SimpleLock.md) | Lock for which the medium is authorized | [optional] 
**area** | [**\Swagger\Client\Model\SimpleArea**](SimpleArea.md) | Area for which the medium is authorized | [optional] 
**person_id** | **int** | Owner of this authorization | [optional] 
**current_state** | **string** | Current state of authorization | [optional] 
**created_on** | **string** | Timestamp when the authorization was created (ISO 8601-format compliant date with time in UTC, milliseconds precision) | [optional] 
**updated_on** | **string** | Timestamp when the authorization was last updated (ISO 8601-format compliant date with time in UTC, milliseconds precision) | [optional] 
**synchronized_on** | **string** | Timestamp when the authorization was last synchronized with the medium (ISO 8601-format compliant date with time in UTC, milliseconds precision) | [optional] 
**deletion_requested** | **bool** | Is a deletion of the authorization requested or not | [optional] 
**authorization_info_list** | [**\Swagger\Client\Model\AuthorizationInfo[]**](AuthorizationInfo.md) | List of authorization details | 
**custom** | **bool** | Authorization combines different authorization types | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


