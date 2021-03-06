@extends('layouts.dashboard')

@section('content')
    <div class="page-content">

        <div class="d-flex justify-content-between align-items-center flex-wrap grid-margin">
            <div>
                <h4 class="mb-3 mb-md-0">Welcome to Dashboard</h4>
            </div>
            <div class="d-flex align-items-center flex-wrap text-nowrap">
                <div class="input-group date datepicker dashboard-date mr-2 mb-2 mb-md-0 d-md-none d-xl-flex"
                    id="dashboardDate">
                    <span class="input-group-addon bg-transparent"><svg xmlns="http://www.w3.org/2000/svg" width="24"
                            height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                            stroke-linecap="round" stroke-linejoin="round" class="feather feather-calendar  text-primary">
                            <rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect>
                            <line x1="16" y1="2" x2="16" y2="6"></line>
                            <line x1="8" y1="2" x2="8" y2="6"></line>
                            <line x1="3" y1="10" x2="21" y2="10"></line>
                        </svg></span>
                    <input type="text" class="form-control">
                </div>
                <button type="button" class="btn btn-outline-info btn-icon-text mr-2 d-none d-md-block">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                        stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                        class="feather feather-download btn-icon-prepend">
                        <path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"></path>
                        <polyline points="7 10 12 15 17 10"></polyline>
                        <line x1="12" y1="15" x2="12" y2="3"></line>
                    </svg>
                    Import
                </button>
                <button type="button" class="btn btn-outline-primary btn-icon-text mr-2 mb-2 mb-md-0">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                        stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                        class="feather feather-printer btn-icon-prepend">
                        <polyline points="6 9 6 2 18 2 18 9"></polyline>
                        <path d="M6 18H4a2 2 0 0 1-2-2v-5a2 2 0 0 1 2-2h16a2 2 0 0 1 2 2v5a2 2 0 0 1-2 2h-2"></path>
                        <rect x="6" y="14" width="12" height="8"></rect>
                    </svg>
                    Print
                </button>
                <button type="button" class="btn btn-primary btn-icon-text mb-2 mb-md-0">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                        stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                        class="feather feather-download-cloud btn-icon-prepend">
                        <polyline points="8 17 12 21 16 17"></polyline>
                        <line x1="12" y1="12" x2="12" y2="21"></line>
                        <path d="M20.88 18.09A5 5 0 0 0 18 9h-1.26A8 8 0 1 0 3 16.29"></path>
                    </svg>
                    Download Report
                </button>
            </div>
        </div>

        <div class="row">
            <div class="col-12 col-xl-12 stretch-card">
                <div class="row flex-grow">
                    <div class="col-md-4 grid-margin stretch-card">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex justify-content-between align-items-baseline">
                                    <h6 class="card-title mb-0">New Customers</h6>
                                    <div class="dropdown mb-2">
                                        <button class="btn p-0" type="button" id="dropdownMenuButton" data-toggle="dropdown"
                                            aria-haspopup="true" aria-expanded="false">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                stroke-linecap="round" stroke-linejoin="round"
                                                class="feather feather-more-horizontal icon-lg text-muted pb-3px">
                                                <circle cx="12" cy="12" r="1"></circle>
                                                <circle cx="19" cy="12" r="1"></circle>
                                                <circle cx="5" cy="12" r="1"></circle>
                                            </svg>
                                        </button>
                                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                            <a class="dropdown-item d-flex align-items-center" href="#"><svg
                                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                    stroke-linecap="round" stroke-linejoin="round"
                                                    class="feather feather-eye icon-sm mr-2">
                                                    <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path>
                                                    <circle cx="12" cy="12" r="3"></circle>
                                                </svg> <span class="">View</span></a>
                                            <a class="dropdown-item d-flex align-items-center" href="#"><svg
                                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                    stroke-linecap="round" stroke-linejoin="round"
                                                    class="feather feather-edit-2 icon-sm mr-2">
                                                    <path d="M17 3a2.828 2.828 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5L17 3z">
                                                    </path>
                                                </svg> <span class="">Edit</span></a>
                                            <a class="dropdown-item d-flex align-items-center" href="#"><svg
                                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                    stroke-linecap="round" stroke-linejoin="round"
                                                    class="feather feather-trash icon-sm mr-2">
                                                    <polyline points="3 6 5 6 21 6"></polyline>
                                                    <path
                                                        d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2">
                                                    </path>
                                                </svg> <span class="">Delete</span></a>
                                            <a class="dropdown-item d-flex align-items-center" href="#"><svg
                                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                    stroke-linecap="round" stroke-linejoin="round"
                                                    class="feather feather-printer icon-sm mr-2">
                                                    <polyline points="6 9 6 2 18 2 18 9"></polyline>
                                                    <path
                                                        d="M6 18H4a2 2 0 0 1-2-2v-5a2 2 0 0 1 2-2h16a2 2 0 0 1 2 2v5a2 2 0 0 1-2 2h-2">
                                                    </path>
                                                    <rect x="6" y="14" width="12" height="8"></rect>
                                                </svg> <span class="">Print</span></a>
                                            <a class="dropdown-item d-flex align-items-center" href="#"><svg
                                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                    stroke-linecap="round" stroke-linejoin="round"
                                                    class="feather feather-download icon-sm mr-2">
                                                    <path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"></path>
                                                    <polyline points="7 10 12 15 17 10"></polyline>
                                                    <line x1="12" y1="15" x2="12" y2="3"></line>
                                                </svg> <span class="">Download</span></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-6 col-md-12 col-xl-5">
                                        <h3 class="mb-2">3,897</h3>
                                        <div class="d-flex align-items-baseline">
                                            <p class="text-success">
                                                <span>+3.3%</span>
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                    stroke-linecap="round" stroke-linejoin="round"
                                                    class="feather feather-arrow-up icon-sm mb-1">
                                                    <line x1="12" y1="19" x2="12" y2="5"></line>
                                                    <polyline points="5 12 12 5 19 12"></polyline>
                                                </svg>
                                            </p>
                                        </div>
                                    </div>
                                    <div class="col-6 col-md-12 col-xl-7">
                                        <div id="apexChart1" class="mt-md-3 mt-xl-0" style="min-height: 60px;">
                                            <div id="apexcharts615n9pbml"
                                                class="apexcharts-canvas apexcharts615n9pbml apexcharts-theme-light"
                                                style="width: 203px; height: 60px;"><svg id="SvgjsSvg1006" width="203"
                                                    height="60" xmlns="http://www.w3.org/2000/svg" version="1.1"
                                                    xmlns:xlink="http://www.w3.org/1999/xlink"
                                                    xmlns:svgjs="http://svgjs.com/svgjs" class="apexcharts-svg"
                                                    xmlns:data="ApexChartsNS" transform="translate(0, 0)"
                                                    style="background: transparent;">
                                                    <g id="SvgjsG1008" class="apexcharts-inner apexcharts-graphical"
                                                        transform="translate(0, 0)">
                                                        <defs id="SvgjsDefs1007">
                                                            <clipPath id="gridRectMask615n9pbml">
                                                                <rect id="SvgjsRect1013" width="209" height="62" x="-3"
                                                                    y="-1" rx="0" ry="0" opacity="1" stroke-width="0"
                                                                    stroke="none" stroke-dasharray="0" fill="#fff"></rect>
                                                            </clipPath>
                                                            <clipPath id="gridRectMarkerMask615n9pbml">
                                                                <rect id="SvgjsRect1014" width="207" height="64" x="-2"
                                                                    y="-2" rx="0" ry="0" opacity="1" stroke-width="0"
                                                                    stroke="none" stroke-dasharray="0" fill="#fff"></rect>
                                                            </clipPath>
                                                        </defs>
                                                        <line id="SvgjsLine1012" x1="0" y1="0" x2="0" y2="60"
                                                            stroke="#b6b6b6" stroke-dasharray="3"
                                                            class="apexcharts-xcrosshairs" x="0" y="0" width="1" height="60"
                                                            fill="#b1b9c4" filter="none" fill-opacity="0.9"
                                                            stroke-width="1"></line>
                                                        <g id="SvgjsG1021" class="apexcharts-xaxis"
                                                            transform="translate(0, 0)">
                                                            <g id="SvgjsG1022" class="apexcharts-xaxis-texts-g"
                                                                transform="translate(0, -4)"></g>
                                                        </g>
                                                        <g id="SvgjsG1024" class="apexcharts-grid">
                                                            <g id="SvgjsG1025" class="apexcharts-gridlines-horizontal"
                                                                style="display: none;">
                                                                <line id="SvgjsLine1027" x1="0" y1="0" x2="203" y2="0"
                                                                    stroke="#e0e0e0" stroke-dasharray="0"
                                                                    class="apexcharts-gridline"></line>
                                                                <line id="SvgjsLine1028" x1="0" y1="10" x2="203" y2="10"
                                                                    stroke="#e0e0e0" stroke-dasharray="0"
                                                                    class="apexcharts-gridline"></line>
                                                                <line id="SvgjsLine1029" x1="0" y1="20" x2="203" y2="20"
                                                                    stroke="#e0e0e0" stroke-dasharray="0"
                                                                    class="apexcharts-gridline"></line>
                                                                <line id="SvgjsLine1030" x1="0" y1="30" x2="203" y2="30"
                                                                    stroke="#e0e0e0" stroke-dasharray="0"
                                                                    class="apexcharts-gridline"></line>
                                                                <line id="SvgjsLine1031" x1="0" y1="40" x2="203" y2="40"
                                                                    stroke="#e0e0e0" stroke-dasharray="0"
                                                                    class="apexcharts-gridline"></line>
                                                                <line id="SvgjsLine1032" x1="0" y1="50" x2="203" y2="50"
                                                                    stroke="#e0e0e0" stroke-dasharray="0"
                                                                    class="apexcharts-gridline"></line>
                                                                <line id="SvgjsLine1033" x1="0" y1="60" x2="203" y2="60"
                                                                    stroke="#e0e0e0" stroke-dasharray="0"
                                                                    class="apexcharts-gridline"></line>
                                                            </g>
                                                            <g id="SvgjsG1026" class="apexcharts-gridlines-vertical"
                                                                style="display: none;"></g>
                                                            <line id="SvgjsLine1035" x1="0" y1="60" x2="203" y2="60"
                                                                stroke="transparent" stroke-dasharray="0"></line>
                                                            <line id="SvgjsLine1034" x1="0" y1="1" x2="0" y2="60"
                                                                stroke="transparent" stroke-dasharray="0"></line>
                                                        </g>
                                                        <g id="SvgjsG1016"
                                                            class="apexcharts-line-series apexcharts-plot-series">
                                                            <g id="SvgjsG1017" class="apexcharts-series"
                                                                seriesName="seriesx1" data:longestSeries="true" rel="1"
                                                                data:realIndex="0">
                                                                <path id="SvgjsPath1020"
                                                                    d="M0 26C7.105 26 13.195 15 20.3 15C27.405 15 33.495000000000005 29 40.6 29C47.705 29 53.795 3 60.9 3C68.005 3 74.095 48 81.2 48C88.305 48 94.395 27 101.5 27C108.605 27 114.695 49 121.8 49C128.905 49 134.995 29 142.1 29C149.20499999999998 29 155.29500000000002 14 162.4 14C169.505 14 175.595 43 182.7 43C189.80499999999998 43 195.895 27 203 27C203 27 203 27 203 27 "
                                                                    fill="none" fill-opacity="1"
                                                                    stroke="rgba(114,124,245,0.85)" stroke-opacity="1"
                                                                    stroke-linecap="butt" stroke-width="2"
                                                                    stroke-dasharray="0" class="apexcharts-line" index="0"
                                                                    clip-path="url(#gridRectMask615n9pbml)"
                                                                    pathTo="M 0 26C 7.1049999999999995 26 13.195 15 20.3 15C 27.405 15 33.495000000000005 29 40.6 29C 47.705 29 53.795 3 60.9 3C 68.005 3 74.095 48 81.2 48C 88.305 48 94.395 27 101.5 27C 108.605 27 114.695 49 121.8 49C 128.905 49 134.995 29 142.1 29C 149.20499999999998 29 155.29500000000002 14 162.4 14C 169.505 14 175.595 43 182.7 43C 189.80499999999998 43 195.895 27 203 27"
                                                                    pathFrom="M -1 3870L -1 3870L 20.3 3870L 40.6 3870L 60.9 3870L 81.2 3870L 101.5 3870L 121.8 3870L 142.1 3870L 162.4 3870L 182.7 3870L 203 3870">
                                                                </path>
                                                                <g id="SvgjsG1018" class="apexcharts-series-markers-wrap"
                                                                    data:realIndex="0">
                                                                    <g class="apexcharts-series-markers">
                                                                        <circle id="SvgjsCircle1041" r="0" cx="0" cy="0"
                                                                            class="apexcharts-marker wllf66pq5 no-pointer-events"
                                                                            stroke="#ffffff" fill="#727cf5" fill-opacity="1"
                                                                            stroke-width="2" stroke-opacity="0.9"
                                                                            default-marker-size="0"></circle>
                                                                    </g>
                                                                </g>
                                                            </g>
                                                            <g id="SvgjsG1019" class="apexcharts-datalabels"
                                                                data:realIndex="0"></g>
                                                        </g>
                                                        <line id="SvgjsLine1036" x1="0" y1="0" x2="203" y2="0"
                                                            stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1"
                                                            class="apexcharts-ycrosshairs"></line>
                                                        <line id="SvgjsLine1037" x1="0" y1="0" x2="203" y2="0"
                                                            stroke-dasharray="0" stroke-width="0"
                                                            class="apexcharts-ycrosshairs-hidden"></line>
                                                        <g id="SvgjsG1038" class="apexcharts-yaxis-annotations"></g>
                                                        <g id="SvgjsG1039" class="apexcharts-xaxis-annotations"></g>
                                                        <g id="SvgjsG1040" class="apexcharts-point-annotations"></g>
                                                    </g>
                                                    <rect id="SvgjsRect1011" width="0" height="0" x="0" y="0" rx="0" ry="0"
                                                        opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0"
                                                        fill="#fefefe"></rect>
                                                    <g id="SvgjsG1023" class="apexcharts-yaxis" rel="0"
                                                        transform="translate(-18, 0)"></g>
                                                    <g id="SvgjsG1009" class="apexcharts-annotations"></g>
                                                </svg>
                                                <div class="apexcharts-legend"></div>
                                                <div class="apexcharts-tooltip apexcharts-theme-light">
                                                    <div class="apexcharts-tooltip-series-group"><span
                                                            class="apexcharts-tooltip-marker"
                                                            style="background-color: rgb(114, 124, 245);"></span>
                                                        <div class="apexcharts-tooltip-text"
                                                            style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">
                                                            <div class="apexcharts-tooltip-y-group"><span
                                                                    class="apexcharts-tooltip-text-label"></span><span
                                                                    class="apexcharts-tooltip-text-value"></span>
                                                            </div>
                                                            <div class="apexcharts-tooltip-z-group"><span
                                                                    class="apexcharts-tooltip-text-z-label"></span><span
                                                                    class="apexcharts-tooltip-text-z-value"></span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div
                                                    class="apexcharts-yaxistooltip apexcharts-yaxistooltip-0 apexcharts-yaxistooltip-left apexcharts-theme-light">
                                                    <div class="apexcharts-yaxistooltip-text"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="resize-triggers">
                                            <div class="expand-trigger">
                                                <div style="width: 228px; height: 66px;"></div>
                                            </div>
                                            <div class="contract-trigger"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 grid-margin stretch-card">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex justify-content-between align-items-baseline">
                                    <h6 class="card-title mb-0">New Orders</h6>
                                    <div class="dropdown mb-2">
                                        <button class="btn p-0" type="button" id="dropdownMenuButton1"
                                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                stroke-linecap="round" stroke-linejoin="round"
                                                class="feather feather-more-horizontal icon-lg text-muted pb-3px">
                                                <circle cx="12" cy="12" r="1"></circle>
                                                <circle cx="19" cy="12" r="1"></circle>
                                                <circle cx="5" cy="12" r="1"></circle>
                                            </svg>
                                        </button>
                                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                            <a class="dropdown-item d-flex align-items-center" href="#"><svg
                                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                    stroke-linecap="round" stroke-linejoin="round"
                                                    class="feather feather-eye icon-sm mr-2">
                                                    <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path>
                                                    <circle cx="12" cy="12" r="3"></circle>
                                                </svg> <span class="">View</span></a>
                                            <a class="dropdown-item d-flex align-items-center" href="#"><svg
                                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                    stroke-linecap="round" stroke-linejoin="round"
                                                    class="feather feather-edit-2 icon-sm mr-2">
                                                    <path d="M17 3a2.828 2.828 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5L17 3z">
                                                    </path>
                                                </svg> <span class="">Edit</span></a>
                                            <a class="dropdown-item d-flex align-items-center" href="#"><svg
                                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                    stroke-linecap="round" stroke-linejoin="round"
                                                    class="feather feather-trash icon-sm mr-2">
                                                    <polyline points="3 6 5 6 21 6"></polyline>
                                                    <path
                                                        d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2">
                                                    </path>
                                                </svg> <span class="">Delete</span></a>
                                            <a class="dropdown-item d-flex align-items-center" href="#"><svg
                                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                    stroke-linecap="round" stroke-linejoin="round"
                                                    class="feather feather-printer icon-sm mr-2">
                                                    <polyline points="6 9 6 2 18 2 18 9"></polyline>
                                                    <path
                                                        d="M6 18H4a2 2 0 0 1-2-2v-5a2 2 0 0 1 2-2h16a2 2 0 0 1 2 2v5a2 2 0 0 1-2 2h-2">
                                                    </path>
                                                    <rect x="6" y="14" width="12" height="8"></rect>
                                                </svg> <span class="">Print</span></a>
                                            <a class="dropdown-item d-flex align-items-center" href="#"><svg
                                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                    stroke-linecap="round" stroke-linejoin="round"
                                                    class="feather feather-download icon-sm mr-2">
                                                    <path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"></path>
                                                    <polyline points="7 10 12 15 17 10"></polyline>
                                                    <line x1="12" y1="15" x2="12" y2="3"></line>
                                                </svg> <span class="">Download</span></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-6 col-md-12 col-xl-5">
                                        <h3 class="mb-2">35,084</h3>
                                        <div class="d-flex align-items-baseline">
                                            <p class="text-danger">
                                                <span>-2.8%</span>
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                    stroke-linecap="round" stroke-linejoin="round"
                                                    class="feather feather-arrow-down icon-sm mb-1">
                                                    <line x1="12" y1="5" x2="12" y2="19"></line>
                                                    <polyline points="19 12 12 19 5 12"></polyline>
                                                </svg>
                                            </p>
                                        </div>
                                    </div>
                                    <div class="col-6 col-md-12 col-xl-7">
                                        <div id="apexChart2" class="mt-md-3 mt-xl-0" style="min-height: 60px;">
                                            <div id="apexcharts0muzus0s"
                                                class="apexcharts-canvas apexcharts0muzus0s apexcharts-theme-light"
                                                style="width: 203px; height: 60px;"><svg id="SvgjsSvg1042" width="203"
                                                    height="60" xmlns="http://www.w3.org/2000/svg" version="1.1"
                                                    xmlns:xlink="http://www.w3.org/1999/xlink"
                                                    xmlns:svgjs="http://svgjs.com/svgjs" class="apexcharts-svg"
                                                    xmlns:data="ApexChartsNS" transform="translate(0, 0)"
                                                    style="background: transparent;">
                                                    <g id="SvgjsG1044" class="apexcharts-inner apexcharts-graphical"
                                                        transform="translate(0, 0)">
                                                        <defs id="SvgjsDefs1043">
                                                            <linearGradient id="SvgjsLinearGradient1047" x1="0" y1="0"
                                                                x2="0" y2="1">
                                                                <stop id="SvgjsStop1048" stop-opacity="0.4"
                                                                    stop-color="rgba(216,227,240,0.4)" offset="0">
                                                                </stop>
                                                                <stop id="SvgjsStop1049" stop-opacity="0.5"
                                                                    stop-color="rgba(190,209,230,0.5)" offset="1">
                                                                </stop>
                                                                <stop id="SvgjsStop1050" stop-opacity="0.5"
                                                                    stop-color="rgba(190,209,230,0.5)" offset="1">
                                                                </stop>
                                                            </linearGradient>
                                                            <clipPath id="gridRectMask0muzus0s">
                                                                <rect id="SvgjsRect1053" width="207" height="60" x="-2"
                                                                    y="0" rx="0" ry="0" opacity="1" stroke-width="0"
                                                                    stroke="none" stroke-dasharray="0" fill="#fff"></rect>
                                                            </clipPath>
                                                            <clipPath id="gridRectMarkerMask0muzus0s">
                                                                <rect id="SvgjsRect1054" width="207" height="64" x="-2"
                                                                    y="-2" rx="0" ry="0" opacity="1" stroke-width="0"
                                                                    stroke="none" stroke-dasharray="0" fill="#fff"></rect>
                                                            </clipPath>
                                                        </defs>
                                                        <line id="SvgjsLine1052" x1="0" y1="0" x2="0" y2="60"
                                                            stroke-dasharray="3" class="apexcharts-xcrosshairs" x="0" y="0"
                                                            width="1" height="60" fill="url(#SvgjsLinearGradient1047)"
                                                            filter="none" fill-opacity="0.9" stroke-width="0"></line>
                                                        <g id="SvgjsG1070" class="apexcharts-xaxis"
                                                            transform="translate(0, 0)">
                                                            <g id="SvgjsG1071" class="apexcharts-xaxis-texts-g"
                                                                transform="translate(0, -4)"></g>
                                                        </g>
                                                        <g id="SvgjsG1073" class="apexcharts-grid">
                                                            <g id="SvgjsG1074" class="apexcharts-gridlines-horizontal"
                                                                style="display: none;">
                                                                <line id="SvgjsLine1076" x1="0" y1="0" x2="203" y2="0"
                                                                    stroke="#e0e0e0" stroke-dasharray="0"
                                                                    class="apexcharts-gridline"></line>
                                                                <line id="SvgjsLine1077" x1="0" y1="12" x2="203" y2="12"
                                                                    stroke="#e0e0e0" stroke-dasharray="0"
                                                                    class="apexcharts-gridline"></line>
                                                                <line id="SvgjsLine1078" x1="0" y1="24" x2="203" y2="24"
                                                                    stroke="#e0e0e0" stroke-dasharray="0"
                                                                    class="apexcharts-gridline"></line>
                                                                <line id="SvgjsLine1079" x1="0" y1="36" x2="203" y2="36"
                                                                    stroke="#e0e0e0" stroke-dasharray="0"
                                                                    class="apexcharts-gridline"></line>
                                                                <line id="SvgjsLine1080" x1="0" y1="48" x2="203" y2="48"
                                                                    stroke="#e0e0e0" stroke-dasharray="0"
                                                                    class="apexcharts-gridline"></line>
                                                                <line id="SvgjsLine1081" x1="0" y1="60" x2="203" y2="60"
                                                                    stroke="#e0e0e0" stroke-dasharray="0"
                                                                    class="apexcharts-gridline"></line>
                                                            </g>
                                                            <g id="SvgjsG1075" class="apexcharts-gridlines-vertical"
                                                                style="display: none;"></g>
                                                            <line id="SvgjsLine1083" x1="0" y1="60" x2="203" y2="60"
                                                                stroke="transparent" stroke-dasharray="0"></line>
                                                            <line id="SvgjsLine1082" x1="0" y1="1" x2="0" y2="60"
                                                                stroke="transparent" stroke-dasharray="0"></line>
                                                        </g>
                                                        <g id="SvgjsG1056"
                                                            class="apexcharts-bar-series apexcharts-plot-series">
                                                            <g id="SvgjsG1057" class="apexcharts-series" rel="1"
                                                                seriesName="seriesx1" data:realIndex="0">
                                                                <path id="SvgjsPath1059"
                                                                    d="M3.6909090909090905 60L3.6909090909090905 38.400000000000006L14.763636363636362 38.400000000000006L14.763636363636362 38.400000000000006L14.763636363636362 60L14.763636363636362 60C14.763636363636362 60 3.6909090909090905 60 3.6909090909090905 60 "
                                                                    fill="rgba(114,124,245,0.85)" fill-opacity="1"
                                                                    stroke-opacity="1" stroke-linecap="square"
                                                                    stroke-width="0" stroke-dasharray="0"
                                                                    class="apexcharts-bar-area" index="0"
                                                                    clip-path="url(#gridRectMask0muzus0s)"
                                                                    pathTo="M 3.6909090909090905 60L 3.6909090909090905 38.400000000000006L 14.763636363636362 38.400000000000006L 14.763636363636362 38.400000000000006L 14.763636363636362 60L 14.763636363636362 60z"
                                                                    pathFrom="M 3.6909090909090905 60L 3.6909090909090905 60L 14.763636363636362 60L 14.763636363636362 60L 14.763636363636362 60L 3.6909090909090905 60"
                                                                    cy="38.400000000000006" cx="22.145454545454545" j="0"
                                                                    val="36" barHeight="21.599999999999998"
                                                                    barWidth="11.072727272727272"></path>
                                                                <path id="SvgjsPath1060"
                                                                    d="M22.145454545454545 60L22.145454545454545 13.800000000000004L33.21818181818182 13.800000000000004L33.21818181818182 13.800000000000004L33.21818181818182 60L33.21818181818182 60C33.21818181818182 60 22.145454545454545 60 22.145454545454545 60 "
                                                                    fill="rgba(114,124,245,0.85)" fill-opacity="1"
                                                                    stroke-opacity="1" stroke-linecap="square"
                                                                    stroke-width="0" stroke-dasharray="0"
                                                                    class="apexcharts-bar-area" index="0"
                                                                    clip-path="url(#gridRectMask0muzus0s)"
                                                                    pathTo="M 22.145454545454545 60L 22.145454545454545 13.800000000000004L 33.21818181818182 13.800000000000004L 33.21818181818182 13.800000000000004L 33.21818181818182 60L 33.21818181818182 60z"
                                                                    pathFrom="M 22.145454545454545 60L 22.145454545454545 60L 33.21818181818182 60L 33.21818181818182 60L 33.21818181818182 60L 22.145454545454545 60"
                                                                    cy="13.800000000000004" cx="40.599999999999994" j="1"
                                                                    val="77" barHeight="46.199999999999996"
                                                                    barWidth="11.072727272727272"></path>
                                                                <path id="SvgjsPath1061"
                                                                    d="M40.599999999999994 60L40.599999999999994 28.8L51.672727272727265 28.8L51.672727272727265 28.8L51.672727272727265 60L51.672727272727265 60C51.672727272727265 60 40.599999999999994 60 40.599999999999994 60 "
                                                                    fill="rgba(114,124,245,0.85)" fill-opacity="1"
                                                                    stroke-opacity="1" stroke-linecap="square"
                                                                    stroke-width="0" stroke-dasharray="0"
                                                                    class="apexcharts-bar-area" index="0"
                                                                    clip-path="url(#gridRectMask0muzus0s)"
                                                                    pathTo="M 40.599999999999994 60L 40.599999999999994 28.8L 51.672727272727265 28.8L 51.672727272727265 28.8L 51.672727272727265 60L 51.672727272727265 60z"
                                                                    pathFrom="M 40.599999999999994 60L 40.599999999999994 60L 51.672727272727265 60L 51.672727272727265 60L 51.672727272727265 60L 40.599999999999994 60"
                                                                    cy="28.8" cx="59.05454545454545" j="2" val="52"
                                                                    barHeight="31.2" barWidth="11.072727272727272">
                                                                </path>
                                                                <path id="SvgjsPath1062"
                                                                    d="M59.05454545454545 60L59.05454545454545 6L70.12727272727273 6L70.12727272727273 6L70.12727272727273 60L70.12727272727273 60C70.12727272727273 60 59.05454545454545 60 59.05454545454545 60 "
                                                                    fill="rgba(114,124,245,0.85)" fill-opacity="1"
                                                                    stroke-opacity="1" stroke-linecap="square"
                                                                    stroke-width="0" stroke-dasharray="0"
                                                                    class="apexcharts-bar-area" index="0"
                                                                    clip-path="url(#gridRectMask0muzus0s)"
                                                                    pathTo="M 59.05454545454545 60L 59.05454545454545 6L 70.12727272727273 6L 70.12727272727273 6L 70.12727272727273 60L 70.12727272727273 60z"
                                                                    pathFrom="M 59.05454545454545 60L 59.05454545454545 60L 70.12727272727273 60L 70.12727272727273 60L 70.12727272727273 60L 59.05454545454545 60"
                                                                    cy="6" cx="77.5090909090909" j="3" val="90"
                                                                    barHeight="54" barWidth="11.072727272727272">
                                                                </path>
                                                                <path id="SvgjsPath1063"
                                                                    d="M77.5090909090909 60L77.5090909090909 15.600000000000001L88.58181818181818 15.600000000000001L88.58181818181818 15.600000000000001L88.58181818181818 60L88.58181818181818 60C88.58181818181818 60 77.5090909090909 60 77.5090909090909 60 "
                                                                    fill="rgba(114,124,245,0.85)" fill-opacity="1"
                                                                    stroke-opacity="1" stroke-linecap="square"
                                                                    stroke-width="0" stroke-dasharray="0"
                                                                    class="apexcharts-bar-area" index="0"
                                                                    clip-path="url(#gridRectMask0muzus0s)"
                                                                    pathTo="M 77.5090909090909 60L 77.5090909090909 15.600000000000001L 88.58181818181818 15.600000000000001L 88.58181818181818 15.600000000000001L 88.58181818181818 60L 88.58181818181818 60z"
                                                                    pathFrom="M 77.5090909090909 60L 77.5090909090909 60L 88.58181818181818 60L 88.58181818181818 60L 88.58181818181818 60L 77.5090909090909 60"
                                                                    cy="15.600000000000001" cx="95.96363636363635" j="4"
                                                                    val="74" barHeight="44.4" barWidth="11.072727272727272">
                                                                </path>
                                                                <path id="SvgjsPath1064"
                                                                    d="M95.96363636363635 60L95.96363636363635 39L107.03636363636363 39L107.03636363636363 39L107.03636363636363 60L107.03636363636363 60C107.03636363636363 60 95.96363636363635 60 95.96363636363635 60 "
                                                                    fill="rgba(114,124,245,0.85)" fill-opacity="1"
                                                                    stroke-opacity="1" stroke-linecap="square"
                                                                    stroke-width="0" stroke-dasharray="0"
                                                                    class="apexcharts-bar-area" index="0"
                                                                    clip-path="url(#gridRectMask0muzus0s)"
                                                                    pathTo="M 95.96363636363635 60L 95.96363636363635 39L 107.03636363636363 39L 107.03636363636363 39L 107.03636363636363 60L 107.03636363636363 60z"
                                                                    pathFrom="M 95.96363636363635 60L 95.96363636363635 60L 107.03636363636363 60L 107.03636363636363 60L 107.03636363636363 60L 95.96363636363635 60"
                                                                    cy="39" cx="114.41818181818181" j="5" val="35"
                                                                    barHeight="21" barWidth="11.072727272727272">
                                                                </path>
                                                                <path id="SvgjsPath1065"
                                                                    d="M114.41818181818181 60L114.41818181818181 27L125.49090909090908 27L125.49090909090908 27L125.49090909090908 60L125.49090909090908 60C125.49090909090908 60 114.41818181818181 60 114.41818181818181 60 "
                                                                    fill="rgba(114,124,245,0.85)" fill-opacity="1"
                                                                    stroke-opacity="1" stroke-linecap="square"
                                                                    stroke-width="0" stroke-dasharray="0"
                                                                    class="apexcharts-bar-area" index="0"
                                                                    clip-path="url(#gridRectMask0muzus0s)"
                                                                    pathTo="M 114.41818181818181 60L 114.41818181818181 27L 125.49090909090908 27L 125.49090909090908 27L 125.49090909090908 60L 125.49090909090908 60z"
                                                                    pathFrom="M 114.41818181818181 60L 114.41818181818181 60L 125.49090909090908 60L 125.49090909090908 60L 125.49090909090908 60L 114.41818181818181 60"
                                                                    cy="27" cx="132.87272727272727" j="6" val="55"
                                                                    barHeight="33" barWidth="11.072727272727272">
                                                                </path>
                                                                <path id="SvgjsPath1066"
                                                                    d="M132.87272727272727 60L132.87272727272727 46.2L143.94545454545454 46.2L143.94545454545454 46.2L143.94545454545454 60L143.94545454545454 60C143.94545454545454 60 132.87272727272727 60 132.87272727272727 60 "
                                                                    fill="rgba(114,124,245,0.85)" fill-opacity="1"
                                                                    stroke-opacity="1" stroke-linecap="square"
                                                                    stroke-width="0" stroke-dasharray="0"
                                                                    class="apexcharts-bar-area" index="0"
                                                                    clip-path="url(#gridRectMask0muzus0s)"
                                                                    pathTo="M 132.87272727272727 60L 132.87272727272727 46.2L 143.94545454545454 46.2L 143.94545454545454 46.2L 143.94545454545454 60L 143.94545454545454 60z"
                                                                    pathFrom="M 132.87272727272727 60L 132.87272727272727 60L 143.94545454545454 60L 143.94545454545454 60L 143.94545454545454 60L 132.87272727272727 60"
                                                                    cy="46.2" cx="151.3272727272727" j="7" val="23"
                                                                    barHeight="13.799999999999999"
                                                                    barWidth="11.072727272727272"></path>
                                                                <path id="SvgjsPath1067"
                                                                    d="M151.3272727272727 60L151.3272727272727 31.8L162.39999999999998 31.8L162.39999999999998 31.8L162.39999999999998 60L162.39999999999998 60C162.39999999999998 60 151.3272727272727 60 151.3272727272727 60 "
                                                                    fill="rgba(114,124,245,0.85)" fill-opacity="1"
                                                                    stroke-opacity="1" stroke-linecap="square"
                                                                    stroke-width="0" stroke-dasharray="0"
                                                                    class="apexcharts-bar-area" index="0"
                                                                    clip-path="url(#gridRectMask0muzus0s)"
                                                                    pathTo="M 151.3272727272727 60L 151.3272727272727 31.8L 162.39999999999998 31.8L 162.39999999999998 31.8L 162.39999999999998 60L 162.39999999999998 60z"
                                                                    pathFrom="M 151.3272727272727 60L 151.3272727272727 60L 162.39999999999998 60L 162.39999999999998 60L 162.39999999999998 60L 151.3272727272727 60"
                                                                    cy="31.8" cx="169.78181818181815" j="8" val="47"
                                                                    barHeight="28.2" barWidth="11.072727272727272">
                                                                </path>
                                                                <path id="SvgjsPath1068"
                                                                    d="M169.78181818181815 60L169.78181818181815 54L180.85454545454542 54L180.85454545454542 54L180.85454545454542 60L180.85454545454542 60C180.85454545454542 60 169.78181818181815 60 169.78181818181815 60 "
                                                                    fill="rgba(114,124,245,0.85)" fill-opacity="1"
                                                                    stroke-opacity="1" stroke-linecap="square"
                                                                    stroke-width="0" stroke-dasharray="0"
                                                                    class="apexcharts-bar-area" index="0"
                                                                    clip-path="url(#gridRectMask0muzus0s)"
                                                                    pathTo="M 169.78181818181815 60L 169.78181818181815 54L 180.85454545454542 54L 180.85454545454542 54L 180.85454545454542 60L 180.85454545454542 60z"
                                                                    pathFrom="M 169.78181818181815 60L 169.78181818181815 60L 180.85454545454542 60L 180.85454545454542 60L 180.85454545454542 60L 169.78181818181815 60"
                                                                    cy="54" cx="188.2363636363636" j="9" val="10"
                                                                    barHeight="6" barWidth="11.072727272727272">
                                                                </path>
                                                                <path id="SvgjsPath1069"
                                                                    d="M188.2363636363636 60L188.2363636363636 22.200000000000003L199.30909090909086 22.200000000000003L199.30909090909086 22.200000000000003L199.30909090909086 60L199.30909090909086 60C199.30909090909086 60 188.2363636363636 60 188.2363636363636 60 "
                                                                    fill="rgba(114,124,245,0.85)" fill-opacity="1"
                                                                    stroke-opacity="1" stroke-linecap="square"
                                                                    stroke-width="0" stroke-dasharray="0"
                                                                    class="apexcharts-bar-area" index="0"
                                                                    clip-path="url(#gridRectMask0muzus0s)"
                                                                    pathTo="M 188.2363636363636 60L 188.2363636363636 22.200000000000003L 199.30909090909086 22.200000000000003L 199.30909090909086 22.200000000000003L 199.30909090909086 60L 199.30909090909086 60z"
                                                                    pathFrom="M 188.2363636363636 60L 188.2363636363636 60L 199.30909090909086 60L 199.30909090909086 60L 199.30909090909086 60L 188.2363636363636 60"
                                                                    cy="22.200000000000003" cx="206.69090909090903" j="10"
                                                                    val="63" barHeight="37.8" barWidth="11.072727272727272">
                                                                </path>
                                                            </g>
                                                            <g id="SvgjsG1058" class="apexcharts-datalabels"
                                                                data:realIndex="0"></g>
                                                        </g>
                                                        <line id="SvgjsLine1084" x1="0" y1="0" x2="203" y2="0"
                                                            stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1"
                                                            class="apexcharts-ycrosshairs"></line>
                                                        <line id="SvgjsLine1085" x1="0" y1="0" x2="203" y2="0"
                                                            stroke-dasharray="0" stroke-width="0"
                                                            class="apexcharts-ycrosshairs-hidden"></line>
                                                        <g id="SvgjsG1086" class="apexcharts-yaxis-annotations"></g>
                                                        <g id="SvgjsG1087" class="apexcharts-xaxis-annotations"></g>
                                                        <g id="SvgjsG1088" class="apexcharts-point-annotations"></g>
                                                    </g>
                                                    <rect id="SvgjsRect1051" width="0" height="0" x="0" y="0" rx="0" ry="0"
                                                        opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0"
                                                        fill="#fefefe"></rect>
                                                    <g id="SvgjsG1072" class="apexcharts-yaxis" rel="0"
                                                        transform="translate(-18, 0)"></g>
                                                    <g id="SvgjsG1045" class="apexcharts-annotations"></g>
                                                </svg>
                                                <div class="apexcharts-legend"></div>
                                                <div class="apexcharts-tooltip apexcharts-theme-light">
                                                    <div class="apexcharts-tooltip-series-group"><span
                                                            class="apexcharts-tooltip-marker"
                                                            style="background-color: rgb(114, 124, 245);"></span>
                                                        <div class="apexcharts-tooltip-text"
                                                            style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">
                                                            <div class="apexcharts-tooltip-y-group"><span
                                                                    class="apexcharts-tooltip-text-label"></span><span
                                                                    class="apexcharts-tooltip-text-value"></span>
                                                            </div>
                                                            <div class="apexcharts-tooltip-z-group"><span
                                                                    class="apexcharts-tooltip-text-z-label"></span><span
                                                                    class="apexcharts-tooltip-text-z-value"></span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div
                                                    class="apexcharts-yaxistooltip apexcharts-yaxistooltip-0 apexcharts-yaxistooltip-left apexcharts-theme-light">
                                                    <div class="apexcharts-yaxistooltip-text"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="resize-triggers">
                                            <div class="expand-trigger">
                                                <div style="width: 228px; height: 66px;"></div>
                                            </div>
                                            <div class="contract-trigger"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 grid-margin stretch-card">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex justify-content-between align-items-baseline">
                                    <h6 class="card-title mb-0">Growth</h6>
                                    <div class="dropdown mb-2">
                                        <button class="btn p-0" type="button" id="dropdownMenuButton2"
                                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                stroke-linecap="round" stroke-linejoin="round"
                                                class="feather feather-more-horizontal icon-lg text-muted pb-3px">
                                                <circle cx="12" cy="12" r="1"></circle>
                                                <circle cx="19" cy="12" r="1"></circle>
                                                <circle cx="5" cy="12" r="1"></circle>
                                            </svg>
                                        </button>
                                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton2">
                                            <a class="dropdown-item d-flex align-items-center" href="#"><svg
                                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                    stroke-linecap="round" stroke-linejoin="round"
                                                    class="feather feather-eye icon-sm mr-2">
                                                    <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path>
                                                    <circle cx="12" cy="12" r="3"></circle>
                                                </svg> <span class="">View</span></a>
                                            <a class="dropdown-item d-flex align-items-center" href="#"><svg
                                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                    stroke-linecap="round" stroke-linejoin="round"
                                                    class="feather feather-edit-2 icon-sm mr-2">
                                                    <path d="M17 3a2.828 2.828 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5L17 3z">
                                                    </path>
                                                </svg> <span class="">Edit</span></a>
                                            <a class="dropdown-item d-flex align-items-center" href="#"><svg
                                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                    stroke-linecap="round" stroke-linejoin="round"
                                                    class="feather feather-trash icon-sm mr-2">
                                                    <polyline points="3 6 5 6 21 6"></polyline>
                                                    <path
                                                        d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2">
                                                    </path>
                                                </svg> <span class="">Delete</span></a>
                                            <a class="dropdown-item d-flex align-items-center" href="#"><svg
                                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                    stroke-linecap="round" stroke-linejoin="round"
                                                    class="feather feather-printer icon-sm mr-2">
                                                    <polyline points="6 9 6 2 18 2 18 9"></polyline>
                                                    <path
                                                        d="M6 18H4a2 2 0 0 1-2-2v-5a2 2 0 0 1 2-2h16a2 2 0 0 1 2 2v5a2 2 0 0 1-2 2h-2">
                                                    </path>
                                                    <rect x="6" y="14" width="12" height="8"></rect>
                                                </svg> <span class="">Print</span></a>
                                            <a class="dropdown-item d-flex align-items-center" href="#"><svg
                                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                    stroke-linecap="round" stroke-linejoin="round"
                                                    class="feather feather-download icon-sm mr-2">
                                                    <path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"></path>
                                                    <polyline points="7 10 12 15 17 10"></polyline>
                                                    <line x1="12" y1="15" x2="12" y2="3"></line>
                                                </svg> <span class="">Download</span></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-6 col-md-12 col-xl-5">
                                        <h3 class="mb-2">89.87%</h3>
                                        <div class="d-flex align-items-baseline">
                                            <p class="text-success">
                                                <span>+2.8%</span>
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                    stroke-linecap="round" stroke-linejoin="round"
                                                    class="feather feather-arrow-up icon-sm mb-1">
                                                    <line x1="12" y1="19" x2="12" y2="5"></line>
                                                    <polyline points="5 12 12 5 19 12"></polyline>
                                                </svg>
                                            </p>
                                        </div>
                                    </div>
                                    <div class="col-6 col-md-12 col-xl-7">
                                        <div id="apexChart3" class="mt-md-3 mt-xl-0" style="min-height: 60px;">
                                            <div id="apexchartskemvub4v"
                                                class="apexcharts-canvas apexchartskemvub4v apexcharts-theme-light"
                                                style="width: 203px; height: 60px;"><svg id="SvgjsSvg1089" width="203"
                                                    height="60" xmlns="http://www.w3.org/2000/svg" version="1.1"
                                                    xmlns:xlink="http://www.w3.org/1999/xlink"
                                                    xmlns:svgjs="http://svgjs.com/svgjs" class="apexcharts-svg"
                                                    xmlns:data="ApexChartsNS" transform="translate(0, 0)"
                                                    style="background: transparent;">
                                                    <g id="SvgjsG1091" class="apexcharts-inner apexcharts-graphical"
                                                        transform="translate(0, 0)">
                                                        <defs id="SvgjsDefs1090">
                                                            <clipPath id="gridRectMaskkemvub4v">
                                                                <rect id="SvgjsRect1096" width="209" height="62" x="-3"
                                                                    y="-1" rx="0" ry="0" opacity="1" stroke-width="0"
                                                                    stroke="none" stroke-dasharray="0" fill="#fff"></rect>
                                                            </clipPath>
                                                            <clipPath id="gridRectMarkerMaskkemvub4v">
                                                                <rect id="SvgjsRect1097" width="207" height="64" x="-2"
                                                                    y="-2" rx="0" ry="0" opacity="1" stroke-width="0"
                                                                    stroke="none" stroke-dasharray="0" fill="#fff"></rect>
                                                            </clipPath>
                                                        </defs>
                                                        <line id="SvgjsLine1095" x1="0" y1="0" x2="0" y2="60"
                                                            stroke="#b6b6b6" stroke-dasharray="3"
                                                            class="apexcharts-xcrosshairs" x="0" y="0" width="1" height="60"
                                                            fill="#b1b9c4" filter="none" fill-opacity="0.9"
                                                            stroke-width="1"></line>
                                                        <g id="SvgjsG1104" class="apexcharts-xaxis"
                                                            transform="translate(0, 0)">
                                                            <g id="SvgjsG1105" class="apexcharts-xaxis-texts-g"
                                                                transform="translate(0, -4)"></g>
                                                        </g>
                                                        <g id="SvgjsG1107" class="apexcharts-grid">
                                                            <g id="SvgjsG1108" class="apexcharts-gridlines-horizontal"
                                                                style="display: none;">
                                                                <line id="SvgjsLine1110" x1="0" y1="0" x2="203" y2="0"
                                                                    stroke="#e0e0e0" stroke-dasharray="0"
                                                                    class="apexcharts-gridline"></line>
                                                                <line id="SvgjsLine1111" x1="0" y1="8.571428571428571"
                                                                    x2="203" y2="8.571428571428571" stroke="#e0e0e0"
                                                                    stroke-dasharray="0" class="apexcharts-gridline"></line>
                                                                <line id="SvgjsLine1112" x1="0" y1="17.142857142857142"
                                                                    x2="203" y2="17.142857142857142" stroke="#e0e0e0"
                                                                    stroke-dasharray="0" class="apexcharts-gridline"></line>
                                                                <line id="SvgjsLine1113" x1="0" y1="25.714285714285715"
                                                                    x2="203" y2="25.714285714285715" stroke="#e0e0e0"
                                                                    stroke-dasharray="0" class="apexcharts-gridline"></line>
                                                                <line id="SvgjsLine1114" x1="0" y1="34.285714285714285"
                                                                    x2="203" y2="34.285714285714285" stroke="#e0e0e0"
                                                                    stroke-dasharray="0" class="apexcharts-gridline"></line>
                                                                <line id="SvgjsLine1115" x1="0" y1="42.857142857142854"
                                                                    x2="203" y2="42.857142857142854" stroke="#e0e0e0"
                                                                    stroke-dasharray="0" class="apexcharts-gridline"></line>
                                                                <line id="SvgjsLine1116" x1="0" y1="51.42857142857142"
                                                                    x2="203" y2="51.42857142857142" stroke="#e0e0e0"
                                                                    stroke-dasharray="0" class="apexcharts-gridline"></line>
                                                                <line id="SvgjsLine1117" x1="0" y1="59.99999999999999"
                                                                    x2="203" y2="59.99999999999999" stroke="#e0e0e0"
                                                                    stroke-dasharray="0" class="apexcharts-gridline"></line>
                                                            </g>
                                                            <g id="SvgjsG1109" class="apexcharts-gridlines-vertical"
                                                                style="display: none;"></g>
                                                            <line id="SvgjsLine1119" x1="0" y1="60" x2="203" y2="60"
                                                                stroke="transparent" stroke-dasharray="0"></line>
                                                            <line id="SvgjsLine1118" x1="0" y1="1" x2="0" y2="60"
                                                                stroke="transparent" stroke-dasharray="0"></line>
                                                        </g>
                                                        <g id="SvgjsG1099"
                                                            class="apexcharts-line-series apexcharts-plot-series">
                                                            <g id="SvgjsG1100" class="apexcharts-series"
                                                                seriesName="seriesx1" data:longestSeries="true" rel="1"
                                                                data:realIndex="0">
                                                                <path id="SvgjsPath1103"
                                                                    d="M0 50.57142857142857C7.105 50.57142857142857 13.195 47.14285714285714 20.3 47.14285714285714C27.405 47.14285714285714 33.495000000000005 47.99999999999999 40.6 47.99999999999999C47.705 47.99999999999999 53.795 46.285714285714285 60.9 46.285714285714285C68.005 46.285714285714285 74.095 41.14285714285714 81.2 41.14285714285714C88.305 41.14285714285714 94.395 39.42857142857142 101.5 39.42857142857142C108.605 39.42857142857142 114.695 48.857142857142854 121.8 48.857142857142854C128.905 48.857142857142854 134.995 22.285714285714285 142.1 22.285714285714285C149.20499999999998 22.285714285714285 155.29500000000002 15.42857142857143 162.4 15.42857142857143C169.505 15.42857142857143 175.595 15.42857142857143 182.7 15.42857142857143C189.80499999999998 15.42857142857143 195.895 9.42857142857143 203 9.42857142857143C203 9.42857142857143 203 9.42857142857143 203 9.42857142857143 "
                                                                    fill="none" fill-opacity="1"
                                                                    stroke="rgba(114,124,245,0.85)" stroke-opacity="1"
                                                                    stroke-linecap="butt" stroke-width="2"
                                                                    stroke-dasharray="0" class="apexcharts-line" index="0"
                                                                    clip-path="url(#gridRectMaskkemvub4v)"
                                                                    pathTo="M 0 50.57142857142857C 7.1049999999999995 50.57142857142857 13.195 47.14285714285714 20.3 47.14285714285714C 27.405 47.14285714285714 33.495000000000005 47.99999999999999 40.6 47.99999999999999C 47.705 47.99999999999999 53.795 46.285714285714285 60.9 46.285714285714285C 68.005 46.285714285714285 74.095 41.14285714285714 81.2 41.14285714285714C 88.305 41.14285714285714 94.395 39.42857142857142 101.5 39.42857142857142C 108.605 39.42857142857142 114.695 48.857142857142854 121.8 48.857142857142854C 128.905 48.857142857142854 134.995 22.285714285714285 142.1 22.285714285714285C 149.20499999999998 22.285714285714285 155.29500000000002 15.42857142857143 162.4 15.42857142857143C 169.505 15.42857142857143 175.595 15.42857142857143 182.7 15.42857142857143C 189.80499999999998 15.42857142857143 195.895 9.42857142857143 203 9.42857142857143"
                                                                    pathFrom="M -1 85.71428571428571L -1 85.71428571428571L 20.3 85.71428571428571L 40.6 85.71428571428571L 60.9 85.71428571428571L 81.2 85.71428571428571L 101.5 85.71428571428571L 121.8 85.71428571428571L 142.1 85.71428571428571L 162.4 85.71428571428571L 182.7 85.71428571428571L 203 85.71428571428571">
                                                                </path>
                                                                <g id="SvgjsG1101" class="apexcharts-series-markers-wrap"
                                                                    data:realIndex="0">
                                                                    <g class="apexcharts-series-markers">
                                                                        <circle id="SvgjsCircle1125" r="0" cx="0" cy="0"
                                                                            class="apexcharts-marker wneyj4hldk no-pointer-events"
                                                                            stroke="#ffffff" fill="#727cf5" fill-opacity="1"
                                                                            stroke-width="2" stroke-opacity="0.9"
                                                                            default-marker-size="0"></circle>
                                                                    </g>
                                                                </g>
                                                            </g>
                                                            <g id="SvgjsG1102" class="apexcharts-datalabels"
                                                                data:realIndex="0"></g>
                                                        </g>
                                                        <line id="SvgjsLine1120" x1="0" y1="0" x2="203" y2="0"
                                                            stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1"
                                                            class="apexcharts-ycrosshairs"></line>
                                                        <line id="SvgjsLine1121" x1="0" y1="0" x2="203" y2="0"
                                                            stroke-dasharray="0" stroke-width="0"
                                                            class="apexcharts-ycrosshairs-hidden"></line>
                                                        <g id="SvgjsG1122" class="apexcharts-yaxis-annotations"></g>
                                                        <g id="SvgjsG1123" class="apexcharts-xaxis-annotations"></g>
                                                        <g id="SvgjsG1124" class="apexcharts-point-annotations"></g>
                                                    </g>
                                                    <rect id="SvgjsRect1094" width="0" height="0" x="0" y="0" rx="0" ry="0"
                                                        opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0"
                                                        fill="#fefefe"></rect>
                                                    <g id="SvgjsG1106" class="apexcharts-yaxis" rel="0"
                                                        transform="translate(-18, 0)"></g>
                                                    <g id="SvgjsG1092" class="apexcharts-annotations"></g>
                                                </svg>
                                                <div class="apexcharts-legend"></div>
                                                <div class="apexcharts-tooltip apexcharts-theme-light">
                                                    <div class="apexcharts-tooltip-series-group"><span
                                                            class="apexcharts-tooltip-marker"
                                                            style="background-color: rgb(114, 124, 245);"></span>
                                                        <div class="apexcharts-tooltip-text"
                                                            style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">
                                                            <div class="apexcharts-tooltip-y-group"><span
                                                                    class="apexcharts-tooltip-text-label"></span><span
                                                                    class="apexcharts-tooltip-text-value"></span>
                                                            </div>
                                                            <div class="apexcharts-tooltip-z-group"><span
                                                                    class="apexcharts-tooltip-text-z-label"></span><span
                                                                    class="apexcharts-tooltip-text-z-value"></span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div
                                                    class="apexcharts-yaxistooltip apexcharts-yaxistooltip-0 apexcharts-yaxistooltip-left apexcharts-theme-light">
                                                    <div class="apexcharts-yaxistooltip-text"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="resize-triggers">
                                            <div class="expand-trigger">
                                                <div style="width: 228px; height: 66px;"></div>
                                            </div>
                                            <div class="contract-trigger"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> <!-- row -->

        <div class="row">
            <div class="col-12 col-xl-12 grid-margin stretch-card">
                <div class="card overflow-hidden">
                    <div class="card-body">
                        <div class="d-flex justify-content-between align-items-baseline mb-4 mb-md-3">
                            <h6 class="card-title mb-0">Revenue</h6>
                            <div class="dropdown">
                                <button class="btn p-0" type="button" id="dropdownMenuButton3" data-toggle="dropdown"
                                    aria-haspopup="true" aria-expanded="false">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round"
                                        class="feather feather-more-horizontal icon-lg text-muted pb-3px">
                                        <circle cx="12" cy="12" r="1"></circle>
                                        <circle cx="19" cy="12" r="1"></circle>
                                        <circle cx="5" cy="12" r="1"></circle>
                                    </svg>
                                </button>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton3">
                                    <a class="dropdown-item d-flex align-items-center" href="#"><svg
                                            xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round" class="feather feather-eye icon-sm mr-2">
                                            <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path>
                                            <circle cx="12" cy="12" r="3"></circle>
                                        </svg> <span class="">View</span></a>
                                    <a class="dropdown-item d-flex align-items-center" href="#"><svg
                                            xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round" class="feather feather-edit-2 icon-sm mr-2">
                                            <path d="M17 3a2.828 2.828 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5L17 3z">
                                            </path>
                                        </svg> <span class="">Edit</span></a>
                                    <a class="dropdown-item d-flex align-items-center" href="#"><svg
                                            xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round" class="feather feather-trash icon-sm mr-2">
                                            <polyline points="3 6 5 6 21 6"></polyline>
                                            <path
                                                d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2">
                                            </path>
                                        </svg> <span class="">Delete</span></a>
                                    <a class="dropdown-item d-flex align-items-center" href="#"><svg
                                            xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round" class="feather feather-printer icon-sm mr-2">
                                            <polyline points="6 9 6 2 18 2 18 9"></polyline>
                                            <path
                                                d="M6 18H4a2 2 0 0 1-2-2v-5a2 2 0 0 1 2-2h16a2 2 0 0 1 2 2v5a2 2 0 0 1-2 2h-2">
                                            </path>
                                            <rect x="6" y="14" width="12" height="8"></rect>
                                        </svg> <span class="">Print</span></a>
                                    <a class="dropdown-item d-flex align-items-center" href="#"><svg
                                            xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round" class="feather feather-download icon-sm mr-2">
                                            <path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"></path>
                                            <polyline points="7 10 12 15 17 10"></polyline>
                                            <line x1="12" y1="15" x2="12" y2="3"></line>
                                        </svg> <span class="">Download</span></a>
                                </div>
                            </div>
                        </div>
                        <div class="row align-items-start mb-2">
                            <div class="col-md-7">
                                <p class="text-muted tx-13 mb-3 mb-md-0">Revenue is the income that a business has
                                    from its normal business activities, usually from the sale of goods and services
                                    to customers.</p>
                            </div>
                            <div class="col-md-5 d-flex justify-content-md-end">
                                <div class="btn-group mb-3 mb-md-0" role="group" aria-label="Basic example">
                                    <button type="button" class="btn btn-outline-primary">Today</button>
                                    <button type="button" class="btn btn-outline-primary d-none d-md-block">Week</button>
                                    <button type="button" class="btn btn-primary">Month</button>
                                    <button type="button" class="btn btn-outline-primary">Year</button>
                                </div>
                            </div>
                        </div>
                        <div class="flot-wrapper">
                            <div id="flotChart1" class="flot-chart" style="padding: 0px; position: relative;">
                                <canvas class="flot-base" width="1493" height="421"
                                    style="direction: ltr; position: absolute; left: 0px; top: 0px; width: 1241.71px; height: 350px;"></canvas>
                                <div class="flot-text"
                                    style="position: absolute; inset: 0px; font-size: smaller; color: rgb(84, 84, 84);">
                                    <div class="flot-x-axis flot-x1-axis xAxis x1Axis"
                                        style="position: absolute; inset: 0px;">
                                        <div
                                            style="position: absolute; max-width: 155px; top: 334px; font: 400 13px / 15px Overpass, sans-serif; color: rgb(104, 104, 104); left: 28px; text-align: center;">
                                            Jan</div>
                                        <div
                                            style="position: absolute; max-width: 155px; top: 334px; font: 400 13px / 15px Overpass, sans-serif; color: rgb(104, 104, 104); left: 187px; text-align: center;">
                                            Feb</div>
                                        <div
                                            style="position: absolute; max-width: 155px; top: 334px; font: 400 13px / 15px Overpass, sans-serif; color: rgb(104, 104, 104); left: 348px; text-align: center;">
                                            Mar</div>
                                        <div
                                            style="position: absolute; max-width: 155px; top: 334px; font: 400 13px / 15px Overpass, sans-serif; color: rgb(104, 104, 104); left: 509px; text-align: center;">
                                            Apr</div>
                                        <div
                                            style="position: absolute; max-width: 155px; top: 334px; font: 400 13px / 15px Overpass, sans-serif; color: rgb(104, 104, 104); left: 668px; text-align: center;">
                                            May</div>
                                        <div
                                            style="position: absolute; max-width: 155px; top: 334px; font: 400 13px / 15px Overpass, sans-serif; color: rgb(104, 104, 104); left: 826px; text-align: center;">
                                            June</div>
                                        <div
                                            style="position: absolute; max-width: 155px; top: 334px; font: 400 13px / 15px Overpass, sans-serif; color: rgb(104, 104, 104); left: 989px; text-align: center;">
                                            July</div>
                                        <div
                                            style="position: absolute; max-width: 155px; top: 334px; font: 400 13px / 15px Overpass, sans-serif; color: rgb(104, 104, 104); left: 1150px; text-align: center;">
                                            Aug</div>
                                    </div>
                                    <div class="flot-y-axis flot-y1-axis yAxis y1Axis"
                                        style="position: absolute; inset: 0px;">
                                        <div
                                            style="position: absolute; top: 267px; font: 600 11px / 13px Overpass, sans-serif; color: rgb(104, 104, 104); left: 1px; text-align: right;">
                                            $8400k</div>
                                        <div
                                            style="position: absolute; top: 206px; font: 600 11px / 13px Overpass, sans-serif; color: rgb(104, 104, 104); left: 1px; text-align: right;">
                                            $8500k</div>
                                        <div
                                            style="position: absolute; top: 144px; font: 600 11px / 13px Overpass, sans-serif; color: rgb(104, 104, 104); left: 1px; text-align: right;">
                                            $8600k</div>
                                        <div
                                            style="position: absolute; top: 83px; font: 600 11px / 13px Overpass, sans-serif; color: rgb(104, 104, 104); left: 1px; text-align: right;">
                                            $8700k</div>
                                        <div
                                            style="position: absolute; top: 22px; font: 600 11px / 13px Overpass, sans-serif; color: rgb(104, 104, 104); left: 1px; text-align: right;">
                                            $8800k</div>
                                    </div>
                                </div><canvas class="flot-overlay" width="1493" height="421"
                                    style="direction: ltr; position: absolute; left: 0px; top: 0px; width: 1241.71px; height: 350px;"></canvas>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> <!-- row -->

        <div class="row">
            <div class="col-lg-7 col-xl-8 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex justify-content-between align-items-baseline mb-2">
                            <h6 class="card-title mb-0">Monthly sales</h6>
                            <div class="dropdown mb-2">
                                <button class="btn p-0" type="button" id="dropdownMenuButton4" data-toggle="dropdown"
                                    aria-haspopup="true" aria-expanded="false">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round"
                                        class="feather feather-more-horizontal icon-lg text-muted pb-3px">
                                        <circle cx="12" cy="12" r="1"></circle>
                                        <circle cx="19" cy="12" r="1"></circle>
                                        <circle cx="5" cy="12" r="1"></circle>
                                    </svg>
                                </button>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton4">
                                    <a class="dropdown-item d-flex align-items-center" href="#"><svg
                                            xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round" class="feather feather-eye icon-sm mr-2">
                                            <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path>
                                            <circle cx="12" cy="12" r="3"></circle>
                                        </svg> <span class="">View</span></a>
                                    <a class="dropdown-item d-flex align-items-center" href="#"><svg
                                            xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round" class="feather feather-edit-2 icon-sm mr-2">
                                            <path d="M17 3a2.828 2.828 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5L17 3z">
                                            </path>
                                        </svg> <span class="">Edit</span></a>
                                    <a class="dropdown-item d-flex align-items-center" href="#"><svg
                                            xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round" class="feather feather-trash icon-sm mr-2">
                                            <polyline points="3 6 5 6 21 6"></polyline>
                                            <path
                                                d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2">
                                            </path>
                                        </svg> <span class="">Delete</span></a>
                                    <a class="dropdown-item d-flex align-items-center" href="#"><svg
                                            xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round" class="feather feather-printer icon-sm mr-2">
                                            <polyline points="6 9 6 2 18 2 18 9"></polyline>
                                            <path
                                                d="M6 18H4a2 2 0 0 1-2-2v-5a2 2 0 0 1 2-2h16a2 2 0 0 1 2 2v5a2 2 0 0 1-2 2h-2">
                                            </path>
                                            <rect x="6" y="14" width="12" height="8"></rect>
                                        </svg> <span class="">Print</span></a>
                                    <a class="dropdown-item d-flex align-items-center" href="#"><svg
                                            xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round" class="feather feather-download icon-sm mr-2">
                                            <path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"></path>
                                            <polyline points="7 10 12 15 17 10"></polyline>
                                            <line x1="12" y1="15" x2="12" y2="3"></line>
                                        </svg> <span class="">Download</span></a>
                                </div>
                            </div>
                        </div>
                        <p class="text-muted mb-4">Sales are activities related to selling or the number of goods or
                            services sold in a given time period.</p>
                        <div class="monthly-sales-chart-wrapper">
                            <div class="chartjs-size-monitor">
                                <div class="chartjs-size-monitor-expand">
                                    <div class=""></div>
                                </div>
                                <div class="chartjs-size-monitor-shrink">
                                    <div class=""></div>
                                </div>
                            </div>
                            <canvas id="monthly-sales-chart" style="display: block; height: 269px; width: 803px;"
                                width="966" height="323" class="chartjs-render-monitor"></canvas>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-5 col-xl-4 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex justify-content-between align-items-baseline mb-2">
                            <h6 class="card-title mb-0">Cloud storage</h6>
                            <div class="dropdown mb-2">
                                <button class="btn p-0" type="button" id="dropdownMenuButton5" data-toggle="dropdown"
                                    aria-haspopup="true" aria-expanded="false">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round"
                                        class="feather feather-more-horizontal icon-lg text-muted pb-3px">
                                        <circle cx="12" cy="12" r="1"></circle>
                                        <circle cx="19" cy="12" r="1"></circle>
                                        <circle cx="5" cy="12" r="1"></circle>
                                    </svg>
                                </button>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton5">
                                    <a class="dropdown-item d-flex align-items-center" href="#"><svg
                                            xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round" class="feather feather-eye icon-sm mr-2">
                                            <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path>
                                            <circle cx="12" cy="12" r="3"></circle>
                                        </svg> <span class="">View</span></a>
                                    <a class="dropdown-item d-flex align-items-center" href="#"><svg
                                            xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round" class="feather feather-edit-2 icon-sm mr-2">
                                            <path d="M17 3a2.828 2.828 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5L17 3z">
                                            </path>
                                        </svg> <span class="">Edit</span></a>
                                    <a class="dropdown-item d-flex align-items-center" href="#"><svg
                                            xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round" class="feather feather-trash icon-sm mr-2">
                                            <polyline points="3 6 5 6 21 6"></polyline>
                                            <path
                                                d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2">
                                            </path>
                                        </svg> <span class="">Delete</span></a>
                                    <a class="dropdown-item d-flex align-items-center" href="#"><svg
                                            xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round" class="feather feather-printer icon-sm mr-2">
                                            <polyline points="6 9 6 2 18 2 18 9"></polyline>
                                            <path
                                                d="M6 18H4a2 2 0 0 1-2-2v-5a2 2 0 0 1 2-2h16a2 2 0 0 1 2 2v5a2 2 0 0 1-2 2h-2">
                                            </path>
                                            <rect x="6" y="14" width="12" height="8"></rect>
                                        </svg> <span class="">Print</span></a>
                                    <a class="dropdown-item d-flex align-items-center" href="#"><svg
                                            xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round" class="feather feather-download icon-sm mr-2">
                                            <path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"></path>
                                            <polyline points="7 10 12 15 17 10"></polyline>
                                            <line x1="12" y1="15" x2="12" y2="3"></line>
                                        </svg> <span class="">Download</span></a>
                                </div>
                            </div>
                        </div>
                        <div id="progressbar1" class="mx-auto"><svg viewBox="0 0 100 100"
                                style="display: block; width: 100%;">
                                <path d="M 50,50 m 0,-48 a 48,48 0 1 1 0,96 a 48,48 0 1 1 0,-96"
                                    stroke="rgba(77, 138, 240, .1)" stroke-width="1" fill-opacity="0"></path>
                                <path d="M 50,50 m 0,-48 a 48,48 0 1 1 0,96 a 48,48 0 1 1 0,-96" stroke="rgb(114,124,245)"
                                    stroke-width="3.872224" fill-opacity="0"
                                    style="stroke-dasharray: 301.635, 301.635; stroke-dashoffset: 66.3598;"></path>
                            </svg>
                            <div class="progressbar-text"
                                style="position: absolute; left: 50%; top: 50%; padding: 0px; margin: 0px; transform: translate(-50%, -50%); color: rgb(114, 124, 245); font-size: 3rem;">
                                78%</div>
                        </div>
                        <div class="row mt-4 mb-3">
                            <div class="col-6 d-flex justify-content-end">
                                <div>
                                    <label
                                        class="d-flex align-items-center justify-content-end tx-10 text-uppercase font-weight-medium">Total
                                        storage <span class="p-1 ml-1 rounded-circle bg-primary-muted"></span></label>
                                    <h5 class="font-weight-bold mb-0 text-right">8TB</h5>
                                </div>
                            </div>
                            <div class="col-6">
                                <div>
                                    <label class="d-flex align-items-center tx-10 text-uppercase font-weight-medium"><span
                                            class="p-1 mr-1 rounded-circle bg-primary"></span> Used storage</label>
                                    <h5 class="font-weight-bold mb-0">6TB</h5>
                                </div>
                            </div>
                        </div>
                        <button class="btn btn-primary btn-block">Upgrade storage</button>
                    </div>
                </div>
            </div>
        </div> <!-- row -->

        <div class="row">
            <div class="col-lg-5 col-xl-4 grid-margin grid-margin-xl-0 stretch-card">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex justify-content-between align-items-baseline mb-2">
                            <h6 class="card-title mb-0">Inbox</h6>
                            <div class="dropdown mb-2">
                                <button class="btn p-0" type="button" id="dropdownMenuButton6" data-toggle="dropdown"
                                    aria-haspopup="true" aria-expanded="false">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round"
                                        class="feather feather-more-horizontal icon-lg text-muted pb-3px">
                                        <circle cx="12" cy="12" r="1"></circle>
                                        <circle cx="19" cy="12" r="1"></circle>
                                        <circle cx="5" cy="12" r="1"></circle>
                                    </svg>
                                </button>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton6">
                                    <a class="dropdown-item d-flex align-items-center" href="#"><svg
                                            xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round" class="feather feather-eye icon-sm mr-2">
                                            <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path>
                                            <circle cx="12" cy="12" r="3"></circle>
                                        </svg> <span class="">View</span></a>
                                    <a class="dropdown-item d-flex align-items-center" href="#"><svg
                                            xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round" class="feather feather-edit-2 icon-sm mr-2">
                                            <path d="M17 3a2.828 2.828 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5L17 3z">
                                            </path>
                                        </svg> <span class="">Edit</span></a>
                                    <a class="dropdown-item d-flex align-items-center" href="#"><svg
                                            xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round" class="feather feather-trash icon-sm mr-2">
                                            <polyline points="3 6 5 6 21 6"></polyline>
                                            <path
                                                d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2">
                                            </path>
                                        </svg> <span class="">Delete</span></a>
                                    <a class="dropdown-item d-flex align-items-center" href="#"><svg
                                            xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round" class="feather feather-printer icon-sm mr-2">
                                            <polyline points="6 9 6 2 18 2 18 9"></polyline>
                                            <path
                                                d="M6 18H4a2 2 0 0 1-2-2v-5a2 2 0 0 1 2-2h16a2 2 0 0 1 2 2v5a2 2 0 0 1-2 2h-2">
                                            </path>
                                            <rect x="6" y="14" width="12" height="8"></rect>
                                        </svg> <span class="">Print</span></a>
                                    <a class="dropdown-item d-flex align-items-center" href="#"><svg
                                            xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round" class="feather feather-download icon-sm mr-2">
                                            <path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"></path>
                                            <polyline points="7 10 12 15 17 10"></polyline>
                                            <line x1="12" y1="15" x2="12" y2="3"></line>
                                        </svg> <span class="">Download</span></a>
                                </div>
                            </div>
                        </div>
                        <div class="d-flex flex-column">
                            <a href="#" class="d-flex align-items-center border-bottom pb-3">
                                <div class="mr-3">
                                    <img src="https://via.placeholder.com/35x35" class="rounded-circle wd-35" alt="user">
                                </div>
                                <div class="w-100">
                                    <div class="d-flex justify-content-between">
                                        <h6 class="text-body mb-2">Leonardo Payne</h6>
                                        <p class="text-muted tx-12">12.30 PM</p>
                                    </div>
                                    <p class="text-muted tx-13">Hey! there I'm available...</p>
                                </div>
                            </a>
                            <a href="#" class="d-flex align-items-center border-bottom py-3">
                                <div class="mr-3">
                                    <img src="https://via.placeholder.com/35x35" class="rounded-circle wd-35" alt="user">
                                </div>
                                <div class="w-100">
                                    <div class="d-flex justify-content-between">
                                        <h6 class="text-body mb-2">Carl Henson</h6>
                                        <p class="text-muted tx-12">02.14 AM</p>
                                    </div>
                                    <p class="text-muted tx-13">I've finished it! See you so..</p>
                                </div>
                            </a>
                            <a href="#" class="d-flex align-items-center border-bottom py-3">
                                <div class="mr-3">
                                    <img src="https://via.placeholder.com/35x35" class="rounded-circle wd-35" alt="user">
                                </div>
                                <div class="w-100">
                                    <div class="d-flex justify-content-between">
                                        <h6 class="text-body mb-2">Jensen Combs</h6>
                                        <p class="text-muted tx-12">08.22 PM</p>
                                    </div>
                                    <p class="text-muted tx-13">This template is awesome!</p>
                                </div>
                            </a>
                            <a href="#" class="d-flex align-items-center border-bottom py-3">
                                <div class="mr-3">
                                    <img src="https://via.placeholder.com/35x35" class="rounded-circle wd-35" alt="user">
                                </div>
                                <div class="w-100">
                                    <div class="d-flex justify-content-between">
                                        <h6 class="text-body mb-2">Amiah Burton</h6>
                                        <p class="text-muted tx-12">05.49 AM</p>
                                    </div>
                                    <p class="text-muted tx-13">Nice to meet you</p>
                                </div>
                            </a>
                            <a href="#" class="d-flex align-items-center border-bottom py-3">
                                <div class="mr-3">
                                    <img src="https://via.placeholder.com/35x35" class="rounded-circle wd-35" alt="user">
                                </div>
                                <div class="w-100">
                                    <div class="d-flex justify-content-between">
                                        <h6 class="text-body mb-2">Yaretzi Mayo</h6>
                                        <p class="text-muted tx-12">01.19 AM</p>
                                    </div>
                                    <p class="text-muted tx-13">Hey! there I'm available...</p>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-7 col-xl-8 stretch-card">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex justify-content-between align-items-baseline mb-2">
                            <h6 class="card-title mb-0">Projects</h6>
                            <div class="dropdown mb-2">
                                <button class="btn p-0" type="button" id="dropdownMenuButton7" data-toggle="dropdown"
                                    aria-haspopup="true" aria-expanded="false">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round"
                                        class="feather feather-more-horizontal icon-lg text-muted pb-3px">
                                        <circle cx="12" cy="12" r="1"></circle>
                                        <circle cx="19" cy="12" r="1"></circle>
                                        <circle cx="5" cy="12" r="1"></circle>
                                    </svg>
                                </button>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton7">
                                    <a class="dropdown-item d-flex align-items-center" href="#"><svg
                                            xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round" class="feather feather-eye icon-sm mr-2">
                                            <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path>
                                            <circle cx="12" cy="12" r="3"></circle>
                                        </svg> <span class="">View</span></a>
                                    <a class="dropdown-item d-flex align-items-center" href="#"><svg
                                            xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round" class="feather feather-edit-2 icon-sm mr-2">
                                            <path d="M17 3a2.828 2.828 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5L17 3z">
                                            </path>
                                        </svg> <span class="">Edit</span></a>
                                    <a class="dropdown-item d-flex align-items-center" href="#"><svg
                                            xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round" class="feather feather-trash icon-sm mr-2">
                                            <polyline points="3 6 5 6 21 6"></polyline>
                                            <path
                                                d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2">
                                            </path>
                                        </svg> <span class="">Delete</span></a>
                                    <a class="dropdown-item d-flex align-items-center" href="#"><svg
                                            xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round" class="feather feather-printer icon-sm mr-2">
                                            <polyline points="6 9 6 2 18 2 18 9"></polyline>
                                            <path
                                                d="M6 18H4a2 2 0 0 1-2-2v-5a2 2 0 0 1 2-2h16a2 2 0 0 1 2 2v5a2 2 0 0 1-2 2h-2">
                                            </path>
                                            <rect x="6" y="14" width="12" height="8"></rect>
                                        </svg> <span class="">Print</span></a>
                                    <a class="dropdown-item d-flex align-items-center" href="#"><svg
                                            xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round" class="feather feather-download icon-sm mr-2">
                                            <path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"></path>
                                            <polyline points="7 10 12 15 17 10"></polyline>
                                            <line x1="12" y1="15" x2="12" y2="3"></line>
                                        </svg> <span class="">Download</span></a>
                                </div>
                            </div>
                        </div>
                        <div class="table-responsive">
                            <table class="table table-hover mb-0">
                                <thead>
                                    <tr>
                                        <th class="pt-0">#</th>
                                        <th class="pt-0">Project Name</th>
                                        <th class="pt-0">Start Date</th>
                                        <th class="pt-0">Due Date</th>
                                        <th class="pt-0">Status</th>
                                        <th class="pt-0">Assign</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>NobleUI jQuery</td>
                                        <td>01/01/2020</td>
                                        <td>26/04/2020</td>
                                        <td><span class="badge badge-danger">Released</span></td>
                                        <td>Leonardo Payne</td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>NobleUI Angular</td>
                                        <td>01/01/2020</td>
                                        <td>26/04/2020</td>
                                        <td><span class="badge badge-success">Review</span></td>
                                        <td>Carl Henson</td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td>NobleUI ReactJs</td>
                                        <td>01/05/2020</td>
                                        <td>10/09/2020</td>
                                        <td><span class="badge badge-info-muted">Pending</span></td>
                                        <td>Jensen Combs</td>
                                    </tr>
                                    <tr>
                                        <td>4</td>
                                        <td>NobleUI VueJs</td>
                                        <td>01/01/2020</td>
                                        <td>31/11/2020</td>
                                        <td><span class="badge badge-warning">Work in Progress</span>
                                        </td>
                                        <td>Amiah Burton</td>
                                    </tr>
                                    <tr>
                                        <td>5</td>
                                        <td>NobleUI Laravel</td>
                                        <td>01/01/2020</td>
                                        <td>31/12/2020</td>
                                        <td><span class="badge badge-danger-muted text-white">Coming soon</span>
                                        </td>
                                        <td>Yaretzi Mayo</td>
                                    </tr>
                                    <tr>
                                        <td>6</td>
                                        <td>NobleUI NodeJs</td>
                                        <td>01/01/2020</td>
                                        <td>31/12/2020</td>
                                        <td><span class="badge badge-primary">Coming soon</span></td>
                                        <td>Carl Henson</td>
                                    </tr>
                                    <tr>
                                        <td class="border-bottom">3</td>
                                        <td class="border-bottom">NobleUI EmberJs</td>
                                        <td class="border-bottom">01/05/2020</td>
                                        <td class="border-bottom">10/11/2020</td>
                                        <td class="border-bottom"><span class="badge badge-info-muted">Pending</span></td>
                                        <td class="border-bottom">Jensen Combs</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div> <!-- row -->

    </div>
@endsection
