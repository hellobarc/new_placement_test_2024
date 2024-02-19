<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\{
    VisitorInfo,
    VisitorLog
};

use DB;


class VisitorController extends Controller
{

    public function storeVisitorInfo(Request $request){

        $request->validate([
            'full_name' => 'required|string|max:50',
            'contact_number' => 'required|string|max:50',
            'email' => 'required|email|max:50',
            'occupation' => 'required|string|max:50',
            'address' => 'required|string|max:50',
            'location' => 'required|string|max:50',
            'organization' => 'required|string|max:50',
            'date_of_birth' => 'required',
            'education' => 'required|string|max:50',
            'how_you_know' => 'required|string|max:50',
            'expected_country' => 'required|string|max:50',
            'expected_score' => 'required|int|max:50',
            'purpose_of_ielts' => 'required|string|max:50',
            'purpose_of_visit' => 'required|string|max:50',
            'assign_advisor' => 'required|int|max:50'
        ]);

        $fullName = $request->input('full_name');
        $contact_number = $request->input('contact_number');
        $email = $request->input('email');
        $occupation = $request->input('occupation');
        $address = $request->input('address');
        $locaion = $request->input('location');
        $organization = $request->input('organization');
        $date_of_birth = $request->input('date_of_birth');
        $education = $request->input('education');
        $how_you_know = $request->input('how_you_know');
        $expected_country = $request->input('expected_country');
        $expected_score = $request->input('expected_score');
        $purpose_of_ielts = $request->input('purpose_of_ielts');
        $purpose_of_visit = $request->input('purpose_of_visit');
        $branch_recomendation = $request->input('branch_recomendation');
        $assign_advisor = $request->input('assign_advisor');

        $visitorLog = VisitorLog::create([
            'full_name' => $fullName,
            'email' => $email,
            'mobile' => $contact_number,
            'purpose_of_visit' => $purpose_of_visit,
            'status' => 'accquied',
            'assign_advisor' => $assign_advisor
        ]);

        VisitorInfo::create([
            'visitor_log_id' => $visitorLog->id,
            'purpose_of_ielts' => $purpose_of_ielts,
            'contact_number' => $contact_number,
            'occupation' => $occupation,
            'address' => $address,
            'location' => $locaion,
            'education' => $education,
            'organization' => $organization,
            'date_of_birth' => $date_of_birth,
            'expected_country' => $expected_country,
            'expected_score' => $expected_score,
            'how_you_know' => $how_you_know,
            'branch_recomendation' => $branch_recomendation

        ]);

        return redirect()->back()->with('success', 'Student Information Submitted to the Selected Advisor');
    } 


    public function studentDetails($id){
        $getDetails = DB::table('visitor_infos')
        ->join('visitor_logs', 'visitor_infos.visitor_log_id', '=', 'visitor_logs.id')
        ->first();

        return view('studentDetails', compact('getDetails'));
    }
}