<!-- Modal -->
<div class="modal fade" id="singupModal" tabindex="-1" role="dialog" aria-labelledby="singupModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="singupModalLabel"><strong>SingUp To UniverseDecode</strong></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="singupModalForm">
        <form>
            <div class="col-center">
              <label for="validationCustomUsername">Username</label>
              <div class="input-group">
                <div class="input-group-prepend">
                  <span class="input-group-text" id="inputGroupPrepend">@</span>
                </div>
                <input type="text" class="form-control" id="validationCustomUsername" placeholder="Username" name="username" aria-describedby="inputGroupPrepend" required>
                <div class="invalid-feedback">
                  Please choose a username.
                </div>
              </div>
            </div>
          </div>
          <small id="emailHelp" class="form-text text-muted">Please Enter Username without "@"</small>
        <div class="form-group">

          <label for="exampleInputEmail1">Email address</label>
          <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" name="email">
          <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
        </div>
        <div class="form-group">
          <label for="exampleInputPassword1">Password</label>
          <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" name="password">
        </div>
        <div class="form-group">
          <label for="exampleInputPassword1">cPassword</label>
          <input type="cpassword" class="form-control" id="exampleInputPassword1" placeholder="cPassword" name="cpassword">
        </div>
        <div class="text-center">
          <button type="submit" class="btn btn-warning text-dark btn-lg col-md-9 "><strong>Submit</strong></button>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        </div>
      </form>
        </div>
      </div>
    </div>
  </div>
</div>