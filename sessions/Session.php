Session

A session is a special variable which is used to store a user's data on the server computer. 

	Limitations of Web Cookies 
		- A cookie can store text data only.
		- A cookie trivial amount of data only.
		- A cookie's data can easily be manipulated by the end user.
		- A cookie's data can be stolen from a computer and the same information can be used on an another computer.


A session usually overcomes all the above problems of a cookie. As sessions data is stored on the server computer there is no way for a user to access this information.


Functions

1. session_start() : Starts a new session and assigns a new session id to it. If a session is already started no new session will be created.


2. session_unset() : Deletes all data from the session.


3. session_destroy() : Deletes all data from the session and the session will be terminated.



Storing Data in a Session

$_SESSION['key']=value;

e.g.

$_SESSION['username']='Ankit';



Reading Data from Session

$name=$_SESSION['username'];



Deleting Data from Session

unset($_SESSION['username']);


