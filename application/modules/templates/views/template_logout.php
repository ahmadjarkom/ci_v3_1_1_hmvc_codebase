<li class="list-inline-item dropdown notif">
    <a class="nav-link dropdown-toggle nav-user" data-toggle="dropdown" href="#" aria-haspopup="false" aria-expanded="false">
        <img src="<?php echo base_url('assets/images/avatars/admin.png') ?>" alt="Profile image" class="avatar-rounded">
    </a>
    <div class="dropdown-menu dropdown-menu-right profile-dropdown">
        <!-- item-->
        <div class="dropdown-item noti-title">
            <h5 class="text-overflow"><small>Hello, <?php echo $this->session->userdata('user_detail')->data_user->nama_user; ?> </small> </h5>
        </div>

        <!-- item-->
        <a href="<?php echo base_url('/login/logout') ?>" class="dropdown-item notify-item">
            <i class="fa fa-power-off"></i> <span>Logout</span>
        </a>

        <!-- item-->
    </div>
</li>