<?php 
include('header.php');
 ?> 
<style>
input[type="text"].form-control, input[type="password"].form-control, textarea.form-control, select.form-control{
	height: 25px;
}
.form-lebel{
	font-weight:bold;
}
</style> 
    <div class="content">
                
        <div class="row">
            
            <div class="col-md-12">                
                
                <div class="widget">
                    <div class="head">
                        <div class="icon"><i class="icosg-bookmark1"></i></div>
                        <h2>LC Form Entry [--- Commercial ---]</h2> 
						<button class="btn btn-primary" type="submit" onclick="window.location.href='lc_industrial_form.php';">Switch to LC Industrial Entry Form</button>
                    </div>                                               
                    <form id="validate" method="POST" action="">
                    <div class="block-fluid">
                        <table class="fpTable" cellpadding="0" cellspacing="0" width="100%">
                                <thead>
                                    <tr>
                                        <th width="5%">SL No</th>
                                        <th width="10%">LCAF No</th>
                                        <th width="15%">Importer Name</th>
                                        <th width="15%">IRC No</th>
                                        <th width="10%">LC Amount</th>
                                        <th width="30%">Items</th>
                                        <th width="15%" class="TAC">Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php 
									$item_details = getTableDataByTableName('lc_commercial', '', 'id');
									if (isset($item_details) && !empty($item_details)) {
										foreach ($item_details as $item) {
									?>
									<tr>
                                        <td><?php echo $item['sl_no']; ?></td>
                                        <td><?php echo $item['lcaf_no']; ?></td>
                                        <td><?php echo $item['importer_name']; ?></td>
                                        <td><?php echo $item['irc_no']; ?></td>
                                        <td><?php echo $item['lc_amount']; ?></td>
                                        <td><?php echo $item['description_of_item_imported']; ?></td>
                                        <td class="TAC">
                                            <a href="lc_commercial_view.php?no=<?php echo $item['sl_no']; ?>" title="View" class="icon-button btn btn-success"><span class="glyphicon glyphicon-eye-open" style="color:#fff;"></span></a> 
                                            <a href="#" class="icon-button btn btn-info"><span class="glyphicon glyphicon-pencil" style="color:#fff;"></span></a>
                                            <a href="#" class="icon-button btn btn-danger"><span class="glyphicon glyphicon-trash" style="color:#fff;"></span></a>
                                        </td>
                                    </tr>
									<?php }} ?>
                                </tbody>
                            </table>
                    </div>                
                    </form>
                </div>
            </div>
        </div>                        
        
    </div>  


</body>
</html>
