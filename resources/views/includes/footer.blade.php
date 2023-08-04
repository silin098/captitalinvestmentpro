<hr class="text-secondary"/>
<footer class="">


    <div class="d-flex justify-content-between mx-5">
        <ul class="nav">
            <li class="nav-item">
                <a class="nav-link" href="/">
                    <img src="{{url('images/logo12.png')}}"  height="40px"/>

                </a>


            </li>
            <li class="nav-item align-self-center">

             <span class="text-light">&copy; {{now()->year}} Capitalinvestmentpro, Inc</span>


            </li>
        </ul>
        <ul class="nav">
            <li class="nav-item">
                <a class="nav-link text-secondary" href="{{route('about')}}">About Us</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-secondary" href="{{route('contact')}}">Contact Us</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-secondary" href="{{route('career')}}">Careers</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-secondary" href="{{route('terms')}}">Terms</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-secondary" href="{{route('policy')}}">Policy</a>
            </li>

        </ul>

    </div>
</footer>
