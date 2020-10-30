# Custom compiled php for repl.it

## To start

Use `Ctrl-Shift-S` to open the terminal, and execute `./start.sh -S 0.0.0.0:8080`.

## Warnings

Do not touch `php` and `lib`, or it may be broken.

## Compiling

* Compiled on WSL 2 + Debian Unstable
* php 7.4.10
* `./configure --enable-static --disable-cgi --enable-phar --enable-mbstring --enable-sockets --enable-cli --with-curl --with-mysqli --with-pgsql --with-pdo-mysql --with-pdo-pgsql`
* `patchelf --set-interpreter lib/ld-linux-x86-64.so.2 --set-rpath '$ORIGIN/lib' php`
