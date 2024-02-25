@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 mx-auto">
                <ul>
                    <li class="d-inline px-3"><a href="#" id="A1-A2-btn" class="text-decoration-none coures-btn-li">A1-A2</a></li>
                    <li class="d-inline px-3"><a href="#" id="B1-B2-btn" class="text-decoration-none coures-btn-li">B1-B2</a></li>
                    <li class="d-inline px-3"><a href="#" id="B2-C1-btn" class="text-decoration-none coures-btn-li">B2-C1</a></li>
                    <li class="d-inline px-3"><a href="#" id="A2-B2-btn" class="text-decoration-none coures-btn-li">A2-B2</a></li>
                    <li class="d-inline px-3"><a href="#" id="B1-C1-btn" class="text-decoration-none coures-btn-li">B1-C1</a></li>
                    <li class="d-inline px-3"><a href="#" id="A1-B2-btn" class="text-decoration-none coures-btn-li">A1-B2</a></li>
                    <li class="d-inline px-3"><a href="#" id="A2-C1-btn" class="text-decoration-none coures-btn-li">A2-C1</a></li>
                </ul>
            </div>
        </div>
        {{-- <div class="row">
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
        </div> --}}
        
        @include('price.priceChart')

        <div class="row mt-3">
            
            <div class="col-md-10 mx-auto">
                <div class="card">
                    <div class="card-header">
                        <a href="#" class="float-end btn btn-primary" data-bs-toggle="modal" data-bs-target="#followUpModal">Add New Follow Up</a>
                    </div>
                    {{-- modal --}}
                    <!-- Button trigger modal -->
                        {{-- <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#followUpModal">
                            Launch demo modal
                        </button> --}}
                        
                        <!-- FollowUp Modal -->
                        <div class="modal fade" id="followUpModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Add Follow Up</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <form action="{{ route('store.followUP', $studentId ) }}" method="POST" class="form-control">
                                        @csrf
                                        <label for="addmission">Admission Status</label>
                                        <select name="admission_status" id="admission" class="form-control">
                                            <option selected>Select Options</option>
                                            <option value="admitted">Admitted</option>
                                            <option value="later_admit">Later Admitted</option>
                                            <option value="not_admitted">Not Admitted</option>
                                        </select>

                                        <label for="Comment" >Remark</label>
                                        <textarea name="remarks" id="comment" cols="30" rows="5" class="form-control"></textarea>

                                        <label for="">Next Follow Up Date</label>
                                        <input type="date" name="next_follow_up_date" class="form-control">
                                        <button type="submit" class="btn btn-primary float-end mt-4">Save Follow Up</button>
                                    </form>
                                </div>
                                <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                </div>
                            </div>
                            </div>
                        </div>
                    {{-- FollowUp modal end --}}
                    @include('flash-message')
                    <div class="card-body">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>Follow Up Date</th>
                                    <th>Follow Up Remarks</th>
                                    <th>Admission_Status</th>
                                    <th>Next Follow Up Date</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($getData as $data)
                                <tr>
                                    <td>{{ date('d-m-Y', strtotime($data->current_follow_up_date)) }}</td>
                                    <td>{{ $data->remarks }}</td>
                                    <td>{{ $data->admission_status}}</td>
                                    <td>{{ date('d-m-Y', strtotime($data->next_follow_up_date)) }}</td>
                                    <td>
                                        <a href="{{ route('followUPEdit.View', $data->id )}}" class="btn btn-primary">Edit</a>
                                        <a href="#" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#deleteFollowUp-{{$data->id}}">Delete</a>
                                    </td>
                                </tr>
                                    {{-- Delete Modal --}}
                                    <div class="modal fade" id="deleteFollowUp-{{$data->id}}" tabindex="-1" aria-labelledby="deleteFollowUpLabel-{{$data->id}}" aria-hidden="true">
                                        <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                            <h5 class="modal-title text-danger fw-bolder" id="deleteFollowUpLabel-{{$data->id}}">Are you sure delete!!</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <a href="{{route('followUp.Delete', $data->id)}}" class="btn btn-danger btn-lg">Permanent Delete</a>
                                            </div>
                                        </div>
                                        </div>
                                    </div>
                                @endforeach
                                
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            
        </div>
        
    </div>
@endsection

