<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Storage;

class FileController extends Controller
{
    public function download($file){
        // Retrieve file from storage
        $filePath = Storage::disk('public')->path("upload/" . $file);

        // Check if file exists
        if (Storage::disk('public')->exists("upload/" . $file)) {
            // Return file as response
            return response()->download($filePath);
        }

        // File not found, return error response
        return response()->json(['error' => 'File not found.'], 404);
    }
}
