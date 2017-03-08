<%-- 
    Document   : addPost
    Created on : Mar 6, 2017, 3:32:06 PM
    Author     : michaelwiltbank
--%>

<%@page contentType="text/html" pageEncoding="UTF-8"%>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Discussion</title>
    </head>
    <body>
        <h1>${username}, welcome to our discussion</h1>
        <h2>What is the meaning to life?</h2>
            <form method="POST" action="CreatePost">
                <label for="txtcomment">Comment: </label><br />
                <textarea name="txtComment" cols="40" rows="5"></textarea><br />
                <input type="submit" value="Submit" />
            </form>
    </body>
</html>