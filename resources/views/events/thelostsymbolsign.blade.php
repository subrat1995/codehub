@extends('events.layouts.master')

@section('body') 

        <!-- Main wrapper -->
<div id="main-wrapper">

    <!-- Content -->
    <div id="content">

        <!-- Fluid container -->
        <div class="container-fluid" style="padding : 30px;">

            <!-- Main content -->
            <div class="row">

                   
                <article class="inner" style="padding :  20px;">

                    <div class="row">
                        <div class="col-6">

                            <h2>Sign Up</h2>
                            <form method="POST" action="{{ route('tlssignup')}}" class="form-horizontal">
                            <div class="form-group {{ $errors->has('email') ? 'has-error' : '' }}">
                              <label class="control-label col-sm-3" for="name">Name:</label>
                              <div class="col-sm-9">
                                <input type="text" class="form-control" id="name" name="name" placeholder="" value="{{ Request::old('name') }}">
                                @if($errors->has('name'))
                                  <span class="help-block">{{ $errors->first('name') }}</span>
                                @endif
                              </div>
                            </div>

                            <div class="form-group {{ $errors->has('college') ? 'has-error' : '' }}">
                              <label class="control-label col-sm-3" for="college">College:</label>
                              <div class="col-sm-9">
                                <input type="text" class="form-control" id="college" name="college" placeholder="" value="{{ Request::old('college') }}">
                                @if($errors->has('college'))
                                  <span class="help-block">{{ $errors->first('college') }}</span>
                                @endif
                              </div>
                            </div>
                            <div class="form-group {{ $errors->has('address') ? 'has-error' : '' }}">
                              <label class="control-label col-sm-3" for="address">Address:</label>
                              <div class="col-sm-9">
                                <input type="text" class="form-control" id="address" name="address" placeholder="" value="{{ Request::old('address') }}">
                                @if($errors->has('address'))
                                  <span class="help-block">{{ $errors->first('address') }}</span>
                                @endif
                              </div>
                            </div>
                            <div class="form-group {{ $errors->has('contact') ? 'has-error' : '' }} {{ $errors->has('email') ? 'has-error' : '' }}">
                              <label class="control-label col-sm-3" for="address">Contact:</label>
                              <div class="col-sm-9">
                                <input type="text" class="form-control" id="contact" name="contact" placeholder="" value="{{ Request::old('contact') }}">
                                @if($errors->has('contact'))
                                  <span class="help-block">{{ $errors->first('contact') }}</span>
                                @endif
                              </div>
                            </div>
                            <div class="form-group {{ $errors->has('username') ? 'has-error' : '' }}">
                              <label class="control-label col-sm-3" for="username">Username:</label>
                              <div class="col-sm-9">
                                <input type="text" class="form-control" id="username" name="username" placeholder="" value="{{ Request::old('username') }}">
                                @if($errors->has('username'))
                                  <span class="help-block">{{ $errors->first('username') }}</span>
                                @endif
                              </div>
                            </div>
                            <div class="form-group {{ $errors->has('email') ? 'has-error' : '' }}">
                              <label class="control-label col-sm-3" for="email">Email:</label>
                              <div class="col-sm-9">
                                <input type="email" class="form-control" id="email" name="email" placeholder="" value="{{ Request::old('email') }}">
                                @if($errors->has('email'))
                                  <span class="help-block">{{ $errors->first('email') }}</span>
                                @endif
                              </div>
                            </div>
                            <div class="form-group {{ $errors->has('password') ? 'has-error' : '' }}">
                              <label class="control-label col-sm-3" for="password">Password:</label>
                              <div class="col-sm-9">
                                <input type="password" class="form-control" id="password" name="password" placeholder="" value="{{ Request::old('password') }}">
                                @if($errors->has('password'))
                                  <span class="help-block">{{ $errors->first('password') }}</span>
                                @endif
                              </div>
                            </div>    
                            <div class="form-group">
                              <div class="col-sm-offset-3 col-sm-9">
                                <button type="submit" class="btn btn-success">Sign Up</button>
                              </div>
                            </div>
                            <input type="hidden" name="_token" value="{{ Session::token() }}">
                            </form>


                        </div>
                        <div class="col-6">
                            <h2>Sign In</h2>
                            <form method="POST" action="{{ route('tlssignin')}}" class="form-horizontal">
                            <div class="form-group  {{ $errors->has('username2') ? 'has-error' : '' }}">
                              <label class="control-label col-sm-3" for="username2">Username:</label>
                              <div class="col-sm-9">
                                <input type="text" class="form-control" id="username2" name="username2" placeholder="" value="{{ Request::old('username2') }}">
                                @if($errors->has('username2'))
                                  <span class="help-block">Username field is required</span>
                                @endif
                              </div>
                            </div>
                            <div class="form-group  {{ $errors->has('password2') ? 'has-error' : '' }} ">
                              <label class="control-label col-sm-3" for="password2">Password:</label>
                              <div class="col-sm-9">
                                <input type="password" class="form-control" id="password2" name="password2" placeholder="" value="{{ Request::old('password2') }}">
                                @if($errors->has('password2'))
                                  <span class="help-block">Password field is required</span>
                                @endif
                                @if(Session::has('msg'))
                                  <span class="help-block" style="color:maroon">{{Session::get('msg')}}</span>
                                @endif
                              </div>
                            </div>    
                            <div class="form-group">
                              <div class="col-sm-offset-3 col-sm-9">
                                <button type="submit" class="btn btn-success">Sign In</button>
                              </div>
                            </div>
                            <input type="hidden" name="_token" value="{{ Session::token() }}">
                            </form>
                        </div>
                    </div>

                   
                </article>

            </div>

        </div>

    </div>
</div>
@endsection
