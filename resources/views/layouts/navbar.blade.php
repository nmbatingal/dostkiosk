<nav class="navbar navbar-color-on-scroll navbar-transparent fixed-top navbar-expand-lg" color-on-scroll="100" id="sectionsNav">
    <div class="container-fluid">
        <div class="navbar-translate">
            <div class="btn-group">
                <a href="{{ url('/') }}" class="btn btn-success btn-raised btn-lg">
                    <i class="fa fa-home"></i> Home
                </a>
                <a href="#" class="btn btn-lg btn-success dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <span class="sr-only">Toggle Dropdown</span>
                </a>
                <div class="dropdown-menu">
                    <a class="dropdown-item" href="{{ route('drrm.index') }}">STI on DRRM and Environment</a>
                    <a class="dropdown-item" href="{{ route('msme.index') }}">STI on Community and MSMEs</a>
                    <a class="dropdown-item" href="{{ route('health.index') }}">STI on Health</a>
                    <a class="dropdown-item" href="{{ route('academe.index') }}">STI on Youth and Academe</a>
                </div>
            </div>

            <a href="#more-sti" class="btn btn-warning btn-raised btn-lg">
                <i class="fa fa-arrow-down"></i> More on STI
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