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
                                        
                        <div class="form-group">
                            <div class="col-md-1 form-lebel">SL No :</div>
                            <div class="col-md-1">
                                <input type="text" name="sl_no" class="form-control validate[required]" readonly="readonly" value="<?php echo getDefaultCategoryCode('lc_commercial', 'sl_no', '03d', '001', 'LCM-') ?>"/>
                            </div>
							
							<div class="col-md-1 form-lebel">LCAF No :</div>
                            <div class="col-md-2">
                                <input type="text" name="lcaf_no" class="form-control validate[required]" style=""/>
                            </div>
						
                            <div class="col-md-1 form-lebel">Importer Name :</div>
                            <div class="col-md-2">
                                <input type="text" name="importer_name" class="form-control validate[required]"/>
                            </div>
						
                            <div class="col-md-1 form-lebel">Importer Address:</div>
                            <div class="col-md-3">
                                <input type="text" name="address" class="form-control validate[required]"/>
                            </div>
                        </div> 
						<div class="form-group">
                            <div class="col-md-1 form-lebel">IRC No :</div>
                            <div class="col-md-1">
                                <input type="text" name="irc_no" class="form-control validate[required]"/>
                            </div>
							
                            <div class="col-md-1 form-lebel">Renewal Year :</div>
                            <div class="col-md-1">
                                <input type="text" name="year_of_renewal" class="form-control validate[required]"/>
                            </div>
							
							<div class="col-md-1 form-lebel">Share Basis Amount :</div>
                            <div class="col-md-1">
                                <input type="text" name="share_basis_amount" class="form-control validate[required]"/>
                            </div>
							
							<div class="col-md-1 form-lebel">LC Amount :</div>
                            <div class="col-md-1">
                                <input type="text" name="lc_amount" class="form-control validate[required]"/>
                            </div>
							
							<div class="col-md-1 form-lebel">Source of Financing :</div>
                            <div class="col-md-3">
                                <input type="checkbox" name="sof_cash" value="1"/>Cash
                                <input type="checkbox" name="sof_barter" value="1"/>Barter
                                <input type="checkbox" name="sof_loan" value="1"/>Loan 
                                <input type="checkbox" name="sof_credit" value="1"/>Credit 
                                <input type="checkbox" name="sof_other" value="1"/>others 
                            </div>
                        </div>	                   
                        <div class="form-group">
                            <div class="col-md-2 form-lebel">Description of items to be imported:</div>
                            <div class="col-md-4"><textarea name="description_of_item_imported" class="form-control validate[required]" style="min-height: 50px;"></textarea></div>
                            <div class="col-md-2 form-lebel">ITC Number</div>
                            <div class="col-md-2">
                                <input type="text" name="itc_number" class="form-control validate[required]"/>
                            </div>
                        </div>	
						<div class="form-group">
                            <div class="col-md-2 form-lebel">Description of Items</div>
                            <div class="col-md-4"><textarea name="description_of_items" class="form-control validate[required]" style="min-height: 50px;"></textarea></div>
						
                            <div class="col-md-2 form-lebel">ITC No</div>
                            <div class="col-md-2">
                                <input type="text" name="itc_no" class="form-control validate[required]"/>
                            </div>
						
                        </div>	
						<div class="form-group">
                            <div class="col-md-2 form-lebel">Beneficiary Name :</div>
                            <div class="col-md-3">
                                <input type="text" name="beneficiary_name" class="form-control validate[required]"/>
                            </div>
						
                            <div class="col-md-2 form-lebel">Beneficiary Address:</div>
                            <div class="col-md-5">
                                <input type="text" name="beneficiary_address" class="form-control validate[required]"/>
                            </div>
						
                        </div>		
						<div class="form-group">
                            <div class="col-md-2 form-lebel">Opener's Name :</div>
                            <div class="col-md-3">
                                <input type="text" name="openers_name" class="form-control validate[required]"/>
                            </div>
						
                            <div class="col-md-2 form-lebel">Opener's Address:</div>
                            <div class="col-md-5">
                                <input type="text" name="openers_address" class="form-control validate[required]"/>
                            </div>
						
                        </div>
						<div class="form-group">
                            <div class="col-md-1 form-lebel">Draft Amount :</div>
                            <div class="col-md-2">
                                <input type="text" name="draft_amount" class="form-control validate[required]"/>
                            </div>
                            <div class="col-md-6">
                                <input type="checkbox" name="at_sight" value="1"/>At sight 
                                <input type="checkbox" name="days_da_dp" value="1"/>days DA/DP 
                                <input type="checkbox" name="cif" value="1"/>CIF 
                                <input type="checkbox" name="cfr" value="1"/>C F R
                                <input type="checkbox" name="fob" value="1"/>FOB
                                <input type="checkbox" name="drawn_on_us" value="1"/>Drawn on-Us
                                <input type="checkbox" name="drawn_on_them" value="1"/>Drawn on-Them 
                            </div>
							
                            <div class="col-md-1 form-lebel">Country Origin:</div>
                            <div class="col-md-2">
                                <select name="country_origin" class="select" style="width: 100%;">
                                    <option >choose a country...</option>
                                    <option value="Bangladesh">Bangladesh</option>
                                    <option value="China">China</option>
                                    <option value="Japan">Japan</option>
                                    <option value="India">India</option>
                                    <option value="USA">USA</option>
                                    <option value="Canada">Canada</option>
                                    <option value="Germany">Germany</option>
                                    <option value="England">England</option>
                                    <option value="Vietnam">Vietnam</option>
                                    <option value="Turkey">Turkey</option>                                                                       
                                    <option value="Srilanka">Srilanka</option>                                                                       
                                </select>
                            </div>
						
                        </div>		                   
                        <div class="form-group">
                            <div class="col-md-2 form-lebel">Commodities:</div>
                            <div class="col-md-10"><textarea name="commodities" class="form-control validate[required]" style="min-height: 50px;"></textarea></div>
                        </div>	
						<div class="form-group">
						
                            <div class="col-md-2 form-lebel">H.S Code:</div>
                            <div class="col-md-2">
                                <input type="text" name="hs_code" class="form-control validate[required]"/>
                            </div>
						
                            <div class="col-md-2 form-lebel">Issue/Shipment From:</div>
                            <div class="col-md-2">
                                <input type="text" name="shipment_from" class="form-control validate[required]"/>
                            </div>
						
                            <div class="col-md-2 form-lebel">Issue/Shipment To:</div>
                            <div class="col-md-2">
                                <input type="text" name="shipment_to" class="form-control validate[required]"/>
                            </div>
						
                        </div>		                   
                        <div class="form-group">
                            <div class="col-md-1 form-lebel">Insurance Cover note/policy no :</div>
							<div class="col-md-1">
                                <input type="text" name="insurance_cover_no" class="form-control validate[required]"/>
                            </div>
							<div class="col-md-1 form-lebel">Date :</div>
							<div class="col-md-1">
                                <input type="text" class="mask_date form-control" name="ins_date"/>
                            </div>
							<div class="col-md-1 form-lebel">Amount TK :</div>
							<div class="col-md-1">
                                <input type="text" name="ins_amount" class="form-control validate[required]"/>
                            </div>
                            <div class="col-md-3">
                                <input type="checkbox" name="ins_part_shipment" value="1"/>Part Shipment
                                <input type="checkbox" name="ins_allowed" value="1"/>Allowed
                                <input type="checkbox" name="ins_prohibited" value="1"/>Prohibited 
                            </div>
							<div class="col-md-1 form-lebel">Last Date of Shipment:</div>
							<div class="col-md-2">
                                <input type="text" class="mask_date form-control" name="last_shipment_date"/>
                            </div>
                        </div>	                   
                        <div class="form-group">
                            <div class="col-md-1 form-lebel">Name of Insurance:</div>
							<div class="col-md-2">
                                <input type="text" name="name_of_ins" class="form-control validate[required]"/>
                            </div>
							<div class="col-md-1 form-lebel">Address of Insurance:</div>
							<div class="col-md-2">
                                <input type="text" name="ins_address" class="form-control validate[required]"/>
                            </div>
                            <div class="col-md-3">
                                <input type="checkbox" name="ins_co_transhipment" value="1"/>Transhipment 
                                <input type="checkbox" name="ins_co_allowed" value="1"/>Allowed 
                                <input type="checkbox" name="ins_co_prohibited" value="1"/>Prohibited 
                            </div>
							<div class="col-md-1 form-lebel">Last Date of Negotiation:</div>
							<div class="col-md-2">
                                <input type="text" class="mask_date form-control" name="last_neg_date"/>
                            </div>
                        </div>						
                        <div class="form-group">                        
                            <div class="col-md-12" style="text-align:right;">
                                <input type="checkbox" class="form-control validate[required]" name="terms" value="1"/> Yes, I accept your terms and conditions.
                            
                                <div class="btn-group">
                                <button class="btn btn-info" type="button" onClick="$('#validate').validationEngine('hide');">Hide prompts</button>
								<input type="submit" name="commercial_submit" id="submit" class="btn btn-primary" style="" value="Submit" />   
                            </div>
                            </div>
                        </div>
                    </div>                
                    </form>
                </div>
            </div>
        </div>                        
        
    </div>  


</body>
</html>
