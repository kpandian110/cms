@extends ('layouts.plane')
@section ('body')
<div class="container">
        <div class="row">
            <div class="col-md-6 col-md-offset-5">
                <img src="{{ asset("assets/img/logo.png") }}" alt="logo" class="img-responsive"> 
                </div>
            <div class="col-md-6 col-md-offset-3">
            <br /><br /><br />
                
               @section ('login_panel_title','Enter Your Login Credentials') 

               @section ('login_panel_body')
                        <form role="form">
                            <fieldset>
                                <div class="form-group">
                                    <input class="form-control" placeholder="E-mail" name="email" type="email" autofocus>
                                </div>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Password" name="password" type="password" value="">
                                </div>
                                <div class="checkbox">
                                    <label>
                                        <input name="remember" type="checkbox" value="Remember Me">Remember Me
                                    </label>
                                </div>
                                <!-- Change this to a button or input when using this as a form -->
                                <a href="{{ url ('') }}" class="btn btn-lg btn-danger btn-block">Login</a>
                            </fieldset>
                        </form>
                   
                @endsection
                @include('widgets.panel', array('as'=>'login', 'header'=>true))
                 <div style="height:345px;"></div>
            </div>
        </div>
    </div>
@stop