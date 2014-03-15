<?php
$this->data['header'] = $this->t('{login:user_pass_header}');

if (strlen($this->data['username']) > 0) {
	$this->data['autofocus'] = 'password';
} else {
	$this->data['autofocus'] = 'username';
}
$this->includeAtTemplateBase('includes/header.php');

?>
<?php
if ($this->data['errorcode'] !== NULL) {
?>
<!--
	<div style="border-left: 1px solid #e8e8e8; border-bottom: 1px solid #e8e8e8; background: #f5f5f5">
		<img src="/<?php echo $this->data['baseurlpath']; ?>resources/icons/experience/gtk-dialog-error.48x48.png" class="float-l erroricon" style="margin: 15px " />
		<h2><?php echo $this->t('{login:error_header}'); ?></h2>
		<p><b><?php echo htmlspecialchars($this->t('{errors:title_' . $this->data['errorcode'] . '}', $this->data['errorparams'])); ?></b></p>
		<p><?php echo htmlspecialchars($this->t('{errors:descr_' . $this->data['errorcode'] . '}', $this->data['errorparams'])); ?></p>
	</div>
-->
<?php
}
?>
<!--
	<h2 style="break: both"><?php echo $this->t('{login:user_pass_header}'); ?></h2>

	<p class="logintext"><?php echo $this->t('{login:user_pass_text}'); ?></p>
<?php

if(!empty($this->data['links'])) {
	echo '<ul class="links" style="margin-top: 2em">';
	foreach($this->data['links'] AS $l) {
		echo '<li><a href="' . htmlspecialchars($l['href']) . '">' . htmlspecialchars($this->t($l['text'])) . '</a></li>';
	}
	echo '</ul>';
}




echo('<h2 class="logintext">' . $this->t('{login:help_header}') . '</h2>');
echo('<p class="logintext">' . $this->t('{login:help_text}') . '</p>');
?>
-->

<!--

	<form action="?" method="post" name="f">
	<table>
		<tr>
			<td rowspan="3"><img src="/simplesaml/resources/icons/experience/gtk-dialog-authentication.48x48.png" id="loginicon" alt="" /></td>
			<td style="padding: .3em;">Username</td>
			<td>
<input type="text" id="username" tabindex="1" name="username" value="" />			</td>
			<td style="padding: .4em;" rowspan="2">
				<input type="submit" tabindex="4" id="regularsubmit" value="Login" />			</td>
		</tr>
		<tr>
			<td style="padding: .3em;">Password</td>
			<td><input id="password" type="password" tabindex="2" name="password" /></td>
		</tr>

	<tr><td></td><td>
	<input type="submit" tabindex="5" id="mobilesubmit" value="Login" />
	</td></tr>
	</table>
<?php
foreach ($this->data['stateparams'] as $name => $value) {
        echo('<input type="hidden" name="' . htmlspecialchars($name) . '" value="' . htmlspecialchars($value) . '" />');
}
?>

	</form>

-->

     <form class="form-signin" action="?" method="post" name="f">
        <h2 class="form-signin-heading">Συνδεθείτε</h2>
        <label>Ονομα Χρηστη (*)</label>
        <input type="text" id="username" tabindex="1" name="username" value="" class="input-block-level">
        <label>Συνθηματικο (*)</label>
        <input type="password" id="password" type="password" tabindex="2" name="password" class="input-block-level">
      
<?php
foreach ($this->data['stateparams'] as $name => $value) {
        echo('<input type="hidden" name="' . htmlspecialchars($name) . '" value="' . htmlspecialchars($value) . '" />');
}
?>
        <!-- <button class="btn btn-large btn-maellak" type="submit">Συνδεση</button> -->
<br/>
<input type="submit" tabindex="4" id="regularsubmit" value="Συνδεση" />
<br/>
		<div style='clear:both'></div><br/>
        <p><a href="/resetemail-1.php" class='yellow'>Ξεχασα τον κωδικο μου</a></p>
        <p><a href="/register.php" class='yellow'>Δεν εχω λογαριασμο</a></p>
        <!-- <p>Συνδεση μέσω shibboleth</p> -->

        </form>
       
   </div> <!-- /container -->

    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="js/jquery-1.10.2.min.js"></script>
     </body>
</html>


<?php
$this->includeAtTemplateBase('includes/footer.php');
?>
