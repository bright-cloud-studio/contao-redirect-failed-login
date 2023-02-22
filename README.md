# Bright Cloud Studio's Contao Redirect Failed Login
## Extends the default Contao Login form front end module to allow selecting of a page to foward users to after failed login attempts

This package was created due to a client's website having multiple login errors. Users were forgetting their username, forgetting their password, or not being case sensitive when entering their details. The solution, set up a page with detailed instructions that users are forwarded to after a failed login attempt.

## Setup Directions
Once this package is installed, when setting up a 'Login form' module you will find a new option in the "Redirect settings" section titled "Redirect (Login Failed) page". Use the PageTree navigation and select the desired page you would like your users to be sent to once they fail a login attempt.

![Login form - New setting](https://raw.githubusercontent.com/bright-cloud-studio/contao-redirect-failed-login/main/images/tutorial_1.jpg)

## Usage
If the 'Login form' module has a fail page selected, users will automatically be forwarded to the selected page once they fail a login attempt. There is no other setup needed, this package extends the existing 'Login form' module.
