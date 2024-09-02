<form method="post" action="check.php">
<div class="row">
   <div class="col-12">
      <?php
         $config_permission = is_writable("../include/config.php");
         $init_permission = is_writable("../include/init.php");
         $install_permission = is_writable("database/install.sql");
         $all_success = $config_permission && $init_permission && $install_permission;
         ?>
      <table class="table table-bordered table-striped  mt-2 mb-2">
         <tbody>
            <input type="hidden" name="permissions_success" value="<?php if ($all_success) { ?>1<?php } else { ?>0<?php } ?>">
            <tr>
               <th>Directory Permissions</th>
               <th class="cwidth">Status</th>
            </tr>
            <tr>
               <td colspan="2">
                  <?php if ($all_success) { ?>
                  <div class="alert alert-success"><strong>Congratulations!</strong>  Your server meets the following requirements.</div>
                  <?php } else { ?>
                  <div class="alert alert-danger"><strong>Alert!</strong> Your server does not meet the following requirements.</div>
                  <?php } ?>
               </td>
            </tr>
            <tr>
               <th>../include/config.php</th>
               <th>
                  <?php if ($config_permission) { ?>
                  <span class="badge bg-soft-success text-success">Success</span>
                  <?php } else { ?>
                  <span class='badge bg-soft-danger text-danger'>Failed</span>
                  <?php } ?>
               </th>
            </tr>
            <tr>
               <th>../include/init.php</th>
               <th>
                  <?php if ($init_permission) { ?>
                  <span class="badge bg-soft-success text-success">Success</span>
                  <?php } else { ?>
                  <span class='badge bg-soft-danger text-danger'>Failed</span>
                  <?php } ?>
               </th>
            </tr>
            <tr>
               <th>database/install.sql</th>
               <th>
                  <?php if ($install_permission) { ?>
                  <span class="badge bg-soft-success text-success">Success</span>
                  <?php } else { ?>
                  <span class='badge bg-soft-danger text-danger'>Failed</span>
                  <?php } ?>
               </th>
            </tr>
         </tbody>
      </table>
      <table class="table table-bordered table-striped mt-2 mb-2">
         <tbody>
            <tr>
               <th>Server Requirements </th>
               <th class="cwidth">Status</th>
            </tr>
            <tr>
               <td colspan="2">
                  <?php
                     $requirements = array(
                         array(
                             'value' => version_compare(PHP_VERSION, '7.1.1', '>='),
                         ),
                         array(
                             'value' => extension_loaded('mysqli'),
                         ),
                         array(
                             'value' => extension_loaded('session'),
                         ),
                         array(
                             'value' => extension_loaded('json'),
                         ),
                         array(
                             'value' => extension_loaded('pdo'),
                         ),
                     );
                     $hasError = false;
                     foreach ($requirements as $requirement) {
                         if (!$requirement['value']) {
                             $hasError = true;
                             break;
                         }
                     };
                     $safe_mode = ini_get('safe_mode');
                     ?>
                  <div class="alert <?php echo $hasError ? 'alert-danger' : 'alert-success'; ?>">
                     <strong><?php echo $hasError ? 'Your server does not meet the following requirements.' : 'The following requirements were successfully met:'; ?></strong>
                  </div>
               </td>
            </tr>
            <input type="hidden" name="requirements_success" value="<?php echo $hasError ? '0' : '1'; ?>">

            <tr>
               <th>Safe Mode is <strong><?php echo $safe_mode ? 'on' : 'off'; ?></strong></th>
               <th><span class="badge <?php echo $safe_mode ? 'bg-soft-danger text-danger' : 'bg-soft-warning text-warning'; ?>"><?php echo $safe_mode ? 'Error' : 'Warning'; ?></span></th>
            </tr>
            <tr>
               <th>You have<strong> PHP 7.1 </strong> (or greater ; Current Version: <?php echo PHP_VERSION; ?>)</th>
               <th><span class="badge <?php echo version_compare(PHP_VERSION, '7.1.1', '>=') ? 'bg-soft-success text-success' : 'bg-soft-danger text-danger'; ?>"><?php echo version_compare(PHP_VERSION, '5.3.7', '>=') ? 'Success' : 'Error'; ?></span></th>
            </tr>
            <tr>
               <th>You have the <strong>mysqli</strong> extension</th>
               <th><span class="badge <?php echo extension_loaded('mysqli') ? 'bg-soft-success text-success' : 'bg-soft-danger text-danger'; ?>"><?php echo extension_loaded('mysqli') ? 'Success' : 'Error'; ?></span></th>
            </tr>
            <tr>
               <th>You have the <strong>session</strong> extension</th>
               <th><span class="badge <?php echo extension_loaded('session') ? 'bg-soft-success text-success' : 'bg-soft-danger text-danger'; ?>"><?php echo extension_loaded('session') ? 'Success' : 'Error'; ?></span></th>
            </tr>
            <tr>
               <th>You have the <strong>json</strong> extension</th>
               <th><span class="badge <?php echo extension_loaded('json') ? 'bg-soft-success text-success' : 'bg-soft-danger text-danger'; ?>"><?php echo extension_loaded('json') ? 'Success' : 'Error'; ?></span></th>
            </tr>
            <tr>
               <th>You have the <strong>pdo</strong> extension</th>
               <th><span class="badge <?php echo extension_loaded('pdo') ? 'bg-soft-success text-success' : 'bg-soft-danger text-danger'; ?>"><?php echo extension_loaded('pdo') ? 'Success' : 'Error'; ?></span></th>
            </tr>
         </tbody>
      </table>
   </div>
   <!-- end col -->
</div>
<!-- end row -->
<ul class="list-inline wizard mb-0">
   <li class="next list-inline-item float-end" <?php echo $hasError ? 'style="display: none;"' : ''; ?>><button type="submit" name="step01" class="btn btn-secondary">Next</button></li>
</ul>
                  </form>