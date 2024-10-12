<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--     Fonts and icons     -->
    <link rel="stylesheet" type="text/css"
        href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900|Roboto+Slab:400,700" />

    <!-- Nucleo Icons -->
    <link href="./assets/css/nucleo-icons.css" rel="stylesheet" />
    <link href="./assets/css/nucleo-svg.css" rel="stylesheet" />

    <!-- Font Awesome Icons -->
    <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>

    <!-- Material Icons -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet">

    <!-- CSS Files -->
    <link rel="stylesheet" href="assets/css/material-dashboard.min.css">
    <title>Document</title>
</head>


<body class="g-sidenav-show  bg-gray-100">

<footer class="footer py-4  ">
                  <div class="container-fluid">
                    <div class="row align-items-center justify-content-lg-between">
                      <div class="col-lg-6 mb-lg-0 mb-4">
                        <div class="copyright text-center text-sm text-muted text-lg-start">
                          © <script>
                            document.write(new Date().getFullYear())
                          </script>,
                          made with <i class="fa fa-heart"></i> by
                          <a href="https://www.creative-tim.com" class="font-weight-bold" target="_blank">Creative Tim</a>
                          for a better web.
                        </div>
                      </div>
                    </div>
                  </div>
                </footer>
        

<!--   Core JS Files   -->
<script src="assets/js/core/popper.min.js" ></script>
<script src="assets/js/core/bootstrap.min.js" ></script>
<script src="assets/js/plugins/perfect-scrollbar.min.js" ></script>
<script src="assets/js/plugins/smooth-scrollbar.min.js" ></script>
<script src="assets/js/material-dashboard.min.js" ></script>



<script>
    document.getElementById('iconNavbarSidenav').addEventListener('click', function() {
        var sidenav = document.getElementById('sidenav-main');
        if (sidenav.classList.contains('g-sidenav-pinned')) {
            sidenav.classList.remove('g-sidenav-pinned');
        } else {
            sidenav.classList.add('g-sidenav-pinned');
        }
    });
</script>


</body>

</html>