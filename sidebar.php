
    <div class="navigation">

        <ul class="main">
            <li><a href="#ui"><span class="icom-bookmark"></span><span class="text">Setup</span></a></li>
            <li><a href="#default" class="active"><span class="icom-screen"></span><span class="text">Dashboard</span></a></li>
            <li><a href="#tables"><span class="icom-newspaper"></span><span class="text">Reports</span></a></li>
        </ul>

        <div class="control"></div>        

        <div class="submain">

            <div id="default">

                <div class="widget-fluid userInfo clearfix">
                    <div class="image">
                        <img src="img/examples/users/dmitry.jpg" class="img-thumbnail"/>
                    </div>              
                    <div class="name">Welcome, <?php echo $_SESSION['logged']['user_name']; ?></div>
                    <ul class="menuList">
                        <li><a href="includes/logout.php"><span class="glyphicon glyphicon-share-alt"></span> Logoff</a></li>                        
                    </ul>
                    <div class="text">
                        Welcom back! </br>Your last visit: 24.10.2012 in 19:55
                    </div>
                </div>
                <div class="dr"><span></span></div>
                <ul class="fmenu">
                    <li>
                        <a href="dashboard.php"> Dashboard</a> 
						<a href="lc_industrial_form.php"><span class="glyphicon glyphicon-share"></span> LC Industrial</a>
						<a href="lc_industrial_list.php"><span class="glyphicon glyphicon-share"></span> LC Industrial List</a>
						<a href="lc_commercial_form.php"><span class="glyphicon glyphicon-share"></span> LC Commercial</a>
						<a href="lc_commercial_list.php"><span class="glyphicon glyphicon-share"></span> LC Commercial List</a>						
                    </li>                    
                </ul>       
                <div class="dr"><span></span></div>
                <div class="widget-fluid TAC">
                    <div class="kchart">
                        <input type="text" class="knob" data-min="1" data-max="100" value="35" data-width="90" data-height="90" data-fgColor="#b84b48" data-readOnly="true" data-bgColor="#f7f8fa"/>
                        <div class="label label-danger">Free Space</div>
                    </div>                    
                    <div class="kchart">
                        <input type="text" class="knob" data-min="1" data-max="3000" value="1982" data-width="90" data-height="90" data-fgColor="#f89406" data-readOnly="true" data-bgColor="#f7f8fa"/>
                        <div class="label label-warning">Visits</div>
                    </div>                                               
                </div>                
                <div class="dr"><span></span></div>
                <div class="widget">
                    <button class="btn btn-primary btn-block">Button block</button>
                </div>                
                <div class="widget">
                    <button class="btn btn-warning btn-block">Some another button</button>
                </div>
                <div class="dr"><span></span></div>
            </div>

            <div id="ui">  
				<div class="widget-fluid">
                    <div class="head">Master Setup</div>
                    <div id="fileTree"></div>
                </div>
                <div class="dr"><span></span></div>
				<ul class="fmenu">
                    <li><a href="material.php"><span class="glyphicon glyphicon-user"></span> Material</a></li>                   
                    <li><a href="buttons.html"><span class="glyphicon glyphicon-chevron-right"></span> Unit</a></li>                   
                    <li><a href="widgets.html"><span class="glyphicon glyphicon-th-large"></span> Supplier</a></li>                   
                    <li><a href="icons.html"><span class="glyphicon glyphicon-fire"></span> LC</a></li>                   
                    <li><a href="grid.html"><span class="glyphicon glyphicon-th"></span> Projects</a></li>                   
                    <li><a href="dnd.html"><span class="glyphicon glyphicon-move"></span> Packages</a></li>                   
                    <li><a href="dnd.html"><span class="glyphicon glyphicon-move"></span> Buildings</a></li>                   
                    <li><a href="dnd.html"><span class="glyphicon glyphicon-move"></span> Warehouse</a></li>                   
                    <li> <a href="dnd.html"><span class="glyphicon glyphicon-move"></span> Users</a></li>                   
                </ul>				
                <div class="dr"><span></span></div>                
                <div class="widget">
                    <button class="btn btn-primary btn-block">Button block</button>
                </div>
            </div>                  

            <div id="tables">

                <div class="menu">
                    <a href="tables.html"><span class="glyphicon glyphicon-align-justify"></span> Default tables</a>
                    <a href="dynamic_tables.html"><span class="glyphicon glyphicon-ok-sign"></span> Dynamic tables</a>                          
                </div>                                                                
                <div class="dr"><span></span></div>                
                <div class="widget-fluid">
                    <table cellpadding="0" cellspacing="0" width="100%">
                        <thead>
                            <tr>
                                <th width="50">ID</th>
                                <th>User</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>u-231</td>
                                <td><a href="#">Dmitry Ivaniuk</a></td>
                            </tr>
                            <tr>
                                <td>u-250</td>
                                <td><a href="#">Helen Symonchuk</a></td>
                            </tr>
                            <tr>
                                <td>u-256</td>
                                <td><a href="#">Olga Yukhimchuk</a></td>
                            </tr>                            
                            <tr>
                                <td>u-276</td>
                                <td><a href="#">Valentin Ratushev</a></td>
                            </tr>                                                        
                        </tbody>
                    </table>                    
                </div>
                <div class="dr"><span></span></div>                
                <div class="widget-fluid">
                    <table cellpadding="0" cellspacing="0" width="100%">
                        <thead>
                            <tr>
                                <th><input type="checkbox" class="checkall"/></th>
                                <th width="25%">ID</th>
                                <th width="75%">User</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><input type="checkbox" name="ch[]"/></td>
                                <td>u-231</td>
                                <td><a href="#">Dmitry Ivaniuk</a></td>
                            </tr>
                            <tr>
                                <td><input type="checkbox" name="ch[]"/></td>
                                <td>u-250</td>
                                <td><a href="#">Helen Symonchuk</a></td>
                            </tr>
                            <tr>
                                <td><input type="checkbox" name="ch[]"/></td>
                                <td>u-256</td>
                                <td><a href="#">Olga Yukhimchuk</a></td>
                            </tr>                            
                            <tr>
                                <td><input type="checkbox" name="ch[]"/></td>
                                <td>u-276</td>
                                <td><a href="#">Valentin Ratushev</a></td>
                            </tr>                                                        
                        </tbody>
                    </table>                    
                </div>  
                <div class="dr"><span></span></div>
            </div>  
           

        </div>

    </div>