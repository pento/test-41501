#!/bin/sh

mkdir -p pcre
cd pcre
[ ! -e "pcre-${PCRE}.tar.gz" ] && wget "https://ftp.pcre.org/pub/pcre/pcre-${PCRE}.tar.gz"
[ ! -e "pcre-${PCRE}" ] && tar xvfz "pcre-${PCRE}.tar.gz"
cd "pcre-${PCRE}"
[ ! -e Makefile ] && ./configure
[ ! -e pcretest ] && make
[ ! -e libpcre.a ] && cp .libs/* .
cd ../..
