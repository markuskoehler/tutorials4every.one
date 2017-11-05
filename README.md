![Tutorials4Every.One Logo](https://github.com/markuskoehler/tutorials4every.one/raw/master/public/images/t4e_logo.fw.png "Tutorials4Every.One Logo")

# tutorials4every.one
As the name says... Tutorials for everyone.

## The Idea
The idea for this project was born because of two incidents: First I [discovered][1] that many tutorials out there, no matter what the topic, are either incomplete or confusing - and I am planning to change that.
Second, my girlfriend pointed me to the fact that she doesn't understand web development at all, but wanted to get a first idea of what it is about. So I thought, there should be a way to publish tutorials about one topic but for different audiences.
That's what T4E is about: Make any possible topic appealing for everyone!

## Structure
This repository contains the Laravel PHP Framework, providing the following parts of the project:

- tutorials4every.one: The public website part of the project
- learn.tutorials4every.one: The user area & dashboard for students
- teach.tutorials4every.one: The user area & dashboard for teachers
- admin.tutorials4every.one: The admin area for ... wait for it ... admins

Furthermore there's a WordPress instance located at write.tutorials4every.one which is used to actually write & publish the tutorial articles.

This Laravel instance interfaces with the WordPress instance on a database level (leveraging the Corcel package).

## Security Vulnerabilities
If you should discover any security vulnerability within this project, please send an e-mail to Markus Koehler via info@koehler.pro. All security vulnerabilities will be promptly addressed.

## License
This project is open-sourced software licensed under the MIT license (see [LICENSE][1] file).

[1]: https://www.facebook.com/markuskoehler93/posts/10214692376925183
[2]: LICENSE