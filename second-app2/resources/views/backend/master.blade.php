@include('backend.includes.header')
@include('backend.includes.top-nav')
      
        <div id="layoutSidenav">
            @include('backend.includes.sidenav')
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        
                        @yield('main-content')
                        
                    </div>
                </main>

                @include('backend.includes.copyrite')
               
            </div>
        </div>

 @include('backend.includes.footer')