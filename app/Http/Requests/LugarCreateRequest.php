<?php

namespace LawyerSoft\Http\Requests;

use LawyerSoft\Http\Requests\Request;

class LugarCreateRequest extends Request
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
            'nombre'=> 'required|unique:lugars|max:40',
        ];
    }
}
