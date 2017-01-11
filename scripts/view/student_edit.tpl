    <nav class="navbar navbar-default">
	  <div class="container-fluid">
	    <div class="navbar-header">
	      <a class="navbar-brand" href="index.php?page=main">Вернуться к списку студентов</a>
	    </div>
	  </div>
	</nav>

    <div class="row">
      	<form class="form-horizontal">
		  <div class="form-group">
		    <label for="inputSecondName" class="col-md-offset-2 col-md-2 control-label">Фамилия:</label>
		    <div class="col-md-4">
		      <input type="text" class="form-control" id="inputSecondName" placeholder="Введите фамилию">
		    </div>
		  </div>

		  <div class="form-group">
		    <label for="inputFirstName" class="col-md-offset-2 col-md-2 control-label">Имя:</label>
		    <div class="col-md-4">
		      <input type="text" class="form-control" id="inputFirstName" placeholder="Введите имя">
		    </div>
		  </div>

		  <div class="form-group">
		    <label for="inputMiddleName" class="col-md-offset-2 col-md-2 control-label">Отчество:</label>
		    <div class="col-md-4">
		      <input type="text" class="form-control" id="inputMiddleName" placeholder="Введите отчество">
		    </div>
		  </div>

		  <div class="form-group">
		    <label for="inputGroup" class="col-md-offset-2 col-md-2 control-label">Группа:</label>
		    <div class="col-md-4">
		      <select class="form-control" id="group_select">
		        
		      </select>
		    </div>
		  </div>

		  <div class="form-group">
		    <div class="col-md-offset-4 col-md-1">
		      <input type="button" class="btn btn-default" value="Сохранить" onclick="student_add();">
		    </div>
		    <div class="col-md-1">
		      <input type="button" class="btn btn-default" value="Удалить" onclick="curent_student_del();">
		    </div>
		  </div>
		</form>
    </div>

