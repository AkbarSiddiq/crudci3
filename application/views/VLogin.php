<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <style>
        /* * {
            background-color: #52695d;
        } */

        body {
            background: rgb(133, 172, 107);
            background: linear-gradient(90deg, rgba(133, 172, 107, 1) 0%, rgba(62, 103, 64, 1) 35%, rgba(58, 85, 91, 1) 100%);
        }

        .bg-image-vertical {
            position: relative;
            overflow: hidden;
            background-repeat: no-repeat;
            background-position: right center;
            background-size: auto 100%;
        }

        @media (min-width: 1025px) {
            .h-custom-2 {
                height: 100%;
            }
        }
    </style>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

</head>

<body>
    <section class="vh-100">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-6 text-black">

                    <div class="px-5 ms-xl-4">
                        <i class="fas fa-crow fa-2x me-3 pt-5 mt-xl-4" style="color: #709085;"></i>
                        <span class="h1 fw-bold mb-0">PBO</span>
                    </div>

                    <div class="d-flex align-items-center h-custom-2 px-5 ms-xl-4 mt-5 pt-5 pt-xl-0 mt-xl-n5">

                        <form action="" method="POST" style="width: 23rem;">

                            <h3 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px;">Log in</h3>

                            <div class="form-outline mb-4">
                                <input name="txt_user" id="form2Example18" class="form-control form-control-lg" />
                                <label class="form-label" for="form2Example18">Username</label>
                            </div>

                            <div class="form-outline mb-4">
                                <input type="password" name="txt_pass" id="form2Example28" class="form-control form-control-lg" />
                                <label class="form-label" for="form2Example28">Password</label>
                            </div>

                            <div class="pt-1 mb-4">
                                <button class="btn btn-info btn-lg btn-block" type="submit" name="btn_login" value="Login">Login</button>
                            </div>


                        </form>

                    </div>

                </div>
                <div class="col-sm-6 px-0 d-none d-sm-block">
                    <img src="https://images.unsplash.com/photo-1572702416711-902ec877386d?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8N3x8c3RhdHVlfGVufDB8fDB8fA%3D%3D&auto=format&fit=crop&w=400&q=60" alt="Login image" class="w-100% vh-100" style="object-fit: cover; object-position: left; padding-left: 230px">
                </div>
            </div>
        </div>
    </section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
</body>

</html>