
<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title center" id="myModalLabel">Career Application</h4>
      </div>
      <div class="modal-body">
        <!-- <form id="form-apply" role="form" method="POST" enctype="multipart/form-data">
          <div class="row">
            <div class="col-md-6">
              <div class="form-group name-group">
                <label for="name">Full Name</label>
                <input type="text" name="name" id="name" class="form-control" placeholder="Full Name" tabindex="1" required="required">
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group email-group">
                <label for="email">Email</label>
                <input type="email" name="email" id="email" class="form-control" placeholder="Email Address" tabindex="2" required="required">
              </div>
            </div>
          </div>
          <div class="form-group message-group">
            <label for="message">Summary of Background</label>
            <textarea name="message" id="message" class="form-control" placeholder="Message" tabindex="3" required="required"></textarea>
          </div>
          <div class="form-group">
            <label for="fileupload">Upload Resume</label>
              <input type="hidden" name="MAX_FILE_SIZE" value="1000000">  
              <input id="fileupload" type="file" name="fileupload" class="form-control" placeholder="No File Chosen" tabindex="4">
          </div>
          <div class="row center">
            <button type="submit" class="btn btn-secondary" tabindex="4">submit</button>
          </div>
        </form> -->
        <form id="form-apply" action="#" enctype="multipart/form-data" method="post">
          <ul>
           <li>
            <label for="name">Name:</label>
            <input type="text" name="name" id="name">
          </li>

          <li>
            <label for="file_upload">File:</label>
            <input type="file" name="file_upload" id="file_upload" multiple>
          </li>

          <li><input class="button green" type="submit" name="submit" value="Submit Content"></li>
        </ul>
      </form>
      </div>
    </div>
  </div>
</div>
<!-- action="../includes/form-apply.php" -->