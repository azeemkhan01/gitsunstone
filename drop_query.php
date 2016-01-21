  <form class="form-horizontal " data-toggle="validator" role="form" action="" autocomplete="off" method="post">
      <div class="form-group">
        <div class="col-sm-6">
          <input type="text" class="form-control" id="" name="fname" placeholder="First Name" data-error="Please Enter First Name" required>
        </div>
        <div class="col-sm-6">
          <input type="text" class="form-control" id="" name="lname" placeholder="Last Name" data-error="Please Enter Last Name"required>
        </div>
      </div>
      <div class="form-group">
        <div class="col-sm-12">
          <input type="number" class="form-control" name="mobile" id="inputPassword3" data-error="Please Enter Mobile Number" placeholder="Mobile Number" required>
        </div>
      </div>
      
      <div class="form-group">
        <div class="col-sm-12">
          <input type="email" class="form-control" id="inputPassword3" name="email" placeholder="Email"  data-error="Please Enter Email"required>
        </div>
      </div>
       <input type="text" name="my_data" id="my_data" style="display:none;" >
      <?php 
        function getPageName() {
         return substr($_SERVER["SCRIPT_NAME"],strrpos($_SERVER["SCRIPT_NAME"],"/")+1);
        }
         $query_from_page = getPageName();
       ?>
        <input type="hidden" class="form-control"  name="query_from_page" value="<?php echo $query_from_page; ?>">
      <div class="form-group">
        <div class="col-sm-12">
         <textarea placeholder="Your Query" name="query"></textarea>
           <div id="course_feature"></div>
        </div>
      </div>
      <div class="form-group">
        <div class="col-sm-12">
          <button type="submit"  name="submit" value="submit" class="btn btn-default org_btn btn_query">Submit Query</button>
        
        </div>
      </div>
  </form>