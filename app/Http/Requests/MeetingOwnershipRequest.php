<?php

namespace App\Http\Requests;

use App\Meetings;
use Illuminate\Foundation\Http\FormRequest;

class MeetingOwnershipRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        $meetingId = $this->route('id');

        return Meetings::where('id', $meetingId)
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
