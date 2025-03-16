<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="{{ asset('img/logoumrah.png') }}" rel="icon">
    <!-- Bootstrap CSS -->
    <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet">
    <!-- FontAwesome CSS -->
    <link href="{{ asset('assets/css/all.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/uf-style.css') }}" rel="stylesheet">
    <link href="{{ asset('plugins/sweetalert2/sweetalert2.css') }}" rel="stylesheet">
    <title>ADMAKA</title>
</head>

<body>
    <div class="uf-form-signin">
        <div class="text-center">
            <a href="{{ route('come') }}"><img src="{{ asset('img/logoadmakaputih.png') }}" alt="" width="100"
                    height="100"></a>
            <h1 class="text-white h3">ADMAKA LOGIN</h1>
        </div>
        <form class="mt-4" action="{{ route('proses-login') }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="input-group uf-input-group input-group-lg mb-3">
                <span class="input-group-text fa fa-user"></span>
                <input type="text" class="form-control" id="username" name="username" placeholder="Username" required>
            </div>
            <div class="input-group uf-input-group input-group-lg mb-3">
                <span class="input-group-text fa fa-lock"></span>
                <input type="password" class="form-control" id="password" name="password" placeholder="Password"
                    required>
            </div>

            <div class="d-grid mb-4">
                <button type="submit" class="btn uf-btn-primary btn-lg">Login</button>
            </div>
        </form>
    </div>

    <!-- JavaScript -->

    <!-- Separate Popper and Bootstrap JS -->
    <script src="{{ asset('assets/js/popper.min.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('plugins/sweetalert2/sweetalert2.all.min.js') }}"></script>
    @if (session()->has('status'))
    <script>
        const message = "{{ session('message') }}";
        const status = "{{ session('status') }}";

        var toast = Swal.mixin({
            toast: true,
            position: 'top-end',
            showConfirmButton: false,
            timer: 5000,
            padding: '2em'
        });

        if (status == false || status == "" || status == "0") {
            toast.fire({
                icon: 'warning',
                title: message,
                padding: '2em'
            });
        } else {
            toast.fire({
                icon: 'success',
                title: message,
                padding: '2em'
            });

            var container = document.querySelector(".container");
            if (container) {
                container.classList.add("sign-up-mode");
            }
        }
    </script>
    @endif
</body>

</html>