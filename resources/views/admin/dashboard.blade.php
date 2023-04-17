@extends('layouts.app')
@section('content')

<style type="text/css">
	.dataTables_length, .dataTables_filter {
		display: none;
	}
</style>
 <!-- Container-fluid starts-->
<div class="container-fluid">
    <div class="page-header">
        <div class="row">
            <div class="col-lg-6">
                <div class="page-header-left">
                    <h3>Dashboard
                    </h3>
                </div>
            </div>
            <div class="col-lg-6">
                <ol class="breadcrumb pull-right">
                    <li class="breadcrumb-item"><a href="{{ url('/dashboard') }}"><i data-feather="home"></i></a></li>
                    <li class="breadcrumb-item active">Dashboard</li>
                </ol>
            </div>
        </div>
    </div>
</div>
<!-- Container-fluid Ends-->

<!-- Container-fluid starts-->
<div class="container-fluid">
    <div class="row">
        <div class="col-xl-3 col-md-6 xl-50">
            <div class="card o-hidden widget-cards">
                <div class="bg-warning card-body">
                    <div class="media static-top-widget row">
                        <div class="icons-widgets col-4">
                            <div class="align-self-center text-center"><i data-feather="dollar-sign" class="font-warning"></i></div>
                        </div>
                        <div class="media-body col-8"><span class="m-0">Total Sales</span>
                            <h3 class="mb-0">MYR <span class="counter"></span></h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-md-6 xl-50">
            <div class="card o-hidden  widget-cards">
                <div class="bg-secondary card-body">
                    <div class="media static-top-widget row">
                        <div class="icons-widgets col-4">
                            <div class="align-self-center text-center"><i data-feather="file-text" class="font-secondary"></i></div>
                        </div>
                        <div class="media-body col-8"><span class="m-0">Total Bookings</span>
                            <h3 class="mb-0"> <span class="counter"></span></h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-md-6 xl-50">
            <div class="card o-hidden widget-cards">
                <div class="bg-primary card-body">
                    <div class="media static-top-widget row">
                        <div class="icons-widgets col-4">
                            <div class="align-self-center text-center"><i data-feather="users" class="font-primary"></i></div>
                        </div>
                        <div class="media-body col-8"><span class="m-0">Total Vendors</span>
                            <h3 class="mb-0"> <span class="counter"></span></h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-md-6 xl-50">
            <div class="card o-hidden widget-cards">
                <div class="bg-danger card-body">
                    <div class="media static-top-widget row">
                        <div class="icons-widgets col-4">
                            <div class="align-self-center text-center"><i data-feather="box" class="font-danger"></i></div>
                        </div>
                        <div class="media-body col-8"><span class="m-0">Total Services</span>
                            <h3 class="mb-0"><span class="counter"></span></h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg-6">
            <div class="card">
                <div class="card-header">
                    <h5> Total Sales Per Month</h5>
                </div>
                <div class="card-body">
                    <div class="sales-chart"></div>
                </div>
            </div>
        </div>
        <div class="col-lg-6">
            <div class="card">
                <div class="card-header">
                    <h5> Latest Bookings</h5>
                </div>
                <div class="card-body">
                    <table class="table table-bordernone">
                        <thead>
                        <tr>
                            <th scope="col">Order ID</th>
                            <th scope="col">Order Total</th>
                            <th scope="col">Payment Method</th>
                            <th scope="col">Status</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>1</td>
                            <td class="digits">$120.00</td>
                            <td class="font-danger">Bank Transfers</td>
                            <td class="digits">On Way</td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td class="digits">$90.00</td>
                            <td class="font-secondary">Ewallets</td>
                            <td class="digits">Delivered</td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td class="digits">$240.00</td>
                            <td class="font-warning">Cash</td>
                            <td class="digits">Delivered</td>
                        </tr>
                        <tr>
                            <td>4</td>
                            <td class="digits">$120.00</td>
                            <td class="font-primary">Direct Deposit</td>
                            <td class="digits">$6523</td>
                        </tr>
                        <tr>
                            <td>5</td>
                            <td class="digits">$50.00</td>
                            <td class="font-primary">Bank Transfers</td>
                            <td class="digits">Delivered</td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection


@push('custom-js')
   
<script src="{{ asset('assets/js/chart/chartist/chartist.js')}}"></script>

<!--chartjs js-->
<script src="{{ asset('assets/js/chart/chartjs/chart.min.js')}}"></script>

<script type="text/javascript">

// chartjs chart
Chart.defaults.global = {
    animation: true,
    animationSteps: 60,
    animationEasing: "easeOutIn",
    showScale: true,
    scaleOverride: false,
    scaleSteps: null,
    scaleStepWidth: null,
    scaleStartValue: null,
    scaleLineColor: "#eeeeee",
    scaleLineWidth: 1,
    scaleShowLabels: true,
    scaleLabel: "<%=value%>",
    scaleIntegersOnly: true,
    scaleBeginAtZero: false,
    scaleFontSize: 12,
    scaleFontStyle: "normal",
    scaleFontColor: "#717171",
    responsive: true,
    maintainAspectRatio: true,
    showTooltips: true,
    multiTooltipTemplate: "<%= value %>",
    tooltipFillColor: "#333333",
    tooltipEvents: ["mousemove", "touchstart", "touchmove"],
    tooltipTemplate: "<%if (label){%><%=label%>: <%}%><%= value %>",
    tooltipFontSize: 14,
    tooltipFontStyle: "normal",
    tooltipFontColor: "#fff",
    tooltipTitleFontSize: 16,
    TitleFontStyle : "Raleway",
    tooltipTitleFontStyle: "bold",
    tooltipTitleFontColor: "#ffffff",
    tooltipYPadding: 10,
    tooltipXPadding: 10,
    tooltipCaretSize: 8,
    tooltipCornerRadius: 6,
    tooltipXOffset: 5,
    onAnimationProgress: function() {},
    onAnimationComplete: function() {}
};

//sales-purchase chart
new Chartist.Bar('.sales-chart', {
        labels: ['100', '200', '300', '400', '500', '600', '700', '800'],
        series: [
            [2.5, 3, 3, 0.9, 1.3, 1.8, 3.8, 1.5],
            [3.8, 1.8, 4.3, 2.3, 3.6, 2.8, 2.8, 2.8]
        ]
    },
    {
        seriesBarDistance: 2,
        chartPadding: {
            left: 0,
            right: 0,
            bottom: 0,
        },
        axisX: {
            showGrid: false,
            labelInterpolationFnc: function(value) {
                return value[0];
            }
        }
    }, [
        ['screen and (min-width: 300px)', {
            seriesBarDistance: 15,
            axisX: {
                labelInterpolationFnc: function(value) {
                    return value.slice(0, 3);
                }
            }
        }],
        ['screen and (min-width: 600px)', {
            seriesBarDistance: 12,
            axisX: {
                labelInterpolationFnc: Chartist.noop
            }
        }]
    ]);
</script>

@endpush
