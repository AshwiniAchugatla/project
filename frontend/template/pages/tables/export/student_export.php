<!DOCTYPE html>
<div class="main-panel">
        <div class="content-wrapper">
          <div class="row">
            <div class="col-lg-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Table</h4>
                  <p class="card-description">
                  Student Details
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
                            Duration
                          </th>
                          <th>
                            Fees
                          </th>
                          <th>
                            Fees Details
                          </th>
                        </tr>
                      </thead>
                      <?php
                      $file="student.xls";

                      //Headers for download
                      header("Content-Disposition: attachment; filename=\"$file\"");
                      header("Content-type:application/vnd.ms-excel");
                        $con=mysqli_connect("localhost","root","","project");
                        $sql="select * from studentdetails inner join register on studentdetails.sid=register.id";
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
                            <?php echo $rw[7];?>
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
                            <a href='feesdetail.php?id=<?php echo $rw[1];?>'>View</a>
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