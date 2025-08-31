<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
Use App\Helpers\Helpers;
use Illuminate\Http\Request;
use App\Models\{
    User,
    VisitorLog,
    VisitorInfo,
    FollowUp,
    Division,
    MetropolitanAreaThana,
};
use App\Models\TestSubmission\{
    TestSubmissionLog,
};
use DB;
Class AnalyticsController extends Controller{
    public function home(){
        $data = VisitorInfo::all();
        $total_exam_given = TestSubmissionLog::where('status', 'completed')->get();
        $countFollowUp = FollowUp::select('student_id', DB::raw('COUNT(*) as total'))
            ->groupBy('student_id')
            ->get();

        $countAdmitted = FollowUp::select('student_id', DB::raw('COUNT(*) as total'))
            ->where('admission_status', 'admitted')
            ->groupBy('student_id')
            ->get();
        $allDivisions = Division::all();
        $allMetropolitanThanas = MetropolitanAreaThana::select('upazilla_id')->with('Upazilla')->distinct()->get();
        $ex_score_5_more = count($this->expected_score(5.5));
        $ex_score_6 = count($this->expected_score(6));
        $ex_score_6_5 = count($this->expected_score(6.5));
        $ex_score_7 = count($this->expected_score(7));
        $ex_score_7_more = count($this->expected_score(7.5));
        $ex_score_8 = count($this->expected_score(8));
        $ex_score_8_more = count($this->expected_score(8.5));
        $ex_score_9 = count($this->expected_score(9));
        $count_expected_score = $ex_score_5_more+$ex_score_6+$ex_score_6_5+$ex_score_7+$ex_score_7_more+$ex_score_8+$ex_score_8_more+$ex_score_9;
        $ex_coun_usa = count($this->targetted_country('USA'));
        $ex_coun_uk = count($this->targetted_country('UK'));
        $ex_coun_canada = count($this->targetted_country('Canada'));
        $ex_coun_australia = count($this->targetted_country('Australia'));
        $ex_coun_europe = count($this->targetted_country('Europe'));
        $ex_coun_others = count($this->targetted_country('Others'));
        $count_country = $ex_coun_usa+$ex_coun_uk+$ex_coun_canada+$ex_coun_australia+$ex_coun_europe+$ex_coun_others;

        $ac_purpose = count($this->purpose('academic'));
        $gt_purpose = count($this->purpose('general_training'));
        $ge_purpose = count($this->purpose('general_english'));

        $know_facebook = count($this->howtoknow('Facebook'));
        $know_website = count($this->howtoknow('Website'));
        $know_billboard = count($this->howtoknow('Billboard'));
        $know_google_map = count($this->howtoknow('Google Map'));
        $know_student_reference = count($this->howtoknow('Student Reference'));
        $know_youtube = count($this->howtoknow('Youtube'));
        $know_others = count($this->howtoknow('Others'));
        $count_how_to_know = $know_facebook+$know_website+$know_billboard+$know_google_map+$know_student_reference+$know_youtube+$know_others;

        $address_uttara = count($this->presentAddress('Uttara'));
        $address_mirpur = count($this->presentAddress('Mirpur'));
        $address_gazipur = count($this->presentAddress('Gazipur'));
        $address_joydevpur = count($this->presentAddress('Joydevpur'));
        $address_tongi = count($this->presentAddress('tongi'));
        $address_khilkhet= count($this->presentAddress('Khilkhet'));
        $address_badda = count($this->presentAddress('Badda'));
        $address_gulshan = count($this->presentAddress('Gulshan'));
        $address_dhanmondi = count($this->presentAddress('Dhanmondi'));
        $address_narsingdi = count($this->presentAddress('Narsingdi'));
        $address_demra = count($this->presentAddress('Demra'));
        $address_tangail = count($this->presentAddress('Tangail'));
        $address_savar = count($this->presentAddress('Savar'));
        $address_other = count($this->presentAddress('Other'));
        $count_address_students = $address_uttara+$address_mirpur+$address_gazipur+$address_joydevpur+$address_tongi+
                                $address_khilkhet+$address_badda+$address_gulshan+$address_dhanmondi+
                                $address_narsingdi+$address_demra+$address_tangail+$address_savar+$address_other;

        $occupation_govt = count($this->occupation('Govt. Service'));
        $occupation_private = count($this->occupation('Private Service'));
        $occupation_business = count($this->occupation('Business'));
        $occupation_doctor = count($this->occupation('Doctor'));
        $occupation_engineer = count($this->occupation('Engineer'));
        $occupation_teacher = count($this->occupation('Teacher'));
        $occupation_uni_stu = count($this->occupation('University Student'));
        $occupation_hsc_student = count($this->occupation('HSC Student'));
        $occupation_house_wife = count($this->occupation('House Wife'));
        $occupation_others = count($this->occupation('Others'));


        $education_ssc = count($this->education('SSC'));
        $education_ged = count($this->education('GED'));
        $education_hsc = count($this->education('HSC'));
        $education_vocational = count($this->education('Vocational'));
        $education_graduate = count($this->education('Graduate'));
        $education_post_grad = count($this->education('Post Graduate'));
        $education_doctorate = count($this->education('Doctorate'));

        $count_education_students = $education_ssc+$education_ged+$education_hsc+$education_vocational+$education_graduate+$education_post_grad+$education_doctorate;
    //   dd($know_google_map);
        return view('admin.analytics.analytics',compact('data', 'total_exam_given', 'allDivisions', 'allMetropolitanThanas',
        'countFollowUp',
        'countAdmitted',
        'ex_score_7',
        'ex_score_6_5',
        'ex_score_7_more',
        'ex_score_8',
        'ex_score_8_more',
        'ex_score_9',
        'ex_score_6',
        'ex_score_5_more',
        'count_expected_score',
        'ex_coun_usa',
        'ex_coun_uk',
        'ex_coun_canada',
        'ex_coun_australia',
        'ex_coun_europe',
        'ex_coun_others',
        'count_country',
        'ac_purpose',
        'gt_purpose',
        'ge_purpose',
        'know_facebook',
        'know_website',
        'know_billboard',
        'know_google_map',
        'know_student_reference',
        'know_youtube',
        'know_others',
        'count_how_to_know',
        'address_uttara',
        'address_mirpur',
        'address_gazipur',
        'address_joydevpur',
        'address_tongi',
        'address_khilkhet',
        'address_badda',
        'address_gulshan',
        'address_dhanmondi',
        'address_narsingdi',
        'address_demra',
        'address_tangail',
        'address_savar',
        'address_other',
        'count_address_students',
        'occupation_govt',
        'occupation_private',
        'occupation_business',
        'occupation_doctor',
        'occupation_engineer',
        'occupation_teacher',
        'occupation_uni_stu',
        'occupation_hsc_student',
        'occupation_house_wife',
        'occupation_others',
        'education_ssc',
        'education_ged',
        'education_hsc',
        'education_vocational',
        'education_graduate',
        'education_post_grad',
        'education_doctorate',
        'count_education_students',
        ));
    }
    private function expected_score($value)
    {
        $db = new VisitorInfo();
        $ex_score = $db->where('expected_score', $value)->get();
        return $ex_score;
    }
    private function targetted_country($value)
    {
        // $db = new VisitorInfo();
        $ex_country = VisitorInfo::whereJsonContains('expected_country', $value)->get();
        return $ex_country;
    }
    private function purpose($value)
    {
        $db = new VisitorInfo();
        $ex_country = $db->where('purpose_of_ielts', $value)->get();
        return $ex_country;
    }
    private function howtoknow($value)
    {
        $db = new VisitorInfo();
        $know = $db->where('how_you_know', $value)->get();
        return $know;
    }
    private function presentAddress($value)
    {
        $db = new VisitorInfo();
        $address = $db->where('location', $value)->get();
        return $address;
    }
    private function occupation($value)
    {
        $db = new VisitorInfo();
        $occupation = $db->where('occupation', $value)->get();
        return $occupation;
    }
    private function education($value)
    {
        $db = new VisitorInfo();
        $education = $db->where('education', $value)->get();
        return $education;
    }
    public function studentAdressCount(Request $request)
    {
        $upzilla = $request->params['upazillaName'];
        $total_log = VisitorInfo::where('upazilla', $upzilla)->count();
        return response()->json([
            'number' => $total_log
        ]);
    }
}
