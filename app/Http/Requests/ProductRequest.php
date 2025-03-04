<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'name' => ['required', 'string', 'max:255'],
            'description' => ['nullable', 'string'],
            'price' => ['required', 'numeric', 'min:0', 'max:999999.99'],
            'category_id' => ['required', 'exists:categories,id'],
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Название продукта обязательно для заполнения',
            'name.max' => 'Название продукта не должно превышать 255 символов',
            'price.required' => 'Цена обязательна для заполнения',
            'price.numeric' => 'Цена должна быть числом',
            'price.min' => 'Цена не может быть отрицательной',
            'price.max' => 'Цена не может превышать 999999.99',
            'category_id.required' => 'Категория обязательна для выбора',
            'category_id.exists' => 'Выбранная категория не существует',
        ];
    }
}
