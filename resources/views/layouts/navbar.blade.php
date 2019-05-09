<nav class="navbar navbar-color-on-scroll navbar-transparent fixed-top navbar-expand-lg" color-on-scroll="100" id="sectionsNav">
    <div class="container-fluid">
        <div class="navbar-translate">
            <a href="{{ url()->previous() }}" class="btn btn-info btn-raised btn-lg">
                <i class="fa fa-chevron-left"></i> Back
            </a>
            <a href="{{ url('/') }}" class="btn btn-success btn-raised btn-lg">
                <i class="fa fa-home"></i> Home
            </a>
        </div>
        <div class="collapse navbar-collapse">
            <div class="navbar-nav ml-auto">
                <div class="align-items-center">
                    <h1 class="timer-clock timer"></h1>
                </div>
            </div>
          </div>
    </div>
</nav>