
<div class="tab-pane active">
  <form id="accountForm" method="post" action="check.php" class="form-horizontal">
    <div class="row">
      <div class="col-12">
      <div class="row mb-3">
          <label class="col-md-3 col-form-label" >Username</label>
          <div class="col-md-9">
            <input type="text" class="form-control" name="username" placeholder="Idriss Boukmouche" >
            <div class="invalid-feedback">Please provide a username.</div>
          </div>
        </div>
        <div class="row mb-3">
          <label class="col-md-3 col-form-label" >Email</label>
          <div class="col-md-9">
            <input type="email" class="form-control" name="email" placeholder="idriss@boukmouche.rf.gd" >
            <div class="invalid-feedback">Please provide a email.</div>
          </div>
        </div>
        <div class="row mb-3">
          <label class="col-md-3 col-form-label">Password</label>
          <div class="col-md-9">
            <input type="text" name="password"  placeholder="***********" class="form-control" >
            <div class="invalid-feedback">Please provide a password.</div>
          </div>
        </div>
        
      </div>
      <!-- end col -->
    </div>
    <!-- end row -->
    <ul class="list-inline wizard mb-0">
    
      <li class="next list-inline-item float-end"><button type="submit" name="step03" class="btn btn-secondary">Next</button></li>
</ul>
</form>
