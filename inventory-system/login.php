<!DOCTYPE html>
<html>
<head>
<title>Inventory Login</title>

<style>
body{
margin:0;
height:100vh;
display:flex;
justify-content:center;
align-items:center;
font-family:Segoe UI, sans-serif;

/* Gradient background */
background:linear-gradient(135deg,#0f172a,#1e3a8a,#38bdf8);
}

.login-box{
width:380px;
padding:40px;
background:white;
border-radius:15px;
box-shadow:0 10px 30px rgba(0,0,0,0.3);
text-align:center;
animation:fadeIn 0.8s ease;
}

@keyframes fadeIn{
from{opacity:0; transform:translateY(-20px);}
to{opacity:1; transform:translateY(0);}
}

.login-box h2{
margin-bottom:25px;
color:#0f172a;
}

input{
width:100%;
padding:12px;
margin:10px 0;
border:1px solid #ddd;
border-radius:8px;
outline:none;
transition:0.3s;
}

input:focus{
border-color:#38bdf8;
box-shadow:0 0 8px rgba(56,189,248,0.4);
}

button{
width:100%;
padding:12px;
background:linear-gradient(90deg,#38bdf8,#2563eb);
color:white;
border:none;
border-radius:8px;
font-size:16px;
cursor:pointer;
transition:0.3s;
}

button:hover{
transform:scale(1.05);
}

.footer{
margin-top:15px;
font-size:12px;
color:#777;
}
</style>

</head>

<body>

<div class="login-box">

<h2>🔐 Inventory Login</h2>

<form method="POST" action="auth.php">

<input type="text" name="username" placeholder="Username" required>

<input type="password" name="password" placeholder="Password" required>

<button name="login">Login</button>

</form>

<div class="footer">
Secure Admin System © 2026
</div>

</div>

</body>
</html>
