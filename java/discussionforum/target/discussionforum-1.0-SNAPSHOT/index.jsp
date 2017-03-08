<%-- 
    Document   : index
    Created on : Mar 6, 2017, 2:53:41 PM
    Author     : michaelwiltbank
--%>

<%@page contentType="text/html" pageEncoding="UTF-8"%>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Discussion Forum</title>
    </head>
    <body>
        <h1>Sign In to Contribute to the discussion</h1>
        <form method="post" action="Signin">
            <label for="txtUsername">Username:</label>
            <input type="text" id="txtUsername" name="txtUsername"></input>
            <br />
            <label for="txtPassword">Password:</label>
            <input type="password" id="txtPassword" name="txtPassword"></input>
            <br />
            <input type="submit" value="Sign In" />
        </form>
    </body>
</html>