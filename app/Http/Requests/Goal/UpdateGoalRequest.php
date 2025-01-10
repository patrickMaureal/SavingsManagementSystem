<?php

namespace App\Http\Requests\Goal;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UpdateGoalRequest extends FormRequest
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
          'name' => [
						'required',
            'string',
            'max:255',
            Rule::unique('goals')->ignore($this->goal->id),
					],
					'start_date' => [	
						'required',
            'date',
					],
					'end_date' => [  
            'required',
            'date',
            'after:start_date',
          ],
					'target_amount' => [
            'required',
            'numeric',
          ],
        ];
    }
}
