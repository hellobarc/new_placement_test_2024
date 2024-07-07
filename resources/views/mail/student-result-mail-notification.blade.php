<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/xhtml" xmlns:o="urn:schemas-microsoft-com:office:office">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <meta name="x-apple-disable-message-reformatting">
  <title>Visitor Information</title>
  <style>
    table, td, div, h1, p {
      font-family: Arial, sans-serif;
    }
.progress-bar-listening {
  margin-top: 0.5rem;
  width: 100%;
  height: 12px;
  border-radius: 0px !important;
}
.progress-bar-current-condition {
  margin-top: 0.5rem;
  width: 100%;
  height: 12px;
  border-radius: 0px !important;
}
.progress-bar-target {
  margin-top: 0.5rem;
  width: 100%;
  height: 12px;
  border-radius: 0px !important;
}
.progress-bar-listening::-webkit-progress-value {
  background-color: #ffa84a;
}
.progress-bar-current-condition::-webkit-progress-value {
  background-color: #36a0ed;
}
.progress-bar-target::-webkit-progress-value {
  background-color: #EE6123;
}
progress::-webkit-progress-bar{
  background-color: #cfcfcf;
}
.progress-bar-reading {
  margin-top: 0.5rem;
  width: 100%;
  height: 12px;
  border-radius: 0px !important;
}
.progress-bar-reading::-webkit-progress-value {
  background-color: #004AAD;
}

.progress-bar-writing {
  margin-top: 0.5rem;
  width: 100%;
  height: 12px;
  border-radius: 0px !important;
}
.progress-bar-writing::-webkit-progress-value {
  background-color: #589E67;
}
    @media screen and (max-width: 530px) {
      .unsub {
        display: block;
        padding: 8px;
        margin-top: 14px;
        border-radius: 6px;
        background-color: #555555;
        text-decoration: none !important;
        font-weight: bold;
      }
      .col-lge {
        max-width: 100% !important;
      }
    }
    @media screen and (min-width: 531px) {
      .col-sml {
        max-width: 27% !important;
      }
      .col-lge {
        max-width: 73% !important;
      }
    }
  </style>
</head>
<body style="margin:0;padding:0;word-spacing:normal;background-color:#939297;">
  <div role="article" aria-roledescription="email" lang="en" style="text-size-adjust:100%;-webkit-text-size-adjust:100%;-ms-text-size-adjust:100%;background-color:#939297;">
    <table role="presentation" style="width:100%;border:none;border-spacing:0;">
      <tr>
        <td align="center" style="padding:0;">
          <table role="presentation" style="width:94%;max-width:600px;border:none;border-spacing:0;text-align:left;font-family:Arial,sans-serif;font-size:16px;line-height:22px;color:#363636;">
            <tr>
                <td style="padding:10px 30px;background-color:#DFF5FF; color:#f8f8f8">
                  <a href="" style="text-decoration:none;">
                    <img src="{{ asset('frontend\images\full_logo.png') }}" width="165" alt="Logo" style="width:180px;max-width:45%;height:auto;border:none;text-decoration:none;color:#ffffff;">
                  </a>
                </td>
            </tr>
            <tr>
              <td style="padding:20px 30px;background-color:#ffffff;">
                <h5 style=" text-align:center; margin-top:0;margin-bottom:16px;font-size:1.25rem;line-height:32px;font-weight:800;letter-spacing:-0.02em; color: #004AAD;">Placement Test Report </h5>
                <p style="margin:0; font-weight: 600; color:#181818; font-size: 1rem;letter-spacing: 0.0225rem;">{{$stu_result['name']}}</p>
                  <p style="font-size: 0.875rem;line-height: 1.325rem;letter-spacing: 0.015rem;color: #2F2E2E;margin: 7px 0 35px 0;">
                    আপনি ব্রিটিশ আমেরিকান রিসোর্স সেন্টারে এসে ইংরেজি ভাষা দক্ষতা পরিমাপের জন্য ৫০ মিনিটের একটি পরীক্ষা দিয়েছেন | 
                    এবং আপনার অবস্থান <span style="color:#2268D1; font-size:1rem">{{$stu_result['level']}} level</span> এ.
                  </p>
                  @if ($stu_result['level'] == 'A1')
                    <img src="{{ asset('frontend\images\result-card\a1_cefr_level.svg') }}" alt="" style="width: 100%; height:auto; margin-bottom: 20px;">
                  @elseif ($stu_result['level'] == 'A2')
                    <img src="{{ asset('frontend\images\result-card\a2_cefr_level.svg') }}" alt="" style="width: 100%; height:auto; margin-bottom: 20px;">
                  @elseif ($stu_result['level'] == 'B1')
                    <img src="{{ asset('frontend\images\result-card\b1_cefr_level.svg') }}" alt="" style="width: 100%; height:auto; margin-bottom: 20px;">
                  @elseif ($stu_result['level'] == 'B2')
                    <img src="{{ asset('frontend\images\result-card\b2_cefr_level.svg') }}" alt="" style="width: 100%; height:auto; margin-bottom: 20px;">
                  @elseif ($stu_result['level'] == 'C1')
                    <img src="{{ asset('frontend\images\result-card\c1_cefr_level.svg') }}" alt="" style="width: 100%; height:auto; margin-bottom: 20px;">
                  @endif
                  <div style="border: 1px solid #004AAD; width:100%; margin:auto; margin-top: 1rem !important; border-radius: 4px;">
                      <div style="background-color:#004AAD; text-align:center; color:#f8f8f8;font-size: 0.9375rem;font-weight: 600;line-height: 1.86863rem; letter-spacing: 0.01875rem;">পরীক্ষার ফলাফল</div>
                      <div style="padding: 10px 20px;">
                        <p style="margin: 0 0 0 0; font-size: 1rem;font-weight: 600;">Listening</p>
                          <div style="display: inline">
                            <progress class="progress-bar-reading" value="{{number_format(($stu_result['listening']*100)/15)}}" max="100"></progress>
                            <div style="text-align:end;">{{number_format(($stu_result['listening']*100)/15)}}%</div>
                          </div>
                          <p style="margin: 0 0 0 0; font-size: 1rem;font-weight: 600;">Reading</p>
                          <div style="display: inline">
                            <progress class="progress-bar-writing" value="{{number_format(($stu_result['reading']*100)/15)}}" max="100"></progress>
                            <div style="text-align:end;">{{number_format(($stu_result['reading']*100)/15)}}%</div>
                          </div>
                          <p style="margin: 0 0 0 0; font-size: 1rem;font-weight: 600;">Writing</p>
                          <div>
                            <progress class="progress-bar-listening" value="{{number_format(($stu_result['writing']*100)/30)}}" max="100"></progress>
                            <div style="text-align:end;">{{number_format(($stu_result['writing']*100)/30)}}%</div>
                          </div>
                      </div>
                  </div>
                    <div style="border: 1px solid #376996; width:100%; margin:auto; margin-top: 2rem !important; border-radius: 4px;">
                      <div style="background-color:#376996; text-align:center; color:#f8f8f8;font-size: 0.9375rem;font-weight: 600;line-height: 1.86863rem; letter-spacing: 0.01875rem;"> টার্গেট স্কোর এবং  বর্তমান অবস্থা</div>
                      <div style="padding: 10px 20px;">
                          <p style="margin: 0 0 0 0; font-size: 1rem;font-weight: 600;">বর্তমান অবস্থা</p>
                          <div style="display: inline">
                            @php
                              if($stu_result['level'] == 'A1'){
                                $current_level = 4;
                              }elseif ($stu_result['level'] == 'A2') {
                                $current_level = 4.5;
                              }elseif ($stu_result['level'] == 'B1') {
                                $current_level = 6;
                              }elseif ($stu_result['level'] == 'B2') {
                                $current_level = 6.5;
                              }elseif ($stu_result['level'] == 'C1') {
                                $current_level = 7;
                              }
                            @endphp
                            <progress class="progress-bar-current-condition" value="{{$current_level}}" max="9"></progress>
                            <div style="text-align:end;">Band: 
                              @if ($stu_result['level'] == 'A1')
                                4.0
                              @elseif ($stu_result['level'] == 'A2')
                                4.5 - 5.0
                              @elseif ($stu_result['level'] == 'B1')
                                5.0 - 5.5
                              @elseif ($stu_result['level'] == 'B2')
                                6.0 - 6.5
                              @elseif ($stu_result['level'] == 'C1')
                                7.0 - 7.5
                              @endif
                            </div>
                          </div>
                          <p style="margin: 0 0 0 0; font-size: 1rem;font-weight: 600;">টার্গেট স্কোর</p>
                          <div style="display: inline">
                            <progress class="progress-bar-target" value="{{$stu_result['target_score']}}" max="9"></progress>
                            <div style="text-align:end;">Band: {{$stu_result['target_score']}}</div>
                          </div>
                      </div>
                    </div>
                    <div style="border: 1px solid #36A0ED; width:100%; margin:auto; margin-top: 2rem !important; border-radius: 4px;">
                      <div style="background-color:#36A0ED; text-align:center; color:#f8f8f8;font-size: 0.9375rem;font-weight: 600;line-height: 1.86863rem; letter-spacing: 0.01875rem;"> আপনার বর্তমান অবস্থা</div>
                        <div style="padding: 10px 20px;">
                            <div style="font-weight: 700; font-size:1rem;">Listening</div>
                            <ul style="margin: 0; padding: 0 0 0 15px;">
                                @if (number_format(($stu_result['listening']*100)/15)==0)
                                    <li class="mb-1" style="font-size:0.875rem;">কোনো প্রশ্নের উত্তর দিতে পারি নি।</li>
                                @elseif (number_format(($stu_result['listening']*100)/15)>0 && number_format(($stu_result['listening']*100)/15)<=17)
                                    <li class="mb-1" style="font-size:0.875rem;">Familiar situation-এ basic dialogue বুঝতে পারেন।</li>
                                @elseif (number_format(($stu_result['listening']*100)/15)>17 && number_format(($stu_result['listening']*100)/15)<=34)
                                    <li class="mb-1" style="font-size:0.875rem;">পুরো conversation এর main theme বুঝতে পারেন তবে Complex sentence এর track রাখতে পারেন না।</li>
                                @elseif (number_format(($stu_result['listening']*100)/15)>34 && number_format(($stu_result['listening']*100)/15)<=51)
                                    <li class="mb-1" style="font-size:0.875rem;">Situational discussion এবং মোটামুটি complex monologue বুঝতে পারেন।</li>
                                @elseif (number_format(($stu_result['listening']*100)/15)>51 && number_format(($stu_result['listening']*100)/15)<=68)
                                    <li class="mb-1" style="font-size:0.875rem;">সাধারনত complex discussion এর track রাখতে পারেন। তবে কিছু কিছু ক্ষেত্রে বা unfamiliar situation এ সঠিক তথ্য খুঁজে বের করতে সমস্যা হতে পারে।</li>
                                @elseif (number_format(($stu_result['listening']*100)/15)>51 && number_format(($stu_result['listening']*100)/15)<=85)
                                    <li class="mb-1" style="font-size:0.875rem;">ভালো ভাবে যে কোন কথা বুঝতে পারেন। তবে মাঝে মাঝে unfamiliar situation এ misunderstanding হতে পারে। </li>
                                @elseif (number_format(($stu_result['listening']*100)/15)>85 && number_format(($stu_result['listening']*100)/15)<=100)
                                    <li class="mb-1" style="font-size:0.875rem;">Realtime এ কথা শুনে সঠিক তথ্য বুঝতে পারেন। </li>
                                @endif
                            </ul>
                            <div style="font-weight: 700; font-size:1rem; margin-top:8px;">Reading</div>
                              <ul style="margin: 0; padding: 0 0 0 15px;">
                                  @if (number_format(($stu_result['reading']*100)/15)==0)
                                      <li class="mb-1" style="font-size:0.875rem;">কোনো প্রশ্নের উত্তর দিতে পারি নি।</li>
                                  @elseif (number_format(($stu_result['reading']*100)/15)>0 && number_format(($stu_result['reading']*100)/15)<=17)
                                      <li class="mb-1" style="font-size:0.875rem;">Passage এ থাকা complex sentence গুলোর ব্যাবহার বুঝতে পারেন নি। যেখানে synonym বা paraphrase ব্যবহার করা হয়েছে, সেখানে অর্থ বুঝতে পারেন নি।</li>
                                  @elseif (number_format(($stu_result['reading']*100)/15)>17 && number_format(($stu_result['reading']*100)/15)<=34)
                                      <li class="mb-1" style="font-size:0.875rem;">Complex sentence বুঝতে পারলেও overall idea বুঝতে অসুবিধা হচ্ছে। Synonym বা paraphrase এর কেবল সীমিত ধারনা আছে।</li>
                                  @elseif (number_format(($stu_result['reading']*100)/15)>34 && number_format(($stu_result['reading']*100)/15)<=51)
                                      <li class="mb-1" style="font-size:0.875rem;">Familiar vocabulary থাকলে complex sentence এর অর্থ এবং paragraph এর মূল idea বুঝতে পারছেন। কিন্তু যখন advanced vocabulary সহ complex sentence structure ছিলো তখন বুঝতে সমস্যা হয়েছে।</li>
                                  @elseif (number_format(($stu_result['reading']*100)/15)>51 && number_format(($stu_result['reading']*100)/15)<=68)
                                      <li class="mb-1" style="font-size:0.875rem;">Passage এ থাকা কয়েকটি advanced situation এর context বুঝতে পারেন নি। Passage পড়ে মাঝে মধ্যে context বোঝার ক্ষেত্রে inaccuracy এবং misunderstanding এর মত সমস্যা face করেছেন।</li>
                                  @elseif (number_format(($stu_result['reading']*100)/15)>51 && number_format(($stu_result['reading']*100)/15)<=85)
                                      <li class="mb-1" style="font-size:0.875rem;">Complex বা unfamiliar situation এ সীমিত কিছু ভুল করেছেন। Advanced vocabulary যেখানে ব্যবহার করা হয়েছে সেখানে context identify করতে confused হয়েছেন। নির্ভুল থাকার জন্য অনেক বেশী practice করতে হবে।  </li>
                                  @elseif (number_format(($stu_result['reading']*100)/15)>85 && number_format(($stu_result['reading']*100)/15)<=100)
                                      <li class="mb-1" style="font-size:0.875rem;">দ্রুত সময়ে পড়ে সঠিক ভাবে passage এর context এবং idea বুঝতে পারেন। অল্প সময়ে সঠিক তথ্য বের করে আনতে পারেন। তবে নির্ভুল থাকার জন্য practice করা চালিয়ে যাতে হবে। </li>
                                  @endif
                              </ul>
                              <div style="font-weight: 700; font-size:1rem; margin-top:8px;">Writing</div>
                              <ul style="margin: 0; padding: 0 0 0 15px;">
                                @if (number_format(($stu_result['grammar']*100)/15)==0)
                                    <li class="mb-1" style="font-size:0.875rem;">কোনো প্রশ্নের উত্তর দিতে পারি নি।</li>
                                @elseif (number_format(($stu_result['grammar']*100)/15)>0 && number_format(($stu_result['grammar']*100)/15)<=17)
                                    <li class="mb-1" style="font-size:0.875rem;">গ্রামারে অনেক বেশী দুর্বলতা আছে। </li>
                                    <li class="mb-1" style="font-size:0.875rem;">Sentence structure এ অনেক দুর্বলতা আছে।</li>
                                @elseif (number_format(($stu_result['grammar']*100)/15)>17 && number_format(($stu_result['grammar']*100)/15)<=34)
                                    <li class="mb-1" style="font-size:0.875rem;">Sentence structure সম্পর্কে basic ধারণা আছে।</li>
                                    <li class="mb-1" style="font-size:0.875rem;">তবে complex sentence অন্যান্য grammar item এ ভুল করেছেন এবং</li>
                                @elseif (number_format(($stu_result['grammar']*100)/15)>34 && number_format(($stu_result['grammar']*100)/15)<=51)
                                    <li class="mb-1" style="font-size:0.875rem;">একি passage এ simple এবং complex sentence এর ব্যবহার থাকলে আপনি সমস্যা face করেছেন। তার পাশাপাশি advanced grammar task ভুল করেছেন।</li>
                                @elseif (number_format(($stu_result['grammar']*100)/15)>51 && number_format(($stu_result['grammar']*100)/15)<=68)
                                    <li class="mb-1" style="font-size:0.875rem;">Advanced grammatical item এ অল্প পরিমানে ভুল করেছেন।</li>
                                @elseif (number_format(($stu_result['grammar']*100)/15)>51 && number_format(($stu_result['grammar']*100)/15)<=85)
                                    <li class="mb-1" style="font-size:0.875rem;">Grammatical এবং lexical item গুলো skillfully ব্যাবহার করতে পেরেছেন। তবে আপনি শতভাগ নির্ভুল নন। Occasional ভুল কমিয়ে আনতে অনেক বেশী practice করতে হবে।</li>
                                @elseif (number_format(($stu_result['grammar']*100)/15)>85 && number_format(($stu_result['grammar']*100)/15)<=100)
                                    <li class="mb-1" style="font-size:0.875rem;">যে কোন ধরনের grammatical structure ব্যাবহার করতে পারেন। তবে occasional ভুল না করতে practice চালিয়ে যেতে হবে। </li>
                                @endif


                                @if (number_format(($stu_result['vocabulary']*100)/15)==0)
                                    <li class="mb-1" style="font-size:0.875rem;">কোনো প্রশ্নের উত্তর দিতে পারি নি।</li>
                                @elseif (number_format(($stu_result['vocabulary']*100)/15)>0 && number_format(($stu_result['vocabulary']*100)/15)<=17)
                                    <li class="mb-1" style="font-size:0.875rem;">সঠিক ভাবে vocabulary এর ব্যবহারের দিক থেকে আপনি একজন Basic user</li>
                                @elseif (number_format(($stu_result['vocabulary']*100)/15)>17 && number_format(($stu_result['vocabulary']*100)/15)<=34)
                                    <li class="mb-1" style="font-size:0.875rem;">সঠিক ভাবে vocabulary এর ব্যবহারের দিক থেকে আপনি একজন Pre-intermediate user</li>
                                @elseif (number_format(($stu_result['vocabulary']*100)/15)>34 && number_format(($stu_result['vocabulary']*100)/15)<=51)
                                    <li class="mb-1" style="font-size:0.875rem;">সঠিক ভাবে vocabulary এর ব্যবহারের দিক থেকে আপনি একজন Intermediate user</li>
                                @elseif (number_format(($stu_result['vocabulary']*100)/15)>51 && number_format(($stu_result['vocabulary']*100)/15)<=68)
                                    <li class="mb-1" style="font-size:0.875rem;">সঠিক ভাবে vocabulary এর ব্যবহারের দিক থেকে আপনি একজন Upper intermediate user</li>
                                @elseif (number_format(($stu_result['vocabulary']*100)/15)>51 && number_format(($stu_result['vocabulary']*100)/15)<=85)
                                    <li class="mb-1" style="font-size:0.875rem;">সঠিক ভাবে vocabulary এর ব্যবহারের দিক থেকে আপনি একজন Advanced user</li>
                                @elseif (number_format(($stu_result['vocabulary']*100)/15)>85 && number_format(($stu_result['vocabulary']*100)/15)<=100)
                                    <li class="mb-1" style="font-size:0.875rem;">সঠিক ভাবে vocabulary এর ব্যবহারের দিক থেকে আপনি একজন Proficient  user </li>
                                @endif
                            </ul>
                        </div>
                    </div>
                  <div style="font-size: 1.125rem; margin-top: 2rem !important; margin-bottom: 0.875rem !important; font-weight: 700; line-height: 1.6rem;">
                    Band 
                    @if ($stu_result['level'] == 'A1')
                      4.0
                    @elseif ($stu_result['level'] == 'A2')
                      4.5 - 5.0
                    @elseif ($stu_result['level'] == 'B1')
                      5.0 - 5.5
                    @elseif ($stu_result['level'] == 'B2')
                      6.0 - 6.5
                    @elseif ($stu_result['level'] == 'C1')
                      7.0 - 7.5
                    @endif 
                    থেকে Band 
                    {{$stu_result['target_score']}}
                    এ যেতে যে কোর্সগুলো করতে হবে
                  </div>
                  @if ($stu_result['level'] == 'A1' && $stu_result['target_score']<7)
                    <div style="display: -webkit-box;">
                      <div style="width: 40%;">
                        <div style="border: 1px solid #004AAD; border-radius: 4px; padding: 5px 8px; text-align: center;">
                          <!--check icon -->
                          <svg xmlns="http://www.w3.org/2000/svg" width="14" height="15" viewBox="0 0 14 15" fill="none">
                            <path d="M6.93295 12.8453C3.74206 12.8453 1.15549 10.2337 1.15549 7.01198C1.15549 3.79023 3.74206 1.17865 6.93295 1.17865C10.1238 1.17865 12.7104 3.79023 12.7104 7.01198C12.7104 10.2337 10.1238 12.8453 6.93295 12.8453ZM6.35694 9.34532L10.4416 5.22057L9.62467 4.39573L6.35694 7.69565L4.7225 6.0454L3.90556 6.87023L6.35694 9.34532Z" fill="#004AAD"/>
                          </svg>
                          <span style="color: #4D4B4B; font-size: 1rem; font-weight: 600; line-height: 1.3125rem;">A1 Level</span>
                        </div>
                      </div>
                      <div style="width: 40%; margin-left:8px;">
                        <div style="border: 1px solid #004AAD; border-radius: 4px; padding: 5px 8px; text-align: center;">
                          <!--check icon -->
                          <svg xmlns="http://www.w3.org/2000/svg" width="14" height="15" viewBox="0 0 14 15" fill="none">
                            <path d="M6.93295 12.8453C3.74206 12.8453 1.15549 10.2337 1.15549 7.01198C1.15549 3.79023 3.74206 1.17865 6.93295 1.17865C10.1238 1.17865 12.7104 3.79023 12.7104 7.01198C12.7104 10.2337 10.1238 12.8453 6.93295 12.8453ZM6.35694 9.34532L10.4416 5.22057L9.62467 4.39573L6.35694 7.69565L4.7225 6.0454L3.90556 6.87023L6.35694 9.34532Z" fill="#004AAD"/>
                          </svg>
                          <span style="color: #4D4B4B; font-size: 1rem; font-weight: 600; line-height: 1.3125rem;">A2 Level</span>
                        </div>
                      </div>
                    </div>
                    <div style="display: -webkit-box; margin-top:8px;">
                        <div style="width: 40%;">
                          <div style="border: 1px solid #004AAD; border-radius: 4px; padding: 5px 8px; text-align: center;">
                              <!--check icon -->
                            <svg xmlns="http://www.w3.org/2000/svg" width="14" height="15" viewBox="0 0 14 15" fill="none">
                              <path d="M6.93295 12.8453C3.74206 12.8453 1.15549 10.2337 1.15549 7.01198C1.15549 3.79023 3.74206 1.17865 6.93295 1.17865C10.1238 1.17865 12.7104 3.79023 12.7104 7.01198C12.7104 10.2337 10.1238 12.8453 6.93295 12.8453ZM6.35694 9.34532L10.4416 5.22057L9.62467 4.39573L6.35694 7.69565L4.7225 6.0454L3.90556 6.87023L6.35694 9.34532Z" fill="#004AAD"/>
                            </svg>
                            <span style="color: #4D4B4B; font-size: 1rem; font-weight: 600; line-height: 1.3125rem;">B1 Level</span>
                          </div>
                        </div>
                        <div style="width: 40%; margin-left:8px;">
                          <div style="border: 1px solid #004AAD; border-radius: 4px; padding: 5px 8px; text-align: center;">
                            <!--check icon -->
                            <svg xmlns="http://www.w3.org/2000/svg" width="14" height="15" viewBox="0 0 14 15" fill="none">
                              <path d="M6.93295 12.8453C3.74206 12.8453 1.15549 10.2337 1.15549 7.01198C1.15549 3.79023 3.74206 1.17865 6.93295 1.17865C10.1238 1.17865 12.7104 3.79023 12.7104 7.01198C12.7104 10.2337 10.1238 12.8453 6.93295 12.8453ZM6.35694 9.34532L10.4416 5.22057L9.62467 4.39573L6.35694 7.69565L4.7225 6.0454L3.90556 6.87023L6.35694 9.34532Z" fill="#004AAD"/>
                            </svg>
                            <span style="color: #4D4B4B; font-size: 1rem; font-weight: 600; line-height: 1.3125rem;">B2 Level</span>
                          </div>
                        </div>
                    </div>
                    <div style="display: -webkit-box; margin-top:8px;">
                      <div style="width: 40%;">
                        <div style="border: 1px solid #004AAD; border-radius: 4px; padding: 5px 8px; text-align: center;">
                            <!--cross icon -->
                            <svg xmlns="http://www.w3.org/2000/svg" width="14" height="15" viewBox="0 0 14 15" fill="none">
                              <g clip-path="url(#clip0_2611_1285)">
                                <path d="M7 0.595276C5.7309 0.595276 4.49031 0.971607 3.43509 1.67668C2.37988 2.38175 1.55744 3.3839 1.07177 4.55639C0.586112 5.72888 0.459041 7.01906 0.706629 8.26377C0.954218 9.50848 1.56535 10.6518 2.46273 11.5492C3.36012 12.4466 4.50346 13.0577 5.74817 13.3053C6.99288 13.5529 8.28306 13.4258 9.45555 12.9402C10.628 12.4545 11.6302 11.6321 12.3353 10.5769C13.0403 9.52164 13.4167 8.28104 13.4167 7.01194C13.4167 5.31014 12.7406 3.67803 11.5373 2.47467C10.3339 1.27132 8.70181 0.595276 7 0.595276ZM9.74575 8.93286C9.80147 8.98667 9.8459 9.05104 9.87648 9.12221C9.90705 9.19338 9.92314 9.26992 9.92381 9.34738C9.92449 9.42483 9.90973 9.50164 9.8804 9.57333C9.85107 9.64502 9.80775 9.71015 9.75298 9.76492C9.69821 9.81969 9.63308 9.86301 9.56139 9.89234C9.4897 9.92167 9.41289 9.93643 9.33543 9.93576C9.25798 9.93508 9.18143 9.91899 9.11027 9.88842C9.0391 9.85785 8.97473 9.81341 8.92092 9.75769L7 7.83678L5.07908 9.75769C5.02527 9.81341 4.96091 9.85785 4.88974 9.88842C4.81857 9.91899 4.74202 9.93508 4.66457 9.93576C4.58711 9.93643 4.5103 9.92167 4.43861 9.89234C4.36692 9.86301 4.30179 9.81969 4.24702 9.76492C4.19225 9.71015 4.14894 9.64502 4.11961 9.57333C4.09027 9.50164 4.07552 9.42483 4.07619 9.34738C4.07686 9.26992 4.09295 9.19338 4.12353 9.12221C4.1541 9.05104 4.19854 8.98667 4.25425 8.93286L6.17517 7.01194L4.25425 5.09103C4.19854 5.03722 4.1541 4.97285 4.12353 4.90168C4.09295 4.83051 4.07686 4.75396 4.07619 4.67651C4.07552 4.59906 4.09027 4.52224 4.11961 4.45055C4.14894 4.37886 4.19225 4.31373 4.24702 4.25896C4.30179 4.20419 4.36692 4.16088 4.43861 4.13155C4.5103 4.10222 4.58711 4.08746 4.66457 4.08813C4.74202 4.0888 4.81857 4.1049 4.88974 4.13547C4.96091 4.16604 5.02527 4.21048 5.07908 4.26619L7 6.18711L8.92092 4.26619C8.97473 4.21048 9.0391 4.16604 9.11027 4.13547C9.18143 4.1049 9.25798 4.0888 9.33543 4.08813C9.41289 4.08746 9.4897 4.10222 9.56139 4.13155C9.63308 4.16088 9.69821 4.20419 9.75298 4.25896C9.80775 4.31373 9.85107 4.37886 9.8804 4.45055C9.90973 4.52224 9.92449 4.59906 9.92381 4.67651C9.92314 4.75396 9.90705 4.83051 9.87648 4.90168C9.8459 4.97285 9.80147 5.03722 9.74575 5.09103L7.82483 7.01194L9.74575 8.93286Z" fill="#F51B0D"/>
                              </g>
                              <defs>
                                <clipPath id="clip0_2611_1285">
                                  <rect width="14" height="14" fill="white" transform="translate(0 0.0119629)"/>
                                </clipPath>
                              </defs>
                            </svg>
                          <span style="color: #4D4B4B; font-size: 1rem; font-weight: 600; line-height: 1.3125rem;">C1 Level</span>
                        </div>
                      </div>
                    </div>
                  @elseif($stu_result['level'] == 'A1' && $stu_result['target_score']>=7)
                    <div style="display: -webkit-box;">
                      <div style="width: 40%;">
                        <div style="border: 1px solid #004AAD; border-radius: 4px; padding: 5px 8px; text-align: center;">
                          <!--check icon -->
                          <svg xmlns="http://www.w3.org/2000/svg" width="14" height="15" viewBox="0 0 14 15" fill="none">
                            <path d="M6.93295 12.8453C3.74206 12.8453 1.15549 10.2337 1.15549 7.01198C1.15549 3.79023 3.74206 1.17865 6.93295 1.17865C10.1238 1.17865 12.7104 3.79023 12.7104 7.01198C12.7104 10.2337 10.1238 12.8453 6.93295 12.8453ZM6.35694 9.34532L10.4416 5.22057L9.62467 4.39573L6.35694 7.69565L4.7225 6.0454L3.90556 6.87023L6.35694 9.34532Z" fill="#004AAD"/>
                          </svg>
                          <span style="color: #4D4B4B; font-size: 1rem; font-weight: 600; line-height: 1.3125rem;">A1 Level</span>
                        </div>
                      </div>
                      <div style="width: 40%; margin-left:8px;">
                        <div style="border: 1px solid #004AAD; border-radius: 4px; padding: 5px 8px; text-align: center;">
                          <!--check icon -->
                          <svg xmlns="http://www.w3.org/2000/svg" width="14" height="15" viewBox="0 0 14 15" fill="none">
                            <path d="M6.93295 12.8453C3.74206 12.8453 1.15549 10.2337 1.15549 7.01198C1.15549 3.79023 3.74206 1.17865 6.93295 1.17865C10.1238 1.17865 12.7104 3.79023 12.7104 7.01198C12.7104 10.2337 10.1238 12.8453 6.93295 12.8453ZM6.35694 9.34532L10.4416 5.22057L9.62467 4.39573L6.35694 7.69565L4.7225 6.0454L3.90556 6.87023L6.35694 9.34532Z" fill="#004AAD"/>
                          </svg>
                          <span style="color: #4D4B4B; font-size: 1rem; font-weight: 600; line-height: 1.3125rem;">A2 Level</span>
                        </div>
                      </div>
                    </div>
                    <div style="display: -webkit-box; margin-top:8px;">
                        <div style="width: 40%;">
                          <div style="border: 1px solid #004AAD; border-radius: 4px; padding: 5px 8px; text-align: center;">
                              <!--check icon -->
                            <svg xmlns="http://www.w3.org/2000/svg" width="14" height="15" viewBox="0 0 14 15" fill="none">
                              <path d="M6.93295 12.8453C3.74206 12.8453 1.15549 10.2337 1.15549 7.01198C1.15549 3.79023 3.74206 1.17865 6.93295 1.17865C10.1238 1.17865 12.7104 3.79023 12.7104 7.01198C12.7104 10.2337 10.1238 12.8453 6.93295 12.8453ZM6.35694 9.34532L10.4416 5.22057L9.62467 4.39573L6.35694 7.69565L4.7225 6.0454L3.90556 6.87023L6.35694 9.34532Z" fill="#004AAD"/>
                            </svg>
                            <span style="color: #4D4B4B; font-size: 1rem; font-weight: 600; line-height: 1.3125rem;">B1 Level</span>
                          </div>
                        </div>
                        <div style="width: 40%; margin-left:8px;">
                          <div style="border: 1px solid #004AAD; border-radius: 4px; padding: 5px 8px; text-align: center;">
                            <!--check icon -->
                            <svg xmlns="http://www.w3.org/2000/svg" width="14" height="15" viewBox="0 0 14 15" fill="none">
                              <path d="M6.93295 12.8453C3.74206 12.8453 1.15549 10.2337 1.15549 7.01198C1.15549 3.79023 3.74206 1.17865 6.93295 1.17865C10.1238 1.17865 12.7104 3.79023 12.7104 7.01198C12.7104 10.2337 10.1238 12.8453 6.93295 12.8453ZM6.35694 9.34532L10.4416 5.22057L9.62467 4.39573L6.35694 7.69565L4.7225 6.0454L3.90556 6.87023L6.35694 9.34532Z" fill="#004AAD"/>
                            </svg>
                            <span style="color: #4D4B4B; font-size: 1rem; font-weight: 600; line-height: 1.3125rem;">B2 Level</span>
                          </div>
                        </div>
                    </div>
                    <div style="display: -webkit-box; margin-top:8px;">
                      <div style="width: 40%;">
                        <div style="border: 1px solid #004AAD; border-radius: 4px; padding: 5px 8px; text-align: center;">
                            <!--check icon -->
                            <svg xmlns="http://www.w3.org/2000/svg" width="14" height="15" viewBox="0 0 14 15" fill="none">
                              <path d="M6.93295 12.8453C3.74206 12.8453 1.15549 10.2337 1.15549 7.01198C1.15549 3.79023 3.74206 1.17865 6.93295 1.17865C10.1238 1.17865 12.7104 3.79023 12.7104 7.01198C12.7104 10.2337 10.1238 12.8453 6.93295 12.8453ZM6.35694 9.34532L10.4416 5.22057L9.62467 4.39573L6.35694 7.69565L4.7225 6.0454L3.90556 6.87023L6.35694 9.34532Z" fill="#004AAD"/>
                            </svg>
                          <span style="color: #4D4B4B; font-size: 1rem; font-weight: 600; line-height: 1.3125rem;">C1 Level</span>
                        </div>
                      </div>
                    </div>
                  @elseif($stu_result['level'] == 'A2' && $stu_result['target_score']<7)
                    <div style="display: -webkit-box;">
                      <div style="width: 40%;">
                        <div style="border: 1px solid #004AAD; border-radius: 4px; padding: 5px 8px; text-align: center;">
                          <!--cross icon -->
                          <svg xmlns="http://www.w3.org/2000/svg" width="14" height="15" viewBox="0 0 14 15" fill="none">
                            <g clip-path="url(#clip0_2611_1285)">
                              <path d="M7 0.595276C5.7309 0.595276 4.49031 0.971607 3.43509 1.67668C2.37988 2.38175 1.55744 3.3839 1.07177 4.55639C0.586112 5.72888 0.459041 7.01906 0.706629 8.26377C0.954218 9.50848 1.56535 10.6518 2.46273 11.5492C3.36012 12.4466 4.50346 13.0577 5.74817 13.3053C6.99288 13.5529 8.28306 13.4258 9.45555 12.9402C10.628 12.4545 11.6302 11.6321 12.3353 10.5769C13.0403 9.52164 13.4167 8.28104 13.4167 7.01194C13.4167 5.31014 12.7406 3.67803 11.5373 2.47467C10.3339 1.27132 8.70181 0.595276 7 0.595276ZM9.74575 8.93286C9.80147 8.98667 9.8459 9.05104 9.87648 9.12221C9.90705 9.19338 9.92314 9.26992 9.92381 9.34738C9.92449 9.42483 9.90973 9.50164 9.8804 9.57333C9.85107 9.64502 9.80775 9.71015 9.75298 9.76492C9.69821 9.81969 9.63308 9.86301 9.56139 9.89234C9.4897 9.92167 9.41289 9.93643 9.33543 9.93576C9.25798 9.93508 9.18143 9.91899 9.11027 9.88842C9.0391 9.85785 8.97473 9.81341 8.92092 9.75769L7 7.83678L5.07908 9.75769C5.02527 9.81341 4.96091 9.85785 4.88974 9.88842C4.81857 9.91899 4.74202 9.93508 4.66457 9.93576C4.58711 9.93643 4.5103 9.92167 4.43861 9.89234C4.36692 9.86301 4.30179 9.81969 4.24702 9.76492C4.19225 9.71015 4.14894 9.64502 4.11961 9.57333C4.09027 9.50164 4.07552 9.42483 4.07619 9.34738C4.07686 9.26992 4.09295 9.19338 4.12353 9.12221C4.1541 9.05104 4.19854 8.98667 4.25425 8.93286L6.17517 7.01194L4.25425 5.09103C4.19854 5.03722 4.1541 4.97285 4.12353 4.90168C4.09295 4.83051 4.07686 4.75396 4.07619 4.67651C4.07552 4.59906 4.09027 4.52224 4.11961 4.45055C4.14894 4.37886 4.19225 4.31373 4.24702 4.25896C4.30179 4.20419 4.36692 4.16088 4.43861 4.13155C4.5103 4.10222 4.58711 4.08746 4.66457 4.08813C4.74202 4.0888 4.81857 4.1049 4.88974 4.13547C4.96091 4.16604 5.02527 4.21048 5.07908 4.26619L7 6.18711L8.92092 4.26619C8.97473 4.21048 9.0391 4.16604 9.11027 4.13547C9.18143 4.1049 9.25798 4.0888 9.33543 4.08813C9.41289 4.08746 9.4897 4.10222 9.56139 4.13155C9.63308 4.16088 9.69821 4.20419 9.75298 4.25896C9.80775 4.31373 9.85107 4.37886 9.8804 4.45055C9.90973 4.52224 9.92449 4.59906 9.92381 4.67651C9.92314 4.75396 9.90705 4.83051 9.87648 4.90168C9.8459 4.97285 9.80147 5.03722 9.74575 5.09103L7.82483 7.01194L9.74575 8.93286Z" fill="#F51B0D"/>
                            </g>
                            <defs>
                              <clipPath id="clip0_2611_1285">
                                <rect width="14" height="14" fill="white" transform="translate(0 0.0119629)"/>
                              </clipPath>
                            </defs>
                          </svg>
                          <span style="color: #4D4B4B; font-size: 1rem; font-weight: 600; line-height: 1.3125rem;">A1 Level</span>
                        </div>
                      </div>
                      <div style="width: 40%;">
                        <div style="border: 1px solid #004AAD; border-radius: 4px; padding: 5px 8px; text-align: center;">
                          <!--check icon -->
                          <svg xmlns="http://www.w3.org/2000/svg" width="14" height="15" viewBox="0 0 14 15" fill="none">
                            <path d="M6.93295 12.8453C3.74206 12.8453 1.15549 10.2337 1.15549 7.01198C1.15549 3.79023 3.74206 1.17865 6.93295 1.17865C10.1238 1.17865 12.7104 3.79023 12.7104 7.01198C12.7104 10.2337 10.1238 12.8453 6.93295 12.8453ZM6.35694 9.34532L10.4416 5.22057L9.62467 4.39573L6.35694 7.69565L4.7225 6.0454L3.90556 6.87023L6.35694 9.34532Z" fill="#004AAD"/>
                          </svg>
                          <span style="color: #4D4B4B; font-size: 1rem; font-weight: 600; line-height: 1.3125rem;">A2 Level</span>
                        </div>
                      </div>
                    </div>
                    <div style="display: -webkit-box; margin-top:8px;">
                        <div style="width: 40%;">
                          <div style="border: 1px solid #004AAD; border-radius: 4px; padding: 5px 8px; text-align: center;">
                              <!--check icon -->
                            <svg xmlns="http://www.w3.org/2000/svg" width="14" height="15" viewBox="0 0 14 15" fill="none">
                              <path d="M6.93295 12.8453C3.74206 12.8453 1.15549 10.2337 1.15549 7.01198C1.15549 3.79023 3.74206 1.17865 6.93295 1.17865C10.1238 1.17865 12.7104 3.79023 12.7104 7.01198C12.7104 10.2337 10.1238 12.8453 6.93295 12.8453ZM6.35694 9.34532L10.4416 5.22057L9.62467 4.39573L6.35694 7.69565L4.7225 6.0454L3.90556 6.87023L6.35694 9.34532Z" fill="#004AAD"/>
                            </svg>
                            <span style="color: #4D4B4B; font-size: 1rem; font-weight: 600; line-height: 1.3125rem;">B1 Level</span>
                          </div>
                        </div>
                        <div style="width: 40%; margin-left:8px;">
                          <div style="border: 1px solid #004AAD; border-radius: 4px; padding: 5px 8px; text-align: center;">
                            <!--check icon -->
                            <svg xmlns="http://www.w3.org/2000/svg" width="14" height="15" viewBox="0 0 14 15" fill="none">
                              <path d="M6.93295 12.8453C3.74206 12.8453 1.15549 10.2337 1.15549 7.01198C1.15549 3.79023 3.74206 1.17865 6.93295 1.17865C10.1238 1.17865 12.7104 3.79023 12.7104 7.01198C12.7104 10.2337 10.1238 12.8453 6.93295 12.8453ZM6.35694 9.34532L10.4416 5.22057L9.62467 4.39573L6.35694 7.69565L4.7225 6.0454L3.90556 6.87023L6.35694 9.34532Z" fill="#004AAD"/>
                            </svg>
                            <span style="color: #4D4B4B; font-size: 1rem; font-weight: 600; line-height: 1.3125rem;">B2 Level</span>
                          </div>
                        </div>
                    </div>
                    <div style="display: -webkit-box; margin-top:8px;">
                      <div style="width: 40%;">
                        <div style="border: 1px solid #004AAD; border-radius: 4px; padding: 5px 8px; text-align: center;">
                            <!--cross icon -->
                            <svg xmlns="http://www.w3.org/2000/svg" width="14" height="15" viewBox="0 0 14 15" fill="none">
                              <g clip-path="url(#clip0_2611_1285)">
                                <path d="M7 0.595276C5.7309 0.595276 4.49031 0.971607 3.43509 1.67668C2.37988 2.38175 1.55744 3.3839 1.07177 4.55639C0.586112 5.72888 0.459041 7.01906 0.706629 8.26377C0.954218 9.50848 1.56535 10.6518 2.46273 11.5492C3.36012 12.4466 4.50346 13.0577 5.74817 13.3053C6.99288 13.5529 8.28306 13.4258 9.45555 12.9402C10.628 12.4545 11.6302 11.6321 12.3353 10.5769C13.0403 9.52164 13.4167 8.28104 13.4167 7.01194C13.4167 5.31014 12.7406 3.67803 11.5373 2.47467C10.3339 1.27132 8.70181 0.595276 7 0.595276ZM9.74575 8.93286C9.80147 8.98667 9.8459 9.05104 9.87648 9.12221C9.90705 9.19338 9.92314 9.26992 9.92381 9.34738C9.92449 9.42483 9.90973 9.50164 9.8804 9.57333C9.85107 9.64502 9.80775 9.71015 9.75298 9.76492C9.69821 9.81969 9.63308 9.86301 9.56139 9.89234C9.4897 9.92167 9.41289 9.93643 9.33543 9.93576C9.25798 9.93508 9.18143 9.91899 9.11027 9.88842C9.0391 9.85785 8.97473 9.81341 8.92092 9.75769L7 7.83678L5.07908 9.75769C5.02527 9.81341 4.96091 9.85785 4.88974 9.88842C4.81857 9.91899 4.74202 9.93508 4.66457 9.93576C4.58711 9.93643 4.5103 9.92167 4.43861 9.89234C4.36692 9.86301 4.30179 9.81969 4.24702 9.76492C4.19225 9.71015 4.14894 9.64502 4.11961 9.57333C4.09027 9.50164 4.07552 9.42483 4.07619 9.34738C4.07686 9.26992 4.09295 9.19338 4.12353 9.12221C4.1541 9.05104 4.19854 8.98667 4.25425 8.93286L6.17517 7.01194L4.25425 5.09103C4.19854 5.03722 4.1541 4.97285 4.12353 4.90168C4.09295 4.83051 4.07686 4.75396 4.07619 4.67651C4.07552 4.59906 4.09027 4.52224 4.11961 4.45055C4.14894 4.37886 4.19225 4.31373 4.24702 4.25896C4.30179 4.20419 4.36692 4.16088 4.43861 4.13155C4.5103 4.10222 4.58711 4.08746 4.66457 4.08813C4.74202 4.0888 4.81857 4.1049 4.88974 4.13547C4.96091 4.16604 5.02527 4.21048 5.07908 4.26619L7 6.18711L8.92092 4.26619C8.97473 4.21048 9.0391 4.16604 9.11027 4.13547C9.18143 4.1049 9.25798 4.0888 9.33543 4.08813C9.41289 4.08746 9.4897 4.10222 9.56139 4.13155C9.63308 4.16088 9.69821 4.20419 9.75298 4.25896C9.80775 4.31373 9.85107 4.37886 9.8804 4.45055C9.90973 4.52224 9.92449 4.59906 9.92381 4.67651C9.92314 4.75396 9.90705 4.83051 9.87648 4.90168C9.8459 4.97285 9.80147 5.03722 9.74575 5.09103L7.82483 7.01194L9.74575 8.93286Z" fill="#F51B0D"/>
                              </g>
                              <defs>
                                <clipPath id="clip0_2611_1285">
                                  <rect width="14" height="14" fill="white" transform="translate(0 0.0119629)"/>
                                </clipPath>
                              </defs>
                            </svg>
                          <span style="color: #4D4B4B; font-size: 1rem; font-weight: 600; line-height: 1.3125rem;">C1 Level</span>
                        </div>
                      </div>
                    </div>
                  @elseif($stu_result['level'] == 'A2' && $stu_result['target_score']>=7)
                    <div style="display: -webkit-box;">
                      <div style="width: 40%;">
                        <div style="border: 1px solid #004AAD; border-radius: 4px; padding: 5px 8px; text-align: center;">
                         <!--cross icon -->
                         <svg xmlns="http://www.w3.org/2000/svg" width="14" height="15" viewBox="0 0 14 15" fill="none">
                          <g clip-path="url(#clip0_2611_1285)">
                            <path d="M7 0.595276C5.7309 0.595276 4.49031 0.971607 3.43509 1.67668C2.37988 2.38175 1.55744 3.3839 1.07177 4.55639C0.586112 5.72888 0.459041 7.01906 0.706629 8.26377C0.954218 9.50848 1.56535 10.6518 2.46273 11.5492C3.36012 12.4466 4.50346 13.0577 5.74817 13.3053C6.99288 13.5529 8.28306 13.4258 9.45555 12.9402C10.628 12.4545 11.6302 11.6321 12.3353 10.5769C13.0403 9.52164 13.4167 8.28104 13.4167 7.01194C13.4167 5.31014 12.7406 3.67803 11.5373 2.47467C10.3339 1.27132 8.70181 0.595276 7 0.595276ZM9.74575 8.93286C9.80147 8.98667 9.8459 9.05104 9.87648 9.12221C9.90705 9.19338 9.92314 9.26992 9.92381 9.34738C9.92449 9.42483 9.90973 9.50164 9.8804 9.57333C9.85107 9.64502 9.80775 9.71015 9.75298 9.76492C9.69821 9.81969 9.63308 9.86301 9.56139 9.89234C9.4897 9.92167 9.41289 9.93643 9.33543 9.93576C9.25798 9.93508 9.18143 9.91899 9.11027 9.88842C9.0391 9.85785 8.97473 9.81341 8.92092 9.75769L7 7.83678L5.07908 9.75769C5.02527 9.81341 4.96091 9.85785 4.88974 9.88842C4.81857 9.91899 4.74202 9.93508 4.66457 9.93576C4.58711 9.93643 4.5103 9.92167 4.43861 9.89234C4.36692 9.86301 4.30179 9.81969 4.24702 9.76492C4.19225 9.71015 4.14894 9.64502 4.11961 9.57333C4.09027 9.50164 4.07552 9.42483 4.07619 9.34738C4.07686 9.26992 4.09295 9.19338 4.12353 9.12221C4.1541 9.05104 4.19854 8.98667 4.25425 8.93286L6.17517 7.01194L4.25425 5.09103C4.19854 5.03722 4.1541 4.97285 4.12353 4.90168C4.09295 4.83051 4.07686 4.75396 4.07619 4.67651C4.07552 4.59906 4.09027 4.52224 4.11961 4.45055C4.14894 4.37886 4.19225 4.31373 4.24702 4.25896C4.30179 4.20419 4.36692 4.16088 4.43861 4.13155C4.5103 4.10222 4.58711 4.08746 4.66457 4.08813C4.74202 4.0888 4.81857 4.1049 4.88974 4.13547C4.96091 4.16604 5.02527 4.21048 5.07908 4.26619L7 6.18711L8.92092 4.26619C8.97473 4.21048 9.0391 4.16604 9.11027 4.13547C9.18143 4.1049 9.25798 4.0888 9.33543 4.08813C9.41289 4.08746 9.4897 4.10222 9.56139 4.13155C9.63308 4.16088 9.69821 4.20419 9.75298 4.25896C9.80775 4.31373 9.85107 4.37886 9.8804 4.45055C9.90973 4.52224 9.92449 4.59906 9.92381 4.67651C9.92314 4.75396 9.90705 4.83051 9.87648 4.90168C9.8459 4.97285 9.80147 5.03722 9.74575 5.09103L7.82483 7.01194L9.74575 8.93286Z" fill="#F51B0D"/>
                          </g>
                          <defs>
                            <clipPath id="clip0_2611_1285">
                              <rect width="14" height="14" fill="white" transform="translate(0 0.0119629)"/>
                            </clipPath>
                          </defs>
                        </svg>
                          <span style="color: #4D4B4B; font-size: 1rem; font-weight: 600; line-height: 1.3125rem;">A1 Level</span>
                        </div>
                      </div>
                      <div style="width: 40%; margin-left:8px;">
                        <div style="border: 1px solid #004AAD; border-radius: 4px; padding: 5px 8px; text-align: center;">
                          <!--check icon -->
                          <svg xmlns="http://www.w3.org/2000/svg" width="14" height="15" viewBox="0 0 14 15" fill="none">
                            <path d="M6.93295 12.8453C3.74206 12.8453 1.15549 10.2337 1.15549 7.01198C1.15549 3.79023 3.74206 1.17865 6.93295 1.17865C10.1238 1.17865 12.7104 3.79023 12.7104 7.01198C12.7104 10.2337 10.1238 12.8453 6.93295 12.8453ZM6.35694 9.34532L10.4416 5.22057L9.62467 4.39573L6.35694 7.69565L4.7225 6.0454L3.90556 6.87023L6.35694 9.34532Z" fill="#004AAD"/>
                          </svg>
                          <span style="color: #4D4B4B; font-size: 1rem; font-weight: 600; line-height: 1.3125rem;">A2 Level</span>
                        </div>
                      </div>
                    </div>
                    <div style="display: -webkit-box; margin-top:8px;">
                        <div style="width: 40%;">
                          <div style="border: 1px solid #004AAD; border-radius: 4px; padding: 5px 8px; text-align: center;">
                              <!--check icon -->
                            <svg xmlns="http://www.w3.org/2000/svg" width="14" height="15" viewBox="0 0 14 15" fill="none">
                              <path d="M6.93295 12.8453C3.74206 12.8453 1.15549 10.2337 1.15549 7.01198C1.15549 3.79023 3.74206 1.17865 6.93295 1.17865C10.1238 1.17865 12.7104 3.79023 12.7104 7.01198C12.7104 10.2337 10.1238 12.8453 6.93295 12.8453ZM6.35694 9.34532L10.4416 5.22057L9.62467 4.39573L6.35694 7.69565L4.7225 6.0454L3.90556 6.87023L6.35694 9.34532Z" fill="#004AAD"/>
                            </svg>
                            <span style="color: #4D4B4B; font-size: 1rem; font-weight: 600; line-height: 1.3125rem;">B1 Level</span>
                          </div>
                        </div>
                        <div style="width: 40%; margin-left:8px;">
                          <div style="border: 1px solid #004AAD; border-radius: 4px; padding: 5px 8px; text-align: center;">
                            <!--check icon -->
                            <svg xmlns="http://www.w3.org/2000/svg" width="14" height="15" viewBox="0 0 14 15" fill="none">
                              <path d="M6.93295 12.8453C3.74206 12.8453 1.15549 10.2337 1.15549 7.01198C1.15549 3.79023 3.74206 1.17865 6.93295 1.17865C10.1238 1.17865 12.7104 3.79023 12.7104 7.01198C12.7104 10.2337 10.1238 12.8453 6.93295 12.8453ZM6.35694 9.34532L10.4416 5.22057L9.62467 4.39573L6.35694 7.69565L4.7225 6.0454L3.90556 6.87023L6.35694 9.34532Z" fill="#004AAD"/>
                            </svg>
                            <span style="color: #4D4B4B; font-size: 1rem; font-weight: 600; line-height: 1.3125rem;">B2 Level</span>
                          </div>
                        </div>
                    </div>
                    <div style="display: -webkit-box; margin-top:8px;">
                      <div style="width: 40%;">
                        <div style="border: 1px solid #004AAD; border-radius: 4px; padding: 5px 8px; text-align: center;">
                            <!--check icon -->
                            <svg xmlns="http://www.w3.org/2000/svg" width="14" height="15" viewBox="0 0 14 15" fill="none">
                              <path d="M6.93295 12.8453C3.74206 12.8453 1.15549 10.2337 1.15549 7.01198C1.15549 3.79023 3.74206 1.17865 6.93295 1.17865C10.1238 1.17865 12.7104 3.79023 12.7104 7.01198C12.7104 10.2337 10.1238 12.8453 6.93295 12.8453ZM6.35694 9.34532L10.4416 5.22057L9.62467 4.39573L6.35694 7.69565L4.7225 6.0454L3.90556 6.87023L6.35694 9.34532Z" fill="#004AAD"/>
                            </svg>
                          <span style="color: #4D4B4B; font-size: 1rem; font-weight: 600; line-height: 1.3125rem;">C1 Level</span>
                        </div>
                      </div>
                    </div>
                  @elseif($stu_result['level'] == 'B1' && $stu_result['target_score']<7)
                    <div style="display: -webkit-box;">
                      <div style="width: 40%;">
                        <div style="border: 1px solid #004AAD; border-radius: 4px; padding: 5px 8px; text-align: center;">
                         <!--cross icon -->
                         <svg xmlns="http://www.w3.org/2000/svg" width="14" height="15" viewBox="0 0 14 15" fill="none">
                          <g clip-path="url(#clip0_2611_1285)">
                            <path d="M7 0.595276C5.7309 0.595276 4.49031 0.971607 3.43509 1.67668C2.37988 2.38175 1.55744 3.3839 1.07177 4.55639C0.586112 5.72888 0.459041 7.01906 0.706629 8.26377C0.954218 9.50848 1.56535 10.6518 2.46273 11.5492C3.36012 12.4466 4.50346 13.0577 5.74817 13.3053C6.99288 13.5529 8.28306 13.4258 9.45555 12.9402C10.628 12.4545 11.6302 11.6321 12.3353 10.5769C13.0403 9.52164 13.4167 8.28104 13.4167 7.01194C13.4167 5.31014 12.7406 3.67803 11.5373 2.47467C10.3339 1.27132 8.70181 0.595276 7 0.595276ZM9.74575 8.93286C9.80147 8.98667 9.8459 9.05104 9.87648 9.12221C9.90705 9.19338 9.92314 9.26992 9.92381 9.34738C9.92449 9.42483 9.90973 9.50164 9.8804 9.57333C9.85107 9.64502 9.80775 9.71015 9.75298 9.76492C9.69821 9.81969 9.63308 9.86301 9.56139 9.89234C9.4897 9.92167 9.41289 9.93643 9.33543 9.93576C9.25798 9.93508 9.18143 9.91899 9.11027 9.88842C9.0391 9.85785 8.97473 9.81341 8.92092 9.75769L7 7.83678L5.07908 9.75769C5.02527 9.81341 4.96091 9.85785 4.88974 9.88842C4.81857 9.91899 4.74202 9.93508 4.66457 9.93576C4.58711 9.93643 4.5103 9.92167 4.43861 9.89234C4.36692 9.86301 4.30179 9.81969 4.24702 9.76492C4.19225 9.71015 4.14894 9.64502 4.11961 9.57333C4.09027 9.50164 4.07552 9.42483 4.07619 9.34738C4.07686 9.26992 4.09295 9.19338 4.12353 9.12221C4.1541 9.05104 4.19854 8.98667 4.25425 8.93286L6.17517 7.01194L4.25425 5.09103C4.19854 5.03722 4.1541 4.97285 4.12353 4.90168C4.09295 4.83051 4.07686 4.75396 4.07619 4.67651C4.07552 4.59906 4.09027 4.52224 4.11961 4.45055C4.14894 4.37886 4.19225 4.31373 4.24702 4.25896C4.30179 4.20419 4.36692 4.16088 4.43861 4.13155C4.5103 4.10222 4.58711 4.08746 4.66457 4.08813C4.74202 4.0888 4.81857 4.1049 4.88974 4.13547C4.96091 4.16604 5.02527 4.21048 5.07908 4.26619L7 6.18711L8.92092 4.26619C8.97473 4.21048 9.0391 4.16604 9.11027 4.13547C9.18143 4.1049 9.25798 4.0888 9.33543 4.08813C9.41289 4.08746 9.4897 4.10222 9.56139 4.13155C9.63308 4.16088 9.69821 4.20419 9.75298 4.25896C9.80775 4.31373 9.85107 4.37886 9.8804 4.45055C9.90973 4.52224 9.92449 4.59906 9.92381 4.67651C9.92314 4.75396 9.90705 4.83051 9.87648 4.90168C9.8459 4.97285 9.80147 5.03722 9.74575 5.09103L7.82483 7.01194L9.74575 8.93286Z" fill="#F51B0D"/>
                          </g>
                          <defs>
                            <clipPath id="clip0_2611_1285">
                              <rect width="14" height="14" fill="white" transform="translate(0 0.0119629)"/>
                            </clipPath>
                          </defs>
                        </svg>
                          <span style="color: #4D4B4B; font-size: 1rem; font-weight: 600; line-height: 1.3125rem;">A1 Level</span>
                        </div>
                      </div>
                      <div style="width: 40%;">
                        <div style="border: 1px solid #004AAD; border-radius: 4px; padding: 5px 8px; text-align: center;">
                          <!--cross icon -->
                          <svg xmlns="http://www.w3.org/2000/svg" width="14" height="15" viewBox="0 0 14 15" fill="none">
                            <g clip-path="url(#clip0_2611_1285)">
                              <path d="M7 0.595276C5.7309 0.595276 4.49031 0.971607 3.43509 1.67668C2.37988 2.38175 1.55744 3.3839 1.07177 4.55639C0.586112 5.72888 0.459041 7.01906 0.706629 8.26377C0.954218 9.50848 1.56535 10.6518 2.46273 11.5492C3.36012 12.4466 4.50346 13.0577 5.74817 13.3053C6.99288 13.5529 8.28306 13.4258 9.45555 12.9402C10.628 12.4545 11.6302 11.6321 12.3353 10.5769C13.0403 9.52164 13.4167 8.28104 13.4167 7.01194C13.4167 5.31014 12.7406 3.67803 11.5373 2.47467C10.3339 1.27132 8.70181 0.595276 7 0.595276ZM9.74575 8.93286C9.80147 8.98667 9.8459 9.05104 9.87648 9.12221C9.90705 9.19338 9.92314 9.26992 9.92381 9.34738C9.92449 9.42483 9.90973 9.50164 9.8804 9.57333C9.85107 9.64502 9.80775 9.71015 9.75298 9.76492C9.69821 9.81969 9.63308 9.86301 9.56139 9.89234C9.4897 9.92167 9.41289 9.93643 9.33543 9.93576C9.25798 9.93508 9.18143 9.91899 9.11027 9.88842C9.0391 9.85785 8.97473 9.81341 8.92092 9.75769L7 7.83678L5.07908 9.75769C5.02527 9.81341 4.96091 9.85785 4.88974 9.88842C4.81857 9.91899 4.74202 9.93508 4.66457 9.93576C4.58711 9.93643 4.5103 9.92167 4.43861 9.89234C4.36692 9.86301 4.30179 9.81969 4.24702 9.76492C4.19225 9.71015 4.14894 9.64502 4.11961 9.57333C4.09027 9.50164 4.07552 9.42483 4.07619 9.34738C4.07686 9.26992 4.09295 9.19338 4.12353 9.12221C4.1541 9.05104 4.19854 8.98667 4.25425 8.93286L6.17517 7.01194L4.25425 5.09103C4.19854 5.03722 4.1541 4.97285 4.12353 4.90168C4.09295 4.83051 4.07686 4.75396 4.07619 4.67651C4.07552 4.59906 4.09027 4.52224 4.11961 4.45055C4.14894 4.37886 4.19225 4.31373 4.24702 4.25896C4.30179 4.20419 4.36692 4.16088 4.43861 4.13155C4.5103 4.10222 4.58711 4.08746 4.66457 4.08813C4.74202 4.0888 4.81857 4.1049 4.88974 4.13547C4.96091 4.16604 5.02527 4.21048 5.07908 4.26619L7 6.18711L8.92092 4.26619C8.97473 4.21048 9.0391 4.16604 9.11027 4.13547C9.18143 4.1049 9.25798 4.0888 9.33543 4.08813C9.41289 4.08746 9.4897 4.10222 9.56139 4.13155C9.63308 4.16088 9.69821 4.20419 9.75298 4.25896C9.80775 4.31373 9.85107 4.37886 9.8804 4.45055C9.90973 4.52224 9.92449 4.59906 9.92381 4.67651C9.92314 4.75396 9.90705 4.83051 9.87648 4.90168C9.8459 4.97285 9.80147 5.03722 9.74575 5.09103L7.82483 7.01194L9.74575 8.93286Z" fill="#F51B0D"/>
                            </g>
                            <defs>
                              <clipPath id="clip0_2611_1285">
                                <rect width="14" height="14" fill="white" transform="translate(0 0.0119629)"/>
                              </clipPath>
                            </defs>
                          </svg>
                          <span style="color: #4D4B4B; font-size: 1rem; font-weight: 600; line-height: 1.3125rem;">A2 Level</span>
                        </div>
                      </div>
                    </div>
                    <div style="display: -webkit-box; margin-top:8px;">
                        <div style="width: 40%;">
                          <div style="border: 1px solid #004AAD; border-radius: 4px; padding: 5px 8px; text-align: center;">
                              <!--check icon -->
                            <svg xmlns="http://www.w3.org/2000/svg" width="14" height="15" viewBox="0 0 14 15" fill="none">
                              <path d="M6.93295 12.8453C3.74206 12.8453 1.15549 10.2337 1.15549 7.01198C1.15549 3.79023 3.74206 1.17865 6.93295 1.17865C10.1238 1.17865 12.7104 3.79023 12.7104 7.01198C12.7104 10.2337 10.1238 12.8453 6.93295 12.8453ZM6.35694 9.34532L10.4416 5.22057L9.62467 4.39573L6.35694 7.69565L4.7225 6.0454L3.90556 6.87023L6.35694 9.34532Z" fill="#004AAD"/>
                            </svg>
                            <span style="color: #4D4B4B; font-size: 1rem; font-weight: 600; line-height: 1.3125rem;">B1 Level</span>
                          </div>
                        </div>
                        <div style="width: 40%; margin-left:8px;">
                          <div style="border: 1px solid #004AAD; border-radius: 4px; padding: 5px 8px; text-align: center;">
                            <!--check icon -->
                            <svg xmlns="http://www.w3.org/2000/svg" width="14" height="15" viewBox="0 0 14 15" fill="none">
                              <path d="M6.93295 12.8453C3.74206 12.8453 1.15549 10.2337 1.15549 7.01198C1.15549 3.79023 3.74206 1.17865 6.93295 1.17865C10.1238 1.17865 12.7104 3.79023 12.7104 7.01198C12.7104 10.2337 10.1238 12.8453 6.93295 12.8453ZM6.35694 9.34532L10.4416 5.22057L9.62467 4.39573L6.35694 7.69565L4.7225 6.0454L3.90556 6.87023L6.35694 9.34532Z" fill="#004AAD"/>
                            </svg>
                            <span style="color: #4D4B4B; font-size: 1rem; font-weight: 600; line-height: 1.3125rem;">B2 Level</span>
                          </div>
                        </div>
                    </div>
                    <div style="display: -webkit-box; margin-top:8px;">
                      <div style="width: 40%;">
                        <div style="border: 1px solid #004AAD; border-radius: 4px; padding: 5px 8px; text-align: center;">
                            <!--cross icon -->
                            <svg xmlns="http://www.w3.org/2000/svg" width="14" height="15" viewBox="0 0 14 15" fill="none">
                              <g clip-path="url(#clip0_2611_1285)">
                                <path d="M7 0.595276C5.7309 0.595276 4.49031 0.971607 3.43509 1.67668C2.37988 2.38175 1.55744 3.3839 1.07177 4.55639C0.586112 5.72888 0.459041 7.01906 0.706629 8.26377C0.954218 9.50848 1.56535 10.6518 2.46273 11.5492C3.36012 12.4466 4.50346 13.0577 5.74817 13.3053C6.99288 13.5529 8.28306 13.4258 9.45555 12.9402C10.628 12.4545 11.6302 11.6321 12.3353 10.5769C13.0403 9.52164 13.4167 8.28104 13.4167 7.01194C13.4167 5.31014 12.7406 3.67803 11.5373 2.47467C10.3339 1.27132 8.70181 0.595276 7 0.595276ZM9.74575 8.93286C9.80147 8.98667 9.8459 9.05104 9.87648 9.12221C9.90705 9.19338 9.92314 9.26992 9.92381 9.34738C9.92449 9.42483 9.90973 9.50164 9.8804 9.57333C9.85107 9.64502 9.80775 9.71015 9.75298 9.76492C9.69821 9.81969 9.63308 9.86301 9.56139 9.89234C9.4897 9.92167 9.41289 9.93643 9.33543 9.93576C9.25798 9.93508 9.18143 9.91899 9.11027 9.88842C9.0391 9.85785 8.97473 9.81341 8.92092 9.75769L7 7.83678L5.07908 9.75769C5.02527 9.81341 4.96091 9.85785 4.88974 9.88842C4.81857 9.91899 4.74202 9.93508 4.66457 9.93576C4.58711 9.93643 4.5103 9.92167 4.43861 9.89234C4.36692 9.86301 4.30179 9.81969 4.24702 9.76492C4.19225 9.71015 4.14894 9.64502 4.11961 9.57333C4.09027 9.50164 4.07552 9.42483 4.07619 9.34738C4.07686 9.26992 4.09295 9.19338 4.12353 9.12221C4.1541 9.05104 4.19854 8.98667 4.25425 8.93286L6.17517 7.01194L4.25425 5.09103C4.19854 5.03722 4.1541 4.97285 4.12353 4.90168C4.09295 4.83051 4.07686 4.75396 4.07619 4.67651C4.07552 4.59906 4.09027 4.52224 4.11961 4.45055C4.14894 4.37886 4.19225 4.31373 4.24702 4.25896C4.30179 4.20419 4.36692 4.16088 4.43861 4.13155C4.5103 4.10222 4.58711 4.08746 4.66457 4.08813C4.74202 4.0888 4.81857 4.1049 4.88974 4.13547C4.96091 4.16604 5.02527 4.21048 5.07908 4.26619L7 6.18711L8.92092 4.26619C8.97473 4.21048 9.0391 4.16604 9.11027 4.13547C9.18143 4.1049 9.25798 4.0888 9.33543 4.08813C9.41289 4.08746 9.4897 4.10222 9.56139 4.13155C9.63308 4.16088 9.69821 4.20419 9.75298 4.25896C9.80775 4.31373 9.85107 4.37886 9.8804 4.45055C9.90973 4.52224 9.92449 4.59906 9.92381 4.67651C9.92314 4.75396 9.90705 4.83051 9.87648 4.90168C9.8459 4.97285 9.80147 5.03722 9.74575 5.09103L7.82483 7.01194L9.74575 8.93286Z" fill="#F51B0D"/>
                              </g>
                              <defs>
                                <clipPath id="clip0_2611_1285">
                                  <rect width="14" height="14" fill="white" transform="translate(0 0.0119629)"/>
                                </clipPath>
                              </defs>
                            </svg>
                          <span style="color: #4D4B4B; font-size: 1rem; font-weight: 600; line-height: 1.3125rem;">C1 Level</span>
                        </div>
                      </div>
                    </div>
                    @elseif($stu_result['level'] == 'B1' && $stu_result['target_score']>=7)
                      <div style="display: -webkit-box;">
                        <div style="width: 40%;">
                          <div style="border: 1px solid #004AAD; border-radius: 4px; padding: 5px 8px; text-align: center;">
                            <!--cross icon -->
                            <svg xmlns="http://www.w3.org/2000/svg" width="14" height="15" viewBox="0 0 14 15" fill="none">
                              <g clip-path="url(#clip0_2611_1285)">
                                <path d="M7 0.595276C5.7309 0.595276 4.49031 0.971607 3.43509 1.67668C2.37988 2.38175 1.55744 3.3839 1.07177 4.55639C0.586112 5.72888 0.459041 7.01906 0.706629 8.26377C0.954218 9.50848 1.56535 10.6518 2.46273 11.5492C3.36012 12.4466 4.50346 13.0577 5.74817 13.3053C6.99288 13.5529 8.28306 13.4258 9.45555 12.9402C10.628 12.4545 11.6302 11.6321 12.3353 10.5769C13.0403 9.52164 13.4167 8.28104 13.4167 7.01194C13.4167 5.31014 12.7406 3.67803 11.5373 2.47467C10.3339 1.27132 8.70181 0.595276 7 0.595276ZM9.74575 8.93286C9.80147 8.98667 9.8459 9.05104 9.87648 9.12221C9.90705 9.19338 9.92314 9.26992 9.92381 9.34738C9.92449 9.42483 9.90973 9.50164 9.8804 9.57333C9.85107 9.64502 9.80775 9.71015 9.75298 9.76492C9.69821 9.81969 9.63308 9.86301 9.56139 9.89234C9.4897 9.92167 9.41289 9.93643 9.33543 9.93576C9.25798 9.93508 9.18143 9.91899 9.11027 9.88842C9.0391 9.85785 8.97473 9.81341 8.92092 9.75769L7 7.83678L5.07908 9.75769C5.02527 9.81341 4.96091 9.85785 4.88974 9.88842C4.81857 9.91899 4.74202 9.93508 4.66457 9.93576C4.58711 9.93643 4.5103 9.92167 4.43861 9.89234C4.36692 9.86301 4.30179 9.81969 4.24702 9.76492C4.19225 9.71015 4.14894 9.64502 4.11961 9.57333C4.09027 9.50164 4.07552 9.42483 4.07619 9.34738C4.07686 9.26992 4.09295 9.19338 4.12353 9.12221C4.1541 9.05104 4.19854 8.98667 4.25425 8.93286L6.17517 7.01194L4.25425 5.09103C4.19854 5.03722 4.1541 4.97285 4.12353 4.90168C4.09295 4.83051 4.07686 4.75396 4.07619 4.67651C4.07552 4.59906 4.09027 4.52224 4.11961 4.45055C4.14894 4.37886 4.19225 4.31373 4.24702 4.25896C4.30179 4.20419 4.36692 4.16088 4.43861 4.13155C4.5103 4.10222 4.58711 4.08746 4.66457 4.08813C4.74202 4.0888 4.81857 4.1049 4.88974 4.13547C4.96091 4.16604 5.02527 4.21048 5.07908 4.26619L7 6.18711L8.92092 4.26619C8.97473 4.21048 9.0391 4.16604 9.11027 4.13547C9.18143 4.1049 9.25798 4.0888 9.33543 4.08813C9.41289 4.08746 9.4897 4.10222 9.56139 4.13155C9.63308 4.16088 9.69821 4.20419 9.75298 4.25896C9.80775 4.31373 9.85107 4.37886 9.8804 4.45055C9.90973 4.52224 9.92449 4.59906 9.92381 4.67651C9.92314 4.75396 9.90705 4.83051 9.87648 4.90168C9.8459 4.97285 9.80147 5.03722 9.74575 5.09103L7.82483 7.01194L9.74575 8.93286Z" fill="#F51B0D"/>
                              </g>
                              <defs>
                                <clipPath id="clip0_2611_1285">
                                  <rect width="14" height="14" fill="white" transform="translate(0 0.0119629)"/>
                                </clipPath>
                              </defs>
                            </svg>
                            <span style="color: #4D4B4B; font-size: 1rem; font-weight: 600; line-height: 1.3125rem;">A1 Level</span>
                          </div>
                        </div>
                        <div style="width: 40%; margin-left:8px;">
                          <div style="border: 1px solid #004AAD; border-radius: 4px; padding: 5px 8px; text-align: center;">
                            <!--cross icon -->
                            <svg xmlns="http://www.w3.org/2000/svg" width="14" height="15" viewBox="0 0 14 15" fill="none">
                              <g clip-path="url(#clip0_2611_1285)">
                                <path d="M7 0.595276C5.7309 0.595276 4.49031 0.971607 3.43509 1.67668C2.37988 2.38175 1.55744 3.3839 1.07177 4.55639C0.586112 5.72888 0.459041 7.01906 0.706629 8.26377C0.954218 9.50848 1.56535 10.6518 2.46273 11.5492C3.36012 12.4466 4.50346 13.0577 5.74817 13.3053C6.99288 13.5529 8.28306 13.4258 9.45555 12.9402C10.628 12.4545 11.6302 11.6321 12.3353 10.5769C13.0403 9.52164 13.4167 8.28104 13.4167 7.01194C13.4167 5.31014 12.7406 3.67803 11.5373 2.47467C10.3339 1.27132 8.70181 0.595276 7 0.595276ZM9.74575 8.93286C9.80147 8.98667 9.8459 9.05104 9.87648 9.12221C9.90705 9.19338 9.92314 9.26992 9.92381 9.34738C9.92449 9.42483 9.90973 9.50164 9.8804 9.57333C9.85107 9.64502 9.80775 9.71015 9.75298 9.76492C9.69821 9.81969 9.63308 9.86301 9.56139 9.89234C9.4897 9.92167 9.41289 9.93643 9.33543 9.93576C9.25798 9.93508 9.18143 9.91899 9.11027 9.88842C9.0391 9.85785 8.97473 9.81341 8.92092 9.75769L7 7.83678L5.07908 9.75769C5.02527 9.81341 4.96091 9.85785 4.88974 9.88842C4.81857 9.91899 4.74202 9.93508 4.66457 9.93576C4.58711 9.93643 4.5103 9.92167 4.43861 9.89234C4.36692 9.86301 4.30179 9.81969 4.24702 9.76492C4.19225 9.71015 4.14894 9.64502 4.11961 9.57333C4.09027 9.50164 4.07552 9.42483 4.07619 9.34738C4.07686 9.26992 4.09295 9.19338 4.12353 9.12221C4.1541 9.05104 4.19854 8.98667 4.25425 8.93286L6.17517 7.01194L4.25425 5.09103C4.19854 5.03722 4.1541 4.97285 4.12353 4.90168C4.09295 4.83051 4.07686 4.75396 4.07619 4.67651C4.07552 4.59906 4.09027 4.52224 4.11961 4.45055C4.14894 4.37886 4.19225 4.31373 4.24702 4.25896C4.30179 4.20419 4.36692 4.16088 4.43861 4.13155C4.5103 4.10222 4.58711 4.08746 4.66457 4.08813C4.74202 4.0888 4.81857 4.1049 4.88974 4.13547C4.96091 4.16604 5.02527 4.21048 5.07908 4.26619L7 6.18711L8.92092 4.26619C8.97473 4.21048 9.0391 4.16604 9.11027 4.13547C9.18143 4.1049 9.25798 4.0888 9.33543 4.08813C9.41289 4.08746 9.4897 4.10222 9.56139 4.13155C9.63308 4.16088 9.69821 4.20419 9.75298 4.25896C9.80775 4.31373 9.85107 4.37886 9.8804 4.45055C9.90973 4.52224 9.92449 4.59906 9.92381 4.67651C9.92314 4.75396 9.90705 4.83051 9.87648 4.90168C9.8459 4.97285 9.80147 5.03722 9.74575 5.09103L7.82483 7.01194L9.74575 8.93286Z" fill="#F51B0D"/>
                              </g>
                              <defs>
                                <clipPath id="clip0_2611_1285">
                                  <rect width="14" height="14" fill="white" transform="translate(0 0.0119629)"/>
                                </clipPath>
                              </defs>
                            </svg>
                            <span style="color: #4D4B4B; font-size: 1rem; font-weight: 600; line-height: 1.3125rem;">A2 Level</span>
                          </div>
                        </div>
                      </div>
                      <div style="display: -webkit-box; margin-top:8px;">
                          <div style="width: 40%;">
                            <div style="border: 1px solid #004AAD; border-radius: 4px; padding: 5px 8px; text-align: center;">
                                <!--check icon -->
                              <svg xmlns="http://www.w3.org/2000/svg" width="14" height="15" viewBox="0 0 14 15" fill="none">
                                <path d="M6.93295 12.8453C3.74206 12.8453 1.15549 10.2337 1.15549 7.01198C1.15549 3.79023 3.74206 1.17865 6.93295 1.17865C10.1238 1.17865 12.7104 3.79023 12.7104 7.01198C12.7104 10.2337 10.1238 12.8453 6.93295 12.8453ZM6.35694 9.34532L10.4416 5.22057L9.62467 4.39573L6.35694 7.69565L4.7225 6.0454L3.90556 6.87023L6.35694 9.34532Z" fill="#004AAD"/>
                              </svg>
                              <span style="color: #4D4B4B; font-size: 1rem; font-weight: 600; line-height: 1.3125rem;">B1 Level</span>
                            </div>
                          </div>
                          <div style="width: 40%; margin-left:8px;">
                            <div style="border: 1px solid #004AAD; border-radius: 4px; padding: 5px 8px; text-align: center;">
                              <!--check icon -->
                              <svg xmlns="http://www.w3.org/2000/svg" width="14" height="15" viewBox="0 0 14 15" fill="none">
                                <path d="M6.93295 12.8453C3.74206 12.8453 1.15549 10.2337 1.15549 7.01198C1.15549 3.79023 3.74206 1.17865 6.93295 1.17865C10.1238 1.17865 12.7104 3.79023 12.7104 7.01198C12.7104 10.2337 10.1238 12.8453 6.93295 12.8453ZM6.35694 9.34532L10.4416 5.22057L9.62467 4.39573L6.35694 7.69565L4.7225 6.0454L3.90556 6.87023L6.35694 9.34532Z" fill="#004AAD"/>
                              </svg>
                              <span style="color: #4D4B4B; font-size: 1rem; font-weight: 600; line-height: 1.3125rem;">B2 Level</span>
                            </div>
                          </div>
                      </div>
                      <div style="display: -webkit-box; margin-top:8px;">
                        <div style="width: 40%;">
                          <div style="border: 1px solid #004AAD; border-radius: 4px; padding: 5px 8px; text-align: center;">
                              <!--check icon -->
                              <svg xmlns="http://www.w3.org/2000/svg" width="14" height="15" viewBox="0 0 14 15" fill="none">
                                <path d="M6.93295 12.8453C3.74206 12.8453 1.15549 10.2337 1.15549 7.01198C1.15549 3.79023 3.74206 1.17865 6.93295 1.17865C10.1238 1.17865 12.7104 3.79023 12.7104 7.01198C12.7104 10.2337 10.1238 12.8453 6.93295 12.8453ZM6.35694 9.34532L10.4416 5.22057L9.62467 4.39573L6.35694 7.69565L4.7225 6.0454L3.90556 6.87023L6.35694 9.34532Z" fill="#004AAD"/>
                              </svg>
                            <span style="color: #4D4B4B; font-size: 1rem; font-weight: 600; line-height: 1.3125rem;">C1 Level</span>
                          </div>
                        </div>
                      </div>
                      @elseif($stu_result['level'] == 'B2' && $stu_result['target_score']<7)
                        <div style="display: -webkit-box;">
                          <div style="width: 40%;">
                            <div style="border: 1px solid #004AAD; border-radius: 4px; padding: 5px 8px; text-align: center;">
                              <!--cross icon -->
                              <svg xmlns="http://www.w3.org/2000/svg" width="14" height="15" viewBox="0 0 14 15" fill="none">
                                <g clip-path="url(#clip0_2611_1285)">
                                  <path d="M7 0.595276C5.7309 0.595276 4.49031 0.971607 3.43509 1.67668C2.37988 2.38175 1.55744 3.3839 1.07177 4.55639C0.586112 5.72888 0.459041 7.01906 0.706629 8.26377C0.954218 9.50848 1.56535 10.6518 2.46273 11.5492C3.36012 12.4466 4.50346 13.0577 5.74817 13.3053C6.99288 13.5529 8.28306 13.4258 9.45555 12.9402C10.628 12.4545 11.6302 11.6321 12.3353 10.5769C13.0403 9.52164 13.4167 8.28104 13.4167 7.01194C13.4167 5.31014 12.7406 3.67803 11.5373 2.47467C10.3339 1.27132 8.70181 0.595276 7 0.595276ZM9.74575 8.93286C9.80147 8.98667 9.8459 9.05104 9.87648 9.12221C9.90705 9.19338 9.92314 9.26992 9.92381 9.34738C9.92449 9.42483 9.90973 9.50164 9.8804 9.57333C9.85107 9.64502 9.80775 9.71015 9.75298 9.76492C9.69821 9.81969 9.63308 9.86301 9.56139 9.89234C9.4897 9.92167 9.41289 9.93643 9.33543 9.93576C9.25798 9.93508 9.18143 9.91899 9.11027 9.88842C9.0391 9.85785 8.97473 9.81341 8.92092 9.75769L7 7.83678L5.07908 9.75769C5.02527 9.81341 4.96091 9.85785 4.88974 9.88842C4.81857 9.91899 4.74202 9.93508 4.66457 9.93576C4.58711 9.93643 4.5103 9.92167 4.43861 9.89234C4.36692 9.86301 4.30179 9.81969 4.24702 9.76492C4.19225 9.71015 4.14894 9.64502 4.11961 9.57333C4.09027 9.50164 4.07552 9.42483 4.07619 9.34738C4.07686 9.26992 4.09295 9.19338 4.12353 9.12221C4.1541 9.05104 4.19854 8.98667 4.25425 8.93286L6.17517 7.01194L4.25425 5.09103C4.19854 5.03722 4.1541 4.97285 4.12353 4.90168C4.09295 4.83051 4.07686 4.75396 4.07619 4.67651C4.07552 4.59906 4.09027 4.52224 4.11961 4.45055C4.14894 4.37886 4.19225 4.31373 4.24702 4.25896C4.30179 4.20419 4.36692 4.16088 4.43861 4.13155C4.5103 4.10222 4.58711 4.08746 4.66457 4.08813C4.74202 4.0888 4.81857 4.1049 4.88974 4.13547C4.96091 4.16604 5.02527 4.21048 5.07908 4.26619L7 6.18711L8.92092 4.26619C8.97473 4.21048 9.0391 4.16604 9.11027 4.13547C9.18143 4.1049 9.25798 4.0888 9.33543 4.08813C9.41289 4.08746 9.4897 4.10222 9.56139 4.13155C9.63308 4.16088 9.69821 4.20419 9.75298 4.25896C9.80775 4.31373 9.85107 4.37886 9.8804 4.45055C9.90973 4.52224 9.92449 4.59906 9.92381 4.67651C9.92314 4.75396 9.90705 4.83051 9.87648 4.90168C9.8459 4.97285 9.80147 5.03722 9.74575 5.09103L7.82483 7.01194L9.74575 8.93286Z" fill="#F51B0D"/>
                                </g>
                                <defs>
                                  <clipPath id="clip0_2611_1285">
                                    <rect width="14" height="14" fill="white" transform="translate(0 0.0119629)"/>
                                  </clipPath>
                                </defs>
                              </svg>
                              <span style="color: #4D4B4B; font-size: 1rem; font-weight: 600; line-height: 1.3125rem;">A1 Level</span>
                            </div>
                          </div>
                          <div style="width: 40%;">
                            <div style="border: 1px solid #004AAD; border-radius: 4px; padding: 5px 8px; text-align: center;">
                              <!--cross icon -->
                              <svg xmlns="http://www.w3.org/2000/svg" width="14" height="15" viewBox="0 0 14 15" fill="none">
                                <g clip-path="url(#clip0_2611_1285)">
                                  <path d="M7 0.595276C5.7309 0.595276 4.49031 0.971607 3.43509 1.67668C2.37988 2.38175 1.55744 3.3839 1.07177 4.55639C0.586112 5.72888 0.459041 7.01906 0.706629 8.26377C0.954218 9.50848 1.56535 10.6518 2.46273 11.5492C3.36012 12.4466 4.50346 13.0577 5.74817 13.3053C6.99288 13.5529 8.28306 13.4258 9.45555 12.9402C10.628 12.4545 11.6302 11.6321 12.3353 10.5769C13.0403 9.52164 13.4167 8.28104 13.4167 7.01194C13.4167 5.31014 12.7406 3.67803 11.5373 2.47467C10.3339 1.27132 8.70181 0.595276 7 0.595276ZM9.74575 8.93286C9.80147 8.98667 9.8459 9.05104 9.87648 9.12221C9.90705 9.19338 9.92314 9.26992 9.92381 9.34738C9.92449 9.42483 9.90973 9.50164 9.8804 9.57333C9.85107 9.64502 9.80775 9.71015 9.75298 9.76492C9.69821 9.81969 9.63308 9.86301 9.56139 9.89234C9.4897 9.92167 9.41289 9.93643 9.33543 9.93576C9.25798 9.93508 9.18143 9.91899 9.11027 9.88842C9.0391 9.85785 8.97473 9.81341 8.92092 9.75769L7 7.83678L5.07908 9.75769C5.02527 9.81341 4.96091 9.85785 4.88974 9.88842C4.81857 9.91899 4.74202 9.93508 4.66457 9.93576C4.58711 9.93643 4.5103 9.92167 4.43861 9.89234C4.36692 9.86301 4.30179 9.81969 4.24702 9.76492C4.19225 9.71015 4.14894 9.64502 4.11961 9.57333C4.09027 9.50164 4.07552 9.42483 4.07619 9.34738C4.07686 9.26992 4.09295 9.19338 4.12353 9.12221C4.1541 9.05104 4.19854 8.98667 4.25425 8.93286L6.17517 7.01194L4.25425 5.09103C4.19854 5.03722 4.1541 4.97285 4.12353 4.90168C4.09295 4.83051 4.07686 4.75396 4.07619 4.67651C4.07552 4.59906 4.09027 4.52224 4.11961 4.45055C4.14894 4.37886 4.19225 4.31373 4.24702 4.25896C4.30179 4.20419 4.36692 4.16088 4.43861 4.13155C4.5103 4.10222 4.58711 4.08746 4.66457 4.08813C4.74202 4.0888 4.81857 4.1049 4.88974 4.13547C4.96091 4.16604 5.02527 4.21048 5.07908 4.26619L7 6.18711L8.92092 4.26619C8.97473 4.21048 9.0391 4.16604 9.11027 4.13547C9.18143 4.1049 9.25798 4.0888 9.33543 4.08813C9.41289 4.08746 9.4897 4.10222 9.56139 4.13155C9.63308 4.16088 9.69821 4.20419 9.75298 4.25896C9.80775 4.31373 9.85107 4.37886 9.8804 4.45055C9.90973 4.52224 9.92449 4.59906 9.92381 4.67651C9.92314 4.75396 9.90705 4.83051 9.87648 4.90168C9.8459 4.97285 9.80147 5.03722 9.74575 5.09103L7.82483 7.01194L9.74575 8.93286Z" fill="#F51B0D"/>
                                </g>
                                <defs>
                                  <clipPath id="clip0_2611_1285">
                                    <rect width="14" height="14" fill="white" transform="translate(0 0.0119629)"/>
                                  </clipPath>
                                </defs>
                              </svg>
                              <span style="color: #4D4B4B; font-size: 1rem; font-weight: 600; line-height: 1.3125rem;">A2 Level</span>
                            </div>
                          </div>
                        </div>
                        <div style="display: -webkit-box; margin-top:8px;">
                            <div style="width: 40%;">
                              <div style="border: 1px solid #004AAD; border-radius: 4px; padding: 5px 8px; text-align: center;">
                                 <!--cross icon -->
                                <svg xmlns="http://www.w3.org/2000/svg" width="14" height="15" viewBox="0 0 14 15" fill="none">
                                  <g clip-path="url(#clip0_2611_1285)">
                                    <path d="M7 0.595276C5.7309 0.595276 4.49031 0.971607 3.43509 1.67668C2.37988 2.38175 1.55744 3.3839 1.07177 4.55639C0.586112 5.72888 0.459041 7.01906 0.706629 8.26377C0.954218 9.50848 1.56535 10.6518 2.46273 11.5492C3.36012 12.4466 4.50346 13.0577 5.74817 13.3053C6.99288 13.5529 8.28306 13.4258 9.45555 12.9402C10.628 12.4545 11.6302 11.6321 12.3353 10.5769C13.0403 9.52164 13.4167 8.28104 13.4167 7.01194C13.4167 5.31014 12.7406 3.67803 11.5373 2.47467C10.3339 1.27132 8.70181 0.595276 7 0.595276ZM9.74575 8.93286C9.80147 8.98667 9.8459 9.05104 9.87648 9.12221C9.90705 9.19338 9.92314 9.26992 9.92381 9.34738C9.92449 9.42483 9.90973 9.50164 9.8804 9.57333C9.85107 9.64502 9.80775 9.71015 9.75298 9.76492C9.69821 9.81969 9.63308 9.86301 9.56139 9.89234C9.4897 9.92167 9.41289 9.93643 9.33543 9.93576C9.25798 9.93508 9.18143 9.91899 9.11027 9.88842C9.0391 9.85785 8.97473 9.81341 8.92092 9.75769L7 7.83678L5.07908 9.75769C5.02527 9.81341 4.96091 9.85785 4.88974 9.88842C4.81857 9.91899 4.74202 9.93508 4.66457 9.93576C4.58711 9.93643 4.5103 9.92167 4.43861 9.89234C4.36692 9.86301 4.30179 9.81969 4.24702 9.76492C4.19225 9.71015 4.14894 9.64502 4.11961 9.57333C4.09027 9.50164 4.07552 9.42483 4.07619 9.34738C4.07686 9.26992 4.09295 9.19338 4.12353 9.12221C4.1541 9.05104 4.19854 8.98667 4.25425 8.93286L6.17517 7.01194L4.25425 5.09103C4.19854 5.03722 4.1541 4.97285 4.12353 4.90168C4.09295 4.83051 4.07686 4.75396 4.07619 4.67651C4.07552 4.59906 4.09027 4.52224 4.11961 4.45055C4.14894 4.37886 4.19225 4.31373 4.24702 4.25896C4.30179 4.20419 4.36692 4.16088 4.43861 4.13155C4.5103 4.10222 4.58711 4.08746 4.66457 4.08813C4.74202 4.0888 4.81857 4.1049 4.88974 4.13547C4.96091 4.16604 5.02527 4.21048 5.07908 4.26619L7 6.18711L8.92092 4.26619C8.97473 4.21048 9.0391 4.16604 9.11027 4.13547C9.18143 4.1049 9.25798 4.0888 9.33543 4.08813C9.41289 4.08746 9.4897 4.10222 9.56139 4.13155C9.63308 4.16088 9.69821 4.20419 9.75298 4.25896C9.80775 4.31373 9.85107 4.37886 9.8804 4.45055C9.90973 4.52224 9.92449 4.59906 9.92381 4.67651C9.92314 4.75396 9.90705 4.83051 9.87648 4.90168C9.8459 4.97285 9.80147 5.03722 9.74575 5.09103L7.82483 7.01194L9.74575 8.93286Z" fill="#F51B0D"/>
                                  </g>
                                  <defs>
                                    <clipPath id="clip0_2611_1285">
                                      <rect width="14" height="14" fill="white" transform="translate(0 0.0119629)"/>
                                    </clipPath>
                                  </defs>
                                </svg>
                                <span style="color: #4D4B4B; font-size: 1rem; font-weight: 600; line-height: 1.3125rem;">B1 Level</span>
                              </div>
                            </div>
                            <div style="width: 40%; margin-left:8px;">
                              <div style="border: 1px solid #004AAD; border-radius: 4px; padding: 5px 8px; text-align: center;">
                                <!--check icon -->
                                <svg xmlns="http://www.w3.org/2000/svg" width="14" height="15" viewBox="0 0 14 15" fill="none">
                                  <path d="M6.93295 12.8453C3.74206 12.8453 1.15549 10.2337 1.15549 7.01198C1.15549 3.79023 3.74206 1.17865 6.93295 1.17865C10.1238 1.17865 12.7104 3.79023 12.7104 7.01198C12.7104 10.2337 10.1238 12.8453 6.93295 12.8453ZM6.35694 9.34532L10.4416 5.22057L9.62467 4.39573L6.35694 7.69565L4.7225 6.0454L3.90556 6.87023L6.35694 9.34532Z" fill="#004AAD"/>
                                </svg>
                                <span style="color: #4D4B4B; font-size: 1rem; font-weight: 600; line-height: 1.3125rem;">B2 Level</span>
                              </div>
                            </div>
                        </div>
                        <div style="display: -webkit-box; margin-top:8px;">
                          <div style="width: 40%;">
                            <div style="border: 1px solid #004AAD; border-radius: 4px; padding: 5px 8px; text-align: center;">
                                <!--cross icon -->
                                <svg xmlns="http://www.w3.org/2000/svg" width="14" height="15" viewBox="0 0 14 15" fill="none">
                                  <g clip-path="url(#clip0_2611_1285)">
                                    <path d="M7 0.595276C5.7309 0.595276 4.49031 0.971607 3.43509 1.67668C2.37988 2.38175 1.55744 3.3839 1.07177 4.55639C0.586112 5.72888 0.459041 7.01906 0.706629 8.26377C0.954218 9.50848 1.56535 10.6518 2.46273 11.5492C3.36012 12.4466 4.50346 13.0577 5.74817 13.3053C6.99288 13.5529 8.28306 13.4258 9.45555 12.9402C10.628 12.4545 11.6302 11.6321 12.3353 10.5769C13.0403 9.52164 13.4167 8.28104 13.4167 7.01194C13.4167 5.31014 12.7406 3.67803 11.5373 2.47467C10.3339 1.27132 8.70181 0.595276 7 0.595276ZM9.74575 8.93286C9.80147 8.98667 9.8459 9.05104 9.87648 9.12221C9.90705 9.19338 9.92314 9.26992 9.92381 9.34738C9.92449 9.42483 9.90973 9.50164 9.8804 9.57333C9.85107 9.64502 9.80775 9.71015 9.75298 9.76492C9.69821 9.81969 9.63308 9.86301 9.56139 9.89234C9.4897 9.92167 9.41289 9.93643 9.33543 9.93576C9.25798 9.93508 9.18143 9.91899 9.11027 9.88842C9.0391 9.85785 8.97473 9.81341 8.92092 9.75769L7 7.83678L5.07908 9.75769C5.02527 9.81341 4.96091 9.85785 4.88974 9.88842C4.81857 9.91899 4.74202 9.93508 4.66457 9.93576C4.58711 9.93643 4.5103 9.92167 4.43861 9.89234C4.36692 9.86301 4.30179 9.81969 4.24702 9.76492C4.19225 9.71015 4.14894 9.64502 4.11961 9.57333C4.09027 9.50164 4.07552 9.42483 4.07619 9.34738C4.07686 9.26992 4.09295 9.19338 4.12353 9.12221C4.1541 9.05104 4.19854 8.98667 4.25425 8.93286L6.17517 7.01194L4.25425 5.09103C4.19854 5.03722 4.1541 4.97285 4.12353 4.90168C4.09295 4.83051 4.07686 4.75396 4.07619 4.67651C4.07552 4.59906 4.09027 4.52224 4.11961 4.45055C4.14894 4.37886 4.19225 4.31373 4.24702 4.25896C4.30179 4.20419 4.36692 4.16088 4.43861 4.13155C4.5103 4.10222 4.58711 4.08746 4.66457 4.08813C4.74202 4.0888 4.81857 4.1049 4.88974 4.13547C4.96091 4.16604 5.02527 4.21048 5.07908 4.26619L7 6.18711L8.92092 4.26619C8.97473 4.21048 9.0391 4.16604 9.11027 4.13547C9.18143 4.1049 9.25798 4.0888 9.33543 4.08813C9.41289 4.08746 9.4897 4.10222 9.56139 4.13155C9.63308 4.16088 9.69821 4.20419 9.75298 4.25896C9.80775 4.31373 9.85107 4.37886 9.8804 4.45055C9.90973 4.52224 9.92449 4.59906 9.92381 4.67651C9.92314 4.75396 9.90705 4.83051 9.87648 4.90168C9.8459 4.97285 9.80147 5.03722 9.74575 5.09103L7.82483 7.01194L9.74575 8.93286Z" fill="#F51B0D"/>
                                  </g>
                                  <defs>
                                    <clipPath id="clip0_2611_1285">
                                      <rect width="14" height="14" fill="white" transform="translate(0 0.0119629)"/>
                                    </clipPath>
                                  </defs>
                                </svg>
                              <span style="color: #4D4B4B; font-size: 1rem; font-weight: 600; line-height: 1.3125rem;">C1 Level</span>
                            </div>
                          </div>
                        </div>
                      @elseif($stu_result['level'] == 'B2' && $stu_result['target_score']>=7)
                        <div style="display: -webkit-box;">
                          <div style="width: 40%;">
                            <div style="border: 1px solid #004AAD; border-radius: 4px; padding: 5px 8px; text-align: center;">
                             <!--cross icon -->
                             <svg xmlns="http://www.w3.org/2000/svg" width="14" height="15" viewBox="0 0 14 15" fill="none">
                              <g clip-path="url(#clip0_2611_1285)">
                                <path d="M7 0.595276C5.7309 0.595276 4.49031 0.971607 3.43509 1.67668C2.37988 2.38175 1.55744 3.3839 1.07177 4.55639C0.586112 5.72888 0.459041 7.01906 0.706629 8.26377C0.954218 9.50848 1.56535 10.6518 2.46273 11.5492C3.36012 12.4466 4.50346 13.0577 5.74817 13.3053C6.99288 13.5529 8.28306 13.4258 9.45555 12.9402C10.628 12.4545 11.6302 11.6321 12.3353 10.5769C13.0403 9.52164 13.4167 8.28104 13.4167 7.01194C13.4167 5.31014 12.7406 3.67803 11.5373 2.47467C10.3339 1.27132 8.70181 0.595276 7 0.595276ZM9.74575 8.93286C9.80147 8.98667 9.8459 9.05104 9.87648 9.12221C9.90705 9.19338 9.92314 9.26992 9.92381 9.34738C9.92449 9.42483 9.90973 9.50164 9.8804 9.57333C9.85107 9.64502 9.80775 9.71015 9.75298 9.76492C9.69821 9.81969 9.63308 9.86301 9.56139 9.89234C9.4897 9.92167 9.41289 9.93643 9.33543 9.93576C9.25798 9.93508 9.18143 9.91899 9.11027 9.88842C9.0391 9.85785 8.97473 9.81341 8.92092 9.75769L7 7.83678L5.07908 9.75769C5.02527 9.81341 4.96091 9.85785 4.88974 9.88842C4.81857 9.91899 4.74202 9.93508 4.66457 9.93576C4.58711 9.93643 4.5103 9.92167 4.43861 9.89234C4.36692 9.86301 4.30179 9.81969 4.24702 9.76492C4.19225 9.71015 4.14894 9.64502 4.11961 9.57333C4.09027 9.50164 4.07552 9.42483 4.07619 9.34738C4.07686 9.26992 4.09295 9.19338 4.12353 9.12221C4.1541 9.05104 4.19854 8.98667 4.25425 8.93286L6.17517 7.01194L4.25425 5.09103C4.19854 5.03722 4.1541 4.97285 4.12353 4.90168C4.09295 4.83051 4.07686 4.75396 4.07619 4.67651C4.07552 4.59906 4.09027 4.52224 4.11961 4.45055C4.14894 4.37886 4.19225 4.31373 4.24702 4.25896C4.30179 4.20419 4.36692 4.16088 4.43861 4.13155C4.5103 4.10222 4.58711 4.08746 4.66457 4.08813C4.74202 4.0888 4.81857 4.1049 4.88974 4.13547C4.96091 4.16604 5.02527 4.21048 5.07908 4.26619L7 6.18711L8.92092 4.26619C8.97473 4.21048 9.0391 4.16604 9.11027 4.13547C9.18143 4.1049 9.25798 4.0888 9.33543 4.08813C9.41289 4.08746 9.4897 4.10222 9.56139 4.13155C9.63308 4.16088 9.69821 4.20419 9.75298 4.25896C9.80775 4.31373 9.85107 4.37886 9.8804 4.45055C9.90973 4.52224 9.92449 4.59906 9.92381 4.67651C9.92314 4.75396 9.90705 4.83051 9.87648 4.90168C9.8459 4.97285 9.80147 5.03722 9.74575 5.09103L7.82483 7.01194L9.74575 8.93286Z" fill="#F51B0D"/>
                              </g>
                              <defs>
                                <clipPath id="clip0_2611_1285">
                                  <rect width="14" height="14" fill="white" transform="translate(0 0.0119629)"/>
                                </clipPath>
                              </defs>
                            </svg>
                              <span style="color: #4D4B4B; font-size: 1rem; font-weight: 600; line-height: 1.3125rem;">A1 Level</span>
                            </div>
                          </div>
                          <div style="width: 40%; margin-left:8px;">
                            <div style="border: 1px solid #004AAD; border-radius: 4px; padding: 5px 8px; text-align: center;">
                              <!--cross icon -->
                              <svg xmlns="http://www.w3.org/2000/svg" width="14" height="15" viewBox="0 0 14 15" fill="none">
                                <g clip-path="url(#clip0_2611_1285)">
                                  <path d="M7 0.595276C5.7309 0.595276 4.49031 0.971607 3.43509 1.67668C2.37988 2.38175 1.55744 3.3839 1.07177 4.55639C0.586112 5.72888 0.459041 7.01906 0.706629 8.26377C0.954218 9.50848 1.56535 10.6518 2.46273 11.5492C3.36012 12.4466 4.50346 13.0577 5.74817 13.3053C6.99288 13.5529 8.28306 13.4258 9.45555 12.9402C10.628 12.4545 11.6302 11.6321 12.3353 10.5769C13.0403 9.52164 13.4167 8.28104 13.4167 7.01194C13.4167 5.31014 12.7406 3.67803 11.5373 2.47467C10.3339 1.27132 8.70181 0.595276 7 0.595276ZM9.74575 8.93286C9.80147 8.98667 9.8459 9.05104 9.87648 9.12221C9.90705 9.19338 9.92314 9.26992 9.92381 9.34738C9.92449 9.42483 9.90973 9.50164 9.8804 9.57333C9.85107 9.64502 9.80775 9.71015 9.75298 9.76492C9.69821 9.81969 9.63308 9.86301 9.56139 9.89234C9.4897 9.92167 9.41289 9.93643 9.33543 9.93576C9.25798 9.93508 9.18143 9.91899 9.11027 9.88842C9.0391 9.85785 8.97473 9.81341 8.92092 9.75769L7 7.83678L5.07908 9.75769C5.02527 9.81341 4.96091 9.85785 4.88974 9.88842C4.81857 9.91899 4.74202 9.93508 4.66457 9.93576C4.58711 9.93643 4.5103 9.92167 4.43861 9.89234C4.36692 9.86301 4.30179 9.81969 4.24702 9.76492C4.19225 9.71015 4.14894 9.64502 4.11961 9.57333C4.09027 9.50164 4.07552 9.42483 4.07619 9.34738C4.07686 9.26992 4.09295 9.19338 4.12353 9.12221C4.1541 9.05104 4.19854 8.98667 4.25425 8.93286L6.17517 7.01194L4.25425 5.09103C4.19854 5.03722 4.1541 4.97285 4.12353 4.90168C4.09295 4.83051 4.07686 4.75396 4.07619 4.67651C4.07552 4.59906 4.09027 4.52224 4.11961 4.45055C4.14894 4.37886 4.19225 4.31373 4.24702 4.25896C4.30179 4.20419 4.36692 4.16088 4.43861 4.13155C4.5103 4.10222 4.58711 4.08746 4.66457 4.08813C4.74202 4.0888 4.81857 4.1049 4.88974 4.13547C4.96091 4.16604 5.02527 4.21048 5.07908 4.26619L7 6.18711L8.92092 4.26619C8.97473 4.21048 9.0391 4.16604 9.11027 4.13547C9.18143 4.1049 9.25798 4.0888 9.33543 4.08813C9.41289 4.08746 9.4897 4.10222 9.56139 4.13155C9.63308 4.16088 9.69821 4.20419 9.75298 4.25896C9.80775 4.31373 9.85107 4.37886 9.8804 4.45055C9.90973 4.52224 9.92449 4.59906 9.92381 4.67651C9.92314 4.75396 9.90705 4.83051 9.87648 4.90168C9.8459 4.97285 9.80147 5.03722 9.74575 5.09103L7.82483 7.01194L9.74575 8.93286Z" fill="#F51B0D"/>
                                </g>
                                <defs>
                                  <clipPath id="clip0_2611_1285">
                                    <rect width="14" height="14" fill="white" transform="translate(0 0.0119629)"/>
                                  </clipPath>
                                </defs>
                              </svg>
                              <span style="color: #4D4B4B; font-size: 1rem; font-weight: 600; line-height: 1.3125rem;">A2 Level</span>
                            </div>
                          </div>
                        </div>
                        <div style="display: -webkit-box; margin-top:8px;">
                            <div style="width: 40%;">
                              <div style="border: 1px solid #004AAD; border-radius: 4px; padding: 5px 8px; text-align: center;">
                                  <!--cross icon -->
                                <svg xmlns="http://www.w3.org/2000/svg" width="14" height="15" viewBox="0 0 14 15" fill="none">
                                  <g clip-path="url(#clip0_2611_1285)">
                                    <path d="M7 0.595276C5.7309 0.595276 4.49031 0.971607 3.43509 1.67668C2.37988 2.38175 1.55744 3.3839 1.07177 4.55639C0.586112 5.72888 0.459041 7.01906 0.706629 8.26377C0.954218 9.50848 1.56535 10.6518 2.46273 11.5492C3.36012 12.4466 4.50346 13.0577 5.74817 13.3053C6.99288 13.5529 8.28306 13.4258 9.45555 12.9402C10.628 12.4545 11.6302 11.6321 12.3353 10.5769C13.0403 9.52164 13.4167 8.28104 13.4167 7.01194C13.4167 5.31014 12.7406 3.67803 11.5373 2.47467C10.3339 1.27132 8.70181 0.595276 7 0.595276ZM9.74575 8.93286C9.80147 8.98667 9.8459 9.05104 9.87648 9.12221C9.90705 9.19338 9.92314 9.26992 9.92381 9.34738C9.92449 9.42483 9.90973 9.50164 9.8804 9.57333C9.85107 9.64502 9.80775 9.71015 9.75298 9.76492C9.69821 9.81969 9.63308 9.86301 9.56139 9.89234C9.4897 9.92167 9.41289 9.93643 9.33543 9.93576C9.25798 9.93508 9.18143 9.91899 9.11027 9.88842C9.0391 9.85785 8.97473 9.81341 8.92092 9.75769L7 7.83678L5.07908 9.75769C5.02527 9.81341 4.96091 9.85785 4.88974 9.88842C4.81857 9.91899 4.74202 9.93508 4.66457 9.93576C4.58711 9.93643 4.5103 9.92167 4.43861 9.89234C4.36692 9.86301 4.30179 9.81969 4.24702 9.76492C4.19225 9.71015 4.14894 9.64502 4.11961 9.57333C4.09027 9.50164 4.07552 9.42483 4.07619 9.34738C4.07686 9.26992 4.09295 9.19338 4.12353 9.12221C4.1541 9.05104 4.19854 8.98667 4.25425 8.93286L6.17517 7.01194L4.25425 5.09103C4.19854 5.03722 4.1541 4.97285 4.12353 4.90168C4.09295 4.83051 4.07686 4.75396 4.07619 4.67651C4.07552 4.59906 4.09027 4.52224 4.11961 4.45055C4.14894 4.37886 4.19225 4.31373 4.24702 4.25896C4.30179 4.20419 4.36692 4.16088 4.43861 4.13155C4.5103 4.10222 4.58711 4.08746 4.66457 4.08813C4.74202 4.0888 4.81857 4.1049 4.88974 4.13547C4.96091 4.16604 5.02527 4.21048 5.07908 4.26619L7 6.18711L8.92092 4.26619C8.97473 4.21048 9.0391 4.16604 9.11027 4.13547C9.18143 4.1049 9.25798 4.0888 9.33543 4.08813C9.41289 4.08746 9.4897 4.10222 9.56139 4.13155C9.63308 4.16088 9.69821 4.20419 9.75298 4.25896C9.80775 4.31373 9.85107 4.37886 9.8804 4.45055C9.90973 4.52224 9.92449 4.59906 9.92381 4.67651C9.92314 4.75396 9.90705 4.83051 9.87648 4.90168C9.8459 4.97285 9.80147 5.03722 9.74575 5.09103L7.82483 7.01194L9.74575 8.93286Z" fill="#F51B0D"/>
                                  </g>
                                  <defs>
                                    <clipPath id="clip0_2611_1285">
                                      <rect width="14" height="14" fill="white" transform="translate(0 0.0119629)"/>
                                    </clipPath>
                                  </defs>
                                </svg>
                                <span style="color: #4D4B4B; font-size: 1rem; font-weight: 600; line-height: 1.3125rem;">B1 Level</span>
                              </div>
                            </div>
                            <div style="width: 40%; margin-left:8px;">
                              <div style="border: 1px solid #004AAD; border-radius: 4px; padding: 5px 8px; text-align: center;">
                                <!--check icon -->
                                <svg xmlns="http://www.w3.org/2000/svg" width="14" height="15" viewBox="0 0 14 15" fill="none">
                                  <path d="M6.93295 12.8453C3.74206 12.8453 1.15549 10.2337 1.15549 7.01198C1.15549 3.79023 3.74206 1.17865 6.93295 1.17865C10.1238 1.17865 12.7104 3.79023 12.7104 7.01198C12.7104 10.2337 10.1238 12.8453 6.93295 12.8453ZM6.35694 9.34532L10.4416 5.22057L9.62467 4.39573L6.35694 7.69565L4.7225 6.0454L3.90556 6.87023L6.35694 9.34532Z" fill="#004AAD"/>
                                </svg>
                                <span style="color: #4D4B4B; font-size: 1rem; font-weight: 600; line-height: 1.3125rem;">B2 Level</span>
                              </div>
                            </div>
                        </div>
                        <div style="display: -webkit-box; margin-top:8px;">
                          <div style="width: 40%;">
                            <div style="border: 1px solid #004AAD; border-radius: 4px; padding: 5px 8px; text-align: center;">
                                <!--check icon -->
                                <svg xmlns="http://www.w3.org/2000/svg" width="14" height="15" viewBox="0 0 14 15" fill="none">
                                  <path d="M6.93295 12.8453C3.74206 12.8453 1.15549 10.2337 1.15549 7.01198C1.15549 3.79023 3.74206 1.17865 6.93295 1.17865C10.1238 1.17865 12.7104 3.79023 12.7104 7.01198C12.7104 10.2337 10.1238 12.8453 6.93295 12.8453ZM6.35694 9.34532L10.4416 5.22057L9.62467 4.39573L6.35694 7.69565L4.7225 6.0454L3.90556 6.87023L6.35694 9.34532Z" fill="#004AAD"/>
                                </svg>
                              <span style="color: #4D4B4B; font-size: 1rem; font-weight: 600; line-height: 1.3125rem;">C1 Level</span>
                            </div>
                          </div>
                        </div>
                      @elseif($stu_result['level'] == 'C1')
                        <div style="display: -webkit-box;">
                          <div style="width: 40%;">
                            <div style="border: 1px solid #004AAD; border-radius: 4px; padding: 5px 8px; text-align: center;">
                             <!--cross icon -->
                             <svg xmlns="http://www.w3.org/2000/svg" width="14" height="15" viewBox="0 0 14 15" fill="none">
                              <g clip-path="url(#clip0_2611_1285)">
                                <path d="M7 0.595276C5.7309 0.595276 4.49031 0.971607 3.43509 1.67668C2.37988 2.38175 1.55744 3.3839 1.07177 4.55639C0.586112 5.72888 0.459041 7.01906 0.706629 8.26377C0.954218 9.50848 1.56535 10.6518 2.46273 11.5492C3.36012 12.4466 4.50346 13.0577 5.74817 13.3053C6.99288 13.5529 8.28306 13.4258 9.45555 12.9402C10.628 12.4545 11.6302 11.6321 12.3353 10.5769C13.0403 9.52164 13.4167 8.28104 13.4167 7.01194C13.4167 5.31014 12.7406 3.67803 11.5373 2.47467C10.3339 1.27132 8.70181 0.595276 7 0.595276ZM9.74575 8.93286C9.80147 8.98667 9.8459 9.05104 9.87648 9.12221C9.90705 9.19338 9.92314 9.26992 9.92381 9.34738C9.92449 9.42483 9.90973 9.50164 9.8804 9.57333C9.85107 9.64502 9.80775 9.71015 9.75298 9.76492C9.69821 9.81969 9.63308 9.86301 9.56139 9.89234C9.4897 9.92167 9.41289 9.93643 9.33543 9.93576C9.25798 9.93508 9.18143 9.91899 9.11027 9.88842C9.0391 9.85785 8.97473 9.81341 8.92092 9.75769L7 7.83678L5.07908 9.75769C5.02527 9.81341 4.96091 9.85785 4.88974 9.88842C4.81857 9.91899 4.74202 9.93508 4.66457 9.93576C4.58711 9.93643 4.5103 9.92167 4.43861 9.89234C4.36692 9.86301 4.30179 9.81969 4.24702 9.76492C4.19225 9.71015 4.14894 9.64502 4.11961 9.57333C4.09027 9.50164 4.07552 9.42483 4.07619 9.34738C4.07686 9.26992 4.09295 9.19338 4.12353 9.12221C4.1541 9.05104 4.19854 8.98667 4.25425 8.93286L6.17517 7.01194L4.25425 5.09103C4.19854 5.03722 4.1541 4.97285 4.12353 4.90168C4.09295 4.83051 4.07686 4.75396 4.07619 4.67651C4.07552 4.59906 4.09027 4.52224 4.11961 4.45055C4.14894 4.37886 4.19225 4.31373 4.24702 4.25896C4.30179 4.20419 4.36692 4.16088 4.43861 4.13155C4.5103 4.10222 4.58711 4.08746 4.66457 4.08813C4.74202 4.0888 4.81857 4.1049 4.88974 4.13547C4.96091 4.16604 5.02527 4.21048 5.07908 4.26619L7 6.18711L8.92092 4.26619C8.97473 4.21048 9.0391 4.16604 9.11027 4.13547C9.18143 4.1049 9.25798 4.0888 9.33543 4.08813C9.41289 4.08746 9.4897 4.10222 9.56139 4.13155C9.63308 4.16088 9.69821 4.20419 9.75298 4.25896C9.80775 4.31373 9.85107 4.37886 9.8804 4.45055C9.90973 4.52224 9.92449 4.59906 9.92381 4.67651C9.92314 4.75396 9.90705 4.83051 9.87648 4.90168C9.8459 4.97285 9.80147 5.03722 9.74575 5.09103L7.82483 7.01194L9.74575 8.93286Z" fill="#F51B0D"/>
                              </g>
                              <defs>
                                <clipPath id="clip0_2611_1285">
                                  <rect width="14" height="14" fill="white" transform="translate(0 0.0119629)"/>
                                </clipPath>
                              </defs>
                            </svg>
                              <span style="color: #4D4B4B; font-size: 1rem; font-weight: 600; line-height: 1.3125rem;">A1 Level</span>
                            </div>
                          </div>
                          <div style="width: 40%; margin-left:8px;">
                            <div style="border: 1px solid #004AAD; border-radius: 4px; padding: 5px 8px; text-align: center;">
                              <!--cross icon -->
                              <svg xmlns="http://www.w3.org/2000/svg" width="14" height="15" viewBox="0 0 14 15" fill="none">
                                <g clip-path="url(#clip0_2611_1285)">
                                  <path d="M7 0.595276C5.7309 0.595276 4.49031 0.971607 3.43509 1.67668C2.37988 2.38175 1.55744 3.3839 1.07177 4.55639C0.586112 5.72888 0.459041 7.01906 0.706629 8.26377C0.954218 9.50848 1.56535 10.6518 2.46273 11.5492C3.36012 12.4466 4.50346 13.0577 5.74817 13.3053C6.99288 13.5529 8.28306 13.4258 9.45555 12.9402C10.628 12.4545 11.6302 11.6321 12.3353 10.5769C13.0403 9.52164 13.4167 8.28104 13.4167 7.01194C13.4167 5.31014 12.7406 3.67803 11.5373 2.47467C10.3339 1.27132 8.70181 0.595276 7 0.595276ZM9.74575 8.93286C9.80147 8.98667 9.8459 9.05104 9.87648 9.12221C9.90705 9.19338 9.92314 9.26992 9.92381 9.34738C9.92449 9.42483 9.90973 9.50164 9.8804 9.57333C9.85107 9.64502 9.80775 9.71015 9.75298 9.76492C9.69821 9.81969 9.63308 9.86301 9.56139 9.89234C9.4897 9.92167 9.41289 9.93643 9.33543 9.93576C9.25798 9.93508 9.18143 9.91899 9.11027 9.88842C9.0391 9.85785 8.97473 9.81341 8.92092 9.75769L7 7.83678L5.07908 9.75769C5.02527 9.81341 4.96091 9.85785 4.88974 9.88842C4.81857 9.91899 4.74202 9.93508 4.66457 9.93576C4.58711 9.93643 4.5103 9.92167 4.43861 9.89234C4.36692 9.86301 4.30179 9.81969 4.24702 9.76492C4.19225 9.71015 4.14894 9.64502 4.11961 9.57333C4.09027 9.50164 4.07552 9.42483 4.07619 9.34738C4.07686 9.26992 4.09295 9.19338 4.12353 9.12221C4.1541 9.05104 4.19854 8.98667 4.25425 8.93286L6.17517 7.01194L4.25425 5.09103C4.19854 5.03722 4.1541 4.97285 4.12353 4.90168C4.09295 4.83051 4.07686 4.75396 4.07619 4.67651C4.07552 4.59906 4.09027 4.52224 4.11961 4.45055C4.14894 4.37886 4.19225 4.31373 4.24702 4.25896C4.30179 4.20419 4.36692 4.16088 4.43861 4.13155C4.5103 4.10222 4.58711 4.08746 4.66457 4.08813C4.74202 4.0888 4.81857 4.1049 4.88974 4.13547C4.96091 4.16604 5.02527 4.21048 5.07908 4.26619L7 6.18711L8.92092 4.26619C8.97473 4.21048 9.0391 4.16604 9.11027 4.13547C9.18143 4.1049 9.25798 4.0888 9.33543 4.08813C9.41289 4.08746 9.4897 4.10222 9.56139 4.13155C9.63308 4.16088 9.69821 4.20419 9.75298 4.25896C9.80775 4.31373 9.85107 4.37886 9.8804 4.45055C9.90973 4.52224 9.92449 4.59906 9.92381 4.67651C9.92314 4.75396 9.90705 4.83051 9.87648 4.90168C9.8459 4.97285 9.80147 5.03722 9.74575 5.09103L7.82483 7.01194L9.74575 8.93286Z" fill="#F51B0D"/>
                                </g>
                                <defs>
                                  <clipPath id="clip0_2611_1285">
                                    <rect width="14" height="14" fill="white" transform="translate(0 0.0119629)"/>
                                  </clipPath>
                                </defs>
                              </svg>
                              <span style="color: #4D4B4B; font-size: 1rem; font-weight: 600; line-height: 1.3125rem;">A2 Level</span>
                            </div>
                          </div>
                        </div>
                        <div style="display: -webkit-box; margin-top:8px;">
                            <div style="width: 40%;">
                              <div style="border: 1px solid #004AAD; border-radius: 4px; padding: 5px 8px; text-align: center;">
                                  <!--cross icon -->
                                <svg xmlns="http://www.w3.org/2000/svg" width="14" height="15" viewBox="0 0 14 15" fill="none">
                                  <g clip-path="url(#clip0_2611_1285)">
                                    <path d="M7 0.595276C5.7309 0.595276 4.49031 0.971607 3.43509 1.67668C2.37988 2.38175 1.55744 3.3839 1.07177 4.55639C0.586112 5.72888 0.459041 7.01906 0.706629 8.26377C0.954218 9.50848 1.56535 10.6518 2.46273 11.5492C3.36012 12.4466 4.50346 13.0577 5.74817 13.3053C6.99288 13.5529 8.28306 13.4258 9.45555 12.9402C10.628 12.4545 11.6302 11.6321 12.3353 10.5769C13.0403 9.52164 13.4167 8.28104 13.4167 7.01194C13.4167 5.31014 12.7406 3.67803 11.5373 2.47467C10.3339 1.27132 8.70181 0.595276 7 0.595276ZM9.74575 8.93286C9.80147 8.98667 9.8459 9.05104 9.87648 9.12221C9.90705 9.19338 9.92314 9.26992 9.92381 9.34738C9.92449 9.42483 9.90973 9.50164 9.8804 9.57333C9.85107 9.64502 9.80775 9.71015 9.75298 9.76492C9.69821 9.81969 9.63308 9.86301 9.56139 9.89234C9.4897 9.92167 9.41289 9.93643 9.33543 9.93576C9.25798 9.93508 9.18143 9.91899 9.11027 9.88842C9.0391 9.85785 8.97473 9.81341 8.92092 9.75769L7 7.83678L5.07908 9.75769C5.02527 9.81341 4.96091 9.85785 4.88974 9.88842C4.81857 9.91899 4.74202 9.93508 4.66457 9.93576C4.58711 9.93643 4.5103 9.92167 4.43861 9.89234C4.36692 9.86301 4.30179 9.81969 4.24702 9.76492C4.19225 9.71015 4.14894 9.64502 4.11961 9.57333C4.09027 9.50164 4.07552 9.42483 4.07619 9.34738C4.07686 9.26992 4.09295 9.19338 4.12353 9.12221C4.1541 9.05104 4.19854 8.98667 4.25425 8.93286L6.17517 7.01194L4.25425 5.09103C4.19854 5.03722 4.1541 4.97285 4.12353 4.90168C4.09295 4.83051 4.07686 4.75396 4.07619 4.67651C4.07552 4.59906 4.09027 4.52224 4.11961 4.45055C4.14894 4.37886 4.19225 4.31373 4.24702 4.25896C4.30179 4.20419 4.36692 4.16088 4.43861 4.13155C4.5103 4.10222 4.58711 4.08746 4.66457 4.08813C4.74202 4.0888 4.81857 4.1049 4.88974 4.13547C4.96091 4.16604 5.02527 4.21048 5.07908 4.26619L7 6.18711L8.92092 4.26619C8.97473 4.21048 9.0391 4.16604 9.11027 4.13547C9.18143 4.1049 9.25798 4.0888 9.33543 4.08813C9.41289 4.08746 9.4897 4.10222 9.56139 4.13155C9.63308 4.16088 9.69821 4.20419 9.75298 4.25896C9.80775 4.31373 9.85107 4.37886 9.8804 4.45055C9.90973 4.52224 9.92449 4.59906 9.92381 4.67651C9.92314 4.75396 9.90705 4.83051 9.87648 4.90168C9.8459 4.97285 9.80147 5.03722 9.74575 5.09103L7.82483 7.01194L9.74575 8.93286Z" fill="#F51B0D"/>
                                  </g>
                                  <defs>
                                    <clipPath id="clip0_2611_1285">
                                      <rect width="14" height="14" fill="white" transform="translate(0 0.0119629)"/>
                                    </clipPath>
                                  </defs>
                                </svg>
                                <span style="color: #4D4B4B; font-size: 1rem; font-weight: 600; line-height: 1.3125rem;">B1 Level</span>
                              </div>
                            </div>
                            <div style="width: 40%; margin-left:8px;">
                              <div style="border: 1px solid #004AAD; border-radius: 4px; padding: 5px 8px; text-align: center;">
                                <!--cross icon -->
                                <svg xmlns="http://www.w3.org/2000/svg" width="14" height="15" viewBox="0 0 14 15" fill="none">
                                  <g clip-path="url(#clip0_2611_1285)">
                                    <path d="M7 0.595276C5.7309 0.595276 4.49031 0.971607 3.43509 1.67668C2.37988 2.38175 1.55744 3.3839 1.07177 4.55639C0.586112 5.72888 0.459041 7.01906 0.706629 8.26377C0.954218 9.50848 1.56535 10.6518 2.46273 11.5492C3.36012 12.4466 4.50346 13.0577 5.74817 13.3053C6.99288 13.5529 8.28306 13.4258 9.45555 12.9402C10.628 12.4545 11.6302 11.6321 12.3353 10.5769C13.0403 9.52164 13.4167 8.28104 13.4167 7.01194C13.4167 5.31014 12.7406 3.67803 11.5373 2.47467C10.3339 1.27132 8.70181 0.595276 7 0.595276ZM9.74575 8.93286C9.80147 8.98667 9.8459 9.05104 9.87648 9.12221C9.90705 9.19338 9.92314 9.26992 9.92381 9.34738C9.92449 9.42483 9.90973 9.50164 9.8804 9.57333C9.85107 9.64502 9.80775 9.71015 9.75298 9.76492C9.69821 9.81969 9.63308 9.86301 9.56139 9.89234C9.4897 9.92167 9.41289 9.93643 9.33543 9.93576C9.25798 9.93508 9.18143 9.91899 9.11027 9.88842C9.0391 9.85785 8.97473 9.81341 8.92092 9.75769L7 7.83678L5.07908 9.75769C5.02527 9.81341 4.96091 9.85785 4.88974 9.88842C4.81857 9.91899 4.74202 9.93508 4.66457 9.93576C4.58711 9.93643 4.5103 9.92167 4.43861 9.89234C4.36692 9.86301 4.30179 9.81969 4.24702 9.76492C4.19225 9.71015 4.14894 9.64502 4.11961 9.57333C4.09027 9.50164 4.07552 9.42483 4.07619 9.34738C4.07686 9.26992 4.09295 9.19338 4.12353 9.12221C4.1541 9.05104 4.19854 8.98667 4.25425 8.93286L6.17517 7.01194L4.25425 5.09103C4.19854 5.03722 4.1541 4.97285 4.12353 4.90168C4.09295 4.83051 4.07686 4.75396 4.07619 4.67651C4.07552 4.59906 4.09027 4.52224 4.11961 4.45055C4.14894 4.37886 4.19225 4.31373 4.24702 4.25896C4.30179 4.20419 4.36692 4.16088 4.43861 4.13155C4.5103 4.10222 4.58711 4.08746 4.66457 4.08813C4.74202 4.0888 4.81857 4.1049 4.88974 4.13547C4.96091 4.16604 5.02527 4.21048 5.07908 4.26619L7 6.18711L8.92092 4.26619C8.97473 4.21048 9.0391 4.16604 9.11027 4.13547C9.18143 4.1049 9.25798 4.0888 9.33543 4.08813C9.41289 4.08746 9.4897 4.10222 9.56139 4.13155C9.63308 4.16088 9.69821 4.20419 9.75298 4.25896C9.80775 4.31373 9.85107 4.37886 9.8804 4.45055C9.90973 4.52224 9.92449 4.59906 9.92381 4.67651C9.92314 4.75396 9.90705 4.83051 9.87648 4.90168C9.8459 4.97285 9.80147 5.03722 9.74575 5.09103L7.82483 7.01194L9.74575 8.93286Z" fill="#F51B0D"/>
                                  </g>
                                  <defs>
                                    <clipPath id="clip0_2611_1285">
                                      <rect width="14" height="14" fill="white" transform="translate(0 0.0119629)"/>
                                    </clipPath>
                                  </defs>
                                </svg>
                                <span style="color: #4D4B4B; font-size: 1rem; font-weight: 600; line-height: 1.3125rem;">B2 Level</span>
                              </div>
                            </div>
                        </div>
                        <div style="display: -webkit-box; margin-top:8px;">
                          <div style="width: 40%;">
                            <div style="border: 1px solid #004AAD; border-radius: 4px; padding: 5px 8px; text-align: center;">
                                <!--check icon -->
                                <svg xmlns="http://www.w3.org/2000/svg" width="14" height="15" viewBox="0 0 14 15" fill="none">
                                  <path d="M6.93295 12.8453C3.74206 12.8453 1.15549 10.2337 1.15549 7.01198C1.15549 3.79023 3.74206 1.17865 6.93295 1.17865C10.1238 1.17865 12.7104 3.79023 12.7104 7.01198C12.7104 10.2337 10.1238 12.8453 6.93295 12.8453ZM6.35694 9.34532L10.4416 5.22057L9.62467 4.39573L6.35694 7.69565L4.7225 6.0454L3.90556 6.87023L6.35694 9.34532Z" fill="#004AAD"/>
                                </svg>
                              <span style="color: #4D4B4B; font-size: 1rem; font-weight: 600; line-height: 1.3125rem;">C1 Level</span>
                            </div>
                          </div>
                        </div>
                      @endif
                  
                  <div style="margin-top:1.5rem !important;">
                    <div style="color: #222;font-size: 0.875rem;font-weight: 400;line-height: 1.125rem;">কোর্স বিষয়ে যে কোন তথ্য বা সহায়তা পেতে যোগাযোগ করুনঃ</div>
                    <div style="color: #222;font-size: 0.875rem;font-weight: 700;line-height: 1.125rem; margin:5px 0;"> {{ Auth::user()->name }}</div>
                    <div style="color: #222;font-size: 0.875rem;font-weight: 400;line-height: 1.125rem;"> {{ Auth::user()->designation }}</div>
                    <div style="color: #222;font-size: 0.875rem;font-weight: 400;line-height: 1.125rem; margin-top:5px;">ব্রিটিশ আমেরিকান রিসোর্স সেন্টার, {{ Auth::user()->phone }}</div>
                  </div>
                  <div style="text-align: center; margin-top: 2rem;">
                    <img src="{{ asset('frontend\images\result-card\bar-code-full.svg') }}" alt="" style="width: 20%; height:auto">
                  </div>
                  <p style="color: #ED1D24;font-size: 0.75rem;font-weight: 400;line-height: 0.8125rem;text-align: center;margin-bottom: auto;margin-top: 23px;">
                    Visit day discount পেতে এই পেপারটি সংরক্ষন করুন
                  </p>
              </td>
            </tr>
            





            <tr>
              <td style="padding:30px;background-color:#DFF5FF;">
                <div>
                  <img src="{{ asset('frontend\images\full_logo.png') }}" alt="" style="width: 40%; height:auto">
                </div>
                <p style="margin:1rem 0 8px 0;">
                  <a href="#" style="text-decoration:none;">
                    <svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" viewBox="0 0 27 27" fill="none">
                      <circle cx="13.2353" cy="13.2353" r="12.6838" fill="white" stroke="#656565" stroke-width="1.10294"/>
                      <path d="M14.3942 20.466V13.2653H16.3819L16.6454 10.7839H14.3942L14.3976 9.54193C14.3976 8.89474 14.4591 8.54797 15.3887 8.54797H16.6313V6.06628H14.6433C12.2554 6.06628 11.4149 7.27003 11.4149 9.29435V10.7842H9.92647V13.2656H11.4149V20.466H14.3942Z" fill="#656565"/>
                    </svg>
                  </a>
                  <a href="#" style="text-decoration:none;">
                    <svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" viewBox="0 0 28 27" fill="none">
                      <circle cx="14.1176" cy="13.2353" r="12.6838" fill="white" stroke="#656565" stroke-width="1.10294"/>
                      <path fill-rule="evenodd" clip-rule="evenodd" d="M10.4331 8.17431C10.4136 7.29069 9.78177 6.61768 8.75569 6.61768C7.72961 6.61768 7.0588 7.29069 7.0588 8.17431C7.0588 9.03963 7.70978 9.73202 8.71675 9.73202H8.73592C9.78177 9.73202 10.4331 9.03963 10.4331 8.17431ZM10.2357 10.9621H7.23625V19.9741H10.2357V10.9621ZM17.5992 10.7505C19.573 10.7505 21.0527 12.0388 21.0527 14.8069L21.0525 19.9741H18.0532V15.1527C18.0532 13.9416 17.6192 13.1153 16.5334 13.1153C15.7048 13.1153 15.2112 13.6724 14.9944 14.2104C14.9151 14.4033 14.8956 14.672 14.8956 14.9413V19.9743H11.8959C11.8959 19.9743 11.9354 11.808 11.8959 10.9624H14.8956V12.2388C15.2937 11.6252 16.0067 10.7505 17.5992 10.7505Z" fill="#656565"/>
                    </svg>
                  </a>
                  <a href="#" style="text-decoration:none;">
                    <svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" viewBox="0 0 28 27" fill="none">
                      <circle cx="14" cy="13.2353" r="12.6838" fill="white" stroke="#656565" stroke-width="1.10294"/>
                      <path fill-rule="evenodd" clip-rule="evenodd" d="M13.7654 7.4486C13.6227 7.44853 13.4904 7.44847 13.3675 7.44866V7.4469C12.0518 7.44837 11.7995 7.45719 11.1483 7.48661C10.4601 7.51822 10.0864 7.63293 9.83756 7.72999C9.50815 7.85823 9.27285 8.01117 9.02579 8.25823C8.77873 8.50529 8.62549 8.74059 8.49755 9.07C8.40093 9.31883 8.28593 9.69236 8.25446 10.3806C8.22063 11.1247 8.21387 11.3471 8.21387 13.2321C8.21387 15.1171 8.22063 15.3407 8.25446 16.0848C8.28578 16.773 8.40093 17.1466 8.49755 17.3951C8.62578 17.7247 8.77873 17.9594 9.02579 18.2064C9.27285 18.4535 9.50815 18.6064 9.83756 18.7344C10.0865 18.831 10.4601 18.946 11.1483 18.9778C11.8924 19.0116 12.1158 19.0189 14.0007 19.0189C15.8854 19.0189 16.1089 19.0116 16.8531 18.9778C17.5413 18.9463 17.9151 18.8316 18.1637 18.7345C18.4932 18.6066 18.7278 18.4536 18.9749 18.2066C19.2219 17.9597 19.3752 17.7251 19.5031 17.3957C19.5997 17.1471 19.7147 16.7736 19.7462 16.0854C19.78 15.3412 19.7874 15.1177 19.7874 13.2339C19.7874 11.35 19.78 11.1265 19.7462 10.3824C19.7149 9.69413 19.5997 9.3206 19.5031 9.07206C19.3749 8.74265 19.2219 8.50735 18.9749 8.26029C18.7279 8.01323 18.4931 7.86029 18.1637 7.73234C17.9149 7.63572 17.5413 7.52072 16.8531 7.48925C16.1088 7.45543 15.8854 7.44866 14.0007 7.44866L13.7654 7.4486ZM16.9216 9.46749C16.9216 8.99969 17.301 8.62071 17.7687 8.62071V8.62042C18.2363 8.62042 18.6157 8.99984 18.6157 9.46749C18.6157 9.93514 18.2363 10.3146 17.7687 10.3146C17.301 10.3146 16.9216 9.93514 16.9216 9.46749ZM14.0005 9.6104C11.9987 9.61048 10.3757 11.2336 10.3757 13.2354C10.3757 15.2374 11.9988 16.8597 14.0007 16.8597C16.0026 16.8597 17.6251 15.2374 17.6251 13.2354C17.6251 11.2335 16.0025 9.6104 14.0005 9.6104ZM16.3536 13.2355C16.3536 11.9359 15.3 10.8825 14.0006 10.8825C12.701 10.8825 11.6476 11.9359 11.6476 13.2355C11.6476 14.5349 12.701 15.5884 14.0006 15.5884C15.3 15.5884 16.3536 14.5349 16.3536 13.2355Z" fill="#656565"/>
                    </svg>
                  </a>
                </p>
                  <div style="font-size: 1rem; color: #414040;font-weight: 600;line-height: 1.5rem; margin-top:0.875rem;">Visit Our Office</div>
                  <div style="font-size: 0.875rem; color: #414040;font-weight: 600;line-height: 1.5rem; margin-top:0.875rem;">Uttara Branch:</div>
                  <div style="font-size: 1rem; color: #414040;font-weight: 400;line-height: 1.5rem;">6th Floor, House: 34, Garib-E-Newaz Avenue, Sector: 11, Uttara, Dhaka 1230</div>
                  <div style="font-size: 1rem; color: #414040;font-weight: 500;line-height: 1.5rem;">01617-302010</div>
                  <div style="font-size: 0.875rem; color: #414040;font-weight: 600;line-height: 1.5rem; margin-top:0.875rem;">Mirpur Branch:</div>
                  <div style="font-size: 1rem; color: #414040;font-weight: 500;line-height: 1.5rem;">Plot#23, Main road Section: 11, Pallabi Mirpur, Dhaka 1216</div>
                  <div style="font-size: 1rem; color: #414040;font-weight: 500;line-height: 1.5rem;">01617-302011</div>
              </td>
            </tr>
          </table>
        </td>
      </tr>
    </table>
  </div>
</body>
</html>