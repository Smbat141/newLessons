<!Doctype>
<html>
    <head>
        <title>New lessons</title>
    </head>
    <body>
        <form action="/pages" method="post">
            <span>Name</span>
            <input type="text" name="text" >
            <hr>
            <span>Comment</span>
            <textarea  name="textarea" ></textarea>
            <hr>
            <input type="submit" name="button">
            {{ csrf_field() }}
        </form>

    </body>
</html>