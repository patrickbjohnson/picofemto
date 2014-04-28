<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title center" id="myModalLabel">Career Application</h4>
      </div>
      <div class="modal-body">
        <form role="form">
          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <label for="name">Full Name</label>
                <input type="text" name="apply-name" id="apply-name" class="form-control" placeholder="Full Name" tabindex="1" required="required">
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label for="name">Email</label>
                <input type="text" name="apply-email" id="apply-email" class="form-control" placeholder="Email Address" tabindex="2" required="required">
              </div>
            </div>
          </div>
          <div class="form-group">
            <label for="name">Summary of Background</label>
            <textarea name="apply-background" id="apply-background" class="form-control" placeholder="Message" tabindex="3" required="required"></textarea>
          </div>
          <div class="form-group">
            <label for="name">Upload Resume</label>

              <input type="file" name="apply-upload" id="apply-upload" class="form-control" placeholder="No File Chosen" tabindex="4" required="required">
            
          </div>
          <div class="row center">
            <button class="btn btn-secondary" tabindex="4">submit</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
