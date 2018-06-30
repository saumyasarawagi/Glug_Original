  <div class="container-fluid footer" id="footer">
      <div class="container">
        <div class="row btn-h1-spacing">
          <div class="col-md-6 col-md-offset-0">
            <h4>About Us</h4>
            <div class="content-footer">
              <p>
                <img src="/images/logo.png" alt="" class="footer-image">
                The GNU/Linux Users’ Group of NIT Durgapur is a community of GNU/Linux users and promoters of Free and Open Source Software.
                The Group was established in 2003 by a bunch of FOSS enthusiasts with the objective of spreading awareness about the world of Free and Open Source Softwares and popularising their use in the campus. Since then the group has evolved into a body that is now an active part of the open source community through numerous contributions to a wide range of open source projects. The group strives hard to introduce the philosophy and encourage the use of FOSS across all departments of study, here at NIT Durgapur.

                We, the members, believe that Software freedom is as essential as the civil liberty of freedom of Speech.
              </p>
            </div>
          </div>
          <div class="col-md-4 col-md-offset-1 text-center">
            <h4>Follow us on:</h4>
            <div class="social-icons">
              <ul>
                <li><a class="envelope" href="mailto:contact@nitdgplug.org"><i class="fa fa-envelope"></i></a></li>
                <li><a class="twitter" href="https://twitter.com/mukti_nitd"><i class="fa fa-twitter"></i></a></li> 
                <li><a class="facebook" href="https://www.facebook.com/nitdgplug/?fref=ts"><i class="fa fa-facebook"></i></a></li>
                <li><a class="linkedin" href="#"><i class="fa fa-linkedin"></i></a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
  </div>
  <div class="sub-footer">
    <div class="container">
      <div class="row btn-h1-spacing">
        <div class="col-md-6">
          <p style="font-size:100%">© 2016 GNU/Linux Users' Group <a href="http://nitdgplug.org" style="color: #fff">(Our Website)</a></p>
        </div>
        <div class="col-md-6">
          <div class="navbar-header navbar-right" style="margin-top: -5px">
            @if (Auth::guest())
              
            @else
              <ul class="nav navbar-nav navbar-right">
                <li class="dropup">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" style="color: #ffffff">Hi {{ Auth::user()->name }} <span class="caret"></span></a>
                  <ul class="dropdown-menu">
                    <li><a href="{{ route('admin.dashboard') }}">Admin Dashboard</a></li>
                    <li><a href="{{ route('feedback.dashboard') }}">See Feedback</a></li>
                    <li><a href="{{ route('events.index') }}">Develop Events</a></li>
                    <li role="separator" class="divider"></li>
                    <li>
                      <a href="{{ route('logout') }}"
                      onclick="event.preventDefault();
                      document.getElementById('logout-form').submit();">
                      Logout
                      </a>

                      <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                      {{ csrf_field() }}
                      </form>
                    </li>
                  </ul>
                </li>
              </ul>
            @endif
          </div>
        </div>
      </div>
    </div>
  </div>
