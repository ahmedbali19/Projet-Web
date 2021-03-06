<?php 
session_start();
if (isset ($_SESSION["Username"])){ 
require_once '../Core/clientC.php';
        $client=new clientC();
        $res=$client->afficherClient();

 ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" type="image/png" sizes="16x16" href="../plugins/images/favicon.png">
    <title>Table Clients</title>
    <!-- Bootstrap Core CSS -->
    <link href="../Tables/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="../plugins/bower_components/bootstrap-extension/css/bootstrap-extension.css" rel="stylesheet">
    <link href="../plugins/bower_components/datatables/jquery.dataTables.min.css" rel="stylesheet" type="text/css" />
    <link href="https://cdn.datatables.net/buttons/1.2.2/css/buttons.dataTables.min.css" rel="stylesheet" type="text/css" />
    <!-- Menu CSS -->
    <link href="../plugins/bower_components/sidebar-nav/dist/sidebar-nav.min.css" rel="stylesheet">
    <!-- animation CSS -->
    <link href="../Tables/css/animate.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="../Tables/css/style.css" rel="stylesheet">
    <!-- color CSS -->
    <link href="../Tables/css/colors/default.css" id="theme" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
</head>

<body class="fix-sidebar">
    <!-- Preloader -->
    
    <div id="wrapper">
       
        <!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row bg-title">
                    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                        <h4 class="page-title">Data Table</h4>
                    </div>
                    <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                      
                        <ol class="breadcrumb">
                            <li><a href="#">Dashboard</a></li>
                            <li><a href="#">Table</a></li>
                            <li class="active">Data Table</li>
                        </ol>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <!-- /row -->
                <div class="row">
            
                    <div class="col-sm-12">
                        <div class="white-box">
                            <h3 class="box-title m-b-0">Table Des Clients</h3>
                            <p class="text-muted m-b-30">Export data to Copy, CSV, Excel, PDF & Print</p>
                            <div class="table-responsive">
                                <table id="example23" class="display nowrap" cellspacing="0" width="100%">
                                    <thead>
                                        <tr>
                                            <th>Nom</th>
                                            <th>Prenom</th>
                                            <th>Tel</th>
                                            <th>adresse</th>
                                            <th>Code postal</th>
                                            <th>sexe</th>
                                            <th>cin</th>
                                            <th>email</th>
                                            <th>login</th>
                                            <th>password</th>
                                            <th>etat</th>
                                            <th>role</th>
                                            <th>Edit</th>
                                            <th>Delete</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>Nom</th>
                                            <th>Prenom</th>
                                            <th>Tel</th>
                                            <th>adresse</th>
                                            <th>Code postal</th>
                                            <th>sexe</th>
                                            <th>cin</th>
                                            <th>email</th>
                                            <th>login</th>
                                            <th>password</th>
                                            <th>etat</th>
                                            <th>role</th>
                                            <th>Edit</th>
                                            <th>Delete</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        <?php foreach ($res as $client) {
                                # code...
                            ?>
                                        <tr>
                                            <td><?php echo $client["nom"] ;?></td>
                                            <td><?php echo $client["prenom"] ;?></td>
                                            <td><?php echo $client["tel"] ;?></td>
                                            <td><?php echo $client["adresse"] ;?></td>
                                            <td><?php echo $client["codePostal"] ;?></td>
                                            <td><?php echo $client["sexe"] ;?></td>
                                            <td><?php echo $client["cin"] ;?></td>
                                            <td><?php echo $client["email"] ;?></td>
                                            <td><?php echo $client["login"] ;?></td>
                                            <td><?php echo $client["password"] ;?></td>
                                            <td><?php echo $client["etat"] ;?></td>
                                            <td><?php echo $client["role"] ;?></td>

                                            <td><a href="Editclient.php?id=<?php echo $client["idUtilisateur"];?>">Edit</a></td>
                                            <td><a href="../Core/delete.php?id=<?php echo $client["idUtilisateur"];?>"><?php ?>Delete</a></td>
                        
                                        </tr>
                                        <?php } ?>
                                       
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-sm-12">
                        <div class="white-box">
                            <h3 class="box-title m-b-0">Table Des Suggestions</h3>
                            <p class="text-muted m-b-30">Export data to Copy, CSV, Excel, PDF & Print</p>
                            <div class="table-responsive">
                               <?php require'afficherSuggestionTable.php';?>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-12">
                        <div class="white-box">
                            <h3 class="box-title m-b-0">Statistiques</h3>
                            <p class="text-muted m-b-30">Export data to Copy, CSV, Excel, PDF & Print</p>
                            <div class="table-responsive">
                               <?php require'statistique.php';?>
                            </div>
                        </div>
                    </div>
                                        
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </div>
        <!-- /#page-wrapper -->
    </div>
    <!-- /#wrapper -->
    <!-- jQuery -->
    <script src="../plugins/bower_components/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="../Tables/bootstrap/dist/js/tether.min.js"></script>
    <script src="../Tables/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="../plugins/bower_components/bootstrap-extension/js/bootstrap-extension.min.js"></script>
    <!-- Menu Plugin JavaScript -->
    <script src="../plugins/bower_components/sidebar-nav/dist/sidebar-nav.min.js"></script>
    <!--slimscroll JavaScript -->
    <script src="../Tables/js/jquery.slimscroll.js"></script>
    <!--Wave Effects -->
    <script src="../Tables/js/waves.js"></script>
    <!-- Custom Theme JavaScript -->
    <script src="../Tables/js/custom.min.js"></script>
    <!-- Sparkline chart JavaScript -->
    <script src="../plugins/bower_components/jquery-sparkline/jquery.sparkline.min.js"></script>
    <script src="../plugins/bower_components/jquery-sparkline/jquery.charts-sparkline.js"></script>
    <script src="../plugins/bower_components/datatables/jquery.dataTables.min.js"></script>
    <!-- start - This is for export functionality only -->
    <script src="https://cdn.datatables.net/buttons/1.2.2/js/dataTables.buttons.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.2.2/js/buttons.flash.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/2.5.0/jszip.min.js"></script>
    <script src="https://cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/pdfmake.min.js"></script>
    <script src="https://cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/vfs_fonts.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.2.2/js/buttons.html5.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.2.2/js/buttons.print.min.js"></script>
    <!-- end - This is for export functionality only -->
    <script>
    $(document).ready(function() {
        $('#myTable').DataTable();
        $(document).ready(function() {
            var table = $('#example').DataTable({
                "columnDefs": [{
                    "visible": false,
                    "targets": 2
                }],
                "order": [
                    [2, 'asc']
                ],
                "displayLength": 25,
                "drawCallback": function(settings) {
                    var api = this.api();
                    var rows = api.rows({
                        page: 'current'
                    }).nodes();
                    var last = null;

                    api.column(2, {
                        page: 'current'
                    }).data().each(function(group, i) {
                        if (last !== group) {
                            $(rows).eq(i).before(
                                '<tr class="group"><td colspan="5">' + group + '</td></tr>'
                            );

                            last = group;
                        }
                    });
                }
            });

            // Order by the grouping
            $('#example tbody').on('click', 'tr.group', function() {
                var currentOrder = table.order()[0];
                if (currentOrder[0] === 2 && currentOrder[1] === 'asc') {
                    table.order([2, 'desc']).draw();
                } else {
                    table.order([2, 'asc']).draw();
                }
            });
        });
    });
    $('#example23').DataTable({
        dom: 'Bfrtip',
        buttons: [
            'copy', 'csv', 'excel', 'pdf', 'print'
        ]
    });
      $('#example24').DataTable({
        dom: 'Bfrtip',
        buttons: [
            'copy', 'csv', 'excel', 'pdf', 'print'
        ]
    });
    </script>
    <!--Style Switcher -->
    <script src="../plugins/bower_components/styleswitcher/jQuery.style.switcher.js"></script>
</body>

</html>
<?php } else  header("location:../views/affichersuggestion.php")  ; ?>
