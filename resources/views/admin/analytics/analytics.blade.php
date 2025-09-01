@extends('admin.analytics.home')

@section('admin-content')
<div class="content-wrapper">

    <!-- Page header -->
    <div class="page-header page-header-light py-2 px-3 mb-3" style="border-radius: 8px; background: #FFF; box-shadow: 0 0 6px 0 rgba(194, 193, 193, 0.30);">
        <div class="page-header-content header-elements-md-inline">
            <div class="page-title d-flex">
                <h4 class="mt-2 mb-3" style="color: #424242;"><i class="icon-arrow-left52 mr-2"></i> <span class="font-weight-semibold">All Analytics</span></h4>
                <a href="#" class="header-elements-toggle text-default d-md-none"><i class="icon-more"></i></a>
            </div>
        </div>
    </div>
    <!-- /page header -->


    <!-- Content area -->
    <div class="content">
        <div class="row">
            <div class="col-xxl-4 col-lg-4 col-md-4 col-sm-12 col-xs-12">
                <div class="bg-white px-4 py-4" style="height: 94%; border-radius:8px; box-shadow: 0 0 6px 0 rgba(194, 193, 193, 0.30);">
                    <div class="">
                        <div class="d-flex justify-content-between">
                            <h4 class="" style="font-size: 16px; color: #5E5E5E; font-weight: 400;">Total visitor</h4>
                            <div>
                                <svg xmlns="http://www.w3.org/2000/svg" width="27" height="24" viewBox="0 0 27 24" fill="none">
                                    <path d="M16.9575 19.128C17.8669 19.3757 18.8092 19.5009 19.7561 19.5C21.279 19.5021 22.7821 19.1764 24.1497 18.548C24.1902 17.6517 23.918 16.7675 23.3744 16.0293C22.8308 15.2912 22.0455 14.7394 21.1375 14.4575C20.2295 14.1757 19.2483 14.1791 18.3426 14.4674C17.4369 14.7557 16.656 15.313 16.1184 16.055M16.9575 19.128V19.125C16.9575 18.012 16.6526 16.965 16.1184 16.055M16.9575 19.128V19.234C14.9057 20.3931 12.555 21.0038 10.1597 21C7.67454 21 5.34927 20.355 3.3641 19.234L3.36304 19.125C3.36222 17.7095 3.86372 16.3339 4.78846 15.2153C5.7132 14.0966 7.0086 13.2984 8.47041 12.9466C9.93222 12.5948 11.4773 12.7093 12.8621 13.2721C14.2468 13.8349 15.3925 14.814 16.1184 16.055M13.759 6.375C13.759 7.27011 13.3799 8.12855 12.7051 8.76149C12.0303 9.39442 11.1151 9.75 10.1608 9.75C9.20648 9.75 8.29125 9.39442 7.61645 8.76149C6.94165 8.12855 6.56255 7.27011 6.56255 6.375C6.56255 5.47989 6.94165 4.62145 7.61645 3.98851C8.29125 3.35558 9.20648 3 10.1608 3C11.1151 3 12.0303 3.35558 12.7051 3.98851C13.3799 4.62145 13.759 5.47989 13.759 6.375ZM22.5548 8.625C22.5548 9.32119 22.2599 9.98887 21.7351 10.4812C21.2102 10.9734 20.4984 11.25 19.7561 11.25C19.0139 11.25 18.302 10.9734 17.7772 10.4812C17.2523 9.98887 16.9575 9.32119 16.9575 8.625C16.9575 7.92881 17.2523 7.26113 17.7772 6.76884C18.302 6.27656 19.0139 6 19.7561 6C20.4984 6 21.2102 6.27656 21.7351 6.76884C22.2599 7.26113 22.5548 7.92881 22.5548 8.625Z" stroke="#656565" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                            </div>
                        </div>
                        <h3 class="" style="color: #535353; font-size: 22px; font-weight: 500; margin: 27px 0 0 0;">{{$data->count()}}</h3>
                        {{-- <div class="mt-4 mb-2">
                            <a href="#" class="btn btn-sm btn-outline-secondary">See Details</a>
                        </div> --}}
                    </div>
                </div>
            </div>
            <div class="col-xxl-4 col-lg-4 col-md-4 col-sm-12 col-xs-12">
                <div class="bg-white px-4 py-4" style="height: 94%; border-radius:8px; box-shadow: 0 0 6px 0 rgba(194, 193, 193, 0.30);">
                    <div class="">
                        <div class="d-flex justify-content-between">
                            <h4 class="" style="font-size: 16px; color: #5E5E5E; font-weight: 400;">Exam given student</h4>
                            <div>
                                <svg xmlns="http://www.w3.org/2000/svg" width="27" height="24" viewBox="0 0 27 24" fill="none">
                                    <path d="M16.9575 19.128C17.8669 19.3757 18.8092 19.5009 19.7561 19.5C21.279 19.5021 22.7821 19.1764 24.1497 18.548C24.1902 17.6517 23.918 16.7675 23.3744 16.0293C22.8308 15.2912 22.0455 14.7394 21.1375 14.4575C20.2295 14.1757 19.2483 14.1791 18.3426 14.4674C17.4369 14.7557 16.656 15.313 16.1184 16.055M16.9575 19.128V19.125C16.9575 18.012 16.6526 16.965 16.1184 16.055M16.9575 19.128V19.234C14.9057 20.3931 12.555 21.0038 10.1597 21C7.67454 21 5.34927 20.355 3.3641 19.234L3.36304 19.125C3.36222 17.7095 3.86372 16.3339 4.78846 15.2153C5.7132 14.0966 7.0086 13.2984 8.47041 12.9466C9.93222 12.5948 11.4773 12.7093 12.8621 13.2721C14.2468 13.8349 15.3925 14.814 16.1184 16.055M13.759 6.375C13.759 7.27011 13.3799 8.12855 12.7051 8.76149C12.0303 9.39442 11.1151 9.75 10.1608 9.75C9.20648 9.75 8.29125 9.39442 7.61645 8.76149C6.94165 8.12855 6.56255 7.27011 6.56255 6.375C6.56255 5.47989 6.94165 4.62145 7.61645 3.98851C8.29125 3.35558 9.20648 3 10.1608 3C11.1151 3 12.0303 3.35558 12.7051 3.98851C13.3799 4.62145 13.759 5.47989 13.759 6.375ZM22.5548 8.625C22.5548 9.32119 22.2599 9.98887 21.7351 10.4812C21.2102 10.9734 20.4984 11.25 19.7561 11.25C19.0139 11.25 18.302 10.9734 17.7772 10.4812C17.2523 9.98887 16.9575 9.32119 16.9575 8.625C16.9575 7.92881 17.2523 7.26113 17.7772 6.76884C18.302 6.27656 19.0139 6 19.7561 6C20.4984 6 21.2102 6.27656 21.7351 6.76884C22.2599 7.26113 22.5548 7.92881 22.5548 8.625Z" stroke="#656565" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                            </div>
                        </div>
                        <h3 class="" style="color: #535353; font-size: 22px; font-weight: 500; margin: 27px 0 0 0;">{{$total_exam_given->count()}}</h3>
                        {{-- <div class="mt-4 mb-2">
                            <a href="#" class="btn btn-sm btn-outline-secondary">See Details</a>
                        </div> --}}
                    </div>
                </div>
            </div>
            <div class="col-xxl-4 col-lg-4 col-md-4 col-sm-12 col-xs-12">
                <div class="bg-white px-4 py-4" style="height: 94%; border-radius:8px; box-shadow: 0 0 6px 0 rgba(194, 193, 193, 0.30);">
                    <div class="">
                        <div class="d-flex justify-content-between">
                            <h4 class="" style="font-size: 16px; color: #5E5E5E; font-weight: 400;">Total Admitted</h4>
                            <div>
                                <svg xmlns="http://www.w3.org/2000/svg" width="27" height="24" viewBox="0 0 27 24" fill="none">
                                    <path d="M16.9575 19.128C17.8669 19.3757 18.8092 19.5009 19.7561 19.5C21.279 19.5021 22.7821 19.1764 24.1497 18.548C24.1902 17.6517 23.918 16.7675 23.3744 16.0293C22.8308 15.2912 22.0455 14.7394 21.1375 14.4575C20.2295 14.1757 19.2483 14.1791 18.3426 14.4674C17.4369 14.7557 16.656 15.313 16.1184 16.055M16.9575 19.128V19.125C16.9575 18.012 16.6526 16.965 16.1184 16.055M16.9575 19.128V19.234C14.9057 20.3931 12.555 21.0038 10.1597 21C7.67454 21 5.34927 20.355 3.3641 19.234L3.36304 19.125C3.36222 17.7095 3.86372 16.3339 4.78846 15.2153C5.7132 14.0966 7.0086 13.2984 8.47041 12.9466C9.93222 12.5948 11.4773 12.7093 12.8621 13.2721C14.2468 13.8349 15.3925 14.814 16.1184 16.055M13.759 6.375C13.759 7.27011 13.3799 8.12855 12.7051 8.76149C12.0303 9.39442 11.1151 9.75 10.1608 9.75C9.20648 9.75 8.29125 9.39442 7.61645 8.76149C6.94165 8.12855 6.56255 7.27011 6.56255 6.375C6.56255 5.47989 6.94165 4.62145 7.61645 3.98851C8.29125 3.35558 9.20648 3 10.1608 3C11.1151 3 12.0303 3.35558 12.7051 3.98851C13.3799 4.62145 13.759 5.47989 13.759 6.375ZM22.5548 8.625C22.5548 9.32119 22.2599 9.98887 21.7351 10.4812C21.2102 10.9734 20.4984 11.25 19.7561 11.25C19.0139 11.25 18.302 10.9734 17.7772 10.4812C17.2523 9.98887 16.9575 9.32119 16.9575 8.625C16.9575 7.92881 17.2523 7.26113 17.7772 6.76884C18.302 6.27656 19.0139 6 19.7561 6C20.4984 6 21.2102 6.27656 21.7351 6.76884C22.2599 7.26113 22.5548 7.92881 22.5548 8.625Z" stroke="#656565" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                            </div>
                        </div>
                        <h3 class="" style="color: #535353; font-size: 22px; font-weight: 500; margin: 27px 0 0 0;">{{$countAdmitted->count()}}/{{$countFollowUp->count()}}</h3>
                        {{-- <div class="mt-4 mb-2">
                            <a href="#" class="btn btn-sm btn-outline-secondary">See Details</a>
                        </div> --}}
                    </div>
                </div>
            </div>
        </div>
      <div class="row">
        <div class="col-xxl-4 col-lg-4 col-md-4 col-sm-12 col-xs-12">
            <div class="bg-white px-4 py-4" style="height: 94%; border-radius:8px; box-shadow: 0 0 6px 0 rgba(194, 193, 193, 0.30);">
                <div class="">
                    <div class="d-flex justify-content-between">
                        <h4 class="" style="font-size: 16px; color: #5E5E5E; font-weight: 400;">IELTS Purpose</h4>
                        <div>
                            <svg xmlns="http://www.w3.org/2000/svg" width="27" height="24" viewBox="0 0 27 24" fill="none">
                                <path d="M16.9575 19.128C17.8669 19.3757 18.8092 19.5009 19.7561 19.5C21.279 19.5021 22.7821 19.1764 24.1497 18.548C24.1902 17.6517 23.918 16.7675 23.3744 16.0293C22.8308 15.2912 22.0455 14.7394 21.1375 14.4575C20.2295 14.1757 19.2483 14.1791 18.3426 14.4674C17.4369 14.7557 16.656 15.313 16.1184 16.055M16.9575 19.128V19.125C16.9575 18.012 16.6526 16.965 16.1184 16.055M16.9575 19.128V19.234C14.9057 20.3931 12.555 21.0038 10.1597 21C7.67454 21 5.34927 20.355 3.3641 19.234L3.36304 19.125C3.36222 17.7095 3.86372 16.3339 4.78846 15.2153C5.7132 14.0966 7.0086 13.2984 8.47041 12.9466C9.93222 12.5948 11.4773 12.7093 12.8621 13.2721C14.2468 13.8349 15.3925 14.814 16.1184 16.055M13.759 6.375C13.759 7.27011 13.3799 8.12855 12.7051 8.76149C12.0303 9.39442 11.1151 9.75 10.1608 9.75C9.20648 9.75 8.29125 9.39442 7.61645 8.76149C6.94165 8.12855 6.56255 7.27011 6.56255 6.375C6.56255 5.47989 6.94165 4.62145 7.61645 3.98851C8.29125 3.35558 9.20648 3 10.1608 3C11.1151 3 12.0303 3.35558 12.7051 3.98851C13.3799 4.62145 13.759 5.47989 13.759 6.375ZM22.5548 8.625C22.5548 9.32119 22.2599 9.98887 21.7351 10.4812C21.2102 10.9734 20.4984 11.25 19.7561 11.25C19.0139 11.25 18.302 10.9734 17.7772 10.4812C17.2523 9.98887 16.9575 9.32119 16.9575 8.625C16.9575 7.92881 17.2523 7.26113 17.7772 6.76884C18.302 6.27656 19.0139 6 19.7561 6C20.4984 6 21.2102 6.27656 21.7351 6.76884C22.2599 7.26113 22.5548 7.92881 22.5548 8.625Z" stroke="#656565" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </div>
                    </div>
                    <canvas id="analyticsPurpose"></canvas>
                </div>
            </div>
        </div>
        <div class="col-xxl-4 col-lg-4 col-md-4 col-sm-12 col-xs-12">
            <div class="bg-white px-4 py-4" style="height: 94%; border-radius:8px; box-shadow: 0 0 6px 0 rgba(194, 193, 193, 0.30);">
                <div class="">
                    <div class="d-flex justify-content-between">
                        <h4 class="" style="font-size: 16px; color: #5E5E5E; font-weight: 400;">Expected Score - {{$count_expected_score}}</h4>
                        <div>
                            <svg xmlns="http://www.w3.org/2000/svg" width="27" height="24" viewBox="0 0 27 24" fill="none">
                                <path d="M16.9575 19.128C17.8669 19.3757 18.8092 19.5009 19.7561 19.5C21.279 19.5021 22.7821 19.1764 24.1497 18.548C24.1902 17.6517 23.918 16.7675 23.3744 16.0293C22.8308 15.2912 22.0455 14.7394 21.1375 14.4575C20.2295 14.1757 19.2483 14.1791 18.3426 14.4674C17.4369 14.7557 16.656 15.313 16.1184 16.055M16.9575 19.128V19.125C16.9575 18.012 16.6526 16.965 16.1184 16.055M16.9575 19.128V19.234C14.9057 20.3931 12.555 21.0038 10.1597 21C7.67454 21 5.34927 20.355 3.3641 19.234L3.36304 19.125C3.36222 17.7095 3.86372 16.3339 4.78846 15.2153C5.7132 14.0966 7.0086 13.2984 8.47041 12.9466C9.93222 12.5948 11.4773 12.7093 12.8621 13.2721C14.2468 13.8349 15.3925 14.814 16.1184 16.055M13.759 6.375C13.759 7.27011 13.3799 8.12855 12.7051 8.76149C12.0303 9.39442 11.1151 9.75 10.1608 9.75C9.20648 9.75 8.29125 9.39442 7.61645 8.76149C6.94165 8.12855 6.56255 7.27011 6.56255 6.375C6.56255 5.47989 6.94165 4.62145 7.61645 3.98851C8.29125 3.35558 9.20648 3 10.1608 3C11.1151 3 12.0303 3.35558 12.7051 3.98851C13.3799 4.62145 13.759 5.47989 13.759 6.375ZM22.5548 8.625C22.5548 9.32119 22.2599 9.98887 21.7351 10.4812C21.2102 10.9734 20.4984 11.25 19.7561 11.25C19.0139 11.25 18.302 10.9734 17.7772 10.4812C17.2523 9.98887 16.9575 9.32119 16.9575 8.625C16.9575 7.92881 17.2523 7.26113 17.7772 6.76884C18.302 6.27656 19.0139 6 19.7561 6C20.4984 6 21.2102 6.27656 21.7351 6.76884C22.2599 7.26113 22.5548 7.92881 22.5548 8.625Z" stroke="#656565" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </div>
                    </div>
                    <canvas id="analyticsExpectedScore"></canvas>
                </div>
            </div>
        </div>
        <div class="col-xxl-4 col-lg-4 col-md-4 col-sm-12 col-xs-12">
            <div class="bg-white px-4 py-4" style="height: 94%; border-radius:8px; box-shadow: 0 0 6px 0 rgba(194, 193, 193, 0.30);">
                <div class="">
                    <div class="d-flex justify-content-between">
                        <h4 class="" style="font-size: 16px; color: #5E5E5E; font-weight: 400;">Targetted Country - {{$count_country}}</h4>
                        <div>
                            <svg xmlns="http://www.w3.org/2000/svg" width="27" height="24" viewBox="0 0 27 24" fill="none">
                                <path d="M16.9575 19.128C17.8669 19.3757 18.8092 19.5009 19.7561 19.5C21.279 19.5021 22.7821 19.1764 24.1497 18.548C24.1902 17.6517 23.918 16.7675 23.3744 16.0293C22.8308 15.2912 22.0455 14.7394 21.1375 14.4575C20.2295 14.1757 19.2483 14.1791 18.3426 14.4674C17.4369 14.7557 16.656 15.313 16.1184 16.055M16.9575 19.128V19.125C16.9575 18.012 16.6526 16.965 16.1184 16.055M16.9575 19.128V19.234C14.9057 20.3931 12.555 21.0038 10.1597 21C7.67454 21 5.34927 20.355 3.3641 19.234L3.36304 19.125C3.36222 17.7095 3.86372 16.3339 4.78846 15.2153C5.7132 14.0966 7.0086 13.2984 8.47041 12.9466C9.93222 12.5948 11.4773 12.7093 12.8621 13.2721C14.2468 13.8349 15.3925 14.814 16.1184 16.055M13.759 6.375C13.759 7.27011 13.3799 8.12855 12.7051 8.76149C12.0303 9.39442 11.1151 9.75 10.1608 9.75C9.20648 9.75 8.29125 9.39442 7.61645 8.76149C6.94165 8.12855 6.56255 7.27011 6.56255 6.375C6.56255 5.47989 6.94165 4.62145 7.61645 3.98851C8.29125 3.35558 9.20648 3 10.1608 3C11.1151 3 12.0303 3.35558 12.7051 3.98851C13.3799 4.62145 13.759 5.47989 13.759 6.375ZM22.5548 8.625C22.5548 9.32119 22.2599 9.98887 21.7351 10.4812C21.2102 10.9734 20.4984 11.25 19.7561 11.25C19.0139 11.25 18.302 10.9734 17.7772 10.4812C17.2523 9.98887 16.9575 9.32119 16.9575 8.625C16.9575 7.92881 17.2523 7.26113 17.7772 6.76884C18.302 6.27656 19.0139 6 19.7561 6C20.4984 6 21.2102 6.27656 21.7351 6.76884C22.2599 7.26113 22.5548 7.92881 22.5548 8.625Z" stroke="#656565" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </div>
                    </div>
                    <canvas id="analyticsTargettedCountry"></canvas>
                </div>
            </div>
        </div>
      </div>
      <div class="row mt-2">
        <div class="col-xxl-4 col-lg-4 col-md-4 col-sm-12 col-xs-12">
            <div class="bg-white px-4 py-4" style="height: 94%; border-radius:8px; box-shadow: 0 0 6px 0 rgba(194, 193, 193, 0.30);">
                <div class="">
                    <div class="d-flex justify-content-between">
                        <h4 class="" style="font-size: 16px; color: #5E5E5E; font-weight: 400;">Know About Us - {{$count_how_to_know}}</h4>
                        <div>
                            <svg xmlns="http://www.w3.org/2000/svg" width="27" height="24" viewBox="0 0 27 24" fill="none">
                                <path d="M16.9575 19.128C17.8669 19.3757 18.8092 19.5009 19.7561 19.5C21.279 19.5021 22.7821 19.1764 24.1497 18.548C24.1902 17.6517 23.918 16.7675 23.3744 16.0293C22.8308 15.2912 22.0455 14.7394 21.1375 14.4575C20.2295 14.1757 19.2483 14.1791 18.3426 14.4674C17.4369 14.7557 16.656 15.313 16.1184 16.055M16.9575 19.128V19.125C16.9575 18.012 16.6526 16.965 16.1184 16.055M16.9575 19.128V19.234C14.9057 20.3931 12.555 21.0038 10.1597 21C7.67454 21 5.34927 20.355 3.3641 19.234L3.36304 19.125C3.36222 17.7095 3.86372 16.3339 4.78846 15.2153C5.7132 14.0966 7.0086 13.2984 8.47041 12.9466C9.93222 12.5948 11.4773 12.7093 12.8621 13.2721C14.2468 13.8349 15.3925 14.814 16.1184 16.055M13.759 6.375C13.759 7.27011 13.3799 8.12855 12.7051 8.76149C12.0303 9.39442 11.1151 9.75 10.1608 9.75C9.20648 9.75 8.29125 9.39442 7.61645 8.76149C6.94165 8.12855 6.56255 7.27011 6.56255 6.375C6.56255 5.47989 6.94165 4.62145 7.61645 3.98851C8.29125 3.35558 9.20648 3 10.1608 3C11.1151 3 12.0303 3.35558 12.7051 3.98851C13.3799 4.62145 13.759 5.47989 13.759 6.375ZM22.5548 8.625C22.5548 9.32119 22.2599 9.98887 21.7351 10.4812C21.2102 10.9734 20.4984 11.25 19.7561 11.25C19.0139 11.25 18.302 10.9734 17.7772 10.4812C17.2523 9.98887 16.9575 9.32119 16.9575 8.625C16.9575 7.92881 17.2523 7.26113 17.7772 6.76884C18.302 6.27656 19.0139 6 19.7561 6C20.4984 6 21.2102 6.27656 21.7351 6.76884C22.2599 7.26113 22.5548 7.92881 22.5548 8.625Z" stroke="#656565" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </div>
                    </div>
                    <div style="width:250px; height:250px; margin:0 auto;">
                        <canvas id="analyticsKnowAboutUS"></canvas>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xxl-4 col-lg-4 col-md-4 col-sm-12 col-xs-12">
            <div class="bg-white px-4 py-4" style="height: 94%; border-radius:8px; box-shadow: 0 0 6px 0 rgba(194, 193, 193, 0.30);">
                <div class="">
                    <div class="d-flex justify-content-between">
                        <h4 class="" style="font-size: 16px; color: #5E5E5E; font-weight: 400;">Student Address - {{$count_address_students}}</h4>
                        <div>
                            <svg xmlns="http://www.w3.org/2000/svg" width="27" height="24" viewBox="0 0 27 24" fill="none">
                                <path d="M16.9575 19.128C17.8669 19.3757 18.8092 19.5009 19.7561 19.5C21.279 19.5021 22.7821 19.1764 24.1497 18.548C24.1902 17.6517 23.918 16.7675 23.3744 16.0293C22.8308 15.2912 22.0455 14.7394 21.1375 14.4575C20.2295 14.1757 19.2483 14.1791 18.3426 14.4674C17.4369 14.7557 16.656 15.313 16.1184 16.055M16.9575 19.128V19.125C16.9575 18.012 16.6526 16.965 16.1184 16.055M16.9575 19.128V19.234C14.9057 20.3931 12.555 21.0038 10.1597 21C7.67454 21 5.34927 20.355 3.3641 19.234L3.36304 19.125C3.36222 17.7095 3.86372 16.3339 4.78846 15.2153C5.7132 14.0966 7.0086 13.2984 8.47041 12.9466C9.93222 12.5948 11.4773 12.7093 12.8621 13.2721C14.2468 13.8349 15.3925 14.814 16.1184 16.055M13.759 6.375C13.759 7.27011 13.3799 8.12855 12.7051 8.76149C12.0303 9.39442 11.1151 9.75 10.1608 9.75C9.20648 9.75 8.29125 9.39442 7.61645 8.76149C6.94165 8.12855 6.56255 7.27011 6.56255 6.375C6.56255 5.47989 6.94165 4.62145 7.61645 3.98851C8.29125 3.35558 9.20648 3 10.1608 3C11.1151 3 12.0303 3.35558 12.7051 3.98851C13.3799 4.62145 13.759 5.47989 13.759 6.375ZM22.5548 8.625C22.5548 9.32119 22.2599 9.98887 21.7351 10.4812C21.2102 10.9734 20.4984 11.25 19.7561 11.25C19.0139 11.25 18.302 10.9734 17.7772 10.4812C17.2523 9.98887 16.9575 9.32119 16.9575 8.625C16.9575 7.92881 17.2523 7.26113 17.7772 6.76884C18.302 6.27656 19.0139 6 19.7561 6C20.4984 6 21.2102 6.27656 21.7351 6.76884C22.2599 7.26113 22.5548 7.92881 22.5548 8.625Z" stroke="#656565" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </div>
                    </div>
                    <canvas id="analyticsStudentFrom"></canvas>
                </div>
            </div>
        </div>
        <div class="col-xxl-4 col-lg-4 col-md-4 col-sm-12 col-xs-12">
            <div class="bg-white px-4 py-4" style="height: 94%; border-radius:8px; box-shadow: 0 0 6px 0 rgba(194, 193, 193, 0.30);">
                <div class="">
                    <div class="d-flex justify-content-between">
                        <h4 class="" style="font-size: 16px; color: #5E5E5E; font-weight: 400;">Student Last Education - {{$count_education_students}}</h4>
                        <div>
                            <svg xmlns="http://www.w3.org/2000/svg" width="27" height="24" viewBox="0 0 27 24" fill="none">
                                <path d="M16.9575 19.128C17.8669 19.3757 18.8092 19.5009 19.7561 19.5C21.279 19.5021 22.7821 19.1764 24.1497 18.548C24.1902 17.6517 23.918 16.7675 23.3744 16.0293C22.8308 15.2912 22.0455 14.7394 21.1375 14.4575C20.2295 14.1757 19.2483 14.1791 18.3426 14.4674C17.4369 14.7557 16.656 15.313 16.1184 16.055M16.9575 19.128V19.125C16.9575 18.012 16.6526 16.965 16.1184 16.055M16.9575 19.128V19.234C14.9057 20.3931 12.555 21.0038 10.1597 21C7.67454 21 5.34927 20.355 3.3641 19.234L3.36304 19.125C3.36222 17.7095 3.86372 16.3339 4.78846 15.2153C5.7132 14.0966 7.0086 13.2984 8.47041 12.9466C9.93222 12.5948 11.4773 12.7093 12.8621 13.2721C14.2468 13.8349 15.3925 14.814 16.1184 16.055M13.759 6.375C13.759 7.27011 13.3799 8.12855 12.7051 8.76149C12.0303 9.39442 11.1151 9.75 10.1608 9.75C9.20648 9.75 8.29125 9.39442 7.61645 8.76149C6.94165 8.12855 6.56255 7.27011 6.56255 6.375C6.56255 5.47989 6.94165 4.62145 7.61645 3.98851C8.29125 3.35558 9.20648 3 10.1608 3C11.1151 3 12.0303 3.35558 12.7051 3.98851C13.3799 4.62145 13.759 5.47989 13.759 6.375ZM22.5548 8.625C22.5548 9.32119 22.2599 9.98887 21.7351 10.4812C21.2102 10.9734 20.4984 11.25 19.7561 11.25C19.0139 11.25 18.302 10.9734 17.7772 10.4812C17.2523 9.98887 16.9575 9.32119 16.9575 8.625C16.9575 7.92881 17.2523 7.26113 17.7772 6.76884C18.302 6.27656 19.0139 6 19.7561 6C20.4984 6 21.2102 6.27656 21.7351 6.76884C22.2599 7.26113 22.5548 7.92881 22.5548 8.625Z" stroke="#656565" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </div>
                    </div>
                    <canvas id="analyticsStudentEducation"></canvas>
                </div>
            </div>
        </div>
      </div>
      <div class="row mt-2">
        <div class="col-xxl-4 col-lg-4 col-md-4 col-sm-12 col-xs-12">
            <div class="bg-white px-4 py-4" style="height: 94%; border-radius:8px; box-shadow: 0 0 6px 0 rgba(194, 193, 193, 0.30);">
                <div class="">
                    <div class="d-flex justify-content-between">
                        <h4 class="" style="font-size: 16px; color: #5E5E5E; font-weight: 400;">Occupation</h4>
                        <div>
                            <svg xmlns="http://www.w3.org/2000/svg" width="27" height="24" viewBox="0 0 27 24" fill="none">
                                <path d="M16.9575 19.128C17.8669 19.3757 18.8092 19.5009 19.7561 19.5C21.279 19.5021 22.7821 19.1764 24.1497 18.548C24.1902 17.6517 23.918 16.7675 23.3744 16.0293C22.8308 15.2912 22.0455 14.7394 21.1375 14.4575C20.2295 14.1757 19.2483 14.1791 18.3426 14.4674C17.4369 14.7557 16.656 15.313 16.1184 16.055M16.9575 19.128V19.125C16.9575 18.012 16.6526 16.965 16.1184 16.055M16.9575 19.128V19.234C14.9057 20.3931 12.555 21.0038 10.1597 21C7.67454 21 5.34927 20.355 3.3641 19.234L3.36304 19.125C3.36222 17.7095 3.86372 16.3339 4.78846 15.2153C5.7132 14.0966 7.0086 13.2984 8.47041 12.9466C9.93222 12.5948 11.4773 12.7093 12.8621 13.2721C14.2468 13.8349 15.3925 14.814 16.1184 16.055M13.759 6.375C13.759 7.27011 13.3799 8.12855 12.7051 8.76149C12.0303 9.39442 11.1151 9.75 10.1608 9.75C9.20648 9.75 8.29125 9.39442 7.61645 8.76149C6.94165 8.12855 6.56255 7.27011 6.56255 6.375C6.56255 5.47989 6.94165 4.62145 7.61645 3.98851C8.29125 3.35558 9.20648 3 10.1608 3C11.1151 3 12.0303 3.35558 12.7051 3.98851C13.3799 4.62145 13.759 5.47989 13.759 6.375ZM22.5548 8.625C22.5548 9.32119 22.2599 9.98887 21.7351 10.4812C21.2102 10.9734 20.4984 11.25 19.7561 11.25C19.0139 11.25 18.302 10.9734 17.7772 10.4812C17.2523 9.98887 16.9575 9.32119 16.9575 8.625C16.9575 7.92881 17.2523 7.26113 17.7772 6.76884C18.302 6.27656 19.0139 6 19.7561 6C20.4984 6 21.2102 6.27656 21.7351 6.76884C22.2599 7.26113 22.5548 7.92881 22.5548 8.625Z" stroke="#656565" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </div>
                    </div>
                    <div style="width:250px; height:250px; margin:0 auto;">
                        <canvas id="analyticsStudentOccupation"></canvas>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xxl-8 col-lg-8 col-md-8 col-sm-12 col-xs-12">
            <div class="bg-white px-4 py-4" style="height: 94%; border-radius:8px; box-shadow: 0 0 6px 0 rgba(194, 193, 193, 0.30);">
                <div class="">
                    <div class="d-flex justify-content-between">
                        <h4 class="" style="font-size: 16px; color: #5E5E5E; font-weight: 400;">Student Address</h4>
                        <div>
                            <svg xmlns="http://www.w3.org/2000/svg" width="27" height="24" viewBox="0 0 27 24" fill="none">
                                <path d="M16.9575 19.128C17.8669 19.3757 18.8092 19.5009 19.7561 19.5C21.279 19.5021 22.7821 19.1764 24.1497 18.548C24.1902 17.6517 23.918 16.7675 23.3744 16.0293C22.8308 15.2912 22.0455 14.7394 21.1375 14.4575C20.2295 14.1757 19.2483 14.1791 18.3426 14.4674C17.4369 14.7557 16.656 15.313 16.1184 16.055M16.9575 19.128V19.125C16.9575 18.012 16.6526 16.965 16.1184 16.055M16.9575 19.128V19.234C14.9057 20.3931 12.555 21.0038 10.1597 21C7.67454 21 5.34927 20.355 3.3641 19.234L3.36304 19.125C3.36222 17.7095 3.86372 16.3339 4.78846 15.2153C5.7132 14.0966 7.0086 13.2984 8.47041 12.9466C9.93222 12.5948 11.4773 12.7093 12.8621 13.2721C14.2468 13.8349 15.3925 14.814 16.1184 16.055M13.759 6.375C13.759 7.27011 13.3799 8.12855 12.7051 8.76149C12.0303 9.39442 11.1151 9.75 10.1608 9.75C9.20648 9.75 8.29125 9.39442 7.61645 8.76149C6.94165 8.12855 6.56255 7.27011 6.56255 6.375C6.56255 5.47989 6.94165 4.62145 7.61645 3.98851C8.29125 3.35558 9.20648 3 10.1608 3C11.1151 3 12.0303 3.35558 12.7051 3.98851C13.3799 4.62145 13.759 5.47989 13.759 6.375ZM22.5548 8.625C22.5548 9.32119 22.2599 9.98887 21.7351 10.4812C21.2102 10.9734 20.4984 11.25 19.7561 11.25C19.0139 11.25 18.302 10.9734 17.7772 10.4812C17.2523 9.98887 16.9575 9.32119 16.9575 8.625C16.9575 7.92881 17.2523 7.26113 17.7772 6.76884C18.302 6.27656 19.0139 6 19.7561 6C20.4984 6 21.2102 6.27656 21.7351 6.76884C22.2599 7.26113 22.5548 7.92881 22.5548 8.625Z" stroke="#656565" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xxl-4 col-lg-4 col-md-4 col-sm-12 col-xs-12">
                            <div class="form-group mt-3">
                                <label for="address">Division<span class="text-danger fw-bold">*</span></label>
                                <select id="division" type="division" class="@error('division') is-invalid @enderror" name="division" value="{{ old('division') }}" placeholder="আপনার বর্তমান এডেন্স" autocomplete="division" onchange="divisionSelected()" style="width: 100%;padding: 10px; border: 1px solid #828282; border-radius:4px;">
                                    <option value="">বিভাগ নির্বাচন করুন</option>
                                    @foreach ($allDivisions as $item)
                                        <option value="{{$item->name}}" >{{ $item->bn_name}} </option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group mt-3">
                                <label for="address">District<span class="text-danger fw-bold">*</span></label>
                                <select id="district" type="district" class="@error('district') is-invalid @enderror" name="district" value="{{ old('district') }}" placeholder="আপনার বর্তমান এডেন্স" autocomplete="district" onchange="districtSelected()" style="width: 100%;padding: 10px; border: 1px solid #828282; border-radius:4px;">
                                    <option value="">জেলা নির্বাচন করুন</option>
                                </select>
                            </div>
                            <div class="form-group mt-3">
                                <label for="address">Upazilla<span class="text-danger fw-bold">*</span></label>
                                <select id="upazilla" type="upazilla" class="@error('upazilla') is-invalid @enderror" name="upazilla" value="{{ old('upazilla') }}" placeholder="আপনার বর্তমান এডেন্স" autocomplete="upazilla" onchange="upazillaSelected()" style="width: 100%;padding: 10px; border: 1px solid #828282; border-radius:4px;">
                                    <option value="">উপজেলা নির্বাচন করুন</option>
                                </select>
                            </div>
                            <div id="upazilla_selected">
                                <div class="form-group mt-3">
                                    <label for="address">Thana<span class="text-danger fw-bold">*</span></label>
                                    <select id="thana" type="thana" class="@error('thana') is-invalid @enderror" name="thana" value="{{ old('thana') }}" placeholder="আপনার বর্তমান এডেন্স"  autocomplete="thana" onchange="thanaSelected()" style="width: 100%;padding: 10px; border: 1px solid #828282; border-radius:4px;">
                                        <option value="">থানা নির্বাচন করুন</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-xxl-8 col-lg-8 col-md-8 col-sm-12 col-xs-12">
                            <h5>Total Student - <span id="addressStudent"></span></h5>
                            <table class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>Sl No</th>
                                        <th>Full Name</th>
                                        <th>Mobile</th>
                                    </tr>
                                </thead>
                                <tbody id="listAddressStudent">
                                    <!-- rows will be inserted here -->
                                </tbody>
                            </table>

                        </div>
                    </div>
                </div>
            </div>
        </div>
      </div>

        <!-- /dashboard content -->

    </div>
    <!-- /content area -->


    <!-- Footer -->
    {{-- @include('backend.partials.footer') --}}
    <!-- /footer -->

</div>
<script>
  const ctx = document.getElementById('analyticsExpectedScore');
    let  ex_score_7 = "{{$ex_score_7}}"
    let  ex_score_6_more = "{{$ex_score_6_5}}"
    let  ex_score_7_more = "{{$ex_score_7_more}}"
    let  ex_score_8 = "{{$ex_score_8}}"
    let  ex_score_8_more = "{{$ex_score_8_more}}"
    let  ex_score_9 = "{{$ex_score_9}}"
    let  ex_score_6 = "{{$ex_score_6}}"
    let  ex_score_5_more = "{{$ex_score_5_more}}"
  new Chart(ctx, {
    type: 'line',
    data: {
      labels: ['5.5','6','6.5','7','7.5', '8','8.5','9'],
      datasets: [
        {
        label: false,
        data: [ex_score_5_more,ex_score_6,ex_score_6_more,ex_score_7,ex_score_7_more,ex_score_8,ex_score_8_more,ex_score_9],
        backgroundColor: [
        '#131200',
        '#FF57BB',
        '#184164',
        '#7B7554',
        '#A11692',
        '#00AF54',
        '#BF4E30',
        '#21A0A0',
        ],
        borderWidth: 1
      },
    ]
    },
    options: {
      scales: {
        y: {
          beginAtZero: true
        }
      }
    }
  });
</script>
<!-- targetted Country -->
<script>
  const expected_country = document.getElementById('analyticsTargettedCountry');
    let  ter_usa = "{{$ex_coun_usa}}"
    let  ter_uk = "{{$ex_coun_uk}}"
    let  ter_canada = "{{$ex_coun_canada}}"
    let  ter_austraila = "{{$ex_coun_australia}}"
    let  ter_europe = "{{$ex_coun_europe}}"
    let  ter_other = "{{$ex_coun_others}}"

  new Chart(expected_country, {
    type: 'bar',
    data: {
      labels: ['USA','UK','Canada','Australia','Europe', 'Others'],
      datasets: [
        {
        label: false,
        data: [ter_usa,ter_uk,ter_canada,ter_austraila,ter_europe,ter_other],
        backgroundColor: [
        '#131200',
        '#FF57BB',
        '#184164',
        '#7B7554',
        '#A11692',
        '#00AF54',
        ],
        borderWidth: 1
      },
    ]
    },
    options: {
      scales: {
        y: {
          beginAtZero: true
        }
      }
    }
  });
</script>
<!-- purpose -->
<script>
  const ielts_purpose = document.getElementById('analyticsPurpose');
    let  ac_purpose = "{{$ac_purpose}}"
    let  gt_purpose = "{{$gt_purpose}}"
    let  ge_purpose = "{{$ge_purpose}}"

  new Chart(ielts_purpose, {
    type: 'bar',
    data: {
      labels: ['Academic','General Training', 'General English'],
      datasets: [
        {
        label: false,
        data: [ac_purpose,gt_purpose,ge_purpose],
        backgroundColor: [
        '#A11692',
        '#00AF54',
        '#01Aae4',
        ],
        borderWidth: 1
      },
    ]
    },
    options: {
      scales: {
        y: {
          beginAtZero: true
        }
      }
    }
  });
</script>
<!-- know about us -->
<script>
  const know_about_us = document.getElementById('analyticsKnowAboutUS');
    let  know_facebook = "{{$know_facebook}}"
    let  know_website = "{{$know_website}}"
    let  know_billboard = "{{$know_billboard}}"
    let  know_google_map = "{{$know_google_map}}"
    let  know_student_reference = "{{$know_student_reference}}"
    let  know_youtube = "{{$know_youtube}}"
    let  know_others = "{{$know_others}}"

    new Chart(know_about_us, {
        type: 'pie',
        data: {
        labels: ['Facebook','Website','Billboard','Google Map','Student Reference','YouTube','Others'],
        datasets: [{
            data: [{{$know_facebook}}, {{$know_website}}, {{$know_billboard}}, {{$know_google_map}}, {{$know_student_reference}}, {{$know_youtube}}, {{$know_others}}],
            backgroundColor: ['#131200','#FF57BB','#184164','#7B7554','#A11692','#00AF54','#BF4E30'],
            borderWidth: 1
        }]
        },
        options: {
        responsive: true,
        maintainAspectRatio: false,
        plugins: {
            legend: {
            position: 'right', // ✅ legend on right
            labels: {
                usePointStyle: true,
                padding: 20
            }
            }
        }
        }
    });

</script>
<!-- student from -->
<script>
  const student_from = document.getElementById('analyticsStudentFrom');
    let  address_uttara = "{{$address_uttara}}"
    let  address_mirpur = "{{$address_mirpur}}"
    let  address_gazipur = "{{$address_gazipur}}"
    let  address_joydevpur = "{{$address_joydevpur}}"
    let  address_tongi = "{{$address_tongi}}"
    let  address_khilkhet = "{{$address_khilkhet}}"
    let  address_badda = "{{$address_badda}}"
    let  address_gulshan = "{{$address_gulshan}}"
    let  address_dhanmondi = "{{$address_dhanmondi}}"
    let  address_narsingdi = "{{$address_narsingdi}}"
    let  address_demra = "{{$address_demra}}"
    let  address_tangail = "{{$address_tangail}}"
    let  address_savar = "{{$address_savar}}"
    let  address_other = "{{$address_other}}"

  new Chart(student_from, {
    type: 'line',
    data: {
      labels: ['Uttara','Mirpur','Gazipur','Joydevpur','Tongi', 'Khilkhet','Badda','Gulshan','Dhanmondi','Narsingdi','Demra','Tangail','Savar','Other'],
      datasets: [
        {
        label: false,
        data: [address_uttara,address_mirpur,address_gazipur,address_joydevpur,address_tongi,address_khilkhet,
        address_badda,address_gulshan,address_dhanmondi,address_narsingdi,address_demra,address_tangail,address_savar,address_other],
        backgroundColor: [
        '#131200',
        '#FF57BB',
        '#184164',
        '#7B7554',
        '#A11692',
        '#00AF54',
        '#BF4E30',
        '#7B7554',
        '#7B7554',
        '#7B7554',
        '#7B7554',
        '#7B7554',
        '#7B7554',
        '#7B7554',
        ],
        borderWidth: 1
      },
    ]
    },
    options: {
      scales: {
        y: {
          beginAtZero: true
        }
      }
    }
  });
</script>
<!-- occupation -->
<script>
  const occupation = document.getElementById('analyticsStudentOccupation');
    let  occupation_govt = "{{$occupation_govt}}"
    let  occupation_private = "{{$occupation_private}}"
    let  occupation_business = "{{$occupation_business}}"
    let  occupation_doctor = "{{$occupation_doctor}}"
    let  occupation_engineer = "{{$occupation_engineer}}"
    let  occupation_teacher = "{{$occupation_teacher}}"
    let  occupation_uni_stu = "{{$occupation_uni_stu}}"
    let  occupation_hsc_student = "{{$occupation_hsc_student}}"
    let  occupation_house_wife = "{{$occupation_house_wife}}"
    let  occupation_others = "{{$occupation_others}}"

  new Chart(occupation, {
    type: 'pie',
    data: {
      labels: ['Govt. Service','Private Service','Business','Doctor','Engineer', 'Teacher','University Student','HSC Student','House Wife','Others'],
      datasets: [
        {
        label: false,
        data: [occupation_govt,occupation_private,occupation_business,occupation_doctor,occupation_engineer,occupation_teacher,
        occupation_uni_stu,occupation_hsc_student,occupation_house_wife,occupation_others],
        backgroundColor: [
        '#131200',
        '#FF57BB',
        '#184164',
        '#7B7554',
        '#A11692',
        '#00AF54',
        '#BF4E30',
        '#FFC4EB',
        '#7A9CC6',
        '#C1DF1F',
        ],
        borderWidth: 1
      },
    ]
    },
    options: {
      responsive: true,
      maintainAspectRatio: false,
      plugins: {
        legend: {
          position: 'right', // ✅ legend on right
          labels: {
            usePointStyle: true,
            padding: 20
          }
        }
      }
    }
  });
</script>
<!-- student last education -->
<script>
  const education = document.getElementById('analyticsStudentEducation');
    let  education_ssc = "{{$education_ssc}}"
    let  education_ged = "{{$education_ged}}"
    let  education_hsc = "{{$education_hsc}}"
    let  education_vocational = "{{$education_vocational}}"
    let  education_graduate = "{{$education_graduate}}"
    let  education_post_grad = "{{$education_post_grad}}"
    let  education_doctorate = "{{$education_doctorate}}"

  new Chart(education, {
    type: 'bar',
    data: {
      labels: ['SSC','GED','HSC','Vocational','Graduate', 'Post Graduate','Doctorate or Higher'],
      datasets: [
        {
        label: false,
        data: [education_ssc,education_ged,education_hsc,education_vocational,education_graduate,education_post_grad,education_doctorate],
        backgroundColor: [
        '#131200',
        '#FF57BB',
        '#184164',
        '#7B7554',
        '#A11692',
        '#00AF54',
        '#BF4E30',
        ],
        borderWidth: 1
      },
    ]
    },
    options: {
      scales: {
        y: {
          beginAtZero: true
        }
      }
    }
  });
</script>
<script>
     window.onload = function(){
        document.getElementById('upazilla_selected').style.display = "none";
    }
    var allMetroSadars = "{{ $allMetropolitanThanas }}";
    allMetroSadars = JSON.parse(allMetroSadars.replace(/&quot;/g, '"'));
    async function divisionSelected(){
        let division = document.getElementById('division').value;
        // console.log(division);

        let resData = await axios.post('/admin/get-district-data',{
            params : {
                divisionName : division
            }
        });
        //console.log(resData.data.districts);
        document.getElementById('district').innerHTML = ``;
        document.getElementById('district').insertAdjacentHTML('beforeend', `<option value="">জেলা নির্বাচন করুন</option>`);
        resData.data.districts.forEach(element => {
            // console.log(element.name);
            document.getElementById('district').insertAdjacentHTML('beforeend', `<option value="${element.name}">${element.bn_name}</option>`);
        });
    }
    async function districtSelected(){
        let district = document.getElementById('district').value;
        // console.log(district);

        let resData = await axios.post('/admin/get-upazilla-data',{
            params : {
                districtName : district
            }
        });

        // console.log(resData.data.upazillas);
        document.getElementById('upazilla').innerHTML = ``;
        document.getElementById('upazilla').insertAdjacentHTML('beforeend', `<option value="">উপজেলা নির্বাচন করুন</option>`);
        resData.data.upazillas.forEach(element => {
            // console.log(element.name);
            document.getElementById('upazilla').insertAdjacentHTML('beforeend', `<option value="${element.name}">${element.bn_name}</option>`);
        });
    }
    async function upazillaSelected(){
        let upazilla = document.getElementById('upazilla').value;
        let thanasArr = await getThanas(upazilla);   // wait for response
        if(thanasArr.length == 0){
            getDataFromUpzila(upazilla);
            document.getElementById('upazilla_selected').style.display = 'none';
        }else{
            document.getElementById('upazilla_selected').style.display = 'block';
            document.getElementById('thana').innerHTML = ``;
            document.getElementById('thana').insertAdjacentHTML('beforeend', `<option value="">থানা নির্বাচন করুন</option>`);
            thanasArr.forEach(element => {
                document.getElementById('thana').insertAdjacentHTML('beforeend', `<option value="${element.name}">${element.bn_name}</option>`)
            });
            // allMetroSadars.forEach(element => {
            //     if(element.upazilla.name == upazilla){
            //         getThanas(upazilla);
            //     }
            //     else{
            //         document.getElementById('upazilla_selected').style.display = 'none';
            //     }
            // });
        }
    }

    async function getThanas(upazilla){
        let thanaData = await axios.post('/admin/get-thana-data', {
            params: {
                upazillaName: upazilla
            }
        });

        return thanaData.data.thanas;
    }

    async function getDataFromUpzila(upazilla){
        let upazillaData = await axios.post('/admin/upzilla-data-student-address',{
                params : {
                    upazillaName : upazilla
                }
            });
        document.getElementById('addressStudent').innerHTML = ``;
        document.getElementById('addressStudent').insertAdjacentHTML('beforeend', `${upazillaData.data.number}`);
        document.getElementById('listAddressStudent').innerHTML = ``;
        //console.log(upazillaData.data.student_list);thanaSelected
        upazillaData.data.student_list.forEach((element, index) => {
        document.getElementById('listAddressStudent').insertAdjacentHTML('beforeend', `
                <tr>
                    <td>${index+1}</td>
                    <td>${element.student_info.full_name}</td>
                    <td>${element.student_info.mobile}</td>
                </tr>
            `);
        });
    }
        async function thanaSelected(upazilla){
            let thana = document.getElementById('thana').value;
            let thanaData = await axios.post('/admin/thana-data-student-address',{
                    params : {
                        thanaName : thana
                    }
                });
            document.getElementById('addressStudent').innerHTML = ``;
            document.getElementById('addressStudent').insertAdjacentHTML('beforeend', `${thanaData.data.number}`);
            document.getElementById('listAddressStudent').innerHTML = ``;
            //console.log(upazillaData.data.student_list);
            thanaData.data.student_list.forEach((element, index) => {
                document.getElementById('listAddressStudent').insertAdjacentHTML('beforeend', `
                    <tr>
                        <td>${index+1}</td>
                        <td>${element.student_info.full_name}</td>
                        <td>${element.student_info.mobile}</td>
                    </tr>
                `);
            });
        }
</script>
@endsection
