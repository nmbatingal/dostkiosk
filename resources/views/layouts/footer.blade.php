<footer class="footer">
    <div class="container-fluid">
        <div class="float-left">
            <div class="align-items-center">
                <h1 class="timer-clock timer"></h1>
            </div>
            <div class="align-items-center">
                <h4 class="timer-date"></h4>
            </div>
        </div>
        <div class="float-right text-right">
            <a href="javascript:void(0)">
                <img height="70px" src="{{ asset('images/logo/sftp_qrcode.png') }}">
            </a>
            <br>&copy; 2019.Design & Developed by DOST Caraga.
            <br>All Rights Reserved. 
        </div>
    </div>
</footer>

@push('scripts')
    <script>
        function updateClock()
        {
            var currentTimeString = moment().format('LTS');

            $(".timer").html(currentTimeString);
        }

        function updateDate()
        {
            var currentTimeString = moment().format('dddd, MMM D, YYYY');

            $(".timer-date").html(currentTimeString);
        }

        $(document).ready(function()
        {
            setInterval('updateClock()', 1000);
            setInterval('updateDate()', 1000);
        });
    </script>
@endpush