@stack('scripts')

<script src="{{ asset('assets') }}/jquery-3.6.0.min.js"></script>
<script src="{{ asset('assets') }}/js/jquery.min.js"></script>
<script src="{{ asset('assets') }}/js/popper.min.js"></script>
<script src="{{ asset('assets') }}/js/moment.min.js"></script>
<script src="{{ asset('assets') }}/js/bootstrap.min.js"></script>
<script src="{{ asset('assets') }}/js/simplebar.min.js"></script>
<script src='{{ asset('assets') }}/js/daterangepicker.js'></script>
<script src='{{ asset('assets') }}/js/jquery.stickOnScroll.js'></script>
<script src="{{ asset('assets') }}/js/tinycolor-min.js"></script>
<script src="{{ asset('assets') }}/js/config.js"></script>
<script src="{{ asset('assets') }}/js/d3.min.js"></script>
<script src="{{ asset('assets') }}/js/topojson.min.js"></script>
<script src="{{ asset('assets') }}/js/datamaps.all.min.js"></script>
<script src="{{ asset('assets') }}/js/datamaps-zoomto.js"></script>
<script src="{{ asset('assets') }}/js/datamaps.custom.js"></script>
<script src="{{ asset('assets') }}/js/Chart.min.js"></script>
<script src="{{ asset('assets') }}/js/gauge.min.js"></script>
<script src="{{ asset('assets') }}/js/jquery.sparkline.min.js"></script>
<script src="{{ asset('assets') }}/js/apexcharts.min.js"></script>
<script src="{{ asset('assets') }}/js/apexcharts.custom.js"></script>
<script src='{{ asset('assets') }}/js/jquery.mask.min.js'></script>
<script src='{{ asset('assets') }}/js/select2.min.js'></script>
<script src='{{ asset('assets') }}/js/jquery.steps.min.js'></script>
<script src='{{ asset('assets') }}/js/jquery.validate.min.js'></script>
<script src='{{ asset('assets') }}/js/jquery.timepicker.js'></script>
<script src='{{ asset('assets') }}/js/dropzone.min.js'></script>
<script src='{{ asset('assets') }}/js/uppy.min.js'></script>
<script src='{{ asset('assets') }}/js/quill.min.js'></script>

{{--<script>--}}
{{--    $(document).ready(function () {--}}

{{--        // =========================== MARK ALL NOTIFICATIONS TO READ--}}
{{--        $(document).on('click', ".notificationsIcon", function () {--}}
{{--            $.ajax({--}}
{{--                url: "{{ route('admin.notifications.read') }}", // Blade directive to output the route--}}
{{--                method: 'GET',--}}
{{--                success: function (response) {--}}
{{--                    $("#notificationsIconCounter").load(" #notificationsIconCounter > *");--}}
{{--                    $("#notificationsModal").load(" #notificationsModal > *");--}}
{{--                },--}}
{{--                error: function (xhr, status, error) {--}}
{{--                    console.error('AJAX Error:', xhr.responseText || error); // Log the error for debugging--}}
{{--                    alert('An error occurred. Please try again.');--}}
{{--                }--}}
{{--            });--}}
{{--        });--}}

{{--        // =========================== CLEAR ALL NOTIFICATIONS--}}
{{--        $(document).on('click', "#clearNotifications", function () {--}}
{{--            $.ajax({--}}
{{--                url: "{{ route('admin.notifications.clear') }}", // Correctly generate the route URL--}}
{{--                method: 'GET',--}}
{{--                success: function (response) {--}}
{{--                    $("#notificationsIconCounter").load(" #notificationsIconCounter > *");--}}
{{--                    $("#notificationsModal").load(" #notificationsModal > *");--}}
{{--                },--}}
{{--                error: function (xhr, status, error) {--}}
{{--                    console.error('AJAX Error:', xhr.responseText || error); // Log the error for debugging--}}
{{--                    alert('An error occurred. Please try again.');--}}
{{--                }--}}
{{--            });--}}
{{--        });--}}

{{--    });--}}

{{--</script>--}}

{{--//==============Wrong Way of synchronizing--}}
{{--<script>--}}
{{--    setInterval(() => {--}}
{{--        console.log('Muhammed');--}}
{{--        $("#notificationsIconCounter").load(window.location.href + " #notificationsIconCounter > *");--}}
{{--        $("#notificationsModal").load(window.location.href + " #notificationsModal > *");--}}
{{--    }, 5000);--}}
{{--</script>--}}
