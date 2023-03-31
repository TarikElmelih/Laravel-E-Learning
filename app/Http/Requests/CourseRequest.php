<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CourseRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return TRUE;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\Rule|array|string>
     */
    public function rules(): array
    {
        return [
            'title'         => 'required|max:100',
            'description'   => 'required|max:255',
            'duration'      => 'required|max:255',
            'status'        => 'required|max:100',
            'price'         => 'required|integer',
            'category_id'   => 'required|exists:categories,id',
        ];
    }

    public function messages()
    {
        return [
            'title.required'        => 'please enter tilte',
            'description.required'  => 'please enter description',
            'duration.required'     => 'please enter duration',
            'status.required'       => 'please enter status',
            'price.required'        => 'please enter price only number',
            'category_id.required'  => 'please select category',
            'category_id.exists'    => 'invalid category',

        ];
    }
}
