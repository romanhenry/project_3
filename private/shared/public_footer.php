<?php

echo"    <footer>
      <p>Retirement Calculator, Copyright &copy; " . date("Y") . "</p>
    </footer>
  </body>
</html>";

//this calls the function to close the database
db_disconnect($database);

?>
