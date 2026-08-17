<html>
    <head>
            <style>
table, td {
    border: 1px solid black;
}
</style>
    </head>
    <body>                  
        <table cellspacing="20" cellpadding="5" border="2" align="center" width="60%">         
            <tr>
            <td><strong>Name:</strong></td>
            <td><label><?php echo $_SESSION['name'] ?></label></td>
            </tr>
            <tr>
                <td><strong>Company Name:</strong></td>
                <td><label><?php echo $_SESSION['companyname'] ?></label></td>
            </tr>
            <tr>
                <td><strong>Designation:</strong></td>
                <td><label><?php echo $_SESSION['designation'] ?></label>
                </td>
            </tr>
              <tr>
                <td><strong>Mobile Number:</strong></td>
                <td><label><?php echo $_SESSION['mobilenumber'] ?></label></td>
            </tr>
            <tr>
                <td><strong>Email:</strong></td>
                <td><label><?php echo $_SESSION['email'] ?></label></td> 
            </tr>        
        </table>
    </body>
</html>