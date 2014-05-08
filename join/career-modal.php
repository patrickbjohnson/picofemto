
<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title center" id="myModalLabel">Career Application</h4>
      </div>
      <div class="modal-body">

        <form id="form-apply" role="form" method="POST" action="mail.php" enctype="multipart/form-data">
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
        </form>
      </div>
    </div>
  </div>
</div>

<!-- action="../includes/form-apply.php" -->