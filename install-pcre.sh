#!/bin/sh

mkdir pcre
cd pcre
wget "https://ftp.pcre.org/pub/pcre/pcre-${PCRE}.tar.gz"
tar xvfz "pcre-${PCRE}.tar.gz"
cd "pcre-${PCRE}"
./configure
make
cp .libs/* .
cd ../..
