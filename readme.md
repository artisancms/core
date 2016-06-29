# ArtisanCMS

#### Installation

Currently only supporting installing with composer. Run the following command (assuming you already have Composer installed):
`composer global require "artisancms/installer"`

Once that is installed, you will need to source your terminal window. (Close it and reopen). Then you should have access to `studio` in the terminal.

Create new install with `studio new name` where name is the project (or folder) you want ArtisanCMS installed into.

Then `cd` into directory and run `studio install` to finish the installation process.

#### Service Provider

> If you use `studio install` above, you do not need to add this manually.

Add the following to your app.php file in the providers array:

`ArtisanCMS\CMS\Providers\CMSServiceProvider::class,`

#### Publish Config

Listing this now, but ideally this will be a composer script to run after an install command. Although, this only works after the Service Provider is registered. So might have to manually do it, or somehow update the Providers array.

`php artisan vendor:publish`

#### Update the .env

###### APP_URL

In the .env file, make sure you update the `APP_URL` to reflect the environment you are currently in. This means if you are working locally you may have something like `APP_URL=http://artisancms.dev`, but on production you would probably have `APP_URL=http://artisancms.org`.

###### DB Credentials

Also, update the DB credentials to reflect the environment you are in.
