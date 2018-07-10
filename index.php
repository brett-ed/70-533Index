<html>
<body>
   <h1>Hello world from the <?php echo getenv("Env") ?> slot</h1>
   <ul>
      <li>Slot message:  <?php echo getenv("slotMessage"); ?></li>
      <li>Api key:  <?php echo getenv("apiKey"); ?></li>
      <li>Default conn string:  <?php echo getenv("SQLAZURECONNSTR_DefaultConnString"); ?></li>
      <li>Slot conn string:  <?php echo getenv("SQLAZURECONNSTR_SlotConnString"); ?></li>
   </ul>
   
   <h1><b>This change was sycnched to staging and then <i>auto-swapped</i> to production.</b></h1>
</body>
</html>
