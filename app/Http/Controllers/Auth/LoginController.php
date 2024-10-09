<?php

namespace App\Http\Controllers\Auth;
use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;



class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/admin';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
        {
            $this->middleware('guest:web')->except('logout');
            $this->middleware('guest:coach')->except('logout');
            $this->middleware('guest:member')->except('logout');
        }

        public function showCoachLoginForm()
        {
            return view('auth.login', ['url' => 'coach']);
        }

        public function coachLogin(Request $request)
        {
            $this->validate($request, [
                'email'   => 'required|email',
                'password' => 'required|min:6'
            ]);

            if (Auth::guard('coach')->attempt(['email' => $request->email, 'password' => $request->password], $request->get('remember'))) {

                return redirect()->intended('/CoachTemp/layout/dashboard');
            }
            return back()->withInput($request->only('email', 'remember'));
        }


        public function showMemberLoginForm()
    {
        return view('auth.login', ['url' => 'member']);
    }

    public function MemberLogin(Request $request)
    {
        $this->validate($request, [
            'email'   => 'required|email',
            'password' => 'required|min:6'
        ]);

        if (Auth::guard('member')->attempt(['email' => $request->email, 'password' => $request->password], $request->get('remember'))) {

            return redirect()->intended('MemberTemp/layout/dashboard');
        }
        return back()->withInput($request->only('email', 'remember'));
    }



    // public function logout(Request $request) {
    //     Auth::logout();
    //     return redirect('/');
    //   }



    public function logout()
    {

      Auth::guard('member')->logout();
      Auth::guard('web')->logout();
      Auth::guard('coach')->logout();
      return redirect('/');
    }

}
