<header >
	<nav class="navbar navbar-fixed-top social-navbar top" role="navigation">

	  <!-- Brand and toggle get grouped for better mobile display -->
	  <div class="navbar-header">
	    <a class="navbar-brand" href="#">
	    	<img src="{{asset('assets/img/sample/logo-app.jpg')}}" alt="">
	    	<span>Atoz</span>
	    </a>
	  </div>

		<div class="collapse navbar-collapse">
			<ul class="nav navbar-nav navbar-right nav-indicators">
				<li class="dropdown nav-notifications">
					<a href="dashboard.html#" class="dropdown-toggle" data-toggle="dropdown">
						<i class="icon-warning-sign icon"></i>
						<span class="label theme brand-1 brand-inverse">9</span>
					</a>
					<ul class="dropdown-menu reveal">
						<li class="nav-notifications-header">
							You have <strong>9</strong> new notifications
						</li>
						 <li class="notif-body">
							<a href="dashboard.html#">
								<i class="icon-user"></i>
								<p class="notif-message">
									Adrian join group <strong>Fantastic 4</strong>
									<abbr>Just Now</abbr>
								</p>
							</a>
						</li>
						 <li class="notif-body">
							<a href="dashboard.html#">
								<i class="icon-comment"></i>
								<p class="notif-message">
									Indra commented on <strong>Desain Homepage Web Javan</strong>
									<abbr>Just Now</abbr>
								</p>
							</a>
						</li>
						 <li class="notif-body">
							<a href="dashboard.html#">
								<i class="icon-code"></i>
								<p class="notif-message">
									Wisnu create new snippet
									<abbr>Just Now</abbr>
								</p>
							</a>
						</li>
						<li class="nav-notifications-footer">
							<a tabindex="-1" href="dashboard.html#">View all messages</a>
						</li>
					</ul>
				</li>

				<li class="dropdown nav-notifications">
				 	<a href="dashboard.html#" class="dropdown-toggle" data-toggle="dropdown">
						<i class="icon-envelope icon"></i>
						<span class="label  theme brand-1 brand-inverse">8</span>
					</a>
					<ul class="dropdown-menu reveal">
						<li class="nav-notifications-header">
							You have <strong>3</strong> new messages
						</li>
						 <li class="notif-body">
							<a href="dashboard.html#">
								<img src="{{asset('assets/img/sample/avatar.png')}}" width="25px" alt="" class="avatar img-circle">
								<p class="notif-message">
									Donec sed odio dui.Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit.
									<abbr>Just Now</abbr>
								</p>
							</a>
						</li>
						 <li class="notif-body">
							<a href="dashboard.html#">
								<img src="{{asset('assets/img/sample/avatar.png')}}" width="25px" alt="" class="avatar img-circle">
								<p class="notif-message">
									Vehicula Pellentesque Ridiculus Parturient
									<abbr>Just Now</abbr>
								</p>
							</a>
						</li>
						 <li class="notif-body">
							<a href="dashboard.html#">
								<img src="{{asset('assets/img/sample/avatar.png')}}" width="25px" alt="" class="avatar img-circle">
								<p class="notif-message">
									Est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit.
									<abbr>Just Now</abbr>
								</p>
							</a>
						</li>
						<li class="nav-notifications-footer">
							<a tabindex="-1" href="dashboard.html#">View all messages</a>
						</li>
					</ul>
				</li>
				<li class="dropdown">
					<a href="dashboard.html#" class="dropdown-toggle" data-toggle="dropdown">
						<img src="{{asset('assets/img/sample/avatar.png')}}" width="30px" alt="" class="avatar img-circle">
						{{ Auth::user()->username }}
						<i class="icon-caret-down"></i>
					</a>
					<ul class="dropdown-menu reveal" style="width:200px">
						<li><a href="pages/basic-user-profile.html"><i class="icon-user"></i> Edit Profile</a></li>
						<li><a href="dashboard.html#"><i class="icon-cogs"></i> Settings</a></li>
						<li><a href="pages/faq.html"><i class="icon-info-sign"></i> Help</a></li>
						<li class="divider"></li>
						<li><a href="{{ route('logout') }}"><i class="icon-off"></i> Log Out</a></li>
					</ul>
				</li>

			</ul>
		</div>
	</nav>
</header>
