<?php
  session_start();
  // connecto database
  
  $title = "Index";
  require_once "./template/header.php";
  require_once "./functions/database_functions.php";
  $conn = db_connect();
  $row = select4LatestBook($conn);
?>
     <p><i>Preethi BookStore significantly eases this search process. Just start your searches from here and then head on to the bookstore which you find best and continue with your online book purchase. No more opening multiple windows and searching on each store. 
How do I search for a book?
Check in the Books section from the list of Books available. If you are a publisher and wish to sell books feel free to drop an E-Mail.You will then be directed to search results page. Please be patient with us, while our servers do the hard work to go to stores like Flipkart, Amazon, Infibeam and others and get you the cheapest prices.
Once the page is loaded, click on the book of your choice, and you will get prices and availability from all the online book stores listed on our site. Click on 'Buy' button for the store you like, and continue with your purchase.
If you are looking for more details on the book like book description, book reviews and recommendations, click on 'Book Details' link below the search result of your choice of book.Apart from price comparison, what are else can I do at IndiaBookStore?
We have an active blog, Bookish which features editorial book reviews, author interviews, interesting articles related to books / authors / new book releases etc, all which is Book-ish. A place where bibliophiles can indulge. 
And if you want to win free books, checkout our Giveaway page. We give away free books often, try our next giveaway. And if you dont want to miss them, subscribe to our giveaways email list, we will send you email right before our book book giveaway begins.
</i?</p>
<div>
I found a bug. Your site sucks.
No sweat. Just give me a shout. I'll try and fix it soon. 
I own a bookstore, can I list books here?
If it is an online bookstore, please get in touch through the contact us page. 
If you're an offline bookstore, I may not be able to help much right now.. but I'd still like to hear and discuss any ideas. So feel free to drop a line. 
Don't want to miss out updates from us?
Follow us on Facebook and Twitter for live updates.</div>