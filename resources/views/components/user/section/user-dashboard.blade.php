<x-user.user-header />
    <x-user.user-sidebar />
    <section id="userDashboardSection">
        this is USER DASHBOARD {{auth()->user()->name}}
        <h1>Your Company Car Details</h1>
        <div class="carDetails">
            @foreach ($data as $data)
            <div class="label">Plate#</div>
            <div> {{ $data->plate_no }}</div>
            <div class="label">Engine#</div>
            <div> {{ $data->engine_no }}</div>
            <div class="label">Year Model:</div>
            <div> {{ $data->year_model }}</div>
            <div class="label">Chassis#:</div>
            <div>{{ $data->chassis_no }}</div>
            <div class="label">Make/Model:</div>
            <div>{{$data2}}  </div>
            <div class="label">LTO OR Copy:</div>
            <div>{{ $data->lto_or_copy }}</div>
            
            
        </div>
        <div class="carDetails">
            <div class="label">Driver’s License#:</div>
            <div>{{ $data->engine_no }}</div>
            
            <div class="label">BU/Dept:</div>
            <div>{{$data3}} </div>
            <div class="label">Expiration Date:</div>
            <div>01/01/2033</div>
            @endforeach
            <div></div>
            <div></div>
            <div class="label">Download Copy</div>
        </div>
        <div class="otherDetails">
            <div  class="otherDetailsHeader">
                <div class="label">Repair and Maintenance Expense: PHP</div>
                <div>80,000.00</div>
            </div><br>
            <h4 class="label">On process request:</h4>
            <div class="request">
                <div class="requestHeader">
                    <div class="label">Req#:</div>
                    <div>24</div>
                    <div class="label">Particulars</div>
                    <div>20K PMS</div>
                    <div class="label">M.O.T.</div>
                    <div>Purchase Order</div>
                    <div class="label">Shop</div>
                    <div>Shell Binan..</div>
                </div>
                <div class="progressBarHeader">PROGRESS BAR</div>
                <div class="progress" role="progressbar" aria-label="Default striped example" aria-valuenow="67" aria-valuemin="0" aria-valuemax="100">
                    <div class="progress-bar progress-bar-striped" style="width: 67%"></div>
                </div>
                <div class=progressDetails>
                    <div>Submission</div>
                    <div>Evaluation</div>
                    <div>Approval</div>
                    <div>PO issuance</div>
                </div>
            </div>
            <div class="request">
                <div class="requestHeader">
                    <div class="label">Req#:</div>
                    <div>24</div>
                    <div class="label">Particulars</div>
                    <div>20K PMS</div>
                    <div class="label">M.O.T.</div>
                    <div>Purchase Order</div>
                    <div class="label">Shop</div>
                    <div>Shell Binan..</div>
                </div>
                <div class="progressBarHeader">PROGRESS BAR</div>
                <div class="progress" role="progressbar" aria-label="Default striped example" aria-valuenow="33" aria-valuemin="0" aria-valuemax="100">
                    <div class="progress-bar progress-bar-striped" style="width: 33%"></div>
                </div>
                <div class=progressDetails>
                    <div>Submission</div>
                    <div>Evaluation</div>
                    <div>Approval</div>
                    <div>PO issuance</div>
                </div>
            </div>
        </div>
    </section>
<x-user.user-footer />