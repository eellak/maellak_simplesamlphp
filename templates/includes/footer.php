<?php
if(!empty($this->data['htmlinject']['htmlContentPost'])) {
	foreach($this->data['htmlinject']['htmlContentPost'] AS $c) {
		echo $c;
	}
}
?>

	</div>
</div>
 <div class="footer">
      <div class="container">
        <div class="row-fluid logos relative">
         <div id="theI"></div>
          <div class="cols clearfix">
            <div class="sponsor col span4 espa">
                <a href="#"><img src="/<?php echo $this->data['baseurlpath']; ?>resources/icons/logo-espa.png" alt="" width="347" height="51" /></a>
            </div>
            <div class="sponsor col span2 grnet bordered">
                <a href="https://www.grnet.gr/"><img src="/<?php echo $this->data['baseurlpath']; ?>resources/icons/logo-grnet.png" alt="" width="89" height="43" /></a>
            </div>
            <div class="sponsor col span2 ministryofeducation bordered">
                <a href="http://www.minedu.gov.gr/"><img src="/<?php echo $this->data['baseurlpath']; ?>resources/icons/logo-ministryofeducation.png" alt="" width="171" height="31" /></a>
            </div>
            <div class="colophon col span4 gray bordered">
                <p>Η <strong><u>Διαδικτυακή Πύλη των Μονάδων Αριστείας</u></strong> είναι υπο-έργο της πράξης <strong><u>"Ηλεκτρονικές Υπηρεσίες για την Ανάπτυξη και Διάδοση του Ανοιχτού Λογισμικού"</u></strong> που υλοποιείται από το Εθνικό Δίκτυο Έρευνας και Τεχνολογίας. Η πράξη εντάσσεται στο Επιχειρησιακό Πρόγραμμα <strong><u>"Ψηφιακή Σύγκλιση" του ΕΣΠΑ</u></strong> (με τη συγχρηματοδότηση της Ελλάδας και της Ευρωπαϊκής Ένωσης - Ευρωπαϊκό Ταμείο Περιφερειακής Ανάπτυξης).</p>
            </div>
          </div>
        </div>
        <div class="row-fluid bottomline">
          <div class="licence pull-left">
            <a rel="license" href="http://creativecommons.org/licenses/by-sa/3.0/"><img alt="Creative Commons License" style="border-width:0" src="http://i.creativecommons.org/l/by-sa/3.0/88x31.png" /></a>
          </div>
          <div class="pull-left">
            <ul class="inline">
              <li class="theYear"><strong>2013</strong></li>
              <li>ΥΠΛΟΠΟΙΗΘΗΚΕ ΜΕ ΤΗ ΧΡΗΣΗ ΤΟΥ <a href="#" class="underlined">ΕΛ/ΛΑΚ</a> ΛΟΓΙΣΜΙΚΟΥ <a href="#" class="underlined">WORDPRESS</a></li>
		<img src="/<?php echo $this->data['baseurlpath']; ?>resources/icons/ssplogo-fish-small.png" alt="Small fish logo" style="float: right" />		
            </ul>
          </div>
        </div>
      </div>
    </div>

  </body>
</html>
