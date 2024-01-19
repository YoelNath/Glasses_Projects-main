<link rel="stylesheet" href="./Glassespedia/oneGiantCard.css" />
@include('./components/bsNav')
<div class="background">
    <div>
        <h1 class="mt-3">Glasses Pedia</h1>
        <div class="login">
            <form>
                <h1 class="mt-3 text-center">REGISTER</h1>
                <div class="row mb-2">
                    <div class="col">
                        <label for="completeName" class="form-label">Complete Name</label>
                        <input type="text" class="form-control" id="completeName"
                            aria-describedby="completeNameHelp">
                    </div>

                </div>
                <div class="row">
                    <div class="col-5">
                        <label class="form-label" for="inputGroupSelect01">Gender</label>
                        <div class="input-group">
                            <select class="custom-select form-control" id="inputGroupSelect01">
                                <option selected>Choose ...</option>
                                <option value="1">Male</option>
                                <option value="2">Female</option>
                                <option value="3">Undisclosed</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-7">
                        <label for="exampleInputPassword1" class="form-label">Date of Birth</label>
                        <input type="date" class="form-control" id="exampleInputPassword1">
                    </div>
                </div>
                <div class="row mb-2">
                    <div class="col">
                        <label for="exampleInputPassword1" class="form-label">Email</label>
                        <input type="email" class="form-control" id="exampleInputPassword1">
                    </div>
                </div>
                <div class="row mb-2">
                    <div class="col">
                        <label for="exampleInputPassword1" class="form-label">Phone Number</label>
                        <input type="tel" class="form-control" id="exampleInputPassword1">
                    </div>
                </div>
                <hr>
                <div class="row mb-2">
                    <div class="col">
                        <label for="exampleInputPassword1" class="form-label">Password</label>
                        <input type="password" class="form-control" id="exampleInputPassword1">
                    </div>
                </div>
                <div class="row mb-2">
                    <div class="col">
                        <label for="exampleInputPassword1" class="form-label">Confirm Password</label>
                        <input type="password" class="form-control" id="exampleInputPassword1">
                    </div>
                </div>
                <hr>
                <div class="row mb-2">
                    <div class="col">
                        <label for="exampleInputPassword1" class="form-label">Address</label>
                        <textarea class="form-control" id="exampleInputPassword1"></textarea>
                    </div>
                </div>
                <div class="row mb-2">
                    <div class="col">
                        <label for="exampleInputPassword1" class="form-label">City</label>
                        <input type="text" class="form-control" id="exampleInputPassword1">
                    </div>
                    <div class="col">
                        <label for="exampleInputPassword1" class="form-label">Province</label>
                        <input type="text" class="form-control" id="exampleInputPassword1">
                    </div>
                    <div class="col">
                        <label for="exampleInputPassword1" class="form-label">Country</label>
                        <input type="text" class="form-control" id="exampleInputPassword1">
                    </div>
                </div>
                <hr>
                <div class="mb-3 form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">I agree to the terms and conditions</label>
                </div>
                <div class="d-flex align-content-center justify-content-center w-100 flex-column text-color-beige mt-5">
                    <a href="/" class="btn btn-primary px-5 py-2 mx-auto">Register</a>
                    <a href="/login" class="text-decoration-underline text-center mt-3" style="color: white">
                        Have
                        an
                        account</a>
                </div>

            </form>
        </div>
    </div>
</div>
@include('./components/footer')
