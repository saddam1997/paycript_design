<?php $this->load->view('dashboard/header');
$this->load->view('dashboard/sidebar');
?>
         <script src="https://cdn.ckeditor.com/4.8.0/standard/ckeditor.js"></script> 
         <style>
         iframe{width: 100%; height: 30% !important;}        
         </style>    
      <section>
        <div class="content">
            <div class="row">
              <div class="col-md-12">

                <div class="card">
                  <div class="card-header hd-box" data-background-color="blue">
                    <h4 class="title">Welcome Shubhams / Your Persional Detail</h4>
                  </div>

                  <div class="card-content">
                    <div class="row">
                      <div class="col-sm-12">

                        <div class="paycrypt-io">

                          <div class="head">
                            <h4 class="text-center"> 1. Paycrypt.io Monetiser Online</h4>
                            <p>Use our Paycrypt Monetiser Online if you don't have your own website - Monetise/sell your Files & Music & Texts & Images & Video online for cryptocoins - Bitcoin, Bitcoin Cash, Litecoin, Dash, etc. Create Your Free Paycrypt Payment Urls below (it will protect your information from visitors directly proceeding and monetise it) and after share them on the web - twitter / forums / websites / etc. Make Cryptocoins Money/USD Online 
                            </p>
                          </div>
                          <div class="my-select">
                            <h4>Select Currency</h4>
                          </div>
                          <div class="row">
                            <div class="  col-sm-2 col-md-2 "></div>
                            <div class="  col-sm-8 my-coin col-md-8 ">
                            

                              <div class="row">
                                <div class="col-sm-3">
                                  <div class="bit-coin">
                                    <a href="#"><img onClick="this.select(); class="img-responsive" src="<?php echo base_url();?>coin/Bitcoincash.png"></a>
                                  </div>
                                </div>

                                <div class="col-sm-3">
                                  <div class="bit-coin">
                                    <a href="#"><img src="<?php echo base_url();?>coin/Dash.png"></a>
                                  </div>
                                </div>

                                <div class="col-sm-3">
                                  <div class="bit-coin">
                                   <a href="#"> <img src="<?php echo base_url();?>coin/Dogecoin.png"></a>
                                  </div>
                                </div>

                                <div class="col-sm-3">
                                  <div class="bit-coin">
                                    <a href="#"><img src="<?php echo base_url();?>coin/Feathercoin.png"></a>
                                  </div>
                                </div>

                              </div>  
                              <div class="row margtop20">

                                <div class="col-sm-3">
                                  <div class="bit-coin">
                                   <a href="#"><img src="<?php echo base_url();?>coin/Bitcoin.png"></a>
                                  </div>
                                </div>

                                <div class="col-sm-3">
                                  <div class="bit-coin">
                                   <a href="#"><img src="<?php echo base_url();?>coin/Litecoin.png"></a>
                                  </div>
                                </div>

                                <div class="col-sm-3">
                                  <div class="bit-coin">
                                   <a href="#"> <img src="<?php echo base_url();?>coin/Peercoin.png"></a>
                                  </div>
                                </div>

                                <div class="col-sm-3">
                                  <div class="bit-coin">
                                   <a href="#"><img src="<?php echo base_url();?>coin/Peercoin1.png"></a>
                                  </div>
                                </div>
                                
                              </div>
                              <div class="row margtop20">

                                <div class="col-sm-3">
                                  <div class="bit-coin">
                                    <a href="#"><img src="<?php echo base_url();?>coin/Potcoin.png"></a>
                                  </div>
                                </div>

                                <div class="col-sm-3">
                                  <div class="bit-coin">
                                    <a href="#"><img src="<?php echo base_url();?>coin/Reddcoin.png"></a>
                                  </div>
                                </div>

                                <div class="col-sm-3">
                                  <div class="bit-coin">
                                    <a href="#"><img src="<?php echo base_url();?>coin/Speedcoin.png"></a>
                                  </div>
                                </div>

                                <div class="col-sm-3">
                                  <div class="bit-coin">
                                   <a href="#"><img src="<?php echo base_url();?>coin/UnitCurrency.png"></a>
                                  </div>
                                </div>
                                
                              </div>                          
                            
                            </div>
                          <!-- img row end  -->
                          </div>
                          <div class="row">
                           <div class="col-sm-2">&nbsp;</div>
                           <div class="col-sm-8 ">
                             <div class="row top-heigh">
                               <div class="coin-form">

                                <div class="row">
                                  <div class="my-hed-co">
                                    <h6>Private URL:</h6>
                                  </div>
                                  <div class="my-hed-input">
                                    <input type="url" id="myURL" placeholder="Private URL">
                                  </div>
                                </div>

                                <div class="row input-height">
                                  <div class="my-hed-co">
                                    <h6>Your Public Title:</h6>
                                  </div>
                                  <div class="my-hed-input">
                                    <input type="text" id="text" placeholder="Title" >
                                  </div>
                                </div>

                                <div class="row input-height">
                                  <div class="my-hed-co">
                                    <h6>Amount in Box:</h6>
                                  </div>
                                  <div class="my-hed-input">
                                    <div class="my-sel">
                                      <select class="form-control">
                                        <option>Price</option>
                                        <option>1</option>
                                        <option>2</option>
                                        <option>3</option>
                                        <option>4</option>
                                        <option>5</option>
                                      </select>
                                    </div>

                                    <span>BitCoin</span>
                                    <span style="margin-left: 10px;"> Or</span>

                                    <div class="my-sel-usd">
                                      <select class="form-control">
                                        <option>USD</option>
                                        <option>1</option>
                                        <option>2</option>
                                        <option>3</option>
                                        <option>4</option>
                                        <option>5</option>
                                      </select>
                                    </div>
                                    
                                  </div>
                                </div>

                                <div class="row input-height">
                                  <div class="my-hed-co">
                                    <h6>Your Wallet Address:</h6>
                                  </div>
                                  <div class="my-hed-input">
                                    <input type="url" id="myURL" placeholder="Wallet Address">
                                  </div>
                                </div>

                                <div class="row input-height">
                                  <div class="my-hed-co">
                                    <h6>Url Expiry Date (GMT):</h6>
                                  </div>
                                  <div class="my-hed-input">
                                    <input type="url" id="myURL" placeholder="Url Expiry Date">
                                  </div>
                                </div>

                                <div class="row input-height">
                                  <div class="my-hed-co">
                                    <h6>Coin Label:</h6>
                                  </div>
                                  <div class="my-hed-input">
                                    <input type="url" id="myURL" placeholder="Coin Label">
                                  </div>
                                </div>

                                <div class="row">
                                  <div class="my-hed-co">
                                    <h6>Private Text (optional)</h6>
                                  </div>
                                  <div class="my-hed-input">
                                    <textarea name="editor1" class="form-control" rows="3" id="comment"></textarea>
                                    <script>
                                      CKEDITOR.replace( 'editor1' );
                                    </script>
                                  </div>
                                </div>

                                <div class="row">
                                  <!-- <div class="my-sent">
                                    
                                  </div> -->
                                  <button class="btn btn-primary"  style="padding: 1.5% 20%; border-radius: 25px; margin: 0px auto; margin-top: 35px; cursor: pointer;" name="submit">Payment <i class="fa fa-paper-plane-o"></i></button>
                                </div>

                               </div>
                             </div>
                           </div>
                           </div>

                          </div>
                          
                      </div>

                    </div>
                  </div>

                </div>

              </div>
            </div>
        </div>
      </section>
      
      <script>
        var acc = document.getElementsByClassName("accordion");
        var i;

        for (i = 0; i < acc.length; i++) {
          acc[i].addEventListener("click", function() {
            this.classList.toggle("active");
            var panel = this.nextElementSibling;
            if (panel.style.maxHeight){
              panel.style.maxHeight = null;
            } else {
              panel.style.maxHeight = panel.scrollHeight + "px";
            } 

          });
        }
      </script>
      <script src="https://cdn.ckeditor.com/4.8.0/standard/ckeditor.js"></script>
      <?php $this->load->view('dashboard/footer');?>