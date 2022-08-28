<?php

namespace App\Http\Controllers;

use App\Http\Tools\FileTools;
use Illuminate\Http\Request;
use App\Models\AboutModel;
class About extends Controller
{

    private AboutModel $about;
    private FileTools $file;

    public function __construct()
    {
        $this->about = new AboutModel();
        $this->file = new FileTools();
    }

    public function show(Request $request){
        return view('admin.post.create_aboutme');
    }


    public function SaveAboutMe(Request $request){
        $file_info = $this->file->SavePostFile($request->file('image'));
        $this->about->saveAboutMe($request,$file_info);

        return redirect()->back()->with('message', 'Hakkımda Bilgi Kaydetme İşlemi Başarılı');
    }
}
