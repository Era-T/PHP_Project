<?php
 session_start();
 include_once 'headerS.php';
 require '../../includes/PHPMailer.php';
 require '../../includes/SMTP.php';
 require '../../includes/Exception.php';
 use PHPMailer\PHPMailer\PHPMailer;
 use PHPMailer\PHPMailer\SMTP;
 use PHPMailer\PHPMailer\Exception;

 $mail = new PHPMailer();
 $mail->isSMTP();
 $mail->Host="smtp.gmail.com";
 $mail->SMTPAuth = "true";
 $mail->SMTPSecure = "tls";
 $mail->Port = "587";
 $mail->Username = "albak6809@gmail.com";
 $mail->Password = "albaalba1";
 $mail->Subject = "Test Email Using PHPMailer";
 $mail->setFrom("albaalba1");

 $mail->Body="This is plain text email body";

 //receiver email address
 $mail->addAddress('albak6809@gmail.com');
  $mail->Send()
 $mail->smtpClose();

?>


                                      <!-- Sidebar Menu -->
                                      <nav class="mt-2">
                                        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                                          <li class="nav-item">
                                            <a href="profileP.php" class="nav-link">
                                              <i class="nav-icon fas fa-user"></i>
                                              <p>
                                                Profili i profesorit
                                              </p>
                                            </a>
                                          </li>
                                          <li class="nav-item">
                                            <a href="#" class="nav-link">
                                              <i class="nav-icon fas fa-copy"></i>
                                              <p>
                                                Detyrat e studenteve
                                                <i class="fas fa-angle-left right"></i>
                                              </p>
                                            </a>
                                            <ul class="nav nav-treeview">
                                              <li class="nav-item">
                                                <a href="Dorezimet.php" class="nav-link">
                                                  <i class="far fa-circle nav-icon"></i>
                                                  <p>Detyrat e dorezuara</p>
                                                </a>
                                              </li>
                                              <li class="nav-item">
                                                <a href="DetyratEVlersuara.php" class="nav-link">
                                                  <i class="far fa-circle nav-icon"></i>
                                                  <p>Detyrat e vlersuara</p>
                                                </a>
                                              </li>
                                            </ul>
                                          </li>
                                          <li class="nav-item">
                                            <a href="#" class="nav-link">
                                              <i class="nav-icon fas fa-copy"></i>
                                              <p>
                                                Lista e lendeve
                                                <i class="fas fa-angle-left right"></i>
                                              </p>
                                            </a>
                                            <ul class="nav nav-treeview">
                                              <li class="nav-item">
                                                <a href="../tables/ListaELendeveP.php" class="nav-link">
                                                  <i class="far fa-circle nav-icon"></i>
                                                  <p>Lista e lendeve</p>
                                                </a>
                                              </li>
                                            </ul>
                                          </li>
                                          <li class="nav-item">
                                            <a href="#" class="nav-link">
                                              <i class="nav-icon fas fa-chart-pie"></i>
                                              <p>
                                                FAQ
                                                <i class="right fas fa-angle-left"></i>
                                              </p>
                                            </a>
                                            <ul class="nav nav-treeview">
                                              <li class="nav-item">
                                                <a href="faqStudent.php" class="nav-link">
                                                  <i class="far fa-circle nav-icon"></i>
                                                  <p>FAQ</p>
                                                </a>
                                              </li>
                                              <li class="nav-item">
                                                <a href="../forms/RegjistroPyetje.php" class="nav-link">
                                                  <i class="far fa-circle nav-icon"></i>
                                                  <p>Bëjë pyetje</p>
                                                </a>
         </li>
    </nav>
  <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Compose</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="profileS.php">Home</a></li>
              <li class="breadcrumb-item active">Compose</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">

          <div class="col-md-9">
            <div class="card card-primary card-outline">
              <div class="card-header">
                <h3 class="card-title">Compose New Message</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
              <form id="myForm" method="post">
                <div class="form-group">
                  <input type="text" class="form-control" name="name" placeholder="Enter your name:">
                </div>
                <div class="form-group">
                  <input type="text" class="form-control" name="email" placeholder="Enter your email:">
                </div>
                <div class="form-group">
                  <input type="text" class="form-control" name="subject" placeholder="Subject:">
                </div>
                <div class="form-group">
                    <textarea id="body" rows="5" class="form-control" >
                    </textarea>
                </div>
                <div class="form-group">

                </div>
              </div>
              <!-- /.card-body -->
              <div class="card-footer">
                <div class="float-right">
                  <button type="button" class="btn btn-default"><i class="fas fa-pencil-alt"></i> Draft</button>
                  <button type="button" onclick="sendEmail()" name="submit" class="btn btn-primary" value="Send an email"><i class="far fa-envelope"></i> Send</button>
                </div>
                <button type="reset" class="btn btn-default"><i class="fas fa-times"></i> Discard</button>
              </div>
            </form>
              <!-- /.card-footer -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <div class="float-right d-none d-sm-block">
      <b>Version</b> 3.2.0
    </div>
    <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong> All rights reserved.
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="../../plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="../../dist/js/adminlte.min.js"></script>
<!-- Summernote -->
<script src="../../plugins/summernote/summernote-bs4.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../../dist/js/demo.js"></script>
<!-- Page specific script -->
<script>
  $(function () {
    //Add text editor
    $('#compose-textarea').summernote()
  })
</script>
</body>
</html>
