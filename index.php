<html>
<body>
   <h1>Hello world from the <?php echo getenv("Env") ?> slot</h1>
   <ul>
      <li>Slot message:  <?php echo getenv("slotMessage"); ?></li>
      <li>Api key:  <?php echo getenv("apiKey"); ?></li>
      <li>Default conn string:  <?php echo getenv("SQLAZURECONNSTR_DefaultConnString"); ?></li>
      <li>Slot conn string:  <?php echo getenv("SQLAZURECONNSTR_SlotConnString"); ?></li>
   </ul>
   
   <h1><b>This change was synched to staging and then <i>auto-swapped</i> to production.</b></h1>
   
   <h1>Now, a PostDeploymentAction script has been set by :</h1>
   <ul> 
      <li>accessing kudu (via the .scm.  url extension.</li>
      <li>Accessing the Debug Console menu, choosing CMD</li>
      <li>Drill down to Site/deployments/tools</li>
      <li>Create a new folder called PostDeploymentActions</li>
      <li>Add any powershell scripts that should be run after a successful deploy.</li>
   </ul>
   
   <h1>Yet another change to see if I can get the post deployment script to throw an exception.
</body>
</html>
