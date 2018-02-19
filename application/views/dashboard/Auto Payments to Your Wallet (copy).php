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
                                    <h5> Your Account » Auto Payments to Your External Wallet Address Statistics</h5>
                                </div>
                                <div class="card-content">
                                  <div class="panel">

                        <div class="create-heading"> <h4>Detailed Search</h4> </div>
                        <div class="panel-body">

                            <form>
                                <div class="row">
                                  <div class="col-md-2">

                                  </div>
                                  <div class="col-md-8">

                                        <div class="input-group">
                                            <span class="payment-input-group-addon">Order ID:</span>
                                            <input type="text" name="orderID" class="form-control" placeholder="Order ID">
                                        </div><br>

                                        <div class="input-group">
                                            <span class="payment-input-group-addon">Amount:</span>
                                            <input type="text" name="amountfrom" class="form-control" placeholder="From Amount">&nbsp To &nbsp
                                            <input type="text" name="amounto" class="form-control" placeholder="To Amount">
                                        </div><br>



                                        <div class="input-group">
                                            <span class="payment-input-group-addon">Your Internal Wallet Address:</span>
                                            <input type="text" name="addrInt" class="form-control" placeholder="Your Internal Wallet Address">
                                        </div><br>

                                        <div class="input-group">
                                            <span class="payment-input-group-addon"> Transaction Date:</span>
                                            <input type="text" name="txDatefrom" class="form-control" placeholder="Transaction From Date">&nbsp To &nbsp
                                             <input type="text" name="txDateto" class="form-control" placeholder="Transaction To Time">
                                        </div><br>
                                      </div>
                                </div>
                                <div class="row payment-button-row">
                                  <div class="col-md-2">

                                  </div>
                                      <div class="col-md-8">
                                              <input type="reset" name="reset" class="btn payment-btn-info" value="Reset">
                                              <input type="submit" name="filters_search" class="btn payment-btn-info" value="Search">
                                      </div>
                                </div>
                            </form>

                            <hr>
                            <!-- table start -->
                            <div class="row">
                              <div class="col-sm-12">
                                <table class="table table-bordered " style="overflow: scroll; width: 100%;font-size: 14px;">
                                  <thead>
                                    <tr class="valigntop">
                                      <th class="valigntop" style="vertical-align: text-top; font-size: 12px; width: 1%;">Serial NO</th>
                                      <th class="valigntop" style="vertical-align: text-top; font-size: 12px; width: 12%;">No</th>
                                      <th class="valigntop" style="vertical-align: text-top; font-size: 12px; width: 5%;">Box Name</th>
                                      <th class="valigntop" style="vertical-align: text-top; font-size: 12px; width: 10%;">Amount</th>
                                      <th class="valigntop" style="vertical-align: text-top; font-size: 12px; width: 15%;">Approximate Amount in USD</th>
                                      <th class="valigntop" style="vertical-align: text-top; font-size: 12px; width: 5%;">Transaction Confirmed ?d</th>
                                      <th class="valigntop" style="vertical-align: text-top; font-size: 12px; width: 10%;">Order ID</th>
                                      <th class="valigntop" style="vertical-align: text-top; font-size: 12px; width: 5%;">User ID</th>
                                      <th class="valigntop" style="vertical-align: text-top; font-size: 12px; width: 10%;">Transaction Time</th>
                                    </tr>
                                  </thead>
                                  <tbody>
                                    <tr>
                                      <td>1</td><!-- first line -->
                                      <td>Doe</td><!-- first line -->
                                      <td>INR</td>
                                      <td>John1</td>
                                      <td>John2</td>
                                      <td>John3</td>
                                      <td>John4</td>
                                      <td>5</td>
                                      <td>John6</td>
                                    </tr>
                                    <tr>
                                      <td>2</td><!-- second line -->
                                      <td>Moe</td><!-- second line -->
                                      <td>USD</td>
                                      <td>USD1</td>
                                      <td>USD2</td>
                                      <td>USD3</td>
                                      <td>USD4</td>
                                      <td>8</td>
                                      <td>USD6</td>

                                    </tr>
                                    <tr>
                                      <td>3</td><!-- Third line -->
                                      <td>Moe</td>
                                      <td>USD</td>
                                      <td>Mary</td>
                                      <td>Mary1</td>
                                      <td>Mary2</td>
                                      <td>Mary3</td>
                                      <td>Mary4</td>
                                      <td>Mary5</td>
                                    </tr>
                                  </tbody>
                                </table>
                              </div>
                            </div>


                            <!-- table end -->

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