<x-user.user-header />
    <x-user.user-sidebar />
    <section id="userSendRequest">
        <div class="sendRequest">
            this is USER SEND REQUEST
            <div class="sendRequestHeader">
                <div class="label">Name:</div>
                <div>{{auth()->user()->name}}</div>
                <div class="label"></div>
                <div></div>
                @foreach ($data as $data)
                <div class="label">Plate#:</div>
                <div>{{ $data->plate_no }}</div>
                <div class="label">Engine#:</div>
                <div>{{ $data->engine_no }}</div>
                <div class="label">Year Model:</div>
                <div>{{ $data->year_model }}</div>
                <div class="label">Chassis#:</div>
                <div>{{ $data->chassis_no }}</div>
                <div class="label">Make/Model:</div>
                <div>TOYOTA VIOS 1.3J</div>
                @endforeach
            </div><br><br>
            <form action="">
                <div class="formDropDown">
                    <input type="hidden" name="name" value="Rhejoel Joson">
                    <input type="hidden" name="plate#" value="NCI4421">
                    <input type="hidden" name="engine#" value="3NRX954321">
                    <input type="hidden" name="yearModel" value="2020">
                    <input type="hidden" name="chassis#" value="PA1B18F34P4204321">
                    <input type="hidden" name="makeModel" value="TOYOTA VIOS 1.3J">
                    <div class="input">
                        <label for="1stCategory">Mode of Transaction</label>
                        <select name="1stCategory" id="">
                       
                            <option value="">asdasd</option>
                       
                        </select>
                    </div>
                    <div class="input">
                        <label for="2ndCategory">Type of Request</label>
                        <select name="2ndCategoryOR" id="">
                            <option value="">Type of Request</option>
                        </select>
                    </div>
                    <div class="input">
                        <label for="3rdCategory">Type of Corrective</label>
                        <select name="3rdCategory" id="">
                            <option value="">Select</option>
                        </select>
                    </div>
                    <div class="input">
                        <label for="4thCategory">Mechanical / Electrical</label>
                        <select name="4thCategory" id="">
                            <option value="">Select</option>
                        </select>
                    </div>
                </div>
                <div class="formInput">
                    <div class="input">
                        <label name="quotation">Quotation Amount</label>
                        <input type="number" name="quotation">
                    </div>
                    <div class="input">
                        <label for="file1">File upload</label>
                        <input type="file" name="file1">
                    </div>
                </div>
            </form>
        </div>
    </section>
<x-user.user-footer />