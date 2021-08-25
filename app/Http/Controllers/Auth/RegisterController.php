<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Models\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

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

    public function showRegistrationForm() {
        $provinces = DB::table('provinces')->get();
        return view('auth.register', ['provinces' => $provinces]);
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
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'phone' => ['required', 'string', 'min:11'],
            'address' => ['required', 'string'],
            'province_id' => ['required'],
            'regency_id' => ['required'],
            'district_id' => ['required'],
            'village_id' => ['required'],
            // 'village_id' => ['required', 'string', 'min:11'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Models\User
     */
    protected function create(array $data)
    {
        // dd($data);
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'phone' => $data['phone'],
            'address' => $data['address'],
            'village_id' => $data['village_id'],
        ]);
    }

    public function get_regencies($province_id) {
        $regencies = DB::table('regencies')->select('id','name')->where("province_id", $province_id)->orderBy('name', 'asc')->get();
        $html = '<option value="">- Pilih Kota/Kabupaten -</option>';
        foreach ($regencies as $r) {
            $html .= '<option value="'.$r->id.'">'.$r->name.'</option>';
        }
        die($html);
    }

    public function get_districts($regency_id) {
        $districts = DB::table('districts')->select('id','name')->where("regency_id", $regency_id)->orderBy('name', 'asc')->get();
        $html = '<option value="">- Pilih Kecamatan -</option>';
        foreach ($districts as $d) {
            $html .= '<option value="'.$d->id.'">'.$d->name.'</option>';
        }
        die($html);
    }

    public function get_villages($district_id) {
        $villages = DB::table('villages')->select('id','name')->where("district_id", $district_id)->orderBy('name', 'asc')->get();
        $html = '<option value="">- Pilih Kelurahan -</option>';
        foreach ($villages as $v) {
            $html .= '<option value="'.$v->id.'">'.$v->name.'</option>';
        }
        die($html);
    }
}
