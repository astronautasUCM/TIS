#!/bin/python3

import argparse
from lexer import HTMLlexer

p = argparse.ArgumentParser(prog='dtshtml.py',  description="Dynamic to Static HTML compiler")
p.add_argument('program', help="path of the html file to compile")
p.add_argument('-o', '--output', nargs=1, type=str, help="Output file for the final html")
p.add_argument('-r', '--recursive', action="store_true", help="Compile recursively all the files")
args = p.parse_args()

lex = HTMLlexer()
output = args.output[0] if args.output is not None else None
lex.compile(args.program, r=args.recursive, output=output)