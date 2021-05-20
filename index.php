<html> 
  
<head> 
    <meta charset="UTF-8"> 
  
    <style> 
        h3 { 
            text-align: center; 
        } 
  
        img { 
            display: block; 
            margin: auto; 
            height: 150px; 
            width: 150px; 
        } 
  
        .input { 
            margin: 6px; 
            padding: 10px; 
            display: block; 
            margin: auto; 
            color: palevioletred; 
            font-size: 30px; 
        } 
  
        input { 
            width: 90%; 
            display: block; 
            margin-left: 12px; 
            background: none; 
            background-color: lightyellow; 
        } 
  
        select { 
            width: 90%; 
            display: block; 
            margin-left: 12px; 
            background: none; 
            background-color: lightyellow; 
        } 
  
        #heading { 
            font-family: cursive; 
            text-align: center; 
            color: green; 
            padding-top: 20px; 
  
        } 
  
        #form_page { 
            height: 500px; 
            width: 50%; 
            display: flex; 
            flex-wrap: wrap; 
            flex-direction: row; 
            margin: auto; 
  
        } 
  
        #form_body { 
            border-radius: 12px; 
            height: 350px; 
            width: 450px; 
            background-color: beige; 
            border: 1px solid pink; 
            margin: auto; 
            margin-top: 12px; 
        } 
  
        #text { 
            color: red; 
            width: 100px; 
        } 
  
        #head { 
            border-bottom: 2px solid red; 
            height: 100px; 
            background-color: aliceblue; 
        } 
  
        #submit { 
            background-color: white; 
            width: 70px; 
        } 
    </style> 
</head> 
  
<body> 
    <form method="post" action="rivi.php"> 
  
        <div id="form_page"> 
  
            <div id="form_body"> 
                <div id="head"> 
                    <h1 id="heading">Rivi Group</h1> 
                </div> 
                <br /> 
                <div id="input_name" class="input"> 
                    <input id="name" type="text"
                        Placeholder="Text" name="name"
                        required> 
                </div> 
                <div id="input_class" class="input"> 
                    <input type="text" placeholder= 
                        "Subject" name="branch" required> 
                </div> 
                 <div id="input_class" class="input"> 
                    <input type="text" placeholder= 
                        "Topic" name="topic" required> 
                </div> 
                 <div id="input_class" class="input"> 
                    <input type="text" placeholder= 
                        "Difficulty" name="difficulty" required> 
                </div>
                 <div id="input_class" class="input"> 
                    <input type="text" placeholder= 
                        "Marks" name="marks" required> 
                </div> 
               <input name="master_grade" type="text" placeholder="master_grade"> 
               <inut tme="text1" type="text" placeholder="text1">
                <inut tme="text2" type="text" placeholder="text2">
                <div id="input_class" class="input"> 
                    <input type="text" placeholder= 
                        "percentage" name="percentage" required> 
                </div> 
                <div id="input_class" class="input"> 
                    <input type="text" placeholder= 
                        "grade" name="grade" required> 
                </div> 
                

  
                <div class="id input"> 
                    <input id="submit" type="submit"
                        name="submit" value="submit"
                        onclick="on_submit()"> 
                </div> 
            </div> 
        </div> 
    </form> 
</body> 
   
</html> 
