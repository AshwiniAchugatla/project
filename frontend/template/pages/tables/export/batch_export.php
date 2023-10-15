<!DOCTYPE html>
<div class="main-panel">
        <div class="content-wrapper">
          <div class="row">
            <div class="col-lg-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Table</h4>
                  <p class="card-description">
                  Batch Details
                  </p>
                  <div class="table-responsive">
                    <table class="table table-striped">
                      <thead>
                        <tr>
                          <th>
                            Id
                          </th>
                          <th>
                            Course Id
                          </th>
                          <th>
                            Faculty
                          </th>
                          <th>
                            Date
                          </th>
                          <th>
                            Time
                          </th>
                          <th>
                            Duration
                          </th>
                          <th>
                            Fees
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
                      $file="batch.xls";

                      //Headers for download
                      header("Content-Disposition: attachment; filename=\"$file\"");
                      header("Content-type:application/vnd.ms-excel");
                        $con=mysqli_connect("localhost","root","","project");
                        $sql="select * from batch";
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
                            <?php echo $rw[2];?>
                          </td>
                          <td>
                            <?php echo $rw[3];?>
                          </td>
                          <td>
                            <?php echo $rw[4];?>
                          </td>
                          <td>
                            <?php echo $rw[5];?>
                          </td>
                          <td>
                            <?php echo $rw[6];?>
                          </td>
                          <td>
                            <a href='batchdelete.php?z=<?php echo $rw[0];?>'>Delete</a>
                          </td>
                          <td>
                            <a href='batchupdate.php?z=<?php echo $rw[0];?>'>Update</a>
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