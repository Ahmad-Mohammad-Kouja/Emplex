<?php


namespace App\Http\Requests\User\Auth;


use Illuminate\Validation\Rule;
use Roynex\InitialProjectPackage\Bases\BaseFormRequest;

class LoginRequest extends BaseFormRequest
{

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
           'email' => ['required','email',Rule::exists('users','email')],
            'password' => ['required','string']
        ];
    }


}
