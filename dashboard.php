<?php 
include('header.php');
 ?>  




    <div class="content">

        <div class="row">

            <div class="col-md-8">
                
                <div class="widget">
                    <div class="head dark">
                        <div class="icon"><span class="icos-calendar"></span></div>
                        <h2>Visitors</h2>
                        <ul class="buttons">                            
                            <li><a href="#"><span class="icos-refresh"></span></a></li>
                            <li><a href="#"><span class="icos-history"></span></a></li>
                            <li><a href="#"><span class="icos-flag1"></span></a></li>
                        </ul>                         
                    </div>
                    <div class="toolbar">
                        <div class="left TAL">                                                        
                            <div class="input-group">
                                <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
                                <input type="text" class="form-control" id="datepicker" value="2013-01-31"/>                                
                                <div class="input-group-btn">
                                    <button class="btn btn-default">Show</button>                                    
                                </div>
                            </div>                            
                        </div>
                        <div class="right TAR">
                            <button class="btn btn-default">Today</button>     
                            <div class="btn-group" data-toggle="buttons-radio">
                                <button type="button" class="btn btn-default">Week</button>
                                <button type="button" class="btn btn-default">Month</button>
                                <button type="button" class="btn btn-default active">Year</button>                            
                            </div>           
                        </div>
                    </div>
                    <div class="block white">
                        <div id="main_chart" style="height: 300px;"></div>
                    </div>
                    <div class="toolbar-fluid">
                        <div class="information">
                            <div class="item">
                                <div class="rates">
                                    <div class="title">2,145</div>
                                    <div class="description">Visits</div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="rates">
                                    <div class="title">648</div>
                                    <div class="description">Unique</div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="rates">
                                    <div class="title">143</div>
                                    <div class="description">Sales</div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="rates">
                                    <div class="title">$14,329</div>
                                    <div class="description">Money</div>
                                </div>
                            </div>                            
                        </div>
                    </div>
                </div>

                

            </div>

            <div class="col-md-4">
                
               <div class="middle">

                    <div class="button">
                        <a href="#">
                            <span class="icomg-earth"></span>
                            <span class="text">Quick Navigation</span>
                        </a>
                        <ul class="sub">
                            <li><a href="/" class="tip" title="Dashborad"><span class="glyphicon glyphicon-home"></span></a></li>
                            <li><a href="ui.html" class="tip" title="UI"><span class="glyphicon glyphicon-user"></span></a></li>
                            <li><a href="grid.html" class="tip" title="Grid"><span class="glyphicon glyphicon-th"></span></a></li>
                            <li><a href="widgets.html" class="tip" title="Widgets"><span class="glyphicon glyphicon-th-large"></span></a></li>
                            <li><a href="buttons.html" class="tip" title="Buttons"><span class="glyphicon glyphicon-chevron-right"></span></a></li>
                            <li><a href="icons.html" class="tip" title="Icons"><span class="glyphicon glyphicon-fire"></span></a></li>
                            <li><a href="http://google.com/" class="tip" title="Google" target="_blank"><span class="glyphicon glyphicon-globe"></span></a></li>
                            <li><a href="http://youtube.com/" class="tip" title="Youtube" target="_blank"><span class="glyphicon glyphicon-globe"></span></a></li>
                        </ul>
                    </div>

                    <div class="button">
                        <a href="#">
                            <span class="icomg-user2"></span>
                            <span class="text">Users Actions</span>
                        </a>
                        <ul class="sub">
                            <li><a href="users.html" class="tip" title="Show list"><span class="glyphicon glyphicon-th-list"></span></a></li>
                            <li><a href="ui.html" class="tip" title="Add new"><span class="glyphicon glyphicon-plus"></span></a></li>                        
                            <li><a href="#" class="tip" title="Registrations"><span class="glyphicon glyphicon-ok"></span></a></li>
                            <li><a href="#" class="tip" title="Send mail"><span class="glyphicon glyphicon-envelope"></span></a></li>
                            <li><a href="#" class="tip" title="Top users"><span class="glyphicon glyphicon-star"></span></a></li>
                            <li><a href="#" class="tip" title="Users activity"><span class="glyphicon glyphicon-signal"></span></a></li>
                            <li><a href="#" class="tip" title="Last comments"><span class="glyphicon glyphicon-comment"></span></a></li>
                        </ul>
                    </div>                

                </div>                

                <div class="middle">
                    <div class="informer">
                        <a href="#">
                            <span class="title">2/1,981</span>
                            <div class="progress small">
                                <div class="progress-bar progress-bar-striped tip" style="width: 58%;" title="Used 58%"></div>
                            </div>   
                        </a>
                        <span class="caption tip" title="Spam">341</span>
                    </div>                                        
                    <div class="informer">
                        <a href="#">
                            <span class="title">$2,534</span>
                            <span class="text">Balance</span>
                        </a>
                        <span class="caption red">-$135</span>
                    </div>                                                                            
                </div>                                  
                
                                              
                 <div class="widget">
                    <div class="head dark">
                        <div class="icon"><i class="icos-stats-up"></i></div>
                        <h2>Latest Orders</h2>
                        <ul class="buttons">                            
                            <li><a href="#"><span class="icos-pencil2"></span></a></li>
                            <li><a href="#"><span class="icos-cog"></span></a></li>
                        </ul>                         
                    </div>                
                        <div class="block-fluid">
                            <table class="table table-hover" cellpadding="0" cellspacing="0" width="100%">
                                <thead>
                                    <tr>
                                        <th><input type="checkbox" class="checkall"/></th>
                                        <th>Product</th>
                                        <th>Status</th>
                                        <th class="TAC">Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td><input type="checkbox" name="order[]" value="528"/></td>
                                        <td>Product #212</td>
                                        <td><span class="label label-danger">New</span></td>
                                        <td class="TAC">
                                            <a href="#" class="icon-button"><span class="glyphicon glyphicon-ok"></span></a> 
                                            <a href="#" class="icon-button"><span class="glyphicon glyphicon-pencil"></span></a> 
                                            <a href="#" class="icon-button"><span class="glyphicon glyphicon-trash"></span></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><input type="checkbox" name="order[]" value="527"/></td>
                                        <td>Product #132</td>
                                        <td><span class="label label-danger">New</span></td>
                                        <td class="TAC">
                                            <a href="#" class="icon-button"><span class="glyphicon glyphicon-ok"></span></a> 
                                            <a href="#" class="icon-button"><span class="glyphicon glyphicon-pencil"></span></a> 
                                            <a href="#" class="icon-button"><span class="glyphicon glyphicon-trash"></span></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><input type="checkbox" name="order[]" value="526"/></td>
                                        <td>Product #53</td>
                                        <td><span class="label label-danger">New</span></td>
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
                
                              
                
            </div>            

        </div>

    </div>  

    <div id="fcAddEvent" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="fcAddEventLabel" aria-hidden="true">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            <h3 id="fcAddEventLabel">Add new event</h3>
        </div>
        <div class="modal-body">
            <div class="row">
                <div class="col-md-3">Title:</div>
                <div class="col-md-9"><input type="text" class="form-control" id="fcAddEventTitle"/></div>
            </div>
        </div>
        <div class="modal-footer">            
            <button class="btn btn-primary" id="fcAddEventButton">Add</button>            
        </div>
    </div>

</body>
</html>
