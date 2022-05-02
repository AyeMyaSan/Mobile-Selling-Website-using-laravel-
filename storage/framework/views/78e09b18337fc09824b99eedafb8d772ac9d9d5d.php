
<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>DashBoard</title>
  <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
  <link href="css/theme.css" rel="stylesheet" media="all">
</head>
<body class="animsition">
     <div class="page-wrapper">
    
    <div class="page-container">
      <header class="header-desktop">
        <div class="section__content section__content--p30">
          <div class="container-fluid">
            <div class="header-wrap">
              <form class="form-header" action="" method="POST">
                <input class="au-input au-input--xl" type="text" name="search" placeholder="Search for datas &amp; reports..." />
                <button class="au-btn--submit" type="submit">
                  <i class="zmdi zmdi-search"></i>
                </button>
              </form>
              <div class="header-button">
                <div class="noti-wrap">
                  <div class="noti__item js-item-menu">
                    <i class="zmdi zmdi-comment-more"></i>
                    <span class="quantity">1</span>
                  </div>
                  <div class="noti__item js-item-menu">
                    <i class="zmdi zmdi-email"></i>
                    <span class="quantity">1</span>
                  </div>
                  <div class="noti__item js-item-menu">
                    <i class="zmdi zmdi-notifications"></i>
                    <span class="quantity">4</span>
                  </div>
                </div>
                <div class="account-wrap">
                  <div class="account-item clearfix js-item-menu">
                    <div class="image">
                      <img src="images/paper.jpg" alt="Account" />
                    </div>
                    <div class="content">
                      <button type="button" class="btn  dropdown-toggle" data-toggle="dropdown">
                          AccountName               
                      </button>
                    <div class="dropdown-menu">
                      <a class="dropdown-item" href="#">Account</a>
                      <a class="dropdown-item" href="#">Setting</a>
                      <a class="dropdown-item" href="#">Billing</a>
                      <a class="dropdown-item" href="#">Log out</a>
                    </div>
                  </div> 
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </header>
    
    
    <aside class="menu-sidebar d-none d-lg-block">
      <div class="logo">
        <a href="#">
          <img src="#" alt="Logo" />
        </a>
      </div>
      <div class="menu-sidebar__content js-scrollbar1">
        <nav class="navbar-sidebar">
          <ul class="list-unstyled navbar__list">
            <li>
              
                <i class="fas fa-chart-bar">
                 <div class="dropdown">
  <button type="button" class="btn  dropdown-toggle" data-toggle="dropdown">
    My Post
  </button>
  <div class="dropdown-menu">
    <a class="dropdown-item" href="#">Link 1</a>
    <a class="dropdown-item" href="#">Link 2</a>
    <a class="dropdown-item" href="#">Link 3</a>
  </div>
</div> 
                </i>
              </li>
              <li>
            <li>
              <a href="products.html">
                <i class="fas fa-chart-bar"></i>Add Products</a>
              </li>
              <li>
                <a href="table.html">
                  <i class="fas fa-table"></i>Add News</a>
                </li>                  
                  <li>
                    <a href="#">
                      <i class="fas fa-calendar-alt"></i>Inbox</a>
                    </li>
                    <li>
                    <a href="#">
                      <i class="fas fa-calendar-alt"></i>Outbox</a>
                    </li>
                    <li>
                    <a href="#">
                      <i class="fas fa-calendar-alt"></i>Orders</a>
                    </li>
                    <li>
                      <a href="map.html">
                        <i class="fas fa-map-marker-alt"></i>Customers</a>
                      </li>
                    <li>
                      <a href="map.html">
                        <i class="fas fa-map-marker-alt"></i>Reviews</a>
                    </li>
                    </ul>
                  </nav>
                </div>
              </aside>
              
              
              <div class="page-container">
                <div class="main-content">
                  <div class="section__content section__content--p30">
                    <div class="container-fluid">
                      <div class="row">
                        <div class="col-md-12">
                          <div class="overview-wrap">
                            <h2 class="title-1">overview</h2>
                            <button class="au-btn au-btn-icon au-btn--blue">
                              <i class="zmdi zmdi-plus"></i>add item</button>
                            </div>
                          </div>
                        </div>
                        <div class="row m-t-25">
                          <div class="col-sm-6 col-lg-3">
                            <div class="overview-item overview-item--c1">
                              <div class="overview__inner">
                                <div class="overview-box clearfix">
                                  <div class="icon">
                                    <i class="zmdi zmdi-account-o"></i>
                                  </div>
                                  <div class="text">
                                    <h2>10368</h2>
                                    <span>members online</span>
                                  </div>
                                </div>
                                <div class="overview-chart">
                                  <canvas id="widgetChart1"></canvas>
                                </div>
                              </div>
                            </div>
                          </div>
          <div class="col-sm-6 col-lg-3">
            <div class="overview-item overview-item--c2">
              <div class="overview__inner">
                <div class="overview-box clearfix">
                  <div class="icon">
                    <i class="zmdi zmdi-shopping-cart"></i>
                  </div>
                                  <div class="text">
                                    <h2>388,688</h2>
                                    <span>items solid</span>
                                  </div>
                  </div>
                  <div class="overview-chart">
                    <canvas id="widgetChart2"></canvas>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-sm-6 col-lg-3">
              <div class="overview-item overview-item--c3">
                <div class="overview__inner">
                  <div class="overview-box clearfix">
                    <div class="icon">
                      <i class="zmdi zmdi-calendar-note"></i>
                    </div>
                                  <div class="text">
                                    <h2>1,086</h2>
                                    <span>this week</span>
                                  </div>
                  </div>
                  <div class="overview-chart">
                    <canvas id="widgetChart3"></canvas>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-sm-6 col-lg-3">
              <div class="overview-item overview-item--c4">
                <div class="overview__inner">
                  <div class="overview-box clearfix">
                    <div class="icon">
                      <i class="zmdi zmdi-money"></i>
                    </div>
                                  <div class="text">
                                    <h2>$1,060,386</h2>
                                    <span>total earnings</span>
                                  </div>
                  </div>
                  <div class="overview-chart">
                    <canvas id="widgetChart4"></canvas>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-lg-6">
              <div class="au-card recent-report">
                <div class="au-card-inner">
                    <h3 class="title-2">recent reports</h3>
                  <div class="chart-info">
                    <div class="chart-info__left">
                      <div class="chart-note">
                        <span class="dot dot--blue"></span>
                        <span>products</span>
                      </div>
                      <div class="chart-note mr-0">
                        <span class="dot dot--green"></span>
                        <span>services</span>
                      </div>
                    </div>
                    <div class="chart-info__right">
                      <div class="chart-statis">
                        <span class="index incre">
                        <i class="zmdi zmdi-long-arrow-up"></i>25%</span>
                        <span class="label">products</span>
                      </div>
                      <div class="chart-statis mr-0">
                        <span class="index decre">
                        <i class="zmdi zmdi-long-arrow-down"></i>10%</span>
                        <span class="label">services</span>
                      </div>
                    </div>
                  </div>
                  <div class="recent-report__chart">
                    <canvas id="recent-rep-chart"></canvas>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-6">
              <div class="au-card chart-percent-card">
                <div class="au-card-inner">
                    <h3 class="title-2 tm-b-5">char by %</h3>
                  <div class="row no-gutters">
                    <div class="col-xl-6">
                      <div class="chart-note-wrap">
                        <div class="chart-note mr-0 d-block">
                          <span class="dot dot--blue"></span>
                          <span>products</span>
                        </div>
                        <div class="chart-note mr-0 d-block">
                          <span class="dot dot--red"></span>
                          <span>services</span>
                        </div>
                      </div>
                    </div>
                    <div class="col-xl-6">
                      <div class="percent-chart">
                        <canvas id="percent-chart"></canvas>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-lg-9">
              <h2 class="title-1 m-b-25">Earnings By Items</h2>
                <div class="table-responsive table--no-card m-b-40">
                  <table class="table table-borderless table-striped table-earning">
                    <thead>
                      <tr>
                        <th>date</th>
                        <th>order ID</th>
                        <th>item name</th>
                        <th class="text-right">unit price</th>
                        <th class="text-right">quantity</th>
                        <th class="text-right">total</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>2018-09-29 05:57</td>
                        <td>100398</td>
                        <td>iPhone X 64Gb Grey</td>
                        <td class="text-right">$999.00</td>
                        <td class="text-right">1</td>
                        <td class="text-right">$999.00</td>
                      </tr>
                      <tr>
                        <td>2018-09-28 01:22</td>
                        <td>100397</td>
                        <td>Samsung S8 Black</td>
                        <td class="text-right">$756.00</td>
                        <td class="text-right">1</td>
                        <td class="text-right">$756.00</td>
                      </tr>
                      <tr>
                        <td>2018-09-27 02:12</td>
                        <td>100396</td>
                        <td>Game Console Controller</td>
                        <td class="text-right">$22.00</td>
                        <td class="text-right">2</td>
                        <td class="text-right">$44.00</td>
                      </tr>
                      <tr>
                        <td>2018-09-26 23:06</td>
                        <td>100395</td>
                        <td>iPhone X 256Gb Black</td>
                        <td class="text-right">$1199.00</td>
                        <td class="text-right">1</td>
                        <td class="text-right">$1199.00</td>
                      </tr>
                      <tr>
                        <td>2018-09-25 19:03</td>
                        <td>100393</td>
                        <td>USB 3.0 Cable</td>
                        <td class="text-right">$10.00</td>
                        <td class="text-right">3</td>
                        <td class="text-right">$30.00</td>
                      </tr>
                      <tr>
                        <td>2018-09-29 05:57</td>
                        <td>100392</td>
                        <td>Smartwatch 4.0 LTE Wifi</td>
                        <td class="text-right">$199.00</td>
                        <td class="text-right">6</td>
                        <td class="text-right">$1494.00</td>
                      </tr>
                      <tr>
                        <td>2018-09-24 19:10</td>
                        <td>100391</td>
                        <td>Camera C430W 4k</td>
                        <td class="text-right">$699.00</td>
                        <td class="text-right">1</td>
                        <td class="text-right">$699.00</td>
                      </tr>
                      <tr>
                        <td>2018-09-22 00:43</td>
                        <td>100393</td>
                        <td>USB 3.0 Cable</td>
                        <td class="text-right">$10.00</td>
                        <td class="text-right">3</td>
                        <td class="text-right">$30.00</td>
                      </tr>
                    </tbody>
                  </table>
              </div>
            </div>
            <div class="col-lg-3">
              <h2 class="title-1 m-b-25">Top countries</h2>
                <div class="au-card au-card--bg-blue au-card-top-countries m-b-40">
                  <div class="au-card-inner">
                    <div class="table-responsive">
                      <table class="table table-top-countries">
                        <tbody>
                          <tr>
                            <td>United States</td>
                            <td class="text-right">$119,366.96</td>
                          </tr>
                          <tr>
                            <td>Australia</td>
                            <td class="text-right">$70,261.65</td>
                          </tr>
                          <tr>
                            <td>United Kingdom</td>
                            <td class="text-right">$46,399.22</td>
                          </tr>
                          <tr>
                            <td>Turkey</td>
                            <td class="text-right">$35,364.90</td>
                          </tr>
                          <tr>
                            <td>Germany</td>
                            <td class="text-right">$20,366.96</td>
                          </tr>
                          <tr>
                            <td>France</td>
                            <td class="text-right">$10,366.96</td>
                          </tr>
                          <tr>
                            <td>Australia</td>
                            <td class="text-right">$5,366.96</td>
                          </tr>
                          <tr>
                            <td>Italy</td>
                            <td class="text-right">$1639.32</td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
            </div>                 
          </div>
        </div>
        <!-- DATA TABLE-->
            <section class="p-t-20">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <h3 class="title-5 m-b-35">data table</h3>
                            <div class="table-data__tool">
                                <div class="table-data__tool-left">
                                    <div class="rs-select2--light rs-select2--md">
                                        <select class="js-select2" name="property">
                                            <option selected="selected">Mobile</option>
                                            <option value="">Laptop</option>
                                            <option value="">Tablet</option>
                                            <option value="">Desktop</option>
                                        </select>
                                        <div class="dropDownSelect2"></div>
                                    </div>
                                    <div class="rs-select2--light rs-select2--sm">
                                        <select class="js-select2" name="time">
                                            <option selected="selected">Today</option>
                                            <option value="">1 Week</option>
                                            <option value="">1 Month</option>
                                            <option value="">1 Year</option>
                                        </select>
                                        <div class="dropDownSelect2"></div>
                                    </div>
                                    
                                </div>
                                
                            </div>
                            <div class="table-responsive table-responsive-data2">
                                <table class="table table-data2">
                                    <thead>
                                        <tr>
                                            <th>
                                                <label class="au-checkbox">
                                                    <input type="checkbox">
                                                    <span class="au-checkmark"></span>
                                                </label>
                                            </th>
                                            <th>name</th>
                                            <th>email</th>
                                            <th>description</th>
                                            <th>date</th>
                                            <th>status</th>
                                            <th>price</th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr class="tr-shadow">
                                            <td>
                                                <label class="au-checkbox">
                                                    <input type="checkbox">
                                                    <span class="au-checkmark"></span>
                                                </label>
                                            </td>
                                            <td>Lori Lynch</td>
                                            <td>
                                                <span class="block-email">lori@example.com</span>
                                            </td>
                                            <td class="desc">Samsung S8 Black</td>
                                            <td>2018-09-27 02:12</td>
                                            <td>
                                                <span class="status--process">Processed</span>
                                            </td>
                                            <td>$679.00</td>
                                            <td>
                                                <div class="table-data-feature">
                                                    <button class="item" data-toggle="tooltip" data-placement="top" title="Send">
                                                        <i class="zmdi zmdi-mail-send"></i>
                                                    </button>
                                                    <button class="item" data-toggle="tooltip" data-placement="top" title="Edit">
                                                        <i class="zmdi zmdi-edit"></i>
                                                    </button>
                                                    <button class="item" data-toggle="tooltip" data-placement="top" title="Delete">
                                                        <i class="zmdi zmdi-delete"></i>
                                                    </button>
                                                    <button class="item" data-toggle="tooltip" data-placement="top" title="More">
                                                        <i class="zmdi zmdi-more"></i>
                                                    </button>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr class="spacer"></tr>
                                        <tr class="tr-shadow">
                                            <td>
                                                <label class="au-checkbox">
                                                    <input type="checkbox">
                                                    <span class="au-checkmark"></span>
                                                </label>
                                            </td>
                                            <td>Lori Lynch</td>
                                            <td>
                                                <span class="block-email">john@example.com</span>
                                            </td>
                                            <td class="desc">iPhone X 64Gb Grey</td>
                                            <td>2018-09-29 05:57</td>
                                            <td>
                                                <span class="status--process">Processed</span>
                                            </td>
                                            <td>$999.00</td>
                                            <td>
                                                <div class="table-data-feature">
                                                    <button class="item" data-toggle="tooltip" data-placement="top" title="Send">
                                                        <i class="zmdi zmdi-mail-send"></i>
                                                    </button>
                                                    <button class="item" data-toggle="tooltip" data-placement="top" title="Edit">
                                                        <i class="zmdi zmdi-edit"></i>
                                                    </button>
                                                    <button class="item" data-toggle="tooltip" data-placement="top" title="Delete">
                                                        <i class="zmdi zmdi-delete"></i>
                                                    </button>
                                                    <button class="item" data-toggle="tooltip" data-placement="top" title="More">
                                                        <i class="zmdi zmdi-more"></i>
                                                    </button>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr class="spacer"></tr>
                                        <tr class="tr-shadow">
                                            <td>
                                                <label class="au-checkbox">
                                                    <input type="checkbox">
                                                    <span class="au-checkmark"></span>
                                                </label>
                                            </td>
                                            <td>Lori Lynch</td>
                                            <td>
                                                <span class="block-email">lyn@example.com</span>
                                            </td>
                                            <td class="desc">iPhone X 256Gb Black</td>
                                            <td>2018-09-25 19:03</td>
                                            <td>
                                                <span class="status--denied">Denied</span>
                                            </td>
                                            <td>$1199.00</td>
                                            <td>
                                                <div class="table-data-feature">
                                                    <button class="item" data-toggle="tooltip" data-placement="top" title="Send">
                                                        <i class="zmdi zmdi-mail-send"></i>
                                                    </button>
                                                    <button class="item" data-toggle="tooltip" data-placement="top" title="Edit">
                                                        <i class="zmdi zmdi-edit"></i>
                                                    </button>
                                                    <button class="item" data-toggle="tooltip" data-placement="top" title="Delete">
                                                        <i class="zmdi zmdi-delete"></i>
                                                    </button>
                                                    <button class="item" data-toggle="tooltip" data-placement="top" title="More">
                                                        <i class="zmdi zmdi-more"></i>
                                                    </button>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr class="spacer"></tr>
                                        <tr class="tr-shadow">
                                            <td>
                                                <label class="au-checkbox">
                                                    <input type="checkbox">
                                                    <span class="au-checkmark"></span>
                                                </label>
                                            </td>
                                            <td>Lori Lynch</td>
                                            <td>
                                                <span class="block-email">doe@example.com</span>
                                            </td>
                                            <td class="desc">Camera C430W 4k</td>
                                            <td>2018-09-24 19:10</td>
                                            <td>
                                                <span class="status--process">Processed</span>
                                            </td>
                                            <td>$699.00</td>
                                            <td>
                                                <div class="table-data-feature">
                                                    <button class="item" data-toggle="tooltip" data-placement="top" title="Send">
                                                        <i class="zmdi zmdi-mail-send"></i>
                                                    </button>
                                                    <button class="item" data-toggle="tooltip" data-placement="top" title="Edit">
                                                        <i class="zmdi zmdi-edit"></i>
                                                    </button>
                                                    <button class="item" data-toggle="tooltip" data-placement="top" title="Delete">
                                                        <i class="zmdi zmdi-delete"></i>
                                                    </button>
                                                    <button class="item" data-toggle="tooltip" data-placement="top" title="More">
                                                        <i class="zmdi zmdi-more"></i>
                                                    </button>
                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- END DATA TABLE-->
      </div>
      
      <!-- COPYRIGHT-->
            <section class="p-t-60 p-b-20">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="copyright">
                                <p>Copyright © 2019 Intern. All rights reserved. Project by <a href="https://google.com">Google</a>.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- END COPYRIGHT-->
    </div>
  </div>
</body>
</html> 

                  <?php /**PATH C:\xampp\htdocs\blog\resources\views/home.blade.php ENDPATH**/ ?>