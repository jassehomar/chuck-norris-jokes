# Chuck Norris Jokes

Create chuck norris jokes in your next PHP Project

## Installation

Require the package using composer:

```bash
composer require jassehomar/chuck-norris-jokes
```

## Usage

```php
use JassehOmar\ChuckNorrisJokes\JokeFactory;

$jokes = new JokeFactory();

$joke = $jokes->getRandomJoke();
```

## Contributing
Pull requests are welcome. For major changes, please open an issue first to discuss what you would like to change.

Please make sure to update tests as appropriate.

## License
[MIT](./LICENSE.md)
