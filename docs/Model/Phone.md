# Phone

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**medium_type** | **string** | Phone type of the medium | [optional] 
**app_type** | **string** | Type of the used app | [optional] 
**platform_version** | **string** | Current version of the platform | [optional] 
**phone_settings** | [**\Swagger\Client\Model\PhoneSettings**](PhoneSettings.md) | Settings of the phone | 
**pairing_code** | **string** | Generated pairing code | [optional] 
**pairing_code_valid_until** | **string** | Timestamp until when the pairing code is valid (ISO 8601-format compliant date with time in UTC, milliseconds precision: yyyy-mm-ddThh:mm:ss.SSSZ) | [optional] 
**phone_number** | **string** | Phone number of the phone starting with &#39;+&#39; followed by 1-49 digits (incl. possible spaces), e.g. +436641234567 | 
**sent_key_on** | **string** | Timestamp when the pairing code was sent to the phone (ISO 8601-format compliant date with time in UTC, milliseconds precision: yyyy-mm-ddThh:mm:ss.SSSZ) | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


