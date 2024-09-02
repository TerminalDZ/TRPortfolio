<div class="tab-pane active">
  <form  method="post" action="check.php" class="form-horizontal">
    <div class="row">
      <div class="col-12">
        <div class="row mb-3">
          <label class="col-md-3 col-form-label" >Database Name</label>
          <div class="col-md-9">
            <input type="text" class="form-control" name="userdb" placeholder="trportfolio" >
            <div class="invalid-feedback">Please provide a database name.</div>
          </div>
        </div>
        <div class="row mb-3">
          <label class="col-md-3 col-form-label" >Username</label>
          <div class="col-md-9">
            <input type="text" name="user" placeholder="root" class="form-control" >
            <div class="invalid-feedback">Please provide a username.</div>
          </div>
        </div>
        <div class="row mb-3">
          <label class="col-md-3 col-form-label">Password</label>
          <div class="col-md-9">
            <input type="text" name="password"  placeholder="***********" class="form-control" >
            <div class="invalid-feedback">Please provide a password.</div>
          </div>
        </div>
        <div class="row mb-3">
          <label class="col-md-3 col-form-label" >Host name</label>
          <div class="col-md-9">
            <input type="text" name="host" placeholder="localhost" class="form-control" >
            <div class="invalid-feedback">Please provide a host name.</div>
          </div>
        </div>
        <div class="row mb-3">
          <label class="col-md-3 col-form-label" >Base Url <sup>(You must terminate my Url "/")</sup></label>
          <div class="col-md-9">
            <input type="url" name="base_url" placeholder="https://example.com/" class="form-control" >
            <div class="invalid-feedback">Please provide a base URL.</div>
          </div>
        </div>
      </div>
      <!-- end col -->
    </div>
    <!-- end row -->
    <ul class="list-inline wizard mb-0">
     
      <li class="next list-inline-item float-end"><button type="submit" name="step02" class="btn btn-secondary">Next</button></li>
</ul>
</form>
