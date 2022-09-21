<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <link href="login.css" rel="stylesheet">
    <title>Login Page</title>
</head>

<body>
    <div class="row">
        <div class="col-4">
            <div class="card border-0">
                <img class="img-fluid" style="height:100vh;"
                    src="https://images.unsplash.com/photo-1643017680149-9c019ac75e83?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=687&q=80">
                <div class="card-img-overlay">
                    <div class="d-flex justify-content-center text-light display-4">
                        Join us now
                        To continue your shopping Experience.

                    </div>
                    <div class="d-flex mt-5">
                        <a href="index.html" class="btn btn-outline-light ic">Return to Home Page</a>
                    </div>
                </div>
            </div>

        </div>
        <div class="col-8">
            <form class="needs-collection" novalidate>
                <table class="mt-5 ms-5">

                    <tbody>
                        <tr>
                            <td><label for="validationCustom01" class="form-label me-5">First name</label></td>
                            <td><label for="validationCustom02" class="form-label ms-5">Last name</label></td>
                        </tr>
                        <tr>
                            <td> <input type="text" class="form-control border-primary border-2" id="validationCustom01"
                                    value="Mark" required>
                                <div class="valid-feedback">
                                    Looks good!
                                </div>
                            </td>
                            <td>
                                <input type="text" class="form-control ms-5 border-primary border-2"
                                    id="validationCustom02" value="Otto" required>
                                <div class="valid-feedback">
                                    Looks good!
                                </div>
                            </td>

                        </tr>
                        <tr>
                            <td>
                                <label for="validationCustomUsername" class="form-label mt-5">Username</label>
                                <div class="input-group has-validation">
                                    <span class="input-group-text border-primary border-2"
                                        id="inputGroupPrepend">@</span>
                                    <input type="text" class="form-control border-primary border-2"
                                        id="validationCustomUsername" aria-describedby="inputGroupPrepend" required>
                                    <div class="invalid-feedback">
                                        Please choose a username.
                                    </div>
                                </div>
                            </td>
                            <td>
                                <label for="validationCustom03" class="form-label ms-5 mt-5 border-2">Phone No.</label>
                                <input type="text" class="form-control ms-5 border-primary border-2"
                                    id="validationCustom03" required>
                                <div class="invalid-feedback">
                                    Please provide a Phone No.
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label for="validationCustom04" class="form-label mt-5">City</label>
                                <input type="text" class="form-control border-primary border-2" id="validationCustom03"
                                    required>
                                <div class="invalid-feedback">
                                    Please provide a valid city.
                                </div>
                            </td>
                            <td>
                                <label for="validationCustom05" class="form-label mt-5 ms-5">State</label>
                                <select class="form-select ms-5 border-primary border-2" id="validationCustom05"
                                    value="Chandigarh" required>
                                    <option selected disabled>Choose City...</option>
                                    <option>Mohali</option>
                                    <option>Delhi</option>
                                    <option>Mumbai</option>
                                    <option>Bangalore</option>
                                </select>
                                <div class="invalid-feedback">
                                    Please select a valid state.
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>

                <div class="text-left"><br>
                    <div class="form-check">
                        <input class="form-check-input border-primary" type="checkbox" value="" id="invalidCheck"
                            required>
                        <label class="form-check-label" for="invalidCheck">
                            Agree to terms and conditions
                        </label>
                        <div class="invalid-feedback">
                            You must agree before submitting.
                        </div><br>
                    </div>

                </div>
                <div class="d-flex " style="margin-left:32%;">
                    <button class="btn btn-primary btn-block " type="submit">Register</button>

                </div>
            </form>
        </div>
    </div>
    <!-- <div class="masthead" style="background-image: url('https://i.ytimg.com/vi/j_TQns44Qhk/maxresdefault.jpg');">
        <div class="color-overlay d-flex 
    justify-content-center align-items-center">
            <div class="container">
                <p id="header">LOGIN</p>

                <div class="col-md-12 mb-2">
                    <label for="validationCustomUsername" class="form-label">Username</label>
                    <div class="input-group has-validation">
                      <span class="input-group-text" id="inputGroupPrepend">@</span>
                      <input type="text" class="form-control" id="validationCustomUsername" aria-describedby="inputGroupPrepend" required>
                      <div class="invalid-feedback">
                        Please choose a username.
                      </div>
                    </div>
                  </div>
                <div class="form-floating">
                    <input type="password" class="form-control" id="floatingPassword" placeholder="Password">
                    <label for="floatingPassword">Password</label>
                </div>
                <div class="form-check mt-3">
                    <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                    <label class="form-check-label" for="defaultCheck1">
                        Remember Me
                    </label>
                    <span role="button" class="text-danger" tabindex="0">Forgot Password?</span>
                </div>
                <div class="button mt-3">
                    <button type="button" class="btn btn-outline-primary">Log In</button>
                </div>
                <div class="info mt-5">
                    <h4 >Login</h4>
                    <p>With your social media account</p>
                </div>
                <div class="mediabtn">
                <button type="button" class="btn btn-info mediabtn-1"><svg xmlns="http://www.w3.org/2000/svg" width="16"
                        height="16" fill="currentColor" class="bi bi-twitter mb-1" viewBox="0 0 16 16">
                        <path
                            d="M5.026 15c6.038 0 9.341-5.003 9.341-9.334 0-.14 0-.282-.006-.422A6.685 6.685 0 0 0 16 3.542a6.658 6.658 0 0 1-1.889.518 3.301 3.301 0 0 0 1.447-1.817 6.533 6.533 0 0 1-2.087.793A3.286 3.286 0 0 0 7.875 6.03a9.325 9.325 0 0 1-6.767-3.429 3.289 3.289 0 0 0 1.018 4.382A3.323 3.323 0 0 1 .64 6.575v.045a3.288 3.288 0 0 0 2.632 3.218 3.203 3.203 0 0 1-.865.115 3.23 3.23 0 0 1-.614-.057 3.283 3.283 0 0 0 3.067 2.277A6.588 6.588 0 0 1 .78 13.58a6.32 6.32 0 0 1-.78-.045A9.344 9.344 0 0 0 5.026 15z" />
                    </svg>Twitter</button>

                <button type="button" class="btn btn-primary mediabtn-2"><svg xmlns="http://www.w3.org/2000/svg" width="16"
                        height="16" fill="currentColor" class="bi bi-facebook mb-1" viewBox="0 0 16 16">
                        <path
                            d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z" />
                    </svg>Facebook</button>
                <button type="button" class="btn btn-danger mediabtn-3"><svg xmlns="http://www.w3.org/2000/svg" width="16"
                        height="16" fill="currentColor" class="bi bi-google mb-1" viewBox="0 0 16 16">
                        <path
                            d="M15.545 6.558a9.42 9.42 0 0 1 .139 1.626c0 2.434-.87 4.492-2.384 5.885h.002C11.978 15.292 10.158 16 8 16A8 8 0 1 1 8 0a7.689 7.689 0 0 1 5.352 2.082l-2.284 2.284A4.347 4.347 0 0 0 8 3.166c-2.087 0-3.86 1.408-4.492 3.304a4.792 4.792 0 0 0 0 3.063h.003c.635 1.893 2.405 3.301 4.492 3.301 1.078 0 2.004-.276 2.722-.764h-.003a3.702 3.702 0 0 0 1.599-2.431H8v-3.08h7.545z" />
                    </svg>Google+</button>
                </div>
                <hr>
                <p class="d-flex justify-content-center" style="white-space: nowrap;">Don't have an account?<span role="button" class="text-danger d-flex justify-content-center " tabindex="0">&nbspRegister Now!</span></p>
                <div class="text-center">
                <button type="button" class="btn btn-info " style="width: 120px;">Info</button></div>
            </div>
        </div>
    </div> -->

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
    <script>
        // Example starter JavaScript for disabling form submissions if there are invalid fields
        (function () {
            'use strict'

            // Fetch all the forms we want to apply custom Bootstrap validation styles to
            var forms = document.querySelectorAll('.needs-validation')

            // Loop over them and prevent submission
            Array.prototype.slice.call(forms)
                .forEach(function (form) {
                    form.addEventListener('submit', function (event) {
                        if (!form.checkValidity()) {
                            event.preventDefault()
                            event.stopPropagation()
                        }

                        form.classList.add('was-validated')
                    }, false)
                })
        })()
    </script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
</body>

</html>