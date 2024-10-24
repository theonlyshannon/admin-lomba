<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CourseStoreRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'mentor_id' => 'required|exists:mentors,id',
            'course_category_id' => 'required|exists:course_categories,id',
            'title' => 'required|string|max:255',
            'slug' => 'required|string|max:255|unique:courses,slug',
            'description' => 'required|string',
            'thumbnail' => 'required|image|mimes:jpg,jpeg,png|max:2048',
            'trailer' => ['required', 'regex:/^(https?:\/\/)?(www\.)?youtube\.com\/embed\/[a-zA-Z0-9_-]{11}$/'],
            'is_favourite' => 'nullable|in:0,1',
        ];
    }

    /**
     * Get the validation attributes that apply to the request.
     *
     * @return array<string, string>
     */
    public function attributes(): array
    {
        return [
            'mentor_id' => 'Mentor',
            'course_category_id' => 'Kategori Kursus',
            'title' => 'Judul',
            'slug' => 'Slug',
            'description' => 'Deskripsi',
            'thumbnail' => 'Thumbnail',
            'trailer' => 'Trailer',
            'is_favourite' => 'Favorit',
        ];
    }

    /**
     * Get the validation messages that apply to the request.
     *
     * @return array<string, string>
     */
    public function messages(): array
    {
        return [
            'required' => ':attribute tidak boleh kosong',
            'image' => ':attribute harus berupa gambar',
            'mimes' => ':attribute harus berupa file dengan format: :values',
            'max' => ':attribute tidak boleh lebih dari :max KB',
            'string' => ':attribute harus berupa teks',
            'exists' => ':attribute tidak ditemukan',
            'unique' => ':attribute sudah digunakan',
            'regex' => ':attribute harus berupa link YouTube yang valid',
        ];
    }
}