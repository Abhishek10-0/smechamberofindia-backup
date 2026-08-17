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
                <td><strong>Title of Name:</strong></td>
                <td><label><?php echo $_SESSION['title'] ?></label> </td>
            </tr>
            <tr>
                <td><strong>First Name:</strong></td>
                <td><label><?php echo $_SESSION['fname'] ?></label></td>
            </tr>
            <tr>
                <td><strong>Last Name:</strong></td>
                <td><label><?php echo $_SESSION['lname'] ?></label></td>
            </tr>
            <tr>
                <td><strong>Designation:</strong></td>
                <td><label><?php echo $_SESSION['designation'] ?></label></td>
            </tr>
            <tr>
                <td><strong>Name of the Company:</strong></td>
                <td><label><?php echo $_SESSION['companyname'] ?></label></td>
            </tr>
            <tr>
                <td><strong>Business Activity:</strong></td>
                <td><label><?php echo $_SESSION['businessactivity'] ?></label></td>
            </tr>
            <tr>
                <td><strong>Business Sector:</strong></td>
                <td><label><?php echo $_SESSION['businesssector'] ?></label></td>
            </tr>
            <tr>
                <td><strong>Business Interest:</strong></td>
                <td><label><?php echo $_SESSION['interest'] ?></label></td>
            </tr>
            <tr>
                <td><strong>Details of Products & Services to promote amongst SMEs:</strong></td>
                <td><label><?php echo $_SESSION['service'] ?></label></td>
            </tr>
            <tr>
                <td><strong>Business Sectors of SMEs </strong></td>
                <td><label><?php echo $_SESSION['sectorsme'] ?></label></td>
            </tr>
            <tr>
                <td><strong>Mobile Number:</strong></td>
                <td><label><?php echo $_SESSION['mobilenumber'] ?></label></td>
            </tr>
            <tr>
                <td><strong>Phone Number:</strong></td>
                <td><label><?php echo $_SESSION['phonenumber'] ?></label></td>
            </tr>
            <tr>
                <td><strong>Email:</strong></td>
                <td><label><?php echo $_SESSION['email'] ?></label></td> 
            </tr>
            <tr>
                <td><strong>Address:</strong></td>
                <td><label><?php echo $_SESSION['address'] ?></label> </td> 
            </tr>

        </table>
    </body>
</html>