<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
<div class="container">
	<div class="row">
        
        
       <div class="col-md-7 ">

<div class="panel panel-default">
  <div class="panel-heading">  <h4 >User Profile</h4></div>
   <div class="panel-body">
       
    <div class="box box-info">
        
            <div class="box-body">
                     <div class="col-sm-6">
                     <div  align="center"> <img alt="User Pic" src="{{asset($fulldetail->userImage)}}" id="profile-image1" class="img-circle img-responsive"> 
                
                <input id="profile-image-upload" class="hidden" type="file">
                <!--Upload Image Js And Css-->
                     </div>
              <br>
                <!-- /input-group -->
            </div>
           
            <div class="clearfix"></div>
            <hr style="margin:5px 0 5px 0;">
    
              
<div class="col-sm-5 col-xs-6 title " >Name:</div><div class="col-sm-7 col-xs-6 ">{{($fulldetail->fullName)}}</div>
     <div class="clearfix"></div>
<div class="bot-border"></div>

<div class="col-sm-5 col-xs-6 title " >Address:</div><div class="col-sm-7"> {{($fulldetail->location)}}</div>
  <div class="clearfix"></div>
<div class="bot-border"></div>

<div class="col-sm-5 col-xs-6 title " >age:</div><div class="col-sm-7">{{($fulldetail->age)}}</div>
  <div class="clearfix"></div>
<div class="bot-border"></div>

<div class="col-sm-5 col-xs-6 title " >website:</div><div class="col-sm-7">{{($fulldetail->website)}}</div>
<a href="/user/home" class="button">Back</a>

            <!-- /.box-body -->
          </div>
          <!-- /.box -->

        </div>
       
            
    </div> 
    </div>
</div>  
    <script>
              $(function() {
    $('#profile-image1').on('click', function() {
        $('#profile-image-upload').click();
    });
});       
              </script> 
   
       
   </div>
</div>




         