function myFunction() {
  // Some code here that might throw an exception
  try {
    // Code that might throw an exception
  } catch (Exception $e) {
    echo "An error occurred: " . $e->getMessage();
  }
}

myFunction();