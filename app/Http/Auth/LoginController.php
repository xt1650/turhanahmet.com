<?php
namespace App\Http\Auth;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Laravel\Socialite\Facades\Socialite;

class LoginController extends Controller{

    /**
     * Redirect the user to the Google authentication page.
     *
     * @return \Illuminate\Http\RedirectResponse|\Symfony\Component\HttpFoundation\RedirectResponse
     */
    public function redirectToProvider()
    {
        return Socialite::driver('google')->redirect();
    }

    /**
     * Obtain the user information from Google.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function handleProviderCallback(Request $request)
    {
//        try {
//            $user = Socialite::driver('google')->user();

        $user= Socialite::driver('google')->stateless()->user();
            dump($user);
            exit();
//        } catch (\Exception $e) {
//            dump($e);
//            exit();
//            return redirect('/login');
//        }
        // only allow people with @company.com to login
        if(explode("@", $user->email)[1] !== 'company.com'){
            return redirect()->to('/');
        }

        dump($user);
        exit();
//        // check if they're an existing user
//        $existingUser = User::where('email', $user->email)->first();
//        if($existingUser){
//            // log them in
//            auth()->login($existingUser, true);
//        } else {
//            // create a new user
//            $newUser                  = new User;
//            $newUser->name            = $user->name;
//            $newUser->email           = $user->email;
//            $newUser->google_id       = $user->id;
//            $newUser->avatar          = $user->avatar;
//            $newUser->avatar_original = $user->avatar_original;
//            $newUser->save();
//            auth()->login($newUser, true);
//        }
//        return redirect()->to('/home');
    }

}
