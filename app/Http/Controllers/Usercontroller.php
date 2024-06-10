<?php

namespace App\Http\Controllers;
use App\Models\Scholarship;
use Illuminate\Support\Facades\Session;
use App\Models\Coursee;
use App\Models\Job;
use App\Models\University;
use App\Models\wishlistscholarship;
use App\Models\wishlistuniversity;
use App\Models\wishlistjob;
use App\Models\wishlistcourse;
use Illuminate\Http\Request;

class Usercontroller extends Controller
{
    public function index(){
        $user = Session::get('user');
        if($user && $user->role=='user'){
            $universities = University::all();
            $course = Coursee::all();
            $job = Job::all();
            $scholarship = Scholarship::all();
            return view("index", [
                'universities' => $universities,
                'job' => $job,
                'course'=>$course,
                'scholarship'=>$scholarship,
                'user'=>$user,
            ]);
        }
        else{
            $universities = University::all();
            $course = Coursee::all();
            $job = Job::all();
            $scholarship = Scholarship::all();
            return view("index", [
                'universities' => $universities,
                'job' => $job,
                'course'=>$course,
                'scholarship'=>$scholarship,
                'user'=> "",
            ]);
        }
        
    }
    
    public function contact(){
        $user = Session::get('user');
        if($user && $user->role=='user'){
            
            return view("contactus",compact('user'));
        }
        else{
            $user="";
            return view("contactus",compact('user'));
        }
    }
    public function guide(){
        $user = Session::get('user');
        if($user && $user->role=='user'){
            
            return view("guide",compact('user'));
        }
        else{
            $user="";
            return view("guide",compact('user'));
        }
    }
    public function scholarshipdetail($id){
        $user = Session::get('user');
        if($user && $user->role=='user'){
            
            $scholarship = Scholarship::find($id); // Assuming you have a Scholarship model
            return view("scholarshipdetail", compact('scholarship', 'user'));
        }
        else{
            $user="";
            $scholarship = Scholarship::find($id); // Assuming you have a Scholarship model
            return view("scholarshipdetail", compact('scholarship', 'user'));
        }
    }
    public function jobdetail($id){
        $user = Session::get('user');
        if($user && $user->role=='user'){     
            $job = Job::find($id); // Assuming you have a Scholarship model
            return view("jobdetail", compact('job', 'user'));
        }
        else{
            $user="";
            $job = Job::find($id); // Assuming you have a Scholarship model
            return view("jobdetail", compact('job', 'user'));
        }
    }
    public function coursedetail($id){
        $user = Session::get('user');
        if($user && $user->role=='user'){
            $course = Coursee::find($id); // Assuming you have a Scholarship model
            return view("coursedetail", compact('course', 'user'));
        }
        else{
            $user="";
            $course = Coursee::find($id); // Assuming you have a Scholarship model
            return view("coursedetail", compact('course', 'user'));
        }
    }
    public function universitydetail($id){
        $user = Session::get('user');
        if($user && $user->role=='user'){
            $university = University::find($id); // Assuming you have a Scholarship model
            return view("universitydetail", compact('university', 'user'));
        }
        else{
            $user="";
            $university = University::find($id); // Assuming you have a Scholarship model
            return view("universitydetail", compact('university', 'user'));
        }
    }
    public function course(){
        $user = Session::get('user');
        if($user && $user->role=='user'){           
            $course = Coursee::all(); // Assuming you have a Scholarship model
            return view("course", compact('course','user'));
        }
        else{
            $user="";
            $course = Coursee::all(); // Assuming you have a Scholarship model
            return view("course", compact('course','user'));
        }
    }
    public function scholarship(){
        $user = Session::get('user');
        if($user && $user->role=='user'){
           
            $scholarship = Scholarship::all(); // Assuming you have a Scholarship model
            return view("scholarship", compact('scholarship','user'));
        }
        else{
            $user="";
            $scholarship = Scholarship::all(); // Assuming you have a Scholarship model
            return view("scholarship", compact('scholarship','user'));
        }
    }
    public function job(){
        $user = Session::get('user');
        if($user && $user->role=='user'){
            
            $job = Job::all(); // Assuming you have a Scholarship model
            return view("job", compact('job','user'));
        }
        else{
            $user="";
            $job = Job::all(); // Assuming you have a Scholarship model
            return view("job", compact('job','user'));
        }
    }
    
    public function wishlistscholarship(Request $request){
         // Validate the incoming request
         $request->validate([
            'user_id' => 'required|exists:registers,id',
            'scholarship_id' => 'required|exists:scholarships,id',
        ]);

        // Check if the combination of user_id and scholarship_id already exists
        $exists = wishlistscholarship::where('user_id', $request->user_id)
                    ->where('scholarship_id', $request->scholarship_id)
                    ->exists();

        if ($exists) {
            return redirect()->back()->with('success', 'This scholarship is already in your wishlist.');
        }

        // Create a new wishlist entry
        wishlistscholarship::create([
            'user_id' => $request->user_id,
            'scholarship_id' => $request->scholarship_id,
        ]);

        return redirect()->back()->with('success', 'Scholarship added to wishlist successfully.');
    }
    public function wishlistcourse(Request $request){
        // Validate the incoming request
        $request->validate([
           'user_id' => 'required|exists:registers,id',
           'course_id' => 'required|exists:coursees,id',
       ]);

       // Check if the combination of user_id and scholarship_id already exists
       $exists = wishlistcourse::where('user_id', $request->user_id)
                   ->where('course_id', $request->course_id)
                   ->exists();

       if ($exists) {
           return redirect()->back()->with('success', 'This course is already in your wishlist.');
       }

       // Create a new wishlist entry
       wishlistcourse::create([
           'user_id' => $request->user_id,
           'course_id' => $request->course_id,
       ]);

       return redirect()->back()->with('success', 'Course added to wishlist successfully.');
   }
   public function wishlistjob(Request $request){
    // Validate the incoming request
            $request->validate([
            'user_id' => 'required|exists:registers,id',
            'job_id' => 'required|exists:jobs,id',
        ]);

        // Check if the combination of user_id and scholarship_id already exists
        $exists = wishlistjob::where('user_id', $request->user_id)
                    ->where('job_id', $request->job_id)
                    ->exists();

        if ($exists) {
            return redirect()->back()->with('success', 'This job is already in your wishlist.');
        }

        // Create a new wishlist entry
        wishlistjob::create([
            'user_id' => $request->user_id,
            'job_id' => $request->job_id,
        ]);

        return redirect()->back()->with('success', 'Job added to wishlist successfully.');
    }
    public function wishlistuniversity(Request $request){
        // Validate the incoming request
        $request->validate([
        'user_id' => 'required|exists:registers,id',
        'university_id' => 'required|exists:scholarships,id',
    ]);

    // Check if the combination of user_id and scholarship_id already exists
    $exists = wishlistuniversity::where('user_id', $request->user_id)
                ->where('university_id', $request->university_id)
                ->exists();

    if ($exists) {
        return redirect()->back()->with('success', 'This university is already in your wishlist.');
    }

    // Create a new wishlist entry
    wishlistuniversity::create([
        'user_id' => $request->user_id,
        'university_id' => $request->university_id,
    ]);

    return redirect()->back()->with('success', 'University added to wishlist successfully.');
    }
    public function wishlist(){
        $user = Session::get('user');
        if($user && $user->role=='user'){
            $universities = wishlistuniversity::all();
            $scholarship = wishlistscholarship::all();
            $course = wishlistcourse::all();
            $job = wishlistjob::all();
    
            return view("wishlist", compact('user','universities','scholarship','course','job'));
        }
        
        else {
           
            return redirect()->route('login')->withErrors(['message' => 'Please log in to access this page']);
         }
    }
    public function wishlistscholarshipdelete(Request $request, $id)
    {
        $delete = wishlistscholarship::where('id',$id);
        $delete->delete();
        return redirect('/wishlist');
    }
    public function wishlistuniversitydelete(Request $request, $id)
    {
        $delete = wishlistuniversity::where('id',$id);
        $delete->delete();
        return redirect('/wishlist');
    }
    public function wishlistcoursedelete(Request $request, $id)
    {
        $delete = wishlistcourse::where('id',$id);
        $delete->delete();
        return redirect('/wishlist');
    }
    public function wishlistjobdelete(Request $request, $id)
    {
        $delete = wishlistjob::where('id',$id);
        $delete->delete();
        return redirect('/wishlist');
    }
    public function wishlistlogin(){
        $user="";
        if($user==""){
            return redirect()->route('login')->withErrors(['message' => 'Please log in to add this item in wishlist']);
       }
    }
}
