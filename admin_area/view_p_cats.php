<?php 
    
    if(!isset($_SESSION['admin_email'])){
        
        echo "<script>window.open('login.php','_self')</script>";
        
    }else{

?>

<div class="row"><!-- row 1 begin -->
    <div class="col-lg-12"><!-- col-lg-12 begin -->
        <ol class="breadcrumb"><!-- breadcrumb begin -->
            <li class="active"><!-- active begin -->
                
                <i class="fa fa-dashboard"></i> Dashboard / View Products Brands
                
            </li><!-- active finish -->
        </ol><!-- breadcrumb finish -->
    </div><!-- col-lg-12 finish -->
</div><!-- row 1 finish -->

<div class="row"><!-- row 2 begin -->
    <div class="col-lg-12"><!-- col-lg-12 begin -->
        <div class="panel panel-default"><!-- panel panel-default begin -->
            <div class="panel-heading"><!-- panel-heading begin -->
               <h3 class="panel-title"><!-- panel-title begin -->
               
                   <i class="fa fa-fw fa-edit"></i>  View Products Brands
                
               </h3><!-- panel-title finish --> 
            </div><!-- panel-heading finish -->
            
            <div class="panel-body"><!-- panel-body begin -->
                <div class="table-responsive"><!-- table-responsive begin -->
                    <table class="table table-striped table-bordered table-hover"><!-- table table-striped table-bordered table-hover begin -->
                        
                        <thead><!-- thead begin -->
                            <tr><!-- tr begin -->
                                <th> Products Brands ID: </th>
                                <th> Products Brands Title: </th>
                                <th> Products Brands Description: </th>
                                <th> Edit Brands: </th>
                                <th> Delete Brands: </th>
                            </tr><!-- tr finish -->
                        </thead><!-- thead finish -->
                        
                        <tbody><!-- tbody begin -->
                            <?php
                            
                                $s = "select * from pro_categories";
                                if ($q = $con->query($s)) {

                                    $i = 0;
                                    while($r = $q->fetch_assoc()){
                                        $i++;
                            ?>

                                    <tr>
                                        <td><?= $i; ?></td>
                                        <td><?= ucwords($r['p_cat_title']); ?></td>
                                        <td><?= $r['p_cat_desc']; ?></td>
                                        <td>
                                            <a href="index.php?edit_p_cat=<?= $r['p_cat_id']; ?>" class="btn btn-success">
                                                Edit
                                            </a>
                                        </td>
                                        <td>
                                            <a href="index.php?delete_p_cat=<?= $r['p_cat_id']; ?>" class="btn btn-danger">
                                                Delete
                                            </a>
                                        </td>
                                    </tr>
                            <?php } } ?>
                        </tbody><!-- tbody finish -->
                        
                    </table><!-- table table-striped table-bordered table-hover finish -->
                </div><!-- table-responsive finish -->
            </div><!-- panel-body finish -->
            
        </div><!-- panel panel-default finish -->
    </div><!-- col-lg-12 finish -->
</div><!-- row 2 finish -->

<?php } ?>