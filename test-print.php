<?php 
include('header.php');
$sl_no=$_GET['no'];
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
            <div class="col-xs-12">
                <div class="widget" id="printableArea">
				<?php
					$sql = "select * from `lc_commercial` where `sl_no`='$sl_no'";
					$result = mysqli_query($conn, $sql);
					$row = mysqli_fetch_array($result);
				?>
                    <div class="block invoice">
                        <h1>LCAF No : <?php echo $row['lcaf_no']; ?></h1>
                        <span class="date">Date: 20.12.2012 22:43</span>
                        <div class="row">
                            <div class="col-xs-3">
                                <h4>Beneficiary Info</h4>
                                <address>
                                    <strong><?php echo $row['beneficiary_name']; ?></strong><br>
                                    <?php echo $row['beneficiary_address']; ?><br>
                                </address>                                
                            </div>
                            <div class="col-xs-3">
                                <h4>Opener's Info</h4>
                                <address>
                                    <strong><?php echo $row['openers_name']; ?></strong><br>
                                    <?php echo $row['openers_address']; ?><br>
                                </address>
                            </div>
                            <div class="col-xs-3"></div>
                            <div class="col-xs-3">
                                <h4>Importer Info</h4>
                                <p><strong>Name:</strong> <?php echo $row['importer_name']; ?></p>
                                <p><strong>Address:</strong> <?php echo $row['address']; ?></p>	
                                <div class="highlight">
                                    <strong>LC Amount:</strong> <?php echo $row['lc_amount']; ?> <em>USD</em>
                                </div>
                            </div>
                        </div>
                        <h3>Description of items to be imported</h3>
                        <p><?php echo $row['description_of_item_imported']; ?></p>
                    </div>
                </div>
				<div class="middle">                                         
                    <div class="button tip" title="Print Invoice" onclick="printDiv('printableArea')">
                        <a href="#">
                            <span class="icomg-printer"></span>
                            <span class="text">Print</span>
                        </a>                    
                    </div>                                          
                </div>
				<script>
				function printDiv(divName) {
					 var printContents = document.getElementById(divName).innerHTML;
					 var originalContents = document.body.innerHTML;

					 document.body.innerHTML = printContents;

					 window.print();

					 document.body.innerHTML = originalContents;
				}
				</script>
            </div>
        </div> 
    </div>  
</body>
</html>
