<tr class="table-row">
    <th>{{$application->id}}</th>
    <td><img width="200" class="img-fluid rounded" src="https://images.unsplash.com/photo-1494976388531-d1058494cdd8?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxzZWFyY2h8M3x8Y2Fyc3xlbnwwfHwwfHw%3D&w=1000&q=80" alt=""></td>
    <td>
        <div class="ms-5">
            <div class="row">
                <h5 class="font-weight-bold">{{$application->make}} {{$application->model}}</h5>
            </div>

            <div class="row mt-2">
                <!-- vin number  -->
                <div class="col-6">
                    <p class="sub-topics m-0 p-0">VIN# : {{$application->id}}</p>
                    <!-- Power Source  -->

                    <p class="sub-topics  m-0 p-0">Power Source# : {{$application->id}}</p>

                    <!-- Regestration Number  -->

                    <p class="sub-topics  m-0 p-0">REG# : {{$application->id}}</p>

                </div>
                <div class="col-6">
                    <!-- Engine  -->

                    <p class="sub-topics  m-0 p-0">Engine# : {{$application->id}}</p>


                    <!-- built  -->

                    <p class="sub-topics  m-0 p-0">Built# : {{$application->id}}</p>


                    <!-- KMS  -->

                    <p class="sub-topics  m-0 p-0">KMS# : {{$application->id}}</p>
                </div>
            </div>



        </div>
    </td>
    <td>
        @if($application->status === "Rejected")
        <button disabled class="btn btn-outline-danger draft-btn mt-5">Rejected</button>
        @else
        <button class="btn btn-outline-success draft-btn mt-5">Completed</button>
        @endif
        <!-- <button class="btn btn-outline-secondary draft-btn mt-5">Draft</button>
                        <button class="btn btn-outline-warning draft-btn mt-5">Review</button>
                        <button class="btn btn-outline-warning draft-btn mt-5">Submitted</button>
                        <button class="btn btn-outline-warning draft-btn mt-5">VIA Granted</button>
                        <button class="btn btn-outline-warning draft-btn mt-5">In Compliance</button>
                         -->
        
    </td>
    <td>
        <div>
            <button class="btn btn-dark view-btn mt-4 ">View</button>
            <button class="btn btn-dark view-btn mt-1">Edit</button>
            <!-- <button  class="btn btn-dark view-btn mt-1">VIA</button>
                            <button  class="btn btn-dark view-btn mt-1 mb-4">Compliance</button> -->
        </div>
    </td>
</tr>