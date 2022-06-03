 <!-- Libs JS -->
 <script src="{{asset('dist/libs/apexcharts/dist/apexcharts.min.js')}}"></script>
 <script src="{{asset('dist/libs/jsvectormap/dist/js/jsvectormap.min.js')}}"></script>
 <script src="{{asset('dist/libs/jsvectormap/dist/maps/world.js')}}"></script>
 <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
 <!-- Tabler Core -->
 <script src="{{asset('dist/js/tabler.min.js')}}"></script>
 <script src="{{asset('dist/js/demo.min.js')}}"></script>

<script>
    $('#logout' ).click(function (e) {
        e.preventDefault()
        $.ajax({
            type: 'POST',
            url: 'logout ',
            data: {
                '_token': '{{ csrf_token() }}'
            },
        success: function () {
            window.location.href='/'
            },
        })
    })
</script>

 @stack('extra-scripts')