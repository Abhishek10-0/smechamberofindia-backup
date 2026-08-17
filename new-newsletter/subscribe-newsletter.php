<?php
require_once __DIR__ . '/includes/bootstrap.php';
$csrfToken = newsletter_csrf_token();
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Newsletter Subscription | SME Chamber of India</title>
    <link rel="stylesheet" href="assets/css/newsletter.css">
</head>
<body>
<main class="newsletter-shell">
    <section class="newsletter-card">
        <div class="newsletter-heading">
            <img
    src="assets/images/logo.svg"
    alt="SME Chamber of India"
    class="newsletter-logo">
   
        </div>
		<div style="background:#f8f9fb;border:1px solid #d9e2ec;border-radius:10px;padding:22px 30px;margin:25px 0;">

    <h3 style="margin:0 0 18px;color:#0b2a4a;font-size:24px;">
        Subscribe For
    </h3>

    <ul style="margin:0;padding-left:22px;line-height:2;font-size:16px;color:#333;">
        <li>Newsletter &amp; Special Publications</li>
        <li>Information on Government Schemes</li>
        <li>Complimentary Invitations for Selected Events</li>
        <li>Special Discounts on Educational Programs</li>
        <li>Opportunity to Submit Business Leads &amp; Requirements</li>
    </ul>

</div>
        <ol class="progress" aria-label="Subscription progress">
            <li class="active" data-step="details">1. Details</li>
            <li data-step="otp">2. Verify mobile</li>
            <li data-step="plan">3. Select plan</li>
            <li data-step="complete">4. Complete</li>
        </ol>
        <div id="notice" class="notice" role="alert" hidden></div>

        <section id="details-step" class="step active">
            <form id="details-form" novalidate>
                <input type="hidden" name="csrf_token" value="<?php echo htmlspecialchars($csrfToken, ENT_QUOTES, 'UTF-8'); ?>">
                <div class="form-grid">
                    <label>First Name <span>*</span><input name="first_name" required autocomplete="given-name"></label>
                    <label>Last Name <span>*</span><input name="last_name" required autocomplete="family-name"></label>
                    <label>Designation <span>*</span><input name="designation" required></label>
                    <label>Company Name <span>*</span><input name="company_name" required autocomplete="organization"></label>
                    <label>Business Sector <span>*</span><input name="business_sector" required></label>
                    <label>Turnover <span>*</span><input name="turnover" required placeholder="e.g. ₹1–5 crore"></label>
                    <label class="full">Address <span>*</span><textarea name="address" required autocomplete="street-address"></textarea></label>
                    <label>City <span>*</span><input name="city" required autocomplete="address-level2"></label>
                    <label>State <span>*</span><input name="state" required autocomplete="address-level1"></label>
                    <label>Mobile Number <span>*</span><input name="mobile" required inputmode="numeric" maxlength="10" pattern="[6-9][0-9]{9}" autocomplete="tel-national"></label>
                    <label>Email Address <span>*</span><input name="email" required type="email" autocomplete="email"></label>
                    <label class="full">Website <small>(optional)</small><input name="website" type="url" placeholder="https://example.com" autocomplete="url"></label>
                </div>
               

<div class="subscription-note">
    <p><strong>Note:</strong> Subscription is not a membership and does not provide any membership or voting rights.</p>
    <p>
        If you wish to enroll your company as a member, kindly write to
        <a href="mailto:director@smechamber.com">director@smechamber.com</a>.
    </p>
</div>
                <label class="consent"><input name="consent" type="checkbox" value="1" required> <span>I consent to receive newsletter-related communications from SME Chamber of India. <b>*</b></span></label>
                <button class="primary" type="submit">Send OTP</button>
            </form>
        </section>

        <section id="otp-step" class="step" hidden>
            <h2>Verify your mobile number</h2><p>Enter the six-digit OTP sent to your mobile number.</p>
            <form id="otp-form"><label>OTP <input name="otp" inputmode="numeric" maxlength="6" pattern="[0-9]{6}" required autofocus></label><button class="primary" type="submit">Verify OTP</button></form>
        </section>

              <section id="plan-step" class="step" hidden>
    <h2>Choose your subscription plan</h2>

    <div class="plans">

        <label class="plan">
            <input type="radio" name="plan" value="one_year">
            <span>
                <b>One Year</b>
                <strong>
                    ₹5,000
                    <small style="color:#e53935;font-size:13px;font-weight:600;">
                        + 18% GST
                    </small>
                </strong>
            </span>
        </label>

        <label class="plan">
            <input type="radio" name="plan" value="three_years">
            <span>
                <b>Three Years</b>
                <strong>
                    ₹10,000
                    <small style="color:#e53935;font-size:13px;font-weight:600;">
                        + 18% GST
                    </small>
                </strong>
            </span>
        </label>

    </div>

    <button id="pay-button" class="primary" type="button">
        Proceed to secure payment
    </button>
</section>

        <section id="complete-step" class="step thank-you" hidden>
            <h2>Thank you for submitting your subscription request.</h2>
            <p id="completion-status"></p>
            <p>Subscription is not a membership and does not provide any membership or voting rights.</p>
            <p>If you wish to enroll your company as a member, kindly write to <a href="mailto:director@smechamber.com">director@smechamber.com</a>.</p>
        </section>
    </section>
</main>
<script>window.NEWSLETTER_CONFIG = { csrfToken: <?php echo json_encode($csrfToken); ?> };</script>
<script src="https://checkout.razorpay.com/v1/checkout.js"></script>
<script src="assets/js/newsletter.js"></script>
</body>
</html>
