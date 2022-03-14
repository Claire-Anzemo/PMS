
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
    <title>REQ FORM</title>
    <style>
        table,tr,th,td{
            border: 1px solid black;
            border-collapse: collapse;
        } 
        
        table{
            table-layout: fixed;
            width: 100%; 
        
        }
        input[type="file"] {
            text-align: center;
        }
    </style>

</head>
<body>
    <h1>REQUISITION FORM</h1>
    <form action="connector.php" method="POST">
        <div>
            <label>REQUISITION ID:</label><input type="text" name="Reqid" /><br/> <br/>
            <label>REQUISITION NUMBER:</label><input type="text" name="Reqnumber" /><br/>
            <label>DATE REQUESTED:</label><input type="date"  name="Reqdate"/><br/>
            <label>USER ID:</label><input type="text" name="Userid" /><br/>
            <label>DEPARTMENT:</label><input type="text" name="Department" /><br/>
            <label>REQUISITION STATUS:</label><input type="checkbox" /><br/>
            <div>
            <label for="pet-select">Approver:</label>

<select name="approver" id="approver-select">
    <option value="" >--Please choose the approver--</option>
    <option value="dog">User</option>
    <option value="cat">Approver Groups</option>

</select>
<select name="user" id="user-select">
    <option value="" ></option>
    <option value="john">John</option>
    <option value="john">Antony</option>
</select>

            </div>
        </div>
</br>
        <hr/>
        <table>
            <tr>
                <th>Item description</th>
                <th>Quantity</th>
                <th>EP/Unit</th>
                <th>Actual price</th>
                <th>supplier</th>
                <th>Supplier name</th>
                <th>Approved quot_ID</th>
                <th>Amount</th>
                <th>Status</th>
                <th>Attach file</th>
              


            </tr>
            <tr>
               <td><input type="text"  name = "itemdescription" required/></td> 
               <td<input type="text"  name = "quantity" required/></td> 
               <td><input type="text"  name = " Expectedunit" required/></td> 
               <td><input type="text"  name = "Actualprice" /></td> 
               <td><input type="text"  name = "supplier" /></td> 
               <td><input type="text"  name = "suppliername" required/></td> 
               <td><input type="text"  name = "approvequoteid" /></td> 
               <td><input type="text"  name = "Amount" required/></td> 
               <td><input type="text"  name = "Status" required/></td> 
               <td><input type = "file"/></td> 
               <td><button>Delete</button></td>
            </tr>
    </table>
        <button>Add</button>
        <br/>
        Justification:<textarea  name="justification" rows="5" cols="40"></textarea>
        <br/>
        <input type="submit" name = "submit"/>
    </form>
</body>
</html>


