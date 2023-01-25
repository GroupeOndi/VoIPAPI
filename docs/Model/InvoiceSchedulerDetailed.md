# InvoiceSchedulerDetailed

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**name** | **string** |  | 
**unit** | **string** |  | [default to 'month']
**frequency** | **int** |  | 
**email** | **string** |  | 
**last_execution** | [**\DateTime**](\DateTime.md) |  | [optional] 
**last_execution_error** | **string** |  | [optional] 
**next_execution** | [**\DateTime**](\DateTime.md) |  | [optional] 
**tax_rate** | **float** |  | [optional] 
**id** | **int** |  | [optional] 
**invoice_template** | [**\Delta/Voip\Model\InvoiceTemplate**](InvoiceTemplate.md) |  | [optional] 
**brand** | [**\Delta/Voip\Model\Brand**](Brand.md) |  | 
**company** | [**\Delta/Voip\Model\Company**](Company.md) |  | 
**number_sequence** | [**\Delta/Voip\Model\InvoiceNumberSequence**](InvoiceNumberSequence.md) |  | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


