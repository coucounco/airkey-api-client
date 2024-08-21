# OfficeModeSlot

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**type** | **string** | Type of an office mode slot. CLOSING_TIME_MANUAL_OFFICE_MODE leaves the manually activated office mode at a certain time, if the lock is actually in office mode at given time. AUTOMATIC_OFFICE_MODE enters and leaves the office mode automatically at given times. | 
**weekday** | **string** | Day of the week | 
**opens_at** | **string** | Opening time (format: hh:mm, 24-hour notation, only certain minute values are allowed (like authorization time definitions), check general documentation). Only used (and required) for type &#39;AUTOMATIC_OFFICE_MODE&#39;. | [optional] 
**closes_at** | **string** | Closing time (format: hh:mm, 24-hour notation, only certain minute values are allowed (like authorization time definitions), check general documentation) | 
**status** | **string** | Status of an office mode slot | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


