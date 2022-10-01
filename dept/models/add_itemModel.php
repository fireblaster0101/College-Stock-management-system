<!-- Add New -->
<div class="modal fade" id="addnew" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <center><h4 class="modal-title" id="myModalLabel">Add New Item</h4></center>
            </div>
            <div class="modal-body">
                <div class="container-fluid">
                    <form method="POST" action="./actions/__add_itemModel.php">
                        
                    <div class="row form-group">
                            <div class="col-sm-2">
                                <label class="control-label modal-label">ITEM ID:</label>
                            </div>
                            <div class="col-sm-10">
                                <input type="number" class="form-control" maxlength="12" name="item_id" placeholder="Enter item ID" required>
                            </div>
                        </div>
                    <div class="row form-group">
                            <div class="col-sm-2">
                                <label class="control-label modal-label">ITEM:</label>
                            </div>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" maxlength="20" name="item" placeholder="Enter item name" required>
                            </div>
                        </div>
                        
                        <div class="row form-group">
                            <div class="col-sm-2">
                                <label class="control-label modal-label">DETAILS:</label>
                            </div>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" maxlength="255" placeholder="Enter item details" name="details" required>
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col-sm-2">
                                <label class="control-label modal-label">BILL NO:</label>
                            </div>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" maxlength="30" placeholder="Enter Bill no" name="bill_no" required>
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col-sm-2">
                                <label class="control-label modal-label">QUANTITY:</label>
                            </div>
                            <div class="col-sm-10">
                            
                                <input type="text" class="form-control" maxlength="15" placeholder="Enter Quantity" name="quantity">
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col-sm-2">
                                <label class="control-label modal-label">TOTAL PRICE:</label>
                            </div>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" maxlength="30" placeholder="Enter Total price" name="total_price" required>
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col-sm-2">
                                <label class="control-label modal-label">SUPPLIER:</label>
                            </div>
                            <div class="col-sm-10">
                                 <!--begin option-->
                                     <?php
                                     //code for fetching the suppliers' information
                                     require_once './db.php';
                                     $sql = "SELECT * FROM `supplier`";

                                     $query = $conn->query($sql);
                                     echo "<select class='form-control id='supplierName' name='supplierName'>";
                                     while($row = $query->fetch_assoc()){
                                         echo"<option value='".$row['supplier_id']."'>".$row['supplier_name']."</option>";
                                     }
                                     echo"</select>";
                                     $conn->close();
                                     ?>
                                     <!--end-->
                            </div>
                        </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
                <button type="submit" name="add" class="btn btn-success"><span class="glyphicon glyphicon-floppy-disk"></span> Add</a>
                    </form>
            </div>

        </div>
    </div>
</div>