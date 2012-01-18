<?php
/*
  $Id$

  osCommerce, Open Source E-Commerce Solutions
  http://www.oscommerce.com

  PayPal	
  Released under the Apache 2.0 License - Paypal
  @aurthor DriveDev (rock mutchler)
*/

  define('MODULE_PAYMENT_PAYPAL_PAYFLOW_LINK_TEXT_TITLE', 'PayPal Payflow');
  define('MODULE_PAYMENT_PAYPAL_PAYFLOW_LINK_TEXT_PUBLIC_TITLE', 'Credit or Debit Card');
  define('MODULE_PAYMENT_PAYPAL_PAYFLOW_LINK_TEXT_DESCRIPTION', '<strong>Note: You must have a PayPal PayFlow account to use this module.</strong><br /><br /><img src="images/icon_popup.gif" border="0">&nbsp;<a href="https://registration.paypal.com/" target="_blank" style="text-decoration: underline; font-weight: bold;">Signup PayPal Payflow</a>&nbsp;<a href="javascript:toggleDivBlock(\'paypalDirectUKInfo\');">(info)</a><span id="paypalDirectUKInfo" style="display: none;"><br /><i>The above link will take you to the PayPal Payflow registration page to signup.</i></span>');
  define('MODULE_PAYMENT_PAYPAL_PAYFLOW_LINK_CARD_OWNER', 'Card Owner:');
  define('MODULE_PAYMENT_PAYPAL_PAYFLOW_LINK_CARD_OWNER_FIRSTNAME', 'Card Owner First Name:');
  define('MODULE_PAYMENT_PAYPAL_PAYFLOW_LINK_CARD_OWNER_LASTNAME', 'Card Owner Last Name:');
  define('MODULE_PAYMENT_PAYPAL_PAYFLOW_LINK_CARD_TYPE', 'Card Type:');
  define('MODULE_PAYMENT_PAYPAL_PAYFLOW_LINK_CARD_NUMBER', 'Card Number:');
  define('MODULE_PAYMENT_PAYPAL_PAYFLOW_LINK_CARD_VALID_FROM', 'Card Valid From Date:');
  define('MODULE_PAYMENT_PAYPAL_PAYFLOW_LINK_CARD_VALID_FROM_INFO', '(if available)');
  define('MODULE_PAYMENT_PAYPAL_PAYFLOW_LINK_CARD_EXPIRES', 'Card Expiry Date:');
  define('MODULE_PAYMENT_PAYPAL_PAYFLOW_LINK_CARD_CVC', 'Card Security Code (CVV2):');
  define('MODULE_PAYMENT_PAYPAL_PAYFLOW_LINK_CARD_ISSUE_NUMBER', 'Card Issue Number:');
  define('MODULE_PAYMENT_PAYPAL_PAYFLOW_LINK_CARD_ISSUE_NUMBER_INFO', '(for Maestro and Solo cards only)');
  define('MODULE_PAYMENT_PAYPAL_PAYFLOW_LINK_ERROR_ALL_FIELDS_REQUIRED', 'Error: All payment information fields are required.');
  define('MODULE_PAYMENT_PAYPAL_PAYFLOW_LINK_ERROR_GENERAL', 'Error: A general problem has occurred with the transaction. Please try again.');
  define('MODULE_PAYMENT_PAYPAL_PAYFLOW_LINK_ERROR_CFG_ERROR', 'Error: Payment module configuration error. Please verify the login credentials.');
  define('MODULE_PAYMENT_PAYPAL_PAYFLOW_LINK_ERROR_ADDRESS', 'Error: A match of the Shipping Address City, State, and Postal Code failed. Please try again.');
  define('MODULE_PAYMENT_PAYPAL_PAYFLOW_LINK_ERROR_DECLINED', 'Error: This transaction has been declined. Please try again.');
  define('MODULE_PAYMENT_PAYPAL_PAYFLOW_LINK_ERROR_INVALID_CREDIT_CARD', 'Error: The provided credit card information is invalid. Please try again.');
?>
