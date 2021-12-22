@extends('layouts.main')
@section('content')
  <!-- BEGIN: Content-->
  <div class="app-content content">
    <div class="content-overlay"></div>
    <div class="header-navbar-shadow"></div>
    <div class="content-wrapper">
        <div class="content-header row">
        </div>
        <div class="content-body">
            <!-- Dashboard Analytics Start -->
            <section id="dashboard-analytics">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12">
                        <div class="card bg-analytics text-white">
                            <div class="card-content">
                                <div class="card-body text-center">
                                    <img src="{{asset('theme/app-assets/images/elements/decore-left.png')}}" class="img-left" alt="
                                               card-img-left">
                                    <img src="{{asset('theme/app-assets/images/elements/decore-right.png')}}" class="img-right" alt="
                                              card-img-right">
                                    <div class="avatar avatar-xl bg-primary shadow mt-0">
                                        <div class="avatar-content">
                                            <i class="feather icon-award white font-large-1"></i>
                                        </div>
                                    </div>
                                    <div class="text-center">
                                        <h1 class="mb-2">Welcome Admin</h1>
                                        <!-- <p class="m-auto w-75">You have done <strong>57.6%</strong> more sales today. Check your new badge in your profile.</p> -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 col-12">
                            <div class="card">
                                <div class="card-header d-flex flex-column align-items-start pb-0">
                                    <div class="avatar bg-rgba-primary p-50 m-0">
                                        <div class="avatar-content">
                                            <i class="feather icon-users text-primary font-medium-5"></i>
                                        </div>
                                    </div>
                                    <h2 class="text-bold-700 mt-1 mb-25">{{$array[0]}}</h2>
                                    <p class="mb-0">Total Tasks</p>
                                </div>
                                <div class="card-content">
                                    <div id="subscribe-gain-chart">
                                    <div id="apexchartsw11329rt" class="apexcharts-canvas apexchartsw11329rt light" style="width: 236px; height: 100px;"><svg id="SvgjsSvg1942" width="236" height="100" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs" class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, 0)" style="background: transparent;"><g id="SvgjsG1944" class="apexcharts-inner apexcharts-graphical" transform="translate(0, 0)"><defs id="SvgjsDefs1943"><clipPath id="gridRectMaskw11329rt"><rect id="SvgjsRect1948" width="238.5" height="102.5" x="-1.25" y="-1.25" rx="0" ry="0" fill="#ffffff" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0"></rect></clipPath><clipPath id="gridRectMarkerMaskw11329rt"><rect id="SvgjsRect1949" width="238" height="102" x="-1" y="-1" rx="0" ry="0" fill="#ffffff" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0"></rect></clipPath><linearGradient id="SvgjsLinearGradient1955" x1="0" y1="0" x2="0" y2="1"><stop id="SvgjsStop1956" stop-opacity="0.7" stop-color="rgba(115,103,240,0.7)" offset="0"></stop><stop id="SvgjsStop1957" stop-opacity="0.5" stop-color="rgba(241,240,254,0.5)" offset="0.8"></stop><stop id="SvgjsStop1958" stop-opacity="0.5" stop-color="rgba(241,240,254,0.5)" offset="1"></stop></linearGradient></defs><line id="SvgjsLine1947" x1="0" y1="0" x2="0" y2="100" stroke="#b6b6b6" stroke-dasharray="3" class="apexcharts-xcrosshairs" x="0" y="0" width="1" height="100" fill="#b1b9c4" filter="none" fill-opacity="0.9" stroke-width="1"></line><g id="SvgjsG1961" class="apexcharts-xaxis" transform="translate(0, 0)"><g id="SvgjsG1962" class="apexcharts-xaxis-texts-g" transform="translate(0, -4)"></g></g><g id="SvgjsG1965" class="apexcharts-grid"><line id="SvgjsLine1967" x1="0" y1="100" x2="236" y2="100" stroke="transparent" stroke-dasharray="0"></line><line id="SvgjsLine1966" x1="0" y1="1" x2="0" y2="100" stroke="transparent" stroke-dasharray="0"></line></g><g id="SvgjsG1951" class="apexcharts-area-series apexcharts-plot-series"><g id="SvgjsG1952" class="apexcharts-series" seriesName="Subscribers" data:longestSeries="true" rel="1" data:realIndex="0"><path id="SvgjsPath1959" d="M 0 100L 0 77.77777777777777C 13.766666666666664 77.77777777777777 25.566666666666663 51.111111111111114 39.33333333333333 51.111111111111114C 53.099999999999994 51.111111111111114 64.89999999999999 60 78.66666666666666 60C 92.43333333333332 60 104.23333333333332 24.444444444444443 117.99999999999999 24.444444444444443C 131.76666666666665 24.444444444444443 143.56666666666666 55.55555555555556 157.33333333333331 55.55555555555556C 171.1 55.55555555555556 182.89999999999998 6.666666666666657 196.66666666666666 6.666666666666657C 210.4333333333333 6.666666666666657 222.23333333333332 17.777777777777786 235.99999999999997 17.777777777777786C 235.99999999999997 17.777777777777786 235.99999999999997 17.777777777777786 235.99999999999997 100M 235.99999999999997 17.777777777777786z" fill="url(#SvgjsLinearGradient1955)" fill-opacity="1" stroke-opacity="1" stroke-linecap="butt" stroke-width="0" stroke-dasharray="0" class="apexcharts-area" index="0" clip-path="url(#gridRectMaskw11329rt)" pathTo="M 0 100L 0 77.77777777777777C 13.766666666666664 77.77777777777777 25.566666666666663 51.111111111111114 39.33333333333333 51.111111111111114C 53.099999999999994 51.111111111111114 64.89999999999999 60 78.66666666666666 60C 92.43333333333332 60 104.23333333333332 24.444444444444443 117.99999999999999 24.444444444444443C 131.76666666666665 24.444444444444443 143.56666666666666 55.55555555555556 157.33333333333331 55.55555555555556C 171.1 55.55555555555556 182.89999999999998 6.666666666666657 196.66666666666666 6.666666666666657C 210.4333333333333 6.666666666666657 222.23333333333332 17.777777777777786 235.99999999999997 17.777777777777786C 235.99999999999997 17.777777777777786 235.99999999999997 17.777777777777786 235.99999999999997 100M 235.99999999999997 17.777777777777786z" pathFrom="M -1 140L -1 140L 39.33333333333333 140L 78.66666666666666 140L 117.99999999999999 140L 157.33333333333331 140L 196.66666666666666 140L 235.99999999999997 140"></path><path id="SvgjsPath1960" d="M 0 77.77777777777777C 13.766666666666664 77.77777777777777 25.566666666666663 51.111111111111114 39.33333333333333 51.111111111111114C 53.099999999999994 51.111111111111114 64.89999999999999 60 78.66666666666666 60C 92.43333333333332 60 104.23333333333332 24.444444444444443 117.99999999999999 24.444444444444443C 131.76666666666665 24.444444444444443 143.56666666666666 55.55555555555556 157.33333333333331 55.55555555555556C 171.1 55.55555555555556 182.89999999999998 6.666666666666657 196.66666666666666 6.666666666666657C 210.4333333333333 6.666666666666657 222.23333333333332 17.777777777777786 235.99999999999997 17.777777777777786" fill="none" fill-opacity="1" stroke="#7367f0" stroke-opacity="1" stroke-linecap="butt" stroke-width="2.5" stroke-dasharray="0" class="apexcharts-area" index="0" clip-path="url(#gridRectMaskw11329rt)" pathTo="M 0 77.77777777777777C 13.766666666666664 77.77777777777777 25.566666666666663 51.111111111111114 39.33333333333333 51.111111111111114C 53.099999999999994 51.111111111111114 64.89999999999999 60 78.66666666666666 60C 92.43333333333332 60 104.23333333333332 24.444444444444443 117.99999999999999 24.444444444444443C 131.76666666666665 24.444444444444443 143.56666666666666 55.55555555555556 157.33333333333331 55.55555555555556C 171.1 55.55555555555556 182.89999999999998 6.666666666666657 196.66666666666666 6.666666666666657C 210.4333333333333 6.666666666666657 222.23333333333332 17.777777777777786 235.99999999999997 17.777777777777786" pathFrom="M -1 140L -1 140L 39.33333333333333 140L 78.66666666666666 140L 117.99999999999999 140L 157.33333333333331 140L 196.66666666666666 140L 235.99999999999997 140"></path><g id="SvgjsG1953" class="apexcharts-series-markers-wrap"><g class="apexcharts-series-markers"><circle id="SvgjsCircle1973" r="0" cx="0" cy="77.77777777777777" class="apexcharts-marker wvpx24tce no-pointer-events" stroke="#ffffff" fill="#7367f0" fill-opacity="1" stroke-width="2" stroke-opacity="0.9" default-marker-size="0"></circle></g></g><g id="SvgjsG1954" class="apexcharts-datalabels"></g></g></g><line id="SvgjsLine1968" x1="0" y1="0" x2="236" y2="0" stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1" class="apexcharts-ycrosshairs"></line><line id="SvgjsLine1969" x1="0" y1="0" x2="236" y2="0" stroke-dasharray="0" stroke-width="0" class="apexcharts-ycrosshairs-hidden"></line><g id="SvgjsG1970" class="apexcharts-yaxis-annotations"></g><g id="SvgjsG1971" class="apexcharts-xaxis-annotations"></g><g id="SvgjsG1972" class="apexcharts-point-annotations"></g></g><rect id="SvgjsRect1946" width="0" height="0" x="0" y="0" rx="0" ry="0" fill="#fefefe" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0"></rect><g id="SvgjsG1963" class="apexcharts-yaxis" rel="0" transform="translate(-21, 0)"><g id="SvgjsG1964" class="apexcharts-yaxis-texts-g"></g></g></svg><div class="apexcharts-legend"></div><div class="apexcharts-tooltip light" style="left: 11px; top: 66px;"><div class="apexcharts-tooltip-series-group active" style="display: flex;"><span class="apexcharts-tooltip-marker" style="background-color: rgb(115, 103, 240);"></span><div class="apexcharts-tooltip-text" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;"><div class="apexcharts-tooltip-y-group"><span class="apexcharts-tooltip-text-label">Subscribers: </span><span class="apexcharts-tooltip-text-value">28</span></div><div class="apexcharts-tooltip-z-group"><span class="apexcharts-tooltip-text-z-label"></span><span class="apexcharts-tooltip-text-z-value"></span></div></div></div></div></div>
                                    </div>
                                </div>
                            </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-12">
                            <div class="card">
                                <div class="card-header d-flex flex-column align-items-start pb-0">
                                    <div class="avatar bg-rgba-primary p-50 m-0">
                                        <div class="avatar-content">
                                            <i class="feather icon-users text-primary font-medium-5"></i>
                                        </div>
                                    </div>
                                    <h2 class="text-bold-700 mt-1 mb-25">{{$array[1]}}</h2>
                                    <p class="mb-0">Total Biddings</p>
                                </div>
                                <div class="card-content">
                                    <div id="subscribe-gain-chart">
                                    <div id="apexchartsw11329rt" class="apexcharts-canvas apexchartsw11329rt light" style="width: 236px; height: 100px;"><svg id="SvgjsSvg1942" width="236" height="100" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs" class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, 0)" style="background: transparent;"><g id="SvgjsG1944" class="apexcharts-inner apexcharts-graphical" transform="translate(0, 0)"><defs id="SvgjsDefs1943"><clipPath id="gridRectMaskw11329rt"><rect id="SvgjsRect1948" width="238.5" height="102.5" x="-1.25" y="-1.25" rx="0" ry="0" fill="#ffffff" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0"></rect></clipPath><clipPath id="gridRectMarkerMaskw11329rt"><rect id="SvgjsRect1949" width="238" height="102" x="-1" y="-1" rx="0" ry="0" fill="#ffffff" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0"></rect></clipPath><linearGradient id="SvgjsLinearGradient1955" x1="0" y1="0" x2="0" y2="1"><stop id="SvgjsStop1956" stop-opacity="0.7" stop-color="rgba(115,103,240,0.7)" offset="0"></stop><stop id="SvgjsStop1957" stop-opacity="0.5" stop-color="rgba(241,240,254,0.5)" offset="0.8"></stop><stop id="SvgjsStop1958" stop-opacity="0.5" stop-color="rgba(241,240,254,0.5)" offset="1"></stop></linearGradient></defs><line id="SvgjsLine1947" x1="0" y1="0" x2="0" y2="100" stroke="#b6b6b6" stroke-dasharray="3" class="apexcharts-xcrosshairs" x="0" y="0" width="1" height="100" fill="#b1b9c4" filter="none" fill-opacity="0.9" stroke-width="1"></line><g id="SvgjsG1961" class="apexcharts-xaxis" transform="translate(0, 0)"><g id="SvgjsG1962" class="apexcharts-xaxis-texts-g" transform="translate(0, -4)"></g></g><g id="SvgjsG1965" class="apexcharts-grid"><line id="SvgjsLine1967" x1="0" y1="100" x2="236" y2="100" stroke="transparent" stroke-dasharray="0"></line><line id="SvgjsLine1966" x1="0" y1="1" x2="0" y2="100" stroke="transparent" stroke-dasharray="0"></line></g><g id="SvgjsG1951" class="apexcharts-area-series apexcharts-plot-series"><g id="SvgjsG1952" class="apexcharts-series" seriesName="Subscribers" data:longestSeries="true" rel="1" data:realIndex="0"><path id="SvgjsPath1959" d="M 0 100L 0 77.77777777777777C 13.766666666666664 77.77777777777777 25.566666666666663 51.111111111111114 39.33333333333333 51.111111111111114C 53.099999999999994 51.111111111111114 64.89999999999999 60 78.66666666666666 60C 92.43333333333332 60 104.23333333333332 24.444444444444443 117.99999999999999 24.444444444444443C 131.76666666666665 24.444444444444443 143.56666666666666 55.55555555555556 157.33333333333331 55.55555555555556C 171.1 55.55555555555556 182.89999999999998 6.666666666666657 196.66666666666666 6.666666666666657C 210.4333333333333 6.666666666666657 222.23333333333332 17.777777777777786 235.99999999999997 17.777777777777786C 235.99999999999997 17.777777777777786 235.99999999999997 17.777777777777786 235.99999999999997 100M 235.99999999999997 17.777777777777786z" fill="url(#SvgjsLinearGradient1955)" fill-opacity="1" stroke-opacity="1" stroke-linecap="butt" stroke-width="0" stroke-dasharray="0" class="apexcharts-area" index="0" clip-path="url(#gridRectMaskw11329rt)" pathTo="M 0 100L 0 77.77777777777777C 13.766666666666664 77.77777777777777 25.566666666666663 51.111111111111114 39.33333333333333 51.111111111111114C 53.099999999999994 51.111111111111114 64.89999999999999 60 78.66666666666666 60C 92.43333333333332 60 104.23333333333332 24.444444444444443 117.99999999999999 24.444444444444443C 131.76666666666665 24.444444444444443 143.56666666666666 55.55555555555556 157.33333333333331 55.55555555555556C 171.1 55.55555555555556 182.89999999999998 6.666666666666657 196.66666666666666 6.666666666666657C 210.4333333333333 6.666666666666657 222.23333333333332 17.777777777777786 235.99999999999997 17.777777777777786C 235.99999999999997 17.777777777777786 235.99999999999997 17.777777777777786 235.99999999999997 100M 235.99999999999997 17.777777777777786z" pathFrom="M -1 140L -1 140L 39.33333333333333 140L 78.66666666666666 140L 117.99999999999999 140L 157.33333333333331 140L 196.66666666666666 140L 235.99999999999997 140"></path><path id="SvgjsPath1960" d="M 0 77.77777777777777C 13.766666666666664 77.77777777777777 25.566666666666663 51.111111111111114 39.33333333333333 51.111111111111114C 53.099999999999994 51.111111111111114 64.89999999999999 60 78.66666666666666 60C 92.43333333333332 60 104.23333333333332 24.444444444444443 117.99999999999999 24.444444444444443C 131.76666666666665 24.444444444444443 143.56666666666666 55.55555555555556 157.33333333333331 55.55555555555556C 171.1 55.55555555555556 182.89999999999998 6.666666666666657 196.66666666666666 6.666666666666657C 210.4333333333333 6.666666666666657 222.23333333333332 17.777777777777786 235.99999999999997 17.777777777777786" fill="none" fill-opacity="1" stroke="#7367f0" stroke-opacity="1" stroke-linecap="butt" stroke-width="2.5" stroke-dasharray="0" class="apexcharts-area" index="0" clip-path="url(#gridRectMaskw11329rt)" pathTo="M 0 77.77777777777777C 13.766666666666664 77.77777777777777 25.566666666666663 51.111111111111114 39.33333333333333 51.111111111111114C 53.099999999999994 51.111111111111114 64.89999999999999 60 78.66666666666666 60C 92.43333333333332 60 104.23333333333332 24.444444444444443 117.99999999999999 24.444444444444443C 131.76666666666665 24.444444444444443 143.56666666666666 55.55555555555556 157.33333333333331 55.55555555555556C 171.1 55.55555555555556 182.89999999999998 6.666666666666657 196.66666666666666 6.666666666666657C 210.4333333333333 6.666666666666657 222.23333333333332 17.777777777777786 235.99999999999997 17.777777777777786" pathFrom="M -1 140L -1 140L 39.33333333333333 140L 78.66666666666666 140L 117.99999999999999 140L 157.33333333333331 140L 196.66666666666666 140L 235.99999999999997 140"></path><g id="SvgjsG1953" class="apexcharts-series-markers-wrap"><g class="apexcharts-series-markers"><circle id="SvgjsCircle1973" r="0" cx="0" cy="77.77777777777777" class="apexcharts-marker wvpx24tce no-pointer-events" stroke="#ffffff" fill="#7367f0" fill-opacity="1" stroke-width="2" stroke-opacity="0.9" default-marker-size="0"></circle></g></g><g id="SvgjsG1954" class="apexcharts-datalabels"></g></g></g><line id="SvgjsLine1968" x1="0" y1="0" x2="236" y2="0" stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1" class="apexcharts-ycrosshairs"></line><line id="SvgjsLine1969" x1="0" y1="0" x2="236" y2="0" stroke-dasharray="0" stroke-width="0" class="apexcharts-ycrosshairs-hidden"></line><g id="SvgjsG1970" class="apexcharts-yaxis-annotations"></g><g id="SvgjsG1971" class="apexcharts-xaxis-annotations"></g><g id="SvgjsG1972" class="apexcharts-point-annotations"></g></g><rect id="SvgjsRect1946" width="0" height="0" x="0" y="0" rx="0" ry="0" fill="#fefefe" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0"></rect><g id="SvgjsG1963" class="apexcharts-yaxis" rel="0" transform="translate(-21, 0)"><g id="SvgjsG1964" class="apexcharts-yaxis-texts-g"></g></g></svg><div class="apexcharts-legend"></div><div class="apexcharts-tooltip light" style="left: 11px; top: 66px;"><div class="apexcharts-tooltip-series-group active" style="display: flex;"><span class="apexcharts-tooltip-marker" style="background-color: rgb(115, 103, 240);"></span><div class="apexcharts-tooltip-text" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;"><div class="apexcharts-tooltip-y-group"><span class="apexcharts-tooltip-text-label">Subscribers: </span><span class="apexcharts-tooltip-text-value">28</span></div><div class="apexcharts-tooltip-z-group"><span class="apexcharts-tooltip-text-z-label"></span><span class="apexcharts-tooltip-text-z-value"></span></div></div></div></div></div>
                                    </div>
                                </div>
                            </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-12">
                            <div class="card">
                                <div class="card-header d-flex flex-column align-items-start pb-0">
                                    <div class="avatar bg-rgba-primary p-50 m-0">
                                        <div class="avatar-content">
                                            <i class="feather icon-users text-primary font-medium-5"></i>
                                        </div>
                                    </div>
                                    <h2 class="text-bold-700 mt-1 mb-25">{{$array[2]}}</h2>
                                    <p class="mb-0">Completed Tasks</p>
                                </div>
                                <div class="card-content">
                                    <div id="subscribe-gain-chart">
                                    <div id="apexchartsw11329rt" class="apexcharts-canvas apexchartsw11329rt light" style="width: 236px; height: 100px;"><svg id="SvgjsSvg1942" width="236" height="100" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs" class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, 0)" style="background: transparent;"><g id="SvgjsG1944" class="apexcharts-inner apexcharts-graphical" transform="translate(0, 0)"><defs id="SvgjsDefs1943"><clipPath id="gridRectMaskw11329rt"><rect id="SvgjsRect1948" width="238.5" height="102.5" x="-1.25" y="-1.25" rx="0" ry="0" fill="#ffffff" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0"></rect></clipPath><clipPath id="gridRectMarkerMaskw11329rt"><rect id="SvgjsRect1949" width="238" height="102" x="-1" y="-1" rx="0" ry="0" fill="#ffffff" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0"></rect></clipPath><linearGradient id="SvgjsLinearGradient1955" x1="0" y1="0" x2="0" y2="1"><stop id="SvgjsStop1956" stop-opacity="0.7" stop-color="rgba(115,103,240,0.7)" offset="0"></stop><stop id="SvgjsStop1957" stop-opacity="0.5" stop-color="rgba(241,240,254,0.5)" offset="0.8"></stop><stop id="SvgjsStop1958" stop-opacity="0.5" stop-color="rgba(241,240,254,0.5)" offset="1"></stop></linearGradient></defs><line id="SvgjsLine1947" x1="0" y1="0" x2="0" y2="100" stroke="#b6b6b6" stroke-dasharray="3" class="apexcharts-xcrosshairs" x="0" y="0" width="1" height="100" fill="#b1b9c4" filter="none" fill-opacity="0.9" stroke-width="1"></line><g id="SvgjsG1961" class="apexcharts-xaxis" transform="translate(0, 0)"><g id="SvgjsG1962" class="apexcharts-xaxis-texts-g" transform="translate(0, -4)"></g></g><g id="SvgjsG1965" class="apexcharts-grid"><line id="SvgjsLine1967" x1="0" y1="100" x2="236" y2="100" stroke="transparent" stroke-dasharray="0"></line><line id="SvgjsLine1966" x1="0" y1="1" x2="0" y2="100" stroke="transparent" stroke-dasharray="0"></line></g><g id="SvgjsG1951" class="apexcharts-area-series apexcharts-plot-series"><g id="SvgjsG1952" class="apexcharts-series" seriesName="Subscribers" data:longestSeries="true" rel="1" data:realIndex="0"><path id="SvgjsPath1959" d="M 0 100L 0 77.77777777777777C 13.766666666666664 77.77777777777777 25.566666666666663 51.111111111111114 39.33333333333333 51.111111111111114C 53.099999999999994 51.111111111111114 64.89999999999999 60 78.66666666666666 60C 92.43333333333332 60 104.23333333333332 24.444444444444443 117.99999999999999 24.444444444444443C 131.76666666666665 24.444444444444443 143.56666666666666 55.55555555555556 157.33333333333331 55.55555555555556C 171.1 55.55555555555556 182.89999999999998 6.666666666666657 196.66666666666666 6.666666666666657C 210.4333333333333 6.666666666666657 222.23333333333332 17.777777777777786 235.99999999999997 17.777777777777786C 235.99999999999997 17.777777777777786 235.99999999999997 17.777777777777786 235.99999999999997 100M 235.99999999999997 17.777777777777786z" fill="url(#SvgjsLinearGradient1955)" fill-opacity="1" stroke-opacity="1" stroke-linecap="butt" stroke-width="0" stroke-dasharray="0" class="apexcharts-area" index="0" clip-path="url(#gridRectMaskw11329rt)" pathTo="M 0 100L 0 77.77777777777777C 13.766666666666664 77.77777777777777 25.566666666666663 51.111111111111114 39.33333333333333 51.111111111111114C 53.099999999999994 51.111111111111114 64.89999999999999 60 78.66666666666666 60C 92.43333333333332 60 104.23333333333332 24.444444444444443 117.99999999999999 24.444444444444443C 131.76666666666665 24.444444444444443 143.56666666666666 55.55555555555556 157.33333333333331 55.55555555555556C 171.1 55.55555555555556 182.89999999999998 6.666666666666657 196.66666666666666 6.666666666666657C 210.4333333333333 6.666666666666657 222.23333333333332 17.777777777777786 235.99999999999997 17.777777777777786C 235.99999999999997 17.777777777777786 235.99999999999997 17.777777777777786 235.99999999999997 100M 235.99999999999997 17.777777777777786z" pathFrom="M -1 140L -1 140L 39.33333333333333 140L 78.66666666666666 140L 117.99999999999999 140L 157.33333333333331 140L 196.66666666666666 140L 235.99999999999997 140"></path><path id="SvgjsPath1960" d="M 0 77.77777777777777C 13.766666666666664 77.77777777777777 25.566666666666663 51.111111111111114 39.33333333333333 51.111111111111114C 53.099999999999994 51.111111111111114 64.89999999999999 60 78.66666666666666 60C 92.43333333333332 60 104.23333333333332 24.444444444444443 117.99999999999999 24.444444444444443C 131.76666666666665 24.444444444444443 143.56666666666666 55.55555555555556 157.33333333333331 55.55555555555556C 171.1 55.55555555555556 182.89999999999998 6.666666666666657 196.66666666666666 6.666666666666657C 210.4333333333333 6.666666666666657 222.23333333333332 17.777777777777786 235.99999999999997 17.777777777777786" fill="none" fill-opacity="1" stroke="#7367f0" stroke-opacity="1" stroke-linecap="butt" stroke-width="2.5" stroke-dasharray="0" class="apexcharts-area" index="0" clip-path="url(#gridRectMaskw11329rt)" pathTo="M 0 77.77777777777777C 13.766666666666664 77.77777777777777 25.566666666666663 51.111111111111114 39.33333333333333 51.111111111111114C 53.099999999999994 51.111111111111114 64.89999999999999 60 78.66666666666666 60C 92.43333333333332 60 104.23333333333332 24.444444444444443 117.99999999999999 24.444444444444443C 131.76666666666665 24.444444444444443 143.56666666666666 55.55555555555556 157.33333333333331 55.55555555555556C 171.1 55.55555555555556 182.89999999999998 6.666666666666657 196.66666666666666 6.666666666666657C 210.4333333333333 6.666666666666657 222.23333333333332 17.777777777777786 235.99999999999997 17.777777777777786" pathFrom="M -1 140L -1 140L 39.33333333333333 140L 78.66666666666666 140L 117.99999999999999 140L 157.33333333333331 140L 196.66666666666666 140L 235.99999999999997 140"></path><g id="SvgjsG1953" class="apexcharts-series-markers-wrap"><g class="apexcharts-series-markers"><circle id="SvgjsCircle1973" r="0" cx="0" cy="77.77777777777777" class="apexcharts-marker wvpx24tce no-pointer-events" stroke="#ffffff" fill="#7367f0" fill-opacity="1" stroke-width="2" stroke-opacity="0.9" default-marker-size="0"></circle></g></g><g id="SvgjsG1954" class="apexcharts-datalabels"></g></g></g><line id="SvgjsLine1968" x1="0" y1="0" x2="236" y2="0" stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1" class="apexcharts-ycrosshairs"></line><line id="SvgjsLine1969" x1="0" y1="0" x2="236" y2="0" stroke-dasharray="0" stroke-width="0" class="apexcharts-ycrosshairs-hidden"></line><g id="SvgjsG1970" class="apexcharts-yaxis-annotations"></g><g id="SvgjsG1971" class="apexcharts-xaxis-annotations"></g><g id="SvgjsG1972" class="apexcharts-point-annotations"></g></g><rect id="SvgjsRect1946" width="0" height="0" x="0" y="0" rx="0" ry="0" fill="#fefefe" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0"></rect><g id="SvgjsG1963" class="apexcharts-yaxis" rel="0" transform="translate(-21, 0)"><g id="SvgjsG1964" class="apexcharts-yaxis-texts-g"></g></g></svg><div class="apexcharts-legend"></div><div class="apexcharts-tooltip light" style="left: 11px; top: 66px;"><div class="apexcharts-tooltip-series-group active" style="display: flex;"><span class="apexcharts-tooltip-marker" style="background-color: rgb(115, 103, 240);"></span><div class="apexcharts-tooltip-text" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;"><div class="apexcharts-tooltip-y-group"><span class="apexcharts-tooltip-text-label">Subscribers: </span><span class="apexcharts-tooltip-text-value">28</span></div><div class="apexcharts-tooltip-z-group"><span class="apexcharts-tooltip-text-z-label"></span><span class="apexcharts-tooltip-text-z-value"></span></div></div></div></div></div>
                                    </div>
                                </div>
                            </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-12">
                            <div class="card">
                                <div class="card-header d-flex flex-column align-items-start pb-0">
                                    <div class="avatar bg-rgba-primary p-50 m-0">
                                        <div class="avatar-content">
                                            <i class="feather icon-users text-primary font-medium-5"></i>
                                        </div>
                                    </div>
                                    <h2 class="text-bold-700 mt-1 mb-25">{{$array[3]}}</h2>
                                    <p class="mb-0">Total Users</p>
                                </div>
                                <div class="card-content">
                                    <div id="subscribe-gain-chart">
                                    <div id="apexchartsw11329rt" class="apexcharts-canvas apexchartsw11329rt light" style="width: 236px; height: 100px;"><svg id="SvgjsSvg1942" width="236" height="100" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs" class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, 0)" style="background: transparent;"><g id="SvgjsG1944" class="apexcharts-inner apexcharts-graphical" transform="translate(0, 0)"><defs id="SvgjsDefs1943"><clipPath id="gridRectMaskw11329rt"><rect id="SvgjsRect1948" width="238.5" height="102.5" x="-1.25" y="-1.25" rx="0" ry="0" fill="#ffffff" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0"></rect></clipPath><clipPath id="gridRectMarkerMaskw11329rt"><rect id="SvgjsRect1949" width="238" height="102" x="-1" y="-1" rx="0" ry="0" fill="#ffffff" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0"></rect></clipPath><linearGradient id="SvgjsLinearGradient1955" x1="0" y1="0" x2="0" y2="1"><stop id="SvgjsStop1956" stop-opacity="0.7" stop-color="rgba(115,103,240,0.7)" offset="0"></stop><stop id="SvgjsStop1957" stop-opacity="0.5" stop-color="rgba(241,240,254,0.5)" offset="0.8"></stop><stop id="SvgjsStop1958" stop-opacity="0.5" stop-color="rgba(241,240,254,0.5)" offset="1"></stop></linearGradient></defs><line id="SvgjsLine1947" x1="0" y1="0" x2="0" y2="100" stroke="#b6b6b6" stroke-dasharray="3" class="apexcharts-xcrosshairs" x="0" y="0" width="1" height="100" fill="#b1b9c4" filter="none" fill-opacity="0.9" stroke-width="1"></line><g id="SvgjsG1961" class="apexcharts-xaxis" transform="translate(0, 0)"><g id="SvgjsG1962" class="apexcharts-xaxis-texts-g" transform="translate(0, -4)"></g></g><g id="SvgjsG1965" class="apexcharts-grid"><line id="SvgjsLine1967" x1="0" y1="100" x2="236" y2="100" stroke="transparent" stroke-dasharray="0"></line><line id="SvgjsLine1966" x1="0" y1="1" x2="0" y2="100" stroke="transparent" stroke-dasharray="0"></line></g><g id="SvgjsG1951" class="apexcharts-area-series apexcharts-plot-series"><g id="SvgjsG1952" class="apexcharts-series" seriesName="Subscribers" data:longestSeries="true" rel="1" data:realIndex="0"><path id="SvgjsPath1959" d="M 0 100L 0 77.77777777777777C 13.766666666666664 77.77777777777777 25.566666666666663 51.111111111111114 39.33333333333333 51.111111111111114C 53.099999999999994 51.111111111111114 64.89999999999999 60 78.66666666666666 60C 92.43333333333332 60 104.23333333333332 24.444444444444443 117.99999999999999 24.444444444444443C 131.76666666666665 24.444444444444443 143.56666666666666 55.55555555555556 157.33333333333331 55.55555555555556C 171.1 55.55555555555556 182.89999999999998 6.666666666666657 196.66666666666666 6.666666666666657C 210.4333333333333 6.666666666666657 222.23333333333332 17.777777777777786 235.99999999999997 17.777777777777786C 235.99999999999997 17.777777777777786 235.99999999999997 17.777777777777786 235.99999999999997 100M 235.99999999999997 17.777777777777786z" fill="url(#SvgjsLinearGradient1955)" fill-opacity="1" stroke-opacity="1" stroke-linecap="butt" stroke-width="0" stroke-dasharray="0" class="apexcharts-area" index="0" clip-path="url(#gridRectMaskw11329rt)" pathTo="M 0 100L 0 77.77777777777777C 13.766666666666664 77.77777777777777 25.566666666666663 51.111111111111114 39.33333333333333 51.111111111111114C 53.099999999999994 51.111111111111114 64.89999999999999 60 78.66666666666666 60C 92.43333333333332 60 104.23333333333332 24.444444444444443 117.99999999999999 24.444444444444443C 131.76666666666665 24.444444444444443 143.56666666666666 55.55555555555556 157.33333333333331 55.55555555555556C 171.1 55.55555555555556 182.89999999999998 6.666666666666657 196.66666666666666 6.666666666666657C 210.4333333333333 6.666666666666657 222.23333333333332 17.777777777777786 235.99999999999997 17.777777777777786C 235.99999999999997 17.777777777777786 235.99999999999997 17.777777777777786 235.99999999999997 100M 235.99999999999997 17.777777777777786z" pathFrom="M -1 140L -1 140L 39.33333333333333 140L 78.66666666666666 140L 117.99999999999999 140L 157.33333333333331 140L 196.66666666666666 140L 235.99999999999997 140"></path><path id="SvgjsPath1960" d="M 0 77.77777777777777C 13.766666666666664 77.77777777777777 25.566666666666663 51.111111111111114 39.33333333333333 51.111111111111114C 53.099999999999994 51.111111111111114 64.89999999999999 60 78.66666666666666 60C 92.43333333333332 60 104.23333333333332 24.444444444444443 117.99999999999999 24.444444444444443C 131.76666666666665 24.444444444444443 143.56666666666666 55.55555555555556 157.33333333333331 55.55555555555556C 171.1 55.55555555555556 182.89999999999998 6.666666666666657 196.66666666666666 6.666666666666657C 210.4333333333333 6.666666666666657 222.23333333333332 17.777777777777786 235.99999999999997 17.777777777777786" fill="none" fill-opacity="1" stroke="#7367f0" stroke-opacity="1" stroke-linecap="butt" stroke-width="2.5" stroke-dasharray="0" class="apexcharts-area" index="0" clip-path="url(#gridRectMaskw11329rt)" pathTo="M 0 77.77777777777777C 13.766666666666664 77.77777777777777 25.566666666666663 51.111111111111114 39.33333333333333 51.111111111111114C 53.099999999999994 51.111111111111114 64.89999999999999 60 78.66666666666666 60C 92.43333333333332 60 104.23333333333332 24.444444444444443 117.99999999999999 24.444444444444443C 131.76666666666665 24.444444444444443 143.56666666666666 55.55555555555556 157.33333333333331 55.55555555555556C 171.1 55.55555555555556 182.89999999999998 6.666666666666657 196.66666666666666 6.666666666666657C 210.4333333333333 6.666666666666657 222.23333333333332 17.777777777777786 235.99999999999997 17.777777777777786" pathFrom="M -1 140L -1 140L 39.33333333333333 140L 78.66666666666666 140L 117.99999999999999 140L 157.33333333333331 140L 196.66666666666666 140L 235.99999999999997 140"></path><g id="SvgjsG1953" class="apexcharts-series-markers-wrap"><g class="apexcharts-series-markers"><circle id="SvgjsCircle1973" r="0" cx="0" cy="77.77777777777777" class="apexcharts-marker wvpx24tce no-pointer-events" stroke="#ffffff" fill="#7367f0" fill-opacity="1" stroke-width="2" stroke-opacity="0.9" default-marker-size="0"></circle></g></g><g id="SvgjsG1954" class="apexcharts-datalabels"></g></g></g><line id="SvgjsLine1968" x1="0" y1="0" x2="236" y2="0" stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1" class="apexcharts-ycrosshairs"></line><line id="SvgjsLine1969" x1="0" y1="0" x2="236" y2="0" stroke-dasharray="0" stroke-width="0" class="apexcharts-ycrosshairs-hidden"></line><g id="SvgjsG1970" class="apexcharts-yaxis-annotations"></g><g id="SvgjsG1971" class="apexcharts-xaxis-annotations"></g><g id="SvgjsG1972" class="apexcharts-point-annotations"></g></g><rect id="SvgjsRect1946" width="0" height="0" x="0" y="0" rx="0" ry="0" fill="#fefefe" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0"></rect><g id="SvgjsG1963" class="apexcharts-yaxis" rel="0" transform="translate(-21, 0)"><g id="SvgjsG1964" class="apexcharts-yaxis-texts-g"></g></g></svg><div class="apexcharts-legend"></div><div class="apexcharts-tooltip light" style="left: 11px; top: 66px;"><div class="apexcharts-tooltip-series-group active" style="display: flex;"><span class="apexcharts-tooltip-marker" style="background-color: rgb(115, 103, 240);"></span><div class="apexcharts-tooltip-text" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;"><div class="apexcharts-tooltip-y-group"><span class="apexcharts-tooltip-text-label">Subscribers: </span><span class="apexcharts-tooltip-text-value">28</span></div><div class="apexcharts-tooltip-z-group"><span class="apexcharts-tooltip-text-z-label"></span><span class="apexcharts-tooltip-text-z-value"></span></div></div></div></div></div>
                                    </div>
                                </div>
                            </div>
                    </div>
                </div>
                      
                    
            </section>
            <!-- Dashboard Analytics end -->

        </div>
    </div>
</div>
<!-- END: Content-->
<script src="{{asset('theme/app-assets/vendors/js/charts/apexcharts.min.js')}}"></script>
<script src="{{asset('theme/app-assets/vendors/js/extensions/tether.min.js')}}"></script>
   <script src="{{asset('theme/app-assets/vendors/js/extensions/shepherd.min.js')}}"></script>
@endsection
