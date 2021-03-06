<?php

/**
 * @file
 * Commercy billy mail administration
 */

/**
 * commerce_billy_mail_settings_form.admin settings form.
 */
function commerce_billy_mail_settings_form() {
  $module_path = drupal_get_path('module', 'commerce_billy_mail');
  $commercy_billy_pdf_enabled = module_exists('commerce_billy_pdf invoice');

  $site_mail = variable_get('site_mail', ini_get('sendmail_from'));
  $mail_from = variable_get('commerce_billy_mail_from', '');
  $form['commerce_billy_mail_from'] = array(
    '#type' => 'textfield',
    '#title' => t('E-mail Sender Address (FROM)'),
    '#description' => t("The E-mail sender (from) address. Defaults to the site mail address."),
    '#default_value' => empty($mail_from) ? $site_mail : $mail_from,
    '#required' => TRUE,
  );

  $form['commerce_billy_mail_cc'] = array(
    '#type' => 'textfield',
    '#title' => t('E-mail recipient CC address'),
    '#description' => t("Carbon Copy (CC) recipient for the invoice mails. Multiple addresses can be separated by comma (,) without whitespace. Leave empty if not used."),
    '#required' => FALSE,
    '#default_value' => variable_get('commerce_billy_mail_cc', ''));

  $form['commerce_billy_mail_bcc'] = array(
    '#type' => 'textfield',
    '#title' => t('E-mail recipient BCC address'),
    '#description' => t("Blind Carbon Copy (BCC) recipient for the invoice mails. Multiple addresses can be separated by comma (,) without whitespace. Leave empty if not used."),
    '#required' => FALSE,
    '#default_value' => variable_get('commerce_billy_mail_bcc', ''));

  $form['commerce_billy_mail_subject'] = array(
    '#type' => 'textfield',
    '#title' => t('Subject'),
    '#description' => t("Subject for the invoice mails. You may use tokens."),
    '#required' => TRUE,
    '#default_value' => variable_get('commerce_billy_mail_subject', ''));

  $form['commerce_billy_mail_body'] = array(
    '#type' => 'textarea',
    '#title' => t('Body'),
    '#description' => t("Body for the invoice mails. You may use tokens."),
    '#required' => TRUE,
    '#default_value' => variable_get('commerce_billy_mail_body', ''));

  $form['tokens'] = array(
    '#theme' => 'token_tree',
    '#token_types' => array('commerce-order', 'user'), // The token types that have specific context. Can be multiple token types like 'term' and/or 'user'
    '#global_types' => TRUE, // A boolean TRUE or FALSE whether to include 'global' context tokens like [current-user:*] or [site:*]. Defaults to TRUE.
    '#click_insert' => TRUE, // A boolean whether to include the 'Click this token to insert in into the the focused textfield' JavaScript functionality. Defaults to TRUE.
    '#dialog' => TRUE,
  );

  $form['commerce_billy_mail_attach_pdf_invoice'] = array(
    '#type' => 'checkbox',
    '#title' => t('Attach PDF invoice'),
    '#description' => t("Send the Billy PDF invoice attached."),
    '#default_value' => variable_get('commerce_billy_mail_attach_pdf_invoice', TRUE) && module_exists('commerce_billy_pdf'),
    '#disabled' => !module_exists('commerce_billy_pdf'),
  );

  $form['commerce_billy_mail_plaintext'] = array(
    '#type' => 'checkbox',
    '#title' => t('Send E-mails as plain text.'),
    '#description' => t("Send the invoice E-mails as plain text (no HTML body)."),
    '#default_value' => variable_get('commerce_billy_mail_plaintext', FALSE));

  return system_settings_form($form);
}
