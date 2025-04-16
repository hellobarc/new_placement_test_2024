<div class="row">
    <div class="col-xxl-12 col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <h2 class="fw-bolder mt-3">Course Level:</h2>
        <table class="table table-bordered table-striped">
            <thead class="text-center">
                <th>Courses</th>
                <th>Level</th>
                <th>Duration</th>
            </thead>
            <tbody>
                @if (Helper::overall_rubricks($all_module_marks) == 'A1' && Helper::cefr_level($student_info->expected_score) == 'C1')
                    <tr>
                        <td>A1</td>
                        <td>Elementory</td>
                        <td>1 month+</td>
                    </tr>
                    <tr>
                        <td>A2</td>
                        <td>Basic</td>
                        <td>1 month+</td>
                    </tr>
                    <tr>
                        <td>B1</td>
                        <td>Pre-IELTS</td>
                        <td>1 month+</td>
                    </tr>
                    <tr>
                        <td>B2</td>
                        <td>Main-IELTS</td>
                        <td>1 month+</td>
                    </tr>
                    <tr>
                        <td>C1</td>
                        <td>Advance-IELTS</td>
                        <td>1 month+</td>
                    </tr>
                @elseif (Helper::overall_rubricks($all_module_marks) == 'A2' && Helper::cefr_level($student_info->expected_score) == 'C1')
                    <tr>
                        <td>A2</td>
                        <td>Basic</td>
                        <td>1 month+</td>
                    </tr>
                    <tr>
                        
                        <td>B1</td>
                        <td>Pre-IELTS</td>
                        <td>1 month+</td>
                    </tr>
                    <tr>
                        
                        <td>B2</td>
                        <td>Main-IELTS</td>
                        <td>1 month+</td>
                    </tr>
                    <tr>
                        
                        <td>C1</td>
                        <td>Advance-IELTS</td>
                        <td>1 month+</td>
                    </tr>
                @elseif (Helper::overall_rubricks($all_module_marks) == 'B1' && Helper::cefr_level($student_info->expected_score) == 'C1')
                    <tr>
                        
                        <td>B1</td>
                        <td>Pre-IELTS</td>
                        <td>1 month+</td>
                    </tr>
                    <tr>
                        
                        <td>B2</td>
                        <td>Main-IELTS</td>
                        <td>1 month+</td>
                    </tr>
                    <tr>
                        
                        <td>C1</td>
                        <td>Advance-IELTS</td>
                        <td>1 month+</td>
                    </tr>
                @elseif (Helper::overall_rubricks($all_module_marks) == 'B2' && Helper::cefr_level($student_info->expected_score) == 'C1')
                    <tr>
                        
                        <td>B2</td>
                        <td>Main-IELTS</td>
                        <td>1 month+</td>
                    </tr>
                    <tr>
                        
                        <td>C1</td>
                        <td>Advance-IELTS</td>
                        <td>1 month+</td>
                    </tr>
                @elseif (Helper::overall_rubricks($all_module_marks) == 'A1' && Helper::cefr_level($student_info->expected_score) == 'B2')
                    <tr>
                        
                        <td>A1</td>
                        <td>Elementory</td>
                        <td>1 month+</td>
                    </tr>
                    <tr>
                        
                        <td>A2</td>
                        <td>Basic</td>
                        <td>1 month+</td>
                    </tr>
                    <tr>
                        
                        <td>B1</td>
                        <td>Pre-IELTS</td>
                        <td>1 month+</td>
                    </tr>
                    <tr>
                        
                        <td>B2</td>
                        <td>Main-IELTS</td>
                        <td>1 month+</td>
                    </tr>
                @elseif (Helper::overall_rubricks($all_module_marks) == 'A2' && Helper::cefr_level($student_info->expected_score) == 'B2')
                    <tr>
                        
                        <td>A2</td>
                        <td>Basic</td>
                        <td>1 month+</td>
                    </tr>
                    <tr>
                        
                        <td>B1</td>
                        <td>Pre-IELTS</td>
                        <td>1 month+</td>
                    </tr>
                    <tr>
                    
                        <td>B2</td>
                        <td>Main-IELTS</td>
                        <td>1 month+</td>
                    </tr>
                @elseif (Helper::overall_rubricks($all_module_marks) == 'B1' && Helper::cefr_level($student_info->expected_score) == 'B2')
                    <tr>
                        
                        <td>B1</td>
                        <td>Pre-IELTS</td>
                        <td>1 month+</td>
                    </tr>
                    <tr>
                        
                        <td>B2</td>
                        <td>Main-IELTS</td>
                        <td>1 month+</td>
                    </tr>
                @endif
            </tbody>
        </table>
    </div>
</div>
