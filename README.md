# Disable Login Script Concatenation

WordPress mu-plugin that fixes broken styles on `wp-login.php` when `load-styles.php` and `load-scripts.php` are blocked by the web server.

## Problem

A common security hardening practice is to block access to `/wp-admin/load-styles.php` and `/wp-admin/load-scripts.php` for unauthenticated users (e.g. via nginx rules). However, WordPress uses these endpoints to serve concatenated CSS/JS on the login page — so blocking them results in an unstyled login screen.

## Solution

This plugin hooks into `login_init` and disables script/style concatenation. WordPress then outputs individual `<link>` and `<script>` tags pointing to static CSS/JS files, which the web server can serve directly without going through the blocked PHP endpoints.

## Installation

Copy `disable-login-concatenation.php` into your `mu-plugins/` directory. No configuration needed.

## Compatibility

Works with any WordPress version that uses `load-styles.php`/`load-scripts.php` for concatenation (WordPress 2.8+).
