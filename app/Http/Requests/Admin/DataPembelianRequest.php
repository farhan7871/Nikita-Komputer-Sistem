<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class DataPembelianRequest extends FormRequest
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
            //
            'tanggal' => 'date',
            'id_toko' => 'required|integer',
            'id_barang' => 'required|integer',
            'banyak' => 'max:255',
            'harga' => 'max:255',
            // 'total' => 'max:255',
            'jual' => 'max:255'
        ];
    }
}
