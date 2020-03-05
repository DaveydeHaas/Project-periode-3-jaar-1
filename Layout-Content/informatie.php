<div class="container-fluid">
  <div class="row">

<div class="col-1"></div>

<div class="list-group col-2" id="myList" role="tablist">
  <a class="list-group-item list-group-item-action active" data-toggle="list" href="#home" role="tab">Home</a>
  <a class="list-group-item list-group-item-action" data-toggle="list" href="#profile" role="tab">Profile</a>
  <a class="list-group-item list-group-item-action" data-toggle="list" href="#messages" role="tab">Messages</a>
  <a class="list-group-item list-group-item-action" data-toggle="list" href="#settings" role="tab">Settings</a>
</div>

<div class="tab-content col-8">
  <div class="tab-pane active" id="home" role="tabpanel">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Consequatur quidem quaerat ipsa totam, odit quod adipisci tempore nemo, sequi ducimus placeat repudiandae dolorum itaque incidunt.</div>
  <div class="tab-pane" id="profile" role="tabpanel">..2.</div>
  <div class="tab-pane" id="messages" role="tabpanel">3...</div>
  <div class="tab-pane" id="settings" role="tabpanel">.4..</div>
</div>

<div class="col-1"></div>

</div>
</div>

<script>
  $(function () {
    $('#myList a:last-child').tab('show')
  })
</script>