<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Response;

class ImageController extends Controller
{

    public function show($path)
    {
        $filePath = 'public/' . $path;

        if (!Storage::exists($filePath)) {
            abort(404);
        }

        $file = Storage::get($filePath);
        $mimeType = Storage::mimeType($filePath);

        return response($file, 200)->header('Content-Type', $mimeType);
    }
}
