<div class="app" id="app">

<!-- ############ LAYOUT START-->

<!-- aside -->
<div id="aside" class="app-aside modal nav-dropdown">
  <!-- fluid app aside -->
  <div class="left navside dark dk" data-layout="column">
    <div class="navbar no-radius">
      <!-- brand -->
      <a class="navbar-brand">
        <!-- <div ui-include="'./assets/images/logo.png'"></div> -->
        <img src="./assets/images/logo.png" alt=".">
        <span class="hidden-folded inline">B-FIT GYM</span>
      </a>
      <!-- / brand -->
    </div>
    <div class="hide-scroll" data-flex>
        <nav class="scroll nav-light">

            <ul class="nav" ui-nav>
              <li class="nav-header hidden-folded">
                <small class="text-muted">Main</small>
              </li>

              <li>
                <a href="/b-fit" >
                  <span class="nav-icon">
                    <i class="material-icons">&#xe3fc;
                      <span ui-include="'./assets/images/i_0.svg'"></span>
                    </i>
                  </span>
                  <span class="nav-text">Dashboard</span>
                </a>
              </li>

              <li>
                <a href="/b-fit/index.php?/members/getAllMembers">
                  <!-- <span class="nav-caret">
                    <i class="fa fa-caret-down"></i>
                  </span> -->
                  <span class="nav-label">
                    <b class="label rounded label-sm primary">5</b>
                  </span>
                  <span class="nav-icon">
                    <i class="material-icons">&#xe5c3;
                      <span ui-include="'./assets/images/i_1.svg'"></span>
                    </i>
                  </span>
                  <span class="nav-text">Members</span>
                </a>

              </li>

              <li>
                <a href="widget.html" >
                  <span class="nav-icon">
                    <i class="material-icons">&#xe8d2;
                      <span ui-include="'./assets/images/i_3.svg'"></span>
                    </i>
                  </span>
                  <span class="nav-text">Expenses</span>
                </a>
              </li>

              <li>
                <a href="widget.html" >
                  <span class="nav-icon">
                    <i class="material-icons">&#xe8d2;
                      <span ui-include="'./assets/images/i_3.svg'"></span>
                    </i>
                  </span>
                  <span class="nav-text">Events</span>
                </a>
              </li>

              <li>
                <a href="widget.html" >
                  <span class="nav-icon">
                    <i class="material-icons">&#xe8d2;
                      <span ui-include="'./assets/images/i_3.svg'"></span>
                    </i>
                  </span>
                  <span class="nav-text">Contacts</span>
                </a>
              </li>

              <li>
                <a>
                  <span class="nav-icon">
                    <i class="material-icons">&#xe8f0;
                      <span ui-include="'./assets/images/i_2.svg'"></span>
                    </i>
                  </span>
                  <span class="nav-text">Reports</span>
                </a>

              </li>


        </nav>
    </div>
    <!-- <div class="b-t">
      <div class="nav-fold">
        <a href="profile.html">
            <span class="pull-left">
              <img src="./assets/images/a0.jpg" alt="..." class="w-40 img-circle">
            </span>
            <span class="clear hidden-folded p-x">
              <span class="block _500">Jean Reyes</span>
              <small class="block text-muted"><i class="fa fa-circle text-success m-r-sm"></i>online</small>
            </span>
        </a>
      </div>
    </div> -->
  </div>
</div>
<!-- / -->

<!-- content -->
<div id="content" class="app-content box-shadow-z0" role="main">
  <div class="app-header white box-shadow">
      <div class="navbar navbar-toggleable-sm flex-row align-items-center">
          <!-- Open side - Naviation on mobile -->
          <a data-toggle="modal" data-target="#aside" class="hidden-lg-up mr-3">
            <i class="material-icons">&#xe5d2;</i>
          </a>
          <!-- / -->

          <!-- Page title - Bind to $state's title -->
          <div class="mb-0 h5 no-wrap" ng-bind="$state.current.data.title" id="pageTitle"></div>

          <!-- navbar collapse -->
          <div class="collapse navbar-collapse" id="collapse">
            <!-- link and dropdown -->
            <ul class="nav navbar-nav mr-auto">
              <li class="nav-item dropdown">
                <a class="nav-link" href data-toggle="dropdown">
                  <i class="fa fa-fw fa-plus text-muted"></i>
                  <span>New</span>
                </a>
                <div ui-include="'./assets/views/blocks/dropdown.new.html'"></div>
              </li>
            </ul>

            <div ui-include="'./assets/views/blocks/navbar.form.html'"></div>
            <!-- / -->
          </div>
          <!-- / navbar collapse -->

          <!-- navbar right -->
          <ul class="nav navbar-nav ml-auto flex-row">
            <li class="nav-item dropdown pos-stc-xs">
              <a class="nav-link mr-2" href data-toggle="dropdown">
                <i class="material-icons">&#xe7f5;</i>
                <span class="label label-sm up warn">3</span>
              </a>
              <div ui-include="'./assets/views/blocks/dropdown.notification.html'"></div>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link p-0 clear" href="#" data-toggle="dropdown">
                <span class="avatar w-32">
                  <img src="./assets/images/a0.jpg" alt="...">
                  <i class="on b-white bottom"></i>
                </span>
              </a>
              <div ui-include="'./assets/views/blocks/dropdown.user.html'"></div>
            </li>
            <li class="nav-item hidden-md-up">
              <a class="nav-link pl-2" data-toggle="collapse" data-target="#collapse">
                <i class="material-icons">&#xe5d4;</i>
              </a>
            </li>
          </ul>
          <!-- / navbar right -->
      </div>
  </div>
  <div class="app-footer">
    <div class="p-2 text-xs">
      <div class="pull-right text-muted py-1">
        &copy; Copyright <strong>B-Fit</strong> <span class="hidden-xs-down">- Built by Flitzen Technologies Pvt Ltd</span>
        <a ui-scroll-to="content"><i class="fa fa-long-arrow-up p-x-sm"></i></a>
      </div>
      <div class="nav">
        <a class="nav-link" href="../">Help</a>
        <a class="nav-link" href="http://flitzen.in/">Contact Us</a>
      </div>
    </div>  
  </div>
  <div ui-view class="app-body" id="view">
