# Airkey SwaggerClient-php

This is a Swagger client generated for EVVA AirKey

This PHP package is automatically generated by the [Swagger Codegen](https://github.com/swagger-api/swagger-codegen) project:

- API version: v14.40.2
- Build package: io.swagger.codegen.languages.PhpClientCodegen
For more information, please visit [https://airkey.evva.com](https://airkey.evva.com)


## Re-generate this library

- Go to https://generator.swagger.io
- Click on "clients" → "POST /gen/clients/{language}"
- Click on "Try it out"
- Select the programming language of choice

```
php
```

- Set the "body" field as follows:
 
```
{
    "spec": {},
    "options": {
        "composerVendorName": "Coucounco",
        "composerProjectName": "airkey-api-client",
        "srcBasePath": "src",
        "invokerPackage": "Coucounco\\Airkey\\Swagger\\Client"
    },
    "swaggerUrl": "https://integration.api.airkey.evva.com/docs/swagger.json"
}
```

- Then click the blue "Execute" button
- You can now download the generated lib at the URL given in the "Response body"

## Requirements

PHP 5.5 and later

## Installation & Usage
### Composer

To install the bindings via [Composer](http://getcomposer.org/), add the following to `composer.json`:

```
{
  "repositories": [
    {
      "type": "git",
      "url": "https://github.com/Coucounco/airkey-api-client.git"
    }
  ],
  "require": {
    "Coucounco/airkey-api-client": "*@dev"
  }
}
```

Then run `composer install`

## Tests

To run the unit tests:

```
composer install
./vendor/bin/phpunit
```

## Getting Started

Please follow the [installation procedure](#installation--usage) and then run the following:

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: X-API-Key
$config = Coucounco\Airkey\Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Coucounco\Airkey\Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Key', 'Bearer');

$apiInstance = new Coucounco\Airkey\Swagger\Client\Api\AreasApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$area_id = 789; // int | Unique identifier of the area

try {
    $result = $apiInstance->getArea($area_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AreasApi->getArea: ', $e->getMessage(), PHP_EOL;
}

?>
```

## Documentation for API Endpoints

All URIs are relative to *https://integration.api.airkey.evva.com:443/cloud*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*AreasApi* | [**getArea**](docs/Api/AreasApi.md#getarea) | **GET** /v1/areas/{areaId} | Gets a specific area.
*AreasApi* | [**getAreas**](docs/Api/AreasApi.md#getareas) | **GET** /v1/areas | Gets all available areas.
*AuthorizationsApi* | [**createOrFetchSimpleAuthorization**](docs/Api/AuthorizationsApi.md#createorfetchsimpleauthorization) | **POST** /v1/authorizations/simple | Creates simple authorizations
*AuthorizationsApi* | [**createOrUpdateAuthorizationsWithAdvancedOptions**](docs/Api/AuthorizationsApi.md#createorupdateauthorizationswithadvancedoptions) | **POST** /v1/authorizations/advanced | Creates new and updates existing authorizations (advanced version - can be used to create/update all types of authorizations).
*AuthorizationsApi* | [**deleteAuthorization**](docs/Api/AuthorizationsApi.md#deleteauthorization) | **PUT** /v1/authorizations | Requests deletion of provided authorizations.
*AuthorizationsApi* | [**getAuthorization**](docs/Api/AuthorizationsApi.md#getauthorization) | **GET** /v1/authorizations/{authorizationId} | Gets a specific authorization.
*AuthorizationsApi* | [**getAuthorizations**](docs/Api/AuthorizationsApi.md#getauthorizations) | **GET** /v1/authorizations | Gets all authorizations for locks and areas.
*BlacklistsApi* | [**getBlacklists**](docs/Api/BlacklistsApi.md#getblacklists) | **GET** /v1/blacklists | Gets all available blacklist entries.
*CreditsApi* | [**getCredits**](docs/Api/CreditsApi.md#getcredits) | **GET** /v1/credits | Gets available credit information.
*CustomerApi* | [**getCustomerData**](docs/Api/CustomerApi.md#getcustomerdata) | **GET** /v1/customer | Gets customer details.
*EventsApi* | [**getEvent**](docs/Api/EventsApi.md#getevent) | **GET** /v1/events/{eventId} | Gets a specific event.
*EventsApi* | [**getEvents**](docs/Api/EventsApi.md#getevents) | **GET** /v1/events | Gets a list of events.
*HolidayCalendarsApi* | [**createHolidayCalendarSlot**](docs/Api/HolidayCalendarsApi.md#createholidaycalendarslot) | **POST** /v1/holiday-calendars/{holidayCalendarId}/slots | Adds a new holiday calendar slot to the holiday calendar.
*HolidayCalendarsApi* | [**deleteHolidayCalendarSlot**](docs/Api/HolidayCalendarsApi.md#deleteholidaycalendarslot) | **DELETE** /v1/holiday-calendars/{holidayCalendarId}/slots/{holidayCalendarSlotId} | Deletes provided holiday calendar slot.
*HolidayCalendarsApi* | [**getHolidayCalendar**](docs/Api/HolidayCalendarsApi.md#getholidaycalendar) | **GET** /v1/holiday-calendars/{holidayCalendarId} | Gets a specific holiday calendar.
*HolidayCalendarsApi* | [**getHolidayCalendarSlot**](docs/Api/HolidayCalendarsApi.md#getholidaycalendarslot) | **GET** /v1/holiday-calendars/{holidayCalendarId}/slots/{holidayCalendarSlotId} | Gets a specific holiday calendar slot.
*HolidayCalendarsApi* | [**getHolidayCalendars**](docs/Api/HolidayCalendarsApi.md#getholidaycalendars) | **GET** /v1/holiday-calendars | Gets all holiday calendars.
*HolidayCalendarsApi* | [**getLocksByCalendarId**](docs/Api/HolidayCalendarsApi.md#getlocksbycalendarid) | **GET** /v1/holiday-calendars/{holidayCalendarId}/locks | Gets all locks using the holiday calendar.
*HolidayCalendarsApi* | [**updateHolidayCalendar**](docs/Api/HolidayCalendarsApi.md#updateholidaycalendar) | **PUT** /v1/holiday-calendars/{holidayCalendarId} | Updates the holiday calendar.
*HolidayCalendarsApi* | [**updateHolidayCalendarSlot**](docs/Api/HolidayCalendarsApi.md#updateholidaycalendarslot) | **PUT** /v1/holiday-calendars/{holidayCalendarId}/slots/{holidayCalendarSlotId} | Updates a holiday calendar slot of the holiday calendar.
*LockProtocolApi* | [**getLockProtocol**](docs/Api/LockProtocolApi.md#getlockprotocol) | **GET** /v1/lock-protocol | Gets protocol of locks.
*LocksApi* | [**getLock**](docs/Api/LocksApi.md#getlock) | **GET** /v1/locks/{lockId} | Gets information of a specific lock.
*LocksApi* | [**getLocks**](docs/Api/LocksApi.md#getlocks) | **GET** /v1/locks | Gets information of all locks.
*LocksApi* | [**updateLock**](docs/Api/LocksApi.md#updatelock) | **PUT** /v1/locks/{lockId} | Updates the provided lock.
*MaintenanceTasksApi* | [**getMaintenanceTasks**](docs/Api/MaintenanceTasksApi.md#getmaintenancetasks) | **GET** /v1/maintenance-tasks | Gets all maintenance tasks.
*MediaApi* | [**assignOwnerToMedium**](docs/Api/MediaApi.md#assignownertomedium) | **POST** /v1/media/assign | Assigns a person to a medium for each provided assignment.
*MediaApi* | [**cancelMediumAssignments**](docs/Api/MediaApi.md#cancelmediumassignments) | **POST** /v1/media/cancel-assignment | Cancels assignments of media.
*MediaApi* | [**createPhones**](docs/Api/MediaApi.md#createphones) | **POST** /v1/media/phones | Adds list of new phones.
*MediaApi* | [**deactivateMedium**](docs/Api/MediaApi.md#deactivatemedium) | **POST** /v1/media/{mediumId}/deactivate | Deactivates provided medium.
*MediaApi* | [**deletePhones**](docs/Api/MediaApi.md#deletephones) | **DELETE** /v1/media/phones | Deletes provided phones.
*MediaApi* | [**emptyMedium**](docs/Api/MediaApi.md#emptymedium) | **POST** /v1/media/{mediumId}/empty | Empties provided medium.
*MediaApi* | [**generatePairingCodeForPhone**](docs/Api/MediaApi.md#generatepairingcodeforphone) | **POST** /v1/media/phones/{phoneId}/pairing | Generates a new pairing code for a phone.
*MediaApi* | [**getCard**](docs/Api/MediaApi.md#getcard) | **GET** /v1/media/cards/{cardId} | Gets information of specific card.
*MediaApi* | [**getCards**](docs/Api/MediaApi.md#getcards) | **GET** /v1/media/cards | Gets information of all cards.
*MediaApi* | [**getMedia**](docs/Api/MediaApi.md#getmedia) | **GET** /v1/media | Gets information of all media.
*MediaApi* | [**getMedium**](docs/Api/MediaApi.md#getmedium) | **GET** /v1/media/{mediumId} | Gets information of a specific medium.
*MediaApi* | [**getPhone**](docs/Api/MediaApi.md#getphone) | **GET** /v1/media/phones/{phoneId} | Gets information of specific phone.
*MediaApi* | [**getPhones**](docs/Api/MediaApi.md#getphones) | **GET** /v1/media/phones | Gets information of all phones.
*MediaApi* | [**reactivateMedium**](docs/Api/MediaApi.md#reactivatemedium) | **POST** /v1/media/{mediumId}/reactivate | Reactivates provided medium.
*MediaApi* | [**resetPinOfPhone**](docs/Api/MediaApi.md#resetpinofphone) | **POST** /v1/media/phones/{phoneId}/pin-reset | Resets PIN of the phone.
*MediaApi* | [**sendRegistrationCodeToPhone**](docs/Api/MediaApi.md#sendregistrationcodetophone) | **POST** /v1/media/phones/{phoneId}/send-registration-code | Sends pairing code to phone.
*MediaApi* | [**updateCards**](docs/Api/MediaApi.md#updatecards) | **PUT** /v1/media/cards | Updates list of cards.
*MediaApi* | [**updatePhones**](docs/Api/MediaApi.md#updatephones) | **PUT** /v1/media/phones | Updates list of phones.
*MediumProtocolApi* | [**getMediumProtocol**](docs/Api/MediumProtocolApi.md#getmediumprotocol) | **GET** /v1/medium-protocol | Gets protocol of media.
*PersonsApi* | [**createPersons**](docs/Api/PersonsApi.md#createpersons) | **POST** /v1/persons | Adds list of new persons.
*PersonsApi* | [**deletePersons**](docs/Api/PersonsApi.md#deletepersons) | **DELETE** /v1/persons | Deletes provided persons.
*PersonsApi* | [**getPerson**](docs/Api/PersonsApi.md#getperson) | **GET** /v1/persons/{personId} | Gets a specific person.
*PersonsApi* | [**getPersons**](docs/Api/PersonsApi.md#getpersons) | **GET** /v1/persons | Gets all persons.
*PersonsApi* | [**updatePersons**](docs/Api/PersonsApi.md#updatepersons) | **PUT** /v1/persons | Updates list of persons.
*PublicMgmtApi* | [**resetTestData**](docs/Api/PublicMgmtApi.md#resettestdata) | **POST** /v1/public-mgmt/reset-test-data | Resets test data in the integration environment.
*SendAKeyApi* | [**sendAKey**](docs/Api/SendAKeyApi.md#sendakey) | **POST** /v1/send-a-key | Sends a registration code to the phone and creates all necessary prerequisites if needed.
*SystemProtocolApi* | [**getSystemProtocol**](docs/Api/SystemProtocolApi.md#getsystemprotocol) | **GET** /v1/system-protocol | Gets system protocol.


## Documentation For Models

 - [Area](docs/Model/Area.md)
 - [AreaPagingList](docs/Model/AreaPagingList.md)
 - [Authorization](docs/Model/Authorization.md)
 - [AuthorizationChange](docs/Model/AuthorizationChange.md)
 - [AuthorizationCreate](docs/Model/AuthorizationCreate.md)
 - [AuthorizationDelete](docs/Model/AuthorizationDelete.md)
 - [AuthorizationInfo](docs/Model/AuthorizationInfo.md)
 - [AuthorizationPagingList](docs/Model/AuthorizationPagingList.md)
 - [AuthorizationSyncDetails](docs/Model/AuthorizationSyncDetails.md)
 - [BlacklistEntry](docs/Model/BlacklistEntry.md)
 - [CardPagingList](docs/Model/CardPagingList.md)
 - [CreditInfo](docs/Model/CreditInfo.md)
 - [Customer](docs/Model/Customer.md)
 - [Event](docs/Model/Event.md)
 - [EventDetails](docs/Model/EventDetails.md)
 - [EventPagingList](docs/Model/EventPagingList.md)
 - [FixedMediumSimpleAuthorizationCreate](docs/Model/FixedMediumSimpleAuthorizationCreate.md)
 - [HolidayCalendar](docs/Model/HolidayCalendar.md)
 - [HolidayCalendarList](docs/Model/HolidayCalendarList.md)
 - [HolidayCalendarSeries](docs/Model/HolidayCalendarSeries.md)
 - [HolidayCalendarSeriesCreate](docs/Model/HolidayCalendarSeriesCreate.md)
 - [HolidayCalendarSlot](docs/Model/HolidayCalendarSlot.md)
 - [HolidayCalendarSlotCreate](docs/Model/HolidayCalendarSlotCreate.md)
 - [HolidayCalendarSlotDelete](docs/Model/HolidayCalendarSlotDelete.md)
 - [HolidayCalendarSlotUpdate](docs/Model/HolidayCalendarSlotUpdate.md)
 - [JsonNode](docs/Model/JsonNode.md)
 - [Lock](docs/Model/Lock.md)
 - [LockDoor](docs/Model/LockDoor.md)
 - [LockFirmware](docs/Model/LockFirmware.md)
 - [LockMaintenanceTask](docs/Model/LockMaintenanceTask.md)
 - [LockPagingList](docs/Model/LockPagingList.md)
 - [LockProtocol](docs/Model/LockProtocol.md)
 - [LockProtocolDetails](docs/Model/LockProtocolDetails.md)
 - [LockProtocolEntry](docs/Model/LockProtocolEntry.md)
 - [LockProtocolEvent](docs/Model/LockProtocolEvent.md)
 - [LockProtocolPagingList](docs/Model/LockProtocolPagingList.md)
 - [MaintenanceTaskPagingList](docs/Model/MaintenanceTaskPagingList.md)
 - [Medium](docs/Model/Medium.md)
 - [MediumAssignment](docs/Model/MediumAssignment.md)
 - [MediumPagingList](docs/Model/MediumPagingList.md)
 - [PeriodicalPeriod](docs/Model/PeriodicalPeriod.md)
 - [Person](docs/Model/Person.md)
 - [PersonCreate](docs/Model/PersonCreate.md)
 - [PersonPagingList](docs/Model/PersonPagingList.md)
 - [PhoneCreate](docs/Model/PhoneCreate.md)
 - [PhonePagingList](docs/Model/PhonePagingList.md)
 - [PhoneSettings](docs/Model/PhoneSettings.md)
 - [SendAKeyPhone](docs/Model/SendAKeyPhone.md)
 - [SendAKeyRequest](docs/Model/SendAKeyRequest.md)
 - [SendAKeyResponse](docs/Model/SendAKeyResponse.md)
 - [SimpleArea](docs/Model/SimpleArea.md)
 - [SimpleAuthorizationCreate](docs/Model/SimpleAuthorizationCreate.md)
 - [SimpleLock](docs/Model/SimpleLock.md)
 - [SimpleMedium](docs/Model/SimpleMedium.md)
 - [SystemProtocol](docs/Model/SystemProtocol.md)
 - [SystemProtocolDetails](docs/Model/SystemProtocolDetails.md)
 - [SystemProtocolEntry](docs/Model/SystemProtocolEntry.md)
 - [SystemProtocolEvent](docs/Model/SystemProtocolEvent.md)
 - [SystemProtocolPagingList](docs/Model/SystemProtocolPagingList.md)
 - [AppPairedEventDetails](docs/Model/AppPairedEventDetails.md)
 - [AuthorizationSynchronizedEventDetails](docs/Model/AuthorizationSynchronizedEventDetails.md)
 - [Card](docs/Model/Card.md)
 - [OneDayAuthorizationInfo](docs/Model/OneDayAuthorizationInfo.md)
 - [PeriodicalAuthorizationInfo](docs/Model/PeriodicalAuthorizationInfo.md)
 - [PermanentAuthorizationInfo](docs/Model/PermanentAuthorizationInfo.md)
 - [Phone](docs/Model/Phone.md)
 - [SimpleAuthorizationInfo](docs/Model/SimpleAuthorizationInfo.md)
 - [UnlockingEventDetails](docs/Model/UnlockingEventDetails.md)


## Documentation For Authorization


## X-API-Key

- **Type**: API key
- **API key parameter name**: X-API-Key
- **Location**: HTTP header


## Author

office-wien@evva.com


