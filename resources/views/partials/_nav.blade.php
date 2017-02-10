<body>
	<nav class="navbar navbar-default">
	  <div class="container">
	    <div class="navbar-header">
	      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
	        <span class="icon-bar"></span>
	        <span class="icon-bar"></span>
	        <span class="icon-bar"></span>                        
	      </button>
	      <a class="navbar-brand" href="/">Basic Blog</a>
	    </div>
	    <div class="collapse navbar-collapse" id="myNavbar">
	      <ul class="nav navbar-nav navbar-right">
	        <li><a class="{{Request::is('/')?"active":""}}" href="/">HOME</a></li>
	        <li><a class="{{Request::is('/blog')?"active":""}}" href="/blog">BLOG</a></li>
	        <li><a class="{{Request::is('/about')?"active":""}}" href="/about">ABOUT</a></li>
	        <li><a class="{{Request::is('/contact')?"active":""}}" href="/contact">CONTACT</a></li>
	        @if (Auth::guest())
                <li><a href="{{ url('/login') }}">LOGIN</a></li>
            @else
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                        ACCOUNT <span class="caret"></span>
                    </a>

                    <ul class="dropdown-menu" role="menu">
                    <li><a href="/dashboard">DASHBOARD</a></li>
                        <li>
                            <a href="{{ url('/logout') }}"
                                onclick="event.preventDefault();
                                         document.getElementById('logout-form').submit();">
                                signout
                            </a>

                            <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                                {{ csrf_field() }}
                            </form>
                        </li>
                    </ul>
                </li>
            @endif
	      </ul>
	    </div>
	  </div>
	</nav>