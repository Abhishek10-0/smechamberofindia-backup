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
            <td><strong>First Name:</strong></td>
                <td><label><?php echo $_SESSION['fname'] ?></label></td>
        </tr>
        <tr>
            <td><strong>Last Name:</strong></td>
                <td><label><?php echo $_SESSION['lname'] ?></label></td>
            </tr>
              <tr>
                <td><strong>Name of the Company:</strong></td>
                <td><label><?php echo $_SESSION['companyname'] ?></label>
                </td>
            </tr>
            <tr>
                <td><strong>Company Status:</strong></td>
                <td><label><?php echo $_SESSION['companystatus'] ?></label></td> 
            </tr>
                  <tr>
                <td><strong>Designation:</strong></td>
                <td><label><?php echo $_SESSION['designation'] ?></label>
                </td>
            </tr>
             <tr>
                <td><strong>Email:</strong></td>
                <td><label><?php echo $_SESSION['email'] ?></label></td> 
            </tr>
              <tr>
                <td><strong>Mobile Number:</strong></td>
                <td><label><?php echo $_SESSION['mobile'] ?></label></td>
                
            </tr>
              <tr>
                <td><strong>City:</strong></td>
                <td><label><?php echo $_SESSION['city'] ?></label>
                </td>
            </tr>
              <tr>
                <td><strong>Interested to Attend Event:</strong></td>
                <td><label><?php echo $_SESSION['event'] ?></label>
                </td>
            </tr>
              <tr>
                <td><strong>Interested to Become a Member:</strong></td>
                <td><label><?php echo $_SESSION['member'] ?></label>
                </td>
            </tr>
            <tr>
                <td><strong>Interested to Avail Services from Chamber:</strong></td>
                <td><label><?php echo $_SESSION['service'] ?></label></td> 
            </tr>
             <tr>
                <td><strong>Query Regarding GST:</strong></td>
                <td><label><?php echo $_SESSION['query'] ?></label></td> 
            </tr>
         
        </table>
    </body>
</html>