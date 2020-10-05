<?php

namespace $NAMESPACE_API_REQUEST$;

use $NAMESPACE_MODEL$\$MODEL_NAME$;
use InfyOm\Generator\Request\APIRequest;

class Update$MODEL_NAME$APIRequest extends APIRequest
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
        $rules = $MODEL_NAME$::$rules;

        switch ($this->method()) {
            case 'POST':
                return $rules
            default:
                $UNIQUE_RULES$
                return $rules;
        }
    }
}
