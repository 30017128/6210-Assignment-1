<h1>SCP Form</h1>
<?php include 'nav.php' ?>
<?php include 'connection.php' ?>
<?php $page = basename($_SERVER['PHP_SELF']);?>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

<body class="container bg-secondary">
</body>
    <div class="row bg-secondary">
        <div  class="col bg-secondary">
        <br>
        <br>
        <h1>Enter new SCP Subject Form</h1>
        <form name="insert" method="POST" action="connection.php" class="form-group">
            <label>Enter Subject Number</label>
            <br>
            <input type="text" name="ItemNum" class="form-control" placeholder="SCP-###" required>
            <br>
            <label>Enter Subject Class</label>
            <br>
            <input type="text" name="ObjectClass" class="form-control" placeholder="Euclid, Safe, Keter, Thaumiel, Neutralized" required>
            <br>
            <label>Enter Link To Subject Image</label>
            <br>
            <input type="text" name="SubjectImage" class="form-control" placeholder="Use following format: images/image_name.(gif, jpg, png)">
            <br>
            <label>Enter Description Of Subject</label>
            <br>
            <textarea name="DescriptionOf" rows="10" class="form-control" required>Separate Paragraphs with \n</textarea>
            <br>
            <br>
            <label>Enter SCP Procedures</label>
            <br>
            <textarea name="SCPProcedures" rows="10" class="form-control" requried>Separate Paragraphs with \n</textarea>
            <br>
            <input type="submit" class="btn btn-dark" name="submit" value="Submit Subject Data">
            </form>
        </div>
    </div>

   