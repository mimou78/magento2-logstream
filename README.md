# CleatSquad Magento 2 LogStream

[![Packagist Downloads](https://img.shields.io/packagist/dm/cleatsquad/magento2-logstream?color=blue)](https://packagist.org/packages/cleatsquad/magento2-logstream/stats)
[![Packagist Version](https://img.shields.io/packagist/v/cleatsquad/magento2-logstream?color=blue)](https://packagist.org/packages/cleatsquad/magento2-logstream)
[![Packagist License](https://img.shields.io/packagist/l/cleatsquad/magento2-logstream)](https://github.com/cleatsquad/magento2-logstream/blob/master/LICENSE)

## Magento Version Support

![Magento 2.4.6 and above](https://img.shields.io/badge/Magento-2.4%20and%20above-brightgreen.svg?style=flat)

## Purpose

`CleatSquad_Magento2LogStream` is a Magento 2 module designed to redirect all Magento logs to StdOut, which is particularly useful in dockerized environments. This approach facilitates the aggregation of logs into external systems without the need to manage Magento-specific log files and configurations.

## Getting Started

This module is intended to be installed via [Composer](https://getcomposer.org/). To add it to your Magento 2 project, follow these steps:

### Installation

1. **Download the package**
    ```bash
    composer require cleatsquad/magento2-logstream
    ```

2. **Enable the module**
    ```bash
    ./bin/magento module:enable CleatSquad_Magento2LogStream
    ./bin/magento setup:upgrade
    ```

## Usage

Once installed, the module will automatically redirect all Magento logs to StdOut without any additional configuration.

## Configuration

To configure the log level for the CleatSquad Magento2 LogStream module, follow these steps in the Magento admin interface:

### Setting the Log Level

1. Navigate to `Stores > Configuration` in the admin panel sidebar.
2. Under the `General` section, find and open the `Logging` group.
3. Select the desired log level from the `Log Level` dropdown menu.

Changes will take effect immediately after saving the configuration.

## Upgrading

To upgrade the module to the latest version, run:

```bash
composer update cleatsquad/magento2-logstream
./bin/magento setup:upgrade
```
## Follow

For the latest updates and new features, follow our GitHub repository: [cleatsquad/magento2-logstream](https://github.com/cleatsquad/magento2-logstream).

## Contributing

Contributions to `CleatSquad_Magento2LogStream` are always welcome. You can contribute in different ways:

1. **Report Issues**: Report bugs and suggest new features.
2. **Fix Bugs**: Submit pull requests with bug fixes.
3. **Add Features**: Develop new features and submit them as pull requests.
4. **Improve Documentation**: Help new users by improving or translating the documentation.

## Support

If you need help or have a question, you can:

- Open an issue through GitHub for bug reports and feature requests.
- Check the [Magento Community Forums](https://community.magento.com/) for general questions and support on Magento.
- Check on [Magento Stack Exchange](https://magento.stackexchange.com/) for general programming questions.

## Authors

- **Mohamed EL Mrabet** - *Initial work* - [mimou78](https://github.com/mimou78)

See also the list of [contributors](https://github.com/cleatsquad/magento2-logstream/contributors) who participated in this project.

## License

This project is licensed under the MIT License - see the [LICENSE](LICENSE) file for details.

## Acknowledgments

- Magento Community
- Anyone who contributes to the open-source community
