<?php  
/* Specify the server and connection string attributes. */  
$serverName = "DESKTOP-TFVTE05\SQLEXPRESS";  
  
/* Get UID and PWD from application-specific files.  */  
$uid ="sa";  
$pwd = "sa";  
$connectionInfo = array( "UID"=>$uid,  
                         "PWD"=>$pwd,  
                         "Database"=>"PMS");  
  
/* Connect using SQL Server Authentication. */  
$conn = sqlsrv_connect( $serverName, $connectionInfo);

if(isset($_POST['submit'])){
    $Reqid=$_POST['Reqid']; 
    $Reqdate=$_POST['Reqdate']; 
    $reqno=$_POST['ReqNumber'];
    $userid=$_POST['UserId'];
    $Reqstatus=$_POST['Reqstatus'];
    $Depid=$_POST['DepartmentId'];
    $createdby=$_POST['CreatedBy'];
    $createdon=$_POST['CreatedOn'];
    $modifiedby=$_POST['ModifiedBy'];
    $modifiedon=$_POST['ModifiedOn'];
    $Reqlineid=$_POST['Reqlineid'];
    $itemid=$_POST['itemid'];
    $itemdescr=$_POST['itemdescription'];
    $Eprice=$_POST['expectedprice'];
    $Aprice=$_POST['actualprice'];
    $quantity=$_POST['quantity'];
    $linestatus=$_POST['Reqlinestatus'];
    $supp=$_POST['Supplier'];
    $supname=$_POST['Suppliername'];
    $Appquotid=$_POST['approvedquotid'];
    $createdby=$_POST['Createdby'];
    $createdon=$_POST['createdon'];
    $modifiedby=$_POST['modifiedby'];
    $modifiedon=$_POST['modifiedon'];


    sqlsrv_connect("DESKTOP-TFVTE05\SQLEXPRESS", "sa", "sa") or die(sqlsrv_error()); 
    sqlsrv_select_db("pms") or die(sqlsrv_error()); 
    sqlsrv_query("INSERT INTO Requisition('Reqid','Reqdate','ReqNumber','UserId','Reqstatus','DepartmentId','CreatedBy','CreatedOn','ModifiedBy','ModifiedOn') 
    VALUES ('$Reqid', '$Reqdate','$reqno',' $userid',' $Reqstatus','$Depid',' $createdby',' $createdon',' $modifiedby','$modifiedon',)");
    
    sqlsrv_query("INSERT INTO Requisitionlines('Reqid','Reqlineid','itemid','itemdescription','expectedprice','actualprice','quantity','Reqlinestatus',
    'Supplier','Suppliername','approvedquotid','Createdby','createdon','modifiedby','modifiedon')
    VALUES ('$Reqid', '$Reqlineid',' $itemid','$itemdescr','$Eprice','$Aprice','  $quantity','$linestatus','$supp','$supname','$Appquotid','$createdby','$createdon','$modifiedby','  $modifiedon')"); 
    
    $result = sqlsrv_query($conn,$sqlsrv_query);

    if($result){
       echo "Data is inserted";
    }else{
        echo "Check your database connection";
    }
    $results = sqlsrv_query($conn,$sqlsrv_query);

    if($results){
       echo "Data is inserted";
    }else{
        echo "Check your database connection";
    }


}
    ?>  
