# WP Seed Plugin

All you need to start creating a plugin for WordPress.

We aim to deliver a focus on the API features of WordPress and it's eventual use as a headless CMS, but feel free to use this base for any kind of plugin. It provides several features that will enable you to develop and test your code.

## Getting started

### Find and Replace

This project is a skeleton, so it has a bunch of keys that need to be replaced with values specific to your project.

For these changes, you should use the "Find and Replace" feature of your editor. Later there will be more options to this. Below you can find the table with the keys and their respective description, along with an example for the possible value.

| Key                      | Description                                                         | Example value |
| ------------------------ | ------------------------------------------------------------------- | ------------- |
| `[vendor_name]`          | Your username or company name: no spaces                            | `WPSeed` |
| `[plugin_name]`          | See ["Planning Your Plugin – Pick a good name"][1] ([more info][2]) | `WP Seed Plugin` |
| `[plugin_description]`   | Description for the plugin ([more info][2])                         | `A WordPress Plugin starter for budding features.` |
| `[plugin_url]`           | Plugin URL ([more info][2])                                         | `https://github.com/xipasduarte/wp-seed-plugin` |
| `[initial_version]`      | Version to start the plugin with ([more info][2])                   | `1.0.0`|
| `[author_name]`          | Author name ([more info][2])                                        | `Pedro Duarte` |
| `[author_url]`           | Author URL ([more info][2])                                         | `https://github.com/xipasduarte` |
| `[text_domain]`          | Text domain ([more info][2])                                        | `wp-seed-plugin` |
| `[composer_vendor]`      | Your username, company or project name: lowercase and no spaces     | `wp-seed` |
| `[composer_name]`        | Plugin identifier: usually the `[plugin_name]` in dash-case         | `wp-seed-plugin` |
| `[namespace]`            | Desired PHP namespace                                               | `WPSeed\WP\Plugin\WPSeedPlugin` |
| `[autoload_psr_4]`       | [PSR-4 autoload][3] for `[namespace]`                               | `WPSeed\\WP\\Plugin\\WPSeedPlugin\\` |
| `[autoload_tests_psr_4]` | [PSR-4 autoload][3] for `[namespace_tests]`                         | `WPSeed\\WP\\Plugin\\WPSeedPlugin\\Tests\\` |

[1]: https://developer.wordpress.org/plugins/wordpress-org/planning-your-plugin/#2-pick-a-good-name
[2]: https://developer.wordpress.org/plugins/the-basics/header-requirements/
[3]: https://getcomposer.org/doc/04-schema.md#psr-4

For further information on writing WordPress plugins refer to the [official documentation](https://developer.wordpress.org/plugins/).

### Run composer

After all of the changes don't forget to run `composer install` to have the dependencies load and the autoload built. (Without this your plugin will break.)
