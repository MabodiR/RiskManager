
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="../assets/img/favicon.png">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <title>
    Risk Manager
  </title>


  <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css"> -->
  <link rel="stylesheet" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.3/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.3/js/bootstrap.min.js"></script>



  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
  <!-- Nucleo Icons -->
  <link href="../assets/css/nucleo-icons.css" rel="stylesheet" />
  <link href="../assets/css/nucleo-svg.css" rel="stylesheet" />
  <!-- Font Awesome Icons -->
  <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
  <link href="../assets/css/nucleo-svg.css" rel="stylesheet" />
  <!-- CSS Files -->
  <link id="pagestyle" href="../assets/css/soft-ui-dashboard.css?v=1.0.7" rel="stylesheet" />
 

  <style>
        /* Stripe the table rows */
        table.table-striped tbody tr:nth-child(odd) {
            background-color: #ccc;
        }
         /* Set font to Helvetica */
        body {
            font-family: "Helvetica", Arial, sans-serif;
        }
        .bg-red {
            background-color: #a60000;
            padding: 10px;
            border-radius:4px;
            }

        .fa{
            padding: 5px;
            cursor: pointer;
        }

        .red{ color:red;}

        .blue{ color:blue;}
        .green{ color:green;}

    </style>
</head>

<body class="g-sidenav-show  bg-gray-100">
  <aside class="sidenav navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-3 " id="sidenav-main">
    <div class="sidenav-header">
      <i class="fas fa-times p-3 cursor-pointer text-secondary opacity-5 position-absolute end-0 top-0 d-none d-xl-none" aria-hidden="true" id="iconSidenav"></i>
      <a class="navbar-brand m-0" href="/" target="_blank">
        <img src="../assets/img/logo-ct-dark.png" class="navbar-brand-img h-100" alt="main_logo">
        <span class="ms-1 font-weight-bold">Risk Manager Dashboard</span>
      </a>
    </div>
    <hr class="horizontal dark mt-0">
    <div class="collapse navbar-collapse  w-auto " id="sidenav-collapse-main">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link  active" href="/">
            <div class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
              <svg width="12px" height="12px" viewBox="0 0 45 40" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                <title>shop </title>
                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                  <g transform="translate(-1716.000000, -439.000000)" fill="#FFFFFF" fill-rule="nonzero">
                    <g transform="translate(1716.000000, 291.000000)">
                      <g transform="translate(0.000000, 148.000000)">
                        <path class="color-background opacity-6" d="M46.7199583,10.7414583 L40.8449583,0.949791667 C40.4909749,0.360605034 39.8540131,0 39.1666667,0 L7.83333333,0 C7.1459869,0 6.50902508,0.360605034 6.15504167,0.949791667 L0.280041667,10.7414583 C0.0969176761,11.0460037 -1.23209662e-05,11.3946378 -1.23209662e-05,11.75 C-0.00758042603,16.0663731 3.48367543,19.5725301 7.80004167,19.5833333 L7.81570833,19.5833333 C9.75003686,19.5882688 11.6168794,18.8726691 13.0522917,17.5760417 C16.0171492,20.2556967 20.5292675,20.2556967 23.494125,17.5760417 C26.4604562,20.2616016 30.9794188,20.2616016 33.94575,17.5760417 C36.2421905,19.6477597 39.5441143,20.1708521 42.3684437,18.9103691 C45.1927731,17.649886 47.0084685,14.8428276 47.0000295,11.75 C47.0000295,11.3946378 46.9030823,11.0460037 46.7199583,10.7414583 Z"></path>
                        <path class="color-background" d="M39.198,22.4912623 C37.3776246,22.4928106 35.5817531,22.0149171 33.951625,21.0951667 L33.92225,21.1107282 C31.1430221,22.6838032 27.9255001,22.9318916 24.9844167,21.7998837 C24.4750389,21.605469 23.9777983,21.3722567 23.4960833,21.1018359 L23.4745417,21.1129513 C20.6961809,22.6871153 17.4786145,22.9344611 14.5386667,21.7998837 C14.029926,21.6054643 13.533337,21.3722507 13.0522917,21.1018359 C11.4250962,22.0190609 9.63246555,22.4947009 7.81570833,22.4912623 C7.16510551,22.4842162 6.51607673,22.4173045 5.875,22.2911849 L5.875,44.7220845 C5.875,45.9498589 6.7517757,46.9451667 7.83333333,46.9451667 L19.5833333,46.9451667 L19.5833333,33.6066734 L27.4166667,33.6066734 L27.4166667,46.9451667 L39.1666667,46.9451667 C40.2482243,46.9451667 41.125,45.9498589 41.125,44.7220845 L41.125,22.2822926 C40.4887822,22.4116582 39.8442868,22.4815492 39.198,22.4912623 Z"></path>
                      </g>
                    </g>
                  </g>
                </g>
              </svg>
            </div>
            <span class="nav-link-text ms-1">Dashboard</span>
          </a>
        </li>
       
      
      </ul>
    </div>
   
  </aside>
  <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
    <!-- Navbar -->
    <nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl" id="navbarBlur" navbar-scroll="true">
      <div class="container-fluid py-1 px-3">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
            <li class="breadcrumb-item text-sm"><a class="opacity-5 text-dark" href="javascript:;">Pages</a></li>
            <li class="breadcrumb-item text-sm text-dark active" aria-current="page">Dashboard</li>
          </ol>
          <h6 class="font-weight-bolder mb-0">Dashboard</h6>
        </nav>
        <div class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4" id="navbar">
          <div class="ms-md-auto pe-md-3 d-flex align-items-center">
            
          </div>
          <ul class="navbar-nav  justify-content-end">
            
            <li class="nav-item d-flex align-items-center">
              <a href="javascript:;" class="nav-link text-body font-weight-bold px-0">
                <i class="fa fa-user me-sm-1"></i>
                <span class="d-sm-inline d-none">Rofhiwa Mabodi</span>
              </a>
            </li>
      
          </ul>
        </div>
      </div>
    </nav>
    <!-- End Navbar -->
    <div class="container-fluid py-4">
      
     
      

      <div class="row my-4">
        <div class="col-lg-12 col-md-12 mb-md-0 mb-4">
          <div class="card">
            <div class="card-header pb-0">
              <div class="row">
                <div class="col-lg-6 col-7">
                  <h6>Risk Owner</h6>
                </div>
                <div class="col-lg-6 col-5 my-auto text-end">
                  <div class="dropdown float-lg-end pe-4">
                    <a class="btn bg-gradient-dark mb-0" id="addRiskOwnerModalBtn" data-toggle="modal" data-target="#addRiskOwnerModal"><i class="fas fa-plus" aria-hidden="true"></i>&nbsp;&nbsp;Add Risk Owner</a>
                  </div>
                </div>
              </div>
            </div>
            <div class="card-body px-0 pb-2">
              <div class="table-responsive">
                <table class="table align-items-center mb-0">
                  <thead>
                    <tr>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Name</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Title</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Email</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Role</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7"></th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach($risks as $risk)
                    <tr>
                      <td>
                        <div class="d-flex px-2 py-1">
                          <div class="d-flex flex-column justify-content-center">
                            <h6 class="mb-0 text-sm">{{$risk->name}}</h6>
                          </div>
                        </div>
                      </td>
                      <td>
                        <span class="text-xs font-weight-bold"> {{$risk->title}}</span>
                      </td>
                      <td class="align-middle text-sm">
                        <span class="text-xs font-weight-bold"> {{$risk->email}} </span>
                      </td>
                      <td class="align-middle">
                      <span class="text-xs font-weight-bold"> {{$risk->role}} </span>
                      </td>
                      <td>
                             <i  class="fa fa-eye green view-riskOwner-btn" data-toggle="modal" data-target="#viewRiskOwnerModal" data-riskowner-id="{{ $risk->id }}"></i>
                                |
                             <i  class="fa fa-edit blue edit-riskOwner-btn" data-toggle="modal" data-target="#editRiskOwnerModal" data-riskowner-id="{{ $risk->id }}"></i>
                                |
                             <i class="fa fa-trash-o red delete-riskOwner" data-riskowner-id="{{ $risk->id }}"></i>
              
                      </td>
                    </tr>
                    @endforeach
                    
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>

      <!-- Add RiskOwner Modal -->
      <div class="modal fade" id="addRiskOwnerModal" tabindex="-1" role="dialog" aria-labelledby="addRiskOwnerModalLabel" aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered" role="document">
              <div class="modal-content">
                  <div class="modal-header">
                      <h5 class="modal-title" id="addRiskOwnerModalLabel">Add New Risk Owner</h5>
                      <button type="button" class="btn" data-bs-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                      </button>
                  </div>
                  <div class="modal-body">
                      <form id="addRiskOwnerForm" method="Post" action="/risks">
                      {{ csrf_field() }} <!-- Add Laravel CSRF token -->

                          <div class="form-group">
                              <label for="name">Name</label>
                              <input type="text" class="form-control" name="name" id="name" placeholder="Enter name">
                              <div class="invalid-feedback">
                                  Please enter a name.
                              </div>
                          </div>
                          <div class="form-group">
                              <label for="title">Title</label>
                              <input type="text" class="form-control" name="title" id="title" placeholder="Enter title">
                              <div class="invalid-feedback">
                                
                              </div>
                          </div>
                          <div class="form-group">
                              <label for="email">Email</label>
                              <input type="email" class="form-control" name="email" id="email" placeholder="Enter email">
                              <div class="invalid-feedback">
                                
                              </div>
                          </div>
                          <div class="form-group">
                              <label for="role">Role</label>
                              <input type="text" class="form-control" name="role" id="role" placeholder="Enter Role">
                              <div class="invalid-feedback">
                              
                              </div>
                          </div>
                      </form>
                  </div>
                  <div class="modal-footer">
                      <button type="button" class="btn btn-dark d-none" id="loadingButton" disabled>
                          <span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>
                      </button>
                      <button type="button" class="btn" data-bs-dismiss="modal">Close</button>
                      <button type="submit" class="btn btn-dark" id="saveButton">Create</button>
                  </div>
              </div>
          </div>
      </div>


        <!-- View RiskOwner Modal -->
        <div class="modal fade" id="viewRiskOwnerModal" tabindex="-1" role="dialog" aria-labelledby="viewRiskOwnerModalLabel" aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered" role="document">
              <div class="modal-content">
                  <div class="modal-header">
                      <h5 class="modal-title" id="viewRiskOwnerModalLabel">Risk Owner Info</h5>
                      <button type="button" class="btn" data-bs-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                      </button>
                  </div>
                  <div class="modal-body">
                      <form id="viewRiskOwnerForm" method="Post" action="/risks">
                      {{ csrf_field() }} <!-- Add Laravel CSRF token -->

                          <div class="form-group">
                              <label for="name">Name</label>
                              <input type="text" class="form-control" name="name" id="viewname" readonly>
                              <div class="invalid-feedback">
                                  Please enter a name.
                              </div>
                          </div>
                          <div class="form-group">
                              <label for="title">Title</label>
                              <input type="text" class="form-control" name="title" id="viewtitle" readonly>
                              <div class="invalid-feedback">
                                
                              </div>
                          </div>
                          <div class="form-group">
                              <label for="email">Email</label>
                              <input type="email" class="form-control" name="email" id="viewemail" readonly>
                              <div class="invalid-feedback">
                                
                              </div>
                          </div>
                          <div class="form-group">
                              <label for="role">Role</label>
                              <input type="text" class="form-control" name="role" id="viewrole" readonly>
                              <div class="invalid-feedback">
                              
                              </div>
                          </div>
                      </form>
                  </div>
                  <div class="modal-footer">
                      <button type="button" class="btn btn-dark d-none" id="loadingButton" disabled>
                          <span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>
                      </button>
                  </div>
              </div>
          </div>
      </div>



      <!-- Edit RiskOwner Modal -->
      <div class="modal fade" id="editRiskOwnerModal" tabindex="-1" role="dialog" aria-labelledby="editRiskOwnerModalLabel" aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered" role="document">
              <div class="modal-content">
                  <div class="modal-header">
                      <h5 class="modal-title" id="editRiskOwnerModalLabel">Edit Risk Owner</h5>
                      <button type="button" class="btn" data-bs-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                      </button>
                  </div>
                  <div class="modal-body">
                      <form id="editRiskOwnerForm" method="Post" action="/risks">
                      {{ csrf_field() }} <!-- Add Laravel CSRF token -->

                          <div class="form-group">
                              <label for="name">Name</label>
                              <input type="text" class="form-control" name="name" id="editname" placeholder="Enter name">
                              <div class="invalid-feedback">
                                  Please enter a name.
                              </div>
                          </div>
                          <div class="form-group">
                              <label for="title">Title</label>
                              <input type="text" class="form-control" name="title" id="edittitle" placeholder="Enter title">
                              <div class="invalid-feedback">
                                
                              </div>
                          </div>
                          <div class="form-group">
                              <label for="email">Email</label>
                              <input type="email" class="form-control" name="email" id="editemail" placeholder="Enter email">
                              <div class="invalid-feedback">
                                
                              </div>
                          </div>
                          <div class="form-group">
                              <label for="role">Role</label>
                              <input type="text" class="form-control" name="role" id="editrole" placeholder="Enter Role">
                              <div class="invalid-feedback">
                              
                              </div>
                          </div>
                      </form>
                  </div>
                  <div class="modal-footer">
                      <button type="button" class="btn btn-dark d-none" id="loadingButton" disabled>
                          <span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>
                      </button>
                     
                      <button type="submit" class="btn btn-dark" id="editButton">Update</button>
                  </div>
              </div>
          </div>
      </div>

      <!-- Delete Modal -->
      <div class="modal fade" id="confirmDeleteModal" tabindex="-1" role="dialog" aria-labelledby="confirmDeleteModalLabel" aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered" role="document">
              <div class="modal-content">
                  <div class="modal-header">
                      <h5 class="modal-title" id="confirmDeleteModalLabel">Confirm Delete</h5>
                      <button type="button" class="btn" data-bs-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                      </button>
                  </div>
                  <div class="modal-body">
                      Please confirm that you would like to delete this RiskOwner?
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-dark d-none" id="deleteLoadingButton" disabled>
                          <span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>
                      </button>
                      <button type="button" class="btn" data-bs-dismiss="modal">Cancel</button>
                      <button type="button" class="btn btn-dark" id="confirmDeleteBtn">Confirm</button>
                  </div>
              </div>
          </div>
      </div>

      </div>
      <footer class="footer pt-3  ">
        <div class="container-fluid">
          <div class="row align-items-center justify-content-lg-between">
            <div class="col-lg-6 mb-lg-0 mb-4">
              <div class="copyright text-center text-sm text-muted text-lg-start">
                © <script>
                  document.write(new Date().getFullYear())
                </script>,
                Risk Owner App by Rofhiwa Mabodi.
              </div>
            </div>
            
          </div>
        </div>
      </footer>
    </div>
  </main>

  <!--   Core JS Files   -->
  <script src="../assets/js/core/popper.min.js"></script>
  <script src="../assets/js/core/bootstrap.min.js"></script>
  <script src="../assets/js/plugins/perfect-scrollbar.min.js"></script>
  <script src="../assets/js/plugins/smooth-scrollbar.min.js"></script>

  <!--  -->
  <script src="{{asset("assets/js/risk/add.js")}}"></script>
  <script src="{{asset("assets/js/risk/edit.js")}}"></script>
  <script src="{{asset("assets/js/risk/view.js")}}"></script>
  <script src="{{asset("assets/js/risk/delete.js")}}"></script>

  <script>
    var win = navigator.platform.indexOf('Win') > -1;
    if (win && document.querySelector('#sidenav-scrollbar')) {
      var options = {
        damping: '0.5'
      }
      Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
    }
  </script>

  <!-- Control Center for Soft Dashboard: parallax effects-->
  <script src="../assets/js/soft-ui-dashboard.min.js?v=1.0.7"></script>
</body>

</html>