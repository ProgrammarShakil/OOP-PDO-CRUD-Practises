<?php
$servername = "localhost";
$username = "root";
$password = "";

try {
  $conn = new PDO("mysql:host=$servername;dbname=myDB", $username, $password);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  echo "";
} catch(PDOException $e) {
  echo "Connection failed: " . $e->getMessage();
}
?>
<?php include "inc/header.php"; ?>


<div class="container">
  <div class="row">
    <div class="col-md-12">
          <!-- start main  -->
    <main>
     <h5 class="text-end"><a style="color:#fff; border-radius:5px"  class="text-decoration-none bg-secondary pb-1 px-1" href=""><i class="fa fa-plus" aria-hidden="true"></i> Add Student</a></h5>
     <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Serial</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>01</td>
                        <td>Freelancer Shakil</td>
                        <td>Freelancershakil913@gmail.com</td>
                        <td>01770345676</td>
                        <td>
                          <a style="color:aliceblue; border-radius:5px" class=" p-1 text-decoration-none bg-secondary  me-2" class="" href=""> <i class="fas fa-edit" aria-hidden="true"></i>  Edit</a> 
                          <a onclick="return confirm('Are you sure ?')" style="color:aliceblue;  border-radius:5px" class="p-1 text-decoration-none bg-secondary" href=""> <i class="fas fa-trash" aria-hidden="true"></i> Delete</a>
                        </td>
                    </tr>
                    <tr>
                    <td>01</td>
                        <td>Freelancer Shakil</td>
                        <td>Freelancershakil913@gmail.com</td>
                        <td>01770345676</td>
                        <td>
                          <a style="color:aliceblue; border-radius:5px" class=" p-1 text-decoration-none bg-secondary me-2" class="" href=""><i class="fas fa-edit" aria-hidden="true"></i> Edit</a> 
                          <a onclick="return confirm('Are you sure ?')" style="color:aliceblue;  border-radius:5px" class="p-1 text-decoration-none bg-secondary" href=""> <i class="fas fa-trash" aria-hidden="true"></i> Delete</a>
                        </td>
                    </tr>
                    <tr>
                    <td>01</td>
                        <td>Freelancer Shakil</td>
                        <td>Freelancershakil913@gmail.com</td>
                        <td>01770345676</td>
                        <td>
                          <a style="color:aliceblue; border-radius:5px" class=" p-1 text-decoration-none bg-secondary  me-2" class="" href=""> <i class="fas fa-edit" aria-hidden="true"></i> Edit</a> 
                          <a onclick="return confirm('Are you sure ?')" style="color:aliceblue;  border-radius:5px" class="p-1 text-decoration-none bg-secondary" href=""> <i class="fas fa-trash" aria-hidden="true"></i> Delete</a>
                        </td>
                    </tr>
                </tbody>
            </table>
    </main>
    <!-- !start main  -->
    </div>
  </div>
</div>

    <?php include "inc/footer.php"; ?>