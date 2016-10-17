<nav class="navbar navbar-default">
    <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <a href="{{ route('home') }}" class="navbar-brand">Games Collection</a>
    </div>
    {{--Collect the nav links--}}
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <ul class="nav navbar-nav">
            <li class="{{ Request::is('/') ? "active" : ""}}"><a href="{{ url('/') }}">Home <span
                            class="sr-only">(current)</span></a></li>
        </ul>
    </div>
</nav>