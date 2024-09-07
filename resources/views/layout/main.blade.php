<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('eliteadmin/plugins/images/favicon.png') }}">

    <title>@yield('title') {{ config('app.name') }}</title>
    <!-- Bootstrap Core CSS -->
    <link href="{{ asset('eliteadmin/bootstrap/dist/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('eliteadmin/plugins/bower_components/bootstrap-extension/css/bootstrap-extension.css') }}" rel="stylesheet">
    <!-- Menu CSS -->
    <link href="{{ asset('eliteadmin/plugins/bower_components/sidebar-nav/dist/sidebar-nav.min.css') }}" rel="stylesheet">
    <!-- vector map CSS -->
    <link href="{{ asset('eliteadmin/plugins/bower_components/vectormap/jquery-jvectormap-2.0.2.css') }}" rel="stylesheet" />
    <link href="{{ asset('eliteadmin/plugins/bower_components/css-chart/css-chart.css') }}" rel="stylesheet">
     <!-- Datatable -->
     <link href="{{ asset('eliteadmin/plugins/bower_components/datatables/jquery.dataTables.min.css') }}" rel="stylesheet" type="text/css" />
     <!-- <link href="https://cdn.datatables.net/buttons/1.2.2/css/buttons.dataTables.min.css" rel="stylesheet" type="text/css" /> -->
     <link href="{{ asset('eliteadmin/plugins/bower_components/datatables/media/css/buttons.dataTables.min.css') }}" rel="stylesheet" type="text/css" />
     <!-- animation CSS -->
    <link href="{{ asset('eliteadmin/css/animate.css') }}" rel="stylesheet">
    <!--alerts CSS -->
    <link href="{{ asset('eliteadmin/plugins/bower_components/sweetalert/sweetalert.css') }}" rel="stylesheet" type="text/css">
    <!-- Custom CSS -->
    <link href="{{ asset('eliteadmin/css/style.css') }}" rel="stylesheet">
    <!-- color CSS -->
    <link href="{{ asset('eliteadmin/css/colors/default.css') }}" id="theme" rel="stylesheet">

    {{-- Toastr notification --}}
    <link rel="stylesheet" type="text/css" href="{{ asset('eliteadmin/plugins/bower_components/toastr/css/toastr.css') }}" >


    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
    @stack('page-styles')

    <script>
    (function(i, s, o, g, r, a, m) {
        i['GoogleAnalyticsObject'] = r;
        i[r] = i[r] || function() {
            (i[r].q = i[r].q || []).push(arguments)
        }, i[r].l = 1 * new Date();
        a = s.createElement(o),
            m = s.getElementsByTagName(o)[0];
        a.async = 1;
        a.src = g;
        m.parentNode.insertBefore(a, m)
    })(window, document, 'script', 'https://www.google-analytics.com/analytics.js', 'ga');

    ga('create', 'UA-19175540-9', 'auto');
    ga('send', 'pageview');
    </script>
</head>

<body>
    <!-- Preloader -->
    <div class="preloader">
        <svg class="circular" viewBox="25 25 50 50">
            <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10" />
        </svg>
    </div>
    <div id="wrapper">
        <!-- Side Bar --!>
            @include('layout.sidebar')
        <!-- End Side Bar -->
        </div>
    </div>
            @yield('modal')
        <!-- Page Content -->
            @yield('content')
        {{-- @yield('content') --}}
    </div>

    <footer class="footer text-center"> 2024 SMBPDS <i class="ti-layout-media-center-alt"></i></footer>
    </div>
        @stack('before-scripts')

        
        <script src="{{ asset('eliteadmin/plugins/bower_components/jquery/dist/jquery.min.js') }}"></script>
        <!-- Bootstrap Core JavaScript -->
        <script src="{{ asset('eliteadmin/bootstrap/dist/js/tether.min.js') }}"></script>
        <script src="{{ asset('eliteadmin/bootstrap/dist/js/bootstrap.min.js') }}"></script>
        <script src="{{ asset('eliteadmin/plugins/bower_components/bootstrap-extension/js/bootstrap-extension.min.js') }}"></script>
        <!-- Menu Plugin JavaScript -->
        <script src="{{ asset('eliteadmin/plugins/bower_components/sidebar-nav/dist/sidebar-nav.min.js') }}"></script>
        <!--slimscroll JavaScript -->
        <script src="{{ asset('eliteadmin/js/jquery.slimscroll.js') }}"></script>
        <!--Wave Effects -->
        <script src="{{ asset('eliteadmin/js/waves.js') }}"></script>
        <!-- Flot Charts JavaScript -->
        <script src="{{ asset('eliteadmin/plugins/bower_components/flot/jquery.flot.js') }}"></script>
        <script src="{{ asset('eliteadmin/plugins/bower_components/flot.tooltip/js/jquery.flot.tooltip.min.js') }}"></script>
        <!-- google maps api -->
        <script src="{{ asset('eliteadmin/plugins/bower_components/vectormap/jquery-jvectormap-2.0.2.min.js') }}"></script>
        <script src="{{ asset('eliteadmin/plugins/bower_components/vectormap/jquery-jvectormap-world-mill-en.js') }}"></script>
        <!-- Sparkline charts -->
        <script src="{{ asset('eliteadmin/plugins/bower_components/jquery-sparkline/jquery.sparkline.min.js') }}"></script>
        <!-- EASY PIE CHART JS -->
        <script src="{{ asset('eliteadmin/plugins/bower_components/jquery.easy-pie-chart/dist/jquery.easypiechart.min.js') }}"></script>
        <script src="{{ asset('eliteadmin/plugins/bower_components/jquery.easy-pie-chart/easy-pie-chart.init.js') }}"></script>
        <!-- Custom Theme JavaScript -->
        <script src="{{ asset('eliteadmin/js/custom.min.js') }}"></script>
        <script src="{{ asset('eliteadmin/js/dashboard2.js') }}"></script>
        <script src="{{ asset('eliteadmin/plugins/bower_components/datatables/jquery.dataTables.min.js') }}"></script>
        <!-- start - This is for export functionality only -->
        <!-- Sweet-Alert  -->
        <script src="{{ asset('eliteadmin/plugins/bower_components/sweetalert/sweetalert.min.js') }}"></script>
        <script src="{{ asset('eliteadmin/plugins/bower_components/sweetalert/jquery.sweet-alert.custom.js') }}"></script>
        
        <!--Style Switcher -->
        <script src="{{ asset('eliteadmin/plugins/bower_components/dataTables.buttons.min.js' ) }}"></script>
        <script src="{{ asset('eliteadmin/plugins/bower_components/buttons.flash.min.js' ) }}"></script>
        <script src="{{ asset('eliteadmin/plugins/bower_components/jszip.min.js' ) }}"></script>
        <script src="{{ asset('eliteadmin/plugins/bower_components/pdfmake.min.js' ) }}"></script>
        <script src="{{ asset('eliteadmin/plugins/bower_components/vfs_fonts.js' ) }}"></script>
        <script src="{{ asset('eliteadmin/plugins/bower_components/buttons.html5.min.js' ) }}"></script>
        <script src="{{ asset('eliteadmin/plugins/bower_components/buttons.print.min.js' ) }}"></script>

        <script type="text/javascript" src="{{ asset('eliteadmin/plugins/bower_components/toastr/js/toastr.min.js') }}"></script>

		<script>
			@if(Session::has('message'))
			var type = "{{ Session::get('alert-type','info') }}"
			switch(type){
				case 'info':
				toastr.info(" {{ Session::get('message') }} ");
				break;

				case 'success':
				toastr.success(" {{ Session::get('message') }} ");
				break;

				case 'warning':
				toastr.warning(" {{ Session::get('message') }} ");
				break;

				case 'error':
				toastr.error(" {{ Session::get('message') }} ");
				break; 
			}
			@endif 
		</script>
            
        @stack('after-scripts')
        <script>
            $(document).ready(function() {
                $('#myTable').DataTable();
                $(document).ready(function() {
                    var table = $('#example').DataTable({
                        "columnDefs": [{
                            "visible": false,
                            "targets": 2
                        }],
                        "order": [
                            [2, 'asc']
                        ],
                        "displayLength": 25,
                        "drawCallback": function(settings) {
                            var api = this.api();
                            var rows = api.rows({
                                page: 'current'
                            }).nodes();
                            var last = null;
        
                            api.column(2, {
                                page: 'current'
                            }).data().each(function(group, i) {
                                if (last !== group) {
                                    $(rows).eq(i).before(
                                        '<tr class="group"><td colspan="5">' + group + '</td></tr>'
                                    );
        
                                    last = group;
                                }
                            });
                        }
                    });
        
                    // Order by the grouping
                    $('#example tbody').on('click', 'tr.group', function() {
                        var currentOrder = table.order()[0];
                        if (currentOrder[0] === 2 && currentOrder[1] === 'asc') {
                            table.order([2, 'desc']).draw();
                        } else {
                            table.order([2, 'asc']).draw();
                        }
                    });
                });
            });
            $('#example23').DataTable({
                dom: 'Bfrtip',
                buttons: [
                    'copy', 'csv', 'excel', 'pdf', 'print'
                ]
            });

        </script>
        <script src="{{ asset('eliteadmin/plugins/bower_components/styleswitcher/jQuery.style.switcher.js') }}"></script>

        
</body>

</html>
