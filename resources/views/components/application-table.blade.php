<div class="">
    <div class="title pt-4 pb-3">
        <h1 class="title-form text-center">All Applications</h1>
    </div>

    <!-- status filters -->
    <div class="d-flex row p-4 rounded filter">
        <div class="col-1">
            <label class="pt-2">Status : </label>
        </div>

        <div class="col-1 pt-1">
            <div class="dropdown">
                <select class=" dropdown-select" aria-label=".form-select-sm example">
                    <option selected>All</option>
                    <option value="1">One</option>
                    <option value="2">Two</option>
                    <option value="3">Three</option>
                </select>
            </div>
        </div>

        <div class="col-2 pt-1">
            <div class="">
                <input type="text" class="form-control dropdown-select" placeholder="Search" aria-label="Username">
            </div>
        </div>

        <div class="col-2 pt-1">
            <div class="">
                <input type="text" class="form-control dropdown-select" placeholder="Make" aria-label="Username">
            </div>
        </div>

        <div class="col-2 pt-1">
            <div class="">
                <input type="text" class="form-control dropdown-select" placeholder="Model" aria-label="Username">
            </div>
        </div>
        <div class="col-2">

        </div>

        <div class="col-2">
            <div class="row">
                <div class="col-2">

                </div>
                <div class="col-4">
                    <label class="pt-2">Status</label>
                </div>
                <div class="dropdown col-6 pt-1">
                    <select class="dropdown-select" aria-label=".form-select-sm example">
                        <option selected>100</option>
                        <option value="1">One</option>
                        <option value="2">Two</option>
                        <option value="3">Three</option>
                    </select>
                </div>
            </div>
        </div>

    </div>

    <!-- car List  -->

    <div class="car-table">
        <table class="table">
            <thead>
                <tr>
                    <th class="col-1">ID</th>
                    <th class="col-2 text-center">Photo</th>
                    <th class="col-4 text-center">Make & Model</th>
                    <th class="col-2 ">Status</th>
                    <th class="col-1">Actions</th>
                </tr>
            </thead>

            <tbody>
                <div class="t-body">
                    @foreach ($applications as $application)
                         <x-table_row :application="$application" />
                    @endforeach

                </div>


            </tbody>

        </table>
    </div>


</div>