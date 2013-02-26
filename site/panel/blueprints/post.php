<?php if(!defined('KIRBY')) exit ?>

# default blueprint

title: Post
pages: false
files: true
fields:
  title:
    label: Title
    type:  text
  date:
    label: Date (MM/DD/YYYY)
    type: text
  headerimage:
    label: Header Image
    type: text
  body:
    label: Body
    type:  textarea
    size:  large