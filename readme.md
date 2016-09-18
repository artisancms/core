# ArtisanCMS

#### Installation

Currently only supporting installing with composer. Run the following command (assuming you already have Composer installed):
`composer global require "artisancms/installer"`

Once that is installed, you will need to source your terminal window. (Close it and reopen). Then you should have access to `studio` in the terminal.

Create new install with `studio new name` where name is the project (or folder) you want ArtisanCMS installed into.

> To get the latest install run `studion new name --dev` and the most recent versions will be pulled. Warning, things may or may not work.

If the installation fails, you can `cd` into directory and run `studio install` to finish the installation process. This should not be necessary if the install completes correctly.

#### Service Provider

> If the installation completed, you should not need to add these manually.

Add the following to your app.php file in the providers array:

```
ArtisanCMS\CMS\Providers\CMSServiceProvider::class,
ArtisanCMS\AdminViews\Providers\ArtisanCMSAdminViewsServiceProvider::class,
AHuggins\Utilities\Providers\UtilityServiceProvider::class,
Lavary\Menu\ServiceProvider::class,
Cviebrock\EloquentSluggable\ServiceProvider::class,
ArtisanCMS\Blog\Providers\BlogServiceProvider::class,
GrahamCampbell\Markdown\MarkdownServiceProvider::class,
```

#### Aliases

> If the installation completed, you should not need to add these manually.

Add the following to the `config/app.php` file in the Aliases array:

```
'Menu'       => Lavary\Menu\Facade::class,
'Markdown' => GrahamCampbell\Markdown\Facades\Markdown::class,
```


#### Publish Config

> If the installation completed, you should not need to add these manually.

`php artisan vendor:publish`

#### Update the .env

Be sure to add your DB credentials to the .env file.

#### APP_URL

In the .env file, make sure you update the `APP_URL` to reflect the environment you are currently in. This means if you are working locally you may have something like `APP_URL=http://artisancms.dev`, but on production you would probably have `APP_URL=http://artisancms.org`.

#### Theme

After install completes successfully, there should be a folder `themes` in the root directory. Create a theme folder in here, keep the name lowercase. This is where all your theme blade files will go. Then you simply need to update the `artisancms.php` file in the config directory. Update the `theme` key with the name of your new theme. Then make sure that you have the correct files created for the add-ons you have installed.

