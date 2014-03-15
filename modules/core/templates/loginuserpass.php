<?php
$this->data['header'] = $this->t('{login:user_pass_header}');

if (strlen($this->data['username']) > 0) {
	$this->data['autofocus'] = 'password';
} else {
	$this->data['autofocus'] = 'username';
}
$this->includeAtTemplateBase('includes/header.php');
//exit;
?>
<?php
if ($this->data['errorcode'] !== NULL) {
?>
	<!--<div style="border-left: 1px solid #e8e8e8; border-bottom: 1px solid #e8e8e8; background: #f5f5f5">-->
		<!--<img src="/<?php echo $this->data['baseurlpath']; ?>resources/icons/experience/gtk-dialog-error.48x48.png" class="float-l erroricon" style="margin: 15px " />-->
		<!--<h2> ΠΡΟΒΛΗΜΑ <!-- <?php echo $this->t('{login:error_header}'); ?> --> </h2-->
		<!-- <p><b><?php echo htmlspecialchars($this->t('{errors:title_' . $this->data['errorcode'] . '}', $this->data['errorparams'])); ?></b></p> -->
		<!-- <?php echo htmlspecialchars($this->t('{errors:descr_' . $this->data['errorcode'] . '}', $this->data['errorparams'])); ?>-->

<div class="alert alert-error">  
  <a class="close" data-dismiss="alert">×</a>  
  <strong>Error!</strong>
Λάθος κατά τη σύνδεση σας στις Μονάδες Αριστείας. Είτε το όνομα χρήστη που δηλώσατε δεν υπάρχει είτε ο κωδικός χρήστη δεν ταιριάζει. 
</div>
<?php
}
?>

<div id="main1" class="main1">
      <div class="container">
        <div class="row-fluid">&nbsp;
        <div class="span4 offset4"><h3> Σύνδεση </h3></div>
        </div>
        <div class="row-fluid login dropdown yamm-fullwidth open dropdown-toggle">
    		<div class="span12">
                <div class="yamm-content">
                
                  <div class="row-fluid">
                    <form class="form-horizontal span12" action=?" method="post" name="f">
                      <fieldset class="form-vertical span4 offset4">
                        <div class="control-group">
                          <label class="control-label span12" for="login-email">E-MAIL / ΟΝΟΜΑ ΧΡΗΣΤΗ</label>
                          <div class="controls">
                            <input input type="text" id="cwusername" tabindex="1" name="username" value="" class="input-block-level">
                          </div>
                        </div>
                        <div class="control-group">
                          <label class="control-label span12" for="login-password">ΚΩΔΙΚΟΣ</label>
                          <div class="controls">
				<input type="password" id="password" type="password" tabindex="2" name="password" class="input-block-level">
                          </div>
                        </div>
                        <div class="control-group">
                          <label class="control-label span12" for="login-button"></label>
                          <div class="control">
				<?php
				foreach ($this->data['stateparams'] as $name => $value) {
					echo('<input type="hidden" name="' . htmlspecialchars($name) . '" value="' . htmlspecialchars($value) . '" />');
				}
				?>
				    <button id="regularsubmit" name="regularsubmit" tabindex="4" class="btn btn-primary btn-block">ΣΥΝΔΕΣΗ</button>
                          </div>
                        </div>
                      </fieldset>
                    </form>
                    <div class="row-fluid">
                      <div class="span4 offset4"><a href="/resetemail-1.php" class="btn btn-link">ΞΕΧΑΣΑ ΤΟΝ ΚΩΔΙΚΟ ΜΟΥ</a></div>
                    </div>
                    <div class="row-fluid">
                      <div class="span4 offset4"><a href="/register.php" class="btn btn-link">ΔΕΝ ΕΧΩ ΛΟΓΑΡΙΑΣΜΟ</a></div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            </div>
    </div>

    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="js/jquery-1.10.2.min.js"></script>


<?php
$this->includeAtTemplateBase('includes/footer.php');
?>
