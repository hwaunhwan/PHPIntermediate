<?php
// Quiz: Write 'function extract_color' that takes in a string and does the following:
// If the string equals "red or "blue" return that color
// Otherwise, return empty string

function extract_color($str){
    if ($str == "red") {     //or if ($str == "blue" || $str == "red") return $str;
        return "red";
    } if ($str == "blue"){
        return "blue";
    } else return "";
}

echo extract_color("blue");

//Blog project

// Make posts
// Date added to posts
// Delete/ Edit posts
// Search (index.php)
// edit post
// post summery (summary.php
// images
// social buttons
// comments

//Files we need (all files has access to database)


// Step 1

// Create a database schema
//       What tables are we going to need?
//       What columns will they have?
//       What are the relationships between the tables?
//       Are there any columns in one table that correspond to columns in another?


// Step 2

// Implement database connection
//       Write db_info.php that contains the MySQ/L server name, username, password and database name
//       Also create an instance of 'new mysqli()' for the other pages to INCLUDE


// Step 3

// Implement post insertion
//  Front End
//       Create edit_post.php
//       Form with a text box for author, a huge text box for the post body and a submit button
//       A heading "Create Post" or similar
//       Some text describing how to write a post
//  Back End:
//       Check if form was submitted
//       Grab values from the text fields
//       Input validation - make sure all fields were filled out
//       Insert a new row into the database


// Step 4

// Reading
//       Create index.php that includes the db_info.php from above
//       Select all blog posts from mysql
//       Iterate through the result with 'foreach' and display each post (title, date, author, and post body)
//       Create HTML tags for the page layout  but no styling yet


// Step 5

// Searching
//       Create a search form with 1 text box and a submit button
//       When form is submitted, run a SELECT query with a WHERE that checks for posts matching the search box
//       Displaying the posts is the same as above


// Step 6

// Summary
//       Create summary.php


/*
CREATE DATABASE Blog
USE Blog
CREATE TABLE posts (id INT NOT NULL AUTO_INCREMENT, title TEXT, author TEXT, date DATETIME, contents TEXT, PRIMARY KEY(id));   //not null means that the column has to have a value
CREATE TABLE tags (id INT NOT NULL AUTO_INCREMENT, post_id INT, tag TEXT, PRIMARY KEY(id));



