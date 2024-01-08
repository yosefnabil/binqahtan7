<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LoginRequest extends FormRequest
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
        'email'=>'required|unique:users,email|email',
        'first_name'=>'required|alpha',
        'last_name'=>'required|alpha',
        'phone'=>'required|numeric',
        'password'=>'required|min:8'
        ];
    }
    public function messages()
    {
        return[
            'email.required'=>'يرجى ادخال البريد الالكتروني',
            'email.unique'=>'هذا البريد مٌستخدم  مٌسبقا',
            'first_name.required'=>'يرجى ادخال الاسم الاول',
            'last_name.required'=>'يرجى ادخال الاسم الاخير',
            'phone.required'=>'يرجى ادخال رقم',
            'phone.numeric'=>'رقم الهاتف غير
            صحيح',
            'email.email'=>'البريد الالكتروني
            غير صحيح',
            'password.required'=>'يرجى ادخال كلمة
            مرور',
            'password.min'=>'كلمة المرور يجب
            أن تكون على الاقل 8 حروف'
        ];
    }
}
