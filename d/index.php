<?php

/**
 * В данном примере мы видим, что у нас
 */
class Product {
    public function writeToLog()
    {
        $logger = new Logger();
        $logger->log();
    }
}

/**
 * Лучше переписать это так.
 */
interface Logger {
    public function Log();
}

class Log implements Logger {
    public function Log()
    {
        // TODO: Implement Log() method.
    }
}

class Product {
    public function writeToLog(Logger $logger)
    {
        $logger->log();
    }
}