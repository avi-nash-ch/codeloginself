<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Import Excel data in Database by using Codeigniter</title>
    <script src="<?= base_url('assets/js/jquery.min.js') ?>"></script>
    <link rel="stylesheet" href="<?= base_url('assets/css/bootstrap.min.css') ?>">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js"></script>
    <!-- Include DataTables CSS and JavaScript -->
    <link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.13.6/css/jquery.dataTables.min.css">
    <script type="text/javascript" charset="utf8" src="//cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
</head>

<body style="background-image:url('assets/images/sp_bg.png');">
    <div class="container">
        <div class="row">
            <div class="col-md-12 mt-4">
                <div class="card bg-light">
                    <div class="card-header text-center">
                        <h4>How to import Excel Data into Database in codeigniter</h4>
                    </div>
                    <?php
                    if($this->session->flashdata('message'))
                    {
                        echo $this->session->flashdata('message'); 
                    }
                    ?>
                    <div class="card-body">
                        <div class="form-group">
                            <form enctype="multipart/form-data" action="<?= base_url('Excel_import/spreadsheet_import') ?>" method="post">
                                <input type="file" name="import_file" class="form-control m-2">
                                <button type="submit" class="btn btn-primary m-2">Import</button>
                                <a href="<?= base_url('Admin/dashboard') ?> " class="btn btn-secondary" > Back</a>
                            </form>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>