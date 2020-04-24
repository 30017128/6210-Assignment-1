<?php include 'header.php' ?>

<body class="container bg-secondary">
  <?php include 'connection.php' ?>
  <h1>View SCP Subject Files</h1>
  <?php include 'nav.php' ?>
  
            <form class="form form-control-lg" action="index.php" method="POST"> 
                    <select name="scpFile" id="">
                        <?php
                            while($rows = $resultSet->fetch_assoc())
                            {
                                $id2 = $rows['id'];
                                $item_no = $rows['ItemNum'];
                                echo "<option value='$id2'>$item_no</option>";
                            }
                        ?>
                    </select>
                    <button type="submit" class="btn btn-light btn-sm mb-2 ">Select</button>
            </form> 
          <?php while($row = $resultdropdown->fetch_assoc()): ?>
              <?php if($row['id'] == $i):?><br> 
                  <h2>Class Of Object: <?php echo $row['ObjectClass']; ?></h2><br>
                  <h3>Image Of Subject </h3>
                  <img src="<?php echo $row['SubjectImage']; ?>"><br>
                  <h3>SCP: </h3>
                  <p><?php echo $row['SCPProcedures']; ?></p> 
                  <h3>Description Of: </h3> 
                  <p><?php echo $row['DescriptionOf']; ?></p> 
              <?php endif; ?>
          <?php endwhile; ?>
  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>