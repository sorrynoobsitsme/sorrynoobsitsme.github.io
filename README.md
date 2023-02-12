# Start-Page
Intranet single-page info site for teams, departments and organizations. Authenticates users against Active Directory.

[![Watch the Demo Video](https://imgur.com/a/E68pVYv)](https://youtu.be/0z0whmJj-_0)

<a href="http://www.youtube.com/watch?feature=player_embedded&v=W60dfZaepWo
" target="_blank"><img src="http://img.youtube.com/vi/W60dfZaepWo/0.jpg" 
alt="IMAGE ALT TEXT HERE" width="240" height="180" border="10" /></a>


#### 1. Notes

- I created this Intranet page to centralize all important information for a team, organization or department.
- The site authenticates the users you define against your local Active Directory.
- To be extra-safe make sure to use an SSL certificate on the webserver hosting this site in your environment!

#### 2. Instructions

1) Setup a webserver in your local intranet

2) For added security use an SSL certificate on this webhost so your AD info (users and passwords) are not being sent over the wire in plaintext.

3) Customize your logos and other photos. These are located in the \images directory

4) Don't forget to use a favicon. You can create one in many ways.
   I recommend an online image converter such as
   https://www.favicon-generator.org/

5) Add authorized users to the "ldap.php" file:
  
   In "ldap.php" find the "// List of authorized users" section.
   Below that heading there will be a variable called "$authorized_users".
   Add any users that you want to have access to the IT Start Page to the array.

   For example, if you want aduser1, aduser2, and aduser3 to have access to the page
   modify the line to read:
   $authorized_users = array("aduser1", "aduser2", "aduser3");

6) Add your domain to the "ldap.php" file:
 
   In "ldap.php" find the "// What Domain are we connecting to?" section.
   Below that heading there will be two variables you will need to modify: $ldap and $domain.
