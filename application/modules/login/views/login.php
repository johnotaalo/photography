<!-- begin login -->
        <div class="login login-v2" data-pageload-addclass="animated flipInX">
            <!-- begin brand -->
            <div class="login-header">
                <div class="brand">
                    <span class="logo"></span>Photography
                    <small>Login to the best photography of all time.</small>
                </div>
                <div class="icon">
                    <i class="fa fa-sign-in"></i>
                </div>
            </div>
            <!-- end brand -->
            <div class="login-content">
                <form action="<?php echo base_url(); ?>auth/login" method="POST" class="margin-bottom-0">
                    <div class="form-group m-b-20">
                        <input type="text" class="form-control input-lg" name="username" id="username" placeholder="Username" />
                    </div>
                    <div class="form-group m-b-20">
                        <input type="password" class="form-control input-lg" name="password" id="password" placeholder="Password" />
                    </div>
                    <div class="checkbox m-b-20">
                        <label>
                            <input type="checkbox" /> Remember Me
                        </label>
                    </div>
                    <div class="login-buttons">
                        <button type="submit" class="btn btn-success btn-block btn-lg">Login</button>
                    </div>
                    <div class="m-t-20">
                        Not a member yet? Click <a href="login/sign_up">here</a> to register.
                    </div>
                </form>
            </div>
        </div>
<!-- end login -->
        