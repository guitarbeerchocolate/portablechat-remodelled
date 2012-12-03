<script>
(function()
{
  $('input:text:visible:first').focus();  
  $('form#chat').submit(function()
  {
    thisForm = $(this);
    thisId = thisForm.find('#myid');
    thisMessage = thisForm.find('#mymessage');
    thisForm.hide();
    $('img').show();    
    $.post('posthandler.class.php',
    {
      method:'saveMessage',
      myid:thisId.val(),
      mymessage:thisMessage.val()
    }, function(data)
    {
      $('img').hide(),
      thisForm.show(),      
      $(data).hide().prependTo("#entries").slideDown(1500);
    });
    return false;
  });
})();
</script>