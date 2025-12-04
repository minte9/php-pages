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



composer install
composer dump-autoload