<?php
/* ====================
[BEGIN_COT_EXT]
Code=toc
Name=Table Of Contents
Description=Displays Table of contents of a given category
Version=1.1.5
Date=2023-03-18
Author=Trustmaster & Cotonti team
Copyright=&copy; Vladimir Sibirov & Cotonti team 2012 - 2023
Notes=
SQL=
Auth_guests=R
Lock_guests=W12345A
Auth_members=R
Lock_members=W12345A
Requires_modules=page
Recommends_plugins=i18n
[END_COT_EXT]

[BEGIN_COT_EXT_CONFIG]
sort_field=03:string::page_title:Sort by field
sort_way=04:select:desc,asc:asc:Sort order
cache_ttl=14:string::300:Cache TTL
use_i18n=20:radio::1:Use localized titles and description if available
[END_COT_EXT_CONFIG]
==================== */

defined('SED_CODE') or die('Wrong URL');
