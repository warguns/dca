# DCA

## Example

Buy $5.00 worth of BTC at current market price at Bitstamp:

```bash
# first you need to fill in the credentials of the exchanges you want to use
$ cp -n settings.ini.dist settings.ini
$ nano settings.ini

# running the main script from project sources
$ composer install --no-dev
$ php bin/console bitstamp:buy 500

# using a portable executable (see below)
$ ./dca.phar b:b 500
```

Cron automation:

```
# buy $7.50 worth of BTC at market price every 2 days
0 0 */2 * * /usr/local/bin/dca.phar bitstamp:buy 750
```

## Testing

```bash
$ composer test
```

## Building the executable

You might need to disable the `phar.readonly` directive in your php.ini file.
Also, remember to put the filled out `settings.ini` file at the root of the project.

```bash
$ composer pack
```

## TODO to v1.0

- [ ] Proper testing
- [ ] Proper documentation
- [x] Slack integration
- [ ] Set up Continuous Integration
- [ ] Support more exchanges (e.g. Kraken, Bittrex, Bitfinex)
