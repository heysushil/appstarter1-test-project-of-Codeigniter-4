<!DOCTYPE html>
<html lang="en">

<head>
    <title>Bootstrap 5 Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"> -->
    <link rel="stylesheet" href="<?=base_url('css/bootstrap.css')?>">
    <!-- Using Tag -->
    
        
        <!-- Using HTML helper function -->
        
    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script> -->
    <script src="<?=base_url('js/bootstrap.bundle.js')?>"></script>
</head>

<body>
    <a href="<?=base_url();?>" class="btn btn-md btn-warning">Home</a>
    <a href="<?=base_url('useractivity');?>" class="btn btn-md btn-warning">User Registration</a>
    <?= $this->renderSection('content'); ?>

</body>

</html>