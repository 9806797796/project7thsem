<!DOCTYPE html>
<html>
<head>
   <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Navbar in Bootstrap</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >

        <!--jQuery library-->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

        <!--Latest compiled and minified JavaScript-->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="{{asset('site/css/style.css')}}" >

        
    </head>
<body>
          <nav class="navbar navbar-dark navbar-fixed-top" style="background-color:#2874f0;">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                        <i class="fa fa-bars"></i>
                    </button>
                    <a class="navbar-brand" href="https://codepen.io/Mamik153/full/MXOyjY/">Lifestyle Store</a>
                </div>
                <div class="collapse navbar-collapse" id="myNavbar">
                    <ul class="nav navbar-nav navbar-right">
                        <li class="active"><a href="{{route('register')}}"><span class="glyphicon glyphicon-user"></span> Application</a></li>
                        <li><a href="{{route('login')}}"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
                    </ul>
                </div>
            </div>
        </nav>
  <section>
    <div class="container">
            <div class="row">            
                <div class="col-sm-6 col-sm-offset-6">
                    <div class="panel panel-default" >
                        <div class="panel-heading">
                            <h4>SIGN UP</h4>
                        </div>
                        <div class="panel-body">
                            <form action="{{route('register')}}" method="POST">
                              @csrf()
                              <div class="row">
      
                                <div class="col-sm-6 form-group">
      
                                  <label>First name </label>   
                                  <input type="text" class="form-control @error('name') is-invalid @enderror" id="fName" name="name" placeholder="">
                                </div> <!-- form-group end.// -->
                                <div class="col-sm-6 form-group">
                                  <label>Last name</label>
                                    <input type="text" class="form-control @error('lname') is-invalid @enderror" id="lName" name="lname" placeholder=" ">
                                </div> <!-- form-group end.// -->
                              </div> <!-- form-row end.// -->
                              <div class="form-group">
                                <label> Gender * </label><br />
                                    <label class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="gender" value="Male">
                                    <span class="form-check-label"> Male </span>
                                  </label>
                                  <label class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="gender" value="Female">
                                    <span class="form-check-label"> Female</span>
                                  </label>
                                  <label class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="gender" value="Other">
                                    <span class="form-check-label"> Other</span>
                                  </label>
                                </div>
                                  <div class="form-row">
                                    <div class="form-group col-md-4">
                                        <label>Province *</label> 
                                        <select id="provinceSel" name="province" class="form-control" size="1" required>
                                          <option selected=""> Choose Province</option>
                                        </select>
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label>District *</label> 
                                        <select id="destrictsSel" name="district" class="form-control" size="1" required>
                                          <option selected=""> Choose District</option>
                                        </select>
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label>Minicipality *</label> 
                                        <select id="municipalitySel" name="minicipality" class="form-control" size="1" required>
                                          <option selected=""> Choose Minicipality</option>
                                        </select>
                                    </div>
                                  </div>
                               

                                <div class="form-row">
                                  <div class="form-group col-md-4">
                                        <label>Word No *</label> 
                                        <select id="wordno" name="word_no" class="form-control" size="1" required>
                                          <option selected=""> Choose word</option>
                                          <option value="1">1</option>
                                                        <option value="2">2</option>
                                                        <option value="3">3</option>
                                                        <option value="4">4</option>
                                                        <option value="5">5</option>
                                                        <option value="6">6</option>
                                                        <option value="7">7</option>
                                                        <option value="8">8</option>
                                                        <option value="9">9</option>
                                                        <option value="10">10</option>
                                                        <option value="11">11</option>
                                                        <option value="12">12</option>
                                                        <option value="13">13</option>
                                                        <option value="14">14</option>
                                                        <option value="15">15</option>
                                                        <option value="16">16</option>
                                                        <option value="17">17</option>
                                                        <option value="18">18</option>
                                                        <option value="19">19</option>
                                                        <option value="20">20</option>
                                                        <option value="21">21</option>
                                                        <option value="22">22</option>
                                                        <option value="23">23</option>
                                                        <option value="24">24</option>
                                                        <option value="25">25</option>
                                                        <option value="26">26</option>
                                                        <option value="27">27</option>
                                                        <option value="28">28</option>
                                                        <option value="29">29</option>
                                                        <option value="30">30</option>
                                                        <option value="31">31</option>
                                                        <option value="32">32</option>
                                                        <option value="33">33</option>
                                                        <option value="34">34</option>
                                        </select>
                                    </div>
                                  <div class="form-group col-md-4">
                                    <label>City *</label>
                                    <input type="text" id="city" name="city" class="form-control" required>
                                  </div> 
                                  <div class="form-group col-md-4">
                                    <label>Tole *</label>
                                    <input type="text" id="tole" name="tole" class="form-control" required>
                                  </div><!-- form-group end.// -->
                                  
                                </div> <!-- form-row.// -->
                                
                                  <div class="form-row">
                                    <div class="form-group col-md-6">
                                    <label>Mobile Number *</label>
                                    <input type="number" id="email" name="email" class="form-control" required>
                                    <small>Mobile number will be your username</small>
                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                  </div>
                                  <div class="form-group col-md-6">
                                    <label>Password *</label>
                                    <input type="password" id="password" name="password" class="form-control" required>
                                  </div>
                                  </div>
                                  
                                 
                                 
                                  <div class="form-group">
                                      <button type="submit" class="btn btn-primary btn-block" onClick="signup()"> Sign Up  </button>
                                  </div> <!-- form-group// -->      
                                  <small class="text-muted">By clicking the 'Sign Up' button, you confirm that you accept our <br> Terms of use and Privacy Policy.</small>                                          
                              </form><br/>
                              </div>
                      
                    </div>
                </div>
            </div>
        </div>
  </section>
  
      <footer class="page-footer container-fluid">
        <hr>
         <h5 class="text-center">&copy; Lifestyle store. All Rights Reserved</h5>
      </footer>
</body>

</html>