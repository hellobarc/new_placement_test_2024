@extends('manager.managerHome')
@section('manager-content')
    <div class="container">
        <div class="row justify-content-center mt-5">
            <div class="col-md-10">
                <div class="card p-3">
                    <h1 class="pb-2">All visitor list</h1>
                    <table class="table table-bordered">
                        <thead>
                            <th>SL No</th>
                            <th>Name</th>
                            <th>Phone</th>
                            <th>Purpose of Visitor</th>
                            <th>Location</th>
                            <th>Status</th>
                            <th>Advisor</th>
                        </thead>
                        <tbody>
                            @foreach ($allData as $key=>$rows)
                                <tr>
                                    <td>{{$loop->index+1}}</td>
                                    <td>{{$rows->full_name}}</td>
                                    <td>{{$rows->mobile}}</td>
                                    <td>{{$rows->purpose_of_visit}}</td>
                                    <td>{{$rows->userInfo->location}}</td>
                                    <td>
                                        @if ($rows->followUp->admission_status)
                                            @if ($rows->followUp->admission_status == 'admitted')
                                            <span class="badge badge-success bg-success">Admitted</span>
                                            @else
                                                <span class="badge badge-warning bg-warning">Not Admitted</span>
                                            @endif
                                        @else
                                            <span class="badge badge-warning bg-warning">Status not change</span>
                                        @endif
                                    </td>
                                    <td>{{$rows->totalUser[$key]->name}}</td>
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
    </div>
@endsection

