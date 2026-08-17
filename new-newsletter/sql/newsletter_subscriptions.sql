CREATE TABLE `newsletter_subscriptions` (
  `id` BIGINT UNSIGNED NOT NULL AUTO_INCREMENT,
  `first_name` VARCHAR(100) NOT NULL, `last_name` VARCHAR(100) NOT NULL,
  `designation` VARCHAR(150) NOT NULL, `company_name` VARCHAR(200) NOT NULL,
  `business_sector` VARCHAR(200) NOT NULL, `turnover` VARCHAR(100) NOT NULL,
  `address` TEXT NOT NULL, `city` VARCHAR(100) NOT NULL, `state` VARCHAR(100) NOT NULL,
  `mobile` VARCHAR(15) NOT NULL, `email` VARCHAR(190) NOT NULL, `website` VARCHAR(255) DEFAULT NULL,
  `consent_given` TINYINT(1) NOT NULL DEFAULT 0,
  `otp_hash` VARCHAR(255) DEFAULT NULL, `otp_expires_at` DATETIME DEFAULT NULL,
  `otp_attempts` TINYINT UNSIGNED NOT NULL DEFAULT 0, `otp_verified` TINYINT(1) NOT NULL DEFAULT 0,
  `otp_verified_at` DATETIME DEFAULT NULL,
  `plan_code` VARCHAR(30) DEFAULT NULL, `plan_name` VARCHAR(100) DEFAULT NULL,
  `amount_paise` INT UNSIGNED DEFAULT NULL, `payment_status` ENUM('pending','paid','failed') NOT NULL DEFAULT 'pending',
  `razorpay_order_id` VARCHAR(100) DEFAULT NULL, `razorpay_payment_id` VARCHAR(100) DEFAULT NULL,
  `razorpay_signature` VARCHAR(255) DEFAULT NULL, `payment_method` VARCHAR(100) DEFAULT NULL,
  `paid_at` DATETIME DEFAULT NULL, `created_at` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`), UNIQUE KEY `uk_razorpay_order_id` (`razorpay_order_id`), KEY `idx_mobile` (`mobile`), KEY `idx_payment_status` (`payment_status`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
