<!DOCTYPE html>
<html lang="en" >
<?php require 'prevention.php';

?>
<head>
  <meta charset="UTF-8">
  <title>HELPiCT Admin CREATE</title>

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.5.1/css/buttons.dataTables.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.2.1/css/responsive.dataTables.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel='stylesheet prefetch' href='https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800'>
    <link rel="stylesheet" href="css/homepage.css">



</head>

<body>

<div class="wrapper">
<!-- Dashboard (Parent Block)-->
<div class="dashboard">
  <!-- Dashboard Sidebar (Block)-->
  <div class="dashboard-sidebar">
    <!-- Brand (Element)-->
    <div class="dashboard-sidebar__brand"><img src="logo.png"/></div>
    <!-- Dashboard Nav (Block)-->
    <div class="dashboard-nav">
      <ul>
        <!-- Item:Selected (Element:Modifier)        -->
        <li class="dashboard-nav__item dashboard-nav__item--selected"><a href="home"><img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/169963/planner_dashboard_my_trip.svg"/>Home</a></li>
        <!-- Item (Element)-->
        <li class="dashboard-nav__item "><a href="my_trip"><img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/169963/planner_dashboard_home.svg"/>Class Replacement</a></li>

        <!-- Item (Element)-->
        <li class="dashboard-nav__item"><a href="report"><img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/169963/planner_dashboard_discover_places.svg"/>Report</a></li>
        <!-- Item (Element)

        <li class="dashboard-nav__item"><a href="notifications"><img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/169963/planner_dashboard_notifications.svg"/>Notifications</a></li> -->
        <!-- Setting Item (Element)
        <li class="dashboard-nav__item"><a href="settings"><img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/169963/planner_dashboard_settings.svg"/>Settings</a></li> -->
      </ul>
    </div>
  </div>
  <!-- Dashboard Content (Block)-->
  <div class="dashboard-content">
    <!-- Dashboard Header (Block)-->

    <!-- Dashboard Content Panel (Element)-->
    <div class="dashboard-content__panel dashboard-content__panel--active" data-panel-id="home">
      <div id="userTitle">

      </div>
      <!--
      <span style="text-align:left;">
        <h2 >John Doe</h2>
        <p >john.doe@somedomain.com</p>
      </span>
      -->
      <div class="cardsLayout">
      <ul class="flex cards">
        <li>
          <h2>Welcome to Create!</h2>
          <p class="cardsUser">
            User Name: <span id="uName"></span>
          </p>
        </li>
      </ul>
      <ul class="flex cards">
        <li>
          <h2>No. of Class Replacement Request</h2>
          <p>
            10
          </p>
        </li>
      </ul>
    </div>
      <div class="buttonLayout">
      <button class="btnSubmit" id="btnLogout"> logout </button>
    </div>
    </div>

    <!-- Dashboard Content Panel (Home)-->
    <div class="dashboard-content__panel " data-panel-id="my_trip">
      <div class="dashboard-header">
        <!-- Search (Element)-->
        <div class="dashboard-header__search">
          <input type="search" placeholder="Search..." id="searchReplacement"/>
        </div>
        <!-- New (Element)-->
        <div class="dashboard-header__new"><i class="fa fa-search"></i></div>

      </div>
      <!-- Dashboard List (Block) -->
      <div class="dashboard-list">
        <!-- Dasboard List Item (Element)-->
        <!-- Rows and Ccolumns of the Page Contents-->
        <div class="row inner-row-content" id="reContainer"></div>

        </div>

      </div>


    <!-- Dashboard Content Panel (Element)-->
    <div class="dashboard-content__panel" data-panel-id="report">
      <div class="dashboard-list report-content">
        <table id="report-table" class="display responsive nowrap" cellspacing="0" width="100%" height="60vh">
        <thead>
            <tr>
                <th>Lecturer</th>
                <th>Subject Code</th>
                <th>Subject Name</th>
                <th>Cancellation Date</th>
                <th>Rescheduling Date</th>
                <th>Status</th>
            </tr>
        </thead>
        <tfoot>
        </tfoot>
        <tbody>
            <tr>
                <td>Winson</td>
                <td>BMC 308</td>
                <td>Mobile Development</td>
                <td>2018/01/15</td>
                <td>2018/02/25</td>
                <td>Completed</td>
            </tr>
            <tr>
                <td>Anita</td>
                <td>BIT 200</td>
                <td>IT & Entrepreneurship</td>
                <td>2018/01/18</td>
                <td>2018/02/18</td>
                <td>Completed</td>
            </tr>
            <tr>
                <td>Fong</td>
                <td>BIT 210</td>
                <td>Web Programming</td>
                <td>2018/02/01</td>
                <td>2018/02/15</td>
                <td>Pending</td>
            </tr>
            <tr>
                <td>Seetha</td>
                <td>BIT 216</td>
                <td>Software Engineering Principles</td>
                <td>2018/02/12</td>
                <td>2018/04/25</td>
                <td>Pending</td>
            </tr>
            <tr>
                <td>Kok</td>
                <td>BIT 208</td>
                <td>Data Structures</td>
                <td>2018/02/06</td>
                <td>2018/02/20</td>
                <td>Pending</td>
            </tr>
            <tr>
                <td>Dewi</td>
                <td>BIT 103</td>
                <td>Introduction to Databases</td>
                <td>2018/01/25</td>
                <td>2018/03/25</td>
                <td>Pending</td>
            </tr>
            <tr>
                <td>Dewi</td>
                <td>BGM 101</td>
                <td>Multimedia Authoring and Development</td>
                <td>2018/01/20</td>
                <td>2018/03/01</td>
                <td>Pending</td>
            </tr>
            <tr>
                <td>Dewi</td>
                <td>BIT 103</td>
                <td>Introduction to Databases</td>
                <td>2018/02/25</td>
                <td>2018/03/25</td>
                <td>Pending</td>
            </tr>
            <tr>
                <td>Fong</td>
                <td>BIT 306</td>
                <td>Web Technologies</td>
                <td>2018/01/28</td>
                <td>2018/02/20</td>
                <td>Pending</td>
            </tr>
            <tr>
                <td>Anita</td>
                <td>BIT 200</td>
                <td>IT & Entrepreneurship</td>
                <td>2018/03/01</td>
                <td>2018/04/01</td>
                <td>Pending</td>
            </tr>
            <tr>
                <td>Anita</td>
                <td>BIT 200</td>
                <td>IT & Entrepreneurship</td>
                <td>2018/02/12</td>
                <td>2018/04/25</td>
                <td>Pending</td>
            </tr>
            <tr>
                <td>Winson</td>
                <td>BMC 308</td>
                <td>Mobile Development</td>
                <td>2018/01/10</td>
                <td>2018/02/15</td>
                <td>Pending</td>
            </tr>
            <tr>
                <td>Fong</td>
                <td>BIT 210</td>
                <td>Web Programming</td>
                <td>2018/02/05</td>
                <td>2018/03/12</td>
                <td>Pending</td>
            </tr>
            <tr>
                <td>Anita</td>
                <td>BIT 310</td>
                <td>Business Development Plan</td>
                <td>2018/02/02</td>
                <td>2018/03/10</td>
                <td>Pending</td>
            </tr>
            <tr>
                <td>Anita</td>
                <td>BIT 200</td>
                <td>IT & Entrepreneurship</td>
                <td>2018/02/12</td>
                <td>2018/04/25</td>
                <td>Pending</td>
            </tr>
            <tr>
                <td>Winson</td>
                <td>BMC 308</td>
                <td>Mobile Development</td>
                <td>2018/01/10</td>
                <td>2018/02/15</td>
                <td>Pending</td>
            </tr>
            <tr>
                <td>Fong</td>
                <td>BIT 210</td>
                <td>Web Programming</td>
                <td>2018/02/05</td>
                <td>2018/03/12</td>
                <td>Pending</td>
            </tr>
            <tr>
                <td>Anita</td>
                <td>BIT 310</td>
                <td>Business Development Plan</td>
                <td>2018/02/02</td>
                <td>2018/03/10</td>
                <td>Pending</td>
            </tr>
        </tbody>
    </table>
      </div>
    </div>
    <!-- Dashboard Content Panel (Home)-->
    <div class="dashboard-content__panel " data-panel-id="subject">
      <header id="main-header" class="bg-success text-white">
        <div class="container">
          <div class="row">
            <div class="col-md-6">
                <h1 id="header-title">Item Lister</h1>
            </div>
            <div class="col-md-6 align-self-center">
                <input type="text" class="form-control" id="filter" placeholder="Search Items...">
            </div>
          </div>
        </div>
      </header>
      <div class="container">
       <div id="main" class="card card-body">
        <h2 class="title">Add Items</h2>
        <form id="addForm" class="form-inline mb-3">
          <input type="text" class="form-control mr-2" id="item">
          <input type="submit" class="btn btn-dark" value="Submit">
        </form>
        <h2 class="title">Items</h2>
        <ul id="items" class="list-group">
          <li class="list-group-item">Item 1 <button class="btn btn-danger btn-sm float-right delete">X</button></li>
          <li class="list-group-item">Item 2 <button class="btn btn-danger btn-sm float-right delete">X</button></li>
          <li class="list-group-item">Item 3 <button class="btn btn-danger btn-sm float-right delete">X</button></li>
          <li class="list-group-item">Item 4 <button class="btn btn-danger btn-sm float-right delete">X</button></li>
        </ul>
       </div>
      </div>
    </div>
    <!-- Dashboard Content Panel (Element)-->
    <div class="dashboard-content__panel" data-panel-id="add_room">
      <div class="dashboard-list report-content">
        <table id="add_room_report" class="display responsive nowrap" cellspacing="0" width="100%" height="60vh">
        <thead>
            <tr>
                <th>Lecturer</th>
                <th>Subject Code</th>
                <th>Subject Name</th>
                <th>Cancellation Date</th>
                <th>Rescheduling Date</th>
                <th>Status</th>
            </tr>
        </thead>
        <tfoot>
        </tfoot>
        <tbody>
            <tr>
                <td>Winson</td>
                <td>BMC 308</td>
                <td>Mobile Development</td>
                <td>2018/01/15</td>
                <td>2018/02/25</td>
                <td>Completed</td>
            </tr>
            <tr>
                <td>Anita</td>
                <td>BIT 200</td>
                <td>IT & Entrepreneurship</td>
                <td>2018/01/18</td>
                <td>2018/02/18</td>
                <td>Completed</td>
            </tr>
            <tr>
                <td>Fong</td>
                <td>BIT 210</td>
                <td>Web Programming</td>
                <td>2018/02/01</td>
                <td>2018/02/15</td>
                <td>Pending</td>
            </tr>
            <tr>
                <td>Seetha</td>
                <td>BIT 216</td>
                <td>Software Engineering Principles</td>
                <td>2018/02/12</td>
                <td>2018/04/25</td>
                <td>Pending</td>
            </tr>
            <tr>
                <td>Kok</td>
                <td>BIT 208</td>
                <td>Data Structures</td>
                <td>2018/02/06</td>
                <td>2018/02/20</td>
                <td>Pending</td>
            </tr>
            <tr>
                <td>Dewi</td>
                <td>BIT 103</td>
                <td>Introduction to Databases</td>
                <td>2018/01/25</td>
                <td>2018/03/25</td>
                <td>Pending</td>
            </tr>
            <tr>
                <td>Dewi</td>
                <td>BGM 101</td>
                <td>Multimedia Authoring and Development</td>
                <td>2018/01/20</td>
                <td>2018/03/01</td>
                <td>Pending</td>
            </tr>
            <tr>
                <td>Dewi</td>
                <td>BIT 103</td>
                <td>Introduction to Databases</td>
                <td>2018/02/25</td>
                <td>2018/03/25</td>
                <td>Pending</td>
            </tr>
            <tr>
                <td>Fong</td>
                <td>BIT 306</td>
                <td>Web Technologies</td>
                <td>2018/01/28</td>
                <td>2018/02/20</td>
                <td>Pending</td>
            </tr>
            <tr>
                <td>Anita</td>
                <td>BIT 200</td>
                <td>IT & Entrepreneurship</td>
                <td>2018/03/01</td>
                <td>2018/04/01</td>
                <td>Pending</td>
            </tr>
            <tr>
                <td>Anita</td>
                <td>BIT 200</td>
                <td>IT & Entrepreneurship</td>
                <td>2018/02/12</td>
                <td>2018/04/25</td>
                <td>Pending</td>
            </tr>
            <tr>
                <td>Winson</td>
                <td>BMC 308</td>
                <td>Mobile Development</td>
                <td>2018/01/10</td>
                <td>2018/02/15</td>
                <td>Pending</td>
            </tr>
            <tr>
                <td>Fong</td>
                <td>BIT 210</td>
                <td>Web Programming</td>
                <td>2018/02/05</td>
                <td>2018/03/12</td>
                <td>Pending</td>
            </tr>
            <tr>
                <td>Anita</td>
                <td>BIT 310</td>
                <td>Business Development Plan</td>
                <td>2018/02/02</td>
                <td>2018/03/10</td>
                <td>Pending</td>
            </tr>
            <tr>
                <td>Anita</td>
                <td>BIT 200</td>
                <td>IT & Entrepreneurship</td>
                <td>2018/02/12</td>
                <td>2018/04/25</td>
                <td>Pending</td>
            </tr>
            <tr>
                <td>Winson</td>
                <td>BMC 308</td>
                <td>Mobile Development</td>
                <td>2018/01/10</td>
                <td>2018/02/15</td>
                <td>Pending</td>
            </tr>
            <tr>
                <td>Fong</td>
                <td>BIT 210</td>
                <td>Web Programming</td>
                <td>2018/02/05</td>
                <td>2018/03/12</td>
                <td>Pending</td>
            </tr>
            <tr>
                <td>Anita</td>
                <td>BIT 310</td>
                <td>Business Development Plan</td>
                <td>2018/02/02</td>
                <td>2018/03/10</td>
                <td>Pending</td>
            </tr>
        </tbody>
      </table>
    </div>
  </div>
  </div>
</div>
</div>

  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

  <script  src="js/homepage.js"></script>
  <script type="text/javascript">
    $(document).ready(function() {
      $('#report-table').DataTable( {

        dom: 'Bfrtip',

        buttons: [
            'copy', 'csv', 'excel', 'pdf', 'print'
          ]

        } );
      } );
  </script>
  <script  src='https://code.jquery.com/jquery-1.12.4.js'></script>
  <script  src='https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js'></script>
  <script  src='https://cdn.datatables.net/buttons/1.5.1/js/dataTables.buttons.min.js'></script>
  <script  src='https://cdn.datatables.net/buttons/1.5.1/js/buttons.flash.min.js'></script>
  <script  src='https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js'></script>
  <script  src='https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.32/pdfmake.min.js'></script>
  <script  src='https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.32/vfs_fonts.js'></script>
  <script  src='https://cdn.datatables.net/buttons/1.5.1/js/buttons.html5.min.js'></script>
  <script  src='https://cdn.datatables.net/buttons/1.5.1/js/buttons.print.min.js'></script>


</body>

</html>
