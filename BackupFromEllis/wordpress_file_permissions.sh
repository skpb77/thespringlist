#!/bin/bash
cd /srv/www/thespringlist/
sudo chown -R root:www-data .
find . -type d -print0 | sudo xargs -0 chmod 775
find . -type f -print0 | sudo xargs -0 chmod 664
