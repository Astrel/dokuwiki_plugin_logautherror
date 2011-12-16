Plugin logautherror for Dokuwiki
=====

This is a plugin [dokuwiki](https://github.com/splitbrain/dokuwiki "DokuWiki is a standards compliant, simple to use Wiki, mainly aimed at creating documentation of any kind."), log in apache error_log when an authentification fail.
Is usefull with [fail2ban](https://github.com/fail2ban/fail2ban "Fail2Ban scans log files like /var/log/pwdfail and bans IP that makes too many password failures.") !

**WARNING**: You can config the error message in the admin panel but by default match for fail2ban

graphviz Plugin for DokuWiki

All documentation for this plugin can be found at
http://www.dokuwiki.org/plugin:logautherror

If you install this plugin manually, make sure it is installed in
lib/plugins/logautherror/ - if the folder is called different it
will not work!

Please refer to http://www.dokuwiki.org/plugins for additional info
on how to install plugins in DokuWiki.

----
Copyright (C) Andreas Gohr <andi@splitbrain.org>

This program is free software; you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation; version 2 of the License

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

See the COPYING file in your DokuWiki folder for details
