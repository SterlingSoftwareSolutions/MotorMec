<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Draft Application</title>
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
   <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
   <link rel='stylesheet' type='text/css' media='screen' href="{{ asset('css/draftview.css') }}">
   <script src="https://kit.fontawesome.com/f10bec2d43.js" crossorigin="anonymous"></script>
   <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.6.1/font/bootstrap-icons.css" rel="stylesheet">

</head>  


<body>
<div class="container">
   <div class="row mt-5 ml-5 text-success fw-bold d-flex align-items-center">
      <div class="col-5">
      <div class="row "><i style="width: 10px;  " class="fa fa-chevron-left mt-1 " id="chevron-left"></i>
            <div style="font-size: 20px; width:50px; margin-left: -10px; margin-top:-5px ;">Back</div>
         </div>

      </div>
      <div class="col-7 " style="margin-left:-100px !important;">
         <h2>Application #123</h2>
      </div>
   </div>



 
   <div class="row rounded-2 border border-secondary border-1 p-3 mt-4">
            <div class="col-md-1 align-self-center text-center mt-1" id="statusbar">Status : </div>
            <div class="col-md-1 rounded-2 border border-secondary border-2 p-2 text-secondary text-center" id="completedbar">Draft</div>
            <div class="col-md offset-6">
            </div>
            <div class="col-md"><button type="button" class="btn btn-success btn-sm w-100 fs-6" id="aboveedit">Edit</button></div>
        </div>


     

      <div class="row border border-dark rounded mt-3" id="mainborder">
        

    
      
         <div class="row mt-3">
            <h6 class="col">Approval Type</h6>
            <h6 class="col">VASS Engineering</h6>
         </div>

        

         <div class="row">

            <h6 class="col text-secondary">25 year Rule</h6>
            <h6 class="col text-secondary">MotorMec Engineering </h6>
         </div>

         <div class="row mt-4">
               <h6 class="col-2 text-success fw-bold">Vehicle Info</h6>
               <div class="col-10  position-relative mt-2">
               <div class="progress-bar bg-success " style="width:100%; height: 1px;"> 
               </div>
            </div>
            </div>


         <div class="row mt-3">
            <h6 class="col">Chassis/Frame Number</h6>
            <h6 class="col">Estimated date of arrival</h6>
         </div>

         <div class="row">
            <h6 class="col text-secondary">Not set</h6>
            <h6 class="col text-secondary">Not set</h6>
         </div>

         <div class="row mt-3">
            <h6 class="col ">Make</h6>
            <h6 class="col">Model</h6>
         </div>

         <div class="row">
            <h6 class="col text-secondary">Not set</h6>
            <h6 class="col text-secondary">Not set</h6>
         </div>

         <div class="row mt-3">
            <h6 class="col ">Build Date</h6>
            <h6 class="col">Fuel Type</h6>
         </div>

         <div class="row">
            <h6 class="col text-secondary">Not set</h6>
            <h6 class="col text-secondary">Not set</h6>
         </div>

         <div class="row mt-3">
            <h6 class="col ">Transmission</h6>
            <h6 class="col">Body Type</h6>
         </div>

         <div class="row">
            <h6 class="col text-secondary">Not set</h6>
            <h6 class="col text-secondary">Not set</h6>
         </div>

         <div class="row mt-3">
            <h6 class="col ">Drive Type</h6>
         </div>

         <div class="row">
            <h6 class="col text-secondary">Not set</h6>
         </div>

         <div class="row mt-3">
            <h6 class="col ">Seating Placement</h6>
         </div>

         <div class="row">
            <h6 class="col text-secondary">Not set</h6>
         </div>
          

            <div class="row mt-4">
               <h6 class="col-2 text-success fw-bold">Exterior Images</h6>
               <div class="col-10 position-relative mt-2">
               <div class="progress-bar bg-success " style="width:100%; height: 1px;"> 
               </div>
            </div>
            </div>


            <div class="row">
            <!-- col-lg-1 col-2 -->
               <p class="col-lg col-3 fs-6">Front Right Corner</p>
               <p class="col-lg col-3 fs-6">Rear Right Corner</p>
               <p class="col-lg col-3 fs-6">Rear Left Corner</p>
               <p class="col-lg col-3 fs-6">Front Left Corner</p>
            </div>

            <div class="row">
            <img src="{{asset('images/Frontrightcorner.jpg')}}" style="height:110px; border-radius: 16px;" class="col-lg col-3 img-fluid col fs-6 exte-img">
               
               <div style="height:110px; border-radius: 8px; border: 1px solid #707070; ;margin-right: 5px;" class="col-lg col-3 img-fluid col fs-6"></div>
               <div style="height:110px; border-radius: 8px; border: 1px solid #707070; ;margin-right: 5px;" class="col-lg col-3 img-fluid col fs-6"></div>
               <div style="height:110px; border-radius: 8px; border: 1px solid #707070; ;margin-right: 10px;" class="col-lg col-3img-fluid col fs-6"></div>
            </div>

            <div class="row mt-4">
               <h6 class="col-2 text-success fw-bold">Interior Images</h6>
               <div class="col-10  position-relative mt-2">
               <div class="progress-bar bg-success " style="width:100%; height: 1px;"> 
               </div>
            </div>
            </div>

            <div class="row">

               <p class="col fs-8 ">Please add 4 clear photos</p>

            </div>

            <!-- <div class="container" > -->
               <div class="row border border-dark rounded-3 p-2" style="  width: 96%; margin-left: 10px;">


                  <div class="col-2">
                     <img src="{{asset('images/internal0.jpg')}}" style="width: 300px; height:90px; border-radius: 3px; " class="img-fluid">
                  </div>
                  <div class="col-2">
                    
                  </div>
                  <div class="col-2">
                    
                  </div>
                  <div class="col-2">
                   
                  </div>
                  <div class="col-2">
                    
                  </div>
               </div>


               <div class="row mt-4">
                  <h6 class="col-2 text-success fw-bold">Additional Images</h6>
                 <div class="col-10  position-relative mt-2">
               <div class="progress-bar bg-success " style="width:100%; height: 1px;"> 
               </div>
            </div>
               </div>


               <div class="row">

                  <p class="col fs-6">Engine Photo</p>
                  <p class="col fs-6">Chassis/Frame Photo</p>
                  <p class="col fs-6"></p>
                  <p class="col fs-6"></p>
               </div>


               <div class="row">

               <div style="height:120px; border-radius: 8px; border: 1px solid #707070; ;margin-left: 10px;" class="img-fluid col fs-6"></div>
               <div style="height:120px; border-radius: 8px; border: 1px solid #707070; ;margin-left: 10px;" class="img-fluid col fs-6"></div>
                  <p class="col fs-6"></p>
                  <p class="col fs-6"></p>
               </div>


               <div class="row mt-4">
                  <h6 class="col-2 text-success fw-bold">Documents</h6>
                  <div class="col-10  position-relative mt-2">
               <div class="progress-bar bg-success " style="width:100%; height: 1px;"> 
               </div>
            </div>
               </div>


               <div class="row">

                  <p class="col fs-6">Invoice </p>
                  <p class="col fs-6">Export Certificate</p>
                  <p class="col fs-6">Auction Report</p>
                  <p class="col fs-6"></p>
               </div>


               <div class="row ">

                  <div style="height:120px; border-radius: 8px; border: 1px solid #707070; ;margin-left: 10px;" class="img-fluid col fs-6"></div>
                  <div style="height:120px; border-radius: 8px; border: 1px solid #707070; ;margin-left: 10px;" class="img-fluid col fs-6"></div>
                  <div style="height:120px; border-radius: 8px; border: 1px solid #707070; ;margin-left: 10px;" class="img-fluid col fs-6"></div>
                  <p class="col fs-6"></p>
               </div>



               <div class="row mt-4">
                  <h6 class="col-2 text-success fw-bold">Additional Info</h6>
                  <div class="col-10  position-relative mt-2">
               <div class="progress-bar bg-success " style="width:100%; height: 1px;"> 
               </div>
            </div>
               </div>


               <div class="row mt-3">
                  <h6 class="col">Approval Number</h6>
                  <h6 class="col">VIN</h6>
               </div>

               <div class="row">
                  <h6 class="col text-secondary">Not set</h6>
                  <h6 class="col text-secondary">Not set</h6>
               </div>

               
               <div class="row pb-4 mt-5">
                <div class="col-md offset-6"><button type="button" class="btn btn-secondary btn-sm w-100 fs-6" id="draftbelowback">Back</button>
                </div>
                <div class="col-md">
                </div>

                <div class="col-md"><button type="button" class="btn btn-success btn-sm w-100 fs-6" id="belowedit">Edit</button></div>
            </div>



            <!-- </div> -->

         </div>
         </div>
</body>

</html>