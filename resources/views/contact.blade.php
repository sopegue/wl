<div class="container" id="contact">
    <div class="container" id="contact-ch">
        <h4 style="margin-top:40px; color:white; text-align:center;">Contactez-nous</h4>
        <form name="qryform" id="qryform" method="post" action="mail.php" onsubmit="return(validate());" novalidate="novalidate">
        <div class="form-group">
            <label class="ctc-lb">Nom:</label>
            <input type="text" class="form-control" id="name" style="width:70%;" placeholder="Entrer votre Nom" name="name">
        </div>
        <div class="form-group">
          <label class="ctc-lb">Email:</label>
          <input type="email" class="form-control" id="mail" style="width:70%;" placeholder="Entrer votre Email" require="required"  name="email">
          
        </div>
    
        <div class="form-group">
          <label class="ctc-lb">No. de téléphone:</label>
          <input type="tel" class="form-control" id="phone" style="width:40%;" placeholder="Entrer le no. de téléphone" name="phone">
        </div>
	    <div class="form-group">
          <label class="ctc-lb">Sujet:</label>
          <input type="text" class="form-control" id="subject" style="width:60%;" placeholder="Sujet" name="subject">
        </div>
	 
	    <div class="form-group">
          <label class="ctc-lb">Message:</label>
          <textarea name="issues" class="form-control" id="iq" placeholder="Entrer votre message"></textarea>
        </div>
	
        <button type="button" class="btn btn-outline-primary" id="ctct">Envoyer</button>
    </form>
  </div>

</div>
