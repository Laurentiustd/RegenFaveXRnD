<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/step1.css') }}">
    <link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet'>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>SignUpStep1</title>
</head>
<body>
  <section class="h-100">
    <div class="container py-5 h-100">
        <div class="col">
            <p class="fw-bold fs-2 text-center mb-2">Register</p>
            <p class="text-center ">Sign Up and Start Learning</p> 
                <div class="card card-registration my-4">
                    <div class="card-body p-md-5 text-black" id="card">
                            
                        <!-- first name & last name -->
                        <form>
                            <div class="row">
                                <div class="col-md-6 mb-4">
                                    <div class="form-outline">
                                        <label class="form-label" for="form3Example1m">First name *</label>
                                        <input type="text" id="form3Example1m" class="form-control" />                                    
                                    </div>
                                </div>
                                <div class="col-md-6 mb-4">
                                    <div class="form-outline form">
                                        <label class="form-label" for="form3Example1n">Last name *</label>
                                        <input type="text" id="form3Example1n" class="form-control"  />
                                    </div>
                                </div>
                            </div>
                        </form>
                            
                        <!-- email  & phone number -->
                        <form>
                            <div class="row">
                                <div class="col-md-6 mb-4">
                                    <div class="form-outline">
                                        <label class="form-label" for="form3Example1m">Email *</label>
                                        <input type="email" id="form3Example1m" class="form-control" placeholder="abcde@gmail.com"/>                                    
                                    </div>
                                </div>
                                <div class="col-md-6 mb-4">
                                    <div class="form-outline">
                                        <label class="form-label" for="form3Example1n">Phone Number *</label>
                                        <input type="text" id="form3Example1n" class="form-control" placeholder="+62 | "/>
                                    </div>
                                </div>
                            </div>
                        </form>
                            
                        <!-- password & confirm password -->
                        <form>
                            <div class="row">
                                <div class="col-md-6 mb-4">
                                    <div class="form-outline">
                                        <label class="form-label" for="form3Example1m">Password *</label>
                                        <input type="password" id="form3Example1m" class="form-control" />                                    
                                    </div>
                                </div>
                                <div class="col-md-6 mb-4">
                                    <div class="form-outline">
                                        <label class="form-label" for="form3Example1n">Confirm Password *</label>
                                        <input type="password" id="form3Example1n" class="form-control" />
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

            <div class="d-flex justify-content-between">
                <button type="button" class="text-muted border-0 bg-transparent" data-mdb-ripple-color="dark"><small>< Back To Login</small></p>
                <button type="button" class="fw-bold border-0 bg-transparent" data-mdb-ripple-color="dark"><small>Next Step ></small></button> 
            </div>
        </div>
    </div>
  </section>
</body>
</html>