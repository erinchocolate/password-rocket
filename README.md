# Password Rocket

## Overview

Password Rocket is a password-generator web app built in HTML, Tailwind CSS, JavaScript, PHP Laravel, and MySQL, deployed using AWS Beanstalk and RDS.

Features:

- Generate passwords based on the user’s condition and length choice
- Copy generated password to the system clipboard
- Save generated password to database
- Sign up with user name, email, and password
- Log in with email and password
- Check saved passwords after login
- Delete saved passwords
- Update password information

### Demo

Generate password

![demo1](https://github.com/erinchocolate/password-rocket/blob/master/demo/generate_aws.gif)

Authenticate and login

![demo1](https://github.com/erinchocolate/password-rocket/blob/master/demo/login_aws.gif)

Save, update and delete password

![demo1](https://github.com/erinchocolate/password-rocket/blob/master/demo/save_aws.gif)

### Continued development

- Only allow logged-in users to save passwords.
- Link passwords to specific users. Currently, all users can update and delete passwords

### References

**Design system**

https://www.frontendmentor.io/challenges/password-generator-app-Mr8CLycqjh

**Icon**

https://www.freecodecamp.org/news/how-to-add-font-awesome-icons-to-your-buttons/

**Range Slider**

https://www.w3schools.com/howto/howto_js_rangeslider.asp

https://stackoverflow.com/questions/10004723/html5-input-type-range-show-range-value

**Copy to clipboard**

https://www.freecodecamp.org/news/copy-text-to-clipboard-javascript/

**Add JavaScript to Laravel**

https://www.youtube.com/watch?v=0mVOosQfVKA

**Pass data from website to Laravel**

https://stackoverflow.com/questions/16036041/can-a-html-button-perform-a-post-request

https://5balloons.info/example-of-vanilla-javascript-fetch-post-api-in-laravel

https://stackoverflow.com/questions/46466167/laravel-5-5-ajax-call-419-unknown-status
