# CompanyWithFeatures

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**type** | **string** |  | [default to 'vpbx']
**name** | **string** |  | 
**domain_users** | **string** |  | [optional] 
**nif** | **string** |  | 
**max_calls** | **int** |  | 
**max_daily_usage** | **int** |  | 
**max_daily_usage_email** | **string** |  | [optional] 
**postal_address** | **string** |  | 
**postal_code** | **string** |  | 
**town** | **string** |  | 
**province** | **string** |  | 
**country_name** | **string** |  | 
**ipfilter** | **bool** |  | [optional] [default to false]
**on_demand_record** | **int** |  | [optional] 
**on_demand_record_code** | **string** |  | [optional] 
**externallyextraopts** | **string** |  | [optional] 
**billing_method** | **string** |  | [default to 'postpaid']
**balance** | **float** |  | [optional] [default to 0.0]
**show_invoices** | **bool** |  | [optional] [default to false]
**id** | **int** |  | [optional] 
**language** | [**\Delta/Voip\Model\Language**](Language.md) |  | [optional] 
**default_timezone** | [**\Delta/Voip\Model\Timezone**](Timezone.md) |  | [optional] 
**country** | [**\Delta/Voip\Model\Country**](Country.md) |  | 
**currency** | [**\Delta/Voip\Model\Currency**](Currency.md) |  | [optional] 
**transformation_rule_set** | [**\Delta/Voip\Model\TransformationRuleSet**](TransformationRuleSet.md) |  | 
**outgoing_ddi** | [**\Delta/Voip\Model\Ddi**](Ddi.md) |  | [optional] 
**voicemail_notification_template** | [**\Delta/Voip\Model\NotificationTemplate**](NotificationTemplate.md) |  | [optional] 
**fax_notification_template** | [**\Delta/Voip\Model\NotificationTemplate**](NotificationTemplate.md) |  | [optional] 
**invoice_notification_template** | [**\Delta/Voip\Model\NotificationTemplate**](NotificationTemplate.md) |  | [optional] 
**call_csv_notification_template** | [**\Delta/Voip\Model\NotificationTemplate**](NotificationTemplate.md) |  | [optional] 
**feature_ids** | **int[]** | Active feature ids | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


