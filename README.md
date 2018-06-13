# PHP Random Image
this is a simple script to select images randomly from the folder you set.
# Configure the script
the default image folder is named as `imgs` if you want to configure the default seeting, please refer to `config.inc.php` to modifiy your seetings.
# Supported arguments:
- **IMG_DIR** - the relative path for your images folder from your web server.
- **IMG_EXTENSIONS** - the supported image file extension for your images.
- **IMG_NO_REPEAT_CURRENT** - if set to `true` the next randomly selected image won't be same to the currently selected image, if set to `false` will ignore the currently selected image for next random select (so the repetitive selected image may occur).