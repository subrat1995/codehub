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
                            <form class="form-horizontal">
                            <div class="form-group">
                              <label class="control-label col-sm-2" for="name">Name:</label>
                              <div class="col-sm-10">
                                <input type="text" class="form-control" id="name" name="name" placeholder="">
                              </div>
                            </div>

                            <div class="form-group">
                              <label class="control-label col-sm-2" for="college">College:</label>
                              <div class="col-sm-10">
                                <input type="text" class="form-control" id="college" name="college" placeholder="">
                              </div>
                            </div>
                            <div class="form-group">
                              <label class="control-label col-sm-2" for="address">Address:</label>
                              <div class="col-sm-10">
                                <input type="text" class="form-control" id="address" name="address" placeholder="">
                              </div>
                            </div>
                            <div class="form-group">
                              <label class="control-label col-sm-2" for="address">Contact:</label>
                              <div class="col-sm-10">
                                <input type="text" class="form-control" id="contact" name="contact" placeholder="">
                              </div>
                            </div>
                            <div class="form-group">
                              <label class="control-label col-sm-2" for="password">Username:</label>
                              <div class="col-sm-10">
                                <input type="text" class="form-control" id="username" name="username" placeholder="">
                              </div>
                            </div>
                            <div class="form-group">
                              <label class="control-label col-sm-2" for="email">Email:</label>
                              <div class="col-sm-10">
                                <input type="email" class="form-control" id="email" name="email" placeholder="">
                              </div>
                            </div>
                            <div class="form-group">
                              <label class="control-label col-sm-2" for="password">Password:</label>
                              <div class="col-sm-10">
                                <input type="password" class="form-control" id="password" name="password" placeholder="">
                              </div>
                            </div>    
                            <div class="form-group">
                              <div class="col-sm-offset-2 col-sm-10">
                                <button type="submit" class="btn btn-success">Sign Up</button>
                              </div>
                            </div>
                            </form>


                        </div>
                        <div class="col-6">
                            <h2>Sign In</h2>
                            <form class="form-horizontal">
                            <div class="form-group">
                              <label class="control-label col-sm-2" for="email">Username:</label>
                              <div class="col-sm-10">
                                <input type="email" class="form-control" id="username" name="username" placeholder="">
                              </div>
                            </div>
                            <div class="form-group">
                              <label class="control-label col-sm-2" for="password">Password:</label>
                              <div class="col-sm-10">
                                <input type="password" class="form-control" id="password" name="password" placeholder="">
                              </div>
                            </div>    
                            <div class="form-group">
                              <div class="col-sm-offset-2 col-sm-10">
                                <button type="submit" class="btn btn-success">Sign IN</button>
                              </div>
                            </div>
                            </form>
                        </div>
                    </div>

                   
                </article>

            </div>

        </div>

    </div>
</div>
@endsection
