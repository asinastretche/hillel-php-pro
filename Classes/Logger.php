<?php

interface LogFormatter {
    public function format(string $message): string;
}

interface LogDelivery {
    public function deliver(string $formattedMessage): void;
}

class RawFormatter implements LogFormatter {
    public function format(string $message): string {
        return $message;
    }
}

class DateFormatter implements LogFormatter {
    public function format(string $message): string {
        return date('Y-m-d H:i:s') . ' ' . $message;
    }
}

class DetailedDateFormatter implements LogFormatter {
    public function format(string $message): string {
        return date('Y-m-d H:i:s') . ' ' . $message . ' - With some details';
    }
}


class EmailDelivery implements LogDelivery {
    public function deliver(string $formattedMessage): void {
        echo "Вывод формата ({$formattedMessage}) по имейл";
    }
}

class SmsDelivery implements LogDelivery {
    public function deliver(string $formattedMessage): void {
        echo "Вывод формата ({$formattedMessage}) в смс";
    }
}

class ConsoleDelivery implements LogDelivery {
    public function deliver(string $formattedMessage): void {
        echo "Вывод формата ({$formattedMessage}) в консоль";
    }
}

class Logger {
private LogFormatter $formatter;
private LogDelivery $delivery;

public function __construct(LogFormatter $formatter, LogDelivery $delivery) {
    $this->formatter = $formatter;
    $this->delivery = $delivery;
}

public function log(string $message): void {
    $formattedMessage = $this->formatter->format($message);
    $this->delivery->deliver($formattedMessage);
    }
}


$formatter = new RawFormatter();
$delivery = new SmsDelivery();
$logger = new Logger($formatter, $delivery);

$logger->log('Emergency error! Please fix me!');
