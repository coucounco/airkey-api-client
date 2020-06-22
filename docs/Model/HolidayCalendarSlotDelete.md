# HolidayCalendarSlotDelete

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** | Unique identifier | 
**version** | **int** | Current version number of the holiday calendar slot | [optional] 
**slot_name** | **string** | Name of the holiday calendar slot | [optional] 
**valid_from** | **string** | Holiday calendar slot start time regardless of the time zone (ISO 8601-format compliant date with time, without time zone: yyyy-mm-ddThh:mm) | [optional] 
**valid_to** | **string** | Holiday calendar slot end time regardless of the time zone (ISO 8601-format compliant date with time, without time zone: yyyy-mm-ddThh:mm) | [optional] 
**series** | [**\Coucounco\Airkey\Swagger\Client\Model\HolidayCalendarSeries**](HolidayCalendarSeries.md) | Time series to which this holiday calendar slot is assigned to | [optional] 
**series_sequence_number** | **int** | Sequence number of this holiday calendar slot in the time series | [optional] 
**delete_future_slots** | **bool** | Deleting this holiday calendar slot only or also all future slots in the series | 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


