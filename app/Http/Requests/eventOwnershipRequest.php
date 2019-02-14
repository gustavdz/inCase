<?php

namespace App\Http\Requests;

use App\Events;
use Illuminate\Foundation\Http\FormRequest;

class eventOwnershipRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        $eventId = $this->route('id');

        return Events::where('id', $eventId)
            ->where('user_id', $this->user()->id)->exists();
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            //
        ];
    }
}
