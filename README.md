# Premier League Web PAge Design Using Basic Web Technologies (HTML, JS, CSS)
A Premier League website made for my mini project, it makes use of all the front end web technologies - HTML, Javascript and CSS, the backend is not fully focused on but a basic implementation of Login and Sign-up is made using PHP and SQL.

The logout feature on the backend is a pseudo one , in other words, it actually doesn't work, it redirects you to a duplicate page which doesn't show your name as it does when you are logged in.

# Start with the homepage.html ( not homepage2.html, it needs a database to be created to work properly)

For the sign up and Login to work, the database with the following details has to be created-

Database name- pl

table name- users

number of columns- 8.

colums names-
  id (with auto increment),
  first,
  last,
  mail,
  team,
  username,
  password,
  pp
 
 That's it! Once you have set up the database , you can start using the backend features too. 
 
 This project is shared to help you with your first project, it is to be taken as an example and not to be plagiarized.

# CODE FOR CREATION OF TABLE 
CREATE TABLE users(id integer PRIMARY KEY AUTO_INCREMENT, FNAME TEXT, LNAME TEXT,
MAIL TEXT, TEAM TEXT,USERNAME TEXT, PASSWORD TEXT);

INSERT DATA IN IT AND IMPORT SQL FILE AND RUN PROGRAM.
# THANK-YOU....!!!
