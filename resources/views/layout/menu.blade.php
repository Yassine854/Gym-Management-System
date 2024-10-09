<!-- Main Sidebar Container -->
<aside id="as" class="main-sidebar sidebar-dark-primary elevation-4">


    <!-- Brand Logo -->
<style>
#im{
        margin-left: 60px;
        display: inline-block;
        position: relative;
        overflow: hidden;
        border-radius: 50%;

    }
    #text{
        margin-left: 50px;
        text-shadow: 1px 1px 2px black;
    }
    #t{

        margin-left: 10px;
        text-shadow: 1px 1px 1px #000,
               3px 3px 5px gray;

    }
    #color{
        background-color: #ed563b
    }
    #as{
        background-image: url('https://st2.depositphotos.com/1875497/7347/i/600/depositphotos_73475491-stock-photo-abstract-blur-gym.jpg');
        background-color: #cccccc;
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;

    }
    /* .sp{
        background-color: #ee8471;
        color: black;
    } */
    #sp:hover{
        background-color: #ffc2a9;
        color: black;
    }
    #black{
        color: #000;
    }

</style>
    <a href="/admin" class="brand-link">
        <div id="im">
      <img src="https://st4.depositphotos.com/18426998/20265/i/600/depositphotos_202652228-stock-photo-gymnasium-fitness-logo-in-vector.jpg"  style="opacity: .8"  width="100px">
        </div>
      <div class="brand-text font-weight-light" id="text">Training Studio</div>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="https://cdn.iconscout.com/icon/free/png-512/administrator-2166550-1836773.png" width="100px" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info" id="t">
          <p  style="color: firebrick;"><b>Administrator</b></p>

        </div>


      </div>



      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item menu">
            <a href="#" class="nav-link active" id="color">
              <i class=	"fas fa-running"></i>
              <p>
                Members
                <i class="right fas fa-angle-left" ></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item" id="sp">
                <a href="{{route('members.create')}}" class="nav-link">
                  <i id="black" class="fa fa-plus-circle"></i>
                  <p id="black">Add Member</p>
                </a>
              </li>

              <li class="nav-item" id="sp">
                <a href="{{route('members.index')}}" class="nav-link">
                  <i id="black" class="fa fa-list-alt"></i>
                  <p id="black"> Members List</p>
                </a>
              </li>

            </ul>
          </li>


          <li class="nav-item menu">
            <a href="#" class="nav-link active" id="color">
              <i class="fas fa-user-shield"></i>
              <p>
                Coaches
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item" id="sp">
                <a href="{{route('coaches.create')}}" class="nav-link">
                  <i id="black" class="fa fa-plus-circle"></i>
                  <p id="black">Add Coach</p>
                </a>
              </li>

              <li class="nav-item" id="sp">
                <a href="{{route('coaches.index')}}" class="nav-link">
                  <i id="black" class="fa fa-list-alt"></i>
                  <p id="black">Coaches List</p>
                </a>
              </li>
            </ul>
          </li>


          <li class="nav-item menu" >
            <a href="#" class="nav-link active"id="color">
              <i class="fas fa-dumbbell"></i>
              <p>
                Sports
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item" id="sp">
                <a href="{{route('sports.create')}}" class="nav-link">
                  <i id="black" class="fa fa-plus-circle"></i>
                  <p id="black" >Add Sport</p>
                </a>
              </li>

              <li class="nav-item" id="sp">
                <a href="{{route('sports.index')}}" class="nav-link">
                  <i id="black"class="fa fa-list-alt"></i>
                  <p id="black">Sports List</p>
                </a>
              </li>

            </ul>
          </li>

          <li class="nav-item menu">
            <a href="#" class="nav-link active" id="color">
              <i class="fas fa-bolt"></i>
              <p>
                Products
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item" id="sp">
                <a href="{{route('products.create')}}" class="nav-link ">
                  <i id="black" class="fa fa-plus-circle"></i>
                  <p id="black">Add Product</p>
                </a>
              </li>

              <li class="nav-item" id="sp">
                <a href="{{route('products.index')}}" class="nav-link">
                  <i id="black" class="fa fa-list-alt"></i>
                  <p id="black">products List</p>
                </a>
              </li>

            </ul>
          </li>



          <li class="nav-item menu">
            <a href="#" class="nav-link active"id="color">
              <i class="fa fa-star fa-spin"></i>
              <p>
                Subscriptions
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item" id="sp">
                <a href="{{route('subscriptions.index')}}" class="nav-link ">
                  <i id="black"class="fa fa-star"></i>
                  <p id="black">Current Subscriptions</p>
                </a>
              </li>
              <li class="nav-item" id="sp">
                <a href="{{route('end.index')}}" class="nav-link">
                  <i id="black" class="fa fa-times-circle"></i>
                  <p id="black">Ended Subscriptions</p>
                </a>
              </li>
            </ul>
          </li>

              <li class="nav-item menu">
                <a href="#" class="nav-link active" id="color">
                  <i class="fa fa-calendar"></i>
                  <p>
                    Schedule
                    <i class="right fas fa-angle-left"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview">
                  <li class="nav-item" id="sp">
                    <a href="{{route('tasks.create')}}" class="nav-link ">
                      <i id="black" class="fa fa-plus-circle" aria-hidden="true"></i>
                      <p id="black">Create event</p>
                    </a>
                  </li>

                  <li class="nav-item" id="sp">
                    <a href="{{route('tasks.index')}}" class="nav-link">
                      <i id="black" class="fa fa-calendar"></i>
                      <p id="black">Calendar</p>
                    </a>
                  </li>

                </ul>
              </li>


              <li class="nav-item menu">
                <a href="#" class="nav-link active" id="color">
                  <i class=	"fa fa-cog fa-spin fa-1x fa-fw"></i>
                  <p>
                    Settings
                    <i class="right fas fa-angle-left"></i>
                  </p>
                </a>

                <ul class="nav nav-treeview">

                  <li class="nav-item" id="sp">
                    <a href="{{route('users.create')}}" class="nav-link">
                      <i id="black" class="fa fa-user-plus"></i>
                      <p id="black">Add Admin</p>
                    </a>
                  </li>
                </ul>






      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

