<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="<?= base_url('assets/css/bootstrap.css')?>">
    <link rel="stylesheet" href="<?= base_url('assets/css/style.css')?>">
</head>
<body style="background-image: url('<?= base_url('assets/images/bg-signup.jpg') ?>');">
    <header>
        <nav class="navbar navbar-dark bg-dark"  style="background-image: url('<?= base_url('assets/images/sp_bg.png') ?>');" >
            <a href="" class="navbar-brand" style="padding-left: 5px;" >Welcome to Avinash Chaurasiya</a>
            <ul class="nav navbar-nav ml-auto "  >
                <li style="padding-right: 5px;" >
                    <a href="<?= base_url('Admin/logout') ?>" class="btn btn-danger " >Logout</a>
                </li>
            </ul>
        </nav>
    </header>
    <main>
        <div class="container" >
            <div class="row">
                <div class="card m-4 p-3" style="text-align: justify;" >
                    <p class="bg-light p-3">
                    Lorem ipsum dolor sit, amet consectetur adipisicing elit. Libero id fuga quis in, rem ab, enim repellat minus accusamus dolor laborum perspiciatis, expedita culpa voluptate possimus aut quos assumenda! Eaque.Lorem ipsum dolor sit, amet consectetur adipisicing elit. Libero id fuga quis in, rem ab, enim repellat minus accusamus dolor laborum perspiciatis, expedita culpa voluptate possimus aut quos assumenda! Eaque.Lorem ipsum dolor sit, amet consectetur adipisicing elit. Libero id fuga quis in, rem ab, enim repellat minus accusamus dolor laborum perspiciatis, expedita culpa voluptate possimus aut quos assumenda! Eaque.Lorem ipsum dolor sit, amet consectetur adipisicing elit. Libero id fuga quis in, rem ab, enim repellat minus accusamus dolor laborum perspiciatis, expedita culpa voluptate possimus aut quos assumenda! Eaque.Lorem ipsum dolor sit, amet consectetur adipisicing elit. Libero id fuga quis in, rem ab, enim repellat minus accusamus dolor laborum perspiciatis, expedita culpa voluptate possimus aut quos assumenda! Eaque.Lorem ipsum dolor sit, amet consectetur adipisicing elit. Libero id fuga quis in, rem ab, enim repellat minus accusamus dolor laborum perspiciatis, expedita culpa voluptate possimus aut quos assumenda! Eaque.Lorem ipsum dolor sit, amet consectetur adipisicing elit. Libero id fuga quis in, rem ab, enim repellat minus accusamus dolor laborum perspiciatis, expedita culpa voluptate possimus aut quos assumenda! Eaque.Lorem ipsum dolor sit, amet consectetur adipisicing elit. Libero id fuga quis in, rem ab, enim repellat minus accusamus dolor laborum perspiciatis, expedita culpa voluptate possimus aut quos assumenda! Eaque.Lorem ipsum dolor sit, amet consectetur adipisicing elit. Libero id fuga quis in, rem ab, enim repellat minus accusamus dolor laborum perspiciatis, expedita culpa voluptate possimus aut quos assumenda! Eaque.Lorem ipsum dolor sit, amet consectetur adipisicing elit. Libero id fuga quis in, rem ab, enim repellat minus accusamus dolor laborum perspiciatis, expedita culpa voluptate possimus aut quos assumenda! Eaque.Lorem ipsum dolor sit, amet consectetur adipisicing elit. Libero id fuga quis in, rem ab, enim repellat minus accusamus dolor laborum perspiciatis, expedita culpa voluptate possimus aut quos assumenda! Eaque.Lorem ipsum dolor sit, amet consectetur adipisicing elit. Libero id fuga quis in, rem ab, enim repellat minus accusamus dolor laborum perspiciatis, expedita culpa voluptate possimus aut quos assumenda! Eaque.Lorem ipsum dolor sit, amet consectetur adipisicing elit. Libero id fuga quis in, rem ab, enim repellat minus accusamus dolor laborum perspiciatis, expedita culpa voluptate possimus aut quos assumenda! Eaque.Lorem ipsum dolor sit, amet consectetur adipisicing elit. Libero id fuga quis in, rem ab, enim repellat minus accusamus dolor laborum perspiciatis, expedita culpa voluptate possimus aut quos assumenda! Eaque.Lorem ipsum dolor sit, amet consectetur adipisicing elit. Libero id fuga quis in, rem ab, enim repellat minus accusamus dolor laborum perspiciatis, expedita culpa voluptate possimus aut quos assumenda! Eaque.Lorem ipsum dolor sit, amet consectetur adipisicing elit. Libero id fuga quis in, rem ab, enim repellat minus accusamus dolor laborum perspiciatis, expedita culpa voluptate possimus aut quos assumenda! Eaque.Lorem ipsum dolor sit, amet consectetur adipisicing elit. Libero id fuga quis in, rem ab, enim repellat minus accusamus dolor laborum perspiciatis, expedita culpa voluptate possimus aut quos assumenda! Eaque.
                    <a href="#" style="text-decoration: none;" >Good bye...</a>
                    </p>
                    <a href="<?= base_url('Excel_export') ?>" class="btn btn-primary">Excel_export</a>
                    <a href="<?= base_url('Excel_import') ?>" class="btn btn-secondary mt-2">Excel_import</a> 
                </div>
                
            </div>
        </div>
    </main>

<?php $this->load->view('admin/footer');?>
    