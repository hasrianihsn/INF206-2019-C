<div class="limiter">
    <!--navbar-->
    <div class="nav-bar">
        <nav class="navbar navbar-expand-lg">
            <!-- Logo -->
            <div><img src="https://i.imgur.com/nVdYg4z.png" alt=""></div>
            <!-- end of Logo -->
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fa fa-bars" id="bars"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url('Auth/index'); ?>">Home</a>
                </ul>
            </div>
        </nav>
    </div>
    <!--end of navbar-->

    <!--content-->
    <div class="container-login100" style="background-image: url('https://i.imgur.com/lXBFbV8.jpg');">
        <div class="wrap-login100 p-t-70 p-b-30">
            <form method="post" action="<?= base_url('Auth/signUp') ?>" class="login100-form validate-form">

                <span class="login100-form-title p-t-20 p-b-45">
                    Sign Up
                </span>

                <div class="wrap-input100 validate-input m-b-10">
                    <input class="input100" type="text" name="name" placeholder="Username" value="<?= set_value('name'); ?>">
                    <span class="focus-input100"></span>
                    <span class="symbol-input100">
                        <i class="fa fa-user"></i>
                    </span>
                    <?= form_error('name', '<small class="text-danger pl-3">',  '</small>'); ?>

                </div>

                <div class="wrap-input100 validate-input m-b-10">
                    <input class="input100" type="text" name="email" placeholder="Email" value="<?= set_value('email'); ?>">
                    <span class="focus-input100"></span>
                    <span class="symbol-input100">
                        <i class="fa fa-envelope-o"></i>
                    </span>
                    <?= form_error('email', '<small class="text-danger pl-3">',  '</small>'); ?>

                </div>

                <div class="wrap-input100 validate-input m-b-10">
                    <input class="input100" type="password" name="password1" placeholder="Password">
                    <span class="focus-input100"></span>
                    <span class="symbol-input100">
                        <i class="fa fa-lock"></i>
                    </span>
                    <?= form_error('password1', '<small class="text-danger pl-3">',  '</small>'); ?>

                </div>

                <div class="wrap-input100 validate-input m-b-10">
                    <input class="input100" type="password" name="password2" placeholder="Repeat Password">
                    <span class="focus-input100"></span>
                    <span class="symbol-input100">
                        <i class="fa fa-lock"></i>
                    </span>
                </div>

                <div class="container-login100-form-btn p-t-10">
                    <button type="submit" class="login100-form-btn">
                        SAVE
                    </button>
                </div>

            </form>
            <div class="text-center w-full p-t-25 p-b-50" style="color:white">
                <a href="<?= base_url('Auth/login'); ?>" class=" txt1">
                    Already have an account? login!
                </a>
            </div>

        </div>
    </div>
</div>
<!--end of content-->