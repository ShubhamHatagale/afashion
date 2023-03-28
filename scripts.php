<!DOCTYPE html>
<html>

<head>
    <title>Title of the document</title>
    <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
    <!-- Ionicons -->

    <!-- Tempusdominus Bbootstrap 4 -->
    <link rel="stylesheet" href="plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
    <!-- iCheck -->
    <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <!-- JQVMap -->
    <link rel="stylesheet" href="plugins/jqvmap/jqvmap.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="dist/css/adminlte.min.css">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker.css">
    <!-- summernote -->
    <link rel="stylesheet" href="plugins/summernote/summernote-bs4.css">

    <link rel="stylesheet" href="plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
    <!-- Google Font: Source Sans Pro -->

    <!-- jQuery -->
    <script src="plugins/jquery/jquery.min.js"></script>
    <!-- jQuery UI 1.11.4 -->
    <script src="plugins/jquery-ui/jquery-ui.min.js"></script>
    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
    <script>
        $.widget.bridge('uibutton', $.ui.button)
    </script>
    <!-- Bootstrap 4 -->
    <script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- ChartJS -->
    <script src="plugins/chart.js/Chart.min.js"></script>
    <!-- Sparkline -->
    <script src="plugins/sparklines/sparkline.js"></script>
    <!-- JQVMap -->
    <script src="plugins/jqvmap/jquery.vmap.min.js"></script>
    <script src="plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
    <!-- jQuery Knob Chart -->
    <script src="plugins/jquery-knob/jquery.knob.min.js"></script>
    <!-- daterangepicker -->
    <script src="plugins/moment/moment.min.js"></script>
    <script src="plugins/daterangepicker/daterangepicker.js"></script>
    <!-- Tempusdominus Bootstrap 4 -->
    <script src="plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
    <!-- Summernote -->
    <script src="plugins/summernote/summernote-bs4.min.js"></script>
    <!-- overlayScrollbars -->
    <script src="plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
    <!-- AdminLTE App -->
    <script src="dist/js/adminlte.js"></script>
    <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
    <script src="dist/js/pages/dashboard.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="dist/js/demo.js"></script>
    <script src="plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
    <script src="plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
    <script src="plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
    <!-- AdminLTE App -->
    <!-- page script -->
    <script>
        $(function() {
            $("#example1").DataTable({
                "responsive": true,
                "autoWidth": false,
            });
            $('#example2').DataTable({
                "paging": true,
                "lengthChange": false,
                "searching": false,
                "ordering": true,
                "info": true,
                "autoWidth": false,
                "responsive": true,
            });
        });
    </script>

    <script>
        function getFileData(object) {
            var file = object.files[0];
            var name = file.name; //you can set the name to the paragraph id 
            document.getElementById('file_name').value = name; //set name using core javascript

        }
    </script>
    <script type="text/javascript">
        function edit(id) {
            //alert('hiii');
            var scriptUrl = 'firmEdit.php?ID=' + id;
            //alert(scriptUrl);
            window.open(scriptUrl, "_blank");
        }

        function del(id) {
            var r = confirm("Do you want to Cancel....?");
            if (r == true) {
                var scriptUrl = 'firmDelete.php?ID=' + id;
                $.ajax({
                    url: scriptUrl,
                    success: function(result) {
                        alert(result);
                        window.location.href = 'firm.php';
                    }
                });
            }
        }

        function chkVal() {
            var a = document.getElementById('fname').value;
            //alert(a);
            var scriptUrl = 'chkVal.php?ID=' + a;
            $.ajax({
                url: scriptUrl,
                success: function(result) {
                    //alert(result);
                    //window.location.href='firm.php';
                    if (result == 0) {
                        document.getElementById('fname').value = '';
                        alert('Firm Name Already Exists!!!');
                        $("#fname").focus();
                    }
                }
            });
        }
    </script>

    <!-- scripts for customer.php -->
    <script type="text/javascript">
        $(document).ready(function() {
            $("#btnsubmit").click(function() {
                if ($("#tp").val().trim() == "0") {
                    $("#tp").addClass("require");
                    alert("Please Select Customer or Supplier");
                    //$("#fname").focus();
                    return false;
                }

                if ($("#fname").val().trim() == "") {
                    $("#fname").addClass("require");
                    alert("Please Enter Firm Name");
                    $("#fname").focus();
                    return false;
                }
                /* if($("#cname").val().trim() == "" )
                {
                $("#cname").addClass("require");
                alert("Please Enter Name");
                $("#cname").focus();
                return false;
                } */
                if ($("#cont").val().trim() == "") {
                    $("#cont").addClass("require");
                    alert("Please Enter Contact");
                    $("#cont").focus();
                    return false;
                }

                if ($("#addrss").val().trim() == "") {
                    $("#addrss").addClass("require");
                    alert("Please Enter Address");
                    $("#addrss").focus();
                    return false;
                }

                if ($("#gststs").val().trim() == "-1") {
                    $("#gststs").addClass("require");
                    alert("Please Select GST.");
                    $("#gst1").focus();
                    return false;
                }



                if (document.getElementById('gst1').checked == true) {
                    if ($("#gstNo").val().trim() == "") {
                        $("#gstNo").addClass("require");
                        alert("Please Enter GST No.");
                        $("#gstNo").focus();
                        return false;
                    }
                }


                if ($("#stName").val().trim() == "0") {
                    $("#stName").addClass("require");
                    alert("Please Select State Name");
                    $("#stName").focus();
                    return false;
                }
                if ($("#states").val().trim() == "") {
                    $("#states").addClass("require");
                    alert("Please Select Customer State");
                    $("#states").focus();
                    return false;
                }


            });
        });
    </script>
    </div>
    <!-- ./wrapper -->
    <!--select head start here-->

    <link rel="stylesheet" href="selectcss/docsupport/style.css">
    <link rel="stylesheet" href="selectcss/docsupport/prism.css">
    <link rel="stylesheet" href="selectcss/chosen.css">
    <!-- <style type="text/css" media="all">
        /* fix rtl for demo */
        .chosen-rtl .chosen-drop {
            left: -9000px;
        }
    </style> -->
    <!--select head end here-->

    <!--    select js start here-->
    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.4/jquery.min.js" type="text/javascript"></script>-->
    <!-- <script src="selectjs/chosen.jquery.js" type="text/javascript"></script> -->
    <script src="selectjs/docsupport/prism.js" type="text/javascript" charset="utf-8"></script>
    <!-- <script type="text/javascript">
        var config = {
            '.chosen-select': {},
            '.chosen-select-deselect': {
                allow_single_deselect: true
            },
            '.chosen-select-no-single': {
                disable_search_threshold: 100
            },
            '.chosen-select-no-results': {
                no_results_text: 'Oops, nothing found!'
            },
            '.chosen-select-width': {
                width: "95%"
            }
        }
        for (var selector in config) {
            $(selector).chosen(config[selector]);
        }
    </script> -->
    <!-- customer.php scripts are ended -->

    <!-- unit.php scripts -->
    <script type="text/javascript">
        function chkgst() {
            if (document.getElementById("gst1").checked == true) {
                //alert('hiii');
                document.getElementById('gststs').value = '1';
                document.getElementById('gstNo').readOnly = false;
            } else if (document.getElementById("gst2").checked == true) {
                document.getElementById('gststs').value = '0';
                document.getElementById('gstNo').readOnly = true;
            }
        }
    </script>
</head>

<body>
</body>

</html>