<?php $this->load->view('dashboard/header');
$this->load->view('dashboard/sidebar');
?>
     

                <article class="content forms-page">
                    <section>
                        <div class="content">
                          <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header hd-box" data-background-color="blue">
                                    <h4 class="title">Edit Profile</h4>
                                </div>
                                <div class="card-content">
                                    <form>
                                        <div class="row">
                                            <div class="col-md-6">
                                              <span class="input input--hoshi">
                                                <input class="input__field input__field--hoshi" type="text" id="input-1" />
                                                <label class="input__label input__label--hoshi input__label--hoshi-color-1" for="input-4">
                                                  <span class="input__label-content input__label-content--hoshi">Organisation Name</span>
                                                </label>
                                              </span>
                                            </div>
                                            <div class="col-md-6">
                                              <span class="input input--hoshi">
                                      <input class="input__field input__field--hoshi" type="text" id="input-2" />
                                      <label class="input__label input__label--hoshi input__label--hoshi-color-1" for="input-5">
                                      <span class="input__label-content input__label-content--hoshi">Website Name</span>
                                      </label>
                                      </span>
                                            </div>

                                        </div>

                                        <div class="row">
                                            <div class="col-md-6">
                                              <span class="input input--hoshi">
                                                  <label for="exampleSelect1">Bussiness Type</label>
                                                  <select class="form-control-inp" id="exampleSelect1">
                                                      <option>Type 1</option>
                                                      <option>Type 2</option>
                                                      <option>Type 3</option>
                                                      <option>Type 4</option>
                                                      <option>Type 5</option>
                                                  </select>
                                            </span>
                                            </div>

                                            <div class="col-md-6">
                                              <span class="input input--hoshi">
                                                  <label for="exampleInputFile">Upload Id</label>
                                                  <input type="file" class="form-control-file" id="exampleInputFile" aria-describedby="fileHelp">
                                              </span>

                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-6">
                                              <span class="input input--hoshi">
                                                <input class="input__field input__field--hoshi" type="text" id="input-3" />
                                                <label class="input__label input__label--hoshi input__label--hoshi-color-1" for="input-4">
                                                  <span class="input__label-content input__label-content--hoshi">Phone Number</span>
                                                </label>
                                              </span>
                                            </div>


                                        </div>
                                        <button type="submit" class="btn btn-primary ">Update Profile</button>
                                        <div class="clearfix"></div>
                                    </form>
                                </div>
                            </div>
                        </div>

                </div>
          </div>
                   
<?php $this->load->view('dashboard/footer');?>