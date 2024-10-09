<!-- Main Sidebar Container -->
<aside id="as" class="main-sidebar sidebar-dark-primary elevation-4">


    <!-- Brand Logo -->
    <style>
        #im {
            margin-left: 60px;
            display: inline-block;
            position: relative;
            overflow: hidden;
            border-radius: 50%;

        }

        #text {
            margin-left: 50px;
            text-shadow: 1px 1px 2px black;
        }

        #t {

            margin-left: 10px;
            text-shadow: 1px 1px 1px #000,
                3px 3px 5px gray;

        }

        #color {
            background-color: #ed563b
        }

        #as {
            background-image: url('https://st2.depositphotos.com/1875497/7347/i/600/depositphotos_73475491-stock-photo-abstract-blur-gym.jpg');
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
            position: fixed;

        }

        #black {
            color: black;
        }

        #sp:hover {
            background-color: rgb(255, 166, 0);
            color: black;
        }
    </style>
    <a href="/CoachTemp/layout/dashboard" class="brand-link">
        <div id="im">
            <img src="https://st4.depositphotos.com/18426998/20265/i/600/depositphotos_202652228-stock-photo-gymnasium-fitness-logo-in-vector.jpg"
                style="opacity: .8" width="100px">
        </div>
        <div class="brand-text font-weight-light" id="text">Training Studio</div>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="http://www.fakremsports.org/assets/img/book6.png" width="100px" class="img-circle elevation-2"
                    alt="User Image">
            </div>
            <div class="info" id="t">
                <p style="color: orange;"><b>Coach</b></p>

            </div>


        </div>



        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->

                </li>
                <li class="nav-item" id="sp">
                    <a href="/CoachTemp/layout/dashboard" class="nav-link">
                        <i class="fa fa-user-circle" id="black"></i>
                        <p id="black">Dashboard</p>
                    </a>
                </li>

                <li class="nav-item" id="sp">
                    <a href="{{route('memberlist.index')}}" class="nav-link">
                        <i class="fa fa-list-ul" id="black"></i>
                        <p id="black">Members List</p>
                    </a>
                </li>

                <li class="nav-item" id="sp">
                    <a href="{{route('schedule.index')}}" class="nav-link">
                        <i class="fa fa-calendar" id="black"></i>
                        <p id="black">Schedule</p>
                    </a>
                </li>




        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
