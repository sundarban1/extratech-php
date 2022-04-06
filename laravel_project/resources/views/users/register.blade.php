<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

        <title>Bootstrap form</title>
        <style>
            .container{
                max-width: 500px;
            }
            
            .form-header{
                text-align: center;
                font-size: 30px;
            }
            .form{
                justify-content: center;
                margin-top: 50px;
                padding: 20px;
                border: 1px solid #ced4da;
            
            }
            .btn{
                width: 100%;
            }
            
            </style>
        
    </head>
    <body>
        <div class="container">
            <div class="form">
                <h2 class="text-uppercase text-center mb-5">Create an account</h2>
                <form action="" method="">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Your Name</label>
                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Name">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Your Email</label>
                        <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Enter Email">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Your Password</label>
                        <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Confirm Password</label>
                        <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                    </div>
                    
                    <button type="submit" class="btn btn-primary">Register</button>
                   
                    <p class="text-center text-muted mt-5 mb-0">Have already an account? <a href="login.php" class="fw-bold text-body"><u>Login here</u></a></p>

                </form>
            </div>
        </div>  
    </body>
</html>
