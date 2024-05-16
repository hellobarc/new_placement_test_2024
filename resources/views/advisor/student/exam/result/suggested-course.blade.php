<div class="row">
    <div class="col-xxl-12 col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <h2 class="fw-bolder mt-3">Your Current Level: <span class="h1 text-success fw-bolder">{{Helper::overall_rubricks($all_module_marks)}}</span></h2>
        <h2 class="fw-bolder mt-3">Desired Score: <span class="h1 text-success fw-bolder">{{$student_info->expected_score}}</span> (Equivalent CEFR Level - {{Helper::cefr_level($student_info->expected_score)}})</h2>
        <h2 class="fw-bolder mt-3">Suggested Course:</h2>
        <table class="table table-bordered table-striped">
            <thead class="text-center">
                
                <th>Courses</th>
                <th>Duration</th>
            </thead>
            <tbody>
                <tr class="text-center">
                    
                    <td>
                        @if (Helper::overall_rubricks($all_module_marks) == 'A1' && Helper::cefr_level($student_info->expected_score) == 'C1')
                            A1 + A2 + B1 + B2 + C1
                        @elseif (Helper::overall_rubricks($all_module_marks) == 'A2' && Helper::cefr_level($student_info->expected_score) == 'C1')
                            A2 + B1 + B2 + C1
                        @elseif (Helper::overall_rubricks($all_module_marks) == 'B1' && Helper::cefr_level($student_info->expected_score) == 'C1')
                            B1 + B2 + C1
                        @elseif (Helper::overall_rubricks($all_module_marks) == 'B2' && Helper::cefr_level($student_info->expected_score) == 'C1')
                            B2 + C1
                        @elseif (Helper::overall_rubricks($all_module_marks) == 'A1' && Helper::cefr_level($student_info->expected_score) == 'B2')
                            A1 + A2 + B1 + B2
                        @elseif (Helper::overall_rubricks($all_module_marks) == 'A2' && Helper::cefr_level($student_info->expected_score) == 'B2')
                            A2 + B1 + B2
                        @elseif (Helper::overall_rubricks($all_module_marks) == 'B1' && Helper::cefr_level($student_info->expected_score) == 'B2')
                            B1 + B2
                        @endif
                    </td>
                    <td>
                        @if (Helper::overall_rubricks($all_module_marks) == 'A1' && Helper::cefr_level($student_info->expected_score) == 'C1')
                            5 month+
                        @elseif (Helper::overall_rubricks($all_module_marks) == 'A2' && Helper::cefr_level($student_info->expected_score) == 'C1')
                            4 month+
                        @elseif (Helper::overall_rubricks($all_module_marks) == 'B1' && Helper::cefr_level($student_info->expected_score) == 'C1')
                            3 month+
                        @elseif (Helper::overall_rubricks($all_module_marks) == 'B2' && Helper::cefr_level($student_info->expected_score) == 'C1')
                            2 month+
                        @elseif (Helper::overall_rubricks($all_module_marks) == 'A1' && Helper::cefr_level($student_info->expected_score) == 'B2')
                        4 month+
                        @elseif (Helper::overall_rubricks($all_module_marks) == 'A2' && Helper::cefr_level($student_info->expected_score) == 'B2')
                            3 month+
                        @elseif (Helper::overall_rubricks($all_module_marks) == 'B1' && Helper::cefr_level($student_info->expected_score) == 'B2')
                            2 month+
                        @endif
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>