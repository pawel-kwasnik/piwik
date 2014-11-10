<?php
$content   = array (
  'plugins' => 
  array (
    0 => 
    array (
      'name' => 'BotTracker',
      'owner' => 'Thomas--F',
      'description' => 'Detection of bots & spiders and count their visits without tracking them in the visitor-log.',
      'homepage' => 'http://dev.piwik.org/trac/ticket/2391',
      'license' => 'GPL 3.0 / fair use',
      'createdDateTime' => '2014-02-21 13:14:04',
      'donate' => 
      array (
      ),
      'isTheme' => false,
      'keywords' => 
      array (
        0 => 'BotTracker',
      ),
      'authors' => 
      array (
        0 => 
        array (
          'name' => 'Thomas Fasselt',
          'email' => 'Thomas.Fasselt@gmx.com',
          'homepage' => 'http://dev.piwik.org/trac/ticket/2391',
        ),
      ),
      'repositoryUrl' => 'https://github.com/Thomas--F/BotTracker',
      'lastUpdated' => '2014-09-04 19:52:04',
      'latestVersion' => '0.52',
      'numDownloads' => 7388,
      'screenshots' => 
      array (
      ),
      'activity' => 
      array (
        'numCommits' => '46',
        'numContributors' => '4',
        'lastCommitDate' => '2014-09-25 17:50:45',
      ),
      'featured' => false,
      'versions' => 
      array (
        0 => 
        array (
          'name' => '0.43',
          'release' => '2014-02-21 13:14:04',
          'download' => '/api/1.0/plugins/BotTracker/download/0.43',
          'requires' => 
          array (
            'piwik' => '2.0.1',
            'php' => '5.3.20',
          ),
          'readme' => 'BotTracker
==========

BotTracker-Plugin for Piwik

for additional information go to http://dev.piwik.org/trac/ticket/2391

This plugin is still in BETA-status, but I have testet it for a while. It should be stable.

Before you install this plugin, some things you should be aware of:

- many webcrawler, spiders and bots don\'t load the images in a page and most of them don\'t execute JavaScript. So you cannot track them with Piwik if you don\'t use the PHP-API. The BotTracker can only track those, who were caught by Piwik itself.

- if you update form Piwik 1.x to Piwik 2.x sometimes the update-script (BotTracker\\Updates\\0.43.php) is not executed. In this case you get an error about a not existing column "extra_stats" when you open the config-page. Then you have to execute the following 2 statemnts on your Piwik-Database (e.g. with MyPHPAdmin):

```sql
ALTER TABLE `piwik_bot_db`
ADD `extra_stats` BOOLEAN NOT NULL DEFAULT FALSE
```
```sql
CREATE TABLE IF NOT EXISTS `piwik_bot_db_stat`
(
 `botId` INTEGER(10) UNSIGNED NOT NULL,
 `idsite` INTEGER(10) UNSIGNED NOT NULL,
 `page` VARCHAR(100) NOT NULL,
 `visit_timestamp` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
 `useragent` VARCHAR(100) NOT NULL,
		 
 PRIMARY KEY(`botId`)
)  DEFAULT CHARSET=utf8
```

- the "extra Stats"-Feature is in "early developing". You can collect the data about the who, when and where, but there is currently no widget to display the data.


And last but not least:
I wrote BotTracker for my own needs but people ask me to make it public - so I put it online.
It\'s free to use and I will support it as long as I can spend the time. But I will *not* activate a donation button. If someone is paying money, I fell like I have to support him. 
I want to work on this plugin beacute I want to and not because I have to. I hope you can unterstand that.
',
          'numDownloads' => 0,
          'repositoryChangelogUrl' => 'https://github.com/Thomas--F/BotTracker/commits/0.43a',
          'readmeHtml' => 
          array (
            'description' => '',
            'faq' => '',
            'changelog' => '',
            'support' => '',
          ),
        ),
        1 => 
        array (
          'name' => '0.44',
          'release' => '2014-02-21 13:54:04',
          'download' => '/api/1.0/plugins/BotTracker/download/0.44',
          'requires' => 
          array (
            'piwik' => '2.0.1',
            'php' => '5.3.20',
          ),
          'readme' => '# Piwik BotTracker Plugin 

## Description

BotTracker ist a plugin to track the visits of bots, spiders and webcrawler, that hit yout page.

This plugin is still in BETA-status, but I have testet it for a while. It should be stable.

Before you install this plugin, here\'s something you should be aware of:
Many webcrawler, spiders and bots don\'t load the images in a page and most of them don\'t execute JavaScript. So you cannot track them with Piwik if you don\'t use the PHP-API. The BotTracker can only track those, who were caught by Piwik itself.



Additional info:
I wrote BotTracker for my own needs but people ask me to make it public - so I put it online.
It\'s free to use and I will support it as long as I can spend the time. But I will *not* activate a donation button. If someone is paying money, I feel like I have to support him. 
I want to work on this plugin because I want to and not because I have to. I hope you can unterstand that.

## Installation / Update

See http://piwik.org/faq/plugins/#faq_21

for additional information go to http://dev.piwik.org/trac/ticket/2391

If you update form Piwik 1.x to Piwik 2.x sometimes the update-script (BotTracker\\Updates\\0.43.php) is not executed. In this case you get an error about a not existing column "extra_stats" when you open the config-page. Then you have to execute the following 2 statemnts on your Piwik-Database (e.g. with MyPHPAdmin):

```sql
ALTER TABLE `piwik_bot_db`
ADD `extra_stats` BOOLEAN NOT NULL DEFAULT FALSE
```
```sql
CREATE TABLE IF NOT EXISTS `piwik_bot_db_stat`
(
 `botId` INTEGER(10) UNSIGNED NOT NULL,
 `idsite` INTEGER(10) UNSIGNED NOT NULL,
 `page` VARCHAR(100) NOT NULL,
 `visit_timestamp` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
 `useragent` VARCHAR(100) NOT NULL,
		 
 PRIMARY KEY(`botId`)
)  DEFAULT CHARSET=utf8
```


The "extra Stats"-Feature is in "early developing". You can collect the data about the who, when and where, but there is currently no widget to display the data.


## Changelog

__0.44__
* more description for the marketplace

__0.43__
* Compatible with Piwik 2.0

## License

GPL v3 / fair use

## Support

Please direct any feedback to: 

* [https://github.com/Thomas--F/BotTracker/issues](https://github.com/Thomas--F/BotTracker/issues)
* [http://dev.piwik.org/trac/ticket/2391](http://dev.piwik.org/trac/ticket/2391)

',
          'numDownloads' => 911,
          'repositoryChangelogUrl' => 'https://github.com/Thomas--F/BotTracker/commits/0.44',
          'readmeHtml' => 
          array (
            'description' => '

<p>BotTracker ist a plugin to track the visits of bots, spiders and webcrawler, that hit yout page.</p>

<p>This plugin is still in BETA-status, but I have testet it for a while. It should be stable.</p>

<p>Before you install this plugin, here\'s something you should be aware of:
Many webcrawler, spiders and bots don\'t load the images in a page and most of them don\'t execute JavaScript. So you cannot track them with Piwik if you don\'t use the PHP-API. The BotTracker can only track those, who were caught by Piwik itself.</p>

<p>Additional info:
I wrote BotTracker for my own needs but people ask me to make it public - so I put it online.
It\'s free to use and I will support it as long as I can spend the time. But I will <em>not</em> activate a donation button. If someone is paying money, I feel like I have to support him. 
I want to work on this plugin because I want to and not because I have to. I hope you can unterstand that.</p>

',
            'faq' => '',
            'changelog' => '

<p><strong>0.44</strong>
* more description for the marketplace</p>

<p><strong>0.43</strong>
* Compatible with Piwik 2.0</p>

',
            'support' => '

<p>Please direct any feedback to: </p>

<ul><li><a href="https://github.com/Thomas--F/BotTracker/issues">https://github.com/Thomas--F/BotTracker/issues</a></li>
<li><a href="http://dev.piwik.org/trac/ticket/2391">http://dev.piwik.org/trac/ticket/2391</a></li>
</ul>',
          ),
        ),
        2 => 
        array (
          'name' => '0.45',
          'release' => '2014-04-03 20:14:05',
          'download' => '/api/1.0/plugins/BotTracker/download/0.45',
          'requires' => 
          array (
            'piwik' => '2.0.1',
            'php' => '5.3.10',
          ),
          'readme' => '# Piwik BotTracker Plugin 

## Description

BotTracker ist a plugin to track the visits of bots, spiders and webcrawler, that hit yout page.

This plugin is still in BETA-status, but I have testet it for a while. It should be stable.

Before you install this plugin, here\'s something you should be aware of:
Many webcrawler, spiders and bots don\'t load the images in a page and most of them don\'t execute JavaScript. So you cannot track them with Piwik if you don\'t use the PHP-API. The BotTracker can only track those, who were caught by Piwik itself.



Additional info:
I wrote BotTracker for my own needs but people ask me to make it public - so I put it online.
It\'s free to use and I will support it as long as I can spend the time. But I will *not* activate a donation button. If someone is paying money, I feel like I have to support him. 
I want to work on this plugin because I want to and not because I have to. I hope you can unterstand that.

## Installation / Update

See http://piwik.org/faq/plugins/#faq_21

for additional information go to http://dev.piwik.org/trac/ticket/2391

If you update form Piwik 1.x to Piwik 2.x sometimes the update-script (BotTracker\\Updates\\0.43.php) is not executed. In this case you get an error about a not existing column "extra_stats" when you open the config-page. Then you have to execute the following 2 statemnts on your Piwik-Database (e.g. with MyPHPAdmin):

```sql
ALTER TABLE `piwik_bot_db`
ADD `extra_stats` BOOLEAN NOT NULL DEFAULT FALSE
```
```sql
CREATE TABLE IF NOT EXISTS `piwik_bot_db_stat`
(
 `botId` INTEGER(10) UNSIGNED NOT NULL,
 `idsite` INTEGER(10) UNSIGNED NOT NULL,
 `page` VARCHAR(100) NOT NULL,
 `visit_timestamp` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
 `useragent` VARCHAR(100) NOT NULL,
		 
 PRIMARY KEY(`botId`)
)  DEFAULT CHARSET=utf8
```


The "extra Stats"-Feature is in "early developing". You can collect the data about the who, when and where, but there is currently no widget to display the data.


## Changelog
__0.45__
* add column to primary key in extra-stats-table

__0.44__
* more description for the marketplace

__0.43__
* Compatible with Piwik 2.0

## License

GPL v3 / fair use

## Support

Please direct any feedback to: 

* [https://github.com/Thomas--F/BotTracker/issues](https://github.com/Thomas--F/BotTracker/issues)
* [http://dev.piwik.org/trac/ticket/2391](http://dev.piwik.org/trac/ticket/2391)

',
          'numDownloads' => 302,
          'repositoryChangelogUrl' => 'https://github.com/Thomas--F/BotTracker/commits/0.45',
          'readmeHtml' => 
          array (
            'description' => '

<p>BotTracker ist a plugin to track the visits of bots, spiders and webcrawler, that hit yout page.</p>

<p>This plugin is still in BETA-status, but I have testet it for a while. It should be stable.</p>

<p>Before you install this plugin, here\'s something you should be aware of:
Many webcrawler, spiders and bots don\'t load the images in a page and most of them don\'t execute JavaScript. So you cannot track them with Piwik if you don\'t use the PHP-API. The BotTracker can only track those, who were caught by Piwik itself.</p>

<p>Additional info:
I wrote BotTracker for my own needs but people ask me to make it public - so I put it online.
It\'s free to use and I will support it as long as I can spend the time. But I will <em>not</em> activate a donation button. If someone is paying money, I feel like I have to support him. 
I want to work on this plugin because I want to and not because I have to. I hope you can unterstand that.</p>

',
            'faq' => '',
            'changelog' => '

<p><strong>0.45</strong>
* add column to primary key in extra-stats-table</p>

<p><strong>0.44</strong>
* more description for the marketplace</p>

<p><strong>0.43</strong>
* Compatible with Piwik 2.0</p>

',
            'support' => '

<p>Please direct any feedback to: </p>

<ul><li><a href="https://github.com/Thomas--F/BotTracker/issues">https://github.com/Thomas--F/BotTracker/issues</a></li>
<li><a href="http://dev.piwik.org/trac/ticket/2391">http://dev.piwik.org/trac/ticket/2391</a></li>
</ul>',
          ),
        ),
        3 => 
        array (
          'name' => '0.46',
          'release' => '2014-04-14 09:24:04',
          'download' => '/api/1.0/plugins/BotTracker/download/0.46',
          'requires' => 
          array (
            'piwik' => '2.0.1',
            'php' => '5.3.10',
          ),
          'readme' => '# Piwik BotTracker Plugin 

## Description

BotTracker ist a plugin to track the visits of bots, spiders and webcrawler, that hit yout page.

This plugin is still in BETA-status, but I have testet it for a while. It should be stable.

Before you install this plugin, here\'s something you should be aware of:
Many webcrawler, spiders and bots don\'t load the images in a page and most of them don\'t execute JavaScript. So you cannot track them with Piwik if you don\'t use the PHP-API. The BotTracker can only track those, who were caught by Piwik itself.



Additional info:
I wrote BotTracker for my own needs but people ask me to make it public - so I put it online.
It\'s free to use and I will support it as long as I can spend the time. But I will *not* activate a donation button. If someone is paying money, I feel like I have to support him. 
I want to work on this plugin because I want to and not because I have to. I hope you can unterstand that.

## Installation / Update

See http://piwik.org/faq/plugins/#faq_21

for additional information go to http://dev.piwik.org/trac/ticket/2391

If you update form Piwik 1.x to Piwik 2.x sometimes the update-script (BotTracker\\Updates\\0.43.php) is not executed. In this case you get an error about a not existing column "extra_stats" when you open the config-page. Then you have to execute the following 2 statemnts on your Piwik-Database (e.g. with MyPHPAdmin):

```sql
ALTER TABLE `piwik_bot_db`
ADD `extra_stats` BOOLEAN NOT NULL DEFAULT FALSE
```
```sql
CREATE TABLE IF NOT EXISTS `piwik_bot_db_stat`
(
 `botId` INTEGER(10) UNSIGNED NOT NULL,
 `idsite` INTEGER(10) UNSIGNED NOT NULL,
 `page` VARCHAR(100) NOT NULL,
 `visit_timestamp` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
 `useragent` VARCHAR(100) NOT NULL,
		 
 PRIMARY KEY(`botId`)
)  DEFAULT CHARSET=utf8
```


The "extra Stats"-Feature is in "early developing". You can collect the data about the who, when and where, but there is currently no widget to display the data.


## Changelog
__0.45__
* add column to primary key in extra-stats-table

__0.44__
* more description for the marketplace

__0.43__
* Compatible with Piwik 2.0

## License

GPL v3 / fair use

## Support

Please direct any feedback to: 

* [https://github.com/Thomas--F/BotTracker/issues](https://github.com/Thomas--F/BotTracker/issues)
* [http://dev.piwik.org/trac/ticket/2391](http://dev.piwik.org/trac/ticket/2391)

',
          'numDownloads' => 1648,
          'repositoryChangelogUrl' => 'https://github.com/Thomas--F/BotTracker/commits/0.46',
          'readmeHtml' => 
          array (
            'description' => '

<p>BotTracker ist a plugin to track the visits of bots, spiders and webcrawler, that hit yout page.</p>

<p>This plugin is still in BETA-status, but I have testet it for a while. It should be stable.</p>

<p>Before you install this plugin, here\'s something you should be aware of:
Many webcrawler, spiders and bots don\'t load the images in a page and most of them don\'t execute JavaScript. So you cannot track them with Piwik if you don\'t use the PHP-API. The BotTracker can only track those, who were caught by Piwik itself.</p>

<p>Additional info:
I wrote BotTracker for my own needs but people ask me to make it public - so I put it online.
It\'s free to use and I will support it as long as I can spend the time. But I will <em>not</em> activate a donation button. If someone is paying money, I feel like I have to support him. 
I want to work on this plugin because I want to and not because I have to. I hope you can unterstand that.</p>

',
            'faq' => '',
            'changelog' => '

<p><strong>0.45</strong>
* add column to primary key in extra-stats-table</p>

<p><strong>0.44</strong>
* more description for the marketplace</p>

<p><strong>0.43</strong>
* Compatible with Piwik 2.0</p>

',
            'support' => '

<p>Please direct any feedback to: </p>

<ul><li><a href="https://github.com/Thomas--F/BotTracker/issues">https://github.com/Thomas--F/BotTracker/issues</a></li>
<li><a href="http://dev.piwik.org/trac/ticket/2391">http://dev.piwik.org/trac/ticket/2391</a></li>
</ul>',
          ),
        ),
        4 => 
        array (
          'name' => '0.47',
          'release' => '2014-06-13 13:38:04',
          'download' => '/api/1.0/plugins/BotTracker/download/0.47',
          'requires' => 
          array (
            'piwik' => '2.0.1',
            'php' => '5.3.10',
          ),
          'readme' => '# Piwik BotTracker Plugin 

## Description

BotTracker ist a plugin to track the visits of bots, spiders and webcrawler, that hit yout page.

This plugin is still in BETA-status, but I have testet it for a while. It should be stable.

Before you install this plugin, here\'s something you should be aware of:
Many webcrawler, spiders and bots don\'t load the images in a page and most of them don\'t execute JavaScript. So you cannot track them with Piwik if you don\'t use the PHP-API. The BotTracker can only track those, who were caught by Piwik itself.



Additional info:
I wrote BotTracker for my own needs but people ask me to make it public - so I put it online.
It\'s free to use and I will support it as long as I can spend the time. But I will *not* activate a donation button. If someone is paying money, I feel like I have to support him. 
I want to work on this plugin because I want to and not because I have to. I hope you can unterstand that.

## Installation / Update

See http://piwik.org/faq/plugins/#faq_21

for additional information go to http://dev.piwik.org/trac/ticket/2391

If you update form Piwik 1.x to Piwik 2.x sometimes the update-script (BotTracker\\Updates\\0.43.php) is not executed. In this case you get an error about a not existing column "extra_stats" when you open the config-page. Then you have to execute the following 2 statemnts on your Piwik-Database (e.g. with MyPHPAdmin):

```sql
ALTER TABLE `piwik_bot_db`
ADD `extra_stats` BOOLEAN NOT NULL DEFAULT FALSE
```
```sql
CREATE TABLE IF NOT EXISTS `piwik_bot_db_stat`
(
 `botId` INTEGER(10) UNSIGNED NOT NULL,
 `idsite` INTEGER(10) UNSIGNED NOT NULL,
 `page` VARCHAR(100) NOT NULL,
 `visit_timestamp` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
 `useragent` VARCHAR(100) NOT NULL,
		 
 PRIMARY KEY(`botId`)
)  DEFAULT CHARSET=utf8
```


The "extra Stats"-Feature is in "early developing". You can collect the data about the who, when and where, but there is currently no widget to display the data.


## Changelog
__0.47__
* bugfix: changes menu-creation for Piwik v2.4

__0.46__
* bugfix: remove depricated method for Piwik v2.2

__0.45__
* add column to primary key in extra-stats-table

__0.44__
* more description for the marketplace

__0.43__
* Compatible with Piwik 2.0

## License

GPL v3 / fair use

## Support

Please direct any feedback to: 

* [https://github.com/Thomas--F/BotTracker/issues](https://github.com/Thomas--F/BotTracker/issues)
* [http://dev.piwik.org/trac/ticket/2391](http://dev.piwik.org/trac/ticket/2391)

',
          'numDownloads' => 3,
          'repositoryChangelogUrl' => 'https://github.com/Thomas--F/BotTracker/commits/0.47',
          'readmeHtml' => 
          array (
            'description' => '

<p>BotTracker ist a plugin to track the visits of bots, spiders and webcrawler, that hit yout page.</p>

<p>This plugin is still in BETA-status, but I have testet it for a while. It should be stable.</p>

<p>Before you install this plugin, here\'s something you should be aware of:
Many webcrawler, spiders and bots don\'t load the images in a page and most of them don\'t execute JavaScript. So you cannot track them with Piwik if you don\'t use the PHP-API. The BotTracker can only track those, who were caught by Piwik itself.</p>

<p>Additional info:
I wrote BotTracker for my own needs but people ask me to make it public - so I put it online.
It\'s free to use and I will support it as long as I can spend the time. But I will <em>not</em> activate a donation button. If someone is paying money, I feel like I have to support him. 
I want to work on this plugin because I want to and not because I have to. I hope you can unterstand that.</p>

',
            'faq' => '',
            'changelog' => '

<p><strong>0.47</strong>
* bugfix: changes menu-creation for Piwik v2.4</p>

<p><strong>0.46</strong>
* bugfix: remove depricated method for Piwik v2.2</p>

<p><strong>0.45</strong>
* add column to primary key in extra-stats-table</p>

<p><strong>0.44</strong>
* more description for the marketplace</p>

<p><strong>0.43</strong>
* Compatible with Piwik 2.0</p>

',
            'support' => '

<p>Please direct any feedback to: </p>

<ul><li><a href="https://github.com/Thomas--F/BotTracker/issues">https://github.com/Thomas--F/BotTracker/issues</a></li>
<li><a href="http://dev.piwik.org/trac/ticket/2391">http://dev.piwik.org/trac/ticket/2391</a></li>
</ul>',
          ),
        ),
        5 => 
        array (
          'name' => '0.48',
          'release' => '2014-06-13 13:54:04',
          'download' => '/api/1.0/plugins/BotTracker/download/0.48',
          'requires' => 
          array (
            'piwik' => '2.4.0',
            'php' => '5.3.10',
          ),
          'readme' => '# Piwik BotTracker Plugin 

## Description

BotTracker ist a plugin to track the visits of bots, spiders and webcrawler, that hit yout page.

This plugin is still in BETA-status, but I have testet it for a while. It should be stable.

Before you install this plugin, here\'s something you should be aware of:
Many webcrawler, spiders and bots don\'t load the images in a page and most of them don\'t execute JavaScript. So you cannot track them with Piwik if you don\'t use the PHP-API. The BotTracker can only track those, who were caught by Piwik itself.



Additional info:
I wrote BotTracker for my own needs but people ask me to make it public - so I put it online.
It\'s free to use and I will support it as long as I can spend the time. But I will *not* activate a donation button. If someone is paying money, I feel like I have to support him. 
I want to work on this plugin because I want to and not because I have to. I hope you can unterstand that.

## Installation / Update

See http://piwik.org/faq/plugins/#faq_21

for additional information go to http://dev.piwik.org/trac/ticket/2391

If you update form Piwik 1.x to Piwik 2.x sometimes the update-script (BotTracker\\Updates\\0.43.php) is not executed. In this case you get an error about a not existing column "extra_stats" when you open the config-page. Then you have to execute the following 2 statemnts on your Piwik-Database (e.g. with MyPHPAdmin):

```sql
ALTER TABLE `piwik_bot_db`
ADD `extra_stats` BOOLEAN NOT NULL DEFAULT FALSE
```
```sql
CREATE TABLE IF NOT EXISTS `piwik_bot_db_stat`
(
 `botId` INTEGER(10) UNSIGNED NOT NULL,
 `idsite` INTEGER(10) UNSIGNED NOT NULL,
 `page` VARCHAR(100) NOT NULL,
 `visit_timestamp` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
 `useragent` VARCHAR(100) NOT NULL,
		 
 PRIMARY KEY(`botId`)
)  DEFAULT CHARSET=utf8
```


The "extra Stats"-Feature is in "early developing". You can collect the data about the who, when and where, but there is currently no widget to display the data.


## Changelog
__0.48__
* change requirements because 0.47 doesn\'t wokr with Piwik 2.3

__0.47__
* bugfix: changes menu-creation for Piwik v2.4

__0.46__
* bugfix: remove depricated method for Piwik v2.2

__0.45__
* add column to primary key in extra-stats-table

__0.44__
* more description for the marketplace

__0.43__
* Compatible with Piwik 2.0

## License

GPL v3 / fair use

## Support

Please direct any feedback to: 

* [https://github.com/Thomas--F/BotTracker/issues](https://github.com/Thomas--F/BotTracker/issues)
* [http://dev.piwik.org/trac/ticket/2391](http://dev.piwik.org/trac/ticket/2391)

',
          'numDownloads' => 93,
          'repositoryChangelogUrl' => 'https://github.com/Thomas--F/BotTracker/commits/0.48',
          'readmeHtml' => 
          array (
            'description' => '

<p>BotTracker ist a plugin to track the visits of bots, spiders and webcrawler, that hit yout page.</p>

<p>This plugin is still in BETA-status, but I have testet it for a while. It should be stable.</p>

<p>Before you install this plugin, here\'s something you should be aware of:
Many webcrawler, spiders and bots don\'t load the images in a page and most of them don\'t execute JavaScript. So you cannot track them with Piwik if you don\'t use the PHP-API. The BotTracker can only track those, who were caught by Piwik itself.</p>

<p>Additional info:
I wrote BotTracker for my own needs but people ask me to make it public - so I put it online.
It\'s free to use and I will support it as long as I can spend the time. But I will <em>not</em> activate a donation button. If someone is paying money, I feel like I have to support him. 
I want to work on this plugin because I want to and not because I have to. I hope you can unterstand that.</p>

',
            'faq' => '',
            'changelog' => '

<p><strong>0.48</strong>
* change requirements because 0.47 doesn\'t wokr with Piwik 2.3</p>

<p><strong>0.47</strong>
* bugfix: changes menu-creation for Piwik v2.4</p>

<p><strong>0.46</strong>
* bugfix: remove depricated method for Piwik v2.2</p>

<p><strong>0.45</strong>
* add column to primary key in extra-stats-table</p>

<p><strong>0.44</strong>
* more description for the marketplace</p>

<p><strong>0.43</strong>
* Compatible with Piwik 2.0</p>

',
            'support' => '

<p>Please direct any feedback to: </p>

<ul><li><a href="https://github.com/Thomas--F/BotTracker/issues">https://github.com/Thomas--F/BotTracker/issues</a></li>
<li><a href="http://dev.piwik.org/trac/ticket/2391">http://dev.piwik.org/trac/ticket/2391</a></li>
</ul>',
          ),
        ),
        6 => 
        array (
          'name' => '0.49',
          'release' => '2014-06-22 17:18:04',
          'download' => '/api/1.0/plugins/BotTracker/download/0.49',
          'requires' => 
          array (
            'piwik' => '>=2.4.0-b6',
            'php' => '5.3.10',
          ),
          'readme' => '# Piwik BotTracker Plugin 

## Description

BotTracker ist a plugin to track the visits of bots, spiders and webcrawler, that hit yout page.

This plugin is still in BETA-status, but I have testet it for a while. It should be stable.

Before you install this plugin, here\'s something you should be aware of:
Many webcrawler, spiders and bots don\'t load the images in a page and most of them don\'t execute JavaScript. So you cannot track them with Piwik if you don\'t use the PHP-API. The BotTracker can only track those, who were caught by Piwik itself.



Additional info:
I wrote BotTracker for my own needs but people ask me to make it public - so I put it online.
It\'s free to use and I will support it as long as I can spend the time. But I will *not* activate a donation button. If someone is paying money, I feel like I have to support him. 
I want to work on this plugin because I want to and not because I have to. I hope you can unterstand that.

## Installation / Update

See http://piwik.org/faq/plugins/#faq_21

for additional information go to http://dev.piwik.org/trac/ticket/2391

If you update form Piwik 1.x to Piwik 2.x sometimes the update-script (BotTracker\\Updates\\0.43.php) is not executed. In this case you get an error about a not existing column "extra_stats" when you open the config-page. Then you have to execute the following 2 statemnts on your Piwik-Database (e.g. with MyPHPAdmin):

```sql
ALTER TABLE `piwik_bot_db`
ADD `extra_stats` BOOLEAN NOT NULL DEFAULT FALSE
```
```sql
CREATE TABLE IF NOT EXISTS `piwik_bot_db_stat`
(
 `botId` INTEGER(10) UNSIGNED NOT NULL,
 `idsite` INTEGER(10) UNSIGNED NOT NULL,
 `page` VARCHAR(100) NOT NULL,
 `visit_timestamp` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
 `useragent` VARCHAR(100) NOT NULL,
		 
 PRIMARY KEY(`botId`)
)  DEFAULT CHARSET=utf8
```


The "extra Stats"-Feature is in "early developing". You can collect the data about the who, when and where, but there is currently no widget to display the data.


## Changelog
__0.49__
* fixed crash with a new and empty webpage

__0.48__
* change requirements because 0.47 doesn\'t work with Piwik 2.3

__0.47__
* bugfix: changes menu-creation for Piwik v2.4

__0.46__
* bugfix: remove depricated method for Piwik v2.2

__0.45__
* add column to primary key in extra-stats-table

__0.44__
* more description for the marketplace

__0.43__
* Compatible with Piwik 2.0

## License

GPL v3 / fair use

## Support

Please direct any feedback to: 

* [https://github.com/Thomas--F/BotTracker/issues](https://github.com/Thomas--F/BotTracker/issues)
* [http://dev.piwik.org/trac/ticket/2391](http://dev.piwik.org/trac/ticket/2391)

',
          'numDownloads' => 1166,
          'repositoryChangelogUrl' => 'https://github.com/Thomas--F/BotTracker/commits/0.49',
          'readmeHtml' => 
          array (
            'description' => '

<p>BotTracker ist a plugin to track the visits of bots, spiders and webcrawler, that hit yout page.</p>

<p>This plugin is still in BETA-status, but I have testet it for a while. It should be stable.</p>

<p>Before you install this plugin, here\'s something you should be aware of:
Many webcrawler, spiders and bots don\'t load the images in a page and most of them don\'t execute JavaScript. So you cannot track them with Piwik if you don\'t use the PHP-API. The BotTracker can only track those, who were caught by Piwik itself.</p>

<p>Additional info:
I wrote BotTracker for my own needs but people ask me to make it public - so I put it online.
It\'s free to use and I will support it as long as I can spend the time. But I will <em>not</em> activate a donation button. If someone is paying money, I feel like I have to support him. 
I want to work on this plugin because I want to and not because I have to. I hope you can unterstand that.</p>

',
            'faq' => '',
            'changelog' => '

<p><strong>0.49</strong>
* fixed crash with a new and empty webpage</p>

<p><strong>0.48</strong>
* change requirements because 0.47 doesn\'t work with Piwik 2.3</p>

<p><strong>0.47</strong>
* bugfix: changes menu-creation for Piwik v2.4</p>

<p><strong>0.46</strong>
* bugfix: remove depricated method for Piwik v2.2</p>

<p><strong>0.45</strong>
* add column to primary key in extra-stats-table</p>

<p><strong>0.44</strong>
* more description for the marketplace</p>

<p><strong>0.43</strong>
* Compatible with Piwik 2.0</p>

',
            'support' => '

<p>Please direct any feedback to: </p>

<ul><li><a href="https://github.com/Thomas--F/BotTracker/issues">https://github.com/Thomas--F/BotTracker/issues</a></li>
<li><a href="http://dev.piwik.org/trac/ticket/2391">http://dev.piwik.org/trac/ticket/2391</a></li>
</ul>',
          ),
        ),
        7 => 
        array (
          'name' => '0.50',
          'release' => '2014-08-07 19:52:04',
          'download' => '/api/1.0/plugins/BotTracker/download/0.50',
          'requires' => 
          array (
            'piwik' => '>=2.4.0-b6',
            'php' => '5.3.10',
          ),
          'readme' => '# Piwik BotTracker Plugin 

## Description

BotTracker ist a plugin to track the visits of bots, spiders and webcrawler, that hit yout page.

This plugin is still in BETA-status, but I have testet it for a while. It should be stable.

Before you install this plugin, here\'s something you should be aware of:
Many webcrawler, spiders and bots don\'t load the images in a page and most of them don\'t execute JavaScript. So you cannot track them with Piwik if you don\'t use the PHP-API. The BotTracker can only track those, who were caught by Piwik itself.



Additional info:
I wrote BotTracker for my own needs but people ask me to make it public - so I put it online.
It\'s free to use and I will support it as long as I can spend the time. But I will *not* activate a donation button. If someone is paying money, I feel like I have to support him. 
I want to work on this plugin because I want to and not because I have to. I hope you can unterstand that.

## Installation / Update

See http://piwik.org/faq/plugins/#faq_21

for additional information go to http://dev.piwik.org/trac/ticket/2391

If you update form Piwik 1.x to Piwik 2.x sometimes the update-script (BotTracker\\Updates\\0.43.php) is not executed. In this case you get an error about a not existing column "extra_stats" when you open the config-page. Then you have to execute the following 2 statemnts on your Piwik-Database (e.g. with MyPHPAdmin):

```sql
ALTER TABLE `piwik_bot_db`
ADD `extra_stats` BOOLEAN NOT NULL DEFAULT FALSE
```
```sql
CREATE TABLE IF NOT EXISTS `piwik_bot_db_stat`
(
 `botId` INTEGER(10) UNSIGNED NOT NULL,
 `idsite` INTEGER(10) UNSIGNED NOT NULL,
 `page` VARCHAR(100) NOT NULL,
 `visit_timestamp` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
 `useragent` VARCHAR(100) NOT NULL,
		 
 PRIMARY KEY(`botId`)
)  DEFAULT CHARSET=utf8
```


The "extra Stats"-Feature is in "early developing". You can collect the data about the who, when and where, but there is currently no widget to display the data.


## Changelog
__0.50__
* bugfix for issue #9 (wrong time zone for last visit)
__0.49__
* fixed crash with a new and empty webpage

__0.48__
* change requirements because 0.47 doesn\'t work with Piwik 2.3

__0.47__
* bugfix: changes menu-creation for Piwik v2.4

__0.46__
* bugfix: remove depricated method for Piwik v2.2

__0.45__
* add column to primary key in extra-stats-table

__0.44__
* more description for the marketplace

__0.43__
* Compatible with Piwik 2.0

## License

GPL v3 / fair use

## Support

Please direct any feedback to: 

* [https://github.com/Thomas--F/BotTracker/issues](https://github.com/Thomas--F/BotTracker/issues)
* [http://dev.piwik.org/trac/ticket/2391](http://dev.piwik.org/trac/ticket/2391)

',
          'numDownloads' => 1,
          'repositoryChangelogUrl' => 'https://github.com/Thomas--F/BotTracker/commits/0.50',
          'readmeHtml' => 
          array (
            'description' => '

<p>BotTracker ist a plugin to track the visits of bots, spiders and webcrawler, that hit yout page.</p>

<p>This plugin is still in BETA-status, but I have testet it for a while. It should be stable.</p>

<p>Before you install this plugin, here\'s something you should be aware of:
Many webcrawler, spiders and bots don\'t load the images in a page and most of them don\'t execute JavaScript. So you cannot track them with Piwik if you don\'t use the PHP-API. The BotTracker can only track those, who were caught by Piwik itself.</p>

<p>Additional info:
I wrote BotTracker for my own needs but people ask me to make it public - so I put it online.
It\'s free to use and I will support it as long as I can spend the time. But I will <em>not</em> activate a donation button. If someone is paying money, I feel like I have to support him. 
I want to work on this plugin because I want to and not because I have to. I hope you can unterstand that.</p>

',
            'faq' => '',
            'changelog' => '

<p><strong>0.50</strong>
* bugfix for issue #9 (wrong time zone for last visit)
<strong>0.49</strong>
* fixed crash with a new and empty webpage</p>

<p><strong>0.48</strong>
* change requirements because 0.47 doesn\'t work with Piwik 2.3</p>

<p><strong>0.47</strong>
* bugfix: changes menu-creation for Piwik v2.4</p>

<p><strong>0.46</strong>
* bugfix: remove depricated method for Piwik v2.2</p>

<p><strong>0.45</strong>
* add column to primary key in extra-stats-table</p>

<p><strong>0.44</strong>
* more description for the marketplace</p>

<p><strong>0.43</strong>
* Compatible with Piwik 2.0</p>

',
            'support' => '

<p>Please direct any feedback to: </p>

<ul><li><a href="https://github.com/Thomas--F/BotTracker/issues">https://github.com/Thomas--F/BotTracker/issues</a></li>
<li><a href="http://dev.piwik.org/trac/ticket/2391">http://dev.piwik.org/trac/ticket/2391</a></li>
</ul>',
          ),
        ),
        8 => 
        array (
          'name' => '0.51',
          'release' => '2014-08-07 20:02:05',
          'download' => '/api/1.0/plugins/BotTracker/download/0.51',
          'requires' => 
          array (
            'piwik' => '>=2.4.0-b6',
            'php' => '5.3.10',
          ),
          'readme' => '# Piwik BotTracker Plugin 

## Description

BotTracker ist a plugin to track the visits of bots, spiders and webcrawler, that hit yout page.

This plugin is still in BETA-status, but I have testet it for a while. It should be stable.

Before you install this plugin, here\'s something you should be aware of:
Many webcrawler, spiders and bots don\'t load the images in a page and most of them don\'t execute JavaScript. So you cannot track them with Piwik if you don\'t use the PHP-API. The BotTracker can only track those, who were caught by Piwik itself.



Additional info:
I wrote BotTracker for my own needs but people ask me to make it public - so I put it online.
It\'s free to use and I will support it as long as I can spend the time. But I will *not* activate a donation button. If someone is paying money, I feel like I have to support him. 
I want to work on this plugin because I want to and not because I have to. I hope you can unterstand that.

## Installation / Update

See http://piwik.org/faq/plugins/#faq_21

for additional information go to http://dev.piwik.org/trac/ticket/2391

If you update form Piwik 1.x to Piwik 2.x sometimes the update-script (BotTracker\\Updates\\0.43.php) is not executed. In this case you get an error about a not existing column "extra_stats" when you open the config-page. Then you have to execute the following 2 statemnts on your Piwik-Database (e.g. with MyPHPAdmin):

```sql
ALTER TABLE `piwik_bot_db`
ADD `extra_stats` BOOLEAN NOT NULL DEFAULT FALSE
```
```sql
CREATE TABLE IF NOT EXISTS `piwik_bot_db_stat`
(
 `botId` INTEGER(10) UNSIGNED NOT NULL,
 `idsite` INTEGER(10) UNSIGNED NOT NULL,
 `page` VARCHAR(100) NOT NULL,
 `visit_timestamp` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
 `useragent` VARCHAR(100) NOT NULL,
		 
 PRIMARY KEY(`botId`)
)  DEFAULT CHARSET=utf8
```


The "extra Stats"-Feature is in "early developing". You can collect the data about the who, when and where, but there is currently no widget to display the data.


## Changelog
__0.51__
* emergency-fix for v0.50
__0.50__
* bugfix for issue #9 (wrong time zone for last visit)
__0.49__
* fixed crash with a new and empty webpage

__0.48__
* change requirements because 0.47 doesn\'t work with Piwik 2.3

__0.47__
* bugfix: changes menu-creation for Piwik v2.4

__0.46__
* bugfix: remove depricated method for Piwik v2.2

__0.45__
* add column to primary key in extra-stats-table

__0.44__
* more description for the marketplace

__0.43__
* Compatible with Piwik 2.0

## License

GPL v3 / fair use

## Support

Please direct any feedback to: 

* [https://github.com/Thomas--F/BotTracker/issues](https://github.com/Thomas--F/BotTracker/issues)
* [http://dev.piwik.org/trac/ticket/2391](http://dev.piwik.org/trac/ticket/2391)

',
          'numDownloads' => 999,
          'repositoryChangelogUrl' => 'https://github.com/Thomas--F/BotTracker/commits/0.51',
          'readmeHtml' => 
          array (
            'description' => '

<p>BotTracker ist a plugin to track the visits of bots, spiders and webcrawler, that hit yout page.</p>

<p>This plugin is still in BETA-status, but I have testet it for a while. It should be stable.</p>

<p>Before you install this plugin, here\'s something you should be aware of:
Many webcrawler, spiders and bots don\'t load the images in a page and most of them don\'t execute JavaScript. So you cannot track them with Piwik if you don\'t use the PHP-API. The BotTracker can only track those, who were caught by Piwik itself.</p>

<p>Additional info:
I wrote BotTracker for my own needs but people ask me to make it public - so I put it online.
It\'s free to use and I will support it as long as I can spend the time. But I will <em>not</em> activate a donation button. If someone is paying money, I feel like I have to support him. 
I want to work on this plugin because I want to and not because I have to. I hope you can unterstand that.</p>

',
            'faq' => '',
            'changelog' => '

<p><strong>0.51</strong>
* emergency-fix for v0.50
<strong>0.50</strong>
* bugfix for issue #9 (wrong time zone for last visit)
<strong>0.49</strong>
* fixed crash with a new and empty webpage</p>

<p><strong>0.48</strong>
* change requirements because 0.47 doesn\'t work with Piwik 2.3</p>

<p><strong>0.47</strong>
* bugfix: changes menu-creation for Piwik v2.4</p>

<p><strong>0.46</strong>
* bugfix: remove depricated method for Piwik v2.2</p>

<p><strong>0.45</strong>
* add column to primary key in extra-stats-table</p>

<p><strong>0.44</strong>
* more description for the marketplace</p>

<p><strong>0.43</strong>
* Compatible with Piwik 2.0</p>

',
            'support' => '

<p>Please direct any feedback to: </p>

<ul><li><a href="https://github.com/Thomas--F/BotTracker/issues">https://github.com/Thomas--F/BotTracker/issues</a></li>
<li><a href="http://dev.piwik.org/trac/ticket/2391">http://dev.piwik.org/trac/ticket/2391</a></li>
</ul>',
          ),
        ),
        9 => 
        array (
          'name' => '0.52',
          'release' => '2014-09-04 19:52:04',
          'download' => '/api/1.0/plugins/BotTracker/download/0.52',
          'requires' => 
          array (
            'piwik' => '>=2.4.0-b6',
            'php' => '5.3.10',
          ),
          'readme' => '# Piwik BotTracker Plugin 

## Description

BotTracker ist a plugin to track the visits of bots, spiders and webcrawler, that hit yout page.

This plugin is still in BETA-status, but I have testet it for a while. It should be stable.

Before you install this plugin, here\'s something you should be aware of:
Many webcrawler, spiders and bots don\'t load the images in a page and most of them don\'t execute JavaScript. So you cannot track them with Piwik if you don\'t use the PHP-API. The BotTracker can only track those, who were caught by Piwik itself.



Additional info:
I wrote BotTracker for my own needs but people ask me to make it public - so I put it online.
It\'s free to use and I will support it as long as I can spend the time. But I will *not* activate a donation button. If someone is paying money, I feel like I have to support him. 
I want to work on this plugin because I want to and not because I have to. I hope you can unterstand that.

## Installation / Update

See http://piwik.org/faq/plugins/#faq_21

for additional information go to http://dev.piwik.org/trac/ticket/2391

If you update form Piwik 1.x to Piwik 2.x sometimes the update-script (BotTracker\\Updates\\0.43.php) is not executed. In this case you get an error about a not existing column "extra_stats" when you open the config-page. Then you have to execute the following 2 statemnts on your Piwik-Database (e.g. with MyPHPAdmin):

```sql
ALTER TABLE `piwik_bot_db`
ADD `extra_stats` BOOLEAN NOT NULL DEFAULT FALSE
```
```sql
CREATE TABLE IF NOT EXISTS `piwik_bot_db_stat`
(
 `botId` INTEGER(10) UNSIGNED NOT NULL,
 `idsite` INTEGER(10) UNSIGNED NOT NULL,
 `page` VARCHAR(100) NOT NULL,
 `visit_timestamp` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
 `useragent` VARCHAR(100) NOT NULL,
		 
 PRIMARY KEY(`botId`)
)  DEFAULT CHARSET=utf8
```


The "extra Stats"-Feature is in "early developing". You can collect the data about the who, when and where, but there is currently no widget to display the data.


## Changelog
__0.52__
* bugfix for issue #10 (NOTICE in error-log for undeclared variables)
__0.51__
* emergency-fix for v0.50
__0.50__
* bugfix for issue #9 (wrong time zone for last visit)
__0.49__
* fixed crash with a new and empty webpage

__0.48__
* change requirements because 0.47 doesn\'t work with Piwik 2.3

__0.47__
* bugfix: changes menu-creation for Piwik v2.4

__0.46__
* bugfix: remove depricated method for Piwik v2.2

__0.45__
* add column to primary key in extra-stats-table

__0.44__
* more description for the marketplace

__0.43__
* Compatible with Piwik 2.0

## License

GPL v3 / fair use

## Support

Please direct any feedback to: 

* [https://github.com/Thomas--F/BotTracker/issues](https://github.com/Thomas--F/BotTracker/issues)
* [http://dev.piwik.org/trac/ticket/2391](http://dev.piwik.org/trac/ticket/2391)

',
          'numDownloads' => 2265,
          'repositoryChangelogUrl' => 'https://github.com/Thomas--F/BotTracker/commits/0.52',
          'readmeHtml' => 
          array (
            'description' => '

<p>BotTracker ist a plugin to track the visits of bots, spiders and webcrawler, that hit yout page.</p>

<p>This plugin is still in BETA-status, but I have testet it for a while. It should be stable.</p>

<p>Before you install this plugin, here\'s something you should be aware of:
Many webcrawler, spiders and bots don\'t load the images in a page and most of them don\'t execute JavaScript. So you cannot track them with Piwik if you don\'t use the PHP-API. The BotTracker can only track those, who were caught by Piwik itself.</p>

<p>Additional info:
I wrote BotTracker for my own needs but people ask me to make it public - so I put it online.
It\'s free to use and I will support it as long as I can spend the time. But I will <em>not</em> activate a donation button. If someone is paying money, I feel like I have to support him. 
I want to work on this plugin because I want to and not because I have to. I hope you can unterstand that.</p>

',
            'faq' => '',
            'changelog' => '

<p><strong>0.52</strong>
* bugfix for issue #10 (NOTICE in error-log for undeclared variables)
<strong>0.51</strong>
* emergency-fix for v0.50
<strong>0.50</strong>
* bugfix for issue #9 (wrong time zone for last visit)
<strong>0.49</strong>
* fixed crash with a new and empty webpage</p>

<p><strong>0.48</strong>
* change requirements because 0.47 doesn\'t work with Piwik 2.3</p>

<p><strong>0.47</strong>
* bugfix: changes menu-creation for Piwik v2.4</p>

<p><strong>0.46</strong>
* bugfix: remove depricated method for Piwik v2.2</p>

<p><strong>0.45</strong>
* add column to primary key in extra-stats-table</p>

<p><strong>0.44</strong>
* more description for the marketplace</p>

<p><strong>0.43</strong>
* Compatible with Piwik 2.0</p>

',
            'support' => '

<p>Please direct any feedback to: </p>

<ul><li><a href="https://github.com/Thomas--F/BotTracker/issues">https://github.com/Thomas--F/BotTracker/issues</a></li>
<li><a href="http://dev.piwik.org/trac/ticket/2391">http://dev.piwik.org/trac/ticket/2391</a></li>
</ul>',
          ),
        ),
      ),
    ),
    1 => 
    array (
      'name' => 'VisitorGenerator',
      'owner' => 'piwik',
      'description' => 'This plugin is a developer tool that will generate fake visits. It\'s only useful if you\'re creating your own Piwik plugin or theme.',
      'homepage' => 'http://piwik.org',
      'license' => 'GPL v3+',
      'createdDateTime' => '2013-10-31 22:23:05',
      'donate' => 
      array (
      ),
      'isTheme' => false,
      'keywords' => 
      array (
        0 => 'development',
        1 => 'tools',
      ),
      'authors' => 
      array (
        0 => 
        array (
          'name' => 'Piwik',
          'email' => 'hello@piwik.org',
          'homepage' => 'http://piwik.org',
        ),
      ),
      'repositoryUrl' => 'https://github.com/piwik/plugin-VisitorGenerator',
      'lastUpdated' => '2014-06-02 10:18:21',
      'latestVersion' => '1.2.2',
      'numDownloads' => 5295,
      'screenshots' => 
      array (
        0 => 'http://plugins.piwik.org/VisitorGenerator/images/Visitor_Generator.png',
      ),
      'activity' => 
      array (
        'numCommits' => '138',
        'numContributors' => '9',
        'lastCommitDate' => '2014-09-21 11:15:47',
      ),
      'featured' => false,
      'versions' => 
      array (
        0 => 
        array (
          'name' => '1.0',
          'release' => '2013-10-31 22:23:05',
          'download' => '/api/1.0/plugins/VisitorGenerator/download/1.0',
          'requires' => 
          array (
            'piwik' => '>=2.0.0',
            'php' => '>=5.3.0',
          ),
          'readme' => '# Piwik VisitorGenerator Plugin

## Description

This plugin is a developer tool that will generate fake visits. It\'s only useful if you\'re creating your own Piwik plugin or theme.

## Changelog

- 1.0 Initial release

## Support

Please direct any feedback to hello@piwik.org
',
          'numDownloads' => 1,
          'repositoryChangelogUrl' => 'https://github.com/piwik/plugin-VisitorGenerator/commits/1.0',
          'readmeHtml' => 
          array (
            'description' => '

<p>This plugin is a developer tool that will generate fake visits. It\'s only useful if you\'re creating your own Piwik plugin or theme.</p>

',
            'faq' => '',
            'changelog' => '

<ul><li>1.0 Initial release</li>
</ul>',
            'support' => '

<p>Please direct any feedback to hello@piwik.org</p>',
          ),
        ),
        1 => 
        array (
          'name' => '1.0.1',
          'release' => '2013-11-01 01:30:04',
          'download' => '/api/1.0/plugins/VisitorGenerator/download/1.0.1',
          'requires' => 
          array (
            'piwik' => '>=2.0.0',
            'php' => '>=5.3.0',
          ),
          'readme' => '# Piwik VisitorGenerator Plugin

## Description

Plugin to create fake visits. This can be used by Piwik users or developers as an easy way to generate fake data to populate Piwik reports.

You can overwrite the log file that is used to generate fake visits in [plugins/VisitorGenerator/data/access.log](https://github.com/piwik/plugin-VisitorGenerator/blob/master/data/access.log).

## Changelog

- 1.0 Initial release

## Support

Please direct any feedback to hello@piwik.org
',
          'numDownloads' => 0,
          'repositoryChangelogUrl' => 'https://github.com/piwik/plugin-VisitorGenerator/commits/1.0.1',
          'readmeHtml' => 
          array (
            'description' => '

<p>Plugin to create fake visits. This can be used by Piwik users or developers as an easy way to generate fake data to populate Piwik reports.</p>

<p>You can overwrite the log file that is used to generate fake visits in <a href="https://github.com/piwik/plugin-VisitorGenerator/blob/master/data/access.log">plugins/VisitorGenerator/data/access.log</a>.</p>

',
            'faq' => '',
            'changelog' => '

<ul><li>1.0 Initial release</li>
</ul>',
            'support' => '

<p>Please direct any feedback to hello@piwik.org</p>',
          ),
        ),
        2 => 
        array (
          'name' => '1.0.2',
          'release' => '2013-11-01 01:44:05',
          'download' => '/api/1.0/plugins/VisitorGenerator/download/1.0.2',
          'requires' => 
          array (
            'piwik' => '>=2.0.0',
            'php' => '>=5.3.0',
          ),
          'readme' => '# Piwik VisitorGenerator Plugin

## Description

Plugin to create fake visits. This can be used by Piwik users or developers as an easy way to generate fake data to populate Piwik reports.

You can overwrite the log file that is used to generate fake visits in [plugins/VisitorGenerator/data/access.log](https://github.com/piwik/plugin-VisitorGenerator/blob/master/data/access.log).

## Changelog

- 1.0 Initial release

## Support

Please direct any feedback to [hello@piwik.org](mailto:hello@piwik.org)
',
          'numDownloads' => 1625,
          'repositoryChangelogUrl' => 'https://github.com/piwik/plugin-VisitorGenerator/commits/1.0.2',
          'readmeHtml' => 
          array (
            'description' => '

<p>Plugin to create fake visits. This can be used by Piwik users or developers as an easy way to generate fake data to populate Piwik reports.</p>

<p>You can overwrite the log file that is used to generate fake visits in <a href="https://github.com/piwik/plugin-VisitorGenerator/blob/master/data/access.log">plugins/VisitorGenerator/data/access.log</a>.</p>

',
            'faq' => '',
            'changelog' => '

<ul><li>1.0 Initial release</li>
</ul>',
            'support' => '

<p>Please direct any feedback to <a href="mailto:hello@piwik.org">hello@piwik.org</a></p>',
          ),
        ),
        3 => 
        array (
          'name' => '1.1',
          'release' => '2014-04-02 03:10:12',
          'download' => '/api/1.0/plugins/VisitorGenerator/download/1.1',
          'requires' => 
          array (
            'piwik' => '>=2.2.0-b1',
            'php' => '>=5.3.0',
          ),
          'readme' => '# Piwik VisitorGenerator Plugin

## Description

Plugin to create fake visits, websites, users and goals. This can be used by Piwik users or developers as an easy way to generate fake data to populate Piwik reports.

You can overwrite the log files that are used to generate fake visits in [plugins/VisitorGenerator/data](https://github.com/piwik/plugin-VisitorGenerator/blob/master/data) or add new logs to the `data` directory. All files ending with `*.log` will be replayed.

### Usage 

#### UI
The plugin adds a new item to the Piwik admin UI visible only for users having Super User access under the section "Diagnostic". There you can select a site and for how many days in the past you want to generate new visits.

#### CLI
It also adds the following commands to the [Piwik CLI tool](http://developer.piwik.org/guides/piwik-on-the-command-line):

* Generate visits
* Generate goals
* Generate users
* Generate websites

##### Examples
* `./console visitorgenerator:generate-goals --idsite 5` generates some predefined goals for site with id 5
* `./console visitorgenerator:generate-users --limit 100`  generates 100 users
* `./console visitorgenerator:generate-websites --limit 100` generates 100 websites
* `./console visitorgenerator:generate-visits --idsite 5`  generates many visits for site with id 5 for today
* `./console visitorgenerator:generate-visits --idsite 5 --days 2` generates many visits for site with id 5 for today and yesterday

## Changelog

- 1.0 Initial release
- 1.1 New features:
   * Added CLI commands
   * Added possibility to generate websites, users and goals
   * Replay all log files within the data directory

## Support

Please direct any feedback to [hello@piwik.org](mailto:hello@piwik.org)

### Legalnotice

This plugin is released under the GPLv3+ license.

This plugin uses the [Faker](libs/Faker/readme.md) library which is released under the [MIT license](libs/Faker/LICENSE).
',
          'numDownloads' => 625,
          'repositoryChangelogUrl' => 'https://github.com/piwik/plugin-VisitorGenerator/commits/1.1',
          'readmeHtml' => 
          array (
            'description' => '

<p>Plugin to create fake visits, websites, users and goals. This can be used by Piwik users or developers as an easy way to generate fake data to populate Piwik reports.</p>

<p>You can overwrite the log files that are used to generate fake visits in <a href="https://github.com/piwik/plugin-VisitorGenerator/blob/master/data">plugins/VisitorGenerator/data</a> or add new logs to the data directory. All files ending with *.log will be replayed.</p>

<h3>Usage</h3>

<h4>UI</h4>

<p>The plugin adds a new item to the Piwik admin UI visible only for users having Super User access under the section "Diagnostic". There you can select a site and for how many days in the past you want to generate new visits.</p>

<h4>CLI</h4>

<p>It also adds the following commands to the <a href="http://developer.piwik.org/guides/piwik-on-the-command-line">Piwik CLI tool</a>:</p>

<ul><li>Generate visits</li>
<li>Generate goals</li>
<li>Generate users</li>
<li>Generate websites</li>
</ul><h5>Examples</h5>

<ul><li>./console visitorgenerator:generate-goals --idsite 5 generates some predefined goals for site with id 5</li>
<li>./console visitorgenerator:generate-users --limit 100  generates 100 users</li>
<li>./console visitorgenerator:generate-websites --limit 100 generates 100 websites</li>
<li>./console visitorgenerator:generate-visits --idsite 5  generates many visits for site with id 5 for today</li>
<li>./console visitorgenerator:generate-visits --idsite 5 --days 2 generates many visits for site with id 5 for today and yesterday</li>
</ul>',
            'faq' => '',
            'changelog' => '

<ul><li>1.0 Initial release</li>
<li>1.1 New features:

<ul><li>Added CLI commands</li>
<li>Added possibility to generate websites, users and goals</li>
<li>Replay all log files within the data directory</li>
</ul></li>
</ul>',
            'support' => '

<p>Please direct any feedback to <a href="mailto:hello@piwik.org">hello@piwik.org</a></p>

<h3>Legalnotice</h3>

<p>This plugin is released under the GPLv3+ license.</p>

<p>This plugin uses the <a href="libs/Faker/readme.md">Faker</a> library which is released under the <a href="libs/Faker/LICENSE">MIT license</a>.</p>',
          ),
        ),
        4 => 
        array (
          'name' => '1.2',
          'release' => '2014-05-04 22:30:16',
          'download' => '/api/1.0/plugins/VisitorGenerator/download/1.2',
          'requires' => 
          array (
            'piwik' => '>=2.2.0-b19',
            'php' => '>=5.3.0',
          ),
          'readme' => '# Piwik VisitorGenerator Plugin

## Description

Plugin to create fake visits, websites, users and goals. This can be used by Piwik users or developers as an easy way to generate fake data to populate Piwik reports.

You can overwrite the log files that are used to generate fake visits in [plugins/VisitorGenerator/data](https://github.com/piwik/plugin-VisitorGenerator/blob/master/data) or add new logs to the `data` directory. All files ending with `*.log` will be replayed.

Plugin developers can provide their own log files by placing \'*.log\' files within a \'data\' directory of their plugin. This way plugin developers make sure there will be always useful test data.

### Usage 

#### UI
The plugin adds a new item to the Piwik admin UI visible only for users having Super User access under the section "Diagnostic". There you can select a site and for how many days in the past you want to generate new visits.

#### CLI
It also adds the following commands to the [Piwik CLI tool](http://developer.piwik.org/guides/piwik-on-the-command-line):

* Generate visits
* Generate goals
* Generate users
* Generate websites
* Generate annotation
* Shorten log file
* Anonymize log file

##### Examples
* `./console visitorgenerator:generate-annotation --idsite 5` generate one annotation for the current day for site with id 5
* `./console visitorgenerator:generate-goals --idsite 5` generates some predefined goals for site with id 5
* `./console visitorgenerator:generate-users --limit 100`  generates 100 users
* `./console visitorgenerator:generate-websites --limit 100` generates 100 websites
* `./console visitorgenerator:generate-visits --idsite 5`  generates many visits for site with id 5 for today
* `./console visitorgenerator:generate-visits --idsite 5 --days 2` generates many visits for site with id 5 for today and yesterday
* `./console visitorgenerator:anonymize-log /path/to/log` takes an Apache log file, anonymizes it and places it in a data directory so it will be replayed the next time "generate-visits" is executed
* `./console visitorgenerator:shorten-log /path/to/file.log > file.short.log` takes a large Apache log file and keeps only a small number of logs per day

## Changelog

- 1.0 Initial release
- 1.1 New features:
   * Added CLI commands
   * Added possibility to generate websites, users and goals
   * Replay all log files within the data directory
- 1.2 New features:
   * New log file added
   * Added possibility to shorten and anonymize log files
   * Added possibility to let plugins define their own log files
   * Added possibility to generate annotations
   * Replay only log entries having the same day of the month

## Support

Please direct any feedback to [hello@piwik.org](mailto:hello@piwik.org)

### Legalnotice

This plugin is released under the GPLv3+ license.

This plugin uses the [Faker](libs/Faker/readme.md) library which is released under the [MIT license](libs/Faker/LICENSE).
',
          'numDownloads' => 472,
          'repositoryChangelogUrl' => 'https://github.com/piwik/plugin-VisitorGenerator/commits/1.2',
          'readmeHtml' => 
          array (
            'description' => '

<p>Plugin to create fake visits, websites, users and goals. This can be used by Piwik users or developers as an easy way to generate fake data to populate Piwik reports.</p>

<p>You can overwrite the log files that are used to generate fake visits in <a href="https://github.com/piwik/plugin-VisitorGenerator/blob/master/data">plugins/VisitorGenerator/data</a> or add new logs to the data directory. All files ending with *.log will be replayed.</p>

<p>Plugin developers can provide their own log files by placing \'*.log\' files within a \'data\' directory of their plugin. This way plugin developers make sure there will be always useful test data.</p>

<h3>Usage</h3>

<h4>UI</h4>

<p>The plugin adds a new item to the Piwik admin UI visible only for users having Super User access under the section "Diagnostic". There you can select a site and for how many days in the past you want to generate new visits.</p>

<h4>CLI</h4>

<p>It also adds the following commands to the <a href="http://developer.piwik.org/guides/piwik-on-the-command-line">Piwik CLI tool</a>:</p>

<ul><li>Generate visits</li>
<li>Generate goals</li>
<li>Generate users</li>
<li>Generate websites</li>
<li>Generate annotation</li>
<li>Shorten log file</li>
<li>Anonymize log file</li>
</ul><h5>Examples</h5>

<ul><li>./console visitorgenerator:generate-annotation --idsite 5 generate one annotation for the current day for site with id 5</li>
<li>./console visitorgenerator:generate-goals --idsite 5 generates some predefined goals for site with id 5</li>
<li>./console visitorgenerator:generate-users --limit 100  generates 100 users</li>
<li>./console visitorgenerator:generate-websites --limit 100 generates 100 websites</li>
<li>./console visitorgenerator:generate-visits --idsite 5  generates many visits for site with id 5 for today</li>
<li>./console visitorgenerator:generate-visits --idsite 5 --days 2 generates many visits for site with id 5 for today and yesterday</li>
<li>./console visitorgenerator:anonymize-log /path/to/log takes an Apache log file, anonymizes it and places it in a data directory so it will be replayed the next time "generate-visits" is executed</li>
<li>./console visitorgenerator:shorten-log /path/to/file.log &gt; file.short.log takes a large Apache log file and keeps only a small number of logs per day</li>
</ul>',
            'faq' => '',
            'changelog' => '

<ul><li>1.0 Initial release</li>
<li>1.1 New features:

<ul><li>Added CLI commands</li>
<li>Added possibility to generate websites, users and goals</li>
<li>Replay all log files within the data directory</li>
</ul></li>
<li>1.2 New features:

<ul><li>New log file added</li>
<li>Added possibility to shorten and anonymize log files</li>
<li>Added possibility to let plugins define their own log files</li>
<li>Added possibility to generate annotations</li>
<li>Replay only log entries having the same day of the month</li>
</ul></li>
</ul>',
            'support' => '

<p>Please direct any feedback to <a href="mailto:hello@piwik.org">hello@piwik.org</a></p>

<h3>Legalnotice</h3>

<p>This plugin is released under the GPLv3+ license.</p>

<p>This plugin uses the <a href="libs/Faker/readme.md">Faker</a> library which is released under the <a href="libs/Faker/LICENSE">MIT license</a>.</p>',
          ),
        ),
        5 => 
        array (
          'name' => '1.2.1',
          'release' => '2014-05-22 04:00:19',
          'download' => '/api/1.0/plugins/VisitorGenerator/download/1.2.1',
          'requires' => 
          array (
            'piwik' => '>=2.2.0-b19',
            'php' => '>=5.3.0',
          ),
          'readme' => '# Piwik VisitorGenerator Plugin

## Description

Plugin to create fake visits, websites, users and goals. This can be used by Piwik users or developers as an easy way to generate fake data to populate Piwik reports.

You can overwrite the log files that are used to generate fake visits in [plugins/VisitorGenerator/data](https://github.com/piwik/plugin-VisitorGenerator/blob/master/data) or add new logs to the `data` directory. All files ending with `*.log` will be replayed.

Plugin developers can provide their own log files by placing \'*.log\' files within a \'data\' directory of their plugin. This way plugin developers make sure there will be always useful test data.

### Usage 

#### UI
The plugin adds a new item to the Piwik admin UI visible only for users having Super User access under the section "Diagnostic". There you can select a site and for how many days in the past you want to generate new visits.

#### CLI
It also adds the following commands to the [Piwik CLI tool](http://developer.piwik.org/guides/piwik-on-the-command-line):

* Generate visits
* Generate goals
* Generate users
* Generate websites
* Generate annotation
* Shorten log file
* Anonymize log file

##### Examples
* `./console visitorgenerator:generate-annotation --idsite 5` generate one annotation for the current day for site with id 5
* `./console visitorgenerator:generate-goals --idsite 5` generates some predefined goals for site with id 5
* `./console visitorgenerator:generate-users --limit 100`  generates 100 users
* `./console visitorgenerator:generate-websites --limit 100` generates 100 websites
* `./console visitorgenerator:generate-visits --idsite 5`  generates many visits for site with id 5 for today
* `./console visitorgenerator:generate-visits --idsite 5 --days 2` generates many visits for site with id 5 for today and yesterday
* `./console visitorgenerator:anonymize-log /path/to/log` takes an Apache log file, anonymizes it and places it in a data directory so it will be replayed the next time "generate-visits" is executed
* `./console visitorgenerator:shorten-log /path/to/file.log > file.short.log` takes a large Apache log file and keeps only a small number of logs per day

## Changelog

- 1.0 Initial release
- 1.1 New features:
   * Added CLI commands
   * Added possibility to generate websites, users and goals
   * Replay all log files within the data directory
- 1.2 New features:
   * New log file added
   * Added possibility to shorten and anonymize log files
   * Added possibility to let plugins define their own log files
   * Added possibility to generate annotations
   * Replay only log entries having the same day of the month
- 1.2.1 New workaround:
   * When force_ssl is enabled, and visits are generated on `localhost`, force to use HTTP instead of HTTPS

## Support

Please direct any feedback to [hello@piwik.org](mailto:hello@piwik.org)

### Legalnotice

This plugin is released under the GPLv3+ license.

This plugin uses the [Faker](libs/Faker/readme.md) library which is released under the [MIT license](libs/Faker/LICENSE).
',
          'numDownloads' => 357,
          'repositoryChangelogUrl' => 'https://github.com/piwik/plugin-VisitorGenerator/commits/1.2.1',
          'readmeHtml' => 
          array (
            'description' => '

<p>Plugin to create fake visits, websites, users and goals. This can be used by Piwik users or developers as an easy way to generate fake data to populate Piwik reports.</p>

<p>You can overwrite the log files that are used to generate fake visits in <a href="https://github.com/piwik/plugin-VisitorGenerator/blob/master/data">plugins/VisitorGenerator/data</a> or add new logs to the data directory. All files ending with *.log will be replayed.</p>

<p>Plugin developers can provide their own log files by placing \'*.log\' files within a \'data\' directory of their plugin. This way plugin developers make sure there will be always useful test data.</p>

<h3>Usage</h3>

<h4>UI</h4>

<p>The plugin adds a new item to the Piwik admin UI visible only for users having Super User access under the section "Diagnostic". There you can select a site and for how many days in the past you want to generate new visits.</p>

<h4>CLI</h4>

<p>It also adds the following commands to the <a href="http://developer.piwik.org/guides/piwik-on-the-command-line">Piwik CLI tool</a>:</p>

<ul><li>Generate visits</li>
<li>Generate goals</li>
<li>Generate users</li>
<li>Generate websites</li>
<li>Generate annotation</li>
<li>Shorten log file</li>
<li>Anonymize log file</li>
</ul><h5>Examples</h5>

<ul><li>./console visitorgenerator:generate-annotation --idsite 5 generate one annotation for the current day for site with id 5</li>
<li>./console visitorgenerator:generate-goals --idsite 5 generates some predefined goals for site with id 5</li>
<li>./console visitorgenerator:generate-users --limit 100  generates 100 users</li>
<li>./console visitorgenerator:generate-websites --limit 100 generates 100 websites</li>
<li>./console visitorgenerator:generate-visits --idsite 5  generates many visits for site with id 5 for today</li>
<li>./console visitorgenerator:generate-visits --idsite 5 --days 2 generates many visits for site with id 5 for today and yesterday</li>
<li>./console visitorgenerator:anonymize-log /path/to/log takes an Apache log file, anonymizes it and places it in a data directory so it will be replayed the next time "generate-visits" is executed</li>
<li>./console visitorgenerator:shorten-log /path/to/file.log &gt; file.short.log takes a large Apache log file and keeps only a small number of logs per day</li>
</ul>',
            'faq' => '',
            'changelog' => '

<ul><li>1.0 Initial release</li>
<li>1.1 New features:

<ul><li>Added CLI commands</li>
<li>Added possibility to generate websites, users and goals</li>
<li>Replay all log files within the data directory</li>
</ul></li>
<li>1.2 New features:

<ul><li>New log file added</li>
<li>Added possibility to shorten and anonymize log files</li>
<li>Added possibility to let plugins define their own log files</li>
<li>Added possibility to generate annotations</li>
<li>Replay only log entries having the same day of the month</li>
</ul></li>
<li>1.2.1 New workaround:

<ul><li>When force_ssl is enabled, and visits are generated on localhost, force to use HTTP instead of HTTPS</li>
</ul></li>
</ul>',
            'support' => '

<p>Please direct any feedback to <a href="mailto:hello@piwik.org">hello@piwik.org</a></p>

<h3>Legalnotice</h3>

<p>This plugin is released under the GPLv3+ license.</p>

<p>This plugin uses the <a href="libs/Faker/readme.md">Faker</a> library which is released under the <a href="libs/Faker/LICENSE">MIT license</a>.</p>',
          ),
        ),
        6 => 
        array (
          'name' => '1.2.2',
          'release' => '2014-06-02 10:18:21',
          'download' => '/api/1.0/plugins/VisitorGenerator/download/1.2.2',
          'requires' => 
          array (
            'piwik' => '>=2.4.0-b1',
            'php' => '>=5.3.0',
          ),
          'readme' => '# Piwik VisitorGenerator Plugin

## Description

Plugin to create fake visits, websites, users and goals. This can be used by Piwik users or developers as an easy way to generate fake data to populate Piwik reports.

You can overwrite the log files that are used to generate fake visits in [plugins/VisitorGenerator/data](https://github.com/piwik/plugin-VisitorGenerator/blob/master/data) or add new logs to the `data` directory. All files ending with `*.log` will be replayed.

Plugin developers can provide their own log files by placing \'*.log\' files within a \'data\' directory of their plugin. This way plugin developers make sure there will be always useful test data.

### Usage 

#### UI
The plugin adds a new item to the Piwik admin UI visible only for users having Super User access under the section "Diagnostic". There you can select a site and for how many days in the past you want to generate new visits.

#### CLI
It also adds the following commands to the [Piwik CLI tool](http://developer.piwik.org/guides/piwik-on-the-command-line):

* Generate visits
* Generate goals
* Generate users
* Generate websites
* Generate annotation
* Shorten log file
* Anonymize log file

##### Examples
* `./console visitorgenerator:generate-annotation --idsite 5` generate one annotation for the current day for site with id 5
* `./console visitorgenerator:generate-goals --idsite 5` generates some predefined goals for site with id 5
* `./console visitorgenerator:generate-users --limit 100`  generates 100 users
* `./console visitorgenerator:generate-websites --limit 100` generates 100 websites
* `./console visitorgenerator:generate-visits --idsite 5`  generates many visits for site with id 5 for today
* `./console visitorgenerator:generate-visits --idsite 5 --days 2` generates many visits for site with id 5 for today and yesterday
* `./console visitorgenerator:anonymize-log /path/to/log` takes an Apache log file, anonymizes it and places it in a data directory so it will be replayed the next time "generate-visits" is executed
* `./console visitorgenerator:shorten-log /path/to/file.log > file.short.log` takes a large Apache log file and keeps only a small number of logs per day

## Changelog

- 1.0 Initial release
- 1.1 New features:
   * Added CLI commands
   * Added possibility to generate websites, users and goals
   * Replay all log files within the data directory
- 1.2 New features:
   * New log file added
   * Added possibility to shorten and anonymize log files
   * Added possibility to let plugins define their own log files
   * Added possibility to generate annotations
   * Replay only log entries having the same day of the month
- 1.2.1 New workaround:
   * When force_ssl is enabled, and visits are generated on `localhost`, force to use HTTP instead of HTTPS

## Support

Please direct any feedback to [hello@piwik.org](mailto:hello@piwik.org)

### Legalnotice

This plugin is released under the GPLv3+ license.

This plugin uses the [Faker](libs/Faker/readme.md) library which is released under the [MIT license](libs/Faker/LICENSE).
',
          'numDownloads' => 2215,
          'repositoryChangelogUrl' => 'https://github.com/piwik/plugin-VisitorGenerator/commits/1.2.2',
          'readmeHtml' => 
          array (
            'description' => '

<p>Plugin to create fake visits, websites, users and goals. This can be used by Piwik users or developers as an easy way to generate fake data to populate Piwik reports.</p>

<p>You can overwrite the log files that are used to generate fake visits in <a href="https://github.com/piwik/plugin-VisitorGenerator/blob/master/data">plugins/VisitorGenerator/data</a> or add new logs to the data directory. All files ending with *.log will be replayed.</p>

<p>Plugin developers can provide their own log files by placing \'*.log\' files within a \'data\' directory of their plugin. This way plugin developers make sure there will be always useful test data.</p>

<h3>Usage</h3>

<h4>UI</h4>

<p>The plugin adds a new item to the Piwik admin UI visible only for users having Super User access under the section "Diagnostic". There you can select a site and for how many days in the past you want to generate new visits.</p>

<h4>CLI</h4>

<p>It also adds the following commands to the <a href="http://developer.piwik.org/guides/piwik-on-the-command-line">Piwik CLI tool</a>:</p>

<ul><li>Generate visits</li>
<li>Generate goals</li>
<li>Generate users</li>
<li>Generate websites</li>
<li>Generate annotation</li>
<li>Shorten log file</li>
<li>Anonymize log file</li>
</ul><h5>Examples</h5>

<ul><li>./console visitorgenerator:generate-annotation --idsite 5 generate one annotation for the current day for site with id 5</li>
<li>./console visitorgenerator:generate-goals --idsite 5 generates some predefined goals for site with id 5</li>
<li>./console visitorgenerator:generate-users --limit 100  generates 100 users</li>
<li>./console visitorgenerator:generate-websites --limit 100 generates 100 websites</li>
<li>./console visitorgenerator:generate-visits --idsite 5  generates many visits for site with id 5 for today</li>
<li>./console visitorgenerator:generate-visits --idsite 5 --days 2 generates many visits for site with id 5 for today and yesterday</li>
<li>./console visitorgenerator:anonymize-log /path/to/log takes an Apache log file, anonymizes it and places it in a data directory so it will be replayed the next time "generate-visits" is executed</li>
<li>./console visitorgenerator:shorten-log /path/to/file.log &gt; file.short.log takes a large Apache log file and keeps only a small number of logs per day</li>
</ul>',
            'faq' => '',
            'changelog' => '

<ul><li>1.0 Initial release</li>
<li>1.1 New features:

<ul><li>Added CLI commands</li>
<li>Added possibility to generate websites, users and goals</li>
<li>Replay all log files within the data directory</li>
</ul></li>
<li>1.2 New features:

<ul><li>New log file added</li>
<li>Added possibility to shorten and anonymize log files</li>
<li>Added possibility to let plugins define their own log files</li>
<li>Added possibility to generate annotations</li>
<li>Replay only log entries having the same day of the month</li>
</ul></li>
<li>1.2.1 New workaround:

<ul><li>When force_ssl is enabled, and visits are generated on localhost, force to use HTTP instead of HTTPS</li>
</ul></li>
</ul>',
            'support' => '

<p>Please direct any feedback to <a href="mailto:hello@piwik.org">hello@piwik.org</a></p>

<h3>Legalnotice</h3>

<p>This plugin is released under the GPLv3+ license.</p>

<p>This plugin uses the <a href="libs/Faker/readme.md">Faker</a> library which is released under the <a href="libs/Faker/LICENSE">MIT license</a>.</p>',
          ),
        ),
      ),
    ),
    2 => 
    array (
      'name' => 'Counter',
      'owner' => 'Globulopolis',
      'description' => 'Display Hits/Visits on image. Display Hits/Visits/from Countries stats as text via ajax requests.',
      'homepage' => 'http://xn--80aeqbhthr9b.com/en/others/piwik/10-piwik-graphical-counter.html',
      'license' => 'GPL v2+',
      'createdDateTime' => '2014-01-29 15:50:04',
      'donate' => 
      array (
        'paypal' => 'goodladybird@gmail.com',
        'bitcoin' => NULL,
      ),
      'isTheme' => false,
      'keywords' => 
      array (
        0 => 'piwik',
        1 => 'counter image',
        2 => 'image counter',
        3 => 'piwik visible counter',
        4 => 'show hits piwik',
        5 => 'show visits piwik',
      ),
      'authors' => 
      array (
        0 => 
        array (
          'name' => 'Viper',
          'email' => NULL,
          'homepage' => NULL,
        ),
      ),
      'repositoryUrl' => 'https://github.com/Globulopolis/Counter',
      'lastUpdated' => '2014-10-19 09:42:04',
      'latestVersion' => '2.0.8',
      'numDownloads' => 3974,
      'screenshots' => 
      array (
      ),
      'activity' => 
      array (
        'numCommits' => '1',
        'numContributors' => '1',
        'lastCommitDate' => '2014-08-31 17:14:17',
      ),
      'featured' => false,
      'versions' => 
      array (
        0 => 
        array (
          'name' => '2.0.2',
          'release' => '2014-01-29 15:50:04',
          'download' => '/api/1.0/plugins/Counter/download/2.0.2',
          'requires' => 
          array (
          ),
          'readme' => '# Piwik counter plugin

## Description

Display Hits/Visits on image

## FAQ

See http://xn--80aeqbhthr9b.com/en/others/piwik/10-piwik-graphical-counter.html

## Changelog
2.0.2
* Fixed a bug where the URL with the image displayed via http, if you are using https(bug only in counters list).

2.0.1
* Fix for CORS (thanks for aureq for patch)
* Changing versioning according to requirements

2.0 Initial release

## Support

http://xn--80aeqbhthr9b.com/en/contact-form.html',
          'numDownloads' => 881,
          'repositoryChangelogUrl' => 'https://github.com/Globulopolis/Counter/commits/2.0.2',
          'readmeHtml' => 
          array (
            'description' => '

<p>Display Hits/Visits on image</p>

',
            'faq' => '

<p>See http://xn--80aeqbhthr9b.com/en/others/piwik/10-piwik-graphical-counter.html</p>

',
            'changelog' => '

<p>2.0.2
* Fixed a bug where the URL with the image displayed via http, if you are using https(bug only in counters list).</p>

<p>2.0.1
* Fix for CORS (thanks for aureq for patch)
* Changing versioning according to requirements</p>

<p>2.0 Initial release</p>

',
            'support' => '

<p>http://xn--80aeqbhthr9b.com/en/contact-form.html</p>',
          ),
        ),
        1 => 
        array (
          'name' => '2.0.3',
          'release' => '2014-04-17 13:20:05',
          'download' => '/api/1.0/plugins/Counter/download/2.0.3',
          'requires' => 
          array (
          ),
          'readme' => '# Piwik counter plugin

## Description

Display Hits/Visits on image

## FAQ

See http://xn--80aeqbhthr9b.com/en/others/piwik/10-piwik-graphical-counter.html

## Changelog
2.0.3
* Added custom template for \'visitors by countries\'. NB! \'Live visitors counter\' works only if custom template field for \'Visitors by countries\' is empty.
* Fixed an error w/ undefined method Access::isSuperUser
* Fix for double slash in ajax url
* Added workaround for getallheaders() method if PHP running as CGI.
* Remove PIWIK_ENABLE_DISPATCH due to triggering an error while generating counter image.

2.0.2
* Fixed a bug where the URL with the image displayed via http, if you are using https(bug only in counters list).

2.0.1
* Fix for CORS (thanks for aureq for patch)
* Changing versioning according to requirements

2.0 Initial release

## Support

http://xn--80aeqbhthr9b.com/en/contact-form.html',
          'numDownloads' => 825,
          'repositoryChangelogUrl' => 'https://github.com/Globulopolis/Counter/commits/2.0.3',
          'readmeHtml' => 
          array (
            'description' => '

<p>Display Hits/Visits on image</p>

',
            'faq' => '

<p>See http://xn--80aeqbhthr9b.com/en/others/piwik/10-piwik-graphical-counter.html</p>

',
            'changelog' => '

<p>2.0.3
* Added custom template for \'visitors by countries\'. NB! \'Live visitors counter\' works only if custom template field for \'Visitors by countries\' is empty.
* Fixed an error w/ undefined method Access::isSuperUser
* Fix for double slash in ajax url
* Added workaround for getallheaders() method if PHP running as CGI.
* Remove PIWIK<em>ENABLE</em>DISPATCH due to triggering an error while generating counter image.</p>

<p>2.0.2
* Fixed a bug where the URL with the image displayed via http, if you are using https(bug only in counters list).</p>

<p>2.0.1
* Fix for CORS (thanks for aureq for patch)
* Changing versioning according to requirements</p>

<p>2.0 Initial release</p>

',
            'support' => '

<p>http://xn--80aeqbhthr9b.com/en/contact-form.html</p>',
          ),
        ),
        2 => 
        array (
          'name' => '2.0.4',
          'release' => '2014-06-11 16:50:09',
          'download' => '/api/1.0/plugins/Counter/download/2.0.4',
          'requires' => 
          array (
          ),
          'readme' => '# Piwik counter plugin

## Description

Display Hits/Visits on image. Display Hits/Visits/from Countries stats as text via ajax requests.

## FAQ

See http://xn--80aeqbhthr9b.com/en/others/piwik/10-piwik-graphical-counter.html

## Changelog
2.0.4
* Added custom offsets for visits/views/countries for \'visitors by countries\' template.

2.0.3
* Added custom template for \'visitors by countries\'. NB! \'Live visitors counter\' works only if custom template field for \'Visitors by countries\' is empty.
* Fixed an error w/ undefined method Access::isSuperUser
* Fix for double slash in ajax url
* Added workaround for getallheaders() method if PHP running as CGI.
* Remove PIWIK_ENABLE_DISPATCH due to triggering an error while generating counter image.

2.0.2
* Fixed a bug where the URL with the image displayed via http, if you are using https(bug only in counters list).

2.0.1
* Fix for CORS (thanks for aureq for patch)
* Changing versioning according to requirements

2.0 Initial release

## Support

http://xn--80aeqbhthr9b.com/en/contact-form.html',
          'numDownloads' => 281,
          'repositoryChangelogUrl' => 'https://github.com/Globulopolis/Counter/commits/2.0.4',
          'readmeHtml' => 
          array (
            'description' => '

<p>Display Hits/Visits on image. Display Hits/Visits/from Countries stats as text via ajax requests.</p>

',
            'faq' => '

<p>See http://xn--80aeqbhthr9b.com/en/others/piwik/10-piwik-graphical-counter.html</p>

',
            'changelog' => '

<p>2.0.4
* Added custom offsets for visits/views/countries for \'visitors by countries\' template.</p>

<p>2.0.3
* Added custom template for \'visitors by countries\'. NB! \'Live visitors counter\' works only if custom template field for \'Visitors by countries\' is empty.
* Fixed an error w/ undefined method Access::isSuperUser
* Fix for double slash in ajax url
* Added workaround for getallheaders() method if PHP running as CGI.
* Remove PIWIK<em>ENABLE</em>DISPATCH due to triggering an error while generating counter image.</p>

<p>2.0.2
* Fixed a bug where the URL with the image displayed via http, if you are using https(bug only in counters list).</p>

<p>2.0.1
* Fix for CORS (thanks for aureq for patch)
* Changing versioning according to requirements</p>

<p>2.0 Initial release</p>

',
            'support' => '

<p>http://xn--80aeqbhthr9b.com/en/contact-form.html</p>',
          ),
        ),
        3 => 
        array (
          'name' => '2.0.5',
          'release' => '2014-07-02 10:40:05',
          'download' => '/api/1.0/plugins/Counter/download/2.0.5',
          'requires' => 
          array (
          ),
          'readme' => '# Piwik counter plugin

## Description

Display Hits/Visits on image. Display Hits/Visits/from Countries stats as text via ajax requests.

## FAQ

See http://xn--80aeqbhthr9b.com/en/others/piwik/10-piwik-graphical-counter.html

## Changelog
2.0.5
* Fixed a bug w/ undefined variable \'userMenu\' in \'@CoreHome/_topBarTopMenu.twig\' on new Piwik 2.4.0

2.0.4
* Added custom offsets for visits/views/countries for \'visitors by countries\' template.

2.0.3
* Added custom template for \'visitors by countries\'. NB! \'Live visitors counter\' works only if custom template field for \'Visitors by countries\' is empty.
* Fixed an error w/ undefined method Access::isSuperUser
* Fix for double slash in ajax url
* Added workaround for getallheaders() method if PHP running as CGI.
* Remove PIWIK_ENABLE_DISPATCH due to triggering an error while generating counter image.

2.0.2
* Fixed a bug where the URL with the image displayed via http, if you are using https(bug only in counters list).

2.0.1
* Fix for CORS (thanks for aureq for patch)
* Changing versioning according to requirements

2.0 Initial release

## Support

http://xn--80aeqbhthr9b.com/en/contact-form.html',
          'numDownloads' => 790,
          'repositoryChangelogUrl' => 'https://github.com/Globulopolis/Counter/commits/2.0.5',
          'readmeHtml' => 
          array (
            'description' => '

<p>Display Hits/Visits on image. Display Hits/Visits/from Countries stats as text via ajax requests.</p>

',
            'faq' => '

<p>See http://xn--80aeqbhthr9b.com/en/others/piwik/10-piwik-graphical-counter.html</p>

',
            'changelog' => '

<p>2.0.5
* Fixed a bug w/ undefined variable \'userMenu\' in \'@CoreHome/_topBarTopMenu.twig\' on new Piwik 2.4.0</p>

<p>2.0.4
* Added custom offsets for visits/views/countries for \'visitors by countries\' template.</p>

<p>2.0.3
* Added custom template for \'visitors by countries\'. NB! \'Live visitors counter\' works only if custom template field for \'Visitors by countries\' is empty.
* Fixed an error w/ undefined method Access::isSuperUser
* Fix for double slash in ajax url
* Added workaround for getallheaders() method if PHP running as CGI.
* Remove PIWIK<em>ENABLE</em>DISPATCH due to triggering an error while generating counter image.</p>

<p>2.0.2
* Fixed a bug where the URL with the image displayed via http, if you are using https(bug only in counters list).</p>

<p>2.0.1
* Fix for CORS (thanks for aureq for patch)
* Changing versioning according to requirements</p>

<p>2.0 Initial release</p>

',
            'support' => '

<p>http://xn--80aeqbhthr9b.com/en/contact-form.html</p>',
          ),
        ),
        4 => 
        array (
          'name' => '2.0.6',
          'release' => '2014-08-31 16:38:05',
          'download' => '/api/1.0/plugins/Counter/download/2.0.6',
          'requires' => 
          array (
          ),
          'readme' => '# Piwik counter plugin

## Description

Display Hits/Visits on image. Display Hits/Visits/from Countries stats as text via ajax requests.

## FAQ

See http://xn--80aeqbhthr9b.com/en/others/piwik/10-piwik-graphical-counter.html

## Changelog
2.0.6
* Fixed an error when user select image with type different from png or gif. Now plugin support jpg image type.
* Update colorpicker to latest.

2.0.5
* Fixed a bug w/ undefined variable \'userMenu\' in \'@CoreHome/_topBarTopMenu.twig\' on new Piwik 2.4.0

2.0.4
* Added custom offsets for visits/views/countries for \'visitors by countries\' template.

2.0.3
* Added custom template for \'visitors by countries\'. NB! \'Live visitors counter\' works only if custom template field for \'Visitors by countries\' is empty.
* Fixed an error w/ undefined method Access::isSuperUser
* Fix for double slash in ajax url
* Added workaround for getallheaders() method if PHP running as CGI.
* Remove PIWIK_ENABLE_DISPATCH due to triggering an error while generating counter image.

2.0.2
* Fixed a bug where the URL with the image displayed via http, if you are using https(bug only in counters list).

2.0.1
* Fix for CORS (thanks for aureq for patch)
* Changing versioning according to requirements

2.0 Initial release

## Support

http://xn--80aeqbhthr9b.com/en/contact-form.html',
          'numDownloads' => 806,
          'repositoryChangelogUrl' => 'https://github.com/Globulopolis/Counter/commits/2.0.6',
          'readmeHtml' => 
          array (
            'description' => '

<p>Display Hits/Visits on image. Display Hits/Visits/from Countries stats as text via ajax requests.</p>

',
            'faq' => '

<p>See http://xn--80aeqbhthr9b.com/en/others/piwik/10-piwik-graphical-counter.html</p>

',
            'changelog' => '

<p>2.0.6
* Fixed an error when user select image with type different from png or gif. Now plugin support jpg image type.
* Update colorpicker to latest.</p>

<p>2.0.5
* Fixed a bug w/ undefined variable \'userMenu\' in \'@CoreHome/_topBarTopMenu.twig\' on new Piwik 2.4.0</p>

<p>2.0.4
* Added custom offsets for visits/views/countries for \'visitors by countries\' template.</p>

<p>2.0.3
* Added custom template for \'visitors by countries\'. NB! \'Live visitors counter\' works only if custom template field for \'Visitors by countries\' is empty.
* Fixed an error w/ undefined method Access::isSuperUser
* Fix for double slash in ajax url
* Added workaround for getallheaders() method if PHP running as CGI.
* Remove PIWIK<em>ENABLE</em>DISPATCH due to triggering an error while generating counter image.</p>

<p>2.0.2
* Fixed a bug where the URL with the image displayed via http, if you are using https(bug only in counters list).</p>

<p>2.0.1
* Fix for CORS (thanks for aureq for patch)
* Changing versioning according to requirements</p>

<p>2.0 Initial release</p>

',
            'support' => '

<p>http://xn--80aeqbhthr9b.com/en/contact-form.html</p>',
          ),
        ),
        5 => 
        array (
          'name' => '2.0.7',
          'release' => '2014-10-18 12:10:04',
          'download' => '/api/1.0/plugins/Counter/download/2.0.7',
          'requires' => 
          array (
          ),
          'readme' => '# Piwik counter plugin

## Description

Display Hits/Visits on image. Display Hits/Visits/from Countries stats as text via ajax requests.

## FAQ

See http://xn--80aeqbhthr9b.com/en/others/piwik/10-piwik-graphical-counter.html

## Changelog
2.0.7
* Add \'yesterday\' option for "Start date - period".

2.0.6
* Fixed an error when user select image with type different from png or gif. Now plugin support jpg image type.
* Update colorpicker to latest.

2.0.5
* Fixed a bug w/ undefined variable \'userMenu\' in \'@CoreHome/_topBarTopMenu.twig\' on new Piwik 2.4.0

2.0.4
* Added custom offsets for visits/views/countries for \'visitors by countries\' template.

2.0.3
* Added custom template for \'visitors by countries\'. NB! \'Live visitors counter\' works only if custom template field for \'Visitors by countries\' is empty.
* Fixed an error w/ undefined method Access::isSuperUser
* Fix for double slash in ajax url
* Added workaround for getallheaders() method if PHP running as CGI.
* Remove PIWIK_ENABLE_DISPATCH due to triggering an error while generating counter image.

2.0.2
* Fixed a bug where the URL with the image displayed via http, if you are using https(bug only in counters list).

2.0.1
* Fix for CORS (thanks for aureq for patch)
* Changing versioning according to requirements

2.0 Initial release

## Support

http://xn--80aeqbhthr9b.com/en/contact-form.html',
          'numDownloads' => 27,
          'repositoryChangelogUrl' => 'https://github.com/Globulopolis/Counter/commits/2.0.7',
          'readmeHtml' => 
          array (
            'description' => '

<p>Display Hits/Visits on image. Display Hits/Visits/from Countries stats as text via ajax requests.</p>

',
            'faq' => '

<p>See http://xn--80aeqbhthr9b.com/en/others/piwik/10-piwik-graphical-counter.html</p>

',
            'changelog' => '

<p>2.0.7
* Add \'yesterday\' option for "Start date - period".</p>

<p>2.0.6
* Fixed an error when user select image with type different from png or gif. Now plugin support jpg image type.
* Update colorpicker to latest.</p>

<p>2.0.5
* Fixed a bug w/ undefined variable \'userMenu\' in \'@CoreHome/_topBarTopMenu.twig\' on new Piwik 2.4.0</p>

<p>2.0.4
* Added custom offsets for visits/views/countries for \'visitors by countries\' template.</p>

<p>2.0.3
* Added custom template for \'visitors by countries\'. NB! \'Live visitors counter\' works only if custom template field for \'Visitors by countries\' is empty.
* Fixed an error w/ undefined method Access::isSuperUser
* Fix for double slash in ajax url
* Added workaround for getallheaders() method if PHP running as CGI.
* Remove PIWIK<em>ENABLE</em>DISPATCH due to triggering an error while generating counter image.</p>

<p>2.0.2
* Fixed a bug where the URL with the image displayed via http, if you are using https(bug only in counters list).</p>

<p>2.0.1
* Fix for CORS (thanks for aureq for patch)
* Changing versioning according to requirements</p>

<p>2.0 Initial release</p>

',
            'support' => '

<p>http://xn--80aeqbhthr9b.com/en/contact-form.html</p>',
          ),
        ),
        6 => 
        array (
          'name' => '2.0.8',
          'release' => '2014-10-19 09:42:04',
          'download' => '/api/1.0/plugins/Counter/download/2.0.8',
          'requires' => 
          array (
          ),
          'readme' => '# Piwik counter plugin

## Description

Display Hits/Visits on image. Display Hits/Visits/from Countries stats as text via ajax requests.

## FAQ

See http://xn--80aeqbhthr9b.com/en/others/piwik/10-piwik-graphical-counter.html

## Changelog
2.0.8
* Fix for https://github.com/Globulopolis/Counter/issues/4#issuecomment-59620132

2.0.7
* Add \'yesterday\' option for "Start date - period".

2.0.6
* Fixed an error when user select image with type different from png or gif. Now plugin support jpg image type.
* Update colorpicker to latest.

2.0.5
* Fixed a bug w/ undefined variable \'userMenu\' in \'@CoreHome/_topBarTopMenu.twig\' on new Piwik 2.4.0

2.0.4
* Added custom offsets for visits/views/countries for \'visitors by countries\' template.

2.0.3
* Added custom template for \'visitors by countries\'. NB! \'Live visitors counter\' works only if custom template field for \'Visitors by countries\' is empty.
* Fixed an error w/ undefined method Access::isSuperUser
* Fix for double slash in ajax url
* Added workaround for getallheaders() method if PHP running as CGI.
* Remove PIWIK_ENABLE_DISPATCH due to triggering an error while generating counter image.

2.0.2
* Fixed a bug where the URL with the image displayed via http, if you are using https(bug only in counters list).

2.0.1
* Fix for CORS (thanks for aureq for patch)
* Changing versioning according to requirements

2.0 Initial release

## Support

http://xn--80aeqbhthr9b.com/en/contact-form.html',
          'numDownloads' => 364,
          'repositoryChangelogUrl' => 'https://github.com/Globulopolis/Counter/commits/2.0.8',
          'readmeHtml' => 
          array (
            'description' => '

<p>Display Hits/Visits on image. Display Hits/Visits/from Countries stats as text via ajax requests.</p>

',
            'faq' => '

<p>See http://xn--80aeqbhthr9b.com/en/others/piwik/10-piwik-graphical-counter.html</p>

',
            'changelog' => '

<p>2.0.8
* Fix for https://github.com/Globulopolis/Counter/issues/4#issuecomment-59620132</p>

<p>2.0.7
* Add \'yesterday\' option for "Start date - period".</p>

<p>2.0.6
* Fixed an error when user select image with type different from png or gif. Now plugin support jpg image type.
* Update colorpicker to latest.</p>

<p>2.0.5
* Fixed a bug w/ undefined variable \'userMenu\' in \'@CoreHome/_topBarTopMenu.twig\' on new Piwik 2.4.0</p>

<p>2.0.4
* Added custom offsets for visits/views/countries for \'visitors by countries\' template.</p>

<p>2.0.3
* Added custom template for \'visitors by countries\'. NB! \'Live visitors counter\' works only if custom template field for \'Visitors by countries\' is empty.
* Fixed an error w/ undefined method Access::isSuperUser
* Fix for double slash in ajax url
* Added workaround for getallheaders() method if PHP running as CGI.
* Remove PIWIK<em>ENABLE</em>DISPATCH due to triggering an error while generating counter image.</p>

<p>2.0.2
* Fixed a bug where the URL with the image displayed via http, if you are using https(bug only in counters list).</p>

<p>2.0.1
* Fix for CORS (thanks for aureq for patch)
* Changing versioning according to requirements</p>

<p>2.0 Initial release</p>

',
            'support' => '

<p>http://xn--80aeqbhthr9b.com/en/contact-form.html</p>',
          ),
        ),
      ),
    ),
  ),
);
$expires_on   = 1415619221;
$cache_complete   = true;
?>