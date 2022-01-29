<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <script src="tinymce.min.js" referrerpolicy="origin"></script>

    <script>
        tinymce.init({
            selector: '#mytextarea'
        });
    </script>

</head>

<body>
    <h1>Free Text Editor</h1>
    <form method="post">
        <textarea rows="50" id="mytextarea">Hello, World!</textarea>
    </form>
</body>

</html>