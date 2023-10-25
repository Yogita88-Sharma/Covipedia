<?php require_once('../Config/covipedia.php');?>
<?php include('header.php');?>

        <!--**********************************
            Header end ti-comment-alt
        ***********************************-->

        <!--**********************************
            Sidebar start
        ***********************************-->
        <!--**********************************
            Sidebar end
        ***********************************-->

        <!--**********************************
            Content body start
        ***********************************-->
        <div class="content-body">
			<div class="container-fluid">
				<!-- Add Project -->
				<div class="modal fade" id="addProjectSidebar">
					<div class="modal-dialog" role="document">
						<div class="modal-content">
							<div class="modal-header">
								<h5 class="modal-title">Create Project</h5>
								<button type="button" class="close" data-dismiss="modal"><span>&times;</span>
								</button>
							</div>
							<div class="modal-body">
								<form>
									<div class="form-group">
										<label class="text-black font-w500">Project Name</label>
										<input type="text" class="form-control">
									</div>
									<div class="form-group">
										<label class="text-black font-w500">Deadline</label>
										<input type="date" class="form-control">
									</div>
									<div class="form-group">
										<label class="text-black font-w500">Client Name</label>
										<input type="text" class="form-control">
									</div>
									<div class="form-group">
										<button type="button" class="btn btn-primary">CREATE</button>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
                <div class="row page-titles mx-0">
                    <div class="col-sm-6 p-md-0">
                        <div class="welcome-text">
                            <h4>Hi, welcome back!</h4>
                            <span>Product Table</span>
                        </div>
                    </div>
                    <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0)">Table</a></li>
                            <li class="breadcrumb-item active"><a href="index.php">Home</a></li>
                        </ol>
                    </div>
                </div>
                <!-- row -->


                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
								<a href="insertproduct.php">Product Insert Table</a>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table id="example" class="display" style="min-width: 845px">
                                        <thead>
                                            <tr>
                                                 <th>Product Id</th>
												 <th>Product Name</th>
												 <th>SubCategory Id</th>
												 <th>SubCategory Name</th>
												  <th>Quantity</th>
												  <th>Product Amount</th>
												  <th>Product Image</th>
												  <th>Product Date</th>
												  <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
										<?php
											$sql="select * from products p Join sub_category s where p.SubCategory_Id=s.SubCategory_Id";
											$result=mysqli_query($conn,$sql);
											while($row=mysqli_fetch_array($result))
											{
												$pid=$row['Product_Id'];
												?>
                                            <tr>
														<td><?php echo $row['Product_Id'];?></td>
														<td><?php echo $row['Product_Name'];?></td>
														<td><?php echo $row['SubCategory_Id'];?></td>
														<td><?php echo $row['SubCategory_Name'];?></td>
														<td><?php echo $row['Quantity'];?></td>
														<td><?php echo $row['Product_Amount'];?></td>
														<td><img src="../Image/<?php echo $row['Product_Image']?>" height="50" width="50"/></td>
														<td><?php echo $row['Product_Date'];?></td>
														<td><a href="dproduct.php?id=<?php echo $pid;?>"><img src="delete.png" height="25" width="25"/></a>&nbsp;
														<a href="updateproduct.php?id=<?php echo $pid;?>"><img src="edit.jpg" height="25" width="25"/></a>
														</td>
                                            </tr>
                                           <?php
											}
											?>
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                              <th>Product Id</th>
												 <th>Product Name</th>
												 <th>SubCategory Id</th>
												 <th>SubCategory Name</th>
												  <th>Quantity</th>
												  <th>Product Amount</th>
												  <th>Product Image</th>
												  <th>Product Date</th>
												  <th>Action</th>
                                            </tr
                                        </tfoot>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                        
        <!--**********************************
            Content body end
        ***********************************-->


        <!--**********************************
            Footer start
        ***********************************-->
       <?php include('footer.php');?>
        <!--**********************************
            Footer end
        ***********************************-->

        <!--**********************************
           Support ticket button start
        ***********************************-->

        <!--**********************************
           Support ticket button end
        ***********************************-->

        
    </div>
    <!--**********************************
        Main wrapper end
    ***********************************-->

    <!--**********************************
        Scripts
    ***********************************-->
    <!-- Required vendors -->
   