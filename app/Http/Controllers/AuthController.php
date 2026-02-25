<?php


namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Password;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function notAuth()
    {
      return view("auth.not-auth");  
    }
    public function login()
    {
        return view("auth.login");
    }

    public function storeLogin(Request $request)
    {
        // 1. Bolji način za proveru praznih polja (Validacija)
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ], [
            'email.required' => 'Morate uneti email!',
            'password.required' => 'Morate uneti lozinku!',
        ]);
    
        // 2. Pokušaj logovanja
        if (Auth::attempt($request->only("email", "password"))) {
            return redirect()->route("loggedin.dashboard");
        }
    
        // 3. Ako dođe do ovde, znači da Auth::attempt NIJE uspeo
        // Proveravamo da li korisnik uopšte postoji da bismo dali preciznu poruku
        $userExists = \App\Models\User::where('email', $request->email)->exists();
    
        if (!$userExists) {
            return redirect()->back()
                ->with("error", "Korisnik sa ovim emailom ne postoji!")
                ->withInput(); // Vraća uneti email u polje
        }
    
        // Ako korisnik postoji, znači da je samo lozinka pogrešna
        return redirect()->back()
            ->with("error", "Pogrešna lozinka, pokušajte ponovo.")
            ->withInput();
    }

    public function logout(){
        Auth::logout();
        return redirect()->route("login");
    }


    public function register(){
        return view("auth.register");
    }

    public function storeRegister(Request $request){
        $request->validate([
            "name" => "required",
            "email" => "required|email|unique:users",
            "password" => "required|min:4"
        ]);
        
        //if validation went thru
        User::create([
            "name" => $request->name,
            "email" => $request->email,
            "password" => $request->password,
        ]);
        
        return redirect()->route("loggedin.dashboard")->with("success", "Registrated successfully");
    }


    public function sendResetLink(Request $request){
        $request->validate(['email' => 'required|email']) ;

        $status = Password::sendResetLink($request->only('email'));

        return $status === Password::RESET_LINK_SENT ? back()->with('success', 'Link sent to your email!') : back()->withErrors(['email' => __($status)]);
    }

    public function updatePassword(Request $request){
        $request->validate(
            [
                'token' => 'required',
                'email'=> 'required|email',
                'password'=> 'required|min:4|confirmed'
            ]);

            $status = Password::reset(
                $request->only('email', 'password', 'password_confirmation', 'token'),
                function ($user, $password){
                    $user->forceFill(['password' => Hash::make($password)])->save();
                }
            );

            return $status ===  Password::PASSWORD_RESET ? back()->with('success','Password changed!') : back()->withErrors(['email' => __($status)]);
    }

    public function showForgotForm(){
        return view('auth.forgot-password');
    }

    public function showResetForm(Request $request){
        $token = $request->query('token');
        $email = $request->query('email');
    
        return view('auth.reset-password', [
            'token' => $token, 
            'email' => $email
        ]);    }

}
