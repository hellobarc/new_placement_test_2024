
@foreach ($courseBundle as $card)
<div id="a1_a2_price_table" class="background mt-3">
    <div class="row">
        <div class="col-md-10 mx-auto">
            <div class="p-5">
                <div class="row">
                    <div class="col-xxl-12 col-xl-12 col-lg-12 col-md-12 col-xs-12 col-sm-12">
                        <div class="text-center">
                            <p class="fs-1 fw-bold background-heading col-md-6 mx-auto">Course Fee Details({{$card->course_bundle}})</p>
                        </div>
                    </div>
                </div>
                <div class="row ">
                    <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-4 col-xs-12 col-sm-12 mx-auto">
                        <div class="card" style="position: relative;">
                            <div class="color1 headingCircle1 text-center">
                                <span><i class="fa-solid fa-star text-white mb-3"></i></span>
                                <div class="headingColor1 text-white">
                                    <p class="fs-1 fw-bolder mb-0">Regular</p>
                                    <p class="fs-5 fw-bold text-dark"><span style="font-size: 12px">---- </span>Fees<span style="font-size: 12px"> ----</span></p>
                                </div>
                            </div>
                            <div class="card-body" style="margin-top: 30%;">
                            <p class="fs-5 fw-bolder pt-3 text-center price1TextColor">IELTS Premium Course</p>
                            <p class="card-text">
                                <table class="table">
                                    <thead >
                                        <th class="bg-secondary text-white text-center t-head-design" >Level</th>
                                        <th class="bg-secondary text-white text-center t-head-design">Discount</th>
                                        <th class="bg-secondary text-white text-center t-head-design">Fees</th>
                                    </thead>
                                    <tbody>
                                        @php
                                        $regularPrice = 0;
                                        @endphp
                                        @foreach ($card->CoursePrice as $item)
                                            @if ($item->package == 'regular')
                                           <tr>
                                            <td class="ttddesign">{{strtoupper($item->course_level)}}</td>
                                            <td class="ttddesign">{{$item->duration}}</td>
                                            <td class="ttddesign">{{number_format($item->individual_price)}}/-</td>
                                           </tr>
                                            @endif
                                            @php
                                            if ($item->package == 'regular'){
                                                $regularPrice +=    $item->individual_price;
                                            }
                                            @endphp
                                        @endforeach
                                        
                                    </tbody>
                                </table>
                            </p>
                            <p class="text-center fw-bolder text-dark text-uppercase mb-0" style="margin-top: 20%">Total</p>
                            
                            </div>
                        </div>
                        <div class="col color1 priceBorderRadius">
                            <p class="fs-1 text-center text-white pt-2 pb-1">{{number_format($regularPrice)}}/-</p>
                            {{-- <p class="fs-1 text-center text-white pt-2 pb-1">23,998/-</p> --}}
                        </div>
                    </div>
                    <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-4 col-xs-12 col-sm-12 mx-auto">
                        <div class="card" style="position: relative;">
                            <div class="color2 headingCircle2 text-center" style="overflow: hidden">
                                <span><i class="fa-solid fa-star text-white mb-3"></i></span>
                                <span><i class="fa-solid fa-star text-white mb-3"></i></span>
                                <div class="headingColor2 text-white">
                                    <p class="fs-1 fw-bolder mb-0">Standard</p>
                                    <p class="fs-5 fw-bold text-dark"><span style="font-size: 12px">---- </span>package<span style="font-size: 12px"> ----</span></p>
                                </div>
                            </div>
                            <div class="card-body" style="margin-top: 30%;">
                                <p class="fs-5 fw-bolder pt-3 text-center price2TextColor">IELTS Premium Course</p>
                            <p class="card-text">
                                <table class="table">
                                    <thead >
                                        <th class="bg-secondary text-white text-center t-head-design">Level</th>
                                        <th class="bg-secondary text-white text-center t-head-design">Duration</th>
                                        <th class="bg-secondary text-white text-center t-head-design">Offered Fees</th>
                                    </thead>
                                    <tbody>
                                        @php
                                        $standardPrice = 0;
                                        @endphp
                                        @foreach ($card->CoursePrice as $item)
                                            @if ($item->package == 'standard')
                                           <tr>
                                            <td class="ttddesign">{{strtoupper($item->course_level)}}</td>
                                            <td class="ttddesign">{{$item->discount}}</td>
                                            <td class="ttddesign">{{number_format($item->offered_price)}}</td>
                                           </tr>
                                            @endif
                                            @php
                                            if ($item->package == 'standard'){
                                                $standardPrice +=    $item->offered_price;
                                            }
                                            @endphp
                                        @endforeach
                                    </tbody>
                                </table>
                            </p>
                            <p class="text-center fw-bolder text-dark text-uppercase mb-0" style="margin-top: 20%">Total</p>
                            </div>
                        </div>
                        <div class="col color2 priceBorderRadius">
                            <p class="fs-1 text-center text-white pt-2 pb-1">{{number_format($standardPrice)}}/-</p>
                        </div>
                    </div>
                
                    <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-4 col-xs-12 col-sm-12 mx-auto">
                        <div class="card" style="position: relative;">
                            <div class="color3 headingCircle3 text-center" style="overflow: hidden">
                                <span><i class="fa-solid fa-star text-warning mb-3"></i></span>
                                <span><i class="fa-solid fa-star text-warning mb-3"></i></span>
                                <span><i class="fa-solid fa-star text-warning mb-3"></i></span>
                                <div class="headingColor3 text-white">
                                    <p class="fs-1 fw-bolder mb-0">Privileged</p>
                                    <p class="fs-5 fw-bold"><span style="font-size: 12px">---- </span>package<span style="font-size: 12px"> ----</span></p>
                                </div>
                            </div>
                            <div class="card-body" style="margin-top: 30%;">
                                <p class="fs-5 fw-bolder pt-3 text-center price3TextColor">Applicable only for Visit Day</p>
                            <p class="card-text">
                                <table class="table">
                                    <thead >
                                        <th class="bg-secondary text-white text-center t-head-design">Level</th>
                                        <th class="bg-secondary text-white text-center t-head-design">Discount</th>
                                        <th class="bg-secondary text-white text-center t-head-design">Offerd Fees</th>
                                    </thead>
                                    <tbody>
                                        @php
                                        $privilegedPrice = 0;
                                        @endphp
                                        @foreach ($card->CoursePrice as $item)
                                            @if ($item->package == 'privileged')
                                           <tr>
                                            <td class="ttddesign">{{strtoupper($item->course_level)}}</td>
                                            <td class="ttddesign">{{$item->discount}}</td>
                                            <td class="ttddesign">{{number_format($item->offered_price)}}</td>
                                           </tr>
                                            @endif
                                            @php
                                            if ($item->package == 'standard'){
                                                $privilegedPrice +=  $item->offered_price;
                                            }
                                                $savePrice = $privilegedPrice-$item->total_price;
                                                $totalPrivilegedPrice = $item->total_price;
                                            @endphp
                                        @endforeach
                                    </tbody>
                                </table>
                            </p>
                            <div class="row">
                                <div class="col-2 text-white" style="background-color: #FD0001">Hot</div>
                                <div class="col-10"><p class="fw-bolder text-dark text-uppercase mb-0" style="margin-left: 30%">Total</p></div>
                            </div>
                            <h2 class=" mb-0 price3TextColor fw-bolder text-center">{{ number_format($totalPrivilegedPrice) }}/-</h2>
                            </div>
                        </div>
                        <div class="col color3 priceBorderRadius">
                            <p class="fs-1 text-center text-white pt-2 pb-1">Save: {{number_format($savePrice)}}/-</p>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-xxl-12 col-xl-12 col-lg-12 col-md-12 col-xs-12 col-sm-12 mx-auto">
                        <div class="text-center mt-4">
                            <p class="fs-3 fw-bold ">British American Resource Center</p>
                        </div>
                    </div>
                    <div class="col-xxl-12 col-xl-12 col-lg-12 col-md-12 col-xs-12 col-sm-12 mx-auto">
                        <p class="text-end mb-0">*5% Vat is Applicable</p>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
@endforeach

{{-- A1-A2 --}}
{{-- <div id="a1_a2_price_table">
    <div class="row">
        <div class="col-md-10 mx-auto">
            <div class="background p-5">
                <div class="row">
                    <div class="col-xxl-12 col-xl-12 col-lg-12 col-md-12 col-xs-12 col-sm-12">
                        <div class="text-center">
                            <p class="fs-1 fw-bold background-heading col-md-6 mx-auto">Course Fee Details(A1-A2)</p>
                        </div>
                    </div>
                </div>
                <div class="row ">
                    <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-4 col-xs-12 col-sm-12 mx-auto">
                        <div class="card" style="position: relative;">
                            <div class="color1 headingCircle1 text-center">
                                <span><i class="fa-solid fa-star text-white mb-3"></i></span>
                                <div class="headingColor1 text-white">
                                    <p class="fs-1 fw-bolder mb-0">Regular</p>
                                    <p class="fs-5 fw-bold text-dark"><span style="font-size: 12px">---- </span>Fees<span style="font-size: 12px"> ----</span></p>
                                </div>
                            </div>
                            <div class="card-body" style="margin-top: 30%;">
                            <p class="fs-5 fw-bolder pt-3 text-center price1TextColor">IELTS Premium Course</p>
                            <p class="card-text">
                                <table class="table">
                                    <thead >
                                        <th class="bg-secondary text-white text-center t-head-design" >Level</th>
                                        <th class="bg-secondary text-white text-center t-head-design">Discount</th>
                                        <th class="bg-secondary text-white text-center t-head-design">Fees</th>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="ttddesign">B1</td>
                                            <td class="ttddesign">1month+</td>
                                            <td class="ttddesign">11,999</td>
                                        </tr>
                                        <tr>
                                            <td class="ttddesign">B2</td>
                                            <td class="ttddesign">1month+</td>
                                            <td class="ttddesign">11,999</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </p>
                            <p class="text-center fw-bolder text-dark text-uppercase mb-0" style="margin-top: 20%">Total</p>
                            
                            </div>
                        </div>
                        <div class="col color1 priceBorderRadius">
                            <p class="fs-1 text-center text-white pt-2 pb-1">23,998/-</p>
                        </div>
                    </div>
                    <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-4 col-xs-12 col-sm-12 mx-auto">
                        <div class="card" style="position: relative;">
                            <div class="color2 headingCircle2 text-center" style="overflow: hidden">
                                <span><i class="fa-solid fa-star text-white mb-3"></i></span>
                                <span><i class="fa-solid fa-star text-white mb-3"></i></span>
                                <div class="headingColor2 text-white">
                                    <p class="fs-1 fw-bolder mb-0">Standard</p>
                                    <p class="fs-5 fw-bold text-dark"><span style="font-size: 12px">---- </span>package<span style="font-size: 12px"> ----</span></p>
                                </div>
                            </div>
                            <div class="card-body" style="margin-top: 30%;">
                                <p class="fs-5 fw-bolder pt-3 text-center price2TextColor">IELTS Premium Course</p>
                            <p class="card-text">
                                <table class="table">
                                    <thead >
                                        <th class="bg-secondary text-white text-center t-head-design">Level</th>
                                        <th class="bg-secondary text-white text-center t-head-design">Duration</th>
                                        <th class="bg-secondary text-white text-center t-head-design">Offered Fees</th>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="ttddesign">B1</td>
                                            <td class="ttddesign">60%</td>
                                            <td class="ttddesign">4,799/-</td>
                                        </tr>
                                        <tr>
                                            <td class="ttddesign">B2</td>
                                            <td class="ttddesign">N/A</td>
                                            <td class="ttddesign">11,999/-</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </p>
                            <p class="text-center fw-bolder text-dark text-uppercase mb-0" style="margin-top: 20%">Total</p>
                            </div>
                        </div>
                        <div class="col color2 priceBorderRadius">
                            <p class="fs-1 text-center text-white pt-2 pb-1">16,798/-</p>
                        </div>
                    </div>
                
                    <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-4 col-xs-12 col-sm-12 mx-auto">
                        <div class="card" style="position: relative;">
                            <div class="color3 headingCircle3 text-center" style="overflow: hidden">
                                <span><i class="fa-solid fa-star text-warning mb-3"></i></span>
                                <span><i class="fa-solid fa-star text-warning mb-3"></i></span>
                                <span><i class="fa-solid fa-star text-warning mb-3"></i></span>
                                <div class="headingColor3 text-white">
                                    <p class="fs-1 fw-bolder mb-0">Privileged</p>
                                    <p class="fs-5 fw-bold"><span style="font-size: 12px">---- </span>package<span style="font-size: 12px"> ----</span></p>
                                </div>
                            </div>
                            <div class="card-body" style="margin-top: 30%;">
                                <p class="fs-5 fw-bolder pt-3 text-center price3TextColor">Applicable only for Visit Day</p>
                            <p class="card-text">
                                <table class="table">
                                    <thead >
                                        <th class="bg-secondary text-white text-center t-head-design">Level</th>
                                        <th class="bg-secondary text-white text-center t-head-design">Discount</th>
                                        <th class="bg-secondary text-white text-center t-head-design">Offerd Fees</th>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="ttddesign">B1</td>
                                            <td class="ttddesign">60%</td>
                                            <td class="ttddesign">5,199/-</td>
                                        </tr>
                                        <tr>
                                            <td class="ttddesign">B2</td>
                                            <td class="ttddesign">N/A</td>
                                            <td class="ttddesign">11,999/-</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </p>
                            <div class="row">
                                <div class="col-2 text-white" style="background-color: #FD0001">Hot</div>
                                <div class="col-10"><p class="fw-bolder text-dark text-uppercase mb-0" style="margin-left: 30%">Total</p></div>
                            </div>
                            <h2 class=" mb-0 price3TextColor fw-bolder text-center">13,999/-</h2>
                            </div>
                        </div>
                        <div class="col color3 priceBorderRadius">
                            <p class="fs-1 text-center text-white pt-2 pb-1">Save: 2799/-</p>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-xxl-12 col-xl-12 col-lg-12 col-md-12 col-xs-12 col-sm-12 mx-auto">
                        <div class="text-center mt-4">
                            <p class="fs-3 fw-bold ">British American Resource Center</p>
                        </div>
                    </div>
                    <div class="col-xxl-12 col-xl-12 col-lg-12 col-md-12 col-xs-12 col-sm-12 mx-auto">
                        <p class="text-end mb-0">*5% Vat is Applicable</p>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div> --}}

{{-- B1-B2 --}}
{{-- <div id="b1_b2_price_table">
    <div class="row">
        <div class="col-md-10 mx-auto">
            <div class="background p-5">
                <div class="row">
                    <div class="col-xxl-12 col-xl-12 col-lg-12 col-md-12 col-xs-12 col-sm-12">
                        <div class="text-center">
                            <p class="fs-1 fw-bold background-heading col-md-6 mx-auto">Course Fee Details(B1-B2)</p>
                        </div>
                    </div>
                </div>
                <div class="row ">
                    <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-4 col-xs-12 col-sm-12 mx-auto">
                        <div class="card" style="position: relative;">
                            <div class="color1 headingCircle1 text-center">
                                <span><i class="fa-solid fa-star text-white mb-3"></i></span>
                                <div class="headingColor1 text-white">
                                    <p class="fs-1 fw-bolder mb-0">Regular</p>
                                    <p class="fs-5 fw-bold text-dark"><span style="font-size: 12px">---- </span>Fees<span style="font-size: 12px"> ----</span></p>
                                </div>
                            </div>
                            <div class="card-body" style="margin-top: 30%;">
                            <p class="fs-5 fw-bolder pt-3 text-center price1TextColor">IELTS Premium Course</p>
                            <p class="card-text">
                                <table class="table">
                                    <thead >
                                        <th class="bg-secondary text-white text-center t-head-design" >Level</th>
                                        <th class="bg-secondary text-white text-center t-head-design">Discount</th>
                                        <th class="bg-secondary text-white text-center t-head-design">Fees</th>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="ttddesign">B1</td>
                                            <td class="ttddesign">1month+</td>
                                            <td class="ttddesign">11,999</td>
                                        </tr>
                                        <tr>
                                            <td class="ttddesign">B2</td>
                                            <td class="ttddesign">1month+</td>
                                            <td class="ttddesign">11,999</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </p>
                            <p class="text-center fw-bolder text-dark text-uppercase mb-0" style="margin-top: 20%">Total</p>
                            
                            </div>
                        </div>
                        <div class="col color1 priceBorderRadius">
                            <p class="fs-1 text-center text-white pt-2 pb-1">23,998/-</p>
                        </div>
                    </div>
                    <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-4 col-xs-12 col-sm-12 mx-auto">
                        <div class="card" style="position: relative;">
                            <div class="color2 headingCircle2 text-center" style="overflow: hidden">
                                <span><i class="fa-solid fa-star text-white mb-3"></i></span>
                                <span><i class="fa-solid fa-star text-white mb-3"></i></span>
                                <div class="headingColor2 text-white">
                                    <p class="fs-1 fw-bolder mb-0">Standard</p>
                                    <p class="fs-5 fw-bold text-dark"><span style="font-size: 12px">---- </span>package<span style="font-size: 12px"> ----</span></p>
                                </div>
                            </div>
                            <div class="card-body" style="margin-top: 30%;">
                                <p class="fs-5 fw-bolder pt-3 text-center price2TextColor">IELTS Premium Course</p>
                            <p class="card-text">
                                <table class="table">
                                    <thead >
                                        <th class="bg-secondary text-white text-center t-head-design">Level</th>
                                        <th class="bg-secondary text-white text-center t-head-design">Duration</th>
                                        <th class="bg-secondary text-white text-center t-head-design">Offered Fees</th>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="ttddesign">B1</td>
                                            <td class="ttddesign">60%</td>
                                            <td class="ttddesign">4,799/-</td>
                                        </tr>
                                        <tr>
                                            <td class="ttddesign">B2</td>
                                            <td class="ttddesign">N/A</td>
                                            <td class="ttddesign">11,999/-</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </p>
                            <p class="text-center fw-bolder text-dark text-uppercase mb-0" style="margin-top: 20%">Total</p>
                            </div>
                        </div>
                        <div class="col color2 priceBorderRadius">
                            <p class="fs-1 text-center text-white pt-2 pb-1">16,798/-</p>
                        </div>
                    </div>
                
                    <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-4 col-xs-12 col-sm-12 mx-auto">
                        <div class="card" style="position: relative;">
                            <div class="color3 headingCircle3 text-center" style="overflow: hidden">
                                <span><i class="fa-solid fa-star text-warning mb-3"></i></span>
                                <span><i class="fa-solid fa-star text-warning mb-3"></i></span>
                                <span><i class="fa-solid fa-star text-warning mb-3"></i></span>
                                <div class="headingColor3 text-white">
                                    <p class="fs-1 fw-bolder mb-0">Privileged</p>
                                    <p class="fs-5 fw-bold"><span style="font-size: 12px">---- </span>package<span style="font-size: 12px"> ----</span></p>
                                </div>
                            </div>
                            <div class="card-body" style="margin-top: 30%;">
                                <p class="fs-5 fw-bolder pt-3 text-center price3TextColor">Applicable only for Visit Day</p>
                            <p class="card-text">
                                <table class="table">
                                    <thead >
                                        <th class="bg-secondary text-white text-center t-head-design">Level</th>
                                        <th class="bg-secondary text-white text-center t-head-design">Discount</th>
                                        <th class="bg-secondary text-white text-center t-head-design">Offerd Fees</th>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="ttddesign">B1</td>
                                            <td class="ttddesign">60%</td>
                                            <td class="ttddesign">5,199/-</td>
                                        </tr>
                                        <tr>
                                            <td class="ttddesign">B2</td>
                                            <td class="ttddesign">N/A</td>
                                            <td class="ttddesign">11,999/-</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </p>
                            <div class="row">
                                <div class="col-2 text-white" style="background-color: #FD0001">Hot</div>
                                <div class="col-10"><p class="fw-bolder text-dark text-uppercase mb-0" style="margin-left: 30%">Total</p></div>
                            </div>
                            <h2 class=" mb-0 price3TextColor fw-bolder text-center">13,999/-</h2>
                            </div>
                        </div>
                        <div class="col color3 priceBorderRadius">
                            <p class="fs-1 text-center text-white pt-2 pb-1">Save: 2799/-</p>
                        </div>
                    </div>
                </div>
    
                <div class="row">
                    <div class="col-xxl-12 col-xl-12 col-lg-12 col-md-12 col-xs-12 col-sm-12 mx-auto">
                        <div class="text-center mt-4">
                            <p class="fs-3 fw-bold ">British American Resource Center</p>
                        </div>
                    </div>
                    <div class="col-xxl-12 col-xl-12 col-lg-12 col-md-12 col-xs-12 col-sm-12 mx-auto">
                        <p class="text-end mb-0">*5% Vat is Applicable</p>
                    </div>
                </div>
    
            </div>
        </div>
    </div>
</div> --}}

{{-- B2-C1 --}}
{{-- <div id="b2_c1_price_table">
    <div class="row">
        <div class="col-md-10 mx-auto">
            <div class="background p-5">
                <div class="row">
                    <div class="col-xxl-12 col-xl-12 col-lg-12 col-md-12 col-xs-12 col-sm-12">
                        <div class="text-center">
                            <p class="fs-1 fw-bold background-heading col-md-6 mx-auto">Course Fee Details(B2-C1)</p>
                        </div>
                    </div>
                </div>
                <div class="row ">
                    <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-4 col-xs-12 col-sm-12 mx-auto">
                        <div class="card" style="position: relative;">
                            <div class="color1 headingCircle1 text-center">
                                <span><i class="fa-solid fa-star text-white mb-3"></i></span>
                                <div class="headingColor1 text-white">
                                    <p class="fs-1 fw-bolder mb-0">Regular</p>
                                    <p class="fs-5 fw-bold text-dark"><span style="font-size: 12px">---- </span>Fees<span style="font-size: 12px"> ----</span></p>
                                </div>
                            </div>
                            <div class="card-body" style="margin-top: 30%;">
                            <p class="fs-5 fw-bolder pt-3 text-center price1TextColor">IELTS Premium Course</p>
                            <p class="card-text">
                                <table class="table">
                                    <thead >
                                        <th class="bg-secondary text-white text-center t-head-design" >Level</th>
                                        <th class="bg-secondary text-white text-center t-head-design">Discount</th>
                                        <th class="bg-secondary text-white text-center t-head-design">Fees</th>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="ttddesign">B1</td>
                                            <td class="ttddesign">1month+</td>
                                            <td class="ttddesign">11,999</td>
                                        </tr>
                                        <tr>
                                            <td class="ttddesign">B2</td>
                                            <td class="ttddesign">1month+</td>
                                            <td class="ttddesign">11,999</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </p>
                            <p class="text-center fw-bolder text-dark text-uppercase mb-0" style="margin-top: 20%">Total</p>
                            
                            </div>
                        </div>
                        <div class="col color1 priceBorderRadius">
                            <p class="fs-1 text-center text-white pt-2 pb-1">23,998/-</p>
                        </div>
                    </div>
                    <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-4 col-xs-12 col-sm-12 mx-auto">
                        <div class="card" style="position: relative;">
                            <div class="color2 headingCircle2 text-center" style="overflow: hidden">
                                <span><i class="fa-solid fa-star text-white mb-3"></i></span>
                                <span><i class="fa-solid fa-star text-white mb-3"></i></span>
                                <div class="headingColor2 text-white">
                                    <p class="fs-1 fw-bolder mb-0">Standard</p>
                                    <p class="fs-5 fw-bold text-dark"><span style="font-size: 12px">---- </span>package<span style="font-size: 12px"> ----</span></p>
                                </div>
                            </div>
                            <div class="card-body" style="margin-top: 30%;">
                                <p class="fs-5 fw-bolder pt-3 text-center price2TextColor">IELTS Premium Course</p>
                            <p class="card-text">
                                <table class="table">
                                    <thead >
                                        <th class="bg-secondary text-white text-center t-head-design">Level</th>
                                        <th class="bg-secondary text-white text-center t-head-design">Duration</th>
                                        <th class="bg-secondary text-white text-center t-head-design">Offered Fees</th>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="ttddesign">B1</td>
                                            <td class="ttddesign">60%</td>
                                            <td class="ttddesign">4,799/-</td>
                                        </tr>
                                        <tr>
                                            <td class="ttddesign">B2</td>
                                            <td class="ttddesign">N/A</td>
                                            <td class="ttddesign">11,999/-</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </p>
                            <p class="text-center fw-bolder text-dark text-uppercase mb-0" style="margin-top: 20%">Total</p>
                            </div>
                        </div>
                        <div class="col color2 priceBorderRadius">
                            <p class="fs-1 text-center text-white pt-2 pb-1">16,798/-</p>
                        </div>
                    </div>
                
                    <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-4 col-xs-12 col-sm-12 mx-auto">
                        <div class="card" style="position: relative;">
                            <div class="color3 headingCircle3 text-center" style="overflow: hidden">
                                <span><i class="fa-solid fa-star text-warning mb-3"></i></span>
                                <span><i class="fa-solid fa-star text-warning mb-3"></i></span>
                                <span><i class="fa-solid fa-star text-warning mb-3"></i></span>
                                <div class="headingColor3 text-white">
                                    <p class="fs-1 fw-bolder mb-0">Privileged</p>
                                    <p class="fs-5 fw-bold"><span style="font-size: 12px">---- </span>package<span style="font-size: 12px"> ----</span></p>
                                </div>
                            </div>
                            <div class="card-body" style="margin-top: 30%;">
                                <p class="fs-5 fw-bolder pt-3 text-center price3TextColor">Applicable only for Visit Day</p>
                            <p class="card-text">
                                <table class="table">
                                    <thead >
                                        <th class="bg-secondary text-white text-center t-head-design">Level</th>
                                        <th class="bg-secondary text-white text-center t-head-design">Discount</th>
                                        <th class="bg-secondary text-white text-center t-head-design">Offerd Fees</th>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="ttddesign">B1</td>
                                            <td class="ttddesign">60%</td>
                                            <td class="ttddesign">5,199/-</td>
                                        </tr>
                                        <tr>
                                            <td class="ttddesign">B2</td>
                                            <td class="ttddesign">N/A</td>
                                            <td class="ttddesign">11,999/-</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </p>
                            <div class="row">
                                <div class="col-2 text-white" style="background-color: #FD0001">Hot</div>
                                <div class="col-10"><p class="fw-bolder text-dark text-uppercase mb-0" style="margin-left: 30%">Total</p></div>
                            </div>
                            <h2 class=" mb-0 price3TextColor fw-bolder text-center">13,999/-</h2>
                            </div>
                        </div>
                        <div class="col color3 priceBorderRadius">
                            <p class="fs-1 text-center text-white pt-2 pb-1">Save: 2799/-</p>
                        </div>
                    </div>
                </div>
    
                <div class="row">
                    <div class="col-xxl-12 col-xl-12 col-lg-12 col-md-12 col-xs-12 col-sm-12 mx-auto">
                        <div class="text-center mt-4">
                            <p class="fs-3 fw-bold ">British American Resource Center</p>
                        </div>
                    </div>
                    <div class="col-xxl-12 col-xl-12 col-lg-12 col-md-12 col-xs-12 col-sm-12 mx-auto">
                        <p class="text-end mb-0">*5% Vat is Applicable</p>
                    </div>
                </div>
    
            </div>
        </div>
    </div>
</div> --}}

{{-- A2-B2 --}}
{{-- <div id="a2_b1_price_table">
    <div class="row">
        <div class="col-md-10 mx-auto">
            <div class="background p-5">
                <div class="row">
                    <div class="col-xxl-12 col-xl-12 col-lg-12 col-md-12 col-xs-12 col-sm-12">
                        <div class="text-center">
                            <p class="fs-1 fw-bold background-heading col-md-6 mx-auto">Course Fee Details(A2-B2)</p>
                        </div>
                    </div>
                </div>
                <div class="row ">
                    <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-4 col-xs-12 col-sm-12 mx-auto">
                        <div class="card" style="position: relative;">
                            <div class="color1 headingCircle1 text-center">
                                <span><i class="fa-solid fa-star text-white mb-3"></i></span>
                                <div class="headingColor1 text-white">
                                    <p class="fs-1 fw-bolder mb-0">Regular</p>
                                    <p class="fs-5 fw-bold text-dark"><span style="font-size: 12px">---- </span>Fees<span style="font-size: 12px"> ----</span></p>
                                </div>
                            </div>
                            <div class="card-body" style="margin-top: 30%;">
                            <p class="fs-5 fw-bolder pt-3 text-center price1TextColor">IELTS Premium Course</p>
                            <p class="card-text">
                                <table class="table">
                                    <thead >
                                        <th class="bg-secondary text-white text-center t-head-design" >Level</th>
                                        <th class="bg-secondary text-white text-center t-head-design">Discount</th>
                                        <th class="bg-secondary text-white text-center t-head-design">Fees</th>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="ttddesign">B1</td>
                                            <td class="ttddesign">1month+</td>
                                            <td class="ttddesign">11,999</td>
                                        </tr>
                                        <tr>
                                            <td class="ttddesign">B2</td>
                                            <td class="ttddesign">1month+</td>
                                            <td class="ttddesign">11,999</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </p>
                            <p class="text-center fw-bolder text-dark text-uppercase mb-0" style="margin-top: 20%">Total</p>
                            
                            </div>
                        </div>
                        <div class="col color1 priceBorderRadius">
                            <p class="fs-1 text-center text-white pt-2 pb-1">23,998/-</p>
                        </div>
                    </div>
                    <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-4 col-xs-12 col-sm-12 mx-auto">
                        <div class="card" style="position: relative;">
                            <div class="color2 headingCircle2 text-center" style="overflow: hidden">
                                <span><i class="fa-solid fa-star text-white mb-3"></i></span>
                                <span><i class="fa-solid fa-star text-white mb-3"></i></span>
                                <div class="headingColor2 text-white">
                                    <p class="fs-1 fw-bolder mb-0">Standard</p>
                                    <p class="fs-5 fw-bold text-dark"><span style="font-size: 12px">---- </span>package<span style="font-size: 12px"> ----</span></p>
                                </div>
                            </div>
                            <div class="card-body" style="margin-top: 30%;">
                                <p class="fs-5 fw-bolder pt-3 text-center price2TextColor">IELTS Premium Course</p>
                            <p class="card-text">
                                <table class="table">
                                    <thead >
                                        <th class="bg-secondary text-white text-center t-head-design">Level</th>
                                        <th class="bg-secondary text-white text-center t-head-design">Duration</th>
                                        <th class="bg-secondary text-white text-center t-head-design">Offered Fees</th>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="ttddesign">B1</td>
                                            <td class="ttddesign">60%</td>
                                            <td class="ttddesign">4,799/-</td>
                                        </tr>
                                        <tr>
                                            <td class="ttddesign">B2</td>
                                            <td class="ttddesign">N/A</td>
                                            <td class="ttddesign">11,999/-</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </p>
                            <p class="text-center fw-bolder text-dark text-uppercase mb-0" style="margin-top: 20%">Total</p>
                            </div>
                        </div>
                        <div class="col color2 priceBorderRadius">
                            <p class="fs-1 text-center text-white pt-2 pb-1">16,798/-</p>
                        </div>
                    </div>
                
                    <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-4 col-xs-12 col-sm-12 mx-auto">
                        <div class="card" style="position: relative;">
                            <div class="color3 headingCircle3 text-center" style="overflow: hidden">
                                <span><i class="fa-solid fa-star text-warning mb-3"></i></span>
                                <span><i class="fa-solid fa-star text-warning mb-3"></i></span>
                                <span><i class="fa-solid fa-star text-warning mb-3"></i></span>
                                <div class="headingColor3 text-white">
                                    <p class="fs-1 fw-bolder mb-0">Privileged</p>
                                    <p class="fs-5 fw-bold"><span style="font-size: 12px">---- </span>package<span style="font-size: 12px"> ----</span></p>
                                </div>
                            </div>
                            <div class="card-body" style="margin-top: 30%;">
                                <p class="fs-5 fw-bolder pt-3 text-center price3TextColor">Applicable only for Visit Day</p>
                            <p class="card-text">
                                <table class="table">
                                    <thead >
                                        <th class="bg-secondary text-white text-center t-head-design">Level</th>
                                        <th class="bg-secondary text-white text-center t-head-design">Discount</th>
                                        <th class="bg-secondary text-white text-center t-head-design">Offerd Fees</th>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="ttddesign">B1</td>
                                            <td class="ttddesign">60%</td>
                                            <td class="ttddesign">5,199/-</td>
                                        </tr>
                                        <tr>
                                            <td class="ttddesign">B2</td>
                                            <td class="ttddesign">N/A</td>
                                            <td class="ttddesign">11,999/-</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </p>
                            <div class="row">
                                <div class="col-2 text-white" style="background-color: #FD0001">Hot</div>
                                <div class="col-10"><p class="fw-bolder text-dark text-uppercase mb-0" style="margin-left: 30%">Total</p></div>
                            </div>
                            <h2 class=" mb-0 price3TextColor fw-bolder text-center">13,999/-</h2>
                            </div>
                        </div>
                        <div class="col color3 priceBorderRadius">
                            <p class="fs-1 text-center text-white pt-2 pb-1">Save: 2799/-</p>
                        </div>
                    </div>
                </div>
    
                <div class="row">
                    <div class="col-xxl-12 col-xl-12 col-lg-12 col-md-12 col-xs-12 col-sm-12 mx-auto">
                        <div class="text-center mt-4">
                            <p class="fs-3 fw-bold ">British American Resource Center</p>
                        </div>
                    </div>
                    <div class="col-xxl-12 col-xl-12 col-lg-12 col-md-12 col-xs-12 col-sm-12 mx-auto">
                        <p class="text-end mb-0">*5% Vat is Applicable</p>
                    </div>
                </div>
    
            </div>
        </div>
    </div>
</div> --}}

{{-- B1-C1 --}}
{{-- <div id="b1_c1_price_table">
    <div class="row">
        <div class="col-md-10 mx-auto">
            <div class="background p-5">
                <div class="row">
                    <div class="col-xxl-12 col-xl-12 col-lg-12 col-md-12 col-xs-12 col-sm-12">
                        <div class="text-center">
                            <p class="fs-1 fw-bold background-heading col-md-6 mx-auto">Course Fee Details(B1-C1)</p>
                        </div>
                    </div>
                </div>
                <div class="row ">
                    <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-4 col-xs-12 col-sm-12 mx-auto">
                        <div class="card" style="position: relative;">
                            <div class="color1 headingCircle1 text-center">
                                <span><i class="fa-solid fa-star text-white mb-3"></i></span>
                                <div class="headingColor1 text-white">
                                    <p class="fs-1 fw-bolder mb-0">Regular</p>
                                    <p class="fs-5 fw-bold text-dark"><span style="font-size: 12px">---- </span>Fees<span style="font-size: 12px"> ----</span></p>
                                </div>
                            </div>
                            <div class="card-body" style="margin-top: 30%;">
                            <p class="fs-5 fw-bolder pt-3 text-center price1TextColor">IELTS Premium Course</p>
                            <p class="card-text">
                                <table class="table">
                                    <thead >
                                        <th class="bg-secondary text-white text-center t-head-design" >Level</th>
                                        <th class="bg-secondary text-white text-center t-head-design">Discount</th>
                                        <th class="bg-secondary text-white text-center t-head-design">Fees</th>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="ttddesign">B1</td>
                                            <td class="ttddesign">1month+</td>
                                            <td class="ttddesign">11,999</td>
                                        </tr>
                                        <tr>
                                            <td class="ttddesign">B2</td>
                                            <td class="ttddesign">1month+</td>
                                            <td class="ttddesign">11,999</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </p>
                            <p class="text-center fw-bolder text-dark text-uppercase mb-0" style="margin-top: 20%">Total</p>
                            
                            </div>
                        </div>
                        <div class="col color1 priceBorderRadius">
                            <p class="fs-1 text-center text-white pt-2 pb-1">23,998/-</p>
                        </div>
                    </div>
                    <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-4 col-xs-12 col-sm-12 mx-auto">
                        <div class="card" style="position: relative;">
                            <div class="color2 headingCircle2 text-center" style="overflow: hidden">
                                <span><i class="fa-solid fa-star text-white mb-3"></i></span>
                                <span><i class="fa-solid fa-star text-white mb-3"></i></span>
                                <div class="headingColor2 text-white">
                                    <p class="fs-1 fw-bolder mb-0">Standard</p>
                                    <p class="fs-5 fw-bold text-dark"><span style="font-size: 12px">---- </span>package<span style="font-size: 12px"> ----</span></p>
                                </div>
                            </div>
                            <div class="card-body" style="margin-top: 30%;">
                                <p class="fs-5 fw-bolder pt-3 text-center price2TextColor">IELTS Premium Course</p>
                            <p class="card-text">
                                <table class="table">
                                    <thead >
                                        <th class="bg-secondary text-white text-center t-head-design">Level</th>
                                        <th class="bg-secondary text-white text-center t-head-design">Duration</th>
                                        <th class="bg-secondary text-white text-center t-head-design">Offered Fees</th>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="ttddesign">B1</td>
                                            <td class="ttddesign">60%</td>
                                            <td class="ttddesign">4,799/-</td>
                                        </tr>
                                        <tr>
                                            <td class="ttddesign">B2</td>
                                            <td class="ttddesign">N/A</td>
                                            <td class="ttddesign">11,999/-</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </p>
                            <p class="text-center fw-bolder text-dark text-uppercase mb-0" style="margin-top: 20%">Total</p>
                            </div>
                        </div>
                        <div class="col color2 priceBorderRadius">
                            <p class="fs-1 text-center text-white pt-2 pb-1">16,798/-</p>
                        </div>
                    </div>
                
                    <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-4 col-xs-12 col-sm-12 mx-auto">
                        <div class="card" style="position: relative;">
                            <div class="color3 headingCircle3 text-center" style="overflow: hidden">
                                <span><i class="fa-solid fa-star text-warning mb-3"></i></span>
                                <span><i class="fa-solid fa-star text-warning mb-3"></i></span>
                                <span><i class="fa-solid fa-star text-warning mb-3"></i></span>
                                <div class="headingColor3 text-white">
                                    <p class="fs-1 fw-bolder mb-0">Privileged</p>
                                    <p class="fs-5 fw-bold"><span style="font-size: 12px">---- </span>package<span style="font-size: 12px"> ----</span></p>
                                </div>
                            </div>
                            <div class="card-body" style="margin-top: 30%;">
                                <p class="fs-5 fw-bolder pt-3 text-center price3TextColor">Applicable only for Visit Day</p>
                            <p class="card-text">
                                <table class="table">
                                    <thead >
                                        <th class="bg-secondary text-white text-center t-head-design">Level</th>
                                        <th class="bg-secondary text-white text-center t-head-design">Discount</th>
                                        <th class="bg-secondary text-white text-center t-head-design">Offerd Fees</th>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="ttddesign">B1</td>
                                            <td class="ttddesign">60%</td>
                                            <td class="ttddesign">5,199/-</td>
                                        </tr>
                                        <tr>
                                            <td class="ttddesign">B2</td>
                                            <td class="ttddesign">N/A</td>
                                            <td class="ttddesign">11,999/-</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </p>
                            <div class="row">
                                <div class="col-2 text-white" style="background-color: #FD0001">Hot</div>
                                <div class="col-10"><p class="fw-bolder text-dark text-uppercase mb-0" style="margin-left: 30%">Total</p></div>
                            </div>
                            <h2 class=" mb-0 price3TextColor fw-bolder text-center">13,999/-</h2>
                            </div>
                        </div>
                        <div class="col color3 priceBorderRadius">
                            <p class="fs-1 text-center text-white pt-2 pb-1">Save: 2799/-</p>
                        </div>
                    </div>
                </div>
    
                <div class="row">
                    <div class="col-xxl-12 col-xl-12 col-lg-12 col-md-12 col-xs-12 col-sm-12 mx-auto">
                        <div class="text-center mt-4">
                            <p class="fs-3 fw-bold ">British American Resource Center</p>
                        </div>
                    </div>
                    <div class="col-xxl-12 col-xl-12 col-lg-12 col-md-12 col-xs-12 col-sm-12 mx-auto">
                        <p class="text-end mb-0">*5% Vat is Applicable</p>
                    </div>
                </div>
    
            </div>
        </div>
    </div>
</div> --}}

{{-- A1-B2 --}}
{{-- <div id="a1_b2_price_table">
    <div class="row">
        <div class="col-md-10 mx-auto">
            <div class="background p-5">
                <div class="row">
                    <div class="col-xxl-12 col-xl-12 col-lg-12 col-md-12 col-xs-12 col-sm-12">
                        <div class="text-center">
                            <p class="fs-1 fw-bold background-heading col-md-6 mx-auto">Course Fee Details(A1-B2)</p>
                        </div>
                    </div>
                </div>
                <div class="row ">
                    <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-4 col-xs-12 col-sm-12 mx-auto">
                        <div class="card" style="position: relative;">
                            <div class="color1 headingCircle1 text-center">
                                <span><i class="fa-solid fa-star text-white mb-3"></i></span>
                                <div class="headingColor1 text-white">
                                    <p class="fs-1 fw-bolder mb-0">Regular</p>
                                    <p class="fs-5 fw-bold text-dark"><span style="font-size: 12px">---- </span>Fees<span style="font-size: 12px"> ----</span></p>
                                </div>
                            </div>
                            <div class="card-body" style="margin-top: 30%;">
                            <p class="fs-5 fw-bolder pt-3 text-center price1TextColor">IELTS Premium Course</p>
                            <p class="card-text">
                                <table class="table">
                                    <thead >
                                        <th class="bg-secondary text-white text-center t-head-design" >Level</th>
                                        <th class="bg-secondary text-white text-center t-head-design">Discount</th>
                                        <th class="bg-secondary text-white text-center t-head-design">Fees</th>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="ttddesign">B1</td>
                                            <td class="ttddesign">1month+</td>
                                            <td class="ttddesign">11,999</td>
                                        </tr>
                                        <tr>
                                            <td class="ttddesign">B2</td>
                                            <td class="ttddesign">1month+</td>
                                            <td class="ttddesign">11,999</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </p>
                            <p class="text-center fw-bolder text-dark text-uppercase mb-0" style="margin-top: 20%">Total</p>
                            
                            </div>
                        </div>
                        <div class="col color1 priceBorderRadius">
                            <p class="fs-1 text-center text-white pt-2 pb-1">23,998/-</p>
                        </div>
                    </div>
                    <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-4 col-xs-12 col-sm-12 mx-auto">
                        <div class="card" style="position: relative;">
                            <div class="color2 headingCircle2 text-center" style="overflow: hidden">
                                <span><i class="fa-solid fa-star text-white mb-3"></i></span>
                                <span><i class="fa-solid fa-star text-white mb-3"></i></span>
                                <div class="headingColor2 text-white">
                                    <p class="fs-1 fw-bolder mb-0">Standard</p>
                                    <p class="fs-5 fw-bold text-dark"><span style="font-size: 12px">---- </span>package<span style="font-size: 12px"> ----</span></p>
                                </div>
                            </div>
                            <div class="card-body" style="margin-top: 30%;">
                                <p class="fs-5 fw-bolder pt-3 text-center price2TextColor">IELTS Premium Course</p>
                            <p class="card-text">
                                <table class="table">
                                    <thead >
                                        <th class="bg-secondary text-white text-center t-head-design">Level</th>
                                        <th class="bg-secondary text-white text-center t-head-design">Duration</th>
                                        <th class="bg-secondary text-white text-center t-head-design">Offered Fees</th>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="ttddesign">B1</td>
                                            <td class="ttddesign">60%</td>
                                            <td class="ttddesign">4,799/-</td>
                                        </tr>
                                        <tr>
                                            <td class="ttddesign">B2</td>
                                            <td class="ttddesign">N/A</td>
                                            <td class="ttddesign">11,999/-</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </p>
                            <p class="text-center fw-bolder text-dark text-uppercase mb-0" style="margin-top: 20%">Total</p>
                            </div>
                        </div>
                        <div class="col color2 priceBorderRadius">
                            <p class="fs-1 text-center text-white pt-2 pb-1">16,798/-</p>
                        </div>
                    </div>
                
                    <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-4 col-xs-12 col-sm-12 mx-auto">
                        <div class="card" style="position: relative;">
                            <div class="color3 headingCircle3 text-center" style="overflow: hidden">
                                <span><i class="fa-solid fa-star text-warning mb-3"></i></span>
                                <span><i class="fa-solid fa-star text-warning mb-3"></i></span>
                                <span><i class="fa-solid fa-star text-warning mb-3"></i></span>
                                <div class="headingColor3 text-white">
                                    <p class="fs-1 fw-bolder mb-0">Privileged</p>
                                    <p class="fs-5 fw-bold"><span style="font-size: 12px">---- </span>package<span style="font-size: 12px"> ----</span></p>
                                </div>
                            </div>
                            <div class="card-body" style="margin-top: 30%;">
                                <p class="fs-5 fw-bolder pt-3 text-center price3TextColor">Applicable only for Visit Day</p>
                            <p class="card-text">
                                <table class="table">
                                    <thead >
                                        <th class="bg-secondary text-white text-center t-head-design">Level</th>
                                        <th class="bg-secondary text-white text-center t-head-design">Discount</th>
                                        <th class="bg-secondary text-white text-center t-head-design">Offerd Fees</th>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="ttddesign">B1</td>
                                            <td class="ttddesign">60%</td>
                                            <td class="ttddesign">5,199/-</td>
                                        </tr>
                                        <tr>
                                            <td class="ttddesign">B2</td>
                                            <td class="ttddesign">N/A</td>
                                            <td class="ttddesign">11,999/-</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </p>
                            <div class="row">
                                <div class="col-2 text-white" style="background-color: #FD0001">Hot</div>
                                <div class="col-10"><p class="fw-bolder text-dark text-uppercase mb-0" style="margin-left: 30%">Total</p></div>
                            </div>
                            <h2 class=" mb-0 price3TextColor fw-bolder text-center">13,999/-</h2>
                            </div>
                        </div>
                        <div class="col color3 priceBorderRadius">
                            <p class="fs-1 text-center text-white pt-2 pb-1">Save: 2799/-</p>
                        </div>
                    </div>
                </div>
    
                <div class="row">
                    <div class="col-xxl-12 col-xl-12 col-lg-12 col-md-12 col-xs-12 col-sm-12 mx-auto">
                        <div class="text-center mt-4">
                            <p class="fs-3 fw-bold ">British American Resource Center</p>
                        </div>
                    </div>
                    <div class="col-xxl-12 col-xl-12 col-lg-12 col-md-12 col-xs-12 col-sm-12 mx-auto">
                        <p class="text-end mb-0">*5% Vat is Applicable</p>
                    </div>
                </div>
    
            </div>
        </div>
    </div>
</div> --}}

{{-- A2-C1 --}}
{{-- <div id="a2_c1_price_table">
    <div class="row">
        <div class="col-md-10 mx-auto">
            <div class="background p-5">
                <div class="row">
                    <div class="col-xxl-12 col-xl-12 col-lg-12 col-md-12 col-xs-12 col-sm-12">
                        <div class="text-center">
                            <p class="fs-1 fw-bold background-heading col-md-6 mx-auto">Course Fee Details(A2-C1)</p>
                        </div>
                    </div>
                </div>
                <div class="row ">
                    <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-4 col-xs-12 col-sm-12 mx-auto">
                        <div class="card" style="position: relative;">
                            <div class="color1 headingCircle1 text-center">
                                <span><i class="fa-solid fa-star text-white mb-3"></i></span>
                                <div class="headingColor1 text-white">
                                    <p class="fs-1 fw-bolder mb-0">Regular</p>
                                    <p class="fs-5 fw-bold text-dark"><span style="font-size: 12px">---- </span>Fees<span style="font-size: 12px"> ----</span></p>
                                </div>
                            </div>
                            <div class="card-body" style="margin-top: 30%;">
                            <p class="fs-5 fw-bolder pt-3 text-center price1TextColor">IELTS Premium Course</p>
                            <p class="card-text">
                                <table class="table">
                                    <thead >
                                        <th class="bg-secondary text-white text-center t-head-design" >Level</th>
                                        <th class="bg-secondary text-white text-center t-head-design">Discount</th>
                                        <th class="bg-secondary text-white text-center t-head-design">Fees</th>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="ttddesign">B1</td>
                                            <td class="ttddesign">1month+</td>
                                            <td class="ttddesign">11,999</td>
                                        </tr>
                                        <tr>
                                            <td class="ttddesign">B2</td>
                                            <td class="ttddesign">1month+</td>
                                            <td class="ttddesign">11,999</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </p>
                            <p class="text-center fw-bolder text-dark text-uppercase mb-0" style="margin-top: 20%">Total</p>
                            
                            </div>
                        </div>
                        <div class="col color1 priceBorderRadius">
                            <p class="fs-1 text-center text-white pt-2 pb-1">23,998/-</p>
                        </div>
                    </div>
                    <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-4 col-xs-12 col-sm-12 mx-auto">
                        <div class="card" style="position: relative;">
                            <div class="color2 headingCircle2 text-center" style="overflow: hidden">
                                <span><i class="fa-solid fa-star text-white mb-3"></i></span>
                                <span><i class="fa-solid fa-star text-white mb-3"></i></span>
                                <div class="headingColor2 text-white">
                                    <p class="fs-1 fw-bolder mb-0">Standard</p>
                                    <p class="fs-5 fw-bold text-dark"><span style="font-size: 12px">---- </span>package<span style="font-size: 12px"> ----</span></p>
                                </div>
                            </div>
                            <div class="card-body" style="margin-top: 30%;">
                                <p class="fs-5 fw-bolder pt-3 text-center price2TextColor">IELTS Premium Course</p>
                            <p class="card-text">
                                <table class="table">
                                    <thead >
                                        <th class="bg-secondary text-white text-center t-head-design">Level</th>
                                        <th class="bg-secondary text-white text-center t-head-design">Duration</th>
                                        <th class="bg-secondary text-white text-center t-head-design">Offered Fees</th>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="ttddesign">B1</td>
                                            <td class="ttddesign">60%</td>
                                            <td class="ttddesign">4,799/-</td>
                                        </tr>
                                        <tr>
                                            <td class="ttddesign">B2</td>
                                            <td class="ttddesign">N/A</td>
                                            <td class="ttddesign">11,999/-</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </p>
                            <p class="text-center fw-bolder text-dark text-uppercase mb-0" style="margin-top: 20%">Total</p>
                            </div>
                        </div>
                        <div class="col color2 priceBorderRadius">
                            <p class="fs-1 text-center text-white pt-2 pb-1">16,798/-</p>
                        </div>
                    </div>
                
                    <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-4 col-xs-12 col-sm-12 mx-auto">
                        <div class="card" style="position: relative;">
                            <div class="color3 headingCircle3 text-center" style="overflow: hidden">
                                <span><i class="fa-solid fa-star text-warning mb-3"></i></span>
                                <span><i class="fa-solid fa-star text-warning mb-3"></i></span>
                                <span><i class="fa-solid fa-star text-warning mb-3"></i></span>
                                <div class="headingColor3 text-white">
                                    <p class="fs-1 fw-bolder mb-0">Privileged</p>
                                    <p class="fs-5 fw-bold"><span style="font-size: 12px">---- </span>package<span style="font-size: 12px"> ----</span></p>
                                </div>
                            </div>
                            <div class="card-body" style="margin-top: 30%;">
                                <p class="fs-5 fw-bolder pt-3 text-center price3TextColor">Applicable only for Visit Day</p>
                            <p class="card-text">
                                <table class="table">
                                    <thead >
                                        <th class="bg-secondary text-white text-center t-head-design">Level</th>
                                        <th class="bg-secondary text-white text-center t-head-design">Discount</th>
                                        <th class="bg-secondary text-white text-center t-head-design">Offerd Fees</th>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="ttddesign">B1</td>
                                            <td class="ttddesign">60%</td>
                                            <td class="ttddesign">5,199/-</td>
                                        </tr>
                                        <tr>
                                            <td class="ttddesign">B2</td>
                                            <td class="ttddesign">N/A</td>
                                            <td class="ttddesign">11,999/-</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </p>
                            <div class="row">
                                <div class="col-2 text-white" style="background-color: #FD0001">Hot</div>
                                <div class="col-10"><p class="fw-bolder text-dark text-uppercase mb-0" style="margin-left: 30%">Total</p></div>
                            </div>
                            <h2 class=" mb-0 price3TextColor fw-bolder text-center">13,999/-</h2>
                            </div>
                        </div>
                        <div class="col color3 priceBorderRadius">
                            <p class="fs-1 text-center text-white pt-2 pb-1">Save: 2799/-</p>
                        </div>
                    </div>
                </div>
    
                <div class="row">
                    <div class="col-xxl-12 col-xl-12 col-lg-12 col-md-12 col-xs-12 col-sm-12 mx-auto">
                        <div class="text-center mt-4">
                            <p class="fs-3 fw-bold ">British American Resource Center</p>
                        </div>
                    </div>
                    <div class="col-xxl-12 col-xl-12 col-lg-12 col-md-12 col-xs-12 col-sm-12 mx-auto">
                        <p class="text-end mb-0">*5% Vat is Applicable</p>
                    </div>
                </div>
    
            </div>
        </div>
    </div>
</div> --}}

{{-- 
@foreach ($getCourseData as $item)
    
@endforeach --}}
