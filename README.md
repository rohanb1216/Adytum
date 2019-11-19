# wt_project

Adytum is a cryptic online game, where players solve puzzles to advance through rooms and collect codes.   
The entire structure of the game is a cluster of rooms that are connected to other rooms on four ends through doors.
Each room consists of a question which on solving gives the user a key. The key will be used to open the doors to 
special rooms. These rooms will give codes for the final puzzle. Out of all the rooms, there will be some rooms that 
will give special keys that will lead to the final puzzle. Solving this puzzle will lead to the Adytum (the sacred 
sanctum). We feel like this is a unique idea, and will provide users with a fun, challenging way to enjoy themselves, 
while improving their problem solving abilities.  

Backend   
Set up mysql json database  
Accept json files and process them  
Logic for loading the json file every user login  
Save all the answers in the database  
Method to check the given answer from the database using AJAX  
  
**Leaderboards database(consists of time taken to solve all the questions) - maybe get the json file which would consist of final   time after the player has finished the game, then put the final time and the username into the database  

Frontend  
Get started page in home to redirect to the game/room page only if user is logged in.(else redirect to login page)  
AJAX, jquery for saving the game state every minute or so   
Player object to be made properly  
Fix all navigation links  
Questions to be written and the logic for room navigation  
Fix logout css  
fix about, contactus , faq and leaderboards pages.  




* fix logout css, home get started/play button redirection
* start a timer after the user has satrted playing the game.
* make the frontend for the player object and logic for room traversal
* add all the questions(make dummies first i guess)
* start hosting the json database in mysql
* logic for json structure(from the player object ofc)
* making the json format for each player and sending it to the backend(PHP in this case) every minute or so the player starts playing the game(AJAX, jquery)
* make database for questions and answers(questionID , answer)
* frontend logic to verify if its correct(AJAX,jquery)
* When user finishes the game put to leaderboards(if really required based on time)
* Fix all links to leaderboards, contactus, aboout,etc. Maybe add footers and stuff on each view.


Host the website finally
