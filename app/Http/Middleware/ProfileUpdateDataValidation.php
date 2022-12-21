<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ProfileUpdateDataValidation
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\JsonResponse
     */
    public function handle(Request $request, Closure $next)
    {
        $validation = Validator::make($request->all(),[
            'profile_title'=>'required|min:1|max:255',
            'adress'=>'required|min:1|max:255',
            'bio_info'=>'required|min:1|max:255',
            'file' => 'nullable|mimes:png,jpg,jpeg|max:2048'
        ]);
        /**
         * Hata oluşursa Controller sınıfına gitmeden json hata mesajı dönderiliyor
         */
        if($validation->fails()){
            return response()->json(['errors'=>$validation->errors()->all()]);
        }

        /**
         * Doğrulama başarılı ise Controller sınıfına yönlendiriliyor
         */
        return $next($request);
    }
}
