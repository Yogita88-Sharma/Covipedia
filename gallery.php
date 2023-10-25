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
                            <span>Gallery Table</span>
                        </div>
                    </div>
                    <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">Table</a></li>
                            <li class="breadcrumb-item active"><a href="index.php">Home</a></li>
                        </ol>
                    </div>
                </div>
                <!-- row -->


                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
								<a href="insertgallery.php">Gallery Insert Table</a>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table id="example" class="display" style="min-width: 845px">
                                        <thead>
                                            <tr>
                                                 <th>Gallery Id</th>
												<th>Image Path</th>
												<th>Image Description</th>
												<th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
										<?php
											$sql="select * from gallery";
											$result=mysqli_query($conn,$sql);
											while($row=mysqli_fetch_array($result))
											{
												$gid=$row['Gallery_Id'];
												?>
                                            <tr>
														<td><?php echo $row['Gallery_Id'];?></td>
														<td><img src="../Image/<?php echo $row['Image_Path']?>" height="50" width="50"/></td>
														<td><?php echo $row['Image_Description'];?></td>
														<td><a href="dgallery.php?id=<?php echo $gid;?>"><img src="delete.png" height="25" weidth="25"/></a>&nbsp;
														</td>
                                            </tr>
                                           <?php
											}
											?>
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                               <th>Gallery Id</th>
												<th>Image Path</th>
												<th>Image Description</th>
												<th>Action</th>
                                            </tr>
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
   