# PHP Webflow SDK - Project Instructions

This project is a PHP SDK for the Webflow Data API, designed to provide a structured and type-safe way to interact with Webflow's resources.

## Project Overview

- **Language:** PHP 8.1+
- **HTTP Client:** GuzzleHttp ^7.10
- **Architecture:** The SDK uses an inheritance-based structure to share logic across different API versions and resource types.
    - `BaseApi`: Abstract base class handling the Guzzle client and basic request sending.
    - `Api`: Extends `BaseApi` to handle access tokens and API versioning.
    - `Items`: Extends `Api` to handle collection-specific resources.
    - `Contracts/`: Contains abstract classes defining the interface for various resources.
    - `Versions/V2/`: Contains concrete implementations for the Webflow Data API V2.

## Building and Running

### Prerequisites
- PHP 8.1 or higher
- Composer

### Key Commands
- `composer install`: Install project dependencies.
- `composer test`: Run the test suite using PHPUnit.
- `composer check`: Run PHP-CS-Fixer in dry-run mode to check for coding style violations.
- `composer format`: Run PHP-CS-Fixer to automatically fix coding style issues.
- `composer phpstan`: Run PHPStan static analysis (currently at level 5).
- `make test`: Runs `check`, `phpstan`, and `test` sequentially.

## Development Conventions

### Coding Style
- **Strict Types:** Always include `declare(strict_types=1);` at the top of PHP files.
- **Namespacing:** Follow PSR-4 conventions under the `ArielMagbanua\PhpWebflowApi` namespace.
- **Modern PHP:** Utilize PHP 8.1+ features such as constructor property promotion and named arguments.
- **Documentation:** Use PHPDoc blocks for classes and methods, including `@param`, `@return`, and `@link` to official Webflow API documentation.

### Testing Practices
- **PHPUnit:** All new features or bug fixes must include unit tests.
- **Mocking:** Use Guzzle's `MockHandler` and `History` middleware to test API interactions without making real network requests.
- **Payloads:** Store sample request and response payloads in `tests/payloads/` to keep test files clean and reusable.
- **Test Structure:** Unit tests should mirror the source directory structure under `tests/Unit/`.

### Contribution Guidelines
- Ensure all tests pass before submitting changes.
- Run `composer format` to maintain consistent coding style.
- Maintain or improve the PHPStan analysis level when possible.
