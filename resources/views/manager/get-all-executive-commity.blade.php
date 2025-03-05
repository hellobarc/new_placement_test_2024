@extends('manager.managerHome')
@section('manager-content')
    <div class="container">
        <div class="row justify-content-center mt-5">
            <div class="col-md-10">
                <div class="card p-3">
                    <h1 class="pb-2">Executive committee voting list </h1>
                    <table class="table table-bordered table-striped">
                        <thead>
                            <th>Sl No</th>
                            <th>Name</th>
                            <th>Number</th>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>Mousumi Mou</td>
                                <td>{{$mushumi_value}}</td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>Saida Tanjin</td>
                                <td>{{$tanjin_value}}</td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>Mahfujur Rahman</td>
                                <td>{{$mahfuj_value}}</td>
                            </tr>
                            {{-- <tr>
                                <td>3</td>
                                <td>Tanvir</td>
                                 <td>{{$tanvir_value}}</td>
                            </tr> --}}
                            <tr>
                                <td>4</td>
                                <td>Riad Mia</td>
                                 <td>{{$riad_value}}</td>
                            </tr>
                            <tr>
                                <td>5</td>
                                <td>Golam Muktadir</td>
                                 <td>{{$muktadir_value}}</td>
                            </tr>
                            <tr>
                                <td>6</td>
                                <td>Munjerin Firoz</td>
                                 <td>{{$shoma_value}}</td>
                            </tr>
                            
                            <tr>
                                <td>7</td>
                                <td>Armaan Noor</td>
                                <td>{{$arman_value}}</td>
                            </tr>
                            <tr>
                                <td>8</td>
                                <td>Minar Ahmed</td>
                                 <td>{{$minar_value}}</td>
                            </tr>
                        </tbody>
                        
                    </table>
                    {{-- <div>
                        {!! $allData->links() !!}
                    </div> --}}
                </div>
            </div>
        </div>
    </div>
@endsection

