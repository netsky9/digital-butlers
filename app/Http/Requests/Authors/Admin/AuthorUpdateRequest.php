<?php

namespace App\Http\Requests\Authors\Admin;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Str;

class AuthorUpdateRequest extends FormRequest
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
     * @return array
     */
    public function rules()
    {
		return [
			'name' => ['required', 'regex:/(^([А-Я]{1}[а-яё]{1,23}|[A-Z]{1}[a-z]{1,23})$)/u'],
			'last_name' => ['required', 'regex:/(^([А-Я]{1}[а-яё]{1,23}|[A-Z]{1}[a-z]{1,23})$)/u'],
			'photo_url' => ['nullable', 'regex:/(^https?:\/\/\S+(?:jpg|jpeg|png)$)/u'],
		];
    }

	/**
	 * Generate slug before validation
	 */
	protected function prepareForValidation()
	{
		$this->merge([
			'slug' => Str::slug($this->name.' '.$this->last_name, '-')
		]);
	}
}
