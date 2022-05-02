<?php

namespace App\Http\Requests\Books\Admin;

use Carbon\Carbon;
use Illuminate\Foundation\Http\FormRequest;

use Illuminate\Support\Str;

class BookUpdateRequest extends FormRequest
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
			'title' => 'required|min:2|max:200',
			'annotation' => 'nullable|min:10|max:500',
			'release_date' => 'nullable|date',
			'cover_url' => ['nullable', 'regex:/(^https?:\/\/\S+(?:jpg|jpeg|png)$)/u'],
		];
    }

	/**
	 * Generate slug before validation
	 */
	protected function prepareForValidation()
	{
		if($this->release_date){
			$release_date = Carbon::createFromFormat('m/d/Y',  $this->release_date);
		}else{
			$release_date = null;
		}

		$this->merge([
			'slug' => Str::slug($this->title, '-'),
			'release_date' => $release_date
		]);
	}
}
