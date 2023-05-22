<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DASHBOARD</title>
    <link rel="shortcut icon" href="images/favicon.png" type="image/x-icon">
    <link rel="stylesheet" href="main-css/main.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" />
</head>
<body>
    <div class="container">
        <div class="topbar">
            <div class="user">
              <img src="images/logo.png" alt="">
            </div>
            <div></div>
            <div class="search">
                <!-- <input type="text" id="search" placeholder="Search Here">
                <label for="search"><i class="fas fa-search"></i></label> -->
            </div>
            <div></div>
            <div class="bell">
              <i class="fas fa-bell"></i>
            </div>
        </div>
        <div class="sidebar">
            <ul>
                <li class="hover">
                    <a onclick="" href="#">
                        <i class="fas fa-th-large"></i>
                        Dashboard
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class="fa-solid fa-stamp"></i>
                        FOR APPROVAL
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class="fa-solid fa-clock-rotate-left"></i>
                        HISTORY
                    </a>
                </li>
                <li>
                    <a href="#" style="font-size: 16px;">
                        <i class="fa-solid fa-car-burst"></i>
                        CAR-REPAIR HISTORY
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class="fas fa-cog"></i>
                        Settings
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class="fas fa-question"></i>
                        Help
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class="fa-solid fa-power-off"></i>
                        Logout
                    </a>
                </li>
            </ul>
        </div>
        <div class="main">
            <!-- dashboard -->
            <section id="dashboardSection">
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
            <!-- for approval -->
            <section id="forApprovalSection">
                <div class="forApprovalInput">
                    <div class="forApprovalInputHolder">
                        <input type="text" name="" id="" placeholder="Search Plate / CS">
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
                        <div>Response</div>
                    </div>
                    <div class="forApprovalData">
                        <div class="approvalData">
                            <div>27</div>
                            <div class="forApprovalHeaderData">Name</div>
                            <div>Rhejoel Joson</div>
                            <div class="forApprovalHeaderData">Plate #</div>
                            <div>NCI4421</div>
                            <div class="forApprovalHeaderData">Make / Model</div>
                            <div>TOYOTA VIOS 1.3J</div>
                            <div class="forApprovalHeaderData">Particulars</div>
                            <div>2 Tires Replacement (175/65R14)</div>
                            <div class="forApprovalHeaderData">Quotation Amount</div>
                            <div>8,000.00</div>
                            <div class="forApprovalHeaderData">Fleet Evaluated Amount</div>
                            <div>7,500.00</div>
                            <div class="forApprovalHeaderData">M.O.T.</div>
                            <div>P.O.</div>
                            <div class="forApprovalHeaderData">Type of Request</div>
                            <div>Corrective</div>
                            <div class="forApprovalHeaderData">Shop</div>
                            <div>Ethanworx Inc.</div>
                        </div>
                        <div class="approvalResponse">
                            <div class="forApprovalHeaderData">Response</div>
                            <button class="approved">
                                <i class="fa-solid fa-thumbs-up"></i>
                            </button>
                            <button class="disapproved">
                                <i class="fa-solid fa-thumbs-down"></i>
                            </button>
                        </div>
                    </div>
                    <div class="forApprovalData">
                        <div class="approvalData">
                            <div class="forApprovalHeaderData">Req ID</div>   
                            <div>27</div>
                            <div class="forApprovalHeaderData">Name</div>
                            <div>Rhejoel Joson</div>
                            <div class="forApprovalHeaderData">Plate #</div>
                            <div>NCI4421</div>
                            <div class="forApprovalHeaderData">Make / Model</div>
                            <div>TOYOTA VIOS 1.3J</div>
                            <div class="forApprovalHeaderData">Particulars</div>
                            <div>2 Tires Replacement (175/65R14)</div>
                            <div class="forApprovalHeaderData">Quotation Amount</div>
                            <div>8,000.00</div>
                            <div class="forApprovalHeaderData">Fleet Evaluated Amount</div>
                            <div>7,500.00</div>
                            <div class="forApprovalHeaderData">M.O.T.</div>
                            <div>P.O.</div>
                            <div class="forApprovalHeaderData">Type of Request</div>
                            <div>Corrective</div>
                            <div class="forApprovalHeaderData">Shop</div>
                            <div>Ethanworx Inc.</div>
                        </div>
                        <div class="approvalResponse">
                            <div class="forApprovalHeaderData">Response</div>
                            <button class="approved">
                                <i class="fa-solid fa-thumbs-up"></i>
                            </button>
                            <button class="disapproved">
                                <i class="fa-solid fa-thumbs-down"></i>
                            </button>
                        </div>
                    </div>
                    <div class="forApprovalData">
                        <div class="approvalData">
                            <div class="forApprovalHeaderData">Req ID</div>   
                            <div>27</div>
                            <div class="forApprovalHeaderData">Name</div>
                            <div>Rhejoel Joson</div>
                            <div class="forApprovalHeaderData">Plate #</div>
                            <div>NCI4421</div>
                            <div class="forApprovalHeaderData">Make / Model</div>
                            <div>TOYOTA VIOS 1.3J</div>
                            <div class="forApprovalHeaderData">Particulars</div>
                            <div>2 Tires Replacement (175/65R14)</div>
                            <div class="forApprovalHeaderData">Quotation Amount</div>
                            <div>8,000.00</div>
                            <div class="forApprovalHeaderData">Fleet Evaluated Amount</div>
                            <div>7,500.00</div>
                            <div class="forApprovalHeaderData">M.O.T.</div>
                            <div>P.O.</div>
                            <div class="forApprovalHeaderData">Type of Request</div>
                            <div>Corrective</div>
                            <div class="forApprovalHeaderData">Shop</div>
                            <div>Ethanworx Inc.</div>
                        </div>
                        <div class="approvalResponse">
                            <div class="forApprovalHeaderData">Response</div>
                            <button class="approved">
                                <i class="fa-solid fa-thumbs-up"></i>
                            </button>
                            <button class="disapproved">
                                <i class="fa-solid fa-thumbs-down"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </section>
            <!-- history -->
            <section id="historySection">
                <div class="historyInput">
                    <div class="historyInputHolder">
                        <select name="" id="">
                            <option value="">ALL</option>
                        </select>
                    </div>
                </div>
                <div class="headerBorder">
                </div>
            </section>
            <!-- car repair history -->
            <section id="carRepairHistorySection">

            </section>
            <!-- settings -->
            <section id="settingsSection">

            </section>
            <!-- help -->
            <section id="helpSection">

            </section>
        </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/apexcharts/3.37.1/apexcharts.min.js"></script>
    <script src="/"></script>
    <script src="charts/chart1a.js"></script>
    <script src="charts/chart1b.js"></script>
    <script src="charts/chart2.js"></script>
    <script src="main.js"></script>
</body>
</html>