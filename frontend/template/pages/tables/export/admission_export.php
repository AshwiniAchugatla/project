<!DOCTYPE html>
<div class="main-panel">
        <div class="content-wrapper">
          <div class="row">
            <div class="col-lg-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title"> Table</h4>
                  <p class="card-description">
                    Admission Details
                  </p>
                  <div class="table-responsive">
                    <table class="table table-striped">
                      <thead>
                        <tr>
                          <th>
                            Id
                          </th>
                          <th>
                            Student Name
                          </th>
                          <th>
                            Course Name
                          </th>
                          <th>
                            Batch Date
                          </th>
                          <th>
                            Delete
                          </th>
                          <th>
                            Update
                          </th>
                        </tr>
                      </thead>
                      <?php
                      $file="admission.xls";

                      //Headers for download
                      header("Content-Disposition: attachment; filename=\"$file\"");
                      header("Content-type:application/vnd.ms-excel");
                        $con=mysqli_connect("localhost","root","","project");
                        $sql="select * from admission inner join register on admission.sid=register.id inner join batch on admission.batchid=batch.id inner join coursedetail on admission.batchid=coursedetail.id";
                        $a=mysqli_query($con,$sql);
                        while($rw=mysqli_fetch_row($a))
                            {
                    ?>
                      <tbody>
                        <tr>
                          <td>
                            <?php echo $rw[0];?>
                          </td>
                          <td>
                            <?php echo $rw[4];?>
                          </td>
                          <td>
                            <?php echo $rw[10];?>
                          </td>
                          <td>
                            <?php echo $rw[14];?>
                          </td>
                          <td>
                            <a href='admissiondelete.php?z=<?php echo $rw[0];?>'>Delete</a>
                          </td>
                          <td>
                            <a href='admissionupdate.php?z=<?php echo $rw[0];?>'>Update</a>
                          </td>
                        </tr>
                      </tbody>
                      <?php
                            }
                            ?>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
</html>