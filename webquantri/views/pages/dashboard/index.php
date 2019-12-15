<?php 
$order=loadModel('order');
$list_order=$order->order_list();
$user=loadModel('user');
$list_user=$user->user_list('index',0);
$contact=loadModel('contact');
$list_contact=$contact->contact_list();
?>
<?php require_once 'views/header.php'; ?>



<div id="content">
  <div id="content-header">
    <div id="breadcrumb"> <a href="#" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a> <a href="#" class="current">Tables</a> </div>
    <h1>Tables</h1>
  </div>
  <div class="container-fluid">
    <hr>
    <div class="row-fluid">
      <div class="span12">
        <div class="widget-box">
          <div class="widget-title"> <span class="icon"><i class="icon-th"></i></span>
            <h5>Data table</h5>
          </div>
          <div class="widget-content nopadding">
            <table class="table table-bordered data-table">
              <thead>
                <tr>
                  <th>Rendering engine</th>
                  <th>Browser</th>
                  <th>Platform(s)</th>
                  <th>Engine version</th>
                </tr>
              </thead>
              <tbody>
                <tr class="gradeX">
                  <td>Trident</td>
                  <td>Internet
                    Explorer 4.0</td>
                  <td>Win 95+</td>
                  <td class="center">4</td>
                </tr>
                <tr class="gradeC">
                  <td>Trident</td>
                  <td>Internet
                    Explorer 5.0</td>
                  <td>Win 95+</td>
                  <td class="center">5</td>
                </tr>
                <tr class="gradeA">
                  <td>Trident</td>
                  <td>Internet
                    Explorer 5.5</td>
                  <td>Win 95+</td>
                  <td class="center">5.5</td>
                </tr>
                <tr class="gradeA">
                  <td>Trident</td>
                  <td>Internet
                    Explorer 6</td>
                  <td>Win 98+</td>
                  <td class="center">6</td>
                </tr>
                <tr class="gradeA">
                  <td>Trident</td>
                  <td>Internet Explorer 7</td>
                  <td>Win XP SP2+</td>
                  <td class="center">7</td>
                </tr>
                <tr class="gradeA">
                  <td>Trident</td>
                  <td>AOL browser (AOL desktop)</td>
                  <td>Win XP</td>
                  <td class="center">6</td>
                </tr>
                <tr class="gradeA">
                  <td>Gecko</td>
                  <td>Firefox 1.0</td>
                  <td>Win 98+ / OSX.2+</td>
                  <td class="center">1.7</td>
                </tr>
                <tr class="gradeA">
                  <td>Gecko</td>
                  <td>Firefox 1.5</td>
                  <td>Win 98+ / OSX.2+</td>
                  <td class="center">1.8</td>
                </tr>
                <tr class="gradeA">
                  <td>Gecko</td>
                  <td>Firefox 2.0</td>
                  <td>Win 98+ / OSX.2+</td>
                  <td class="center">1.8</td>
                </tr>
                <tr class="gradeA">
                  <td>Gecko</td>
                  <td>Firefox 3.0</td>
                  <td>Win 2k+ / OSX.3+</td>
                  <td class="center">1.9</td>
                </tr>
                <tr class="gradeA">
                  <td>Gecko</td>
                  <td>Camino 1.0</td>
                  <td>OSX.2+</td>
                  <td class="center">1.8</td>
                </tr>
                <tr class="gradeA">
                  <td>Gecko</td>
                  <td>Camino 1.5</td>
                  <td>OSX.3+</td>
                  <td class="center">1.8</td>
                </tr>
                <tr class="gradeA">
                  <td>Gecko</td>
                  <td>Netscape 7.2</td>
                  <td>Win 95+ / Mac OS 8.6-9.2</td>
                  <td class="center">1.7</td>
                </tr>
                <tr class="gradeA">
                  <td>Gecko</td>
                  <td>Netscape Browser 8</td>
                  <td>Win 98SE+</td>
                  <td class="center">1.7</td>
                </tr>
                <tr class="gradeA">
                  <td>Gecko</td>
                  <td>Netscape Navigator 9</td>
                  <td>Win 98+ / OSX.2+</td>
                  <td class="center">1.8</td>
                </tr>
                <tr class="gradeA">
                  <td>Gecko</td>
                  <td>Mozilla 1.0</td>
                  <td>Win 95+ / OSX.1+</td>
                  <td class="center">1</td>
                </tr>
                <tr class="gradeA">
                  <td>Gecko</td>
                  <td>Mozilla 1.1</td>
                  <td>Win 95+ / OSX.1+</td>
                  <td class="center">1.1</td>
                </tr>
                <tr class="gradeA">
                  <td>Gecko</td>
                  <td>Mozilla 1.2</td>
                  <td>Win 95+ / OSX.1+</td>
                  <td class="center">1.2</td>
                </tr>
                <tr class="gradeA">
                  <td>Gecko</td>
                  <td>Mozilla 1.3</td>
                  <td>Win 95+ / OSX.1+</td>
                  <td class="center">1.3</td>
                </tr>
                <tr class="gradeA">
                  <td>Gecko</td>
                  <td>Mozilla 1.4</td>
                  <td>Win 95+ / OSX.1+</td>
                  <td class="center">1.4</td>
                </tr>
                <tr class="gradeA">
                  <td>Gecko</td>
                  <td>Mozilla 1.5</td>
                  <td>Win 95+ / OSX.1+</td>
                  <td class="center">1.5</td>
                </tr>
                <tr class="gradeA">
                  <td>Gecko</td>
                  <td>Mozilla 1.6</td>
                  <td>Win 95+ / OSX.1+</td>
                  <td class="center">1.6</td>
                </tr>
                <tr class="gradeA">
                  <td>Gecko</td>
                  <td>Mozilla 1.7</td>
                  <td>Win 98+ / OSX.1+</td>
                  <td class="center">1.7</td>
                </tr>
                <tr class="gradeA">
                  <td>Gecko</td>
                  <td>Mozilla 1.8</td>
                  <td>Win 98+ / OSX.1+</td>
                  <td class="center">1.8</td>
                </tr>
                <tr class="gradeA">
                  <td>Gecko</td>
                  <td>Seamonkey 1.1</td>
                  <td>Win 98+ / OSX.2+</td>
                  <td class="center">1.8</td>
                </tr>
                <tr class="gradeA">
                  <td>Gecko</td>
                  <td>Epiphany 2.20</td>
                  <td>Gnome</td>
                  <td class="center">1.8</td>
                </tr>
                <tr class="gradeA">
                  <td>Webkit</td>
                  <td>Safari 1.2</td>
                  <td>OSX.3</td>
                  <td class="center">125.5</td>
                </tr>
                <tr class="gradeA">
                  <td>Webkit</td>
                  <td>Safari 1.3</td>
                  <td>OSX.3</td>
                  <td class="center">312.8</td>
                </tr>
                <tr class="gradeA">
                  <td>Webkit</td>
                  <td>Safari 2.0</td>
                  <td>OSX.4+</td>
                  <td class="center">419.3</td>
                </tr>
                <tr class="gradeA">
                  <td>Webkit</td>
                  <td>Safari 3.0</td>
                  <td>OSX.4+</td>
                  <td class="center">522.1</td>
                </tr>
                <tr class="gradeA">
                  <td>Webkit</td>
                  <td>OmniWeb 5.5</td>
                  <td>OSX.4+</td>
                  <td class="center">420</td>
                </tr>
                <tr class="gradeA">
                  <td>Webkit</td>
                  <td>iPod Touch / iPhone</td>
                  <td>iPod</td>
                  <td class="center">420.1</td>
                </tr>
                <tr class="gradeA">
                  <td>Webkit</td>
                  <td>S60</td>
                  <td>S60</td>
                  <td class="center">413</td>
                </tr>
                <tr class="gradeA">
                  <td>Presto</td>
                  <td>Opera 7.0</td>
                  <td>Win 95+ / OSX.1+</td>
                  <td class="center">-</td>
                </tr>
                <tr class="gradeA">
                  <td>Presto</td>
                  <td>Opera 7.5</td>
                  <td>Win 95+ / OSX.2+</td>
                  <td class="center">-</td>
                </tr>
                <tr class="gradeA">
                  <td>Presto</td>
                  <td>Opera 8.0</td>
                  <td>Win 95+ / OSX.2+</td>
                  <td class="center">-</td>
                </tr>
                <tr class="gradeA">
                  <td>Presto</td>
                  <td>Opera 8.5</td>
                  <td>Win 95+ / OSX.2+</td>
                  <td class="center">-</td>
                </tr>
                <tr class="gradeA">
                  <td>Presto</td>
                  <td>Opera 9.0</td>
                  <td>Win 95+ / OSX.3+</td>
                  <td class="center">-</td>
                </tr>
                <tr class="gradeA">
                  <td>Presto</td>
                  <td>Opera 9.2</td>
                  <td>Win 88+ / OSX.3+</td>
                  <td class="center">-</td>
                </tr>
                <tr class="gradeA">
                  <td>Presto</td>
                  <td>Opera 9.5</td>
                  <td>Win 88+ / OSX.3+</td>
                  <td class="center">-</td>
                </tr>
                <tr class="gradeA">
                  <td>Presto</td>
                  <td>Opera for Wii</td>
                  <td>Wii</td>
                  <td class="center">-</td>
                </tr>
                <tr class="gradeA">
                  <td>Presto</td>
                  <td>Nokia N800</td>
                  <td>N800</td>
                  <td class="center">-</td>
                </tr>
                <tr class="gradeA">
                  <td>Presto</td>
                  <td>Nintendo DS browser</td>
                  <td>Nintendo DS</td>
                  <td class="center">8.5</td>
                </tr>
                <tr class="gradeC">
                  <td>KHTML</td>
                  <td>Konqureror 3.1</td>
                  <td>KDE 3.1</td>
                  <td class="center">3.1</td>
                </tr>
                <tr class="gradeA">
                  <td>KHTML</td>
                  <td>Konqureror 3.3</td>
                  <td>KDE 3.3</td>
                  <td class="center">3.3</td>
                </tr>
                <tr class="gradeA">
                  <td>KHTML</td>
                  <td>Konqureror 3.5</td>
                  <td>KDE 3.5</td>
                  <td class="center">3.5</td>
                </tr>
                <tr class="gradeX">
                  <td>Tasman</td>
                  <td>Internet Explorer 4.5</td>
                  <td>Mac OS 8-9</td>
                  <td class="center">-</td>
                </tr>
                <tr class="gradeC">
                  <td>Tasman</td>
                  <td>Internet Explorer 5.1</td>
                  <td>Mac OS 7.6-9</td>
                  <td class="center">1</td>
                </tr>
                <tr class="gradeC">
                  <td>Tasman</td>
                  <td>Internet Explorer 5.2</td>
                  <td>Mac OS 8-X</td>
                  <td class="center">1</td>
                </tr>
                <tr class="gradeA">
                  <td>Misc</td>
                  <td>NetFront 3.1</td>
                  <td>Embedded devices</td>
                  <td class="center">-</td>
                </tr>
                <tr class="gradeA">
                  <td>Misc</td>
                  <td>NetFront 3.4</td>
                  <td>Embedded devices</td>
                  <td class="center">-</td>
                </tr>
                <tr class="gradeX">
                  <td>Misc</td>
                  <td>Dillo 0.8</td>
                  <td>Embedded devices</td>
                  <td class="center">-</td>
                </tr>
                <tr class="gradeX">
                  <td>Misc</td>
                  <td>Links</td>
                  <td>Text only</td>
                  <td class="center">-</td>
                </tr>
                <tr class="gradeX">
                  <td>Misc</td>
                  <td>Lynx</td>
                  <td>Text only</td>
                  <td class="center">-</td>
                </tr>
                <tr class="gradeC">
                  <td>Misc</td>
                  <td>IE Mobile</td>
                  <td>Windows Mobile 6</td>
                  <td class="center">-</td>
                </tr>
                <tr class="gradeC">
                  <td>Misc</td>
                  <td>PSP browser</td>
                  <td>PSP</td>
                  <td class="center">-</td>
                </tr>
                <tr class="gradeU">
                  <td>Other browsers</td>
                  <td>All others</td>
                  <td>-</td>
                  <td class="center">-</td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>






      <!--main-container-part-->
<div id="content">
<!--breadcrumbs-->
  <div id="content-header">
    <div id="breadcrumb"> <a href="index.html" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a></div>
  </div>
<!--End-breadcrumbs-->

<!--Action boxes-->
  <div class="container-fluid">
    <div class="quick-actions_homepage">
      <ul class="quick-actions">
        <li class="bg_lb"> <a href="index.html"> <i class="icon-dashboard"></i> <span class="label label-important">20</span> My Dashboard </a> </li>
        <li class="bg_lg span3"> <a href="charts.html"> <i class="icon-signal"></i> Charts</a> </li>
        <li class="bg_ly"> <a href="widgets.html"> <i class="icon-inbox"></i><span class="label label-success">101</span> Widgets </a> </li>
        <li class="bg_lo"> <a href="tables.html"> <i class="icon-th"></i> Tables</a> </li>
        <li class="bg_ls"> <a href="grid.html"> <i class="icon-fullscreen"></i> Full width</a> </li>
        <li class="bg_lo span3"> <a href="form-common.html"> <i class="icon-th-list"></i> Forms</a> </li>
        <li class="bg_ls"> <a href="buttons.html"> <i class="icon-tint"></i> Buttons</a> </li>
        <li class="bg_lb"> <a href="interface.html"> <i class="icon-pencil"></i>Elements</a> </li>
        <li class="bg_lg"> <a href="calendar.html"> <i class="icon-calendar"></i> Calendar</a> </li>
        <li class="bg_lr"> <a href="error404.html"> <i class="icon-info-sign"></i> Error</a> </li>

      </ul>
    </div>
<!--End-Action boxes-->    

<!--Chart-box-->    
    <div class="row-fluid">
      <div class="widget-box">
        <div class="widget-title bg_lg"><span class="icon"><i class="icon-signal"></i></span>
          <h5>Site Analytics</h5>
        </div>
        <div class="widget-content" >
          <div class="row-fluid">
            <div class="span9">
              <div class="chart"></div>
            </div>
            <div class="span3">
              <ul class="site-stats">
                <li class="bg_lh"><i class="icon-user"></i> <strong>2540</strong> <small>Total Users</small></li>
                <li class="bg_lh"><i class="icon-plus"></i> <strong>120</strong> <small>New Users </small></li>
                <li class="bg_lh"><i class="icon-shopping-cart"></i> <strong>656</strong> <small>Total Shop</small></li>
                <li class="bg_lh"><i class="icon-tag"></i> <strong>9540</strong> <small>Total Orders</small></li>
                <li class="bg_lh"><i class="icon-repeat"></i> <strong>10</strong> <small>Pending Orders</small></li>
                <li class="bg_lh"><i class="icon-globe"></i> <strong>8540</strong> <small>Online Orders</small></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
<!--End-Chart-box--> 
    <hr/>
    <div class="row-fluid">
      <div class="span6">
        <div class="widget-box">
          <div class="widget-title bg_ly" data-toggle="collapse" href="#collapseG2"><span class="icon"><i class="icon-chevron-down"></i></span>
            <h5>Latest Posts</h5>
          </div>
          <div class="widget-content nopadding collapse in" id="collapseG2">
            <ul class="recent-posts">
              <li>
                <div class="user-thumb"> <img width="40" height="40" alt="User" src="../public/Admin/img/demo/av1.jpg"> </div>
                <div class="article-post"> <span class="user-info"> By: john Deo / Date: 2 Aug 2012 / Time:09:27 AM </span>
                  <p><a href="#">This is a much longer one that will go on for a few lines.It has multiple paragraphs and is full of waffle to pad out the comment.</a> </p>
                </div>
              </li>
              <li>
                <div class="user-thumb"> <img width="40" height="40" alt="User" src="../public/Admin/img/demo/av2.jpg"> </div>
                <div class="article-post"> <span class="user-info"> By: john Deo / Date: 2 Aug 2012 / Time:09:27 AM </span>
                  <p><a href="#">This is a much longer one that will go on for a few lines.It has multiple paragraphs and is full of waffle to pad out the comment.</a> </p>
                </div>
              </li>
              <li>
                <div class="user-thumb"> <img width="40" height="40" alt="User" src="../public/Admin/img/demo/av4.jpg"> </div>
                <div class="article-post"> <span class="user-info"> By: john Deo / Date: 2 Aug 2012 / Time:09:27 AM </span>
                  <p><a href="#">This is a much longer one that will go on for a few lines.Itaffle to pad out the comment.</a> </p>
                </div>
              <li>
                <button class="btn btn-warning btn-mini">View All</button>
              </li>
            </ul>
          </div>
        </div>
        <div class="widget-box">
          <div class="widget-title"> <span class="icon"><i class="icon-ok"></i></span>
            <h5>To Do list</h5>
          </div>
          <div class="widget-content">
            <div class="todo">
              <ul>
                <li class="clearfix">
                  <div class="txt"> Luanch This theme on Themeforest <span class="by label">Alex</span></div>
                  <div class="pull-right"> <a class="tip" href="#" title="Edit Task"><i class="icon-pencil"></i></a> <a class="tip" href="#" title="Delete"><i class="icon-remove"></i></a> </div>
                </li>
                <li class="clearfix">
                  <div class="txt"> Manage Pending Orders <span class="date badge badge-warning">Today</span> </div>
                  <div class="pull-right"> <a class="tip" href="#" title="Edit Task"><i class="icon-pencil"></i></a> <a class="tip" href="#" title="Delete"><i class="icon-remove"></i></a> </div>
                </li>
                <li class="clearfix">
                  <div class="txt"> MAke your desk clean <span class="by label">Admin</span></div>
                  <div class="pull-right"> <a class="tip" href="#" title="Edit Task"><i class="icon-pencil"></i></a> <a class="tip" href="#" title="Delete"><i class="icon-remove"></i></a> </div>
                </li>
                <li class="clearfix">
                  <div class="txt"> Today we celebrate the theme <span class="date badge badge-info">08.03.2013</span> </div>
                  <div class="pull-right"> <a class="tip" href="#" title="Edit Task"><i class="icon-pencil"></i></a> <a class="tip" href="#" title="Delete"><i class="icon-remove"></i></a> </div>
                </li>
                <li class="clearfix">
                  <div class="txt"> Manage all the orders <span class="date badge badge-important">12.03.2013</span> </div>
                  <div class="pull-right"> <a class="tip" href="#" title="Edit Task"><i class="icon-pencil"></i></a> <a class="tip" href="#" title="Delete"><i class="icon-remove"></i></a> </div>
                </li>
              </ul>
            </div>
          </div>
        </div>
        <div class="widget-box">
          <div class="widget-title"> <span class="icon"><i class="icon-ok"></i></span>
            <h5>Progress Box</h5>
          </div>
          <div class="widget-content">
            <ul class="unstyled">
              <li> <span class="icon24 icomoon-icon-arrow-up-2 green"></span> 81% Clicks <span class="pull-right strong">567</span>
                <div class="progress progress-striped ">
                  <div style="width: 81%;" class="bar"></div>
                </div>
              </li>
              <li> <span class="icon24 icomoon-icon-arrow-up-2 green"></span> 72% Uniquie Clicks <span class="pull-right strong">507</span>
                <div class="progress progress-success progress-striped ">
                  <div style="width: 72%;" class="bar"></div>
                </div>
              </li>
              <li> <span class="icon24 icomoon-icon-arrow-down-2 red"></span> 53% Impressions <span class="pull-right strong">457</span>
                <div class="progress progress-warning progress-striped ">
                  <div style="width: 53%;" class="bar"></div>
                </div>
              </li>
              <li> <span class="icon24 icomoon-icon-arrow-up-2 green"></span> 3% Online Users <span class="pull-right strong">8</span>
                <div class="progress progress-danger progress-striped ">
                  <div style="width: 3%;" class="bar"></div>
                </div>
              </li>
            </ul>
          </div>
        </div>
        <div class="widget-box">
          <div class="widget-title bg_lo"  data-toggle="collapse" href="#collapseG3" > <span class="icon"> <i class="icon-chevron-down"></i> </span>
            <h5>News updates</h5>
          </div>
          <div class="widget-content nopadding updates collapse in" id="collapseG3">
            <div class="new-update clearfix"><i class="icon-ok-sign"></i>
              <div class="update-done"><a title="" href="#"><strong>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</strong></a> <span>dolor sit amet, consectetur adipiscing eli</span> </div>
              <div class="update-date"><span class="update-day">20</span>jan</div>
            </div>
            <div class="new-update clearfix"> <i class="icon-gift"></i> <span class="update-notice"> <a title="" href="#"><strong>Congratulation Maruti, Happy Birthday </strong></a> <span>many many happy returns of the day</span> </span> <span class="update-date"><span class="update-day">11</span>jan</span> </div>
            <div class="new-update clearfix"> <i class="icon-move"></i> <span class="update-alert"> <a title="" href="#"><strong>Maruti is a Responsive Admin theme</strong></a> <span>But already everything was solved. It will ...</span> </span> <span class="update-date"><span class="update-day">07</span>Jan</span> </div>
            <div class="new-update clearfix"> <i class="icon-leaf"></i> <span class="update-done"> <a title="" href="#"><strong>Envato approved Maruti Admin template</strong></a> <span>i am very happy to approved by TF</span> </span> <span class="update-date"><span class="update-day">05</span>jan</span> </div>
            <div class="new-update clearfix"> <i class="icon-question-sign"></i> <span class="update-notice"> <a title="" href="#"><strong>I am alwayse here if you have any question</strong></a> <span>we glad that you choose our template</span> </span> <span class="update-date"><span class="update-day">01</span>jan</span> </div>
          </div>
        </div>
        
      </div>
      <div class="span6">
        <div class="widget-box widget-chat">
          <div class="widget-title bg_lb"> <span class="icon"> <i class="icon-comment"></i> </span>
            <h5>Chat Option</h5>
          </div>
          <div class="widget-content nopadding collapse in" id="collapseG4">
            <div class="chat-users panel-right2">
              <div class="panel-title">
                <h5>Online Users</h5>
              </div>
              <div class="panel-content nopadding">
                <ul class="contact-list">
                  <li id="user-Alex" class="online"><a href=""><img alt="" src="../public/Admin/img/demo/av1.jpg" /> <span>Alex</span></a></li>
                  <li id="user-Linda"><a href=""><img alt="" src="../public/Admin/img/demo/av2.jpg" /> <span>Linda</span></a></li>
                  <li id="user-John" class="online new"><a href=""><img alt="" src="../public/Admin/img/demo/av3.jpg" /> <span>John</span></a><span class="msg-count badge badge-info">3</span></li>
                  <li id="user-Mark" class="online"><a href=""><img alt="" src="../public/Admin/img/demo/av4.jpg" /> <span>Mark</span></a></li>
                  <li id="user-Maxi" class="online"><a href=""><img alt="" src="../public/Admin/img/demo/av5.jpg" /> <span>Maxi</span></a></li>
                </ul>
              </div>
            </div>
            <div class="chat-content panel-left2">
              <div class="chat-messages" id="chat-messages">
                <div id="chat-messages-inner"></div>
              </div>
              <div class="chat-message well">
                <button class="btn btn-success">Send</button>
                <span class="input-box">
                <input type="text" name="msg-box" id="msg-box" />
                </span> </div>
            </div>
          </div>
        </div>
        <div class="widget-box">
          <div class="widget-title"><span class="icon"><i class="icon-user"></i></span>
            <h5>Our Partner (Box with Fix height)</h5>
          </div>
          <div class="widget-content nopadding fix_hgt">
            <ul class="recent-posts">
              <li>
                <div class="user-thumb"> <img width="40" height="40" alt="User" src="../public/Admin/img/demo/av1.jpg"> </div>
                <div class="article-post"> <span class="user-info">John Deo</span>
                  <p>Web Desginer &amp; creative Front end developer</p>
                </div>
              </li>
              <li>
                <div class="user-thumb"> <img width="40" height="40" alt="User" src="../public/Admin/img/demo/av2.jpg"> </div>
                <div class="article-post"> <span class="user-info">John Deo</span>
                  <p>Web Desginer &amp; creative Front end developer</p>
                </div>
              </li>
              <li>
                <div class="user-thumb"> <img width="40" height="40" alt="User" src="../public/Admin/img/demo/av4.jpg"> </div>
                <div class="article-post"> <span class="user-info">John Deo</span>
                  <p>Web Desginer &amp; creative Front end developer</p>
                </div>
            </ul>
          </div>
        </div>
        <div class="accordion" id="collapse-group">
          <div class="accordion-group widget-box">
            <div class="accordion-heading">
              <div class="widget-title"> <a data-parent="#collapse-group" href="#collapseGOne" data-toggle="collapse"> <span class="icon"><i class="icon-magnet"></i></span>
                <h5>Accordion Example 1</h5>
                </a> </div>
            </div>
            <div class="collapse in accordion-body" id="collapseGOne">
              <div class="widget-content"> It has multiple paragraphs and is full of waffle to pad out the comment. Usually, you just wish these sorts of comments would come to an end. </div>
            </div>
          </div>
          <div class="accordion-group widget-box">
            <div class="accordion-heading">
              <div class="widget-title"> <a data-parent="#collapse-group" href="#collapseGTwo" data-toggle="collapse"> <span class="icon"><i class="icon-magnet"></i></span>
                <h5>Accordion Example 2</h5>
                </a> </div>
            </div>
            <div class="collapse accordion-body" id="collapseGTwo">
              <div class="widget-content">And is full of waffle to It has multiple paragraphs and is full of waffle to pad out the comment. Usually, you just wish these sorts of comments would come to an end.</div>
            </div>
          </div>
          <div class="accordion-group widget-box">
            <div class="accordion-heading">
              <div class="widget-title"> <a data-parent="#collapse-group" href="#collapseGThree" data-toggle="collapse"> <span class="icon"><i class="icon-magnet"></i></span>
                <h5>Accordion Example 3</h5>
                </a> </div>
            </div>
            <div class="collapse accordion-body" id="collapseGThree">
              <div class="widget-content"> Waffle to It has multiple paragraphs and is full of waffle to pad out the comment. Usually, you just </div>
            </div>
          </div>
        </div>
        <div class="widget-box collapsible">
          <div class="widget-title"> <a data-toggle="collapse" href="#collapseOne"> <span class="icon"><i class="icon-arrow-right"></i></span>
            <h5>Toggle, Open by default, </h5>
            </a> </div>
          <div id="collapseOne" class="collapse in">
            <div class="widget-content"> This box is opened by default, paragraphs and is full of waffle to pad out the comment. Usually, you just wish these sorts of comments would come to an end. </div>
          </div>
          <div class="widget-title"> <a data-toggle="collapse" href="#collapseTwo"> <span class="icon"><i class="icon-remove"></i></span>
            <h5>Toggle, closed by default</h5>
            </a> </div>
          <div id="collapseTwo" class="collapse">
            <div class="widget-content"> This box is now open </div>
          </div>
          <div class="widget-title"> <a data-toggle="collapse" href="#collapseThree"> <span class="icon"><i class="icon-remove"></i></span>
            <h5>Toggle, closed by default</h5>
            </a> </div>
          <div id="collapseThree" class="collapse">
            <div class="widget-content"> This box is now open </div>
          </div>
        </div>
        <div class="widget-box">
          <div class="widget-title">
            <ul class="nav nav-tabs">
              <li class="active"><a data-toggle="tab" href="#tab1">Tab1</a></li>
              <li><a data-toggle="tab" href="#tab2">Tab2</a></li>
              <li><a data-toggle="tab" href="#tab3">Tab3</a></li>
            </ul>
          </div>
          <div class="widget-content tab-content">
            <div id="tab1" class="tab-pane active">
              <p>And is full of waffle to It has multiple paragraphs and is full of waffle to pad out the comment. Usually, you just wish these sorts of comments would come to an end.multiple paragraphs and is full of waffle to pad out the comment.</p>
              <img src="../public/Admin/img/demo/demo-image1.jpg" alt="demo-image"/></div>
            <div id="tab2" class="tab-pane"> <img src="../public/Admin/img/demo/demo-image2.jpg" alt="demo-image"/>
              <p>And is full of waffle to It has multiple paragraphs and is full of waffle to pad out the comment. Usually, you just wish these sorts of comments would come to an end.multiple paragraphs and is full of waffle to pad out the comment.</p>
            </div>
            <div id="tab3" class="tab-pane">
              <p>And is full of waffle to It has multiple paragraphs and is full of waffle to pad out the comment. Usually, you just wish these sorts of comments would come to an end.multiple paragraphs and is full of waffle to pad out the comment. </p>
              <img src="../public/Admin/img/demo/demo-image3.jpg" alt="demo-image"/></div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<!--end-main-container-part-->
<?php require_once 'views/footer.php'; ?>