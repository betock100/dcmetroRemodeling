<?php include 'includes/header.php' ?>
<main>
  <article style="text-align: center;">
    <h3>Tiemeless Home Improvement LLC. (Partner) </h3>
  <h2 style="color: #337288; padding: 1% 0%; font-family: sans-serif; font-weight: 300;">
              Now accepting credit cards! </h2>
              

  <!--eno of underHeader3 -->
  
  <div class="contenido" style="margin-top: 15px;
  margin-right: auto;">
  
  <div id="paypal-button-container"></div>
<script src="https://www.paypal.com/sdk/js?client-id=sb&currency=USD" data-sdk-integration-source="button-factory"></script>
<script>
  paypal.Buttons({
      style: {
          shape: 'rect',
          color: 'gold',
          layout: 'vertical',
          label: 'paypal',
          
      },
      createOrder: function(data, actions) {
          return actions.order.create({
              purchase_units: [{
                  amount: {
                      value: '1'
                  }
              }]
          });
      },
      onApprove: function(data, actions) {
          return actions.order.capture().then(function(details) {
              alert('Transaction completed by ' + details.payer.name.given_name + '!');
          });
      }
  }).render('#paypal-button-container');
</script>


  </div>
  
  </article>
  <section9 style="margin-top: 60px; width: 350px">
           
            <div style="margin: auto; margin-top: 60px; width: 350px; text-align: center; height: 48em;">
            <h2 style="color: #337288;  font-family: sans-serif; font-weight: 300; padding-right: none;">Venmo 
            </h2><br> 
            <img style="width: 350px;" src="images/venmoG.PNG">
            
            
            </div>
            
   
          </section9>
  </main>

<?php include 'includes/footer.php' ?>