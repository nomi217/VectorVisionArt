<?php
include 'includes/header.php';
include 'includes/menubar.php';
//    $total_tours = mysqli_query($conn, "SELECT * from orders");
//      $row  = mysqli_fetch_array($total_tours);
//     $order_id=mysqli_num_rows($total_tours);

//    $new_order = mysqli_query($conn, "SELECT * from tours where tour_status = '0'");
//    $row  = mysqli_fetch_array($new_order);
//     $order=mysqli_num_rows($new_order);

//     $new_owner = mysqli_query($conn, "SELECT * from vehicle_owners where status = '1'");
//    $row  = mysqli_fetch_array($new_owner);
//    $owner=mysqli_num_rows($new_owner);

//     $total_users = mysqli_query($conn, "SELECT * from users");
//     $users=mysqli_num_rows($total_users);

//     $total_agent = mysqli_query($conn, "SELECT * from tour_agents");
//     $tour_agent=mysqli_num_rows($total_agent);

//     // $query_tour  = mysqli_query($conn,"SELECT SUM(booking_ticket) AS TotalTicketSale FROM `bookings` JOIN ");
//     // $row  = mysqli_fetch_array($query_tour); 
//     // $TotalTicketSale = $row['TotalTicketSale'];
//     // $total_payment = $TotalTicketSale*1200;

//     $query_tour = mysqli_query($conn, "SELECT * from payment JOIN bookings WHERE payment.booking_id=bookings.booking_id");

//     $row  = mysqli_fetch_array($query_tour); 
//     $booking_ticket = $row['booking_ticket'];
//     $total_payments = $row['total_payment'];
          
//           $total_payment = $booking_ticket*$total_payments;    
        
?>
 
            <div class="content-page">
                <div class="content">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-12">
                                <h4 class="pull-left page-title">Welcome !</h4>
                                <ol class="breadcrumb pull-right">
                                    <li><a href="#">Vector Vision</a></li>
                                    <li class="active">Dashboard</li>
                                </ol>
                            </div>
                        </div>
                                            <!-- start: page -->
                    
                    <div class="row">
                        <div class="col-xl-12 col-lg-12">
                            <section class="panel panel-transparent">
                                <header class="panel-heading">
                                    <div class="panel-actions">
                                        <a href="#" class="panel-action panel-action-toggle" data-panel-toggle></a>
                                        <a href="#" class="panel-action panel-action-dismiss" data-panel-dismiss></a>
                                    </div>
                    
                                    <h2 class="panel-title">Activity</h2>
                                </header>
                                <div class="panel-body">
                                    <section class="panel panel-group">
                                        <header class="panel-heading bg-primary">
                    
                                        </header>
                                        <div id="accordion">
                                            <div class="panel panel-accordion panel-accordion-first">

                                            <div class="panel panel-accordion">
                                                <div class="panel-heading">
                                                    <h4 class="panel-title">
                                                        <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapse1Two">
                                                             <i class="fa fa-comment"></i> Messages
                                                        </a>
                                                    </h4>
                                                </div>
                                                <div id="collapse1Two" class="accordion-body collapse">
                                                    <div class="panel-body">
                                                        <ul class="simple-user-list mb-xlg">
                                                            <li>
                                                                <figure class="image rounded">
                                                                    <img src="assets/images/!sample-user.jpg" alt="Joseph Doe Junior" class="img-circle">
                                                                </figure>
                                                                <span class="title">Joseph Doe Junior</span>
                                                                <span class="message">Lorem ipsum dolor sit.</span>
                                                            </li>
                                                            <li>
                                                                <figure class="image rounded">
                                                                    <img src="assets/images/!sample-user.jpg" alt="Joseph Junior" class="img-circle">
                                                                </figure>
                                                                <span class="title">Joseph Junior</span>
                                                                <span class="message">Lorem ipsum dolor sit.</span>
                                                            </li>
                                                            <li>
                                                                <figure class="image rounded">
                                                                    <img src="assets/images/!sample-user.jpg" alt="Joe Junior" class="img-circle">
                                                                </figure>
                                                                <span class="title">Joe Junior</span>
                                                                <span class="message">Lorem ipsum dolor sit.</span>
                                                            </li>
                                                            <li>
                                                                <figure class="image rounded">
                                                                    <img src="assets/images/!sample-user.jpg" alt="Joseph Doe Junior" class="img-circle">
                                                                </figure>
                                                                <span class="title">Joseph Doe Junior</span>
                                                                <span class="message">Lorem ipsum dolor sit.</span>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </section>
                    
                                </div>
                            </section>
                        </div>
                       
                        <div class="col-xl-12 col-lg-12">
                            <section class="panel">
                                <header class="panel-heading panel-heading-transparent">
                                    <div class="panel-actions">
                                        <a href="#" class="panel-action panel-action-toggle" data-panel-toggle></a>
                                        <a href="#" class="panel-action panel-action-dismiss" data-panel-dismiss></a>
                                    </div>
                    
                                    <h2 class="panel-title">Company Activity</h2>
                                </header>
                                <div class="panel-body">
                                    <div class="timeline timeline-simple mt-xlg mb-md">
                                        <div class="tm-body">
                                            <div class="tm-title">
                                                <h3 class="h5 text-uppercase">November 2016</h3>
                                            </div>
                                            <ol class="tm-items">
                                                <li>
                                                    <div class="tm-box">
                                                        <p class="text-muted mb-none">7 months ago.</p>
                                                        <p>
                                                            It's awesome when we find a good solution for our projects, Porto Admin is <span class="text-primary">#awesome</span>
                                                        </p>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="tm-box">
                                                        <p class="text-muted mb-none">7 months ago.</p>
                                                        <p>
                                                            Checkout! How cool is that!
                                                        </p>
                                                        <div class="thumbnail-gallery">
                                                            <a class="img-thumbnail lightbox" href="assets/images/projects/project-4.jpg" data-plugin-options='{ "type":"image" }'>
                                                                <img class="img-responsive" width="215" src="assets/images/projects/project-4.jpg">
                                                                <span class="zoom">
                                                                    <i class="fa fa-search"></i>
                                                                </span>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ol>
                                        </div>
                                    </div>
                                </div>
                            </section>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12 col-md-12">
                            <section class="panel">
                                <header class="panel-heading panel-heading-transparent">
                                    <div class="panel-actions">
                                        <a href="#" class="panel-action panel-action-toggle" data-panel-toggle></a>
                                        <a href="#" class="panel-action panel-action-dismiss" data-panel-dismiss></a>
                                    </div>
                    
                                    <h2 class="panel-title">Projects Stats</h2>
                                </header>
                                <div class="panel-body">
                                    <div class="table-responsive">
                                        <table class="table table-striped mb-none">
                                            <thead>
                                                <tr>
                                                    <th>#</th>
                                                    <th>Project</th>
                                                    <th>Status</th>
                                                    <th>Progress</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>1</td>
                                                    <td>Porto - Responsive HTML5 Template</td>
                                                    <td><span class="label label-success">Success</span></td>
                                                    <td>
                                                        <div class="progress progress-sm progress-half-rounded m-none mt-xs light">
                                                            <div class="progress-bar progress-bar-primary" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 100%;">
                                                                100%
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>2</td>
                                                    <td>Porto - Responsive Drupal 7 Theme</td>
                                                    <td><span class="label label-success">Success</span></td>
                                                    <td>
                                                        <div class="progress progress-sm progress-half-rounded m-none mt-xs light">
                                                            <div class="progress-bar progress-bar-primary" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 100%;">
                                                                100%
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>3</td>
                                                    <td>Tucson - Responsive HTML5 Template</td>
                                                    <td><span class="label label-warning">Warning</span></td>
                                                    <td>
                                                        <div class="progress progress-sm progress-half-rounded m-none mt-xs light">
                                                            <div class="progress-bar progress-bar-primary" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;">
                                                                60%
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>4</td>
                                                    <td>Tucson - Responsive Business WordPress Theme</td>
                                                    <td><span class="label label-success">Success</span></td>
                                                    <td>
                                                        <div class="progress progress-sm progress-half-rounded m-none mt-xs light">
                                                            <div class="progress-bar progress-bar-primary" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 90%;">
                                                                90%
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>5</td>
                                                    <td>Porto - Responsive Admin HTML5 Template</td>
                                                    <td><span class="label label-warning">Warning</span></td>
                                                    <td>
                                                        <div class="progress progress-sm progress-half-rounded m-none mt-xs light">
                                                            <div class="progress-bar progress-bar-primary" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 45%;">
                                                                45%
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>6</td>
                                                    <td>Porto - Responsive HTML5 Template</td>
                                                    <td><span class="label label-danger">Danger</span></td>
                                                    <td>
                                                        <div class="progress progress-sm progress-half-rounded m-none mt-xs light">
                                                            <div class="progress-bar progress-bar-primary" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 40%;">
                                                                40%
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <!-- <tr>
                                                    <td>7</td>
                                                    <td>Porto - Responsive Drupal 7 Theme</td>
                                                    <td><span class="label label-success">Success</span></td>
                                                    <td>
                                                        <div class="progress progress-sm progress-half-rounded mt-xs light">
                                                            <div class="progress-bar progress-bar-primary" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 95%;">
                                                                95%
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr> -->
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </section>
                        </div>
                    </div>
                    

                    <!-- end: page -->

                            <!-- TODO -->
<!--                             <div class="col-lg-8">
                                <div class="panel panel-default">
                                    <div class="panel-heading"> 
                                        <h3 class="panel-title">Todo</h3> 
                                    </div> 
                                    <div class="panel-body todoapp"> 
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <h4 id="todo-message"><span id="todo-remaining"></span> of <span id="todo-total"></span> remaining</h4> 
                                            </div>
                                            <div class="col-sm-6">
                                                <a href="" class="pull-right btn btn-success btn-sm waves-effect waves-light" id="btn-archive">Archive</a>
                                            </div>
                                        </div>

                                        <ul class="list-group no-margn nicescroll todo-list" style="max-height: 288px;" id="todo-list"></ul>

                                         <form name="todo-form" id="todo-form" role="form" class="m-t-20">
                                            <div class="row">
                                                <div class="col-sm-9 todo-inputbar">
                                                    <input type="text" id="todo-input-text" name="todo-input-text" class="form-control" placeholder="Add new todo">
                                                </div>
                                                <div class="col-sm-3 todo-send">
                                                    <button class="btn-success btn-block btn waves-effect waves-light" type="button" id="todo-btn-submit">Add</button>
                                                </div>
                                            </div>
                                        </form> 
                                    </div> 
                                </div>
                            </div> --> 
                        </div>
                    </div> 
                </div>
<?php
include 'includes/footer.php';
include 'includes/rightsidebar.php';
?>
