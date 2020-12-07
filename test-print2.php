<div id="dynamic_lcprint_section"></div>
<?php 
include('header.php');
$sl_no=$_GET['no'];
	$sql = "select * from `lc_industrial` where `sl_no`='$sl_no'";
	$result = mysqli_query($conn, $sql);
	$row = mysqli_fetch_array($result);
	
	$bank = $row['bank'];
?>
<div class="content">
        <div class="row">    
            <div class="col-xs-12">
                <div class="widget">
				<?php 
					if($bank == 'Dhaka Bank')
					{ 
						include('lc_layout/industrial_dhaka_bank_1.php');
						include('lc_layout/industrial_dhaka_bank_2.php');
					}else if($bank == 'UCB Bank'){
						include('lc_layout/industrial_ucb_bank_1.php');
						include('lc_layout/industrial_ucb_bank_2.php');
					}else{
						echo 'Nothing Found...!';
					} 
				?>
			</div>
		</div>
	</div>
</div>
</body>
</html>
