<?php

namespace App\Http\Controllers\Frontend\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\RegisterRequest;
use App\Helpers\Frontend\Auth\Socialite;
use App\Events\Frontend\Auth\UserRegistered;
use App\Mail\Frontend\Auth\AdminRegistered;
use App\Models\Auth\User;
use Arcanedev\NoCaptcha\Rules\CaptchaRule;
use Illuminate\Auth\Events\Registered;
use Illuminate\Foundation\Auth\RegistersUsers;
use App\Repositories\Frontend\Auth\UserRepository;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\ClosureValidationRule;

/**
 * Class RegisterController.
 */
class RegisterController extends Controller
{
    use RegistersUsers;

    /**
     * @var UserRepository
     */
    protected $userRepository;

    /**
     * RegisterController constructor.
     *
     * @param UserRepository $userRepository
     */
    public function __construct(UserRepository $userRepository)
    {
        $this->userRepository = $userRepository;
    }

    /**
     * Where to redirect users after login.
     *
     * @return string
     */
    public function redirectPath()
    {
        return route(home_route());
    }

    /**
     * Show the application registration form.
     *
     * @return \Illuminate\Http\Response
     */
    public function showEmployeeRegistrationForm()
    {
        abort_unless(config('access.registration'), 404);

        return view('frontend.auth.register_employee')
            ->withSocialiteLinks((new Socialite)->getSocialLinks());
    }

    public function showCandidateRegistrationForm()
    {
        abort_unless(config('access.registration'), 404);

        return view('frontend.auth.register_candidate')
            ->withSocialiteLinks((new Socialite)->getSocialLinks());
    }


    /**
     * @param RegisterRequest $request
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     * @throws \Throwable
     */
    public function register(Request $request)
    {
        // dd($request);

        $request->validate(
            [
                'education_qulification' => 'required',
                'professional_background' => 'required'
            ],
            [
                'education_qulification.required' => 'Please fill Educational Qualifications section',
                'professional_background.required' => ' and Professional Background section'
            ]
        );

        $validator = Validator::make($request->all(), [
            'first_name' => 'required|max:255',
            'last_name' => 'required|max:255',
            'email' => 'required|email|max:255|unique:users',
            'password' => 'required|min:6|confirmed',
            'g-recaptcha-response' => (config('access.captcha.registration') ? ['required',new CaptchaRule] : ''),
        ],[
            'g-recaptcha-response.required' => __('validation.attributes.frontend.captcha'),
        ]);

        if ($validator->passes()) {
            // Store your user in database
            if($request->file('cv'))
            {
                    $preview_fileName = time().'_'.rand(1000,10000).'.'.$request->cv->getClientOriginalExtension();
                    $fullURLsPreviewFile = $request->cv->move(public_path('files/cv'), $preview_fileName);
                    $image_url = $preview_fileName;

            }else{
                    $image_url = null;
            }


            $education_qulification = $request->education_qulification;
            $final_array = [];
                        
            foreach($education_qulification as $key => $education){
                $item_group = [                            
                    'education' => $education
                ];
                array_push($final_array,$item_group);
            } 

            $professional_background = $request->professional_background;
            $final_array_two = [];
                        
            foreach($professional_background as $key => $professional){
                $item_group_two = [                            
                    'professional' => $professional
                ];
                array_push($final_array_two,$item_group_two);
            } 


            event(new Registered($user = $this->create(array_merge($request->all(), ['cv' => $image_url, 'education_qulification' => $final_array, 'professional_background' => $final_array_two,]))));

            return redirect()-> route('frontend.auth.login');

        }

        return back()->withErrors($validator);;
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array $data
     * @return \App\Models\User
     */
    protected function create(array $data)
    {
        $user = User::create([
            'first_name' => $data['first_name'],
            'last_name' => $data['last_name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
        ]);

                $user->dob = isset($data['dob']) ? $data['dob'] : NULL ;
                $user->phone = isset($data['phone']) ? $data['phone'] : NULL ;
                $user->gender = isset($data['gender']) ? $data['gender'] : NULL;
                $user->age = isset($data['age']) ? $data['age'] : NULL;
                $user->type = isset($data['type']) ? $data['type'] : NULL;
                $user->tel = isset($data['tel']) ? $data['tel'] : NULL;
                $user->address = isset($data['address']) ? $data['address'] : NULL;
                $user->city =  isset($data['city']) ? $data['city'] : NULL;
                $user->pincode = isset($data['pincode']) ? $data['pincode'] : NULL;
                $user->state = isset($data['state']) ? $data['state'] : NULL;
                $user->country = isset($data['country']) ? $data['country'] : NULL;

                $user->profile_type = isset($data['profile_type']) ? $data['profile_type'] : NULL;
                $user->company_name = isset($data['company_name']) ? $data['company_name'] : NULL;
                $user->postion_vacant = isset($data['postion_vacant']) ? $data['postion_vacant'] : NULL;
                $user->comments = isset($data['comments']) ? $data['comments'] : NULL;
                $user->contact_number = isset($data['contact_number']) ? $data['contact_number'] : NULL;
                $user->education_qulification = isset($data['education_qulification']) ? $data['education_qulification'] : NULL;
                $user->professional_background = isset($data['professional_background']) ? $data['professional_background'] : NULL;
                $user->country = isset($data['country']) ? $data['country'] : NULL;
                $user->cv = isset($data['cv']) ? $data['cv'] : NULL;

                $user->save();

        $userForRole = User::find($user->id);
        $userForRole->confirmed = 1;
        $userForRole->save();
        $userForRole->assignRole('student');

        if(config('access.users.registration_mail')) {
            $this->sendAdminMail($user);
        }

        return $user;
    }

    private function sendAdminMail($user)
    {
        $admins = User::role('administrator')->get();

        foreach ($admins as $admin){
            \Mail::to($admin->email)->send(new AdminRegistered($user));
        }
    }



}
