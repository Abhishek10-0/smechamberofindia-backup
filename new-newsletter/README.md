# Newsletter Subscription Module

1. Copy the complete `newsletter` folder to the website root. It expects the existing root `config.php` to provide `$conn` (MySQLi); it does not create a second connection.
2. Import `sql/newsletter_subscriptions.sql` into that same MySQL database.
3. Copy `includes/settings.example.php` to `includes/settings.php`, set Razorpay test/live keys, sender email, and the existing SMS-provider URL template. Keep `{mobile}` and `{otp}` in the SMS URL.
4. Open `/newsletter/subscribe-newsletter.php`.

## Razorpay

This project has no Composer or vendor directory, so this module intentionally requires **no Composer packages**. It uses Razorpay Checkout (official hosted JavaScript) and Razorpay's authenticated Orders API through PHP cURL. Order creation happens server-side; the success callback is checked with the Razorpay HMAC signature before any subscription is marked paid.

Required settings: `razorpay_key_id`, `razorpay_key_secret`. Use test keys while testing and switch both to live keys together for production.

## Required PHP extensions

`mysqli`, `curl`, `openssl`, and `json`, plus a configured PHP `mail()` transport. The existing project already uses `mail()`; no additional mailing library is introduced.

## Files created

`subscribe-newsletter.php`; `ajax/send-otp.php`, `verify-otp.php`, `create-order.php`, `verify-payment.php`; `includes/bootstrap.php`, `functions.php`, `settings.example.php`; scoped assets; and the SQL file.

## Existing files reused but not modified

`../config.php` supplies the established database connection. The existing `subscribe.php` and `subscribe-verify.php` were used as the reference for the site's current SMS gateway pattern; their credentials are deliberately not copied into this module. Existing `mail()` usage is followed without changing any existing mail handler.

## Security and deployment notes

`includes/settings.php` is ignored by the module `.gitignore`; never commit it. Restrict direct web access to `sql/`, `README.md`, and `includes/settings.example.php` at the web-server level if possible. The endpoint validates server-side input, uses prepared statements, hashes OTPs, limits attempts, and stores Razorpay signatures only after verification.
