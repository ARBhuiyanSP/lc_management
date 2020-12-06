<?php 
include('header.php');
$sl_no=$_GET['no'];
?> 
<style>
p{
	font-size:18px;
}
@media print {
  body * {
    visibility: hidden;
    
  }
  
  #printSectionArea {
	  position:absolute;
	  margin-left:5px;
	  margin-right:5px;
	  margin-top:30px;
	  margin-bottom:5px;
	  border:1px solid red;
	  width:8.5in;
	  height:14in;
  }
  #section-to-print, #section-to-print * {
    visibility: visible;
    font-size: 18px;
	position: absolute;
    left: -280px;
    top: 70px;
  }
  #section-to-printnameAddress{
    visibility: visible;
    font-size: 18px;
	position: absolute;
    left: -280px;
    top: 40px;
  }
  
  #section-to-printyearOfrenew{
    visibility: visible;
    font-size: 18px;
	position: absolute;
    left: 10px;
    top: 53px;
  }
  
  #section-to-printirc{
    visibility: visible;
    font-size: 18px;
	position: absolute;
    left: -280px;
    top: 70px;
  }
  
  #section-to-printLcAmount{
    visibility: visible;
    font-size: 18px;
	position: absolute;
    left: -280px;
    top: 90px;
  }
  
  #section-to-printDescImp{
    visibility: visible;
    font-size: 18px;
	position: absolute;
    left: -280px;
    top: 120px;
  }
  
  #section-to-printTestItem{
    visibility: visible;
    font-size: 18px;
	position: absolute;
    left: 10px;
    top: 120px;
  }
}
</style> 
    <div class="content">
        <div class="row">    
            <div class="col-xs-12">
                <div class="widget">
					<?php
						$sql = "select * from `lc_industrial` where `sl_no`='$sl_no'";
						$result = mysqli_query($conn, $sql);
						$row = mysqli_fetch_array($result);
					?>
					<div class="block invoice" id="printSectionArea">
						<h1>LCAF No : <span id=""><?php echo $row['lcaf_no']; ?></span></h1>
						<div class="row">
							<div class="col-xs-12">Name & Address of the Industrial unit: <span id="section-to-printnameAddress"><?php echo $row['applicant_name']; ?>-<?php echo $row['applicant_address']; ?></span></div>
							<div class="col-xs-6">IRC No: <span id="section-to-printirc"><?php echo $row['irc_no']; ?>|</span></div>
							<div class="col-xs-6">Year of Renewal: <span id="section-to-printyearOfrenew"><?php echo $row['year_of_renewal']; ?></span></div>
							<div class="col-xs-12">Source of Financing: 
								<span id="section-to-printsof">
									<input type="checkbox" name="sof_cash" <?php if($row['sof_cash']=='1'){echo 'checked';} ?>/>Cash
									<input type="checkbox" name="sof_barter" <?php if($row['sof_barter']=='1'){echo 'checked';} ?>/>Barter
									<input type="checkbox" name="sof_loan" <?php if($row['sof_loan']=='1'){echo 'checked';} ?>/>Loan 
									<input type="checkbox" name="sof_credit" <?php if($row['sof_credit']=='1'){echo 'checked';} ?>/>Credit 
									<input type="checkbox" name="sof_other" <?php if($row['sof_other']=='1'){echo 'checked';} ?>/>others 
								</span>
							</div>
							<div class="col-xs-6">Description of item imported: </br><span id="section-to-printDescImp"><?php echo $row['description_of_item_imported']; ?></span></div>
							<div class="col-xs-6">Restricted items: </br><span id="section-to-printTestItem"><?php echo $row['restricted_items']; ?></span></div>
							<div class="col-xs-12">LC Amount: <span id="section-to-printLcAmount"><?php echo $row['lc_amount']; ?></span></div>
						</div>
					</div>
                </div>
				<div class="middle">                                         
                    <div class="button tip" title="Print Invoice" id="print">
                        <a href="#">
                            <span class="icomg-printer"></span>
                            <span class="text">Print</span>
                        </a>                    
                    </div>                                          
                </div>
				<script>
				document.querySelector("#print").addEventListener("click", function() {
					window.print();
				});
				</script>
            </div>
        </div> 
    </div>  
</body>
</html>
