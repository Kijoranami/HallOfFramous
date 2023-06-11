<?php require_once('../config.php') ?>
<!DOCTYPE html>
<html lang="en" class="" style="height: auto;">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <?php require_once('inc/header.php') ?>
<body class="hold-transition login-page" scroll="no" style="overflow: hidden">
    <?php if($_settings->chk_flashdata('success')): ?>
    <script>
      alert_toast("<?php echo $_settings->flashdata('success') ?>",'success')
    </script>
    <?php endif;?>      
  <script>
    start_loader()
  </script>
  <style>

.titlelogo {
    width: 100px;
    height: 100px;
}

.logintitle {
    font-size: 3.5rem;
}

.login-box {
    height: 75vh;
}

.carousel-item img {
    width: 100%;
    height: 100%;
    object-fit: contain;
}

/* Responsive CSS */

@media (min-width: 768px) {
    .titlelogo {
        width: 60px;
        height: 60px;
    }

    .logintitle {
        font-size: 2rem;
    }

    .login-box {
        height: 80vh;
    }
     .btn-primary {
        width: 100px;
    }
    
}


  </style>
<div class="login-box w-100 h-75 a">
  <div class="container h-100">
      <center>
      <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12 align-items-lg-center">
        <!-- /.login-logo -->
        <div class="card card-navy my-2">
          <div class="card-body">
		  <img src="<?php echo validate_image($_settings->info('logo')) ?>" class="my-lg-2 d-inline-block align-top titlelogo" alt="" loading="lazy">
		  <h1 class="text-center text-white logintitle px-4"><b>Hall of Framous</b></h1>
            <p class="login-box-msg">Ready to get famous?</p>
            <form id="ulogin-frm" action="" method="post">
              <div class="input-group mb-3">
                <input type="text" class="form-control" name="email" autofocus placeholder="Email">
                <div class="input-group-append">
                  <div class="input-group-text">
                    <span style="color:#fff;" class="fas fa-user"></span>
                  </div>
                </div>
              </div>
              <div class="input-group mb-3">
                <input type="password" class="form-control"  name="password" placeholder="Password">
                <div class="input-group-append">
                  <div class="input-group-text">
                    <span style="color:#fff;" class="fas fa-lock"></span>
                  </div>
                </div>
              </div>
              <div class="column">
			  <!-- /.col -->
                <div style='display:inline-flex; padding:0.375rem 10rem; justify-content:space-around;' class ="btn col-4">
                  <button type="submit" style='display:inline-flex; padding:0.375rem 10rem; justify-content:space-around;' class="btn btn-primary btn-block">Login</button>
                </div>
                <!-- /.col -->
                <div class="col-8">
				  <a style="color:white;">Don't have an account?</a><br>
                  <a href="./register.php">Create one here!</a>
                </div>
              </div>
            </form>
            
          </div>
          <!-- /.card-body -->
        </div>
        <!-- /.card -->
      </div>
      </center>
  </div>
</div>
<!-- /.login-box -->

<!-- jQuery -->
<script src="<?= base_url ?>plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="<?= base_url ?>plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="<?= base_url ?>dist/js/adminlte.min.js"></script>

<script>
  $(document).ready(function(){
    end_loader();
    $('#ulogin-frm').submit(function(e) {
        e.preventDefault()
        start_loader()
        if ($('.err_msg').length > 0)
            $('.err_msg').remove()
        $.ajax({
            url: _base_url_ + 'classes/Login.php?f=user_login',
            method: 'POST',
            data: $(this).serialize(),
            error: err => {
                console.log(err)

            },
            success: function(resp) {
                if (resp) {
                    resp = JSON.parse(resp)
                    if (resp.status == 'success') {
                        location.replace(_base_url_ + 'user');
                    } else if (resp.status == 'incorrect') {
                        var _frm = $('#ulogin-frm')
                        var _msg = "<div class='alert alert-danger err_msg'><i class='fa fa-exclamation-triangle'></i> Incorrect username or password</div>"
                        _frm.prepend(_msg)
                        _frm.find('input').addClass('is-invalid')
                        $('[name="username"]').focus()
                    }
                    end_loader()
                }
            }
        })
    })
  })
</script>
</body>
</html>