<x-admin.admin-header />
    <x-admin.admin-sidebar />
    
    <section id="dashboardSection">
    this is ADMIN DASHBOARD {{auth()->user()->name}}
        <div class="dropDownsHolderHolder">
            <div class="dropDownsHolder">
                <div class="dropDowns">
                    <select name="month" id="">
                        <option value="AS OF TODAY">AS OF TODAY</option>
                        <option value="JANUARY">JANUARY</option>
                        <option value="FEBRUARY">FEBRUARY</option>
                        <option value="MARCH">MARCH</option>
                        <option value="APRIL">APRIL</option>
                        <option value="MAY">MAY</option>
                        <option value="JUNE">JUNE</option>
                        <option value="JULY">JULY</option>
                        <option value="AUGUST">AUGUST</option>
                        <option value="SEPTEMBER">SEPTEMBER</option>
                        <option value="OCTOBER">OCTOBER</option>
                        <option value="NOVEMBER">NOVEMBER</option>
                        <option value="DECEMBER">DECEMBER</option>
                    </select>
                </div>                                        
                <div class="dropDowns">
                    <select name="" id="">
                        <option value="">BU/Dept</option>
                    </select>
                </div>
            </div>
        </div>
        <div class="cards">
            <div class="cardHeader">
                <div class="cardHolder1">
                    <div class="card">
                        <div class="card-content">
                            <div class="number">1,753,727.93</div>
                                <div class="card-name">QUOTATION SUBMITTED</div>
                            </div>
                        </div>
                        <div class="card">
                        <div class="card-content">
                            <div class="number">1,500,180.67</div>
                                <div class="card-name">FLEET NEGOTIATED</div>
                            </div>
                        </div>
                        <div class="card">
                        <div class="card-content">
                            <div class="number">253,547.26</div>
                                <div class="card-name">SAVINGS</div>
                            </div>
                        </div>
                    </div>
                    <div class="cardHolder2">
                        <div></div>
                        <div class="card" id="pmsTab" onclick="showPMS()">
                            <div class="card-content">
                                <div class="number">707,229.90</div>
                                <div class="card-name">PMS</div>
                            </div>
                        </div>
                        <div class="card" id="correctiveTab" onclick="showCorrective()">
                            <div class="card-content">
                                <div class="number">792,950.77</div>
                                <div class="card-name">CORRECTIVE</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="cardHeader">

                </div>
            </div>
            <div class="charts">
                <div class="chart1">
                <h2>FLEET NEGOTIATED</h2>
                <div id="barChart"></div>
                <div id="barChartA"></div>
                <div id="barChartB"></div>
            </div>
            <div class="chart2">
                <h2>Progress</h2>
                <div id="pieChart"></div>
                <div class="Tat">
                    <div class="number">2.5</div>
                    <div class="card-name">T.A.T.</div>
                </div>
            </div>
        </div>
    </section>
<x-admin.admin-footer />