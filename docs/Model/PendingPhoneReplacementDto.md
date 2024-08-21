# PendingPhoneReplacementDto

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** | Unique identifier | 
**replacement_started_on** | **string** | Timestamp when the replacement was initiated (ISO 8601-format compliant date with time in UTC, milliseconds precision: yyyy-mm-ddThh:mm:ss.SSSZ) | [optional] 
**source_phone_owner** | [**\Coucounco\Airkey\Swagger\Client\Model\ReplacementPersonDto**](ReplacementPersonDto.md) | Details of the source mobile phone owner (may not exist, if the person assignment was revoked) | [optional] 
**source_phone** | [**\Coucounco\Airkey\Swagger\Client\Model\ReplacementPersonDto**](ReplacementPersonDto.md) | Details of the source mobile phone | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


