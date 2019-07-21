<!DOCTYPE html>
<html lang="en">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <!-- Meta, title, CSS, favicons, etc. -->
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="icon" href="<?php echo e(asset('gentella/images/logoKDCW.png')); ?>" type="image/ico" />
  <!-- <meta name="csrf-token" content="<?php echo csrf_field(); ?>" > -->
  <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

  <title>Inventaris | KeDai Computerworks</title>

  <!-- Bootstrap -->
  <link href="<?php echo e(asset('gentella/css/bootstrap.min.css')); ?>" rel="stylesheet">
  <!-- Font Awesome -->
  <link href="<?php echo e(asset('gentella/css/font-awesome.min.css')); ?>" rel="stylesheet">
  <!-- NProgress -->
  <link href="<?php echo e(asset('gentella/css/nprogress.css')); ?>" rel="stylesheet">
  <!-- iCheck -->
  <link href="<?php echo e(asset('gentella/css/green.css')); ?>" rel="stylesheet">

  <!-- bootstrap-progressbar -->
  <link href="<?php echo e(asset('gentella/css/bootstrap-progressbar-3.3.4.min.css')); ?>" rel="stylesheet">
  <!-- JQVMap -->
  <!-- <link href="<?php echo e(asset('gentella/css/dist/jqvmap.min.css')); ?>" rel="stylesheet" /> -->
  <!-- bootstrap-daterangepicker -->
  <link href="<?php echo e(asset('gentella/css/daterangepicker.css')); ?>" rel="stylesheet">

  <!-- Custom Theme Style -->
  <link href="<?php echo e(asset('gentella/css/custom.min.css')); ?>" rel="stylesheet">
  <link rel="stylesheet" href="<?php echo e(asset('gentella/css/style.css')); ?>">
  <link rel="stylesheet" href="<?php echo e(asset('gentella/css/sweetalert2.min.css')); ?>">
</head>

<!--   <?php if(session('berhasil')): ?>
    
    <script type="text/javascript">
      function status() {
      Swal.fire({
        type: 'success',
        title: '<?php echo e(session("berhasil")); ?>',
        showConfirmButton: false,
        timer: 1500
      })
    }
    </script>
    <?php elseif(session('gagal')): ?>
    <script type="text/javascript">
      function status() {
      Swal.fire({
        type: 'error',
        title: '<?php echo e(session("gagal")); ?>',
        showConfirmButton: false,
        timer: 1500
      })
    }
    </script>
    <?php endif; ?> -->

<body class="nav-md footer_fixed" >
  <div class="container body">
    <div class="main_container">
      <div class="col-md-3 left_col menu_fixed">
        <div class="left_col scroll-view">
          <div class="navbar nav_title" style="border: 0;">
            <a href="" class="site_title"><img src="<?php echo e(asset('gentella/images/header-logo.png')); ?>" alt="KeDai" width="200"></a>
          </div>

          <div class="clearfix"></div>

          <!-- menu profile quick info -->
          <div class="profile clearfix">
            <div class="profile_pic">
              <img src="<?php echo e(asset('gentella/images/img.jpg')); ?>" alt="..." class="img-circle profile_img">
            </div>
            <div class="profile_info">
              <span>Welcome,</span>
              <h2><?php echo e(Auth::user()->name); ?></h2>
            </div>
          </div>
          <!-- /menu profile quick info -->

          <br />

          <!-- sidebar menu -->
          <div id="sidebar-menu" class="main_menu_side hidden-print main_menu ">
            <div class="menu_section">
              <h3>General</h3>
              <ul class="nav side-menu">
                <li><a href="<?php echo e(route('home')); ?>"><i class="fa fa-home"></i> Home </a></li>
                <li><a href="<?php echo e(route('data-barang.index')); ?>"><i class="fa fa-edit"></i> Data Barang </a>
                </li>
                <li><a><i class="fa fa-desktop"></i> Tansaksi <span class="fa fa-chevron-down"></span></a>
                  <ul class="nav child_menu">
                    <li><a href="<?php echo e(route('peminjaman.index')); ?>">Peminjaman</a></li>
                    <li><a href="<?php echo e(route('pernahpinjam')); ?>">Data Barang Yang Pernah Di Pinjam</a></li>
                  </ul>
                </li>
                <li><a href="<?php echo e(route('user.index')); ?>"><i class="fa fa-child"></i> User </a></li>
              </ul>
            </div>

          </div>
          <!-- /sidebar menu -->
        </div>
      </div>

      <!-- top navigation -->
      <div class="top_nav">
        <div class="nav_menu">
          <nav>
            <div class="nav toggle">
              <a id="menu_toggle"><i class="fa fa-bars"></i></a>
            </div>

            <ul class="nav navbar-nav navbar-right">
              <li class="">
                <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown"
                  aria-expanded="false">
                  <img src="<?php echo e(asset('gentella/images/img.jpg')); ?>" alt=""><?php echo e(Auth::user()->name); ?>

                  <span class=" fa fa-angle-down"></span>
                </a>
                <ul class="dropdown-menu dropdown-usermenu pull-right">
                  <li><a 
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
          <i class="fa fa-sign-out pull-right"></i> Log Out</a></li>
                   <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" style="display: none;">
                                        <?php echo csrf_field(); ?>
                                    </form>

                </ul>
              </li>
            </ul>
          </nav>
        </div>
      </div>
      <!-- /top navigation -->


      <!-- page content -->
      <div class="right_col" role="main">
        <?php echo $__env->yieldContent('content'); ?>

      </div>
      <!-- /page content -->


    <!-- footer content -->
    <footer>
      <div class="pull-right">
        Inventaris - KeDai Computerworks
      </div>
      <div class="clearfix"></div>
    </footer>
    <!-- /footer content -->
  </div>
  </div>
  <script type="text/javascript">
    $('body').on('click', '#del_id', function(e){
      e.preventDefault();
      Swal.fire({
        title: 'Anda Yakin ?',
        text: "Anda tidak dapat mengembalikan data yang telah di hapus!",
        type: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Ya, Lanjutkan Hapus!',
        timer: 6500
      }).then((result) => {
          if (result.value) {
            var me = $(this),
                url = me.attr('href'),
                token = $('meta[name="csrf-token"]').attr('content');
                // var token = $('meta[name="csrf-token"]').attr('content');
                // var id = eval(document.getElementById('delete_id').value);
                // var endpoint= 'data-barang/'+id;
                $.ajax({
                  url: url,
                  method: "POST",
                  data : {
                    '_method' : 'DELETE',
                    '_token'  : token
                  },
                  success:function(data){
                    berhasil(data.status, data.pesan);
                    $('#table').DataTable().ajax.reload();
                  },
                  error: function(xhr, status, error){
                      var error = xhr.responseJSON; 
                      if ($.isEmptyObject(error) == false) {
                        $.each(error.errors, function(key, value) {
                          gagal(key, value);
                        });
                      }
                  } 
                });
        }
      });
    });

  function berhasil(status, pesan) {
      Swal.fire({
        type: status,
        title: pesan,
        showConfirmButton: true,
        timer: 5500,
        button: "Ok"
    })
  }

  function gagal(key, pesan) {
      Swal.fire({
        type: 'error',
        title:  key + ' : ' + pesan,
        showConfirmButton: true,
        timer: 5500,
        button: "Ok"
    })
  }
    
    // $('body').on('submit', '#delete_form', function(e){
    //   e.preventDefault();
    //   Swal.fire({
    //     title: 'Anda Yakin ?',
    //     text: "Anda tidak dapat mengembalikan data yang telah di hapus!",
    //     type: 'warning',
    //     showCancelButton: true,
    //     confirmButtonColor: '#3085d6',
    //     cancelButtonColor: '#d33',
    //     confirmButtonText: 'Ya, Lanjutkan Hapus!',
    //     timer: 6500
    //   }).then((result) => {
    //     if (result.value) {
    //             var request = new FormData(this);
    //             var token = $('#token').attr('value');
    //             var id = eval(document.getElementById('delete_id').value);
    //             var endpoint= 'data-barang/'+id;
    //             $.ajax({
    //               url: endpoint,
    //               method: "POST",
    //               data : request,
    //               contentType: false,
    //               cache: false,
    //               processData: false,
    //               success:function(data){
    //                 berhasil("Berhasil Menghapus Data");
    //                 $('#table').DataTable().ajax.reload();
    //               },
    //               error: function(xhr, status, error){
    //                   var error = xhr.responseJSON; 
    //                   if ($.isEmptyObject(error) == false) {
    //                     $.each(error.errors, function(key, value) {
    //                       gagal(key, value);
    //                     });
    //                   }
    //               } 
    //             });
    //     }
    //   });
    // });
          // $("#delete_form").submit();
          // console.log(result);
          // Swal.fire(
          //   'Deleted!',
          //   'Your file has been deleted.',
          //   'success'
          // )
      // }

  

    function perubahan() {
      Swal.fire({
        type: 'success',
        title: 'Data Barang Berhasil Di Ubah',
        showConfirmButton: false,
        timer: 1500
      })
    }

  //   $('#insertdata').submit(function(e){
  //   e.preventDefault();
  //   var request = $('#confirm-add form');

  //       $.ajax({
  //         url: '<?php echo e(route("data-barang.store")); ?>',
  //         method: "POST",
  //         data: request.serialize(),
  //         contentType: false,
  //         cache: false,
  //         processData: false,
  //         success:function(){
  //               alert('berhasil');
  //         },
  //         error:function(){
  //                alert('wew');
  //         }
  //       });
  // });
// 
  </script>
 <!--  <script src="//code.jquery.com/jquery.js"></script>
  <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script> -->
  <!-- jQuery -->
  <script src="<?php echo e(asset('gentella/js/jquery.min.js')); ?>"></script>
  <!-- <script src="<?php echo e(asset('js/jquery.js')); ?>"></script> -->
  <!-- Bootstrap -->
  <!-- <script src="<?php echo e(asset('js/app.js')); ?>"></script> -->
  <script src="<?php echo e(asset('gentella/js/bootstrap.min.js')); ?>"></script>
  <!-- FastClick -->
  <script src="<?php echo e(asset('gentella/js/fastclick.js')); ?>"></script>
  <!-- NProgress -->
  <script src="<?php echo e(asset('gentella/js/nprogress.js')); ?>"></script>
  <!-- Chart.js -->
  <script src="<?php echo e(asset('gentella/js/Chart.min.js')); ?>"></script>
  <!-- gauge.js -->
  <script src="<?php echo e(asset('gentella/js/gauge.min.js')); ?>"></script>
  <!-- bootstrap-progressbar -->
  <script src="<?php echo e(asset('gentella/js/bootstrap-progressbar.min.js')); ?>"></script>
  <!-- iCheck -->
  <script src="<?php echo e(asset('gentella/js/icheck.min.js')); ?>"></script>
  <!-- Skycons -->
  <script src="<?php echo e(asset('gentella/js/skycons.js')); ?>"></script>
  <!-- Flot -->
  <script src="<?php echo e(asset('gentella/js/jquery.flot.js')); ?>"></script>
  <script src="<?php echo e(asset('gentella/js/jquery.flot.pie.js')); ?>"></script>
  <script src="<?php echo e(asset('gentella/js/jquery.flot.time.js')); ?>"></script>
  <script src="<?php echo e(asset('gentella/js/jquery.flot.stack.js')); ?>"></script>
  <script src="<?php echo e(asset('gentella/js/jquery.flot.resize.js')); ?>"></script>
  <!-- Flot plugins -->
  <script src="<?php echo e(asset('gentella/js/jquery.flot.orderBars.js')); ?>"></script>
  <script src="<?php echo e(asset('gentella/js/jquery.flot.spline.min.js')); ?>"></script>
  <script src="<?php echo e(asset('gentella/js/curvedLines.js')); ?>"></script>
  <!-- DateJS -->
  <script src="<?php echo e(asset('gentella/js/date.js')); ?>"></script>
  <!-- JQVMap -->
  <script src="<?php echo e(asset('gentella/js/jquery.vmap.js')); ?>"></script>
  <script src="<?php echo e(asset('gentella/js/jquery.vmap.world.js')); ?>"></script>
  <script src="<?php echo e(asset('gentella/js/jquery.vmap.sampledata.js')); ?>"></script>
  <!-- bootstrap-daterangepicker -->
  <script src="<?php echo e(asset('gentella/js/moment.min.js')); ?>"></script>
  <script src="<?php echo e(asset('gentella/js/daterangepicker.js')); ?>"></script>

  <!-- Custom Theme Scripts -->
  <script src="<?php echo e(asset('gentella/js/custom.min.js')); ?>"></script>
  <!-- datatable -->
  <script src="<?php echo e(asset('gentella/js/jquery.dataTables.min.js')); ?>"></script>
  <script src="<?php echo e(asset('gentella/js/dataTables.bootstrap.min.js')); ?>"></script>
  <script src="<?php echo e(asset('gentella/js/dataTables.buttons.min.js')); ?>"></script>
  <script src="<?php echo e(asset('gentella/js/buttons.bootstrap.min.js')); ?>"></script>
  <script src="<?php echo e(asset('gentella/js/buttons.flash.min.js')); ?>"></script>
  <script src="<?php echo e(asset('gentella/js/buttons.html5.min.js')); ?>"></script>
  <script src="<?php echo e(asset('gentella/js/buttons.print.min.js')); ?>"></script>

  <!-- sweet alert -->
  <script src="<?php echo e(asset('gentella/js/sweetalert2.all.min.js')); ?>"></script>




</body>

</html>