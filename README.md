# Custom compiled php for repl.it

## Warnings

Do not touch `php` and `lib`, or it may break.

## Compiling

* Compiled on WSL 2 + Debian Unstable
* php 7.4.10
* `./configure --enable-static --disable-cgi --enable-phar --enable-mbstring --enable-sockets --enable-cli --with-curl --with-mysqli --with-pgsql --with-pdo-mysql --with-pdo-pgsql`
* `patchelf --set-interpreter lib/ld-linux-x86-64.so.2 --set-rpath '$ORIGIN/lib' php`
