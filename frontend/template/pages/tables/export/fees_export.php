<!DOCTYPE html>
<div class="main-panel">
    <div class="content-wrapper">
      <div class="row">
        <div class="col-lg-12 grid-margin stretch-card">
          <div class="card">
            <div class="card-body">
              <h4 class="card-title"> Table</h4>
              <p class="card-description">
                Fees Details
              </p>
              <a href="../../pages/forms/feesform.php">
                <button type="button" class="btn btn-outline-success btn-fw">Enter Fees</button>
              </a>
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
                        Fees
                      </th>
                      <th>
                        Date
                      </th>
                      <th>
                        Payment
                      </th>
                    </tr>
                  </thead>
                  <?php
                   $file="fees.xls";

                   //Headers for download
                   header("Content-Disposition: attachment; filename=\"$file\"");
                   header("Content-type:application/vnd.ms-excel");
                    $con=mysqli_connect("localhost","root","","project");
                    $sql="select * from feestable inner join register on feestable.id=register.id";
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
                        <?php echo $rw[6];?>
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