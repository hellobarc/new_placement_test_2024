<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ID Card</title>
    <style>

.header{
    background-color: #DFF5FF;
    padding: 10px 0;
}
.result-graph{
   border: 1px solid #2268D1;
    font-size: 1.75rem;
    font-weight: 600; 
    padding-left: 0.35em;
    padding-right: 0.35em;
    padding-top: 0.35em;
    padding-bottom: 0.35em;
}
progress::-webkit-progress-value {
   background-color: red;
}
</style>
</head>
<body>
   <section class="header">
        <table>
            <tbody>
                <tr>
                    <td><img src="{{public_path('frontend/images/full_logo.png')}}" alt="" style="width: 50%; margin-left:5%;"></td>
                    <td>
                        <img src="{{public_path('frontend/images/result-card/address.svg')}}" alt="" style="width: 100%; margin-left:10%;">
                    </td>
                </tr>
            </tbody>
        </table>
   </section>
   <section>
        <h1 style="text-align: center; color: #32327B;font-size: 1.125rem;font-weight: 700;">Placement Test Report</h1>
        <p style="margin: 0 0 0 0; font-size: 0.75rem;letter-spacing: 0.015rem;color: #181818;">Minar Ahmed</p>
        <p  style="margin: 0 0 0 0; font-size: 18px;letter-spacing: 0.015rem;color: #181818;">
            আপনি ব্রিটিশ আমেরিকান রিসোর্স সেন্টারে এসে ইংরেজি ভাষা দক্ষতা পরিমাপের জন্য ৫০ মিনিটের একটি পরীক্ষা দিয়েছেন এবং আপনার অবস্থান 
            <span style="color: #2268D1;font-size: 22px;letter-spacing: 0.0175rem;font-weight: 600;">B2 level</span> এ.
        </p>
   </section>
   <section>
    <div>
        <img style="width: 100%;" src="{{public_path('frontend/images/result-card/cefr_level.svg')}}" alt="">
    </div>
   </section>
   <section>
        <table style="">
            <tr>
                <td class="result-graph">
                    <p style=" background-color: #36A0ED; width:100%; color:#f8f8f8; font-weight:800;">পরীক্ষার ফলাফল</p><br>
                    <img style="width:2%" src="{{public_path('frontend/images/result-card/reading_icon.svg')}}" alt="">
                    <span style="font-weight: 700;color: #434242;font-size: 1rem;letter-spacing: 0.01431rem;">Reading</span>
                    <p>
                        <progress class="reading" style="display: inline-block;" id="file" value="32" max="100"> 32% </progress>
                    </p>
                    <div>
                        <img style="width:3%" src="{{public_path('frontend/images/result-card/listening_icon.svg')}}" alt="">
                        <span style="font-weight: 700;color: #434242;font-size: 1rem;letter-spacing: 0.01431rem;">Listening</span>
                    </div>
                    <p style="">
                        <progress style="display: inline-block;" id="file" value="32" max="100"> 32% </progress>
                    </p>
                    <div style="display: inline-block;">
                        <img style="width:3%" src="{{public_path('frontend/images/result-card/writing_icong.svg')}}" alt="">
                        <span style="font-weight: 700;color: #434242;font-size: 1rem;letter-spacing: 0.01431rem;">Writing</span>
                    </div>
                    <p>
                        <progress style="display: inline-block;" id="file" value="32" max="100"> 32% </progress>
                    </p>
                </td>
                <td style="">
                    <table>
                        <tr style="border-bottom: 1px solid #004AAD">
                            <td>
                                <h5 style="font-size:1.25rem;">বর্তমান অবস্থা</h5>
                            </td>
                            <td>
                                <h5 style="font-size:1.25rem;">টার্গেট স্কোর</h5>
                            </td>
                        </tr>
                        <tr style="text-align: center;">
                            <td>A1</td>
                            <td>C1</td>
                        </tr>
                        <tr style="text-align: center;">
                            <td>4.5</td>
                            <td>7</td>
                        </tr>
                    </table>
                </td>
            </tr>
        </table>
   </section>
   <div>
        <h2 style="color: #403F3F;">Band 4 থেকে band 7 এ যেতে যে কোর্সগুলো করতে হবে</h2>
   </div>
   <div>
        <img style="width: 100%; background:transparent;" src="{{public_path('frontend/images/result-card/course_level.svg')}}" alt="">
   </div>
   <div>
    <table>
        <tr>
            <td style="width: 87%;">
                <div style="font-size:1.125rem;">কোর্স বিষয়ে যে কোন তথ্য বা সহায়তা পেতে যোগাযোগ করুনঃ</div>
                <div style="font-size:1.125rem;">তানজীন,</div>
                <div style="font-size:1.125rem;">এসোসিয়েট ম্যানেজার, BARC</div>
                <div style="font-size:1.125rem;">০১৬১৭-৩০২০১০</div>
            </td>
            
            <td style="text-align:center;">
                <img style="width: 7%; text-align:center;" src="{{public_path('frontend/images/result-card/bar-code.svg')}}" alt="">
                <div style="">স্যাম্পল ক্লাস করুন</div>
            </td>
        </tr>
    </table>
   </div>
   <div>
        <p style="font-size: 14px; text-align:center; color:#f03f3f;">Visit day discount পেতে এই পেপারটি সংরক্ষন করুন</p>
   </div>
   <div>
        <img style="width: 100%;" src="{{public_path('frontend/images/result-card/footer.svg')}}" alt="">
   </div>
</body>
</html>