Example that simply simulate the action of sending an email by printing text.
This shows the Service Layer Pattern clearly.

You move all email logic to a dedicated class.
Controllers stay clean, emails become testable.

-------------------------------------------------

Project Folder Structure (PSR-4 Compatible)

project/
│
├── composer.json
├── vendor/                (created after composer install)
│
├── src/
│   ├── Email/
│   │   ├── GenericEmail.php
│   │   └── EmailService.php
│   │
│   └── App.php            (example controller-like file)
│
└── index.php  

-------------------------------------------------

composer install
composer dump-autoload