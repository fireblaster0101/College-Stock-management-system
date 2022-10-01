<?php
require_once './includes/header.php';
LogInCheck();
require_once './includes/admin_nav.php';
//var_dump($_SESSION);
?>
    <!--exp1-->

    <div class="col-sm-10 col-sm-offset-1">
        <div class="row">
            <!--place for error message flashing-->
            <?php
            //this will display any kind of error message as
            flash();
            ?>
        </div>
        <div class="row">
            <a href="#addnew" data-toggle="modal" class="btn btn-primary"><span class="glyphicon glyphicon-plus"></span> New</a>
            
        </div>
        <div class="" style="height: 10px;">
        </div>
        <div class="row">
            <table id="myTable" class="table table-hover table-bordered table-striped table-responsive">
                <thead>
                <th>#</th>
                <th>LAB</th>
                <th>DETAIL</th>
                <th>ADDED ON</th>
                <th>ACTION</th>
                </thead>
                <tbody>
                <?php
                include_once('db.php');
                $sql = "SELECT * FROM `lab` ";


                $query = $conn->query($sql);

                $i=1;
                while($row = $query->fetch_assoc())
                {
                    echo"<tr>
                    <td>".$i."</td>
					<td>".$row['lab_name']."</td>
					<td>".$row['lab_details']."</td>
					<td>".$row['added_at']."</td>
					<td><a href='#edit_".$row['lab_id']."' class='btn btn-success btn-sm' data-toggle='modal'><span class='glyphicon glyphicon-edit'></span> Edit</a>
					<a href='#delete_".$row['lab_id']."' class='btn btn-danger btn-sm' data-toggle='modal'><span class='glyphicon glyphicon-trash'></span> Delete</a>
					</td>
				</tr>";
                    $i++;
                    include('models/edit_delete_labModel.php') ;
                }
                ?>
                </tbody>
            </table>
            <hr>
            <?php
            //add required models
            require_once 'models/add_labModel.php';
            ?>
        </div>
    </div>

    <!--end exp1-->
<?php require_once './includes/footer.php'; ?>