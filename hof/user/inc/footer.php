<script>
  $(document).ready(function(){
    $('#p_use').click(function(){
      uni_modal("Privacy Policy","policy.php","mid-large")
    })
     window.viewer_modal = function($src = ''){
      start_loader()
      var t = $src.split('.')
      t = t[1]
      if(t =='mp4'){
        var view = $("<video src='"+$src+"' controls autoplay></video>")
      }else{
        var view = $("<img src='"+$src+"' />")
      }
      $('#viewer_modal .modal-content video,#viewer_modal .modal-content img').remove()
      $('#viewer_modal .modal-content').append(view)
      $('#viewer_modal').modal({
              show:true,
              backdrop:'static',
              keyboard:false,
              focus:true
            })
            end_loader()  

  }
    window.uni_modal = function($title = '' , $url='',$size=""){
        start_loader()
        $.ajax({
            url:$url,
            error:err=>{
                console.log()
                alert("An error occured")
            },
            success:function(resp){
                if(resp){
                    $('#uni_modal .modal-title').html($title)
                    $('#uni_modal .modal-body').html(resp)
                    if($size != ''){
                        $('#uni_modal .modal-dialog').addClass($size+'  modal-dialog-centered')
                    }else{
                        $('#uni_modal .modal-dialog').removeAttr("class").addClass("modal-dialog modal-md modal-dialog-centered")
                    }
                    $('#uni_modal').modal({
                      show:true,
                      backdrop:'static',
                      keyboard:false,
                      focus:true
                    })
                    end_loader()
                }
            }
        })
    }
    window._conf = function($msg='',$func='',$params = []){
       $('#confirm_modal #confirm').attr('onclick',$func+"("+$params.join(',')+")")
       $('#confirm_modal .modal-body').html($msg)
       $('#confirm_modal').modal('show')
    }
  })
</script>
<!-- Footer-->
    <!-- Footer Section Start -->
    <footer>
        <div class="footcol">
            <h4>Contacts</h4>
            <p><strong>Address: </strong>Mussafah, Abu Dhabi <br>United Arab Emirates</p>
            <p><strong>Phone: </strong>+971 56 267 8393</p>
            <div class="follow">
                <h4>Follow Us</h4>
                <div class="icons">
                    <a href="https://instagram.com/girimi.bl?igshid=ZDc4ODBmNjlmNQ=="><i class="fab fa-instagram"></i></a>
                    <a href="https://www.youtube.com/watch?v=s6JD8U0LTKE&list=PLybRmesD6LSjBwwcNKtK_uTInKYkdNRyf&index=4"><i class="fab fa-youtube"></i></a>
                </div>
            </div>
        </div>

        <div class="footcol">
            <h4>About</h4>
            <a href="https://instagram.com/girimi.bl?igshid=ZDc4ODBmNjlmNQ==">Who am I?</a>
        </div>

        <div class="footcol">
            <h4>Care for some music?</h4>
            <a href="https://www.youtube.com/watch?v=RJzTIPulZBg&list=PLybRmesD6LSjBwwcNKtK_uTInKYkdNRyf&index=3&pp=gAQBiAQB">Catchin' Fire</a>
            <a href="https://www.youtube.com/watch?v=s6JD8U0LTKE&list=PLybRmesD6LSjBwwcNKtK_uTInKYkdNRyf&index=4&pp=gAQBiAQB">My Shirt</a>
            <a href="https://www.youtube.com/watch?v=61hCctuMuzg&list=PLybRmesD6LSjBwwcNKtK_uTInKYkdNRyf&index=8&pp=gAQBiAQB">Great Time To Be Human</a>
            <a href="https://www.youtube.com/watch?v=dZcO0YIehUk&list=PLybRmesD6LSjBwwcNKtK_uTInKYkdNRyf&index=20&pp=gAQBiAQB">Yuck</a>
            <a href="https://www.youtube.com/watch?v=zPQCIRdGAJ0&list=PLybRmesD6LSjBwwcNKtK_uTInKYkdNRyf&index=21&pp=gAQBiAQB">Constant Repeat</a>
        </div>

        <div class="copyright">
            <p>© 2023 - 2024, Hall of Framous </p>
        </div>
    </footer>
    <!-- Footer Section End -->
   
    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
    <script>
      $.widget.bridge('uibutton', $.ui.button)
    </script>
    <!-- Bootstrap 4 -->
    <script src="<?php echo base_url ?>plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- ChartJS -->
    <script src="<?php echo base_url ?>plugins/chart.js/Chart.min.js"></script>
    <!-- Sparkline -->
    <script src="<?php echo base_url ?>plugins/sparklines/sparkline.js"></script>
    <!-- Select2 -->
    <script src="<?php echo base_url ?>plugins/select2/js/select2.full.min.js"></script>
    <!-- JQVMap -->
    <script src="<?php echo base_url ?>plugins/jqvmap/jquery.vmap.min.js"></script>
    <script src="<?php echo base_url ?>plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
    <!-- jQuery Knob Chart -->
    <script src="<?php echo base_url ?>plugins/jquery-knob/jquery.knob.min.js"></script>
    <!-- daterangepicker -->
    <script src="<?php echo base_url ?>plugins/moment/moment.min.js"></script>
    <script src="<?php echo base_url ?>plugins/daterangepicker/daterangepicker.js"></script>
    <!-- Tempusdominus Bootstrap 4 -->
    <script src="<?php echo base_url ?>plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
    <!-- Summernote -->
    <script src="<?php echo base_url ?>plugins/summernote/summernote-bs4.min.js"></script>
    <script src="<?php echo base_url ?>plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="<?php echo base_url ?>plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
    <script src="<?php echo base_url ?>plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
    <script src="<?php echo base_url ?>plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
    <script src="<?php echo base_url ?>plugins/dropzone/min/dropzone.min.js"></script>

    <!-- overlayScrollbars -->
    <!-- <script src="<?php echo base_url ?>plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script> -->
    <!-- AdminLTE App -->
    <script src="<?php echo base_url ?>dist/js/adminlte.js"></script>
    <div class="daterangepicker ltr show-ranges opensright">
      <div class="ranges">
        <ul>
          <li data-range-key="Today">Today</li>
          <li data-range-key="Yesterday">Yesterday</li>
          <li data-range-key="Last 7 Days">Last 7 Days</li>
          <li data-range-key="Last 30 Days">Last 30 Days</li>
          <li data-range-key="This Month">This Month</li>
          <li data-range-key="Last Month">Last Month</li>
          <li data-range-key="Custom Range">Custom Range</li>
        </ul>
      </div>
      <div class="drp-calendar left">
        <div class="calendar-table"></div>
        <div class="calendar-time" style="display: none;"></div>
      </div>
      <div class="drp-calendar right">
        <div class="calendar-table"></div>
        <div class="calendar-time" style="display: none;"></div>
      </div>
      <div class="drp-buttons"><span class="drp-selected"></span><button class="cancelBtn btn btn-sm btn-default" type="button">Cancel</button><button class="applyBtn btn btn-sm btn-primary" disabled="disabled" type="button">Apply</button> </div>
    </div>
    <div class="jqvmap-label" style="display: none; left: 1093.83px; top: 394.361px;">Idaho</div>