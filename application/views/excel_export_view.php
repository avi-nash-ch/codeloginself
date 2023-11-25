<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Export Data to Excel in Codeigniter using PHPExcel</title>
    <script src="<?= base_url('assets/js/jquery.min.js') ?>"></script>
    <link rel="stylesheet" href="<?= base_url('assets/css/bootstrap.min.css') ?>">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js"></script>
    <!-- Include DataTables CSS and JavaScript -->
    <link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.13.6/css/jquery.dataTables.min.css">
    <script type="text/javascript" charset="utf8" src="//cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
</head>

<body style="background-image: url('<?= base_url('assets/images/bg-signup.jpg') ?>');">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card m-3 p-3">
                    <h3 class="text-center">Export Data to Excel in Codeigniter using PHPExcel</h3><br>
                    <table id="employeeTable" class="table table-striped w-100%">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Address</th>
                                <th>Gender</th>
                                <th>Designation</th>
                                <th>Age</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($employee_data as $row) { ?>
                                <tr>
                                    <td><?= $row->name ?></td>
                                    <td><?= $row->address ?></td>
                                    <td><?= $row->gender ?></td>
                                    <td><?= $row->designation ?></td>
                                    <td><?= $row->age ?></td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                    <div class="text-center">
                        <form action="<?= base_url('Excel_export/action') ?> " method="post">
                            <input type="submit" name="export" class="btn btn-success" value="Export">
                            <a href="<?= base_url('Admin/dashboard') ?>" class="btn btn-info">Download PDF</a>
                            <a href="<?= base_url('Excel_export/downloadPDF') ?>" target = "_blank" class="btn btn-secondary">Back</a>
                            
                        </form>
                    </div>
                    
                    <br><br>
                </div>
            </div>
        </div>
    </div>
    <!-- DataTables Initialization Script -->
    <script>
        $(document).ready(function() {
            $('#employeeTable').DataTable();
        });
    </script>
</body>

</html>
