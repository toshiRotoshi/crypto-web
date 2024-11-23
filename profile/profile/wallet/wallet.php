<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>crypto</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" integrity="sha512-HK5fgLBL+xu6dm/Ii3z4xhlSUyZgTT9tuc/hSrtw6uzJOvgRr2a9jyxxT1ely+B+xFAmJKVSTbpM/CuL7qxO8w==" crossorigin="anonymous" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css2?family=Material+Icons+Sharp" rel="stylesheet">


    <link rel="stylesheet" href="./wallet.css">
</head>

<body>
    <!-- navbar -->
    <nav>
        <div class="container">
            <div class="search-bar">
                <span class="material-icons-sharp">search</span>
                <input type="search" placeholder="Search">
            </div>
            <div class="profile-area">
                <div class="theme-btn">
                    <span class="material-icons-sharp active">light_mode</span>
                    <span class="material-icons-sharp">dark_mode</span>
                </div>
                <div class="profile">
                    <div class="profile-photo">
                        <img src="/profile/profile/img/profile-1.png" alt="profile1">
                    </div>
                    <h5>Will</h5>
                    <span class="material-icons-sharp">expand_more</span>
                </div>
                <button id="menu-btn">
                    <span class="material-icons-sharp">menu</span>
                </button>
            </div>
        </div>
    </nav>

    <!-- main -->

    <body>
        <div class="container px-5 py-4 my-5">
            <div class="row">
                <div class="ps-lg-5 ps-sm-4 py-4 pe-3 col-md-12 d-flex flex-row align-items-center font-16 purple-color-2">
                    <div class="logo me-auto"></div>
                    <i class="far fa-bell px-4 notification"></i>
                    <i class="fas fa-cog ps-4"></i>
                </div>
            </div>
    
            <div class="row">
                <div class="col-md-2 d-flex flex-row flex-md-column align-items-center">
                    <a href="../admin_dashboard.php" class="my-4 mx-sm-2 mx-2 mx-md-0 font-16 square orange-bg-color white-color round-corner-small d-flex flex-row justify-content-center align-items-center">
                        <i class="fas fa-home "></i>
                        </a>
                    </div>
                    <div class="my-4 mx-sm-2 mx-2 mx-md-0 font-16 square grey-border purple-color-2 round-corner-small d-flex flex-row justify-content-center align-items-center">
                        <i class="fas fa-expand-alt "></i>
                    </div>
                    <div class="my-4 mx-sm-2 mx-2 mx-md-0 font-16 square grey-border purple-color-2 round-corner-small d-flex flex-row justify-content-center align-items-center">
                        <i class="fas fa-chart-pie "></i>
                    </div>
                    <div class="mt-auto ms-auto ms-sm-auto my-4 mx-sm-2 mx-2 mx-md-0 font-16 square purple-bg-color white-color round-corner-small d-flex flex-row justify-content-center align-items-center">
                        <i class="fas fa-plus "></i>
                    </div>
                </div>
            
        

            <div class="col-md-10">
                <div class="row">
                    <div class="col-md-5 col-sm-6">
                        <div class="p-4 d-flex flex-column purple-bg-color round-corner">
                            <span class="text-uppercase font-10 weight-600 white-color-2">Balance Details</span>
                            <span class="font-28 weight-700 white-color mt-4">$4,563,234</span>
                            <span class="font-12 weight-300 white-color-2">3.235323 BTC</span>
                            <div class="d-flex flex-row justify-content-between mt-4">
                                <div class="d-flex flex-column">
                                    <span class="font-16 weight-600 white-color">$3,742.00</span>
                                    <span class="font-12 weight-300 white-color-2">Income</span>
                                </div>
                                <div class="d-flex flex-column">
                                    <span class="font-16 weight-600 white-color">$6,987.00</span>
                                    <span class="font-12 weight-300 white-color-2">Expense</span>
                                </div>
                            </div>
                            <div class="d-flex flex-row mt-4">
                                <button class="flex-grow-1 me-1 py-2 text-uppercase font-12 weight-700 purple-color-2 grey-bg-color">Receive</button>
                                <button class="flex-grow-1 ms-1 py-2 text-uppercase font-12 weight-700 white-color orange-bg-color">Send</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="py-3">
                            <span class="text-uppercase font-10 weight-600 grey-color-2">Fees</span>
                            <div class="d-flex flex-column round-corner grey-bg-color ps-4 py-3 mt-3 mb-4">
                                <span class="font-30 purple-color-2">0.069%</span>
                                <span class="text-uppercase font-14 purple-color-2">Marker</span>
                            </div>
                            <div class="d-flex flex-column round-corner grey-bg-color ps-4 py-3 ">
                                <span class="font-30 purple-color-2">0.085%</span>
                                <span class="text-uppercase font-14 purple-color-2">Taker</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="pt-3">
                            <table class="table table-borderless">
                                <thead>
                                    <tr>
                                        <th class="text-uppercase font-10 weight-600 grey-color-2">Wallets</th>
                                        <th class="text-end text-uppercase font-10 weight-600 purple-color-2">View All</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            <div class="d-flex flex-row">
                                                <div class="d-flex flex-row justify-content-center align-items-center square round-corner-small font-20 light-orange-bg-color orange-color">
                                                    <i class="fab fa-bitcoin"></i>
                                                </div>
                                                <div class="d-flex flex-column ps-2">
                                                    <span class="font-14 weight-700 purple-color-2">BTE</span>
                                                    <span class="font-10 weight-400 purple-color-2">Bitcoin</span>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="d-flex flex-column align-items-end">
                                                <span class="font-14 weight-700 purple-color-2">64%</span>
                                                <span class="font-10 weight-400 orange-color">-1.7%</span>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="d-flex flex-row ">
                                                <div class="d-flex flex-row justify-content-center align-items-center square round-corner-small light-yellow-bg-color yellow-color font-20 ">
                                                    <i class="fab fa-ethereum "></i>
                                                </div>
                                                <div class="d-flex flex-column ps-2 ">
                                                    <span class="font-14 weight-700 purple-color-2 ">DAI</span>
                                                    <span class="font-10 weight-400 purple-color-2 ">Dai</span>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="d-flex flex-column align-items-end ">
                                                <span class="font-14 weight-700 purple-color-2 ">54%</span>
                                                <span class="font-10 weight-400 purple-color-2 ">7.4%</span>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="d-flex flex-row ">
                                                <div class="d-flex flex-row justify-content-center align-items-center square round-corner-small light-teal-bg-color teal-color font-20 ">
                                                    <i class="fas fa-lira-sign "></i>
                                                </div>
                                                <div class="d-flex flex-column ps-2 ">
                                                    <span class="font-14 weight-700 purple-color-2 ">XRP</span>
                                                    <span class="font-10 weight-400 purple-color-2 ">Ripple</span>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="d-flex flex-column align-items-end ">
                                                <span class="font-14 weight-700 purple-color-2 ">13%</span>
                                                <span class="font-10 weight-400 orange-color ">-4.6%</span>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="d-flex flex-row ">
                                                <div class="d-flex flex-row justify-content-center align-items-center square round-corner-small light-green-bg-color green-color font-20 ">
                                                    <i class="fas fa-tenge "></i>
                                                </div>
                                                <div class="d-flex flex-column ps-2 ">
                                                    <span class="font-14 weight-700 purple-color-2 ">USDT</span>
                                                    <span class="font-10 weight-400 purple-color-2 ">Tether</span>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="d-flex flex-column align-items-end ">
                                                <span class="font-14 weight-700 purple-color-2 ">34%</span>
                                                <span class="font-10 weight-400 purple-color-2 ">7.5%</span>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="row mt-4">
                    <div class="col-md-8">
                        <div>
                            <table class="table table-borderless">
                                <thead>
                                    <tr>
                                        <th class="text-uppercase font-10 weight-600 grey-color-2">Transactions</th>
                                        <th class="text-uppercase font-10 weight-600 purple-color-2 text-end">View All</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            <div class="d-flex flex-row">
                                                <div class="d-flex flex-row justify-content-center align-items-center orange-color square round-corner-small light-orange-bg-color font-14">
                                                    <i class="fas fa-long-arrow-alt-up"></i>
                                                </div>
                                                <div class="d-flex flex-column ps-2">
                                                    <span class="font-14 weight-700 purple-color-2">Sent BTE</span>
                                                    <span class="font-10 weight-400 purple-color-2">12 Nov, 2020</span>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="d-flex flex-column align-items-end">
                                                <span class=" font-16 weight-700 orange-color ">-$1,289.00</span>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="d-flex flex-row ">
                                                <div class="d-flex flex-row justify-content-center align-items-center square round-corner-small light-purple-bg-color purple-color-2 font-14 ">
                                                    <i class="fas fa-long-arrow-alt-down "></i>
                                                </div>
                                                <div class="d-flex flex-column ps-2 ">
                                                    <span class="font-14 weight-700 purple-color-2 ">Received USDT</span>
                                                    <span class="font-10 weight-400 purple-color-2 ">12 Nov, 2020</span>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="d-flex flex-column align-items-end ">
                                                <span class="font-16 weight-700 purple-color-2 ">-$1,289.00</span>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="d-flex flex-row ">
                                                <div class="d-flex flex-row justify-content-center align-items-center square round-corner-small light-orange-bg-color orange-color font-14 ">
                                                    <i class="fas fa-long-arrow-alt-up "></i>
                                                </div>
                                                <div class="d-flex flex-column ps-2 ">
                                                    <span class="font-14 weight-700 purple-color-2 ">Sent XRP</span>
                                                    <span class="font-10 weight-400 purple-color-2 ">12 Nov, 2020</span>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="d-flex flex-column align-items-end ">
                                                <span class="font-16 weight-700 orange-color ">-$1,289.00</span>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="d-flex flex-row justify-content-between mt-2">
                            <span class="text-uppercase font-10 weight-600 grey-color-2">Security</span>
                            <span class="text-uppercase font-10 weight-600 purple-color-2 text-end">View All</span>
                        </div>
                        <div class="d-flex flex-row justify-content-between align-items-center grey-border round-corner px-4 py-3 mt-3">
                            <div>
                                <span class="d-block font-16 weight-400 purple-color-2">Identity</span>
                                <span class="d-block font-10 weight-400 purple-color-2">Disable</span>
                            </div>
                            <div class="onoffwrapper">
                                <input type="checkbox" name="toggle1" id="toggle1" class="onoff">
                                <label for="toggle1"></label>
                            </div>
                        </div>
                        <div class="d-flex flex-row justify-content-between align-items-center grey-border round-corner px-4 py-3 mt-3">
                            <div>
                                <span class="d-block font-16 weight-400 purple-color-2">Phone</span>
                                <span class="d-block font-10 weight-400 purple-color-2">Enable</span>
                            </div>
                            <div class="onoffwrapper">
                                <input type="checkbox" name="toggle2" id="toggle2" class="onoff" checked>
                                <label for="toggle2"></label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

<script src="./wallet.js"></script>

</html>