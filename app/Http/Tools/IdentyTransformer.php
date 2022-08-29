<?php
namespace App\Http\Tools;
use Illuminate\Support\Facades\Crypt;

class IdentyTransformer{
    private $key = 'turhan1340';

    private function Encrytion($id){
           return Crypt::encryptString($id);
    }
}
