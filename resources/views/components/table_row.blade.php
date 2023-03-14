<tr class="table-row">
    <th>{{$application->id}}</th>
    <td><img width="200" class="img-fluid rounded" src="https://images.unsplash.com/photo-1494976388531-d1058494cdd8?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxzZWFyY2h8M3x8Y2Fyc3xlbnwwfHwwfHw%3D&w=1000&q=80" alt=""></td>
    <td>
        <div class="ms-5">
            <div class="row">
                <h5 class="font-weight-bold">{{$application->make}} {{$application->model}}</h5>
            </div>

            <div class="row mt-2">

                <!-- Chassis number  -->
                <div class="col-6">

                    <p class="sub-topics m-0 p-0">Chassis# : {{$application->chassis_no}}</p>
                    <!-- Built  -->
                    <p class="sub-topics  m-0 p-0">Built# : {{$application->id}}</p>

                    <!-- ODO Number  -->
                    <p class="sub-topics  m-0 p-0">ODO Meter# : {{$application->id}}</p>

                </div>
            </div>



        </div>
    </td>
    <td>
        @if($application->status === "draft")
        <button disabled class="btn btn-outline-secondary draft-btn mt-5">Draft</button>
        @elseif($application->status === "in-review")
        <button disabled class="btn btn-outline-warning draft-btn mt-5">Reviewing</button>
        @elseif($application->status === "submitted")
        <button disabled class="btn btn-outline-warning draft-btn mt-5">Submitted</button>
        @elseif($application->status === "via-granted")
        <button disabled class="btn btn-outline-warning draft-btn mt-5">VIA Granted</button>
        @elseif($application->status === "in-compliance")
        <button disabled class="btn btn-outline-warning draft-btn mt-5">In Compliance</button>
        @elseif($application->status === "completed")
        <button disabled class="btn btn-outline-success draft-btn mt-5">Completed</button>
        @elseif($application->status === "rejected")
        <button disabled class="btn btn-outline-danger draft-btn mt-5">Rejected</button>
        @endif
    </td>
    <td>
        <div>
            <a href="/applications/{{$application->id}}">
                <button class="btn btn-dark view-btn mt-4">View</button>
            </a>
            <button class="btn btn-dark view-btn mt-1">Edit</button>
            <!-- <button  class="btn btn-dark view-btn mt-1">VIA</button>
                            <button  class="btn btn-dark view-btn mt-1 mb-4">Compliance</button> -->
        </div>
    </td>
</tr>