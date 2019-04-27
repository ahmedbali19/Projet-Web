<?php 
/*session_start();
if (isset ($_SESSION["Username"])){ */

require_once '../Core/suggestionC.php';
        $suggestion=new suggestionC();
        $res1=$suggestion->affichersuggestion();

 ?>

    
                                <table id="example24" class="display nowrap" cellspacing="0" width="100%">
                                    <thead>
                                        <tr>
                                            <th>Id Suggesstion</th>
                                            <th>Contenu</th>
                                            <th>Edit</th>
                                            <th>Delete</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                           <th>Id Suggesstion</th>
                                            <th>Contenu</th>
                                            <th>Edit</th>
                                            <th>Delete</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        <?php foreach ($res1 as $suggestion) {
                                # code...
                            ?>
                                        <tr>
                                            <td><?php echo $suggestion["idSuggestion"] ;?></td>
                                            <td><?php echo $suggestion["message"] ;?></td>
                                            <td><a href="Editsuggestion.php?id=<?php echo $suggestion["idSuggestion"];?>">Edit</a></td>
                                            <td><a href="../Core/sup.php?id=<?php echo $suggestion["idSuggestion"];?>"><?php ?>Delete</a></td>
                        
                                        </tr>
                                        <?php } ?>
                                       
                                    </tbody>
                                </table>
  
    <script>
  /*  $(document).ready(function() {
        $('#myTable').DataTable();
        $(document).ready(function() {
            var table1 = $('#example').DataTable({
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
    });*/
    </script>
    <!--Style Switcher 
    <script src="../plugins/bower_components/styleswitcher/jQuery.style.switcher.js"></script>-->

<?//php } else echo "Access Deny" ; ?>
