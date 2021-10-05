<html>
<head>
<meta charset="UTF-8">
    
<link href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet">
<!-- Main css -->
<link rel="stylesheet" href="/css/s.css">
<title></title>
</head>
<body>
@if (count($errors) > 0)
    <div class="content mt-3">
        <!-- div class=row content start -->
        <div class="animated fadeIn">
            <!-- div class=FadeIn start -->
            <div class="card">
                <!-- card start -->

                <div class="card-body">
                    <!-- card-body start -->


                    <div class="row">
                        <!-- div class=row One start -->
                        @foreach ($errors->all() as $error)
                        <div class="col-md-12">
                            <!-- div class=col 12 One start -->
                            <p style="color:red;">* {{ $error }}</p>
                        </div><!-- div class=col 12 One end -->
                        @endforeach
                    </div><!-- div class=row One end -->


                </div> <!-- card-body end -->

            </div><!-- card end -->
        </div><!-- div class=FadeIn start -->
    </div><!-- div class=row content end -->
@endif

<div class="content mt-3">
        <div class="animated fadeIn">
            <div class="row">
                <!-- div class=row one start -->
                @if (session('fail'))
                <div class="flash-message col-md-12">
                    <div class="alert alert-success ">
                        {{session('fail')}}
                    </div>
                </div>
                @endif
            </div>
        </div>
    </div>

   <marquee style="font-family:Book Antiqua;"> <h2 style="color:white;">Welcome to the <span style="color:#77aaff;">Digital<span> <span style="color:orange;">Tree</span></h2></marquee> 

    <div class="main">
    
        <!-- Sign up form -->
        <section class="signup">
            <div class="container">
                <div class="signup-content">
                    <div class="signup-form">
                        <h2 class="form-title">Register</h2>
                        <form method="POST" action="/register">
                         <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">   
                        <div class="form-group">
                                <label for="name"><i class="zmdi zmdi-account material-icons-name"></i></label>
                                <input type="text" name="name" id="name" value="{{ old('name') }}"placeholder="Your Name"/>
                            </div>
                            <div class="form-group">
                                <label for="email"><i class="zmdi zmdi-email"></i></label>
                                <input type="email" name="email" id="email" value="{{ old('email') }}" placeholder="Your Email"/>
                            </div>
                            <div class="form-group">
                                <label for="phone"><i class="zmdi zmdi-phone"></i></label>
                                <input type="text" name="phone" id="phone" value="{{ old('phone') }}" placeholder="Your Phone"/>
                            </div>
                            <div class="form-group">
                                <label for="address"><i class="zmdi zmdi-address"></i></label>
                                <input type="text" name="address" id="address" value="{{ old('address') }}"placeholder="Your Address"/>
                            </div>
                            <div class="form-group">
                                <label for="township"><i class="zmdi zmdi-township"></i></label>
                                <input type="text" name="township" id="township" value="{{ old('township') }}"placeholder="Your Township"/>
                            </div>
                   
                            
                             <div class="form-group">
                             <label for="township"><i class="zmdi zmdi-township"></i>Male</label>     
                            <input type="radio" name="gender" value="1" id="gender"/>
</div>
<div class="form-group">
                            <label for="township"><i class="zmdi zmdi-township"></i>Female</label>     
                            <input type="radio" name="gender" value="2"id="gender"/>
                            </div>

                            
                            <div class="form-group form-button">
                                <input type="submit"  class="form-submit" value="Register"/>
                            </div>
                        </form>
                    </div>
                    <div class="signup-image">
                        <figure><img src="/images/digitaltreegif500.gif" alt="sing up image"></figure>
                    </div>
                </div>
            </div>
        </section>
</div>    
</body>
</html>