<body class="login">    
    <div>
      <div class="login_wrapper">
        <div class="animate form login_form">
          <section class="login_content">
							<br><br><br><br>
							<img src="assets/images/logo.png" width="300" height="130" alt="Logo">						
						<form name="logForm" id="theform" data-parsley-validate action="login_validasi" method="post">
							<div class="separator">
                <div class="clearfix"></div>
							</div>							
              <h2>Inventory</h2>
              <br />
	<?php if ($errormsg) { ?>
							<div class="alert alert-danger alert-dismissible fade in" role="alert">
								<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span>
								</button>
								<strong>Error</strong>: <?php echo $errormsg;?>
							</div>                  		
	<?php } ?>              
              <div>
                <input type="text" class="form-control" placeholder="Username" required="required" name="txtUser"/>
              </div>
              <div>
                <input type="password" class="form-control" placeholder="Password" required="required" name="txtPassword"/>
              </div>
              <div>
                <input type="submit" class="btn btn-default submit" name="btnLogin" value="Log in" />
              </div>

              <div class="clearfix"></div>

              <div class="separator">
                <div class="clearfix"></div>
                <br />
                <div>
                  <p>© 2016 All Rights Reserved. Inventory.</p>
                </div>
              </div>
            </form>
          </section>
        </div>
      </div>
    </div>
    <script src="assets/others/jquery/dist/jquery.min.js"></script>
    <script src="assets/others/parsleyjs/dist/parsley.min.js"></script>
    <script>
      $(document).ready(function() {
        $.listen('parsley:field:validate', function() {
          validateFront();
        });
        $('#theform .btn').on('click', function() {
          $('#theform').parsley().validate();
          validateFront();
        });
        var validateFront = function() {
          if (true === $('#theform').parsley().isValid()) {
            $('.bs-callout-info').removeClass('hidden');
            $('.bs-callout-warning').addClass('hidden');
          } else {
            $('.bs-callout-info').addClass('hidden');
            $('.bs-callout-warning').removeClass('hidden');
          }
        };
      });    		
    </script>
</body>
