  <nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">Список групп</a>
    </div>
    <ul class="nav navbar-nav">
      <li><a href="index.php?page=main">Студенты</a></li>
      <li class="active"><a href="index.php?page=group_list">Группы</a></li>
    </ul>
  </div>
</nav>

<div class="col-md-12" id="page_list"></div>

<a href="index.php?page=group_edit">+ Добавить группу</a>

<table class="table table-hover">
<thead>
 <tr>
 <th>Группа</th>
 <th></th>
 <th></th>
 </tr>
 </thead>
 <tbody id="groups_table">
 
 </tbody>