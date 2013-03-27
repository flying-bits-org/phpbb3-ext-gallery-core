# phpBB 3.1 Extension - Gallery Core

## Installation

Clone into phpBB/ext/gallery/core:

    git clone https://github.com/nickvergessen/phpbb3-ext-gallery-core.git phpBB/ext/gallery/core

Enable in database by inserting a row into phpbb_ext

    INSERT INTO phpbb_ext (ext_name, ext_active, ext_state) VALUES ('gallery/core', 1, '');

And purging your cache.

# License
[GPLv2](license.txt)
