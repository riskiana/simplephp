# SimplePHP Project & Test Suite

This project is a simple PHP application, including a comprehensive set of unit tests to ensure code quality and reliability. Unit testing is handled using [PHPUnit](https://phpunit.de/).

You can easily run and test this project using Visual Studio Code with the **PHP Server** and **PHPUnit Test Explorer** extensions.

## Prerequisites

- PHP (>=7.4 recommended)
- [Composer](https://getcomposer.org/) (dependency manager)
- [PHPUnit](https://phpunit.de/) (installed via Composer)
- [Visual Studio Code](https://code.visualstudio.com/)
    - [PHP Server extension](https://marketplace.visualstudio.com/items?itemName=brapifra.phpserver)
    - [PHPUnit Test Explorer extension](https://marketplace.visualstudio.com/items?itemName=recca0120.vscode-phpunit)

## Installation

### 1. Clone the Repository

```bash
git clone https://github.com/riskiana/simplephp.git
cd simplephp
```

### 2. Install Dependencies

#### Linux/macOS

```bash
composer install
```

#### Windows

Open Command Prompt or PowerShell:

```sh
composer install
```

### 3. Verify PHP and PHPUnit Installation

#### Check PHP Version

```bash
php -v
```

Ensure the output shows PHP 7.4 or higher.

#### Check PHPUnit Installation

```bash
./vendor/bin/phpunit --version
```
or on Windows:
```sh
vendor\bin\phpunit --version
```

You should see the PHPUnit version information.

## VS Code Settings for LAMPP Users

If you use LAMPP and your PHP executable is not in the default location, update your VS Code `settings.json` as follows:

```json
{
    "php.validate.executablePath": "/opt/lampp/bin/php",
    "phpunit.phpunit": "/usr/local/bin/phpunit"
}
```

To edit these settings:

1. Open VS Code.
2. Go to **File > Preferences > Settings** (or press `Ctrl+,`).
3. Click the `{}` icon in the top right to open `settings.json`.
4. Add or update the above lines to match your PHP and PHPUnit paths.

## Running the Application

You can use the **PHP Server** extension in VS Code to serve your PHP files:

1. Open the project folder in VS Code.
2. Right-click the PHP file you want to run and select **PHP Server: Serve project**.

## Running Unit Tests

You can run tests from the terminal, with the **PHPUnit Test Explorer** extension, or directly using PHPUnit.

### From Terminal

#### Linux/macOS

```bash
./vendor/bin/phpunit --testdox
```

#### Windows

```sh
vendor\bin\phpunit --testdox
```

### Using PHPUnit Test Explorer in VS Code

1. Install the **PHPUnit Test Explorer** extension.
2. Open the project folder in VS Code.
3. Click on the **Test Explorer** icon in the Activity Bar.
4. The extension will automatically detect and display your tests.
5. Click the play button next to a test or test suite to run it.

### Directly Running PHPUnit

You can also run PHPUnit directly from the command line:

#### Linux/macOS

```bash
./vendor/bin/phpunit
```

#### Windows

```sh
vendor\bin\phpunit
```

## Notes

- All tests are located in the `tests/` directory.
- Ensure Composer's `vendor/bin` directory is in your PATH for easier usage.
- For more information, see the [PHPUnit documentation](https://phpunit.de/documentation.html).

