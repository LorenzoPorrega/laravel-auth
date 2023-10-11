<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;

class ProjectUpsertRequest extends FormRequest
{
	/**
	 * Determine if the user is authorized to make this request.
	 */
	public function authorize(): bool
	{
		// retrieve the logged authenticated user
		$user = Auth::user();

		// if user->mail === "" then return true, user is authorized (to do something on the website)
		if ($user->email === "porronet99@hotmail.it") {
			return true;
		}
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
			"title" => "required|string",
			"language" => "required|string",
			"link" => "required|string",
			"description" => "required|string",
			"thumb" => "required|file",
			"release" => "required|date",
		];
	}

	/**
	 * Get the error messages for the defined validation rules.
	 *
	 * @return array<string, string>
	 */
	public function messages(): array
	{
		return [
			'title.required' => 'A title is required',
			'link.required' => 'A link to the repository is required',
			'description.required' => 'A description is required',
			'thumb.required' => 'A thumb link is required',
			'language.required' => 'The repository language is required',
			'release.required' => 'The release date is required',
		];
	}
}
