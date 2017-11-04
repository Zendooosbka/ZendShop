#!/bin/bash


cat tables.tsql > res.fullsql
cat *.sql >> res.fullsql
cat execproc.hsql >> res.fullsql
