<!DOCTYPE html>
<html>
<head>
    <title>Mobile OTP Form</title>
</head>
<body>
    <h2>Form with Mobile OTP</h2>
    <?php if ($message) echo "<p><strong>$message</strong></p>"; ?>

    <!-- Step 1: Request OTP -->
    <form method="post">
        <label>Name:</label>
        <input type="text" name="name" required><br><br>

        <label>Mobile:</label>
        <input type="text" name="mobile" required pattern="[0-9]{10}"><br><br>

        <button type="submit" name="get_otp">Get OTP</button>
    </form>

    <!-- Step 2: Verify OTP -->
    <form method="post" style="margin-top:20px;">
        <label>Enter OTP:</label>
        <input type="text" name="otp" maxlength="6" required><br><br>

        <button type="submit" name="verify_otp">Verify OTP</button>
    </form>
</body>
</html>
