<?php

if(isset($_SESSION['message'])){
?>

<div class="alert alert-success alert-dismissible fade show" role="alert">
  <strong>Hey!</strong> <?=$_SESSION['message'];?>
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
<script type="text/javascript">
   setTimeout(function() {
        window.location.href=window.location.href;
    },6000);
</script>

<?php

 unset($_SESSION['message']);
}
?>