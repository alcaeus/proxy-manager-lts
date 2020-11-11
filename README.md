# alcaeus/proxy-manager-lts

This package forks and replaces the [`ocramius/proxy-manager`](https://github.com/Ocramius/ProxyManager/) library.
Unless they're caused by this fork, please report issues and submit new features to the origin library.

By using this package, you'll gain a versioning policy that won't force you to
use the latest version of PHP *and* Composer to get bugfixes and new features.

This fork:
- maintains compatibility with PHP `>=7.1`;
  supporting new versions of PHP is considered as a bugfix;
- won't bump the minimum supported version of PHP in a minor release;
- does not depend on Composer 2, thus can be used with Composer 1 if you need more time to migrate;
- uses a versioning policy that is friendly to progressive migrations
  while providing the latest improvements and bug fixes from the origin lib.
