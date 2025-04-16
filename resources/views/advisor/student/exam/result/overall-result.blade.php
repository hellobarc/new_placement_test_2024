<div class="row">
    <div class="col-xxl-12 col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <h2 class="fw-bolder mt-3">Overall Result</h2>
        <table class="table table-bordered table-striped mt-4">
            <thead class="text-center">
                <th>Sl No</th>
                <th>Modules</th>
                <th></th>
                <th>Marks</th>
                <th>Overall Level</th>
            </thead>
            <tbody>
                <tr class="text-center">
                    <td>1</td>
                    <td>Reading</td>
                    <td></td>
                    <td>{{$sum_reading_module}} out of 15</td>
                    <td rowspan="4" class="fs-2 fw-bold">{{Helper::overall_rubricks($all_module_marks)}}</td>
                </tr>
                <tr class="text-center">
                    <td rowspan="2">2</td>
                    <td rowspan="2">Writing</td>
                    <td>Grammar</td>
                    <td>{{$sum_grammar_module}} out of 15</td>
                    
                </tr>
                <tr class="text-center">
                    <td>Vocabulary</td>
                    <td>{{$sum_vocabulary_module}} out of 15</td>
                    
                </tr>
                <tr class="text-center">
                    <td>4</td>
                    <td>Listening</td>
                    <td></td>
                    <td>{{$sum_listening_module}} out of 15</td>
                </tr>
                <tr>
                    <td colspan="5" class="text-center">Total Marks: {{$sum_reading_module+$sum_grammar_module+$sum_vocabulary_module+$sum_listening_module}} out of 60</td>
                </tr>
            </tbody>
        </table>
    </div>
</div>