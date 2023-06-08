<x-admin.admin-header />
    <x-admin.admin-sidebar />
    <section id="historySection">
        <div class="historyInput">
            <div class="historyInputHolder">
                <select name="" id="">
                    <option value="">ALL</option>
                </select>
            </div>
        </div>

        <div class="forApprovalContainer">
       
       <div class="forApprovalHeader">
           <div>Req ID</div>
           <div>Name</div>
           <div>Plate #</div>
           <div>Make / Model</div>
           <div>Particulars</div>
           <div>Quotation Amount</div>
           <div>Fleet Evaluated Amount</div>
           <div>M.O.T.</div>
           <div>Type of Request</div>
           <div>Shop</div>
           <div>Status</div>
       </div>
   @foreach ( $reqParticular as $data)
       <div class="forApprovalData">
           <div class="approvalData">
               <div>{{$data->id}}</div>
               <div class="forApprovalHeaderData">Name</div>
               <div>{{App\Models\User::find($data->user_id)->name}}</div>
               <div class="forApprovalHeaderData">Plate #</div>
               <div>{{App\Models\Vehicle::find($data->user_id)->plate_no}}</div>
               <div class="forApprovalHeaderData">Make / Model</div>
               <div>{{$carModel}}</div>
               <div class="forApprovalHeaderData">Particulars</div>
               <div>{{App\Models\Type_Of_Request::find ($data->type_of_request_id)->name }}</div>
               <div class="forApprovalHeaderData">Quotation Amount</div>
               <div>{{$data->quotation_amount}}</div>
               <div class="forApprovalHeaderData">Fleet Evaluated Amount</div>
               <div>7,500.00</div>
               <div class="forApprovalHeaderData">M.O.T.</div>
               <div>{{App\Models\Mode_Of_Payment::find($data->mode_of_transaction_id)->name }}</div>
               <div class="forApprovalHeaderData">Type of Request</div>
               <div>{{App\Models\Third_Request_Category::find($data->{'3rd_request_category_id'})->name }}</div>
               <div class="forApprovalHeaderData">Shop</div>
               <div>Ethanworx Inc.</div>
               
            </div>

            <div class="approvalResponse">
                <div class="forApprovalHeaderData">Response</div>

                    @if ($data->is_approved == 1)
                    <p>Approved</p>
                    @elseif ($data->is_approved == 2)
                    <p>Rejected</p>
                    @endif

                </div>
            </div>
       @endforeach
        
    </section>
<x-admin.admin-footer />