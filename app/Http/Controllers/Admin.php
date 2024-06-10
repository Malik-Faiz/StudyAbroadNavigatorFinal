<?php

namespace App\Http\Controllers;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage; 
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use App\Models\University;
use App\Models\Register;
use App\Models\Scholarship;
use App\Models\Coursee;
use App\Models\Job;

use Illuminate\Http\Request;

class Admin extends Controller
{
    
    public function course(){
        $user = Session::get('user');
        if ($user && $user->role == 'admin') {
        
            $universities = University::all();
            $course = Coursee::all();
            return view("Admin.Course", [
                'universities' => $universities,
                'user' => $user,
                'course'=>$course,
            ]);
        } else {
           
            return redirect()->route('login')->withErrors(['message' => 'Please log in to access this page']);
         }
    }

    public function job(){
        $user = Session::get('user');
        $job = Job::all();
        if ($user && $user->role == 'admin') {
            return view('Admin.Jobs',[
                'user' => $user,
                'job' => $job,
            ]
        );
        }
        else {
            
            return redirect()->route('login')->withErrors(['message' => 'Please log in to access this page']);
        }
    }
    public function scholarship(){
        $user = Session::get('user');
        
        if ($user && $user->role == 'admin') {
            $universities = University::all();
            $scholarships = Scholarship::all(); // Ensure this is the correct model name
    
            return view('Admin.Scholarship', [
                'scholarships' => $scholarships, // Corrected the key name
                'universities' => $universities,
                'user' => $user,
            ]);
                 
        } else {
           
            return redirect()->route('login')->withErrors(['message' => 'Please log in to access this page']);
         }
    }
    public function uni()
    {
        // Retrieve the authenticated user
        $user = Session::get('user');

        
       if ($user && $user->role == 'admin') {
        
            $universities = University::all();
            
            return view("Admin.University", [
                'universities' => $universities,
                'user' => $user,
            ]);
        } else {
           
            return redirect()->route('login')->withErrors(['message' => 'Please log in to access this page']);
         }
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'campus' => 'required',
            'university_link' => 'nullable|url',
            'contact_no' => 'required',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048', // Adjust image validation rules as needed
        ]);

        $university = new University;
        $university->name = $request->name;
        $university->description = $request->description;
        $university->campus = $request->campus;
        $university->university_link = $request->university_link;
        $university->contact_no = $request->contact_no;

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time().'.'.$image->getClientOriginalExtension();
            $image->move(public_path('images'), $imageName);
            $university->image = 'images/'.$imageName;
        }

        $university->save();

        return redirect()->route('university')->with('success', 'University added successfully.');
    }

    public function delete(Request $request, $id)
    {
        $delete = University::where('id',$id);
        $delete->delete();
        return redirect('admin/universities');
    }

    public function update(Request $request, $id)
    {
        // Validate the request data
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'campus' => 'required|string|max:255',
            'university_link' => 'nullable|url',
            'contact_no' => 'nullable|string|max:20',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048', // max 2MB
        ]);

        // Find the university by ID
        $university = University::findOrFail($id);

        // Update the university details
        $university->name = $request->name;
        $university->description = $request->description;
        $university->campus = $request->campus;
        $university->university_link = $request->university_link;
        $university->contact_no = $request->contact_no;

        // Handle image upload
        if ($request->hasFile('new_image')) {
            // Delete old image if it exists
            if ($university->image) {
                // Delete the old image file from storage
                Storage::delete($university->image);
            }
        
            $image = $request->file('new_image');
            $imageName = time().'.'.$image->getClientOriginalExtension();
            $image->move(public_path('images'), $imageName);
            $university->image = 'images/'.$imageName;
        }

        // Save the university
        $university->save();

        // Redirect back or to a specific route after updating
        return redirect()->route('university')->with('success', 'University updated successfully');
    }
    public function profileupdate($id)
    {
        // Fetch the user based on the provided ID
        $user = Register::findOrFail($id);

        // You can pass the user to the view here and handle the profile update logic

        return view('Profile.update', compact('user'));
    }
    public function profileUpdatePost(Request $request, $id)
    {
        // Validate the incoming request data
        $request->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required|email|unique:registers,email,' . $id, // Ensure email uniqueness except for the current user
            'phone' => 'required|unique:registers,phone,' . $id, // Ensure phone uniqueness except for the current user
            // Add other validation rules as needed
        ]);

        // Find the user by ID
        $user = Register::findOrFail($id);

        // Update the user details
        $user->first_name = $request->first_name;
        $user->last_name = $request->last_name;
        $user->email = $request->email;
        $user->phone = $request->phone;

        // Save the updated user
        $user->save();

        Session::put('user', $user);
        if($user->role == 'admin'){
            return redirect()->route('university')->with(['success' => 'Profile updated successfully.']);
        }
        else{
            return redirect()->route('index')->with(['success' => 'Profile updated successfully.']);
        }
        
    }
    public function scholarshipstore(Request $request){
        // Validate the incoming request data
        $validatedData = $request->validate([
            'name' => 'required|string',
            'university_id' => 'required|exists:universities,id',
            'link' => 'nullable|string',
            'application_deadline' => 'nullable|date',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'description' => 'nullable|string',
        ]);

        // Create a new scholarship record
        $scholarship = new scholarship();
        $scholarship->name = $validatedData['name'];
        $scholarship->university_id = $validatedData['university_id'];
        $scholarship->link = $validatedData['link'];
        $scholarship->application_deadline = $validatedData['application_deadline'];
        $scholarship->description = $validatedData['description'];
        // Handle file upload
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time().'.'.$image->getClientOriginalExtension();
            $image->move(public_path('images'), $imageName);
            $scholarship->image = 'images/'.$imageName;
        }
        $scholarship->save();

        // Redirect back with success message
        return redirect()->back()->with('success', 'Scholarship created successfully.');
    }
    public function scholarshipdelete(Request $request, $id)
    {
        $delete = scholarship::where('id',$id);
        $delete->delete();
        return redirect('admin/scholarship');
    }
    public function scholarshipupdate(Request $request, $id)
    {
        // Validate the request data
        $request->validate([
            'name' => 'required|string',
            'university_id' => 'required|exists:universities,id',
            'link' => 'nullable|string',
            'application_deadline' => 'nullable|date',
            'new_image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'description' => 'nullable|string',
        ]);
    
        // Find the scholarship by ID
        $scholarship = Scholarship::findOrFail($id);
        $scholarship->name = $request->name;
        $scholarship->university_id = $request->university_id;
        $scholarship->link = $request->link;
        $scholarship->application_deadline = $request->application_deadline;
        $scholarship->description = $request->description;
    
        // Handle image upload
        if ($request->hasFile('new_image')) {
            // Delete old image if it exists
            if ($scholarship->image) {
                // Delete the old image file from storage
                Storage::delete($scholarship->image);
            }
    
            $image = $request->file('new_image');
            $imageName = time().'.'.$image->getClientOriginalExtension();
            $image->move(public_path('images'), $imageName);
            $scholarship->image = 'images/'.$imageName;
        }
    
        // Save the scholarship
        $scholarship->save();
    
        // Redirect back or to a specific route after updating
        return redirect()->route('scholarship')->with('success', 'Scholarship updated successfully');
    }


    public function coursesto(Request $request)
    {
       
            $request->validate([
                'course_name' => 'required|string|max:255',
                'university_id' => 'required|exists:universities,id',
                'course_duration' => 'required|string|max:255',
                'pace' => 'required|string|max:255',
                'tuition_fee' => 'required|string',
                'study_type' => 'required|string',
                'link' => 'nullable|string',
                'description' => 'required|string',
            ]);
    
            // Create a new course
            $course = new Coursee();
            $course->course_name = $request->course_name;
            $course->university_id = $request->university_id;
            $course->course_duration = $request->course_duration;
            $course->pace = $request->pace;
            $course->tuition_fee = $request->tuition_fee;
            $course->study_type = $request->study_type;
            $course->link = $request->link;
            $course->description = $request->description;
            $course->save();
    
            // Redirect to a specific route with success message
            return redirect()->route('dashboard')->with('success', 'Course created successfully');
       
    }

    public function coursedelete(Request $request, $id)
    {
        $delete = Coursee::where('id',$id);
        $delete->delete();
        return redirect('admin/course');
    }
    public function courseupdate(Request $request, $id)
    {
        // Validate the request data
        $request->validate([
            'course_name' => 'required|string|max:255',
            'university_id' => 'required|exists:universities,id',
            'course_duration' => 'required|string|max:255',
            'pace' => 'required|string|max:255',
            'tuition_fee' => 'required|string',
            'study_type' => 'required|string',
            'link' => 'nullable|string',
            'description' => 'required|string',
        ]);
    
        $course = Coursee::findOrFail($id);
        $course->course_name = $request->course_name;
        $course->university_id = $request->university_id;
        $course->course_duration = $request->course_duration;
        $course->pace = $request->pace;
        $course->tuition_fee = $request->tuition_fee;
        $course->study_type = $request->study_type;
        $course->link = $request->link;
        $course->description = $request->description;
        $course->save();
    
        // Redirect back or to a specific route after updating
        return redirect()->route('dashboard')->with('success', 'Course updated successfully');
    }
    public function jobstore(Request $request)
    {
        // Validate the request data
        $validatedData = $request->validate([
            'job_name' => 'required|string|max:255',
            'job_location' => 'required|string|max:255',
            'education' => 'required|string|max:255',
            'job_skills' => 'required|string|max:255',
            'link' => 'nullable|string',
            'job_image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'job_description' => 'required|string',
        ]);

        $job = new Job();
        $job->job_name = $validatedData['job_name'];
        $job->job_location = $validatedData['job_location'];
        $job->education = $validatedData['education'];
        $job->job_skills = $validatedData['job_skills'];
        $job->link = $validatedData['link'];
        $job->job_description = $validatedData['job_description'];
        if ($request->hasFile('job_image')) {
            $image = $request->file('job_image');
            $imageName = time().'.'.$image->getClientOriginalExtension();
            $image->move(public_path('images'), $imageName);
            $job->job_image = 'images/'.$imageName;
        }
        $job->save();

        // Redirect back with a success message
        return redirect()->back()->with('success', 'Job created successfully!');
    }
    public function jobdelete(Request $request, $id)
    {
        $delete = Job::where('id',$id);
        $delete->delete();
        return redirect('admin/jobs');
    }
    public function jobupdate(Request $request, $id)
    {
        // Validate the request data
        $validatedData = $request->validate([
            'job_name' => 'required|string|max:255',
            'job_location' => 'required|string|max:255',
            'education' => 'required|string|max:255',
            'job_skills' => 'required|string|max:255',
            'link' => 'nullable|url',
            'job_description' => 'required|string',
            'job_image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);
    
        // Find the job by ID
        $job = Job::findOrFail($id);
    
        // Update the job details
        $job->job_name = $validatedData['job_name'];
        $job->job_location = $validatedData['job_location'];
        $job->education = $validatedData['education'];
        $job->job_skills = $validatedData['job_skills'];
        $job->link = $validatedData['link'];
        $job->job_description = $validatedData['job_description'];
    
        // Handle the image upload if a new image is provided
        if ($request->hasFile('job_image')) {
            // Delete the old image if it exists
            if ($job->job_image && file_exists(public_path($job->job_image))) {
                unlink(public_path($job->job_image));
            }
    
            // Upload the new image
            $image = $request->file('job_image');
            $imageName = time().'.'.$image->getClientOriginalExtension();
            $image->move(public_path('images'), $imageName);
            $job->job_image = 'images/'.$imageName;
        }
    
        // Save the job
        $job->save();
    
        // Redirect back with a success message
        return redirect()->route('jobs')->with('success', 'Job updated successfully');
    }
    

}