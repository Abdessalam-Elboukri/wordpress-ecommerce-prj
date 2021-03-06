# NEW HOME!
Until this fork will be approved by the plugins team, we have this fork.
To make thing more comfortable and so you can still get updates what's going on
you are welcome to visit us at:
https://postmansmtp.com/

most of the updates will be here:
https://postmansmtp.com/blog

## The Story
Fixed version to the reflected cross site scripting discovered here:
https://www.pluginvulnerabilities.com/2017/06/29/reflected-cross-site-scripting-xss-vulnerability-in-postman-smtp/

This is great plugin developed by - Jason Hendriks.

The WordPress plugins review team removed the plugin, and the plugin wasn't maintained about two years so it's still unclear if the author is going to fix it.
I have uploaded this version for other people using the plugin and left without good alternative.

**I WILL KEEP UPDATE AND MAINTAIN THIS PLUGIN**

**INFO**

Postman is a next-generation SMTP Mailer, software that assists in the delivery of email generated by your WordPress site. Postman is the first and only plugin to support the latest security standards. With OAuth 2.0, there is no need to store your email passsword in the WordPress database where it might be found.

Postman is one year old! SparkPost API Integration is coming soon as Mandrill is no longer offering a free service.

The Connectivity Test and intelligent Setup Wizard scan your SMTP server to detect firewall blocks and eliminate configuration mistakes. The built-in Email Log is an invaluable resource for diagnosing problems with emails. Even hosts that block the standard SMTP ports, like GoDaddy or Bluehost, can't stop your email as Postman can deliver via HTTPS if it can't use SMTP.

Postman is not another WP Mail SMTP clone like WP Bank or Easy SMTP. It replaces the default WordPress SMTP library, PHPMailer, with the heavy-duty Zend_Mail. Never lose an email to PHP mail() again.

STANDARD FEATURES

Easy-to-use, powerful Setup Wizard for perfect configuration
Commercial-grade Connectivity Tester to diagnose server issues
Log and resend all emails; see the exact cause of failed emails
Supports International alphabets, HTML Mail and MultiPart/Alternative
Supports forced recipients (cc, bcc, to) and custom email headers
SASL Support: Plain/Login/CRAM-MD5/XOAUTH2 authentication
Security Support: SMTPS and STARTTLS (SSL/TLS)
Copy configuration to other instances of Postman
OAUTH 2.0 FEATURES

Supports the proprietary OAuth 2.0 implementations of Gmail, Hotmail and Yahoo
Fire-and-forget delivery continues even if your password changes
Gmail: By combining OAuth2 and the Gmail API, Postman can deliver where other plugins can not
WEBSERVICE (HTTPS) EMAIL FEATURES

Gmail API for sending Gmail and Google Apps email (requires a Google account)
Mandrill API for sending any email (requires a Mandrill account)
COMING SOON: Sparkpost API for sending any email (requires a Sparkpost account)
SendGrid API for sending any email (requires a SendGrid account and PHP 5.3)
Postman needs translators! If you are a non-English speaker, please get involved!

COMPATIBILE WITH..

Woocommerce
Contact Form 7
Gravity Forms
Fast Secure Contact Form
Visual Forms Builder
Contact Form Builder
PlanSo Forms
MyMail Newsletter by revaxarts
SendPress Newsletters
WP HTML Mail
Email Templates
WordPress Leads
.. and every other plugin that uses the WordPress API wp_mail to send mail!
????????????

WordPress 3.9 and PHP 5.2 with SPL and iconv
Memory: 750KiB per process at idle
Reliable mail delivery with custom email domains requires an SPF record
Reliable SMTP delivery requires credentials with an email service provider
OAuth 2.0 features require a Gmail, Hotmail or Yahoo mail OAuth 2.0 credentials
GRANT OAUTH PERMISSION ERROR MESSAGES

Please note that the Client ID and Client Secret fields are NOT for your username and password. They are for OAuth Credentials only.

ERROR AUTHENTICATING WITH THIS CLIENT ID. [ERROR EXECUTING WP_REMOTE_POST: THE USER HAS BLOCKED REQUESTS VIA HTTP.]

Your WordPress site is configured with WP_HTTP_BLOCK_EXTERNAL to prevent outbound connections. Add a whitelist rule to wp-config.php:

define('WP_ACCESSIBLE_HOSTS', 'www.googleapis.com, login.live.com, api.login.yahoo.com');

ERROR AUTHENTICATING WITH THIS CLIENT ID. [ERROR EXECUTING WP_REMOTE_POST: FAILED TO CONNECT TO XXXX]

There is a firewall on port 443 between you and the OAuth2 server. Open up the port for outbound connections.

ERROR: REDIRECT_URI_MISMATCH

You did not enter the Redirect URI correctly, watch the instructional video
You used an IP address instead of a domain name (not allowed)
ERROR: INVALID_CLIENT ??? NO SUPPORT EMAIL

You've forgotten to choose an email address in the consent screen.

SMTP ERROR MESSAGES

COMMUNICATION ERROR [334] ??? MAKE SURE THE ENVELOPE FROM EMAIL IS THE SAME ACCOUNT USED TO CREATE THE CLIENT ID.

This is almost always caused by being logged in to Google/Microsoft/Yahoo with a different user than the one Postman is configured to send mail with. Logout and try again with the correct user
Login to Webmail and see if there is an "Unusual Activity" warning waiting for your attention
COULD NOT OPEN SOCKET

Your host may have installed a firewall between you and the server. Ask them to open the ports.
Your may have tried to (incorrectly) use SSL over port 587. Check your encryption and port settings.
OPERATION TIMED OUT

Your host may have poor connectivity to the mail server. Try doubling the Read Timeout.
Your host may have installed a firewall (DROP packets) between you and the server. Ask them to open the ports.
Your may have tried to (incorrectly) use TLS over port 465. Check your encryption and port settings.
CONNECTION REFUSED

Your host has likely installed a firewall (REJECT packets) between you and the server. Ask them to open the ports.

503 BAD SEQUENCE OF COMMANDS

You configured TLS security when you should have selected no security.

XOAUTH2 AUTHENTICATION MECHANISM NOT SUPPORTED

You may be on a Virtual Private Server that is playing havoc with your communications. Jump ship.

MAIL ENDS UP IN THE SPAM FOLDER

To avoid being flagged as spam, you need to prove your email isn't forged. On a custom domain, its up to YOU to set that up:

Ensure you are using the correct SMTP server with authentication ??? the correct SMTP server is the one defined by your email service's SPF record
If you use a custom domain name for email, add an SPF record to your DNS zone file. The SPF is specific to your email provider, for example Google
If you use a custom domain name for email, add a DKIM record to your DNS zone file and upload your Domain Key (a digital signature) to, for example Google
