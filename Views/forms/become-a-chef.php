<?php
  /**
  * Requires the "PHP Email Form" library
  * The "PHP Email Form" library is available only in the pro version of the template
  * The library should be uploaded to: vendor/php-email-form/php-email-form.php
  * For more info and help: https://bootstrapmade.com/php-email-form/
  */

  // Replace contact@example.com with your real receiving email address
  $receiving_email_address = 'info@Mekletna.com';

  if( file_exists($php_email_form = '../assets/vendor/php-email-form/php-email-form.php' )) {
    include( $php_email_form );
  } else {
    die( 'Unable to load the "PHP Email Form" Library!');
  }

  $become_a_chef = new PHP_Email_Form;
  $become_a_chef->ajax = true;
  
  $become_a_chef->to = $receiving_email_address;
  $become_a_chef->from_name = $_POST['name'];
  $become_a_chef->from_email = $_POST['email'];
  $become_a_chef->subject = "New table become chef request from the website";

  // Uncomment below code if you want to use SMTP to send emails. You need to enter your correct SMTP credentials
  /*
  $book_a_table->smtp = array(
    'host' => 'example.com',
    'username' => 'example',
    'password' => 'pass',
    'port' => '587'
  );
  */

  $become_a_chef->add_message( $_POST['name'], 'Name');
  $become_a_chef->add_message( $_POST['email'], 'Email');
  $become_a_chef->add_message( $_POST['phone'], 'Phone');
  $become_a_chef->add_message( $_POST['datebirth'], 'datebirth');
  $become_a_chef->add_message( $_POST['cv'], 'Cv');

  echo $become_a_chef->send();
?>
