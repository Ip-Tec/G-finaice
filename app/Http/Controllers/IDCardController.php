<?php
// IDCardController.php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class IDCardController extends Controller
{
    public function show($filename)
    {
        // Check if the file exists in the private storage directory
        if (Storage::disk('private')->exists($filename)) {
            // Read the file contents
            $file = Storage::disk('private')->get($filename);

            // Determine the MIME type
            $mime = Storage::disk('private')->mimeType($filename);

            dd($mime);
            // Return a response with the file contents and appropriate headers
            return response($file)->header('Content-Type', $mime);
        } else {
            // Handle file not found
            abort(404);
        }
    }
}
