<?php 
include('header.php');
 ?>  

<style>
.modal-backdrop.in {
    opacity: 0;
}

</style>
    
    <div class="breadCrumb clearfix">    
        <ul id="breadcrumbs">
            <li><a href="index.html">Home</a></li>
            <li><a href="#">Master Setup</a></li>
            <li>Material Setup</li>
        </ul>        
    </div>
    
    <div class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="widget" style="border:2px solid #42536D;border-radius:5px;">
                    <div class="head dark">
                        <div class="icon"><i class="icos-paragraph-justify"></i></div>
                        <h2>Material Setup</h2>
                    </div>                        
                    <div class="accordion">

                        <h3 style="border-bottom:1px solid #42536D;">Category</h3>
                        <div>
                            <div class="row">
								<div class="col-md-9">
									<div class="block-fluid">
										<table class="fpTable" cellpadding="0" cellspacing="0" width="100%">
											<thead>
												<tr>
													<th width="25%">Category Code</th>
													<th width="60%">Category Name</th>
													<th width="15%" class="TAC">Actions</th>
												</tr>
											</thead>
											<tbody>
												<?php
                                        $parentCats = getTableDataByTableName('inv_materialcategorysub', '', 'category_description');
                                        if (isset($parentCats) && !empty($parentCats)) {
                                            foreach ($parentCats as $pcat) {
                                                ?>
                                                <tr>
                                                    <td><?php echo $pcat['category_id']; ?></td>
                                                    <td><?php echo $pcat['category_description']; ?></td>
                                                    <td>
                                                        <button type="button" class="btn btn-sm" onclick="openParentEditForm('<?php echo $pcat['id']; ?>');">
                                                            <i class="fa fa-edit" aria-hidden="true"></i>
                                                        </button>
                                                    </td>
                                                </tr>
                                                <?php
                                            }
                                        }else{ ?>
                                              <tr>
                                                  <td colspan="3">
                                                        <div class="alert alert-info" role="alert">
                                                            Sorry, no data found!
                                                        </div>
                                                    </td>
                                                </tr>  
                                        <?php } ?>                                
											</tbody>
										</table>                    
									</div>
								</div>
								<div class="col-md-3">
									<div class="middle">
										<div class="button tip">
											<a href="#" id="jDialog_form_button">
												<span class="icomg-plus1"></span>
												<span class="text">Add New Category</span>
											</a>                    
										</div>
									</div> 
								</div>
							</div>
                        </div>

                        <h3 style="border-bottom:1px solid #42536D;border-top:1px solid #42536D;">Sub Category</h3>
                        <div>
                            <div class="row">
								<div class="col-md-9">
									<div class="block-fluid">
										<table class="fpTable" cellpadding="0" cellspacing="0" width="100%">
											<thead>
												<tr>
													<th width="25%">Name</th>
													<th width="20%">Product</th>
													<th width="20%">Status</th>
													<th width="20%">Date</th>
													<th width="15%" class="TAC">Actions</th>
												</tr>
											</thead>
											<tbody>
												<tr>
													<td><a href="#">Dmitry Ivaniuk</a></td>
													<td>Product #212</td>
													<td><span class="label label-danger">New</span></td>
													<td>24/11/2012</td>
													<td class="TAC">
														<a href="#" class="icon-button"><span class="glyphicon glyphicon-ok"></span></a> 
														<a href="#" class="icon-button"><span class="glyphicon glyphicon-pencil"></span></a>
														<a href="#" class="icon-button"><span class="glyphicon glyphicon-trash"></span></a>
													</td>
												</tr>
												<tr>
													<td><a href="#">Vasily Ivaniuk</a></td>
													<td>Product #355</td>
													<td><span class="label label-success">Delivered</span></td>
													<td>19/11/2012</td>
													<td class="TAC">
														<a href="#" class="icon-button"><span class="glyphicon glyphicon-ok"></span></a> 
														<a href="#" class="icon-button"><span class="glyphicon glyphicon-pencil"></span></a>
														<a href="#" class="icon-button"><span class="glyphicon glyphicon-trash"></span></a>
													</td>
												</tr>                                 
											</tbody>
										</table>                    
									</div>
								</div>
								<div class="col-md-3">
									<div class="middle">
										<div class="button tip">
											<a href="#bModal" role="button" data-toggle="modal">
												<span class="icomg-plus1"></span>
												<span class="text">Add New Sub Category</span>
											</a>                    
										</div>
									</div> 
								</div>
							</div>
                        </div>

                        <h3 style="border-top:1px solid #42536D;">Material</h3>
                        <div>
                            <div class="row">
								<div class="col-md-8">
									<div class="block-fluid">
										<table class="fpTable" cellpadding="0" cellspacing="0" width="100%">
											<thead>
												<tr>
													<th width="25%">Name</th>
													<th width="20%">Product</th>
													<th width="20%">Status</th>
													<th width="20%">Date</th>
													<th width="15%" class="TAC">Actions</th>
												</tr>
											</thead>
											<tbody>
												<tr>
													<td><a href="#">Dmitry Ivaniuk</a></td>
													<td>Product #212</td>
													<td><span class="label label-danger">New</span></td>
													<td>24/11/2012</td>
													<td class="TAC">
														<a href="#" class="icon-button"><span class="glyphicon glyphicon-ok"></span></a> 
														<a href="#" class="icon-button"><span class="glyphicon glyphicon-pencil"></span></a>
														<a href="#" class="icon-button"><span class="glyphicon glyphicon-trash"></span></a>
													</td>
												</tr>
												<tr>
													<td><a href="#">John Doe</a></td>
													<td>Product #132</td>
													<td><span class="label label-danger">New</span></td>
													<td>24/11/2012</td>
													<td class="TAC">
														<a href="#" class="icon-button"><span class="glyphicon glyphicon-ok"></span></a> 
														<a href="#" class="icon-button"><span class="glyphicon glyphicon-pencil"></span></a>
														<a href="#" class="icon-button"><span class="glyphicon glyphicon-trash"></span></a>
													</td>
												</tr>
												<tr>
													<td><a href="#">Alex Fruz</a></td>
													<td>Product #53</td>
													<td><span class="label label-danger">New</span></td>
													<td>23/11/2012</td>
													<td class="TAC">
														<a href="#" class="icon-button"><span class="glyphicon glyphicon-ok"></span></a> 
														<a href="#" class="icon-button"><span class="glyphicon glyphicon-pencil"></span></a>
														<a href="#" class="icon-button"><span class="glyphicon glyphicon-trash"></span></a>
													</td>
												</tr>
												<tr>
													<td><a href="#">Olga Yukhimchuk</a></td>
													<td>Product #874</td>
													<td><span class="label label-info">Pending</span></td>
													<td>23/11/2012</td>
													<td class="TAC">
														<a href="#" class="icon-button"><span class="glyphicon glyphicon-ok"></span></a> 
														<a href="#" class="icon-button"><span class="glyphicon glyphicon-pencil"></span></a>
														<a href="#" class="icon-button"><span class="glyphicon glyphicon-trash"></span></a>
													</td>
												</tr>
												<tr>
													<td><a href="#">Angelina Rose</a></td>
													<td>Product #533</td>
													<td><span class="label label-info">Pending</span></td>
													<td>23/11/2012</td>
													<td class="TAC">
														<a href="#" class="icon-button"><span class="glyphicon glyphicon-ok"></span></a> 
														<a href="#" class="icon-button"><span class="glyphicon glyphicon-pencil"></span></a>
														<a href="#" class="icon-button"><span class="glyphicon glyphicon-trash"></span></a>
													</td>
												</tr> 
												<tr>
													<td><a href="#">Alexandra Belova</a></td>
													<td>Product #898</td>
													<td><span class="label label-success">Delivered</span></td>
													<td>21/11/2012</td>
													<td class="TAC">
														<a href="#" class="icon-button"><span class="glyphicon glyphicon-ok"></span></a> 
														<a href="#" class="icon-button"><span class="glyphicon glyphicon-pencil"></span></a>
														<a href="#" class="icon-button"><span class="glyphicon glyphicon-trash"></span></a>
													</td>
												</tr>
												<tr>
													<td><a href="#">Ivanov Ivan</a></td>
													<td>Product #900</td>
													<td><span class="label label-success">Delivered</span></td>
													<td>21/11/2012</td>
													<td class="TAC">
														<a href="#" class="icon-button"><span class="glyphicon glyphicon-ok"></span></a> 
														<a href="#" class="icon-button"><span class="glyphicon glyphicon-pencil"></span></a>
														<a href="#" class="icon-button"><span class="glyphicon glyphicon-trash"></span></a>
													</td>
												</tr>
												<tr>
													<td><a href="#">Eugune Noise</a></td>
													<td>Product #231</td>
													<td><span class="label label-success">Delivered</span></td>
													<td>20/11/2012</td>
													<td class="TAC">
														<a href="#" class="icon-button"><span class="glyphicon glyphicon-ok"></span></a> 
														<a href="#" class="icon-button"><span class="glyphicon glyphicon-pencil"></span></a>
														<a href="#" class="icon-button"><span class="glyphicon glyphicon-trash"></span></a>
													</td>
												</tr>
												<tr>
													<td><a href="#">Anatoly Yukhim</a></td>
													<td>Product #874</td>
													<td><span class="label label-success">Delivered</span></td>
													<td>20/11/2012</td>
													<td class="TAC">
														<a href="#" class="icon-button"><span class="glyphicon glyphicon-ok"></span></a> 
														<a href="#" class="icon-button"><span class="glyphicon glyphicon-pencil"></span></a>
														<a href="#" class="icon-button"><span class="glyphicon glyphicon-trash"></span></a>
													</td>
												</tr>
												<tr>
													<td><a href="#">Vasily Ivaniuk</a></td>
													<td>Product #355</td>
													<td><span class="label label-success">Delivered</span></td>
													<td>19/11/2012</td>
													<td class="TAC">
														<a href="#" class="icon-button"><span class="glyphicon glyphicon-ok"></span></a> 
														<a href="#" class="icon-button"><span class="glyphicon glyphicon-pencil"></span></a>
														<a href="#" class="icon-button"><span class="glyphicon glyphicon-trash"></span></a>
													</td>
												</tr>                                 
											</tbody>
										</table>                    
									</div>
								</div>
								<div class="col-md-4"></div>
							</div>
                        </div>                          

                    </div>
                </div>
            </div>               

        </div>                                               
        
    </div>  

                          

        <!-- jQuery dialog form -->
        <div class="dialog-fluid" id="jDialog_form" style="display: none;" title="Modal form">
            <div class="row">
                <div class="block-fluid">
                    <div class="form-group">
                        <div class="col-md-12">
                            <span class="top title">First name:</span>
                            <input type="text" name="fname" value="" class="form-control"/>                        
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-12">
                            <span class="top title">Last name:</span>
                            <input type="text" name="lname" value="" class="form-control"/>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-12">
                            <span class="top title">Last name:</span>
                            <input type="text" name="lname" value="" class="form-control"/>
                        </div>
                    </div>                
                    <div class="form-group">
                        <div class="col-md-12">
                            <span class="top title">About:</span>
                            <textarea></textarea>
                        </div>
                    </div>                           
                </div>
            </div>
        </div>                                        

            

        <!-- Bootrstrap modal -->
        <div id="bModal" class="modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                        <h3 class="modal-title" id="myModalLabel">Modal</h3>
                    </div>
                    <div class="row">
                        <div class="block-fluid">
                            <div class="form-group">
                                <div class="col-md-12">
                                    <span class="top title">First name:</span>
                                    <input type="text" name="fname" value="" class="form-control"/>                        
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-md-12">
                                    <span class="top title">Last name:</span>
                                    <input type="text" name="lname" value="" class="form-control"/>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-md-12">
                                    <span class="top title">Last name:</span>
                                    <input type="text" name="lname" value="" class="form-control"/>
                                </div>
                            </div>                
                            <div class="form-group">
                                <div class="col-md-12">
                                    <span class="top title">About:</span>
                                    <textarea class="form-control"></textarea>
                                </div>
                            </div>       
                        </div>
                    </div>                   
                    <div class="modal-footer">
                        <button class="btn btn-primary" data-dismiss="modal" aria-hidden="true">Save updates</button> 
                        <button class="btn btn-warning" data-dismiss="modal" aria-hidden="true">Close</button>            
                    </div>
                </div>
            </div>
        </div>                            
   

</body>
</html>