# Delta/Voip\AuthApi

All URIs are relative to *https://localhost/api/brand/*

Method | HTTP request | Description
------------- | ------------- | -------------
[**postAdminAuthenticate**](AuthApi.md#postAdminAuthenticate) | **POST** /admin_login | Retrieve JWT token
[**postAuthTokenExchangeTokenCollection**](AuthApi.md#postAuthTokenExchangeTokenCollection) | **POST** /token/exchange | Creates a Token resource.
[**postTokenRefresh**](AuthApi.md#postTokenRefresh) | **POST** /token/refresh | Retrieve JWT token


# **postAdminAuthenticate**
> postAdminAuthenticate($username, $password)

Retrieve JWT token

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: bearer
$config = Delta/Voip\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Delta/Voip\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Delta/Voip\Api\AuthApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$username = "username_example"; // string | 
$password = "password_example"; // string | 

try {
    $apiInstance->postAdminAuthenticate($username, $password);
} catch (Exception $e) {
    echo 'Exception when calling AuthApi->postAdminAuthenticate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **username** | **string**|  |
 **password** | **string**|  |

### Return type

void (empty response body)

### Authorization

[bearer](../../README.md#bearer)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postAuthTokenExchangeTokenCollection**
> \Delta/Voip\Model\Token postAuthTokenExchangeTokenCollection($token, $username)

Creates a Token resource.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: bearer
$config = Delta/Voip\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Delta/Voip\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Delta/Voip\Api\AuthApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$token = "token_example"; // string | Platform admin token
$username = "username_example"; // string | Target brand admin user name

try {
    $result = $apiInstance->postAuthTokenExchangeTokenCollection($token, $username);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AuthApi->postAuthTokenExchangeTokenCollection: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **token** | **string**| Platform admin token |
 **username** | **string**| Target brand admin user name |

### Return type

[**\Delta/Voip\Model\Token**](../Model/Token.md)

### Authorization

[bearer](../../README.md#bearer)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postTokenRefresh**
> postTokenRefresh($refresh_token)

Retrieve JWT token

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: bearer
$config = Delta/Voip\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Delta/Voip\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Delta/Voip\Api\AuthApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$refresh_token = "refresh_token_example"; // string | 

try {
    $apiInstance->postTokenRefresh($refresh_token);
} catch (Exception $e) {
    echo 'Exception when calling AuthApi->postTokenRefresh: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **refresh_token** | **string**|  |

### Return type

void (empty response body)

### Authorization

[bearer](../../README.md#bearer)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

