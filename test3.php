<!DOCTYPE HTML> 
<html> 
    <head> 
        <title> 
            How to add a parameter to the URL
        </title>     
    </head> 
      
    <body style = "text-align:center;">
           
        <h1 style = "color:green;" > 
            GeeksForGeeks 
        </h1>
          
        <p id = "GFG_UP" style =
            "font-size: 15px; font-weight: bold;">
        </p>
          
        <button id="r1" name="id" value="1" onclick = "GFG_Fun()">
            router1
        </button>
        <button  onclick = "GFG_Fun()">
            router2
        </button>
        <button onclick = "GFG_Fun()">
            router3
        </button>
          
        <p id = "GFG_DOWN" style =
            "color:green; font-size: 20px; font-weight: bold;">
        </p>
          
        <script type="text/javascript">
            var r1=document.getElementById('r1');
            var up = document.getElementById('GFG_UP');
            var url = new URL(window.location.href);
            up.innerHTML = url;
            var down = document.getElementById('GFG_DOWN');
              
            function GFG_Fun() {
                
                url.searchParams.append(r1.name, r1.value);
                down.innerHTML = url;
                var data=url.searchParams.get('id');
                console.log(data);
                <?php $abc = "<script>document.write(data)</script>"?>
            }
        </script> 
        <?php echo  'php_'.$abc;?>
    </body> 
</html>                    