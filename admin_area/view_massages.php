<?php 
    
    if(!isset($_SESSION['admin_email'])){
        
        echo "<script>window.open('login.php','_self')</script>";
        
    }else{

?>

<div class="row"><!-- row 1 begin -->
    <div class="col-lg-12"><!-- col-lg-12 begin -->
        <ol class="breadcrumb"><!-- breadcrumb begin -->
            <li class="active"><!-- active begin -->
                
                <i class="fa fa-dashboard"></i> Dashboard / View Messages
                
            </li><!-- active finish -->
        </ol><!-- breadcrumb finish -->
    </div><!-- col-lg-12 finish -->
</div><!-- row 1 finish -->

<div class="row"><!-- row 2 begin -->
    <div class="col-lg-12"><!-- col-lg-12 begin -->
        <div class="panel panel-default"><!-- panel panel-default begin -->
            <div class="panel-heading"><!-- panel-heading begin -->
               <h3 class="panel-title"><!-- panel-title begin -->
               
               <i class="fa fa-fw fa-commenting-o"></i>  View Messages
                
               </h3><!-- panel-title finish --> 
            </div><!-- panel-heading finish -->
            
            <div class="panel-body"><!-- panel-body begin -->
                <div class="table-responsive"><!-- table-responsive begin -->
                    <table class="table table-striped table-bordered table-hover"><!-- table table-striped table-bordered table-hover begin -->
                        
                        <thead><!-- thead begin -->
                            <tr><!-- tr begin -->
                                <th> Categories ID: </th>
                                <th> Customer Name: </th>
                                <th> Customer Email: </th>
                                <th> Customer Contact: </th>
                                <th> Messages: </th>
                                <th> Delete Massage: </th>
                            </tr><!-- tr finish -->
                        </thead><!-- thead finish -->
                        
                        <tbody><!-- tbody begin -->
                        
                            <?php
                            
                                $s = "select * from massage";
                                if ($q = $con->query($s)) {

                                    $i = 0;
                                    while($r = $q->fetch_assoc()){
                                        $i++;
                            ?>

                                    <tr>
                                        <td><?= $i; ?></td>
                                        <td><?= $r['c_name']; ?></td>
                                        <td><?= $r['c_email']; ?></td>
                                        <td><?= $r['c_con']; ?></td>
                                        <td><?= $r['c_msg']; ?></td>
                                        <td>
                                            <a href="index.php?delete_massage=<?= $r['m_id']; ?>" class="btn btn-danger">
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