<!DOCTYPE html>
<html>
    <head>
      <style type="text/css">
      h1{
          color:black;
          text-align: center;
          background-color: yellow;
      }
      .container {
        border: 0px solid rgb(15, 2, 2);
        margin: 1px 90px;
        padding: 75px;
        width: 33%;
        border-radius: 28px;
    }
    .form-group input {
        font-family:'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
        text-align: center;
        display: block;
        width: 350px;
        padding: 1px;
        border: 1px solid black;
        margin: 10px auto;
        font-size: 25px;
        border-radius: 12px;
    }
    .container button {
        display: block;
        width: 74%;
        margin: 2px auto;
    }
    .btn {
        font-family:  cursive;
        margin: 0px 9px;
        background-color: black;
        color: white;
        padding: 4px 10px;
        border: 2px solid yellow;
        border-radius: 10px;
        font-size: 20px;
        
        }
        .container h1 {
        text-align: center;
    }
    #s2{
        font-family:'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
        text-align: center;
        display: block;
        width: 350px;
        padding: 1px;
        border: 1px solid black;
        margin: 10px auto;
        font-size: 25px;
        border-radius: 7px;
        height: 250px;
        background-color:khaki;
    }
    #s2 #s3{
        
        
    }
    img{
        width: 22px;
          height: 23px;
          border-radius: 8px;
          
    }
      p{
          color: white;
          font-size: 20px;
          text-align: center;          
          
      }
      h3{
          font-size: 30px;
          font-family: cursive;
          background-color: white;
          color:red;
          text-align: center;
      }
      a{
          text-decoration-line: none;
          font-size: 30px;
      }
      #s1
      {
          border: 1px solid;
          border-color: black;
          background-color: black;
      }
    </style>
    </head>
    <body bgcolor="pink">
        
        <h1> Contact Us  </h1>
        <div id=s1>
            <p>  <b>Call</b> - 8708271878 &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;<b>E-mail </b> &nbsp;ankitgarg3738@gmail.com
                &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <a href="http://localhost/project/index.php?"> Sign in </a>
                
            </p>
        </div>
        <h3> Enquiry Form &nbsp;&nbsp;
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
              <a href="http://localhost/project/home.php"> Home </a></h3>
        <div class="container">
            
             <form action=" http://localhost/db/index.php" method="get" onsubmit="return validation()">
                 <div class="form-group">
                     <input type="text" name="" placeholder="Enter your Name">
                 </div>
                
                 <div class="form-group">
                     <input type="text" name="" placeholder="Enter your Email Id">
                 </div>
                 <div class="form-group">
                     <input type="text" name="" placeholder="Enter your Phone Number">
                 </div> 
                 <div id=s2>
                     <h4> Enter Your Message</h4>
                     <div id=s3>
                         <input type="text" style="font-size: 18pt; height: 70px; width:280px; ">
                     </div>
                 </div>
                 
                 
                 
                 <button class="btn">Submit</button>
             </form>
         </div>
        
    </body>
</html>