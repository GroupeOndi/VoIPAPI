# Delta/Voip\KamApi

All URIs are relative to *https://localhost/api/brand/*

Method | HTTP request | Description
------------- | ------------- | -------------
[**deleteUsersAddressItem**](KamApi.md#deleteUsersAddressItem) | **DELETE** /users_addresses/{id} | Removes the UsersAddress resource.
[**getUsersAddressCollection**](KamApi.md#getUsersAddressCollection) | **GET** /users_addresses | Retrieves the collection of UsersAddress resources.
[**getUsersAddressItem**](KamApi.md#getUsersAddressItem) | **GET** /users_addresses/{id} | Retrieves a UsersAddress resource.
[**postUsersAddressCollection**](KamApi.md#postUsersAddressCollection) | **POST** /users_addresses | Creates a UsersAddress resource.
[**putUsersAddressItem**](KamApi.md#putUsersAddressItem) | **PUT** /users_addresses/{id} | Replaces the UsersAddress resource.


# **deleteUsersAddressItem**
> deleteUsersAddressItem($id)

Removes the UsersAddress resource.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: bearer
$config = Delta/Voip\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Delta/Voip\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Delta/Voip\Api\KamApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | 

try {
    $apiInstance->deleteUsersAddressItem($id);
} catch (Exception $e) {
    echo 'Exception when calling KamApi->deleteUsersAddressItem: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |

### Return type

void (empty response body)

### Authorization

[bearer](../../README.md#bearer)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getUsersAddressCollection**
> \Delta/Voip\Model\UsersAddressCollection[] getUsersAddressCollection($company, $company2, $description, $description_end, $description_exact, $description_exists, $description_partial, $description_start, $id_exact, $source_address, $source_address_end, $source_address_exact, $source_address_partial, $source_address_start, $_order_description, $_order_id, $_order_source_address, $_items_per_page, $_page, $_properties)

Retrieves the collection of UsersAddress resources.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: bearer
$config = Delta/Voip\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Delta/Voip\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Delta/Voip\Api\KamApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$company = "company_example"; // string | 
$company2 = "company_example"; // string | 
$description = "description_example"; // string | 
$description_end = "description_end_example"; // string | 
$description_exact = "description_exact_example"; // string | 
$description_exists = true; // bool | 
$description_partial = "description_partial_example"; // string | 
$description_start = "description_start_example"; // string | 
$id_exact = 56; // int | 
$source_address = "source_address_example"; // string | 
$source_address_end = "source_address_end_example"; // string | 
$source_address_exact = "source_address_exact_example"; // string | 
$source_address_partial = "source_address_partial_example"; // string | 
$source_address_start = "source_address_start_example"; // string | 
$_order_description = "_order_description_example"; // string | 
$_order_id = "_order_id_example"; // string | 
$_order_source_address = "_order_source_address_example"; // string | 
$_items_per_page = 56; // int | The number of items per page
$_page = 56; // int | The collection page number
$_properties = "_properties_example"; // string | 

try {
    $result = $apiInstance->getUsersAddressCollection($company, $company2, $description, $description_end, $description_exact, $description_exists, $description_partial, $description_start, $id_exact, $source_address, $source_address_end, $source_address_exact, $source_address_partial, $source_address_start, $_order_description, $_order_id, $_order_source_address, $_items_per_page, $_page, $_properties);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling KamApi->getUsersAddressCollection: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **company** | **string**|  | [optional]
 **company2** | **string**|  | [optional]
 **description** | **string**|  | [optional]
 **description_end** | **string**|  | [optional]
 **description_exact** | **string**|  | [optional]
 **description_exists** | **bool**|  | [optional]
 **description_partial** | **string**|  | [optional]
 **description_start** | **string**|  | [optional]
 **id_exact** | **int**|  | [optional]
 **source_address** | **string**|  | [optional]
 **source_address_end** | **string**|  | [optional]
 **source_address_exact** | **string**|  | [optional]
 **source_address_partial** | **string**|  | [optional]
 **source_address_start** | **string**|  | [optional]
 **_order_description** | **string**|  | [optional]
 **_order_id** | **string**|  | [optional]
 **_order_source_address** | **string**|  | [optional]
 **_items_per_page** | **int**| The number of items per page | [optional]
 **_page** | **int**| The collection page number | [optional]
 **_properties** | **string**|  | [optional]

### Return type

[**\Delta/Voip\Model\UsersAddressCollection[]**](../Model/UsersAddressCollection.md)

### Authorization

[bearer](../../README.md#bearer)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, application/ld+json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getUsersAddressItem**
> \Delta/Voip\Model\UsersAddressDetailed getUsersAddressItem($id)

Retrieves a UsersAddress resource.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: bearer
$config = Delta/Voip\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Delta/Voip\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Delta/Voip\Api\KamApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | 

try {
    $result = $apiInstance->getUsersAddressItem($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling KamApi->getUsersAddressItem: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |

### Return type

[**\Delta/Voip\Model\UsersAddressDetailed**](../Model/UsersAddressDetailed.md)

### Authorization

[bearer](../../README.md#bearer)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, application/ld+json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postUsersAddressCollection**
> \Delta/Voip\Model\UsersAddress postUsersAddressCollection($users_address)

Creates a UsersAddress resource.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: bearer
$config = Delta/Voip\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Delta/Voip\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Delta/Voip\Api\KamApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$users_address = new \Delta/Voip\Model\UsersAddress(); // \Delta/Voip\Model\UsersAddress | The new UsersAddress resource

try {
    $result = $apiInstance->postUsersAddressCollection($users_address);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling KamApi->postUsersAddressCollection: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **users_address** | [**\Delta/Voip\Model\UsersAddress**](../Model/UsersAddress.md)| The new UsersAddress resource | [optional]

### Return type

[**\Delta/Voip\Model\UsersAddress**](../Model/UsersAddress.md)

### Authorization

[bearer](../../README.md#bearer)

### HTTP request headers

 - **Content-Type**: application/json, application/ld+json
 - **Accept**: application/json, application/ld+json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **putUsersAddressItem**
> \Delta/Voip\Model\UsersAddress putUsersAddressItem($id, $users_address)

Replaces the UsersAddress resource.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: bearer
$config = Delta/Voip\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Delta/Voip\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Delta/Voip\Api\KamApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | 
$users_address = new \Delta/Voip\Model\UsersAddress(); // \Delta/Voip\Model\UsersAddress | The updated UsersAddress resource

try {
    $result = $apiInstance->putUsersAddressItem($id, $users_address);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling KamApi->putUsersAddressItem: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |
 **users_address** | [**\Delta/Voip\Model\UsersAddress**](../Model/UsersAddress.md)| The updated UsersAddress resource | [optional]

### Return type

[**\Delta/Voip\Model\UsersAddress**](../Model/UsersAddress.md)

### Authorization

[bearer](../../README.md#bearer)

### HTTP request headers

 - **Content-Type**: application/json, application/ld+json
 - **Accept**: application/json, application/ld+json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

