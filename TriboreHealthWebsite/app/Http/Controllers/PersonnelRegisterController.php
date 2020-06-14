<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Providers\RouteServiceProvider;
use App\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class PersonnelRegisterController extends Controller
{
    use RegistersUsers;


    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    public function showRegistrationForm()
    {
        return view('auth.doctor-register',['specs'=>Collect(\App\Specialization::all())]);
    }

    public function register(Request $request)
    {
        if ($files = $request->file('license_document')) {
            $fileName = $request->id_number . "." . $files->getClientOriginalExtension();
            $files->move(public_path('uploads'), $fileName);
            $data['license_document'] = "$fileName";
        }
        $this->validator($request->all())->validate();

        event(new Registered($user = $this->create($request->all())));

        $this->guard()->login($user);

        if ($response = $this->registered($request, $user)) {
            return $response;
        }

        return $request->wantsJson()
            ? new Response('', 201)
            : redirect()->intended('/dashboard');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'first_name' => ['required', 'string'],
            'last_name' => ['required', 'string'],
            'phone_number' => ['required'],
            'email' => ['required', 'string', 'max:255','unique:users'],
            'password' => ['required', 'string', 'min:8'],
            'specialization_id' => ['required'],
            'id_number' => ['required'],
            'license_no' => ['required'],
            'hospital_id' => ['required'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return User
     */
    protected function create(array $data)
    {
        return User::create([
            'first_name' => $data['first_name'],
            'last_name' => $data['last_name'],
            'phone_number' => $data['phone_number'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'role_id' => 2,
            'id_number' => $data['id_number'],
            'license_document' => "{$data['id_number']}".'.pdf',
            'license_no' => $data['license_no'],
            'hospital_id' => $data['hospital_id'],
            'specialization_id' => $data['specialization_id'],
        ]);
    }

}
