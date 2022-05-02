<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
  <!-- CSRF Token -->
  <meta name="csrf-token" content="xoLyuk4UGwsHNnYMZE8PZl9B3MFsbz8GIDAtzcOS">
  
  
  <title>E-Market Register</title>
  
  <!-- Styles -->
  <link href="http://localhost:8000/css/app.css" rel="stylesheet">
  <link href="http://localhost:8000/css/custom.css" rel="stylesheet">
</head>
<body>
  <div id="app">
    <main class="py-4">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-md-8 pt-4">
            <div class="card">
              <div class="card-header"><h4>Register</h4></div>
              <div class="card-body">
                <form method="POST" action="#">
                  <input type="hidden" name="_token" value="xoLyuk4UGwsHNnYMZE8PZl9B3MFsbz8GIDAtzcOS">
                  <div class="form-group row">
                    <label for="name" class="col-md-4 col-form-label text-md-right">Name</label>
                    
                    <div class="col-md-6">
                      <input id="name" type="name" class="form-control " name="name" required autocomplete="name" autofocus>
                      
                    </div>
                  </div>
                  
                  <div class="form-group row">
                    <label for="role" class="col-md-4 col-form-label text-md-right">Role</label>
                    
                    <div class="col-md-6">
                      <input id="role" type="text" class="form-control " name="role" required autocomplete="role">
                      
                    </div>
                  </div>
                  <div class="form-group row">
                      <label for="address" class="col-md-4 col-form-label text-md-right">Address</label>
                      
                      <div class="col-md-6">
                        <input id="role" type="text" class="form-control " name="address" required autocomplete="address">
                        
                      </div>
                    </div>
                  <div class="form-group row">
                      <label for="email" class="col-md-4 col-form-label text-md-right">E-Mail Address</label>
                      
                      <div class="col-md-6">
                        <input id="email" type="email" class="form-control " name="email" required autocomplete="email" autofocus>
                        
                      </div>
                    </div>
                    
                    <div class="form-group row">
                      <label for="password" class="col-md-4 col-form-label text-md-right">Password</label>
                      
                      <div class="col-md-6">
                        <input id="password" type="password" class="form-control " name="password" required autocomplete="current-password">
                        
                      </div>
                    </div>
                  <div class="form-group row mb-0">
                    <div class="col-md-8 offset-md-4">
                      <button type="submit" class="btn btn-primary">
                        Register
                      </button>
                      <button type="reset" class="btn btn-primary">
                        Cancel
                      </button>
                    </a>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </main>
</div>
</body>
</html>
<?php /**PATH C:\xampp\htdocs\blog\resources\views/Register.blade.php ENDPATH**/ ?>