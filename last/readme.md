# make database in phpmyadmin
- dbname = last
- table = userdata
- 5 rows = id (ai = auto increment, primary), name(varchar 100), email(100), mobile(varchar 20), password(255)
- table done.

# update
- create form and add div for each name, email, mobile, password which contain label and input tags.
- before the end of form add button of submit
### connect
- making connection with db
- make if statement to check db has no error(open db.php only)
- include it into update file
- check form set to submit then store data into it.
- make variables of each to store all data as variable. ex. $name = $_POST['name']; 
- use name in tag as var of it.name="name"
- add if else for error. if($conn->connect_errno); {...}
- close the query

# Read data  