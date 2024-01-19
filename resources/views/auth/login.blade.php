<link rel="stylesheet" href="./Glassespedia/oneGiantCard.css" />
@include('./components/bsNav')
<div class="background">
    <div>
        <h1 class="mt-3">Glasses Pedia</h1>
        <div class="login">
            <form>
                <div class="mb-3">
                    <h1 class="mt-3 text-center">Login</h1>
                    <label for="exampleInputEmail1" class="form-label">Email address</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    <div id="emailHelp" class="form-text" style="color: white">We'll never share your email with anyone
                        else.
                    </div>
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Password</label>
                    <input type="password" class="form-control" id="exampleInputPassword1">
                </div>
                <div class="mb-3 form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">Remember Me</label>
                </div>
                <div class="d-flex align-content-center justify-content-center w-100 flex-column text-color-beige">
                    <a href="/" class="btn btn-primary px-5 py-2 mx-auto">Login</a>
                    <a href="/register" class="text-decoration-underline text-center mt-3" style="color: white">Don't
                        have
                        an
                        account</a>
                </div>

            </form>
        </div>
    </div>

</div>
@include('./components/footer')
