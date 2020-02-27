<?php
namespace App\Http\Controllers;

use App\Models\Document;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;

class DocumentController extends Controller
{
    
    public function postCreateDocument(Request $request)
    {
        $file = $request->file('doc');

        if ($file) {

            $document = new Document(); 

            $document->filename = $_FILES['doc']['name'];
            $request->user()->userDocuments()->save($document);

            $filename = $_FILES['doc']['name'];
        
            Storage::disk('local')->put($filename, File::get($file));
        }

        return redirect()->route('dashboard');

    }

}