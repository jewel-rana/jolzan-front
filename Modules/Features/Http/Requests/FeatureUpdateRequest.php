<?php

namespace Modules\Features\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FeatureUpdateRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules(): array
    {
        return [
            'title' => 'bail|required',
            'description' => 'bail|nullable',
            'external_link' => 'bail|nullable',
            'type' => 'bail|required|in:entertainment,feature,service'
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
