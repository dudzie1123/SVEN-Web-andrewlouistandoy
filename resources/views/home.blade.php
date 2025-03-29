<!doctype html>
<html lang="en">
  <head>
    <title>PAWTASTIC</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,700,900|Rubik:300,400,700" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/animate.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/owl.carousel.min.css') }}">

    <link rel="stylesheet" href="{{ asset('assets/fonts/ionicons/css/ionicons.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/fonts/fontawesome/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/magnific-popup.css') }}">

    <!-- Theme Style -->
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
  </head>
  <body>
    
    <header role="banner">
     
      <nav class="navbar navbar-expand-md navbar-dark bg-light">
        <div class="container" id="home-focus">
        <img src="{{ asset('assets/images/paws-logo.png') }}" alt="Small Image" class="img-thumbnail rounded float-left homeBtn cursor-pointer" style="width:40px; margin: 15px;">
          <a class="navbar-brand homeBtn">PAWTASTIC</a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample05" aria-controls="navbarsExample05" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse navbar-light" id="navbarsExample05">
            <ul class="navbar-nav ml-auto pl-lg-5 pl-0">
              <li class="nav-item">
                <a class="nav-link active homeBtn">Home</a>
              </li>
              <!-- <li class="nav-item dropdown"> -->
                <!-- <a class="nav-link dropdown-toggle" href="rooms.html" id="dropdown04" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Rooms</a> -->
                <!-- <div class="dropdown-menu" aria-labelledby="dropdown04"> -->
                  <!-- <a class="dropdown-item" href="rooms.html">Room Videos</a> -->
                  <!-- <a class="dropdown-item" href="rooms.html">Presidential Room</a> -->
                  <!-- <a class="dropdown-item" href="rooms.html">Luxury Room</a> -->
                  <!-- <a class="dropdown-item" href="rooms.html">Deluxe Room</a> -->
                <!-- </div> -->

              <!-- </li> -->
              <li class="nav-item">
                <a class="nav-link aboutUsBtn">About us</a>
              </li>

               <li class="nav-item cta">
                <a class="nav-link bookBtn"><span>Book Now</span></a>
              </li>
            </ul>
            
          </div>
        </div>
      </nav>
    </header>
    <!-- END header -->

    <section class="site-hero overlay" data-stellar-background-ratio="0.5" style="background-image: url({{ asset('assets/images/pet_bg.jpg') }});">
      <div class="container">
        <div class="row align-items-center site-hero-inner justify-content-center">
          <div class="col-md-12 text-center">

            <div class="mb-5 element-animate">
              <h1>We care for your furry little loved ones</h1>
              <p>We'll take your dog for a walk. Just tell us when!</p>
              <p><a class="btn btn-primary bookBtn">Schedule a visit</a></p>
            </div>

          </div>
        </div>
      </div>
    </section>
    <!-- END section -->

    <section class="site-section" id="aboutus-focus">
      <div class="container" >
        <div class="row align-items-center">
          <div class="col-md-4">
            <div class="heading-wrap text-center element-animate">
              <h3 class="heading">Expert care</h3>
              <h2 class="sub-heading"> For your furry, feathery or scaley friend.</h2>
              <p class="mb-5">We know how stressful it is to leave your pets at home alone. We're a team of experienced animal caregivers well connected to local veterinarians. Trust to us to love them like our own. and to keep them safe and happy till you're home.</p>
              <p><a href="#" class="btn btn-primary btn-sm bookBtn">Schedule a visit</a></p>
            </div>
          </div>
          <div class="col-md-1"></div>
          <div class="col-md-7">
            <img src="{{ asset('assets/images/pet2.png') }}" alt="Image placeholder" class="img-md-fluid w-100">
          </div>
        </div>
      </div>
    </section>
    <!-- END section -->
    
    <section class="site-section bg-light" id="book-focus">
    <div class="container" >
        <div class="row">
          <div class="col-md-6">
            <h2 class="mb-5">Reservation Form</h2>
                <!-- <form action="" method="post"> -->
                <div id="successAlert" class="alert alert-success alert-dismissible fade show" role="alert" style="display: none;">
                  ✅ Success! Your action was completed.
                  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                  <div class="row">
                      <div class="col-sm-6 form-group">
                          <label for="">Frequency</label>
                          <div style="position: relative;">
                            <div class="btn-group-sm btn-group-toggle" data-toggle="buttons">
                            <label class="btn btn-light active">
                                <input type="radio" name="frequencyOption" value="1" id="radio1" autocomplete="off" checked> Weekly
                            </label>
                            <label class="btn btn-light">
                                <input type="radio" name="frequencyOption" value="2" id="radio2" autocomplete="off"> One-Time
                            </label>
                            </div>
                          </div>
                      </div>
                      <div class="col-sm-6 form-group">
                          
                          <label for="">Start Date</label>
                          <div style="position: relative;">
                            <span class="fa fa-calendar icon" style="position: absolute; right: 10px; top: 10px;"></span>
                            <input type="text" class="form-control datepicker" id="datepicker" placeholder="Select a date" autocomplete="off"/>
                            <p id="dateError" style="color: red; display: none;">Please select a valid date and time.</p>
                          </div>
                      </div>
                  </div>

                  <div class="row weeklyFrequency">
                    <div class="col-sm-12 form-group">
                        <label for="">Days</label>
                        <div class="heading-wrap text-center element-animate"><h4 class="sub-heading"> Select all that apply.</h4>
                        </div>
                        <div class="btn-group-sm btn-group-toggle" data-toggle="buttons">
                        <label class="btn btn-light">
                            <input type="checkbox" name="dayOptions[]" id="option1" value="Monday" autocomplete="off"> Mon
                        </label>
                        <label class="btn btn-light">
                            <input type="checkbox" name="dayOptions[]" id="option2" value="Tuesday" autocomplete="off"> Tue
                        </label>
                        <label class="btn btn-light">
                            <input type="checkbox" name="dayOptions[]" id="option3" value="Wednesday" autocomplete="off"> Wed
                        </label>
                        <label class="btn btn-light">
                            <input type="checkbox" name="dayOptions[]" id="option3" value="Thursday" autocomplete="off"> Thu
                        </label>
                        <label class="btn btn-light">
                            <input type="checkbox" name="dayOptions[]" id="option3" value="Friday" autocomplete="off"> Fri
                        </label>
                        <label class="btn btn-light">
                            <input type="checkbox" name="dayOptions[]" id="option3" value="Saturday" autocomplete="off"> Sat
                        </label>
                        <label class="btn btn-light">
                            <input type="checkbox" name="dayOptions[]" id="option3" value="Sunday" autocomplete="off"> Sun
                        </label>
                        <p id="checkboxError1" style="color: red; display: none;">Please select at least one option.</p>

                        </div>
                    </div>
                  </div>

                  <div class="row">
                    <div class="col-sm-12 form-group">
                        <label for="">Times</label>
                        <div class="heading-wrap text-center element-animate"><h4 class="sub-heading"> Select all that apply.</h4>
                        </div>
                        <div class="btn-group-sm btn-group-toggle" data-toggle="buttons">
                        <label class="btn btn-light morningOpt">
                            <input type="checkbox" name="timeOptions[]" value="Morning" id="morning"> Morning
                        </label>
                        <label class="btn btn-light afternoonOpt">
                            <input type="checkbox" name="timeOptions[]" value="Afternoon" id="afternoon"> Afternooon
                        </label>
                        <label class="btn btn-light eveningOpt">
                            <input type="checkbox" name="timeOptions[]" value="Evening" id="evening"> Evening
                        </label>
                        <p id="checkboxError2" style="color: red; display: none;">Please select at least one option.</p>
                        </div>
                    </div>
                  </div>
                
                  <div class="row">
                    <div class="col-md-12 form-group">
                      <label for="message">Note for your sitter</label>
                      <textarea name="note" id="note" class="form-control " cols="30" rows="3"></textarea>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-6 form-group">
                      <input type="submit" id="submitForm" value="Schedule Service" class="btn btn-primary">
                    </div>
                  </div>
                <!-- </form> -->
              </div>
              <div class="col-md-1"></div>
              <div class="col-md-5">
                <div class="d-flex align-items-center bg-white">
                    <img src="{{ asset('assets/images/paws-logo.png') }}" alt="Small Image" class="img-thumbnail rounded float-left homeBtn cursor-pointer" style="width:40px; margin:15px;">
                    <a class="navbar-brand homeBtn">P A W T A S T I C</a>
                </div>
               
                <div class="media d-block room mb-0">
              <figure>
                <img src="{{ asset('assets/images/pet1.jpg') }}" alt="Generic placeholder image" class="img-fluid">
                
              </figure>
              <div class="media-body">
                <h3 class="mt-0"><a href="#">All services include: </a></h3>
                  <li><span class="ion-ios-camera-outline"></span> A photo update for you along</li>
                  <li><span class="ion-ios-email"></span> Notification</li>
                  <li> Treats for your pet</li>
                <!-- <p>Nulla vel metus scelerisque ante sollicitudin. Fusce condimentum nunc ac nisi vulputate fringilla. </p> -->
                <!-- <p><a href="#" class="btn btn-primary btn-sm ">Book Now From $20</a></p> -->
              </div>
            </div>
              </div>
        </div>
      </div>
    </section>
    <!-- END section -->
   
    <footer class="site-footer">
      <div class="container">
        <div class="row mb-5">
          <div class="col-md-4">
            <h3>Phone Support</h3>
            <p>24/7 Call us now.</p>
            <p class="lead"><a href="tel://">+ 1 332 3093 323</a></p>
          </div>
          <div class="col-md-4">
            <h3>Connect With Us</h3>
            <p>We are socialized. Follow us</p>
            <p>
              <a href="#" class="pl-0 p-3"><span class="fa fa-facebook"></span></a>
              <a href="#" class="p-3"><span class="fa fa-twitter"></span></a>
              <a href="#" class="p-3"><span class="fa fa-instagram"></span></a>
              <a href="#" class="p-3"><span class="fa fa-vimeo"></span></a>
              <a href="#" class="p-3"><span class="fa fa-youtube-play"></span></a>
            </p>
          </div>
          <div class="col-md-4">
            <h3>Connect With Us</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maxime, odio.</p>
            <form action="#" class="subscribe">
              <div class="form-group">
                <button type="submit"><span class="ion-ios-arrow-thin-right"></span></button>
                <input type="email" class="form-control" placeholder="Enter email">
              </div>
              
            </form>
          </div>
        </div>
        <div class="row justify-content-center">
          <div class="col-md-7 text-center">
            &copy; <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
          </div>
        </div>
      </div>
    </footer>
    <!-- END footer -->

    <!-- loader -->
    <div id="loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#f4b214"/></svg></div>

    <script src="{{ asset('assets/js/jquery-3.2.1.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery-migrate-3.0.0.js') }}"></script>
    <script src="{{ asset('assets/js/popper.min.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.waypoints.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.stellar.min.js') }}"></script>
    <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/smoothness/jquery-ui.css">
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"></script>
    <script src="{{ asset('assets/js/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('assets/js/magnific-popup-options.js') }}"></script>

    <script src="{{ asset('assets/js/main.js') }}"></script>

    <script>

        let now = new Date();
        let hours = now.getHours();
        let minutes = now.getMinutes();

        $(document).ready(function() {
            
            $("#datepicker").datepicker({
              minDate: 0,
              onSelect: function(selectedDate) {
                    timesCheck(selectedDate);
                }
            });

            timesCheck();
            
            // Check if current time is past 5 AM
            $('#submitForm').click(function () {
                let isValid = true;
                var selectedValue = $("input[name='frequencyOption']:checked").val();
               
                if (selectedValue == 1 && $('input[name="dayOptions[]"]:checked').length === 0) {
                    $('#checkboxError1').show();
                    isValid = false;
                } else {
                    $('#checkboxError1').hide();
                }

                if ($('input[name="timeOptions[]"]:checked').length === 0) {
                    $('#checkboxError2').show();
                    isValid = false;
                } else {
                    $('#checkboxError2').hide();
                }

                // DateTime Picker Validation
                if ($('#datepicker').val().trim() === '') {
                    $('#dateError').show();
                    isValid = false;
                } else {
                    $('#dateError').hide();
                }

                if(isValid){

                    $(this).prop("disabled", true); 

                    setTimeout(() => {
                        $(this).prop("disabled", false); 
                    }, 5000);
                    
                    let aptDate = $("#datepicker").val();
                    let note = $("#note").val();
                    let selectedDays = [];
                    let selectedTime = [];

                    $('input[name="dayOptions[]"]:checked').each(function() {
                      selectedDays.push($(this).val());
                    });

                    $('input[name="timeOptions[]"]:checked').each(function() {
                      selectedTime.push($(this).val());
                    });

                    $.ajax({
                        url: "{{ route('submitbooking') }}", 
                        type: "POST",
                        data: {
                            days: selectedDays,
                            date: aptDate,
                            note: note,
                            time: selectedTime,
                            _token: "{{ csrf_token() }}" 
                        },
                        success: function(response) {
                            if (response.success) {
                              $("#successAlert").fadeIn(); 

                              // Auto-hide the alert after 3 seconds
                              setTimeout(function () {
                                  $("#successAlert").fadeOut();
                                  $(".datepicker").val("");
                                  $("#note").val("");
                                  uncheckAllCheckboxes();
                              }, 5000);
                              
                            }
                        },
                        error: function(xhr) {
                            alert("Error: " + xhr.responseText);
                        }
                    });
                }
                
            });

            function uncheckAllCheckboxes() {
                $('input[type="checkbox"]').prop('checked', false).trigger('change');;
                $('label').removeClass('active');
            }

            function timesCheck(selectedDate){
                
                if(selectedDate == getTodayDate() && $("#radio2").is(":checked")){
                  if (hours > 11 || (hours === 11 && minutes >= 0)) {
                    $(".morningOpt").fadeOut(500);
                    uncheckAllCheckboxes();
                  }

                  if (hours > 16 || (hours === 16 && minutes >= 0)) {
                    $(".afternoonOpt").fadeOut(500);
                    uncheckAllCheckboxes();
                  }

                }else{
                  $(".morningOpt").fadeIn(500);
                  $(".afternoonOpt").fadeIn(500);
                }
            }

            $("input[type='radio'][name='frequencyOption']").on("change", function() {
                    if ($(this).val() === "2") {
                      $(".weeklyFrequency").fadeOut(500);
                        let selectedDate = $("#datepicker").val();
                        timesCheck(selectedDate);
                        uncheckAllCheckboxes();
                    }else{
                      $(".weeklyFrequency").fadeIn(500);
                      timesCheck();
                    }
            });

        });
        
        

        function getTodayDate() {
                let today = new Date();
                let year = today.getFullYear();
                let month = String(today.getMonth() + 1).padStart(2, '0'); // Ensure 2-digit format
                let day = String(today.getDate()).padStart(2, '0'); // Ensure 2-digit format
                return `${month}/${day}/${year}`;
        }

        

        $(".bookBtn").click(function() {
            $("html, body").animate({
                scrollTop: $("#book-focus").offset().top
            }, 1000); // 1000ms (1 second) for smooth scrolling
        });

        $(".homeBtn").click(function() {
            $("html, body").animate({
                scrollTop: $("#home-focus").offset().top
            }, 1000); // 1000ms (1 second) for smooth scrolling
        });

        $(".aboutUsBtn").click(function() {
            $("html, body").animate({
                scrollTop: $("#aboutus-focus").offset().top
            }, 1000); // 1000ms (1 second) for smooth scrolling
        });

    </script>
  </body>
</html>