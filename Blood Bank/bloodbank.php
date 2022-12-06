<!DOCTYPE html>   
<html>   
<head>  
<meta name="viewport" content="width=device-width, initial-scale=1">  
<title> Login Page </title>  
<style>
div.title {
    text-align: center;
    color: #000;
}   
Body {  

  font-family: Helvetica, Sans-serif;  
  background-image: url('./Login Page.png');
  background-size: contain;
  background-repeat: no-repeat;
  width: 794px;
  height: 715.88px;
  overflow: hidden;
}  
button {   
       background-color: #E7A90f;   
       width: 100%;  
        color: black;   
        padding: 15px;   
        margin: 10px 0px;   
        border: none;   
        cursor: pointer;   
         }     
 input[type=text], input[type=password] {   
        width: 100%;   
        margin: 8px 0;  
        padding: 12px 20px;   
        display: inline-block;   
        border: 2px solid green;   
        box-sizing: border-box;   
    }  
 button:hover {   
        opacity: 0.7;   
    }   
  .cancelbtn {   
        width: auto;   
        padding: 10px 18px;  
        margin: 10px 5px;  
    }   
        
     
 .container {   
        padding: 35px;   
        background-color: #E3646F;
        margin-left: 500px;
        margin-top: 90px;
        margin-bottom: 50px;
        border-radius: 10px;
    }  
.
</style>   
</head>    
<body> 
    <form>  
        <div class="container">   
            <label>Username : </label>   
            <input type="text" placeholder="Enter Username" name="username" required>  
            <label>Password : </label>   
            <input type="password" placeholder="Enter Password" name="password" required>  
            <button type="submit">Login</button>   
            <input type="checkbox" checked="checked"> Remember me   
            <button type="button" class="cancelbtn"> Cancel</button>   
            Forgot <a href="#"> password? </a>   
        </div>   
    </form>     
</body>     
</html>  