<?php


class File
{
    private string $fileName;
    private $pointer;
    private array $numbers = [];

    public function __construct(string $fileName)
    {
        $this->fileName = $fileName;
        $this->pointer = fopen($fileName, 'a+');
        $this->readIntoArray();
    }

    public function getFileName(): string
    {
        return $this->fileName;
    }

    public function writeToFile(string $text): void
    {
        fwrite($this->pointer, $text . PHP_EOL);
    }

    public function readIntoArray(): void
    {
        if (filesize($this->fileName) > 0) {
            $array = explode(PHP_EOL, fread($this->pointer, filesize('randomNumber.txt')));
            $this->numbers = $array;
        }
    }

    public function getAverage(): float
    {
        if ($this->numbers) {
            $average = array_sum($this->numbers) / count($this->numbers);
            return number_format($average, 2);
        }
        return 0;
    }
}