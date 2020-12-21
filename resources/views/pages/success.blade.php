<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Success</title>
    @include('includes.style')

</head>
<body>

    <!-- navbar -->

    <div class="container">
        <nav class="row navbar navbar-expand-lg navbar-light bg-white">
            
            <div class="navbar-nav ml-auto mr-auto mr-sm-auto mr-lg-0 mr-md-auto">
                <a href="index.html" class="navbar-brand">
                    <img src="{{ url('frontend/backend/images/logo.png') }}" alt="">
                </a>
            </div>
            <ul class="navbar-nav mr-auto d-none d-lg-block">
                <li>
                    <span class="text-muted">
                        | &nbsp; Beyond the explorer of the world
                    </span>
                </li>
            </ul>
        </nav>
    </div>    

    <main>
        <div class="section-success d-flex align-items-center">
            <div class="col text-center">
                <img src="{{ url('frontend/backend/images/ic_mail.png') }}" alt="">
                <h1>Yay! Success</h1>
                <p>
                    We've sent you email for trip instruction
                    <br>
                    please read it as well
                </p>
                <a href="{{ url('/') }}" class="btn btn-home-page mt-3 px-5">
                    Home Page
                </a>
            </div>
        </div>
    </main>

    @include('includes.script')
    <script>
        $(document).ready(function() {
            
            $('.xzoom, .xzoom-gallery').xzoom ({
                zoomWidth: 500,
                title: false,
                tint: '#333',
                Xoffset: 15
            });

            $('.datepicker').datepicker({
                uiLibrary: 'bootstrap4',
                icons: {
                    rightIcon: '<img src="{{ url('frontend/backend/images/ic_doe.png') }}" />'
                }
            });
        });
    </script>
</body>
</html>