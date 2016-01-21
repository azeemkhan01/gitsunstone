<?php include("header1.php"); ?>
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
                <div class="heading">Counselling Form</div>
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

                <div class="form-group col-md-12 pd-t-20">
                  <label class="ques">Please mention your top 3 questions for the counselor:</label>
                  <!-- <hr class="heading_line"> -->
                </div>
                
                <div class="form-group col-md-7 pd-t-20">
                  <label for="">Question 1 *</label><br>
                  <input type="text" class="form-control" id="" name="ques_1" placeholder="" required>
                </div>
                <br>

                <div class="form-group col-md-7 pd-t-10">
                  <label for="">Question 2</label><br>
                  <input type="text" class="form-control" id="" name="ques_2" value="" placeholder="" >
                </div>
                <br>

                <div class="form-group col-md-7 pd-t-10">
                  <label for="">Question 3</label><br>
                  <input type="text" class="form-control" id="" name="ques_3" placeholder="" >
                </div>
                <br>

                <div class="form-group col-md-12 pd-t-20">
                  <label class="ques">What will you like counselor to know about you?</label>
                  <!-- <hr class="heading_line"> -->
                  <br>
                  <textarea name="counselor_to_know_about_you" class="txtarea"></textarea>
                </div>
                <br>
                <div class="col-md-12 mg-t-20">
                  <button type="submit" class="btn btn-warning" name="counselling" value="SUBMIT">SUBMIT</button>
                </div>

              </form>
            </div>
          </div>

        </div>

      </div>

     
    </div><!-- /container -->

 <?php include("footer.php") ?>