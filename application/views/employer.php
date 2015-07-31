<!DOCTYPE html>
<html>
  <head>
    <title>Inc. Ability, Accessible Jobs For The Visually Impaired</title>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, width=device-width, height=device-height" />
    <meta http-equiv="pragma" content="no-cache" />
    <meta name="description" content="Incability is a tool for job seekers who are blind or visually impaired. Register and apply to jobs that you are interested in and receive a notification on our mobile application anytime an employeer is interested in your profile.">

    <link rel="stylesheet" href="/res/css/bootstrap.min.css" />
    <link rel="stylesheet" href="/res/css/bootstrap-accessibility.css" />
    <link rel="stylesheet" href="/res/css/a11ytheme.min.css" />
    <link rel="stylesheet" href="/res/css/employer.css" />

  </head>
  <body>

    <nav class="navbar navbar-default" role="navigation">
       <a class="sr-only" href="#content">Skip to content</a> 
       <div class="container-fluid">
          <div class="navbar-header">
             <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
             <span class="sr-only">Toggle navigation</span>
             <span class="icon-bar"></span>
             <span class="icon-bar"></span>
             <span class="icon-bar"></span>
             </button>
          </div>
          <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <li class="active"><a href="/index.php/">Jobs</a></li>
                <li><a href="/index.php/employer">Employers</a></li>
                <li><a href="/index.php/about">About</a></li>
                <li class="dropdown">
                   <a href="#" class="dropdown-toggle" data-toggle="dropdown">Resources <b class="caret"></b></a>
                   <ul class="dropdown-menu">
                      <li><a href="http://www.w3.org/WAI/">Web Accessibility Initiative</a></li>
                      <li><a href="http://achecker.ca/checker/index.php">Web Acessibility Checker</a></li>
                   </ul>
                </li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
              <li id="openeye"><a href="#"><img src="/res/img/open_eye.png" alt="non screen reader version" class="control-img"></a></li>
              <li id="closedeye"><a href="#"><img src="/res/img/closed_eye.png" alt="screen reader version" class="control-img"></a></li>
            </ul>
          </div>
       </div>
    </nav>

    <div class="visibility-layer"></div>

    <div class="jumbotron">
      <div class="container">
        <h2>Incability is a tool for job seekers who are blind or visually impaired.</h2>
        <p>Navigate the web just like they do.</p>
      </div>
    </div>

    <div id="content" class="container">

      <h3 class="center-text available-jobs-header">Please Enter Your Job Posting Details</h3>

      <div class="row job-posting">
        <div class="col-xs-12 col-sm-6 col-sm-offset-3">
          <input id="job-title" class="form-control" name="Job Title" title="Job Title" placeholder="Job Title"/>
        </div>
      </div>

      <div class="row job-posting">
        <div class="col-xs-12 col-sm-6 col-sm-offset-3">
          <input id="job-desc" class="form-control" name="Job Description" title="Job Description" placeholder="Job Description"/>
        </div>
      </div>

      <div class="row job-posting">
        <div class="col-xs-12 col-sm-6 col-sm-offset-3 center-text">
          <button type="button" class="btn btn-success btn-post-job" data-toggle="modal" data-target="#gridSystemModal">Post Job</button>
        </div>
      </div>
    </div>
      
    <div class="landing-footer center-text">
      <h4>#Mecate2015</h4>
    </div>


    <div id="myname-success" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="gridModalLabel4">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <!-- <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button> -->
            <h4 class="modal-title" id="gridModalLabel4">List of people who have completed this challenge:</h4>
            <div id="nameslist" class="modal-body center-text">
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Ok!</button>
          </div>
        </div><!-- /.modal-content -->
      </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->

    
    <div id="myname-fail" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="gridModalLabel3">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <!-- <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button> -->
            <h4 class="modal-title" id="gridModalLabel3">Please enter your name!</h4>
          </div>
          <div class="modal-footer">
            <button id="enteryournameok" type="button" class="btn btn-default" data-dismiss="modal">Ok!</button>
          </div>
        </div><!-- /.modal-content -->
      </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->


    <div id="gridSystemModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="gridModalLabel">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header center-text">
          <!-- <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button> -->
          <h4 class="modal-title" id="gridModalLabel">Thank you!</h4>
          <input id="name" class="form-control" title="Please add your name to the list of people who have completed this challenge:" placeholder="Please add your name to the list of people who have completed this challenge:"/>
          <h4>Your job title:</h4>
          <h4 id="modal-post-title"></h4>
          <h4>Your job description:</h4>
          <h4 id="modal-post-desc"></h4><button type="button" id="submitmyname" class="btn btn-success">Add My Name</button>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">No Thanks!</button>
        </div>
      </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
  </div><!-- /.modal -->


  <div id="post-fail" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="gridModalLabel2">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <!-- <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button> -->
          <h4 class="modal-title" id="gridModalLabel2">You are either missing the title or the description of your job!</h4>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Ok!</button>
        </div>
      </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
  </div><!-- /.modal -->

  </body>
  
  <script type="text/javascript" src="/res/js/jquery-2.1.4.min.js"></script>
  <script type="text/javascript" src="/res/js/bootstrap.min.js"></script>
  <script type="text/javascript" src="/res/js/employer.js"></script>
</html>
    




