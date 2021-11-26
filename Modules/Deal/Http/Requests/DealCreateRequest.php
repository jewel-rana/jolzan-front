<?php

namespace Modules\Deal\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class DealCreateRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules(): array
    {
        return [
            'name' => 'bail|required|unique:deals,name',
            'brand_id' => 'bail|required|numeric|exists:brands,id',
            'package_id' => 'bail|required|numeric|exists:packages,id',
            'deal_type_id' => 'bail|required|integer',
            'attribute' => 'bail|required|array'
        ];
    }

    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize(): bool
    {
        return true;
    }
}
