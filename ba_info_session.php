b <?php include("header1.php"); ?>
<?php include("subheader.php"); ?> 

    <div class="container si_section">
      <div class="row">
        <div class="col-md-12 no-side-margin">
          <!-- <div class="">Fees</div>
          <div class="red"></div>
          <div class="si_subtagline">
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Veniam, dicta saepe quia reiciendis sit. Autem, ratione, assumenda obcaecati minus possimus
          </div> -->
        </div>
      </div>
    </div>

    <div class="container no-side-padding" id="commstory">
      <div class="main row">
        <div class="col-md-12">
          <div class="row board">
            <div class="col-md-10 col-md-offset-1 pd-t-40 pd-b-20">
              <div class="comm_board pd-b-20">
                <hr class="heading_line">
                <div class="heading">Business Analyst Info session - Every Wed 10:00PM</div>
                <hr class="heading_line">
              </div>
              <form class="form-inline" action="submit.php" method="post">
                <div class="form-group col-md-4">
                  <label for="">Name *</label><br>
                  <input type="text" class="form-control" id="" placeholder="" name="name" required>
                </div>
                <div class="form-group col-md-4">
                  <label for="">Email *</label><br>
                  <input type="email" class="form-control" id="" placeholder=""  name="email"required>
                </div>

                <div class="form-group col-md-4 pd-b-40">
                  <label for="">Contact no. *</label><br>
                  <input type='tel' pattern="^\d{10}$" title='Phone Number (Format: 9876543210)' class="form-control" id="" placeholder=""  name="contact"required>
                </div>
                
                <div class="form-group col-md-4">
                  <label for="">Current Organization </label><br>
                  <input type="text" class="form-control" id="" placeholder=""  name="current_org">
                </div>
                
                
                
                <div class="form-group col-md-4">
                  <label for="">Years of Experience</label><br>
                  <select class="form-control" name="experience" >
                                <option value=""></option>
                                <option value="<3">&lt;3</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                <option value="6">6</option>
                                <option value="7">7</option>
                                <option value="8">8</option>
                                <option value="9">9</option>
                                <option value="10">10</option>
                                <option value="11">11</option>
                                <option value="12">12</option>
                                <option value="13">13</option>
                                <option value="14">14</option>
                                <option value="15">15</option>
                                <option value=">15">&gt;15</option>
                   </select>
                
                </div>


                <div class="form-group col-md-12 pd-t-20">
                  <label class="user-comment">Comments</label>
                  <!-- <hr class="heading_line"> -->
                  <br>
                  <textarea name="comment" class="txtarea"></textarea>
                </div>
                <br>
                <div class="col-md-12 mg-t-20">
                  <button type="submit" class="btn btn-warning" name="ba-infosession" value="SUBMIT">SUBMIT</button>
                </div>

              </form>
            </div>
          </div>

        </div>

      </div>

     
    </div><!-- /container -->

 <?php include("footer.php") ?>