# ArtisanCMS

#### Installation

Currently only supporting installing with composer. Run the following command (assuming you already have Composer installed):
`composer global require "artisancms/installer"`

Once that is installed, you will need to source your terminal window. (Close it and reopen). Then you should have access to `studio` in the terminal.

Create new install with `studio new name` where name is the project (or folder) you want ArtisanCMS installed into.

#### Service Provider

Add the following to your app.php file in the providers array:

`ArtisanCMS\CMS\Providers\CMSServiceProvider::class,`
