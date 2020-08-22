<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class DataPenjualanRequest extends FormRequest
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
            'tanggal' => 'date',
            'nama_pembeli' => 'required|max:255',
            'id_barang' => 'required|integer',
            'banyak' => 'required|integer',
            'id_harga' => 'integer',
            // 'total' => 'required|integer',
            // 'modal' => 'required|integer',
            // 'untung' => 'required|integer',
        ];
    }
}
