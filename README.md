# phpBB 3.1 Extension - Gallery Core

## Installation

Clone into phpBB/ext/gallery/core:

    git clone https://github.com/nickvergessen/phpbb3-ext-gallery-core.git phpBB/ext/gallery/core

Enable in database by inserting a row into phpbb_ext

    INSERT INTO phpbb_ext (ext_name, ext_active, ext_state) VALUES ('gallery/core', 1, '');

And purging your cache.

##Tests and Continuous Intergration

[![Build Status](https://travis-ci.org/nickvergessen/phpbb3-ext-gallery-core.png?branch=develop)](https://travis-ci.org/nickvergessen/phpbb3-ext-gallery-core)

We use Travis-CI as a continous intergtation server and phpunit for our unit testing. See more information on the [phpBB development wiki](https://wiki.phpbb.com/Unit_Tests).

## License

[GPLv2](license.txt)
