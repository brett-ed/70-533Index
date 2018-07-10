<html>
<body>
   <h1>Hello world from Github in a PHP file!!</h1>
   <ul>
      <li>Slot message:  <?php echo getenv("slotMessage"); ?></li>
      <li>Api key:  <?php echo getenv("apiKey"); ?></li>
      <li>Default conn string:  <?php echo getenv("SQLAZURECONNSTR_DefaultConnString"); ?></li>
      <li>Slot conn string:  <?php echo getenv("SQLAZURECONNSTR_SlotConnString"); ?></li>
   </ul>
</body>
</html>
