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
                <td><label><?php echo $_SESSION['designation'] ?></label>
                </td>
            </tr>
            <tr>
                <td><strong>Name of the Company:</strong></td>
                <td><label><?php echo $_SESSION['companyname'] ?></label>
                </td>
            </tr>
            <tr>
                <td><strong>Business Activity:</strong></td>
                <td><label><?php echo $_SESSION['businessactivity'] ?></label>
                </td>
            </tr>
            <tr>
                <td><strong>Business Sector:</strong></td>
                <td><label><?php echo $_SESSION['businesssector'] ?></label>
                </td>
            </tr>
            <tr>
                <td><strong>Business Interest:</strong></td>
                <td><label><?php echo $_SESSION['businessinterest'] ?></label>
                </td>
            </tr>
            <tr>
                <td><strong>Interested for Membership:</strong></td>
                <td><label><?php echo $_SESSION['membership'] ?></label>
                </td>
            </tr> 
            <tr>
                <td><strong>Event Information:</strong></td>
                <td><label><?php echo $_SESSION['information'] ?></label>
                </td>
            </tr> 
            <tr>
                <td><strong>Looking for Support From Chamber:</strong></td>
                <td><label><?php echo $_SESSION['supportchamber'] ?></label>
                </td>
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
                <td><label><?php echo $_SESSION['address'] ?></label></td> 
            </tr>

        </table>
    </body>
</html>