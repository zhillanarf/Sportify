<?php

namespace App\Http\Requests;


use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;

class UpdateWorkoutRequest extends FormRequest
{
    public function authorize()
    {
        return Auth::user()->role == 'admin'; // Sesuaikan dengan kebutuhan otorisasi Anda
    }

    public function rules(): array
    {
        return [
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ];
    }

    public function messages(): array
    {
        return [
            'name.required' => 'Name is required',
            'description.required' => 'Description is required',
            'image.image' => 'The file must be an image',
            'image.mimes' => 'The image must be a file of type: jpeg, png, jpg, gif, svg',
            'image.max' => 'The image may not be greater than 2MB',
        ];
    }
}
