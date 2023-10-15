<!DOCTYPE html>
<div class="main-panel">
        <div class="content-wrapper">
          <div class="row">
            <div class="col-lg-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Table</h4>
                  <p class="card-description">
                    Staff Details
                  </p>
                  <div class="table-responsive">
                    <table class="table table-striped">
                      <thead>
                        <tr>
                          <th>
                            Id
                          </th>
                          <th>
                            Name
                          </th>
                          <th>
                            Image
                          </th>
                          <th>
                            Designation
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
                      $file="staff.xls";

                      //Headers for download
                      header("Content-Disposition: attachment; filename=\"$file\"");
                      header("Content-type:application/vnd.ms-excel");
                        $con=mysqli_connect("localhost","root","","project");
                        $sql="select * from staff";
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
                            <?php echo $rw[1];?>
                          </td>
                          <td>
                          <img src="../forms/pics/<?php echo $rw[2];?>">
                          </td>
                          <td>
                            <?php echo $rw[3];?>
                          </td>
                          <td>
                            <a href='staffdelete.php?z=<?php echo $rw[0];?>'>Delete</a>
                          </td>
                          <td>
                            <a href='staffupdate.php?z=<?php echo $rw[0];?>'>Update</a>
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