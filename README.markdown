Plugin Dokuwiki logAuthError
=====

This is a plugin [dokuwiki](https://github.com/splitbrain/dokuwiki "DokuWiki is a standards compliant, simple to use Wiki, mainly aimed at creating documentation of any kind."), log in apache error_log when an authentification fail.
Is usefull with [fail2ban](https://github.com/fail2ban/fail2ban "Fail2Ban scans log files like /var/log/pwdfail and bans IP that makes too many password failures.") !

# HOW TO INSTALL

1. Unzip it if isn't 
2. Just copy this folder (logAuthError) in {dokuwikiroot}/lib/plugins/
3. It works !

**WARNING**: You can config the error message in the admin panel but by default match for fail2ban

You can disabled it in the admin panel "Manage Plugins" (like other plugin)
