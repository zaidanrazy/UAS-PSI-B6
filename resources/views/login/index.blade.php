<!DOCTYPE html>

<html lang="en">

<head>
    <link rel="stylesheet" href="{{ asset('assets/css/index.css') }}">
    <title>Login</title>
    <script src="https://unpkg.com/@dotlottie/player-component@latest/dist/dotlottie-player.mjs" type="module"></script>
</head>

<body>



    <section>
        {{-- <div class="animation-container">
            <dotlottie-player src="https://lottie.host/27eb355c-0889-41fd-8e85-6f1cd272220d/L2pUnjqfgs.json"
                background="transparent" speed="1" style="width: 300px; height: 300px;" loop
                autoplay></dotlottie-player>
        </div> --}}

        <div class="form-box ">
            <div class="form-value">
                <form action="{{ route('login.store') }}" method="post">
                    @csrf
                    <h2>Login</h2>
                    <div class="inputbox">
                        <ion-icon name="mail-outline"></ion-icon>
                        <input type="email" required name="email"
                            class="form-control
                        @error('email') is-invalid  @enderror"
                            id="email" placeholder="Email" autofocus required value="{{ old('email') }}">
                        <label for="">Email</label>
                    </div>
                    <div class="inputbox">
                        <ion-icon name="eye-off-outline" class="seep" id="seep"></ion-icon>
                        <input type="password" required id="password"name="password" required>
                        <label for="">Password</label>
                    </div>
                    <div class="forget">
                        <label for=""><input type="checkbox">Remember Me <a href="#">Forget
                                Password</a></label>

                    </div>
                    <button type="submit">Log in</button>
                    <div class="register">
                        <p>Don't have a account <a href="#">Register</a></p>
                    </div>
                </form>
            </div>
        </div>
    </section>

    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    @if (session('failed'))
        <script type="text/javascript">
            let timerInterval;
            Swal.fire({
                title: "Fail!",
                text: "{{ session('failed') }}",
                timer: 500000,
                icon: 'error',
                timerProgressBar: true,
                confirmButtonText: 'Oke',
                didOpen: () => {
                    timerInterval = setInterval(() => {}, 100)
                },
                willClose: () => {

                }
            }).then((result) => {
                if (result.dismiss === Swal.DismissReason.timer) {

                }
            });
        </script>
    @endif
</body>
<script>
    let seep = document.getElementById("seep");
    let password = document.getElementById("password");

    seep.onclick = function() {
        if (password.type === "password") {
            password.type = "text";
            seep.setAttribute("name", "eye-outline");
        } else {
            password.type = "password";
            seep.setAttribute("name", "eye-off-outline");
        }
    };
</script>

</html>
