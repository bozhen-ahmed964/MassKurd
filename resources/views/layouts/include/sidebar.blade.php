  <aside
      class="sidenav navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-3   bg-gradient-dark"
      id="sidenav-main">



      <div class="sidenav-header">
          <i class="fas fa-times p-3 cursor-pointer text-white opacity-5 position-absolute end-0 top-0 d-none d-xl-none"
              aria-hidden="true" id="iconSidenav"></i>
          <a class="navbar-brand m-0">

              <span class="ms-1 font-weight-bold text-white fs-3 ">MassKurd</span>
          </a>
      </div>
      <hr class="horizontal light mt-0 mb-2">
      <div class="collapse navbar-collapse  w-auto " id="sidenav-collapse-main">
          <ul class="navbar-nav">






              <li class="nav-item">
                  <a class="nav-link text-white active bg-gradient-primary" href="/dashboard">
                      <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                          <i class="material-icons opacity-10">dashboard</i>
                      </div>
                      <span class="nav-link-text ms-1">Home</span>
                  </a>
              </li>


              <li class="nav-item">
                  <a class="nav-link text-white " href="/addMember">
                      <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                          <i class="material-icons opacity-10">personadd</i>
                      </div>
                      <span class="nav-link-text ms-1">Add Member +</span>
                  </a>
              </li>



              <li class="nav-item">
                  <a class="nav-link text-white " href="/memberTable">
                      <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                          <i class="material-icons opacity-10">table_view</i>
                      </div>
                      <span class="nav-link-text ms-1">Members Tabel</span>
                  </a>
              </li>




              <li class="nav-item">
                  <a class="nav-link text-white " href="/billing">
                      <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                          <i class="material-icons opacity-10">paid</i>
                      </div>
                      <span class="nav-link-text ms-1">Billing</span>
                  </a>
              </li>




              <li class="nav-item">
                  <a class="nav-link text-white " href="/buildingCourse">
                      <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                          <i class="material-icons opacity-10">fitness_center</i>
                      </div>
                      <span class="nav-link-text ms-1">Building Course</span>
                  </a>
              </li>


              <li class="nav-item">
                  <a class="nav-link text-white " href="/mealCourse">
                      <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                          <i class="material-icons opacity-10">fastfood</i>
                      </div>
                      <span class="nav-link-text ms-1">Meal Course</span>
                  </a>
              </li>

              <li class="nav-item">
                  <a class="nav-link text-white " href="/calCalculator">
                      <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                          <i class="material-icons opacity-10">calculate</i>
                      </div>
                      <span class="nav-link-text ms-1">CAL Calculator</span>
                  </a>
              </li>






              <li class="nav-item mt-3">
                  <h6 class="ps-4 ms-2 text-uppercase text-xs text-white font-weight-bolder opacity-8">Account pages
                  </h6>
              </li>




              <li class="nav-item">
                  <a class="nav-link text-white " href="/profile">
                      <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                          <i class="material-icons opacity-10">person</i>
                      </div>
                      <span class="nav-link-text ms-1">Profile</span>
                  </a>
              </li>



              <li class="nav-item">
                  <a class="nav-link text-white " href="{{ route('logout') }}"
                      onclick="event.preventDefault();
                      document.getElementById('logout-form').submit();">
                      <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                          @csrf
                      </form>

                      <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                          <i class="material-icons opacity-10">login</i>
                      </div>
                      <span class="nav-link-text ms-1">Logout</span>
                  </a>
              </li>




          </ul>
      </div>
      <div class="sidenav-footer position-absolute w-100 bottom-0 ">
          <div class="mx-3">
              <a class="btn bg-gradient-primary mt-4 w-100" href="#" type="button">Find Me : Bozhen Ahmed</a>
          </div>
      </div>
  </aside>
