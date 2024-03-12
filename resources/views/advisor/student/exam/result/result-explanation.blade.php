<div class="row">
    <div class="col-xxl-12 col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <h2 class="fw-bolder mt-3">Result Explanation</h2>
        <table class="table table-bordered table-striped mt-4">
            <thead>
                <th>Sl No</th>
                <th>Module</th>
                <th>Remarks</th>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>Readiing</td>
                    <td>
                        @if (Helper::module_rubricks($sum_reading_module) == 'A-')
                            <span>Cannot understand very simple sentence.</span>
                        @elseif (Helper::module_rubricks($sum_reading_module) == 'A1')
                            <span>Cannot understand very simple sentence.</span>
                        @elseif(Helper::module_rubricks($sum_reading_module) == 'A2')
                            <span>Face problem in reading and identifying the main points short, clear, simple texts, messages, notices and announcements.</span>
                        @elseif(Helper::module_rubricks($sum_reading_module) == 'B1')
                            <span>Tough to understand newspaper articles.</span>
                        @elseif(Helper::module_rubricks($sum_reading_module) == 'B2')
                            <span>Difficulties to read articles and reports with proper understanding.</span>
                        @elseif(Helper::module_rubricks($sum_reading_module) == 'C1')
                            <span>Understanding well-structured text, expressing points of view at some length. </span>
                        @endif
                    </td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>Writing</td>
                    <td>
                        @if (Helper::module_rubricks($sum_grammar_module) == 'A-')
                            <span>Cannot make simple sentence with correct grammar.</span>
                        @elseif (Helper::module_rubricks($sum_grammar_module) == 'A1')
                            <span>Cannot make simple sentence with correct grammar.</span>
                        @elseif(Helper::module_rubricks($sum_grammar_module) == 'A2')
                            <span>Unable to write very simple personal letter with accurate structure.</span>
                        @elseif(Helper::module_rubricks($sum_grammar_module) == 'B1')
                            <span>Unable to write short structured paragraphs.</span>
                        @elseif(Helper::module_rubricks($sum_grammar_module) == 'B2')
                            <span>Face problem to write clear, detailed paragraph, letter, essay or report on a wide range of subject.</span>
                        @elseif(Helper::module_rubricks($sum_grammar_module) == 'C1')
                            <span>Facing to write my thoughts efforlessly and spontanceously without any hesitation.</span>
                        @endif
                        <br>
                        @if (Helper::module_rubricks($sum_vocabulary_module) == 'A-')
                            <span>Cannot understand basice names and words.</span>
                        @elseif (Helper::module_rubricks($sum_vocabulary_module) == 'A1')
                            <span>Cannot understand basice names and words.</span>
                        @elseif(Helper::module_rubricks($sum_vocabulary_module) == 'A2')
                            <span>Find it difficult to handle very short social exchanges.</span>
                        @elseif(Helper::module_rubricks($sum_vocabulary_module) == 'B1')
                            <span>Can not produce simple connected text on topics.</span>
                        @elseif(Helper::module_rubricks($sum_vocabulary_module) == 'B2')
                            <span>Unable to interact with fluency and spontaneity that makes regular interaction with native speaker.</span>
                        @elseif(Helper::module_rubricks($sum_vocabulary_module) == 'C1')
                            <span>Express yourself fluently.</span>
                        @endif
                    </td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>Listening</td>
                    <td>
                        @if (Helper::module_rubricks($sum_listening_module) == 'A-')
                            <span>Don't have the basic knowledge of english and cannot introduce myself.</span>
                        @elseif (Helper::module_rubricks($sum_listening_module) == 'A1')
                            <span>Don't have the basic knowledge of english and cannot introduce myself.</span>
                        @elseif(Helper::module_rubricks($sum_listening_module) == 'A2')
                            <span>Can not continue or interact in any conversation.</span>
                        @elseif(Helper::module_rubricks($sum_listening_module) == 'B1')
                            <span>Unable to understand small talks and conversations in native language.</span>
                        @elseif(Helper::module_rubricks($sum_listening_module) == 'B2')
                            <span>Face problem in understanding long speeches and lectures.</span>
                        @elseif(Helper::module_rubricks($sum_listening_module) == 'C1')
                            <span>Unable to conversation with a native speaker without any mistakes.</span>
                        @endif
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>