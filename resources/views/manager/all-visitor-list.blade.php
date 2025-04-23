@extends('manager.managerHome')
@section('manager-content')
    <section style="background: #F8F8F8;">
        <div class="row justify-content-center">
            <div class="col-xxl-12 col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card-background p-3">
                    <h1 class="pb-2 text-center">All visitor list</h1>
                    <div class="d-flex justify-content-end mb-3">
                        <form action="{{route('manager.visitor.search')}}" method="GET">
                            @csrf
                            <div class="">
                                <div class="d-flex justify-content-between" style="border: 1px solid #000;border-radius: 4px;"> 
                                    <input type="text" name="search" class="px-2 py-2" style="border: none;" placeholder="Search phone or email number" required>
                                    <button type="submit" class="btn btn-dark py-2 px-4 rounded-0"><i class="fa-solid fa-magnifying-glass"></i></button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <table class="table table-bordered">
                        <thead>
                            <th>SL No</th>
                            <th>Name</th>
                            <th>Phone</th>
                            <th>Purpose of Visitor</th>
                            <th>Location</th>
                            <th>Status</th>
                            <th>Visit Day</th>
                            <th>Advisor</th>
                            <th>Action</th>
                        </thead>
                        <tbody>
                            @foreach ($allData as $key=>$rows)
                                <tr>
                                    <td>{{$loop->index+1}}</td>
                                    <td>{{$rows->full_name}}</td>
                                    <td>{{$rows->mobile}}</td>
                                    <td>{{$rows->purpose_of_visit}}</td>
                                    <td>
                                        {!! $rows->userInfo->location == null 
                                            ? '<span class="badge badge-warning bg-warning text-dark">Location not given</span>' 
                                            : e($rows->userInfo->location) 
                                        !!}
                                    </td>
                                    <td>
                                        @if($rows->followUp)
                                            @if ($rows->followUp->admission_status)
                                                @if ($rows->followUp->admission_status == 'admitted')
                                                <span class="badge badge-success bg-success">Admitted</span>
                                                @else
                                                    <span class="badge badge-warning bg-warning text-dark">Not Admitted</span>
                                                @endif
                                            @else
                                                <span class="badge badge-warning bg-warning text-dark">Status not change</span>
                                            @endif
                                        @else
                                            <span class="badge badge-warning bg-warning text-dark">Status not change</span>
                                        @endif
                                    </td>
                                    <td>{{$rows->created_at->format('d-m-Y')}}</td>
                                    <td>{{$rows->totalUser->name}}</td>
                                    <td>
                                        @if ($rows->purpose_of_visit =='course'||$rows->purpose_of_visit == 'ielts_courses'|| $rows->purpose_of_visit =='basic_english'||$rows->purpose_of_visit =='spoken'||$rows->purpose_of_visit =='others'||$rows->purpose_of_visit =='online_courses')
                                            @if (Helper::examCompleted($rows->id, $rows->assign_advisor)==NULL)
                                                {{-- <a href="{{route('student.exam.set', ['student_id'=>$rows->id])}}" ><button class="start-test-btn">Start Now</button></a> --}}
                                                <span class="bg-badge bg-warning">Test does not completed</span>
                                            @else
                                                <a href="{{ route('manager-get.student.exam.result' , ['student_id'=>$rows->id] ) }}"><button class="btn py-1 text-white" style="background-color: #035388">Result</button></a>
                                            @endif
                                        @endif
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <div>
                        {!! $allData->links() !!}
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

