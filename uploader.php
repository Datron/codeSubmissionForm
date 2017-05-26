<php
echo "Uploader Socket initialized. Socket waiting for submissions.";
while (true) {
$ipaddress = "192.168.0.109";
$port = 49991;

if(!($socket = socket_create(AF_INET,SOCK_STREAM,SOL_TCP))) {
    echo "failed to create socket".socket_strerror();
  }
  if (socket_bind($socket,$ipaddress,$port) === false){
      die("failed to bind socket.");
  }
    while (!socket_listen($socket)) { //wait for a connection
      //code
    }
  $conn = socket_accept($socket);
  if(!(socket_send($conn,base64_encode($site),30000,MSG_EOF))){
    echo "Failure to send site";
  }
  //send stuff to the Socket
}
?>
