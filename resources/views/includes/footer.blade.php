{{--<hr class="text-secondary"/>--}}
{{--<footer class="">--}}


{{--    <div class="d-flex justify-content-between mx-5">--}}
{{--        <ul class="nav">--}}
{{--            <li class="nav-item">--}}
{{--                <a class="nav-link" href="/">--}}
{{--                    <img src="{{url('images/logo12.png')}}"  height="40px"/>--}}

{{--                </a>--}}


{{--            </li>--}}
{{--            <li class="nav-item align-self-center">--}}

{{--             <span class="text-light">&copy; {{now()->year}} Capitalinvestmentpro, Inc</span>--}}


{{--            </li>--}}
{{--        </ul>--}}
{{--        <ul class="nav">--}}
{{--            <li class="nav-item">--}}
{{--                <a class="nav-link text-secondary" href="{{route('about')}}">About Us</a>--}}
{{--            </li>--}}
{{--            <li class="nav-item">--}}
{{--                <a class="nav-link text-secondary" href="{{route('contact')}}">Contact Us</a>--}}
{{--            </li>--}}
{{--            <li class="nav-item">--}}
{{--                <a class="nav-link text-secondary" href="{{route('career')}}">Careers</a>--}}
{{--            </li>--}}
{{--            <li class="nav-item">--}}
{{--                <a class="nav-link text-secondary" href="{{route('terms')}}">Terms</a>--}}
{{--            </li>--}}
{{--            <li class="nav-item">--}}
{{--                <a class="nav-link text-secondary" href="{{route('policy')}}">Policy</a>--}}
{{--            </li>--}}

{{--        </ul>--}}

{{--    </div>--}}
{{--</footer>--}}

<footer class="d-flex flex-wrap justify-content-between align-items-center p-3 my-4 border-top border-secondary">
    <div class="col-md-4 d-flex align-items-center ms-md-5">
        <a href="/" class="mb-3 me-2 mb-md-0 text-body-secondary text-decoration-none lh-1">
            <img src="{{url('images/logo12.png')}}"   height="30"/>
        </a>
        <span class="mb-3 mb-md-0 text-light">© {{now()->year}} Capitalinvestmentpro, Inc</span>
    </div>

    <ul class="nav col-md-4 justify-content-end list-unstyled d-flex me-md-5">
        <li class="ms-3"><a class="text-secondary" href="{{route('about')}}">About</a></li>
        <li class="ms-3"><a class="text-secondary" href="{{route('contact')}}">Contact</a></li>
        <li class="ms-3"><a class="text-secondary" href="{{route('career')}}">Careers</a></li>
        <li class="ms-3"><a class="text-secondary" href="{{route('policy')}}">Policy</a></li>
        <li class="ms-3"><a class="text-secondary" href="#">Careers</a></li>

    </ul>
</footer>
