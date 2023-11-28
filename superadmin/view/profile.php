
<style>
.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  max-width: 500px;
  margin: auto;
  margin-top: 10px;
  text-align: center;
  font-family: arial;
}

.title {
  color: grey;
  font-size: 18px;
}

#button {
  border: none;
  outline: 0;
  display: inline-block;
  padding: 8px;
  color: white;
  background-color: #000;
  text-align: center;
  cursor: pointer;
  width: 100%;
  font-size: 18px;
}



button:hover, a:hover {
  opacity: 0.7;
}
</style>
</head>
<body>


<div class="card">
    <div class="" style="width:100%; font-size: 200px;"><span class="fa fa-user text-primary"></span></div>
    <h1><?=$_SESSION['superadmin_u_nicename']; ?></h1>
    <p class="title text-capitalize">
        <span class="text-primary">ID</span> <?=$_SESSION['superadmin_u_id']; ?>
        <span class="text-primary">Role</span> <?=$_SESSION['superadmin_u_role']; ?>
        <span class="text-primary">Username</span> <?=$_SESSION['superadmin_u_username']; ?><br>
    </p>
  <p>RRAI</p>
  
  <p><a href="index.php?controller=superadmin&function=editprofile" id="button">Edit</a></p>
</div>
