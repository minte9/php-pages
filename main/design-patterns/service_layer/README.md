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

=------------------------------------------------

Why Not a Single EmailService?

If you put everything inside EmailService (view rendering, subject, attachments), 
you end up with a class that:
- Has too many responsibilities
- Is harder to test
- Becomes messy once you add more email types
- Is tightly coupled to the internal email-building logic

Example:
What happens when you need a weekly report email, a password reset email, etc.?

If all email-building logic lives inside EmailService, 
that class becomes a "God Class" quickly.