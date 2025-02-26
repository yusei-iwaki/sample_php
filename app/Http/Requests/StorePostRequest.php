<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorePostRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'image' => ['required', 'image', 'mimes:jpeg,jpg,png'],
            'caption' => ['required', 'string', 'max:255'],
        ];
    }

    public function messages(): array
    {
        return [
            'image.required' => '画像を選択してください。',
            'image.image' => '画像形式が正しくありません。',
            'image.mimes' => '画像形式が正しくありません。',
            'caption.required' => 'キャプションは必須です。',
            'caption.max' => 'キャプションは255文字以内で記入してください。',
        ];
    }
}
