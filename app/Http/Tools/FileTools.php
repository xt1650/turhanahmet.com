<?php
namespace App\Http\Tools;
use Exception;
use Intervention\Image\ImageManager;

class FileTools{

    public function __construct()
    {
        $this->image = new ImageManager();

    }

    /**
     * Resim Kaydetme Fonksiyonu
     * @param $file
     * @return array|false
     */
    public function SavePostFile($file){

//        if (!is_dir(storage_path("public/post-images"))) {
//            dump(storage_path("public/post-images"));
//            mkdir(storage_path("public/post-images"), 0775, true);
//
//        }
//        dump("devam");
        $extension =$file->extension();
        $size = $file->getSize();

        $fileName ='images/'.time().'_'.random_int(0,100).'.'.$extension;



        try{
            $this->image->make($file)->fit(1280 , 720)->save(public_path($fileName));

//            $this->image->make($file)->save($fileName);
            return array('extension'=>$extension,'size'=>$size,'filename'=>$fileName);


        }catch (Exception $exception){
            dump($exception);
            echo $exception->getMessage();
            return false;
        }



    }
}
