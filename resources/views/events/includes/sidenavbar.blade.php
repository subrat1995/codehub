<div id="sidebar">

                <!-- Widget Area -->
    <div id="widgets">
    
        <!-- Main menu -->
        <nav id="mainmenu">
            <ul>
                <li><a href="{{route('home')}}">Home</a></li>
                <li><a href="{{route('thelostsymbol')}}">Event Home</a></li>
                <li><a href="{{route('thelostdescription')}}">Description</a></li>
                @if(!Auth::guard('tls_users')->check())
                <li><a href="{{route('thelostsign')}}" class="active">Login/Sign Up</a></li>
                @endif
                @if(Auth::guard('tls_users')->check())
                <li><a href="{{route('thelostsignout')}}" class="active">Sign Out</a></li>
                @endif

                <!-- <li>
                    <a href="#">Itinerary</a>
                    <ul>
                        <li><a href="#">Venue</a></li>
                        <li><a href="#">Date</a></li>
                        <li><a href="#">Time</a></li>
                    </ul>
                </li> -->
                
                

                <!-- <li><a href="blog.html">Blog</a></li> -->
                <!-- <li><a href="team.html">Team</a></li> -->
                <!-- <li>
                    <a href="#">Pages</a>
                    <ul>
                        <li><a href="404.html">404 page</a></li>
                        <li><a href="elements.html">Elements</a></li>
                        <li><a href="grid.html">Grid System</a></li>
                        <li><a href="blog-single.html">Single Post</a></li>
                    </ul>
                </li> -->
                <!-- <li><a href="contact.html">Contact</a></li> -->
            </ul>
        </nav>

    </div>

                <!-- Copyright -->
    <footer>
        <p class="copyright">© Copyright 2016 Codehub</p>
    </footer>

</div>