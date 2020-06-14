# Food and Reaction Tracker
A web app that can store information input by the user. The information is sent to a mySQL database and accessed to be displayed on the display page. The information is also sanitized so that special characters are not sent through without being changed to UNICODE to reduce the risk of SQL injection attacks. Different pages have different color schemes and UI set-ups... It could be expanded to have specific users that can log into and create $SESSIONs so that they can access their own data specifically, instead of whatever is put in. It's been left open for the sake of easy input and testing (to ensure accuracy of display).

## Issues & Fixes
Due to a known issue in Chrome, having a link in the footer of the form page (tracker.php) causes the whole page to "jiggle"--shifting all content about three to five pixels to the side either which way. I fixed this by creating a function in my JS file that redirects the user to a designated page that allows for the user to go back should they so desire, and installed the function itself by using an onclick for the sake of brevity in the JS code. There was also an issue with getting the scrollTop animation to cross over to Google Chrome--after a few attempts of re-writing the code, this problem was rectified by clearing cookies on the off-chance the history was affecting the page. It was. 
Sometimes the simplest fixes are the correct ones.

## Technologies
- HTML
- CSS
- Javascript
- PHP
- MySQL

## Libraries
- Bootstrap 3
- JQuery

### Tools
- Visual Studio Code

## Personal Benefits
Further strengthening my knowledge in CRUD operations and accessing my database, as well as figuring out how to correct errors showing up in my CSS and HTML code. Also cross-referenced how my Google Chrome and Firefox responded to the code and did my best to mitigate as many differences as possible, and ensure that my code was referencing my jQuery animations when needed.


## Author
- Alexis Thomas [LinkedIn](https://www.linkedin.com/in/alexishthomas/)