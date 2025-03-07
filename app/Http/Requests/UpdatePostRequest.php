<?php

namespace App\Http\Requests;

use App\Models\Post;
use Illuminate\Foundation\Http\FormRequest;

class UpdatePostRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        $post = Post::find($this->route('post'))->first();
        return $this->user()->can('update', $post);
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'caption' => ['required', 'string', 'max:255'],
        ];
    }

    public function messages(): array
    {
        return [
            'caption.required' => 'キャプションは必須です。',
            'caption.max' => 'キャプションは255文字以内で記入してください。',
        ];
    }
}
