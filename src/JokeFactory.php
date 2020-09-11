<?php

namespace JassehOmar\ChuckNorrisJokes;


class JokeFactory
{
    protected $jokes = [
        "Chuck Norris doesn’t read books. He stares them down until he gets the information he wants.",
        "Time waits for no man. Unless that man is Chuck Norris.",
        "If Chuck Norris were to travel to an alternate dimension in which there was another Chuck Norris and they both fought, they would both win.",
        "Chuck Norris’ tears cure cancer. Too bad he has never cried.",
        "Since 1940, the year Chuck Norris was born, roundhouse kick related deaths have increased 13,000 percent.",
        "Chuck Norris does not use spell check. If he happens to misspell a word, Oxford will change the spelling.",
        "Chuck Norris’ calendar goes straight from March 31st to April 2nd, because no one fools Chuck Norris.",
        "The Great Wall of China was originally created to keep Chuck Norris out. It didn’t work.",
        "Chuck Norris can divide by zero.",
        "Chuck Norris invented airplanes because he was tired of being the only person that could fly."
    ];


    public function __construct(array $jokes = null)
    {
        if ($jokes) {
            $this->jokes = $jokes;
        }
    }


    public function getRandomJoke()
    {
        return $this->jokes[array_rand($this->jokes)];
    }
}
