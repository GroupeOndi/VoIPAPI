# Delta/Voip\MyApi

All URIs are relative to *https://localhost/api/brand/*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getMyActiveCallsActiveCallsItem**](MyApi.md#getMyActiveCallsActiveCallsItem) | **GET** /my/active_calls | Retrieves a ActiveCalls resource.
[**getMyRegistrationSummaryRegistrationSummaryItem**](MyApi.md#getMyRegistrationSummaryRegistrationSummaryItem) | **GET** /my/registration_summary | Retrieves a RegistrationSummary resource.


# **getMyActiveCallsActiveCallsItem**
> \Delta/Voip\Model\ActiveCalls getMyActiveCallsActiveCallsItem($company)

Retrieves a ActiveCalls resource.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: bearer
$config = Delta/Voip\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Delta/Voip\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Delta/Voip\Api\MyApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$company = 56; // int | Company Id

try {
    $result = $apiInstance->getMyActiveCallsActiveCallsItem($company);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MyApi->getMyActiveCallsActiveCallsItem: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **company** | **int**| Company Id | [optional]

### Return type

[**\Delta/Voip\Model\ActiveCalls**](../Model/ActiveCalls.md)

### Authorization

[bearer](../../README.md#bearer)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getMyRegistrationSummaryRegistrationSummaryItem**
> \Delta/Voip\Model\RegistrationSummary getMyRegistrationSummaryRegistrationSummaryItem($company)

Retrieves a RegistrationSummary resource.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: bearer
$config = Delta/Voip\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Delta/Voip\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Delta/Voip\Api\MyApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$company = 56; // int | Company Id

try {
    $result = $apiInstance->getMyRegistrationSummaryRegistrationSummaryItem($company);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MyApi->getMyRegistrationSummaryRegistrationSummaryItem: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **company** | **int**| Company Id | [optional]

### Return type

[**\Delta/Voip\Model\RegistrationSummary**](../Model/RegistrationSummary.md)

### Authorization

[bearer](../../README.md#bearer)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

