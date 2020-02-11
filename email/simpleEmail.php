<?php
$message = "Line 1\nLine 2\nLine 3";

// Send
if(mail('andregpilakis@gmail.com', 'My Subject', $message)) {
  echo "Sent";
}
else {
  echo "Not Sent";
}
?>