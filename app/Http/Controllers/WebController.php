<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Property;
use App\Models\steps_of_rent;
use App\Models\Virtual_tour;
use App\Models\Testimonial;
use App\Models\Gallery;
use App\Models\Rental;
use App\Models\RV;
use App\Models\Deal;
use App\Models\Product;
use App\Models\AboutUs;
use App\Models\categories;
use Auth;
use Hash;

class WebController extends Controller
{
    public function index ()
    {
        $abouts=AboutUs::where('status' , 1)->get();
        $products = Product::where('status',1)->get();
        $rentals=Rental::where('status' , 1)->get();
        $steprents=steps_of_rent::where('status',1)->get();
        return view('website.index', compact('products' , 'abouts' , 'steprents' , 'rentals'));
    }

    public function login()
    {
        if(Auth::check()){
            return redirect()->route('dashboard');
        }
        $page_title = 'Log In';
        return view('auth.login', compact('page_title'));
    }

    public function authenticate(Request $request)
    {
        $user = User::where('email', $request->email)->first();

        if(!empty($user) && $user->status==1 && $user->hasRole($request->user_type)){
            $credentials = $request->only('email', 'password');

            if (Auth::attempt($credentials)) {
                return redirect()->route('dashboard');
            }
            return redirect()->back()->with('error', 'Failed to login try again.!');
        }elseif(!empty($user) && $user->status==0){
            return redirect()->back()->with('error', 'Your account is not active verify your email we have sent you verification link.!');
        }else{
            return redirect()->back()->with('error', 'This is only for user login not found your account!');
        }
    }

    public function verifyEmail($token)
    {
        $user = User::where('verify_token', $token)->first();
        if(!empty($user)){
            $user->verify_token = null;
            $user->email_verified_at = date('Y-m-d H:i:s');
            if(!empty($user->temprary_email)){
                $user->email = $user->temprary_email;
                $user->temprary_email = null;
            }
            $user->update();

            return redirect()->route('login')->with('message', 'You are welcome. You can login from here.');
        }else{
            return redirect()->back()->with('error', 'Your token is expired');
        }
    }

//Reset password
    public function forgotPassword()
    {
        $page_title = 'Forgot Password';
        return view('web-views.login.forgot-password', compact('page_title'));
    }

    public function passwordResetLink(Request $request)
    {
        $this->validate($request, [
            'email' => 'required',
        ]);

        $user = User::where('email', $request->email)->where('status', 1)->first();
        if(!empty($user)){
            $page_title = 'Change Password';
            do{
                $verify_token = uniqid();
            }while(User::where('verify_token', $verify_token)->first());

            $user->verify_token = $verify_token;
            $user->update();

            $details = [
                'from' => 'password-reset',
                'title' => "Hello!",
                'body' => "You are receiving this email because we recieved a password reset request for your account.",
                'verify_token' => $user->verify_token,
            ];

            \Mail::to($user->email)->send(new \App\Mail\Email($details));

            return redirect()->route('login')->with('message', 'We have emailed your password reset link!');
        }else{
            return redirect()->back()->with('error', 'Your email address is not matched.');
        }
    }

    public function resetPassword($verify_token)
    {
        $page_title = 'Reset Password';
        return view('web-views.login.change-password', compact('page_title', 'verify_token'));
    }

    public function changePassword(Request $request)
    {
        $this->validate($request, [
            'password' => 'required|same:confirm-password',
        ]);

        $user = User::where('verify_token', $request->verify_token)->where('status', 1)->first();
        $user->password = Hash::make($request->password);
        $user->verify_token = null;
        $user->update();

        if($user){
            return redirect()->route('login')->with('message', 'You have updated password. You can login again.');
        }else{
            return redirect()->back()->with('error', 'Something went wrong try again');
        }
    }

    public function sendEmail(Request $request)
    {
        if(!isset($request->type)){
            $this->validate($request, [
                'email' => 'required|email|unique:users,email',
            ]);
        }

        $user = User::where('email', Auth::user()->email)->first();

        do{
            $verify_token = uniqid();
        }while(User::where('verify_token', $verify_token)->first());

        $user->temprary_email = $request->email;
        $user->verify_token = $verify_token;
        $user->update();

        $details = [
            'from' => 'verify',
            'title' => "We have recieved update email request. First, you need to confirm your account. Just press the button below.",
            'body' => "If you have any questions, just reply to this email—we're always happy to help out.",
            'verify_token' => $user->verify_token,
        ];

        \Mail::to($request->email)->send(new \App\Mail\Email($details));

        return redirect()->back()->with('message', 'We have sent verification email. Click on link and get activation');
    }

    public function gallery()
    {
        $testimonials=Testimonial::where('status' ,'=', 1)->get();
        $models1=Gallery::where('category_id' , 1)->get();
        $models2=Gallery::where('category_id' , 2)->get();
        $models3=Gallery::where('category_id' , 3)->get();
        return view('website.gallery' , compact('models1' , 'models2' , 'models3' , 'testimonials'));
    }

    public function rental()
    {
        $testimonials=Testimonial::where('status' ,'=', 1)->get();
        $models=Property::where('status' , 1)->paginate(10);
        $rentals=Rental::where('status' , 1)->paginate(10);
        $rvs=RV::where('status' , 1)->paginate(10);
        return view('website.product.index' , compact('models' , 'testimonials' , 'rentals' , 'rvs'));
    }

    public function single($slug)
    {
        $product = Rental::where('slug', $slug)->first();
        if(empty($product)){
            $product = Property::where('slug', $slug)->first();
        }

        if(empty($product)){
            $product = RV::where('slug', $slug)->first();
        }

        return view('website.product.single', compact('product'));

    }

    public function tour()
    {
        $testimonials=Testimonial::where('status' ,'=', 1)->get();
        return view('website.tour' , compact('testimonials'));
    }

    public function about()
    {
        $testimonials=Testimonial::where('status' ,'=', 1)->get();
        $abouts=AboutUs::where('status' ,  1)->get();
        return view('website.about'  , compact('testimonials' , 'abouts'));
    }

    public function deal()
    {
        $categories = categories::where('status', 1)->get();
        $property_best_deals = []; 
        $rental_best_deals = []; 
        $rv_best_deals = []; 
        foreach($categories as $category){
            if($category->name=="Property"){
                $property_best_deals = Deal::where('category', $category->id)->where('end_date', '>=', date('Y-m-d'))->take(3)->get();
            }else if($category->name=="Rental"){
                $rental_best_deals = Deal::where('category', $category->id)->where('end_date', '>=', date('Y-m-d'))->take(3)->get();
            }else if($category->name=="R.V"){
                $rv_best_deals = Deal::where('category', $category->id)->where('end_date', '>=', date('Y-m-d'))->take(3)->get();
            }
        }
        $testimonials=Testimonial::where('status' ,'=', 1)->get();
        return view('website.deals' , compact('testimonials' , 'property_best_deals' , 'rental_best_deals' , 'rv_best_deals'));
    }

    public function career()
    {
        $testimonials=Testimonial::where('status' ,'=', 1)->get();
        return view('website.career'  , compact('testimonials'));
    }
  
}
