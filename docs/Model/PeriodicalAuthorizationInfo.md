# PeriodicalAuthorizationInfo

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**type** | **string** | Periodical type of authorization | 
**periodical_periods** | [**\Swagger\Client\Model\PeriodicalPeriod[]**](PeriodicalPeriod.md) | List of periodical periods in which the medium is authorized for a lock or area (max. 28 entries - 4 per week day) | 
**valid_from_date** | **string** | Date from when the authorization is valid regardless of the time zone (ISO 8601-format compliant date without time zone: yyyy-mm-dd) | 
**valid_to_date** | **string** | Date until when the authorization is valid regardless of the time zone, not necessary if there should be no limit (ISO 8601-format compliant date without time zone: yyyy-mm-dd) | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


