Native instructions
==================

Code part
----------------

To create a new native production please create a new directory in the `native` folder.
You may use subfolders to organize different native projects from the same client.

There is a generic `native` folder that has the basic structure of a native project.

You may also use other projects as inspiration.

Make sure to update the `$native_path` variable to match the new native project path in the `index.php` file of you native project (be mindful of the slashes).


Admin part
----------------

To enable the native project, you will need to create a new native post in Telegram WordPress admin.

Visit the [`Telegram > Native`](https://www.telegram.hr/wp-admin/edit.php?post_type=native) section in the admin panel and click on the `Add New` button.

Populate the fields with the information about your native project. Set the author, title, description, and other fields as needed.

In the `Native oprema` section, you will need to link to the native project you have commited in this repo.

Under template enter the path to the native project folder and main script, for example `goodfood/index`. This will be used to load the native project in the Telegram app.

Use `Kategorija` checkbox to select if the native project is a for Telegram or Super1. That will setup the URL of the native project correctly.


