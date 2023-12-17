<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EventRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'title' => ['required'],
            'text' => ['required'],
            'user_id' => ['required', 'integer'],
            'member_ids' => ['required'],
        ];
    }

    public function authorize(): bool
    {
        return true;
    }
}
