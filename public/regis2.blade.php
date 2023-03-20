<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/step1.css') }}">
    <!-- <link rel="stylesheet" href="step2.css"> -->
    <link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet'>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>SignUpStep2</title>
</head>
<body>
  <section class="h-100">
    <div class="container py-5 h-100">
        <div class="col">
          <div class="card card-registration my-4">
           
                <div class="card-body p-md-5 text-black" id="card">
                    
                 
                  <form>
                        <div class="row">
                            <div class="col-md-6 mb-4">
                                <div class="form-outline">
                                    <label class="form-label" for="form3Example1m">Username*</label>
                                    <input type="text" id="form3Example1m" class="form-control" />                                    
                                </div>
                            </div>
                            <div class="col-md-6 mb-4">
                                <div class="form-outline">
                                    <label class="form-label" for="form3Example1m">Gender</label>
                                <select class="form-select" id="form3Example1m" aria-label="Gender">
                                        <option selected disabled>Choose Gender</option>
                                        <option value="male">Male</option>
                                        <option value="female">Female</option>
                                      </select>
                                </div>
                            </div>
                          </div>
                    </form>

     
                    <form>
                        <div class="row">
                            <div class="col-md-6 mb-4">
                                <div class="form-outline">
                                    <label class="form-label" for="form3Example1m">Date of Birth*</label>
                                
                                    <input type="date" id="form3Example1m" class="form-control" placeholder="DD/MM/YYYY"/>                                    
                                </div>
                            </div>
                            <div class="col-md-6 mb-4">
                                <div class="form-outline">
                                    <label class="form-label" for="form3Example1n">Place of Birth*</label>
                                    <input type="text" id="form3Example1n" class="form-control" />
                                </div>
                            </div>
                        </div>
                    </form>
                    
     
                  

                </div>
 
          </div>
        </div>

    </div>

    <a href="" class="previous">&laquo; Back To Login</a>
    <a href="" class="next">Next Step &raquo;</a>
    
  </section>
</body>
</html>