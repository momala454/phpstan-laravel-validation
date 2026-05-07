# Fixture extraction

`tests/fixtures/laravel-export-v*.php` are auto-generated from Laravel's own
validation test suite. Each entry captures one (rules, data, validated)
triple observed when running `tests/Validation/` against a real Laravel
release, hashed by content.

## Regenerating

The extractor needs PHP with `uopz` to intercept `Validator::passes()`. PECL's
`uopz` builds against PHP 8.3 (8.4 still lacks the upstream `ZEND_EXIT`
compatibility shim), so the dockerised entrypoint pins `php:8.3-cli-alpine`.

```bash
# 1. Clone the Laravel release you want to extract
git clone --depth 1 --branch v13.8.0 https://github.com/laravel/framework.git ./laravel-framework

# 2. Build the extractor image (one-off)
docker build -t phpstan-laravel-extractor -f scripts/extractor.Dockerfile .

# 3. Install the Laravel deps and the extension's deps inside the container
docker run --rm -e COMPOSER_ROOT_VERSION=13.8.0 \
    -v "$PWD:/app" -w /app/laravel-framework \
    phpstan-laravel-extractor composer install --no-interaction

docker run --rm -v "$PWD:/app" -w /app \
    phpstan-laravel-extractor composer update --no-interaction

# 4. Run the extractor — outputs tests/fixtures/laravel-export.php
docker run --rm \
    -v "$PWD:/app" -w /app \
    -e LARAVEL_PATH=./laravel-framework -e PHP_WITH_UOPZ=php \
    phpstan-laravel-extractor \
    bash -c "git config --global --add safe.directory '*' && bash scripts/valid-test-extractor.bash"

# 5. Rename to the version-specific fixture and wire it into LaravelInferenceTest
mv tests/fixtures/laravel-export.php tests/fixtures/laravel-export-v13.php
```

The script tolerates Laravel >=11 where the `dotPlaceholder` instance property
was replaced by a static `placeholderHash`. It also tolerates PHPUnit >=10
which dropped `--prepend` (it now uses `--bootstrap`).
