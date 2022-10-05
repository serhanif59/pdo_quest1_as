
<!doctype html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link  href="style.css" rel="stylesheet">

        <title>List of Friends</title>
    </head>
    <body>
        <div>
            <h1>List of Friends</h1>
            <table id = "friends">
                <tr>
                    <td>Firstname</td>
                    <td>lastname</td>
                </tr>
            </table>
        </div>
        <div>
            <h1>Add friend</h1>
            <form action="index.php" method = "post">
            
                <label for="firstname">First Name</label>
                <input type="text" name="firstname" id="firstname" maxlength=45 required>
                <label for="lastname">Last Name</label>
                <input type="text" name="lastname" id="lastname" maxlength=45 required>
                <input type="submit" value = "Add Friend">
            </form>
        </div>



    </body>
    
</html>

<script>
    function printFriends(firstname,lastname) {
        const table = document.getElementById('friends');
        table.innerHTML += "<tr><td>" + firstname + "</td><td>" + lastname + "</td></tr>";
    }

  </script>

    
