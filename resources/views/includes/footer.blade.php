<footer class="d-flex  justify-content-between align-items-center  border-top border-secondary">
    <div class="col-md-4 d-flex  my-3 ms-md-5 ">
        <a href="/" class="mb-3 me-2 mb-md-0 text-body-secondary text-decoration-none lh-1">
            <img src="{{url('images/logo12.png')}}"   height="30"/>
        </a>
        <span class="mb-3 mb-md-0 text-light">© {{now()->year}} Capitalinvestmenro, Inc</span>
    </div>

    <ul class="nav col-md-4 justify-content-end list-unstyled d-flex me-md-5">
        <li class="ms-3"><a class="text-secondary" href="{{route('about')}}">About</a></li>
        <li class="ms-3"><a class="text-secondary" href="{{route('contact')}}">Contact</a></li>
        <li class="ms-3"><a class="text-secondary" href="{{route('career')}}">Careers</a></li>
        <li class="ms-3"><a class="text-secondary" href="{{route('policy')}}">Policy</a></li>
        <li>
            <a  class="ms-3 text-light me-2 me-md-2" href="https://t.me/JayK454"><i class="fa-brands fa-telegram fa-2xl"></i></a>
        </li>
        <li>
            <a  class="ms-2 text-light me-md-2" href="https://wa.me/+66612790081"><i class="fa-brands fa-whatsapp fa-2xl"></i></a>
        </li>

    </ul>

</footer>
