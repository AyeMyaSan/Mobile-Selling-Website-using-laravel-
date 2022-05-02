<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
      <title>
      </title>
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" 
            integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" 
            crossorigin="anonymous">
      <link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.7.0/css/all.css' 
            integrity='sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ' 
            crossorigin='anonymous'>   
      <style>
        .map-container-section {
          overflow:hidden;
          padding-bottom:56.25%;
          position:relative;
          height:0;
        }
        .map-container-section iframe {
          left:0;
          top:0;
          height:100%;
          width:100%;
          position:absolute;
        }
        .selector-for-some-widget {
          box-sizing: content-box;
        }
      </style>
    </head>
    <body>
        <!-- Section: Contact v.1 -->
        <section class="my-5">

          <!-- Section heading -->
          <h2 class="h1-responsive font-weight-bold text-center my-5">Contact us</h2>
          <!-- Section description -->
          <!-- Grid row -->
          <div class="row">

            <!-- Grid column -->
            <div class="col-lg-5 mb-lg-0 mb-4">

              <!-- Form with header -->
              <div class="card">
                <div class="card-body">
                  <!-- Header -->
                  <div class="form-header blue accent-1">
                    <h3 class="mt-2"><i class="fas fa-envelope"></i> Write to us:</h3>
                  </div>
                  <p class="dark-grey-text">We'll write rarely, but only the best content.</p>
                  <!-- Body -->
                  <div class="md-form">
                    <i class="fas fa-user prefix grey-text"></i>
                    <input type="text" id="form-name" class="form-control">
                    <label for="form-name">Your name</label>
                  </div>
                  <div class="md-form">
                    <i class="fas fa-envelope prefix grey-text"></i>
                    <input type="text" id="form-email" class="form-control">
                    <label for="form-email">Your email</label>
                  </div>
                  <div class="md-form">
                    <i class="fas fa-tag prefix grey-text"></i>
                    <input type="text" id="form-Subject" class="form-control">
                    <label for="form-Subject">Subject</label>
                  </div>
                  <div class="md-form">
                    <i class="fas fa-pencil-alt prefix grey-text"></i>
                    <textarea id="form-text" class="form-control md-textarea" rows="3"></textarea>
                    <label for="form-text">Send message</label>
                  </div>
                  <div class="text-center">
                    <button class="btn btn-light-blue">Submit</button>
                  </div>
                </div>
              </div>
              <!-- Form with header -->

            </div>
            <!-- Grid column -->

            <!-- Grid column -->
            <div class="col-lg-7">

              <!--Google map-->
              <div id="map-container-section" class="z-depth-1-half map-container-section mb-4">
                <iframe src="https://maps.google.com/maps?q=Seattle+consulting&t=&z=15&ie=UTF8&iwloc=&output=embed" frameborder="0"
                  style="border:0" allowfullscreen></iframe>
              </div>
              <!-- Buttons-->
              <div class="row text-center">
                <div class="col-md-4">
                  <a class="btn-floating blue accent-1">
                    <i class="fas fa-map-marker-alt"></i>
                  </a>
                  <p>Myanmar, Yangon</p>
                  <p class="mb-md-0">CGM Co.,Ltd</p>
                </div>
                <div class="col-md-4">
                  <a class="btn-floating blue accent-1">
                    <i class="fas fa-phone"></i>
                  </a>
                  <p>+95 9258456860</p>
                  <p class="mb-md-0">Mon - Fri, 8:00-17:00</p>
                </div>
                <div class="col-md-4">
                  <a class="btn-floating blue accent-1">
                    <i class="fas fa-envelope"></i>
                  </a>
                  <p>info@gmail.com</p>
                  <p class="mb-0">sale@gmail.com</p>
                </div>
              </div>

            </div>
            <!-- Grid column -->

          </div>
          <!-- Grid row -->

        </section>
        <!-- Section: Contact v.1 -->

        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    </body>
</html>
