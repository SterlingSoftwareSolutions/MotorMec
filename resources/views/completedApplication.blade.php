<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Completed Application</title>
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
   <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
   <link rel='stylesheet' type='text/css' media='screen' href="{{ asset('css/completedview.css') }}">
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
      <div class="col-7 applicationrdraftid">
         <h2>Application #123</h2>
      </div>
   </div>



 
   <div class="row rounded-2 border border-secondary border-1 p-3 mt-4">
            <div class="col-md-1 align-self-center text-center mt-1" id="statusbar">Status : </div>
            <div class="col-md-1 rounded-2 border border-success border-2 p-2 text-success text-center" id="completedbar">Completed</div>
            <div class="col-md offset-6"><button type="button" class="btn btn-success btn-sm w-100 fs-6" id="compliance">Start Compliance</button>
            </div>
            <div class="col-md"><button type="button" class="btn btn-success btn-sm w-100 fs-6" id="via"><i
                        class="bi bi-download me-2" ></i>VIA</button></div>
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
            <h6 class="col text-secondary">123</h6>
            <h6 class="col text-secondary">22/02/2022</h6>
         </div>

         <div class="row mt-3">
            <h6 class="col ">Make</h6>
            <h6 class="col">Model</h6>
         </div>

         <div class="row">
            <h6 class="col text-secondary">Toyota</h6>
            <h6 class="col text-secondary">Supra</h6>
         </div>

         <div class="row mt-3">
            <h6 class="col ">Build Date</h6>
            <h6 class="col">Fuel Type</h6>
         </div>

         <div class="row">
            <h6 class="col text-secondary">22/02/2000</h6>
            <h6 class="col text-secondary">Petrol</h6>
         </div>

         <div class="row mt-3">
            <h6 class="col ">Transmission</h6>
            <h6 class="col">Body Type</h6>
         </div>

         <div class="row">
            <h6 class="col text-secondary">Auto</h6>
            <h6 class="col text-secondary">Crossover</h6>
         </div>

         <div class="row mt-3">
            <h6 class="col ">Drive Type</h6>
         </div>

         <div class="row">
            <h6 class="col text-secondary">Front Wheel Drive</h6>
         </div>

         <div class="row mt-3">
            <h6 class="col ">Seating Placement</h6>
         </div>

         <div class="row">
            <h6 class="col text-secondary">Seats 1</h6>
         </div>



            <div class="row mt-4">
               <h6 class="col-2 text-success fw-bold">Vehicle Info</h6>
               <div class="col-10  position-relative mt-2">
               <div class="progress-bar bg-success " style="width:100%; height: 1px;"> 
               </div>
            </div>
            </div>


            <div class="row">

               <p class="col fs-6">Front Right Corner</p>
               <p class="col fs-6">Rear Right Corner</p>
               <p class="col fs-6">Rear Left Corner</p>
               <p class="col fs-6">Front Left Corner</p>
            </div>

            <div class="row  ">
               <img src="{{asset('images/Frontleftcorner.jpg')}}" style=" height:120px; border-radius: 15px;" class="img-fluid col fs-6">
               <img src="{{asset('images/Frontrightcorner.jpg')}}" style=" height:120px; border-radius: 15px;" class="img-fluid col fs-6">
               <img src="{{asset('images/Frontleftcorner.jpg')}}" style=" height:120px; border-radius: 15px;" class="img-fluid col fs-6">
               <img src="{{asset('images/Frontrightcorner.jpg')}}" style="height:120px; border-radius: 15px;" class="img-fluid col fs-6">
            </div>

            <div class="row mt-4">
               <h6 class="col-2 text-success fw-bold">Vehicle Info</h6>
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
                     <img src="{{asset('images/internal1.jpg')}}" style="width: 300px; height:90px; border-radius: 3px;" class="img-fluid ">
                  </div>
                  <div class="col-2">
                     <img src="{{asset('images/internal0.jpg')}}" style="width: 300px; height:90px;  border-radius: 3px;" class="img-fluid">
                  </div>
                  <div class="col-2">
                     <img src="{{asset('images/internal1.jpg')}}" style="width: 300px; height:90px;  border-radius: 3px;" class="img-fluid ">
                  </div>
                  <div class="col-2">
                     <img src="{{asset('images/internal0.jpg')}}" style="width: 300px; height:90px;  border-radius: 3px;" class="img-fluid">
                  </div>
               </div>

               <div class="row mt-4">
               <h6 class="col-2 text-success fw-bold">Vehicle Info</h6>
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

                  <img src="{{asset('images/Engine.jpeg')}}" style=" height:120px; border-radius: 15px;" class="img-fluid col fs-6">
                  <img src="{{asset('images/Chessis.jpg')}}" style=" height:120px; border-radius: 15px;" class="img-fluid col fs-6">
                  <p class="col fs-6"></p>
                  <p class="col fs-6"></p>
               </div>


               <div class="row mt-4">
               <h6 class="col-2 text-success fw-bold">Vehicle Info</h6>
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

                  <img src="{{asset('images/Invoice.jpg')}}" style=" height:120px; border-radius: 8px; border: 1px solid #707070; ;margin-left: 10px;" class="img-fluid col fs-6">
                  <img src="{{asset('images/exportCertificate.jpg')}}" style=" height:120px; border-radius: 8px; border: 1px solid #707070;; margin-left: 10px;" class="img-fluid col fs-6">
                  <img src="{{asset('images/Auctionreport.jpg')}}" style=" height:120px; border-radius: 8px; border: 1px solid #707070; margin-left: 10px;" class="img-fluid col fs-6">
                  <p class="col fs-6"></p>
               </div>



               <div class="row mt-4">
               <h6 class="col-2 text-success fw-bold">Vehicle Info</h6>
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
                  <h6 class="col text-secondary">123</h6>
                  <h6 class="col text-secondary">123</h6>
               </div>

              <div class="row mt-5">
              <div class="col-md offset-6"><button type="button" class="btn btn-secondary btn-sm w-100 fs-6" id="completedbelowback">Back</button>
            </div>
            <div class="col-md"><button type="button" class="btn btn-success btn-sm w-100 fs-6" id="belowcompliance">Start Compliance</button>
            </div>

                        <div class="col-md"><button type="button" class="btn btn-success btn-sm w-100 fs-6" id="belowvia"><i
                        class="bi bi-download me-2" ></i>VIA</button></div>
              



            <!-- </div> -->

         </div>
         </div>
</body>

</html>