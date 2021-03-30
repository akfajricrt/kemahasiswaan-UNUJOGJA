<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class PrestationRequest extends FormRequest
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
			'nama_lengkap' => 'required|max:255',
			'nim' => 'required|integer',
			'prodi' => 'required|max:255',
			'no_hp' => 'required',
			'nama_acara' => 'required|max:255',
			'institusi_pembuat_acara' => 'required|max:255',
			'peringkat_perlombaan' => 'required',
			'tanggal_pelaksanaan' => 'required|date',
			'sertifikat' => 'required|mimes:pdf|max:2048',
			'dokumentasi_acara' => 'required|image'
		];
	}
}
