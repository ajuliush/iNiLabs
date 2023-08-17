<?php

// Define a logging interface
interface Logger {
    public function log($message);
}

// Create classes that implement the Logger interface
class FileLogger implements Logger {
    private $logFile;
    
    public function __construct($logFile) {
        $this->logFile = $logFile;
    }
    
    public function log($message) {
        file_put_contents($this->logFile, $message . "\n", FILE_APPEND);
    }
}

class ConsoleLogger implements Logger {
    public function log($message) {
        echo $message . "\n";
    }
}

// Using the logging classes
$fileLogger = new FileLogger("log.txt");
$fileLogger->log("This is a log entry from the file logger.");

$consoleLogger = new ConsoleLogger();
$consoleLogger->log("This is a log entry from the console logger.");

?>
