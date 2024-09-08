<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class FileUploadController extends Controller
{
    public function store(Request $request)
    {
        // return ($request);
        // Validasi file
        $request->validate([
            'file' => 'required|file|mimes:jpg,jpeg,png,pdf|max:2048',
        ]);

        // Simpan file
        $file = $request->file('file');
        $path = $file->store('uploads', 'public');

        return $path;
    }

    public function revert($file)
    {
        // Logic untuk membatalkan upload jika diperlukan
    }

    public function restore($file)
    {
        // Logic untuk melanjutkan upload jika diperlukan
    }

    public function load($file)
    {
        // Logic untuk memuat file yang sudah ada jika diperlukan
    }
}
