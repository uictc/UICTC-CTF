<?php
echo (isset($_GET['username']) && isset($_GET['password']) ? (($_GET['username']=='uictc' && $_GET['password'] == '170845RI') ? 'Hello, uictc <br> this is your !flag{y000uCanSeeMySourc3}' : 'wroooong answer here') : 'you cannot see the flag here, Where is my parameter?');
?>