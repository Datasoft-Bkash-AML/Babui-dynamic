# PHP & MongoDB Integration

This project is configured to use the system PHP binary at `/usr/bin/php`, which has the MongoDB extension enabled and is compatible with OpenSSL 3.x. 

## Usage
- For all CLI and web server operations, use `/usr/bin/php`.
- If you use VS Code or other tools, set the PHP executable path to `/usr/bin/php`.
- Composer and other PHP tools should also be run with `/usr/bin/php` if possible.

## Troubleshooting
If you encounter issues with missing extensions, check your PHP version with:

    /usr/bin/php -v
    /usr/bin/php -m | grep mongodb

If you see `mongodb` in the output, you are using the correct PHP version.

---

For any questions, contact the project maintainer.
