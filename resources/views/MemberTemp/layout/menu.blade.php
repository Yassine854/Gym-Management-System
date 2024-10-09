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
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
        position: fixed;

    }
    #black{
        color :black;
    }

    #sp:hover{
        background-color: rgb(148, 167, 173);
        color: black;
    }

</style>
    <a href="/MemberTemp/layout/dashboard" class="brand-link">
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
          <img src="https://cdn.iconscout.com/icon/premium/png-256-thumb/membership-2590454-2162628.png" style="width: 40px; height:35px;" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info" id="t">
          <p  style="color: rgb(123, 138, 143);"><b>Member</b></p>

        </div>


      </div>



      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->

          </li>
          <li class="nav-item" id="sp">
            <a href="/MemberTemp/layout/dashboard" class="nav-link">
            <i class="fa fa-user-circle" id="black"></i>
              <p id="black">Dashboard</p>
            </a>
          </li>

          <li class="nav-item menu">
            <a href="#" class="nav-link active"id="color">
              <i class="fa fa-star fa-spin"></i>
              <p>
               Your Subscriptions
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item" id="sp">
                <a href="{{route('memberprofile.index')}}" class="nav-link ">
                  <i id="black"class="fa fa-star"></i>
                  <p id="black">Current Subscriptions</p>
                </a>
              </li>
              <li class="nav-item" id="sp">
                <a href="{{route('endsubscription.index')}}" class="nav-link">
                  <i id="black" class="fa fa-times-circle"></i>
                  <p id="black">Ended Subscriptions</p>
                </a>
              </li>
            </ul>
          </li>

              <li class="nav-item" id="sp">
                <a href="{{route('memberschedule.index')}}" class="nav-link">
                <i class="fa fa-calendar" id="black"></i>
                  <p id="black">Schedule</p>
                </a>
              </li>




      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

