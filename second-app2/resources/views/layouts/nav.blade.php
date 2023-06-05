<nav class="navbar navbar-expand-lg bg-white shadow-lg">
    <div class="container">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        
        <a class="navbar-brand" href="{{Route('fhome')}}">
            Crispy Kitchen
        </a>

        <div class="d-lg-none">
            <button type="button" class="custom-btn btn btn-danger" data-bs-toggle="modal" data-bs-target="#BookingModal">Reservation</button>
        </div>

        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav mx-auto">
                <li class="nav-item">
                    <a class="nav-link active" href="{{Route('fhome')}}">Home</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="{{Route('fabout')}}">Story</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="{{Route('fmenu')}}">Menu</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="{{Route('fnews')}}">Our Updates</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="{{Route('fcontact')}}">Contact</a>
                </li>
            </ul>
        </div>

        <div class="d-none d-lg-block">
            <button type="button" class="custom-btn btn btn-danger" data-bs-toggle="modal" data-bs-target="#BookingModal">Reservation</button>
        </div>

    </div>
</nav>