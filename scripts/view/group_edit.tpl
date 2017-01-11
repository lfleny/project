<nav class="navbar navbar-default">
	  <div class="container-fluid">
	    <div class="navbar-header">
	      <a class="navbar-brand" href="index.php?page=group_list">Вернуться к списку групп</a>
	    </div>
	  </div>
	</nav>

    <div class="row">
      	<form class="form-horizontal">
		  <div class="form-group">
		    <label for="inputGroupNumb" class="col-md-offset-2 col-md-2 control-label">Номер группы:</label>
		    <div class="col-md-4">
		      <input type="text" class="form-control" id="inputGroupNumb" placeholder="Введите номер группы">
		    </div>
		  </div>

		  <div class="form-group">
		    <div class="col-md-offset-4 col-md-1">
		      <input type="button" class="btn btn-default" value="Сохранить" onclick="group_add();">
		    </div>
		    <div class="col-md-1">
		      <input type="button" class="btn btn-default" value="Удалить" onclick="group_del($('#inputGroupNumb').val());">
		    </div>
		  </div>
		</form>
    </div>

