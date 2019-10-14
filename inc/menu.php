   <div class="navbar navbar-inverse navbar-fixed-top hidden-print" role="navigation">
    <div class="container">
     <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
       <span class="sr-only">Toggle navigation</span>
       <span class="icon-bar"></span>
       <span class="icon-bar"></span>
       <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="/">e-SINAN</a>
     </div>
<?php
   if(@$_SESSION['APP']){
?>     
     <div class="navbar-collapse collapse">
      <ul class="nav navbar-nav navbar-right">
       <li></li>
      </ul>
     </div><!--/.navbar-collapse -->
<?php } ?>     
    </div>
   </div>
