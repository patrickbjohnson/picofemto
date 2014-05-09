
<!-- Modal -->
<div class="modal fade" id="demo-request" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title center" id="myModalLabel">Request A Demo</h4>
      </div>
      <div class="modal-body">
        <form id="form-demo" method="POST" action="../includes/form-demo.php" role="form">
          <div class="row">
            <div class="col-md-6">
              <div class="form-group name-group">
                <label for="name">Full Name</label>
                <input type="text" name="name" id="name" class="form-control" placeholder="Full Name" tabindex="1" >
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group email-group">
                <label for="email">Email</label>
                <input type="email" name="email" id="email" class="form-control" placeholder="Email Address" tabindex="2" >
              </div>
            </div>
          </div>
          <div class="form-group company-group">
            <label for="company">Company</label>
            <input type="text" name="company" id="company" class="form-control" placeholder="Company" tabindex="3" >
          </div>
          <div class="form-group message-group">
            <label for="message">Message</label>
            <textarea name="message" id="message" class="form-control" placeholder="Message" tabindex="4" ></textarea>
          </div>
          <div class="row message center"></div>
          <div class="row center">
            <button class="btn btn-secondary" name="submit" tabindex="4">submit</button>
          </div>
        </form>
        <!-- <form id="form-demo" role="form" method="POST" action="../includes/form-demo.php" enctype="multipart/form-data">
          <div class="row">
            <div class="col-md-6">
              <div class="form-group name-group">
                <label for="name">Full Name</label>
                <input type="text" name="name" id="name" class="form-control" placeholder="Full Name" tabindex="1" >
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group email-group">
                <label for="email">Email</label>
                <input type="email" name="email" id="email" class="form-control" placeholder="Email Address" tabindex="2" >
              </div>
            </div>
          </div>
          <div class="form-group message-group">
            <label for="message">Summary of Background</label>
            <input type="hidden" name="position">  
            <textarea name="message" id="message" class="form-control" placeholder="Message" tabindex="3" ></textarea>
          </div>
          <div class="form-group">
            <label for="file_upload">Upload Resume</label>
              <input type="hidden" name="MAX_FILE_SIZE" value="1000000">  
              <input id="file_upload" type="file" name="file_upload" class="form-control" placeholder="No File Chosen" tabindex="4">
          </div>
          <div class="row message center"></div>
          <div class="row center">
            <button type="submit" class="btn btn-secondary" tabindex="4">submit</button>
          </div>
        </form> -->
      </div>
    </div>
  </div>
</div>

<!-- action="../includes/form-apply.php" -->d